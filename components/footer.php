<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .footer {
    background-color: rgb(197, 29, 29); /* Dark blue background */
    color: white;
    padding: 40px 40px;
    margin-top: 20px;
  
   
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
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Vision - Mission - Value</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Career Opportunities</a></li>
                            <li><a href="#">Current Weather at AUPP</a></li>
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
                        <h5>Schools</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">School of Business</a></li>
                            <li><a href="#">School of Digital Technologies</a></li>
                            <li><a href="#">School of Law</a></li>
                            <li><a href="#">School of Social Sciences</a></li>
                            <li><a href="#">School of Graduate Studies</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <p>
                            Address: 2738 Street 207, Kralor Village, Sangkat Krom, Khan Russey Keo, Phnom Penh, Cambodia<br>
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
           
        </footer>
        <div style="color: blue;" class="copy">
            © Copyright 2023 American University of Phnom Penh. All Rights Reserved.
        </div>
</body>
<?php 
    include("../js/index.php");
    ?>
</html>