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
            <img src="../img/1574672309259.jpg" alt="Sithy Cheam" class="faculty-image">
            <div style="margin-top: 20px;" class="contact">
                <h3 id="contact-info-title">Contact Info</h3>
                <div class="contact-info">
                    <i class="fas fa-phone"></i>
                    <span>+885 *********</span>
                </div>
                <div class="contact-info">
                    <i class="fas fa-envelope"></i>
                    <span>Sithy.Cheam@ppiu.kh</span>
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
            <h1 class="faculty-name">Sithy Cheam</h1>
            <h2 class="faculty-title" id="professor-title">Professor</h2>

            <!-- Profile Section -->
            <div class="section-heading" id="experience-title">+ Experience</div>
            <div class="section-heading" id="exec-director-title">. Executive Director</div>
            <p class="section-content" id="exec-director-content">
                - SVI (Specialized Vocational Institute) · Full-time <br>
                - Dec 2023 - Present · 1 yr 5 mos<br>
                - Poitpet, Banteay Meanchey, Cambodia<br>
            </p>

            <!-- Nationality Section -->
            <div class="section-heading" id="nationality-title">. Nationality</div>
            <p class="section-content" id="nationality-content">Cambodian</p>

            <!-- Subjects Taught Section -->
            <div class="section-heading" id="it-lecturer-title">. IT Lecturer</div>
            <p class="section-content" id="it-lecturer-content">
                - PPIU <br>
                - Sep 2002 - Nov 2023 · 21 yrs 3 mos Phnom Penh<br>
                - C/C++ Programming, DBMS, E-Commerce, UML<br>
            </p>

            <!-- Qualifications Section -->
            <div class="section-heading" id="freelance-consultant-title">. Freelance IT Consultant</div>
            <p class="section-content" id="freelance-consultant-content">
                - Self Employed <br>
                - Jun 2002 - Nov 2023 · 21 yrs 6 mos <br>
                - Cambodia <br>
                - Provide consultancy service in the field of IT infrastructure, system analysis and design, software development, database management system and related IT work. <br>
            </p>

            <div class="section-heading" id="moe-title">. Ministry of Education</div>
            <p class="section-content" id="moe-content">
                - 1 yr 7 mos <br>
            </p>

            <div class="section-heading" id="ec-consultant-title">. IT Specialist Consultant - EC (European Commission) - HRMIS Database Security</div>
            <p class="section-content" id="ec-consultant-content">
                - Nov 2010 - Mar 2011 · 5 mos <br>
                - Design a master plan for database security for the Department of Personnel for the Ministry of Education <br>
            </p>

            <div class="section-heading" id="adb-consultant-title">. IT Specialist Consultant - ADB (Enhancing Education Quality Project)</div>
            <p class="section-content" id="adb-consultant-content">
                - Sep 2009 - Jan 2011 · 1 yr 5 mos <br>
                - Funded by ADB for the Ministry of Education working on three database management systems. 1. HRMIS (Human Resource Management Information System), EMIS (Education Management Information System) and FMIS (Financial Management Information System) <br>
            </p>

            <div class="section-heading" id="managing-director-title">. Managing Director</div>
            <p class="section-content" id="managing-director-content">
                - K Digital Solutions <br>
                - Nov 2007 - Mar 2009 · 1 yr 7 mos <br>
                - KDS is an IT firm equipped with pools of professionals with mass experiences in the field of IT and businesses <br>
            </p>

            <div class="section-heading" id="khmer-handicraft-title">. Co-Founder</div>
            <p class="section-content" id="khmer-handicraft-content">
                - Khmer Handicraft <br>
                - Jan 2007 - Mar 2009 · 2 yr 3 mos <br>
                - Khmer Handicraft is an e-commerce site to promote art and craft products produce by the poor Cambodian and handicapped people. <br>
                - Helping to buy Khmer Handicraft products mean helping an orphan or a handicapped person <br>
            </p>

            <div class="section-heading" id="morodok-title">. Co-Founder</div>
            <p class="section-content" id="morodok-content">
                - Morodok <br>
                - Jan 2007 - Mar 2009 · 2 yrs 3 mos <br>
                - IT Lecturer. Freelance IT Consultant. <br>
            </p>

            <div class="section-heading" id="general-manager-title">. General Manager</div>
            <p class="section-content" id="general-manager-content">
                - Net I Solutions <br>
                - Dec 2006 - Nov 2007 · 1 yr <br>
                - Overseeing 3 core departments: Software Development, Professional Training, and Hardware Installation and Maintenance <br>
            </p>

            <div class="section-heading" id="dean-it-title">. Dean of IT</div>
            <p class="section-content" id="dean-it-content">
                - Phnom Penh International University (Former ASEAN University) <br>
                - 2002 - 2006 · 4 yrs <br>
                - Recruitment of IT Lecturers, Scheduling of course offering, Curriculum Development, and Strategic Formulation to strengthen the U <br>
            </p>

            <div class="section-heading" id="prog-developer-title">. Program Developer/Sun Accounting System Administrator</div>
            <p class="section-content" id="prog-developer-content">
                - CamGSM <br>
                - Nov 1997 - Apr 2002 · 4 yrs 6 mos <br>
                - Develop Several Applications for Helpline Center, Customer Service Dept, Finance, Warehouse and Cashier maintain Sun Accounting System and ongoing Database Management System <br>
            </p>

            <div class="section-heading" id="education-title">+ Education</div>

            <!-- Education Section -->
            <div class="section-heading" id="seau-title">. Southeast Asia Union College, Singapore</div>
            <p class="section-content" id="seau-content">
                - Bachelor, Business Administration/Computer Science <br>
                - 1990 - 1995 <br>
                - Activities and societies: One of the outstanding students <br>
                - Recipient of several awards while studying there. <br>
            </p>
            <div class="section-heading" id="wwc-title">. Walla Walla College, Washington, USA</div>
            <p class="section-content" id="wwc-content">
                - Bachelor, Business Administration <br>
                - 1990 - 1995 <br>
                - Activities and societies: One of the outstanding students. <br>
            </p>

            <div class="section-heading" id="skills-title">+ Skills</div>

            <!-- Skills Section -->
            <div class="section-heading" id="telecom-title">. Telecommunications</div>
            <div class="section-heading" id="analysis-title">. Analysis</div>
            <div class="section-heading" id="strategic-planning-title">. Strategic Planning</div>
            <div class="section-heading" id="software-dev-title">. Software Development</div>
            <div class="section-heading" id="project-management-title">. Project Management</div>
            <div class="section-heading" id="business-analysis-title">. Business Analysis</div>
            <div class="section-heading" id="db-admin-title">. Database Administration</div>
            <div class="section-heading" id="team-leadership-title">. Team Leadership</div>
            <div class="section-heading" id="business-strategy-title">. Business Strategy</div>
            <div class="section-heading" id="strategy-title">. Strategy</div>
            <div class="section-heading" id="program-management-title">. Program Management</div>
            <div class="section-heading" id="management-title">. Management</div>
            <div class="section-heading" id="e-commerce-title">. E-commerce</div>
            <div class="section-heading" id="project-planning-title">. Project Planning</div>
            <div class="section-heading" id="business-planning-title">. Business Planning</div>
            <div class="section-heading" id="management-consulting-title">. Management Consulting</div>
            <div class="section-heading" id="team-management-title">. Team Management</div>
            <div class="section-heading" id="risk-management-title">. Risk Management</div>
            <div class="section-heading" id="business-intelligence-title">. Business Intelligence</div>
            <div class="section-heading" id="entrepreneurship-title">. Entrepreneurship</div>
            <div class="section-heading" id="change-management-title">. Change Management</div>
            <div class="section-heading" id="negotiation-title">. Negotiation</div>
            <div class="section-heading" id="marketing-strategy-title">. Marketing Strategy</div>
            <div class="section-heading" id="operations-management-title">. Operations Management</div>
            <div class="section-heading" id="new-business-dev-title">. New Business Development</div>
            <div class="section-heading" id="business-dev-title">. Business Development</div>
            <div class="section-heading" id="crm-title">. CRM</div>
            <div class="section-heading" id="budgets-title">. Budgets</div>
            <div class="section-heading" id="business-process-title">. Business Process Improvement</div>
            <div class="section-heading" id="org-dev-title">. Organizational Development</div>
            <div class="section-heading" id="recruiting-title">. Recruiting</div>
            <div class="section-heading" id="hr-title">. Human Resources</div>
            <div class="section-heading" id="leadership-title">. Leadership</div>
            <div class="section-heading" id="training-title">. Training</div>
            <div class="section-heading" id="startups-title">. Start-ups</div>
            <div class="section-heading" id="coaching-title">. Coaching</div>
            <div class="section-heading" id="data-analysis-title">. Data Analysis</div>
            <div class="section-heading" id="team-building-title">. Team Building</div>
            <div class="section-heading" id="performance-management-title">. Performance Management</div>
            <div class="section-heading" id="system-admin-title">. System Administration</div>
            <div class="section-heading" id="market-research-title">. Market Research</div>
            <div class="section-heading" id="leadership-dev-title">. Leadership Development</div>
            <div class="section-heading" id="policy-title">. Policy</div>
            <div class="section-heading" id="customer-service-title">. Customer Service</div>
            <div class="section-heading" id="networking-title">. Networking</div>
            <div class="section-heading" id="it-title">. Information Technology</div>
            <div class="section-heading" id="systems-analysis-title">. Systems Analysis</div>
            <div class="section-heading" id="vendor-management-title">. Vendor Management</div>
            <div class="section-heading" id="governance-title">. Governance</div>
            <div class="section-heading" id="it-management-title">. IT Management</div>
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