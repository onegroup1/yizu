<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/yizu/one/Public/admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/yizu/one/Public/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/yizu/one/Public/admin/http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加薪计划</title>
</head>
<body>
    <div class="pd-20">
        <form action="add" method="post" class="form form-horizontal" id="form-member-add" onsubmit="return check_all()">

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>薪计划期号：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="只能是数字"  name="payplan_name" id="name" onblur="xin()">
                </div><div style="padding-left:-300px" id="name1"></div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>保障方式：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="" name="payplan_guarantee" id="bao" onblur="bao2()">
                </div><div id="bao1"></div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>收益处理方式：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder=""   name="payplan_income" id="shou" onblur="shou2()">
                </div><div id="shou1"></div>
                <div class="col-4"> </div>
            </div>
			
			<div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>理财期限：</label>
                <div class="formControls col-5">
                    <select name="payplan_deadline" id=""> 
                    	<option value="6">6</option>
                    	<option value="7">7</option>
                    	<option value="8">8</option>
                    	<option value="9">9</option>
                    	<option value="10">10</option>
                    	<option value="11">11</option>
                    	<option value="12">12</option>
                    </select>月
                </div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>每月投资日：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="若当月没有该日，则支付日为当月最后一天，节假日不顺延" name="payplan_toudate" id="tou" onblur="tou2()">
                </div><div id="tou1"></div>
                <div class="col-4"> </div>
            </div>


            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>月投资最低金额：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="只能是100的倍数" name="payplan_stamoney" id="di" onblur="di2()">
                </div><div id="di1"></div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>月投资最高金额：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="只能是100的倍数" name="payplan_monmoney" id="gao" onblur="gao2()">
                </div><div id="gao1"></div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>预期年利率：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="1~100" name="payplan_annua" id="yu" onblur="yu2()" >
                </div><div id="yu1"></div>
                <div class="col-4"> </div>
            </div>

            <div class="row cl">
                <label class="form-label col-3"><span class="c-red">*</span>最多投资人数：</label>
                <div class="formControls col-5" style="width:250px">
                    <input type="text" class="input-text" value="" placeholder="只能是正整数" name="payplan_num" id="ren" onblur="ren2()">
                </div><div id="ren1"></div>
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
<script type="text/javascript" src="/yizu/one/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/js/H-ui.js"></script>
<script type="text/javascript" src="/yizu/one/Public/admin/js/H-ui.admin.js"></script>
<script src="/yizu/one/Public/js/jquery.js"></script>
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

function xin(){
	var name = $('#name').val()
	if(name==""){
		$('#name1').html('<font color="red">不能为空</font>');
        return false;
	}else{
		if(isNaN(name)){
		$('#name1').html('<font color="red">只能为数字</font>');
        return false;
	}else{
        $('#name1').html('<font color="green">OK</font>');
        return true;
    }
 }
	
}

function shou2(){
    var shou = $('#shou').val()
    if(shou==""){
        $('#shou1').html('<font color="red">不能为空</font>');
        return false;
    }else{
        $('#shou1').html('<font color="green">OK</font>');
        return true;
 }
    
}

function bao2(){
    var bao = $('#bao').val()
    if(bao==""){
        $('#bao1').html('<font color="red">不能为空</font>');
        return false;
    }else{
        $('#bao1').html('<font color="green">OK</font>');
        return true;
 }
    
}





function tou2(){
    var tou = $('#tou').val()
    if(tou==""){
        $('#tou1').html('<font color="red">不能为空</font>');
        return false;
    }else{
        if(isNaN(tou)){
        $('#tou1').html('<font color="red">只能为数字</font>');
        return false;
    }else{
        if(tou<31&tou>0){
            $('#tou1').html('<font color="green">OK</font>');
            return true;
        }else{
            $('#tou1').html('<font color="red">日期不正确</font>');
            return false;
        }
    }
 }
    
}

function di2(){
    var di = $('#di').val()
    var gao = $('#gao').val()
    if(di==""){
        $('#di1').html('<font color="red">不能为空</font>');
        return false;
    }else{
       if(isNaN(di)){
        $('#di1').html('<font color="red">格式不正确</font>');
        return false;
       }else{
        if(di%100==0){
            $('#di1').html('<font color="green">OK</font>');
            return true;
       }else{
         $('#di1').html('<font color="red">只能为100的倍数</font>');
        return false;
       }
       }
 }
    
}
function gao2(){
    var gao = $('#gao').val()
    var di = $('#di').val()
    if(gao==""){
        $('#gao1').html('<font color="red">不能为空</font>');
        return false;
    }else{
       if(isNaN(gao)){
        $('#gao1').html('<font color="red">格式不正确</font>');
        return false;
       }else{
        if(gao%100==0){
            $('#gao1').html('<font color="green">OK</font>');
            return true;
       }else{
         $('#gao1').html('<font color="red">只能是100的倍数</font>');
        return false;
       }
       }
 }
    
}

function yu2(){
    var yu = $('#yu').val()
    if(yu==""){
        $('#yu1').html('<font color="red">不能为空</font>');
        return false;
    }else{
       if(isNaN(yu)){
        $('#yu1').html('<font color="red">格式不正确</font>');
        return false;
       }else{
        if(yu<100&&yu>0){
            $('#yu1').html('<font color="green">OK</font>');
            return true;
       }else{
         $('#yu1').html('<font color="red">格式不正确</font>');
        return false;
       }
       }
 }
    
}

function ren2(){
    var ren = $('#ren').val()
    if(ren==""){
        $('#ren1').html('<font color="red">不能为空</font>');
        return false;
    }else{
       if(isNaN(ren)){
        $('#ren1').html('<font color="red">格式不正确</font>');
        return false;
       }else{
         $('#ren1').html('<font color="green">OK</font>');
            return true;
       }
 }
    
}

function check_all(){
    return xin()&&bao2()&&shou2()&&tou2()&&di2()&&gao2()&&yu2()&&ren2();
}
</script>
</body>
</html>