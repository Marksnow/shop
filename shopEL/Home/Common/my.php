 <?php
   /**
    * [checkstatus description]
    * @return [type]
    */
   function checkstatus(){
   	 if (isset($_SESSION['user'])) {
   	 	  $Sta = array(
              'status' => 1,
               'User' => $_SESSION['user']
   	 	  	    );
   	    }else{
   	    	$Sta = array(
              'status' => 0            
   	 	  	   );
   	    }
   	 return $Sta;
   }

  /**
   * [checksession description]
   * @return [type]
   */
  function checksession(){
    if (isset($_SESSION['user'])) {
       header('Location:/shop/Home/index/');
       exit();
    }
  }

  /**
   * [checkpublish description]
   * @param  [type]
   * @return [type]
   */
  function checkpublish($arr){
        if ($arr['pro_name']=='') {
            $info = array(
                 'tip' => '商品名称不能为空',
                 'status' => 'false'
              );
          return $info;
        }

        if ($arr['pro_type']==''||!is_string($arr['pro_type'])) {
            $info = array(
                 'tip' => '商品类型不能为空或非法字符',
                 'status' => 'false'
              );
          return $info;
        }

        if ($arr['pro_price']==''||!is_numeric($arr['pro_price'])) {
           $info = array(
                 'tip' => '商品价格不能为空或非法字符',
                 'status' => 'false'
              );
          return $info;
        }

        if ($arr['pro_stocks']==''||!is_numeric($arr['pro_price'])) {
           $info = array(
                 'tip' => '商品库存不能为空或非法字符',
                 'status' => 'false'
              );
          return $info;
        }

         if ($arr['pro_detail']=='') {
           $info = array(
                 'tip' => '商品概述不能为空',
                 'status' => 'false'
              );
          return $info;
        }

      $info = array('status' => 'true');
      return $info;
  }

  /**
   * [check_verify description]
   * @param  [type]
   * @return [type]
   */
  function check_verify($code){      
       $verify = new Think\Verify();
        if ($verify->check($code)){
               return true;
            }else{
               return false;
           }
  }
  
   


  ?>  
  
