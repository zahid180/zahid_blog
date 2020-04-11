<?php
class fontend{
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


  public function show_blog_info(){
    $sql="SELECT*FROM add_blog_info WHERE blog_status='1' ORDER BY blog_id DESC";
    if (mysqli_query($this->db_conn,$sql)) {
      $query_result=mysqli_query($this->db_conn,$sql);
      return $query_result;
    }
  }


  //font end show more show_details_info
  public function show_details_info($data){
    $sql="SELECT*FROM add_blog_info where blog_id=$data";
    if (mysqli_query($this->db_conn,$sql)) {
      $query_result=mysqli_query($this->db_conn,$sql);
      return $query_result;
    }

  }



}
 ?>
