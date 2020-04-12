<?php
require_once 'class/fontend_manage.php';
$show_blog=new fontend();
$query_result=$show_blog->show_blog_info();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>zahid.com</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="rec/css/style.css">
  <link rel="stylesheet" href="rec/css/fontwasomeOver.css">
  <link rel="stylesheet" href="rec/css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- navbar end -->




  <!-- main contain start -->
  <section class="pt-4 pb-3">
    <div class="container">
      <div class="row">

        <?php while ($db_blog_info=mysqli_fetch_assoc($query_result)) {?>
        <div class="col-md-4 mb-3">
          <img src="admin/<?php echo $db_blog_info['blog_image'];?>" class="img-fluid" alt="">
          <h3>
            <?php  echo $db_blog_info['blog_title'];?>
            <small><?php  echo $db_blog_info['author_name'];?></small>
          </h3>
          <p class="pt-2 p-1"><?php echo substr ($db_blog_info['blog_description'],0,300);?></p>
           <button type="button" class="btn btn-dark">
              <a href="read_more.php?id=<?php echo $db_blog_info['blog_id'];?>">Read More</a>
            </button>
        </div>
      <?php } ?>

      </div>
    </div>
  </section>
  <!-- main contain end -->






  <section>
    <footer>
      <div class="footer-background-color p-3">
        <div class="container-fluid">

          <!-- some text or link list start -->
          <div class="row  pb-4 pl-4 pr-4" >
            <div class="col-sm-4 col-md-4 col-lg-4" align="center">
              <h4 class="footer-text-c">School Software</h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" align="center">
              <h4 class="footer-text-c">School Software</h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" align="center">
              <h4 class="footer-text-c">School Software</h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="ul-maintaines p-2">
                    <li><a href="#">Total Student</a></li>
                    <li><a href="#">Total Teacher</a></li>
                    <li><a href="#">using white</a></li>
                    <li><a href="#"> Student Option</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<!-- some text or link list end -->



<!-- secound row start -->
  <section class="pl-2 pr-2 pl-2">
    <div class="footer-secound-row-back">
      <div class="row p-3">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4 class="footer-text-c">Profile</h4>
          <img class="profile-images" src="rec/img/img01.jpg" alt="">
           <p class="profile-some-text">Elements after a floating element will flow around it.
              To avoid this, use the clear property or
             the clearfix hack (see example at the bottom of this page</p>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4 class="footer-text-c">popular profile</h4>
          <div>
              <img class="popular-profile-images mr-3" src="rec/img/img01.jpg" alt="">
              <p class="popular-profile-text">hi i am zahid hasan. i'm fontend designer.</p>
          </div>
          <div>
              <img class="popular-profile-images mr-3" src="rec/img/img01.jpg" alt="">
              <p class="popular-profile-text">hi i am zahid hasan. i'm fontend designer.</p>
          </div>
          <div>
              <img class="popular-profile-images mr-3" src="rec/img/img01.jpg" alt="">
              <p class="popular-profile-text">hi i am zahid hasan. i'm fontend designer.</p>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4 class="footer-text-c">Best saller Image</h4>
          <div class="row p-1">
            <div class="col-md-12">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
              <img class="some-images" src="rec/img/img01.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h4 class="footer-text-c">Author Profile</h4>
          <img class="profile-images" src="rec/img/img01.jpg" alt="">
           <p class="profile-some-text">Elements after a floating element will flow around it.
              To avoid this, use the clear property or
             the clearfix hack (see example at the bottom of this page</p>
        </div>

      </div>
    </div>
  </section>

  <!-- end secound row -->



  <!-- start thart row -->
  <section class="footer-end-link-color">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
    </div>
  </section>

  <!-- end thart row -->
        </div>
      </div>
    </footer>
  </section>

<script type="text/javascript" src="rec/js/bootstrap.bundle.js"></script>
</body>
</html>
