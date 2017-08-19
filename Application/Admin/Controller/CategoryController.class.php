<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {


 
		
   // 显示添加分类页面
    public function cateinsert(){
        $this->display();
    }


     //添加操作
    public function insert(){
      	$path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
      	$_POST['cat_timer']=$path;
        $c_id=1;
        $_POST['c_id']=$c_id;
    	$res=D('category')->insert($_POST);
    	if($res){
    		$this->success('添加成功',U('Category/category'));
    	}else{
    		$this->error('添加失败');
    	}
    }
    

     // 展示页面
    public function category(){
        $data = D('category')->page();
        $date=D('category')->show();
        $this->assign('date',$date);
        // print_r($data);die;
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();
    }


   

    

    //删除操作
     public function del(){
        $id = I('get.id');
        $is=0;
        $_POST['c_id']=$is;
        $res = D('category')->del(array('cat_id='.$id),$_POST);
        if($res){
            $this->success('删除成功！',U('Category/category'));
        }else{
            $this->error('删除失败！');
        }
    }

    //查询单条数据
    public function upcateinsert(){
    	$id = I('get.id');
    	$data = D('category')->look(array('cat_id='.$id));

    	//赋值表单页面中
    	$this->assign('data',$data);
    	$this->display();
    }

    //修改操作
    public function update(){
    	$id = I('post.cat_id');
      $path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
      $_POST['cat_timer']=$path;
    	$res = D('category')->update(array('cat_id='.$id),$_POST);
    	if($res){
    		$this->success('修改成功！',U('Category/category'));
    	}else{
    		$this->error('修改失败！');
    	}
    }
     
    
     //分类查询
     public function selcategory(){
        $id = I('post.cat_i');
        $date = D('category')->look(array('cat_id='.$id));
        $data=D('category')->show();
        $this->assign('data',$data);

        //赋值表单页面中
        $this->assign('date',$date);
        $this->display();
    }


   
    

}
?>