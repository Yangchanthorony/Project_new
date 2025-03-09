<?php 
include("../components/header.php");
include("../php/Auth/function.php"); 
include("destory_register.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
       
        .btn-update {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-remove {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-update:hover {
            background-color: #c82333;
        }
        .btn-remove:hover {
            background-color: #0056b3;
        }
        .containerr{
            margin-top: 210px;
        }
    </style>
</head>
<body>

<div class="containerr ">
    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            <?php 
                view_register();
            ?>
        </thead>
        <!-- <tbody>

            <tr>
                <td>1</td>
                <td>tony</td>
                <td>ja</td>
                <td>male</td>
                <td>tony168@gmail.com</td>
                <td>1999-01-01</td>
                <td>2023-09-16</td>
                <td>
                    <button class="btn-update">Update</button>
                    <button class=" btn-remove">Remove</button>
                </td>
            
        </tbody> -->
        
        
    </table>
         
    <?php 
    include("../components/footer.php");
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
