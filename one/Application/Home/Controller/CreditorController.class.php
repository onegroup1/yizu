<?php
namespace Home\Controller;
use Think\Controller;
class CreditorController extends Controller {
    //显示散标债权前台页面
    public function zhais(){
        $User = M('Creditor');
        $count= $User->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $arr = $User->order('creditor_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //print_r($arr);die;
        for ($i=0;$i<count($arr);$i++) {
            $arr[$i]['cred']=intval($arr[$i]['yet_bid']/$arr[$i]['creditor_money']*100);
        }
        $arr1 = $User->select();
        $count=count($arr1);
        $moneyone=0;
        for ($i=0;$i<count($arr1);$i++) {
            $moneyone=$arr1[$i]['creditor_money']+$moneyone;
        }
        $this->assign("data", $arr);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("dat", $moneyone);
        $this->assign("count", $count);
        $this->display();
    }


    //显示
    public function zhaiqxq(){
        $id=$_GET['id'];
        $cred=$_GET['cred'];
        $sess=$_SESSION['users'];
        //没登陆且等于100%
        if(empty($sess) && $cred==100){
            //echo "没登陆且等于100%";die;
            $User = M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
            }
            $this->assign("money", $money);
            $this->assign("lilv", $lilv);
            $this->assign("deadline", $deadline);
            $this->display('zqxq');
            //登陆且不等于100%
        }else if(!empty($sess) && $cred!=100){
            $User=M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();
            //print_r($arr);die;
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
            }
            $this->assign("data",$arr);
            $this->assign("money", $money);
            $this->assign("lilv", $lilv);
            $this->assign("deadline", $deadline);
            $this->display('zqxqtb');
            //没登陆且不等于100%
        }else if(empty($sess) && $cred!=100){
            $User=M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
            }
            $this->assign("money", $money);
            $this->assign("lilv", $lilv);
            $this->assign("deadline", $deadline);
            $this->display('zqxqd');
            //登陆且等于100%
        }else if(!empty($sess) && $cred==100){
            //echo "登陆且等于100%";die;
            $User = M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id = $id")->select();
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
            }
            $this->assign("data", $arr);
            $this->assign("money", $money);
            $this->assign("lilv", $lilv);
            $this->assign("deadline", $deadline);
            $this->display('zqxqdl');
        }
    }
    //显示投标页面
    public function zqxqtb(){
        $id=$_GET['login_id'];
        $User=M('Login');
        $creditor_id=$_GET['creditor_id'];
        //$arr=$User->select();
        $arr=$User
            ->join("yi_creditor on yi_login.login_id=yi_creditor.login_id")
            ->where("creditor_id = $id")->select();
        for ($i=0;$i<count($arr);$i++) {
            $money=$arr[$i]['creditor_money'];
            $lilv=$arr[$i]['creditor_lilv'];
            $deadline=$arr[$i]['creditor_deadline'];
        }
        $this->assign("data", $arr);
        $this->assign("money", $money);
        $this->assign("lilv", $lilv);
        $this->assign("deadline", $deadline);
        $this->display();

    }
    public function bid_money(){
        $User=M('Bid');
        $data['creditor_id']=$_GET['creditor_id'];
        $data['login_id']=$_GET['login_id'];
        $data['bid_money']=$_POST['money'];
        if($User->add($data)){
            $this->success('投标成功');
        }else{
            $this->error('投标失败');
        }
    }

    //显示债权转让页面
    public function zhaiz(){
        $User = M('Creditor_let');
        $count= $User->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $arr = $User->order('let_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $arr1 = $User->select();
        $count=count($arr1);
        $moneyone=0;
        for ($i=0;$i<count($arr1);$i++) {
            $moneyone=$arr1[$i]['creditor_money']+$moneyone;
        }
        $this->assign("data", $arr);
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("dat", $moneyone);
        $this->assign("count", $count);
        $this->display();
    }
    public function zrxq(){
        $id=$_GET['id'];
        $sess=$_SESSION['users'];
        if(empty($sess)){
            //echo "没登陆";die;
            $User = M('Creditor_let');
            $arr=$User
                ->join("yi_login on yi_creditor_let.login_id=yi_login.login_id")
                ->where("let_id = $id")->select();
            //print_r($arr);die;
            for ($i=0;$i<count($arr);$i++) {
                $lilv=$arr[$i]['let_lilv'];
                $money=$arr[$i]['let_money'];
                $qixian=$arr[$i]['let_qixian'];
            }
            $this->assign("data", $arr);
            $this->assign("lilv", $lilv);
            $this->assign("money", $money);
            $this->assign("qixian", $qixian);
            $this->display('zrxqd');
        }else{
            //echo "登陆";die;
            $User = M('Creditor_let');
            $arr=$User
                ->join("yi_login on yi_creditor_let.login_id=yi_login.login_id")
                ->where("let_id = $id")->select();
            //print_r($arr);die;
            for ($i=0;$i<count($arr);$i++) {
                $lilv=$arr[$i]['let_lilv'];
                $money=$arr[$i]['let_money'];
                $qixian=$arr[$i]['let_qixian'];
            }
            $this->assign("data", $arr);
            $this->assign("lilv", $lilv);
            $this->assign("money", $money);
            $this->assign("qixian", $qixian);
            $this->display('zrxqtb');
        }
    }

}
