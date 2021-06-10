<?php /* Smarty version Smarty-3.1.15, created on 2021-06-06 04:07:44
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/blocks/advanced_search.html" */ ?>
<?php /*%%SmartyHeaderCode:210722965060bc4a10d532f7-87234605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '770f5bedb613fcdee32594a86bb0c0e174908672' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/blocks/advanced_search.html',
      1 => 1622800752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210722965060bc4a10d532f7-87234605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_array' => 0,
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc4a10d7b3a4_64217922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc4a10d7b3a4_64217922')) {function content_60bc4a10d7b3a4_64217922($_smarty_tpl) {?><div class="advanceSearchButton clearfix">
    <a href="#" class="btn btn-primary btn-sm pull-right current after" onclick="$('#searchdiv').toggle();return false;" style="margin-bottom: 0px;position: relative; top: 15px;">
        Advanced Search
        <i class="glyphicon glyphicon-chevron-down down"></i>
         <i class="glyphicon glyphicon-chevron-up up" style="display:none"></i>
    </a>
    
</div>
<div class="search_box well" id="searchdiv" <?php if ($_COOKIE['show_searchdiv_search']!='show') {?> style="display:none"<?php }?>>
    <form id="video_search" name="video_search" method="get" action="video_manager.php" class="video_search">
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                    <label for="title">Video title</label>
                    <input name="title" type="text" class="form-control" id="title" value="<?php echo get_form_val('title','divue');?>
" />
                </div>  
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="videokey">Video key</label>
                    <input class="form-control" name="videokey" type="text" id="videokey" value="<?php echo get_form_val('videokey',true);?>
" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="videoid">Video id</label>
                    <input class="form-control" name="videoid" type="text" id="videoid" value="<?php echo get_form_val('videoid',true);?>
" />
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                    <label for="tags">Video tags</label>
                    <input class="form-control" name="tags" type="text" id="tags" value="<?php echo get_form_val('tags',true);?>
" />
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="featured">Featured</label>
                    <select class="form-control" name="featured" id="featured">
                            <option value=""> </option>
                            <option value="no" <?php if ($_GET['featured']=='no') {?> selected="selected"<?php }?>>No</option>
                            <option value="yes" <?php if ($_GET['featured']=='yes') {?> selected="selected"<?php }?>>Yes</option>
                           
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">

                    <label for="active">Active</label>
                    <select class="form-control" name="active" id="active">
                    <option value=""> </option>
                        <option value="yes" <?php if ($_GET['active']=='yes') {?> selected="selected"<?php }?>>Yes</option>
                        <option value="no" <?php if ($_GET['active']=='no') {?> selected="selected"<?php }?>>No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="status">Conversion Status</label>
                    <select class="form-control" name="status" id="status">
                     <option value=""> </option>
                        <option value="Successful" <?php if ($_GET['status']=='Successful') {?> selected="selected"<?php }?>>Successful</option>
                        <option value="Processing" <?php if ($_GET['status']=='Processing') {?> selected="selected"<?php }?>>Processing</option>
                        <option value="Failed" <?php if ($_GET['status']=='Failed') {?> selected="selected"<?php }?>>Failed</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="userid">Userid</label>
                    <input class="form-control" name="userid" type="text" id="userid" value="<?php echo get_form_val('userid',true);?>
" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Category</label>
                    
                    <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['type'] = 'dropdown';?>
                    <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['category_type'] = 'video';?>
                    <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['class'] = "form-control";?>
                    <?php $_smarty_tpl->createLocalArrayVariable('cat_array', null, 0);
$_smarty_tpl->tpl_vars['cat_array']->value['with_all'] = true;?>
                    <?php echo $_smarty_tpl->tpl_vars['formObj']->value->createField($_smarty_tpl->tpl_vars['cat_array']->value);?>

                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="search" id="search" value="Search" class="btn btn-success btn-sm"/>
        </div>
    </form>
</div>


 <script type="text/javascript">
       

        $(document).ready(function neww () {
        $(".current").click(function() {
        $(this).toggleClass('after');
        if(!$(this).hasClass('after')) 
           {
      
          $('.down').hide();
          $('.up').show();
           }
    
        else
       {
 
        $('.down').show();
         $('.up').hide();
       }
 
});

       })
       
</script ><?php }} ?>
