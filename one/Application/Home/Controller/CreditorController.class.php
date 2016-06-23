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

        $rows = $User->select();
        $bid = M('Bid');
        $data = [];
        //print_r($rows);die;
        foreach($rows as $k => $v){
            $mo = str_replace(',','',$rows[$k]['creditor_money']);
            $arrc  = $bid->where("creditor_id=". $rows[$k]['creditor_id'] )->select();
            //print_r($arrc);die;
            $money1=0;
            foreach ($arrc as $row) {
                $money1 =  $money1 + $row['bid_money'];
            }
            //echo $money1;die;
            $credlilv=intval($money1/$mo*100);
            //echo $credlilv;die;
            $data[$k][] =  $credlilv;
            $data[$k][] =  $rows[$k]['creditor_id'];
        }
        //print_r($data);die;
        for($j=0;$j<count($data);$j++){
            for($i=0;$i<count($arr);$i++){
                if($arr[$i]['creditor_id']==$data[$j][1]){
                    $arr[$i]['jindu']=$data[$j][0];
                }
            }
        }
       //print_r($arr);die;
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

    //显示-------------------
    public function zhaiqxq(){
        $sess=session('login_name');
        //print_r($sess);die;
        $sessid=$sess['login_id'];
        if(!empty($sessid)){
            $Login=M('Login');
            $bala=$Login->where("login_id=$sessid")->select();
            $balance1=$bala[0]['login_balance'];
        }

        //print_r($balance);die;
        $User=M('Bid');
        $id=$_GET['id'];
        //print_r($id);die;
        $jindu=$_GET['jindu'];
        //print_r($sessid);die;
        $arr2=$User->where("creditor_id=$id")->select();
        //计算投资的中金额
        $money1=0;
        for ($i=0;$i<count($arr2);$i++) {
            $money1=$arr2[$i]['bid_money']+$money1;
        }
        //计算进度
        $Userc = M('Creditor');
        $rows = $Userc->select();
        $bid = M('Bid');
        $data = [];
        //print_r($rows);die;
        foreach($rows as $k => $v){
            $mo = str_replace(',','',$rows[$k]['creditor_money']);
            $arrc  = $bid->where("creditor_id=". $rows[$k]['creditor_id'] )->select();
            //print_r($arrc);die;
            $money1=0;
            foreach ($arrc as $row) {
                $money1 =  $money1 + $row['bid_money'];
            }
            //echo $money1;die;
            $credlilv=intval($money1/$mo*100);
            //echo $credlilv;die;
            $data[$k][] =  $credlilv;
            $data[$k][] =  $rows[$k]['creditor_id'];
        }
        $arr10 = $Userc->where("creditor_id=$id")->select();
        for($j=0;$j<count($data);$j++){
            for($i=0;$i<count($arr10);$i++){
                if($arr10[$i]['creditor_id']==$data[$j][1]){
                    $arr10[$i]['jindu']=$data[$j][0];
                }
            }
        }
        //print_r($arr10);die;

        //没登陆且等于100%
        if(empty($sess) && $jindu==100)
        {
            //echo "没登陆且等于100%";die;
            $User = M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();
            //print_r($arr);die;
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
                $title=$arr[$i]['creditor_name'];
            }
            //echo $title;die;
            $this->assign("title", $title);
            $this->assign("money", $money);
            $this->assign("credlilv", $credlilv);
            $this->assign("money1", $money1);
            $this->assign("lilv", $lilv);
            $this->assign("deadline1", $deadline1);
            $this->display('zqxq');
        }
        //登陆且不等于100%
        else if(!empty($sess) && $jindu!=100)
        {
            $User=M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();

            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
                $title=$arr[$i]['creditor_name'];
            }

            $Userb=M('Bid');
            $arr2=$Userb->where("creditor_id=$id")->select();
            $money1=0;
            for ($i=0;$i<count($arr2);$i++) {
                $money1=$arr2[$i]['bid_money']+$money1;
            }
            $moneysub=str_replace(',','',$money);
            $moneys=$moneysub-$money1;
            //print_r($balance);die;
            $this->assign("data",$arr);
            $this->assign("title", $title);
            $this->assign("money", $money);
            $this->assign("moneys", $moneys);
            $this->assign("lilv", $lilv);
            $this->assign("jindu", $arr10);
            $this->assign("deadline", $deadline);
            $this->assign("balance1", $balance1);
            $this->display('zqxqtb');

        }
        //没登陆且不等于100%
        else if(empty($sess) && $jindu!=100)
        {
            $User=M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id=$id")->select();
            //print_r($id);die;
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
                $title=$arr[$i]['creditor_name'];
            }


            $Userb=M('Bid');
            $arr2=$Userb->where("creditor_id=$id")->select();
            $money1=0;
            for ($i=0;$i<count($arr2);$i++) {
                $money1=$arr2[$i]['bid_money']+$money1;
            }
            $moneysub=str_replace(',','',$money);
            $moneys=$moneysub-$money1;

           // print_r($arr10);die;
            $this->assign("money", $money);
            $this->assign("title", $title);
            $this->assign("money1", $money1);
            $this->assign("moneys", $moneys);
            $this->assign("lilv", $lilv);
            $this->assign("jindu", $arr10);
            $this->assign("deadline", $deadline);
            $this->assign("balance1", $balance1);
            $this->display('zqxqd');

        }
        //登陆且等于100%
        else if(!empty($sess) && $jindu==100)
        {
            //echo "登陆且等于100%";die;
            $User = M('Creditor');
            $arr=$User
                ->join("yi_login on yi_creditor.login_id=yi_login.login_id")
                ->where("creditor_id = $id")->select();
            for ($i=0;$i<count($arr);$i++) {
                $money=$arr[$i]['creditor_money'];
                $lilv=$arr[$i]['creditor_lilv'];
                $deadline=$arr[$i]['creditor_deadline'];
                $title=$arr[$i]['creditor_name'];
            }
            $this->assign("data", $arr);
            $this->assign("money", $money);
            $this->assign("title", $title);
            $this->assign("money1", $money1);
            $this->assign("lilv", $lilv);
            $this->assign("jindu", $arr10);
            $this->assign("deadline", $deadline);
            $this->assign("balance1", $balance1);
            $this->display('zqxqdl');
        }
    }
    //显示投标页面
    public function zqxqtb(){
        $sess=session('login_name');
        $sessid=$sess['login_id'];
        $Login=M('Login');
        $bala=$Login->where("login_id=$sessid")->select();
        $balance1=$bala[0]['login_balance'];


        $id=$_GET['login_id'];
        $User=M('Login');
        //计算进度
        $Userc = M('Creditor');
        $rows = $Userc->select();
        $bid = M('Bid');
        $data = [];
        //print_r($rows);die;
        foreach($rows as $k => $v){
            $mo = str_replace(',','',$rows[$k]['creditor_money']);
            $arrc  = $bid->where("creditor_id=". $rows[$k]['creditor_id'] )->select();
            //print_r($arrc);die;
            $money1=0;
            foreach ($arrc as $row) {
                $money1 =  $money1 + $row['bid_money'];
            }
            //echo $money1;die;
            $credlilv=intval($money1/$mo*100);
            //echo $credlilv;die;
            $data[$k][] =  $credlilv;
            $data[$k][] =  $rows[$k]['creditor_id'];
        }
        $arr10 = $Userc->where("creditor_id=$id")->select();
        for($j=0;$j<count($data);$j++){
            for($i=0;$i<count($arr10);$i++){
                if($arr10[$i]['creditor_id']==$data[$j][1]){
                    $arr10[$i]['jindu']=$data[$j][0];
                }
            }
        }

        $creditor_id=$_GET['creditor_id'];
        $arr=$User
            ->join("yi_creditor on yi_login.login_id=yi_creditor.login_id")
            ->where("creditor_id = $id")->select();
        for ($i=0;$i<count($arr);$i++) {
            $money=$arr[$i]['creditor_money'];
            $lilv=$arr[$i]['creditor_lilv'];
            $deadline=$arr[$i]['creditor_deadline'];
            $creditor_id=$arr[$i]['creditor_id'];
            $balance=$arr[$i]['login_balance'];
        }
        $Userb=M('Bid');
        $arr2=$Userb->where("creditor_id=$id")->select();

        $money1=0;
        for ($i=0;$i<count($arr2);$i++) {
            $money1=$arr2[$i]['bid_money']+$money1;
        }
        $moneysub=str_replace(',','',$money);
        $moneys=$moneysub-$money1;

        //计算动态账户余额
        $this->assign("data", $arr);
        $this->assign("money", $money);
        $this->assign("moneys", $moneys);
        $this->assign("lilv", $lilv);
        $this->assign("jindu", $arr10);
        $this->assign("deadline", $deadline);
        $this->assign("creditor_id", $creditor_id);
        $this->assign("login_id", $_SESSION['login_name']['login_id']);
        $this->assign("balance1", $balance1);
        $this->display();
    }

    public function bid_money(){
        $sess=session('login_name');
        $sessid=$sess['login_id'];
        //print_r($sessid);die;
        if(empty($sessid)){
            $this->redirect('Logins/index');
        }else{

        $Login=M('Login');
        $bala=$Login->where("login_id=$sessid")->select();
        $balance1=$bala[0]['login_balance'];

        $User=M('Bid');
        $data['creditor_id']=$_GET['creditor_id'];
        $data['login_id']=$_GET['login_id'];
        $data['bid_money']=$_POST['money'];
        //print_r($data);die;
        if($User->add($data)){
            $Userlo=M('Login');
            $data2 = $Userlo->where("login_id=".$sessid)->find();
            //print_r($data2);die;
            $data1=$data2['login_balance']-$data['bid_money'];
            //print_r($data1);die;
            $Userlo-> where("login_id=".$sessid)->setField('login_balance',"$data1");
            $this->redirect('Creditor/zqxqtb',array(
                'creditor_id' => $_GET['creditor_id'],
                'login_id' => $_GET['login_id']
            ));
        }else{
            $this->error('投标失败');
        }
        }
    }

    public function zqadd(){
        $this->display();
    }
    public function add(){
        $sess=session('login_name');
        //print_r($sess);die;
        $sessid=$sess['login_id'];
        $User = M('Creditor');
        $date['login_id']=$sessid[0]['login_id'];
        $date['creditor_name']=$_POST['creditor_name'];
        $date['creditor_lilv']=number_format($_POST['creditor_lilv'],2);
        $date['creditor_money']=number_format($_POST['creditor_money'],2);
        $date['creditor_deadline']=$_POST['creditor_deadline'];
        $date['creditor_time']=time();
        //print_r($date);die;
        if($User->add($date)){
            $this->redirect('Creditor/zhais');
        }else{
            $this->error();
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
        //print_r($arr1);die;
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
                $let_id=$arr[$i]['let_id'];
            }
            $this->assign("data", $arr);
            $this->assign("lilv", $lilv);
            $this->assign("money", $money);
            $this->assign("qixian", $qixian);
            $this->assign("let_id", $let_id);
            $this->assign("login_id", $_SESSION['login_name']['login_id']);
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
                $login_balance=$arr[$i]['login_balance'];
                $let_id=$arr[$i]['let_id'];
            }
            $this->assign("data", $arr);
            $this->assign("lilv", $lilv);
            $this->assign("money", $money);
            $this->assign("qixian", $qixian);
            $this->assign("login_balance", $login_balance);
            $this->assign("let_id", $let_id);
            $this->assign("login_id", $_SESSION['login_name']['login_id']);
            $this->display('zrxqtb');
        }
    }
    //购买债权
    public function goumai(){
        $User=M('Buy');
        $data['let_id']=$_GET['let_id'];
        $data['login_id']=$_GET['login_id'];
        $data['buy_num']=$_POST['buy_num'];
        if($User->add($data)){
            $this->redirect('Creditor/zhaiz',array(
                'let_id' => $_GET['let_id'],
                'login_id' => $_GET['login_id'],
            ));
        }else{
            $this->error('购买失败');
        }
    }
}
