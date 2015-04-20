<?php

namespace Home\Controller;
use Think\Controller;
header('Content-Type:text/html;charset=utf8');
/**
* 
*/
class UserController extends Controller
{  
	
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
           	  if (D('User')) {
                $this->success('商品发布成功!','/shop/Home/index/');
           	  }
           }else{
              $tip = $feed['tip'];
              $this->error($tip);
           }     	   
    }

       
	 	
      
	 
}



?>