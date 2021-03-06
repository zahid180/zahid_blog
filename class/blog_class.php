<?php
class blog{
  //db connection
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





//image add with information in database
  public function add_blog_info($data){
    $tem_img= $_FILES['blog_image']['tmp_name'];
    $img_name=$_FILES['blog_image']['name'];
    $derectory="blog_image/";
    $image_url=$derectory.$img_name;
    $image_size=$_FILES['blog_image']['size'];
    $image_type=pathinfo($img_name .PATHINFO_EXTENSION); //type chack
    $img_re_type=$image_type['extension'];
    $check=getimagesize($tem_img);   // check image
    if ($check) {
      if (file_exists($image_url)) {
        die("Image All ready Exists");
      }else {
        if ($image_size < 50000000) {
          if ($img_re_type='jpg4' && $img_re_type= 'png') {
            $sql="INSERT INTO add_blog_info (author_name,blog_title,blog_description,blog_status,blog_image)
            VALUEs ('$data[author_name]','$data[blog_title]','$data[blog_description]','$data[blog_status]','$image_url')";
            if (mysqli_query($this->db_conn,$sql)) {
              move_uploaded_file($tem_img,$image_url);
              $massage= "Blog Information Save Successfully";
              return $massage;
            }else {
              die("Query Porblem" .mysqli_connect_error($this->db_conn));
            }
          }else {
            die("Your file type is not jpg or png");
          }
        }else {
          die("Your File Too Large");
        }
      }
    }else {
      die("Your uploaded file is not an image please upload a image");
    }
  }




//showing all information in admin manage page
public function show_all_info(){
  $sql="SELECT*FROM add_blog_info ORDER BY blog_id DESC";
  if (mysqli_query($this->db_conn,$sql)) {
     $query_result=mysqli_query($this->db_conn,$sql);
     return $query_result;
  }else {
    die("Query Problem" .mysqli_connect_error($this->db_conn));
  }
}





// show for edit database information
public function show_for_edit($data){
  $sql="SELECT*FROM add_blog_info WHERE blog_id=$data";
  if (mysqli_query($this->db_conn,$sql)) {
    $query_result=mysqli_query($this->db_conn,$sql);
    return $query_result;
  }
}





// update infomation on database
public function update_blog_info($data){
  if ($_FILES['blog_image']['name']) {
    $blog_id=$data[blog_id];
    $query_result=mysqli_query($this->db_conn,"SELECT blog_image FROM add_blog_info WHERE blog_id='$blog_id'");
    $blog_image=mysqli_fetch_assoc($query_result);
    unlink($blog_image['blog_image']);   // unlink function delete file photo and data

    $tem_img= $_FILES['blog_image']['tmp_name'];
    $img_name=$_FILES['blog_image']['name'];
    $derectory="blog_image/";
    $image_url=$derectory.$img_name;
    $image_size=$_FILES['blog_image']['size'];
    $image_type=pathinfo($img_name .PATHINFO_EXTENSION); //type chack
    $img_re_type=$image_type['extension'];
    $check=getimagesize($tem_img);   // check image
    if ($check) {
      if (file_exists($image_url)) {
        die("Image All ready Exists");
      }else {
        if ($image_size < 5000000) {
          if ($img_re_type='jpg4' && $img_re_type= 'png') {
            move_uploaded_file($tem_img,$image_url);
            $sql="UPDATE add_blog_info SET author_name='$data[author_name]', blog_title='$data[blog_title]', blog_description='$data[blog_description]', blog_status='$data[blog_status]', blog_image='$image_url' WHERE blog_id='$data[blog_id]'";
            if (mysqli_query($this->db_conn,$sql)) {
              header("Location: manage_blog.php");
            }else {
              die("Query Porblem" .mysqli_connect_error($this->db_conn));
            }
          }else {
            die("Your file type is not jpg or png");
          }
        }else {
          die("Your File Too Large");
        }
      }
    }else {
      die("Your uploaded file is not an image please upload a image");
    }
  }else {
    $sql="UPDATE add_blog_info SET author_name='$data[author_name]', blog_title='$data[blog_title]', blog_description='$data[blog_description]', blog_status='$data[blog_status]' WHERE blog_id='$data[blog_id]'";
    if (mysqli_query($this->db_conn,$sql)) {
      $massage= "Blog Information Update Successfully";
      return $massage;
  }
}


}


//delete Information
public function delete_blog_info($data){
  $sql="DELETE FROM add_blog_info WHERE blog_id=$data";
  if (mysqli_query($this->db_conn,$sql)) {
    header("Location:manage_blog.php");
  }else {
    die("query Problem" .mysqli_connect_error($this->db_conn));
  }
}


}
 ?>
