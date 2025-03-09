<!DOCTYPE html>
<?php 

    include("../Auth/function.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_ceo.css">
    <title>Register</title>
    
   
</head>
<body>
    <div class="content-login">
        <form method="post" enctype="multipart/form-data" >
            <label>Username</label>
            <input type="text" name="username" class="box" placeholder="username">
            <label>Email</label>
            <input type="text" name="useremail" class="box" placeholder="useremail">
            <label>Password</label>
            <input type="password" name="userpassword" class="box" placeholder="userpassword">
           
            <div class="wrap-btn">
                
                <input type="submit" class="btn" name="btn_register" value="SIGN UP">
            </div>
        </form>
    </div>
</body>

</html>