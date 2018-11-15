<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php"); include("config.php") ?>
<body>
<script>
$(document).ready(function(){
  $("#stc").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#course-content").offset().top
    }, 2000);
  });
});
</script>
<?php include("partials/nav.php") ?>

        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h4>Website Belajar Online</h4>
                                <h1>IMPROVE YOUR SKILLS<br/>From Zero To Pro</h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Bergabunglah bersama Kami untuk belajar kapapun dan dimanapun secara gratis</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer read-more">
                                <a href="#course-content" id="stc">Start Learning</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->

   

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 align-content-lg-stretch">
                    <header class="heading">
                        <h2 class="entry-title">About LearningThis</h2>

                        <p>Learning This adalah sebuah portal belajar pemrograman gratis. Mengedepankan kualitas pembelajaran
                          sehingga kualitas sangat terjamin.
                        </p>
                    </header><!-- .heading -->

                      
            </div><!-- .row-->
        </div><!-- .container-->
    </section><!-- .about-section -->



    <section class="featured-courses vertical-column courses-wrap">
        <div class="container" id="course-content">
            <div class="row mx-m-25">
              <div class="col-md-12 text-center">
                <h2 class="entry-title">Featured Courses</h2>
              </div>

                

                <?php
                                    $sql = $db->query("select * from course");
                                    while ($value = $sql->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                        <div class="col-12 col-md-4 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                    <a href="<?= $value['title'] ?>.php?id=<?=$value['id_course'] ?>"><img src="<?php echo "images/".$value['photo']; ?>" alt=""></a>
                                </figure><!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?= $value['title'] ?>.php?id=<?=$value['id_course'] ?>"><?php echo $value['title']; ?></a></h2>

                                        <div class="entry-meta flex flex-wrap align-items-center">
                                            <div class="course-author"><a href="#"> <?php echo $value['author']; ?></a></div>

                                            <div class="course-date"><?php echo $value['create_date']; ?></div>
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                        <div class="course-cost">
                                            <!-- $45 <span class="price-drop">$68</span> -->
                                        </div><!-- .course-cost -->

                                       
                                    </footer><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->
                                    <?php } ?>

                <div class="col-12 px-25 flex justify-content-center">
                    <a class="btn" href="courses.php">view all courses</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .courses-wrap -->

  

    <?php include("partials/logo.php") ?>
      <?php include("partials/footer.php") ?>

<script type="text/javascript" src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/bootstrap.js'></script>

</body>
</html>
