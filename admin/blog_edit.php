<?php

$blog_id=$_GET['id'];
    require_once '../class/blog_class.php';
    $show_for=new blog();
    $query_result=$show_for->show_for_edit($blog_id);
    $final_query_result=mysqli_fetch_assoc($query_result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Blog Information</title>
  <link rel="stylesheet" href="../rec/css/bootstrap.css">

</head>
<body>
  <div class="container pt-5">
    <button type="button" class="btn btn-primary">
      <a href="admin_dasebord.php" style="color: #fff; text-decoration: none;">Back To DaseBord</a>
    </button>
  </div>



  <section class="p-5 bg bg-success m-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">

          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Author Name </label>
              <input type="text" name="author_name" value="<?php echo $final_query_result['author_name']; ?>" class="form-control">
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
