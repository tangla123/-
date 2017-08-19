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
                <li><a href="/blogs/index.php/Admin/Blogarticle/logout/">退出</a></li>
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
                <form action="/blogs/index.php/Admin/Blogarticle/update/" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>分类：</th>
                                <td>
                                  <select name="cat_idi">
                                 
                                  <?php if(is_array($date)): $i = 0; $__LIST__ = $date;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["cat_id"]); ?>" 
                                  <?php if(( $data["cat_idi"] == $v["cat_id"] )): ?>selected<?php endif; ?>
                                   ><?php echo ($v["cat_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                  
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                 <th width="120"><i class="require-red">*</i>排序：</th>
                                 <td>
                                   <input type="text" name="aord" value="<?php echo ($data["aord"]); ?>">
                                  </td>
                             </tr>
                             <tr>
                                 <th width="120"><i class="require-red">*</i>博文名称：</th>
                                 <td>
                                   <input type="text" name="title" value="<?php echo ($data["title"]); ?>">
                                  </td>
                             </tr>
                            <tr>
                                <th><i class="require-red">*</i>简短描述：</th>
                                <td>
                                  <input type="text" name="short_desc" value="<?php echo ($data["short_desc"]); ?>">
                                </td>
                            </tr>
                              <tr>
                                <th>图片：</th>
                                <td>
                                  <input type="file" name="source_img">
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                  <input type="text" name="author" value="<?php echo ($data["author"]); ?>">
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>是否展示：</th>
                                <td>
                                <label><input type="radio" name="is_delete" value="1" 
                                <?php if($data["is_delete"] == '1' ): ?>checked<?php endif; ?>
                                >&nbsp;是</label>
                                &nbsp;
                                <label><input type="radio" name="is_delete" value="0"
                                 <?php if($data["is_delete"] == '0' ): ?>checked<?php endif; ?>>&nbsp;否</label>
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>是否置顶：</th>
                                <td>
                                <label><input type="radio" name="is_top" value="1" 
                                 <?php if($data["is_top"] == '1' ): ?>checked<?php endif; ?>
                                >&nbsp;是</label>
                                &nbsp;
                                <label><input type="radio" name="is_top" value="0"
                                <?php if($data["is_top"] == '0' ): ?>checked<?php endif; ?>>&nbsp;否</label>
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>是否推荐：</th>
                                <td>
                                <label><input type="radio" name="is_recommend" value="1" 
                                <?php if($data["is_recommend"] == '1' ): ?>checked<?php endif; ?>
                                >&nbsp;是</label>
                                &nbsp;
                                <label><input type="radio" name="is_recommend" value="0"
                                <?php if($data["is_recommend"] == '0' ): ?>checked<?php endif; ?>>&nbsp;否</label>
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                  <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10">
                                  <?php echo ($data["content"]); ?>
                                  </textarea>
                                </td>
                            </tr>

      <!--                       <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"><input type="submit" onclick="submitForm('/js/blogs/Public/Admin/css/admin/design/upload')" value="上传图片"/></td>
                            </tr> -->

                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" name="art_id" value="<?php echo ($data["art_id"]); ?>">
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
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