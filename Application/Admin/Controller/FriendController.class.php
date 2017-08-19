<?php
namespace Admin\Controller;
use Think\Controller;
class FriendController extends Controller {


 
		
   // 显示添加博文页面
    public function Friendinsert(){
        // print_r($data);die;
        $this->display();
    }


     //添加操作
    public function insert(){
      $file=$_FILES['link_logo'];
      $fie=D('blogfriendlink')->upload($file);
  
      $_POST['link_logo']=$fie;
      $is=1;
      $_POST['link_is']=$is;
      
    	$res=D('blogfriendlink')->insert($_POST);
    	if($res){
    		$this->success('添加成功',U('Friend/friend'));
    	}else{
    		$this->error('添加失败');
    	}
    }
    

     // 展示页面
    public function friend(){
        $data = D('blogfriendlink')->page();
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
      $_POST['link_is']=$is;
    	$res = D('blogfriendlink')->del(array('link_id='.$id),$_POST);
        if($res){
            $this->success('删除成功！',U('Friend/friend'));
        }else{
            $this->error('删除失败！');
        }
    }

    //查询单条数据
    public function upfriend(){
    	$id = I('get.id');

    	$data = D('blogfriendlink')->look(array('link_id='.$id));
        // print_r($data);die;
    	//赋值表单页面中
    	$this->assign('data',$data);
    	$this->display();
    }

    //修改操作
    public function update(){
      $file=$_FILES['link_logo'];
      $fie=D('blogfriendlink')->upload($file);
  
      $_POST['link_logo']=$fie;
       $id = I('post.link_id');
      
    	$res = D('blogfriendlink')->update(array('link_id='.$id),$_POST);
    	if($res){
    		$this->success('修改成功！',U('Friend/friend'));
    	}else{
    		$this->error('修改失败！');
    	}
    }
     
    
   //    // 展示单条数据

   // public function sel(){
   //      $id = I('post.cat_a');
   //      $name=I('post.ar');
   //      // print_r($id);
   //      // print_r($name);die;
       
       
   //      // $name=I('post.ar');
   //      $data = D('blogfriendlink')->look(array('cat_idi='.$id,'title='.$name));

   //      //赋值表单页面中
   //      $this->assign('data',$data);
   //      $this->display();
   //  }
    

}
?>