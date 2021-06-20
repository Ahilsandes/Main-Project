<?php
// print_r($_POST);print_r($_FILES);die();

if(
  !isset($_POST['user_id']) ||
  !isset($_POST['design_name'])  ||
  !isset($_POST['design_description']) 
  )
  die('invalid data');

  else{

//MOVE UPLOADED IMAGE TO DB FOLDERS
$uid=$_POST['user_id'];
$design_name = $_POST['design_name'];
$design_description = $_POST['design_description'];
$file=$_FILES["file1"]["name"];
$target_dir="uploads/";
$target_path=$target_dir.$file;
move_uploaded_file($_FILES['file1']['tmp_name'],$target_path);
    require("dbconnection.php");
$q="INSERT INTO `tbl_design`( `design_name`, `design_description`, `dstatus`, `dimage1`,`designer_id`) VALUES
   ('$design_name','$design_description', 1, '$file',$uid)";
 mysqli_query($con, $q) or  die("RESULT will not get $q");
mysqli_close($con);
  header("Location: viewdesign.php");
}

?>
