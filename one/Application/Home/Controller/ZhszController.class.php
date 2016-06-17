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
        $loginid=$_GET['loginid'];
        $login = M("login"); // 实例化User对象
        // 查找status值为1name值为think的用户数据
        $data1 = $login->where("login_id='$loginid'")->find();
        //print_r($data);
       // die;
        $this->assign("logins",$data1);
        $this->display("xqy");
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
 }
 ?>