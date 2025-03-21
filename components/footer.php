<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        font-family: "Khmer", sans-serif;
  font-weight: 400;
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
                <h5 id="quick-links-title">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="history.php" id="link-history">History</a></li>
                    <li><a href="Vision_Mission_and_Values.php" id="link-vision">Vision - Mission - Value</a></li>
                    <li><a href="Career_Opportunities.php" id="link-career">Career Opportunities</a></li>
                    <li><a href="#" id="link-weather">Current Weather at PPIU</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 id="explore-title">Explore</h5>
                <ul class="list-unstyled">
                    <li><a href="#" id="link-student-life">Student Life</a></li>
                    <li><a href="#" id="link-news">News & Events</a></li>
                    <li><a href="#" id="link-tuition">Tuition Fees</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 id="faculty-title">FACULTY</h5>
                <ul class="list-unstyled">
                    <li><a href="cse.php" id="faculty-fsit">FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY (FSIT)</a></li>
                    <li><a href="Business.php" id="faculty-business">FACULTY OF BUSINESS AND TOURISM</a></li>
                    <li><a href="law.php" id="faculty-law">FACULTY OF LAW AND ECONOMIC</a></li>
                    <li><a href="education.php" id="faculty-education">FACULTY OF EDUCATION SCIENCE</a></li>
                    <li><a href="#" id="faculty-news">FACULTY OF NEWS AND VIEWS</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 id="contact-title">Contact Us</h5>
                <p id="contact-info">
                    Address: Building 36, Street 169, Veal Vong, 7 Makara, Phnom Penh, Cambodia.<br>
                    Phone: (855) 23 999 906<br>
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
<div style="color: blue;" class="copy" id="copyright">
    © Copyright 2025  Phnom Penh International University. All Rights Reserved.
</div>
</body>
<?php 
    include("../js/index.php");
    ?>
</html>