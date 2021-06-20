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
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {font-size: 15px;}
.center {
  margin: auto;
  width: 50%;

}
</style>
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
                          </div>
                      </div>
                  </div>
              </div>
                            <div class="alazea-main-menu">
                                <div class="classy-nav-container breakpoint-off">
                                    <div class="container">

                                        <nav class="classy-navbar justify-content-between" id="alazeaNav">





                                            <div class="classy-navbar-toggler">
                                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                                            </div>


                                            <div class="classy-menu">


                                                <div class="classycloseIcon">
                                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                                </div>


                                                <div class="classynav">
                                                    <ul>
                                                        <li><a href="user-index.php">Home</a></li>
                                                        <li><a href="about.php">About</a></li>

                                                        <li><a href="shop.php">Shop</a></li>

                                                        <li><a href="contact.php">Contact</a></li>
                                                    </ul>


                                                    <div id="searchIcon">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>

                                                </div>

                                            </div>
                                        </nav>



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

                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>CHANGE PASSWORD</h2>
        </div>

    </div>

<br>
<br>
<center>
    <form action="tochangepass.php" method="post">
  <div class="container" >
    <div class="row">
      <div class="col" style="color:green ;padding-bottom: 20px;">
          Old Password
      </div>
      <div class="col">
        <input type="text" id="passname1" name="passname1" class="form-control" required="">
      </div>
    </div>
    <div class="row">
      <div class="col" style="color:green ;padding-bottom:20px;">
          New Password
      </div>
      <div class="col">
        <input type="text" id="passname2" name="passname2" class="form-control" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters " placeholder="Must contain at least one  number and one uppercase and lowercase letter at least 6">
      </div>
    </div>
    <div class="row">
      <div class="col" style="color:green ;padding-bottom:20px;">
          Confirm Password
      </div>
      <div class="col">
        <input type="text" id="passname3" name="passname3" class="form-control" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one  number and one uppercase and lowercase letter,  at least 6 " >
      </div>
    </div>

    </div>

    <div class="center"  style="padding-top:20px; align:center;">
  <input type="submit" class="button button1" name="cpass" value="UPDATE PASSWORD" required="">
    </div>
</form>
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
