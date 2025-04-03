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
                <img src="../img/1672793011754.jpg" alt="Casey Barnett" class="faculty-image">
                <div style="margin-top: 20px;" class="contact">
                    <h3>Contact Info</h3>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span> +885 *********</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>Hem.Tola@ppiu.kh</span>
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
                <h1 class="faculty-name">Hem Tola</h1>
                <h2 class="faculty-title">Professor</h2>

                <!-- Profile Section -->
               
                <div class="section-heading">+ Experience</div>
                
                <div  class="section-heading">Assistant to Secretary of State</div>
                <p class="section-content">
                - Ministry of Post and Telecommunications · Full-time<br>
                - Present · 3 yrs 4 mosJan 2022 to Present<br>
        
                - Manage ICT, Administration, Finance<br>
                - Manage and develop Cybersecurity administration and reporting <br>
                                    
                </p>

                <!-- Nationality Section -->
                <div class="section-heading">. Nationality</div>
                <p class="section-content">Cambodian</p>

                <!-- Subjects Taught Section -->
                <div class="section-heading">.  Information Technology Lecturer</div>
                <p class="section-content"> 
              -  Phnom Penh International University · Part-time <br>
                - Present · 3 yrs 4 mosJan 2022 to Present<br>
                        - Nov 2013 - Present . 11 years 5 months<br>
                       </p>

                <!-- Qualifications Section -->
                <div class="section-heading">. Information Technology Lecturer</div>
                <p class="section-content">
                       
                -  Saint Paul Institute (SPI) · Part-time <br>

                - Aug 2017 - Present · 7 yrs 9 mos <br>
                        </p>

                <div class="section-heading">+ Education</div>


                <!-- Publications Section -->
                <div class="section-heading">. University of Cambodia</div>
                <p class="section-content"> 
                         - Master of Business Administration   <br>
                         - MBA, International BusinessMaster of Business <br>
                         - Sep 2016 - Dec 2019Sep 2016 - Dec 2019 <br>
                        - Grade: 3.5 <br>
                       
                </p>
                <div class="section-heading">. Cambodian Mekong University</div>
                <p class="section-content">
                - Bachelor of Technology - BTechBachelor of Technology <br>
                - BTech Jan 2006 - Dec 2011  <br>
                - Grade: 3.0  <br>
                </p>

                <div class="section-heading">. Norton University </div>
                <p class="section-content">
                - Master of IT, Information TechnologyMaster of IT, Information Technology <br>
                 - May 2012 <br>
                      
                </p>

                <div class="section-heading">+ Skills</div>

                <div class="section-heading">. Systems Analysis</div>
                <p class="section-content">
                - Information Technology Lecturer at Saint Paul Institute (SPI) <br>   
                </p>

                <div class="section-heading">.  E-Commerce</div>
                <p class="section-content">
                - Information Technology Lecturer at Saint Paul Institute (SPI) <br>   
                   </p>

                <div class="section-heading">.  
                Project Management Information Systems (PMIS)</div>
                <p class="section-content">
                - Information Technology Lecturer at Saint Paul Institute (SPI) <br>   
                </p>

                <div class="section-heading">.  
                Data Structures</div>
                <p class="section-content">
                - Information Technology Lecturer at Saint Paul Institute (SPI) <br>   
                   </p>

                <div class="section-heading">.  
                University Lecturing</div>
                <p class="section-content">
                - Information Technology Lecturer at Phnom Penh International University <br>   
                   </p>

                   <div class="section-heading">.  
                ICT and Global Commerce</div>
                <p class="section-content">
                - Information Technology Lecturer at Phnom Penh International University <br>   
                   </p>
                
                   <div class="section-heading">.  
                Database Administration</div>
                <p class="section-content">
                - Information Technology Lecturer at Phnom Penh International University <br>   
                   </p>

                   <div class="section-heading">.  
                Business Planning</div>
                <p class="section-content">
                - University of Cambodia <br>   
                   </p>

                   <div class="section-heading">.  
                Managerial Finance</div>
                <p class="section-content">
                - University of Cambodia <br>   
                   </p>

                   
                   <div class="section-heading">.  
                International Relations</div>
                <p class="section-content">
                - University of Cambodia <br>   
                   </p>

                   <div class="section-heading">.  
                Economics</div>
                <p class="section-content">
                - University of Cambodia <br>   
                   </p>

                   
                   <div class="section-heading">.  
                Network Administration</div>
                <p class="section-content">
                - Cambodian Mekong University <br>   
                   </p>

                         
                   <div class="section-heading">.  
                C#</div>
                <p class="section-content">
                - Cambodian Mekong University <br>   
                   </p>

                                
                   <div class="section-heading">.  
             Database Programming</div>
                <p class="section-content">
                - Cambodian Mekong University <br>   
                   </p>

                   <div class="section-heading">.  
             Network Security</div>
                <p class="section-content">
                - Cambodian Mekong University <br>   
                   </p>

                   <div class="section-heading">.  
          Web Development</div>
                <p class="section-content">
                - Cambodian Mekong University <br>   
                   </p>

                   
                   <div class="section-heading">.  
          Project Management</div>
                <p class="section-content">
                - 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍  <br>   
                - Ministry of Post and Telecommunications  <br> 
                  - University of Cambodia  <br> 
                   </p>

                               
                   <div class="section-heading">.  
          Communication</div>
                <p class="section-content">
                - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍  <br>   
                - Ministry of Post and Telecommunications  <br> 
            
                   </p>

                   <div class="section-heading">.  
          Finance</div>
                <p class="section-content">
                - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍  <br>   
                - Ministry of Post and Telecommunications  <br> 
            
                   </p>

                   <div class="section-heading">.  
          Cybersecurity</div>
                <p class="section-content">
                - 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍  <br>   
                - Ministry of Post and Telecommunications  <br> 
            
                   </p>

                   <div class="section-heading">.  
          Software Development Life Cycle (SDLC)</div>
                <p class="section-content">
                - Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍  <br>   
                - Ministry of Post and Telecommunications  <br> 
            
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