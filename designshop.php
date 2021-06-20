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


                             <div class="top-header-meta d-flex">

                                <div class="login">
                                    <a href="gardner-index.php" style="color:lightblue"> <span>Home</span></a>
                                </div>

                                <div class="login">
                                    <a href="Uploaddesign.php"style="color:lightblue"><span>Upload Design</span></a>
                                </div>
                                <div class="login">
                                    <a href="viewdesign.php"style="color:lightblue"><span>View Design</span></a>
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

    <div class="breadcrumb-area">

        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>GARDEN DESIGNS</h2>
        </div>


    </div>


    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">


            <div class="row">

<?php
require('dbconnection.php');
$uid= $_SESSION['id'];
$q2="SELECT * FROM `tbl_design` ";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>


<!-- Single Product Area -->
<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="">
                            <a href="designdetailsuser.php?id=<?php echo $row['design_id']; ?>"><img style="width: 250px; height: 250px;"  src="<?php echo 'uploads/'.$row['dimage1']; ?>" ></a>


                        </div>
                        <div class="product-info mt-15 text-center">
                            <a href="designdetailsuser.php?id=<?php echo $row['design_id']; ?>">
                                <p><?php echo $row['design_name']; ?></p>
                            </a>

                        </div>
                    </div>
                  </div>



<?php
}
?>


            </div>
        </div>
    </section>
    <!-- ##### Product Area End ##### -->

    <!-- ##### Blog Area Start ##### -->


    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/plugins/plugins.js"></script>

    <script src="js/active.js"></script>

		<div id="delete_plant" class="modal fade" role="dialog">


		<div class="modal-dialog">


		<div class="modal-content">


		<div class="modal-header">


		<h3>Delete a Plant?</h3>


		<button type="button" class="close" data-dismiss="modal">&times;</button>


		</div>


		<div class="modal-body modal-md deleteblockbody">


		<p>Are you sure you want to delete?</p>


		</div>


		<div class="modal-footer">


				<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">


				<input type="submit" class="btn btn-danger" id="delHbutton" class="delHbutton" value="Delete">


				</div>


		</div>

		</div>


		</div>

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
