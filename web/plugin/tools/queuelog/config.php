<?php if(!(defined('_SECURE_'))){die('Intruder alert');}; ?>
<?php
$menutab_tools = $core_config['menu']['main_tab']['tools'];
$arr_menu[$menutab_tools][] = array("index.php?app=menu&inc=tools_queuelog&op=queuelog_list", _('View SMS queue'));
?>