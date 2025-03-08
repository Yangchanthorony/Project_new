
<!DOCTYPE html>
<?php 
include("../components/header.php");
include("../css/register.php");
include("./function.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            margin-top: 120px;
           
        }
        
        .register-container {
            flex: 1; /* Pushes the footer down */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
           margin-bottom: 380px;
            width: 40%;

            
        }
      
        
        
    </style>
</head>
<body>
    
<div class="register-container">
    <h2>Register</h2>
    <form action="" method="post" style="width: 520px;" id="registerForm">
        <div class="col-md-12 d-flex">
            <div class="form-group col-md-6">
                <label for="First_Name">First Name</label>
                <input name="first_name" type="text" id="First_Name" required>
                <div class="error" id="First_NameError"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="Last_Name" style="margin-left: 10px;">Last Name</label>
                <input name="last_name" type="text" id="Last_Name" style="margin-left: 10px;" required>
                <div class="error" id="Last_NameError"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input name="email" type="email" id="Email" required>
            <div class="error" id="EmailError"></div>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input name="password" type="password" id="Password" required>
            <div class="error" id="PasswordError"></div>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input name="confirm_password" type="password" id="confirmPassword" required>
            <div class="error" id="confirmPasswordError"></div>
        </div>
        <div class="form-group">
            <label for="Date">Date of Birth</label>
            <input name="date" type="date" id="Date" required>
            <div class="error" id="dateError"></div>
        </div>
        <button type="submit" name="register-btn" class="register-btn">Register</button>
    </form>
</div>



   
    
    
  
   
 
   
</body>
</html>
