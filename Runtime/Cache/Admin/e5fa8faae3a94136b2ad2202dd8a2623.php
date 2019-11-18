<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo sp_cfg('website');?></title>
        <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/statics/bootstrap-3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/statics/bootstrap-3.3.5/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/Public/statics/font-awesome-4.4.0/css/font-awesome.min.css" />

    <!--[if IE 7]>
        <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace.min.css" />
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-skins.min.css" />
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/tpl/Admin/Public/aceadmin/css/ace-ie.min.css" />
    <![endif]-->
    <script src="/tpl/Admin/Public/aceadmin/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
        <script src="/tpl/Admin/Public/aceadmin/js/html5shiv.js"></script>
        <script src="/tpl/Admin/Public/aceadmin/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/tpl/Public/css/base.css" />
    <link rel="stylesheet" href="/tpl/Public/js/artDialog/skins/default.css" />
        <link rel="stylesheet" href="/Public/statics/iCheck-1.0.2/skins/all.css">

    <?php
 if($info['id'] > 0) { $handle_type = "编辑"; } else { $handle_type = "添加"; } ?>
</head>
<body>

<!-- 导航栏开始 -->
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    新闻列表
    &gt;
    <?php echo ($handle_type); ?>
</div>
<!-- 导航栏结束 -->
<ul id="myTab" class="nav nav-tabs">
   <li>
         <a href="<?php echo U('index');?>">任务列表</a>
   </li>
   <li class="active">
        <a href="javascript:"><?php echo ($handle_type); ?>任务</a>
    </li>
</ul>
<form class="form-inline" method="post">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
    <input type="hidden" name="copy" value="<?php echo ($_GET['copy']); ?>">
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>任务分类</th>
            <td>
                <select name="cid" id="cid" class="not-arrow" style="margin-left:30px">
                    <!--<option type="radio" name="cid" value="0" style="height: inherit">　点击选择</option>-->
                    <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option data-desc="<?php echo ($vv['desc']); ?>" type="radio" name="cid" value="<?php echo ($vv["id"]); ?>" style="height: inherit" <?php if($vv['id'] == $info['cid']): ?>selected="selected"<?php endif; ?> >　<?php echo ($vv["name"]); ?>　<?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <p id="desc_msg" style="font-size:7px;-webkit-text-size-adjust:none;color: #807979;">

            </td>
        </tr>

        <tr>
            <th>标题</th>
            <td>
                <input class="col-xs-12 col-sm-5" placeholder="请输入标题" type="text" name="title" value="<?php echo ($info["title"]); ?>">
            </td>
        </tr>

        <tr>
            <th>任务简介</th>
            <td>
                <textarea class="col-xs-12 col-sm-5" type="text" name="info" placeholder="输入任务简介" rows="4"><?php echo ($info["info"]); ?></textarea>
            </td>
        </tr>
        <tr>
            <th>悬赏单价</th>
            <td>
                <?php if($info['id'] > 0): ?><input class="col-xs-12 col-sm-5" type="text" name="price" value="<?php echo (floatval($info["price"])); ?>" style="width: 100px;">元
                    <?php else: ?>
                    <input class="col-xs-12 col-sm-5" type="text" name="price" value="8" style="width: 100px;">元<?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>领取数量</th>
            <td>
                <input class="col-xs-12 col-sm-5" placeholder="领取数量" type="text" name="max_num" value="<?php echo ($info["max_num"]); ?>">
            </td>
        </tr>

        <tr>
            <th>任务总价</th>
            <td>
                <input class="col-xs-12 col-sm-5" placeholder="任务总价" type="text" name="total_price" value="<?php echo ($info["total_price"]); ?>">
            </td>
        </tr>

        <tr>
            <th>任务类型</th>
            <td>
                <?php $_result=C('TASK_TYPE');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><label><input type="radio" name="type" value="<?php echo ($key); ?>" style="height: inherit" <?php if($key == $info['type']): ?>checked<?php endif; ?> ><?php echo ($vv); ?></label> &nbsp; &nbsp; &nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
            </td>
        </tr>
  
         <tr>
            <th>链接信息</th>
            <td>
                <input class="col-xs-12 col-sm-5" placeholder="请输入链接信息" type="text" name="taskuser" value="<?php echo ($info["taskuser"]); ?>">
            </td>
        </tr>
  
        <tr>
            <th>任务级别</th>
            <td>
                <?php if(is_array($level)): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><label><input type="radio" name="level" value="<?php echo ($vv["level"]); ?>" style="height: inherit" <?php if($vv['level'] == $info['level']): ?>checked<?php endif; ?> ><?php echo ($vv["name"]); ?></label> &nbsp; &nbsp; &nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
            </td>
        </tr>


        <tr>
            <th>截止日期</th>
            <td>
                <input class="col-xs-12 col-sm-5 date-picker" placeholder="请选择截止日期" data-date-format="yyyy-mm-dd" autocomplete="off" type="text" name="end_time" value="<?php if($info[end_time] > 0): echo (date('Y-m-d',$info["end_time"])); endif; ?>">
            </td>
        </tr>

        <tr>
            <th>完成条件</th>
            <td>
                <div class="task_need">
                    <label for="shouji"  class="<?php echo ($info['is_shouji']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_shouji" id="shouji"  placeholder="" >手机认证</label>
                    <label for="weixin"  class="<?php echo ($info['is_weixin']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_weixin" id="weixin" placeholder="" >微信认证</label>
                    <label for="shiming" class="<?php echo ($info['is_shiming']?'select':''); ?>"><input type="checkbox" onclick="selectDiv(this)" value="1" name="is_shiming"  id="shiming" placeholder="" >实名认证</label>
                    <label for="idcard"  class="<?php echo ($info['is_idcard']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_idcard" id="idcard" placeholder="" >身份证认</label>
                </div>
            </td>
        </tr>
        <tr>
            <th>审核样例</th>
            <td>
                <div style="display: inline-block;padding:5px;margin-left: 20px;">
                    <?php
 $key=0; if(isset($info['tushi'])){ $imgs = unserialize($info['tushi']); foreach ($imgs as $key=>$img ){ if (!$img) continue; $key+=1; $tushiId = 'tushi'. $key; echo "<input type='text' value=$img id=$tushiId name='tushi[]' style='display: none;' >
                    <img src=$img onclick='addImgs(\"$tushiId\")'  width='45'>
                    <span class='dage1' onclick='delImgs(\"$tushiId\")'>X</span>"; } } if ($key < 3){ echo "<input type='text' id='tushi1' name='tushi[]' style='display: none;' >
                    <img src='/tpl/Public/js/fex/image.png' onclick='addImgs(\"tushi1\")'  width='45'>
                    <span class='dage1' onclick='delImgs(\"tushi1\")'>X</span>"; } ?>
                    <div id="lastImgs"></div>
                </div>
            </td>
        </tr>

        <tr>
            <style>

                .task_need input{
                    display: none;
                }
                .task_need label{
                    margin-left: 0;
                    float: left;
                    border:1px solid #9e9797;
                    padding:5px 13px;
                    font-size: 10px!important;;-webkit-transform:scale(0.8);
                }
                #taskBuzhou .item>div{
                    float: left;
                }
                #taskBuzhou .item .itemLeft{
                    margin: 0px;;
                }
                #taskBuzhou .item .itemCenter{
                    margin: 0px;;
                }
                #taskBuzhou .item .itemLeft input{
                    width:34px;}


                #taskBuzhou .item{
                    margin-top: 5px;
                    height: 100px;;clear:both;border: 1px solid #ccc
                }
                .itemLeft,.itemCenter,.itemRight{float: left;height: 80px;padding:3px}
                #taskBuzhou .itemLeft>span{
                    padding-top: 3px;
                    display: block;margin-top:30px;text-align:center;width: 20px;height: 20px;border-radius: 50%;background: red;
                    color: #fff;
                    font-weight: bold;
                }
                #taskBuzhou .item .itemCenter{
                    margin: 0 10px;;
                    line-height: 80px;
                }
                #taskBuzhou .item .itemCenter img{margin-top:-10px}
                #taskBuzhou .item .itemRight textarea{
                    height: 80px;min-width: 260px
                }
                #taskBuzhou .item .itemLeft input{
                    width:34px;}
                .task_need label.select{
                    border:1px solid #704eea;
                    color: #704eea;
                }

            </style>
            <th>任务步骤</th>
            <td style="min-height: 300px">
                <div class="buzhou" style="display: ;">
                    <div style="height: 350px;overflow: scroll">
                        <div style="padding: 10px">
                            <div id="taskBuzhou">
                                <?php
 if(isset($info['step_info'])){ $imgs = unserialize($info['step_info']); if ( isset($imgs['step_desc']) && count($imgs['step_desc']) > count($imgs['step_img']) ) { $data = $imgs['step_desc']; $data2 = $imgs['step_img']; }else{ $data = $imgs['step_img']; $data2 = $imgs['step_desc']; } foreach ($data as $key=>$img ){ empty($img) ? $img = '/tpl/Public/js/fex/image.png' : ''; $key2 = $key+1; $stepId = 'step'.$key2; $text = isset($data2[$key]) ? $data2[$key] :''; echo "<div class='item'>
                                <div class='itemLeft'>
                                    <span >$key2</span>
                                </div>
                                <div class='itemCenter'>
                                    <input type='text' value=$img id=$stepId name='step_img[]' style='display: none'>
                                    <img src=$img onclick='addStep();'  height='50' width='50'>
                                </div>
                                <div class='itemRight'>
                                    <textarea name='step_desc[]' placeholder='请输入步骤描述'>$text</textarea>
                                </div>
                                <div style='clear: both;'></div>
                            </div>"; } }else{ echo "<div class='item'>
                                <div class='itemLeft'>
                                    <span >1</span>
                                </div>
                                <div class='itemCenter'>
                                    <input type='text' value='' id='step1' name='step_img[]' style='display: none'>
                                    <img src='/tpl/Public/js/fex/image.png' onclick='addStep(\"step1\");'  height='50' width='50'>
                                </div>
                                <div class='itemRight'>
                                    <textarea name='step_desc[]' placeholder='请输入步骤描述'></textarea>
                                </div>
                                <div style='clear: both;'></div>
                            </div>"; } ?>


                                <div id="LastFang"></div>
                                <div class="caozuo" id="add" onclick="AddHtml()" style="position: relative;width:30px;height: 30px;right: 0px;bottom: 1px;display: block;text-align: right;">
                                    <span style="background-color: #704eea!important;border-color: #704eea;" class="btn btn-sm btn-success">+</span>
                                </div>
                                <div class="caozuo" id="jian" onclick="JianHtml()" style="position: relative;width:30px;height: 30px;right: -38px;top: -31px;display: block;text-align: right;">
                                    <span style="background-color: #704eea!important;border-color: #704eea;" class="btn btn-sm btn-success">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input class="btn btn-success" type="submit" value="提交">
            </td>
        </tr>
    </table>
</form>

<!-- 引入bootstrjs部分开始 -->
<script src="/Public/statics/js/jquery-1.10.2.min.js"></script>
<script src="/Public/statics/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/tpl/Public/js/artDialog/artDialog.js"></script>
<script src="/tpl/Public/js/artDialog/iframeTools.js"></script>
<script src="/tpl/Public/js/bootbox.js"></script>
<script src="/tpl/Public/js/base.js"></script>

<link rel="stylesheet" href="/tpl/Public/js/datepicker/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/tpl/Public/js/datepicker/css/bootstrap-datetimepicker.min.css" />
<script src="/tpl/Public/js/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/tpl/Public/js/datepicker/js/bootstrap-timepicker.min.js"></script>

<script src="/Public/statics/layer/layer.js"></script>
<script src="/Public/statics/layer/extend/layer.ext.js"></script>

<script src="/Public/statics/iCheck-1.0.2/icheck.min.js"></script>
<script>
$(document).ready(function(){
    $('.xb-icheck').iCheck({
        checkboxClass: "icheckbox_minimal-blue",
        radioClass: "iradio_minimal-blue",
        increaseArea: "20%"
    });
});
</script>

<script type="text/javascript" src="/Public/kindeditor/kindeditor.js"></script><script type="text/javascript" src="/Public/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
    $(function(){
        //引入编辑器
        var  content;
        KindEditor.ready(function(K) {
            content = K.create('#page_content');
        });

        //------------------
        //---------------自动计算总价--------------------
        $("input[name='price']").blur(function () {
            setData();
        });
        setData();
        $("input[name='max_num']").blur(function () {
            setData()
        });
        //--------------------------------------------

    });

    //计算总价
    function setData() {
        var price = $("input[name='price']").val() * 1; //单价
        var num   = $("input[name='max_num']").val() * 1;//数量
        num == 0 ? num =1 :'';
        price = price * num;
        var total = price;

        //$('#shouxu').text(shouxu)
        $('#all_money').text(total)
        $("input[name='total_price']").val(total) ;//total_price
    }

    function selectDiv(t) {
        if ( $(t).hasClass('select') ) {
            $(t).removeClass('select');
            $(t).parent('label').removeClass('select');
        }else{
            $(t).addClass('select');
            $(t).parent('label').addClass('select');
        }
    }

    //分类选择回调
    $('#cid').change(function () {
        var desc = $("#cid option:selected").attr('data-desc');
        $('#desc_msg').html(desc);
        $('#desc_msg').css('padding','10px');
    });

    //多图添加
    function addImgs(id){
        flashupload2(id, '上传文件', id, return_value2, '<?php echo CONTROLLER_NAME;?>_thumb',1);
    }

    function addStep() {
        flashupload2('step1', '上传文件', 'step1', return_value, '<?php echo CONTROLLER_NAME;?>_thumb',1)
    }
    //删除
    function delImgs(id) {
        if (id != 'tushi1' && $('#'+id).val() != "") {
            $('#'+id).next().next('span').remove();
            $('#'+id).next('img').remove();
            $('#'+id).remove();
        }
    }

    //上传回调
    function return_value2(uploadid, returnid) {
        //取得iframe对象
        var d = uploadid.iframe.contentWindow;
        //取得选择的图片
        var in_content = d.$("#returnValue").val();
        $('#' + returnid).val(in_content);
        $('#' + returnid).next('img').attr('src',in_content);

        var tushiId = returnid.replace("tushi","") *1;
        tushiId = tushiId * 1 + 1;
        if (tushiId >= 4){
            return false;
        }
        var tushiId2 = 'tushi'+tushiId;

        var prvHtml2 = '<input type="text" id="'+tushiId2+'" name="tushi[]" style="display: none;" >'+
            '<img src="/tpl/Public/js/fex/image.png" onclick="addImgs(\''+tushiId2+'\')" alt="" width="45">' +
            '<span class="dage1" onclick="delImgs(\''+tushiId2+'\')">X</span>';
        console.log(uploadid);
        $('#lastImgs').before(prvHtml2);
        console.log(tushiId)

    }
    //
    var childCount = 1;
    $(function () {
        childCount = $('#taskBuzhou').children('.item').length;
    });

    /**
     * @说明 添加一个步骤
     * @user fang 1044766678@qq.com
     * @returns {boolean}
     * @constructor
     */
    function AddHtml() {
        childCount = $('#taskBuzhou').children('.item').length;
        if(childCount >=10){
            layer.msg(' <span style="color:red">X</span><br> 至多添加十个步骤!');
            return false;
        }
        var nextCount = childCount+1;
        var thisId    = 'step'+nextCount;
        var prevHtml = ''+
            '<div class="itemLeft">'+
            '<span>'+nextCount+'</span>'+
            '</div>'+
            '<div class="itemCenter">'+
            '<input type="text" id="'+thisId+'" name="step_img[]" style="display: none">'+
            '<img src="/tpl/Public/js/fex/image.png" onclick="parent.flashupload2(\''+thisId+'\', \'上传文件\', \''+thisId+'\', return_value, \'<?php echo CONTROLLER_NAME;?>_thumb\');" alt="" height="50" width="50">'+
            '</div>'+
            '<div class="itemRight">'+
            '<textarea name="step_desc[]" style="width:auto" placeholder="请输入步骤描述"></textarea>'+
            '</div>'+
            '<div style="clear: both;"></div>'+
            '';

        $("#LastFang").before('<div class="item">'+prevHtml+'</div>');
        childCount = $('#taskBuzhou').children('.item').length;
        console.log(childCount)
    }

    function JianHtml() {
        if(childCount <=1){
            layer.msg(' <span style="color:red">X</span><br> 至少保留一项!');
            return false;
        }
        var prevHtml2 = $('#LastFang').prev().remove();
        childCount = $('#taskBuzhou').children('.item').length;
        console.log(childCount)
    }

    //-----------------

    $(function () {
        /**
         *
         * @constructor
         */
        function Add(){
            var prevHtml = $('#LastFang').prev().html();
            var childLenghth = $('.container').children().length - 1;

            prevHtml = prevHtml.replace(/uploads/g, "uploads"+childLenghth);
            prevHtml = prevHtml.replace(/picid/g, "picid"+childLenghth);
            prevHtml = prevHtml.replace(/desc/g, "desc"+childLenghth);



            $('.caozuo').remove();
            $("#LastFang").before('<div class="row" style="position:relative;border: 1px dashed  #ccc;margin-bottom: 5px">'+prevHtml+'</div>');
        }

        function Jian(){
            if($('.fang_post').children().length <=2){
                layer.msg(' <span style="color:red">X</span><br> 至少保留一项!');
                //alert('至少保留一项!');
                return false;
            }
            var prevHtml = $('#LastFang').prev().remove();
            var caoZuo = ' <div class="caozuo" id="add" onclick="Add()" style="position: relative;width:40px;height: 40px;right: 5px;bottom: 1px;display: block;text-align: right;"><span class="btn btn-success">+</span></div> <div class="caozuo" id="add" onclick="Jian()" style="position: relative;width:40px;height: 40px;right: -35px;bottom: 1px;display: block;text-align: right;"><span class="btn btn-success">-</span></div>';
            $('#LastFang').prev().append(caoZuo);
            //$('#container').children('div');

            //$("#LastFang").before('<div class="row" style="position:relative;border: 1px dashed  #ccc;">'+prevHtml+'</div>');
        }

    })
</script>
</body>
</html>