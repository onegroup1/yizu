<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/one/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/one/Public/admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/one/Public/admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />

<link href="/one/Public/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/one/Public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<div class="pd-20" style="padding-top:20px;">
    <table class="table table-border table-bordered table-bg">
        <thead>
            <tr>
                <th colspan="8" scope="col">债权统计</th>
            </tr>
            <tr class="text-c">
                <th>借款标题</th>
                <th>年利率</th>
                <th>剩余期限</th>
                <th>转让系数</th>
                <th>转出价格</th>
                <th>剩余份数</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
                <td><?php echo ($vo["let_name"]); ?></td>
                <td><?php echo ($vo["let_lilv"]); ?>％</td>
                <td><?php echo ($vo["let_qixian"]); ?>个月</td>
                <td><?php echo ($vo["let_xishu"]); ?>％</td>
                <td><?php echo ($vo["let_money"]); ?>元/份</td>
                <td><?php echo ($vo["let_status"]); ?>份</td>
                <td>
                    <a href="/one/admin.php/Home/Creditor/let_up/id/<?php echo ($vo["let_id"]); ?>">修改</a>
                    <a href="/one/admin.php/Home/Creditor/let_del/id/<?php echo ($vo["let_id"]); ?>" >删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <tr class="text-c">
                <th colspan="2">累计成交总笔数：<span>123笔</span></th>
                <th colspan="2">累计成交总金额：<span>123元</span></th>
                <th colspan="3">单笔转让平均耗时：<span>1时23分36秒</span></th>
            </tr>
        </tbody>
    </table>
</div>
<footer class="footer">
  <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>Copyright &copy;2015 H-ui.admin v2.3 All Rights Reserved.<br>
    本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
</footer>
<script type="text/javascript" src="/one/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/one/Public/admin/js/H-ui.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>