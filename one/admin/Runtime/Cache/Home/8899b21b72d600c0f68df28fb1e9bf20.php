<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/one/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/one/Public/admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/one/Public/admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/one/Public/admin/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/one/Public/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/one/Public/admin/http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加用户</title>
</head>
<body>
    <div class="pd-20">
        <form action="/one/admin.php/Home/Creditor/cr_add" method="post" class="form form-horizontal" id="form-member-add">
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>借款标题：</label>
                <div class="formControls col-5">
                    <input type="text" class="input-text" value="" placeholder=""  name="creditor_name" datatype="*2-16">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>年利率：</label>
                <div class="formControls col-5">
                    <input type="text" class="input-text" value="" placeholder="" name="creditor_lilv" datatype="*2-16">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>金额：</label>
                <div class="formControls col-5">
                    <input type="text" class="input-text" value="" placeholder=""   name="creditor_money" datatype="*2-16">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>期限：</label>
                <div class="formControls col-5">
                    <input type="text" class="input-text" value="" placeholder="" name="creditor_deadline"  datatype="*2-16">
                </div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <div class="col-9 col-offset-3">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
    <footer class="footer">
        <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>Copyright &copy;2015 H-ui.admin v2.3 All Rights Reserved.<br>
            本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
    </footer>
<script type="text/javascript" src="/one/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/one/Public/admin/js/H-ui.js"></script>
<script type="text/javascript" src="/one/Public/admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});
</script>
</body>
</html>