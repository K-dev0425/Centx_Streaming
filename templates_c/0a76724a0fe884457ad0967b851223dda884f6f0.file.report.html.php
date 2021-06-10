<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:08
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/report.html" */ ?>
<?php /*%%SmartyHeaderCode:187634648460bc4bcca92eb5-86164780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a76724a0fe884457ad0967b851223dda884f6f0' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/common/report.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187634648460bc4bcca92eb5-86164780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'params' => 0,
    'flag_options' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bccab0275_77406588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bccab0275_77406588')) {function content_60bc4bccab0275_77406588($_smarty_tpl) {?><!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 -->
<div id="flag_item" class="action_box" <?php if ($_smarty_tpl->tpl_vars['type']->value=='photos'||$_smarty_tpl->tpl_vars['type']->value=='videos') {?>style="display:none"<?php }?>>
	<div class="form_container">
		<form id="flag_form" name="flag_form"  method="post" action="#">
			<div class="alert alert-info">
				<?php echo sprintf(lang("report_text"),$_smarty_tpl->tpl_vars['params']->value['type']);?>

			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['flag_options'])) {$_smarty_tpl->tpl_vars['flag_options'] = clone $_smarty_tpl->tpl_vars['flag_options'];
$_smarty_tpl->tpl_vars['flag_options']->value = get_flag_options($_smarty_tpl->tpl_vars['type']->value); $_smarty_tpl->tpl_vars['flag_options']->nocache = null; $_smarty_tpl->tpl_vars['flag_options']->scope = 0;
} else $_smarty_tpl->tpl_vars['flag_options'] = new Smarty_variable(get_flag_options($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
			<label for="flag_type" class="label-block"><?php echo lang("category");?>
</label>
			<div class="form-group custom-elements clearfix">
				<select class="form-control" name="flag_type" id="flag_type">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['flag_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option>
					<?php } ?>
				</select>
			</div>
			<input type="button" name="send_content" value="<?php echo sprintf(lang('flag'),$_smarty_tpl->tpl_vars['params']->value['type']);?>
" class="btn btn-primary" onclick="_cb.flag_objectNew('flag_form','<?php echo $_smarty_tpl->tpl_vars['params']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['params']->value['userid'];?>
','<?php echo $_smarty_tpl->tpl_vars['params']->value['type'];?>
')">
		</form>
	</div>
</div>
<!-- Flag This <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 --><?php }} ?>
