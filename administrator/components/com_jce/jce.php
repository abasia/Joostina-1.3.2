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

$task = mosGetParam($_REQUEST,'task');
function cleanInput($string) {
	return preg_replace('/[^a-zA-z._]/i','',$string);
}
switch($task) {
	case 'popup':
		showPopup();
		break;
	case 'plugin':
		$query = "SELECT plugin FROM #__jce_plugins WHERE published = 1 AND type = 'plugin'";
		$database->setQuery($query);
		$plugins = $database->loadResultArray();

		$plugin = cleanInput(mosGetParam($_REQUEST,'plugin'));
		if(in_array($plugin,$plugins)) {
			$file = cleanInput(basename(mosGetParam($_REQUEST,'file')));
			$path = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/plugins/'.$plugin;
			if(is_dir($path) && file_exists($path.'/'.$file)) {
				include_once $path.'/'.$file;
			} else {
				die(_FILE_NOT_FOUND);
			}
		} else {
			die(_PLUGIN_NOT_FOUND);
		}
		break;
	case 'help':
		$file = cleanInput(basename(mosGetParam($_REQUEST,'file')));
		$path = JPATH_BASE.'/mambots/editors/jce/jscripts/tiny_mce/libraries/help/'.$file;
		if(file_exists($path)) {
			include_once $path;
		} else {
			die(_FILE_NOT_FOUND);
		}
		break;
}
function getInput($item,$def = '') {
	return htmlspecialchars(mosGetParam($_REQUEST,$item,$def));
}
function showPopup() {
	global $mainframe;

	$img = getInput('img');
	$title = str_replace('_',' ',getInput('title','Image'));
	$mode = getInput('mode','0');
	$right_click = getInput('click','0');
	$print = getInput('print','0');
	$w = getInput('w');
	$h = getInput('h');

	$img = str_replace(JPATH_SITE.'/','',$img);
?>
    <style type="text/css">
        body{
            margin: 0px;
            padding: 0px;
        }
    </style>
	<script type="text/javascript">
	var w = '<?php $w; ?>';
	var h = '<?php echo $h; ?>';
	var x = (screen.width-parseInt(w))/2;
	var y = (screen.height-parseInt(h))/2;

	window.moveTo(x, y);
	</script>
    <?php if($right_click) { ?>
	<script type="text/javascript">
    function clickIE4(){
        if (event.button==2){
            return false;
        }
    }
    function clickNS4(e){
        if (document.layers||document.getElementById&&!document.all){
            if (e.which==2||e.which==3){
                return false;
            }
        }
    }
    if (document.layers){
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown=clickNS4;
    }
    else if (document.all&&!document.getElementById){
        document.onmousedown=clickIE4;
    }
    document.oncontextmenu=new Function("return false");
	</script>
    <?php }
	switch($mode) {
		case '0':
?>
            <img src="<?php echo $img; ?>" width="<?php echo $w; ?>" height="<?php echo $h; ?>" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" style="cursor:pointer;" onclick="window.close();" />
    <?php
			break;
		case '1':
?>
            <table align="center" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td align="left" class="contentheading" style="width:<?php echo $w - 18; ?>px; margin-left: 5px;"><?php echo $title; ?></td>
                    <td align="right" style="width:18px;" class="buttonheading">
				        <?php if($print) { ?>
                            <a href="javascript:;" onClick="window.print(); return false"><img src="<?php echo JPATH_SITE; ?>/images/M_images/printButton.png" width="16" height="16" alt="<?php echo _PRINT; ?>" title="<?php echo _PRINT; ?>" border="0" style="vertical-align:middle;"/></a>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><img src="<?php echo $img; ?>" width="<?php echo $w; ?>" height="<?php echo $h; ?>" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" style="cursor:pointer;" onclick="window.close();" /></td>
	           </tr>
            </table>
    <?php
			break;
	}
}
?>