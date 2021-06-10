<?php /* Smarty version Smarty-3.1.15, created on 2021-06-10 04:03:58
         compiled from "/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:189907506260bc4999173f11-64553392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba589e6b5cee55132e15ad0e6084e7b1e5db2f5' => 
    array (
      0 => '/Applications/MAMP/htdocs/centx/centx/admin_area/styles/cb_2014/layout/index.html',
      1 => 1623294153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189907506260bc4999173f11-64553392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_60bc49991dc880_17228376',
  'variables' => 
  array (
    'myquery' => 0,
    'the_note' => 0,
    'todos' => 0,
    'note' => 0,
    'notes' => 0,
    'comments' => 0,
    'users' => 0,
    'u' => 0,
    'userquery' => 0,
    'comment' => 0,
    'flaggedPhotos' => 0,
    'cbphoto' => 0,
    'cbvid' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60bc49991dc880_17228376')) {function content_60bc49991dc880_17228376($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/centx/centx/includes/smartyv3/plugins/modifier.date_format.php';
?><div class="heading">
    <h2>TITLE_</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tabbable">
                <div class="row">
                <div id="roundchart">
                <div class="col-md-6">
                    <div id="piechart" style="width: 90%; height: 430px; background-color: #FFFFFF;" ></div>
                </div>

                <div class="col-md-6">
                    <div id="donutchart" style="width: 80%; height: 430px; background-color: #FFFFFF;" ></div>
                </div>
                </div>
                <hr>
                <div>
                <div class="col-md-6">
                <hr>
                     <div id="ubarchart" style="width: 90%; height: 400px; background-color: #FFFFFF;" ></div>
                </div>

                <div class="col-md-6">
                <hr>
                    <div id="vbarchart" style="width: 90%; height: 400px; padding: left; background-color: #FFFFFF;" ></div>
                </div>
                </div>
                <hr>
              </div>
             <hr>
        </div>
    </div>
<hr>
<div class="row">
   <div class="col-md-6">
     <div class="tabbable tabs-left" >
         <div class=" col-md-6 todotab" >
          <ul class="nav nav-tabs" id="myTab" > 
            <li class="active">
                <a data-toggle="tab" href="#todolist">
                    <h5><i class="glyphicon glyphicon-list-alt"></i> ToDo List</h5>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#pnotes">
                    <h5><i class="glyphicon glyphicon-pencil"></i> Personal Notes</h5>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#rcomments">
                    <h5><i class="glyphicon glyphicon-comment"></i> Recent Comments</h5>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="todolist" class="tab-pane active">
                <div class="widgetBox">
                    <div class="addTodo paddingRightSmall paddingLeftLarge marginBottomLarge">
                        <div class="row">
                            <div class="from-group relative">
                                <div class="from-group">
                                    <input type="text" name="addTodo" class="form-control addTodoText">
                                    <button id="addTodo" class="btn btn-primary btn-sm">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['todos'])) {$_smarty_tpl->tpl_vars['todos'] = clone $_smarty_tpl->tpl_vars['todos'];
$_smarty_tpl->tpl_vars['todos']->value = $_smarty_tpl->tpl_vars['myquery']->value->get_todos(); $_smarty_tpl->tpl_vars['todos']->nocache = null; $_smarty_tpl->tpl_vars['todos']->scope = 0;
} else $_smarty_tpl->tpl_vars['todos'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->get_todos(), null, 0);?>
                    <ul class="row todosList" id="note-<?php echo $_smarty_tpl->tpl_vars['the_note']->value['note_id'];?>
" >
                        <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['todos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                            <li class="col-md-12">
                                <div class="col-md-12">
                                    <p class="oneTodo paddingLeftSmall col-md-10" id="<?php echo $_smarty_tpl->tpl_vars['note']->value['todo_id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['note']->value['todo'];?>

                                    </p>
                                    <a href="#" class="btn btn-danger btn-xs delete">Delete</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
               </div>
            </div>
            <div id="pnotes" class="tab-pane">
                    <div class="widgetBox">
                        <div class="addNote form-group paddingRightSmall">
                            <textarea class="form-control" name="ntoe" id="note"></textarea>
                            <div class="alignRight marginTopSmall">
                                <a href="#" id="add_new_note" class="btn btn-primary btn-xs">Add a note</a>
                            </div>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['notes'])) {$_smarty_tpl->tpl_vars['notes'] = clone $_smarty_tpl->tpl_vars['notes'];
$_smarty_tpl->tpl_vars['notes']->value = $_smarty_tpl->tpl_vars['myquery']->value->get_notes(); $_smarty_tpl->tpl_vars['notes']->nocache = null; $_smarty_tpl->tpl_vars['notes']->scope = 0;
} else $_smarty_tpl->tpl_vars['notes'] = new Smarty_variable($_smarty_tpl->tpl_vars['myquery']->value->get_notes(), null, 0);?>
                        <ul class="notesList row paddingRightSmall" id="note-<?php echo $_smarty_tpl->tpl_vars['the_note']->value['note_id'];?>
" >
                            <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                                <li class="col-md-4">
                                    <div class="">
                                        <p class="oneNote" id="<?php echo $_smarty_tpl->tpl_vars['note']->value['note_id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['note']->value['note'];?>

                                        <a href="#" class="delete">×</a>
                                    </p>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
            </div>
            <div id="rcomments" class="tab-pane">
                <div class="widget-box">
                    <div class="widget-header header-color-blue">
                        <h5>Recent Comments</h5>
                        <div class="widget-toolbar">
                            <a href="#" data-action="collapse">
                                <i class="icon-chevron-down"></i>
                            </a>
                            <a href="#" data-action="close">
                                <i class="icon-remove"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-small">
                                </div>
                                <div class="widget-body">
                                    <div class="widget-body">
                                        <div class="widget-main no-padding">
                                            <div class="slimScrollDiv">
                                                <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                                <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
                                                <div class="itemdiv dialogdiv">
                                                    <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
                                                    <div class="user">
                                                        <img alt="Alexa's Avatar" src="<?php echo $_smarty_tpl->tpl_vars['userquery']->value->getUserThumb($_smarty_tpl->tpl_vars['u']->value,'small');?>
">
                                                    </div>
                                                    <?php } ?>
                                                    <div class="body">
                                                        <div class="time">
                                                            <i class="icon-time"></i>
                                                            <span class="green"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['date_added']);?>
</span>
                                                        </div>
                                                        <div class="name">
                                                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['comment']->value['anonym_name'];?>
</a>
                                                        </div>
                                                        <div class="text"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</div>
                                                        <div class="tools">
                                                            <a href="#" class="btn btn-minier btn-info">
                                                                <i class="icon-only icon-share-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div class="col-md-6">
        <!--<div class="panel panel-danger">
                   <div class="panel-heading "> <span class="glyphicon glyphicon-list-alt"></span><b>&nbsp NEWS</b>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="newsbox">
                                       <li class="news-item">
                                        <table cellpadding="8">
                                            <tr>
                                                <td>
                                                <div id="clipbucket_news" class="widget-main" style="height:130px">
                                                </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>




<style type="text/css">

.to_display{

   display: none;
}
    .flot_chart1{
        height: 200px;
        width: 400px;
    }
    .vids{
        height: 250px;
        overflow-y: scroll;
        overflow-x: hidden;
        padding: 5px;
    }
</style>

<script type="text/javascript">
            AmCharts.makeChart("piechart",
                {
                    "type": "pie",
                    "adjustPrecision": true,
                    "angle": 12,
                    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "depth3D": 15,
                    "maxLabelWidth": 150,
                    "titleField": "category",
                    "valueField": "column-1",
                    "processTimeout": 5,
                    "theme": "light",
                    "allLabels": [],
                    "balloon": {},
                    "legend": {
                        "enabled": true,
                        "align": "left",
                        "markerType": "circle"
                    },
                    "titles": [
                        {
                            "bold": false,
                            "id": "Title-1",
                            "size": 15,
                            "text": "Overall Statistics"
                        }
                    ],
                    "dataProvider": [
                        {
                            "category": "Users",
                            "column-1": '<?php echo get_users(array('count_only'=>'yes'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Photos",
                            "column-1": '<?php echo get_photos(array('count_only'=>'yes'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Videos",
                            "column-1": '<?php ob_start();?><?php echo get_videos(array('count_only'=>'yes'),$_smarty_tpl);?>
<?php echo number_format(ob_get_clean())?>'
                        },
                        {
                            "category": "Collections",
                            "column-1": '<?php echo get_collections(array('count_only'=>'yes'),$_smarty_tpl);?>
'
                        },

                    ]
                }
            );
</script>

<script type="text/javascript">
            // var test =  '<?php echo $_smarty_tpl->tpl_vars['flaggedPhotos']->value[0]['total_flags'];?>
';
            AmCharts.makeChart("donutchart",
                {
                    "type": "pie",
                    "angle": 12,
                    "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                    "depth3D": 15,
                    "innerRadius": "30%",
                    "titleField": "category",
                    "valueField": "column-1",
                    "processTimeout": 5,
                    "theme": "light",
                    "allLabels": [],
                    "balloon": {},
                    "legend": {
                        "enabled": true,
                        "align": "center",
                        "markerType": "circle"
                    },
                    "titles": [
                        {
                            "bold": false,
                            "id": "Title-1",
                            "size": 15,
                            "text": "Flagged Objects"
                        }
                    ],
                    "dataProvider": [

                        {
                            "category": "Photos",
                            "column-1": '<?php echo $_smarty_tpl->tpl_vars['cbphoto']->value->action->count_flagged_objects();?>
'
                        },
                        {
                            "category": "Videos",
                            "column-1": '<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects();?>
'
                        }
                    ]
                }
            );
</script>

<script type="text/javascript">
            AmCharts.makeChart("ubarchart",
                {
                    "type": "serial",
                    "pathToImages": "https://www.amcharts.com/lib/3/images/",
                    "categoryField": "category",
                    "startDuration": 1,
                    "mouseWheelZoomEnabled": true,
                    "startEffect": "easeOutSine",
                    "autoDisplay": true,
                    "theme": "light",
                    "categoryAxis": {
                        "gridPosition": "start"
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "colorField": "color",
                            "fillAlphas": 1,
                            "id": "AmGraph-1",
                            "lineColorField": "color",
                            "title": "graph 1",
                            "type": "column",
                            "valueField": "column-1"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "id": "ValueAxis-1",
                            "title": "Users"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "titles": [
                        {
                            "bold": false,
                            "id": "Title-1",
                            "size": 15,
                            "text": "Users Statistics"
                        }
                    ],
                    "dataProvider": [
                        {
                            "category": "Total",
                            "column-1": '<?php echo get_users(array('count_only'=>'yes'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Active",
                            "column-1": '<?php echo get_users(array('count_only'=>'yes','status'=>'Ok'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Inactive",
                            "column-1": '<?php echo get_users(array('count_only'=>'yes','status'=>'ToActivate'),$_smarty_tpl);?>
'
                        }
                    ]
                }
            );
</script>

<script type="text/javascript">
            AmCharts.makeChart("vbarchart",
                {
                    "type": "serial",
                    "pathToImages": "https://www.amcharts.com/lib/3/images/",
                    "categoryField": "category",
                    "startDuration": 1,
                    "mouseWheelZoomEnabled": true,
                    "startEffect": "easeOutSine",
                    "autoDisplay": true,
                    "theme": "light",
                    "categoryAxis": {
                        "gridPosition": "start"
                    },
                    "trendLines": [],
                    "graphs": [
                        {
                            "colorField": "color",
                            "fillAlphas": 1,
                            "id": "AmGraph-1",
                            "lineColorField": "color",
                            "title": "graph 1",
                            "type": "column",
                            "valueField": "column-1"
                        }
                    ],
                    "guides": [],
                    "valueAxes": [
                        {
                            "id": "ValueAxis-1",
                            "title": "Videos"
                        }
                    ],
                    "allLabels": [],
                    "balloon": {},
                    "titles": [
                        {
                            "bold": false,
                            "id": "Title-1",
                            "size": 15,
                            "text": "Video Statistics"
                        }
                    ],
                    "dataProvider": [
                        {
                            "category": "Total",
                            "column-1": '<?php echo get_videos(array('count_only'=>'yes'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Active",
                            "column-1": '<?php echo get_videos(array('count_only'=>'yes','active'=>"yes"),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Deactive",
                            "column-1": '<?php echo get_videos(array('count_only'=>'yes','active'=>'no'),$_smarty_tpl);?>
'
                        },
                        {
                            "category": "Reported",
                            "column-1": '<?php echo $_smarty_tpl->tpl_vars['cbvid']->value->action->count_flagged_objects();?>
'
                        }
                    ]
                }
            );
 </script>

 <script type="text/javascript">
   $(function () {
         $(".newsbox").bootstrapNews({
         newsPerPage: 4,
         autoplay: true,
         pauseOnHover:true,
         direction: 'down',
         newsTickerInterval: 7000,
         onToDo: function () {
            }
        });
    });
</script>

<script type="text/javascript">
$( document ).ready(function() {

    $(".clip_read").click(function() {

        $(this).toggleClass('clip_hide');


        if(!$(this).hasClass('clip_hide'))

           {
            $('.to_display').show();
            $(".clip_read").text("Hide");
           }

        else
           {
            $('.to_display').hide();
            $(".clip_read").text("Read More");
           }
    });

var baseurl="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
";

$.ajax({
   // url: baseurl+'/ajax.php',

   url:baseurl+'/ajax.php',
    type: "POST",
    dataType : 'text',
    data: { mode: "get_news"},
    success : function(news){
        $('#clipbucket_news').html(news);
    },
    timeout : 5000,
    error  :  function(err) { $('#clipbucket_news').html(' <div align="center"><em><strong>Connect with Internet to get News</strong></em></div>')},
    });
});
 $(function() {

        var options = {

            series: {
                bars: {
                    show: true,
                    steps: true,
                    barWidth: 0.5,
                    align: "center",
                },
                points: { show: true },
                lines: { show: true }
            },
            xaxis: {
                mode: "categories",
                tickLength: 0
            },
            yaxis: {
                alignTicksWithAxis: false
            },
            grid: {
                hoverable: true,
                clickable: true,
                labelMargin: 30,
                borderWidth: 0
            }
        };

        // $.plot("#placeholder", data, options);

        var page = '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin_area/index.php';

        $(".oneNote .delete").on({
            click: function(e){
                e.preventDefault();
                var noteId = $(this).parent().attr("id");
                delete_note(noteId);
                $(this).parents("li").remove();
            }
        });

        $("#add_new_note").on({
            click: function(e){
                e.preventDefault();
                var self = this;
                var note = $(this).parents(".widgetBox").find("textarea").val();
                if(!note){
                    alert("Please enter something");
                }
                else{
                    $(this).parents(".widgetBox").find("textarea").val("");
                    $.post(page, {
                        mode : 'add_note',
                        note : note,
                    },function(data) {
                        console.log(data);
                        var li = document.createElement("li");
                        li.className = "col-md-4";
                        var a = document.createElement("a");
                        a.className = "delete";
                        a.href = "#";
                        a.innerHTML = "x";
                        var p = document.createElement("p");
                        p.id = data.id;
                        p.innerHTML = note;
                        p.className = "oneNote";
                        $(p).append(a);
                        $(li).append(p);
                        $(a).on({
                            click: function(e){
                                e.preventDefault();
                                var noteId = $(this).parent().attr("id");
                                delete_note(noteId);
                                $(this).parents("li").remove();
                            }
                        });
                        $(self).parents(".widgetBox").find("ul").prepend(li);
                    },'json');
                }
            }
        });

        $("#addTodo").on({
            click: function(e){
                e.preventDefault();
                var self = this;
                var newVal = $(this).parents(".addTodo").find("input").val();
                if(newVal.length)
                {
                    $(this).parents(".addTodo").find("input").val("");
                    var ajaxCall = $.ajax({
                        url: page,
                        type: "post",
                        data: {
                            val: newVal,
                            mode: "add_todo",
                        },
                    });
                    ajaxCall.success(function(data){
                        data = $.parseJSON(data);
                        var li = document.createElement("li");
                        li.className = "col-md-12";
                        var p = document.createElement("p");
                        p.className = "oneTodo paddingLeftSmall col-md-10";
                        p.id = data.id;
                        p.innerHTML = data.todo;
                        var a = document.createElement("a");
                        a.href = "#";
                        a.className = "col-md-2 btn btn-danger btn-xs delete";
                        a.innerHTML = "Delete";
                        $(a).on("click", function(e){
                            e.preventDefault();
                            var self = this;
                            var id = $(this).prev().attr("id");
                            var ajaxCall = $.ajax({
                                url: page,
                                type: "post",
                                data: {
                                    id: id,
                                    mode: "delete_todo",
                                },
                            });
                            ajaxCall.success(function(data){
                                $(self).parents("li").remove();
                            });

                        });
                        var div = document.createElement("div");
                        div.className = "col-md-12";

                        $(li).append(div).find("div").append(p).append(a);
                        $(self).parents(".widgetBox").find("ul").prepend(li);
                    });
                }else{
                    alert("Please enter a valid value");
                }
            }
        });

        $("#todolist .delete").on("click", function(e){
            e.preventDefault();
            var self = this;
            var id = $(this).prev().attr("id");
            var ajaxCall = $.ajax({
                url: page,
                type: "post",
                data: {
                    id: id,
                    mode: "delete_todo",
                },
            });
            ajaxCall.success(function(data){
                $(self).parents("li").remove();
            });

        });
    });

</script><?php }} ?>
