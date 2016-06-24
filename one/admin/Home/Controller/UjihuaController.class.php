<?php
namespace Home\Controller;
use Think\Controller;
class UjihuaController extends Controller {
    public function index(){
            $this->display('index1');
    }
    public function add(){
    	$upay_name = $_POST['upay_name'];
    	$upay_content = $_POST['upay_content'];
    	$upay_range = $_POST['upay_range'];
    	$upay_income = $_POST['upay_income'];
    	$upay_lock = $_POST['upay_lock'];
    	$upay_endtime = $_POST['upay_endtime'];
    	$upay_joincondition = $_POST['upay_joincondition'];
    	$upay_upper = $_POST['upay_upper'];
    	$upay_statime = $_POST['upay_statime'];
    	$upay_way = $_POST['upay_way'];
    	$upay_ecpire = $_POST['upay_ecpire'];
    	$upay_cost = $_POST['upay_cost'];
    	$upay_guarantee = $_POST['upay_guarantee'];
    	$upay_agreement = $_POST['upay_agreement'];
    	$upay_annua = $_POST['upay_annua'];
    	$upay_periodss = $_POST['upay_periodss'];
    	$upay_stamoney = $_POST['upay_stamoney'];
    	$upay_paymoney = $_POST['upay_paymoney'];
    	$upay_financialstime = $_POST['upay_financialstime'];
    	$up_id = $_POST['up_id'];
    	$data = array(
			'upay_name' => $upay_name,
			'upay_content' => $upay_content,
			'upay_range' => $upay_range,
			'upay_income' => $upay_income,
			'upay_lock' => $upay_lock,
			'upay_endtime' => $upay_endtime,
			'upay_joincondition' => $upay_joincondition,
			'upay_upper' => $upay_upper,
			'upay_statime' => $upay_statime,
			'upay_way' => $upay_way,
			'upay_ecpire' => $upay_ecpire,
			'upay_cost' => $upay_cost,
			'upay_guarantee' => $upay_guarantee,
			'upay_agreement' => $upay_agreement,
			'upay_annua' => $upay_annua,
			'upay_periodss' => $upay_periodss,
			'upay_stamoney' => $upay_stamoney,
			'upay_paymoney' => $upay_paymoney,
			'upay_financialstime' => $upay_financialstime,
			'up_id' => $up_id
			);
    	$res = M('upay_content');
    	$res -> add($data);
    	$this->redirect('lists');
    }
    public function lists(){
    	$obj1=M('upay_content');
		$res1=$obj1->select();
		$this->assign('res',$res1);
		$this->display('list1');		
    }
    public function delete(){
    	$id = $_GET['id'];
    	//echo $id;
    	$obj1=M('upay_content');
    	$res = $obj1->where('upay_id='.$id)->delete();
    	$this->redirect('lists');
    }
}