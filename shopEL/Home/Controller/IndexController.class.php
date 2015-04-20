<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Think\Upload;

class IndexController extends Controller {
    
   protected $model = 'Index';
   protected $MODEL;
    /**
     * [__construct ] 初始化
     */
    public function __construct(){
      parent::__construct();
      ob_clean();
      $ms = checkstatus();
      $this->assign('Log',$ms);
      $this->MODEL = D($this->model);
    }
      
    /**
     * [index ]  主页
     * @return [type]
     */
    public function index(){
      $SHOP = $this->MODEL->shop_info();
      $this->assign('shop',$SHOP);
	    $this->display('./index');
      // unset($_SESSION['mycar']);
    }
   
    /**
     * [register ] 注册
     * @return [type]
     */
    public function register(){
      if ($_POST){
      	  $info = $this->MODEL->reg();
          $this->assign('msg',$info);
          $this->display('./register');
        }else{
          checksession();           
          $info['msg'] = 0;
          $this->assign('msg',$info);        
        	$this->display('./register');  
        }
    }
     
     /**
      * [verify_c ] 验证码生成
      * @return [type]
      */
      public function verify_c(){  
        $Verify = new Verify();  
        $Verify->fontSize = 18;  
        $Verify->length = 4; 
        $Verify->entry();
      }
      
      /**
       * [login ] 登录
       * @return [type]
       */
      public function login(){
           if ($_POST) {
             $Logmsg = $this->MODEL->Login();
             $this->assign('Log',$Logmsg);
             switch ($Logmsg['status']){
               case '1':
                  $this->success('成功登录！','/shop/Home/index/');
                 break;       
              case '0':
                  $this->error('登录失败！');
                 break;
             }
            
           }else{
              checksession();
              $this->display('./login');
           }
      }
           
      /**
       * [logout] 退出
       * @return [type]
       */
      public function logout(){
         session_destroy();
         $this->success('退出成功！','/shop/Home/index/Login');
      }
     
      /**
       * [shop_detail ]  商品详情
       * @return [type]
       */
      public function shop_detail(){
           if ($infoma = $this->MODEL->shop_DETAIL('info.product_id')){
             $img = D('Index')->shop_DETAIL('');
             $this->assign('infoma',$infoma);
             $this->assign('img',$img);
             $this->display('./product_page');
           }else{
             $this->display('./404');
           }                  
      }
        
    /**
     * [code ] 验证码验证
     * @return [type]
     */
     public function code(){
       $COD = $_POST['C'];
        if (check_verify($COD)){
                echo 'success';
            }else{
                echo 'false';
            }
      }

     
   
      
  

}