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

/**
* Module installer
* @package Joostina
* @subpackage Installer
*/
class JCEPluginInstaller extends mosInstaller {
	/**
	* Custom install method
	* @param boolean True if installing from directory
	*/
	function install($p_fromdir = null) {
		global $database;

		if(!$this->preInstallCheck($p_fromdir,'jceplugin')) {
			return false;
		}

		$xmlDoc = $this->xmlDoc();
		$mosinstall = &$xmlDoc->documentElement;

		// Set some vars
		$e = &$mosinstall->getElementsByPath('name',1);
		$this->elementName($e->getText());

		$folder = $mosinstall->getAttribute('plugin');
		$this->elementDir(mosPathName(JPATH_BASE.
			'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$folder));

		if(!file_exists($this->elementDir()) && !mosMakePath($this->elementDir())) {
			$this->setError(1,_CANNOT_CREATE_DIR.' "'.$this->elementDir().'"');
			return false;
		}

		if($this->parseFiles('files','plugin',_NO_PLUGIN_FILES) === false) {
			return false;
		}

		// Insert mambot in DB
		$query = "SELECT id"."\n FROM #__jce_plugins"."\n WHERE plugin = '".$this->elementName().
			"'";
		$database->setQuery($query);
		if(!$database->query()) {
			$this->setError(1,'Ошибка SQL: '.$database->stderr(true));
			return false;
		}

		$id = $database->loadResult();

		if(!$id) {
			$row = new jcePlugins($database);

			$row->name = $this->elementName();
			$row->plugin = $folder;

			$element = &$mosinstall->getElementsByPath('icon',1);
			$row->icon = $element?$element->getText():'';

			$element = &$mosinstall->getElementsByPath('layout_icon',1);
			$row->layout_icon = $element?$element->getText():'';

			$row->type = 'plugin';
			$row->access = 18;
			$row->row = 4;
			$row->ordering = 1;
			$row->published = 1;
			$row->editable = 1;

			$element = &$mosinstall->getElementsByPath('elements',1);
			$row->elements = $element?$element->getText():'';

			$row->iscore = 0;

			if(!$row->store()) {
				$this->setError(1,'Ошибка SQL: '.$row->getError());
				return false;
			}
		} else {
			$this->setError(1,_SQL_ERROR.' "'.$this->elementName());
			return false;
		}
		if($e = &$mosinstall->getElementsByPath('description',1)) {
			$this->setError(0,$this->elementName().'<p>'.$e->getText().'</p>');
		}

		return $this->copySetupFile('front');
	}
	/**
	* Custom install method
	* @param int The id of the module
	* @param string The URL option
	* @param int The client id
	*/
	function uninstall($id,$option,$client = 0) {
		global $database;

		$id = intval($id);
		$query = "SELECT name, plugin, iscore FROM #__jce_plugins WHERE id = $id";
		$database->setQuery($query);

		$row = null;
		$database->loadObject($row);
		if($database->getErrorNum()) {
			HTML_installer::showInstallMessage($database->stderr(),_DELETE_ERROR,$this->returnTo($option,'install&element=plugins',$client));
			exit();
		}
		if($row == null) {
			HTML_installer::showInstallMessage(_BAD_OBJECT_ID,_DELETE_ERROR,$this->returnTo($option,'install&element=plugins',$client));
			exit();
		}

		if(trim($row->plugin) == '') {
			HTML_installer::showInstallMessage(_EMPRY_DIR_NAME_CANNOT_DEL_FILE,_DELETE_ERROR,$this->returnTo($option,'install&element=plugins',$client));
			exit();
		}

		$basepath = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$row->plugin.'/';
		$xmlfile = $basepath.$row->plugin.'.xml';

		// see if there is an xml install file, must be same name as element
		if(file_exists($xmlfile)) {
			$this->i_xmldoc = new DOMIT_Lite_Document();
			$this->i_xmldoc->resolveErrors(true);

			if($this->i_xmldoc->loadXML($xmlfile,false,true)) {
				$mosinstall = &$this->i_xmldoc->documentElement;
				// get the files element
				$files_element = &$mosinstall->getElementsByPath('files',1);
				if(!is_null($files_element)) {
					$files = $files_element->childNodes;
					foreach($files as $file) {
						// delete the files
						$filename = $file->getText();
						if(file_exists($basepath.$filename)) {
							$parts = pathinfo($filename);
							$subpath = $parts['dirname'];
							if($subpath != '' && $subpath != '.' && $subpath != '..') {
								echo '<br />Удаление: '.$basepath.$subpath;
								$result = deldir(mosPathName($basepath.$subpath.'/'));
							} else {
								echo '<br />Удаление: '.$basepath.$filename;
								$result = unlink(mosPathName($basepath.$filename,false));
							}
							echo intval($result);
						}
					}

					// remove XML file from front
					echo "Удаление XML-файла: $xmlfile";
					@unlink(mosPathName($xmlfile,false));

					// define folders that should not be removed
					$sysFolders = array('content','search');
					if(!in_array($row->folder,$sysFolders)) {
						// delete the non-system folders if empty
						if(count(mosReadDirectory($basepath)) < 1) {
							deldir($basepath);
						}
					}
				}
			}
		}

		if($row->iscore) {
			HTML_installer::showInstallMessage($row->name.' - '._IS_PART_OF_CMS,_DELETE_ERROR,$this->returnTo($option,'install&element=plugins',$client));
			exit();
		}

		$query = "DELETE FROM #__jce_plugins"."\n WHERE id = $id";
		$database->setQuery($query);
		if(!$database->query()) {
			$msg = $database->stderr;
			die($msg);
		}
		return true;
	}
}
?>