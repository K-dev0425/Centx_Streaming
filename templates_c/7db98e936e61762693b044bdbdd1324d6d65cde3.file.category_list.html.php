<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:06
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:21006117860bc4bca4ad866-72174951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db98e936e61762693b044bdbdd1324d6d65cde3' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/blocks/category_list.html',
      1 => 1622800588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21006117860bc4bca4ad866-72174951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'cbvid' => 0,
    'userquery' => 0,
    'catname' => 0,
    'beats' => 0,
    'cats_array' => 0,
    'baseurl' => 0,
    'categories' => 0,
    'maincat' => 0,
    'type' => 0,
    'sub1' => 0,
    'sub2' => 0,
    'sub3' => 0,
    'sub4' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bca510495_59403464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bca510495_59403464')) {function content_60bc4bca510495_59403464($_smarty_tpl) {?>			<?php if (isset($_smarty_tpl->tpl_vars['category'])) {$_smarty_tpl->tpl_vars['category'] = clone $_smarty_tpl->tpl_vars['category'];
$_smarty_tpl->tpl_vars['category']->value = $_GET['cat']; $_smarty_tpl->tpl_vars['category']->nocache = null; $_smarty_tpl->tpl_vars['category']->scope = 0;
} else $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_GET['cat'], null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['category']->value!='All'&&is_numeric($_smarty_tpl->tpl_vars['category']->value)) {?> 
				<?php if (@constant('THIS_PAGE')=='videos') {?>
					<?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value); $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value), null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['nowdo'])) {$_smarty_tpl->tpl_vars['nowdo'] = clone $_smarty_tpl->tpl_vars['nowdo'];
$_smarty_tpl->tpl_vars['nowdo']->value = "videos"; $_smarty_tpl->tpl_vars['nowdo']->nocache = null; $_smarty_tpl->tpl_vars['nowdo']->scope = 0;
} else $_smarty_tpl->tpl_vars['nowdo'] = new Smarty_variable("videos", null, 0);?>

			<!--updated By Ricky-->
				<?php } elseif (@constant('THIS_PAGE')=='ads') {?>
					<?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = $_smarty_tpl->tpl_vars['cbvid']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value); $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable($_smarty_tpl->tpl_vars['cbvid']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value), null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['nowdo'])) {$_smarty_tpl->tpl_vars['nowdo'] = clone $_smarty_tpl->tpl_vars['nowdo'];
$_smarty_tpl->tpl_vars['nowdo']->value = "videos"; $_smarty_tpl->tpl_vars['nowdo']->nocache = null; $_smarty_tpl->tpl_vars['nowdo']->scope = 0;
} else $_smarty_tpl->tpl_vars['nowdo'] = new Smarty_variable("videos", null, 0);?>
			<!--//-->

				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = $_smarty_tpl->tpl_vars['userquery']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value); $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->get_category_name($_smarty_tpl->tpl_vars['category']->value), null, 0);?>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = $_smarty_tpl->tpl_vars['catname']->value['category_name']; $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable($_smarty_tpl->tpl_vars['catname']->value['category_name'], null, 0);?>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['catname'])) {$_smarty_tpl->tpl_vars['catname'] = clone $_smarty_tpl->tpl_vars['catname'];
$_smarty_tpl->tpl_vars['catname']->value = 'All'; $_smarty_tpl->tpl_vars['catname']->nocache = null; $_smarty_tpl->tpl_vars['catname']->scope = 0;
} else $_smarty_tpl->tpl_vars['catname'] = new Smarty_variable('All', null, 0);?>
			<?php }?>
			<?php if (@constant('BEATSLIST')) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['cats_array'])) {$_smarty_tpl->tpl_vars['cats_array'] = clone $_smarty_tpl->tpl_vars['cats_array'];
$_smarty_tpl->tpl_vars['cats_array']->value = $_smarty_tpl->tpl_vars['beats']->value->get_categories(); $_smarty_tpl->tpl_vars['cats_array']->nocache = null; $_smarty_tpl->tpl_vars['cats_array']->scope = 0;
} else $_smarty_tpl->tpl_vars['cats_array'] = new Smarty_variable($_smarty_tpl->tpl_vars['beats']->value->get_categories(), null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = $_smarty_tpl->tpl_vars['cats_array']->value; $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['cats_array']->value, null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['type'])) {$_smarty_tpl->tpl_vars['type'] = clone $_smarty_tpl->tpl_vars['type'];
$_smarty_tpl->tpl_vars['type']->value = 'beats'; $_smarty_tpl->tpl_vars['type']->nocache = null; $_smarty_tpl->tpl_vars['type']->scope = 0;
} else $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('beats', null, 0);?>
			<?php }?>
			<span class="lastclicked" style="display:none;"></span>
			<span class="lastlevel" style="display:none;"></span>
			<div class="dropdown"> <!-- Start of category code -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['catname']->value;?>

				<span class="icon-down-arrow"></span>
				</a>
				<ul class="dropdown-menu">
				<li>
					<div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php if (@constant('THIS_PAGE')=='videos') {?>videos.php<?php } elseif (@constant('THIS_PAGE')=='ads') {?>ads.php<?php } else { ?>channels.php<?php }?>">All</a>
					</div>
				</li>
					<?php if (isset($_smarty_tpl->tpl_vars['level'])) {$_smarty_tpl->tpl_vars['level'] = clone $_smarty_tpl->tpl_vars['level'];
$_smarty_tpl->tpl_vars['level']->value = '1'; $_smarty_tpl->tpl_vars['level']->nocache = null; $_smarty_tpl->tpl_vars['level']->scope = 0;
} else $_smarty_tpl->tpl_vars['level'] = new Smarty_variable('1', null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['maincat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['maincat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['maincat']->key => $_smarty_tpl->tpl_vars['maincat']->value) {
$_smarty_tpl->tpl_vars['maincat']->_loop = true;
?>
						<li>
							<div>
								<a href="<?php echo cblink(array('name'=>'category','data'=>$_smarty_tpl->tpl_vars['maincat']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>
" class=""><?php echo $_smarty_tpl->tpl_vars['maincat']->value['category_name'];?>
</a>
								<?php if ($_smarty_tpl->tpl_vars['maincat']->value['children']) {?><i class="icon-right-arrow trigger" data-level="1"></i><?php }?>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['maincat']->value['children']) {?> 
								<ul class="dropdown-menu sub-menu">
								<?php if (isset($_smarty_tpl->tpl_vars['level'])) {$_smarty_tpl->tpl_vars['level'] = clone $_smarty_tpl->tpl_vars['level'];
$_smarty_tpl->tpl_vars['level']->value = '2'; $_smarty_tpl->tpl_vars['level']->nocache = null; $_smarty_tpl->tpl_vars['level']->scope = 0;
} else $_smarty_tpl->tpl_vars['level'] = new Smarty_variable('2', null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['sub1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maincat']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub1']->key => $_smarty_tpl->tpl_vars['sub1']->value) {
$_smarty_tpl->tpl_vars['sub1']->_loop = true;
?>
									<li>
										<div>
											<a href="<?php echo cblink(array('name'=>'category','data'=>$_smarty_tpl->tpl_vars['sub1']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>
" class=""><?php echo $_smarty_tpl->tpl_vars['sub1']->value['category_name'];?>
 </a>
											<?php if ($_smarty_tpl->tpl_vars['sub1']->value['children']) {?><i class="icon-right-arrow trigger" data-level="2" ></i><?php }?>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['sub1']->value['children']) {?>
											<ul class="dropdown-menu sub-menu"> 
											<?php if (isset($_smarty_tpl->tpl_vars['level'])) {$_smarty_tpl->tpl_vars['level'] = clone $_smarty_tpl->tpl_vars['level'];
$_smarty_tpl->tpl_vars['level']->value = '3'; $_smarty_tpl->tpl_vars['level']->nocache = null; $_smarty_tpl->tpl_vars['level']->scope = 0;
} else $_smarty_tpl->tpl_vars['level'] = new Smarty_variable('3', null, 0);?>
											<?php  $_smarty_tpl->tpl_vars['sub2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub1']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub2']->key => $_smarty_tpl->tpl_vars['sub2']->value) {
$_smarty_tpl->tpl_vars['sub2']->_loop = true;
?>
											<li>
												<div>
													<a href="<?php echo cblink(array('name'=>'category','data'=>$_smarty_tpl->tpl_vars['sub2']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>
" class=""><?php echo $_smarty_tpl->tpl_vars['sub2']->value['category_name'];?>
 </a>
													<?php if ($_smarty_tpl->tpl_vars['sub2']->value['children']) {?><i class="icon-right-arrow trigger"data-level="3" ></i><?php }?>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['sub2']->value['children']) {?>
													<ul class="dropdown-menu sub-menu">
													<?php if (isset($_smarty_tpl->tpl_vars['level'])) {$_smarty_tpl->tpl_vars['level'] = clone $_smarty_tpl->tpl_vars['level'];
$_smarty_tpl->tpl_vars['level']->value = '4'; $_smarty_tpl->tpl_vars['level']->nocache = null; $_smarty_tpl->tpl_vars['level']->scope = 0;
} else $_smarty_tpl->tpl_vars['level'] = new Smarty_variable('4', null, 0);?>
													<?php  $_smarty_tpl->tpl_vars['sub3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub2']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub3']->key => $_smarty_tpl->tpl_vars['sub3']->value) {
$_smarty_tpl->tpl_vars['sub3']->_loop = true;
?>
													<li>
														<div>
															<a href="<?php echo cblink(array('name'=>'category','data'=>$_smarty_tpl->tpl_vars['sub3']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>
"  class=""><?php echo $_smarty_tpl->tpl_vars['sub3']->value['category_name'];?>
 </a>
															<?php if ($_smarty_tpl->tpl_vars['sub3']->value['children']) {?><i class="icon-right-arrow trigger" data-level="4" ></i><?php }?>
														</div>
													
														<?php if ($_smarty_tpl->tpl_vars['sub3']->value['children']) {?>
															<ul class="dropdown-menu sub-menu">
																<?php if (isset($_smarty_tpl->tpl_vars['level'])) {$_smarty_tpl->tpl_vars['level'] = clone $_smarty_tpl->tpl_vars['level'];
$_smarty_tpl->tpl_vars['level']->value = '5'; $_smarty_tpl->tpl_vars['level']->nocache = null; $_smarty_tpl->tpl_vars['level']->scope = 0;
} else $_smarty_tpl->tpl_vars['level'] = new Smarty_variable('5', null, 0);?>
																<?php  $_smarty_tpl->tpl_vars['sub4'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub4']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub3']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub4']->key => $_smarty_tpl->tpl_vars['sub4']->value) {
$_smarty_tpl->tpl_vars['sub4']->_loop = true;
?>
																	<li>
																		<div>
																			<a href="<?php echo cblink(array('name'=>'category','data'=>$_smarty_tpl->tpl_vars['sub4']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value));?>
"><?php echo $_smarty_tpl->tpl_vars['sub4']->value['category_name'];?>
</a>
																			<?php if ($_smarty_tpl->tpl_vars['sub4']->value['children']) {?><i class="icon-right-arrow trigger" data-level="5" ></i><?php }?>
																		</div>
																	</li>
																<?php } ?>
															</ul>
														<?php }?>
														</li>
													<?php } ?>
													</ul>
												<?php }?>
												</li>
											<?php } ?>
											</ul>
										<?php }?>
									</li>
								<?php } ?>
								</ul>
							<?php }?>
						</li>
					<?php } ?>
				</ul>
				
			</div> <!-- End of category code -->
		

<script type="text/javascript">
	//$(document).ready(function(){
			var level = '<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
';
	//});
	

</script><?php }} ?>
