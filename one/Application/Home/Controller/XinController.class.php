<?php
namespace Home\Controller;
use Think\Controller;
class XinController extends Controller {
	public function index()
	{
		//session(null);
		//session('name','小黑');
		$name = session('users');
		//echo $name;die;
		$nam = M('login');
		$obj=M('payplan');
		$lis=M('payjilu');
		//基本信息
		$arr=$obj->order('payplan_id desc')->limit('1')->select();
		//print_r($arr);die;
		//最后一期ID
		$id = $arr[0]['payplan_id'];
		$jilu = M('payjilu');
		$data = $jilu->where("payplan_id='$id'")->select();
		//print_r($data);die;
		//加入人数
		$count = count($data);
		// $model=M('payplan');
		//本期加入人
		$ren = $lis->join("payjilu join yi_login on payjilu.user_id=yi_login.login_id")->where("payplan_id=$id")->select();
		//往期回顾
		//print_r($ren);die;
		
		$list = $obj->join("payplan join yi_payzong on payplan.payplan_id=yi_payzong.payplan_id")->where('payplan_stutas=0')->limit(3)->select();
		//print_r($list);die;
		$date = date("Y-m-d H:i:s"); 
		//echo $date;die;
		$date1 =explode(" ", $date);
		//print_r($date1);die;
		$date2 = explode(':', $date1['1']);
		//print_r($date2);die;
		// $arr=$model->select();
		//print_r($arr);die;
		//用户余额
		$yue = $nam->where("login_nickname = '$name'")->getField('login_balance');
		//print_r($list);die;
		$this->assign('arr',$arr);
		$this->assign('count',$count);
		$this->assign('ar',$list);
		$this->assign('date',$date);
		$this->assign('date2',$date2);
		$this->assign('ren',$ren);
		$this->assign('yue',$yue);
		$this->assign('name',$name);
		$this->display('xinjihua');
	}
	//输入的金额验证
	public function yan(){
		$di = $_POST['di'];
		$zhi = $_POST['zhi'];
		$gao = $_POST['gao'];
		if($zhi%100==0&&$zhi>=$di&&$zhi<=$gao){
			echo 1;
		}else{
			echo 2;
		}
	}
	//显示投资详情
	public function lists(){
		//session(null);
		$value = session('users');
		if(!empty($value)){
			//print_r($value);
			if(isset($_POST)){
			$jine = $_POST['jine'];
			$id = $_POST['id'];
			//echo $id;
			$obj = M('payplan');
			$arr = $obj->where("payplan_id=$id")->select();
			$this->assign('arr',$arr);
			$this->assign('jine',$jine);
			$this->display('xinjia');
		}else{

			$this->redirect('logins/index');
		}
		}else{
			//没有session，跳转到登录页面
			$this->redirect('logins/index');
		}
		
		//$this->display('xinjia');
	}
	public function jia(){
		$pid = $_POST['pid'];
		$money = $_POST['money'];
		$name = session('users');
		$date = date('Y-m-d H:i:s');
		$lis = M('payzong');
		//echo $money;
		$obj = M('login');
		$arr = $obj->where("login_nickname = '$name'")->select();
		//print_r($arr);
		$id = $arr[0]['login_id'];
		if($arr[0]['login_balance']<$money){
			echo "<script>alert('可用金额不足，请充值');location.href='index.html'</script>";
		}else{
			$db = M('payjilu');
			$re= $db->where("user_id='$id' AND payplan_id='$pid'")->select();
			//print_r($re);
			if($re){
				 /*$xiu = $db->execute("update payjilu set payplan_money = payplan_money+'$money' where user_id = '$id'");
				 $gai = $db->execute("update login set login_balance = login_balance-'$money' where login_id = '$id'");*/
				 echo "<script>alert('土豪，您已经投资过本期了，请投资下一期吧');location.href='index'</script>";
			}else{
				$shu = array('payplan_id'=>"$pid",'user_id'=>"$id",'payplan_money'=>"$money",'payplan_startime'=>"$date");
				$jia = $db->add($shu);
				$list = $lis->where("payplan_id ='$pid'")->select();
				//print_r($list);die;
				if($list){
					$gaii = $lis->execute("update yi_payzong set payplan_nums = payplan_nums+'$money' where payplan_id = '$pid'");
					//echo 1;die;
				}else{
					$zong = array('payplan_id'=>$pid,'payplan_nums'=>$money);
					$lis->add($zong);
					//echo 2;die;
				}
				$gai = $obj->execute("update yi_login set login_balance = login_balance-'$money' where login_id = '$id'");
				if($gai){
					echo "<script>alert('投资成功，请等待收益吧');location.href='index'</script>";
				}else{
					echo "参数错误";
				}
			}
		}

	}
	public function login(){
		$this->redirect('logins/index');
	}

}