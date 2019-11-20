<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content=""/>

    <!--JQ-->
    <script type="text/javascript" src="/tpl/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
    <script type="text/javascript" src="/tpl/Public/js/swiper.min.js"></script>

    <script src="/tpl/Public/js/jquery.simplesidebar.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/func.js"></script>

    <link rel="stylesheet" href="/tpl/Public/css/share.css?3"/>
    <link rel="stylesheet" href="/tpl/Public/css/font.css?3"/>
    <link rel="stylesheet" href="/tpl/Public/css/index_new.css?3"/>

</head>
<body class="gray_bg" style="background:#fff;overflow-x: hidden">
<div id="body">
    <div class="body_main" style="margin-top:-px;">
		<!--QQ 1044766678-->
	<!--	&lt;!&ndash; 弹窗提醒&ndash;&gt;
		<div class="pop-background flex" id="myModal">
			<div class="ggnotice flex fw">
				<img src="/tpl/Public/images/topnotice.png" class="ggnotice-img">
				<div class="ggnotice-html"><p style="margin-left:0cm; margin-right:0cm; text-align:center"><span style="font-size:12pt"><span style="font-family:宋体"><strong><span style="font-size:13.5pt"><span style="font-family:宋体">
					<?php echo ($page_notice_list['title']); ?> </span></span></strong></span></span></p>
					<p>
						<?php echo ($page_notice_list['content']); ?>
					</p>
					<p><a class="page_index_ckxxnr" href="<?php echo U('Page/show',array('id'=>$page_notice_list['id']));?>">查看详细内容 </a></p>
				</div>
				<img src="/tpl/Public/images/close_notice.png" class="close-img">
			</div>
		</div>-->
		<!-- 弹窗提醒-->

	
        <!--banner部分 开始-->
		<div style="background: #ff5196;">
			<div style="padding:5% 6%">
				<input id="serachInput" type="text" data-danmu="<?php echo C('SHOW_Barrage');?>" style="width: 100%;border-radius: 7px;height: 30px;text-align: center" placeholder="输入关键词" hidden>
			</div>
		</div>
		<div style="height: 50px;background: #ff5196;"> </div>
		<div id="oval">

		</div>
		<div class="swiper-banner" style="margin-top:-100px;width: 100%;overflow: hidden">
			<div class="index_lb swiper-wrapper" style="display: ">
				<?php $_result=sp_get_advert(1, 2);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="swiper-slide goto" href="<?php echo ($vo["url"]); ?>">
						<img src="<?php echo (sp_img($vo["thumb"])); ?>"/>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<!--<div class="swiper-pagination"></div>-->
		</div>
		<!--banner部分 结束-->

		<!--滚动提醒部分 开始-->
		<div data-v-4444cd4b="" class="lamp flex js" style="margin: 0px; ">
			<img style="margin:5px 20px;width:20px" data-v-4444cd4b="" src="/tpl/Public/images/notice.png" class="lamp-img">
			<div data-v-4444cd4b="" class="move-warp">
				<div data-v-4444cd4b="" class="move move-start">
					<?php
 $array=array( ['user'=>'彭正芳','price'=>20.00], ['user'=>'李明','price'=>20.00], ['user'=>'于秀文','price'=>60.00], ['user'=>'刘燕','price'=>50.00], ['user'=>'方涛','price'=>30.00], ['user'=>'陈芳','price'=>20.00], ['user'=>'陈秀清','price'=>10.00], ['user'=>'张怀秀','price'=>50.00], ['user'=>'罗玉群','price'=>200.00], ['user'=>'李晨','price'=>50.00], ); foreach ($array as $item) { echo '<div data-v-4444cd4b="" class="move-item ell">
									<span data-v-4444cd4b="">用户</span>
									<span data-v-4444cd4b="" class="org">'.$item['user'].'</span>
									<span data-v-4444cd4b="">完成悬赏提现成功</span>
									<span data-v-4444cd4b="" class="org">'.$item['price'].'元</span>
								</div>'; } ?>
				</div>
			</div>
		</div>

		<!--
		<div style="padding: 3%">
			<div class="row category">
				<?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col s3 col-5x" style="width:<?php echo ($vo['show_width']?$vo['show_width']:20); ?>%!important">
						<div class="content">
							<a href="<?php echo U('Index/serach',array('cid'=>$vo['id']));?>">
								<img src="<?php echo ($vo['ico']); ?>" alt="" width="50" height="<?php echo ($vo['show_height']?$vo['show_height']:50); ?>" style="width: 100%;">
								<?php echo $vo['show_title'] ? '<span>'.$vo['name'].'</span>':'' ?>
							</a>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div style="clear: both"></div>
			</div>
		</div>
		-->


		

		<!-- 统计数据 -->
	<!-- 	<div class="b-seller segments home-chart" style="margin-top: -10px;<?php echo C('SHOW_CHART') ? 'display:block':'display:none' ?>">
			<div class="container" style="padding:3%">
				<div class="row">
					<div class="col s6 chart-child">
						<div class="col s8">
							<span>今日 <span>任务</span> 数</span>
							<h3 id="taskCount">136</h3>
							<p>较昨日 <i class="fa fa-arrow-up"></i> 0.3%</p>
						</div>
						<div class="col s4">
							<img src="<?php echo sp_cfg('web_logo');?>" alt="">
						</div>
					</div>
					<div class="col s6 chart-child">
						<div class="col s8 ">
							<span>今日 <span>用户</span> 数</span>
							<h3 id="memberCount">99</h3>
							<p>较昨日 <i class="fa fa-arrow-down"></i> 1.3%</p>
						</div>
						<div class="col s4">
							<img src="<?php echo sp_cfg('web_logo');?>" alt="">
						</div>
					</div>
					<div class="col s6 chart-child">
						<div class="col s8 ">
							<span>今日 <span>金额</span> 数</span>
							<h3 id="moneyCount">10</h3>
							<p>较昨日 <i class="fa fa-arrow-down"></i> 0.05%</p>
						</div>
						<div class="col s4">
							<img src="<?php echo sp_cfg('web_logo');?>" alt="">
						</div>
					</div>
					<div class="col s6 chart-child">
						<div class="col s8 ">
							<span>今日 <span>成交</span> 数</span>
							<h3 id="applyCount">96</h3>
							<p>较昨日 <i class="fa fa-arrow-up"></i> 0.01%</p>
						</div>
						<div class="col s4">
							<img src="<?php echo sp_cfg('web_logo');?>" alt="">
						</div>
					</div>
					<div style="clear: both"></div>
				</div>
			</div>
		</div>
		<!-- 统计数据 -->


<!--首页中部广告-->
	<!--	<?php if($adv['thumb'] != ''): ?><a style="padding: 10px;display: block" href="<?php echo ($adv['url']); ?>">
				<img src="<?php echo ($adv['thumb']); ?>" alt="" width="100%">
			</a><?php endif; ?>
		<!--首页中部广告-->


        
        <!-- 推荐任务 列表 开始-->
        <div class="index_rwlb task_index_rwlbfl">
        	<p class="index_tjrw">推荐任务 <a href="<?php echo U('Index/serach',array('id'=>$vo['id']));?>" style="float: right;color: #9a9292;">more > 　</a></p>
        	 <?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Task/show',array('id'=>$vo['id']));?>">
					<div class="index_rwxq">
						<img src="<?php echo ($vo["ico"]); ?>"/>

						<div class="index_wzns">
							<p class="index_title"><?php echo ($vo["title"]); ?></p>
					  		<p class="index_ffl">
								<span><?php echo ($vo["name"]); ?></span>
								<span class="index_gjrw"><?php echo ($vo["levelname"]); ?></span>
							</p>
							<p class="index_syrw">剩余数量：<span><?php echo ($vo["apply_num"]); ?>/<?php echo ($vo["max_num"]); ?></span></p>
						</div>

						<p class="index_qqq">
							<?php echo ($vo["price"]); ?>元
							<span></span>
						</p>
					</div>
				</a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
		<!-- 推荐任务 列表 结束-->


    <!-- 底部联系部分 开始 -->
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


        <li>
        <a href="https://www.baifenfa.com/app.php/MzQ1">
            <span><i class="icon_app" style="width: 20px;height: 20px;"></i></span>
            <p>下载</p>
        </a>
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
</div>


<link rel="stylesheet" href="/tpl/Public/js/barrager/css/barrager.css"/>
<script type="text/javascript" src="/tpl/Public/js/barrager/js/jquery.barrager.js"></script>
	<script>
        var cHeight = $(window).height();
		$(function () {
            startBarrager();
            getTonji();
        });


		//加载统计数据
		function getTonji() {

            $.getJSON("<?php echo U('Index/getTongji',array('mode'=>2));?>",function(data) {

				$('#taskCount').html(data.task)
				$('#memberCount').html(data.user)
				$('#moneyCount').html(data.money)
				$('#applyCount').html(data.apply)
            });
        }

        /**
         * @ 说明 弹幕消息
         * @ user fang 1044766678@qq.com
         * @type {number}
         */
        function startBarrager() {

            if (!$('#serachInput').data('danmu')) {
				return false;
			}

            $.ajaxSettings.async = false;
            $.getJSON("<?php echo U('Index/getDanmu',array('mode'=>2));?>",function(data) {

                //每条弹幕发送间隔
                var looper_time = 3 * 1000;
                var items = data;
                //弹幕总数
                var total = data.length;
                //是否首次执行
                var run_once = true;
                //弹幕索引
                var index = 0;
                //先执行一次
                barrager();
                function barrager() {
                    if (run_once) {
                        //如果是首次执行,则设置一个定时器,并且把首次执行置为false
                        looper = setInterval(barrager, looper_time);
                        run_once = false;
                    }
                    //发布一个弹幕

                    items[index].bottom = getRandom(cHeight-250,cHeight-40);
                    $('body').barrager(items[index]);
                    //索引自增
                    index++;
                    //所有弹幕发布完毕，清除计时器。
                    if (index == total) {
                        clearInterval(looper);
                        return false;
                    }
                }
            });
        }



        function getRandom(iStart,iEnd){
            var iChoice = iStart-iEnd+1;
            return Math.abs(Math.floor(Math.random()*iChoice))+iStart;
        }
	</script>

<script>
	//回车直接搜索
    $('#serachInput').keydown(function(e){
        if(e.keyCode==13){
            if ( $('#serachInput').val() !="") {
                var indexReload=layer.open({type: 2});
                window.location.href = '/Home/Index/serach.html'+"?key="+$('#serachInput').val();
			}
        }
    });

    // 获取弹窗
    var modal = document.getElementById('myModal');


    $(document).ready(function () {
        if(getCookie('notice')=='23'){
            modal.style.display = "none";
        }
    });

    //轮播图初始化
    var swiper1 = new Swiper('.swiper-banner', {
        pagination: {
            el: '.swiper-pagination',
        },
        autoplay:true
    });



    // 获取 <span> 元素，用于关闭弹窗 that closes the modal
    var span = document.getElementsByClassName("close-img")[0];


    // 点击 <span> (x), 关闭弹窗
    span.onclick = function() {
        modal.style.display = "none";
        setCookie('notice',23);
    }

    // 在用户点击其他地方时，关闭弹窗
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            setCookie('notice',23);
        }
    }

    function setCookie(name,value)
    {
        var mins = 60;
        var exp = new Date();
        exp.setTime(exp.getTime() + mins*60*1000);
        document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
    }

    function getCookie(name)
    {
        var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
        if(arr=document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    }


    /**
     * @ 说明 下拉异步刷新列表 无限加载
     * @ user fang 1044766678@qq.com
     * @type {number}
     */
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
            layer.open({
                type: 2,
                content: '加载中...'
            });
            $.post("/index.php/Home/Index/index.html",{start: nStart},function(res){
                $.each(res['info'], function(i,item){
                    _this.append('<a href="/home/Task/show/id/'+item.id+'.html">\
<div class="index_rwxq" ><img src="'+item.ico+'"/>\
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





//    $(document).ready(function () {
//        //幻灯片
//        var swiper = new Swiper('.swiper-container', {
//            pagination: '.swiper-pagination',
//            nextButton: '.swiper-button-next',
//            prevButton: '.swiper-button-prev',
//            paginationClickable: true,
//            spaceBetween: 30,
//            centeredSlides: true,
//            autoplay: 4000,
//            autoplayDisableOnInteraction: false
//        });
//    });
</script>
</div>