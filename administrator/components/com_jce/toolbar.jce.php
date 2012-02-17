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

require_once ($mainframe->getPath('toolbar_html'));

$element = mosGetParam($_REQUEST,'element','');

switch($task) {
	case 'default':
		//TOOLBAR_mosceConfig::_CONFIG();
		break;
	case 'config':
		TOOLBAR_JCE::_CONFIG();
		break;
	case 'plugins':
	case 'showplugins':
	case 'cancelaccess':
		TOOLBAR_JCE::_PLUGINS();
		break;
	case 'newplugin':
	case 'editplugin':
	case 'editpluginA':
		TOOLBAR_JCE::_EDIT_PLUGINS();
		break;
	case 'canceledit':
		TOOLBAR_JCE::_PLUGINS();
		break;
	case 'install':
		TOOLBAR_JCE::_INSTALL($element);
		break;
	case 'editlayout':
	case 'savelayout':
		TOOLBAR_JCE::_LAYOUT();
		break;
	case 'lang':
		TOOLBAR_JCE::_LANGS();
		break;
}
?>
