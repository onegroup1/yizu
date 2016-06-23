<?php
namespace Home\Controller;
use Think\Controller;
class GsdtController extends Controller {
   public function gsdt_add(){
    	//echo "公司动态";die;
      $this->display('gsdtadd');
   }
   public function gsdtadd(){
   	$trends=M("trends");
    	$regi=I("post.");
		$regi['trends_time']=time();
		//入库
		$add=$trends->data($regi)->add();
		if($add)
		{
			$this->success('添加成功',U('gsdt/gsdt_add'));
		}else
		{
			$this->error('添加失败');
		}
   }
   public function gsdtlist()
   {
   	$trends=M("trends");
   	$log=$trends->select();
   }
}