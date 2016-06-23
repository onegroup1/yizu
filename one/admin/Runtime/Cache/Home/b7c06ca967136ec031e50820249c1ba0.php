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
<title>薪计划管理</title>
</head>
<div id="list">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 薪计划<span class="c-gray en">&gt;</span> 薪计划 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="tianjia" onclick="admin_role_add('添加角色','admin-role-add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加薪计划</a> </span> <span class="r">共有数据：<strong><?php echo $num ?></strong> 条</span> </div>
	
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="6">薪计划管理</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="200">薪计划名称</th>
				<th width="200">保障方式</th>
				<th>加入用户</th>
				<th width="150">添加时间</th>
				<th width="70">操作</th>
			</tr>
		</thead>

		<tbody>
		<?php foreach ($arr as $k => $v): ?>
			
		
			<tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td><?php echo $k+1 ?></td>
				<td>薪计划<?php echo $v['payplan_name'] ?>期</td>
				<td><?php echo $v['payplan_guarantee'] ?></td>
				<td><a href="kanren/id/<?php echo $v['payplan_id'] ?>">点击查看</a></td>
				<td><?php echo $v['payplan_statime'] ?></td>
				<td class="f-14"><a title="详细信息" href="xiang/id/<?php echo $v['payplan_id'] ?>" onclick="admin_role_edit('角色详细信息','admin-role-add.html','1')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php endforeach ?>	
		</tbody>
		
	</table>
	<br/><br/>
	<span style="padding-left:300px;">总共 <?php echo $page_sums ?> 页&nbsp;&nbsp;&nbsp;当前是第 <?php echo $pages ?> 页 &nbsp;&nbsp;&nbsp; <?php echo $page ?></span>	
	</div>
	<script src="jquery.js"></script>
	<script>
	function ajax_page(page){
		//alert(page)
		$.ajax({
			type:'get',
			url:'index',
			data:'page='+page,
			success:function(w){
				$('#list').html(w)
			}
		})
	}

	</script>
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