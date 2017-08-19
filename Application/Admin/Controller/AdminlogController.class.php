<?php
namespace Admin\Controller;
use Think\Controller;
class AdminlogController extends Controller {

  // 展示页面
    public function adminlog(){
        
        $data=D('adminlog')->show();
        $this->assign('data',$data);
        $this->display();
    }
    //添加操作
    public function insert(){
      $myfile=$_FILES['admin_img'];
      $fie=D('adminlog')->upload($myfile);
      $_POST['admin_img']=$fie;
      $path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
      $_POST['admin_time']=$path;
     
    	$res=D('adminlog')->insert($_POST);
    	if($res){
    		$this->success('添加成功',U('Adminlog/adminlog'));
    	}else{
    		$this->error('添加失败');
    	}
    }



}
?>