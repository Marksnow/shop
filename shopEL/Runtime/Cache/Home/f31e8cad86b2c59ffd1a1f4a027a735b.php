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
            <li><a href="/shop/Home/user/info">我的账户</a></li>
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
  
  
  
  

  <script>
	$(document).ready(function() {
		$('.jqzoom').jqzoom({
			zoomType: 'standard',
			lens:true,
			preloadImages: true,
			alwaysOn:false
		});
	});
  </script>

  <script>
	$(document).ready(function() {
		$('#wrapper_tab a').click(function() {
			if ($(this).attr('class') != $('#wrapper_tab').attr('class') ) {
				$('#wrapper_tab').attr('class',$(this).attr('class'));
			}
			return false;
		});
	});
  </script>

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
		     <h3>分类</h3>

		     <nav class="left_menu">
			    <ul>
				   <li><a href="#">固体<span>(21)</span></a></li>
				   <li><a href="#">液体 <span> (27)</span></a></li>
				   <li><a href="#">喷 <span>(33)</span></a></li>
				   <li><a href="#">电 <span>(17)</span></a></li>
				   <li><a href="#">对于汽车 <span>(23)</span></a></li>
				   <li><a href="#">对于房 <span>(7)</span></a></li>
				   <li class="last"><a href="#">其他<span>(135)</span></a></li>
			    </ul>
		     </nav><!-- .left_menu -->
	      </aside><!-- #categories_nav -->

	      <aside id="specials" class="specials">
		     <h3>Specials</h3>

		     <ul>
			    <li>
				   <div class="prev">
					  <a href="#"><img src="/shop/Public/images/special1.png" alt="" title="" /></a>
				   </div>

				   <div class="cont">
					  <a href="#">金银花无焰广州周立功笔芯</a>
					  <div class="prise"><span class="old">$177.00</span>$75.00</div>
				   </div>
			    </li>

			    <li>
				   <div class="prev">
					  <a href="#"><img src="/shop/Public/images/special2.png" alt="" title="" /></a>
				   </div>

				   <div class="cont">
					  <a href="#">金银花无焰广州周立功笔芯</a>
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

	      <aside id="banners">
			<a id="ban_next" class="next arows" href="#"><span>下一步</span></a>
			<a id="ban_prev" class="prev arows" href="#"><span>上一页</span></a>

		<h3>横幅</h3>

		<div class="list_carousel">
			<ul id="list_banners">
				<li class="banner"><a href="#">
					<div class="prev">
						<img src="/shop/Public/images/banner.png" alt="" title="" />
					</div><!-- .prev -->

					<h2>新的气味</h2>

					<p>在接下来的系列</p>
 			        </a></li>

				<li class="banner"><a href="#">
					<div class="prev">
						<img src="/shop/Public/images/banner.png" alt="" title="" />
					</div><!-- .prev -->

					<h2>新的气味</h2>

					<p>在接下来的系列</p>
 			        </a></li>

				<li class="banner"><a href="#">
					<div class="prev">
						<img src="/shop/Public/images/banner.png" alt="" title="" />
					</div><!-- .prev -->

					<h2>新的气味</h2>

					<p>在接下来的系列</p>
 			        </a></li>

			</ul>
		</div><!-- .list_carousel -->
	      </aside><!-- #banners -->

	      <aside id="tags">
		     <h3>标签</h3>
		     <a class="t1" href="#">加利福尼亚州</a>
		     <a class="t2" href="#">加拿大</a>
		     <a class="t3" href="#">教规</a>
		     <a class="t4" href="#">猫</a>
		     <a class="t5" href="#">芝加哥</a>
		     <a class="t6" href="#">圣诞节</a>
		     <a class="t7" href="#">火星</a>
		     <a class="t8" href="#">教堂</a>
		     <a class="t9" href="#">城市</a>
		     <a class="t10" href="#">云</a>
		     <a class="t11" href="#">color</a>
		     <a class="t12" href="#">concert</a>
		     <a class="t13" href="#">dance</a>
		     <a class="t14" href="#">day</a>
		     <a class="t15" href="#">dog</a>
		     <a class="t16" href="#">england</a>
		     <a class="t17" href="#">europe</a>
	      </aside><!-- #community_poll -->
       </div><!-- .sidebar -->
      
     <?php if(is_array($infoma)): $i = 0; $__LIST__ = $infoma;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$INFO): $mod = ($i % 2 );++$i;?><!---标签-->
       
       <div id="content" class="grid_9">
	      <h1 class="page_title"><?php echo ($INFO["product_name"]); ?></h1>

		<div class="product_page">
			<div class="grid_4 img_slid" id="products">
				<img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
				<div class="preview slides_container">
					<div class="prev_bg">
						<a href="/shop/Public/upload/<?php echo ($INFO["product_IMG"]); ?>" class="jqzoom" rel='gal1' title="">
							<img src="/shop/Public/upload/<?php echo ($INFO["product_IMG"]); ?>"  title="" alt=""/>
						</a>
					</div>
				</div><!-- .prev -->

				<ul class="pagination clearfix" id="thumblist">

				   <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?><!---标签-->
						<li>
						<a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '/shop/Public/upload/<?php echo ($pic["product_IMG"]); ?>',largeimage: '/shop/Public/upload/<?php echo ($pic["product_IMG"]); ?>'}"><img src='/shop/Public/upload/<?php echo ($pic["product_IMG"]); ?>' alt=""></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?><!---标签-->
				</ul>

				<div class="next_prev">
					<a id="img_prev" class="arows" href="#"><span>上一页</span></a>
					<a id="img_next" class="arows" href="#"><span>下一页</span></a>
				</div><!-- . -->
			</div><!-- .grid_4 -->

			<div class="grid_5">
				<div class="entry_content">
					<div class="review">
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a class="plus" href="#"></a>
						<a href="#"></a>
						<a href="#"></a>
						<span>1回顾（S）</span>
						<a class="add_review" href="#">添加您的评论</a>
					</div>
					<p><?php echo ($INFO["product_name"]); ?></p>
					<div class="ava_price">
						<div class="availability_sku">
							<div class="availability">
								可用性： <span>库存(<?php echo ($INFO["product_stocks"]); ?>&nbsp;件)</span>
							</div>
							<div class="sku">
								SKU: <span><?php echo ($INFO["product_type"]); ?></span>
							</div>
						</div><!-- .availability_sku -->

						<div class="price">
							<div class="price_new">￥&nbsp;<?php echo ($INFO["product_price"]); ?></div>
							<div class="price_old">￥&nbsp;725.00</div>
						</div><!-- .price -->
					</div><!-- .ava_price -->

					<div class="block_cart">
						<div class="obn_like">
							<div class="obn"><a href="#" class="obn">加入比较</a></div>
							<div class="like"><a href="#" class="like">添加到收藏</a></div>
						</div>

						<div class="cart">
							<a href="javascript:;" class="bay" SHOP="<?php echo ($INFO["product_id"]); ?>">添加到购物车</a>
							<input type="text" name="" class="number" value="1" />
							<span>数量：</span>
						</div>
						<div class="clear"></div>
					</div><!-- .block_cart -->
					<div class="soc">
						<img src="/shop/Public/images/soc.png" alt="Soc"/>
					</div><!-- .soc -->
				</div><!-- .entry_content -->

			</div><!-- .grid_5 -->

			<div class="clear"></div>

			<div class="grid_9" >
				<div id="wrapper_tab" class="tab1">
					<a href="#" class="tab1 tab_link">描述</a>
					<a href="#" class="tab2 tab_link">点评</a>
					<a href="#" class="tab3 tab_link">自定义选项卡</a>

					<div class="clear"></div>

					<div class="tab1 tab_body">
						<?php echo ($INFO["product_detail"]); ?>
					<div class="clear"></div>
					
					</div><!-- .tab1 .tab_body -->

					<div class="tab2 tab_body">
						<h4>顾客评论</h4>
						<ul class="comments">
							<li>
								<div class="autor">迈克示例</div>, <time datetime="2012-11-03">03.11.2012</time>

								<div class="evaluation">
									<div class="quality">
										<strong>质量</strong>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
									</div>
									<div class="price">
										<strong>价格</strong>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus_minus" href="#"></a>
										<a href="#"></a>
									</div>
									<div class="clear"></div>
								</div><!-- .evaluation -->

								<p>Suspendisse在placerat turpis。 DUIS luctus ERAT VEL麦格纳pharetra aliquet。保护者tincidunt feugiat ultricies。 Phasellus等DUI risus。前庭adipiscing，爱神QUIS lobortis格言。</p>
							</li>

							<li>
								<div class="autor">迈克示例</div>, <time datetime="2012-11-03">03.11.2012</time>

								<div class="evaluation">
									<div class="quality">
										<strong>质量</strong>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus_minus" href="#"></a>
									</div>
									<div class="price">
										<strong>价格</strong>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a class="plus" href="#"></a>
										<a href="#"></a>
									</div>
									<div class="clear"></div>
								</div><!-- .evaluation -->

								<p>Etiam油树volutpat奥迪奥，ID euismod胡斯托孕妇一。 Aliquam ERAT volutpat。 Phasellus faucibus venenatis LOREM，简历commodo ELIT的Pretium等。 DUIS rhoncus lobortis congue。前庭等普鲁斯DUI，韦尔PORTA lectus。桑达vulputate枕adipiscing。</p>
							</li>
						</ul><!-- .comments -->

						<form class="add_comments">
							<h4>发表您的评论</h4>

							<div class="evaluation">
								<div class="quality">
									<strong>质量</strong><sup class="surely">*</sup>
									<input class="niceRadio" type="radio" name="quality" value="1" /><span class="eva_num">1</span>
									<input class="niceRadio" type="radio" name="quality" value="2" /><span class="eva_num">2</span>
									<input class="niceRadio" type="radio" name="quality" value="3" /><span class="eva_num">3</span>
									<input class="niceRadio" type="radio" name="quality" value="4" /><span class="eva_num">4</span>
									<input class="niceRadio" type="radio" name="quality" value="5" /><span class="eva_num">5</span>
								</div>
								<div class="price">
									<strong>价格</strong><sup class="surely">*</sup>
									<input class="niceRadio" type="radio" name="price" value="1" /><span class="eva_num">1</span>
									<input class="niceRadio" type="radio" name="price" value="2" /><span class="eva_num">2</span>
									<input class="niceRadio" type="radio" name="price" value="3" /><span class="eva_num">3</span>
									<input class="niceRadio" type="radio" name="price" value="4" /><span class="eva_num">4</span>
									<input class="niceRadio" type="radio" name="price" value="5" /><span class="eva_num">5</span>
								</div>
								<div class="clear"></div>
							</div><!-- .evaluation -->

							<div class="nickname">
								<strong>绰号</strong><sup class="surely">*</sup><br/>
								<input type="text" name="" class="" value="" />
							</div><!-- .nickname -->

							<div class="your_review">
								<strong>您的评论内容</strong><sup class="surely">*</sup><br/>
								<input type="text" name="" class="" value="" />
							</div><!-- .your_review -->

							<div class="clear"></div>

							<div class="text_review">
								<strong>评论</strong><sup class="surely">*</sup><br/>
								<textarea name="text"></textarea>
								<i>注意：不支持HTML代码！</i>
							</div><!-- .text_review -->

							<input type="submit" value="Submit Review" />
						</form><!-- .add_comments -->
					<div class="clear"></div>
					</div><!-- .tab2 .tab_body -->

					<div class="tab3 tab_body">
						<h4>Custom Tab</h4>
					<div class="clear"></div>
					</div><!-- .tab3 .tab_body -->
					<div class="clear"></div>
				</div>​<!-- #wrapper_tab -->
				<div class="clear"></div>
			</div><!-- .grid_9 --><?php endforeach; endif; else: echo "" ;endif; ?><!---标签-->
		

			<div class="clear"></div>

			<div class="related">
				<div class="c_header">
					<div class="grid_7">
						<h2>相关产品</h2>
					</div><!-- .grid_7 -->

					<div class="grid_2">
						<a id="next_c1" class="next arows" href="#"><span>下一页</span></a>
						<a id="prev_c1" class="prev arows" href="#"><span>上一页</span></a>
					</div><!-- .grid_2 -->
				</div><!-- .c_header -->

				<div class="list_carousel">

				<ul id="list_product" class="list_product">
					<li class="">
						<div class="grid_3 product">
							<img class="sale" src="/shop/Public/images/sale.png" alt="Sale"/>
							<div class="prev">
								<a href="product_page.html"><img src="/shop/Public/images/product_1.png" alt="" title="" /></a>
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
								<a href="product_page.html"><img src="images/product_4.png" alt="" title="" /></a>
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
		</div><!-- .product_page -->
		<div class="clear"></div>

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