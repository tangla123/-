<?php
namespace Admin\Controller;
use Think\Controller;
class VipController extends Controller {
		// 显示页面
    public function index(){
        $this->display();
    }


    // 注册用户名密码

    public function inse(){
        $myfile=$_FILES['lo_img'];
        $fie=D('login')->upload($myfile);
        $_POST['lo_img']=$fie;
    	$path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
      	$_POST['lo_time']=$path;
        $is=1;
        $_POST['lo_is']=$is;
    	$res=D('login')->insert($_POST);
    	if($res){
    		$this->success('添加成功',U('Vip/vip'));
    	}else{
    		$this->error('添加失败');
    	}
    }


    	// 显示会员页面
    public function vip(){
        $data = D('login')->page();
       // $this->assign('data',$data);
        // print_r($data);die;
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();
    }
     // //删除操作
    public function del(){
        $id = I('get.id');
      $is=0;
      $_POST['lo_is']=$is;
        $res = D('login')->del(array('id='.$id),$_POST);
        if($res){
            $this->success('删除成功！',U('Vip/vip'));
        }else{
            $this->error('删除失败！');
        }
    }

    //查询单条数据
    public function vipup(){
        $id = I('get.id');

        $data = D('login')->look(array('id='.$id));
        // print_r($data);die;
        //赋值表单页面中
        $this->assign('data',$data);
        $this->display();
    }

    //修改操作
    public function update(){
        $myfile=$_FILES['lo_img'];
        $fie=D('login')->upload($myfile);
        $_POST['lo_img']=$fie;
      
        $id = I('post.lo_id');
      
        $res = D('login')->update(array('id='.$id),$_POST);
        if($res){
            $this->success('修改成功！',U('Vip/vip'));
        }else{
            $this->error('修改失败！');
        }
    }


     // 修改密码
    public function up(){
        $pwd1=I('post.pwd1');
        $pwd2=I('post.pwd2');
        $pwd3=I('post.pwd3');
       
        $pwd2=$_POST['lo_pwd'];
        $res = D('login')->upda(array('lo_pwd='.$pwd1),$_POST);
        if($res){
            $this->success('修改成功！',U('Vip/vip'));
        }else{
            $this->error('修改失败！');
        }
       
            
        
    }
   

}
?>