<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/blogs/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/blogs/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/blogs/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
                <li><a href="#" target="#">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Adminlog/adminlog');?>">管理员</a></li>
                <li><a href="<?php echo U('Vip/mimaup');?>">修改密码</a></li>
                <li><a href="/blogs/index.php/Admin/Vip/logout/">退出</a></li>
            </ul>
        </div>
    </div>
</div> 
    <div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe008;</i>作品管理</a></li>
                        <li><a href="<?php echo U('Category/category');?>"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="<?php echo U('Blogarticle/blogarticle');?>"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="<?php echo U('Blogarticle/hui');?>"><i class="icon-font">&#xe037;</i>回收站</a></li>
                        <li><a href="<?php echo U('Vip/vip');?>"><i class="icon-font">&#xe006;</i>会员管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="<?php echo U('Blogcomment/blogcomment');?>"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="<?php echo U('Blogreply/blogreply');?>"><i class="icon-font">&#xe012;</i>回复管理</a></li>
                        <li><a href="<?php echo U('Friend/friend');?>"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> 
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/js/blogs/Public/Admin/css/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/js/blogs/Public/Admin/css/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/blogs/index.php/Admin/Vip/inse/" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                    <tr>
                        <td><label for="user">用户名：</label></td>
                        <td> <input type="text" name="lo_name" id="user" size="40" class="admin_input_style" /></td>
                    </tr>
                    <tr>
                        <td><label for="pwd">密码：</label></td>
                        <td><input type="password" name="lo_pwd" id="pwd" size="40" class="admin_input_style" /></td>
                    </tr>
                    <tr>
                        <td><label for="file">图像：</label></td>
                        <td><input type="file" name="lo_img"  size="40" class="admin_input_style" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" tabindex="3" value="提交" class="btn btn-primary" /></td>
                    </tr>
                    </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>