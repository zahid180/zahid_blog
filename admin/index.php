<?php
session_start();
if (isset($_SESSION['admin_password'])) {
  if ($_SESSION['admin_password']!= NULL) {
    header("Location: admin_dasebord.php");
  }
}

// valid user
$massage="";
if (isset($_POST['zahid'])) {
  require_once '../class/admin_login.php';
  $admin_login=new admin_login();
  $massage=$admin_login->admin_login_check($_POST);
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../rec/css/bootstrap.css">
</head>
<body>

<section class="p-3 mb-2 bg-dark text-white m-5">
  <div class="container p-5">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="POST">
           <div class="form-group">
             <h4><?php echo $massage; ?></h4>
              <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="admin_email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
               <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="admin_password" class="form-control" placeholder="Password">
            </div>
              <input type="submit" name="zahid" class="btn btn-primary form-control" value="Login">
        </form>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="../rec/js/bootstrap.bundle.js"></script>
</body>
</html>
