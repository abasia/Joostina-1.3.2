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
* @subpackage Mambots
*/
class JCE_plugins {
	function AccessList() {
		$access_list = array(
			mosHTML::makeOption('0',_GUEST),
			mosHTML::makeOption('18','-'._USER_GROUP_REGISTERED),
			mosHTML::makeOption('19','--'._AUTHOR),
			mosHTML::makeOption('20','---'._EDITOR),
			mosHTML::makeOption('21','----'._PUBLISHER),
			mosHTML::makeOption('23','-----'._MANAGER),
			mosHTML::makeOption('24','------'._ADMINISTRATOR),
			mosHTML::makeOption('25','-------'._SUPER_ADMINISTRATOR));
		$lists['access'] = mosHTML::selectList($access_list,'access','class="inputbox" size="1"','value','text');
		return $lists['access'];
	}

	/**
	* Writes a list of the defined modules
	* @param array An array of category objects
	*/
	function showPlugins(&$rows,$client,&$pageNav,$option,&$lists,$search) {
		global $my,$database;

		$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
		$lang = $database->loadResult();
		require_once (JPATH_BASE."/administrator/components/com_jce/language/".$lang.".php");

		mosCommonHTML::loadOverlib();
		$access = JCE_plugins::AccessList();
?>
<link rel="stylesheet" href="http://localhost/joostina/mambots/editors/jce/jscripts/tiny_mce/themes/advanced/skins/o2k7/ui.css"/>

		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="modules"><?php echo _JCE_PLUGIN_HEADING; ?></th>
			<td><?php echo _JCE_PLUGIN_FILTER; ?>:</td>
			<td><input type="text" name="search" value="<?php echo $search; ?>" class="text_area" onChange="document.adminForm.submit();" /></td>
			<td width="right"><?php echo $lists['type']; ?></td>
		</tr>
		<tr><td colspan="4" align="right"><?php echo _JCE_PLUGIN_ACCESS_LIST; ?>: <?php echo $access; ?></td></tr>
		</table>
		<table class="adminlist">
		<tr>
			<th width="20">#</th>
			<th width="2%"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($rows); ?>);" /></th>
			<th class="title"><?php echo _JCE_PLUGIN_NAME; ?></th>
			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PUBLISHED; ?></th>
			<th width="2%"><?php echo _JCE_PLUGIN_ROW; ?></th>
			<th width="2%"><?php echo _JCE_PLUGIN_ORDER; ?></th>
 			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PLUGIN_ACCESS_LVL; ?></th>
			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PLUGIN_CORE; ?></th>
			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PLUGIN_TYPE; ?></th>
			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PLUGIN_ICON; ?></th>
			<th class="jtd_nowrap" width="10%"><?php echo _JCE_PLUGIN_PLUGCOM; ?></th>
		</tr>
		<?php
		$k = 0;
		for($i = 0,$n = count($rows); $i < $n; $i++) {
			$row = &$rows[$i];
			$link = 'index2.php?option=com_jce&client='.$client.'&task=editplugin&hidemainmenu=1&id='.$row->id;
			$checked = mosCommonHTML::CheckedOutProcessing($row,$i);
			$published = mosCommonHTML::PublishedProcessing($row,$i);
			$core = ($row->iscore == 1)?_YES:_NO;
			switch($row->access) {
				case '0':
					$access_value = _GUEST;
					break;
				case '18':
					$access_value = _USER_GROUP_REGISTERED;
					break;
				case '19':
					$access_value = _AUTHOR;
					break;
				case '20':
					$access_value = _EDITOR;
					break;
				case '21':
					$access_value = _PUBLISHER;
					break;
				case '23':
					$access_value = _MANAGER;
					break;
				case '24':
					$access_value = _ADMINISTRATOR;
					break;
				case '25':
					$access_value = _SUPER_ADMINISTRATOR;
					break;
			}
?>
			<tr class="<?php echo "row$k"; ?>">
				<td align="right"><?php echo $pageNav->rowNumber($i); ?></td>
				<td><?php echo $checked; ?></td>
				<td>
<?php
			if($row->checked_out && ($row->checked_out != $my->id) || $row->editable == '0') {
				echo $row->name;
			} else {
?>
				<a href="<?php echo $link; ?>"><?php echo $row->name; ?></a>
<?php
			}
?>
				</td>
				<td align="center"><?php echo $published; ?></td>
				<td align="center"><?php echo $row->row; ?></td>
				<td align="center"><?php echo $row->ordering; ?></td>
				<td align="center"><?php echo $access_value; ?></td>
				<td align="center"><?php echo $core; ?></td>
				<td align="center"><?php echo $row->type; ?></td>
				<td align="center">
<?php if( !empty( $row->layout_icon )  ){
					if( $row->type == 'plugin' ){
						$icon_path = JPATH_SITE."/mambots/editors/jce/jscripts/tiny_mce/plugins/".$row->plugin."/images/".$row->layout_icon.".gif";
					}else{
						$icon_path = JPATH_SITE."/mambots/editors/jce/jscripts/tiny_mce/themes/advanced/images/".$row->layout_icon.".gif";
					}
?>
					<img src="<?php echo $icon_path;?>" alt="<?php echo $row->name;?>" title="<?php echo $row->name;?>" height="20" />
<?php }?>
				</td>
				<td align="center"><?php echo $row->plugin; ?></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="showplugins" />
		<input type="hidden" name="client" value="<?php echo $client; ?>" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<?php
	}
	/**
	* Writes the edit form for new and existing module
	*
	* A new record is defined when <var>$row</var> is passed with the <var>id</var>
	* property set to 0.
	* @param mosCategory The category object
	* @param array <p>The modules of the left side.  The array elements are in the form
	* <var>$leftorder[<i>order</i>] = <i>label</i></var>
	* where <i>order</i> is the module order from the db table and <i>label</i> is a
	* text label associciated with the order.</p>
	* @param array See notes for leftorder
	* @param array An array of select lists
	* @param object Parameters
	*/
	function editPlugins(&$row,&$lists,&$params,$option) {
		global $mainframe,$database;

		mosCommonHTML::loadOverlib();

		$database->setQuery("SELECT lang FROM #__jce_langs WHERE published= '1'");
		$lang = $database->loadResult();
		require_once (JPATH_BASE."/administrator/components/com_jce/language/".$lang.".php");

		$row->nameA = '';
		if($row->id) {
			$row->nameA = '<small><small>[ '.$row->name.' ]</small></small>';
		}
		$row_row = ($row->row)?$row->row:'4';
		$row_ordering = ($row->ordering)?$row->ordering:'1';
?>
		<div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			if (pressbutton == "cancelplugin") {
				submitform(pressbutton);
				return;
			}
			// validation
			var form = document.adminForm;
			submitform(pressbutton);
		}
		</script>
		<table class="adminheading">
		<tr>
			<th class="mambots">
			JCE Plugin:
			<small><?php echo $row->id?_JCE_PLUGIN_EDIT:_JCE_PLUGIN_NEW; ?></small>
			<?php echo $row->nameA; ?>
			</th>
		</tr>
		</table>

		<form action="index2.php" method="post" name="adminForm">
		<table cellspacing="0" cellpadding="0" width="100%">
		<tr valign="top">
			<td width="60%" valign="top">
				<table class="adminform">
				<tr>
					<th colspan="2"><?php echo _JCE_PLUGIN_DETAILS; ?></th>
				<tr>
				<tr>
					<td width="100" align="left"><?php echo _JCE_PLUGIN_NAME; ?>:</td>
					<td>
					<input class="text_area" type="text" name="name" size="35" value="<?php echo $row->name; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_PLUGIN; ?>:
					</td>
					<td>
					<input class="text_area" type="text" name="plugin" size="35" value="<?php echo $row->plugin; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_TYPE; ?>:
					</td>
					<td>
                    <?php echo _JCE_PLUGIN_PLUGIN; ?>
                    <input type="hidden" name="type" value="plugin" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_ICON; ?>:
					</td>
					<td>
					<input class="text_area" type="text" name="icon" size="35" value="<?php echo $row->icon; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_LAYOUT_ICON; ?>:
					</td>
					<td>
					<input class="text_area" type="text" name="layout_icon" size="35" value="<?php echo $row->layout_icon; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_ACCESS_LVL; ?>:
					</td>
					<td>
                    <?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_ROW; ?>:
					</td>
					<td>
                    <?php echo $row_row; ?><input type="hidden" name="row" value="<?php echo $row_row; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top" align="left">
					<?php echo _JCE_PLUGIN_ORDER; ?>:
					</td>
					<td>
                    <?php echo $row_ordering; ?><input type="hidden" name="ordering" value="<?php echo $row_ordering; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top">
					<?php echo _JCE_PUBLISHED; ?>:
					</td>
					<td>
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top">
					<?php echo _JCE_PLUGIN_ELMS; ?>:
					</td>
					<td><input class="text_area" type="text" name="elements" size="35" value="<?php echo $row->elements; ?>" />
					</td>
				</tr>
				<tr>
					<td valign="top">
					<?php echo _JCE_PLUGIN_DESC; ?>:
					</td>
					<td>
					<?php echo $row->description; ?>
					</td>
				</tr>
				</table>
			</td>
			<td width="40%">
				<table class="adminform">
				<tr>
					<th colspan="2">
					<?php echo _JCE_PLUGIN_PARAMS; ?>
					</th>
				<tr>
				<tr>
					<td>
<?php
		if($row->id) {
			echo $params->render();
		}
?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		<input type="hidden" name="client" value="<?php echo $row->client_id; ?>" />
		<input type="hidden" name="task" value="" />
		</form>
		<?php
	}
}
?>
