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

  <script src="/shop/Public/js/jquery-1.8.3.min.js" ></script>
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
            <li><a href="">我的收藏</a></li>
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
  
  
  
  
  

  <div class="clear"></div>
  
  <div class="container_12">
    <div class="grid_12">
       <div class="breadcrumbs">
	      <a href="index.html">主页</a><span>&#8250;</span><a href="#">类别</a><span>&#8250;</span><span class="current">此页面</span>
       </div><!-- .breadcrumbs -->
    </div><!-- .grid_12 -->
  </div><!-- .container_12 -->
  
  <div class="clear"></div>
  
  <section id="main">
    <div class="container_12">
       <div id="sidebar" class="grid_3">
	      <aside id="categories_nav">
		     <h3>Categories</h3>
		     
		     <nav class="left_menu">
			    <ul>
				   <li><a href="#">Solids <span>(21)</span></a></li>
				   <li><a href="#">Liquids <span> (27)</span></a></li>
				   <li><a href="#">Spray <span>(33)</span></a></li>
				   <li><a href="#">Electric <span>(17)</span></a></li>
				   <li><a href="#">For Cars <span>(23)</span></a></li>
				   <li><a href="#">For Room <span>(7)</span></a></li>
				   <li class="last"><a href="#">Other <span>(135)</span></a></li>
			    </ul>
		     </nav><!-- .left_menu -->
	      </aside><!-- #categories_nav -->
	      
	      <aside id="shop_by">
		     <h3>店根据</h3>
		     
		     <div class="currently_shopping">
			    <p>购物选项：</p>
			    <ul>
				   <li><a title="close" class="close" href="#"></a>价格： <span>$0.00 - $999.99</span></li>
				   <li><a title="close" class="close" href="#"></a>生产商： <span>Apple</span></li>
			    </ul>
			    
			    <a class="clear_all" href="#">清除所有</a>
			    
			    <div class="clear"></div>
		     </div><!-- .currently_shopping -->
		     
		     <h4>类别</h4>
		     
		     <form action="#" class="check_opt">
			    <p><input class="niceCheck" type="checkbox" >对于家庭 (23)</p>
			    <p><input class="niceCheck" type="checkbox" name="" value="">对于汽车 (27)</p>
			    <p><input class="niceCheck" type="checkbox" name="" value="">对于Office (9)</p>
		     </form>
		     
		     <h4>价格</h4>
		     
		     <form action="#" class="check_opt">
			    <p><input class="niceCheck" type="checkbox" name="" value="">0.00 - $49.99 (21)</p>
			    <p><input class="niceCheck" type="checkbox" name="" value="">$50.00 - $99.99 (7)</p>
			    <p><input class="niceCheck" type="checkbox" name="" value="">0$100.00 and above (15)</p>
		     </form>
	      </aside><!-- #shop_by -->
	      
	      <aside id="specials" class="specials">
		     <h3>特价</h3>
		     
		     <ul>
			    <li>
				   <div class="prev">
					  <a href="product_page.html"><img src="/shop/Public/images/special1.png" alt="" title="" /></a>
				   </div>
				   
				   <div class="cont">
					  <a href="product_page.html">金银花无焰广州周立功笔芯</a>
					  <div class="prise"><span class="old">$177.00</span>$75.00</div>
				   </div>   
			    </li>
			    
			    <li>
				   <div class="prev">
					  <a href="product_page.html"><img src="/shop/Public/images/special2.png" alt="" title="" /></a>
				   </div>
				   
				   <div class="cont">
					  <a href="product_page.html">金银花无焰广州周立功笔芯</a>
					  <div class="prise"><span class="old">$177.00</span>$75.00</div>
				   </div>   
			    </li>
		     </ul>
	      </aside><!-- #specials -->
	      
	      <aside id="newsletter_signup">
		     <h3>订阅电子报</h3>
		     <p>Phasellus VEL ultricies猫。 DUIS
rhoncus risus欧盟乌仁娜的Pretium。</p>
		     
		     <form class="newsletter">
			    <input type="email" name="newsletter" class="your_email" value="" placeholder="输入您的电子邮件地址..."/>
			    <input type="submit" id="submit" value="Subscribe" />
		     </form>
	      </aside><!-- #newsletter_signup -->
       </div><!-- .sidebar -->
      
       <div id="content" class="grid_9">
	      <h1 class="page_title">产品列表</h1>
	      
	      <div class="options">
		     <div class="grid-list">
			   <a class="grid curent" href="index.html"><span>img</span></a>
			   <a class="list" href="catalog_list.html"><span>img</span></a>
		     </div><!-- .grid-list -->
		     
		     <div class="show">
			    显示
			    <select>
				   <option>1</option>
				   <option>2</option>
				   <option>3</option>
				   <option>4</option>
				   <option>5</option>
				   <option>6</option>
				   <option>7</option>
				   <option>8</option>
				   <option>9</option>
				   <option>10</option>
				   <option>11</option>
				   <option>12</option>
			     </select>
			    
			    一页
		     </div><!-- .show -->
		     
		     <div class="sort">
			   排序方式
			    <select>
				   <option>位置</option>
				   <option>价格</option>
				   <option>等级</option>
				   <option>名字</option>
			     </select>
			    
			    <a class="sort_up" href="#">&#8593;</a>
		     </div><!-- .sort -->
	      </div><!-- .options -->
	      
	      <div class="grid_product">
               
           <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sh): $mod = ($i % 2 );++$i;?><!---标签--> 

		     <div class="grid_3 product">
			    <div class="prev">
				   <a href="/shop/Home/index/shop_detail/p_id/<?php echo ($sh["product_id"]); ?>"><img src="/shop/Public/upload/<?php echo ($sh["product_IMG"]); ?>" alt="" title="" /></a>
			    </div><!-- .prev -->
			    <h3 class="title"><?php echo ($sh["product_name"]); ?></h3>
			    <div class="cart">
				   <div class="price">
					  <div class="vert">
						 <div class="price_new">￥&nbsp;<?php echo ($sh["product_price"]); ?></div>
						 <div class="price_old">￥&nbsp;725.00</div>
					  </div>
				   </div>
				   <a href="#" class="obn"></a>
				   <a href="#" class="like"></a>
				   <a href="#" class="bay"></a>
			    </div><!-- .cart -->
		     </div><!-- .grid_3 --><?php endforeach; endif; else: echo "" ;endif; ?><!---标签--> 

	
	    
	      <div class="clear"></div>
	      </div><!-- .grid_product -->
	      
	      <div class="clear"></div>
	      
	      <div class="pagination">
		     <ul>
			    <li class="prev"><span>&#8592;</span></li>
			    <li class="curent"><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li><span>...</span></li>
			    <li><a href="#">100</a></li>
			    <li class="next"><a href="#">&#8594;</a></li>
		     </ul>
	      </div><!-- .pagination -->
	      <p class="pagination_info">显示1到12（100产品）</p>
       </div><!-- #content -->
       
      <div class="clear"></div>
      
    </div><!-- .container_12 -->
  </section><!-- #main -->
  
  <div class="clear"></div>

  
  
  
  
  
  

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