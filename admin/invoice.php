<?php

include("../Auth/function.php");

if (!isset($_GET['id'])) {
    echo "<script>alert('Invalid request'); window.location.href = './admin/view_list_register.php';</script>";
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .invoice-container {
            width: 60%;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .invoice-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        .invoice-header img {
            width: 200px;
        }

        .invoice-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }

        .invoice-details {
            text-align: left;
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
        }

        .invoice-details p {
            margin: 8px 0;
            font-size: 16px;
            color: #555;
        }

        .invoice-details strong {
            color: #333;
        }

        .btn-container {
            margin-top: 20px;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .print-btn {
            background-color: #28a745;
            color: white;
        }

        .back-btn {
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
        }

        button:hover, .back-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <img src="https://pelprek.sgp1.digitaloceanspaces.com/banner/3489/148825024520275.png" alt="Company Logo">
            <div class="invoice-title">Invoice</div>
        </div>
        <div class="invoice-details">
            <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
            <p><strong>First Name:</strong> <?php echo $row['First Name']; ?></p>
            <p><strong>Last Name:</strong> <?php echo $row['Last Name']; ?></p>
            <p><strong>Gender:</strong> <?php echo $row['gender']; ?></p>
            <p><strong>Age:</strong> <?php echo $row['age']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
            <p><strong>Degree:</strong> <?php echo $row['Degree']; ?></p>
            <p><strong>Skill:</strong> <?php echo $row['Skill']; ?></p>
            <p><strong>Price:</strong> <?php echo $row['price']; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $row['phone']; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $row['dob']; ?></p>
            <p><strong>Registration Date:</strong> <?php echo $row['Date']; ?></p>
        </div>

        <div class="btn-container">
        <button  onclick="window.print()">Print Invoice</button>
        <a href="../php/register.php"><button style="margin-top: 10px; background-color: red;">Back to Registration</button></a>
        </div>
    </div>
</body>
</html>