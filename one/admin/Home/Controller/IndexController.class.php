<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
            $this->display('login');
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
	//登录查询
	public function alogin(){
		$verifyname=I('post.code');
		$verify = new \Think\Verify();
		$yan=$verify->check($verifyname);
		if(!$yan)
		{
			//echo "验证码错误";
			$this->error('验证码错误');
		}else
		{
			$logins=I("post.");
			$admin=M("admin");
			//根据条件查找
			$log=$admin->where($logins)->find();
			if($log){
				session('name',$log);
                $this->redirect("Index/login");
			}else{
				$this->error("登录失败");
			}
		}
    }
	//判断是否登录
    public function login(){
		$value = session('name');
		if(empty($value)){
			$this->error("请先登录",U("Index/index"));
		}else{
			$this->display('index');
		}
    }
    public function qie(){
        //echo 123;
        $this->redirect('Index/index');
    }
    public function xin(){
        //echo 123;
        $this->redirect('xin/index');
    }
}
