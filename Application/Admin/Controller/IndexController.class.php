<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
		// 显示页面
    public function index(){
        $this->display();
    }




    // public function log(){
    // 	$name=$_POST['lo_name'];
    // 	$pwd=$_POST['lo_pwd'];
    //     $User = M("login"); // 实例化User对象
    //     $map['lo_name'] = $name;
    //     $map['lo_pwd'] = $pwd;
    //     // 把查询条件传入查询方法
    //     $data=$User->where($map)->select(); 
    //     print_r($data);
    // 	$this->cookie('lo_name','lo_pwd',3600); 
    // 	$this->display();


    // }
       public function logout()
    {
         header("Content-type: text/html; charset=utf-8");
        // 清楚所有session
        session(null);
        redirect(U('Login/login'), 2, '正在退出登录...');
    }

    //构造函数，验证Session
    public function __construct() {
        parent::__construct(); //一定要注意这一行，这一行是为了执行父类中的构造函数，否则运行是会出错的
        $this->CheckmSession(); 
    }
    private function CheckmSession(){
        if(!$_SESSION['username']){
             $this->error('当前用户未登录或登录超时，请重新登录',U('Login/login'));
        }
    }


   
}
?>