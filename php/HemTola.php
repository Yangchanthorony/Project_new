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
            <i class="fas fa-arrow-left"></i> <span id="back-label">BACK</span>
        </a>
        <div class="row">
            <!-- Faculty Image -->
            <div class="col-md-4">
                <img src="../img/1672793011754.jpg" alt="Hem Tola" class="faculty-image">
                <div style="margin-top: 20px;" class="contact">
                    <h3 id="contact-info-title">Contact Info</h3>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>+885 *********</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>Hem.Tola@ppiu.kh</span>
                    </div>
                    <a class="linkedin-link" href="https://kh.linkedin.com/in/tanseryvuth" target="_blank">
                        <i class="fab fa-linkedin"></i>
                        <span id="linkedin-label">LinkedIn Profile</span>
                    </a>
                </div>
            </div>

            <!-- Faculty Details -->
            <div class="col-md-8">
                <!-- Name and Title -->
                <h1 class="faculty-name">Hem Tola</h1>
                <h2 class="faculty-title" id="professor-title">Professor</h2>

                <!-- Profile Section -->
                <div class="section-heading" id="experience-title">+ Experience</div>
                <div class="section-heading" id="assistant-title">Assistant to Secretary of State</div>
                <p class="section-content" id="assistant-content">
                    - Ministry of Post and Telecommunications · Full-time<br>
                    - Present · 3 yrs 4 mos Jan 2022 to Present<br>
                    - Manage ICT, Administration, Finance<br>
                    - Manage and develop Cybersecurity administration and reporting <br>
                </p>

                <!-- Nationality Section -->
                <div class="section-heading" id="nationality-title">. Nationality</div>
                <p class="section-content" id="nationality-content">Cambodian</p>

                <!-- Subjects Taught Section -->
                <div class="section-heading" id="it-lecturer-ppiu-title">. Information Technology Lecturer</div>
                <p class="section-content" id="it-lecturer-ppiu-content">
                    - Phnom Penh International University · Part-time <br>
                    - Present · 3 yrs 4 mos Jan 2022 to Present<br>
                    - Nov 2013 - Present . 11 years 5 months<br>
                </p>

                <!-- Qualifications Section -->
                <div class="section-heading" id="it-lecturer-spi-title">. Information Technology Lecturer</div>
                <p class="section-content" id="it-lecturer-spi-content">
                    - Saint Paul Institute (SPI) · Part-time <br>
                    - Aug 2017 - Present · 7 yrs 9 mos <br>
                </p>

                <div class="section-heading" id="education-title">+ Education</div>

                <!-- Education Section -->
                <div class="section-heading" id="uc-title">. University of Cambodia</div>
                <p class="section-content" id="uc-content">
                    - Master of Business Administration <br>
                    - MBA, International Business <br>
                    - Sep 2016 - Dec 2019 <br>
                    - Grade: 3.5 <br>
                </p>
                <div class="section-heading" id="cmu-title">. Cambodian Mekong University</div>
                <p class="section-content" id="cmu-content">
                    - Bachelor of Technology - BTech <br>
                    - BTech Jan 2006 - Dec 2011 <br>
                    - Grade: 3.0 <br>
                </p>
                <div class="section-heading" id="norton-title">. Norton University</div>
                <p class="section-content" id="norton-content">
                    - Master of IT, Information Technology <br>
                    - May 2012 <br>
                </p>

                <div class="section-heading" id="skills-title">+ Skills</div>

                <!-- Skills Section -->
                <div class="section-heading" id="systems-analysis-title">. Systems Analysis</div>
                <p class="section-content" id="systems-analysis-content">
                    - Information Technology Lecturer at Saint Paul Institute (SPI) <br>
                </p>
                <div class="section-heading" id="e-commerce-title">. E-Commerce</div>
                <p class="section-content" id="e-commerce-content">
                    - Information Technology Lecturer at Saint Paul Institute (SPI) <br>
                </p>
                <div class="section-heading" id="pmis-title">. Project Management Information Systems (PMIS)</div>
                <p class="section-content" id="pmis-content">
                    - Information Technology Lecturer at Saint Paul Institute (SPI) <br>
                </p>
                <div class="section-heading" id="data-structures-title">. Data Structures</div>
                <p class="section-content" id="data-structures-content">
                    - Information Technology Lecturer at Saint Paul Institute (SPI) <br>
                </p>
                <div class="section-heading" id="uni-lecturing-title">. University Lecturing</div>
                <p class="section-content" id="uni-lecturing-content">
                    - Information Technology Lecturer at Phnom Penh International University <br>
                </p>
                <div class="section-heading" id="ict-global-commerce-title">. ICT and Global Commerce</div>
                <p class="section-content" id="ict-global-commerce-content">
                    - Information Technology Lecturer at Phnom Penh International University <br>
                </p>
                <div class="section-heading" id="db-admin-title">. Database Administration</div>
                <p class="section-content" id="db-admin-content">
                    - Information Technology Lecturer at Phnom Penh International University <br>
                </p>
                <div class="section-heading" id="business-planning-title">. Business Planning</div>
                <p class="section-content" id="business-planning-content">
                    - University of Cambodia <br>
                </p>
                <div class="section-heading" id="managerial-finance-title">. Managerial Finance</div>
                <p class="section-content" id="managerial-finance-content">
                    - University of Cambodia <br>
                </p>
                <div class="section-heading" id="intl-relations-title">. International Relations</div>
                <p class="section-content" id="intl-relations-content">
                    - University of Cambodia <br>
                </p>
                <div class="section-heading" id="economics-title">. Economics</div>
                <p class="section-content" id="economics-content">
                    - University of Cambodia <br>
                </p>
                <div class="section-heading" id="net-admin-title">. Network Administration</div>
                <p class="section-content" id="net-admin-content">
                    - Cambodian Mekong University <br>
                </p>
                <div class="section-heading" id="c-sharp-title">. C#</div>
                <p class="section-content" id="c-sharp-content">
                    - Cambodian Mekong University <br>
                </p>
                <div class="section-heading" id="db-programming-title">. Database Programming</div>
                <p class="section-content" id="db-programming-content">
                    - Cambodian Mekong University <br>
                </p>
                <div class="section-heading" id="net-security-title">. Network Security</div>
                <p class="section-content" id="net-security-content">
                    - Cambodian Mekong University <br>
                </p>
                <div class="section-heading" id="web-dev-title">. Web Development</div>
                <p class="section-content" id="web-dev-content">
                    - Cambodian Mekong University <br>
                </p>
                <div class="section-heading" id="proj-management-title">. Project Management</div>
                <p class="section-content" id="proj-management-content">
                    - 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>
                    - Ministry of Post and Telecommunications <br>
                    - University of Cambodia <br>
                </p>
                <div class="section-heading" id="communication-title">. Communication</div>
                <p class="section-content" id="communication-content">
                    - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>
                    - Ministry of Post and Telecommunications <br>
                </p>
                <div class="section-heading" id="finance-title">. Finance</div>
                <p class="section-content" id="finance-content">
                    - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>
                    - Ministry of Post and Telecommunications <br>
                </p>
                <div class="section-heading" id="cybersecurity-title">. Cybersecurity</div>
                <p class="section-content" id="cybersecurity-content">
                    - 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>
                    - Ministry of Post and Telecommunications <br>
                </p>
                <div class="section-heading" id="sdlc-title">. Software Development Life Cycle (SDLC)</div>
                <p class="section-content" id="sdlc-content">
                    - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>
                    - Ministry of Post and Telecommunications <br>
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