<?php
require_once '../class/blog_class.php';
$show_all=new blog();
$query_result=$show_all->show_all_info();
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
  <div class="container pt-5">
    <button type="button" class="btn btn-primary">
      <a href="admin_dasebord.php" style="color: #fff; text-decoration: none;">Back To DaseBord</a>
    </button>
  </div>



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
                  <button type="button" name="button" class="btn btn-warning">
                    <a href="#">Delete</a>
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
