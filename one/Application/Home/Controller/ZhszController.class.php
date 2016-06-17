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
 }
 ?>