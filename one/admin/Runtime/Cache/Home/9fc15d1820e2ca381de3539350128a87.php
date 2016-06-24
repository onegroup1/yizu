<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/yizu/one/Public/admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>用户管理</title>
</head>
<div id="list">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 薪计划<span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	
	
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="6">用户管理</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="200">姓名</th>
				<th width="200">电话</th>
				<th>邮箱</th>
				<th width="150">投资金额</th>
				<th width="70">投资时间</th>
			</tr>
		</thead>

		<tbody>
		<?php foreach ($ren as $k => $v): ?>
			
		
			<tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td><?php echo $k+1 ?></td>
				<td><?php echo $v['login_nickname'] ?></td>
				<td><?php echo $v['login_phone'] ?></td>
				<td><?php echo $v['login_email'] ?></a></td>
				<td><?php echo $v['login_balance'] ?>.00元</td>
				<td><?php echo $v['payplan_startime'] ?></td>
			</tr>
		<?php endforeach ?>	
		</tbody>
		
	</table>
	</div>

</div>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/yizu/one/Public/admin/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/yizu/one/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script> 
<script type="text/javascript">
/*管理员-角色-添加*/
function admin_role_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-详细信息*/
function admin_role_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function admin_role_del(obj,id){
	layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>
</body>
</html>