<?php
session_start();
if(isset($_SESSION['id']))
{
    ?>
<?php
require('dbconnection.php');
$uid= $_SESSION['id'];
$q2="SELECT * FROM `tbl_design` WHERE designer_id=$uid";
$result=mysqli_query($con,$q2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ROSE GARDENS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico"></link>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#"  title="rosegardens@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: rosegardens@gmail.com</span></a>
                                <a href="#"  title="+919961466935"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +919961466935</span></a>
                            </div>
                <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">

                                <!-- Login -->
                                <div class="login">
                                                                    Welcome
                                    <a href="logout.php"  ><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                                                        <a href="userchangepass.php"> Change password?  </a>
                                </div>

                                <!-- Cart -->
                                <div class="cart" style="padding-left:10px">
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart </span></a>
                                </div>

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

                        <!-- Nav Brand -->


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

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="gardner-index.php">Home</a></li>
                                    <li><a href="Uploaddesign.php">Upload Design</a></li>
                                    <li><a href="viewdesign.php">View Design</a></li>

                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
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

    <!-- ##### Hero Area Start ##### -->
    <section class= "hero-area" style="background-image: url(img/bg-img/16.jpg);">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->


            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->

                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Plants exist in the weather and light rays that surround them</h2>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>


    </section>

    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>YOUR DESIGNS</h2>

                    </div>
                </div>
            </div>

            <div class="row">
<?php $i=1;


while ($row = mysqli_fetch_array($result)){
if ($i<5) {
    # code...

    ?>
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                     <div >
                        <!-- Product Image -->
                       <div class="">
                            <a href="designdetails.php?id=<?php echo $row['design_id']; ?>"><img style="width: 250px; height: 250px;" src="<?php echo 'uploads/'.$row['dimage1']; ?>" ></a>


                        </div>
                        <!-- Product Info --><center>
                        <div class="product-info mt-15 text-center align-items-center">
                            <a href="designdetails.php?id=<?php echo $row['design_id']; ?>">
                                <p><?php echo $row['design_name']; ?></p>
                            </a>


                        </div>
                    </center>
                    </div>
                </div>

<?php
}
$i=$i+1;}
?>


                <div class="col-12 text-center">
                    <a href="viewdesign.php" class="btn alazea-btn">View All</a>
                </div>
            </div>
        </div>
    </section>
      <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">

                    <div class="container">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Rose Gardens,Kalathipady,Kottayam</p>
                                <p><span>Phone:</span> +91 9961466935</p>
                                <p><span>Email:</span> rosegardens@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 8 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
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
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Rose Gardens</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="user_index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
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
        header("location:index.php");
    }
?>

    <script>
     function logout()
     {
             var x=confirm("Click ok  to logout");
             if(x===true)
             {


                 window.location.assign("logout.php");


             }
             else
             {
                 return false;
             }
     }
     </script>
