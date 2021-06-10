<?php /* Smarty version Smarty-3.1.15, created on 2021-06-07 21:58:30
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/manage_contacts.html" */ ?>
<?php /*%%SmartyHeaderCode:116398855260bc493cda3264-28665083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f4871c1f02bde34467455a7250ff3ec756735e' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/manage_contacts.html',
      1 => 1622978193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116398855260bc493cda3264-28665083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc493cdd3473_84093832',
  'variables' => 
  array (
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc493cdd3473_84093832')) {function content_60bc493cdd3473_84093832($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container manage-page mb-30">
	<div class="cb-box br-10">
		<div class="row clearfix">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12 clearfix">
				<h1><?php echo smarty_lang(array('code'=>"contacts_manager"),$_smarty_tpl);?>
</h1>
				<table class="table table-bordered table-striped manageUsersTable">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/user_contacts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>
