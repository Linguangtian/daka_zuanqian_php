<?php if (!defined('THINK_PATH')) exit(); $title = "排行榜";?>

<!DOCTYPE html>

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

<style>

    #oval {
        width: 100%;
        height: 200px;
        background: #704eea;
        -moz-border-radius: 100px / 50px;
        -webkit-border-radius: 100px / 50px;
        border-radius: 100px / 50px;

        margin-top: -100px;
    }

    .title a{display: inline-block;
        text-align: center;
        border: 1px solid #fff;
        padding-top: 5px;;
        padding-bottom: 5px;border-radius: 15px;
        color: #fff;
        width:31.3%;}
    .title2 a{border:0;width:30%}
    .title2 a:nth-of-type(2){
        position: relative;
        top: -40px;
        margin: 10px;;
    }
    .title2 a img{border-radius: 50%;width:70px}
    .title2 a span{
        display: block;
        width:20px;height: 20px;
        border-radius: 50%;
        position: relative;margin: 0 auto;
        top:-15px;
        background: #f43489;
    }
    .title2 a h1{
        font-size: 15px;
        position: relative;
        top:-18px;
    }
    .title2 a p{
        padding:3px;
        border-radius: 10px;background: rgba(0,0,0,0.4);
        position: relative;
        top:-18px;
    }


    .sytemNotice .notice .item{
        background: none;
        margin:3vw 3vw 0;
        border-radius: 1vw;
        justify-content:flex-start;
        position: relative;
    }
    .sytemNotice .notice .item img.avatar{
        width: 10vw;
        height: 10vw;
        margin:2vw;
        float: left;border-radius: 50%;
    }
    .sytemNotice .notice .item .price{
        float: right;margin: 2vw;line-height: 10vw;
    }
    .sytemNotice .notice .item .xuhao{
        float: left;
        line-height: 10vw;
        margin: 2vw;


    }
    .sytemNotice .notice .item .info{
        float: left;
        height: 10vw;
        margin: 2vw;
        width: 50vw;;line-height: 10vw;
    }
    .sytemNotice .notice .item .info .time{
        font-size: 3vw;
        color: #666
    }
    .sytemNotice .notice .item.ash{
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
        color: #999;
    }
    .sytemNotice .weui-badge_dot{
        position: absolute;
        right: 2vw;
        top: 2vw;
        padding: 0.3em;
    }
    .sytemNotice .body{
        margin:3vw;
        padding: 2vw;
        background: #fff;
    }


</style>

<body style="background: #6c42d6;">

<!-- 头部部分 开始 -->
<header class="top_header">
    <div class="left"><a href="<?php echo U('index');?>" class="return"></a></div>
    <div class="title">排行榜</div>
</header>
<div style="height: 40px"></div>
<div style="z-index: 2">
    <div id="oval">
        <div class="title" style="margin: 0 10%;border:0px solid red;padding-top: 120px">
            <a href="<?php echo U('Member/paihang',['type'=>1]);?>" style="<?php echo ($type==1 ? 'background: #F43489':''); ?>">本周排行</a>
            <a href="<?php echo U('Member/paihang',['type'=>2]);?>" style="<?php echo ($type==2 ? 'background: #F43489':''); ?>">本月排行</a>
            <a href="<?php echo U('Member/paihang',['type'=>3]);?>" style="<?php echo ($type==3 ? 'background: #F43489':''); ?>"> 所有时间</a>
        </div>
    </div>
</div>

<div class="main" style="margin-top:-0px;height: 500px;z-index: 1;">
    <div class="title  title2" style="padding:1% 5%;">
        <a href="">
            <img src="<?php echo ($sys_config["web_logo"]); ?>" alt="" width="100%" height="100%">
            <span>2</span>
            <h1><?php echo ($list[1]['nickname']); ?></h1>
            <p>￥<?php echo ($list[1]['total_price']); ?></p>
        </a>
        <a href="">
            <img src="<?php echo ($sys_config["web_logo"]); ?>" alt="" width="100%" height="100%">
            <span>1</span>
            <h1><?php echo ($list[0]['nickname']); ?></h1>
            <p>￥<?php echo ($list[0]['total_price']); ?></p>
        </a>
        <a href="">
            <img src="<?php echo ($sys_config["web_logo"]); ?>" alt="" width="100%" height="100%">
            <span>3</span>
            <h1><?php echo ($list[2]['nickname']); ?></h1>
            <p>￥<?php echo ($list[2]['total_price']); ?></p>
        </a>
    </div>

    <div class="sytemNotice">
        <div class="notice">

            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $key1 = $key+1;$key1 <10? $key1='0'.$key1:'';if($key<3) {continue;} ?>
                <div class="item wrap-flex-row goto ">
                    <span class="xuhao"><?php echo ($key1); ?></span>
                    <img src="/Upload/SystemConfig/5d25a71bb963e.png" class="avatar">
                    <div class="info">
                        <div class="title">
                            <?php echo ($vo["nickname"]); ?>
                        </div>
                    </div>
                    <div class="price">￥<?php echo ($vo["total_price"]); ?></div>
                    <div style="clear: both"></div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

    </div>

</div>

<section class="grade-main mt">

</section>

</body>



<script>
    $(document).ready(function(){
        $('.recharge_box label').click(function(){
            $('.recharge_box label span').removeClass('active');
            $(this).find('span').addClass('active');
            var payment_type = $(this).attr('data-key');
            $('#payment_type').val(payment_type);
        });

        $('#vip_sel .sub.lv').click(function(){
            var price = $(this).attr('data-price');
            var level = $(this).attr('data-id');
            $(this).addClass('active').siblings().removeClass('active');
            $('#show_price_1').html("（￥" +price+"）");
            $('#price').val(price);
            $('#level').val(level);
        });

        $('#submit').click(function(){
            var payment_type = $('#payment_type').val();
            var level = $('#level').val();

            if( level == '' ) {
                sp_tip('请选择要升级的级别.');
                return false;
            }
            if( payment_type == '' ) {
                sp_tip('请选择支付渠道.');
                return false;
            }
        })
        //$('#form1').submit();

    });

    $('.cancel').click(function () {
        $('.recharge_box').hide();
    });


    $('#submit_cz').click(function () {
        layer.open({
            content: '充值中,请稍后刷新余额!'
            ,skin: 'msg'
            ,time: 2 //2秒后自动关闭
        });
        $('.recharge_box').hide();
    });

    function submitPay(paytype) {
        var payment_type = $('#payment_type').val();
        var level = $('#level').val();

        if( level == '' ) {
            sp_tip('请选择要升级的级别.');
            return false;
        }

        $.ajax({
            type:"POST",
            url:"<?php echo U('Member/vip');?>",
            data :{level:level,type:paytype},
            dataType:"json",
            async : false,
            success:function(coordinates){
                result = coordinates;

                if (result.paytype == 'alipay_wap' && result.redirect_url) {
                    window.location.href = result.redirect_url;
                }
                if (result.paytype != '' && result.redirect_url) {
                    window.location.href = result.redirect_url;
                }

                $('#ico').attr('src',result.ico);
                $('#orderId').text(result.order_no);
                $('#price2').text(result.price);
                $('#pay_desc').html(result.pay_desc);
                $('#erweima').attr('src',result.erweima);
                $('.recharge_box').show();
            },
            error:function(data){
                console.log('error'+data.status)
            }
        });
    }

    function submit_callback(data){
        if( data.status == 1 ) {
            window.location.href = data.url;
        } else {
            sp_tip(data.info);
        }
    }
</script>