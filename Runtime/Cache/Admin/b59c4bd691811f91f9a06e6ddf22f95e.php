<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo sp_cfg('website');?></title>
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
</head>
<body>
<div class="bjy-admin-nav">
    <i class="fa fa-home"></i> 首页
    &gt;
    后台管理
    &gt;
    视频列表
</div>
<ul id="myTab" class="nav nav-tabs">
   <li class="active">
         <a href="<?php echo U('paytype', $get);?>">支付方式列表</a>
   </li>
   <li>
        <a href="<?php echo U('handle');?>">添加支付方式</a>
    </li>
</ul>
<form class="form-search form-inline" method="get" action="" style="padding: 10px 0; ">
    关键词：
    <div class="input-group">
        <input type="text" name="keyword" value="<?php echo ($get["keyword"]); ?>" class="input-sm search-query date-picker" placeholder="搜索关键词">
    </div>

    <div class="input-group">
        <button type="submit" class="btn btn-info btn-sm">
            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
            搜索
        </button>
    </div>
</form>

<form action="<?php echo U('Admin/Pay/order');?>" method="post">
<table class="table table-striped table-bordered table-hover table-condensed">
    <tr>
        <th width="5%">排序</th>
        <th>标识</th>
        <th>名称</th>
        <th>副名称</th>
        <th>线上支付</th>
        <th>状态</th>
        <th width="220" style="text-align: center">操作</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
            <td>
                <input class="form-control" style="width:40px;height:25px;" type="text" name="<?php echo ($v['id']); ?>" value="<?php echo ($v['order_number']); ?>">
            </td>
            <td><?php echo ($v['paytype']); ?></td>
            <td><?php echo ($v['pay_name']); ?></td>
            <th><?php echo ($v['pay_name2']); ?></th>
            <th><?php echo ($v['is_online']?'<font class="label label-success radius" color="#5eb95e">是</font>':'<font class="label label-default radius" color="#999">否</font>'); ?></th>
            <th><?php echo ($v['status']?'<font class="label label-success radius" color="#5eb95e">启用</font>':'<font class="label label-default radius" color="#999">禁用</font>'); ?></th>
            <td>
                <a href="<?php echo U('handle',array('id'=>$v['id']));?>" class="btn btn-default btn-xs">编辑</a>
                &nbsp;
                <a href="<?php echo U('delete',array('id'=>$v['id']));?>" class="btn btn-default btn-xs delete">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <th>
            <input class="btn btn-success" type="submit" value="排序">
        </th>
        <td colspan="6"></td>
    </tr>
</table>
</form>
<?php echo ($Page); ?>

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

</body>
</html>