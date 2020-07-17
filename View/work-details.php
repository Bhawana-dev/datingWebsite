<?php
session_start();
if(isset($_SESSION['login_user']))
{
    require '../Model/Register.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View profile</title>
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
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<?php include 'header.php'; ?>
<!-- header-end -->

<!-- bradcam_area  -->
<div class="bradcam_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php
                $single_id = $_GET['id'];
                $register = new Register;
                $res = $register->fetchSingleProfileModel($single_id);
                $row = mysqli_fetch_array($res);
                ?>
                <div class="bradcam_text text-center">
                    <h3><?php echo $row['name']; ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<div class="work_details_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="details_catagory_wrap">
                    <div class="single_catagory">
                        <span>Client</span>
                        <h4>Mesica Chouhan</h4>
                    </div>
                    <div class="single_catagory">
                        <span>Category</span>
                        <h4>Mobile App</h4>
                    </div>
                    <div class="single_catagory">
                        <span>Project Date</span>
                        <h4>Oct 12, 2019</h4>
                    </div>
                    <div class="single_catagory">
                        <span>Share Project</span>
                        <div class="social_links">
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                        </div>
                    </div>
                    <p style="display:none;"><?php echo $fav_id = $_GET['id']; echo $u_id = $_SESSION['login_id']; ?></p>
                    <div class="single_catagory">
                        <a class="boxed-btn3 porject_btn" href="../router.php?action=favList&&login_id=<?php echo $u_id; ?>&&fav_id=<?php echo $fav_id; ?>">Like</a>
                        <?php
                        if(isset($_GET['res']))
                        {
                            ?>
                            <h4>Added in your favourite list</h4>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="banner" style="width:60%;margin-left:auto;margin-right:auto;">
                    <img src="img/details/new/<?php echo $row['picture']; ?>" alt="" style="height:550px;">
                </div>
                <?php ?>
                <div class="details_info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info">
                                <p>A wonderful serenity has taken to the possession of my entire soul network infrastructure, including consolidation of established network designed and created infrastructure. Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info">
                                <p>A wonderful serenity has taken to the possession of my entire soul network infrastructure, including consolidation of established network designed and created infrastructure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details_single_img">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="thumb">
                                <img src="img/details/1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="thumb">
                                <img src="img/details/2.png" alt="">
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

<!-- footer start -->
<?php include 'footer.php'; ?>
<!--/ footer end  -->

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