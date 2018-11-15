<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php");
  session_start();
?>
<body class="single-courses-page">
    <div class="page-header-lecture">
        <?php include("partials/navlectures.php");?>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h1>MY PROFILE</h1>
            </div>
          </div>
        </div>
    </div><!-- .page-header -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="myprofile text-center">
                <img src="images/<?=$_SESSION['user']['photo'];?>" alt=""/>
                <h1><?=$_SESSION['user']['username'];?></h1>
                <h2><?=$_SESSION['user']['name'];?></h2>
                <h6><?=$_SESSION['user']['email'];?></h6>
                <h5>Tanggal Lahir :</h5>
                <h4><?=$_SESSION['user']['tgllahir'];?></h4>
                <br/>
                <h5 class="enrolledtitle">Enrolled Course</h5>
                <h4 class="enrollednumber">0</h4>
                <a href="#" class="btn btn-info" role="button">LOGOUT</a>
              </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

    <?php include("partials/logo.php") ?>

  <?php include("partials/footer.php"); ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>
