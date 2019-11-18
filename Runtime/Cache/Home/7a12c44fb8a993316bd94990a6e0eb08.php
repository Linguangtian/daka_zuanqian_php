<?php if (!defined('THINK_PATH')) exit(); $title = "系统消息";?>
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
    .team_tab li{width:33.3%}

    .sytemNotice .notice .item{
        background: #fff;
        margin:3vw 3vw 0;
        border-radius: 1vw;
        justify-content:flex-start;
        position: relative;
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
<body class="gray_bg sytemNotice">

<div id="body" style="background: #f8f8fa">
    <!-- 头部部分 开始 -->
    <header class="top_header">
        <div class="left"><a href="javascript:" data-url="<?php echo U('index');?>" class="return go-back"></a></div>
        <div class="title"><?php echo ($title); ?></div>
    </header>
    <div style="margin-top: 40px"></div>

    <div class="team_tab">
        <ul>
            <li class="<?php echo ($type==1?'current':''); ?>"><a href="<?php echo U('Member/notice',array('type'=>1));?>">系统通知</a></li>
            <li class="<?php echo ($type==2?'current':''); ?>"><a href="<?php echo U('Member/notice',array('type'=>2));?>">新闻资讯</a></li>
            <li class="<?php echo ($type==3?'current':''); ?>"><a href="<?php echo U('Member/notice',array('type'=>3));?>">帮助中心</a></li>
        </ul>
    </div>

    <!--主体部分 开始-->
    <div class="notice">
        <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $img = isset($vo['thumb']) ? $vo['thumb']:'/Upload/SystemConfig/5d25a71bb963e.png'; $url = U('News/show',array('id'=>$vo['id'])); $url2 = U('Page/show',array('id'=>$vo['id'])); $vo['type'] == 'news' ? $c = 'onclick=goto("'.$url.'")': $c=''; $vo['type'] == 'page' ? $c2 = 'onclick=goto("'.$url2.'")': $c2=''; ?>
                    <div <?php echo ($vo['type'] == 'news'? $c : $c2); ?> class="item wrap-flex-row goto <?php echo ($vo['view_style']?'ash':''); ?>" url="/index.php/Home/Page/show/id/28.html">
                        <img src="<?php echo ($img); ?>" class="avatar">
                        <div class="info">
                            <div class="title">
                                <?php echo ($vo["msg"]); ?> <?php echo ($vo["view_style"]); ?>
                            </div>
                            <div class="time"><?php echo (date('Y-m-d',$vo["create_time"])); ?></div>
                        </div>
                        <div style="clear: both"></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php else: ?>
            <div class="none">
                <div class="none_box">
                    <img src="/tpl/Public/images/none.png" alt="">
                    <span>暂无信息</span>
                </div>
            </div><?php endif; ?>

    </div>
</div>
<script>
    function goto(url) {
        window.location.href = url;
    }
</script>
</body>
<style type="text/css">
	.footer li{
		width: 20%;
        padding:5px 0;
	}

    .fabu{
        /*font-size: 20px;display: block;border-radius: 50%;margin: 0 auto;*/
        /*width:50px;height: 50px;border: 1px solid red;*/
        /*margin-top: -30px;*/
        /*z-index: 999;;position:absolute;*/

        border: 1px solid gainsboro;
        border-radius: 50%;
        background: #FE2E64;
        width: 48px;
        line-height: 48px;
        margin:0 auto;
        height: 48px;
        font-size: 2.5rem;
        margin-top: -5px;
    }
    .user_index_shza{
        margin-bottom:150px;
    }
    .divright{
        position: relative;
        right: 10px;;
        top: -35px;;
        background:#c72c4f;
        width: 15px;
        height: 15px!important;
        float: right;
        border-radius: 50%;
        color: #fff;
    }
    .body_main{
        margin-bottom: 76px;;}
    .footer li span.hide{display: none}

</style>
<footer class="footer">
    <ul>
        <li <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Index/index');?>">
                <span><i class="icon_home" style="width: 20px;height: 20px;"></i></span>
                <p>首页</p>
            </a>
        </li>
        <li <?php if(CONTROLLER_NAME == 'Task'): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Task/index');?>">
                <span><i class="icon_task" style="width: 20px;height: 20px;"></i></span>
              <p>大厅</p>
            </a>
        </li>
        <li <?php if(CONTROLLER_NAME == 'Task2'): ?>class="active"<?php endif; ?> >
        <div class="fabu">
            <a href="<?php echo U('Task/handle');?>" style="font-size: 35px; color: #fff; ">+</a>
        </div>

        </li>
		<li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'notice'): ?>class="active"<?php endif; ?> >
           <a href="<?php echo U('Member/notice');?>">
                <span><i class="icon_xiaoxi" style="width: 20px;height: 20px;"></i></span>
             <p>消息 </p>
               <span class="divright <?php echo ($_SESSION['weidu_xiaoxi'] ? 'show':'hide'); ?>"><?php echo ($_SESSION['weidu_xiaoxi']); ?></span>
            </a>
        </li>
        <li <?php if(CONTROLLER_NAME == 'Member' and ACTION_NAME == 'index' ): ?>class="active"<?php endif; ?> >
            <a href="<?php echo U('Member/index');?>">
                <span><i class="icon_user" style="width: 20px;height: 20px;"></i></span>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>

<script>
    $(function () {
        $('.footer').prev('div').css('margin-bottom','150px')
    })

</script>
</html>