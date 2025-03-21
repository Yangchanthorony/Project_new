<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("../components/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Department</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
    <div class="container">
        <nav class="navbarr">
            <a href="contact.php"><button  class="nav-button ">Academic Department</button></a>
           <a href="admin.php"><button style="margin-left: 5px;" class="nav-button ">Admin. and HR Dept.</button></a>
            
           <a href="dept.php"><button style="margin-left: 5px;" class="nav-button">ACT. and FIN. Dept.</button></a>
            <a href="exam_office.php"><button style="margin-left: 5px;" class="nav-button">Exam Office</button></a>
           <a href="student_office.php"> <button style="margin-left: 5px;" class="nav-button">Student Service Office</button></a>
            <a href="front_office.php"><button style="margin-left: 5px;" class="nav-button active ">Front Office</button></a>
        </nav>

        <div class="faculties">
        <a href="Faculty of Educational Sciences,.php"><button  class="nav-button ">Faculty of Educational Sciences</button></a>
        <a href="Faculty of Science and Information Technology.php"><button style="margin-left: 5px;" class="nav-button ">Faculty of Science and Information Technology</button></a>
        <a href="Faculty of Law and Economics.php"><button style="margin-left: 5px;" class="nav-button ">Faculty of Law and Economics</button></a>
        <a href="Faculty of Business-Tourism.php"><button style="margin-left: 5px;" class="nav-button ">Faculty of Business-Tourism</button></a>
            
        </div>

        <div class="contact-section">
            <div class="contact-info">
                <p><strong>Address:</strong></p>
                <p>Building 36, Street 169, Veal Vong,</p>
                <p> 7 Makara, Phnom Penh, Cambodia.</p>

                <p><strong>Contact Numbers:</strong></p>
                <p>(855) 23 999 906</p>
                <p>(855) 23 999 907</p>
                <p>(855) 23 999 908</p>

                <p>(855) 71 333 6777</p>
                <p>(855) 016 853 023</p>
                <p>(855) 017 300 824</p>
                <p><strong>E-mail:</strong> info@ppiu.edu.kh</p>
                <p><strong>Website:</strong> http://www.ppiu.edu.kh</p>
                <p><strong>Facebook:</strong> <a href="https://www.ppiu.edu.kh/public/">https://www.ppiu.edu.kh/public/</a></p>
            </div>
            <form class="contact-form">
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Subject" required>
                <textarea placeholder="Message" required></textarea>
                <button type="submit">SEND</button>
            </form>
        </div>
    </div>
    <footer style="margin-top: 120px;">
    <p>&copy; 2025 Prince Bank. All rights reserved.</p>
</footer>
</body>
</html> 