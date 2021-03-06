<?php
//show information
$blog_id=$_GET['id'];
    require_once '../class/blog_class.php';
    $show_for=new blog();
    $query_result=$show_for->show_for_edit($blog_id);
    $final_query_result=mysqli_fetch_assoc($query_result);

    //update Information
    $massage="";
    if (isset($_POST['zahid'])) {
      require_once '../class/blog_class.php';
      $update=new blog();
      $massage=$update->update_blog_info($_POST);
    }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Blog Information</title>
  <link rel="stylesheet" href="../rec/css/bootstrap.css">
  <style>
   .adminDasebordBackground{
     background-image: url(../rec/img/img01.jpg);
     background-position: fixed;
     background-repeat: none;
   }
  </style>
</head>
<body>
  <!-- main contain start -->
  <section class="pt-4 pb-3 adminDasebordBackground">
    <div class="container-fluid">
      <div align="middle">
        <div class="row">
          <div class="col-md-6 p-5">
            <button  type="button" class="btn btn-dark" name="button">
              <a href="addBlogInfo.php">Add Blog Info</a>
            </button>
          </div>
          <div class="col-md-6 p-5">
            <button  type="button" class="btn btn-dark" name="button">
              <a href="manage_blog.php">Mannage Blog Info</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- main contain end -->



  <section class="p-5 bg bg-success m-5">
    <div class="container">
      <div class="row">
        <h3><?php echo $massage; ?></h3>
        <div class="col-md-12 col-lg-12">

          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Author Name </label>
              <input type="text" name="author_name" value="<?php echo $final_query_result['author_name']; ?>" class="form-control">
              <input type="hidden" name="blog_id" value="<?php echo $final_query_result['blog_id']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Blog Title </label>
              <input type="text" name="blog_title" value="<?php echo $final_query_result['blog_title']; ?>"  required class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Select An Image </label>
              <input type="file" name="blog_image" accept="image/*" class="form-control">
              <img src="<?php echo $final_query_result['blog_image']; ?>" class="img-fluid" style="height:300px;width:355px;" alt="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Blog Description </label>
              <textarea name="blog_description" class="form-control" rows="4" cols="100"><?php echo $final_query_result['blog_description']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Blog Status </label>
              <select class="form-control" name="blog_status">
                <option value="0" align="center">--Select An Option--</option>
                <option value="1">Publish</option>
                <option value="0">Unpublish</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="zahid" class="form-control">
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

<script type="text/javascript" src="../rec/js/bootstrap.bundle.js">

</script>
</body>
</html>
