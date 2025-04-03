<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../components/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile - Casey Barnett</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            padding: 40px 0;
        }
        .faculty-image {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .faculty-name {
            font-size: 2rem;
            font-weight: bold;
            color: #a52a2a; /* Maroon color for the name */
            margin-bottom: 5px;
        }
        .faculty-title {
            font-size: 1.25rem;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #a52a2a; /* Maroon underline */
            padding-bottom: 5px;
        }
        .section-heading {
            font-size: 1.25rem;
            font-weight: bold;
            color: #a52a2a; /* Maroon color for section headings */
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .section-content {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }
        .publication-list {
            list-style-type: none;
            padding-left: 0;
        }
        .publication-list li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #555;
        }
        .publication-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #a52a2a; /* Maroon bullet points */
            font-size: 1.2rem;
        }
        .publication-list li a {
            color: #a52a2a;
            text-decoration: none;
        }
        .publication-list li a:hover {
            text-decoration: underline;
        }
        /* Back Button Styling */
        .back-button {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: #a52a2a; /* Maroon text color */
            background-color: transparent;
            border: 2px solid #a52a2a; /* Maroon border */
            border-radius: 5px;
            text-decoration: none; /* Remove underline from link */
            transition: all 0.3s ease;
            margin-bottom: 20px; /* Space below the button */
        }
        .back-button i {
            margin-right: 8px; /* Space between icon and text */
        }
        .back-button:hover {
            background-color: #a52a2a; /* Maroon background on hover */
            color: #fff; /* White text on hover */
            border-color: #a52a2a;
        }
    </style>
</head>
<body>
    <div style="margin-top: 180px;" class="container">
        <a href="Professor.php" class="back-button">
            <i class="fas fa-arrow-left"></i> BACK
        </a>
        <div class="row">
            <!-- Faculty Image -->
            <div class="col-md-4">
                <img src="../img/unnamed (1).jpg" alt="Casey Barnett" class="faculty-image">
                <div style="margin-top: 20px;" class="contact">
                    <h3>Contact Info</h3>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span> +885 *********</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>Chhay.Buntha@ppiu.edu.kh</span>
                    </div>
                    <a class="linkedin-link" href="https://kh.linkedin.com/in/tanseryvuth" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        <span>LinkedIn Profile</span>
                    </a>
                </div>
            </div>

            <!-- Faculty Details -->
            <div class="col-md-8">
                <!-- Name and Title -->
                <h1 class="faculty-name">Chhay Buntha</h1>
                <h2 class="faculty-title">Professor</h2>

                <!-- Profile Section -->
               
                <div class="section-heading">+ Experience</div>
                
               
                <p class="section-content">
                - 2011: Digital Convergence Technology and Policy Seoul, South Korea.Master of Technology in Computer Technology (Base on Networking).<br>
                - 2010:At Indian Institute of Technology Delhi(IITD), India. <br>
                - 2009: English Fluency and IT Skill training at CMC, Ltd New Delhi, India. <br>
                - 2008: International Leadership Skills, Phnom Penh, Cambodia. <br>
                - 2007: Bachelor degree at BBU in Network Technology. Phnom Penh, Cambodia. <br>
                + Mr.Buntha used to work an Internet Gateway technical support (DIX/IIX).Open connection port (VLAN) for leased line customers through fiber optic. (CISCO router and Zyxel switch).Support to leased line customers.IT-Coordinator at University of Cambodia.
              
                                    
                </p>

             

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php 
include("../components/footer.php");
?>
</html>