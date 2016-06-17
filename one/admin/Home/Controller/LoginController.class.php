<?php
namespace Home\Controller;
use Think\Controller;
	//session_start();
class LoginController extends Controller {
   //管理员退出操作
   public function tuichu(){
   	$tui=session('name',null);
   	$this->success("退出成功",U("Index/index"));
   }
   //用户管理之用户添加
   public function hui_add(){
   	$this->display("member_add");
   }
   //用户管理之添加入库
   public function huiadd()
   {
   	$upload = new \Think\Upload();// 实例化上传类
   	$upload->maxSize   =     3145728 ;// 设置附件上传大小
   	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
   	$upload->rootPath	=	"./";
   	$upload->savePath  =      './Public/img/'; // 设置附件上传目录
   	$info   =   $upload->upload();
   	if(!$info)
   	{
   		// 上传错误提示错误信息
   	 	$this->error($upload->getError());
   	}else
   	{
   		// 上传成功
   	 	$pict=$info['myfile']['savepath'].$info['myfile']['savename'];
   	 	$files=substr($pict,9);
   	 	$data=I("post.");
   	 	$data['login_img']=$files;
   	 	$add=M('login');
   	 	$logins['login_nickname']=I("post.login_nickname");
   	 	$log=$add->where($logins)->find();
   	 	if($log){
   	 		$this->error("已有此昵称用户");
   	 	}else{
				$use1=$add->data($data)->add();
				if($use1){
					$this->success('新增成功', U('login/hui_list'));
					} else {
						$this->error('添加失败');
				}
			}
   	}
   }
   //用户管理之用户查看
   public function hui_list(){
   	$login=M('login');
   	isset($_GET['p'])?$p=$_GET['p']:$p=1;
   	$list = $login->page($p.',5')->select();
   	$this->assign('piclist',$list);// 赋值数据集
   	$count      = $login->count();// 查询满足要求的总记录数
   	$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
   	$show       = $Page->show();// 分页显示输出
   	$this->assign('page',$show);// 赋值分页输出
   	$this->display('member_list'); // 输出模板
   }
}