<?php
namespace Home\Controller;
use Think\Controller;
class CreditorController extends Controller {
    //显示散标债权前台页面
    public function zhais(){
        $User = M('Creditor');
        $count= $User->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
        $Page -> setConfig('header','共%TOTAL_ROW%条');
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $arr = $User->order('creditor_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //$arr = $User->select();
        for ($i=0;$i<count($arr);$i++) {
            $arr[$i]['cred']=intval($arr[$i]['yet_bid']/$arr[$i]['creditor_money']*100);
        }
        $this->assign("data", $arr);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    //显示债权转让页面
    public function zhaiz(){
        $User = M('Creditor_let');
        $arr = $User->select();
        $this->assign("data", $arr);
        $this->display();
    }

    //显示
    public function zhaizijin(){
        $this->display();
    }

}