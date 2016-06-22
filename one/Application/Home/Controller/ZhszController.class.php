<?php

namespace Home\Controller;
use Think\Controller;
include("../class.phpmailer.php");
include("../class.smtp.php");
class ZhszController extends Controller {
   public function index(){
    	$users=session('users');
    	if(empty($users)){
    		$this->error("请先登录",U("Logins/index"));
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
   public function zhaiq(){
        $this->display("zhaiq");
   }
   public function zhaiquan(){
        $this->display("zhaiquan");
   }
   //账户总览
   public function zhzl(){
       $login = M("login"); // 实例化User对象、
       $users=session('users');
       $zh = $login->where("login_nickname='$users'")->find();
       //取出用户id
       $uid=$zh['login_id'];
       //取出用户余额
       $yue=$zh['login_balance'];
       $bid=M("bid");
       $mon0 = $bid->where("login_id='$uid'")->select();
       //print_r($mon0);die;
       $zq_money=0;
       foreach($mon0 as $k1=>$v1){
           $zq_money+=$v1['bid_money'];
       }
       //总余额
       $zye=$zq_money+$yue;
       //echo $zye;die;
       //债权百分比
       $zb=$zq_money/$zye*100;
       $zb=round($zb,0);
       //可用余额百分比
       $ye=$yue/$zye*100;
       $ye=round($ye,0);
      // echo $zb;die;
       $zh['mo1']=$zq_money;
       $zh['zye']=$zye;
       $zh['zb']=$zb;
       $zh['ye']=$ye;
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