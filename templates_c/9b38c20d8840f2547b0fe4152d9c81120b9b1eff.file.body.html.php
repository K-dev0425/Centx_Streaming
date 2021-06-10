<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/body.html" */ ?>
<?php /*%%SmartyHeaderCode:1696350660bc3714267e82-92300087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b38c20d8840f2547b0fe4152d9c81120b9b1eff' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/body.html',
      1 => 1622800586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696350660bc3714267e82-92300087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc37142bc3a1_92012985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc37142bc3a1_92012985')) {function content_60bc37142bc3a1_92012985($_smarty_tpl) {?><!-- This Condition is for view photo ajax mode--> 
<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/global_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>    
	<body>
    	<div id="container" class="dark bright">
    	<?php echo ANCHOR(array('place'=>"cb_floating_box"),$_smarty_tpl);?>

			<?php echo ANCHOR(array('place'=>'premium_button'),$_smarty_tpl);?>

			<!-- This Condition is added for view photo ajx based request -->
			<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
           		 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        	<?php }?>
			<!-- Message -->
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
			    <?php echo include_template_file(array('file'=>$_smarty_tpl->tpl_vars['file']->value),$_smarty_tpl);?>

			<?php } ?>

			<!-- This Condition is for view photo ajax mode--> 
			<?php if ((!isset($_GET['moto'])||$_GET['moto']!='ajax')) {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		</div>
    </body>
</html>
<!--<?php echo showDevWitch();?>
--><?php }} ?>
