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
            $this->redirect('gsdt/gsdt_add');
		}else
		{
			$this->error('添加失败');
		}
   }
   public function gsdtlist()
   {
   	$trends=M("trends");
       isset($_GET['p'])?$p=$_GET['p']:$p=1;
       $list = $trends->order('trends_time DESC')->page($p.',5')->select();
       $this->assign('gsdts',$list);// 赋值数据集
       $count      = $trends->count();// 查询满足要求的总记录数
       $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
       $show       = $Page->show();// 分页显示输出
       $this->assign('page',$show);// 赋值分页输出
       $this->display('gsdtlist'); // 输出模板
   }
    //新闻置顶
    public function zhiding(){
        $trends_id=$_GET['trends_id'];
        $trends = M("trends");
        // 要修改的数据对象属性赋值
        $time=time();
        $data['trends_time'] = $time;
        $pic=$trends->where("trends_id='$trends_id'")->save($data);
        if($pic)
        {
            $this->redirect('gsdt/gsdtlist');
        }else
        {
            $this->error('置顶失败');
        }
    }
}