<?php
namespace Home\Controller;
use Think\Controller;
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
            $this->success("头像上传成功",U("zhsz/index"));
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
        $this->display("zhzl");
   }
   //个人中心
    public function grzx(){
        $this->display("grzx");
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
        }

    }
    //信息完善之入库
    public function emailadd(){
        $data=I("post.");
        $users=session('users');
        $login=M("login");
        $up=$login->where("login_nickname='$users'")->save($data);
        if($up){
            $this->success("信息完善成功",U("zhsz/index"));
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
                $this->success("密码修改成功",U("zhsz/index"));
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
            $this->success("实名认证成功",U("zhsz/index"));
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
                $this->success("手机修改成功",U("zhsz/index"));
            }else{
                $this->error("手机修改失败");
            }
        }


    }
 }
 ?>