<?php
session_start();
if(isset($_SESSION['login_user']))
{
    require '../Model/Register.php';
    require '../Model/Wink.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Myaccount</title>
    <link rel="icon" href="img/svg_icon/love.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .portfolio_area .portfolio_wrap .single_gallery{width:33.3%;}
    </style>
</head>

<body onload="myFunction()"><!--href="../router.php?action=winkSelect"-->
<?php /*$wink = new winking;
$login_id = $_SESSION['login_id'];
      $res = $wink->winkSelectFunc($login_id );
        //while($row = mysqli_fetch_array($res))
        //{ */?>
<script>
    /*function myFunction() {
        alert("You have been winked by <?php //$row[0] ?>");
    }*/
</script>
<?php// }?>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php include 'header.php'; ?>

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="outline_text d-none d-lg-block">
            Welcome in Love world
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="slider_text text-center">
                        <span>Hello <a href="updateProfile.php" style="color:#0181F5;"><?php echo $_SESSION['login_user']; ?></a></span>
                        <h3><?php
                            $u_id = $_SESSION['login_id'];
                            $picture = $_SESSION['picture'];
                            ?>
                            <?php if(isset($picture)) {?>
                                <a href="updateProfile.php"><img src="img/portfolio/<?php echo $picture; ?>" style="width:20%;border-radius: 150px; margin-top:100px;"></a>
                            <?php }else{ ?>
                                <a href="updateProfile.php"><img src="img/portfolio/profile.png" style="width:20%;border-radius: 150px; margin-top:100px;"></a>
                            <?php } ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


<div class="portfolio_area">
    <!-- <div class="container-fluid p-0"> -->
    <div class="portfolio_wrap">
        <?php $register = new Register;
        $res = $register->fetchAllUsersModel();
        while($row = mysqli_fetch_array($res))
        {
        ?>
            <div class="single_gallery">
                <div class="thumb">
                    <img src="img/portfolio/<?php echo $row['picture']; ?>" alt="">
                </div>
                <div class="gallery_hover">
                    <div class="hover_inner">
                        <a href="work-details.php?id=<?php echo $row['u_id']; ?>"> <h3><?php echo $row['name']; ?></h3>
                        <!--<a href="../router.php?action=singleProfile&&id=<?php echo $row['u_id']; ?>"> <h3><?php echo $row['name']; ?></h3>-->
                            <span>See full profile</span></a>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
    <!-- </div> -->
    <div class="more_works text-center">
        <a href="portfolio-work.php">More Works</a>
    </div>
</div>


<!-- service_area  -->
<div class="service_area">
    <div class="outline_text white d-none d-lg-block">
        Services
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/1.svg" alt="">
                    </div>
                    <h3>3D Modeling</h3>
                    <p>A wonderful serenity has taken to the  <br> possession of my entire soul network <br> infrastructure, including consolidation of <br> established network designed and</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/2.svg" alt="">
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>A wonderful serenity has taken to the  <br> possession of my entire soul network <br> infrastructure, including consolidation of <br> established network designed and</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_service">
                    <div class="icon">
                        <img src="img/svg_icon/3.svg" alt="">
                    </div>
                    <h3>Architectural Design</h3>
                    <p>A wonderful serenity has taken to the  <br> possession of my entire soul network <br> infrastructure, including consolidation of <br> established network designed and</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ service_area  -->

<div class="creative_blog_area">
    <div class="outline_text blog d-none d-lg-block ">
        Blog
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-6">
                <div class="blog_title">
                    <h3>Our Creative Articles</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="more_blog">
                    <a href="#" class="boxed-btn3">More Blogs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="creative_blog_active owl-carousel">
                    <div class="single_blog">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/creative_blog/1.png" alt="">
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="#">
                                <span class="date">October 19, 2019</span>
                            </a>
                            <a href="#">
                                <h3>Industry as their over draft</h3>
                            </a>
                            <div class="owner_info">
                                <div class="author_thumb">
                                    <img src="img/creative_blog/author2.png" alt="">
                                </div>
                                <div class="info">
                                    <a href="#"><h4>Mesica Chouhan</h4></a>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_blog">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/creative_blog/2.png" alt="">
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="#">
                                <span class="date">October 19, 2019</span>
                            </a>
                            <a href="#">
                                <h3>Construction their over draft</h3>
                            </a>
                            <div class="owner_info">
                                <div class="author_thumb">
                                    <img src="img/creative_blog/author3.png" alt="">
                                </div>
                                <div class="info">
                                    <a href="#"><h4>Mesica Chouhan</h4></a>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_blog">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/creative_blog/3.png" alt="">
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="#">
                                <span class="date">October 19, 2019</span>
                            </a>
                            <a href="#">
                                <h3>Industry as their over draft</h3>
                            </a>
                            <div class="owner_info">
                                <div class="author_thumb">
                                    <img src="img/creative_blog/author.png" alt="">
                                </div>
                                <div class="info">
                                    <a href="#"><h4>Mesica Chouhan</h4></a>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_blog">
                        <div class="thumb">
                            <a href="#">
                                <img src="img/creative_blog/4.png" alt="">
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="#">
                                <span class="date">October 19, 2019</span>
                            </a>
                            <a href="#">
                                <h3>Industry as their over draft</h3>
                            </a>
                            <div class="owner_info">
                                <div class="author_thumb">
                                    <img src="img/creative_blog/author.png" alt="">
                                </div>
                                <div class="info">
                                    <a href="#"><h4>Mesica Chouhan</h4></a>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- testimonial_area  -->
<div class="testimonial_area ">
    <div class="outline_text white testmonial d-none d-lg-block">
        Testimonial
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="single_testmonial text-center">
                                    <div class="thumb">
                                        <img src="img/testmonial/thumb.png" alt="">
                                    </div>
                                    <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                    <div class="testmonial_author">
                                        <h3>Mesica Chouhan</h3>
                                        <span>Mesica Chouhan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="single_testmonial text-center">
                                    <div class="thumb">
                                        <img src="img/testmonial/thumb.png" alt="">
                                    </div>
                                    <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                    <div class="testmonial_author">
                                        <h3>Mesica Chouhan</h3>
                                        <span>Mesica Chouhan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="single_testmonial text-center">
                                    <div class="thumb">
                                        <img src="img/testmonial/thumb.png" alt="">
                                    </div>
                                    <p>Innovative brewing methods and our coffee is sourced from various parts of the globe and are roasted to perfection. </p>
                                    <div class="testmonial_author">
                                        <h3>Mesica Chouhan</h3>
                                        <span>Mesica Chouhan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->

<!-- discuss_projects_start  -->
<div class="discuss_projects">
    <div class="outline_text white project d-none d-lg-block">
        Let’s talk
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project_text text-center">
                    <h3>Let’s start your project with us</h3>
                    <a class="boxed-btn3" href="#">Start Talking</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- discuss_projects_end  -->

<?php include 'footer.php'; ?>

<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
</body>

</html>
<?php }
else{
    header("Location: index.php");
} ?>