<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
            $this->display('login');
    }
    public function login(){
        //echo 123;
        $this->display('index');


    }
}
