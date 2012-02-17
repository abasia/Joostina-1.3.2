<?php
/**
* @package Joostina
* @copyright Авторские права (C) 2008-2010 Joostina team. Все права защищены.
* @license Лицензия http://www.gnu.org/licenses/gpl-2.0.htm GNU/GPL, или help/license.php
* Joostina! - свободное программное обеспечение распространяемое по условиям лицензии GNU/GPL
* Для получения информации о используемых расширениях и замечаний об авторском праве, смотрите файл help/copyright.php.
*/

// запрет прямого доступа
defined('_VALID_MOS') or die();

require_once (JPATH_BASE.'/'.JADMIN_BASE.'/components/com_jce/plugins/plugins.html.php');
require_once (JPATH_BASE.'/'.JADMIN_BASE.'/components/com_jce/plugins/plugins.class.php');

$client = mosGetParam($_REQUEST,'client','');
$cid = mosGetParam($_POST,'cid',array(0));
$id = intval(mosGetParam($_REQUEST,'id',0));
if(!is_array($cid)) {
	$cid = array(0);
}
function access_list($row) {
	$access_list = array(
		mosHTML::makeOption('0',_GUEST),
		mosHTML::makeOption('18','-'._USER_GROUP_REGISTERED),
		mosHTML::makeOption('19','--'._AUTHOR),
		mosHTML::makeOption('20','---'._EDITOR),
		mosHTML::makeOption('21','----'._PUBLISHER),
		mosHTML::makeOption('23','-----'._MANAGER),
		mosHTML::makeOption('24','------'._ADMINISTRATOR),
		mosHTML::makeOption('25','-------'._SUPER_ADMINISTRATOR));
	$lists['access'] = mosHTML::selectList($access_list,'access','class="inputbox" size="1"','value','text',$row->access);
	return $lists['access'];

}
/**
* Compiles a list of installed or defined modules
*/
function viewPlugins($option,$client) {
	global $database,$mainframe;

	$limit = $mainframe->getUserStateFromRequest("viewlistlimit",'limit',$mainframe->getCfg('list_limit'));
	$limitstart = $mainframe->getUserStateFromRequest("view{$option}limitstart",'limitstart',0);
	$filter_type = $mainframe->getUserStateFromRequest("filter_type{$option}{$client}",'filter_type',1);
	$search = $mainframe->getUserStateFromRequest("search{$option}{$client}",'search','');
	$search = $database->getEscaped(Jstring::trim(Jstring::strtolower($search)));

	if($client == 'admin') {
		$where[] = "m.client_id = '1'";
		$client_id = 1;
	} else {
		$where[] = "m.client_id = '0'";
		$client_id = 0;
	}

	// used by filter
	if($filter_type != 1) {
		$where[] = "m.type = '$filter_type'";
	}
	if($search) {
		$where[] = "LOWER( m.name ) LIKE '%$search%'";
	}

	// get the total number of records
	$query = "SELECT COUNT(*) FROM #__jce_plugins AS m".(count($where)?"\n WHERE ".implode(' AND ',$where):'');
	$database->setQuery($query);
	$total = $database->loadResult();

	require_once (JPATH_BASE.	'/'.JADMIN_BASE.'/includes/pageNavigation.php');
	$pageNav = new mosPageNav($total,$limitstart,$limit);

	$query = "SELECT m.*, u.name AS editor"
		."\n FROM #__jce_plugins AS m"
		."\n LEFT JOIN #__users AS u ON u.id = m.checked_out"
		.(count($where)?"\n WHERE ".implode(' AND ',$where):'')
		."\n GROUP BY m.id"
		."\n ORDER BY m.row ASC, m.ordering ASC, m.type ASC, m.name ASC"
		."\n LIMIT $pageNav->limitstart, $pageNav->limit";
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	if($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	// get list of Positions for dropdown filter
	$query = "SELECT type AS value, type AS text"
			."\n FROM #__jce_plugins"
			."\n WHERE client_id = '$client_id'"
			."\n GROUP BY type"
			."\n ORDER BY type";
	$types[] = mosHTML::makeOption(1,_SEL_TYPE);
	$database->setQuery($query);
	$types = array_merge($types,$database->loadObjectList());
	$lists['type'] = mosHTML::selectList($types,'filter_type','class="inputbox" size="1" onchange="document.adminForm.submit( );"','value','text',$filter_type);

	JCE_plugins::showPlugins($rows,$client,$pageNav,$option,$lists,$search);

}
/**
* Saves the module after an edit form submit
*/
function savePlugins($option,$client,$task) {
	global $database;

	$params = mosGetParam($_POST,'params','');
	if(is_array($params)) {
		$txt = array();
		foreach($params as $k => $v) {
			$txt[] = "$k=$v";
		}

		$_POST['params'] = mosParameters::textareaHandling($txt);
	}

	$row = new jcePlugins($database);

	$row->editable = 1;

	if(!$row->bind($_POST)) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	if(!$row->check()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	if(!$row->store()) {
		echo "<script> alert('".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	$row->checkin();
	if($client == 'admin') {
		$where = "client_id='1'";
	} else {
		$where = "client_id='0'";
	}
	$row->updateOrder("type = '$row->type' AND ordering > -10000 AND ordering < 10000 AND ( $where )");

	switch($task) {
		case 'apply':
			$msg = _CHANGES_FOR_PLUGIN.' '.$row->name.' '._SUCCESS_SAVE.' '.$row->name;
			mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=editplugin&hidemainmenu=1&id='.$row->id,$msg);
			break;
		case 'save':
		default:
			$msg = _PLUGIN.' '.$row->name.' '._SUCCESS_SAVE;
			mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=showplugins',$msg);
			break;
	}
}

/**
* Compiles information to add or edit a module
* @param string The current GET/POST option
* @param integer The unique id of the record to edit
*/
function editPlugins($option,$uid,$client) {
	global $database,$my,$mainframe;

	$lists = array();
	$row = new jcePlugins($database);

	// load the row from the db table
	$row->load($uid);

	// fail if checked out not by 'me'
	if($row->isCheckedOut($my->id)) {
		echo "<script>alert('$row->title - "._MODULE_IS_EDITING_BY_ADMIN."'); document.location.href='index2.php?option=$option'</script>\n";
		exit(0);
	}

	if($client == 'admin') {
		$where = "client_id='1'";
	} else {
		$where = "client_id='0'";
	}

	// get list of groups
	if($row->access == 99 || $row->client_id == 1) {
		$lists['access'] = _ADMINISTRATOR.' <input type="hidden" name="access" value="99" />';
	} else {
		// build the html select list for the group access
		//$lists['access'] = mosAdminMenus::Access( $row );
		$lists['access'] = access_list($row);
	}

	if($uid) {
		$row->checkout($my->id);

		$query = "SELECT ordering AS value, name AS text"."\n FROM #__jce_plugins"."\n WHERE plugin = '$row->plugin'".
			"\n AND published > 0"."\n AND type = 'plugin'"."\n ORDER BY plugin";

		$lists['plugin'] = '<input type="hidden" name="plugin" value="'.$row->plugin.
			'" />'.$row->plugin;

		// XML library
		require_once (JPATH_BASE.'/includes/domit/xml_domit_lite_include.php');
		// xml file for module
		$xmlfile = JPATH_BASE.
			'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$row->plugin.'/'.$row->plugin.'.xml';
		$xmlDoc = new DOMIT_Lite_Document();
		$xmlDoc->resolveErrors(true);
		if($xmlDoc->loadXML($xmlfile,false,true)) {
			$root = &$xmlDoc->documentElement;
			if($root->getTagName() == 'mosinstall' && $root->getAttribute('type') =='jceplugin') {
				$element = &$root->getElementsByPath('description',1);
				$row->description = $element?trim($element->getText()):'';
			}
		}
	} else {
		$row->plugin = '';
		$row->type = 'plugin';
		$row->icon = '';
		$row->published = 1;
		$row->description = '';
		$row->access = 18;
		$row->editable = 1;

		$folders = mosReadDirectory(JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/');
		$folders2 = array();
		foreach($folders as $folder) {
			if(is_dir(JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$folder) && ($folder <> 'CVS')) {
				$folders2[] = mosHTML::makeOption($folder);
			}
		}
		$lists['folder'] = mosHTML::selectList($folders2,'folder',
			'class="inputbox" size="1"','value','text',null);
		$xmlfile = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$row->plugin.'/'.$row->plugin.'.xml';
	}

	$lists['published'] = mosHTML::yesnoRadioList('published','class="inputbox"',$row->published);

	// get params definitions
	$params = new mosParameters($row->params,$xmlfile,'jceplugin');

	JCE_plugins::editPlugins($row,$lists,$params,$option);
}
/**
* Saves Access Levels for plugins
* @param array An array of unique category id numbers
*/
function applyAccess($cid = null,$option,$client) {
	global $database,$my;

	$access = mosGetParam($_REQUEST,'access','');

	if(count($cid) < 1) {
		echo "<script> alert('"._CHOOSE_PLUGIN_FOR_ACCESS_MANAGEMENT."'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode(',',$cid);

	if($access != '') {
		$query = "UPDATE #__jce_plugins SET access = '".intval($access)."'"."\n WHERE id IN ( $cids )".
			"\n AND ( checked_out = 0 OR ( checked_out = $my->id ))";
		$database->setQuery($query);
		if(!$database->query()) {
			echo "<script> alert('".$database->getErrorMsg().
				"'); window.history.go(-1); </script>\n";
			exit();
		}

		if(count($cid) == 1) {
			$row = new jcePlugins($database);
			$row->checkin($cid[0]);
		}
	}

	mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=showplugins');
}
/**
* Publishes or Unpublishes one or more modules
* @param array An array of unique category id numbers
* @param integer 0 if unpublishing, 1 if publishing
*/
function publishPlugins($cid = null,$publish = 1,$option,$client) {
	global $database,$my;

	if(count($cid) < 1) {
		$action = $publish?'enabling':'disabling';
		echo "<script> alert('"._CHOOSE_PLUGIN_FOR." $action'); window.history.go(-1);</script>\n";
		exit;
	}

	$cids = implode(',',$cid);

	$query = "UPDATE #__jce_plugins SET published = '".intval($publish)."'"."\n WHERE id IN ( $cids )".
		"\n AND ( checked_out = 0 OR ( checked_out = $my->id ))";
	$database->setQuery($query);
	if(!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg().
			"'); window.history.go(-1); </script>\n";
		exit();
	}

	if(count($cid) == 1) {
		$row = new jcePlugins($database);
		$row->checkin($cid[0]);
	}

	mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=showplugins');
}

/**
* Cancels an edit operation
*/
function cancelEdit($option,$client) {
	global $database;

	$row = new jcePlugins($database);
	$row->bind($_POST);
	$row->checkin();

	mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=showplugins');
}
function cancelPlugins($option,$client) {
	global $database;

	$row = new jcePlugins($database);
	$row->bind($_POST);
	$row->checkin();

	mosRedirect('index2.php?option='.$option);
}
/**
* Remove the selected language
*/
function removePlugin($cid,$option,$client) {

	mosRedirect('index2.php?option=com_jce&task=remove&element=plugins&client='.$client.
		'&cid[]='.$cid);
}
/**
* changes the access level of a record
* @param integer The increment to reorder by
*/
function accessMenu($uid,$access,$option) {
	global $database;

	switch($access) {
		case 'access_guest':
			$access_id = 0;
			break;
		case 'access_registered':
			$access_id = 18;
			break;
		case 'access_author':
			$access_id = 19;
			break;
		case 'access_editor':
			$access_id = 20;
			break;
		case 'access_publisher':
			$access_id = 21;
			break;
		case 'access_manager':
			$access_id = 23;
			break;
		case 'access_administrator':
			$access_id = 24;
			break;
		case 'access_superadministrator':
			$access_id = 25;
			break;
	}

	$row = new jcePlugins($database);
	$row->load($uid);

	$row->access = intval($access_id);

	if(!$row->check()) {
		return $row->getError();
	}
	if(!$row->store()) {
		return $row->getError();
	}
	mosRedirect('index2.php?option='.$option.'&task=showplugins');
}
?>