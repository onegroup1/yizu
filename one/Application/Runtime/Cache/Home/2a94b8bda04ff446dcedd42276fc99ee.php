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

        <link rel="shortcut icon" type="image/x-icon" href="/yizu/one/Public/static/common/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/yizu/one/Public/css/base_ac0da34.css">
        <!--header中的css-->
<script src="/yizu/one/Public/js/jquery.js"></script>

        <link rel="stylesheet" href="/yizu/one/Public/css/video-js_f377876.css"/>


        <script>
            !function(){var c=Object.prototype.toString;var a=/complete|loaded|interactive/;var m="m.we.com/s1/w.gif";var d="";var p=location.protocol;var k="";var l=p+"//"+m;function b(q){return c.call(q)==="[object String]"}function j(s,r){for(var q in r){if(r.hasOwnProperty(q)){s[q]=r[q]}}}function o(s){var q="";for(var r in s){q+=r+"="+encodeURIComponent(s[r])+"&"}return q}function g(t){var s=(new Date()).getTime();var r="___log_"+s;var q=new Image();window[r]=q;q.onload=q.onerror=function(){q.onload=q.onerror=null;window[r]=null;q=null};q.src=t+"&_r="+s}function f(t){var q={pl:d,pid:k};for(var s in t){if(t.hasOwnProperty(s)){if(!b(t[s])){q[s]=JSON.stringify(t[s])}else{q[s]=t[s]}}}var r=l+"?"+o(q);g(r)}var n=false;var i={};var e={init:function(q){d=q.platform;k=q.pageID;if(!k){k=location.pathname}},perf:{headStart:function(q){i.jhead_start=q;return e},bodyStart:function(q){q=q||(new Date()).getTime();i.jbody_start=q;return e},bodyEnd:function(q){q=q||(new Date()).getTime();i.jbody_end=q;return e},domReady:function(q){if(i.jdom_ready){return}q=q||(new Date()).getTime();i.jdom_ready=q;return e},fullLoad:function(q){q=q||(new Date()).getTime();i.jfull_load=q;return e},send:function(){if(!n){if(window.performance&&window.performance.timing&&typeof window.performance.timing.toJSON==="function"){j(i,window.performance.timing.toJSON())}f({perf:i})}n=true}}};if(a.test(document.readyState)&&document.body){e.perf.domReady()}else{if(typeof document.addEventListener==="function"){document.addEventListener("DOMContentLoaded",function(){e.perf.domReady()})}}window.weLogger=e;function h(){e.perf.fullLoad();e.perf.send()}if(document.readyState!=="complete"){if(typeof window.addEventListener==="function"){window.addEventListener("load",h)}else{if(window.attachEvent){window.attachEvent("onload",h)}}}}();
        </script>
        <script src="/yizu/one/Public/js/vendors_8a6040f.js"></script>
        <!--header中的js-->
        <script src="/yizu/one/Public/js/jquery.js"></script>
        <!-- If you'd like to support IE8 -->

        <script src="/yizu/one/Public/js/video_41dc322.js"></script>

        <script>
            weLogger.init({ platform : 'pc' });
            weLogger.perf.headStart( _jHeadStart );
        </script>
    <link rel="stylesheet" type="text/css" href="/yizu/one/Public/css/common_widget_a1e249e.css" /><link rel="stylesheet" type="text/css" href="/yizu/one/Public/css/invest_widget_5739d14.css" /><link rel="stylesheet" type="text/css" href="/yizu/one/Public/css/index_358777c.css" /><link rel="stylesheet" type="text/css" href="/yizu/one/Public/css/home_widget_9fe32bd.css" /></head>
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
        <li class="nav-item"><a target="_self" href="/yizu/one/index.php/home/logins/index">立即登录</a></li>
        <li class="nav-item-split"></li>
        <li class="nav-item"><a target="_self" href="/yizu/one/index.php/home/logins/register">快速注册</a></li>
        <li class="nav-item-split"></li>
        <?php }else{ ?>
        <li class="nav-item"><?php echo $users; ?></li>
        <li class="nav-item-split"></li>

        <li class="nav-item"><a target="_self" href="/yizu/one/index.php/home/logins/tuichu">退出</a></li>
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
            <img src="/yizu/one/Public/images/we-logo_79fb26f.png" alt="logo" />
        </a>
        <ul class="site-nav">
            <li class="user-item fn-clear">
            <?php
 $loign_img=session('loign_img'); ?>

                    <div class="user-avatar-container fn-left">
                    <?php
 if($loign_img){ ?>
                        <img src="/yizu/one/Public/<?php echo ($loign_img); ?>"  />
                    <?php }else{ ?>
                        <img src="/yizu/one/Public/images/default-avatar-96_dc38986.png"  />
                    <?php } ?>
                        <div class="avatar-masking"><a href="/account/index.action"></a></div>
                    </div>
                    <div class="user-name fn-clear">
                        <a href="/yizu/one/index.php/home/zhsz">我的账户</a>
                    </div>


            </li>
            <li class="channel-item"><a href="/yizu/one/index.php/home/index">首页</a></li>
            <li class="channel-item"><a href="/yizu/one/index.php/home/Ujihua/index">U计划</a></li>
            <li class="channel-item"><a href="/yizu/one/index.php/home/index/xinjihua">薪计划</a></li>
			<li class="channel-item"><a href="/yizu/one/index.php/home/creditor/zhais">债权</a></li>
            <li class="channel-item"><a href="/yizu/one/index.php/home/index/xinshou">新手专区</a></li>
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
        <?php if(is_array($piclist)): foreach($piclist as $key=>$vo): ?>"/yizu/one/Public/<?php echo ($vo["pict_name"]); ?>",<?php endforeach; endif; ?>
        ];
       hrefs=[
    <?php if(is_array($piclist)): foreach($piclist as $key=>$vo): ?>"<?php echo ($vo["pict_url"]); ?>",<?php endforeach; endif; ?>
    ];
     /* */
     //var hrefs=["http://www.wan.com/","https://www.baidu.com/","http://www.we.com/","http://www.mohui.site/","http://www.u17.com/"];
   // var pics=["/yizu/one/Public/img/1.jpg","/yizu/one/Public/img/2.jpg","/yizu/one/Public/img/3.jpg","/yizu/one/Public/img/4.jpg","/yizu/one/Public/img/5.jpg"];
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
                //给a标签加连接
                var value1=hrefs[key-1];
                //alert(value1);
                $("#lun").attr("href",value1);
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
            <a target="_blank" href="http://www.baidu.com" id="lun">
            <img src="pic/1.jpg" id="mohui" onerror="this.src='a.jpg'" width="1500px" height="400px" alt="辉哥" />
            </a>
        </div>
    </div>



<div class="fn-hide">

  <div id="weixin" class="p20 text-center">

    <img src="/yizu/one/Public/images/weixin_l.jpg" />

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


              <?php
 $loign_img=session('loign_img'); $users=session('users'); if(empty($users)){ ?>

                <div class="no-log-in">
                    <h2>人人贷成交额超过</h2>
                    <div class="money-wrap">
                        <span class="num-family">169</span>亿元
                    </div>
                    <p class="desc">已为用户赚取155,878万元，累计交易1,650万人次</p>
                    <a href="/yizu/one/index.php/home/logins/register" class="j-btn j-btn-orange " target="_blank" >注册领红包</a>
                </div>
        <?php }else{ ?>


                <div class="log-in">
                    <div class="header-img" id="headerImg">
                        <a href="/yizu/one/index.php/home/zhsz"><img  src="/yizu/one/Public/<?php echo ($loign_img); ?>" /></a>
                    </div>
                    <p class="desc">您好，<?php echo $users?>，欢迎来到易贷 !</p>
                    <a href="/yizu/one/index.php/home/zhsz/zhzl" class="j-btn j-btn-orange">我的账户</a>
                </div>


        <?php } ?>

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
                        <div class="number num-family"><span><?php echo ($ux["upay_annua"]); ?></span><i>%</i></div>
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
        <img src="/yizu/one/Public/img/4.png" alt="" width="250px" height="200px"/>
        <div class="text">每周工作日上午10点开始</div>
        <div class="more-wrap">
            <a href="/yizu/one/index.php/home/index/ujihua">查看更多&gt; </a>
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
                        <a id="J_count_time_a" target="_blank" class="j-btn j-btn-orange" href="<?php echo U("Ujihua/index1");?>" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>

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
                        <a id="J_count_time_b" target="_blank" class="j-btn j-btn-orange" href="<?php echo U("Ujihua/index2");?>" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>
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

                         <a id="J_count_time_c" target="_blank" class="j-btn j-btn-orange" href="<?php echo U("Ujihua/index3");?>" data-wait="1392" data-status="3">立即加入</a><?php endif; endif; ?>

                </div>
            </li>
        </ul>
    </div>
</div>


<div id="wdg-fixed-plan" class="main-section content-section index-card fixed-plan-card">
    <div class="card-caption">
        <img src="/yizu/one/Public/img/1.png" alt="" width="250px" height="200px"/>
        <div class="text">每月1-25号，上午10:30开放</div>
        <div class="more-wrap">
            <a href="/yizu/one/index.php/home/index/xinjihua">查看更多&gt; </a>
        </div>
    </div>
    <div class="card-detail">
        <!--<img src="/yizu/one/Public/img/3.png" alt="" width="830px" height="150"/>-->
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

                        <a id="J_count_time_fixed" target="_blank" class="j-btn j-btn-orange" href="/yizu/one/index.php/home/index/xinjihua" data-wait="3192" data-type="XJH" data-status="0">等待加入</a>

                </div>
            </li>
        </ul>
    </div>
</div>


<div id="wdg-loan-list" class="main-section content-section index-card loan-list-card">
    <div class="card-caption">

        <div class="more-wrap">
            <a target="_self" href="/yizu/one/index.php/home/creditor/zhais">查看更多&gt; </a>
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
<a class="fn-left w116 rrd-dimgray fn-text-overflow" title="<?php echo ($vo["creditor_name"]); ?>" target="_blank" href="/yizu/one/index.php/home/creditor/bid_money/creditor_id/<?php echo ($vo["creditor_id"]); ?>/login_id/<?php echo ($vo["login_id"]); ?>"><?php echo ($vo["creditor_name"]); ?></a>
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

<?php if(($vo["ed"] == 100) ): ?><a href="/yizu/one/index.php/home/creditor/bid_money/creditor_id/<?php echo ($vo["creditor_id"]); ?>/login_id/<?php echo ($vo["login_id"]); ?>" class="ui-button j-btn j-btn-orange ui-list-invest-button ui-list-invest-button-READY FIRST_READY">
        <span class="IN_PROGRESS">投标</span>
        <span class="READY FIRST_READY">已满标</span>
        <span class="OPEN">还款中</span>
        </a>
<?php else: ?>
        <a href="/yizu/one/index.php/home/creditor/bid_money/creditor_id/<?php echo ($vo["creditor_id"]); ?>/login_id/<?php echo ($vo["login_id"]); ?>" class="ui-button j-btn j-btn-orange ui-list-invest-button ui-list-invest-button-OPEN">
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
    <em class="ui-loantype {{ loanType }}" title="{{ loanTypeText }}"></em>
      <a class="fn-left w190 rrd-dimgray fn-text-overflow" href="/yizu/one/index.php/home" target="_blank" title={{ title }}>{{{ title }}}</a>
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


    <!--------------------footer--------------------->
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
                    <dd><img src="/yizu/one/Public/images/we-weixing_334069c.png" alt=""></dd>
                    <dt>关注微信账号</dt>
                </dl>
                <dl class="fn-left app-down">
                    <dd><img src="/yizu/one/Public/images/app-weixin_32107fa.png" alt=""></dd>
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

        <a class="fixed-icon" target="_blank" href="http://www.we.com/lend/calculator.action?prodType=Loanplan">
            <img src="/yizu/one/Public/img/a1.png" alt="" width="50px" height="51px"/>
        </a>
    </li>
    <li class="fixed-service">
        <a class="fixed-icon" href="javascript:" onclick="online_service();">
            <img src="/yizu/one/Public/img/a2.png" alt="" width="50px" height="51px"/>
        </a>
    </li>
    <li class="fixed-download">
        <a class="fixed-icon" href="javascript:">
            <img src="/yizu/one/Public/img/a3.png" alt="" width="50px" height="51px"/>
        </a>
        <div class="download-app-wrap-opacity">
            <div class="fixed-arrow"></div>
        </div>
        <div class="download-app-wrap">
            <h2>人人贷WE理财APP下载</h2>
            <div class="fn-clear">
                <div class="ewm-big">
                    <img src="/yizu/one/Public/images/app-weixin_32107fa.png" alt="二维码" />
                </div>
                <div class="download-btns">
                    <a target="_blank" class="ios" href="http://itunes.apple.com/us/app/id883561142?mt=8"><img src="/yizu/one/Public/images/a5.png" alt="ios下载" /></a>
                    <a target="_blank" href="http://www.we.com/event/download.action?type=apk"><img src="/yizu/one/Public/images/a6.png" alt="android下载" /></a>
                </div>
            </div>
        </div>
    </li>
    <li class="fixed-goTop">
        <a class="fixed-icon" href="javascript:">
            <img src="/yizu/one/Public/img/a4.png" alt="" width="50px" height="51px"/>
        </a>
    </li>
</ul>
<div class="fn-hide">
    <div id="weixin-content" class="p20 text-center">
        <img src="/yizu/one/Public/images/weixin_l.jpg" style="width:250px" />
        <p>微信扫一扫，人人贷We理财里动态全知道！</p>
    </div>
</div>
    <!--------------------footer--------------------->



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

    <script type="text/javascript" src="/yizu/one/Public/js/require_2f19223.js"></script><script type="text/javascript" src="/yizu/one/Public/js/common_widget_78d2def.js"></script><script type="text/javascript" src="/yizu/one/Public/js/index_b397526.js"></script><script type="text/javascript">;require(["common:widget/second-header/second-header"], function(header){
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