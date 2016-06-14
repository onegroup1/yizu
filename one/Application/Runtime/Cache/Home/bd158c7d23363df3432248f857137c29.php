<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <script>
            window._jHeadStart = ( new Date() ).getTime();
        </script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="renderer" content="webkit">
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c">
        <meta name="baidu-site-verification" content="wibJopuIuI" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--
        <meta name="keywords" content="这里添加keywords">
        <meta name="description" content="这是description">
        -->
        <title>债权计划 - 资产管理 - 我的账户 - 人人贷WE理财 - 中国互联网百强企业旗下3A级理财平台</title>
    
        <link rel="shortcut icon" type="image/x-icon" href="/static/common/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/one/Public/css/base_ac0da34.css">
        <!--header中的css-->
        
        
        <script>
            !function(){var c=Object.prototype.toString;var a=/complete|loaded|interactive/;var m="m.we.com/s1/w.gif";var d="";var p=location.protocol;var k="";var l=p+"//"+m;function b(q){return c.call(q)==="[object String]"}function j(s,r){for(var q in r){if(r.hasOwnProperty(q)){s[q]=r[q]}}}function o(s){var q="";for(var r in s){q+=r+"="+encodeURIComponent(s[r])+"&"}return q}function g(t){var s=(new Date()).getTime();var r="___log_"+s;var q=new Image();window[r]=q;q.onload=q.onerror=function(){q.onload=q.onerror=null;window[r]=null;q=null};q.src=t+"&_r="+s}function f(t){var q={pl:d,pid:k};for(var s in t){if(t.hasOwnProperty(s)){if(!b(t[s])){q[s]=JSON.stringify(t[s])}else{q[s]=t[s]}}}var r=l+"?"+o(q);g(r)}var n=false;var i={};var e={init:function(q){d=q.platform;k=q.pageID;if(!k){k=location.pathname}},perf:{headStart:function(q){i.jhead_start=q;return e},bodyStart:function(q){q=q||(new Date()).getTime();i.jbody_start=q;return e},bodyEnd:function(q){q=q||(new Date()).getTime();i.jbody_end=q;return e},domReady:function(q){if(i.jdom_ready){return}q=q||(new Date()).getTime();i.jdom_ready=q;return e},fullLoad:function(q){q=q||(new Date()).getTime();i.jfull_load=q;return e},send:function(){if(!n){if(window.performance&&window.performance.timing&&typeof window.performance.timing.toJSON==="function"){j(i,window.performance.timing.toJSON())}f({perf:i})}n=true}}};if(a.test(document.readyState)&&document.body){e.perf.domReady()}else{if(typeof document.addEventListener==="function"){document.addEventListener("DOMContentLoaded",function(){e.perf.domReady()})}}window.weLogger=e;function h(){e.perf.fullLoad();e.perf.send()}if(document.readyState!=="complete"){if(typeof window.addEventListener==="function"){window.addEventListener("load",h)}else{if(window.attachEvent){window.attachEvent("onload",h)}}}}();
        </script>
        <script src="/one/Public/js/vendors_8a6040f.js"></script>
        <!--header中的js-->
        
        <script>
            weLogger.init({ platform : 'pc' });
            weLogger.perf.headStart( _jHeadStart );
        </script>
    <link rel="stylesheet" type="text/css" href="/one/Public/css/common_widget_a1e249e.css" /><link rel="stylesheet" type="text/css" href="/one/Public/css/index_a498016.css" /><link rel="stylesheet" type="text/css" href="/one/Public/css/banks_21783c0.css" /><link rel="stylesheet" type="text/css" href="/one/Public/css/user_widget_483d814.css" /><link rel="stylesheet" type="text/css" href="/one/Public/css/react_widget_246e96e.css" /></head>
    <body class="body">
        <script>
            weLogger.perf.bodyStart( );
        </script>

        <!---->
        <div class="wdg-top-header">
    <div class="main-section">
        <span class="tel-phone"><i class="icon-phone"></i>客服电话: 400-090-6600</span>
        <ul class="site-nav">
       <?php
 $users=session('users'); if(empty($users)){ ?>
        <li class="nav-item"><a target="_self" href="/one/index.php/home/logins/index">立即登录</a></li>
        <li class="nav-item-split"></li>
        <li class="nav-item"><a target="_self" href="/one/index.php/home/logins/register">快速注册</a></li>
        <li class="nav-item-split"></li>
        <?php }else{ ?>
        <li class="nav-item"><?php echo $users; ?></li>
        <li class="nav-item-split"></li>

        <li class="nav-item"><a target="_self" href="/one/index.php/home/logins/tuichu">退出</a></li>
        <li class="nav-item-split"></li>
        <?php } ?>

            <li class="nav-item"><a target="_blank" href="/about/about.action?flag=intro">关于我们</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><a target="_blank" href="/help/index.action">帮助中心</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><a target="_blank" href="http://bbs.we.com/">理财论坛</a></li>
            <li class="nav-item-split"></li>
            <li class="nav-item"><i class="icon-mobile3"></i><a target="_blank" href="/event/app.action">移动客户端</a></li>
        </ul>
    </div>
</div>

<div class="wdg-second-header">
    <div class="main-section">
        <a href="/" class="brand-logo mt15">
            <img src="/one/Public/images/we-logo_79fb26f.png" alt="logo" />
        </a>
        <ul class="site-nav">
            <li class="user-item fn-clear">

                    <div class="user-avatar-container fn-left">
                        <img src="/one/Public/images/.com/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjlFMzdFM0U2NTNCOTExRTVBNUM0ODE2MTc5OUFCNDBEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlFMzdFM0U3NTNCOTExRTVBNUM0ODE2MTc5OUFCNDBEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OUUzN0UzRTQ1M0I5MTFFNUE1QzQ4MTYxNzk5QUI0MEQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OUUzN0UzRTU1M0I5MTFFNUE1QzQ4MTYxNzk5QUI0MEQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7KYAvEAAADpklEQVRYw81Y20uUQRSX9sV813f9IyIs6iEvQb31pF2gKHETMgIjK0vC0i4QukJuYhmuWhpdCAo1eqgUNzJBqdYuVNrL2oqCle5u7en8Pmdy+NzLzPo9OPDDz5lzfuf3zcyeM/NlEFHGWkS6jrmMcoaPMcIIMcICIdHnEza5aQvbcOBqSrCdi1HCGGTESL/FhA98XRpx9IWxTQHjvYz0ezFC/f4Jqr/1lPbXdVPxUS9tLmuygGf0YQw2sFUaOApWLYzHMhleyfp9eo7Otw/QVncz8bgWYAufqeCcKhCcmWkJ4/5sxiuwhCNRau59QZt4RnQF2QFfcIBLNHBnGwkTogLwxpvuqfWlLcgOcE0FZ6W4gF1cQmH8fxZj2PL6GqTtvGecEiUBzsC3oBSHWFk6wlqXZmqWiitbHBclAW5l5lqTChO/PloMRx1dvkTYfdZnxRKtIK4w/ruO8Q4W2KS65DtOdFGFd5hO3glYwDP6dP09HEtJJa54wkrkZs8/1Kj3xg1PqObup7jAmA4HYimppCSesJcYQc7RnalEoiR0Z67uZr8UNmivlahnsV8LYe3kiSVLJQw2ukkYsUX5ylOFudGLEqK7N6pvB1IKg40uH2KL5laF4SRAFzSXUVcYfgy6fIgtmk8VNooeFF9dIieXEkBs0d6ownCGoqIjLUZpwqnNDyC2aDOqMGvnmRZpJ9KFWuRFC69aGLCzulsk2AkLpgk2lTDjpXQaiZbSePM7DWXzj6rCOk3ThdNIlC6ME+y2yjYqrX/Me8pPxzvf0qmeDxbwjD6MwWa1CTZPtyQVHWuniuv+lKliOZf5LZ9knFvKPfFLklrEUVDjOW882Ej7rgxoC7IDvuAwKuKpjj35ZR6tTK9TCcC18tgzm/TY45J3R49yUMRbOiFKFafOXFPP8+QHRfvRuvRMx9Kt5lKfY6Ik9l7us7gRY2H5aF2Y6jJyQ15GdtV00+nej44LAye4lSVsM7q+Tf74SRcffXFcGDjBbXR9s194Z+Yj1Dww6ZgocIHT+MKrGOQwXsM7+idGfWMhqr33OW1B8AUHuEQDd47xtwv3tSGMrVc/quBNH4xM07n7+gJhC5/QfGTFRxXEMBZW1TGewcQW8IuRS2udS6J/aWxynh5yQO+zKWrgPYMZAfCMPozBBrZKA0eh5K3yjZsL47PVf2FCnPxwN2T44Y6ETyk4VE6urebCVAI7xHXvMKNLnNFxnosIhERfl7DJTcaVVNhaxD/MH9XEf+bN6AAAAABJRU5ErkJggg=="  />
                        <div class="avatar-masking"><a href="/account/index.action"></a></div>
                    </div>
                    <div class="user-name fn-clear">
                        <a href="/loginPage.action">我的账户</a>
                    </div>


            </li>
            <li class="channel-item"><a href="/one/index.php/home/index">首页</a></li>
            <li class="channel-item"><a href="/one/index.php/home/index/ujihua">U计划</a></li>
            <li class="channel-item"><a href="/one/index.php/home/index/xinjihua">薪计划</a></li>
			<li class="channel-item"><a href="/one/index.php/home/creditor/zhaiw">债权</a></li>
            <li class="channel-item"><a href="/one/index.php/home/index/xinshou">新手专区</a></li>
        </ul>
    </div>
</div>
        <!---->
        
            

<div id="header-helper" style="display: none;">
    <span id="header-helper-authenticated">
      true
      
    </span>
</div>
        
        
            
                <!--民生银行引导开户小黄条 只要是未开户的用户都可见-->
                
	<!--未开户-->
	
		<div id="wdgYellowBar" class="wdg-yellow-bar">
			<div class="wdg-yellow-bar-inner">
				<span>开通民生银行资金存管账户，您的资金会更加安全</span>
				<a href="/rrdRegist!toCreateAccountByCust.action" class="yellow-bar-cbmc-btn">立即开通民生存管账户</a>
			</div>
		</div>
            <!--民生银行引导开户和设置密码弹窗  且为基金存管上线之后首次登录可见   测试改成false-->

<!-- 头部 -->
<div id="commonCMBCDialog" class="common-cmbc-dialog-module fn-hide" >
    <span id="commonCMBCDilogCloseBtn" class="j-dialog-close-btn">&times;</span>
	<div class="cmbc-dialog-top">
		<div class="mbc-dialog-logo"> </div>
		<div class="mbc-dialog-text">
			<!--已经开户但未设置交易密码-->
			
			<!--已经开户且设置交易密码-->
			
			<!--未开户-->
			
				<p class="mbc-dialog-title">个人账户升级为民生存管账户</p>
				<p class="mbc-dialog-subtitle">请开通存管账户以便于您能正常理财</p>
			
		</div>
	</div>
	<div class="cmbc-dialog-bottom">
		<!--已经开户但未设置交易密码-->
		
		<!--已经开户且设置交易密码-->
		
		<!--未开户-->
        <a href="/rrdRegist!toCreateAccountByCust.action">开通民生银行存管账户</a>
	</div>
	</div>
        <div id="pg-server-message" data-status="" data-message="" data-ispop="" data-fundTips="" style="display: none;"></div>
        <div class="maincontent">
        <!--
        @require "common:widget/oui/oui.css"
        -->
		
	<div class="wdg-account-header">
		<div class="main-section">
			<ul class="account-menu fn-clear">
				<li class="" ><a href="/account/index.action">账户总览</a></li>
				<li class=""><a href="/fund/userFundAction!myFundListPage.action">基金账户</a></li>
				<li class="active"><a href="/account/invest!plan.action">债权</a></li>
				<li class=""><a href="/account/coupon!toCoupon.action">我的特权</a></li>
				<li class=""><a href="/account/comm!mail.action">服务窗</a> <span class="org fn-hide">(0)</span></li>
				<li class=""><a href="/account/info!basicInfo.action">账户设置</a></li>
			</ul>
		</div>
	</div>
<div class="main-section">
<div id="assets-tab">

<ul class="assets-list-tab fn-clear" data-selectedid="pie-u" >
	<li class="assets-tab-li " data-name="uplan">
		<a>U计划</a>
		<span>(0)</span>
	</li>
	<li class="assets-tab-li " data-name="autoinvestplan">
		<a>薪计划</a>
		<span>(0)</span>
	</li>
	<li class="assets-tab-li active" data-name="loan">
		<a href="/one/index.php/Home/Creditor/zhaiy">债权</a>
		<span>(0)</span>
	</li>
</ul>
    <div class="assets-tab-content fn-clear" data-name="assets-uplan">
        <div id="pie">
        </div>
        <div class="assets-detail">
            <div class="assets-title uplan-title">
                债权 &nbsp;&nbsp;<span class="num-family">0.00</span> 元
            </div>
            <div class="fn-clear">
                <dl class="fn-left w345">
                    <dt>已赚金额</dt>
                    <dd><span class="num-family">0.00</span>元</dd>
                </dl>
                    <dl class="fn-left w410">
                        <dt>利息收益</dt>
                        <dd><span class="num-family">0.00</span>元</dd>
                    </dl>
            </div>
            <div class="fn-clear mt15">
                <dl class="fn-left w345">
                    <dt>债权转让盈亏</dt>
                    <dd><span class="num-family">0.00</span>元</dd>
                </dl>
            </div>
        </div>
    </div>
<div id="my-uplan-tab">
    <div id="plans-tab">
        <ul class="ui-tab-items-new fn-clear">
            <li class="ui-tab-item ui-tab-item-current" data-name="holding">
                持有中(0)
            </li>
            <li class="ui-tab-item" data-name="exiting">
                投标中(0)
            </li>
            <li class="ui-tab-item" data-name="exited">
                转出中(0)
            </li>
            <li class="ui-tab-item" data-name="exited">
                已完成(0)
            </li>
        </ul>
    </div>
        <div id="plans-tab-content">
            <div class="ui-tab-content ui-tab-content-current fn-clear" data-name="holding">
                <div class="all-products ui-filter" id="holding-list-filter" >
                    <a class="filter-uplan" href="javascript:"></a>
                    <ul data-category="category" class="ui-filter-category category filter-list">
                        <li class="category-tag all active"><input type="checkbox" checked="checked" value="" name="category"><span>所有产品</span></li>
                        <li class="category-tag"><input type="checkbox" value="A" name="category"><span>U计划A</span></li>
                        <li class="category-tag"><input type="checkbox" value="B" name="category"><span>U计划B</span></li>
                        <li class="category-tag"><input type="checkbox" value="C" name="category"><span>U计划C</span></li>
                        <li class="category-tag"><input type="checkbox" value="OLD" name="category"><span>优选理财计划</span></li>
                    </ul>
                </div>
                <ul class="ui-list ui-list-s" id="holding-list"></ul>
                <div class="fn-right mt10" id="holding-list-pagination"></div>
            </div>
            <div class="ui-tab-content fn-clear" data-name="exiting">
                <ul class="ui-list ui-list-s" id="exiting-list"></ul>
                <div class="fn-right mt10" id="exiting-list-pagination"></div>
            </div>
            <div class="ui-tab-content fn-clear" data-name="exited">
                <ul class="ui-list ui-list-s" id="exited-list"></ul>
                <div class="fn-right mt10" id="exited-list-pagination"></div>
            </div>
        </div>
    </div>
</div>
</div>
      
<script id="holding-list-template" type="text/x-handlebars-template">

	<li class="ui-list-header fn-clear">
		<div class="ui-list-title pl25 w80">债权ID</div>
		<div class="ui-list-title pr30 w80 text-right">持有份数</div>
		<div class="ui-list-title pr30 w80 text-right">年利率</div>
		<div class="ui-list-title pr30 w80 text-right">剩余期数</div>
		<div class="ui-list-title pr30 w120 text-right">代收本息</div>
		<div class="ui-list-title pr30 w90 text-right">月收本息</div>
		<div class="ui-list-title pr30 w90 text-right">下个还款日</div>
		<div class="ui-list-title pr30 w90">状态</div>
		<div class="ui-list-title pr20 w115 text-right fn-clear" ></div>
	</li>
	 {{# each financePlanList }}
	<li class="ui-list-item fn-clear {{itemStyle}}"  data-plan-name="{{ name }}" data-final-amount="{{ amount }}" data-sub-point-id="{{ subPointId }}" >
		<div class="ui-list-field pl25 w155"><a href="{{ link }}">{{ name }}</a></div>
		<div class="ui-list-field pr30 w135 text-right">{{ interest }}%</div>
		<div class="ui-list-field pr50 w110 text-right">{{ formatAmount }}元</div>
		<div class="ui-list-field pr30 w100 text-right">{{ profit }}元</div>
		<div class="ui-list-field pr50 w85 text-right"><a href="{{ link }}">{{ loans }}</a></div>
		<div class="ui-list-field pl40 w130">{{ status }}</div>
		<div class="ui-list-field pr20 w115 text-right fn-clear">
			{{# if hasQuitButton }}<a class="cursor-pointer quit-btn" data-name="quit">退出</a>{{/ if }}
			{{# if hasRollOverButton }}
            <a class="cursor-pointer rolloverColor" data-subPointId="{{subPointId}}" data-name="rollOver">续期</a>
            {{/ if }}
			{{# if rollOverAlready}}
				<a class="cursor-pointer rolloverColored">已续期</a>
			{{/ if}}
			{{# if forbidRollOverButton}} 
				<a class="cursor-pointer rolloverColored">续期</a>
			{{/ if}}
		</div>
	</li>
	{{ else }}
	  <li class="ui-list-status" style="list-style:none;">
	    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有持有中的U计划{{/ if }}</p>
	  </li>
	{{/ each }}

</script>

<script id="exiting-list-template" type="text/x-handlebars-template">
	<li class="ui-list-header fn-clear">
		<div class="ui-list-title pl25 w80">债权ID</div>
		<div class="ui-list-title pr80 w80 text-right">年利率</div>
		<div class="ui-list-title pr80 w80 text-right">投资金额</div>
		<div class="ui-list-title pr60 w100 text-right">期限</div>
		<div class="ui-list-title pr20 w100 text-right">信用等级</div>
		<div class="ui-list-title pr20 w100 text-right">剩余时间</div>
		<div class="ui-list-title pr20 w100 text-right">投标进度</div>
	</li>
	 {{# each financePlanList }}
	<li class="ui-list-item fn-clear {{itemStyle}}" >
		<div class="ui-list-field pl25 w185"><a href="{{ link }}">{{ name }}</a></div>
		<div class="ui-list-field pr75 w145 text-right">{{ amount }}元</div>
		<div class="ui-list-field pr80 w170 text-right">{{ withdrawnInterest }}元</div>
		<div class="ui-list-field pr60 w160 text-right">{{ quitBeforeAmount }}元  <span data-content="转出金额 {{ transferredAmount }}元， 待转出金额 {{availableAmount}}元" class="icon-info color-gray-text quitBeforeTiggler" href="javascript:"></span></div>
		<div class="ui-list-field pr20 w160 text-right">{{ toBeTransferredAmount }}元  <span data-content="待转出债权价值{{remainedValue}}元，无法转让债权价值 {{disabledCount}}元" class="icon-info color-gray-text remainedTiggler" href="javascript:"></span></div>
	</li>
	{{ else }}
	  <li class="ui-list-status" style="list-style:none;">
	    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有退出中的U计划{{/ if }}</p>
	  </li>
	{{/ each }}
</script>

<script id="exited-list-template" type="text/x-handlebars-template">
	<li class="ui-list-header fn-clear">
		<div class="ui-list-title pl25 w155">转让ID</div>
		<div class="ui-list-title pr20 w125 text-right">债权ID</div>
		<div class="ui-list-title pr55 w145 text-right">剩余期数</div>
		<div class="ui-list-title pr55 w105 text-right">已获收益</div>
		<div class="ui-list-title pr40 w90 text-right">年利率</div>
		<div class="ui-list-title w150 text-center">债权价值</div>
		<div class="ui-list-title pr20 w95 text-right">转让价格</div>
		<div class="ui-list-title pr20 w95 text-right">转让系数</div>
		<div class="ui-list-title pr20 w95 text-right">剩余份数</div>
	</li>
	 {{# each financePlanList }}
	<li class="ui-list-item fn-clear {{itemStyle}}" >
		<div class="ui-list-field pl25 w155"><a href="{{ link }}">{{ name }}</a></div>
		<div class="ui-list-field pr20 w125 text-right">{{interest}}%</div>
		<div class="ui-list-field pr55 w145 text-right">{{ amount }}元</div>
		<div class="ui-list-field pr55 w105 text-right">{{ profit }}元</div>
		<div class="ui-list-field pr40 w90 text-right"><a href="{{ link }}">{{ loans }}</a></div>
		<div class="ui-list-field w150 text-center">{{ finishedDate }}</div>
		<div class="ui-list-field pr20 w95 text-right">{{ exitWay }}</div>
	</li>
	{{ else }}
	  <li class="ui-list-status" style="list-style:none;">
	    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有已退出的U计划{{/ if }}</p>
	  </li>
	{{/ each }}
</script>

<script id="reserve-list-template" type="text/x-handlebars-template">
	<li class="ui-list-header fn-clear">
		<div class="ui-list-title pl25 w155 name">债权ID</div>
		<div class="ui-list-title pr30 w145 text-right joned-amount">投资金额</div>
		<div class="ui-list-title paid pr55 w145 text-right">年利率</div>
		<div class="ui-list-title obligation pr55 w125 text-right">回收金额</div>
		<div class="ui-list-title endPayMentTime pr40 w130 text-right">已赚金额</div>
		<div class="ui-list-title state pr20 w130 text-right">结清日期</div>
		<div class="ui-list-title state pr20 w130 text-right">结清方式</div>
	</li>
	 {{# each financePlanList }}
	<li class="ui-list-item fn-clear {{itemStyle}}" >
		<div class="ui-list-field pl25 w155 name"><a href="{{ link }}">{{ name }}</a></div>
		<div class="ui-list-field pr30 w145 text-right joned-amount">{{ amount }}元</div>
		<div class="ui-list-field paid pr55 w145 text-right">{{ depositAmount }}元</div>
		<div class="ui-list-field obligation pr55 w125 text-right">{{ unRepayAmount }}</div>
		<div class="ui-list-field endPayMentTime pr40 w130 text-right" style="{{#if isNotOverDue}} color:#ff0000; {{/if}}">{{ endPayMentTime }}</div>
		<div class="ui-list-field state pr20 w130 text-right">{{ rsvStatus }}<a onclick="javascript:window.open('/financeplan/getFinancePlanContract!getPlanRsvContract.action?financePlanId={{planId}}','','dialogWidth=1024px;dialogHeight=768px,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top=20,left=20,resizable=no')" href="javascript:void(0)" class="ml15">合同</a> {{#if isNotOverDue}}<a class="list-a-pay J_conform_pay_a" href="#" data-id="{{ planId }}">支付</a>{{/if}}</div>
	</li>
	{{ else }}
	  <li class="ui-list-status" style="list-style:none;">
	    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有预定中的U计划{{/ if }}</p>
	  </li>
	{{/ each }}
</script>
<script id="confirm-uplan-roll-over-plans-template" type="text/x-handlebars-template">
    <div class="ui-confirm conform_pay_div" style="position: relative;">
      <div class="ui-confirm-title">确认续期</div>
      <div class="ui-confirm-content">
	      <form class="ui-confirm-form mt20" id="J_ROLLOVER_FORM" action="/account/financePlanRollOver.action" method="post">
	    	<input type="password" style="display:none;" />
	        <ul>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">原期数</span>
					<span class="fn-left j-dialog-value">{{financePlanName}}</span>
				</li>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">续期类型</span>
					<span class="fn-left j-dialog-value">U计划{{category}}</span>
				</li>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">理财期限</span>
					<span class="fn-left j-dialog-value">{{lockPeriod}}个月</span>
				</li>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">续期利率</span>
					<span class="fn-left j-dialog-value">{{expectedRateUplan}}%<i class="color-orange" id="addRate" data-seniorDiscountRate="{{seniorDiscountRate}}" data-discountRate="{{discountRate}}" >+{{Rate}}</i>&nbsp;&nbsp;<span href="javascript:" class="icon-info color-gray-text" id="tips_2"></span></span>
				</li>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">续期金额</span>
					<span class="fn-left j-dialog-value">{{rollOverAmount}}元  &nbsp;&nbsp;<span href="javascript:" class="icon-info color-gray-text" id="tips_1"></span></span>
				</li>
	        	<li class="fn-clear">
					<span class="fn-left j-dialog-label">收益方式</span>
					<span class="fn-left j-dialog-value">收益再投资</span>
				</li>
	      	  
		      <!-- <li class="fn-clear">
				  <span class="fn-left j-dialog-label">交易密码</span>
				  <span class="fn-left j-dialog-value">
					  <input class="ui-input ui-input-text" name="cashPassword" id="J_cashPassword2" type="password" value="" />
					  <a href="/account/cashPwd!toFind.action">&nbsp;&nbsp;忘记密码</a>
				  </span>
			  </li> -->
		    </ul>
	    	<p  class="j-dialog-margin-left" style="color:#c82e25;display:none;" id="J_ERROR_P_TX2">交易密码不能为空</p>
	    	<div class="mt10">
	          <p class="j-dialog-margin-left" style="line-height: normal;"><input type="checkbox" checked="checked" id="agree-contract" name="agree-contract" />我已阅读并同意签署 <a href="/financeplan/getDemoFinancePlanContract!getUplanDemo.action" target="_blank">《U计划服务协议》</a></p>
	          <p class="ui-confirm-agree-hint rrdcolor-red-text text-small" style="display: none;"></p>
	        </div>
	    	<div class="mt10 ui-confirm-submit-box" style="text-align: center;">
	          <input type="submit" value="续 期" class="j-btn j-btn-orange j-btn-big" />
	        </div>
	        <input type="hidden" value="{{subPointId}}" name="subPointId">
	        <input type="hidden" value="{{financePlanId}}" name="planId">
	        <input type="hidden" value="2" name="rollOverOrNot" id="rollOverOrNot" >
	        <input type="hidden" value="list" name="fromPage" id="fromPage" >
	        <div class="j-dialog-footer">
	        	<h3 class=" j-dialog-section-title">温馨提示</h3>
                <p class="warm-p">1. 确认续期后，不能取消续期，且本期U计划不可提前退出；</p>
                <p class="warm-p">2. U计划到期后3个工作日内完成续期操作，续期后享受加息利率。</p>
                <p class="warm-p">注：<a href="/help/invest/invest!financial.action" target="_blank">查看更多续期说明>></a></p>
                <br>
	        </div>
	      </form>
    	  <div class="ui-poptip ui-poptip-new fn-hide" id="tipCon_1" data-widget-cid="widget-7" style="z-index: 999; position: absolute; left: 230px; top: 213px;">
      	  	<div class="ui-poptip-shadow">
      			<div class="ui-poptip-container">
          			<div class="ui-poptip-arrow ui-poptip-arrow-10">
		              <em></em>
		              <span></span>
          			</div>
          			<div class="ui-poptip-content" data-role="content">
            			此为预估值，实际以到期转出金额为准。
          			</div>
      			</div>
      		</div>
  		</div>
		<div class="ui-poptip ui-poptip-new fn-hide" id="tipCon_2" data-widget-cid="widget-2" style="z-index: 999; position: absolute; left: 230px; top: 175px;">
	      	<div class="ui-poptip-shadow">
		      	<div class="ui-poptip-container">
		          <div class="ui-poptip-arrow ui-poptip-arrow-10">
		              <em></em>
		              <span></span>
		          </div>
		          <div class="ui-poptip-content" data-role="content">
		            此为预估值，实际以到期续期利率为准。
		          </div>
		      	</div>
		      </div>
	  		</div>
	    </div>
  	</div>
  </script>
<script id="confirm-plan-exit-template" type="text/x-handlebars-template">
<div class="ui-confirm" id="confirm-plan-exit" style="padding:0;">
  <h3 class="ui-confirm-title" >确认退出计划</h3>
  <div class="ui-confirm-content mt20">
        <div class="fn-clear">
          <span class="fn-left j-dialog-label">退出期数：</span>
          <span class="fn-left j-dialog-value">{{ name }}</span>
        </div>
        <div class="fn-clear">
          <span class="fn-left j-dialog-label">加入金额：</span>
          <span class="fn-left j-dialog-value">{{ amount }}元</span>
        </div>
   <div class="fn-clear">
      <div class="fn-left j-dialog-label">退出方式：</div>
      <div class="fn-left j-dialog-value" style="height:auto">
        <div data-name="to-renrendai">
          <input type="radio" checked="checked" style="display: none;" /> 提取至账户
        </div>
      </div>
    </div>
	  
		  
			  
			  
			  
			  
	  
    <div class="mt10 fn-clear">
    </div>
    <div class="mt10 text-center">
      <div class="fn-clear ui-confirm-submit-box">
        <button class="j-btn j-btn-orange j-btn-small" id="submit-plan-exit" type="submit" data-name="cfm-submit">退 出</button>
        <span class="j-btn j-btn-white j-btn-small j-btn-cancel" id="cancel-plan-exit" >取 消</span>
      </div>
    </div>
    <div class="j-dialog-footer"><div class="fn-clear" id="exchange-tips">
      <h3 class=" j-dialog-section-title">温馨提示</h3>
      <p class="warm-p">点击“退出”后，该期优选计划所持有的债权将进行债权转让，全部债权转让完成具体时间，由债权转让市场的交易情况而定。详细规则请查看<a href="/static/misc/financial-plan-intro.pdf" target="_blank">《优选理财计划说明书》</a></p>
      <br>
    </div></div>
  </div>
</div>
</script>
<script id="confirm-plan-exit-execution-template" type="text/x-handlebars-template">
<div class="ui-confirm" id="confirm-plan-exit-execution" style="padding:0;">
  <h3 class="ui-confirm-title">确认退出计划</h3>
  <div class="ui-confirm-content mt20">
    <form id="form-quit" method="post" action="/account/planQuit.action">
      <ul>
       <li class="fn-clear">
          <span class="fn-left j-dialog-label">退出期数</span>
          <span class="fn-left j-dialog-value">{{ name }}</span>
        </li>
        <li class="fn-clear">
          <span class="fn-left j-dialog-label">加入金额</span>
          <span class="fn-left j-dialog-value"><em>{{ amount }}</em>元</span>
        </li>
        <li class="fn-clear">
          <span class="fn-left j-dialog-label">预计回收金额</span>
          <span class="fn-left j-dialog-value" style="height:auto">
            <em>{{ expectedExitAmount }}</em>元
            <span class="expected-exit-amount-tip">
              <a style="position:relative" class="iconfont text cursor-pointer" data-ui-name="ui-poptip-trigger" data-ui-poptip-ancestor=".expected-exit-amount-tip">&#xF046;</a>
              <div class="ui-poptip ui-poptip-new" data-ui-name="ui-poptip" style="display: none;">
                <div class="ui-poptip-shadow">
                  <div class="ui-poptip-container">
                    <div class="ui-poptip-arrow ui-poptip-arrow-7"><em></em><span></span></div>
                    <div class="ui-poptip-content">此为预估值，具体以实际收到金额为准</div>
                  </div>
                </div>
              </div>
            </span>
          </span>
        </li>
        <li class="fn-clear">
          <span class="fn-left j-dialog-label">预计总收入</span>
          <span class="fn-left j-dialog-value">
            <em>{{ expectedTotalIncome }}</em>元
            <span class="expected-total-amount-tip">
              <a style="position:relative" class="iconfont text cursor-pointer" data-ui-name="ui-poptip-trigger" data-ui-poptip-ancestor=".expected-total-amount-tip">&#xF046;</a>
              <div class="ui-poptip ui-poptip-new" data-ui-name="ui-poptip" style="display: none;">
                <div class="ui-poptip-shadow">
                  <div class="ui-poptip-container">
                    <div class="ui-poptip-arrow ui-poptip-arrow-7"><em></em><span></span></div>
                    <div class="ui-poptip-content">预计总收入 = 预计回收金额 + 退出前已提取金额</div>
                  </div>
                </div>
              </div>
            </span>
          </span>
        </li>
        <li class="fn-clear">
          <span class="fn-left j-dialog-label">退出方式</span>
          <span class="fn-left j-dialog-value">{{ quitTypeName }}{{# if quitBankAccount }} {{ quitBankAccount }}{{/ if }}<!-- <a class="back">更换其他处理方式</a>--></span>
        </li>
		  <li class="mt10 fn-clear"><span class="fn-left j-dialog-label">手机验证码</span>
			  <div class="fn-left j-form-item" style="width:auto;height:60px">
				  <input class="ui-input  s_select_bg j-input j-dialog-value error mobile-code-input" id="mobile-code-input2" type="text" name="mobileValidCode" value="" />
				  <span id="getMobileCode2" class="fn-left j-btn j-btn-small j-btn-orange ml10 mobile-code-btn">获取验证码</span>
				  <div class="ui-form-item-warn-tips"><span class="J_bind_cou_tips"></span></div>
				  <label class="mobile-code-info" for="mobile-code-input2"style="color:#ff0000;display:none; clear: both;" id="J_ERROR_P_TX">手机验证码不能为空</label></div>
		  </li>
        
          
          
         
        
      </ul>
      <div class="mt10 fn-clear"><p class="hint">{{ hint }}</p></div>
      <div class="mt10 text-center">
        <input type="hidden" name="planId" value="{{ planId }}" />
        <input type="hidden" name="subPointId" value="{{ subPointId }}" />
        <input type="hidden" name="quitType" value="{{ quitType }}" />
        {{# if quitBankId }}<input type="hidden" name="quitBankId" value="{{ quitBankId }}" />{{/ if }}
        <div class="fn-clear  ui-confirm-submit-box" style="margin-bottom: 30px;">
          <button class="j-btn j-btn-orange j-btn-small" id="submit-plan-exit-execution" type="submit" data-name="cfm-submit">确认退出</button>
          <a class="j-btn j-btn-white j-btn-small j-btn-cancel" id="cancel-plan-exit-execution">取 消</a>
        </div>
      </div>
    </form>
  </div>
</div>
</script>
<script id="account-info-template" type="text/x-handlebars-template">
{{# each accounts }}<option value="{{ userBankId }}">{{ bankType }} {{ dealCardId }}</option>{{ else }}<option value="">请先添加银行卡</option>{{/ each }}
</script>
<script id="holding-list-rsp" type="text/x-json">{"status":0,"message":"okay","data":{"financePlanList":[],"totalPage":1,"pageIndex":1}}</script>
<script id="bank-accounts-rsp" type="text/x-json">{"status":0,"message":"okay","data":{"userBankVoList":[]}}</script>
      <div class="ui-poptip ui-poptip-new fn-hide" id="quitBeforeElement">
          <div class="">
              <div class="ui-poptip-container">
                  <div class="ui-poptip-arrow ui-poptip-arrow-10">
                      <em></em>
                      <span></span>
                  </div>
                  <div class="ui-poptip-content" data-role="content">
             
                  </div>
              </div>
          </div>
      </div>
      <div class="ui-poptip ui-poptip-new fn-hide" id="remainedElement">
          <div class="">
              <div class="ui-poptip-container">
                  <div class="ui-poptip-arrow ui-poptip-arrow-10">
                      <em></em>
                      <span></span>
                  </div>
                  <div class="ui-poptip-content" data-role="content">
             
                  </div>
              </div>
          </div>
      </div>
	
        </div>
        <div class="pg-container-content"></div>
        
            
<div class="ui-footer" id="footer">
  <div class="main-section">
    <div class="ui-footer-section ui-footer-narrow-hide fn-clear" style="width: 1150px;">

  <h4 class="color-gray-text text-big fn-left w100">友情链接</h4>

  <ul class="ui-footer-links fn-left friendlink">

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.we.com">人人贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://bbs.we.com">理财论坛</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.rong360.com/licai/">融360理财</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://bbs.kjj.com">酷基金论坛</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://fenlei.baike.com">微百科</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.asiafinance.cn">亚洲财经</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaiabc.cn">网贷ABC</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.dimeng.net">P2P系统</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.chuangtianxia.cn ">创业者</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.angelclub.com">天使客</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.tianshijie.com.cn/">天使街</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://news.smm.cn">贵金属资讯</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaigw.com   ">网贷港湾</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wquant.com ">微量网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.chemayi.com">互联网车险</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.trust-one.com">信托投资</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.jiedai.cn"> 借贷网  </a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.dib66.com">地标金融 </a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.cpiaoju.com">云票据</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://99dai.cn">99贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.lvhuadai.com">绿化贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.qianxiangbank.com">钱香金融</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.cnaidai.com">爱贷网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.tuandai.com">团贷网</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.auagm.com">贵金属公司</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.hhrfs.com ">合伙人</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.yunxindai.com">云信贷理财</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.btctrade.com">比特币</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://group.ppdai.com">拍拍贷</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.ycb.com">银承宝</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="https://www.tzg.cn/">铜掌柜</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.renrencaopan.com">人人操盘</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.wangdaishequ.cn/">网贷社区</a>

    </li>

    <li class="fn-left">

      <a class="gray" target="_blank" href="http://www.daicash.com">贷金所</a>

    </li>

  </ul>

</div>

    <i class="icon icon-footer-snow-down"></i>
    <div class="ui-footer-section ui-footer-links second">
      <ul class="fn-clear">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">
            <a class="gray" target="_blank" href="/about/about.action?flag=intro">公司介绍</a></h4>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/guide/investSecurity.action">安全保障</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=report">媒体报道</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=responsibility">社会责任</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=invite">招贤纳士</a>
        </li>
        
        <li class="fn-left">
          <a class="gray" target="_blank" href="/help/index.action">帮助中心</a>
        </li>
        <li class="fn-left">
          <a class="gray" target="_blank" href="/about/about.action?flag=contact">联系我们</a>
        </li>
      </ul>
      <ul class="fn-clear icons">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">客户服务</h4>
        </li>
        <li class="fn-left"><a id="wexinBtn" class="gray" href="javascript:;" tabindex="-1">
          <i class="icon we-chat"></i>微信</a></li>
        <li class="fn-left"><a class="gray" target="_blank" href="http://e.weibo.com/renrendai?ref=http%3A%2F%2Fwww.renrendai.com%2F"><i class="icon weibo"></i>新浪微博</a></li>
        <li class="fn-left"><a class="gray cursor-pointer" target="_blank" onclick="online_service();"><i class="icon online-customer-service"></i>在线客服</a></li>
      </ul>
      <ul class="fn-clear service">
        <li class="fn-left">
          <h4 class="color-gray-text text-big w100">客服电话</h4>
        </li>
        <li class="fn-left ui-footer-phone-number">400-090-6600</li>
        <li class="fn-left">9:00 - 21:00</li>
      </ul>
      <div class="weixin fn-clear">
        <dl class="fn-left">
          <dd><img src="/one/Public/images/we-weixing_334069c.png" alt=""></dd>
          <dt>关注微信账号</dt>
        </dl>
        <dl class="fn-left app-down">
          <dd><img src="/one/Public/images/app-weixin_32107fa.png" alt=""></dd>
          <dt>下载手机app</dt>
        </dl>
      </div>
    </div>
    <div class="ui-footer-section">
      <div class="ui-footer-copyright">
        <span class="ui-footer-contact-link color-gray-text">© 2016 人人贷 All rights reserved</span>
        <span class="ui-footer-contact-link color-gray-text has-separator">人人贷商务顾问(北京)有限公司</span>
        <span class="ui-footer-contact-link color-gray-text has-separator"><a class="gray" target="_blank" href="/icp/icp.html">京ICP证 100953号</a></span>
        <span class="ui-footer-contact-link color-gray-text has-separator">京公网安备11010502020657</span>
        <span class="ui-footer-contact-link color-gray-text has-separator last">京ICP备12025643号-1</span>
      </div>
      <div class="ui-footer-verification fn-clear">
        <a class="ui-footer-verification-item fn-left credibility" title="人人贷WE理财荣获中国电子商务协会“诚信网站”认证殊荣" id='___szfw_logo___' href='https://credit.szfw.org/CX20151016011685230181.html' target='_blank'></a>
        <a class="ui-footer-verification-item fn-left trust" id="kx_verify" href="https://ss.knet.cn/verifyseal.dll?sn=e15112011010561538m3ux000000&ct=df&a=1&pa=0.6757671611849219"title="人人贷WE理财已通过中网权威数据库对比，获得“可信网站”身份验证，您可放心使用。"  target="_blank">
        </a>
        <a class="ui-footer-verification-item fn-left internet" href="http://si.trustutn.org/info?sn=339151201000317676777" title="人人贷WE理财已通过认证联盟权威数据库对比，获得“互联网金融行业认证”，您可放心使用。" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left itrust" title="人人贷WE理财已经成为中国互联网信用评价中心网络诚信联盟成员，并且完成企业信用评级 " href="http://www.itrust.org.cn/Home/Index/itrust_certifi?wm=1012817080" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left norton" title="人人贷WE理财已引入VeriSign SSL加密技术，您的隐私及个人资料安全已受最高级别的保护。" href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&dn=www.we.com&lang=zh_cn" target="_blank" ></a>
        <!-- <a class="ui-footer-verification-item fn-left police" title="人人贷已经完成在公安机关的信息备案，您可了解网站相关备案信息。" href="http://gawa.bjchy.gov.cn/websearch/" target="_blank"></a>
        <a class="ui-footer-verification-item fn-left gongshang" title="人人贷已经完成在北京市工商局网站备案，您可了解网站相关备案信息。" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202013052900002" target="_blank"></a> -->
      </div>
    </div>
  </div>
</div>
<ul class="fixed-download-goBack">
  <li class="fixed-calculator">
    <a class="fixed-icon" target="_blank" href="/lend/calculator.action?prodType=Loanplan"></a>
  </li>
  <li class="fixed-service">
    <a class="fixed-icon" href="javascript:" onclick="online_service();"></a>
  </li>
  <li class="fixed-download">
    <a class="fixed-icon" href="javascript:"></a>
    <div class="download-app-wrap-opacity">
       <div class="fixed-arrow"></div>
    </div>
    <div class="download-app-wrap">
      <h2>人人贷WE理财APP下载</h2>
      <div class="fn-clear">
        <div class="ewm-big">
          <img src="/one/Public/images/.action/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMAQMAAACUDtN9AAAABlBMVEX///8AAABVwtN+AAAB1klEQVRIx63VPY7kIBAF4GdVQNZcwDLXcIDElRw6g4ywr4TkwNfA8gVwRoD8NhjNbDjeZiv8gifVj1TAp2XIMpD1yhLLQLKDJmCBsPJkLEeCfkyuLjccmYVl2PjuJJ57KCYp/a8Ek1QZpZajk4DFnHu9sl0x/LT9ERmyHOceX6Ndy/Ez+98JAExTldyo89+Nf0RSvWkqQkhkuPCUho3vI0MxAzBbRQ8lX8yZfDEbYZh0B5mkwi17ZbMrTXLhMTV4NheYsYJtRgfBVT1hVi8I9S17eUqTkNPowkVGPWxkBwGrBlQc2FY9OYYOmlz1A/dKNo8hqcdkknpnqWpoUnlbVzoIdl2GrOItGzUs9FMamn9jxHqRLBnz0ke8xxk8twpuVf8DBTYVi5DMjqGDYD2PPK/XyaizVN1DUpHNHpkl6sk6PiYLf2TF12g94L7iP6TJxfc0qlgkqTIkF56Saas3JC+yEo7vDppc1ZC9vgwDslVdZNeFeQakKU1W/5QAIMse2CxKFpYOMmS5MeMeheXYvt/J7zQBiyHjS5Jnlrr0kKtLHueV5xZIJt9LcAGj9Tja1008pYHJF2HE7b6zPiNgMdx5j1IBt/MpGbLAVFzNVWTMuoP+Y/0BZ3Vx/2T1cjwAAAAASUVORK5CYII=" alt="二维码" />
        </div>
        <div class="download-btns">
          <a target="_blank" class="ios" href="http://itunes.apple.com/us/app/id883561142?mt=8"><img src="/one/Public/images/.action/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDUzMEVBODczMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDUzMEVBODgzMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENTMwRUE4NTMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENTMwRUE4NjMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqnSjxsAAA9QSURBVHjarV3Nj1xH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" alt="ios下载" /></a>
          <a target="_blank" href="http://www.we.com/event/download.action?type=apk"><img src="/one/Public/images/.action/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTVGMUNCRjQzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTVGMUNCRjUzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNUYxQ0JGMjMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNUYxQ0JGMzMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkk0AaYAABG5SURBVHjapV1Ljx1H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" alt="android下载" /></a>
        </div>
      </div>      
    </div>
  </li>
  <li class="fixed-goTop">
    <a class="fixed-icon" href="javascript:"></a>
  </li>
</ul>
<div class="fn-hide">
  <div id="weixin-content" class="p20 text-center">
    <img src="/one/Public/images/weixin_l.jpg" style="width:250px" />
    <p>微信扫一扫，人人贷We理财里动态全知道！</p>
  </div>
</div>
<script type='text/javascript'>
function online_service() {
    
    window.open('http://chat.looyuoms.com/chat/chat/p.do?c=20000293&f=10042100&g=10048378&site=5372&r=%23params%3AuserId%2C5167350%2C姓名%2C北皖i', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');
    
}
</script>
            
<script id="dialog-message" type="text/x-handlebars-template">
<div class="ui-message-content j-result-dialog">
    <div class="h50"></div>
  {{# if info }}
  <div class="j-dialog-result-icon j-dialog-icon-info" title="提示"></div>
  {{/ if }}
  {{# if success }}
    <div class="j-dialog-result-icon j-dialog-icon-success" title="成功"></div>
  {{/ if }}
  {{# if warning }}
    <div class="j-dialog-result-icon j-dialog-icon-warn" title="警告"></div>
  {{/ if }}
  {{# if error }}
    <div class="j-dialog-result-icon j-dialog-icon-error" title="错误"></div>
  {{/ if }}
  <div class="fn-clear">
    
      
      
      
      
      
      
      
      
      
      
      
      
    
    <div class="j-dialog-message ">
      {{# if title }}
      <h3>{{ title }}</h3>
      {{/ if }}
      <p class="text-big j-result-text">{{{ message }}}</p>
      {{# if link }}
      <p class="text-center">{{ linkText }}<a href="{{ link }}">{{ linkTextEnd }}</a>。</p>
      {{/ if }}
      {{# if fund}}
      <p class="text-center">{{fundMsg}}</p>
      {{/ if}}
    </div>
  </div>
  <div class="ui-message-operation text-center">
    {{# if fund}}
    <a class="ui-message-close-button j-btn j-btn-orange  j-dialog-btn-small" style="width: 90px;" {{# if button }}href="{{ button.link }}"{{/ if }}>{{# if button }}{{ button.text }}{{ else }}关 闭{{/ if }}</a>
    <a class="j-btn j-btn-cancel j-dialog-btn-small" style="width: 90px;" id="lookDetailBtn" href="{{fundUrl}}">查看详情</a>
    {{else}}
      <a class="ui-button   ui-message-close-button j-btn j-btn-orange j-dialog-small" {{# if button }}href="{{ button.link }}"{{/ if }}>{{# if button }}{{ button.text }}{{ else }}关 闭{{/ if }}</a>
    {{/if}}
  </div>
</div>
</script>
        
        <!--body里面的js-->
        
		
        
	
        
        
        
        
        <!-- we理财百度统计 -->
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "//hm.baidu.com/hm.js?16f9bb97b83369e62ee1386631124bb1";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
        
    <script type="text/javascript" src="/one/Public/js/require_2f19223.js"></script><script type="text/javascript" src="/one/Public/js/common_widget_78d2def.js"></script><script type="text/javascript" src="/one/Public/js/index_f2ff14c.js"></script><script type="text/javascript" src="/one/Public/js/react_widget_08f408e.js"></script><script type="text/javascript" src="/one/Public/js/user_widget_bdbf3d4.js"></script><script type="text/javascript">;require(["common:widget/second-header/second-header"], function(header){
        header.init();
    });
;require(["common:widget/common-cmbc-dialog/common-cmbc-dialog"], function(cmbcCommonDilog){
    //由于账户设置页面也需要引入该widget，且其不需要引入时候执行init的操作，所以在common处传入标识
        var commonData = "xxx",
		modifyFirstLoginFlag = "xxx";
        if(commonData && commonData == "needInit")
        	 cmbcCommonDilog.init(modifyFirstLoginFlag);
        
    });
;require(["common:widget/footer/footer"], function(){});
;require(["user:page/assets/uplan/index","user:widget/assets/assets-tab"], function(assets,tab){
                assets.init();
                tab.init();
            });
;window.investAmount = {
              uplan: 0.0,
              autoinvestplan: 0.0,
              loan: 0.0
            }
;require(['common:widget/ui/messageModule/messageModule'], function(shit){
                shit.init();
            });
;require(["common:widget/ui/utmsource/utmsource"], function(){});
;require(['common:widget/ui/service-change-dialog/service-change-dialog'], function( obj ){
                var isShow = '' === 'true';
                if( isShow ){
                    obj.show();
                }
            });
;weLogger.perf.bodyEnd( );
            if( typeof document.addEventListener !== 'function' ){
                weLogger.perf.domReady();
            }
</script></body>
    
    <!-- THX FOR FIS -->
</html>