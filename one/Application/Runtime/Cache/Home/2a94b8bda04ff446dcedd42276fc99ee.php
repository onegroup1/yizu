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

        <meta name="keywords" content="we理财|we财富官网|we理财官网|Wealth Evolution|人人贷理财|网络理财|个人理财|投资理财|P2P理财|互联网金融|散标投资|债权转让|理财计划|U计划|薪计划">
        <meta name="description" content="Wealth Evolution( www.we.com) (简称人人贷WE理财)是人人贷公司旗下的理财品牌。人人贷WE理财作为原人人贷平台(www.renrendai.com)理财端的升级，为广大理财用户提供更多元的投资选择与更优质的综合理财服务。投资理财用户可通过WE官方网站进行散标投资、加入U计划、薪计划、购买债权转让等方式进行投资获得稳定收益。">
        <title>人人贷WE理财(Wealth Evolution)官网-中国互联网百强企业旗下3A级理财平台</title>

        <link rel="shortcut icon" type="image/x-icon" href="/Public/static/common/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/Public/css/base_ac0da34.css">
        <!--header中的css-->
<script src="/Public/js/jquery.js"></script>

        <link rel="stylesheet" href="/Public/css/video-js_f377876.css"/>


        <script>
            !function(){var c=Object.prototype.toString;var a=/complete|loaded|interactive/;var m="m.we.com/s1/w.gif";var d="";var p=location.protocol;var k="";var l=p+"//"+m;function b(q){return c.call(q)==="[object String]"}function j(s,r){for(var q in r){if(r.hasOwnProperty(q)){s[q]=r[q]}}}function o(s){var q="";for(var r in s){q+=r+"="+encodeURIComponent(s[r])+"&"}return q}function g(t){var s=(new Date()).getTime();var r="___log_"+s;var q=new Image();window[r]=q;q.onload=q.onerror=function(){q.onload=q.onerror=null;window[r]=null;q=null};q.src=t+"&_r="+s}function f(t){var q={pl:d,pid:k};for(var s in t){if(t.hasOwnProperty(s)){if(!b(t[s])){q[s]=JSON.stringify(t[s])}else{q[s]=t[s]}}}var r=l+"?"+o(q);g(r)}var n=false;var i={};var e={init:function(q){d=q.platform;k=q.pageID;if(!k){k=location.pathname}},perf:{headStart:function(q){i.jhead_start=q;return e},bodyStart:function(q){q=q||(new Date()).getTime();i.jbody_start=q;return e},bodyEnd:function(q){q=q||(new Date()).getTime();i.jbody_end=q;return e},domReady:function(q){if(i.jdom_ready){return}q=q||(new Date()).getTime();i.jdom_ready=q;return e},fullLoad:function(q){q=q||(new Date()).getTime();i.jfull_load=q;return e},send:function(){if(!n){if(window.performance&&window.performance.timing&&typeof window.performance.timing.toJSON==="function"){j(i,window.performance.timing.toJSON())}f({perf:i})}n=true}}};if(a.test(document.readyState)&&document.body){e.perf.domReady()}else{if(typeof document.addEventListener==="function"){document.addEventListener("DOMContentLoaded",function(){e.perf.domReady()})}}window.weLogger=e;function h(){e.perf.fullLoad();e.perf.send()}if(document.readyState!=="complete"){if(typeof window.addEventListener==="function"){window.addEventListener("load",h)}else{if(window.attachEvent){window.attachEvent("onload",h)}}}}();
        </script>
        <script src="/Public/js/vendors_8a6040f.js"></script>
        <!--header中的js-->
        <script src="/Public/js/jquery.js"></script>
        <!-- If you'd like to support IE8 -->

        <script src="/Public/js/video_41dc322.js"></script>

        <script>
            weLogger.init({ platform : 'pc' });
            weLogger.perf.headStart( _jHeadStart );
        </script>
    <link rel="stylesheet" type="text/css" href="/Public/css/common_widget_a1e249e.css" /><link rel="stylesheet" type="text/css" href="/Public/css/invest_widget_5739d14.css" /><link rel="stylesheet" type="text/css" href="/Public/css/index_358777c.css" /><link rel="stylesheet" type="text/css" href="/Public/css/home_widget_9fe32bd.css" /></head>
<body class="body">
    <script>
        weLogger.perf.bodyStart( );
    </script>
    <!--引用公共头部-->
        <div class="wdg-top-header">
    <div class="main-section">
        <span class="tel-phone"><i class="icon-phone"></i>客服电话: 400-090-6600</span>
        <ul class="site-nav">
       <?php
 $users=session('users'); if(empty($users)){ ?>
        <li class="nav-item"><a target="_self" href="/index.php/home/logins/index">立即登录</a></li>
        <li class="nav-item-split"></li>
        <li class="nav-item"><a target="_self" href="/index.php/home/logins/register">快速注册</a></li>
        <li class="nav-item-split"></li>
        <?php }else{ ?>
        <li class="nav-item"><?php echo $users; ?></li>
        <li class="nav-item-split"></li>

        <li class="nav-item"><a target="_self" href="/index.php/home/logins/tuichu">退出</a></li>
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
            <img src="/Public/images/we-logo_79fb26f.png" alt="logo" />
        </a>
        <ul class="site-nav">
            <li class="user-item fn-clear">
            <?php
 $loign_img=session('loign_img'); ?>

                    <div class="user-avatar-container fn-left">
                    <?php
 if($loign_img){ ?>
                        <img src="/Public/<?php echo ($loign_img); ?>"  />
                    <?php }else{ ?>
                        <img src="/Public/images/default-avatar-96_dc38986.png"  />
                    <?php } ?>
                        <div class="avatar-masking"><a href="/account/index.action"></a></div>
                    </div>
                    <div class="user-name fn-clear">
                        <a href="/index.php/home/zhsz">我的账户</a>
                    </div>


            </li>
            <li class="channel-item"><a href="/index.php/home/index">首页</a></li>
            <li class="channel-item"><a href="/index.php/home/index/ujihua">U计划</a></li>
            <li class="channel-item"><a href="/index.php/home/index/xinjihua">薪计划</a></li>
			<li class="channel-item"><a href="/index.php/home/creditor/zhaiw">债权</a></li>
            <li class="channel-item"><a href="/index.php/home/index/xinshou">新手专区</a></li>
        </ul>
    </div>
</div>
    <!---->
<div id="header-helper" style="display: none;">
    <span id="header-helper-authenticated">
        false
    </span>
</div>







    <style>
        .color{ background-color:red;}
    </style>
    <script>
    pics=[
        <?php if(is_array($piclist)): foreach($piclist as $key=>$vo): ?>"/Public/<?php echo ($vo["pict_name"]); ?>",<?php endforeach; endif; ?>
        ];
   // var pics=["/Public/img/1.jpg","/Public/img/2.jpg","/Public/img/3.jpg","/Public/img/4.jpg","/Public/img/5.jpg"];
    //alert(pics);
        //初值
        var currPicNum=1;
        $(document).ready(function(){
            $("#key>a").click(function(){
                    var key=$(this).html();
                    //alert(key);
                    var values=pics[key-1];
                    //alert(values);
                    $("#mohui").attr("src",values);
                    //变颜色
                    $(this).addClass("color").siblings().removeClass("color");
                    //变颜色结束
                    currPicNum=key;
            });
            var picInterval=setInterval("changePic()",3500);
            $("#mohui").hover(function(){
                clearInterval(picInterval);
            },function(){
                picInterval=setInterval("changePic()",3500);
            })
        });
        function changePic(){
            var pic=pics[currPicNum-1];
            $("#mohui").attr("src",pic);
            //变颜色
            $("#key a").each(function(){
                var value=$(this).html();
                if(currPicNum==value){
                    $(this).addClass("color").siblings().removeClass("color");
                }
            })
            if (currPicNum>=5) {
                currPicNum=1;
            }else{
                currPicNum++;
            }

        }
    </script>











<div id="pg-server-message" data-status="" data-message="" data-ispop="" data-fundTips="" style="display: none;"></div>
<div class="maincontent">

<div class="index-banner content-section">
    <div class="slides" id="slidebox" style="m">
        <div>
            <img src="pic/1.jpg" id="mohui" onerror="this.src='a.jpg'" width="1500px" height="400px" alt="辉哥" />

        </div>
    </div>



<div class="fn-hide">

  <div id="weixin" class="p20 text-center">

    <img src="/Public/images/weixin_l.jpg" />

    <p>微信“发现”扫一扫，人人贷里动态全知道！</p>

  </div>

</div>
    <div class="main-section">
        <div id="slider_nav">
             <div id="key">
                <a class="color">1</a>
                <a>2</a>
                <a>3</a>
                <a>4</a>
                <a>5</a>
                </div>


        </div>
        <div class="register-box-outter">
            <div class="register-box  ">
            </div>
            <div class="register-box-inner">
                <div class="no-log-in">
                    <h2>人人贷成交额超过</h2>
                    <div class="money-wrap">
                        <span class="num-family">169</span>亿元
                    </div>
                    <p class="desc">已为用户赚取155,878万元，累计交易1,650万人次</p>
                    <a href="/regPage.action?registerSource=web_banner" class="j-btn j-btn-orange " target="_blank" >注册领红包</a>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="main-section content-section clearfix info-con">
            <div class="info-item">
                <h2><i class="icon icon-1 mr10"></i>安全</h2>
                <p>国家AAA信用平台</p>
                <p>民生银行资金存管</p>
            </div>
            <div class="info-item">
                <h2><i class="icon icon-2 mr10"></i>权威</h2>
                <p>CCTV多次点赞</p>
                <p>互联网百强企业</p>
            </div>
            <div class="info-item">
                <h2><i class="icon icon-3 mr10"></i>省心</h2>
                <p>用户利益保障机制</p>
                <p>一站式财富管理平台</p>
            </div>
            <div class="info-item info-item-last">
                <h2><i class="icon icon-4 mr10"></i>灵活</h2>
                <p>50元起投</p>
                <p>3个月可债权转让</p>
            </div>
        </div>

        <div class="main-section content-section border-box notice-con">
            <div class="notice fn-clear">
    <div class="notice-wrapper">
      <div class="notice-head fn-clear">
        <a href="/about/detail.action?notices_id=notices_476" target="_blank" class="notice-title h5 fn-left color-gray-text w700 fn-text-overflow" id="notice-title">人人贷WE理财合作伙伴中国民生银行系统升级维护公告</a>
        <span class="notice-date fn-left color-silver-text">2016-05-20</span>
        <a class="notice-more fn-right " href="/about/about.action?flag=notices" target="_blank">更多公告</a>
      </div>
      <div class="notice-content color-dimgray-text" id="notice-content"><p align="left">

	尊敬的人人贷WE理财用户：</p>

<p align="left">

	&nbsp; &nbsp; &nbsp; &nbsp;您好！由于中国民生银行将于2016年5月22日（周日）0:00至8:00进行系统升级维护，在此期间人人贷WE理财移动端暂停民生银行卡的开户、绑卡、充值、提现操作，同时民生卡网银线下充值也将受到影响。待民生银行完成系统升级后恢复正常。</p>

<p align="left">

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;感谢您的理解与支持，如您有任何疑问请联系在线客服或拨打客服热线：400-090-6600。祝您生活愉快！</p>

<p align="right">

	人人贷WE理财团队</p>

<p align="right">

	2016年5月20日</p>

<p align="right">

	&nbsp;</p>

</div>
    </div>
  </div>



        </div>


<div id="wdg-custom-recommend" class="main-section content-section index-card newbee-card">
    <div class="card-caption">
        <div class="more-wrap">
            <a href="/newComerLoan">查看更多&gt; </a>
        </div>
    </div>


        <div class="card-detail" >
            <div class="card-detail-tag"></div>
            <ul class="card-detail-head fn-clear">
                <li class="card-detail-head-01 fn-left">U计划-新人专享</li>
                <li class="card-detail-head-02 fn-right">多重红包奖励 独享活动好礼</li>
            </ul>
            <div class="card-detail-item fn-clear">
                <ul class="card-detail-item-left fn-left fn-clear">
                    <li class="card-detail-item-left-01 fn-left">
                        <div class="number num-family"><span><?php echo ($ua["upay_annua"]); ?></span><i>%</i></div>
                        <div class="text">预期年收益</div>
                    </li>

                    <li class="card-detail-item-left-02 fn-left">
                        <div class="number num-family">

                                 <span><?php echo ($ux["upay_periodss"]); ?></span>
                                 <i>天</i>


                        </div>
                        <div class="text">理财期限</div>
                    </li>
                </ul>
                <div class="card-detail-item-right fn-left">
                       <div class="btn-wrap">

                            <?php
 $mxa=$ux['upay_sunk']; $mxb=$ux['upay_paymoney']; ?>
                         <?php if(($mxa == $mxb)): ?><a target="_blank" class="j-btn j-btn-orange" href="/financeplan/2735">查看详情</a>
                         <?php else: ?>

                                <a target="_blank" class="j-btn j-btn-orange" href="/financeplan/2735">立即加入</a><?php endif; ?>




                    </div>
                    <p class="button-text">甄选精品 即刻抢购</p>
                </div>
            </div>
        </div>

</div>


    <a href="/regPage.action?registerSource=web_top" class="main-section content-section newbee-guide-section">
    <h2 class="section-title">新手指南</h2>
    <div class="section-body">
        <ul class="newbee-step-list fn-clear">
            <li class="step-item step-1">
                <div class="text">会员注册</div>
                <div class="sub-text">新手注册即获得</div>
                <div class="text-orange">50元红包</div>
            </li>
            <li class="step-arrow"></li>
            <li class="step-item step-2">
                <div class="text">民生银行开户</div>
                <div class="sub-text">注册24小时内开户成功得</div>
                <div class="text-orange">20元红包</div>
            </li>
            <li class="step-arrow"></li>
            <li class="step-item step-3">
                <div class="text">充值</div>
                <div class="sub-text">注册24小时内首次充值得</div>
                <div class="text-orange">30元红包</div>
            </li>
            <li class="step-arrow"></li>
            <li class="step-item step-4">
                <div class="text">理财</div>
                <div class="sub-text">注册24小时内首投最高得</div>
                <div class="text-orange">100元红包</div>
            </li>
        </ul>
    </div>
</a>




<div id="wdg-u-plan" class="main-section content-section index-card u-plan-card">
    <div class="card-caption">
        <div class="text">每周工作日上午10点开始</div>
        <div class="more-wrap">
            <a href="/index.php/home/index/ujihua">查看更多&gt; </a>
        </div>
    </div>
    <div class="card-detail">
        <ul class="u-plan-list fn-clear">
            <li class="u-plan-item col-1-3 u-plan-a">
                <h3>U计划A&nbsp;&nbsp;&nbsp;</h3>
                <div class="rate-wrap"><span class="num-family"><?php echo ($ua["upay_annua"]); ?></span>%</div>
                <div class="duration-limit">理财期限<?php echo ($ua["upay_periodss"]); ?>个月</div>
                <div class="btn-wrap">


                    <?php if(($ua["yn"] > 0)): ?><a id="J_count_time_a" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2738" data-wait="1392" data-status="3">等待加入</a>
                    <?php else: ?>
                        <?php
 $maa=$ua['upay_sunk']; $mab=$ua['upay_paymoney']; ?>
                         <?php if(($maa == $mab)): ?><a id="J_count_time_a" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2738" data-wait="1392" data-status="3">查看详情</a>
                         <?php else: ?>
                        <a id="J_count_time_a" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2738" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>

                </div>
            </li>
            <li class="u-plan-item col-1-3 u-plan-b">
                <h3>U计划B&nbsp;&nbsp;&nbsp;</h3>
                <div class="rate-wrap"><span class="num-family"><?php echo ($ub["upay_annua"]); ?></span>%</div>
                <div class="duration-limit">理财期限<?php echo ($ub["upay_periodss"]); ?>个月</div>
                <div class="btn-wrap">

                    <?php if(($ub["yn"] > 0)): ?><a id="J_count_time_b" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2739" data-wait="1392" data-status="3">等待加入</a>
                    <?php else: ?>
                        <?php
 $mba=$ub['upay_sunk']; $mbd=$ub['upay_paymoney']; ?>
                         <?php if(($mba == $mbd)): ?><a id="J_count_time_b" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2739" data-wait="1392" data-status="3">查看详情</a>
                        <?php else: ?>
                        <a id="J_count_time_b" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2739" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>
                </div>
            </li>
            <li class="u-plan-item col-1-3 u-plan-c">
                <h3>U计划C&nbsp;&nbsp;&nbsp;</h3>
                <div class="rate-wrap"><span class="num-family"><?php echo ($uc["upay_annua"]); ?></span>%</div>
                <div class="duration-limit">理财期限<?php echo ($uc["upay_periodss"]); ?>个月</div>
                <div class="btn-wrap">


                    <?php if(($uc["yn"] > 0)): ?><a id="J_count_time_c" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2740" data-wait="1392" data-status="3">等待加入</a>

                    <?php else: ?>
                       <?php
 $a=$uc['upay_sunk']; $b=$uc['upay_paymoney']; ?>
                         <?php if(($a == $b)): ?><a id="J_count_time_c" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2740" data-wait="1392" data-status="3">查看详情</a>
                        <?php else: ?>

                         <a id="J_count_time_c" target="_blank" class="j-btn j-btn-orange" href="/financeplan/2740" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>

                </div>
            </li>
        </ul>
    </div>
</div>


<div id="wdg-fixed-plan" class="main-section content-section index-card fixed-plan-card">
    <div class="card-caption">
        <div class="text">每月1-25号，上午10:30开放</div>
        <div class="more-wrap">
            <a href="/index.php/home/index/xinjihua">查看更多&gt; </a>
        </div>
    </div>
    <div class="card-detail">
        <ul class="fixed-plan-info fn-clear">
            <li class="fixed-info-item col-1-3 fixed-info-1 ">
                <div class="sub-text">投资起点</div>
                <div class="text">每月<span class="num-family"><?php echo ($xinplan["payplan_stamoney"]); ?></span>元</div>
                <div class="foot">

                        <div class="item-dt">开放名额: <?php echo ($xinplan["payplan_num"]); ?>人</div>




                </div>
            </li>
            <li class="fixed-info-item col-1-3 fixed-info-2 ">
                <div class="sub-text">预期年收益</div>
                <div class="text"><span class="num-family" style="font-size: 20px;"><?php echo ($xinplan["payplan_annua"]); ?></span>%</div>
                <div class="foot">
                    <span>每月投资日<span class="text-orange">7</span>日</span>
                </div>
            </li>
            <li class="fixed-info-item col-1-3 fixed-info-3 ">
                <div class="sub-text">理财期限</div>
                <div class="text"><span class="num-family"><?php echo ($xinplan["payplan_deadline"]); ?></span>个月</div>
                <div class="foot">

                        <a id="J_count_time_fixed" target="_blank" class="j-btn j-btn-orange" href="/index.php/home/index/xinjihua" data-wait="3192" data-type="XJH" data-status="0">等待加入</a>




                </div>
            </li>
        </ul>
    </div>
</div>


<div id="wdg-loan-list" class="main-section content-section index-card loan-list-card">
    <div class="card-caption">

        <div class="more-wrap">
            <a target="_self" href="/index.php/home/creditor/zhaiw">查看更多&gt; </a>
        </div>
    </div>
    <div class="card-detail">
        <ul class="ui-list ui-list-m ui-list-invest" id="loan-list">
<li id="loan-list-header" class="ui-list-header fn-clear">
<span class="ui-list-title fn-left color-gray-text w140 pl30" next="-1">借款标题</span>
<span class="ui-list-title fn-left color-gray-text text-center w86" next="-1" name="INTEREST">年利率</span>
<span class="ui-list-title fn-left color-gray-text text-right w160" next="-1">金额</span>
<span class="ui-list-title fn-left color-gray-text text-right w135" next="-1" name="MONTH">期限</span>
<span class="ui-list-title fn-left color-gray-text text-right w110" next="-1" name="FINISHEDRATIO">进度</span>
<span class="ui-list-title fn-left color-gray-text text-right w130" name="REFRESH" next="-1"></span>
</li>

<?php if(is_array($credit)): foreach($credit as $key=>$vo): ?><li class="ui-list-item fn-clear ">
<span class="ui-list-field fn-left text-big w140 pl30">
<em class="ui-loantype XYRZ" title="信用认证标"></em>
<a class="fn-left w116 rrd-dimgray fn-text-overflow" title="<?php echo ($vo["creditor_name"]); ?>" target="_blank" href="/loan/2035776"><?php echo ($vo["creditor_name"]); ?></a>
</span>
<span class="ui-list-field fn-left num text-center w86 ">
<em class="value"><?php echo ($vo["creditor_lilv"]); ?></em>
%
</span>
<span class="ui-list-field fn-left num text-right w160 ">
<em class="value"><?php echo ($vo["creditor_money"]); ?></em>
元
</span>
<span class="ui-list-field fn-left num text-right w135 ">
<em class="value"><?php echo ($vo["creditor_deadline"]); ?></em>
个月
</span>
<span class="ui-list-field fn-left text-right w110">
<span class="">
<em><?php echo ($vo["ed"]); ?></em>
%
</span>
</span>
<span class="ui-list-field fn-left text-right w130">

<?php if(($vo["ed"] == 100) ): ?><a href="aa" class="ui-button j-btn j-btn-orange ui-list-invest-button ui-list-invest-button-READY FIRST_READY">
        <span class="IN_PROGRESS">投标</span>
        <span class="READY FIRST_READY">已满标</span>
        <span class="OPEN">还款中</span>
        </a>
<?php else: ?>
        <a href="/index.php/home/index/xinjihua" class="ui-button j-btn j-btn-orange ui-list-invest-button ui-list-invest-button-OPEN">
        <span class="OPEN">投标</span>
        <span class="READY FIRST_READY">已满标</span>
        <span class="IN_PROGRESS">还款中</span>
        </a><?php endif; ?>

</span>
</li><?php endforeach; endif; ?>


        </ul>
    </div>
</div>


<div class="main-section content-section news-card">

<div class="news-con fn-clear">
    <dl class="company-info-con">
        <dt><a href="/about/about.action?flag=news" target="_self" class="fn-right more">更多网站动态</a>公司动态</dt>
        <dd>
            <ul class="news-list-con">
            <?php if(is_array($trend)): foreach($trend as $key=>$vo): ?><li class="news-item">
                    <a href="/about/detail.action?news_id=news_377" target="_blank" class="title"><?php echo ($vo["trends_name"]); ?></a>
                    <span class="news-date"><?php echo (date("Y-m-d",$vo["trends_time"])); ?></span>
                </li><?php endforeach; endif; ?>
            </ul>
        </dd>
    </dl>
    <dl class="company-info-con media-info-con">
        <dt><a href="/about/about.action?flag=report" target="_self" class="fn-right more"></a>媒体报道</dt>
        <dd>
            <ul class="news-list-con">
            <?php if(is_array($trend1)): foreach($trend1 as $key=>$vo): ?><li class="news-item">
                            <a href="/about/detail.action?report_id=report_72" target="_blank" class="title"><?php echo ($vo["trends_name"]); ?></a>
                            <span class="news-date"><?php echo (date("Y-m-d",$vo["trends_time"])); ?></span>
                        </li><?php endforeach; endif; ?>
            </ul>
        </dd>
    </dl>
</div>
</div>




<script id="autoinvest-list-template" type="text/x-handlebars-template">
  <table class="ui-table ui-table-blue ui-table-center">
    <thead>
    <tr>
      <th class="text-left" style="font-size:14px;" width="20%"><span class="pl20">薪计划</span></th>
      <th class="text-right" style="font-size:14px;" width="15%"><span class="pr40">加入人数</span></th>
      <th class="text-right" style="font-size:14px;" width="15%"><span class="pr30">已加入金额</span></th>
      <th class="text-right" style="font-size:14px;" width="16%"><span class="pr20">预期年化收益</span></th>
      <th class="text-right" style="font-size:14px;" width="18%"><span class="pr40">累计收益</span></th>
      <th class="text-right" style="font-size:14px;" width="16%"><span class="pr40">状态</span></th>
    </tr>
    </thead>
    <tbody>
    {{# each plans }}
    <tr class="{{itemStyle}}">
      <td class="text-left">
        <div class="ui-td-bg pl20">
          <a href="{{ link }}" target="_blank">{{ name }}</a>
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr40">
          {{ subpointCountActual }}人
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr30">
          {{ amount }}元
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr20">
          {{expectedYearRate}}%
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr40">
          {{ earnInterest }}元
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr40">
          {{{ statusinfo }}}
        </div>
      </td>
    </tr>
    {{ else }}
    <tr>
      <td colspan="6" class="color-gray-text "style="font-size:24px; padding-top:50px;">{{# if _message }}{{ _message }}{{ else }}薪计划没有数据{{/ if }}</td>
    </tr>
    {{/ each }}
    </tbody>
  </table>
</script>
<script id="uplan-list-a-template" type="text/x-handlebars-template">
  <table class="ui-table ui-table-blue ui-table-center">
    <thead>
    <tr>
      <th style="font-size:14px;" width="20%"><span class="text-left pl20">计划名称</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">计划金额（元）</span></th>
      <th style="font-size:14px;" width="12%"><span>加入人次</span></th>
      <th style="font-size:14px;" width="12%"><span>预期年化收益</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">累计收益（元）</span></th>
      <th style="font-size:14px;" width="20%"><span>状态</span></th>
    </tr>
    </thead>
    <tbody>
    {{# each plans }}
    <tr class="{{itemStyle}}">
      <td class="text-left">
        <div class="ui-td-bg pl20">
          <a href="{{ link }}" target="_blank">{{ name }}</a>
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ amount }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{ headCount }}人
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{expectedYearRate}}
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ earnInterest }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">{{# if alink }}<a class="button  {{# if blink }}  button-disable {{ else }}  button-blue  {{/ if }} button-mid" style="display:inline-block;"    {{# if blink }}  {{ else }}  href="{{ link }}"  {{/ if }}>{{ statusinfo }}</a>{{ else }}{{ statusinfo }}{{/ if }}</div>
      </td>
    </tr>
    {{ else }}
    <tr>
      <td colspan="6" class="color-gray-text "style="font-size:24px; padding-top:50px;">{{# if _message }}{{ _message }}{{ else }}U计划A没有数据{{/ if }}</td>
    </tr>
    {{/ each }}
    </tbody>
  </table>
</script>
<script id="uplan-list-b-template" type="text/x-handlebars-template">
  <table class="ui-table ui-table-blue ui-table-center">
    <thead>
    <tr>
      <th style="font-size:14px;" width="20%"><span class="text-left pl20">计划名称</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">计划金额（元）</span></th>
      <th style="font-size:14px;" width="12%"><span>加入人次</span></th>
      <th style="font-size:14px;" width="12%"><span>预期年化收益</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">累计收益（元）</span></th>
      <th style="font-size:14px;" width="20%"><span>状态</span></th>
    </tr>
    </thead>
    <tbody>
    {{# each plans }}
    <tr class="{{itemStyle}}">
      <td class="text-left">
        <div class="ui-td-bg pl20">
          <a href="{{ link }}" target="_blank">{{ name }}</a>
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ amount }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{ headCount }}人
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{expectedYearRate}}
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ earnInterest }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">{{# if alink }}<a class="button  {{# if blink }}  button-disable {{ else }}  button-blue  {{/ if }} button-mid" style="display:inline-block;"    {{# if blink }}  {{ else }}  href="{{ link }}"  {{/ if }}>{{ statusinfo }}</a>{{ else }}{{ statusinfo }}{{/ if }}</div>
      </td>
    </tr>
    {{ else }}
    <tr>
      <td colspan="6" class="color-gray-text "style="font-size:24px; padding-top:50px;" >{{# if _message }}{{ _message }}{{ else }}U计划B没有数据{{/ if }}</td>
    </tr>
    {{/ each }}
    </tbody>
  </table>
</script>
<script id="uplan-list-c-template" type="text/x-handlebars-template">
  <table class="ui-table ui-table-blue ui-table-center" >
    <thead>
    <tr>
      <th style="font-size:14px;" width="20%"><span class="text-left pl20">计划名称</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">计划金额（元）</span></th>
      <th style="font-size:14px;" width="12%"><span>加入人次</span></th>
      <th style="font-size:14px;" width="12%"><span>预期年化收益</span></th>
      <th style="font-size:14px;" width="18%"><span class="text-right pr25">累计收益（元）</span></th>
      <th style="font-size:14px;" width="20%"><span>状态</span></th>
    </tr>
    </thead>
    <tbody>
    {{# each plans }}
    <tr class="{{itemStyle}}">
      <td class="text-left">
        <div class="ui-td-bg pl20">
          <a href="{{ link }}" target="_blank">{{ name }}</a>
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ amount }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{ headCount }}人
        </div>
      </td>
      <td>
        <div class="ui-td-bg">
          {{expectedYearRate}}
        </div>
      </td>
      <td class="text-right">
        <div class="ui-td-bg pr25">
          {{ earnInterest }}
        </div>
      </td>
      <td>
        <div class="ui-td-bg">{{# if alink }}<a class="button  {{# if blink }}  button-disable {{ else }}  button-blue  {{/ if }} button-mid" style="display:inline-block;"    {{# if blink }}  {{ else }}  href="{{ link }}"  {{/ if }}>{{ statusinfo }}</a>{{ else }}{{ statusinfo }}{{/ if }}</div>
      </td>
    </tr>
    {{ else }}
    <tr>
      <td colspan="6" class="color-gray-text "style="font-size:24px; padding-top:50px;">{{# if _message }}{{ _message }}{{ else }}U计划C没有数据{{/ if }}</td>
    </tr>
    {{/ each }}
    </tbody>
  </table>
</script>
<script id="loan-list-template" type="text/x-handlebars-template">
  {{# if _hasHeader }}
  <li class="ui-list-header fn-clear" id="loan-list-header">
    <span class="ui-list-title fn-left color-gray-text w140 pl30">借款标题对对对</span>

    <span class="ui-list-title fn-left color-gray-text text-center w86 ui-list-title-sortable ui-list-title-sortable-2" name="INTEREST" next="desc">年利率<em></em></span>
    <span class="ui-list-title fn-left color-gray-text text-right w160">金额</span>
    <span class="ui-list-title fn-left color-gray-text text-right w135 ui-list-title-sortable ui-list-title-sortable-3" name="MONTH" next="desc">期限<em></em></span>
    <span class="ui-list-title fn-left color-gray-text text-right w110 ui-list-title-sortable ui-list-title-sortable-4" name="FINISHEDRATIO" next="desc">进度<em></em></span>
    <span class="ui-list-title fn-left color-gray-text text-right w130 ui-list-title-sortable ui-list-title-refresh"  name="REFRESH">刷新</span>
  </li>
  {{/ if }}
  {{# each loans }}
  <li class="ui-list-item fn-clear {{ itemStyle }} {{ itemLast }}">
  <span class="ui-list-field fn-left text-big w140 pl30">
    <em class="ui-loantype {{ loanType }}" title="{{ loanTypeText }}"></em><a class="fn-left w116 rrd-dimgray fn-text-overflow" href="{{ link }}" target="_blank" title="{{ title }}">{{{ title }}}</a>
  </span>

    <span class="ui-list-field fn-left num text-center w86 "><em class="value">{{ interest }}</em>%</span>
    <span class="ui-list-field fn-left num text-right w160 "><em class="value">{{ amount }}</em>元</span>
    <span class="ui-list-field fn-left num text-right w135 "><em class="value">{{ term }}</em>个月</span>
  <span class="ui-list-field fn-left text-right w110">
    <span class=""><em>{{ progress }}</em>%</span>
  </span>
  <span class="ui-list-field fn-left text-right w130">
    <a class="ui-button j-btn j-btn-orange ui-list-invest-button ui-list-invest-button-{{ status }}" {{# if buttonLink }}href="{{ buttonLink }}" target="_blank"{{/ if }}>
      <span class="OPEN">投标</span>
      <span class="READY FIRST_READY">已满标</span>
      <span class="IN_PROGRESS">还款中</span>
    </a>
  </span>
  </li>
  {{ else }}
  <li class="ui-list-status">
    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有可投资项目{{/ if }}</p>
  </li>
  {{/ each }}
  {{# if _hasMore }}
  {{# if loans }}



  {{/ if }}
  {{/ if }}
</script>
<script id="transfer-list-template" type="text/x-handlebars-template">
  {{# if _hasHeader }}
  <li class="ui-list-header fn-clear" id="transfer-list-header">
    <span class="ui-list-title fn-left color-gray-text w240">借款标题ss</span>
    <span class="ui-list-title fn-left color-gray-text w80">信用等级</span>
    <span class="ui-list-title fn-left color-gray-text w75">年利率</span>
    <span class="ui-list-title fn-left color-gray-text w80">剩余期限</span>
    <span class="ui-list-title fn-left color-gray-text w85">每份价值</span>
    <span class="ui-list-title fn-left color-gray-text w80">剩余份额</span>
    <span class="ui-list-title fn-left color-gray-text w80">转让系数</span>
    <span class="ui-list-title fn-left color-gray-text w105">转出价格</span>
  </li>
  {{/ if }}
  {{# each transferList }}
  <li class="ui-list-item fn-clear {{ itemLast }}">
  <span class="ui-list-field fn-left text-big w240">
    <em class="ui-loantype {{ loanType }}" title="{{ loanTypeText }}"></em><a class="fn-left w190 rrd-dimgray fn-text-overflow" href="{{ link }}" target="_blank" title={{ title }}>{{{ title }}}</a>
  </span>
    <span class="ui-list-field fn-left w70"><a class="ui-creditlevel {{ creditLevel }} snow">{{ creditLevel }}</a></span>
    <span class="ui-list-field fn-left num text-right w65 pr5"><em>{{ interest }}</em>%</span>
    <span class="ui-list-field fn-left num text-right w70 pr10"><em>{{ term }}</em>个月</span>
    <span class="ui-list-field fn-left num text-right w80 pr5"><em>{{ cost }}</em>元</span>
    <span class="ui-list-field fn-left num text-right w70 pr10"><em>{{ share }}</em>份</span>
    <span class="ui-list-field fn-left num text-right w70 pr10"><em>{{ discount }}</em>%</span>
    <span class="ui-list-field fn-left num text-right w100 pr10"><em>{{ price }}</em>元/份</span>
  <span class="ui-list-field fn-left ">
  {{# if hasTransfered }}
      <a class="ui-button ui-button-mid ui-button-blue ui-list-invest-button ui-list-invest-button-IN_PROGRESS">
        <span class="IN_PROGRESS">已完成</span>
      </a>
  {{ else }}
    <a class="ui-button ui-button-mid ui-button-blue" href="{{ link }}" target="_blank"><span>购买</span></a>
  {{/ if }}
  </span>
    <!-- <div class="ui-poptip ui-poptip-white" style="display: none;" data-ui-name="ui-poptip">
      <div class="ui-poptip-container">
        <div class="ui-poptip-arrow ui-poptip-arrow-10"><em></em><span></span></div>
        <div class="ui-poptip-content">{{ loanTypeText }}</div>
      </div>
    </div> -->
  </li>
  {{ else }}
  <li class="ui-list-status">
    <p class="color-gray-text">{{# if _message }}{{ _message }}{{ else }}没有转让中的债权{{/ if }}</p>
  </li>
  {{/ each }}
  {{# if _hasMore }}
  <li class="ui-list-more">
    <a class="darkgray" href="/">查看更多可转让债权</a>
  </li>
  {{/ if }}
</script>



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
          <dd><img src="/Public/images/we-weixing_334069c.png" alt=""></dd>
          <dt>关注微信账号</dt>
        </dl>
        <dl class="fn-left app-down">
          <dd><img src="/Public/images/app-weixin_32107fa.png" alt=""></dd>
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
          <img src="/Public/images/.com/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMAQMAAACUDtN9AAAABlBMVEX///8AAABVwtN+AAAB1klEQVRIx63VPY7kIBAF4GdVQNZcwDLXcIDElRw6g4ywr4TkwNfA8gVwRoD8NhjNbDjeZiv8gifVj1TAp2XIMpD1yhLLQLKDJmCBsPJkLEeCfkyuLjccmYVl2PjuJJ57KCYp/a8Ek1QZpZajk4DFnHu9sl0x/LT9ERmyHOceX6Ndy/Ez+98JAExTldyo89+Nf0RSvWkqQkhkuPCUho3vI0MxAzBbRQ8lX8yZfDEbYZh0B5mkwi17ZbMrTXLhMTV4NheYsYJtRgfBVT1hVi8I9S17eUqTkNPowkVGPWxkBwGrBlQc2FY9OYYOmlz1A/dKNo8hqcdkknpnqWpoUnlbVzoIdl2GrOItGzUs9FMamn9jxHqRLBnz0ke8xxk8twpuVf8DBTYVi5DMjqGDYD2PPK/XyaizVN1DUpHNHpkl6sk6PiYLf2TF12g94L7iP6TJxfc0qlgkqTIkF56Saas3JC+yEo7vDppc1ZC9vgwDslVdZNeFeQakKU1W/5QAIMse2CxKFpYOMmS5MeMeheXYvt/J7zQBiyHjS5Jnlrr0kKtLHueV5xZIJt9LcAGj9Tja1008pYHJF2HE7b6zPiNgMdx5j1IBt/MpGbLAVFzNVWTMuoP+Y/0BZ3Vx/2T1cjwAAAAASUVORK5CYII=" alt="二维码" />
        </div>
        <div class="download-btns">
          <a target="_blank" class="ios" href="http://itunes.apple.com/us/app/id883561142?mt=8"><img src="/Public/images/.com/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDUzMEVBODczMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDUzMEVBODgzMUU2MTFFNThGNjhBQTlFQTQ4QTlBMzYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENTMwRUE4NTMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENTMwRUE4NjMxRTYxMUU1OEY2OEFBOUVBNDhBOUEzNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqnSjxsAAA9QSURBVHjarV3Nj1xH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" alt="ios下载" /></a>
          <a target="_blank" href="http://www.we.com/event/download.action?type=apk"><img src="/Public/images/.com/data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAsCAYAAADb2gLVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RTVGMUNCRjQzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RTVGMUNCRjUzMUU2MTFFNUE3OEZEOUYyRkJDNUU0N0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNUYxQ0JGMjMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNUYxQ0JGMzMxRTYxMUU1QTc4RkQ5RjJGQkM1RTQ3QyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkk0AaYAABG5SURBVHjapV1Ljx1H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" alt="android下载" /></a>
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
    <img src="/Public/images/weixin_l.jpg" style="width:250px" />
    <p>微信扫一扫，人人贷We理财里动态全知道！</p>
  </div>
</div>
<script type='text/javascript'>
function online_service() {

    window.open('http://chat.looyuoms.com/chat/chat/p.do?c=20000293&f=10042100&g=10048378&site=5372&r=%23params%3A姓名%2C游客', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');

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

    <script type="text/javascript" src="/Public/js/require_2f19223.js"></script><script type="text/javascript" src="/Public/js/common_widget_78d2def.js"></script><script type="text/javascript" src="/Public/js/index_b397526.js"></script><script type="text/javascript">;require(["common:widget/second-header/second-header"], function(header){
        header.init();
    });
;require(["common:widget/footer/footer"], function(){});
;require(['home:page/index/index']);
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