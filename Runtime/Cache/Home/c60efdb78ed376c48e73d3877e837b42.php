<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>

    <?php
 $version = time(); ?>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <meta name="keywords" content=""/>

    <meta name="description" content=""/>

    <title><?php echo ($title); ?></title>

    <link rel="stylesheet" href="/tpl/Public/css/share.css?<?php echo ($version); ?>">

    <link rel="stylesheet" href="/tpl/Public/css/font.css?<?php echo ($version); ?>" />
    
    <link rel="stylesheet" href="/tpl/Public/css/ystep.css" type="text/css" />

    <!--JQ-->

    <script type="text/javascript" src="/tpl/Public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
    <!--<script type="text/javascript" src="/tpl/Public/js/swiper.3.1.7.min.js"></script>-->



    <!--<script src="/tpl/Public/js/jquery.simplesidebar.js"></script>-->

    <!--<script src="/tpl/Public/js/jquery.SuperSlide.2.1.1.js"></script>-->

    <!--<script src="/tpl/Public/js/TouchSlide.1.0.js"></script>-->



    <script type="text/javascript" src="/tpl/Public/js/func.js?<?php echo ($version); ?>"></script>

    <script>

        var SITE_URL  = 'https:' == document.location.protocol ?'https://' : 'http://' + "<?php echo $_SERVER['HTTP_HOST'];?>";

    </script>

</head>

<head>
    <meta charset="UTF-8"/>
    <title><?php echo sp_cfg('website');?></title>
    <meta name = "viewport" content = "width = device-width,user-scalable = no, inital-scale = 1，maximum-scale = 1 minium-scal = 1">

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

    <style>
        .status0{}
        .status1{color: #39B9E4}
        .status-1{color: red}

         .index_rwxq{
             width: 100%;
             height:100%;margin-left: 0;
             background: #fff;
             padding:4px 0;
         }
        .index_rwxq img{
            width:4rem;
            height:4rem;}
        .index_wzns{width:60%;height:100%;}
        .index_ffl{
            margin:4px 0;}
        .index_qqq{
            display: inline-block;
            height:100%;}
        .index_syrw{
            font-size:12px;padding:3px}
        .index_title{
            font-weight:100;
            color: #000;;}
        .caozuo>span{
            display: inline-block;
            width:23.8%;
            text-align: center;
        }
        .caozuo>span>span{
            border:1px solid #ccc;padding:2px 15px;
            color: #5d5a5a;}
        .caozuo{
            padding:2% 3%;
        }
        .swiper-slide{  height:100%;}
        .swiper-slide>a{width:25%;display: inline-block;color:#656363;
            text-align: center;margin-top: 10px;font-size: 15px;font-weight: bold;
            height:20px;}
        .swiper-slide>a.active{
            color: #704eea;}

    </style>
</head>
<body>
<header class="top_header">
    <div class="left"><a href="javascript:" data-url="<?php echo U('Member/index');?>" class="return go-back" ></a></div>
    <div class="title">审核</div>
    <div class="right"></div>
</header>

<div style="height: 40px;"></div>


<form class="form-search form-inline" method="get" action="" style="padding: 10px 0; ">
    <!--<div class="input-group">-->
        <!--<select name="status">-->
            <!--<option value="">所有状态<?php echo ($status); ?></option>-->
            <!--<?php $_result=C('APPLY_STATUS');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>-->
                <!--<option value="<?php echo ($key); ?>" <?php if($key == $get['status'] and $get['status'] != ''): ?>selected<?php endif; ?> ><?php echo ($vv); ?></option>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</select>-->
    <!--</div>-->


    <div class="input-group" style="float: left;">
        <input style="width: 104px;" type="text" name="start_date" value="<?php echo ($get["start_date"]); ?>" class="input-sm search-query date-picker" data-date-format="yyyy-mm-dd" placeholder="起始日期" autocomplete="off">
        <input style="width: 104px;"  type="text" name="end_date" value="<?php echo ($get["end_date"]); ?>" class="input-sm search-query date-picker" data-date-format="yyyy-mm-dd" placeholder="截止日期" autocomplete="off">
    </div>

    <div class="input-group">
        <button type="submit" class="btn btn-info btn-sm">
            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
            搜索
        </button>
    </div>
</form>



<div class="swiper-banner" style="margin-top:-0px;width: 100%;overflow: hidden">
    <div class="index_lb2 swiper-wrapper" style="height: 100%">
        <?php if(is_array($level_list)): $i = 0; $__LIST__ = $level_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span class="swiper-slide goto">
                <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class="<?php echo ($v['id']==$status and $get['status'] != ''?'active':''); ?>" href="<?php echo U('TaskApply/index',array('status'=>$v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </span><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--<div class="swiper-pagination"></div>-->
</div>




<div class="task_list task_index_rwlbfl" data-level="<?php echo ($level); ?>" style="background: #f4f4f4;margin-top: 0">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a  data-href="<?php echo U('Task/show',array('id'=>$vo['id']));?>" href="javascript:void(0)">
            <div class="index_rwxq" style="">
                <img src="<?php echo ($sys_config["web_logo"]); ?>"/>

                <div class="index_wzns">
                    <p class="index_title"><?php echo ($vo["title"]); ?></p>
                    <p class="index_ffl">
                        申请日期：<span><?php echo (date("Y/m/d H:i",$vo["create_time"])); ?></span>
                    </p>
                    <p class="index_ffl">
                        申请用户：<span><?php echo ($vo["nickname"]); ?></span>
                    </p>
                    <p class="index_syrw">级别：<span><?php echo ($vo["level_text"]); ?></span>　　　</p>
                    <p class="index_syrw">截止日期 <?php echo (date('Y-m-d',$vo["end_time"])); ?></p>
                </div>

                <p class="index_qqq" style="float: left;">
                    <?php echo ($vo["price"]); ?>元
                </p>
                <div style="clear: both;"></div>
                <hr style="background: #bbbaba">
                <div class="caozuo">
                    <span href=""><span>
                        <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href="<?php echo U('handle',['id'=>$vo['id']]);?>"></a></span></span>
                        <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href="<?php echo U('handle',['id'=>$vo['id']]);?>">审核</a></span></span>
                        <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href="<?php echo U('handle',['id'=>$vo['id']]);?>">查看</a></span></span>
                        <span href=""><span>删除</span></span>
                    </span></span>
                </div>

            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>



</body>
</html>
<!--<script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>-->

<script>
    $(function(){

        //返回上一页
        $('.go-back').click(function(){
            if( $(this).attr('data-confirm') != '' && $(this).attr('data-confirm') != undefined ) {
                var zh = $(this).attr('data-confirm');
                if(!confirm(zh)){
                    return false;
                }
            }
            if( $(this).attr('data-url') != '' && $(this).attr('data-url') != undefined ) {
                window.location.href = $(this).attr('data-url');
            } else {
                var history_go = -1;
                if( $(this).attr('data-go') != '' && $(this).attr('data-go') != undefined ){
                    history_go = $(this).attr('data-go');
                }
                //返回刷新上一页
                if( $(this).attr('data-referrer') == 'true' ){
                    location.replace(document.referrer);
                } else {
                    window.history.go(history_go);
                }
            }
        });

        var nStart = 10;
        var isbool = true;

        $(window).scroll(function(){
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            if(scrollTop + windowHeight >= scrollHeight && isbool == true){
                isbool = false;
                jiazai();
            }
        });

        function jiazai(){
            if(nStart >= 61) {
                layer.open({
                    content: '没有更多的任务'
                    ,skin: 'msg'
                    ,time: 2
                });
                return false;
            }else{
                var _this = $(".task_index_rwlbfl");
                var taskname;
                var iconame;
                var levelname;
//                layer.open({
//                    type: 2,
//                    content: '加载中...'
//                });
                var index = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2



                $.post("/index.php/Home/TaskApply/index.html",{start: nStart},function(res){
                    $.each(res['info'], function(i,item){
                        // _this.append('<a href="javascript:void(0)">');

                        _this.append('<a href="javascript:void(0)">\
                        <div class="index_rwxq" style="">\
                            <img src="<?php echo ($sys_config["web_logo"]); ?>"/>\
                            <div class="index_wzns">\
                            <p class="index_title"><?php echo ($vo["title"]); ?></p>\
                        <p class="index_ffl">\
                            申请日期：<span><?php echo (date("Y/m/d H:i",$vo["create_time"])); ?></span>\
                        </p>\
                        <p class="index_ffl">\
                            申请用户：<span><?php echo ($vo["nickname"]); ?></span>\
                        </p>\
                        <p class="index_syrw">级别：<span><?php echo ($vo["level_text"]); ?></span>　　　</p>\
                        <p class="index_syrw">截止日期 {}</p>\
                        </div>\
                        <p class="index_qqq" style="float: left;">\
                            <?php echo ($vo["price"]); ?>元\
                        </p>\
                        <div style="clear: both;"></div>\
                            <hr style="background: #bbbaba">\
                            <div class="caozuo">\
                            <span href=""><span>\
                            <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href=""></a></span></span>\
                            <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href="">审核</a></span></span>\
                            <span href=""><span><a class="layer-dialog" data-full="1" title="<?php echo ($vo["title"]); ?>" href="">查看</a></span></span>\
                            <span href=""><span>删除</span></span>\
                            </span></span>\
                            </div>\
                            </div>\
                            </a>');
                    });
                    isbool = true;
                    layer.closeAll();
                });
                nStart += 10;
            }
        };

    })
</script>
<!--<script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>-->