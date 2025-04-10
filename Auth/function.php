
<?php 

$con = new mysqli("localhost","root","","project_school");

function register() {
    global $con;
    if (isset($_POST['register-btn'])) {
        date_default_timezone_set('Asia/Phnom_Penh');
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $degree = $_POST['Degree'];
        $skill = $_POST['Skill'];
        $price = $_POST['price'];
        $number = $_POST['number'];
        $dob = $_POST['dob'];
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `register`(`id`, `First Name`, `Last Name`, `gender`, `age`, `Email`, `Degree`, `Skill`, `price`, `phone`, `dob`, `Date`) 
        VALUES (null,'$first_name','$last_name','$gender', '$age','$email','$degree','$skill','$price','$number','$dob','$date')";
        
        if ($con->query($sql)) {
            $last_id = $con->insert_id;
            echo "<script>
                    alert('ការចុះឈ្មោះបានជោគជ័យ!');
                    window.location.href = '../admin/invoice.php?id=$last_id';
                  </script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $con->error . "');</script>";
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
            <td ><?php echo $row[11];?></td>
            
            <td style="display: flex;    ">
                <a style="margin-left: 20px;"  href="../admin/update_name.php?id=<?php echo $row[0] ?>"  class="btn btn btn-primary" >Edit</a>
                <button style="margin-left: 20px;"  type="button"  onclick="remove_register(<?php echo$row[0]?>)" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_post">Delete</button>
                <button style="margin-left: 20px;" type="button" class="btn btn-success" onclick="window.open('../admin/invoice_admin.php?id=<?php echo $row[0]; ?>', '_blank')">Print Invoice</button>
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
        header("Location: Dashboard.php");
       }else{
        header("Location:Login.php");
        // echo "error";
       }
    }
}
Login();

function upload_img($type){
    $file_name = date('YmdHis').'-'.$_FILES[$type]['name'];
    $path = '../admin/images/'.$file_name;
    move_uploaded_file($_FILES[$type]['tmp_name'],$path);
    return $file_name;
}
function events_post(){
    global $con;
    if(isset($_POST['publish'])){
  $title = $_POST['title'];
     $date = $_POST['date'];
   $time = $_POST['time'];
      $location = $_POST['location'];
     $image = upload_img('image');
     $banner = upload_img('banner');
     $new_type = $_POST['news_type'];
     $title_one = $_POST['word'];
     $title_two = $_POST['small'];
     $desc = $_POST['desc'];
       $sql = "INSERT INTO `events`(`id`, `title`, `date`, `time`, `location`, `thumbnail`, `news_type`,`banner`, `word`, `small`, `description`) 
       VALUES (null,'$title','$date','$time','$location','$image','$new_type','$banner','$title_one','$title_two','$desc')";
       $res = $con->query($sql);
    }
}

events_post();

function view_events(){
    global $con;
    $sql = "SELECT * FROM `events`";
    $res = $con->query($sql);
    while($row = mysqli_fetch_array($res)){
        ?>
        <tr >
            <td><?php echo $row[0];?></td>
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
            <td><?php echo $row[4];?></td>
         
            <td><img style=" width: 100px; margin-left: 100px; " src="../admin/images/<?php echo $row[5];?>" alt="" width="100px " height="100"></td>
            <td><?php echo $row[6];?></td>
            <td>
                <a href="../admin/Events_update_post.php?id=<?php echo $row[0] ?>" class="btn btn-primary">Edit</a>
                <button class="btn btn-danger" onclick="confirmDelete(<?php echo $row[0]; ?>)">Delete</button>
            </td>


        </tr>
        <?php
    }
}

function update_event(){
    global $con;
    if(isset($_POST['update_event'])){
        $id = $_POST['edit_id'];
        $title = $_POST['title'];
        $date = $_POST['date'];
        $time = $_POST['time'];
         $location = $_POST['location'];
         $news_type = $_POST['news_type'];
         $title_one = $_POST['word'];
         $title_two = $_POST['small'];
         $desc = $_POST['desc'];
        // $image = upload_img('image');
        $image = $_FILES['image']['name'];
        $banner = $_FILES['banner']['name'];
        if(empty($image)){
            $image = $_POST['old_img'];
       
        }else{
            $image =  upload_img('image');
        }
        if(empty($banner)){
            $banner = $_POST['old_banner'];
       
        }else{
            $banner =  upload_img('banner');
        }
        $sql = "UPDATE `events` SET `title`='$title',`date`='$date',`time`='$time',`location`='$location',`thumbnail`='$image',`news_type`='$news_type',`banner`='$banner',`word`='$title_one',`small`='$title_two',`description`='$desc' 
        WHERE id = '$id'"; 
        $con->query($sql);
    }
}

update_event();





?>