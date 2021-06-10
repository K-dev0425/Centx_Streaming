<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 21:49:58
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/global/remote_upload_form.html" */ ?>
<?php /*%%SmartyHeaderCode:13635526860bd430673f8b5-49574624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98274dd2dcd043d0b85fd2fdb842dd38c36b7f19' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/global/remote_upload_form.html',
      1 => 1622800568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13635526860bd430673f8b5-49574624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'params' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bd4306759064_75246923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bd4306759064_75246923')) {function content_60bd4306759064_75246923($_smarty_tpl) {?><div class="alert alert-info marginTop">
	<?php echo lang('upload_remote_video_msg');?>

	<?php if (has_access("admin_access")) {?>
		<?php if (strlen($_smarty_tpl->tpl_vars['Cbucket']->value->configs['youtube_api_key'])<10) {?>
			<div class="alert alert-danger">YouTube API key provided in Website Settings & Configurations > General is of invalid length hence, Grab From YouTube may not work <a target="_blank" href="https://developers.google.com/youtube/v3/getting-started">Get API Key</a></div>
		<?php }?>
	<?php }?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = ''; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['params']->value['class']) {?>
<?php if (isset($_smarty_tpl->tpl_vars['class'])) {$_smarty_tpl->tpl_vars['class'] = clone $_smarty_tpl->tpl_vars['class'];
$_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['params']->value['class']; $_smarty_tpl->tpl_vars['class']->nocache = null; $_smarty_tpl->tpl_vars['class']->scope = 0;
} else $_smarty_tpl->tpl_vars['class'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['class'], null, 0);?>
<?php }?>


<div class="upload_form_div clearfix form-group <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="remoteUploadFormDiv">
	<div class="input-group marginTop">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
	  <input name="remote_file_url" type="text"  class="remoteUrlInput form-control" id="remote_file_url" value="<?php echo lang('remote_upload_example');?>
" onclick="if($(this).val()=='<?php echo lang('remote_upload_example');?>
') $(this).val('')"/>
	  <input name="submit_upload" type="hidden" value="<?php echo lang('upload_data_now');?>
">
	</div>
	
	
	<div class="downloadStatusContainer hidden">
		<div class="progress marginTop">
		  <div id="prog_bar" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
		    <span class="sr-only">60% Complete</span>
		  </div>
		</div>
		<div align="center" id="loading" style=""></div>
		<div id="downloadStatus">
			<small>
				<span>Downloaded </span>
				<span id="downloaded">0.00 Mb</span>
				<span> of </span>
				<span id="totalSize">0.00 Mb</span>
			</small>
		</div>
	</div>
	<!-- <div></div> -->
	
	<div class="align-right marginTop">
		<!--<input type="button" name="ytUploadBttn" id="ytUploadBttn" value="<?php echo lang('grab_from_youtube');?>
" onClick="_cb.youtube_upload()" class="btn btn-primary btn-lg">-->
		<input type="button" name="ytUploadBttn"  data-loading-text="Loading..." id="ytUploadBttn" value="<?php echo lang('grab_from_youtube');?>
" onClick="youtube_upload()" class="btn btn-primary btn-lg">
		<input type="button" name="remoteUploadBttn" id="remoteUploadBttn" data-loading-text="Loading..." value="<?php echo lang('upload');?>
" onClick="<?php echo get_remote_url_function();?>
" class="btn btn-primary btn-lg">
		<input type="button" name="remoteUploadBttnStop" id="remoteUploadBttnStop" value="<?php echo lang('cancel');?>
"   class="btn btn-primary btn-lg" style="display:none"/>
	</div>
</div>
<div id="remoteForm"></div>
<?php }} ?>
