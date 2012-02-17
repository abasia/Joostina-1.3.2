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

function writableCell($folder) {
	echo '<tr>';
	echo '<td class="item">'.$folder.'/</td>';
	echo '<td align="left">';
	echo is_writable(JPATH_BASE.DS.$folder)?
		'<b><font color="green">'._WRITEABLE.'</font></b>':
		'<b><font color="red">'._UNWRITEABLE.'</font></b>'.'</td>';
	echo '</tr>';
}

/**
* @package Joostina
*/
class HTML_installer {

	function showInstallForm($title,$option,$element,$client = "",$p_startdir = "",$backLink = "") {
		global $database;

		$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
		$lang = $database->loadResult();
		require_once (JPATH_BASE.
			"/".JADMIN_BASE."/components/com_jce/language/".$lang.".php");
?>
		<script language="javascript" type="text/javascript">
		function submitbutton3(pressbutton) {
			var form = document.adminForm_dir;

			// do field validation
			if (form.userfile.value == ""){
				alert( "Please select a directory" );
			} else {
				form.submit();
			}
		}
		</script>
		<form enctype="multipart/form-data" action="index2.php" method="post" name="filename">
		<table class="adminheading">
		<tr>
			<th class="install">
			<?php echo $title; ?>
			</th>
			<td align="right" nowrap="true">
			<?php echo $backLink; ?>
			</td>
		</tr>
		</table>

		<table class="adminform">
		<tr>
			<th>
			<?php echo _JCE_INS_PACKAGE_UPLOAD; ?>
			</th>
		</tr>
		<tr>
			<td align="left">
			<?php echo _JCE_INS_PACKAGE_FILE; ?>:
			<input class="text_area" name="userfile" type="file" size="70"/>
			<input class="button" type="submit" value="<?php echo _JCE_INS_UPLOAD_BUTTON; ?>" />
			</td>
		</tr>
		</table>

		<input type="hidden" name="task" value="uploadfile"/>
		<input type="hidden" name="option" value="<?php echo $option; ?>"/>
		<input type="hidden" name="element" value="<?php echo $element; ?>"/>
		<input type="hidden" name="client" value="<?php echo $client; ?>"/>
		</form>
		<br />

		<form enctype="multipart/form-data" action="index2.php" method="post" name="adminForm_dir">
		<table class="adminform">
		<tr>
			<th>
			<?php echo _JCE_INS_INSTALL; ?>
			</th>
		</tr>
		<tr>
			<td align="left">
			<?php echo _JCE_INS_INSTALL_DIR; ?>:&nbsp;
			<input type="text" name="userfile" class="text_area" size="65" value="<?php echo
$p_startdir; ?>"/>&nbsp;
			<input type="button" class="button" value="<?php echo _JCE_INS_INSTALL_BUTTON; ?>" onclick="submitbutton3()" />
			</td>
		</tr>
		</table>

		<input type="hidden" name="task" value="installfromdir" />
		<input type="hidden" name="option" value="<?php echo $option; ?>"/>
		<input type="hidden" name="element" value="<?php echo $element; ?>"/>
		<input type="hidden" name="client" value="<?php echo $client; ?>"/>
		</form>
		<?php
	}

	/**
	* @param string
	* @param string
	* @param string
	* @param string
	*/
	function showInstallMessage($message,$title,$url) {
		global $PHP_SELF;
?>
		<table class="adminheading">
		<tr>
			<th class="install">
			<?php echo $title; ?>
			</th>
		</tr>
		</table>

		<table class="adminform">
		<tr>
			<td align="left">
			<strong><?php echo $message; ?></strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			[&nbsp;<a href="<?php echo $url; ?>" style="font-size: 16px; font-weight: bold"><?php echo _CONTINUE?> ...</a>&nbsp;]
			</td>
		</tr>
		</table>
		<?php
	}
}
?>