<?php 

include("../components/header.php");
include("../css/login.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AUPP Alumni Engagement Day</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    
    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    <!-- Custom JavaScript -->
 
    
</head>
<body>

      
        
        
        <div  class="login-form">
            <h2>Login</h2>
            <form class="up" action="#" method="POST">
                <div class="form-group">
                    <label for="email" class="d-block text-start">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password" class="d-block text-start">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-group form-check text-start">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="form-footer mt-3">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                    <p><a href="#">Forgot password?</a></p>
                </div>
            </form>
            
        </div>
        
       
 
    
    

    <!-- External Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
   
</body>
</html> 