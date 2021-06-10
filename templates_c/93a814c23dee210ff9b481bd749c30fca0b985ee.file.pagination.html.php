<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:06
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:81380103060bc4bca885988-58696866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93a814c23dee210ff9b481bd749c30fca0b985ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/pagination.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81380103060bc4bca885988-58696866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagination' => 0,
    'commentPagination' => 0,
    'first_link' => 0,
    'pre_link' => 0,
    'next_link' => 0,
    'last_link' => 0,
    'type' => 0,
    'type_id' => 0,
    'last_update' => 0,
    'total' => 0,
    'object_type' => 0,
    'pre_page' => 0,
    'next_page' => 0,
    'total_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bca8ba218_01089062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bca8ba218_01089062')) {function content_60bc4bca8ba218_01089062($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pagination']->value&&!$_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="clearfix pagination-holder text-center">
  <ul align="center" class="pagination pagination-center clearfix">

      <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['first_link']->value;?>
 ><i class="fa fa-angle-double-left "></i></a></li><?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['pre_link']->value;?>
 ><i class="icon-left-arrow"></i></a></li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a <?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
 ><i class="icon-right-arrow"></i></a></li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?><li>  <a <?php echo $_smarty_tpl->tpl_vars['last_link']->value;?>
 ><i class="fa fa-angle-double-right"></i></a></li><?php }?>
     </ul>  
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['commentPagination']->value) {?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mtl">
  <ul align="center" class="pagination pagination-center">
         
        
        <?php if ($_smarty_tpl->tpl_vars['first_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','1','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-left"></i></a></li>
         <?php }?>


      
       <?php if ($_smarty_tpl->tpl_vars['pre_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['pre_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-left"></i></a>
       </li><?php }?> 

             <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
  


       <?php if ($_smarty_tpl->tpl_vars['next_link']->value!='') {?><li><a href="javascript:void(0)" 
       onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
       <i class="fa fa-angle-right"></i></a>
       </li><?php }?>
       
        <?php if ($_smarty_tpl->tpl_vars['last_link']->value!='') {?>
        <li>  <a href="javascript:void(0)"
          onclick="_cb.getAllComments('<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['last_update']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['object_type']->value;?>
')" >
          <i class="fa fa-angle-double-right"></i></a></li>
         <?php }?>
     </ul>  
</div>
<?php }?> 
<?php }} ?>
