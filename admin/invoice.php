<?php

include("../Auth/function.php");

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid request'); window.location.href = '../php/register.php';</script>";
    exit();
}

$id = mysqli_real_escape_string($con, $_GET['id']);
$sql = "SELECT * FROM `register` WHERE `id` = '$id'";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "<script>alert('Record not found'); window.location.href = '../php/register.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Invoice</title>
    <style>
        .invoice-container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
           
        }
        .invoice-container h2 {
            text-align: center;
        }
        .invoice-details {
            margin-top: 20px;
        }
        .invoice-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h2>Invoice</h2>
        <div class="invoice-details">
            <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
            <p><strong>First Name:</strong> <?php echo $row['First Name']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $row['Last Name']; ?></p>
            <p><strong>Gender:</strong> <?php echo $row['gender']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
            <p><strong>Degree:</strong> <?php echo $row['Degree']; ?></p>
            <p><strong>Skill:</strong> <?php echo $row['Skill']; ?></p>
            <p><strong>Price:</strong> <?php echo $row['price']; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $row['phone']; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $row['dob']; ?></p>
            <p><strong>Registration Date:</strong> <?php echo $row['Date']; ?></p>
        </div>
        <button onclick="window.print()">Print Invoice</button>
        <a href="../php/register.php"><button style="margin-top: 20px; background-color: red;">Back to Registration</button></a>
    </div>
</body>
</html>