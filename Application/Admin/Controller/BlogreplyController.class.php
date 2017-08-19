<?php
namespace Admin\Controller;
use Think\Controller;
class BlogreplyController extends Controller {
	
 

    	// 显示评论页面
    public function blogreply(){
        $data = D('blogreply')->page();
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();
    }
  
    

}
?>