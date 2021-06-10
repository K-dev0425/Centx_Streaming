<?php /* Smarty version Smarty-3.1.15, created on 2021-06-10 00:32:57
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/account_report.html" */ ?>
<?php /*%%SmartyHeaderCode:131347944660bc4943f0af59-63496901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b1c5d8dbcf852b8d58eea5351f6ef0194af921' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/account_report.html',
      1 => 1623285177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131347944660bc4943f0af59-63496901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc49440426b8_84130706',
  'variables' => 
  array (
    'userquery' => 0,
    'video_total_views' => 0,
    'total_made' => 0,
    'total_spent' => 0,
    'total_seconds_ad' => 0,
    'total_seconds_content' => 0,
    'subscribers_total' => 0,
    'subscribers_today' => 0,
    'subscribers_week' => 0,
    'subscribers_month' => 0,
    'subscribers_year' => 0,
    'top_10_views_videos' => 0,
    'bg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc49440426b8_84130706')) {function content_60bc49440426b8_84130706($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<div class="container manage-page mb-30">
    <div class="cb-box br-10">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/userMenuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="mainContent col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="total_views mb-15">
                    Total views from all videos: <span class="text-bold ft-15"><?php echo $_smarty_tpl->tpl_vars['video_total_views']->value;?>
</span>
                </div>
                <div class="mb-10">
                    Money you made: <span class="text-bold ft-15">$<?php echo $_smarty_tpl->tpl_vars['total_made']->value;?>
 USD</span>
                </div>
                <div class="mb-15">
                    Money you spent: <span class="text-bold ft-15">$<?php echo $_smarty_tpl->tpl_vars['total_spent']->value;?>
 USD</span>
                </div>
                <div class="mb-10">
                    Total seconds you played as an advertiser: <span class="text-bold ft-15"><?php echo $_smarty_tpl->tpl_vars['total_seconds_ad']->value;?>
s</span>
                </div>
                <div class="mb-15">
                    Total seconds you played as a contentor: <span class="text-bold ft-15"><?php echo $_smarty_tpl->tpl_vars['total_seconds_content']->value;?>
s</span>
                </div>
                <div class="subscribe_section full-width pd-5">
                    <p class="ft-18 text-center">Subscribers</p>
                    <table class="table table-striped table-hover">
                        <thead>

                        <tr>
                            <th class="text-center">All Time</th>
                            <th class="text-center">Today's Users</th>
                            <th class="text-center">This Week</th>
                            <th class="text-center">This Month</th>
                            <th class="text-center">This Year</th>
                        </tr></thead>
                        <tbody class="reports">
                        <tr>
                            <td><span class="show text-center"><strong><?php echo $_smarty_tpl->tpl_vars['subscribers_total']->value;?>
</strong></span></td>
                            <td><span class="show text-center"><strong><?php echo $_smarty_tpl->tpl_vars['subscribers_today']->value;?>
</strong></span></td>
                            <td><span class="show text-center"><strong><?php echo $_smarty_tpl->tpl_vars['subscribers_week']->value;?>
</strong></span></td>
                            <td><span class="show text-center"><strong><?php echo $_smarty_tpl->tpl_vars['subscribers_month']->value;?>
</strong></span></td>
                            <td><span class="show text-center"><strong><?php echo $_smarty_tpl->tpl_vars['subscribers_year']->value;?>
</strong></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mb-15 top_video_viewer text-center">
                    <p class="ft-18">Top videos for views(Up to 10)</p>
                    <table class="table table-bordered table-striped manageUsersTable">
                        <tr>
                            <td><i class="icon-facetime-video"></i> Videos Details</td>
                            
                            <td class="text-center">Option</td>
                        </tr>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['name'] = 'uvid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['top_10_views_videos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['uvid']['total']);
?>
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/manage/account_video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('video'=>$_smarty_tpl->tpl_vars['top_10_views_videos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['uvid']['index']],'control'=>'full','bg'=>$_smarty_tpl->tpl_vars['bg']->value), 0);?>

                        <?php endfor; else: ?>
                        <div><strong><em><?php echo smarty_lang(array('code'=>"you_dont_have_videos"),$_smarty_tpl);?>
</em></strong></div>
                        <?php endif; ?>
                    </table>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
