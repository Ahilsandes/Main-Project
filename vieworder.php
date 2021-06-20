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
        <link rel="stylesheet" href="style1.css">
    <style type="text/css">
        span{
            font-weight: bolder;
            font-size: 11px;
        }
 #btnExport {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
 float: center;
}
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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
            <h2>Orders</h2>
        </div>

    </div>

<section class="ftco-section">
        <div class="container" id="d1">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Orders</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="" style="padding-left: 100px;">
                        <table class="table table-striped" >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Customer</th>
                              <th>Pruchased Price</th>
                              <th>Date</th>
                              <th>Status</th>
                              
                            </tr>
                          </thead>
                          <tbody>
<?php
require('dbconnection.php');
$q2="SELECT order_id, fname, date, total FROM tbl_order o, tbl_register r where o.user_id=r.login_id";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>
                            <tr>
                              <th scope="row"><?php echo $row['order_id']; ?></th>
                              <td><?php echo $row['fname']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['total'];?>/-</td>
                              <td><button class="btn btn-success">payment complete</button> </td>
                              
                            </tr>
<?php
}
?>
                           
                          </tbody>
                        </table>
                        <div style="padding: 20px;">
  <center><button class="btn" id="btnExport" ><i class="fa fa-download"></i> Print</button></center>



</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#d1')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("orders.pdf");
                }
            });
        });
    </script>






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
