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

<style>
        html,body,div,p,form,label,ul,li,dl,dt,dd,ol,img,button,b,em,strong,small,h1,h2,h3,h4,h5,h6{margin:0;padding:0;border:0;list-style:none;font-style:normal;}
        body{font-family:SimHei,'Helvetica Neue',Arial,'Droid Sans',sans-serif;font-size:14px;color:#333;background:#f2f2f2;}
        a, a.link{color:#666;text-decoration:none;font-weight:500;}
        a, a.link:hover{color:#666;}
        h1,h2,h3,h4,h5,h6{font-weight: normal;}
        .login{}
        .welcome img{}
        .login-inp{margin:0 30px 15px 30px;border:1px solid #fff;border-radius:25px;}
        .login-inp label{width:4em;text-align:center;display:inline-block;color:#fff;}
        .login-inp input{line-height:40px;color:#fff;background-color:transparent;border:none;outline: none;}
        .login-inp .submit{display:block;background:none;width:100%;text-align:center;line-height:40px;color:#fff;font-size:16px;letter-spacing:5px;}
        .login-txt a{color:#fff;padding:0 5px;}
    </style>


<body style="background: #fff;" >
<header class="top_header">
    <div class="left"><a href="javascript:" data-url="<?php echo U('Member/index');?>" class="return go-back"></a></div>
    <div class="title"><?php echo ($title); ?></div>
</header>
<div class="login">
    <form class="submit-ajax" action="<?php echo U('bdzh');?>">
        <div class="login-form" style="margin-top:65px">


            <div class="login-inp" style="background: #f4f4f4;border: none;">
                <label style="color: #999;">抖音</label>
                <input  type="text" name="douyin"  value="<?php echo ($user['douyin']); ?>"  placeholder="请输入抖音号码" autocomplete="off" style="color: #000;">
            </div>
            <div class="login-inp" style="background: #f4f4f4;border: none;">
                <label style="color: #999;">快手</label>
                <input  type="text" name="username" value="<?php echo ($user['kuaishou']); ?>"  id="kuaishou"  placeholder="请输入快手号码" autocomplete="off" style="color: #000;">
            </div>
            <div class="login-inp" style="background: #f4f4f4;border: none;">
                <label style="color: #999;">火山</label>
                <input  type="text" name="huoshan" value="<?php echo ($user['huoshan']); ?>"   placeholder="请输入火山号码" autocomplete="off" style="color: #000;">
            </div>
            <div class="login-inp" style="background: #f4f4f4;border: none;">
                <label style="color: #999;">小红书</label>
                <input  type="text" name="xiaohongshu" value="<?php echo ($user['xiaohongshu']); ?>"   placeholder="请输入小红书号码" autocomplete="off" style="color: #000;">
            </div>

            <br>
            <div class="login-inp" style="border: none;background: #704eea;"><button type="submit" class="submit">确认修改</button></div>
        </div>
    </form>
</div>

</body>
</html>