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

require_once (JPATH_BASE.
	'/'.JADMIN_BASE.'/components/com_jce/languages/languages.html.php');
// XML library
require_once (JPATH_BASE.
	'/includes/domit/xml_domit_lite_include.php');

$cid = mosGetParam($_REQUEST,'cid',array(0));

if(!is_array($cid)) {
	$cid = array(0);
}
/**
* Compiles a list of installed languages
*/
function viewLanguages($option) {
	global $languages;
	global $mainframe;
	global $database;

	$limit = $mainframe->getUserStateFromRequest("viewlistlimit",'limit',$mainframe->getCfg
		('list_limit'));
	$limitstart = $mainframe->getUserStateFromRequest("view{$option}limitstart",
		'limitstart',0);

	// get current languages
	$query = "SELECT lang"."\n FROM #__jce_langs"."\n WHERE published = 1";
	$database->setQuery($query);
	$cur_language = $database->loadResult();

	$rows = array();
	// Read the template dir to find templates
	$languageBaseDir = mosPathName(mosPathName(JPATH_BASE).
		"/".JADMIN_BASE."/components/com_jce/language/");

	$rowid = 0;

	$xmlFilesInDir = mosReadDirectory($languageBaseDir,'.xml$');

	$dirName = $languageBaseDir;
	foreach($xmlFilesInDir as $xmlfile) {
		// Read the file to see if it's a valid template XML file
		$xmlDoc = new DOMIT_Lite_Document();
		$xmlDoc->resolveErrors(true);
		if(!$xmlDoc->loadXML($dirName.$xmlfile,false,true)) {
			continue;
		}

		$root = &$xmlDoc->documentElement;

		if($root->getTagName() != 'mosinstall') {
			continue;
		}
		if($root->getAttribute("type") != "jcelang") {
			continue;
		}

		$row = new StdClass();
		$row->id = $rowid;
		$row->language = substr($xmlfile,0,-4);
		$element = &$root->getElementsByPath('name',1);
		$row->name = $element->getText();

		$element = &$root->getElementsByPath('creationDate',1);
		$row->creationdate = $element?$element->getText():'Нет данных';

		$element = &$root->getElementsByPath('author',1);
		$row->author = $element?$element->getText():'Нет данных';

		$element = &$root->getElementsByPath('copyright',1);
		$row->copyright = $element?$element->getText():'';

		$element = &$root->getElementsByPath('authorEmail',1);
		$row->authorEmail = $element?$element->getText():'';

		$element = &$root->getElementsByPath('authorUrl',1);
		$row->authorUrl = $element?$element->getText():'';

		$element = &$root->getElementsByPath('version',1);
		$row->version = $element?$element->getText():'';

		// if current than set published
		if($cur_language == $row->language) {
			$row->published = 1;
		} else {
			$row->published = 0;
		}

		$row->checked_out = 0;
		$row->mosname = strtolower(str_replace(" ","_",$row->name));
		$rows[] = $row;
		$rowid++;
	}

	require_once (JPATH_BASE.
		'/'.JADMIN_BASE.'/includes/pageNavigation.php');
	$pageNav = new mosPageNav(count($rows),$limitstart,$limit);

	$rows = array_slice($rows,$pageNav->limitstart,$pageNav->limit);

	JCE_languages::showLanguages($cur_language,$rows,$pageNav,$option);
}
/**
* Publishes or Unpublishes one or more modules
* @param array An array of unique category id numbers
* @param integer 0 if unpublishing, 1 if publishing
*/
function publishLanguage($p_lname,$option,$client) {
	global $database;

	$query = "UPDATE #__jce_langs SET published = 1"."\n WHERE lang = '$p_lname'";
	$database->setQuery($query);
	if(!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg().
			"'); window.history.go(-1); </script>\n";
		exit();
	}

	$query = "UPDATE #__jce_langs SET published = 0"."\n WHERE lang != '$p_lname'";
	$database->setQuery($query);
	if(!$database->query()) {
		echo "<script> alert('".$database->getErrorMsg().
			"'); window.history.go(-1); </script>\n";
		exit();
	}

	mosRedirect('index2.php?option='.$option.'&client='.$client.'&task=lang');
}
/**
* Remove the selected language
*/
function removeLanguage($cid,$option,$client) {
	global $database;

	$client_id = $client == 'admin'?1:0;

	// get current languages
	$query = "SELECT lang"."\n FROM #__jce_langs"."\n WHERE published = 1";
	$database->setQuery($query);
	$cur_language = $database->loadResult();

	if($cur_language == $cid) {
		echo "<script>alert(\""._CANNOT_DELETE_LANG_FILE."\"); window.history.go(-1); </script>\n";
		exit();
	}
	mosRedirect('index2.php?option=com_jce&task=remove&element=language&client='.$client.
		'&cid[]='.$cid);
}
?>