<?php
namespace Home\Model;
use Think\Model;

/**
* 
*/
class ShoplistModel extends Model
{
   protected $table;
   protected $table_USER;
   protected $USER;
  
   public function __construct(){
      $this->table = 'product_info';
      $this->table_USER = 'user';
      $this->USER = $_SESSION['user'];
   }

	 /**
    * [shop_info ] 商品详情
    * @return [type]
    */
	 public function shop_info(){
         $INFO = M();
         $data = array(

                  '_string' => 'info.product_id=Img.product_id',
                  'info.product_type' => $_GET['type']
         	);     
         if ($res = $INFO->table('product_info info,product_img Img')->where($data)->group('info.product_name')->select()){
               return $res;
          }                 
    }
    
    /**
     * [addcart ] 加入购物车
     * @return [type]
     */
    public function addcart(){
           $pid = $_POST["id"];
           $pnum = $_POST["sum"];
           $arr = $this->checkcart();               
          //先判断这个变量是否是数组,可以得到以前是否买过东西
          if(is_array($arr))
          { 
               if(array_key_exists($pid,$arr)){           
                    $uu = $arr[$pid]; 
                    $uu["pnum"] = $uu["pnum"]+$pnum;  
                    $arr[$pid] = $uu; 
                  }else{
                        $arr[$pid] = $pnum;
                        // $arr[$pid]=array("pid"=>$pid,"pnum"=>$pnum);
                       }

            }else{         
                $arr[$pid] = $pnum;
                 }

          $_SESSION["mycar"] = $arr;
         
          return ture;       
    }

    /**
     * [querycart ] 查询购物车
     * @return [type]
     */
    public function querycart(){
        if (isset($_SESSION['mycar'])){
             $Cart = M();
            foreach ($_SESSION['mycar'] as $key => $value) {
                 $be = array(
                        'info.product_id' => $key,
                        '_string' => 'info.product_id=Img.product_id'

                  );
                  $qucart = $Cart->table('product_info info,product_img Img')->where($be)->group('info.product_id')->select();
                  $qucart[0]['count'] = $value;
                  $ab[] = $qucart;
                                           
              }

              //三维数组转二维数组
              foreach ($ab as $key => $v) {
                    $new_arr[] = $v[0];
              }
           return $new_arr;             
          }
    }
   
    /**
     * [addusercart ] 登录用户保存购物车
     * @return [type]
     */
    public function addusercart(){
        if (!empty($this->USER)&&isset($_SESSION['mycar'])) {
           $savecart = M($this->table_USER);
           $cond['user_name'] = $this->USER;
           $mycar['user_cart'] = json_encode($_SESSION['mycar']);
           $savecart->where($cond)->save($mycar);
          }            
    }
 
   /**
    * [logcart ] 查询登录用户购物车
    * @return [type]
    */
   public function logcart(){
       $oldcart = M($this->table_USER);
       $promise['user_name'] = $this->USER;
       if ($old = $oldcart->field('user_cart')->where($promise)->select()) {
           $OLD = $old[0]['user_cart'];
           return json_decode($OLD,true);
       }else{
           return false;
       };     
   }

   /**
    * [checkcart ]   购物车初始化
    * @return [type]
    */
   public function checkcart(){
        if(!empty($this->USER)){                
             if($old = $this->logcart()){
                    $arrc = $old;
                }else{
                    $arrc = $_SESSION["mycar"];
                     }
            }else{
                  $arrc = $_SESSION["mycar"];
              }
        return $arrc;     
   }
   
   /**
    * [delete_login_cart description]
    * @return [type] [description]
    */
   public function delete_login_cart(){
       $ca_id = $_GET['ca_id'];
       $New_cart = $this->logcart();
       unset($New_cart[$ca_id]);
       $_SESSION['mycar'] = $New_cart;
       $this->addusercart();
       return true;       
   }
  
  /**
   * [orders description] 生成订单
   * @return [type] [description]
   */
  public function orders(){
      $Oinfo = $_GET['parg'];
      $a = explode(',',$Oinfo);
      foreach ($a as $key => $value) {
           $b[] = explode('-', $value);
      }
      $tb = M($this->table);
      foreach ($b as $c) {
         $infornum = intval($c[1]);
         $ord_info = array('product_id' => $c[0]);
         $ord_msg = $tb->field('product_name,product_price')->where($ord_info)->find();
         $ord_write = array(
                'order_num' => substr(date("YmdHis"),2,8).mt_rand(100000,999999),
                'order_shop_id' => $c[0],
                'order_shop_name' => $ord_msg['product_name'],
                'order_shop_qty' =>  $infornum,
                'order_shop_total' => $ord_msg['product_price']*$infornum,
                'order_date' => date("YmdHis"),
                'order_operater' => $this->USER,
                'order_status' => 1
          );
         M('orders')->add($ord_write);
        
      }
    
  }

}






?>