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
            <div class="crumb-list"><i class="icon-font"></i><a href="/js/blogs/Public/Admin/css/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">会员管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/js/blogs/Public/Admin/css/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">WEB开发</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">标题:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            
							<th width="70">标签:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">php</option><option value="20">mysql</option>
                                </select>
                            </td>

                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/blogs/index.php/Admin/Vip/vipinsert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>图像</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["lo_name"]); ?></td>
                            <td><?php echo ($v["lo_pwd"]); ?></td>
                            <td><img src="/blogs/<?php echo ($v["lo_img"]); ?>" alt="" width="100px"></td>
                            <td><?php echo ($v["lo_time"]); ?></td>
                            <td>
                                <a class="link-update" href="/blogs/index.php/Admin/Vip/vipup/id/<?php echo ($v["id"]); ?>">修改</a>
                                <a class="link-del" href="/blogs/index.php/Admin/Vip/del/id/<?php echo ($v["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>