<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 08:21:54
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/feed.html" */ ?>
<?php /*%%SmartyHeaderCode:203212500460bc85a27a2067-81076026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0438974457f29133be32fca171627f7935eec78b' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/feed.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203212500460bc85a27a2067-81076026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feed' => 0,
    'userquery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc85a27bfa78_96651161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc85a27bfa78_96651161')) {function content_60bc85a27bfa78_96651161($_smarty_tpl) {?><div class="feed clearfix"  id="feed-<?php echo $_smarty_tpl->tpl_vars['feed']->value['file'];?>
">
	<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['feed']->value['user']);?>
" class="avatar">
		<img class="img-circle" src="<?php echo avatar(array('details'=>$_smarty_tpl->tpl_vars['feed']->value['user'],'size'=>'55x55'),$_smarty_tpl);?>
">
	</a>
	<div class="text">
		<?php if (!$_smarty_tpl->tpl_vars['feed']->value['action_title']) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->profile_link($_smarty_tpl->tpl_vars['feed']->value['user']);?>
"><?php echo $_smarty_tpl->tpl_vars['feed']->value['user']['username'];?>
</a>
		<?php } else { ?>
		<span><?php echo $_smarty_tpl->tpl_vars['feed']->value['action_title'];?>
</span>
		<?php }?>
		<time datetime="2016-03-31" class="time"><?php echo $_smarty_tpl->tpl_vars['feed']->value['datetime'];?>
</time>
	</div>
</div><?php }} ?>
