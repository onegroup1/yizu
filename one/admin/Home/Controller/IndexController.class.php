<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $obj=M('index');
        $data=$obj->sel(1);
        print_r($data);
            //$this->display('login');
    }
    public function login(){
        //echo 123;
        //$this->display('index');


    }
}