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
                                    <li><a href="gardner-index.php">Home</a></li>
                                    <li><a href="Uploaddesign.php">Upload Design</a></li>
                                    <li><a href="viewdesign.php">View Design</a></li>

                                </ul>

                                <!-- Search Icon -->
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
<center>


<?php
require('dbconnection.php');
$id=$_GET['id'];
echo $id;
$q2="SELECT * FROM `tbl_design` WHERE `design_id`=$id";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>
  <form enctype="multipart/form-data" action="editdesign_processing.php" method="post" class="container">
  <input type="hidden" id="uid" name="user_id" value="<?php echo $_SESSION['id']; ?>" class="form-control">
  <table class="table" >
    <tbody>
      <tr>
        <input type="hidden" name="design_id" value="<?php echo $row['design_id']; ?>">
        <th scope="row" style="color: green;"><label for="pname">Design_name:</label></th>
        <td><input type="text" id="dname" name="design_name" class="form-control" required="" value="<?php echo $row['design_name']; ?>" ></td>
      </tr>
      
      <tr>
        <th scope="row"style="color: green;"><label for="pdesc">Design_description:</label></th>
        <td><input type="text" id="pdesc" name="design_description" required="" class="form-control" value="<?php echo $row['design_description']; ?>"></td>
      </tr>
      
      <tr>
        <th scope="row"style="color: green;"><label for="img">Image:</label></th>
        <td>
          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <!-- <input type="file" class="custom-file-input" id="inputGroupFile01"> -->
    <input type="file" id="file1" name="file1" class="form-control custom-file-input" required=""> value="<?php echo 'uploads/'.$row['Image1']; ?>">
    <label class="custom-file-label" for="file1">Choose file</label>
  </div>
</div>
        </td>
      </tr>
      <tr>
      <center>  <td colspan="2" style="text-align:center;"><input type="submit" class="btn btn-success" value="update"></td></center>
      </tr>
    </tbody>
  </table>
  <?php 
  }
   ?>
</form>
</center>


    </section>
    
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

