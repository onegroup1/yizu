<?php
namespace Home\Controller;
use Think\Controller;
class UjihuaController extends Controller {
	public function index(){
		//session(null);
		$obj=M('upay_content');
		$obj1=M('upay_upayplan');
		//AAAAAAAAAAAAAAAAA
		$res=$obj->order('upay_id desc')->where('up_id=1')->limit(1)->find();
		$tiaojian = $res['upay_id'];
		$res1=$obj1->where('upay_id='.$tiaojian)->select();
		//print_r($res1);die;
		foreach ($res1 as $k => $v) {
			$qian+= $v['upayplan_salary'];
		}
		$shengyu = 6000000 - $qian;
		$baifenbi = $qian/6000000;
		$baifenbi1 = substr($baifenbi,0,4)*100;
		//echo $baifenbi1;die;
		//BBBBBBBBBBBBBBBBBB
		$resb=$obj->order('upay_id desc')->where('up_id=2')->limit(1)->find();
		$tianjianb = $resb['upay_id'];
		$resb=$obj1->where('upay_id='.$tianjianb)->select();
		//print_r($res1);die;
		foreach ($resb as $k => $v1) {
			$qianb+= $v1['upayplan_salary'];
		}
		$shengyub = 2000000 - $qianb;
		$baifenbib = $qianb/2000000;
		$baifenbi1b = substr($baifenbib,0,4)*100;
		//echo $baifenbi1;die;
		//CCCCCCCCCCCCCCCCCCC
		$resc=$obj->order('upay_id desc')->where('up_id=3')->limit(1)->find();
		$tianjianc = $resc['upay_id'];
		$resc=$obj1->where('upay_id='.$tianjianc)->select();
		//print_r($res1);die;
		foreach ($resc as $k => $v2) {
			$qianc+= $v2['upayplan_salary'];
		}
		$shengyuc = 12000000 - $qianc;
		$baifenbic = $qianc/12000000;
		$baifenbi1c = substr($baifenbic,0,4)*100;
		//echo $baifenbi1;die;
		$this->assign('baifenbic',$baifenbi1c);
		$this->assign('baifenbib',$baifenbi1b);
		$this->assign('baifenbi',$baifenbi1);
		$this->display('ujihua1');
	}
	public function index1(){
		$obj=M('upay_content');
		$res=$obj->order('upay_id desc')->where('up_id=1')->limit(1)->find();
		$tiaojian = $res['upay_id'];

		$obj1=M('upay_upayplan');
		$res1=$obj1->where('upay_id='.$tiaojian)->select();
		//print_r($res1);die;
		foreach ($res1 as $k => $v) {
			$qian+= $v['upayplan_salary'];
		}
		$shengyu = 6000000 - $qian;
		$baifenbi = $qian/6000000;
		$baifenbi1 = substr($baifenbi,0,4)*100;
		//echo $baifenbi1;die;
		$this->assign('baifenbi',$baifenbi1);
		$this->assign('shengyu',$shengyu);
		$this->assign('data',$res1);

		$this->assign('res',$res);
		$this->display('ujihuaA');
	}
	public function index2(){
		$obj=M('upay_content');
		$res=$obj->order('upay_id desc')->where('up_id=2')->limit(1)->find();
		$tiaojian = $res['upay_id'];

		$obj1=M('upay_upayplan');
		$res1=$obj1->where('upay_id='.$tiaojian)->select();
		//print_r($res1);die;
		foreach ($res1 as $k => $v) {
			$qian+= $v['upayplan_salary'];
		}
		$shengyu = 2000000 - $qian;
		$baifenbi = $qian/2000000;
		$baifenbi1 = substr($baifenbi,0,4)*100;
		//echo $baifenbi1;die;
		$this->assign('baifenbi',$baifenbi1);
		$this->assign('shengyu',$shengyu);
		$this->assign('data',$res1);

		$this->assign('res',$res);
		$this->display('ujihuaB');
	}
	public function index3(){
		$obj=M('upay_content');
		$res=$obj->order('upay_id desc')->where('up_id=3')->limit(1)->find();
		$tiaojian = $res['upay_id'];

		$obj1=M('upay_upayplan');
		$res1=$obj1->where('upay_id='.$tiaojian)->select();
		//print_r($res1);die;
		foreach ($res1 as $k => $v) {
			$qian+= $v['upayplan_salary'];
		}
		$shengyu = 12000000 - $qian;
		$baifenbi = $qian/12000000;
		$baifenbi1 = substr($baifenbi,0,4)*100;
		//echo $baifenbi1;die;
		$this->assign('baifenbi',$baifenbi1);
		$this->assign('shengyu',$shengyu);
		$this->assign('data',$res1);

		$this->assign('res',$res);
		$this->display('ujihuaC');
	}


public function tiaozhuan(){
	$this->redirect('logins/index');
}




	public function index4(){
		if(empty(session('users'))){
			$this->redirect('logins/index');
		}
		$upay_id = $_POST['upay_id'];
		$jine = $_POST['jine'];
		$jiaruren = $_POST['jiaruren'];
		$time = time();
		$data = array(
			'upay_id' => $upay_id,
			'upayplan_man' => $jiaruren,
			'upayplan_salary' => $jine,
			'upayplan_time' => $time
			);
		$biao = M('upay_upayplan');
		$biao -> add($data);
		echo "<script>alert('加入成功');location.href='index1'</script>";
	}
	public function index5(){
		if(empty(session('users'))){
			$this->redirect('logins/index');
		}
		$upay_id = $_POST['upay_id'];
		$jine = $_POST['jine'];
		$jiaruren = $_POST['jiaruren'];
		$time = time();
		$data = array(
			'upay_id' => $upay_id,
			'upayplan_man' => $jiaruren,
			'upayplan_salary' => $jine,
			'upayplan_time' => $time
			);
		$biao = M('upay_upayplan');
		$biao -> add($data);
		echo "<script>alert('加入成功');location.href='index2'</script>";
	}
	public function index6(){
		if(empty(session('users'))){
			$this->redirect('logins/index');
		}
		$upay_id = $_POST['upay_id'];
		$jine = $_POST['jine'];
		$jiaruren = $_POST['jiaruren'];
		$time = time();
		$data = array(
			'upay_id' => $upay_id,
			'upayplan_man' => $jiaruren,
			'upayplan_salary' => $jine,
			'upayplan_time' => $time
			);
		$biao = M('upay_upayplan');
		$biao -> add($data);
		echo "<script>alert('加入成功');location.href='index3'</script>";
	}
}