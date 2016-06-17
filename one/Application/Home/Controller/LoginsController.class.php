<?php
namespace Home\Controller;
use Think\Controller;
class LoginsController extends Controller {
	public function index(){
	   $this->display('login');
	}
	//验证登录
	public function login(){
		$deng['login_phone']=I("post.j_username");
		$deng['login_pwd']=I("post.login_pwd");
		//print_r($deng);die;
		$yilogin=M("login");
		//根据条件查找
		$log=$yilogin->where($deng)->find();
		if($log){
			$username=$log['login_nickname'];
			session('users',$username);
			session('login_name',$log);
			$this->success("登录成功",U("Index/index"));
		}else{
			$this->error("登录失败");
		}
	}
	//退出操作
   public function tuichu(){
   	$tui=session('users',null);
   	$tui=session('login_name',null);
   	$this->success("退出成功",U("Index/index"));
   }
   //验证码
	public function verify(){
		$config =
			array(
					'fontSize'    =>    15,     // 验证码字体大小
					'length'      =>    4,      // 验证码位数
					'useNoise'    =>    false,  // 关闭验证码杂点
					'useCurve'	  =>	false,  //是否使用混淆曲线 默认为true
					'imageW'	  =>	100,    //验证码宽度
					'imageH'	  =>	30,	    //验证码长度
				 );
		$Verify = new \Think\Verify($config);
		$Verify->fontttf = '1.ttf';			    //验证码字体
		$Verify->useImgBg = true;			    //背景
		$Verify->codeSet = '0123456789';	    //纯数字验证码
		$Verify->entry();
	}
	public function regoster(){
	   $this->display('register');
	}
	public function regist()
	{
		$login=M("login");
		$verifyname=I('post.code');
		$verify = new \Think\Verify();
		$yan=$verify->check($verifyname);
		if(!$yan)
		{
			//echo "验证码错误";
			$this->error('验证码错误');
		}else
		{
			$regi['login_nickname']=I("post.nickname");
			$regi['login_pwd']=I("post.password");
			$regi['login_phone']=I("post.username");
			//入库
			$add=$login->data($regi)->add();
			//print_r($add);
			if($add)
			{
				$username=$regi['login_nickname'];
				session('users',$username);
				$this->success('注册成功',U('Index/index'));
			}else
			{
				$this->error('添加失败');
			}
		}
	}
}