<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Home</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link href="/shop/Public/css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="/shop/Public/css/grid.css" media="screen" rel="stylesheet" type="text/css">
  <link href="/shop/Public/css/jquery.jqzoom.css" media="screen" rel="stylesheet" type="text/css">

  <script src="/shop/Public/js/jquery-1.7.2.min.js" ></script>
  <script src="/shop/Public/js/html5.js" ></script>
  <script src="/shop/Public/js/jflow.plus.js" ></script>
  <script src="/shop/Public/js/jquery.carouFredSel-5.2.2-packed.js"></script>
  <script src="/shop/Public/js/checkbox.js"></script>
  <script src="/shop/Public/js/radio.js"></script>
  <script src="/shop/Public/js/selectBox.js"></script>
  <script src="/shop/Public/js/jquery.jqzoom-core.js"></script>
  <script src="/shop/Public/js/ajax.js" ></script>
  <script>
  $(document).ready(function() {
    $("select").selectBox();
  });
  </script>

  <script>
  $(document).ready(function(){
    $("#myController").jFlow({
      controller: ".control", // must be class, use . sign
      slideWrapper : "#jFlowSlider", // must be id, use # sign
      slides: "#slider",  // the div where all your sliding divs are nested in
      selectedWrapper: "jFlowSelected",  // just pure text, no sign
      width: "984px",  // this is the width for the content-slider
      height: "480px",  // this is the height for the content-slider
      duration: 400,  // time in miliseconds to transition one slide
      prev: ".slidprev", // must be class, use . sign
      next: ".slidnext", // must be class, use . sign
      auto: true  
    });
  });
   </script>
   <script>
  $(function() {
    $('#list_product').carouFredSel({
    prev: '#prev_c1',
    next: '#next_c1',
    auto: false
    });
          $('#list_product2').carouFredSel({
    prev: '#prev_c2',
    next: '#next_c2',
    auto: false
    });
    $('#list_banners').carouFredSel({
    prev: '#ban_prev',
    next: '#ban_next',
    scroll: 1,
    auto: false
    });
    $(window).resize();
  });
   </script>
   <script>
       $(document).ready(function(){
        $("button").click(function(){
         $(this).addClass('click')
        });             
       })
  </script>
</head>
<body>
  <div class="container_12">
    <div id="top">
      <div class="grid_3">
        <div class="phone_top">
          Call Us +777 (100) 1234
        </div><!-- .phone_top -->
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <div class="welcome">
          欢迎光临，<?php if($Log["status"] == 1): ?><span><?php echo ($Log["User"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/shop/Home/index/logout">退出</a>
          <?php else: ?>
          您可以 <a href="/shop/Home/index/login">登陆</a> 或 <a href="/shop/Home/index/register">创建一个帐户</a>.<?php endif; ?>

        </div><!-- .welcome -->
      </div><!-- .grid_6 -->

      <div class="grid_3">
        <div class="valuta">
          <ul>
            <li class="curent"><a href="#">$</a></li>
            <li><a href="#">&#8364;</a></li>
            <li><a href="#">&#163;</a></li>
          </ul>
        </div><!-- .valuta -->

        <div class="lang">
          <ul>
            <li class="curent"><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#">GM</a></li>
          </ul>
        </div><!-- .lang -->
      </div><!-- .grid_3 -->
    </div><!-- #top -->

    <div class="clear"></div>
    <header id="branding">
      <div class="grid_3">
        <hgroup>
          <h1 id="site_logo" ><a href="/shop/Home/index/" title=""><img src="/shop/Public/images/logo.png" alt="Online Store Theme Logo"/></a></h1>
          <h2 id="site_description">网上商店主题</h2>
        </hgroup>
      </div><!-- .grid_3 -->

      <div class="grid_3">
        <form class="search">
          <input type="text" name="search" class="entry_form" value="" placeholder="在这里搜索整个店..."/>
	      </form>
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <ul id="cart_nav">
          <li>
            <a class="cart_li" href="/shop/Home/shoplist/QUERYcart">购物车<span>0</span></a>
            <ul class="cart_cont">
              <li class="no_border"><p>最近添加的项目（S）</p></li> 
              <div class="con">
              </div>
      	      <li class="no_border">
            		<a href="/shop/Home/shoplist/CARTDETAIL" class="view_cart">查看购物车</a>
            		<a href="checkout.html" class="checkout">Procced收银台</a>
      	      </li>
            </ul>
          </li>
        </ul>

        <nav class="private">
          <ul>
            <li><a href="/shop/Home/user/center">我的账户</a></li>
		        <li class="separator">|</li>
            <li><a href="/shop/Home/user/info">我的收藏</a></li>
		        <li class="separator">|</li>

          <?php if($Log["status"] != 1): ?><li><a href="/shop/Home/index/login">登录</a></li>
            <li class="separator">|</li>
            <li><a href="/shop/Home/index/register">注册</a></li><?php endif; ?>   
		                   
          </ul>
        </nav><!-- .private -->
      </div><!-- .grid_6 -->
    </header><!-- #branding -->
  </div><!-- .container_12 -->
  <div class="clear"></div>

   <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <nav class="primary">
          <ul>
            <li class="curent"><a href="/shop/Home/index/">主页</a></li>
            <li><a href="/shop/Home/Shoplist/catalog_grid/type/1">人类</a></li>
            <li><a href="catalog_grid.html">液体</a></li>
            <li>
              <a href="catalog_grid.html">喷</a>
              <ul class="sub">
                <li><a href="catalog_grid.html">对于家庭</a></li>
                <li><a href="catalog_grid.html">对于花园</a></li>
                <li><a href="catalog_grid.html">对于汽车</a></li>
                <li><a href="catalog_grid.html">其它喷涂</a></li>
              </ul>
            </li>
            <li><a href="catalog_grid.html">电</a></li>
            <li><a href="catalog_grid.html">对于汽车</a></li>
            <li>
              <a href="#">所有页面</a>
              <ul class="sub">
                <li><a href="index.html">主页</a></li>
                <li><a href="text_page.html">印刷术和基本风格</a></li>
                <li><a href="catalog_grid.html">目录（网格视图）</a></li>
                <li><a href="catalog_list.html">目录（列表类型视图）</a></li>
                <li><a href="product_page.html">产品视图</a></li>
                <li><a href="shopping_cart.html">购物车</a></li>
                <li><a href="checkout.html">进行结算</a></li>
                <li><a href="compare.html">产品比较</a></li>
                <li><a href="login.html">登录</a></li>
                <li><a href="contact_us.html">联系我们</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="blog.html">博客文章</a></li>
                <li><a href="blog_post.html">博客文章观点</a></li>
              </ul>
            </li>
          </ul>
        </nav><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->


  <!-- #子模块 -->
  
  
  
  
  
  
  
  

	<link rel="stylesheet" type="text/css" href="/shop/Public/css/bootstrap.min.css">
  <script type="text/javascript" charset="utf-8" src="/shop/Public/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/shop/Public/ueditor/ueditor.all.min.js"> </script>

   <div class="Published">
   	 <div class="container">
   	 	<h4>发布商品</h4>
      <div class="col-lg-8 col-md-8"> 
       <form action="/shop/Home/user/publish" enctype="multipart/form-data" method="post" id="form_1">
       	  <div class="form-group col-lg-12">
       	  	<label class="col-lg-2 ">商品名称</label>
       	  	<div class="col-lg-3">
       	  	   <input type="text" class="form-control" placeholder="" name="pro_name" id="p_name">
               <span><?php echo ($Tip); ?></span>
       	  	</div>
       	  </div>

       	   <div class="form-group col-lg-12">
       	  	<label class="col-lg-2 ">商品类型</label>
       	  	<div class="col-lg-3">
               <select class="form-control" name="pro_type">
                  <option value="0">电脑</option>
                  <option value="1">人类</option>
                  <option value="2">家电</option>
               </select> 
       	  	</div>
       	  </div>

       	  <div class="form-group col-lg-12">
       	  	<label class="col-lg-2 ">商品价格</label>
       	  	<div class="col-lg-3">
       	  	   <input type="text" class="form-control" placeholder="" name="pro_price" id="p_price">
       	  	</div>
       	  </div>

       	   <div class="form-group col-lg-12">
       	  	<label class="col-lg-2 ">商品库存</label>
       	  	<div class="col-lg-3">
       	  	   <input type="text" class="form-control" placeholder="" name="pro_stocks" id="p_stocks"> 
       	  	</div>
       	  </div>

       	  <div class="form-group col-lg-12">
       	  	<label class="col-lg-2 ">上传商品</label>
       	  	<div class="col-lg-3"><input type="file" name="file_1"></div>
       	  	<div class="col-lg-3"><input type="file" name="file_2"></div>
       	  	<div class="col-lg-3"><input type="file" name="file_3"></div>
       	  	</div>
       	  </div>
          
           <div class="form-group col-lg-12">
       	  	<label class="col-lg-1">商品概述</label>
       	  	<div class="col-lg-8">
       	  	   <textarea class="form-control" rows="6" name="pro_detail" id="pro_detail" style="display: none;"></textarea>
               
              <script id="container" type="text/plain" style="height:500px;"></script>
       	  	</div>

            <script type="text/javascript">
             var ue=UE.getEditor('container');
             $(function(){
                $("form").submit(function(){  
                   $("#pro_detail").val(ue.getContent());
                   });
             })
            
            </script>
            

       	  </div>
         
         <div class="col-lg-12">
          <button type="submit" class="btn btn-success">提交</button>
         </div>
       </form>
     </div>

   	 </div>
  </div>
  

  
  

  <footer>
    <div class="f_navigation">
      <div class="container_12">
        <div class="grid_3">
          <h3>Contact Us</h3>
          <ul class="f_contact">
            <li>49阿奇德尔，2B Charlestone</li>
            <li>+777 (100) 1234</li>
            <li>mail@example.com</li>
          </ul><!-- .f_contact -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>信息</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="#">关于作为</a></li>
              <li><a href="#">隐私政策</a></li>
              <li><a href="#">条款 & 条件</a></li>
              <li><a href="#">安全支付</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>顾客服务</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="contact_us.html">联系作为</a></li>
              <li><a href="#">回报</a></li>
              <li><a href="#">常问问题</a></li>
              <li><a href="#">网站地图</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>我的账户</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="#">我的账户</a></li>
              <li><a href="#">订单历史</a></li>
              <li><a href="#">愿望清单</a></li>
              <li><a href="#">通讯</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="clear"></div>
      </div><!-- .container_12 -->
    </div><!-- .f_navigation -->

    <div class="f_info">
      <div class="container_12">
        <div class="grid_6">
          <p class="copyright">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.aspku.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div><!-- .grid_6 -->

        <div class="grid_6">
          <div class="soc">
            <a class="google" href="#"></a>
            <a class="twitter" href="#"></a>
            <a class="facebook" href="#"></a>
          </div><!-- .soc -->
        </div><!-- .grid_6 -->

        <div class="clear"></div>
      </div><!-- .container_12 -->
    </div><!-- .f_info -->
  </footer>


</body>
</html>