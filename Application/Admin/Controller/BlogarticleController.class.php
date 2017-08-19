<?php
namespace Admin\Controller;
use Think\Controller;
class BlogarticleController extends Controller {


 
		
   // 显示添加博文页面
    public function blogarticleinsert(){
        $date=D('category')->show();
        $this->assign('date',$date);
        // print_r($data);die;
        $this->display();
    }


     //添加操作
    public function insert(){
      $myfile=$_FILES['source_img'];
      $fie=D('blogarticle')->upload($myfile);
      $_POST['source_img']=$fie;
      $_POST['thumb_img']=$fie;
      $path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
      $_POST['add_time']=$path;
      $path=date('Y')."-".date('m')."-".date('d');
      $_POST['day_time']=$path;
       
    	$res=D('blogarticle')->insert($_POST);
    	if($res){
    		$this->success('添加成功',U('Blogarticle/blogarticle'));
    	}else{
    		$this->error('添加失败');
    	}
    }
    

     // 展示页面
    public function blogarticle(){
        $data = D('blogarticle')->page();
        $date=D('category')->show();
        $this->assign('date',$date);
        // print_r($data);die;
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();

    
     }

       // 展示回收站页面
    public function hui(){
        $data = D('blogarticle')->page1();
        $date=D('category')->show();
        $this->assign('date',$date);
        // print_r($data);die;
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();

    
     }
   

    // //删除操作
    public function del(){
    	$id = I('get.id');
        $is=0;
        $_POST['is_delete']=$is;
    	$res = D('blogarticle')->del(array('art_id='.$id),$_POST);
        if($res){
            $this->success('删除成功！',U('Blogarticle/blogarticle'),5);
        }else{
            $this->error('删除失败！');
        }
    }

    //查询单条数据
    public function upblogarticle(){
    	$id = I('get.id');
      $date=D('category')->show();
      $this->assign('date',$date);


    	$data = D('blogarticle')->look(array('art_id='.$id));
        // print_r($data);die;
    	//赋值表单页面中
    	$this->assign('data',$data);
    	$this->display();
    }

    //修改操作
    public function update(){
       $myfile=$_FILES['source_img'];
       $fie=D('blogarticle')->upload($myfile);
       $_POST['source_img']=$fie;
       $_POST['thumb_img']=$fie;
       $path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
       $_POST['add_time']=$path;
       
       $id = I('post.art_id');
      
    	$res = D('blogarticle')->update(array('art_id='.$id),$_POST);
    	if($res){
    		$this->success('修改成功！',U('Blogarticle/blogarticle'));
    	}else{
    		$this->error('修改失败！');
    	}
    }
     
    
      // 展示单条数据

   public function sel(){
        $id = I('post.cat_a');
        $name=I('post.ar');
        // print_r($id);
        // print_r($name);die;
        $date=D('category')->show();
        $this->assign('date',$date);
       
       
        // $name=I('post.ar');
        $data = D('blogarticle')->show1("cat_idi=$id");

        //赋值表单页面中
        $this->assign('data',$data);
        $this->display();
    }
    

}
?>