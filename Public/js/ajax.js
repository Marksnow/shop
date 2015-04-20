$(function(){

	
  /**
   * [description] 验证码
   * @return {[type]}
   */
	(function(){
		$(".code_ver").find("img").click(function(){
	      var img_con = $(this).attr('src');
	      $(this).attr('src',img_con+'?radom='+Math.random(10));

         });
	})();
      
    /**
     * [description] ajax验证码
     * @return {[type]}
     */
    (function(){
           $(".code_ver").find(".code").focus(function(){
              $time = setInterval(function(){
                 var V = $(".code_ver").find(".code").val();
                 if (V.length>=4){
                 	   $.post('/shop/Home/index/code',{C:V},function(data){
	                              if (data=="success"){
	                                    $(".code_info").text("验证码正确！");
	                                    clearInterval($time);
	                                }else{
	                                	$(".code_info").text("验证码错误！");
	                                	$(".registed").submit(function(){
	                                		return false;
	                                	});
	                                }                     
                            });
                     }              
           	  },100);
           }); 

        $(".code_ver").find(".code").blur(function(){
         	  clearInterval($time);
         	  var $AV = $(".code_ver").find(".code").val();
	         	   if ($AV.length<4){
                       $(".code_info").text("验证码错误！");
                       $(".registed").submit(function(){
	                                		return false;
	                                	});
	         	     }
           });
     })();
          
       /**
        * [description] 注册验证
        * @return {[type]}
        */
	   (function(){
	          $(".registed").submit(function(){
                  if ($(".cla_user").val()==''){
                       alert("请填写用户名");
                       return false;
                  };
                  if ($(".pass").val()==''){
                       alert("请填写密码");
                       return false;
                  };
                  if ($(".cla_adre").val()==''){
                       alert("请填写住址");
                       return false;
                  };
                  if ($(".code").val()==''){
                       alert("验证码错误");
                       return false;
                  };
	          });

	   })();
  
     /**
      * [description] 加入购物车
      * @return {[type]}
      */
     (function(){
          $(".bay").click(function(){
             var ID = $(this).attr("SHOP");
             var SUM = parseInt($(".number").val());
             $.post('/shop/Home/shoplist/ADDcart',{id:ID,sum:SUM},function(data){
                          if (data==1){
                             alert("加入购物车成功");
                             } 
                                   
                    });

           });

     })();
         
      /** 
       * [description] 查询购物车
       * @return {[type]}
       */
      (function(){
          $(".cart_li").hover(function(){
               $.post('/shop/Home/shoplist/QUERYcart',null,function(data){
                        var $str = '';
                        $.each(data,function(index,item){
                             $str+='<li><a href="" class="prev_cart"><div class="cart_vert"><img src="/shop/Public/upload/'+item.product_IMG+'" /></div></a><div class="cont_cart"><h4>'+item.product_name+'</h4><div class="price">'+item.product_price+' x '+item.count+'</div></div><a title="close" class="close" href="#"></a><div class="clear"></div></li>';
                                  
                             });
                        $(".con").html($str);
                            
                      },'json');                                     
          });

      })();

     /**
      * [Calculate description] 计算价格
      */
      function Calculate(){
           var $count = 0;
           $(".Unit").each(function(){
               var $un = parseFloat($(this).text());
               $count+=$un;              
           });
          $(".com").text('￥ '+$count+'');
        }
        Calculate();

     /**
      * [description]  登录用户删除购物车
      * @return {[type]} [description]
      */
     (function(){
             $(".cart_product td.close").click(function(){
                  var CARSHOP = $(this).siblings(".get").text();
                  var $this = $(this);
                  $.get('/shop/Home/shoplist/DELTE_LOGIN_CART?ca_id='+CARSHOP,null,function(data){
                          if (data==1){
                             $this.parent().fadeOut();
                          };   
                    });
                 
               });
     })();
    
    /**
     * [description] 结算
     * @return {[type]} [description]
     */
    (function(){
      var str = "";
      var tags = [];
      $(".my_shop").each(function(){
          var ID = $(this).find(".get").text();
          var qty = $(this).find(".QTY").val();
          str = ID+'-'+qty;
          tags.push(str);            
      });
      tags = tags.join(",")
      $(".out").attr("href","/shop/Home/shoplist/ORDERS/?parg="+tags);
    })();
     
    
     
     

})