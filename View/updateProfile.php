<?php
session_start();
if(isset($_SESSION['login_user']))
{
    include '../Model/Register.php';
    ?>
    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My profile</title>
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
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
        <style>
            .button-submit a :hover{color:red; !important;}
        </style>
    </head>

    <body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->
    <?php include 'header.php'; ?>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Update Profile</h3>
                        <h4 style="color:#fff; border:1px solid #fff;"><?php if(isset($_GET['favDelRes']) && $_GET['favDelRes']==1){ echo "The person removed from favourite list";} ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <!--================Blog Area =================-->

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h3 class="mb-30">Update Profile</h3>
                    <div class="blog_left_sidebar">
                        <?php
                        $u_id = $_SESSION['login_id'];
                        $register = new Register;
                        $result = $register->fetchSingleProfile($u_id);
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div>
                            <?php if($row['picture'] != "") {?>
                                    <img src="img/portfolio/<?php echo $row['picture']; ?>" style="width:40%;border-radius: 150px;">
                            <?php }else{ ?>
                                    <img src="img/portfolio/profile.png" style="width:40%;border-radius: 150px;">
                            <?php } ?>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="../router.php?action=UpdateProfile">
                            <div class="mt-10">
                                Upload photo <input type="file" name="image"
                                       class="single-input-primary">
                            </div>
                            <input type="text" name="oldPic" value="<?php echo $row['picture']; ?>" hidden>
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                                       class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="age" placeholder="Age" value="<?php echo $row['age']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Age'" required
                                       class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="gender" placeholder="Gender" value="<?php echo $row['gender']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gender'" required
                                       class="single-input-primary" >
                            </div>
                            <!--<div class="input-group-icon mt-10">
                                <div class="form-select" id="default-select"">
                                <select name="gender">
                                    <option>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>-->
                            <div class="mt-10">
                                <input type="email" name="email" placeholder="Email address" value="<?php echo $row['email']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                       class="single-input-primary">
                            </div>
                            <!--<div class="mt-10">
                                <input type="text" name="password" placeholder="OPassword" value="<?php $row['password'];?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                                       class="single-input-primary" hidden>
                            </div>
                            <div class="mt-10">
                                <input type="password" name="oldpassword" placeholder="Old Password"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Old password'"
                                       class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="password" name="newpassword" placeholder="New Password"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'New password'"
                                       class="single-input-primary">
                            </div>-->
                            <div class="mt-10">
                                <input type="number" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile'" required
                                       class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="country" placeholder="Country" value="<?php echo $row['country']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'" required
                                       class="single-input-primary">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="city" placeholder="City" value="<?php echo $row['city']; ?>"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" required
                                       class="single-input-primary">
                            </div><br><br>
                            <div class="button-group-area mt-40 button-submit">
                                <button tyle="submit" name="update" style="background-color: #ff5e13;border:0px;padding:10px;border-radius: 20px;color:#fff;">Update</button>
                            </div>
                        </form><br>
                        <h4 style="color:#ff5e13;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?></h4>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <!-- footer start -->
    <?php include 'footer.php'; ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
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