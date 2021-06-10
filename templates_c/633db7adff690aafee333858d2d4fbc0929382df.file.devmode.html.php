<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 02:46:45
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/global/devmode.html" */ ?>
<?php /*%%SmartyHeaderCode:207157964860bc37150fc5e0-59131209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '633db7adff690aafee333858d2d4fbc0929382df' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/global/devmode.html',
      1 => 1622800568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207157964860bc37150fc5e0-59131209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__devmsgs' => 0,
    'emptyMessage' => 0,
    'thebase' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc3715148664_59359114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc3715148664_59359114')) {function content_60bc3715148664_59359114($_smarty_tpl) {?>	<?php if (isset($_smarty_tpl->tpl_vars['__devmsgs']->value)) {?> 
		<div class="container">
		<div id="alldata">
			<div id="allqus">
				<div class="devData select_qus" style="display: none">
					<?php if (isset($_smarty_tpl->tpl_vars['emptyMessage'])) {$_smarty_tpl->tpl_vars['emptyMessage'] = clone $_smarty_tpl->tpl_vars['emptyMessage'];
$_smarty_tpl->tpl_vars['emptyMessage']->value = 'Sorry Ninja, nothing to show here'; $_smarty_tpl->tpl_vars['emptyMessage']->nocache = null; $_smarty_tpl->tpl_vars['emptyMessage']->scope = 0;
} else $_smarty_tpl->tpl_vars['emptyMessage'] = new Smarty_variable('Sorry Ninja, nothing to show here', null, 0);?>
					<h2>Select Queries (<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['select'];?>
)</h2>
					<?php if ($_smarty_tpl->tpl_vars['__devmsgs']->value['select']>=1) {?>
						<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['select_queries'],true);?>

					<?php } else { ?>
						<?php echo pr($_smarty_tpl->tpl_vars['emptyMessage']->value,true);?>

					<?php }?>
				</div>

				<div class="devData update_qus" style="display: none">
					<h2>Update Queries (<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['update'];?>
)</h2>
					<?php if ($_smarty_tpl->tpl_vars['__devmsgs']->value['update']>=1) {?>
						<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['update_queries'],true);?>

					<?php } else { ?>
						<?php echo pr($_smarty_tpl->tpl_vars['emptyMessage']->value,true);?>

					<?php }?>
				</div>

				<div class="devData delete_qus" style="display: none">
					<h2>Delete Queries(<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['delete'];?>
)</h2>
					<?php if ($_smarty_tpl->tpl_vars['__devmsgs']->value['delete']>=1) {?>
						<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['delete_queries'],true);?>

					<?php } else { ?>
						<?php echo pr($_smarty_tpl->tpl_vars['emptyMessage']->value,true);?>

					<?php }?>
				</div>

				<div class="devData insert_qus" style="display: none">
					<h2>Insert Queries(<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['insert'];?>
)</h2>
					<?php if ($_smarty_tpl->tpl_vars['__devmsgs']->value['insert']>=1) {?>
						<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['insert_queries'],true);?>

					<?php } else { ?>
						<?php echo pr($_smarty_tpl->tpl_vars['emptyMessage']->value,true);?>

					<?php }?>
				</div>

				<div class="devData execute_qus" style="display: none">
					<h2>Execute Queries(<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['execute'];?>
)</h2>
					<?php if ($_smarty_tpl->tpl_vars['__devmsgs']->value['execute']>=1) {?>
						<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['execute_queries'],true);?>

					<?php } else { ?>
						<?php echo pr($_smarty_tpl->tpl_vars['emptyMessage']->value,true);?>

					<?php }?>
				</div>

				<div class="devData expensive_qus" style="display: none">
					<h2>Expensive Query(<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['expensive_query']['memUsed'];?>
)</h2>
					<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['expensive_query'],true);?>

				</div>

				<div class="devData cheap_qus" style="display: none">
					<h2>Cheapest Query(<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['cheapest_query']['memUsed'];?>
)</h2>
					<?php echo pr($_smarty_tpl->tpl_vars['__devmsgs']->value['cheapest_query'],true);?>

				</div>

				<div class="devData memUsage" style="display: none">
					<h2>Memory Usage</h2>
					<p>Execution of whole page costed : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['total_memory_used'];?>
 MB</p>
				</div>

				<div class="devData allStats">
					<h2>Overall Stats</h2>
					<ul>
						<li>Queries (<?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['total_queries'];?>
)</li>
						<ul>
							<li>Insert : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['insert'];?>
</li>
							<li>Select : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['select'];?>
</li>
							<li>Update : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['update'];?>
</li>
							<li>Delete : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['delete'];?>
</li>
							<li>Count : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['count'];?>
</li>
							<li>Execute : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['execute'];?>
</li>
						</ul>
						<li>Total Queries : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['total_queries'];?>
</li>
						<li>Total Execution Time : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['total_query_exec_time'];?>
</li>
						<li>Total Memory Used : <?php echo $_smarty_tpl->tpl_vars['__devmsgs']->value['total_memory_used'];?>
</li>
						<li>Basedirctory : <?php echo $_smarty_tpl->tpl_vars['thebase']->value;?>
</li>
					</ul>
				</div>
			</div>
		</div>
			<select id="devmode_opts" name="devmode_opts" class="form-control" style="max-width: 50%">
				<option value="everything">Everything</option>
				<option value="all">All Queries</option>
				<option value="select_qus">Select Queries</option>
				<option value="update_qus">Update Queries</option>
				<option value="delete_qus">Delete Queries</option>
				<option value="insert_qus">Insert Queries</option>
				<option value="execute_qus">Execute Queries</option>
				<option value="expensive_qus">Expensive Query</option>
				<option value="cheap_qus">Cheapest Query</option>
				<option value="memUsage">Memory Usage</option>
				<option value="allStats">Overall Stats</option>
			</select>
			<button class="btn btn-primary" id="devButton">Display</button>
		</div>

		<script type="text/javascript">
			$('#devButton').on("click",function(){
				var theval = $('#devmode_opts').val();
				$('.devData').hide();
				if (theval != 'all' && theval != 'everything') {
					$('.'+theval).fadeIn('slow');
				} else if (theval == 'all') {
					$('.select_qus,.update_qus,.delete_qus,.insert_qus,.execute_qus').fadeIn('slow');
				} else if (theval == 'everything') {
					$('.select_qus,.update_qus,.delete_qus,.insert_qus,.execute_qus,.expensive_qus,.cheap_qus,.memUsage,.allStats').fadeIn('slow');
				}
			});
		</script>
	<?php }?>
<?php }} ?>
