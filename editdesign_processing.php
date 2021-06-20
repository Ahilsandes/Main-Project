<?php
      require("dbconnection.php");

//MOVE UPLOADED IMAGE TO DB FOLDERS
      $design_id = $_POST['design_id'];
$design_name = $_POST['design_name'];
$design_description = $_POST['design_description'];
$file=$_FILES["file1"]["name"];
$target_dir="uploads/";
$target_path=$target_dir.$file;
move_uploaded_file($_FILES['file1']['tmp_name'],$target_path);
  
$q="UPDATE  `tbl_design` SET `design_name`='$design_name', `design_description`='$design_description', `dimage1`='$file' WHERE `design_id`=$design_id";
 mysqli_query($con, $q) or  die("RESULT will not get <br>$q");
mysqli_close($con);
  header("Location: viewdesign.php");


?>
