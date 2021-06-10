<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:45
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/404.html" */ ?>
<?php /*%%SmartyHeaderCode:97805494160bc49995e9184-74662783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c0e8177c8de3d6f52f4c489ed97528d388d0b4' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/404.html',
      1 => 1622800586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97805494160bc49995e9184-74662783',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'imageurl' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4999624f93_09212165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4999624f93_09212165')) {function content_60bc4999624f93_09212165($_smarty_tpl) {?><div class="page-error clearfix" style="background:#f7f9fb  url(<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/clouds.jpg) no-repeat; background-size:100%;">
	<div class="error-holder">
		<div class="fog">
			<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/fog-cloud.png" alt="" class="img-responsive">
		</div>
		<div class="monster">
			<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/monster.png" alt="" class="img-responsive">
		</div>
		<div class="content-txt">
			<div class="clearfix error-img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/404.png" alt="" class="img-responsive">
			</div>
			<div class="alert-text clearfix">
				<p><strong>Looks like you're lost</strong><span>The Page you are looking for is not available!</span></p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"> &larr; &nbsp;Go back to the homepage</a>
			</div>
		</div>
	</div>
	<img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/base.png" alt="" class="base-bg">
</div><?php }} ?>
