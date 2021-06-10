<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:04:16
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/myaccount.html" */ ?>
<?php /*%%SmartyHeaderCode:192413938860bc494039b130-15183888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '333b3e74058b2090e7599d942a15a974b78c00e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/myaccount.html',
      1 => 1622947354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192413938860bc494039b130-15183888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc49403cc3b5_46188080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc49403cc3b5_46188080')) {function content_60bc49403cc3b5_46188080($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container manage-page mb-30">
	<div class="cb-box br-10">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user'=>$_smarty_tpl->tpl_vars['user']->value), 0);?>

			</div>
		</div>
	</div>
</div>
<?php }} ?>
