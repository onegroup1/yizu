<?php
namespace Home\Controller;
use Think\Controller;
class LoginsController extends Controller {
	public function index(){
	   $this->display('login');
	}
	//验证登录
	public function login(){
		header("content-type:text/html;charset=utf8");
		$deng['login_phone']=I("post.j_username");
		$deng['login_pwd']=I("post.login_pwd");
		//print_r($deng);die;
		$yilogin=M("login");
		//根据条件查找
		$log=$yilogin->where($deng)->find();
		if($log){
			$username=$log['login_nickname'];
			$files=$log['login_img'];
			session('users',$username);
			session('login_name',$log);
			session('loign_img',$files);
			$time=time();
//            $aa=session('login_name');
//            print_r($aa);die;
			//echo $time;die;
			$upd=M('login');
        $data['login_times']="$time";
        $upd->where("login_nickname='$username'")->save($data);
            $this->redirect('Index/index');
			//$this->success("登录成功",U("Index/index"));
		}else{
			$this->error("登录失败");
		}
	}
	//退出操作
   public function tuichu(){
   	$tui=session('users',null);
   	$tui=session('login_name',null);
   	$tui=session('loign_img',null);
    $this->redirect('Index/index');
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
            $logins['login_nickname']=I("post.nickname");
			$regi['login_nickname']=I("post.nickname");
			$regi['login_pwd']=I("post.password");
			$regi['login_phone']=I("post.username");
            //查看是否有此昵称
            $log=$login->where($logins)->find();
            if($log){
                $this->error("已有此昵称用户");
            }else{
                //print_r($regi);die;
                //入库
                $add=$login->data($regi)->add();
                //print_r($add);
                if($add)
                {
                    $username=$regi['login_nickname'];
                    session('users',$username);
                    $this->redirect('Index/index');
                }else
                {
                    $this->error('添加失败');
                }
            }
		}
	}
}