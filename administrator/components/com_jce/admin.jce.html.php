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

class HTML_JCEAdmin {
	function showAdmin() {
		global $mainframe;
?>
	<form action="index2.php" method="post" name="adminForm">
	<table class="adminheading">
		<tr>
			<th class="cpanel"><?php echo _JCE_CONFIG?></th>
		</tr>
		<tr>
			<td width="55%" valign="top">
			<div class="cpicons">
<?php
	$link = "index2.php?option=com_jce&task=config&hidemainmenu=1";
	quickiconButton($link,'config.png', _EDITOR_CONFIG);

	$link = "index2.php?option=com_jce&task=showplugins";
	quickiconButton($link,'ext.png', _EXTENSIONS);

	$link = "index2.php?option=com_jce&task=install&element=plugins";
	quickiconButton($link,'install.png', _EXTENSION_MANAGEMENT);

	$link = "index2.php?option=com_jce&task=editlayout&hidemainmenu=1";
	quickiconButton($link,'ext.png', _ICONS_POSITIONS);

	$link = "index2.php?option=com_jce&task=lang&hidemainmenu=1";
	quickiconButton($link,'user.png', _LANG_MANAGER);

?>			</div>
		</td>
	</tr>
	</table>
<?php
	}
}
// прорисовка кнопок управления
function quickiconButton($link,$image,$text) {
?>
	<span>
		<a href="<?php echo $link; ?>" title="<?php echo $text; ?>">
<?php
			echo mosAdminMenus::imageCheckAdmin($image,'/'.JADMIN_BASE.'/templates/'.mosMainFrame::getInstance(true)->getTemplate().'/images/system_ico/',null,null,$text);
			echo $text;
?>
		</a>
	</span>
	<?php
}