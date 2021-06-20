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
            <h2>Welcome Admin</h2>
        </div>

    </div>


    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->

    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->

    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
   

       <section class="bg-gray section-padding-100">
        <div class="container" >
            <div  style="color: black;padding: 50px;text-align: center;">
          <H1>VIEW PLANTS</H1>      
                
            </div>

            <div class="row">

<?php
require('dbconnection.php');
$q2="SELECT * FROM `tbl_plant` WHERE `Status`=1";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>


<!-- Single Product Area -->
<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="row ">
                            <a href="plant.php"><img style="width: 250px; height: 250px;" src="<?php echo 'uploads/'.$row['Image1']; ?>" alt=""></a>
                            
                                <div class="col-lg-6 text-center">
                                    <a href="editplant.php?id=<?php echo $row['Plant_id']; ?>" class="button">Edit</a>
                                </div> 
                                <div class="col-lg-6 text-center">
                                    <?php
                                    $id= $row['Plant_id']; 
                                    ?>
                                    <a href="deleteplant.php?id=<?php echo $id ?>" class="button">Delete</a>
                                </div>
                            </div>
                       
                        <!-- Product Info -->
                        <div class="product-info mt-15 ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>PLant Name</h6> 
                                </div>
                                <div class="col-lg-6">
                                     <h6><?php echo $row['Plant_name']; ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>PLant Amount</h6> 
                                </div>
                                <div class="col-lg-6">
                                     <h6><?php echo $row['Plant_amount']; ?>/-</h6>
                                </div>
                            </div>
                           
                            
                       
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
</body>

</html>

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
