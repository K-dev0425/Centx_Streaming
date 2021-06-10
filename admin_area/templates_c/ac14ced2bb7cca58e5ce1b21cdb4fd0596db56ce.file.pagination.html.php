<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:07:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/blocks/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:44952701560bc4a10d92243-62174920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac14ced2bb7cca58e5ce1b21cdb4fd0596db56ce' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/blocks/pagination.html',
      1 => 1622800750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44952701560bc4a10d92243-62174920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4a10da25b5_56313749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4a10da25b5_56313749')) {function content_60bc4a10da25b5_56313749($_smarty_tpl) {?>
<div class="dataTables_paginate paging_bootstrap">
    <ul class="pagination">
        <li class="prev disabled">
            <a href="#">
            <i class="icon-double-angle-left"></i></a></li>
        <li class="active"><?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
          <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><a class="active" <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
>&laquo;</a><?php }?>  <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 >&#8249;</a><?php }?> <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
>&#8250;</a><?php }?>
            <?php }?></li>
        <li class="next"> <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
>&raquo;</a><?php }?></li>
    </ul>

</div>


<?php }} ?>
