<?php
namespace Home\Controller;
use Think\Controller;
class CreditorController extends Controller {
    //显示添加页面
    public function creditor_add(){
        $this->display();
    }
    //显示债权列表
    public function creditor_list(){
        $User = M('Creditor');
        $arr=$User->select();
        $this->assign("data",$arr);
        $this->display();
    }
    //添加入库
    public function cr_add(){
        $User = M('Creditor');
        $date['creditor_name']=$_POST['creditor_name'];
        $date['creditor_lilv']=$_POST['creditor_lilv'];
        $date['creditor_money']=$_POST['creditor_money'];
        $date['creditor_deadline']=$_POST['creditor_deadline'];
        if($User->add($date)){
            $this->success('添加成功',U('Creditor/creditor_list'));
        }else{
            $this->error('添加失败',U('Creditor/creditor_add'));
        }
    }
    //删除
    public function creditor_del(){
        $id=$_GET['id'];
        $m=M("Creditor");
        if($m->delete($id)){
            $this->success("删除成功",U('Creditor/creditor_list'));
        }else{
            $this->errorr("删除失败",U('Creditor/creditor_list'));
        }
    }
    //修改
    public function creditor_up(){
        $id=$_GET['id'];
        $m=M("Creditor");
        $arr=$m->find($id);
        //print_r($arr);die;
        $this->assign("arr",$arr);
        $this->display();
    }
    //修改入库
    public function cr_up(){
        $User = M('Creditor');
        $date['creditor_id']=$_POST['id'];
        $date['creditor_name']=$_POST['creditor_name'];
        $date['creditor_lilv']=$_POST['creditor_lilv'];
        $date['creditor_money']=$_POST['creditor_money'];
        $date['creditor_deadline']=$_POST['creditor_deadline'];
        if($User->save($date)){
            $this->success('修改成功',U('Creditor/creditor_list'));
        }else{
            $this->error('修改失败',U('Creditor/creditor_list'));
        }
    }

    public function let_add(){
        $this->display();
    }
    public function let_list(){
        $User = M('Creditor_let');
        $arr=$User->select();
        $this->assign("data",$arr);
        $this->display();
    }
    public function le_add(){
        $User = M('Creditor_let');
        $res['let_name']=$_POST['let_name'];
        $res['let_lilv']=$_POST['let_lilv'];
        $res['let_qixian']=$_POST['let_qixian'];
        $res['let_xishu']=$_POST['let_xishu'];
        $res['let_money']=$_POST['let_money'];
        $res['let_status']=$_POST['let_status'];
        if($User->add($res)){
            $this->success('添加成功',U('Creditor/let_list'));
        }else{
            $this->error('添加失败',U('Creditor/let_add'));
        }
    }
    //删除
    public function let_del(){
        $id=$_GET['id'];
        $m=M("Creditor_let");
        if($m->delete($id)){
            $this->success("删除成功",U('Creditor/let_list'));
        }else{
            $this->errorr("删除失败",U('Creditor/let_list'));
        }
    }
    //修改
    public function let_up(){
        $id=$_GET['id'];
        $m=M("Creditor_let");
        $arr=$m->find($id);
        //print_r($arr);die;
        $this->assign("arr",$arr);
        $this->display();
    }
    //修改入库
    public function le_up(){
        $User = M('Creditor_let');
        $res['let_id']=$_POST['id'];
        $res['let_name']=$_POST['let_name'];
        $res['let_lilv']=$_POST['let_lilv'];
        $res['let_qixian']=$_POST['let_qixian'];
        $res['let_xishu']=$_POST['let_xishu'];
        $res['let_money']=$_POST['let_money'];
        $res['let_status']=$_POST['let_status'];
        if($User->save($res)){
            $this->success('修改成功',U('Creditor/let_list'));
        }else{
            $this->error('修改失败',U('Creditor/let_list'));
        }
    }
}