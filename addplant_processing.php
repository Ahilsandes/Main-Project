<?php
// print_r($_POST);print_r($_FILES);die();

if(
  !isset($_POST['user_id']) ||
  !isset($_POST['Plant_name']) ||
  !isset($_POST['Plant_category']) ||
  !isset($_POST['Plant_description']) ||
  !isset($_POST['Plant_amount'])
  )
  die('invalid data');

  else{

//MOVE UPLOADED IMAGE TO DB FOLDERS

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
    require("dbconnection.php");
$q="INSERT INTO `tbl_plant`( `Plant_name`, `Plant_category`, `Plant_description`, `Plant_height`,`Common_name`,
  `Bloom_time`,`Flower_colour`,`Planting_care`,`Plant_amount`, `Status`, `Image1`) VALUES
   ('$Plant_name', $Plant_category,'$Plant_description','$Plant_height','$Common_name','$Bloom_time','$Flower_colour',
     '$Planting_care',$Plant_amount, 1, '$file')";
 mysqli_query($con, $q) or  die("RESULT will not get ==$Plant_name ==$Plant_amount ==$Plant_description==$Plant_height==$Common_name==$<br>$q");
mysqli_close($con);
  header("Location: addedplant.php");
}

?>
