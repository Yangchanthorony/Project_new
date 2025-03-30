<?php 
$con = new mysqli("localhost", "root", "", "project_school");

date_default_timezone_set('Asia/Phnom_Penh');
$edit_id = $_POST['edit_id'];
$FirstName = $_POST['First_Name'];
$LastName = $_POST['Last_Name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$degree = $_POST['Degree'];
$skill = $_POST['Skill'];
$price = $_POST['price'];
$number = $_POST['number'];
$dob = $_POST['day'];
$date = date('Y-m-d H:i:s');

$sql = "UPDATE `register` 
        SET `First Name`='$FirstName',
            `Last Name`='$LastName',
            `gender`='$gender',
            `age`='$age',
            `Email`='$email',
            `Degree`='$degree',
            `Skill`='$skill',
            `price`='$price',
            `phone`='$number',
            `dob`='$dob',
            `Date`='$date'
        WHERE `id` = '$edit_id'"; 
 $con->query($sql);
 if($con){
   header("Location: view_list_register.php");
 }

?>
