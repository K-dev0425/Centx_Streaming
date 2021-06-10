<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/share.html" */ ?>
<?php /*%%SmartyHeaderCode:142642436160bc4bcca048b5-31452227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4a9baa363250b9478ac5de24f39ff769f38234e' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/share.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142642436160bc4bcca048b5-31452227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'params' => 0,
    'Cbucket' => 0,
    'vdo' => 0,
    'cbvid' => 0,
    'updateEmbedCode' => 0,
    'pakplayer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bcca56b16_42309758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bcca56b16_42309758')) {function content_60bc4bcca56b16_42309758($_smarty_tpl) {?><!-- Share This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['params']->value['type']; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['type'], null, 0);?>
<div id="share_form_div" class="action_box share_form clearfix">
	<?php if ($_smarty_tpl->tpl_vars['params']->value['type']=='v'||$_smarty_tpl->tpl_vars['params']->value['type']=='video'||$_smarty_tpl->tpl_vars['params']->value['type']=='Video') {?>
	<div class="clearfix">
		<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['video_embed']==1&&$_smarty_tpl->tpl_vars['vdo']->value['allow_embedding']=='yes') {?>
		<div class="form-group">
			<label for="embed_code" class="block-label"><?php echo smarty_lang(array('code'=>'embed_code'),$_smarty_tpl);?>
</label>
			<textarea name="embed_code" id="embed_code" onclick="this.select()"  class="form-control"><?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_type']=='iframe') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cbvid']->value->embed_code($_smarty_tpl->tpl_vars['vdo']->value,'iframe'));?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cbvid']->value->embed_code($_smarty_tpl->tpl_vars['vdo']->value,'embed_object'));?>
<?php }?></textarea>

			<input type="hidden" name="alternate_embed_code" id="alternate_embed_code" value="<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_type']=='iframe') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cbvid']->value->embed_code($_smarty_tpl->tpl_vars['vdo']->value,'embed_object'));?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cbvid']->value->embed_code($_smarty_tpl->tpl_vars['vdo']->value,'iframe'));?>
<?php }?>">
		</div>

		<div class="form-group custom-elements">
			<label class="block-label"><?php echo smarty_lang(array('code'=>'player_size'),$_smarty_tpl);?>
</label>
			<div class="clearfix">
				<label class="radio-inline">
					<input type="radio" name="player_size" value="default" id="player_size_0" checked="checked" onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
('<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_player_width'];?>
' ,'<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_player_height'];?>
',autoPlayEmbed)">
					<?php echo smarty_lang(array('code'=>'default'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_player_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_player_height'];?>
)
				</label>
				
				<label class="radio-inline">
					<input type="radio" name="player_size" value="small" id="player_size_1" onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
('440','272',autoPlayEmbed)">
					<?php echo smarty_lang(array('code'=>'small'),$_smarty_tpl);?>
 (440x272)
				            </label>
				
				<label class="radio-inline">
					<input type="radio" name="player_size" value="medium" id="player_size_2"  onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
('540','334',autoPlayEmbed)">
					<?php echo smarty_lang(array('code'=>'medium'),$_smarty_tpl);?>
 (540x334)
				</label>
				
				<label class="radio-inline">
					<input type="radio" name="player_size" value="large" id="player_size_3"  onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
('600','370',autoPlayEmbed)">
					<?php echo smarty_lang(array('code'=>'large'),$_smarty_tpl);?>
 (600x370)
				</label>
				<label class="block-label clearfix">Custom Size</label>
				<form class="form-inline">
				  <div class="form-group">
				    <label for="player_size_width">Width</label>
				    <input type="text" class="form-control" id="player_size_4" value="640" placeholder="Player width here">
				  </div>
				  <div class="form-group">
				    <label for="player_size_height">Height</label>
				    <input type="text" class="form-control" id="player_size_5" value="360" placeholder="Player height here">
				  </div>
				</form>

			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['pakplayer']->value=='yes') {?>
		<div class="form-group custom-elements">
			Autoplay video : 
			<label>
				<input type="radio" name="autoplay" value="yes" onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
(embedPlayerWidth,embedPlayerHeight,'yes')" <?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['autoplay_embed']=='yes') {?> checked<?php }?>>
				Yes
			</label>
			<label>
				<input type="radio" name="autoplay" value="no"  onclick="<?php echo $_smarty_tpl->tpl_vars['updateEmbedCode']->value;?>
(embedPlayerWidth,embedPlayerHeight,'no')" <?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['autoplay_embed']!='yes') {?> checked<?php }?>>
				No
			</label>
		</div>
		<?php }?>

		<div class="form-group custom-elements">
			<label class="block-label"><?php echo lang('Embed type');?>
</label>
			<div class="clearfix">
				<label class="radio-inline">
					<input type="radio" name="embed_type" value="iframe" onclick="switchEmbedCode('iframe')" <?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_type']=='iframe') {?> checked<?php }?>>
					<?php echo smarty_lang(array('code'=>'iframe'),$_smarty_tpl);?>

				</label>
				<label class="radio-inline">
					<input type="radio" name="embed_type" value="iframe"  onclick="switchEmbedCode('embed_object')" <?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->configs['embed_type']=='embed_object') {?> checked<?php }?>>
					<?php echo smarty_lang(array('code'=>'embed_object'),$_smarty_tpl);?>

				</label>
			</div>
		</div>
	<?php }?>
	</div>
	
	<div class="form-group">
		<label for="link_video" class="block-label"><?php echo smarty_lang(array('code'=>'link_this_video'),$_smarty_tpl);?>
</label>
		<input type="text" name="link_video" id="link_video"  value="<?php echo videoSmartyLink(array('vdetails'=>$_smarty_tpl->tpl_vars['vdo']->value),$_smarty_tpl);?>
"  onclick="this.select()"  class="form-control" >
	</div>
	
	<?php }?>

	<div class="form_container">
		<div id="share_form_results" class="form_result" style="display:none"></div>
		<form id="cb_share_item" name="share_form" method="post" action="">
			<div class="form-group">
				<label for="ShareUsers" class="block-label"><?php echo sprintf(lang('share_this_type'),$_smarty_tpl->tpl_vars['type']->value);?>
</label>
				<input name="users" type="text" class="form-control" id="ShareUsers" placeholder="<?php echo smarty_lang(array('code'=>'seperate_usernames_with_comma'),$_smarty_tpl);?>
" list="suggested_users">
				<datalist id='suggested_users'>
			       <option label='label1' value='value1123213'>
			       <option label='label2' value='value2213213'>
			       ...
			    </datalist>
			</div>
			<div class="form-group">
				<label for="message" class="block-label">
					<?php echo smarty_lang(array('code'=>'message'),$_smarty_tpl);?>
<span>&nbsp;&nbsp;<?php echo smarty_lang(array('code'=>'optional'),$_smarty_tpl);?>
</span>
				</label>
				<textarea name="message" id="message"  rows="5" class="form-control"></textarea>
				<input name="objectid" id="objectid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
">
			</div>
			<div class="clearfix text-right">
				<input type="submit" name="send_content" value="<?php echo smarty_lang(array('code'=>'send'),$_smarty_tpl);?>
" class="btn btn-submit btn-primary">
			</div>
	    </form>
	</div>


    <?php echo ANCHOR(array('place'=>"video_sharing_options",'data'=>$_smarty_tpl->tpl_vars['vdo']->value),$_smarty_tpl);?>

</div>
<!-- Share This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->

<script>
    $(document).ready(function(){
        $('body').on('submit','#cb_share_item',function(e){
            e.preventDefault();
            _cb.submit_share_form('share_form','<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
');return false;
        })
    })

    $( "#player_size_4, #player_size_5" ).keyup(function() {
	  var newWidth = '',
	  newHeight = '',
	  currentVal = $(this).val();

	  if ($.isNumeric( currentVal )) {
	  	newWidth = $('#player_size_4').val();
	  	newHeight = $('#player_size_5').val();
	  	updateEmbed(newWidth,newHeight,autoPlayEmbed);
	  } else {
	  	alert("Only integer values are allowed");
	  }
	});
</script><?php }} ?>
