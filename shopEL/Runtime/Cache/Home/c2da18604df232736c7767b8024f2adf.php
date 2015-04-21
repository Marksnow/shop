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

  <script src="/shop/Public/js/jquery-1.9.1.min.js" ></script>
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
        <div class="slidprev"><span>上一页</span></div>
        <div class="slidnext"><span>下一夜</span></div>
        <div id="slider">
          <div id="slide1">
            <img src="/shop/Public/images/content/slide1.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title"><span>微风主题</span></h3>
              <p><span>清风是14时尚HTML模板，</span></p>
              <p><span>这将帮助你提升销量</span></p>
              <p><span>从你的客户收到了良好的反馈。</span></p>
            </div>
          </div>

          <div id="slide2">
            <img src="/shop/Public/images/content/slide2.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title"><span>灵活性</span></h3>
              <p><span>每一个产品，你是卖，</span></p>
              <p><span>会很好看有微风的主题。</span></p>
            </div>
          </div>

          <div id="slide3">
            <img src="/shop/Public/images/content/slide3.jpg" alt="" title="" />
            <div class="slid_text">
              <h3 class="slid_title"><span>精确度和简易性</span></h3>
              <p><span>微风的设计仅仅是准确的，</span></p>
              <p><span>所以它会满足大家。</span></p>
            </div>
          </div>
        </div><!-- .slider -->
        <div id="myController">
          <div class="control"><span>1</span></div>
          <div class="control"><span>2</span></div>
          <div class="control"><span>3</span></div>
        </div>


    </div><!-- .grid_12 -->
  </div><!-- .container_12 -->
  <div class="copyrights">Collect from 网站模板</div>
  <div class="clear"></div>

  <section id="main" class="home">
    <div class="container_12">
      <div id="top_button">
        <div class="grid_4">
          <a href="#" class="button_block best_price">
            <img src="/shop/Public/images/banner1.png" alt="Banner 1"/>
          </a><!-- .best_price -->
        </div><!-- .grid_4 -->

        <div class="grid_4">
          <a href="#" class="button_block new_smells">
            <img src="/shop/Public/images/banner2.png" alt="Banner 2"/>
          </a><!-- .new smells -->
        </div><!-- .grid_4 -->

        <div class="grid_4">
          <a href="#" class="button_block only_natural">
            <img src="/shop/Public/images/banner3.png" alt="Banner 3"/>
          </a><!-- .only_natural -->
        </div><!-- .grid_4 -->

        <div class="clear"></div>
      </div><!-- #top_button -->

      <div class="clear"></div>

      <div class="carousel">
        <div class="c_header">
          <div class="grid_10">
            <h2>Best Sellers</h2>
          </div><!-- .grid_10 -->

          <div class="grid_2">
            <a id="next_c1" class="next arows" href="#"><span>Next</span></a>
            <a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
           </div><!-- .grid_2 -->
        </div><!-- .c_header -->

        <div class="list_carousel">

        <ul id="list_product" class="list_product">

         <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sh): $mod = ($i % 2 );++$i;?><!---标签--> 
         
          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
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
            </div><!-- .grid_3 -->
          </li><?php endforeach; endif; else: echo "" ;endif; ?><!---标签--> 

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_2.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_3.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_4.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_8.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

        </ul><!-- #list_product -->
        </div><!-- .list_carousel -->
      </div><!-- .carousel -->

      <div class="carousel">
        <div class="c_header">
          <div class="grid_10">
            <h2>特色产品</h2>
          </div><!-- .grid_10 -->

          <div class="grid_2">
            <a id="next_c2" class="next arows" href="#"><span>下一页</span></a>
            <a id="prev_c2" class="prev arows" href="#"><span>上一页</span></a>
          </div><!-- .grid_2 -->
        </div><!-- .c_header -->

        <div class="list_carousel">
        <ul id="list_product2" class="list_product">
          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_5.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_6.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_7.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/produkt_slid1.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="/shop/Public/images/product_9.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">纺必适航影响新西兰温泉</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

        </ul><!-- #list_product2 -->
        </div><!-- .list_carousel -->
      </div><!-- .carousel -->

      <div id="content_bottom">
        <div class="grid_4">
          <div class="bottom_block about_as">
            <h3>关于我们</h3>
            <p>文本块是一堆线箱。在“左”，“右”和“中心”的情况下，该属性指定的每一行框中的行内框对齐相对于该行框的 </p>
            <p>对准是不相对于该视口。在“对齐”的情况下，该属性指定该行内框，以进行冲洗与线箱如果可能的两侧。</p>
            <p>通过扩展或收缩的内框的内容，否则对准作为初始值。</p>
          </div><!-- .about_as -->
        </div><!-- .grid_4 -->

        <div class="grid_4">
          <div class="bottom_block news">
            <h3>新闻</h3>
            <ul>
              <li>
                <time datetime="2012-03-03">2012年1月3日</time>
                <a href="#">文本块是一堆线箱。在“左”，“右”和“中心”，该属性指定的情况下</a>
              </li>

              <li>
                <time datetime="2012-02-03">2012年1月2日</time>
                <a href="#">文本块是一堆线箱。在“左”，“右”和“中心”，该属性指定的情况下</a>
              </li>

              <li>
                <time datetime="2012-01-03">2012年1月1日</time>
                <a href="#">文本块是一堆线箱。在“左”，“右”和“中心”的情况下，这个属性的每一行中指定了内联级盒</a>
              </li>
            </ul>
          </div><!-- .news -->
        </div><!-- .grid_4 -->

        <div class="grid_4">
          <div class="bottom_block newsletter">
            <h3>通讯</h3>
            <p>在的cursus dapibus ultrices velit fusce。猫拉克丝ERAT。发酵产妇拉克丝tristique居住者nullam morbi等奥迪奥NIBH亩格言得力士ERAT。</p>
            <form class="letter_form">
              <input type="email" name="newsletter" class="l_form" value="" placeholder="Enter your email address..."/>
	      <input type="submit" id="submit" value="" />
	    </form>
            <div class="lettel_description">
             VEL lobortis孕妇。在的cursus dapibus ultrices velit fusce。猫拉克丝ERAT。
            </div><!-- .lettel_description -->
          </div><!-- .newsletter -->
        </div><!-- .grid_4 -->

        <div class="clear"></div>
      </div><!-- #content_bottom -->
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