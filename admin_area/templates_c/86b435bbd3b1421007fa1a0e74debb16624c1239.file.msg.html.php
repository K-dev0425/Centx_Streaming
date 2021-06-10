<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:45
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/msg.html" */ ?>
<?php /*%%SmartyHeaderCode:88467322060bc499914fc27-15332027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86b435bbd3b1421007fa1a0e74debb16624c1239' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/msg.html',
      1 => 1622800746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88467322060bc499914fc27-15332027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'eh' => 0,
    'err' => 0,
    'imageurl' => 0,
    'show_msg' => 0,
    'msg' => 0,
    'war' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc499916dfc8_27080230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc499916dfc8_27080230')) {function content_60bc499916dfc8_27080230($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['msg'])) {$_smarty_tpl->tpl_vars['msg'] = clone $_smarty_tpl->tpl_vars['msg'];
$_smarty_tpl->tpl_vars['msg']->value = $_smarty_tpl->tpl_vars['eh']->value->message_list; $_smarty_tpl->tpl_vars['msg']->nocache = null; $_smarty_tpl->tpl_vars['msg']->scope = 0;
} else $_smarty_tpl->tpl_vars['msg'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->message_list, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['err'])) {$_smarty_tpl->tpl_vars['err'] = clone $_smarty_tpl->tpl_vars['err'];
$_smarty_tpl->tpl_vars['err']->value = $_smarty_tpl->tpl_vars['eh']->value->error_list; $_smarty_tpl->tpl_vars['err']->nocache = null; $_smarty_tpl->tpl_vars['err']->scope = 0;
} else $_smarty_tpl->tpl_vars['err'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->error_list, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['war'])) {$_smarty_tpl->tpl_vars['war'] = clone $_smarty_tpl->tpl_vars['war'];
$_smarty_tpl->tpl_vars['war']->value = $_smarty_tpl->tpl_vars['eh']->value->warning_list; $_smarty_tpl->tpl_vars['war']->nocache = null; $_smarty_tpl->tpl_vars['war']->scope = 0;
} else $_smarty_tpl->tpl_vars['war'] = new Smarty_variable($_smarty_tpl->tpl_vars['eh']->value->warning_list, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['err']->value[0]!=''||$_smarty_tpl->tpl_vars['err']->value[1]!='') {?>

<div class="alert alert-danger alert-dismissable">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
    <ul class="list-unstyled">
    <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['err']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
   		<li><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/cross.png" /> <?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
</li>
    <?php } ?>
    </ul>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msg']->value[0]!='') {?>
<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
	<ul class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
        	<li><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/ok.png" /> <?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
</li>
        <?php } ?>
    </ul>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['war']->value[0]!='') {?>
<div class="alert alert-warning alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
	<ul class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['show_msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['show_msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['war']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['show_msg']->key => $_smarty_tpl->tpl_vars['show_msg']->value) {
$_smarty_tpl->tpl_vars['show_msg']->_loop = true;
?>
        	<li><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/error.png" /> <?php echo $_smarty_tpl->tpl_vars['show_msg']->value;?>
</li>
        <?php } ?>
    </ul>
</div>
<?php }?><?php }} ?>
