<?php
namespace Admin\Controller;
use Think\Controller;
class BlogcommentController extends Controller {
	
 

    	// 显示评论页面
    public function blogcomment(){
        $data = D('blogcomment')->page();
        $this->assign('data',$data['list']);
        $this->assign('page',$data['show']);
        $this->display();
    }
  
    

}
?>