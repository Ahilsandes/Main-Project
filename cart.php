<?php
session_start();
if(isset($_SESSION['id']))
{
    $total=0;?>
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
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart </span></a>
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
            <h2>Cart</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container" >
            <div class="row" style="padding-left: 300px;">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <?php
                        require("dbconnection.php");

$id=$_SESSION['id'];
$q2="SELECT * FROM `tbl_cart` WHERE `user_id`=$id AND `status`!=3";
$result=mysqli_query($con,$q2);
if(mysqli_fetch_array($result)==0)
{
    echo "<h1 style= 'color:green;'>Your Cart is empty!!!! <br>Happy Shopping</h1>";
}
else{
    $result=mysqli_query($con,$q2);

$cart_id=0;
while ($row = mysqli_fetch_array($result))
{

$cart_id= $row['cart_id'];
$pid = $row['Plant_id'];
$q3="SELECT * FROM `tbl_plant` WHERE `Plant_id`=$pid";
$result1=mysqli_query($con,$q3);
while ($row1 = mysqli_fetch_array($result1))
{

?>
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <!-- <th>Quantity</th> -->
                                    <th>Price</th>
                                   <!--  <th>TOTAL</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="plantdetails.php?id=<?php echo $row1['Plant_id']; ?>"><img src="<?php echo 'uploads/'.$row1['Image1']; ?>" ></a>
                                        <h5><?php echo $row1['Plant_name']; ?></h5>
                                    </td>
                                    <?php $amount=$row1['Plant_amount'];
                                    $total=$total+$amount;
                                   ?>
                                    <td class="price"><span><?php echo " ".$row1['Plant_amount']." /-"; ?></span></td>

                                    <!-- <td class="total_price"><span>$9.99</span></td> -->
                                    <td class="action"><a href="deleteorder.php?id=<?php echo $row['cart_id']; ?>"><i class="icon_close"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                        }




}?>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. The order total will update to indicate the savings specific to the coupon code entered.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                            <button type="submit">APPLY COUPON</button>
                        </form>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">Cart Total</h5>
                        <div class="subtotal d-flex justify-content-between">
                            <h5>Subtotal</h5>
                            <h5><?php echo $total; ?></h5>
                        </div>
                        <div class="shipping d-flex justify-content-between">
                            <h5>Shipping</h5>
                            <div class="shipping-address">
                                <form action="#" method="post">

                                    <button onclick="<?php $total=$total+100;?>">Update Total</button>
                                </form>
                            </div>
                        </div>
                        <div class="total d-flex justify-content-between">
                            <h5>Total (Shipping charge:100)</h5>
                            <h5 id="tot"><?php echo $total; ?></h5>

                        </div>
                        <div class="checkout-btn">
                            <a href="addorder.php?id=<?php $cart_id; ?>" class="btn alazea-btn w-100">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>

 <?php
}
?>
<div style="padding: 100px;"></div>
                </div>

            </div>

        </div>
    </div>

    <!-- ##### Cart Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
     <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->




                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">


                            <!-- Single Best Seller Products -->


                    <!-- Single Footer Widget -->
                    <div class="col-12 ">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> 505 Silk Rd, New York</p>
                                <p><span>Phone:</span> +1 234 122 122</p>
                                <p><span>Email:</span> info.deercreative@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
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
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
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
    header("location:login.html");
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
