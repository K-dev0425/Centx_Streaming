<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:15:06
         compiled from "/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/ads.html" */ ?>
<?php /*%%SmartyHeaderCode:53300424960bc4bca4242f7-20765859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eafeb7f2bd8dc89b13855816103a09af1ef9388' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/styles/cb_28/layout/ads.html',
      1 => 1622800586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53300424960bc4bca4242f7-20765859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userquery' => 0,
    'myAccountLinks' => 0,
    'sorting_links' => 0,
    'sort' => 0,
    'name' => 0,
    'time_links' => 0,
    'videos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4bca49c5f9_61848372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4bca49c5f9_61848372')) {function content_60bc4bca49c5f9_61848372($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['myAccountLinks'])) {$_smarty_tpl->tpl_vars['myAccountLinks'] = clone $_smarty_tpl->tpl_vars['myAccountLinks'];
$_smarty_tpl->tpl_vars['myAccountLinks']->value = $_smarty_tpl->tpl_vars['userquery']->value->my_account_links(); $_smarty_tpl->tpl_vars['myAccountLinks']->nocache = null; $_smarty_tpl->tpl_vars['myAccountLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['myAccountLinks'] = new Smarty_variable($_smarty_tpl->tpl_vars['userquery']->value->my_account_links(), null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['leftMenuLinks'])) {$_smarty_tpl->tpl_vars['leftMenuLinks'] = clone $_smarty_tpl->tpl_vars['leftMenuLinks'];
$_smarty_tpl->tpl_vars['leftMenuLinks']->value = array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7); $_smarty_tpl->tpl_vars['leftMenuLinks']->nocache = null; $_smarty_tpl->tpl_vars['leftMenuLinks']->scope = 0;
} else $_smarty_tpl->tpl_vars['leftMenuLinks'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['myAccountLinks']->value,7), null, 0);?>
<div id="main" class="clearfix container">
    <div class="clearfix">
        <section id="content" class="clearfix videos" style="width: 100%">
            <div class="clearfix leaderboard-ad ad">
                <?php echo getAd(array('place'=>'ad_728x90'),$_smarty_tpl);?>

            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['categories'])) {$_smarty_tpl->tpl_vars['categories'] = clone $_smarty_tpl->tpl_vars['categories'];
$_smarty_tpl->tpl_vars['categories']->value = pullCategories(); $_smarty_tpl->tpl_vars['categories']->nocache = null; $_smarty_tpl->tpl_vars['categories']->scope = 0;
} else $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(pullCategories(), null, 0);?>

            <?php if (isset($_smarty_tpl->tpl_vars['sorting_links'])) {$_smarty_tpl->tpl_vars['sorting_links'] = clone $_smarty_tpl->tpl_vars['sorting_links'];
$_smarty_tpl->tpl_vars['sorting_links']->value = sorting_links(); $_smarty_tpl->tpl_vars['sorting_links']->nocache = null; $_smarty_tpl->tpl_vars['sorting_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['sorting_links'] = new Smarty_variable(sorting_links(), null, 0);?>
            <div class="filter-dropdowns clearfix">
                <div class="cat-col col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/category_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>'ads'), 0);?>

                </div>
                <div class="sorting-col col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                    <!--Sorting By View-->
                    <div class="dropdown">
                        <?php if ($_GET['sort']) {?>
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['sort'])) {?>
                        <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="icon-down-arrow"></span></a>
                        <?php }?>
                        <?php } ?>
                        <?php } else { ?>
                        <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">Recent <span class="icon-down-arrow"></span></a>
                        <?php }?>

                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sorting_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li>
                                <a href="<?php echo cblink(array('name'=>'sort','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'ads'),$_smarty_tpl);?>
&sorting=sort" <?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected" <?php }?>><?php if ($_GET['sort']==$_smarty_tpl->tpl_vars['sort']->value) {?><i class="icon-tick"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <!--Sorting By time-->
                    <?php if (isset($_smarty_tpl->tpl_vars['time_links'])) {$_smarty_tpl->tpl_vars['time_links'] = clone $_smarty_tpl->tpl_vars['time_links'];
$_smarty_tpl->tpl_vars['time_links']->value = time_links(); $_smarty_tpl->tpl_vars['time_links']->nocache = null; $_smarty_tpl->tpl_vars['time_links']->scope = 0;
} else $_smarty_tpl->tpl_vars['time_links'] = new Smarty_variable(time_links(), null, 0);?>
                    <div class="dropdown">
                        <?php if ($_GET['time']) {?>

                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                        <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value&&isset($_GET['time'])) {?>
                        <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="icon-down-arrow"></span></a>
                        <?php }?>
                        <?php } ?>
                        <?php } else { ?>
                        <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">all time <span class="icon-down-arrow"></span></a>
                        <?php }?>
                        <ul class="dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['time_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <li>
                                <a href="<?php echo cblink(array('name'=>'time','sort'=>$_smarty_tpl->tpl_vars['sort']->value,'type'=>'ads'),$_smarty_tpl);?>
" <?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?> class="selected"<?php }?>><?php if ($_GET['time']==$_smarty_tpl->tpl_vars['sort']->value) {?><i class="icon-tick"></i><?php }?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearfix row">
                <?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
                <div class="item-video col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/videos/video.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display_type'=>'homeVideos'), 0);?>

                </div>
                <?php } ?>
                <?php } else { ?>
                <div class="well well-info"><?php echo smarty_lang(array('code'=>"no_videos_found"),$_smarty_tpl);?>
</div>
                <?php }?>
            </div>
            <!-- Pagination -->
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['style_dir']->value)."/blocks/pagination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- end of Pagination -->
        </section>
        <!-- videos ended -->
    </div>
</div>
<script>

    var last_clicked;
    $(document).ready(function(){

        $('.main-links').find('li:eq(4)').addClass('active');

        $(".dropdown-menu > li > div > i.trigger").on("click",function(e){
            var current=$(this).parent().next();
            var grandparent=$(this).parent().parent().parent();
            var list_siblings=$(this).parent().parent().siblings();
            var parent_li = $(this).parent().parent();
            var sibling_triggers=list_siblings.children('div').children('i.trigger');
            var level = $(this).data("level");
            var last_level = "";

            if($(this).hasClass('icon-right-arrow')){
                $(sibling_triggers).addClass('icon-right-arrow');
                $(sibling_triggers).removeClass('icon-left-arrow');
            }

            if($(this).hasClass('icon-left-arrow')||$(this).hasClass('icon-right-arrow'))
                $(this).toggleClass('icon-right-arrow icon-left-arrow');

            grandparent.find('.icon-left-arrow').not(this).children().toggleClass('icon-right-arrow icon-left-arrow');
            grandparent.find(".sub-menu:visible").not(current).hide();
            current.toggle();

            last_clicked = $(".lastclicked").data("lastClicked");
            last_level = $(".lastlevel").data("lastLevel");

            if (last_clicked  && last_level > level){
                var last_clicked_triggers_next = last_clicked.find('i.trigger');
                last_clicked_triggers_next.addClass('icon-right-arrow');
                last_clicked_triggers_next.removeClass('icon-left-arrow');

                var last_clicked_triggers_prev = last_clicked.parents(".sub-menu").find('div i.trigger');
                console.log(last_clicked.prev().find('i.trigger').length);
                last_clicked_triggers_prev.addClass('icon-right-arrow');
                last_clicked_triggers_prev.removeClass('icon-left-arrow');
            }

            $(".lastclicked").data("lastClicked", parent_li);
            $(".lastlevel").data("lastLevel", level);

            e.stopPropagation();
        });
        $(".dropdown-menu > li > div > i:not(.trigger)").on("click",function(){
            var root=$(this).closest('.dropdown');
            root.find('.icon-left-arrow').toggleClass('icon-right-arrow icon-left-arrow');
            root.find('.sub-menu:visible').hide();
        });
    });
</script><?php }} ?>
