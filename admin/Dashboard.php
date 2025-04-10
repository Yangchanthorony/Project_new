<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">

    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<style>
  /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.admin {
    min-height: 100vh;
    background-color: #f5f6fa;
    font-family: Arial, sans-serif;
    margin-top: 20px;
}

/* Left sidebar styling */
.content-left {
    height: 100vh;
    background-color: #2c3e50;
    padding: 20px;
    position: fixed;
    width: 16.66%; /* Matches col-2 */
}

/* Top section */
.wrap-top {
    text-align: center;
    margin-bottom: 30px;
}

.wrap-top img {
    max-width: 100px;
    margin-bottom: 10px;
}

.wrap-top h5 {
    color: #ffffff;
    font-size: 20px;
    font-weight: 600;
}

/* Center section */
.wrap-center {
    text-align: center;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #34495e;
    border-radius: 8px;
}

.wrap-center img {
    border-radius: 50%;
    margin-bottom: 10px;
    border: 2px solid #ffffff;
}

.wrap-center h6 {
    color: #ffffff;
    font-size: 16px;
}

/* Bottom navigation */
.wrap-bottom ul {
    list-style: none;
}

.wrap-bottom .parent {
    margin-bottom: 10px;
}

.wrap-bottom .parent > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 15px;
    color: #ffffff;
    text-decoration: none;
    background-color: #34495e;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.wrap-bottom .parent > a:hover {
    background-color: #3498db;
}

.wrap-bottom .parent > a span {
    font-size: 16px;
}

.wrap-bottom .parent > a img {
    width: 15px;
    filter: invert(1);
}

/* Child menu */
.child {
    display: none;
    background-color: #34495e;
    border-radius: 0 0 6px 6px;
    margin-top: -5px;
}

.parent:hover .child {
    display: block;
}

.child li a {
    display: block;
    padding: 10px 25px;
    color: #ecf0f1;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
}

.child li a:hover {
    background-color: #2980b9;
    padding-left: 30px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .content-left {
        width: 250px;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }
    
    .content-left.active {
        transform: translateX(0);
    }
    
    .col-2 {
        padding: 0;
    }
}
</style>
</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left">
                        <div class="wrap-top">
                            <img src="assets/icon/admin-logo.png" alt="">
                            <h5>System</h5>
                        </div>
                        <div class="wrap-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypyeRGnHMih3p-E-xF9kJnGHWI1ruUNy3bw&s" width="50px" height="50px" alt="">
                            <h6>Welcome Admin Tony</h6>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                            <li class="parent">
                            <a href="view_list_register.php">List student</a>    
                            </a>
                                    
                                </li>
                               
                                
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Evens</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="Events_add_post.php">Add events</a>
                                            <a href="Events_view_post.php">View events</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                 
                                    <a class="parent" href="login.php">
                                        <span>Logout</span>
                                        <!-- <img src="assets/icon/arrow.png" alt=""> -->
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
             