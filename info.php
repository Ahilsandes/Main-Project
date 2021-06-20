<?php
session_start();
$con=mysqli_connect("localhost","root","","rosegardens") or die("couldnt connect to the server");
if(isset($_SESSION['id']))
{
  ?><!DOCTYPE html>
<html lang="en">

<head>
    <title> ROSE GARDENS </title>
	<link rel="icon" href="img/core-img/favicon.ico">
	<link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <header class="header-area">


        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">

                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="rosegardens@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: rosegardens@gmail.com</span></a>

                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                              <!-- Top Header Content -->
                              <div class="top-header-meta d-flex">

                                  <div class="login">
                                      <a href="admin-index.php"> <span>Home</span></a>
                                  </div>
                                  <div class="login">
                                      <a href="addplant.php"> <span>Add Plants</span></a>
                                  </div>
                                  <div class="login">
                                      <a href="addedplant.php"> <span>View Plants</span></a>
                                  </div>
                                  <div class="login">
                                      <a href="addcategory.php"> <span>Add Category</span></a>
                                  </div>
                                  <div class="login">
                                      <a href="logininformations.php"> <span>View Users</span></a>
                                  </div>
                                  <div class="login">
                                      <a href="#"> <span>Reports</span></a>
                                  </div>
                                  <!-- Login -->
                                  <div class="login">
                                      <a href="#" onclick="logout()"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                  </div>
                                  <!-- Cart -->
                                  <div class="cart">
                                      <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                  </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">



                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>


                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>USER DETAILS</h2>
        </div>

    </div>

<br>
<br>
<center>







<div class="container" style="text-align: center; padding-left:350px; color:black">

// CONTENTS TO BE DISPLAYED




</div>






</center>




    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">

                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">
				</div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

					</div>
                    </div>
					</div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
<?php
}
else
{
header("location:login.html");
}
?>
<div class="input-group" style="color: green;">
  <h6>GENDER</h6>
  <input type="radio" id ="male" name="gender" value="MALE">
  <label for="male">MALE</label>
  <input type="radio" id ="female" name="gender" value="FEMALE">
  <label for="female">FEMALE</label>

</div>
