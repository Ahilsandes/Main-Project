<?php
session_start();
if(!isset($_SESSION['id'])){
  header('login.php');
}
if ($_SESSION["role"]!="admin")
 {
  header("Location: index.php");
}
// print_r($_SESSION);die();

?><!DOCTYPE html>
<html lang="en">

<head>
    <title> ROSE GARDENS </title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        span{
            font-weight: bolder;
            font-size: 13px;
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


        <div class="top-header-area" >
            <div class="container" >
                <div class="row"  >
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center " >

                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="rosegardens@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: rosegardens@gmail.com</span></a>

                            </div>

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
                                    <a href="addquantity.php"> <span>Update stock</span></a>
                                </div>
                                <div class="login">
                                    <a href="viewstock.php"> <span>View stock</span></a>
                                </div>
                                <div class="login">
                                    <a href="logininformations.php"> <span>View Users</span></a>
                                </div>
                                 <div class="login">
                                    <a href="vieworder.php"> <span>View Orders</span></a>
                                </div>
                                <div class="login">
                                    <a href="report1.php"> <span>Reports</span></a>
                                </div>
                                <!-- Login -->
                                <div class="login">
                                    <a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                </div>
                                <!-- Cart -->
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="classynav">

          </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav>



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
  <?php
  require("dbconnection.php");
  $sql1="select * from tbl_register";
  $res1=mysqli_query($con,$sql1);
  echo "<table class='table table-responsive' id='tbl' class='table' style='display:block;'>";
  echo "<tr>";
  echo"<th>First Name</th>";
  echo"<th>Last Name</th>";
  echo"<th>E-mail</th>";
  echo"<th>Phone</th>";
  echo"</tr>";
  while($row=mysqli_fetch_array($res1))
  {
  echo"<tr>";
  echo"<td>",$row['fname'],"</td><td>&nbsp;",$row['lname'],"</td><td>&nbsp;",$row['email'],"</td><td>&nbsp;",$row['phone'],"</td>";
  echo"</tr>";

  }
  echo"  </table>";
  ?>
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
