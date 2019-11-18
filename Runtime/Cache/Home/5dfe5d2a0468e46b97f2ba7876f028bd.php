<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<head>
    <meta charset="UTF-8"/>
    <title><?php echo sp_cfg('website');?></title>
    <meta name = "viewport" content = "width = device-width,user-scalable = no, inital-scale = 1，maximum-scale = 1 minium-scal = 1">

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
    <link rel="stylesheet" href="/tpl/Public/css/share.css?3"/>
</head>
<body>
<!-- 头部部分 开始 -->
<header class="top_header">
    <div class="left"><a href="javascript:" data-url="<?php echo U('index');?>" class="return go-back" ></a></div>
    <div class="title">发布</div>
    <div class="right">
        <a href="<?php echo U('Page/show', ['id' => 3]);?>">发布规则</a>
    </div>
</header>

<style>

    table th{
        margin-top: 6px;;
    }
    table tr td input{
        height: 35px;;
        border-radius: 5px!important;
    }

    .login-inp{margin:0 10px 15px 10px;border-radius:7px;background: #f4f4f4;border: none;}
    .login-inp label{text-align:center;display:inline-block;color:#cococo;margin-left:10px}
    .login-inp input{line-height:40px;background-color: #f4f4f4;background:#f4f4f4;border:none;outline: none;text-align: center;}
    .login-inp .submit{display:block;background:none;width:100%;text-align:center;line-height:40px;color:#fff;font-size:16px;letter-spacing:5px;}
    .login-txt{text-align:center;color:#fff;}
    .login-txt a{color:#fff;padding:0 0px;}
    input{  background-color: #f4f4f4!important;font-size: 12px!important;  }
    .login-inp select{border: 0px;  background-color: #f4f4f4;font-size: 12px!important;}

    .not-arrow{
        -webkit-appearance: none;
        padding: 5px 10px;
        border:1px solid #dcd8d8;
        -webkit-appearance:none;
        -moz-appearance:none;
        appearance:none; /*去掉下拉箭头*/
    }
    /*清除ie的默认选择框样式清除，隐藏下拉箭头*/
    .not-arrow::-ms-expand { display: none; }
    .right_jt{
        position: relative;
        float: right;
        top: 10px;
        right: 10px;
    }


    /**/
    .dage1 {
        display: inline-block;
        position: relative;
        left: -10px;
        top: -15px;
        border: 1px solid red;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        text-align: center;
    }
</style>

<!-- 导航栏开始 -->
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    新闻列表
    &gt;
    <?php echo ($handle_type); ?>
</div>
<!-- 导航栏结束 -->
<input type="hidden" id="server_money" value="<?php echo ($server_money); ?>">
<input type="hidden" id="member_money" value="<?php echo ($member['price']); ?>">
<form class="form-inline" method="post" style="margin-top: 15px">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
    <input type="hidden" name="uid" value="<?php echo ($info["id"]); ?>">
    <input type="hidden" name="copy" value="<?php echo ($_GET['copy']); ?>">

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label >任务分类</label>
        <span class="right_jt"> ＞ </span>
        <select name="cid" id="cid" class="not-arrow" style="margin-left:30px">
            <!--<option type="radio" name="cid" value="0" style="height: inherit">　点击选择</option>-->
            <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option data-desc="<?php echo ($vv['desc']); ?>" type="radio" name="cid" value="<?php echo ($vv["id"]); ?>" style="height: inherit" <?php if($vv['id'] == $info['cid']): ?>selected="selected"<?php endif; ?> >　<?php echo ($vv["name"]); ?>　<?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <p id="desc_msg" style="font-size:7px;-webkit-text-size-adjust:none;color: #807979;">
        </p>

    </div>

    <div class="login-inp" style="">
        <label>标　　题</label>
        <input type="text" name="title" placeholder="请输入标题" value="<?php echo ($info["title"]); ?>" >
    </div>

    <div class="login-inp" style="">
        <label style="margin-top: -35px">任务简介</label>
        <textarea id="info"  name="info" placeholder="　　　请输入简介" style="padding:10px;min-height: 50px;width:60%;background: #f4f4f4;border:none;" ><?php echo ($info["info"]); ?></textarea>
    </div>

    <div class="login-inp" style="">
        <label>任务单价</label>
        <?php if($info['id'] > 0): ?><input  type="text" name="price" value="<?php echo (floatval($info["price"])); ?>" style="color: #999;">元
            <?php else: ?>
            <input  type="text" name="price" value="8" style="color: #999;"><?php endif; ?>
    </div>

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>领取数量</label>
        <input class="integer" type="text" name="max_num" placeholder="　　请输入领取数量" value="<?php echo ($info["max_num"]); ?>"  style="color: #999;">
    </div>

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>任务总价</label>
        <input class="integer" type="text" name="total_price" placeholder="" value="<?php echo ($info["total_price"]); ?>"  style="color: #999;">
    </div>
    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>任务类型</label>
        <span class="right_jt"> ＞ </span>
        <select name="type" id="type" class="not-arrow" style="margin-left:30px">
            <?php $_result=C('TASK_TYPE');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" style="height: inherit" <?php if($key == $info['type']): ?>selected<?php endif; ?> >　<?php echo ($vv); ?>　<?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>链接信息</label>
        <input type="text" name="taskuser" placeholder="请输入链接地址" value="<?php echo ($info["taskuser"]); ?>"  style="color: #999;">
    </div>
    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>任务级别</label>
        <span class="right_jt"> ＞ </span>
        <select name="level" class="not-arrow" id="" style="margin-left:30px">
            <?php if(is_array($level)): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option type="radio" name="level" value="<?php echo ($vv["level"]); ?>" style="height: inherit" <?php if($vv['level'] == $info['level']): ?>selected<?php endif; ?> >　<?php echo ($vv["name"]); ?>　<?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>截止日期</label>
        <span class="right_jt"> ＞ </span>
        <input class="date-picker" data-date-format="yyyy-mm-dd" placeholder="　点击选择日期" autocomplete="off" type="text" name="end_time" value="<?php if($info[end_time] > 0): echo (date('Y-m-d',$info["end_time"])); endif; ?>">
    </div>
    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label style="margin-top: -20px;;">完成条件</label>
        <div class="task_need">
            <label for="shouji"  class="<?php echo ($info['is_shouji']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_shouji" id="shouji"  placeholder="" >手机认证</label>
            <label for="weixin"  class="<?php echo ($info['is_weixin']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_weixin" id="weixin" placeholder="" >微信认证</label>
            <label for="shiming" class="<?php echo ($info['is_shiming']?'select':''); ?>"><input type="checkbox" onclick="selectDiv(this)" value="1" name="is_shiming"  id="shiming" placeholder="" >实名认证</label>
            <label for="idcard"  class="<?php echo ($info['is_idcard']?'select':''); ?>"><input  type="checkbox" onclick="selectDiv(this)" value="1" name="is_idcard" id="idcard" placeholder="" >身份证认</label>
        </div>
    </div>
    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label >审核样例</label>
        
        <div style="display: inline-block;padding:5px;margin-left: 20px;">
            <?php
 $key=0; if(isset($info['tushi'])){ $imgs = unserialize($info['tushi']); foreach ($imgs as $key=>$img ){ if (!$img) continue; $key+=1; $tushiId = 'tushi'. $key; echo "<input type='text' value=$img id=$tushiId name='tushi[]' style='display: none;' >
                            <img src=$img onclick='addImgs(\"$tushiId\")'  width='45'>
                            <span class='dage1' onclick='delImgs(\"$tushiId\")'>X</span>"; } } if ($key < 3){ echo "<input type='text' id='tushi1' name='tushi[]' style='display: none;' >
            <img src='/tpl/Public/js/fex/image.png' onclick='addImgs(\"tushi1\")'  width='45'>
            <span class='dage1' onclick='delImgs(\"tushi1\")'>X</span>"; } ?>


            <div id="lastImgs"></div>
        </div>
    </div>

    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <label>操作步骤</label>
        <span class="right_jt"> ＞ </span>
        <input type="text" id="buzhouInput" name="step_info" onclick="AlertSetStep(1)" placeholder="　　简单易懂的步骤有助于完成!"  style="color: #999;">
    </div>
    <div class="buzhou" style="display:none ;">
        <div style="height: 450px;overflow: scroll">
            <div style="padding: 10px">
                <div id="taskBuzhou">
                    <?php
 if(isset($info['step_info'])){ $imgs = unserialize($info['step_info']); if ( isset($imgs['step_desc']) && count($imgs['step_desc']) > count($imgs['step_img']) ) { $data = $imgs['step_desc']; $data2 = $imgs['step_img']; }else{ $data = $imgs['step_img']; $data2 = $imgs['step_desc']; } foreach ($data as $key=>$img ){ $key2 = $key+1; $stepId = 'step'.$key2; $text = isset($data2[$key]) ? $data2[$key] :''; echo "<div class='item'>
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
        <div style="text-align: center;">
            <span style="background-color: #704eea!important;" class="btn btn-sm btn-primary" onclick="AlertSetStep(2)">确定</span>
        </div>
    </div>



    <div class="login-inp" style="background: #f4f4f4;border: none;">
        <style>
            .body_overflow {
                overflow-x:hidden;
                overflow-y:hidden;
            }

            .buzhou {
                position: absolute;
                top:0;
                right:0;
                width:100%;
                height:100%;;
                background: #fff;
                overflow: hidden;
                overflow-y:hidden;
                z-index:99;
                margin-top:5px;
            }
            .task_need{
                display: inline-block;padding-top: 10px;padding-bottom: 5px}
            .task_need input{
                display: none;
            }
            .task_need label{
                margin-left: 0;
                float: left;
                border:1px solid #9e9797;
                padding:2px 3px;
                font-size: 10px!important;;-webkit-transform:scale(0.8);
            }
            .task_need label.select{
                border:1px solid #704eea;
                color: #704eea;
            }

            #taskBuzhou .item{
                margin-top: 5px;
                height:100%;clear:both;border: 1px solid #ccc
            }
            .itemLeft,.itemCenter,.itemRight{float: left;height: 60px;padding:3px}
            #taskBuzhou .itemLeft>span{
                padding-top: 3px;
                display: block;margin-top:15px;text-align:center;width: 20px;height: 20px;border-radius: 50%;background: red;
                color: #fff;
                font-weight: bold;
            }
            #taskBuzhou .item .itemCenter{
                margin: 0 10px;;
                line-height: 60px;
            }
            #taskBuzhou .item .itemCenter img{margin-top:-10px}
            #taskBuzhou .item .itemRight textarea{
                height: 54px;min-width: 160px
            }
            #taskBuzhou .item .itemLeft input{
                width:34px;}
        </style>
      </div>



    <div class="login-inp" style="margin-bottom: 3px;background: #fff;">
         <p>平台手续费约 ¥<span id="shouxu"></span></p>
         <p>本次发布需支付约 ¥<span id="all_money"></span>，请保证账户余额充足 <a style="color:#704eea" href="<?php echo U('Member/recharge_do');?>">去充值</a></p>
        <br>
        <p style="line-height: 14px">
            提示: 本平台禁止发布黄赌毒及涉政等一切法律所禁止的内容，如发现扣除积分，封禁账号。
        </p>
    </div>

    <div style="clear: both;height: 20px"></div>

    <div class="login-inp" style="border: none;background: #704eea;text-align: center">
        <input style="line-height:20px;color:#fff;background-color:transparent!important;text-align: center" type="submit" value="提交">
    </div>

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
    var stepAreatext = 0;
    $(function(){
        var widthAll = $(window).width();
        var selectWidth = widthAll - 56 - 20 -30 - 30;
        stepAreatext = widthAll-20 - 26 - 76 - 10;

        $('select').css('width',selectWidth);
        $('.date-picker').css('width',selectWidth+30);
        $('#buzhouInput').css('width',selectWidth+30);
        $('.itemRight textarea').css('width',stepAreatext);




        //引入编辑器
        var  content;
        KindEditor.ready(function(K) {
            content = K.create('#page_content',{
                height : '250px',
                items:[
                    'fontname', 'fontsize', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'removeformat',
                    'justifyleft', 'justifycenter', 'justifyright', '|', 'insertorderedlist','insertunorderedlist','emoticons',
                    'image','link'
                ]
            });
        });


        //编辑的时候 初始化数据
       if( $("input[name='id']").val() != '' ) {

//           var prvHtml2 = '<input type="text" id="'+tushiId2+'" name="tushi[]" style="display: none;" >'+
//               '<img src="/tpl/Public/js/fex/image.png" onclick="addImgs(\''+tushiId2+'\')" alt="" width="45">' +
//               '<span class="dage1" onclick="delImgs(\''+tushiId2+'\')">X</span>';
//           console.log(uploadid);
//           $('#lastImgs').before(prvHtml2);
       }



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

        //---------------自动计算总价--------------------
        $("input[name='price']").blur(function () {
            setData();
        });
        setData();
        $("input[name='max_num']").blur(function () {
            setData()
        });
        //--------------------------------------------
        
        //表单验证
        $('form').submit(function () {
            if ($("input[name='title']").val() == "") {
                layer.msg('标题不能为空!');
                $("input[name='title']").focus();
                return false;
            }
            if ($("input[name='[price']").val() == "") {
                $("input[name='price']").focus();
                layer.msg('金额不能为空!');
                return false;
            }
            if ($("input[name='[end_time']").val() == "") {
                layer.msg('截止日期不能为空!');
                $("input[name='end_time']").focus();
                return false;
            }
            //
            var member_money = $('#member_money').val() * 1;
            var totalPrice   = $('#all_money').text() * 1;
            if (member_money < totalPrice) {
                //询问框
                layer.confirm('您的可用余额不足,去充值？', {
                    btn: ['充值','取消'] //按钮
                }, function(){
                    window.location.href = "<?php echo U('Member/recharge_do');?>"
                }, function(){

                });
                return false;
            }

            return true;
        });
    });



    function selectDiv(t) {
        if ( $(t).hasClass('select') ) {
            $(t).removeClass('select');
            $(t).parent('label').removeClass('select');
        }else{
            $(t).addClass('select');
            $(t).parent('label').addClass('select');
        }
    }

    /**
     * @ 说明 点击弹出 设置步骤 的弹出框
     * @ user fang 1044766678@qq.com
     * @type {number}
     */
    var scrollHeight= 0;
    function AlertSetStep(type) {
        if ( type == 1) {
            scrollHeight = $(document).scrollTop();
            $("html, body").scrollTop(0+"px");
            $('body').addClass('body_overflow');
            $('.buzhou').show();
        }else{
            $('body').removeClass('body_overflow');
            $('.buzhou').hide();
            $('html,body').animate({scrollTop:scrollHeight}, 0)
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
            '<textarea name="step_desc[]" style="width:'+stepAreatext+'px" placeholder="请输入步骤描述"></textarea>'+
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

    function setData() {
        var price = $("input[name='price']").val() * 1; //单价
        var num   = $("input[name='max_num']").val() * 1;//数量
        var price2 = $("#server_money").val() * 1;

        price = price * num;

        var shouxu = price * price2;
        var total = price + shouxu;

        $('#shouxu').text(shouxu)
        $('#all_money').text(total)
        $("input[name='total_price']").val(total) ;//total_price

        var member_money = $('#member_money').val() * 1;
        var totalPrice   = $('#all_money').text() * 1;
        if (member_money < totalPrice) {
            //询问框
            layer.confirm('您的可用余额不足,去充值？', {
                btn: ['充值','取消'] //按钮
            }, function(){
                window.location.href = "<?php echo U('Member/recharge_do');?>"
            }, function(){

            });
            return false;
        }
    }

</script>
</body>