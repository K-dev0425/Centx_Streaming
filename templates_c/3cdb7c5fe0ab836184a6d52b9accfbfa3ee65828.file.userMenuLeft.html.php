<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/userMenuLeft.html" */ ?>
<?php /*%%SmartyHeaderCode:84955184560bc3714edf196-12641836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cdb7c5fe0ab836184a6d52b9accfbfa3ee65828' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/manage/userMenuLeft.html',
      1 => 1622800590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84955184560bc3714edf196-12641836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myAccountLinks' => 0,
    'topMenuLinks' => 0,
    'key' => 0,
    'value' => 0,
    'subValue' => 0,
    'subKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3714eec312_87594023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3714eec312_87594023')) {function content_60bc3714eec312_87594023($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['topMenuLinks'])) {$_smarty_tpl->tpl_vars['topMenuLinks'] = clone $_smarty_tpl->tpl_vars['topMenuLinks'];
$_smarty_tpl->tpl_vars['topMenuLinks']->value = $_smarty_tpl->tpl_vars['myAccountLinks']->value; $_smarty_tpl->tpl_vars['topMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['topMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['topMenuLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['myAccountLinks']->value, null, 0);?>
<ul class="nav nav-pills nav-stacked">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenuLinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value!='Groups') {?>

		<li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</a></li>
	
		<?php  $_smarty_tpl->tpl_vars['subValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subValue']->_loop = false;
 $_smarty_tpl->tpl_vars['subKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subValue']->key => $_smarty_tpl->tpl_vars['subValue']->value) {
$_smarty_tpl->tpl_vars['subValue']->_loop = true;
 $_smarty_tpl->tpl_vars['subKey']->value = $_smarty_tpl->tpl_vars['subValue']->key;
?>
			<li><a  href="<?php echo $_smarty_tpl->tpl_vars['subValue']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subKey']->value;?>
</a></li>
		<?php } ?>
	<?php }?>    
<?php } ?>
	<!--<li class="active"><a href="#">Manage Audience</a></li>-->
	<!--<li><a  href="manage_audience.php?mode=add_new">Create Audience</a></li>-->
	<!--<li><a  href="manage_audience.php">List Audience</a></li>-->
</ul><?php }} ?>
