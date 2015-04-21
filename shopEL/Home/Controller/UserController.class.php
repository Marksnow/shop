<?php

namespace Home\Controller;
use Think\Controller;
header('Content-Type:text/html;charset=utf8');
/**
* 
*/
class UserController extends Controller
{  
	 protected $model = 'User';
   protected $MODEL;
   public function __construct(){
      parent::__construct();
      $ms = checkstatus();
      $this->assign('Log',$ms);
      $this->MODEL = D($this->model);
   }
   /**
    * [info description]
    * @return [type]
    */
	 public function info(){
     if (isset($_SESSION['user'])&&$_SESSION['u_type']=='1') {
           $this->display('./user_public');
       }else{
           $this->error('您没有权限发布商品,快去商家认证!');
       } 	 
	 }
   
   /**
    * [publish description]
    * @return [type]
    */
    public function publish(){
      	   $feed = checkpublish($_POST);   	  
           if ($feed['status']=='true') {
           	  if ($this->MODEL->todo()) {
                $this->success('商品发布成功!','/shop/Home/index/');
           	  }
           }else{
              $tip = $feed['tip'];
              $this->error($tip);
           }     	   
    }

   
   public function center(){
        $fee = $this->MODEL->query_order();
        $this->assign('Order',$fee);
        $this->display('./User_center');
   }

       
	 	
      
	 
}



?>