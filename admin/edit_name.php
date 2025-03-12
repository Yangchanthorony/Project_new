<?php 
$con = new mysqli("localhost","root","","project_school");
$edit_id = $_POST['edit_id'];
$FirstName = $_POST['First_Name'];
$LastName = $_POST['Last_Name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$dob = $_POST['day'];
$date = date('Y-m-d H:i:s');
$sql = "UPDATE `register` SET `First Name`='$FirstName',`Last Name`='$LastName',`gender`='$gender',`Email`='$email',`dob`='$dob',`Date`='$date'
 WHERE `id`='$edit_id'";
 $con->query($sql);
 if($con){
    header("Location: view_list_register.php");
 }


?>