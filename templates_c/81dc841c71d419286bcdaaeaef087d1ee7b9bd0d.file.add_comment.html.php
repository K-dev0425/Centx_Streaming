<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/comments/add_comment.html" */ ?>
<?php /*%%SmartyHeaderCode:60415754160bc4bccab3b74-89571512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81dc841c71d419286bcdaaeaef087d1ee7b9bd0d' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/comments/add_comment.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60415754160bc4bccab3b74-89571512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'Cbucket' => 0,
    'id' => 0,
    'type' => 0,
    'captcha' => 0,
    'vdo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bccae25e1_19285493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bccae25e1_19285493')) {function content_60bc4bccae25e1_19285493($_smarty_tpl) {?><div class="add-comments clearfix" id="add_comment">
	<?php if ($_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)||$_smarty_tpl->tpl_vars['Cbucket']->value->configs['anonym_comments']=='yes') {?>
	<form name="comment_form" method="post" action="" id="comment_form" onsubmit="return false;">
		<div class="clearfix com-txtarea">
			<span id="comment_err_output" class="alert alert-danger comment_err_output pull-left" style="display:none;width:100%"></span>
			<span id="comment_msg_output" class="alert alert-success comment_msg_output pull-left" style="display:none;"></span>
			<input type="hidden" name="reply_to" id="reply_to" value="0">
			<input type="hidden" name="obj_id" id="obj_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
			<?php if (!$_smarty_tpl->tpl_vars['userquery']->value->login_check('',true)&&$_smarty_tpl->tpl_vars['Cbucket']->value->configs['anonym_comments']=='yes') {?>
				<div class="form-group">
					<label for="name" class="block-label"><?php echo smarty_lang(array('code'=>'name'),$_smarty_tpl);?>
</label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label for="email" class="block-label"><?php echo smarty_lang(array('code'=>'email_wont_display'),$_smarty_tpl);?>
</label>
					<input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
				</div>
			<?php } else { ?>
				<div class="clearfix ">
					<label><?php echo smarty_lang(array('code'=>"comment_as"),$_smarty_tpl);?>
&nbsp;</label>
					<span>
						<?php if ($_smarty_tpl->tpl_vars['userquery']->value->udetails['fullname']) {?>
							<?php echo $_smarty_tpl->tpl_vars['userquery']->value->udetails['fullname'];?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['userquery']->value->username;?>

						<?php }?>
					</span>
				</div>
			<?php }?>

			<?php if (config('comments_captcha')=='all'||(config('comments_captcha')=='guests'&&!$_smarty_tpl->tpl_vars['userquery']->value->login_check('',true))) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['captcha'])) {$_smarty_tpl->tpl_vars['captcha'] = clone $_smarty_tpl->tpl_vars['captcha'];
$_smarty_tpl->tpl_vars['captcha']->value = get_captcha(); $_smarty_tpl->tpl_vars['captcha']->nocache = null; $_smarty_tpl->tpl_vars['captcha']->scope = 0;
} else $_smarty_tpl->tpl_vars['captcha'] = new Smarty_variable(get_captcha(), null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?> 
				
					<?php if ($_smarty_tpl->tpl_vars['captcha']->value['show_field']) {?>
							<label class="block-label" for="captcha">Verification Code</label>
							<div class="ADfieldInputs"><?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'field','field_params'=>' id="captcha" class="TextField"'),$_smarty_tpl);?>
</div>
					<?php }?>
					<?php echo load_captcha(array('captcha'=>$_smarty_tpl->tpl_vars['captcha']->value,'load'=>'function'),$_smarty_tpl);?>

				
				<?php }?>
			<?php }?> 
			<?php echo ANCHOR(array('place'=>'before_compose_box'),$_smarty_tpl);?>

			
			<div class="form-group clearfix">
				<div class="avatar_comment_as">
					<img src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->avatar(false,'m',userid());?>
" class="img-circle">
				</div>
				<div class="comment_txt_area">
					<textarea style="resize: vertical;" name="comment" id="comment_box" cols="30" rows="1"  class="form-control" placeholder="Please type something in comment box"></textarea>
				</div>
			</div>
			<div class="clearfix text-right">
				<input type="button" name="add_comment" id="add_comment_button" class="btn btn-submit btn-primary"  value="<?php echo smarty_lang(array('code'=>'user_add_comment'),$_smarty_tpl);?>
">
			</div>
		</div>
		
		<div class="clearfix" id="msg_container"></div>
	</form>
	<?php } else { ?>
		<span class="sizeSmall bold error"></span>
		<div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
			<span class="alert-warning alert msg-display"><?php echo smarty_lang(array('code'=>'please_login_to_comment'),$_smarty_tpl);?>
</span>
		</div>
	<?php }?>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		var form_selector = 'comment_form';
		var type = '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
';
		var video_id = '<?php echo $_smarty_tpl->tpl_vars['vdo']->value['video_id'];?>
';
		$('body').on("click","#add_comment_button",function(){
			add_comment_js(form_selector,type,video_id);
			setTimeout(page_reload, 2000);
        });
		$('#comment_box').keypress(function(e){
			if(e.keyCode == 13 && !e.shiftKey)
			{
				e.preventDefault();
				add_comment_js(form_selector,type,video_id);
            }
			});
		});

	function page_reload() {
		window.location.reload();
    }
</script><?php }} ?>
