<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    font-family: "Hanuman", serif;
                font-weight: 100;
                font-style: normal;
           
}
    .footer {
    background-color: rgb(197, 29, 29); /* Dark blue background */
    color: white;
    padding: 40px 40px;
    margin-top: 20px;
    bottom: 0;
    left: 0;
  
   
}
.footer a {
    color: white;
    text-decoration: none;
    

}
.footer a:hover {
    text-decoration: underline;
}
.footer .social-icons a {
    margin: 0 10px;
    color: white;
    font-size: 1.5rem;
}
.footer .social-icons a:hover {
    color: #007bff; /* Change color on hover */
}
 .copy {
    text-align: center;
   margin-top: 30px;
    font-size: 0.9rem;
    background-color: white;
    height: 50px;
   
}

</style>
<body>
<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="history.php">History</a></li>
                            <li><a href="Vision_Mission_and_Values.php">Vision - Mission - Value</a></li>
                            <li><a href="Career_Opportunities.php">Career Opportunities</a></li>
                            <li><a href="#">Current Weather at PPIU</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Explore</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">News & Events</a></li>
                            <li><a href="#">Tuition Fees</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>FACULTY </h5>
                        <ul class="list-unstyled">
                            <li><a href="cse.php">FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY (FSIT)</a></li>
                            <li><a href="Business.php">FACULTY OF BUSINESS AND TOURISM</a></li>
                            <li><a href="law.php">FACULTY OF LAW AND ECONOMIC</a></li>
                            <li><a href="education.php">FACULTY OF EDUCATION SCIENCE</a></li>
                            <li><a href="#">FACULTY OF NEWS AND VIEWS</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <p>
                            Address: Building 36, Street 169, Veal Vong, 7 Makara, Phnom Penh, Cambodia.<br>
                            Phone: (+855) 23 899 003<br>
                            Email: <a href="mailto:info@aupp.edu.kh">info@ppiu.edu.kh</a>
                        </p>
                        <div class="social-icons">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
        <div style="color: blue;" class="copy">
            © Copyright 2023 American University of Phnom Penh. All Rights Reserved.
        </div>
</body>
<?php 
    include("../js/index.php");
    ?>
</html>