<?php
require_once '../class/blog_class.php';
$show_all=new blog();
$query_result=$show_all->show_all_info();

if (isset($_GET['delete'])) {
  require_once '../class/blog_class.php';
  $delete=new blog();
  $delete->delete_blog_info($_GET['delete']);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage Bloge</title>
  <link rel="stylesheet" href="../rec/css/bootstrap.css">
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
              <a href="admin_dasebord.php">Back To Dasebord</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- main contain end -->



  <section class="p-5 bg bg-success mt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div>
            <table class="table table:hover">
              <tr>
                <th>Blog Id</th>
                <th>Author Name</th>
                <th>Blog Title</th>
                <th>Blog Description</th>
                <th>Blog Image</th>
                <th>Action</th>
              </tr>
              <?php while ($final_query_result=mysqli_fetch_assoc($query_result)) { ?>
              <tr>
                <td><?php echo $final_query_result['blog_id']; ?></td>
                <td><?php echo $final_query_result['author_name']; ?></td>
                <td><?php echo $final_query_result['blog_title']; ?></td>
                <td><?php echo $final_query_result['blog_description']; ?></td>
                <td> <img src="<?php echo $final_query_result['blog_image']; ?>" class="img-fluid" alt=""> </td>
                <td>
                  <button type="button" name="button" class="btn btn-warning">
                    <a href="blog_edit.php?id=<?php echo $final_query_result['blog_id']; ?>">Edit</a>
                  </button>
                  <button type="button" name="delete" class="btn btn-warning">
                    <a href="?delete=<?php echo $final_query_result['blog_id']; ?>" onclick="return confirm('Are you sure you want to Remove?');">Delete</a>
                  </button>
                </td>
              </tr>
            <?php } ?>

            </table>

          </div>

        </div>
      </div>
    </div>
  </section>


<script type="text/javascript" src="../rec/js/bootstrap.bundle.js"></script>
</body>
</html>
