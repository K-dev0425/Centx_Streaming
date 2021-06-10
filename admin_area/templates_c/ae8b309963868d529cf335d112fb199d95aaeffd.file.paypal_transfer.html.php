<?php /* Smarty version Smarty-3.1.15, created on 2021-06-07 04:34:38
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/paypal_transfer.html" */ ?>
<?php /*%%SmartyHeaderCode:84185751060bda1de216e61-02252293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae8b309963868d529cf335d112fb199d95aaeffd' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/paypal_transfer.html',
      1 => 1622800744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84185751060bda1de216e61-02252293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInput' => 0,
    'deposit_fund' => 0,
    'item' => 0,
    'page' => 0,
    'dateInput' => 0,
    'last_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bda1de294636_23157897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bda1de294636_23157897')) {function content_60bda1de294636_23157897($_smarty_tpl) {?><link href="../theme/stylesheet.css" rel="stylesheet" type="text/css">
<div class="heading">
    <h2><?php echo smarty_lang(array('code'=>"paypal_transfer"),$_smarty_tpl);?>
</h2>
</div>

<!--<a class="btn btn-primary btn-sm pull-right" href="?mode=add">Add New Level <b>+</b></a>-->
<br>

<form action="paypal_transfer.php" id="form_deposit_payment" method="get">
    <div class="filter_box">
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 text-right">
                <div class="form-group" style="display: inline-block">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
">
                </div>
                <div class="form-group" style="display: inline-block">
                    <select name="date" id="select_date" data-placement="">
                        <option value="all">All Time</option>
                        <option value="today">Today</option>
                        <option value="yesterday">Yesterday</option>
                        <option value="this_week">This Week</option>
                        <option value="this_month">This Month</option>
                        <option value="this_year">This Year</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Transaction ID</th>
            <th>User Name</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Transfer Type</th>
            <th>Time</th>
            <!--<th>End Time</th>-->
        </tr>
        </thead>

        <tbody>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deposit_fund']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['txn_id'];?>
</td>
            <td><a href="/view_channel.php?user=<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</a></td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
 USD</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['transfer_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['start_time'];?>
</td>
            <!--<td><?php echo $_smarty_tpl->tpl_vars['item']->value['start_time'];?>
</td>-->
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <div class="dataTables_paginate paging_bootstrap">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['page']->value==1) {?>
            <li class="prev disabled">
                <?php } else { ?>
            <li class="prev">
                <?php }?>
                <a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=1">
                    <i class="icon-double-angle-left"></i></a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['page']->value>2) {?>
            <li><a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value>1) {?>
            <li><a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a></li>
            <?php }?>
            <li class="active"><a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['last_page']->value) {?>
            <li><a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['last_page']->value) {?>
            <li><a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li>
            <?php }?>

            <li class="next"> <a href="?username=<?php echo $_smarty_tpl->tpl_vars['userInput']->value;?>
&date=<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['last_page']->value;?>
">&raquo;</a></li>
        </ul>

    </div>

</form>

<script>
    $('#username').keyup(function (e) {
        if (e.keyCode == 13) {
            $('#form_deposit_payment').submit();
        }
    });

    $('#select_date').change(function () {
        $('#form_deposit_payment').submit();
    });

    var selected_date = '<?php echo $_smarty_tpl->tpl_vars['dateInput']->value;?>
';
    $('#select_date option[value="'+ selected_date +'"]').prop('selected', true);
</script>


<?php }} ?>
