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
    //用户管理之删除
    public function del()
    {
        $uid=$_GET['loginid'];
        //echo $uid;
        $login = M("login"); // 实例化User对象$
        $de=$login->where("login_id='$uid'")->delete();
        if($de){
            $this->redirect('login/hui_list');
        }
    }
    //用户管理之查看一条
    public function selone()
    {
        $uid=$_GET['loginid'];
        //echo $uid;
        $login = M("login"); // 实例化User对象$
        $sone=$login->where("login_id='$uid'")->find();
        print_r($sone);
    }
    //给用户充钱
    public function moneyadd(){
        $loginid=$_GET['loginid'];
        $this->assign("loginid",$loginid);
        $this->display("moneyadd");
    }
    //充钱入库
    public function money_add(){
        $User = M("login"); // 实例化User对象
        // 要修改的数据对象属性赋值
        $loginsid = I("post.login_id");
        $data['login_balance'] = I("post.login_balance");
        $mone=$User->where("login_id='$loginsid'")->save($data);
        if($mone){
            $this->success('充值成功', U('login/hui_list'));
        } else {
            $this->error('充值失败');
        }
    }
}