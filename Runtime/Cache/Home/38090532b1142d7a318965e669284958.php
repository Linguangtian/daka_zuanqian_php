<?php if (!defined('THINK_PATH')) exit(); $title = "提现账户";?>
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
<link rel="stylesheet" href="/Public/statics/webuploader-0.1.5/xb-webuploader.css">
<script src="/Public/statics/js/jquery-1.10.2.min.js"></script>
<script>
    var BASE_URL = '/Public/statics/webuploader-0.1.5';
</script>
<script src="//cdn.staticfile.org/webuploader/0.1.5/webuploader.min.js"></script>


<body>
<!-- 头部部分 开始 -->
<header class="top_header">
    <div class="left"><a href="javascript:" data-url="<?php echo U('info');?>" class="return go-back"></a></div>
    <div class="title"><?php echo ($title); ?></div>
</header>
<div class="mt tline">
    <section class="with-main">
        <form class="submit-ajax" data-callback="1" id="form1" name="form1" method="post" action="<?php echo U('info_edit');?>">
            <input type="hidden" name="f" value="<?php echo ($_GET['f']); ?>">
            <div class="search">
                <select name="bank_name" id="bank_name" >
                    <option value=""> -请选择开户银行- </option>
                    <?php if(is_array($banks)): $i = 0; $__LIST__ = $banks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>" <?php if($member['bank_name'] == $vo): ?>selected<?php endif; ?> ><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="search" id="subbranch_name_box" <?php if($member['bank_name'] == '支付宝'): ?>style='display: none'<?php endif; ?> ></if>
            <input type="text" name="subbranch_name" value="<?php echo ($member["subbranch_name"]); ?>" placeholder="支行名称">
            </div>
            <div class="search" id="bank_">
                <input type="text" name="bank_user" value="<?php echo ($member["bank_user"]); ?>" placeholder="姓名">
            </div>
            <div class="search">
                <input type="hidden" name="field" value="<?php echo ($field); ?>">
                <input style="width: 100%; height: 40px; line-height: 40px;" type="text" name="value" id="card_num" value="<?php echo ($value); ?>" placeholder="银行卡卡号">
            </div>



            <div class="search zfb_ewm" style="width: 292px;height:179px;margin: 0 auto ;display:<?php echo ($member['bank_name']=='支付宝' ? 'block' : 'none'); ?>">
                <input type="text" id="zfb_ewm" name="zfb_ewm" style="display: none;">
                <img src="<?php echo $member['zfb_ewm'] ? $member['zfb_ewm'] : '/tpl/Public/js/fex/image.png'?>" width="100%" height="100%" onclick="addImgs('head_img')">
                <p style="text-align: center;margin: 0;">点击上传图片,头像建议 292*179像素</p>
            </div>

            <div class="search weixin_ewm" style="width: 292px;height:179px;margin: 0 auto ;display:<?php echo ($member['bank_name']=='微信' ? 'block' : 'none'); ?>;">
                <input type="text" id="weixin_ewm" name="weixin_ewm" style="display: none;">
                <img src="<?php echo $member['weixin_ewm'] ? $member['weixin_ewm'] : '/tpl/Public/js/fex/image.png' ?>" width="100%" height="100%" onclick="addImgs('head_img')">
                <p style="text-align: center;margin: 0;">点击上传图片,头像建议 292*179像素</p>
            </div>

            <div class="btn">
                <button type="submit">确定</button>
            </div>
        </form>
    </section>
</div>
</body>
</html>

<script>
    $('#bank_name').change(function(){
        if($(this).val() == '支付宝') {
            $('#subbranch_name_box').hide();
            $('.zfb_ewm').show();
            $('#card_num').attr('placeholder', '支付宝帐号');
        } else {
            $('#subbranch_name_box').show();
            $('.zfb_ewm').hide();
            $('#card_num').attr('placeholder', '银行卡卡号');
        }
        if($(this).val() == '微信') {
            $('#subbranch_name_box').hide();
            $('.weixin_ewm').show();
        } else {
            if(!$(this).val() == '微信') {
                $('#subbranch_name_box').show();
            }
            $('.weixin_ewm').hide();
        }
    })

    function submit_callback(data){
        if( data.status == 1 ) {
            window.location.href = data.url;
        } else {
            sp_tip(data.info);
        }
    }
    //多图添加
    function addImgs(id){
        flashupload2(id, '上传文件', id, return_value, '<?php echo CONTROLLER_NAME;?>_thumb',1);
    }

</script>