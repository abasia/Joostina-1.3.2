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

class jceLanguages extends mosDBTable {
	/**
	@var int*/
	var $id = null;
	/**
	@var varchar*/
	var $name = null;
	/**
	@var varchar*/
	var $lang = null;
	/**
	@var varchar*/
	var $published = null;

	function jceLanguages(&$db) {
		$this->mosDBTable('#__jce_langs','id',$db);
	}
}
?>