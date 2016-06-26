<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $sess=session('login_name');
        //print_r($sess);die;
        $sessid=$sess['login_id'];
        //echo $sessid;die;
        $time=time();
        $picture=M('picture');
        //前台轮播图
        $piclist=$picture->order('pict_time DESC')->limit(5)->select();
        //前台公司动态
        $trends=M("trends");
        $trend=$trends->order('trends_time DESC')->limit(4)->select();
        $trend1=$trends->limit(4)->select();
        //债权
        $creditor=M("creditor");
        $credit=$creditor->order('creditor_id DESC')->limit(4)->select();
        foreach ($credit as $k => $v) {
            //借款总金额
            $zje=$v['creditor_money'];
            $zje=str_replace(',','',$zje);
            //借款活动id，用来查询记录表的内容
            $creditor_id=$v['creditor_id'];
            //实例化记录表
            $bid=M("bid");
            $jlb = $bid->where("creditor_id='$creditor_id'")->select();
            //循环记录表，计算每个债权已投资的总价
            $jmoney=0;
            foreach($jlb as $k2=>$v2){
                $jmoney+=$v2['bid_money'];
            }
            //echo $zje."</br>";
            //echo $jmoney."</br>";
            $ed=($jmoney/$zje)*100;
            //echo $ed."</br>";
            $ned=intval($ed);
            $credit[$k]['ed']=$ned;
            $credit[$k]['login_id']=$sessid;
        }
        //前台首页之薪计划
        $payplan=M("payplan");
        $xinplan=$payplan->order("payplan_id DESC")->limit(1)->find();
        //U计划
        $upay_content=M("upay_content");
        $ua=$upay_content->where("up_id='1'")->order("upay_id DESC")->limit(1)->find();
        $fq=$ua['upay_financialstime'];
        $yn=$fq-$time;
        $ua['yn']=$yn;
        $ub=$upay_content->where("up_id='2'")->order("upay_id DESC")->limit(1)->find();
        $ub['yn']=$yn;
        $uc=$upay_content->where("up_id='3'")->order("upay_id DESC")->limit(1)->find();
        $uc['yn']=$yn;
        $ux=$upay_content->where("up_id='4'")->order("upay_id DESC")->limit(1)->find();
        $ux['yn']=$yn;
        //print_r($ua);die;
        //die;
        $this->assign('piclist',$piclist);//轮播图
        $this->assign('trend',$trend);  //公司动态
        $this->assign('trend1',$trend1);  //公司动态
        $this->assign('credit',$credit);//债权
        $this->assign('xinplan',$xinplan);//薪计划
        $this->assign('ua',$ua);//U计划A
        $this->assign('ub',$ub);//U计划B
        $this->assign('uc',$uc);//U计划C
        $this->assign('ux',$ux);//U计划C
        $this->display('index');
    }
    //公司动态
    public function gsdtlist(){
        $trends_id=$_GET['trends_id'];
        $trends = M("trends");
        $pic=$trends->where("trends_id='$trends_id'")->select();
        $this->assign('gsdts',$pic);
        $this->display('gsdtlist');
    }
    public function gsdts()
    {
        $trends=M("trends");
        isset($_GET['p'])?$p=$_GET['p']:$p=1;
        $list = $trends->order('trends_time DESC')->page($p.',5')->select();
        $this->assign('gsdts',$list);// 赋值数据集
        $count      = $trends->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display('gsdt'); // 输出模板
    }
    public function jijin(){
        $this->display('jijin');
    }
    public function ujihua(){
        $this->display('ujihua');
    }
    public function xinjihua(){
        //echo 1;die;
        $this->redirect('Xin/index');
    }
    public function zq(){
        $this->display('zhaiquan');
    }
    public function xinshou(){
        $this->display('xinshou');
    }
    public function uxq(){
        $this->display('ujihuaxq');
    }
}