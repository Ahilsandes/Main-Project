<?php
session_start();
if(isset($_SESSION['id']))
{
    ?>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ROSE GARDENS</title>


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
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+919961466935"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +919961466935</span></a>
                            </div>


                            <div class="top-header-meta d-flex">


                                <div class="login">
                                    <a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                </div>

                                <div class="cart">
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div>
                            </div>
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


                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>

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
            <h2>DESIGN DETAILS</h2>
        </div>

       
    </div>
    <div style="padding: 20px;"></div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Single Product Details Area Start ##### -->
<!--     <form method="get" action="#"></form> -->
<?php
require('dbconnection.php');
$did = $_GET['id'];
echo "sdsf       ",$did;
$q2="SELECT * FROM `tbl_design` d,`tbl_register` r WHERE d.designer_id= r.login_id AND`design_id`=$did";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>
<input type="hidden" name="pid" value="<?php echo $row['design_id']; ?>">

    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        
                                        <img src="<?php echo 'uploads/'.$row['dimage1']; ?>" >
                                   
                                    </div>
                                    
                                </div>


                              
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title"><?php echo $row['design_name']; ?></h4>
                            

                            <div class="short_overview">
                                <p></p>
                            </div>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                <form class="cart clearfix d-flex align-items-center" method="post" action="addtocart.php">
                                   <div class="col-12 text-center">
                    <a href="#" class="btn alazea-btn">Contact Designer</a>
                </div>
                                      <label style="color: black;font-size: 20px; ">  <?php echo $row['fname']," ",$row['lname'],"<br>",$row['phone'],"<br>",$row['email']; ?></label/>
                                   
                                </form>
                                <!-- Wishlist & Compare -->
                                <div class="wishlist-compare d-flex flex-wrap align-items-center">
                                    
                                </div>
                            </div>

                            <div class="products--meta">
                             

                                <p><span>Design description:</span> <span><?php echo $row['design_description']; ?></span></p>
                                
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

     <?php

}?>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <!-- ##### Related Product Area Start ##### -->
    
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












 