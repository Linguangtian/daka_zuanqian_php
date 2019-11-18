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
 <link rel="stylesheet" href="/tpl/Public/css/share.css?3"/>
<style>
	.index_rwxq{width: 92%;
		margin-left: 4%;}
	.index_title{min-height: 30px}
	.index_tjrw{margin-top:10px;
		height:100%;}
	.index_rwxq img{
		width: 4rem;margin:1rem 0.5rem;
		height:4rem;;}
	.index_wzns{
		width:55%;padding-top:5px}
	.index_title{
		display: -webkit-box;
		-webkit-box-orient: vertical;
		-webkit-line-clamp: 2;
		overflow: hidden;
	}
	.index_syrw{
		margin-top:3px;}
	.category .col {
		float: left;
		width: 20%!important;
		margin-top: 7px;;
	}
	.category .content img{
		width: 50px;;
		height: 50px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
	}
	.category .content{
		text-align: center;
	}
	.category .content span {
		display: block;
		margin-top: 1px;
		margin-bottom: 5px;;
	}
	.category .content span.active{
		color: #704eea;
	}

	#select_div>div{
		width:92%;
		padding:0px 4%;
	}
	#select_div>div>span{
		display: inline-block;
		width:30.9%;
		text-align: center;
		margin:10px 0;
	}
	#select_div>div>span:nth-of-type(2){
		border-left:1px solid #ccc;
		border-right:1px solid #ccc;
	}
	#select_div>div select{border:none}

</style>
<body class="gray_bg">
<!-- 头部部分 开始 -->

<div class="body_main task_box mt tline" style="margin-top: 0px;border: none;overflow-x: hidden">
   <header class="top_header">
    <div class="left"><a href="<?php echo U('Task/index');?>" class="return"></a></div>
    <div class="title">任务大厅</div>
   </header>
	<div style="height: 40px;"></div>

	<div style="background: linear-gradient(1turn,#946aff,#704eea  96%);;">
		<div style="padding:3% 6%">
			<input id="serachInput" value="<?php echo ($serach_key?$serach_key:''); ?>" type="text" style="width: 100%;border-radius: 7px;height: 30px;text-align: center" placeholder="输入关键词">
		</div>
	</div>

	<div style="padding: 3%">
		<div class="row category">
			<?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($key>9){continue;} ?>
				<div class="col s3 col-5x">
					<div class="content">
						<a href="<?php echo U('Index/serach',array('cid'=>$vo['id']));?>">
							<img src="<?php echo ($vo['ico'] ?$vo['ico'] : sp_cfg('web_logo')); ?>" alt="">
							<span class="<?php echo ($vo['id']==$cid?'active':''); ?>"><?php echo ($vo['name']); ?></span>
						</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div style="clear: both"></div>
		</div>
	</div>

	<div id="select_div" style="border-top:1px solid #ccc;border-bottom:1px solid #ccc">
		<div>
			<span>
				<select name="select_cate" id="select_cate">
					<option value="0">所有分类</option>
					<?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php echo $vo['id']== $cid ? "selected":""?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</span>
			<span>
				<select name="select_level" id="select_level">
					<option value="-1">所有等级</option>
					<?php if(is_array($level_list)): $i = 0; $__LIST__ = $level_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["level"]); ?>" <?php echo $vo['level']== $level ? "selected":""?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</span>
			<span>
				<select name="select_sort" id="select_sort">
					<option value="0" <?php echo $sort== 0 ? "selected":""?> >综合排序</option>
					<option value="1" <?php echo $sort== 1 ? "selected":""?> >最新发布</option>
					<option value="2" <?php echo $sort== 2 ? "selected":""?> >价格由高到低</option>
					<option value="3" <?php echo $sort== 3 ? "selected":""?> >价格由低到高</option>
					<option value="4" <?php echo $sort== 4 ? "selected":""?> >最多人完成</option>
				</select>
			</span>
		</div>
	</div>

    <div class="task_list" data-key="<?php echo ($serach_key); ?>" data-cid="<?php echo ($cid?$cid:0); ?>" data-sort="<?php echo ($sort?$sort:0); ?>" data-level="<?php echo ($level?$level:0); ?>" style="margin-top:0;">
		<p class="index_tjrw" style="margin-left:4%"><?php echo ($serachName); ?> <a href="" style="float: right;color: #9a9292;">more > 　</a></p>

		<?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Task/show',array('id'=>$vo['id']));?>">
        	  	<div class="index_rwxq" style="width: 92%;margin-left: 4%;">
        		<img src="<?php echo ($vo["ico"]); ?>"/>
        		
        		<div class="index_wzns">
        			<p class="index_title"><?php echo ($vo["title"]); ?></p>
        			<p class="index_ffl">
						<span><?php echo ($vo["name"]); ?></span>
						<span class="index_gjrw"><?php echo ($vo["levelname"]); ?></span>
					</p>
        			<p class="index_syrw">剩余数量：<span><?php echo ($vo['apply_num']); ?>/<?php echo ($vo['max_num']); ?></span></p>
        		</div>
        		
        		<p class="index_qqq">
        			<?php echo ($vo["price"]); ?>
        			<span></span>
        		</p>
        		
        	</div>
        	</a><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

   

    
</div>
<script>
	$(function () {

        //回车直接搜索
        $('#serachInput').keydown(function(e){
            if(e.keyCode==13){
                if ( $('#serachInput').val() !="") {
                    var indexReload=layer.open({type: 2});
                    window.location.href = '/Home/Index/serach.html'+"?key="+$('#serachInput').val();
                }
            }
        });

        //
		$('#select_cate').change(function () {
            var indexReload=layer.open({type: 2});
            var cid = $(this).val();
            var level = $('.task_list').data('level');
            var sort = $('.task_list').data('sort');
			window.location.href = '/Home/Index/serach/cid/'+cid+'/level/'+level+'/sort/'+sort+'.html';

        });
		$('#select_level').change(function () {
            var indexReload=layer.open({type: 2});
            var level = $(this).val();
            var cid = $('.task_list').data('cid');
            var sort = $('.task_list').data('sort');
			window.location.href = '/Home/Index/serach/cid/'+cid+'/level/'+level+'/sort/'+sort+'.html';

        });$('#select_sort').change(function () {
            var indexReload=layer.open({type: 2});
            var sort = $(this).val();
            var level = $('.task_list').data('level');
            var cid = $('.task_list').data('cid');
			window.location.href = '/Home/Index/serach/cid/'+cid+'/level/'+level+'/sort/'+sort+'.html';

        });


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
    //jiazai();
    function jiazai(){
        if(nStart >= 61) {
            layer.open({
                content: '没有更多的任务'
                ,skin: 'msg'
                ,time: 2
            });
            return false;
        }else{
            var _this = $(".task_list");
            var taskname;
            var iconame;
            var levelname;
            layer.open({
                type: 2,
                content: '加载中...'
            });
            $.post("/index.php/Home/Index/serach.html",{start: nStart,key:_this.data('key'),cid:_this.data('cid'),level:_this.data('level')},function(res){
                $.each(res['info'], function(i,item){
                    _this.append('<a href="/home/Task/show/id/'+item.id+'.html">\
<div class="index_rwxq" "><img src="'+item.ico+'"/>\
<div class="index_wzns">\
<p class="index_title">'+item.title+'</p>\
<p class="index_ffl"> <span>'+item.name+' </span> <span class="index_gjrw">'+item.levelname+'</span> </p>\
<p class="index_syrw">剩余数量：<span>'+item.apply_num+'</span>/'+item.max_num+'</p>\
</div>\
<p class="index_qqq">+'+item.price+'<span></span></p>\
</div>\
</a>');
                });
                isbool = true;
                layer.closeAll();
            });
            nStart += 10;
        }
    };
</script>
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
</body>
</html>