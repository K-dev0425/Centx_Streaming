<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/rating.html" */ ?>
<?php /*%%SmartyHeaderCode:198357989860bc4bcc9d61f3-17421599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc4a43d6e481e91d7ea676d970109b18159c9618' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/rating.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198357989860bc4bcc9d61f3-17421599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'type' => 0,
    'ratedBy' => 0,
    'disable' => 0,
    'likes' => 0,
    'dislikes' => 0,
    'rating_msg' => 0,
    'perc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bcc9fcb31_27101060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bcc9fcb31_27101060')) {function content_60bc4bcc9fcb31_27101060($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ratedBy'])) {$_smarty_tpl->tpl_vars['ratedBy'] = clone $_smarty_tpl->tpl_vars['ratedBy'];
$_smarty_tpl->tpl_vars['ratedBy']->value = has_rated(userid(),$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['ratedBy']->nocache = null; $_smarty_tpl->tpl_vars['ratedBy']->scope = 0;
} else $_smarty_tpl->tpl_vars['ratedBy'] = new Smarty_variable(has_rated(userid(),$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['type']->value), null, 0);?>
<!--CB like and dislike section-->
<div id="" class="clearfix rating">
	<div class="clearfix rating-holder">
		<div class="likes like-dislike <?php if ($_smarty_tpl->tpl_vars['ratedBy']->value=='liked') {?>rated<?php }?>">
			<a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="_cb.rateNew('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','5','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)"><span class="icon-thumbup"></span></a>
			<span><?php echo prettyNum($_smarty_tpl->tpl_vars['likes']->value);?>
</span>
		</div>
		<div class="dislikes like-dislike <?php if ($_smarty_tpl->tpl_vars['ratedBy']->value=='disliked') {?>rated<?php }?>">
			<a <?php if (!$_smarty_tpl->tpl_vars['disable']->value) {?> onclick="_cb.rateNew('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"<?php }?> href="javascript:void(0)"><span class="icon-thumbdown"></span></a>
			<span><?php echo prettyNum($_smarty_tpl->tpl_vars['dislikes']->value);?>
</span>
		</div>
	</div>
	<div id="rating_result_container" class="clearfix rating-alert">
	 <?php if ($_smarty_tpl->tpl_vars['rating_msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['rating_msg']->value;?>
<?php }?>   
	</div>
</div>

<script type="text/javascript">
var _percent = '<?php echo $_smarty_tpl->tpl_vars['perc']->value;?>
';
var _numb = parseInt(_percent);
if ( _numb > 49 )
$('._percentage').addClass('likes_perc_more');
else
$('._percentage').addClass('likes_perc_less');
</script><?php }} ?>
