<?php
namespace Home\Model;
use Think\Model;
use Think\Upload;

/**
* 
*/
class UserModel extends Model
{
	protected $table_1;
	protected $table_2;
  protected $USER;
  /**
   * [__construct description]
   */
	public function __construct(){
    parent::__construct();
    $this->USER = $_SESSION['user'];
		$this->table_1 = 'product_info';
		$this->table_2 = 'product_img';
	}
	
  /**
   * [todo description]
   * @return [type]
   */
	public function todo(){
		$info = array(
              'product_name' => addslashes($_POST['pro_name']),
              'product_type' => addslashes($_POST['pro_type']),
              'product_price' => addslashes($_POST['pro_price']),
              'product_stocks' => intval(addslashes($_POST['pro_stocks'])),
              'product_detail' => $_POST['pro_detail'],
              'product_date' => date('Y/m/d'),
              'product_auth' => $this->USER
			          );
      
		$INFO = M($this->table_1);
  		if ($p_id = $INFO->add($info)){
          $this->upload($p_id);
      }				
	}

   /**
    * [upload description]
    * @param  [type]
    * @return [type]
    */
    public function upload($id){
          $IMG = M($this->table_2); 	 	  
          $set = array(
            'maxSize' => 314572844,
            'exts' => array('jpg','gif','pmg','jpeg'),
            'rootPath' => './Public/upload/',      
            );
           $upload = new Upload($set);
           $info = $upload->upload();
           if (!$info){
             $this->error($upload->getError());
           }else{
              foreach ($info as $file){          	                
              	 $data = array(
                         'product_id' => $id,
                         'product_IMG' => $file['savepath'].$file['savename']
              	 	   );
                 $IMG->add($data);
                    }
            }
      }
   
   /**
    * [query_order description] 买家查询订单
    * @return [type] [description]
    */
   public function query_order(){
         $Order = M('orders');
         $only = array(
                    'name' => $this->USER,
                    '_string' => 'ord.order_shop_id=Img.product_id'
          );
         $Order_msg=$Order->table('orders ord,product_img Img')->where($only)->group('ord.id')->select();
        return $Order_msg;
   }
	
}




?>