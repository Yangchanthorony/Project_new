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
                <img src="../img/photo_2019-08-05_07-42-29.jpg" alt="Casey Barnett" class="faculty-image">
                <div style="margin-top: 20px;" class="contact">
                    <h3>Contact Info</h3>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span> +885 *********</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>tan.seryvuth@ppiu.kh</span>
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
                <h1 class="faculty-name">Tan Sareyvuth</h1>
                <h2 class="faculty-title">Professor</h2>

                <!-- Profile Section -->
               
                <div class="section-heading">+ Experience</div>
                
                <div  class="section-heading">. Deputy Director</div>
                <p class="section-content">
                - Data Management Center of MPTC <br>
                        - 2014 - Present . 11 years<br>
                        - Phnom Penh <br>
                </p>

                <!-- Nationality Section -->
                <div class="section-heading">. Nationality</div>
                <p class="section-content">Cambodian</p>

                <!-- Subjects Taught Section -->
                <div class="section-heading">. Deputy Director of E-Government Department</div>
                <p class="section-content"> 
                        - General ICT Department<br>
                        - Nov 2013 - Present . 11 years 5 months<br>
                        - Phnom Penh<br></p>

                <!-- Qualifications Section -->
                <div class="section-heading">. Lecturer</div>
                <p class="section-content">
                       - Phnom Penh International University <br>
                        - 2013 - Present . 12 years<br>
                        - Phnom Penh <br></p>

                <!-- Publications Section -->
                <div class="section-heading">. ICT Government Official</div>
                <p class="section-content"> 
                         - Royal Government of Cambodia <br>
                        - 2007 - Present . 18 years <br>
                        - Phnom Penh, Cambodia  <br>
                        - The National Information Communications Technology Development Authority (NiDA) is a government agency responsible for managing the development of the information technology industry in Cambodia. Among the agency's projects are the computerization of government function and training of internet personnel.
                </p>
                <div class="section-heading">National ICT Development Authority (NiDA)</div>
                <p class="section-content">
                - 18 years<br>
                </p>
                <div class="section-heading">. Web Developer</div>
                <p class="section-content">
                - 2007 - Present . 18 years <br>
                        - Phnom Penh, Cambodia <br>
                        - Analyze, Design and Develop Web Application, Web Site UI and Content Management System (CMS) using PHP, MySQL, JavaScript, JQuery, XML and some of other web-based technologies and databases.<br>

                </p>
                <div class="section-heading">. Network Administrator</div>
                <p class="section-content">
                - Phnom Penh, Cambodia <br>
                        - Server Administration, Maintenance and Security including Web Server, DNS Server, Mail Server, File Server and some of other servers. <br>
                        - Technologies involved are Microsoft Operating System, Linux Operating System, Apache and Tomcat Web Server, MySQL, CUBRID, Authentication and Policy. <br>
                        - Cooperate with KISAN Telecom Co., Ltd, Seoul, Korea. <br>

                </p>
                <div class="section-heading">. Application Developer</div>
                <p class="section-content">
                - 2009 - 2011 . 2 years <br>
                        - Phnom Penh, Cambodia <br>
                        - Joined with PAIS (Provincial Administration Information System) project that cooperated with Korean experts as a application developer for development and maintenance of resident registration application system. <br>
                        - Technologies involved are Virtual Basic dot Net, CUBRID. <br>
                </p>
                <div class="section-heading">Software Intern</div>
                <p class="section-content">
                - Netpia Company (넷피아) <br>
                        - Jul 2012 - Aug 2012 . 2 months <br>
                        - Seoul, Korea <br>
                        - Project planning for two month internship period. <br>
                        - Develop a Smart TV application named NLIA Browser providing the Internet addressing service of Netpia. <br>
                        - Samsung and LG Smart TV application development process and SDK. <br>
                        - Technologies involved are JavaScript, JSON, HTML5, WebSocket, and other web-based technologies. <br>
                        - Build, deploy, and test the application with the real environment. <br>

                </p>
                <div class="section-heading">. Computer Instructor</div>
                <p class="section-content">
                - SACHAK ASIA DEVELOPMENT INSTITUTE<br>
                        - 2011 - 2012 . 1 year<br>
                        - Phnom Penh, Cambodia <br>
                </p>
                
                <div class="section-heading">. Team Leader</div>
                <p class="section-content">
                - Khmer Invent Technology <br>
                        - an 2011 - Aug 2011 . 8 months <br>
                        - Phnom Penh, Cambodia <br>
                        - Provides web and software application development services. <br>
                </p>
                
                <div class="section-heading">+ Education</div>
                 <div class="section-heading">. 건국대학교 / Konkuk University</div>
                 <p class="section-content">
                 - Master of Science in Computer and Information Communication Engineering <br>
                        - 2011 - 2013 <br>
                        + Research Interests: <br>
                        - Mobile Ad-hoc Network (MANET) <br>
                        - Mobile Computing and Applications  <br>
                        - Wireless Communication  <br>
                        - Wireless Sensor Network  <br>
                        - Computer and Network Security  <br>
                        - Cloud Computing  <br>
                        - Smart Application Devices  <br>
                        - Future Internet  <br>
                        - Internet of Think <br>

                 </p>
                 <div class="section-heading">. Build Bright University</div>
                 <p class="section-content">
                 - Bachelor Degree of Information Technology Information Technology  <br>
                        - 2002 - 2006  <br>
                        + Course Interests:  <br>
                        - Programming  <br>
                        - Database Management System  <br>
                        - Network and Computer Security  <br>
                        - Linux Operating System  <br>
                        - Windows Operating System  <br>
                        - System Analysis and Design  <br>
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