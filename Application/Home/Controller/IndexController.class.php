<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

     // 展示网站首页
      public function index(){
        // 展示博文列表
      	$article = D('blogarticle')->show(5);
        $this->assign('article',$article);

        // 展示推荐文章列表
        $article1 = D('blogarticle')->show1(9);
        $this->assign('article1', $article1);
      
        // 展示友情链接
        $friend = D('blogfriendlink')->show();
        $this->assign('friend',$friend);
        
        // 展示导航
        $ca = D('category')->show("c_id=1");
        $this->assign('ca',$ca);


        //展示评论
        $ping=D('blogcomment')->show2(3);
        $this->assign('ping',$ping);

        //展示热门点击
        $art = D('blogarticle')->showtwo2(9);
        $this->assign('art', $art);
        // print_r($art);die;

        


        $this->display();
    }

    // 展示导航页面
    public function two(){
        // 展示推荐文章列表
        $article1 = D('blogarticle')->show1(9);
        $this->assign('article1',$article1);
      
        // 展示友情链接
        $friend = D('blogfriendlink')->show();
        $this->assign('friend',$friend);
        
        // 展示导航
        $ca = D('category')->show("c_id=1");
        $this->assign('ca',$ca);

         // 展示分类
        $id=I('get.id');
        $article = D('category')->showtwo(array('cat_id='.$id));
        $this->assign('article',$article);

          //展示评论
        $ping=D('blogcomment')->show2(3);
        $this->assign('ping',$ping);

        //展示热门点击
        $art = D('blogarticle')->showtwo2(9);
        $this->assign('art', $art);


        $this->display();
    }

    // 登录注册
     public function three(){
       
        // 展示导航
        $ca = D('category')->show("c_id=1");
        $this->assign('ca',$ca);

        $this->display();
    }


       // 注册用户名密码
        public function threeinsert(){
        $myfile=$_FILES['lo_img'];
        $fie=D('login')->upload($myfile);
        $_POST['lo_img']=$fie;
        $path=date('Y')."-".date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
        $_POST['lo_time']=$path;
        $is=1;
        $_POST['lo_is']=$is;
        $res=D('login')->insert($_POST);
        if($res){
            $this->success('添加成功',U('Index/insert'));
        }else{
            $this->error('添加失败');
        }
    }
  
    //详情页面
    public function view(){
        //查询单条数据
        $id = I('get.id');
        // print_r($id);die;
        $data = D('blogarticle')->look1(array('art_id='.$id));
        $this->assign('data',$data);
        

        // 展示友情链接
        $friend = D('blogfriendlink')->show();
        $this->assign('friend',$friend);

        //展示导航
        $ca = D('category')->show("c_id=1");
        $this->assign('ca',$ca);

         // 右边栏展示导航
        $ca = D('category')->show1("c_id=1","2,4");
        $this->assign('cat',$ca);

        // 相关文章
        $xiang=D('blogarticle')->show2();
        $this->assign('xiang',$xiang);
        // print_r($xiang);die;

        // 查询评论
        $pin=D('blogcomment')->show(array('art_idi='.$id),5);
        $this->assign('pin',$pin);
        // print_r($pin);die;
       

        // // 查询回复
        $reply=D('blogreply')->show(array('art_idi='.$id),5);
        $this->assign('reply',$reply);
        // print_r($reply);die;
        
          //展示评论
        $ping=D('blogcomment')->show2(3);
        $this->assign('ping',$ping);

        //展示推荐文章
        $article1 = D('blogarticle')->show1(9);
        $this->assign('article1', $article1);

        //展示热门点击
        $art = D('blogarticle')->showtwo2(9);
        $this->assign('art', $art);

    	$this->display();
    }
    

   //阅读量+1
    public function gettop(){
        $id = $_POST['id'];
        $data = D('blogarticle')->look1(array('art_id='.$id));
        $_POST['read_num'] = $_POST['kk'];
        D('blogarticle')->update(array('art_id='.$id),$_POST);   
    }



   // //点赞量+1
   public function gett(){
        $id = $_POST['id'];
        $data = D('blogarticle')->look1(array('art_id='.$id));
        $_POST['zan'] = $_POST['zan'];
        D('blogarticle')->update(array('art_id='.$id),$_POST);   
    }

  
    // 添加评论
      public function pinser(){
    
        // 添加评论
        $path=date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
        $status=1;
        $_POST['art_idi']=$_POST['art_id'];
        $_POST['user_id']=$_POST['author'];
        $_POST['comment_text']=$_POST['text'];
        $_POST['comment_time']=$path;
        $_POST['status']=$status;
        $res=D('blogcomment')->insert($_POST);
       
    }


     // 添加回复
      public function hinser(){
        
        // 添加回复
        $path=date('m')."-".date('d')." ".date('h').":".date('i').":".date('s');
        $_POST['comm_id']=$_POST['id'];
        $_POST['user_id']=$_POST['author'];
        $_POST['reply_text']=$_POST['text'];
        $_POST['reply_time']=$path;
        $res=D('blogreply')->insert($_POST);
       
    }



    /**
     * 用户登录
     */
    public function login()
    {
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('login');
            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }
            // 组合查询条件
            $where = array();
            $where['lo_name'] = $data['lo_name'];
            $result = $login->where($where)->field('id,lo_name,lo_pwd,lo_time')->find();
            // 验证用户名 对比 密码
            if ($result && $result['lo_pwd'] == $result['lo_pwd']) {
                // 存储session
                cookie('uid', $result['id']);          // 当前用户id
                // session('nickname', $result['lo_name']);   // 当前用户昵称
                cookie('username', $result['lo_name']);   // 当前用户名
                // session('lastdate', $result['lastdate']);   // 上一次登录时间
                // session('lastip', $result['lastip']);       // 上一次登录ip
                // 更新用户登录信息
                // $where['id'] = session('uid');
                // M('users')->where($where)->setInc('loginnum');   // 登录次数加 1
                // M('users')->where($where)->save($data);   // 更新登录时间和登录ip
                $this->success('登录成功,...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
    }
}
?>