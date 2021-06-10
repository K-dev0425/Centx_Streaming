<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 11:35:04
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/search.html" */ ?>
<?php /*%%SmartyHeaderCode:167496525360bcb2e8df9aa9-42744874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679acd72a699ad9df70df53bbc63dc38d4a3923c' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/search.html',
      1 => 1622800580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167496525360bcb2e8df9aa9-42744874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'search_type_title' => 0,
    'results' => 0,
    'template_var' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bcb2e8ee9ce7_31721321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bcb2e8ee9ce7_31721321')) {function content_60bcb2e8ee9ce7_31721321($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div id="main" class="clearfix container">
	<div class="clearfix">
		<section class="clearfix videos">
			<div class="clearfix leaderboard-ad ad">
				<?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

			</div>
			<div class="clearfix well" style="overflow:overlay;">
			<h1><?php echo $_smarty_tpl->tpl_vars['search_type_title']->value;?>
</h1>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
			<div class="clearfix row">
				<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
					<?php if (isset($_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value])) {$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value] = clone $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value];
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value]->value = $_smarty_tpl->tpl_vars['result']->value; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value]->nocache = null; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value]->scope = 0;
} else $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['template_var']->value] = new Smarty_variable($_smarty_tpl->tpl_vars['result']->value, null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['display_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="clearfix well">
				<?php echo smarty_lang(array('code'=>'no_results_found'),$_smarty_tpl);?>

			</div>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</section>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#cbsearchtype a").on({
			click: function(e){
				e.preventDefault();
				var searchtype = $("#SearchType").val();
				var buttonText = $(this).text().toLowerCase();
				if($("#SearchType option[value='"+ buttonText +"']").length > 0){
					$("#SearchType option:selected").removeAttr("selected");
					$("#SearchType option[value='"+ buttonText +"']").attr("selected" , "selected");
					$(this).parents("ul").find(".active").removeClass("active");
					$(this).parent().addClass("active");

				}
			}
		});

	});

</script><?php }} ?>
