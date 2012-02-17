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

global $mainframe,$database;
$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
$lang = $database->loadResult();

$database->setQuery("SELECT id as id, plugin as plugin FROM #__jce_plugins WHERE type = 'plugin'");
$plugins = $database->loadObjectList();

require_once (JPATH_BASE.'/'.JADMIN_BASE.'/components/com_jce/language/'.$lang.'.php');

$backlink = '<a href="index2.php?option=com_jce&task=lang">'._JCE_LANG_BACK.'</a>';
HTML_installer::showInstallForm(_JCE_LANG_HEADING_INSTALL,$option,'language','',
	dirname(__file__),$backlink);
?>
<table class="content">
<?php
writableCell(JADMIN_BASE.'/components/com_jce/language');
writableCell('mambots/editors/jce/jscripts/tiny_mce/langs');
writableCell('mambots/editors/jce/jscripts/tiny_mce/themes/advanced/langs');
foreach($plugins as $plugin) {
	if(file_exists(JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$plugin->plugin.'/langs')) {
		writableCell('mambots/editors/jce/jscripts/tiny_mce/plugins/'.$plugin->plugin.'/langs');
	}
}
?>
</table>