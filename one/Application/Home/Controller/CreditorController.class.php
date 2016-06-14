<?php
namespace Home\Controller;
use Think\Controller;
class CreditorController extends Controller {
    //显示债权前台页面
    public function zhaiw(){
        $User = M('Creditor');
        $arr = $User->select();
        $this->assign("data", $arr);
        $this->display();
    }
    //显示债权转让页面
    public function zhaiz(){
        $User = M('Creditor');
        $arr = $User->select();
        $this->assign("data", $arr);
        $this->display();
    }
    //显示债权登陆后页面
    public function zhaiy(){
        $this->display();
    }
}
