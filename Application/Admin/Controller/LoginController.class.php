<?php
namespace Admin\Controller;
use Think\Controller;
/*
 * Class LoginController
 * @package Home\Controller
 */
class LoginController extends Controller {
    /**
     * 用户登录
     */
    public function login()
    {
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('adminlog');
            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }
            // 组合查询条件
            $where = array();
            $where['admin_name'] = $data['admin_name'];
            $result = $login->where($where)->field('admin_id,admin_name,admin_pwd,admin_time')->find();
            // 验证用户名 对比 密码
            if ($result && $result['admin_pwd'] == $result['admin_pwd']) {
                // 存储session
                session('uid', $result['admin_id']);          // 当前用户id
                // session('nickname', $result['lo_name']);   // 当前用户昵称
                session('username', $result['admin_name']);   // 当前用户名
                // session('lastdate', $result['lastdate']);   // 上一次登录时间
                // session('lastip', $result['lastip']);       // 上一次登录ip
                // 更新用户登录信息
                // $where['id'] = session('uid');
                // M('users')->where($where)->setInc('loginnum');   // 登录次数加 1
                // M('users')->where($where)->save($data);   // 更新登录时间和登录ip
                $this->success('登录成功,正跳转至系统首页...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
    }




   

}
?>