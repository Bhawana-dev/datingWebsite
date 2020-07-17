<?php
if(isset($_SESSION['login_user']))
{
    ?>
    <!-- common-header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="home.php">
                                <!--<img src="img/logo.png" alt="">-->
                                <img src="img/svg_icon/logo5.png" alt="" style="height:120px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <div class="main-menu  d-none d-lg-block text-right">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="home.php">My account</a></li><!--../router.php?action=Users-->
                                    <li><a href="favlist.php?">Favourite List</a></li>
                                    <li><a href="about.php">About</a></li>

                                    <!--<li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.php">blog</a></li>
                                            <li><a href="single-blog.php">single-blog</a></li>
                                        </ul>
                                    </li>-->
                                    <!--<li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="portfolio-work.php">Portfolio work</a></li>
                                            <li><a href="work-details.php">work details</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="elements.php">elements</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="../router.php?action=Logout">Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- common-header-end -->
    <?php
}else{
    ?>
    <!-- common-header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/svg_icon/logo5.png" alt="" style="height:120px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu  d-none d-lg-block text-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">home</a></li>
                                        <li><a href="about.php">About</a></li>

                                        <!--<li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">blog</a></li>
                                                <li><a href="single-blog.php">single-blog</a></li>
                                            </ul>
                                        </li>-->
                                        <!--<li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="portfolio-work.php">Portfolio work</a></li>
                                                <li><a href="work-details.php">work details</a></li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="elements.php">elements</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login/login.php">Login</a><span style="color:#fff;">&nbsp;&Verbar;&nbsp;</span><a href="login/index.php">Register</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- common-header-end -->
<?php
}
?>
