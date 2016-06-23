<?php
namespace Home\Controller;
use Think\Controller;
class XinController extends Controller {
	public function index(){

		$obj = M('payplan');
		$arr =$obj->select();
		$num = count($arr);
       //echo $num; 
       //设置页面显示的条数
       $page_size = 2;
       //计算总页数
       $page_sums = ceil($num/$page_size);
       //echo $page_sums;die;
       //获取当前页
       $page = isset($_GET['page'])?$_GET['page']:1;
       //计算上一页
       $up = $page<=1?1:$page-1;
       //计算下一页
       $down = $page>=$page_sums?$page_sums:$page+1;
       //计算偏移量
       $page_limit = ($page-1)*$page_size;
       //分页数据
       $str ="";
       $str.="<a href='javascript:void(0)' onclick ='ajax_page(1)'>首页</a>".'&nbsp&nbsp;';
       $str.="<a href='javascript:void(0)' onclick ='ajax_page($up)'>上一页</a>".'&nbsp&nbsp;';
       $str.="<a href='javascript:void(0)' onclick ='ajax_page($down)'>下一页</a>".'&nbsp&nbsp;';
       $str.="<a href='javascript:void(0)' onclick ='ajax_page($page_sums)'>尾页</a>";
       //$arr = $connection->createCommand("SELECT * FROM diaocha limit $page_limit,$page_size")->queryAll();
       $re = $obj->order('payplan_id desc')->limit($page_limit,$page_size)->select();
		//print_r($re);die;
		$this->assign('arr',$re);
		$this->assign('page',$str);
		$this->assign('num',$num);
		$this->assign('page_sums',$page_sums);
		$this->assign('pages',$page);
		$this->display('xinjihua');
	}
	public function kanren(){
		$id = $_GET['id'];
		//echo $id;
		$db = M('payjilu');
		$ren = $db->join("payjilu join yi_login on payjilu.user_id=yi_login.login_id")->where("payplan_id=$id")->select();
		//print_r($ren);
		$this->assign('ren',$ren);
		$this->display();
	}
	public function tianjia(){
		$this->display('tianjia');
	}
	public function add(){
		//$arr = $_POST;
		//print_r($arr);die;
		$obj = M('payplan');
		$payplan_name = $_POST['payplan_name'];
		$payplan_guarantee = $_POST['payplan_guarantee'];
		$payplan_income = $_POST['payplan_income'];
		$payplan_deadline = $_POST['payplan_deadline'];
		$payplan_toudate = $_POST['payplan_toudate'];
		$payplan_stamoney = $_POST['payplan_stamoney'];
		$payplan_monmoney = $_POST['payplan_monmoney'];
		$payplan_annua = $_POST['payplan_annua'];
		$payplan_num = $_POST['payplan_num'];
		$payplan_endtime = date('Y-m-d',strtotime("+".$payplan_deadline."month"));
		$time = date("Y-m-d");
		$arr = array('payplan_name'=>$payplan_name,
					 'payplan_guarantee'=>$payplan_guarantee,
					 'payplan_income'=>$payplan_income,
					 'payplan_deadline'=>$payplan_deadline,
					 'payplan_toudate'=>$payplan_toudate,
					 'payplan_stamoney'=>$payplan_stamoney,
					 'payplan_monmoney'=>$payplan_monmoney,
					 'payplan_annua'=>$payplan_annua,
					 'payplan_num'=>$payplan_num,
					 'payplan_endtime'=>$payplan_endtime,
					 'payplan_statime'=>$time,
			);
		$jia = $obj->add($arr);
		/*$sql = "select * from payplan where payplan_id = max(payplan_id)";
		echo $obj->query($sql);*/
		$b = $obj->field('max(payplan_id)')->select();
		//print_r($b);
		$id = $b[0]['max(payplan_id)'];
		//echo $id;
		$gai = $obj->execute("update yi_payplan set payplan_stutas = 0 where payplan_id != $id");
	}
	public function xiang(){
		 $id = $_GET['id'];
		 //echo $id;
		 $db = M('payplan');
		 $arr = $db->where("payplan_id = $id")->select();
		 //print_r($arr);die;
		 $this->assign('arr',$arr);
		 $this->display();
	}
}	