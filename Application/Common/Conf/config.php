<?php
return array(
    'DEFAULT_FILTER'         => '', // 默认参数过滤方法 用于I函数...

//*************************************附加设置***********************************
    'SHOW_PAGE_TRACE'        => false,                           // 是否显示调试面板
    'URL_CASE_INSENSITIVE'   => false,                           // url区分大小写
    'TAGLIB_BUILD_IN'        => 'Cx,Common\Tag\My',              // 加载自定义标签
    'LOAD_EXT_CONFIG'        => 'db,alipay,oauth',               // 加载网站设置文件
    'TMPL_PARSE_STRING'      => array(                           // 定义常用路径
        '__OSS__'            => OSS_URL,
        '__PUBLIC__'         => OSS_URL.__ROOT__.'/Public',
        '__HOME_CSS__'       => __ROOT__.trim(TMPL_PATH,'.').'Home/Public/css',
        '__HOME_JS__'        => __ROOT__.trim(TMPL_PATH,'.').'Home/Public/js',
        '__HOME_IMAGES__'    => OSS_URL.trim(TMPL_PATH,'.').'Home/Public/images',
        '__ADMIN_CSS__'      => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/css',
        '__ADMIN_JS__'       => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/js',
        '__ADMIN_IMAGES__'   => OSS_URL.trim(TMPL_PATH,'.').'Admin/Public/images',
        '__ADMIN_ACEADMIN__' => __ROOT__.trim(TMPL_PATH,'.').'Admin/Public/aceadmin',
        '__PUBLIC_CSS__'     => __ROOT__.trim(TMPL_PATH,'.').'Public/css',
        '__PUBLIC_JS__'      => __ROOT__.trim(TMPL_PATH,'.').'Public/js',
        '__PUBLIC_IMAGES__'  => OSS_URL.trim(TMPL_PATH,'.').'Public/images',
        '__USER_CSS__'       => __ROOT__.trim(TMPL_PATH,'.').'User/Public/css',
        '__USER_JS__'        => __ROOT__.trim(TMPL_PATH,'.').'User/Public/js',
        '__USER_IMAGES__'    => OSS_URL.trim(TMPL_PATH,'.').'User/Public/images',
        '__APP_CSS__'        => __ROOT__.trim(TMPL_PATH,'.').'App/Public/css',
        '__APP_JS__'         => __ROOT__.trim(TMPL_PATH,'.').'App/Public/js',
        '__APP_IMAGES__'     => OSS_URL.trim(TMPL_PATH,'.').'App/Public/images'
    ),
//***********************************URL设置**************************************
    'MODULE_ALLOW_LIST'      => array('Home','Admin','Api','User','App'), //允许访问列表
    'DEFAULT_MODULE'         => 'Home',
    'URL_HTML_SUFFIX'        => 'html',  // URL伪静态后缀设置
    'URL_MODEL'              => 1,  //启用rewrite

    'URL_ROUTER_ON'          => false, // 是否开启URL路由
    'URL_ROUTE_RULES'        => array(
        'posts/:id'               => 'posts/show',
    ),

    'URL_MAP_RULES'          => array(), // URL映射定义规则
//***********************************SESSION设置**********************************
    'SESSION_OPTIONS'        => array(
        'name'               => 'BJYADMIN',//设置session名
        'expire'             => 24*3600*15, //SESSION保存15天
        'use_trans_sid'      => 1,//跨页传递
        'use_only_cookies'   => 0,//是否只开启基于cookies的session的会话方式
    ),
//***********************************页面设置**************************************
    'TMPL_EXCEPTION_FILE'    => APP_DEBUG ? THINK_PATH.'Tpl/think_exception.tpl' : './Template/default/Home/Public/404.html',
    'TMPL_ACTION_ERROR'      => TMPL_PATH.'/Public/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'    => TMPL_PATH.'/Public/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
//***********************************auth设置**********************************
    'AUTH_CONFIG'            => array(
            'AUTH_USER'      => 'users'                         //用户信息表
        ),
//***********************************邮件服务器**********************************

    'EMAIL_STATUS'           => 1,             // 是否开启邮件发送,如果关闭则注册 找回密码等页面 不开启邮件验证,邮件和手机验证至少有一个可用 //TODO 20191027
     'EMAIL_FROM_NAME'        => '网络人工作室',   // 发件人
    'EMAIL_SMTP'             => 'smtp.qq.com',   // smtp 126
    'EMAIL_USERNAME'         => '2125118291@qq.com',   // 账号 126格式
    'EMAIL_PASSWORD'         => 'msnyclkrdjpieiee',   // 密码  注意: 163和QQ邮箱是授权码；不是登录的密码
    'EMAIL_SMTP_SECURE'      => 'ssl',   // 链接方式 如果使用QQ邮箱；需要把此项改为  ssl   163邮箱为tls
    'EMAIL_PORT'             => '465', // 端口 如果使用QQ邮箱；需要把此项改为  465    163邮箱为25
//***********************************短信相关配置**********************************
    'SMS_TYPE'               => 2,  //短信方式 短信宝 1  阿里云2 聚合短信 3
    'SMS_BAO'                =>array(
        'user'               => '18503043295',  // 短信宝 用户名 smsbao.com
        'password'           => '18503043295',  // 短信宝 密码
        'sign'               => '网络人',          //短信宝 签名 【臻赞】您的验证码为{$code}，验证码5分钟内有效。";
    ),
    'SMS_ALISMS'             =>array(
        'AccessKey'          => 'LTAI17wCRrzxDYa6',  // 阿里云 Access Key ID
        'AccessSecret'       => 'deln1BPGQO7onAjTA5Rnk0OqYXXDZb',  //阿里云 Access Key Secret
        'sign'               => '点点网',             //阿里云 短信 签名
        'template_id'        => 'SMS_168590830'      //阿里云 短信 签名
    ),
    'SMS_JUHESMS'            =>array(
        'key'                => 'b0044997fa6c2435cb99405f6c451358',  // 聚合短信 申请的key
        'tpl_id'             => '147086',   //聚合短信 模板id
        'tpl_value'          => '#code#',   //聚合短信 您设置的模板变量，根据实际情况修改
    ),


//***********************************其他设置**********************************
    'RONG_IS_DEV'            => true,//是否是在开发中
    'RONG_DEV_APP_KEY'       => '8luwapkvu3xwl', //融云开发环境下的key       仅供测试使用
    'RONG_DEV_APP_SECRET'    => '1Aw1D7F6Td25', //融云开发环境下的SECRET     仅供测试使用
    'GEETEST_ID'             => '034b9cc862456adf05398821cefc94eb',//极验id  仅供测试使用
    'GEETEST_KEY'            => 'b7f064b9ae813699de794303f0b0e76f',//极验key 仅供测试使用
    'RONG_PRO_APP_KEY'       => '', //融云生产环境下的key
    'RONG_PRO_APP_SECRET'    => '', //融云生产环境下的SECRET
    'UMENG_IOS_APP_KEY'      => '', //友盟ios AppKey
    'UMENG_IOS_SECRET'       => '', //友盟ios App Master Secret
    'UMENG_ANDROID_APP_KEY'  => '', //友盟android AppKey
    'UMENG_ANDROID_SECRET'   => '', //友盟android App Master Secret
    'RONGLIAN_ACCOUNT_SID'   => '', //容联云通讯 主账号 accountSid
    'RONGLIAN_ACCOUNT_TOKEN' => '', //容联云通讯 主账号token accountToken
    'RONGLIAN_APPID'         => '', //容联云通讯 应用Id appid
    'RONGLIAN_TEMPLATE_ID'   => '', //容联云通讯 模板Id
//***********************************缓存设置**********************************
    'DATA_CACHE_TIME'        => 1800,        // 数据缓存有效期s
    'DATA_CACHE_PREFIX'      => 'mem_',      // 缓存前缀
    'DATA_CACHE_TYPE'        => 'File', // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'MEMCACHED_SERVER'       => '127.0.0.1', // 服务器ip
    'ALIOSS_CONFIG'          => array(
        'KEY_ID'             => '', // 阿里云oss key_id
        'KEY_SECRET'         => '', // 阿里云oss key_secret
        'END_POINT'          => '', // 阿里云oss endpoint
        'BUCKET'             => ''  // bucken 名称
        ),
    'NEED_UPLOAD_OSS'        => array( // 需要上传的目录
        '/Upload/avatar',
        '/Upload/cover',
        '/Upload/image/webuploader',
        '/Upload/video',
        ),
    'ALIPAY_CONFIG'          => array(
        'partner'            => '', // partner 从支付宝商户版个人中心获取
        'seller_email'       => '', // email 从支付宝商户版个人中心获取
        'key'                => '', // key 从支付宝商户版个人中心获取
        //'sign_type'          => strtoupper(trim('MD5')), // 可选md5  和 RSA
        'input_charset'      => 'utf-8', // 编码 (固定值不用改)
        'transport'          => 'http', // 协议  (固定值不用改)
        'cacert'             => VENDOR_PATH.'Alipay/cacert.pem',  // cacert.pem存放的位置 (固定值不用改)
        //'notify_url'         => 'http://'.$_SERVER['HTTP_HOST'].'/index.php/Api/Alipay/alipay_notify', // 异步接收支付状态通知的链接
        //'return_url'         => 'http://'.$_SERVER['HTTP_HOST'].'/index.php/Api/Alipay/alipay_return', // 页面跳转 同步通知 页面路径 支付宝处理完请求后,当前页面自 动跳转到商户网站里指定页面的 http 路径。 (扫码支付专用)
        'show_url'           => 'http://'.$_SERVER['HTTP_HOST'].'/index.php/User/Order/index', // 商品展示网址,收银台页面上,商品展示的超链接。 (扫码支付专用)
        'private_key_path'   => '', //移动端生成的私有key文件存放于服务器的 绝对路径 如果为MD5加密方式；此项可为空 (移动支付专用)
        'public_key_path'    => '', //移动端生成的公共key文件存放于服务器的 绝对路径 如果为MD5加密方式；此项可为空 (移动支付专用)


        //应用ID,您的APPID。
        'app_id' => "2018070460503367",

        //商户私钥
        'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCVOKDw+4KS4GrSCK3f0oA9RP9lURaIifeVMhhb8BN+qK4QaCY7FM2oWVWL2t2b+JgS3eHTIvRIzNYzGi4k1Y73AMu6Gvo7wPHTq0xbq+fvgeMo97UChbNtk/S/EVJgK5c3DGx3rwfSuQRvG51BOnA2K5d+aL2Qx5jl1lZZhy7RK4NDEESiFVQL2Y6zl5vWTIKTsSXxfda/mUVE5LjvWzRxpadppaqpkVnMx5FNvNVMt/xsO7ab5PCVpR0SuwE2uQR2bOkW2emIQsEhb96JCBOldzuH0EtS15T4N78u8Czy9T4mg5tmtnbAYGQzFqFyeXxRadkWtAMwNl+bMbbXbcxlAgMBAAECggEAauQv1bA07sW3f1EcTHLbzgf48zjM7W33XnaOIH2vWVG3rqUMjdHvKCMmNpLHoIzJUuqCc95cIzIoVl7wow4f5Sw6w8vDaL5j/H5+qkRQVq8ybAxVK8NerqYH8j6URbO0FIjfwjQtZHOIi5a6ZRlZfFRppvGcqXNxQWLyZBuEG+z1Qv4Bx8+cQt3HuQXKp8hydMXyeWrVHjBIjflQgrtYePoQWE4I9hyeIK3ttysImq2JELTi+WzrLn0W5HYFzHkVSTj0exmusPPs2Tuam2pt+/dwiPxNfh8zjDFgdE3fr36mHRjghdNqf2BNaOtzPnEZZAgKk+d8qQfiVfAtdVT8QQKBgQDow5z9srVhFWuih+7Gl4ckWz0TS01Q2ryzU4DYtEMWgXukHWDDXydBqEzsEpLf6mzMEouykGSG6l+F339uJHjbsamjM5bYddEhxiOfFTJzJyPJjCCkas2GnhaNZzuISI3r7UDCXqcHvKPmreB0+5Tpd3q2gZJtqJCRZxrpltfvLQKBgQCkHgpjcdkucTBSR8oC4PulikIa4DmVRuk/+I5iqwki4Hpn4iDibP09HkBZlIDDBVyV6DWYlb+fGfqJs2WSmYD8mNeogDYiFQlAcez2M4PpElu1mVR2i9W9tx8QcRZUY5D8HDDaziu48WumUEeGRCfVL+6kF+VCVb/D/EH4uhPVGQKBgAOk3FZUb+Z/MVowCprtUF5PV1tv+FvlsMKV8hRybgJyMH9XPmaQnMq4WcvwVoBO6TkgqTM4c3pxPOGZqCMPSx0VYPR/IENvRMDkmzYoXMvUtwi2uuQYD/OlkfDQxuvRRveElVj1pmPGnkJEQplSPviQuEkXKjWxR+Ie3Rr/E45ZAoGBAIQC1gBf136P9Xp53HisWD80EzBjJG5696xJVt7vDQ5M2qktL55yZNEAwGpOFbTJX0wF2Pa/nb9wuiKBdzaQ2zxUBUS4vNJ1cVexTBZOIdEcv0A38cTZfjh4UDh9fqSq4jioxHN8W5cMOrcw5BeQQyoswBymS/cr2nDfPIHBy6ohAoGASSDXw8DEz0UWzz55hSK29pT0Yh6Fdr2y4GywPyKYltgHJ2A2yzZQdRex2T51Xd2AzWYY1PyqiwcZ/JwDbRxLuSil/IJKH+Q6GVAbZoH9/exsw+MmY4vQ5Z6/5R4QAMBhNMz5cFWHKETi2idkVoI8rFp6YFrf9lgFikfAg8pKB0Y=",

        //异步通知地址
        'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",

        //同步跳转
        'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
        //编码格式
        'charset' => "UTF-8",
        //签名方式
        'sign_type'=>"RSA2",
        //支付宝网关
        'gatewayUrl' => "https://openapi.alipay.com/gateway.do",
        //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
        'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAw9NDpnhVc6FNesPVUjKHL920Zr9vEeS497gnMlm33EElLp9wpZnTmU7zBJdblnTj753jmDR+qipj0meQ3XkEx4ueiLrOKeAj+xQEFFFl/wG6ve8gxiaLzs+XP4T24wJGcTHi+lREBwZv/pGJmpeYru1sqNNHPBWmPVPyV4bL+QjJTP0FoXxbeTLNzMlErUiW3ubxeErCwQsj61Ril1flMjdtFMmiImMuRcW7ewIHHTJzdC0Ccr7p3D6savJvcWtCYTpx7obovOKU+QFWQkUClbZ9lDDmKsYhQ5/GMau7qBwBbqTRK2z+ovJt2VgJcRm6LKGqAeJUZITVEtD8o7LMWwIDAQAB",

    ),


    'WEIXINPAY_CONFIG'       => array(
        'APPID'              => 'wxde3bea0eae2b58cb', // 微信支付APPID
        'MCHID'              => '1550100951', // 微信支付MCHID 商户收款账号
        'KEY'                => 'Vw8n2k1KMZ8W1ZkbRp188qpB88o44nPl', // 微信支付KEY
        'APPSECRET'          => '486c5750f8ffb39daa4143f5bbfb442e',  //公众帐号secert
        'NOTIFY_URL'         => 'http://'.$_SERVER['HTTP_HOST'].'/index.php/Api/Weixinpay/notify/order_number/', // 接收支付状态的连接
        ),


    //文件上传设置
    'UPLOAD_FILES_TYPE'			=> 'jpg,jpeg,gif,png,xlsx,xls,doc,docx,pdf,rar,mp4', //允许上传类型
    'UPLOAD_FILES_MAXSIZE'		=> 1048576 * 30,		   //允许上传最大文件大

    //任务类型
    'TASK_TYPE' => array(
        '0' => '供应信息',
        '1' => '需求信息',
    ),

    //会员等级
    'MEMBER_LEVEL' => array(
        '0' => array(
            'level' => 0,
            'name'=>'普通会员',
            'price' => 0,
        ),
        '1' => array(
            'level' => 1,
            'name'=>'铜牌会员',
            'price' => 99,
        ),
        '2' => array(
            'level' => 2,
            'name'=>'银牌会员',
            'price' => 499,
        ),
        '3' => array(
            'level' => 3,
            'name'=>'金牌会员',
            'price' => 999,
        )
    ),


    //新闻分类
    'NEWS_CATE' => array(
        '1' => '行业热点',
        '2' => '新闻资讯',
    ),

    //申请产品的处理状态
    'APPLY_STATUS' => array(
        '-2' => '放弃任务',
        '-1' => '审核失败',
        '0' => '未完成',
        '1' => '等待审核',
        '2' => '已完成',
    ),

    'TASK_LEVEL' => array(
        '0' => '普通用户',

        '2' => '尊享会员',
        '3' => '高级代理'
    ),

    //支付渠道
    'PAYMENT_CHANNEL' => array(
        '0' => '银行支付',
        '1' => '微信支付',
        '2' => '支付宝支付'
    ),

    //支付渠道
    'POST_APPLY_STATUS' => array(
        '0' => '未审核',
        '-1' => '审核不通过',
        '1' => '审核通过'
    ),

    'TIXIAN_STATUS' => array(
        '0' => '待处理',
        '1' => '已转款',
        '-1' => '审核不通过'
    ),

    'SMS' => array(
        'url'   => '',
        'user_id' => '',
        'password' => '',
        'sign'  => ''
    ),


    'Server_Money' =>  0.01,  //设置 任务服务费 直接写小数  不要写1%
    'SHOW_CHART'   => true,     //是否显示 首页统计模块
    'SHOW_Barrage' => true,     //是否显示 弹幕
    'VERSION'      => '20191026',     //加入版本号 为了更加方便的更新升级
);
