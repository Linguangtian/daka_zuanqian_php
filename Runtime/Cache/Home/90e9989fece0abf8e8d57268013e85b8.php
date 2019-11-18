<?php if (!defined('THINK_PATH')) exit(); $title = "购买会员";?>

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

    .sytemNotice .notice .item{
        background: #fff;
        margin:3vw 3vw 0;
        border-radius: 1vw;
        justify-content:flex-start;
        position: relative;
        border-bottom: 1px solid #ccc;display: block;

    }
    .sytemNotice .notice .item img.avatar{
        width: 10vw;
        height: 10vw;
        margin:2vw;
        float: left;
    }
    .sytemNotice .notice .item .info{
        float: left;
        height: 10vw;
        margin: 2vw;
        width: 70vw;;
        text-align: left;
    }
    .sytemNotice .notice .item .info .time{
        font-size: 3vw;
        color: #666
    }
    .sytemNotice .notice .item .right{
        height: 10vw;
        line-height: 10vw;
        margin: 2vw;
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

    .recharge_box {
        display: none;
        background: #eeeeee;
        border: solid 1px #dddddd;
        left: 7%;
        top: 30px;
        position: fixed;
        z-index: 999999;
        width: 80%;
        height: 480px;
        overflow-y: scroll;
        /*margin-left: -170px;*/
        /*margin-top: -90px;*/
        padding: 10px;
        margin:0;
        color: #000;
    }
    .task_box .con ul li{background: none;height:auto;padding:1px 10px}
    .task_box .con ul li a span.zhuangtai{float: none;width:auto;padding-left:10px;padding-right:10px}
    .task_box .con ul li a{height:30px}
</style>

<body style="background-color:#ffffff;">

<!-- 头部部分 开始 -->
<header class="top_header">
    <div class="left"><a href="<?php echo U('index');?>" class="return"></a></div>
    <div class="title">开通会员</div>
</header>

<section class="grade-main mt">
    <form id="form1" class="" data-callback="1" name="form1" method="post" action="<?php echo U('vip');?>" >
        <input type="hidden" name="price" id="price" value="" />
        <input type="hidden" name="level" id="level" value="" />
        

        <div class="btm">
            <!--<div class="tit">
                <span class="long01"></span>
                <p>升级会员</p>
                <span class="long02"></span>
            </div>-->

            <div class="list" id="vip_sel">
                <?php if(is_array($member_level)): $i = 0; $__LIST__ = $member_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="sub <?php if($vo['level'] > $member['level']): ?>lv<?php endif; ?>" data-id="<?php echo ($vo["level"]); ?>" data-price="<?php echo ($vo["price"]); ?>" style="margin-bottom:20px">
                        <p class="img"><img src="/tpl/Public/images/medal_icon_<?php echo ($vo["level"]); ?>.png"  /></p>
                        <p class=""><?php echo ($vo["name"]); ?></p>
                        <span>￥<?php echo ($vo["price"]); ?></span>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        <div class="dx_line">
            <span>选择支付方式</span>
        </div>

        <div class="gray_bg sytemNotice">
            <div class="notice">

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)" onclick="submitPay(<?php echo ($vo["id"]); ?>)" data-href="<?php echo U('Member/recharge_do2',array('type'=>$vo['id']));?>" class="item wrap-flex-row goto ">
                        <img src="<?php echo ($vo["ico"]); ?>" class="avatar">
                        <div class="info">
                            <div class="title">
                                <?php echo ($vo["pay_name"]); ?>
                            </div>
                            <div class="time"><?php echo ($vo["pay_name2"]); ?> 最低<?php echo ($vo["min_money"]); ?>　 最高<?php echo ($vo["max_money"]); ?></div>
                        </div>
                        <div class="right">
                            <span>></span>
                        </div>
                        <div style="clear: both"></div>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>

            <!--<div class="recharge_box" style="margin-top: 0;border-top: 0; padding-bottom: 40px;">-->
                <!--<input type="hidden" name="payment_type" id="payment_type" value="">-->
                <!--&lt;!&ndash;<p>选择支付方式：</p>&ndash;&gt;-->
                <!--<label data-key="alipay">-->
                    <!--<i class="alipay"></i> 支付宝支付 <span></span>-->
                  <!---->
                <!--</label>-->
               <!--<label data-key="wxpay">-->
               <!---->
                  <!--<i class="wxpay"></i>微信支付<span></span>-->
                <!--</label>-->
            <!--</div>-->

        </div>

        <button type="submit" id="submit" style="display: none;">立即缴纳<span id="show_price_1" ></span></button>
    </form>



</section>
<div class="recharge_box task_box" style="text-align:center;;;" >

    <div class="con">
        <ul style="display: block;">
            <li>
                <a onclick="javascript:void(0)" class="link">
                    <p class="clear">
                        <span class="t">支付方式</span>
                        <span class="zhuangtai2">
                                <img id="ico" src="/tpl/Public/images/span-zfb.png" alt="" height="30">
                            </span>
                    </p>
                </a>

                <a onclick="javascript:void(0)" class="link" style="margin-top: 10px">
                    <p class="clear">
                        <span class="t">订单号</span>
                        <span class="zhuangtai" id="orderId">12345678945</span>
                    </p>
                </a>

                <a onclick="javascript:void(0)" class="link">
                    <p class="clear">
                        <span class="t">充值金额</span>
                        <span class="zhuangtai2" id="price2">50</span>
                    </p>
                </a>
            </li>
        </ul>

        <div>
            <img src="/Upload/Pay/thumb/5db1da11a4156.jpg" id="erweima" alt="" height="150">
        </div>

    </div>


    <label style="padding:0">*如需帮助，可联系客服人工充值</label>
    <button type="button" class="cancel vip_lijisj">取消</button>
    <button type="submit" id="submit_cz" class="vip_lijisj">确认充值</button>
    <div id="pay_desc" style="text-align: left">

    </div>
</div>

</body>

</html>



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