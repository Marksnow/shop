<?php
namespace Home\Model;
use Think\Model;

/**
* 
*/
class IndexModel extends Model
{
	protected $table;
    protected $shop;
	protected $con;
    /**
     * [__construct description]
     */
	function __construct()
	{
	   $this->table = 'user';
       $this->shop = 'product_info';
       $this->img = 'product_img';	
	}
      
    /**
     * [reg ] 注册
     * @return [type]
     */
    public function reg(){
    	$user = addslashes($_POST['user']);
    	$pass = sha1(addslashes($_POST['pass']));
    	$address = addslashes($_POST['address']);
    	$email = addslashes($_POST['email']);
    	$add = array(
              'user_name' => $user,
              'user_pass' => $pass,
              'user_address' => $address,
              'user_email' => $email
    		     );
	    	if ($res = M($this->table)->add($add)){
	    		     $info = array('msg' => 1);
		    	}else{
		    		 $info = array('msg' => 0);
		    	}
	return $info;
    }
       
    /**
     * [Login ] 登陆
     */
    public function Login(){    
    	$user = addslashes($_POST['user']);
    	$pass = sha1(addslashes($_POST['pass']));
    	$seach = array(
                   'user_name' => $user,
                   'user_pass' => $pass
    		         );
    	if ($res = M($this->table)->where($seach)->select()) {
    		$_SESSION['user'] = $res[0]['user_name'];
        $_SESSION['u_type'] = $res[0]['user_type'];
    		$info = array(
                     'User' => $_SESSION['user'],
                     'u_type' => $_SESSION['u_type'],
                     'status' => 1
    			         );
	    	}else{
	    		$info = array('status' => 0);
	    	}
	   return $info;
    }
    
    /**
     * [shop_info description]
     * @return [type]
     */
    public function shop_info(){
         $INFO = M();   
         if ($res = $INFO->table('product_info info,product_img Img')->where('info.product_id=Img.product_id')->group('info.product_name')->select()){
            return $res;
         }                 
    }

    /**
     * [shop_DETAIL description]
     * @param  [type]
     * @return [type]
     */
    public function shop_DETAIL($str){        
          $INFO = M();  
          $data = array(
               'info.product_id' => intval($_GET['p_id']),
               'Img.product_id' => intval($_GET['p_id'])
            );
         if ($res = $INFO->table('product_info info,product_img Img')->where($data)->group($str)->select()){
            return $res;
         }
    }

    
    
    

}






?>