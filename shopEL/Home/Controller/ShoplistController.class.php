<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class ShoplistController extends Controller
{
	 protected $model = 'shoplist';
   protected $NewM;

   public function __construct(){
      parent::__construct();
      ob_clean();
      $ms = checkstatus();
      $this->assign('Log',$ms);
      $this->NewM = D($this->model);
    }

  /**
   * [catalog_grid ] 商品分类
   * @return [type]
   */
	public function catalog_grid(){
		$SHOP = $this->NewM->shop_info();
		$this->assign('shop',$SHOP);	
		$this->display('./catalog_grid');
	}
     
  /** 
   * [ADDcart ] 加入购物车
   */
	public function ADDcart(){
         if ($this->NewM->addcart()) {
         	 echo "1";
         	 $this->SAVECART();
         };         	        		
	}
       
    /**
     * [QUERYcart  ]  查询购物车
     */
    public function QUERYcart(){
          if ($va=$this->NewM->querycart()) {
          	echo json_encode($va);      	
          }                                
    }
        
    /** 
     * [SAVECART ]  登录用户保存购物车
     */
    public function SAVECART(){
    	$this->NewM->addusercart();
    }
   
   /**
    * [ceshi description]
    * @return [type]
    */
   public function CARTDETAIL(){
         $shoplist = $this->NewM;
         $_SESSION['mycar'] = $shoplist->logcart();
         $info = $shoplist->querycart();
         $this->assign('cart_info',$info);
   	     $this->display('./shopping_cart'); 	    		     
   }
  
   /**
    * [DELTE_LOGIN_CART description]
    */
   public function DELTE_LOGIN_CART(){
       if ($this->NewM->delete_login_cart()) {
           echo '1';
       }
         
   }

   public function ORDERS(){
       $this->NewM->orders();
       $this->success('订单提交成功！','/shop/Home/index/');
   }


}



?>