<?php 
include("../components/header_admin.php");
include("../Auth/function.php");
include("destory_register.php");
include("../js/search.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/view_list_register.css">

</head>
<body>
    <div class="container-fluid mt-3">
        <button id="searchBtn" class="btn btn-primary float-end">Search</button>
        <input type="text" id="searchInput" class="form-control w-25 d-inline-block float-end" placeholder="Search by Name">
    </div>

    <div style=" margin-top: 70px;" class="container-fluid ">
        <table class="table table-bordered text-center align-middle box " id="registerTable">
            <thead class="table-light">
                <tr class="table-danger">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Degree</th>
                    <th>Skill</th>
                    <th>Price</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php view_register(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>