
<?php 

$con = new mysqli("localhost","root","","project_school");

function register(){
    global $con;
    if(isset($_POST['register-btn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $degree = $_POST['Degree'];
        $skill = $_POST['Skill'];
        $price = $_POST['price'];
        $number = $_POST['number'];
        $dob = $_POST['dob'];
        $date=date('Y-m-d H:i:s');
        $sql = "INSERT INTO `register`(`id`, `First Name`, `Last Name`, `gender`, `Email`, `Degree`, `Skill`, `price`, `phone`, `dob`, `Date`) 
        VALUES (null,'$first_name','$last_name','$gender','$email','$degree','$skill','$price','$number','$dob','$date')";
         if ($con->query($sql)) {
            echo "<script>alert('ការចុះឈ្មោះបានជោគជ័យ!');</script>";
        } 
    }
}
register();
function view_register(){
    global $con;
    $sql = "SELECT * FROM `register`";
    $res = $con->query($sql);
    while($row=mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
            <td><?php echo $row[4];?></td>
            <td><?php echo $row[5];?></td>
            <td ><?php echo $row[6];?></td>
            <td><?php echo $row[7];?></td>
            <td><?php echo $row[8];?></td>
            <td ><?php echo $row[9];?></td>
            <td ><?php echo $row[10];?></td>
            
            <td style="display: flex;    ">
                <a style="margin-left: 20px;"  href="../admin/update_name.php?id=<?php echo $row[0] ?>"  class="btn btn btn-primary" >update</a>
                <button style="margin-left: 20px;"  type="button"  onclick="remove_register(<?php echo$row[0]?>)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_post">Delete</button>
            </td>
           
        </tr>

    <?php

    };
}
function register_ceo(){
    global $con;
    if(isset($_POST['btn_register'])){
        $username=$_POST['username'];
        $password=md5($_POST['userpassword']);
        $email=$_POST['useremail'];
        $date=date('Y-m-d H:i:s');
       
        $sql="INSERT INTO `tbl_user`(`id`, `name`, `password`,  `email`, `date`)
         VALUES (null,'$username','$password','$email','$date')";
         $con->query($sql);
    }
}
register_ceo();
function Login(){
    global $con;
    if(isset($_POST['btn_login'])){
       $useremail=$_POST['name_email'];
       $password=md5($_POST['password']);
       $sql="SELECT * FROM `tbl_user` WHERE (`email` ='$useremail' OR `name` = '$useremail') AND `password`='$password'";
       $res=$con->query($sql);
       if($res->num_rows>0){
        // $_SESSION['user']=['id'];
        header("Location: view_list_register.php");
       }else{
        header("Location:Login.php");
        // echo "error";
       }
    }
}
Login();




?>