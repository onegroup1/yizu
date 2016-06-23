<?php
namespace Home\Controller;
use Think\Controller;
	//session_start();
class PictureController extends Controller {
   //文件上传
   public function pic_add(){
   	$this->display("picadd");
   }
   //文件上传之入库
   public function picadd(){
   	//print_r($_FILES);DIE;
   	//print_r($_POST);die;
   	$upload = new \Think\Upload();// 实例化上传类
   	$upload->maxSize   =     3145728 ;// 设置附件上传大小
   	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
   	$upload->rootPath	=	"./";
   	$upload->savePath  =      './Public/img/'; // 设置附件上传目录
   	$info   =   $upload->upload();
   	if(!$info)
   	{
   		// 上传错误提示错误信息
   	 	$this->error($upload->getError());
   	}else
   	{
   		// 上传成功
   	 	$pict=$info['pict_name']['savepath'].$info['pict_name']['savename'];
   	 	$files=substr($pict,9);
   	 	$data['pict_name']=$files;
   	 	$data['pict_time']=time();
   	 	$data['pict_url']=I("post.pict_url");
   	 	$add=M('picture');
			$pic=$add->data($data)->add();
			if($pic){
				$this->success('新增成功', U('picture/pic_add'));
				} else {
					$this->error('添加失败');
			}
   	}
   }
   //分页显示图片列表
   public function pic_list()
   {
   	$picture=M('picture');
   	isset($_GET['p'])?$p=$_GET['p']:$p=1;
   	$list = $picture->order('pict_time DESC')->page($p.',5')->select();
   	$this->assign('piclist',$list);// 赋值数据集
   	$count      = $picture->count();// 查询满足要求的总记录数
   	$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
   	$show       = $Page->show();// 分页显示输出
   	$this->assign('page',$show);// 赋值分页输出
   	$this->display('piclist'); // 输出模板





   	// $picture=M('picture');
   	// $piclist=$picture->order('pict_time DESC')->select();
   	// //print_r($piclist);
   	// $this->assign('piclist',$piclist);
   	// $this->display('piclist');
   }
   //图片置顶
   public function zhiding(){
   	$pict_id=$_GET['pict_id'];
   	$picture = M("picture");
   	// 要修改的数据对象属性赋值
   	$time=time();
   	$data['pict_time'] = $time;
   	$pic=$picture->where("pict_id='$pict_id'")->save($data);
   	if($pic)
   	{
			$this->success('置顶成功', U('picture/pic_list'));
		}else
		{
			$this->error('置顶失败');
		}
   }
}