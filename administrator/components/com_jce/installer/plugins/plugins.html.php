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
* @package Joostina
* @subpackage Installer
*/
class HTML_plugins {
	/**
	* Displays the installed non-core Mambot
	* @param array An array of mambot object
	* @param strong The URL option
	*/
	function showInstalledPlugins(&$rows,$option) {
		global $database;
		$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
		$lang = $database->loadResult();
		require_once (JPATH_BASE_ADMIN."/components/com_jce/language/".$lang.".php");
?>
		<table class="adminheading">
		<tr>
			<th class="install">
			<?php echo _INSTALLED_JCE_PLUGINS?>
			</th>
		</tr>
		<tr>
			<td>
            <?php echo _JCE_PLUGINS_INSTALL_MSG; ?>
			<br /><br />
			</td>
		</tr>
		</table>
		<form action="index2.php" method="post" name="adminForm" id="adminForm">
		<?php
		if(count($rows)) { ?>
			<table class="adminlist">
			<tr>
				<th width="20%" class="title">
				<?php echo _JCE_PLUGIN_NAME; ?>
				</th>
				<th width="10%" class="title">
				<?php echo _JCE_PLUGIN_PLUGIN; ?>
				</th>
				<th width="10%" align="left">
				<?php echo _JCE_AUTHOR; ?>
				</th>
				<th width="5%" align="center">
				<?php echo _JCE_VERSION; ?>
				</th>
				<th width="10%" align="center">
				<?php echo _JCE_DATE; ?>
				</th>
				<th width="15%" align="left">
				<?php echo _JCE_AUTHOR_EMAIL; ?>
				</th>
				<th width="15%" align="left">
				<?php echo _JCE_AUTHOR_URL; ?>
				</th>
			</tr>
			<?php
			$rc = 0;
			$n = count($rows);
			for($i = 0; $i < $n; $i++) {
				$row = &$rows[$i];
?>
				<tr class="<?php echo "row$rc"; ?>">
					<td>
					<input type="radio" id="cb<?php echo $i; ?>" name="cid[]" value="<?php echo
$row->id; ?>" onclick="isChecked(this.checked);">
					<span class="bold">
					<?php echo $row->name; ?>
					</span>
					</td>
					<td>
					<?php echo $row->plugin; ?>
					</td>
					<td>
					<?php echo @$row->author != ''?$row->author:"&nbsp;"; ?>
					</td>
					<td align="center">
					<?php echo @$row->version != ''?$row->version:"&nbsp;"; ?>
					</td>
					<td align="center">
					<?php echo @$row->creationdate != ''?$row->creationdate:"&nbsp;"; ?>
					</td>
					<td>
					<?php echo @$row->authorEmail != ''?$row->authorEmail:"&nbsp;"; ?>
					</td>
					<td>
					<?php echo @$row->authorUrl != ""?"<a href=\"".(substr($row->authorUrl,0,7) ==
'http://'?$row->authorUrl:'http://'.$row->authorUrl)."\" target=\"_blank\">$row->authorUrl</a>":
"&nbsp;"; ?>
					</td>
				</tr>
				<?php
				$rc = 1 - $rc;
			}
?>
			</table>
			<?php
		} else {
?>
			<input type="hidden" name="task" value="" />
			<input type="hidden" name="boxchecked" value="0" />
			<input type="hidden" name="option" value="com_jce" />
			<input type="hidden" name="element" value="plugins" />
			</form>
			<?php echo _JCE_PLUGIN_NONE;
		}
	}
}
?>