<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:05:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/body.html" */ ?>
<?php /*%%SmartyHeaderCode:152856465860bc4998ed7733-65258179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77af18a15196d3c1bb0e7ff17f4a8988eae5cf54' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/body.html',
      1 => 1622800750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152856465860bc4998ed7733-65258179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Cbucket' => 0,
    'template_files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4998f20747_68230961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4998f20747_68230961')) {function content_60bc4998f20747_68230961($_smarty_tpl) {?><!doctype html>
<html lang="en">
	<head>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/global_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<body>	
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="main-container container" id="main-container">
	        <div class="main-container-inner">
				<div class="sidebar" id="sidebar">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/left_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
				<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#"><?php echo @constant('MAIN_PAGE');?>
</a>
							</li>
							<li class="active"> <?php echo @constant('SUB_PAGE');?>
</li>
						</ul><!-- .breadcrumb -->

						
					</div>
					<div class="page-content">
	                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/msg.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<!-- Setting Body File -->
						<?php if ($_smarty_tpl->tpl_vars['Cbucket']->value->show_page) {?>
	                        <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
	                            <?php echo include_template_file(array('file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

	                        <?php } ?>
						<?php }?>
						<!-- Setting Body File -->
					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_dir']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</body>
</html><?php }} ?>
