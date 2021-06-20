<?php
      require("dbconnection.php");

//MOVE UPLOADED IMAGE TO DB FOLDERS
$Plant_id = $_POST['Plant_id'];
$Plant_name = $_POST['Plant_name'];
$Plant_category = $_POST['Plant_category'];
$Plant_description = $_POST['Plant_description'];
$Plant_height = $_POST['Plant_height'];
$Common_name = $_POST['Common_name'];
$Bloom_time = $_POST['Bloom_time'];
$Flower_colour = $_POST['Flower_colour'];
$Planting_care = $_POST['Planting_care'];
$Plant_amount = $_POST['Plant_amount'];
$file=$_FILES["file1"]["name"];
$target_dir="uploads/";
$target_path=$target_dir.$file;
move_uploaded_file($_FILES['file1']['tmp_name'],$target_path);
  
$q="UPDATE  `tbl_plant` SET `Plant_name`='$Plant_name', `Plant_category`=$Plant_category, `Plant_description`='$Plant_description', `Plant_height`='$Plant_height',`Common_name`='$Common_name',`Bloom_time`='$Bloom_time',`Flower_colour` ='$Flower_colour',`Planting_care`='$Planting_care',`Plant_amount`=$Plant_amount, `Image1`='$file' WHERE `Plant_id`=$Plant_id";
 mysqli_query($con, $q) or  die("RESULT will not get ==$Plant_name ==$Plant_amount ==$Plant_description==$Plant_height==$Common_name==$<br>$q");
mysqli_close($con);
  header("Location: addedplant.php");


?>
