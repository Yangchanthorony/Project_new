<?php 
$con = new mysqli("localhost","root","","project_school");
function register(){
    global $con;
    if(isset($_POST['register-btn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $dob = $_POST['date'];
        $sql="INSERT INTO `register`(`id`, `First Name`, `Last Name`, `Email`, `Password`, `Confirm Password`, `Date`)
         VALUES (null,'$first_name','$last_name ','$email',' $password',' $confirm_password ','$dob')";
         $con->query($sql);
    }
}
register();
?>