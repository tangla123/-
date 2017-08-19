<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>view-黑色时间轴个人博客模板</title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="/blogs/Public/Home/css/styles.css" rel="stylesheet">
<link href="/blogs/Public/Home/css/view.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="/blogs/Public/Home/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/blogs/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/blogs/Public/Home/js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="/blogs/Public/Home/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
 <header>
  <nav id="nav">
    <ul>
    <li><a href="<?php echo U('Index/index');?>">网站首页</a></li>
    <?php if(is_array($ca)): $i = 0; $__LIST__ = $ca;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><li><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($c["cat_id"]); ?>" ><?php echo ($c["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
     <li><a href="<?php echo U('Index/three');?>">登录/注册</a></li>
    </ul>
    <script src="/blogs/Public/Home/js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
  </nav>
</header>

<!--header end-->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h2 class="t_nav"><a href="<?php echo U('Index/index');?>">网站首页</a><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($data["cat_id"]); ?>"><?php echo ($data["cat_name"]); ?></a></h2>
      <h1 class="c_titile"><?php echo ($data["title"]); ?></h1>
      <p class="box">发布时间：<?php echo ($data["day_time"]); ?><span>编辑：<?php echo ($data["admin_name"]); ?></span><span>阅读:（<span id="yd" style="margin:0px;"></span>）</p>
      <ul>
        <p> <?php echo ($data["short_desc"]); ?> </p>
        <p><img src="/blogs/<?php echo ($data["source_img"]); ?>"></p>
        <p> 
          <?php echo ($data["content"]); ?>
       </p>
      </ul>
       <div class="share"> 
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> 
        <span class="bds_more">分享到：</span> 
        <a class="bds_qzone"></a> 
        <a class="bds_tsina"></a> 
        <a class="bds_tqq"></a> 
        <a class="bds_renren"></a> 
        <a class="bds_t163"></a> 
        <a class="shareCount"></a> 
        </div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
        <script type="text/javascript" id="bdshell_js"></script> 
        <script type="text/javascript">
          document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
        </script> 
        <!-- Baidu Button END --> 
      </div>
      <div>
        <button class="dian">点赞</button>&nbsp;<span class="shu"><?php echo ($data["zan"]); ?></span>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <?php if(is_array($xiang)): $i = 0; $__LIST__ = $xiang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xi): $mod = ($i % 2 );++$i; if(( $data["cat_id"] == $xi["cat_idi"] )): ?><li>
          <a href="<?php echo ($xi["art_id"]); ?>">
          <?php echo ($xi["title"]); ?>  
          </a>
          </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
     <div >
          <h3>评论列表</h3>
          <!-- 评论 -->
          <textarea name="comment_text" id="comment_text" cols="90" rows="3">
            
          </textarea>
          <input type="button" value="评论" id="bot">
          <!-- 最新的五条评论 -->

          <ul>
            <?php if(is_array($pin)): $i = 0; $__LIST__ = $pin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><li>
              <div style="height:30px;"></div>
              <img src="/blogs/<?php echo ($p["lo_img"]); ?>" alt="" width="50px" style="float:left;disply:inline-block">
              &nbsp;
                <span>
                  <?php echo ($p["lo_name"]); ?> ：
                </span>
                <span>
                   <?php echo ($p["comment_text"]); ?> 
                </span>
                <div style="clear:both;height:10px"></div>
                <div style="margin-left:50px">
                <?php if(is_array($reply)): $i = 0; $__LIST__ = $reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ply): $mod = ($i % 2 );++$i; if( $p["comment_id"] == $ply["comm_id"] ): ?><p> 
                <img src="/blogs/<?php echo ($ply["lo_img"]); ?>" alt="" width="50px" style="float:left;disply:inline-block">
                <span><?php echo ($ply["lo_name"]); ?>：</span>
                <span>
                <?php echo ($ply["reply_text"]); ?>      
                </span>
                <div style="clear:both;disply:inline-block"></div>
                </p><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
                <button class="fu" value="<?php echo ($p["comment_id"]); ?>">回复</button>
                <div class="die" style="display:none">
                <div>
                <textarea name="replay_text" class="retext" cols="70" rows="3">
                  
                </textarea>
                <button class="but" value="<?php echo ($p["comment_id"]); ?>">确认回复</button>
                </div>
                
                </div>
                </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
         
     </div>
    </div>
    <!--bloglist end-->
    <aside>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="sunnav">
        <ul>

        <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><li><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($c["cat_id"]); ?>" target="_blank"><?php echo ($c["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
         <!--  <li><a href="/web/" target="_blank" title="网站建设">网站建设</a></li>
          <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
          <li><a href="/jstt/" target="_blank" title="技术探讨">技术探讨</a></li>
          <li><a href="/news/s/" target="_blank" title="慢生活">慢生活</a></li> -->
        </ul>
      </div>
      <div class="tuijian">
        <h2>栏目更新</h2>
        <ol>
         <?php if(is_array($article1)): $k = 0; $__LIST__ = $article1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cle): $mod = ($k % 2 );++$k;?><li>
          <span>
          <strong><?php echo ($k); ?></strong>
          </span>
          <a href="/blogs/index.php/Home/Index/view/id/<?php echo ($cle["art_id"]); ?>">
          <?php echo ($cle["title"]); ?>
          </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ol>
      </div>
      <div class="toppic">
        <h2>图文并茂</h2>
        <ul>
          <li><a href="#"><img src="/blogs/Public/Home/images/k01.jpg">腐女不可怕，就怕腐女会画画！
            <p>伤不起</p>
            </a></li>
          <li><a href="#"><img src="/blogs/Public/Home/images/k02.jpg">问前任，你还爱我吗？无限戳中泪点~
            <p>感兴趣</p>
            </a></li>
          <li><a href="#"><img src="/blogs/Public/Home/images/k03.jpg">世上所谓幸福，就是一个笨蛋遇到一个傻瓜。
            <p>喜欢</p>
            </a></li>
        </ul>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
         
        <?php if(is_array($art)): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li><span><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($a["cat_id"]); ?>"><?php echo ($a["cat_name"]); ?></a></span><a href="/blogs/index.php/Home/Index/view/id/<?php echo ($a["art_id"]); ?>"><?php echo ($a["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        
        </ol>
      </div>
    </aside>
  </div>
  <!--blogs end--> 
 
</div>

<!--mainbody end-->
<footer>
  <div class="footer-mid">
    <div class="links">
      <h2>友情链接</h2>
      <ul>
      <?php if(is_array($friend)): $i = 0; $__LIST__ = $friend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$end): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($end["link_url"]); ?>"><?php echo ($end["link_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="visitors">
      <h2>最新评论</h2>
      <?php if(is_array($ping)): $i = 0; $__LIST__ = $ping;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><dl>
        <dt><img src="/blogs/<?php echo ($p["lo_img"]); ?>">
        <dt>
        <dd><?php echo ($p["lo_name"]); ?>
          <time><?php echo ($p["comment_time"]); ?></time>
        </dd>
        <dd>在 <a href="http://www.yangqq.com/jstt/bj/2013-07-28/530.html" class="title"><?php echo ($p["title"]); ?> </a>中评论：</dd>
        <dd><?php echo ($p["comment_text"]); ?></dd>
      </dl><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <section class="flickr">
      <h2>摄影作品</h2>
      <ul>
        <li><a href="#"><img src="/blogs/Public/Home/images/01.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/02.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/03.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/04.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/05.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/06.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/07.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/08.jpg"></a></li>
        <li><a href="#"><img src="/blogs/Public/Home/images/09.jpg"></a></li>
      </ul>
    </section>
  </div>
  <div class="footer-bottom">
    <p>Copyright 2013 Design by <a href="http://www.yangqq.com">DanceSmile</a></p>
  </div>
</footer>
<!-- jQuery仿腾讯回顶部和建议 代码开始 -->
<div id="tbox"> <a id="togbook" href="/e/tool/gbook/?bid=1"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<!-- 代码结束 -->
<script src="/blogs/Public/Home/js/jquery.js"></script>
<script>
// 阅读量加一
    window.onload = function(){ 
   $kk= <?php echo ($data["read_num"]); ?>+1;
   $id= <?php echo ($data["art_id"]); ?>;
   $("#yd").html($kk);
  $.ajax({ 
  type: "POST", 
  url: "/blogs/index.php/Home/Index/gettop/", 
  data:{kk:$kk,id:$id},
  success: function(data){ 
  }
})
}

//点赞+1
 $(".dian").click(function(){ 
  if("<?php echo (cookie('uid')); ?>"===""){
    alert("请先登录，再评论！")
  }else{
  $(this).html("已点赞");
   $zan= <?php echo ($data["zan"]); ?>+1;
   $id= <?php echo ($data["art_id"]); ?>;
   $(".shu").html($zan);
  $.ajax({ 
  type: "POST", 
  url: "/blogs/index.php/Home/Index/gett/", 
  data:{zan:$zan,id:$id},
  success: function(data){ 
  }
})
 }
})

// 评论
$("#bot").click(function(){
  if("<?php echo (cookie('uid')); ?>"===""){
    alert("请先登录，再评论！")
  }else{
  $id=<?php echo ($data["art_id"]); ?>;
  $author="<?php echo (cookie('uid')); ?>";
  $text=$("#comment_text").val();
  $.ajax({
    type:"POST",
    url:"/blogs/index.php/Home/Index/pinser/",
    data:{art_id:$id,
          author:$author,
          text:$text,
    },
     success: function(){ 
  },
  })
  parent.location.reload();
  }
  
})

// 回复
$(".fu").click(function(){
  if("<?php echo (cookie('uid')); ?>"===""){
    alert("请先登录，再回复！")
  }else{
  $(this).next().toggle();
}
})

$(".but").click(function(){
  // $(".die").show();
  
  $id=$(this).val();
  $text=$(this).siblings().val();
  $author="<?php echo (cookie('uid')); ?>";
  // alert($text);
  $.ajax({
    type:"POST",
    url:"/blogs/index.php/Home/Index/hinser/",
    data:{id:$id,
          text:$text,
          author:$author,
    },
     success: function(){ 
  },
  })
  parent.location.reload();

})


</script>

</body>
</html>