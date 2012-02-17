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

// ensure user has access to this function
//if (!($acl->acl_check( 'administration', 'edit', 'users', $my->usertype, 'components', 'all' )
// | $acl->acl_check( 'administration', 'edit', 'users', $my->usertype, 'components', 'com_jce' ))) {
//  mosRedirect( 'index2.php', _NOT_AUTH );
//}

DEFINE('_BASE_PATH',dirname(__file__));

require_once ($mainframe->getPath('admin_html'));

require_once (_BASE_PATH.'/layout.php');
require_once (_BASE_PATH.'/layout.html.php');

require_once (_BASE_PATH.'/plugins/plugins.php');
require_once (_BASE_PATH.'/languages/languages.php');
require_once (_BASE_PATH.'/installer/installer.php');

$query = "SELECT id FROM #__mambots WHERE element = 'jce' AND folder = 'editors'";
$database->setQuery($query);
$eid = $database->loadResult();

function cleanInput($string) {
	return preg_replace('/[^a-zA-z._]/i','',$string);
}
switch($task) {
	case 'plugin':
		$query = "SELECT plugin FROM #__jce_plugins WHERE published = 1 AND type = 'plugin'";
		$database->setQuery($query);
		$plugins = $database->loadResultArray();

		$plugin = cleanInput(mosGetParam($_REQUEST,'plugin'));
		if(in_array($plugin,$plugins)) {
			$file = cleanInput(basename(mosGetParam($_REQUEST,'file')));
			$path = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$plugin;
			if(is_dir($path) && file_exists($path.DS.$file)) {
				include_once $path.DS.$file;
			} else {
			echo $path.DS.$file;
				die(_FILE_NOT_FOUND);
			}
		} else {
			die(_PLUGIN_NOT_FOUND);
		}
		break;
	case 'help':
		$file = cleanInput(basename(mosGetParam($_REQUEST,'file')));
		$path = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/libraries/help/'.$file;
		if(file_exists($path)) {
			include_once $path;
		} else {
			die(_FILE_NOT_FOUND);
		}
		break;
	case 'main':
		HTML_JCEAdmin::showAdmin();
		break;
	case 'save':
		saveconfig();
		break;
	case 'config':
		global $client,$eid;
		if($eid) {
			mosRedirect('index2.php?option=com_mambots&client='.$client.'&task=editA&hidemainmenu=1&id='.$eid.'');
		} else {
			mosRedirect('index2.php?option='.$option.'&client='.$client.'',_JCE_CONTENT_MAMBOT_NOT_INSTALLED);
		}
		break;
	case 'editlayout':
		global $client,$eid;
		if($eid) {
			editLayout($option,$client);
		} else {
			mosRedirect('index2.php?option='.$option.'&client='.$client.'',_JCE_CONTENT_MAMBOT_NOT_INSTALLED);
		}
		break;
	case 'savelayout':
		saveLayout($option,$client);
		break;
	case 'applyaccess':
		applyAccess($cid,$option,$client);
		break;
	case 'showplugins':
	case 'plugins':
		global $client,$eid;
		if($eid) {
			viewPlugins($option,$client);
		} else {
			mosRedirect('index2.php?option='.$option.'&client='.$client.'',_JCE_CONTENT_MAMBOT_NOT_INSTALLED);
		}
		break;
	case 'publish':
	case 'unpublish':
		publishPlugins($cid,($task == 'publish'),$option,$client);
		break;
	case 'newplugin':
	case 'editplugin':
		editPlugins($option,$id,$client);
		break;
	case 'saveplugin':
	case 'applyplugin':
		savePlugins($option,$client,$task);
		break;
	case 'canceledit':
		cancelEdit($option,$client);
		break;
	case 'removeplugin':
		removePlugin($cid[0],$option,$client);
		break;
	case 'installplugin':
		global $client;
		mosRedirect('index2.php?option=com_jce&client='.$client.'&task=install&element=plugins');
		break;
	case 'install':
		global $client,$eid;
		if($eid) {
			jceInstaller($option,$client,'show');
		} else {
			mosRedirect('index2.php?option='.$option.'&client='.$client.'',_JCE_CONTENT_MAMBOT_NOT_INSTALLED);
		}
		break;
	case 'uploadfile':
		jceInstaller($option,$client,'uploadfile');
		break;
	case 'installfromdir':
		jceInstaller($option,$client,'installfromdir');
		break;
	case 'remove':
		jceInstaller($option,$client,'remove');
		break;
	case 'lang':
		global $client,$eid;
		if($eid) {
			viewLanguages($option);
		} else {
			mosRedirect('index2.php?option='.$option.'&client='.$client.'',_JCE_CONTENT_MAMBOT_NOT_INSTALLED);
		}
		break;
	case 'newlang':
		mosRedirect('index2.php?option=com_jce&client='.$client.'&task=install&element=language');
		break;
	case 'removelang':
		removeLanguage($cid[0],$option,$client);
		break;
	case 'publishlang':
		publishLanguage($cid[0],$option,$client);
		break;
	default:
		HTML_JCEAdmin::showAdmin();
		break;
}
?>