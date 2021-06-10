<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/quicklist/qlist_main.html" */ ?>
<?php /*%%SmartyHeaderCode:137344788360bc371463b9c3-07699175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa45a4fcad6ac27f0b00b16ca676b81b5cb7c9d4' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/quicklist/qlist_main.html',
      1 => 1622800592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137344788360bc371463b9c3-07699175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'litems_count' => 0,
    'qlist_videos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3714643e10_42674071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3714643e10_42674071')) {function content_60bc3714643e10_42674071($_smarty_tpl) {?><div id="qlist_main" class="quicklist_box">
	<div class="quicklist_box_head clearfix">
		<span class="quick_title">Quicklists<!-- (<span id="qlist_count" data="<?php echo $_smarty_tpl->tpl_vars['litems_count']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['litems_count']->value;?>
</span>) --></span>
		<div class="btn-group">
			<a class="ql_show-hide1 glyphicon glyphicon-minus btn btn-danger btn-sm" href="javascript:void(0)" onClick="quick_show_hide_toggle('#quicklist_cont')"></a>
			<a class="ql_rem glyphicon glyphicon-trash btn btn-danger btn-sm" href="javascript:void(0)"  ></a>
		</div>
	</div>
	<div id="quicklist_cont" class="quicklist_cont" style="display: block;">
		<?php  $_smarty_tpl->tpl_vars['ql_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ql_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['qlist_videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ql_item']->key => $_smarty_tpl->tpl_vars['ql_item']->value) {
$_smarty_tpl->tpl_vars['ql_item']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/quicklist/fast_qlist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } ?>
		<div id="my_quicklist" class="my_quicklist">
		</div>
	</div>
</div>

<style type="text/css">
	.btn-danger {
		background-color: #0080b4;
		border-color: #0080b4;
	}
</style><?php }} ?>
