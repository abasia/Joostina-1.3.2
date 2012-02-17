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

class TOOLBAR_JCE {
	public static function _CONFIG() {
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::custom('main','-back','',_MAIN_PAGE,false);
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::endTable();
	}
	public static function _PLUGINS() {
		mosMenuBar::startTable();
		mosMenuBar::publishList();
		mosMenuBar::spacer();
		mosMenuBar::unpublishList();
		mosMenuBar::spacer();
		mosMenuBar::custom('newplugin','-new','',_NEW,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('installplugin','-new','',_INSTALLATION,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('editlayout','-preview','',_PREVIEW,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('cancel','-cancel','',_CANCEL,false);
		mosMenuBar::endTable();
	}
	public static function _EDIT_PLUGINS() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::custom('saveplugin','-save','',_SAVE,false);
		mosMenuBar::spacer();
		if($id) {
			mosMenuBar::custom('canceledit','-cancel','',_CLOSE,false);
		} else {
			mosMenuBar::custom('canceledit','-cancel','',_CANCEL,false);
		}
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}
	public static function _INSTALL($element) {
		if($element == 'plugins') {
			mosMenuBar::startTable();
			mosMenuBar::custom('showplugins','-new','',_PLUGINS,false);
			mosMenuBar::spacer();
			mosMenuBar::custom('removeplugin','-delete','',_DELETE,false);
			mosMenuBar::spacer();
			mosMenuBar::custom('cancel','-cancel','',_CANCEL,false);
			mosMenuBar::endTable();
		}
	}
	public static function _LAYOUT() {
		mosMenuBar::startTable();
		mosMenuBar::custom('savelayout','-save','',_SAVE,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('cancel','-cancel','',_CANCEL,false);
		mosMenuBar::endTable();
	}
	public static function _LANGS() {
		mosMenuBar::startTable();
		mosMenuBar::publishList('publishlang');
		mosMenuBar::spacer();
		mosMenuBar::custom('removelang','-delete','',_DELETE,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('newlang','-new','',_INSTALLATION,false);
		mosMenuBar::spacer();
		mosMenuBar::custom('cancel','-cancel','',_CANCEL,false);
		mosMenuBar::endTable();
	}
}
?>