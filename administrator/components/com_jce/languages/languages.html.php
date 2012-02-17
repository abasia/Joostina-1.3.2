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
* @subpackage Languages
*/
class JCE_languages {

	function showLanguages($cur_lang,&$rows,&$pageNav,$option) {
		global $my,$database,$mainframe;
		
		$mainframe = mosMainFrame::getInstance();
		$cur_file_icons_path = JPATH_SITE.'/'.JADMIN_BASE.'/templates/'.JTEMPLATE.'/images/ico';

		$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
		$lang = $database->loadResult();

		require_once (JPATH_BASE.DS.JADMIN_BASE."/components/com_jce/language/".$lang.".php");
?>
		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="langmanager">
			<?php echo _JCE_LANG_HEADING; ?> <small></small>
			</th>
		</tr>
		</table>

		<table class="adminlist">
		<tr>
			<th width="20">#</th>
			<th width="30">&nbsp;</th>
			<th width="25%" class="title"><?php echo _JCE_LANG_LANG; ?></th>
			<th width="5%"><?php echo _JCE_PUBLISHED; ?></th>
			<th width="10%"><?php echo _JCE_VERSION; ?></th>
			<th width="10%"><?php echo _JCE_DATE; ?></th>
			<th width="20%"><?php echo _JCE_AUTHOR; ?></th>
			<th width="25%"><?php echo _JCE_AUTHOR_EMAIL; ?></th>
		</tr>
<?php
		$k = 0;
		for($i = 0,$n = count($rows); $i < $n; $i++) {
			$row = &$rows[$i];
?>
			<tr class="<?php echo "row$k"; ?>">
				<td width="20"><?php echo $pageNav->rowNumber($i); ?></td>
				<td width="20"><input type="radio" id="cb<?php echo $i; ?>" name="cid[]" value="<?php echo $row->language; ?>" onClick="isChecked(this.checked);" /></td>
				<td width="25%"><?php echo $row->name; ?></td>
				<td width="5%" align="center">
<?php
			if($row->published == 1) { ?>
					<img src="<?php echo $cur_file_icons_path;?>/tick.png" alt="<?php echo _PUBLISHED?>"/>
<?php
			} else {
?>
					&nbsp;
<?php
			}
?>
				</td>
				<td align=center><?php echo $row->version; ?></td>
				<td align=center><?php echo $row->creationdate; ?></td>
				<td align=center><?php echo $row->author; ?></td>
				<td align=center><?php echo $row->authorEmail; ?></td>
			</tr>
		<?php
		}
?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		<input type="hidden" name="boxchecked" value="0" />
		</form>
		<?php
	}
}