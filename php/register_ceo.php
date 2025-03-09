<!DOCTYPE html>
<?php 

    include("./Auth/function.php");
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <style>
        /* Global Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.content-login {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 14px;
    margin-bottom: 5px;
    text-align: left;
}

.box {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

.box:focus {
    outline: none;
    border-color: #007BFF;
}

/* Button Styles */
.wrap-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    margin-left: 110px;
}

.btn:hover {
    background-color: red;
}

.btn:active {
    background-color: #00408b;
}

/* Responsive Design */
@media (max-width: 500px) {
    .content-login {
        width: 90%;
        padding: 15px;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }
}

    </style>
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