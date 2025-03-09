<!DOCTYPE html>
<html lang="en">
    <?php 
        include("../Auth/function.php");
    ?>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
   
</head>
<body>
    <div class="content-login">
        <form method="post">
        <label>Name or Email</label>
        <input type="text" class="box" name="name_email" placeholder="Enter name and email">
            <!-- <label> Email</label>
            <input type="text" class="box" name="name_email"> -->
            <label>Password</label>
            <input type="password" class="box" name="password"  placeholder="Enter password">
            <div class="wrap-btn">
              
                <input type="submit" class="btn" name="btn_login" value="LOGIN">
            </div>
        </form>
    </div>
</body>
</html>