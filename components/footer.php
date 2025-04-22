<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-family: "Khmer", sans-serif;
        font-weight: 400;
        font-style: normal;
        margin: 0;
        padding: 0;
        box-sizing: border-box; /* Added for consistent sizing */
    }

    .footer {
        background-color: rgb(197, 29, 29); /* Dark red background */
        color: white;
        padding: 40px;
        margin-top: 20px;
        width: 100%;
        left: 0;
        bottom: 0;
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
        transition: color 0.3s ease; /* Smooth hover transition */
    }

    .footer .social-icons a:hover {
        color: #007bff; /* Blue on hover */
    }

    .copy {
        text-align: center;
        margin-top: 30px;
        font-size: 0.9rem;
        background-color: white;
        height: 50px;
        display: flex; /* Flexbox for centering */
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .footer {
            padding: 30px 20px; /* Reduced padding for tablets */
        }

        .footer .social-icons a {
            font-size: 1.2rem; /* Smaller icons */
            margin: 0 8px;
        }

        .copy {
            font-size: 0.8rem; /* Slightly smaller text */
            height: 40px; /* Reduced height */
        }
    }

    @media (max-width: 480px) {
        .footer {
            padding: 20px 15px; /* Further reduced padding for mobile */
        }

        .footer .social-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Allow icons to wrap if needed */
        }

        .footer .social-icons a {
            font-size: 1rem; /* Even smaller icons */
            margin: 5px; /* Adjusted spacing */
        }

        .copy {
            font-size: 0.7rem; /* Smaller text for small screens */
            height: 35px; /* Reduced height */
        }
    }
</style>
<body>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5 id="quick-links-title">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="../About_As/history.php" id="link-history">History</a></li>
                    <li><a href="../About_As/Vision_Mission_and_Values.php" id="link-vision">Vision - Mission - Value</a></li>
                    <li><a href="../About_As/Career_Opportunities.php" id="link-career">Career Opportunities</a></li>
                    <li><a href="#" id="link-weather">Current Weather at PPIU</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 id="explore-title">Explore</h5>
                <ul class="list-unstyled">
                    <li><a href="../New/job.php" id="link-student-life">Job Announcements</a></li>
                    <li><a href="../New/Evens.php" id="link-news"> Events</a></li>
                    <li><a href="../New/news_page1.php" id="link-news">News</a></li>
                    <li><a href="../New/loan.php" id="link-tuition">student loan</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 id="faculty-title">FACULTY</h5>
                <ul class="list-unstyled">
                    <li><a href="../Academics/cse.php" id="faculty-fsit">FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY (FSIT)</a></li>
                    <li><a href="../Academics/Business.php" id="faculty-business">FACULTY OF BUSINESS AND TOURISM</a></li>
                    <li><a href="../Academics/law.php" id="faculty-law">FACULTY OF LAW AND ECONOMIC</a></li>
                    <li><a href="../Academics/education.php " id="faculty-education">FACULTY OF EDUCATION SCIENCE</a></li>
        
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
                    <a href="https://web.facebook.com/ppiu.edu.kh.ppiucam" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@user1817292188292?_t=ZS-8v6iFTxDgKj&_r=1" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fofficialppiu%2F&is_from_rle" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
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