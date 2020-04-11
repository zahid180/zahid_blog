<?php
$blog_id=$_GET['id'];
require_once 'class/fontend_manage.php';
$show_details=new fontend();
$query_result=$show_details->show_details_info($blog_id);
$db_blog_info=mysqli_fetch_assoc($query_result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Read More</title>
  <link rel="stylesheet" href="rec/css/bootstrap.css">
</head>
<body>


  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Index</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php">Admin</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!-- navbar end -->



  <!-- main containe -->
  <div class="container" style="background-color: #cecabe;">
    <div class="row">
      <div class="m-5 p-5">
        <div class="col-md-12 mb-3">
          <img src="admin/<?php echo $db_blog_info['blog_image'];?>" class="img-fluid" alt="">
          <h3>
            <?php  echo $db_blog_info['blog_title'];?>
            <small><?php  echo $db_blog_info['author_name'];?></small>
          </h3>
          <p class="pt-2 p-1"><?php echo $db_blog_info['blog_description'];?></p>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="rec/js/bootstrap.bundle.js"></script>


</body>
</html>
