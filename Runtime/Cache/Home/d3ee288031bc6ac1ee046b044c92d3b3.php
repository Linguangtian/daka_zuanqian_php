<?php if (!defined('THINK_PATH')) exit();?><html><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>积分充值</title>

    <link rel="stylesheet" href="/tpl/Public/css/share.css?2.0">
    <link rel="stylesheet" href="/tpl/Public/css/font.css?2.0">
    <link rel="stylesheet" href="/tpl/Public/css/ystep.css" type="text/css">

    <!--JQ-->

    <script type="text/javascript" src="/tpl/Public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?2.0"></script>
    <link href="http://zan.0766city.com/tpl/Public/js/layer_mobile2/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss">
    <script type="text/javascript" src="/tpl/Public/js/swiper.3.1.7.min.js"></script>



    <script src="/tpl/Public/js/jquery.simplesidebar.js"></script>

    <script src="/tpl/Public/js/jquery.SuperSlide.2.1.1.js"></script>

    <script src="/tpl/Public/js/TouchSlide.1.0.js"></script>



    <script type="text/javascript" src="/tpl/Public/js/func.js?2.0"></script>

    <script>

        var SITE_URL  = 'https:' == document.location.protocol ?'https://' : 'http://' + "zan.0766city.com";

    </script>

    <style>
        .recharge_box {
            display: none;
            background: #eeeeee;
            border: solid 1px #dddddd;
            left: 50%;
            top: 50%;
            position: fixed;
            z-index: 999999;
            width: 300px;
            height: 180px;
            margin-left: -170px;
            margin-top: -90px;
            padding: 20px;
            color: #000;
        }

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
    </style>

</head>
<body>
<header class="top_header">
    <div class="left"><a href="javascript:" class="return go-back"></a></div>
    <div class="title">积分充值</div>
    <div class="right"><a  href="<?php echo U('Member/sale',array('type'=>3));?>">充值记录</a></div>


</header>



<!-- 头部部分 开始 -->
<div class="z-line-header">0.00  <span class="flex number-text">账户积分</span>
    <span style="font-size: 12px; margin: 1% 0px;">1积分=1现金</span>
</div>
<!--主体部分 开始-->
















<div class="rech_main">
    <h6>请选择支付方式</h6>

    <div class="gray_bg sytemNotice">
        <div class="notice">

            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Member/recharge_do2',array('type'=>$vo['id']));?>" class="item wrap-flex-row goto ">
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





</div>


<script>
    $(function(){
        /*金额数值 切换*/
        $('.rech_main li').click(function(){
            $(this).css("background-color","#4eaf00").children().css("color","#fff");
            $(this).siblings().css("background-color","#704eea").children().css("color","#fff");
            $('#price').val($(this).attr('data-price'));
        });


        $('.recharge_box label').click(function(){
            $('.recharge_box label span').removeClass('active');
            $(this).find('span').addClass('active');
            var payment_type = $(this).attr('data-key');
            $('#payment_type').val(payment_type);
        });

        $('.cancel').click(function () {
            $('.recharge_box').hide();
        });


        $('.recharge_btn').click(function(){
            var price = $('#price').val();
            if(price==''){
                sp_tip('请选择充值金额');
                return false;
            }
            if(isNaN(price)){
                sp_tip('价格必须为数字');
                return false;
            }
            if( price < 0){
                sp_tip('价格必须大于0');
                return false;
            }
            $('.recharge_box').show();
        })
    })
</script></body></html>