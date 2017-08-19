<?php
if(!defined('THINK_PATH')) exit();
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'www.test.com', // 服务器地址
    'DB_NAME'   => 'blog', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    // 'DB_PREFIX' => 'blog_', // 数据库表前缀 
    'DB_CHARSET' => 'utf8', // 数据库表前缀 
    // 'SHOW_PAGE_TRACE' =>true,
    'USER_AUTH_KEY'=>'authId',
    'SESSION_LIFETIME'=>900,
);
?>