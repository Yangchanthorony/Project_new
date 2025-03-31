<?php 
include("../components/header.php");    
include("../Auth/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Registration Form</title>
    <style>
       .pic{
        width: 200px;
        height: 200px;
      
       }
       .aba-section {
            text-align: center;
            margin-top: 20px;
        }
        
        .aba-title {
            font-size: 22px;
            font-weight: bold;
            color: #333;
        
        }
    </style>
</head>
<body>
    <div style="margin-top: 950px; width: 50%;" class="container  ">
        <h2>Register</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" class="form-control" required>
            </div>
            
            
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Degree">Degree</label>
                <select id="Degree" name="Degree" class="form-control" required>
                    <option value="">Select</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Associate">Associate</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Skill">Skill</label>
                <select id="Skill" name="Skill" class="form-control" required>
                    <option value="">Select</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Management">Management</option>
                    <option value="Law">Law</option>
                    <option value="Marketing">Marketing</option>
                    <option value="InternationalRelation">InternationalRelation</option>
                    <option value="Public Adminstation">Public Adminstation</option>
                    <option value="Economic Development">Economic Development</option>
                    <option value="Hotel & Tourism Management">Hotel & Tourism Management</option>
                    <option value="Fiance & Banking">Fiance & Banking</option>
                    <option value="Management Information System">Management Information System</option>
                    <option value="English for Education">English for Education</option>
                    <option value="English for Business">English for Business</option>
                    <option value="International Business">International Business</option>
                    <option value="Computer Sciences">Computer Sciences</option>
                    <option value="Logistics Management ">Logistics Management</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">price</label>
                <input type="text" id="price" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone number">phone number</label>
                <input type="text" id="number" name="number" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>

           
            
            <div class="aba-section">
                <div class="aba-title"> ABA Payment </div>
                <img class="pic" src="../img/Screenshot 2025-03-31 112048.png" alt="QR Code">
            </div>
            

            
            <button name="register-btn" type="submit">Register</button>
        </form>
        
    </div>
</body>
</html>
