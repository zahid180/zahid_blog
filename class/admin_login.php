<?php
class admin_login{
  protected $db_conn;
  function __construct(){
    $server_name="localhost";
    $user_name="root";
    $passWord="";
    $db_name="zahid_db";
    $this->db_conn=mysqli_connect($server_name,$user_name,$passWord,$db_name);
    if (!$this->db_conn) {
      die("Database connect Fail" .mysqli_connect_error($db_conn));
    }
  }




    public function admin_login_check($data){
      $encrypt_password=md5($data['admin_password']);
      $sql="SELECT*FROM admin_login WHERE admin_email='$data[admin_email]' AND admin_password='$encrypt_password'";
      if (mysqli_query($this->db_conn,$sql)) {
        $return_query=mysqli_query($this->db_conn,$sql);
        $admin_info=mysqli_fetch_assoc($return_query);
        if ($admin_info) {
          Session_start();
          $_SESSION['admin_name']=$admin_info['admin_name'];
          $_SESSION['admin_password']=$admin_info['admin_password'];
          header("Location: admin_dasebord.php");
        }else {
          $massage="Your Email or Password Not correct ";
          return $massage;
        }
      }else {
        die("query Problem" .mysqli_connect_error($this->db_conn));
      }
    }



// logout option
public function admin_logout(){
  unset($_SESSION['admin_name']);
  unset($_SESSION['admin_password']);
  header("Location: index.php");


}


}
 ?>
