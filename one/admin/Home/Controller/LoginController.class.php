<?php
namespace Home\Controller;
use Think\Controller;
	//session_start();
class LoginController extends Controller {
	
	
   //退出操作
   public function tuichu(){
   	$tui=session('name',null);
   	$this->success("退出成功",U("Index/index"));
   }

}