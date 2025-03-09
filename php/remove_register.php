<?php 
$con = new mysqli("localhost","root","","project_school");
$remove =$_POST['dele_post'];
$sql = "DELETE FROM `register` WHERE `id` = '$remove'";
$con->query($sql);
if($con){
    header("Location:view_list_register.php");
}
?>