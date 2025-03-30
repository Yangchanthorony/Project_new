<?php
// Database connection
$con = new mysqli("localhost", "root", "", "project_school");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Fetch the specific record
$sql = "SELECT * FROM `register` WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC); // Changed to MYSQLI_ASSOC

if (!$row) {
    die("Record not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        /* General Reset and Print Settings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
            background-color: #fff;
        }
        @media print {
            body {
                padding: 0;
                margin: 0;
            }
            .invoice-box {
                border: none;
                box-shadow: none;
            }
        }

        /* Invoice Container */
        .invoice-box {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Header Styling */
        .header {
            
            margin-bottom: 20px;
        }
        .header img {
            max-width: 250px;
            height: auto;
            margin-bottom: 10px;
        }
        .header h1 {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 5px;
           text-align: center;
        }
        .header p {
            font-size: 14px;
            color: #7f8c8d;
            text-align: center;
        }

        /* Section Headings */
        h3 {
            font-size: 18px;
            color: #34495e;
            margin: 20px 0 10px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }

        /* Paragraph Styling */
        p {
            font-size: 14px;
            margin: 5px 0;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        th {
            background-color: #3498db;
            color: #fff;
            text-align: left;
            font-weight: bold;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #fff;
        }
        tr:hover td {
            background-color: #ecf0f1;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .invoice-box {
                padding: 10px;
            }
            .header img {
                max-width: 100px;
            }
            th, td {
                font-size: 12px;
                padding: 8px;
            }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="invoice-box container">
        <div class="header d-flex">
        <img src="https://pelprek.sgp1.digitaloceanspaces.com/banner/3489/148825024520275.png" alt="Company Logo">  
            <h1>Invoice</h1>
         <p>Date: <?php  date_default_timezone_set('Asia/Phnom_Penh') ;echo date('Y-m-d  H:i:s'); ?></p>

        </div>
        <h3>Customer Details</h3>
        <p>ID: <?php echo ($row['id']); ?></p>
        <p>name: <?php echo ($row['Last Name']); ?></p>
  
     

        <h3>Invoice Details</h3>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>ID:</td>
                <td><?php echo ($row['id']); ?></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><?php echo ($row['First Name']); ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo ($row['Last Name']); ?></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td><?php echo ($row['gender']); ?></td>
            </tr>

            <tr>
                <td>Age:</td>
                <td><?php echo ($row['age']); ?></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><?php echo ($row['Email']); ?></td>
            </tr>
            <tr>
                <td>Degree:</td>
                <td><?php echo ($row['Degree']); ?></td>
            </tr>


            <tr>
                <td>Skill:</td>
                <td><?php echo ($row['Skill']); ?></td>
            </tr>

            <tr>
                <td>Price:</td>
                <td><?php echo ($row['price']); ?></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><?php echo ($row['dob']); ?></td>
            </tr>

            <tr>
                <td>Phone Number:</td>
                <td><?php echo ($row['phone']); ?></td>
            </tr>

            <tr>
                <td>Registration Date:</td>
                <td><?php echo ($row['Date']); ?></td>
            </tr>
            
       
        </table>
    </div>
</body>
</html>

<?php
$stmt->close();
$con->close();
?>