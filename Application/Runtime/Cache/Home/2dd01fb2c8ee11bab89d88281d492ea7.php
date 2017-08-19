<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色时间轴个人博客模板</title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="/blogs/Public/Home/css/styles.css" rel="stylesheet">
<link href="/blogs/Public/Home/css/animation.css" rel="stylesheet">
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
  <div class="info">
    <figure> <img src="/blogs/Public/Home/images/art.jpg"  alt="Panama Hat">
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</figcaption>
    </figure>
    <div class="card">
      <h1>我的名片</h1>
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计</p>
      <p>电话：13662012345</p>
      <p>Email：dancesmiling@qq.com</p>
      <ul class="linkmore">
        <li><a href="#" class="talk" title="给我留言"></a></li>
        <li><a href="#" class="address" title="联系地址"></a></li>
        <li><a href="#" class="email" title="给我写信"></a></li>
        <li><a href="#" class="photos" title="生活照片"></a></li>
        <li><a href="#" class="heart" title="关注我"></a></li>
      </ul>
    </div>
  </div>
  <!--info end-->
  <div class="blank"></div>
  <div class="blogs">
    <ul class="bloglist">
    <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cle): $mod = ($i % 2 );++$i;?><li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="/blogs/index.php/Home/Index/view/id/<?php echo ($cle["art_id"]); ?>" target="_blank" class="tl"><?php echo ($cle["title"]); ?></a></h2>
          <ul class="textinfo">
            <a href="/blogs/index.php/Home/Index/view/id/<?php echo ($cle["art_id"]); ?>"><img src="/blogs/<?php echo ($cle["source_img"]); ?>"></a>
            <p> <?php echo ($cle["short_desc"]); ?>
            我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
          </ul>
          <ul class="details">
           <li class="likes"><a href="javascript:void(0)" class="zan"><?php echo ($cle["zan"]); ?></a></li>
            <li class="comments">
            <a href="#" name="is_recommend" class="is"><?php echo ($cle["read_num"]); ?></a>

            </li>
            <li class="icon-time"><a href="#"><?php echo ($cle["day_time"]); ?></a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
    
    </ul>
 
    <!--bloglist end-->
     <aside>
      <div class="tuijian">
        <h2>推荐文章</h2>
        <ol>
        <?php if(is_array($article1)): $k = 0; $__LIST__ = $article1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cle): $mod = ($k % 2 );++$k;?><li>
          <span>
          <strong><?php echo ($k); ?></strong>
          </span>
          <a href="/blogs/index.php/Home/Index/view/id/<?php echo ($cle["art_id"]); ?>">
          <?php echo ($cle["title"]); ?>
          </a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          <!-- <li><span><strong>2</strong></span><a href="/blogs/index.php/Home/Index/view">励志人生-要做一个潇洒的女人</a></li>
          <li><span><strong>3</strong></span><a href="/blogs/index.php/Home/Index/view">女孩都有浪漫的小情怀――浪漫的求婚词</a></li>
          <li><span><strong>4</strong></span><a href="/blogs/index.php/Home/Index/view">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><strong>5</strong></span><a href="/blogs/index.php/Home/Index/view">女生清新个人博客网站模板</a></li>
          <li><span><strong>6</strong></span><a href="/blogs/index.php/Home/Index/view">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><strong>7</strong></span><a href="/blogs/index.php/Home/Index/view">Column 三栏布局 个人网站模板</a></li>
          <li><span><strong>8</strong></span><a href="/blogs/index.php/Home/Index/view">时间煮雨-个人网站模板</a></li>
          <li><span><strong>9</strong></span><a href="/blogs/index.php/Home/Index/view">花气袭人是酒香―个人网站模板</a></li> -->
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

        <?php if(is_array($art)): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><li><span><a href="/blogs/index.php/Home/Index/two/id/<?php echo ($c["cat_id"]); ?>"><?php echo ($a["cat_name"]); ?></a></span><a href="/blogs/index.php/Home/Index/view/id/<?php echo ($a["art_id"]); ?>"><?php echo ($a["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ol>
      </div>
      <div class="search">
        <form class="searchform" method="get" action="#">
          <input type="text" name="s" value="Search" onfocus="this.value=''" onblur="this.value='Search'">
        </form>
      </div>
      <div class="viny">
        <dl>
          <dt class="art"><img src="/blogs/Public/Home/images/artwork.png" alt="专辑"></dt>
          <dd class="icon-song"><span></span>南方姑娘</dd>
          <dd class="icon-artist"><span></span>歌手：赵雷</dd>
          <dd class="icon-album"><span></span>所属专辑：《赵小雷》</dd>
          <dd class="icon-like"><span></span><a href="/blogs/index.php/Home/Index/view">喜欢</a></dd>
          <dd class="music">
            <audio src="/blogs/Public/Home/images/nf.mp3" controls></audio>
          </dd>
          <!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
        </dl>
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

</body>
</html>