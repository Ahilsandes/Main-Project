<?php
session_start();
if(isset($_SESSION['id']))
{
    $total=0;?>
    <!DOCTYPE html>
<html>
<head>
     <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <style type="text/css">
        body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(0, 0, 34);
    font-size: 0.8rem
}

.card {
    max-width: 1000px;
    margin: 2vh
}

.card-top {
    padding: 0.7rem 5rem
}

.card-top a {
    float: left;
    margin-top: 0.7rem
}

#logo {
    font-family: 'Dancing Script';
    font-weight: bold;
    font-size: 1.6rem
}

.card-body {
    padding: 0 5rem 5rem 5rem;
    background-image: url("https://i.imgur.com/4bg1e6u.jpg");
    background-size: cover;
    background-repeat: no-repeat
}

@media(max-width:768px) {
    .card-body {
        padding: 0 1rem 1rem 1rem;
        background-image: url("https://i.imgur.com/4bg1e6u.jpg");
        background-size: cover;
        background-repeat: no-repeat
    }

    .card-top {
        padding: 0.7rem 1rem
    }
}

.row {
    margin: 0
}

.upper {
    padding: 1rem 0;
    justify-content: space-evenly
}

#three {
    border-radius: 1rem;
    width: 22px;
    height: 22px;
    margin-right: 3px;
    border: 1px solid blue;
    text-align: center;
    display: inline-block
}

#payment {
    margin: 0;
    color: blue
}

.icons {
    margin-left: auto
}

form span {
    color: rgb(179, 179, 179)
}

form {
    padding: 2vh 0
}

input {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

.header {
    font-size: 1.5rem
}

.left {
    background-color: #ffffff;
    padding: 2vh
}

.left img {
    width: 2rem
}

.left .col-4 {
    padding-left: 0
}

.right .item {
    padding: 0.3rem 0
}

.right {
    background-color: #ffffff;
    padding: 2vh
}

.col-8 {
    padding: 0 1vh
}

.lower {
    line-height: 2
}

.btn {
    background-color: rgb(23, 4, 189);
    border-color: rgb(23, 4, 189);
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin: 4vh 0 1.5vh 0;
    padding: 1.5vh;
    border-radius: 0
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}

input[type=checkbox] {
    width: unset;
    margin-bottom: unset
}

#cvv {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center
}

#cvv:hover {}
    </style>
    <title></title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>

<div class="card">
    <form action="placeorder.php?total=<?php echo  $total; ?>" method="post">
    <div class="card-top border-bottom text-center"> <a href="shop.php"> Back to shop</a> <span id="logo">Rose Gardens</span> </div>
    <div class="card-body">
        <div class="row upper"> <span><i class="fa fa-check-circle-o"></i> Cart</span> <span><i class="fa fa-check-circle-o"></i> Order details</span> <span id="payment"><span id="three">3</span>Payment</span> </div>
        <div class="row">
            <div class="col-md-7">
                <div class="left border">
                    <div class="row"> <span class="header">Payment</span>
                        <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                    </div>
                    <form> <span>Cardholder's name:</span> <input placeholder="Linda Williams" pattern="[A-Za-z]{1,32}" required="">
                     <span>Card Number:</span> <input placeholder="0125 6780 4567 9909" pattern= "[0-9]{13,16}" required="">
                        <div class="row">
                            <div class="col-4"><span>Expiry date:</span> <input placeholder="YY/MM" pattern="([0-9]{2}[/]?){2}" required=""> </div>
                            <div class="col-4"><span>CVV:</span> <input id="cvv" pattern="^[0-9]{3}$" required=""> </div>
                        </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right border">
                    <div class="header">Order Summary</div>
                    
                                            <?php
                        require("dbconnection.php");

$id=$_SESSION['id'];
$q2="SELECT * FROM `tbl_cart` WHERE `user_id`=$id AND `status`=2";
$result=mysqli_query($con,$q2);

while ($row = mysqli_fetch_array($result))
{


$pid = $row['Plant_id'];
$q3="SELECT * FROM `tbl_plant` WHERE `Plant_id`=$pid";
$result1=mysqli_query($con,$q3);
while ($row1 = mysqli_fetch_array($result1))
{

?>
                    <div class="row item">
                        <div class="col-4 align-self-center"><img class="img-fluid" src="<?php echo 'uploads/'.$row1['Image1']; ?>" ></div>
                        <div class="col-8">
                            <div class="row"><b><?php echo " ".$row1['Plant_amount']." /-"; ?></b></div>
                            <div class="row text-muted"><?php echo $row1['Plant_name']; ?></div>
                           <?php $amount=$row1['Plant_amount'];
                                    $total=$total+$amount; 
                                   ?>
                        </div>
                    </div>
 <?php
}

}?>
                    <hr>
                    <div class="row lower">
                        <div class="col text-left">Subtotal</div>
                        <div class="col text-right"><?php echo " ".$total." /-"; ?></div>
                    </div>
                    <div class="row lower">
                        <div class="col text-left">Delivery</div>
                        <div class="col text-right">100/-</div>
                    </div>
                    <div class="row lower">
                        <div class="col text-left"><b>Total to pay</b></div>
                        <div class="col text-right"><b><?php $total=$total+100; echo " ".$total." /-"; ?></b></div>
                    </div>
                    <input type="submit" class="btn" name="" value="Place order">
                    <!-- <a class="btn" href="placeorder.php?total=<?php echo  $total; ?>">Place order</a> -->
                    
                    <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div> </div>
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
