<?php

namespace Home\Controller;
use Think\Controller;
include("../class.phpmailer.php");
include("../class.smtp.php");
class ZhszController extends Controller {
   public function index(){
    	$users=session('users');
    	if(empty($users)){
    		//$this->error("请先登录",U("Logins/index"));
            $this->redirect('Logins/index');
    	}else{
    		$login=M('login');
    		$arr=$login->where("login_nickname='$users'")->find();
    		//print_r($arr);
    		$this->assign('arr',$arr);
    		$this->display('zhsz');
    	}
   }
   //显示文件上传
   public function wenjian(){
        $users=session('users');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     1024*1024*1024 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath="./";
        $upload->savePath  =      './Public/images/';   // 上传文件
        $info   =   $upload->upload();
        //print_r($info);die;
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
                }
        $myfile=$info['myfile']['savepath'].$info['myfile']['savename'];
        //echo $myfile;die;
        $files=substr($myfile,9);
        //echo $files;

        $upd=M('login');
        $upd->login_img="$files";
        $up=$upd->where("login_nickname='$users'")->save();
        if($up){
            session('loign_img',$files);
            $this->redirect('zhsz/index');
        }else{
            $this->error("头像上传失败");
        }
   }
   //基金账户
   public function jjzh(){
        $this->display("jjzh");
   }
   //债权
   public function zhaiq()
   {
       $login = M("login"); // 实例化User对象、
       //取出用户名
       $users = session('users');
       //查出用户信息
       $zh = $login->where("login_nickname='$users'")->find();
       //print_r($zh);die;
       //取出用户id
       $uid = $zh['login_id'];
       $zhai=$_GET['zhai'];


       if ($zhai == 1) {
           //查询u计划记录表
           $upayplan=M("upay_upayplan");
           $ujilu = $upayplan->where("login_id='$uid'")->select();
           //print_r($ujilu);
           //取出
           $umoney=0;
           foreach($ujilu as $k3=>$v3){
               //投资金额
               $umoney+=$v3['upayplan_salary'];//投资u计划总金额
               //取出所有计划id
               $upay_id[]=$v3['upay_id'];
           }
           //取出所属u计划id
           $upay_id=array_unique($upay_id);
           sort($upay_id);
           //print_r($upay_id);
           $unum=count($upay_id);
           $upaymoney = 0;
           for ($i = 0; $i < $unum; $i++) {
               //去除单一记得记录id
               $upayid = $upay_id[$i];
               //实例化债权记录表，根据记录id取出
               $upay=M("upay_content");
               $ujh = $upay->where("upay_id='$upayid'")->select();
               //print_r($jlb);
               //循环记录表，计算每个债权的总价
               $jmoney = 0;
               foreach ($ujh as $k2 => $v2) {
                   $utime = $v2['upay_statime'];
                   $u_time = strtotime($utime);
                   echo $u_time."</br>";
                   //计算出两个时间的差值
//                   $cztime = $dtime - $zbtime;
//                   //计算距离活动天
//                   $ktime = floor($cztime / 3600 / 24);
//                   $timek = $ktime - 7;
//                   //echo $timek."</br>";
//                   //取出投资总金额
//                   $jmoney = $v['jine'];
//                   //取出利率
//                   $zli = $v['creditor_lilv'];
//                   $zli1 = $zli / 100;
//                   //echo $zli1;
//                   //计算利率
//                   $znlv = $jmoney * $zli1;
//                   $zrlv = $znlv / 365;
//                   if ($timek <= 0) {
//                       $zrlv = 0;
//                   } else {
//                       $zrlv = $zrlv * $timek;
//                   }
//                   $zrlv = round($zrlv, 2);
//                   //echo $zrlv."</br>";
//                   $yz += $zrlv;
//                   //echo $yz."</br>";

               }
           }
           //echo $umoney;
           $this->display("ujihua");
       } elseif ($zhai == 2) {

           $this->display("xinjihua");
       } else {
       //取出用户余额
       $yue = $zh['login_balance'];
       //获取当前时间
       $dtime = time();
       //echo $dtime;
       //计算债权
       //实例化债权记录表
       $bid = M("bid");
       //根据用户id查出债权用户表中该用户的所有的购买债权记录
       $mon0 = $bid->where("login_id='$uid'")->select();
       //print_r($mon0);die;
       //定义一个变量计算当前用户的所有购买债权的总金额
       $zq_money = 0;
       foreach ($mon0 as $k1 => $v1) {
           //取出债权表中当前用户的所有购买的id
           $cr[] = $v1['creditor_id'];
           $zid = $v1['creditor_id'];
           //实例化债权表
           $ditor = M("creditor");
           $zhai1[] = $ditor->where("creditor_id='$zid'")->select();
           //债权总金额
           $zq_money += $v1['bid_money'];
       }
       //print_r($zhai1);die;
       //去除重复的记录id
       $cr1 = array_unique($cr);
       //排序
       sort($cr1);
      // $cnum=count($cr1);
       //print_r($cr1);die;
       $cnum = count($cr1);
       $yz = 0;
       for ($i = 0; $i < $cnum; $i++) {
           //去除单一记得记录id
           $ji_id = $cr1[$i];
           //实例化债权记录表，根据记录id取出
           $jlb = $bid->where("creditor_id='$ji_id'")->select();
           //print_r($jlb);
           //循环记录表，计算每个债权的总价
           $jmoney = 0;
           foreach ($jlb as $k2 => $v2) {
               $jmoney += $v2['bid_money'];

           }
           //echo $jmoney."</br>";
           //实例化债权表，根据记录id取出
           $ditor = M("creditor");
           //根据记录表取出债权表中的数据
           $zhb = $ditor->where("creditor_id='$ji_id'")->select();
           //print_r($zhb);
           $zhb[0]['jine'] = $jmoney;
           //print_r($zhb);
           foreach ($zhb as $k => $v) {
               //取出债权表时间
               $ztime = $v['creditor_time'];
               $zbtime = strtotime($ztime);
               //echo $ztime."</br>";
               //计算出两个时间的差值
               $cztime = $dtime - $zbtime;
               //计算距离活动天
               $ktime = floor($cztime / 3600 / 24);
               $timek = $ktime - 7;
               //echo $timek."</br>";
               //取出投资总金额
               $jmoney = $v['jine'];
               //取出利率
               $zli = $v['creditor_lilv'];
               $zli1 = $zli / 100;
               //echo $zli1;
               //计算利率
               $znlv = $jmoney * $zli1;
               $zrlv = $znlv / 365;
               if ($timek <= 0) {
                   $zrlv = 0;
               } else {
                   $zrlv = $zrlv * $timek;
               }
               $zrlv = round($zrlv, 2);
               //echo $zrlv."</br>";
               $yz += $zrlv;
               //echo $yz."</br>";
           }
       }
       //总余额
       $zye = $zq_money + $yue;
       //echo $zye;die;
       //债权百分比
       $zb = $zq_money / $zye * 100;
       $zb = round($zb, 0);
       //可用余额百分比
       $ye = $yue / $zye * 100;
       $ye = round($ye, 0);
       // echo $zb;die;
       $zh['mo1'] = $zq_money;
       $zh['zye'] = $zye;
       $zh['zb'] = $zb;
       $zh['ye'] = $ye;
       $zh['yz'] = $yz;
       $zh['cnum'] = $cnum;
       //判断
       //print_r($zh);die;
           $this->assign("zl", $zh);
           $this->display("zhaiq");
       }
 }
//   public function zhaiquan(){
//        $this->display("zhaiquan");
//   }

















   //账户总览
   public function zhzl(){
       $login = M("login"); // 实例化User对象、
       //取出用户名
       $users=session('users');
       //查出用户信息
       $zh = $login->where("login_nickname='$users'")->find();
       //print_r($zh);die;
       //取出用户id
       $uid=$zh['login_id'];
       //取出用户余额
       $yue=$zh['login_balance'];
       //获取当前时间
       $dtime=time();
       //echo $dtime;
                        //计算u计划
       $upayplan=M("upay_upayplan");
       $ujilu = $upayplan->where("login_id='$uid'")->select();
       //print_r($ujilu);
       //print_r($ujilu);die;
       //取出
       $umoney=0;
       foreach($ujilu as $k3=>$v3){
           //投资金额
           $umoney+=$v3['upayplan_salary'];//投资u计划总金额
           //取出所有计划id
           $upay_id[]=$v3['upay_id'];
       }
       $upay_id=array_unique($upay_id);
       sort($upay_id);
       //print_r($upay_id);
       $unum=count($upay_id);
       $upaymoney = 0;
       $uo=0;
       $arr2=array();
       for ($i = 0; $i < $unum; $i++) {
           //去除单一记得记录id
           $upayid = $upay_id[$i];
           //取出每个活动投资总钱数
           //根据记录表取出债权表中的数据
           $ub = $upayplan->where("upay_id='$upayid'")->select();
           //print_r($ub);
           $umoney0=0;
           foreach($ub as $k5=>$v5){
               $umoney0+=$v5['upayplan_salary'];
               //echo $umoney0;
           }
           //echo $umoney0."</br>";
           //$zhb[0]['jine']=$jmoney;
           //实例化债权记录表，根据记录id取出
           $upay=M("upay_content");
           $ujh = $upay->where("upay_id='$upayid'")->select();
           $ujh[0]['u_money']=$umoney0;
           //print_r($ujh);
           //循环记录表，计算每个债权的总价
           $jmoney = 0;

           foreach ($ujh as $k2 => $v2) {
               $qixian=$v2['upay_periodss'];
               //echo $qixian;
               $utime = $v2['upay_statime'];
               $u_time = strtotime($utime);
               //echo $utime."</br>";
               //计算出两个时间的差值
                   $udtime = $dtime - $u_time;
                   //计算距离活动天
                   $uktime = floor($udtime / 3600 / 24);
                   $uimek = $uktime - 7;
                  // echo $timek."</br>";
                   //取出投资总金额
                   $umoney = $v2['u_money'];
               //echo $umoney."</br>";
                   //取出利率
                   $uli = $v2['upay_annua'];
                   $uli1 = $uli / 100;
                   //echo $uli1."</br>";
                   //计算利率
                   $unlv = $umoney * $uli1;
               //echo $unlv."</br>";
                   $qixian1=$qixian*30;

                   $urlv = $unlv / $qixian1;
               //echo $urlv."</br>";
                   if ($uimek <= 0) {
                       $urlv = 0;
                   } else {
                       $urlv = $urlv * $uimek;
                   }
//                   $zrlv = round($urlv, 2);
//                   echo $zrlv."</br>";
//                   $uo+=$zrlv;
//                   echo $uo."</br>";

           }
           $zrlv = round($urlv, 2);
           //echo $zrlv."</br>";
           $uo+=$zrlv;
           //echo $uo."</br>";
           $arr2[$i]['uplan']="u计划";
           $arr2[$i]['utime']=$utime;
           $arr2[$i]['jine']=$umoney;
           $arr2[$i]['zuan']=$zrlv;
       }
       //print_r($arr2);
       //echo $uo;
                                                                                           //计算薪计划
       $payjilu=M("payjilu");
       $xinjilu = $payjilu->where("user_id='$uid'")->select();
       //print_r($ujilu);
       //取出
       $arr=array();
       $xinmoney=0;
       $xmoney0=0;
       foreach($xinjilu as $k4=>$v4){
           //投资金额
           $xinmoney+=$v4['payplan_money'];//投资薪计划总金额
           //取出所有计划id
           $xinpay_id=$v4['payplan_id'];
           $payplan=M("payplan");
           $xplan = $payplan->where("payplan_id='$xinpay_id'")->find();
           $annua=$xplan['payplan_annua'];
           $xyj=$annua*0.01;
           $xnz=$xinmoney*$xyj;
           //求已获得钱数
           $xtime=$v4['payplan_startime'];
           $xdtime=time();
           $xtime=strtotime($xtime);
           //echo $ztime."</br>";
           //计算出两个时间的差值
           $cztime=$xdtime-$xtime;
           //计算距离活动天
           $xtimes=floor($cztime/3600/24);
           $xdz=$xtimes*($xnz/365);
           $xdz=round($xdz,2);
           $xmoney0+=$xdz;

           //echo $xtimes."<br>";
           $arr[$k4]['xd']=$xdz;
           $arr[$k4]['xin']="薪计划";
           $arr[$k4]['xzmoney']=$xinmoney;
           $arr[$k4]['xtime']=$v4['payplan_startime'];
       }
       //print_r($arr);die;
       //print_r($xinmoney);die;
//       $xid=array_unique($xinpay_id);
       //排序
 //      sort($xid);
       //print_r($xid);die;
//       $xnum=count($xid);
//       for($i=0;$i<$xnum;$i++){
//           $x_id=$xid[$i];
//           $payplan=M("payplan");
//           $xplan = $payplan->where("payplan_id='$x_id'")->select();
//           $xplan[0]['xmoney']=$xinmoney;
//           print_r($xplan);
//           //循环
//           $jmoney=0;
////           foreach($xplan as $k5=>$v5){
////               $p_annua=$v5['payplan_annua'];
////               $fen=$p_annua*0.01;
////               //echo $x_id*$fen;
////
////           }
//       }
       //die;
                                                                                     //计算债权
       //实例化债权记录表
       $bid=M("bid");
       //根据用户id查出债权用户表中该用户的所有的购买债权记录
       $mon0 = $bid->where("login_id='$uid'")->select();
       //print_r($mon0);die;
       //定义一个变量计算当前用户的所有购买债权的总金额
       $zq_money=0;
       foreach($mon0 as $k1=>$v1){
           //取出债权表中当前用户的所有购买的id
           $cr[]=$v1['creditor_id'];
           $zid=$v1['creditor_id'];
           //实例化债权表
           $ditor=M("creditor");
           $zhai1[] = $ditor->where("creditor_id='$zid'")->select();
           //债权总金额
           $zq_money+=$v1['bid_money'];
       }
       //print_r($zhai1);die;
       //去除重复的记录id
       $cr1=array_unique($cr);
       //排序
       sort($cr1);
       //print_r($cr1);die;
       $cnum=count($cr1);
       $yz=0;
       $arr1=array();
        for($i=0;$i<$cnum;$i++){
            //去除单一记得记录id
            $ji_id=$cr1[$i];
            //实例化债权记录表，根据记录id取出
            $jlb = $bid->where("creditor_id='$ji_id'")->select();
           //print_r($jlb);
            //循环记录表，计算每个债权的总价
            $jmoney=0;
            foreach($jlb as $k2=>$v2){
                $jmoney+=$v2['bid_money'];
            }
            //print_r($jlb);die;
            //echo $jmoney."</br>";
            //实例化债权表，根据记录id取出
            $ditor=M("creditor");
            //根据记录表取出债权表中的数据
            $zhb = $ditor->where("creditor_id='$ji_id'")->select();
            //print_r($zhb);
            $zhb[0]['jine']=$jmoney;
            //print_r($zhb);

            foreach($zhb as $k=>$v){
                //取出债权表时间
                $ztime=$v['creditor_time'];
                $zbtime=strtotime($ztime);
                //echo $ztime."</br>";
                //计算出两个时间的差值
                $cztime=$dtime-$zbtime;
                //计算距离活动天
                $ktime=floor($cztime/3600/24);
                $timek=$ktime-7;
                //echo $timek."</br>";
                //取出投资总金额
                $jmoney=$v['jine'];
                //取出利率
                $zli=$v['creditor_lilv'];
                $zli1=$zli/100;
                //echo $zli1;
                //计算利率
                $znlv=$jmoney*$zli1;
                $zrlv=$znlv/365;
                if($timek<=0){
                    $zrlv=0;
                }else{
                    $zrlv=$zrlv*$timek;
                }
                $zrlv=round($zrlv,2);
                //echo $zrlv."</br>";
                $yz+=$zrlv;
                //echo $yz."</br>";
            }
            $arr1[$i]['zhai']="债权";
            $arr1[$i]['zrlv']=$zrlv;
            $arr1[$i]['zmoney']=$jmoney;
            $arr1[$i]['stime']=$ztime;
        }
      // print_r($arr1);
       $zongmoney=$xmoney0+$yz+$uo;
      //die;
       //总余额
       $zye=$zq_money+$yue;
       //echo $zye;die;
       //债权百分比
       $zb=$zq_money/$zye*100;
       $zb=round($zb,0);
       //可用余额百分比
       $ye=$yue/$zye*100;
       $ye=round($ye,0);
       //echo $ye;
      // echo $zb;die;
       $zh['mo1']=$zq_money;
       $zh['zye']=$zye;
       $zh['zb']=$zb;
       $zh['ye']=$ye;
       $zh['yz']=$zongmoney;
       $zh['umoney']=$umoney;
       $zh['xinmoney']=$xinmoney;
       //判断$zhb
       //print_r($zh);die;
       //print_r($jlb);die;
       $this->assign("arr",$arr);
       $this->assign("zl",$zh);
        $this->display("zhzl");
   }





















   //个人中心
    public function grzx(){
        $login = M("login"); // 实例化User对象、
        $users=session('users');
        $data1 = $login->where("login_nickname='$users'")->find();
        //print_r($data);
        // die;
        $this->assign("logins",$data1);
        $this->display("xqy");
    }
    //个人中心
    public function xqy(){
        $id=$_GET['status'];

        $loginid=$_GET['loginid'];
        $login = M("login"); // 实例化User对象
        // 查找status值为1name值为think的用户数据
        $data1 = $login->where("login_id='$loginid'")->find();
        //print_r($data);
       // die;
        $this->assign("logins",$data1);
        if($id=='1'){
            $this->display("xqy");
        }elseif($id=='2'){
            //修改密码
            $this->display("password");
        }elseif($id=='3'){
            //绑定手机
            $this->display("phone");
        }elseif($id=='4'){
            //实名认证
            $this->display("idcard");
        }elseif($id='5')
            $this->display("email");
    }
    //信息完善之入库
    public function emailadd(){
        $data=I("post.");
        $users=session('users');
        $login=M("login");
        $up=$login->where("login_nickname='$users'")->save($data);
        if($up){
            $this->redirect('zhsz/index');
        }else{
            $this->error("信息完善失败");
        }
    }
    public function password(){
        $pwd=I("post.login_pwd");
        $npwd=I("post.login_newpwd");
        if($pwd!=$npwd){
            $this->error("新密码和确认密码不一致");
        }else{
            $users=session('users');
            $login=M("login");
            $data['login_pwd']=$pwd;
            $up=$login->where("login_nickname='$users'")->save($data);
            if($up){
                $this->redirect('zhsz/index');
            }else{
                $this->error("密码修改失败");
            }
        }
    }
    //实名认证
    public function idcard()
    {
        $data=I("post.");
        $users=session('users');
        $login=M("login");
        $up=$login->where("login_nickname='$users'")->save($data);
        if($up){
            $this->redirect('zhsz/index');
        }else{
            $this->error("实名认证失败");
        }

    }
    //修改手机号
    public function phone()
    {
        $pwd1=I("post.password");
        $users=session('users');
        $login=M("login");
        print_r($data);
        //查询密码是否正确
        $use1 = $login->where("login_nickname='$users'")->find();
        $mi=$use1['login_pwd'];
        if($pwd1!=$mi){
            $this->error("密码错误");
        }else{
            $data['login_phone']=I("post.phone");
            $up=$login->where("login_nickname='$users'")->save($data);
            if($up){
                $this->redirect('zhsz/index');
            }else{
                $this->error("手机修改失败");
            }
        }
    }
    public function emails(){
        $email=$_POST['login_email'];
        $login_id=$_POST['login_id'];
        header("content-type:text/html;charset=utf-8");
        vendor('Emails.phpmailer');
        //vendor('Emails..phpmailer');
        $mail = new \PHPMailer();
        $mail->IsSMTP(); // send via SMTP
        $mail->Host = "smtp.163.com"; // SMTP servers
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->Username = "wanghehui1011"; // SMTP username 注意：普通邮件认证不需要加 @域名
        $mail->Password = "hehui521"; // SMTP password
        $mail->From = "wanghehui1011@163.com"; // 发件人邮箱
        $mail->FromName = "易贷"; // 发件人

        $mail->CharSet = "utf-8"; // 这里指定字符集！
        $mail->Encoding = "base64";

        $mail->AddAddress($email,"王贺辉"); // 收件人邮箱和姓名
        $mail->AddReplyTo("wanghehui1011@163.com","易贷");
        //$mail->WordWrap = 50; // set word wrap 换行字数
        //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件
        //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
        $mail->IsHTML(true); // send as HTML
        // 邮件主题
        $subject="易贷绑定邮箱";
        $mail->Subject = $subject;
        // 邮件内容
        $text="http://www.renrendai.com/index.php/Home/Zhsz/email/ids/$login_id/email/$email";
        $mail->Body = "$text";
        $mail->AltBody ="text/html";
        if(!$mail->Send())
        {
            echo "邮件发送有误 <p>";
            echo "邮件错误信息: " . $mail->ErrorInfo;
            exit;
        }
        else {
            //echo "邮件发送成功!<br />";
            $this->redirect('zhsz/index');
        }
    }
    public function email(){
        $id=$_GET['ids'];
        //echo $id;
        $email=$_GET['email'];
        //echo $id,$email;
        $login=M("login");
        $data['login_email']=$email;
        $up=$login->where("login_id='$id'")->save($data);
        if($up){
            $this->redirect('zhsz/index');
        }else{
            $this->error("邮箱绑定失败");
        }
    }
 }
 ?>