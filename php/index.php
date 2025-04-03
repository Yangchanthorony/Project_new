<?php 
 include("../components/header.php");
include("../js/index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">
    <title>Home page</title>

</head>
<body>

<div   class=" container-fluid">
    <div style="margin-top: 200px;" class="content-right" data-aos="fade-left">
        <marquee   behavior="scroll" direction="left" scrollamount="5">
            <div  class="text-news">
                <i class="fas fa-angle-double-right"></i>
                <a id="scroll" href="" data-aos="fade-up" data-aos-delay="400">
                Let's sign up​​ to study get special price</a>
             
                <i class="fas fa-angle-double-right"></i>
                <a id="scroll2" href="" data-aos="fade-up" data-aos-delay="200">Enrolment form today on!</a>
                &ensp;
            </div>
        </marquee>
    </div>
        <div class="mid">
            <!-- Bootstrap Carousel -->
            <div style="margin-left: 12px;   "   id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2000">
            
                <div   class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div style="margin-top:5px;  " class="carousel-inner ">
                    <div class="carousel-item active">
                        <img  src="https://www.ppiu.edu.kh/public/images/slideshow/Banner_Website_PPIU.jpg" class="d-block w-100 slide-img" alt="Slide 1">
                        <div class="carousel-caption">
                            <h3 style=" margin-left: 70px;" >Welcome to our Website PPIU</h3>
                            <p style=" margin-left: 70px;">Discover amazing stories and updates.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img style="background-size: cover;" src="https://i.ytimg.com/vi/EWIhu3Aqm0E/maxresdefault.jpg" class="d-block w-100 slide-img" alt="Slide 2">
                        <div class="carousel-caption">
                            <h3 style=" margin-left: 70px; ">Welcome to our Website PPIU</h3>
                            <p style=" margin-left: 70px;"></p>Discover amazing stories and updates.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img style="object-fit: cover;" src="https://ait.ac.th/wp-content/uploads/2024/05/image-11.jpeg" class="d-block w-100 slide-img" alt="Slide 3">
                        <div  class="carousel-caption">
                        <h3 style=" margin-left: 70px;">Welcome to our Website PPIU</h3>
                        <p style=" margin-left: 70px;"></p>Discover amazing stories and updates.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class="text">
                <h1 id="events-heading">Events</h1>
            </div>
    
         
            <div class="container my-3">
                <div class="row g-4">
                        <!-- Event Cards -->
                        <div  class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="event-card">
                                <a href="Evens1.php"><img src="../img/486295357_1083683420467054_96073237029920477_n.jpg" alt="Event 1"></a>
                                <div class="event-card-body">
                                    <h5 id="event1-title">Course at the Faculty of Law and Economics</h5>
                                    <p id="event1-date">📅 Date: 11 Feb 2025 | ⏰ Time: 5:30 PM - 7:00 PM</p>
                                    <p id="event1-location">📍 Location: PPIU Center</p>
                                    <a href="Evens1.php" class="read-more" id="event1-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="event-card">
                                <a href="Evens2.php"><img src="../img/11195036069.jpg" alt="Event 2"></a>
                                <div class="event-card-body">
                                    <h5 id="event2-title">action welcome back to class!!</h5>
                                    <p id="event2-date">📅 Date: 10 Dec 2022 | ⏰ Time: 1:00 PM - 5:00 PM</p>
                                    <p id="event2-location">📍 Location: PPIU Center</p>
                                    <a href="Evens2.php" class="read-more" id="event2-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="event-card">
                                <a href="Evens3.php"><img src="../img/482095635_1071006088401454_3389041062273094251_n.jpg" alt="Event 3"></a>
                                <div class="event-card-body">
                                    <h5 id="event3-title">PIU student activities to celebrate</h5>
                                    <p id="event3-date">📅 Date: 8 March 2025 | ⏰ Time: 2 PM - 5 PM</p>
                                    <p id="event3-location">📍 Location: PPIU Center</p>
                                    <a href="Evens3.php" class="read-more" id="event3-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400"   >
                            <div class="event-card">
                                <a href="Evens4.php"><img src="../img/486643352_1085236973645032_6184732671856785796_n.jpg" alt="Event 4"></a>
                                <div class="event-card-body">
                                    <h5 id="event4-title">The management of (PPIU) share experiences...</h5>
                                    <p id="event4-date">📅 Date: 21 February 2025 | ⏰ Time: 2:00 PM - 5:00 PM</p>
                                    <p id="event4-location">📍 Location: High School</p>
                                    <a href="Evens4.php" class="read-more" id="event4-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

                <div class="container my-5">

                <div style=" height: 1050px;" class="container gallery-container">
                <h2 class="gallery-title" id="ppiu-community-title">PPIU Community</h2>
                    <div class="row g-4 pic">
                        <!-- Gallery Item 1 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="10">
                            <div class="gallery-item">
                                <a href="http://web.facebook.com/photo/?fbid=1065362475632482&set=a.641396244695776"><img src="../img/482024988_1065362482299148_2169729506199855396_n.jpg" alt="Gallery Image 1"></a>

                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="20">
                            <div class="gallery-item">
                                <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/484939670_1078587807643282_878763841480744665_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGN3HBYfKXbKy1vsY1t2COxoXj0tMXwf4mhePS0xfB_iTf0ReDUkXHV0jeMgniY-J_YoVbWlEb49aayPdaTR-_0&_nc_ohc=3W_knuYzot0Q7kNvgFVol-U&_nc_oc=Adm4QwUazN9YeJgNqDHTtvPAhLLkMg7rvKatQSLBCuQp9I5dTAcElHBaE8fMiQlF4t4&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=BGDuaAYZ4h2MQUQIYWE7Vw&oh=00_AYEiwAPuGj7Gx-WoeCC61n1I6EBGZxH7xR5Fwwdi8j5HAw&oe=67EAAD4A"><img src="../img/484939670_1078587807643282_878763841480744665_n.jpg" alt="Gallery Image 2"></a>
                            </div>
                        </div>
                    
                        <!-- Gallery Item 3 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="30">
                            <div class="gallery-item">
                                <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/481902145_1069260435242686_4303608045703335507_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFq3-rMPcKgvBQC2c3hklU08LIh1l2oX7jwsiHWXahfuAkqkQjYrp6bc4wh-VNI8v1xZO2C8d836aNrxlSa72OO&_nc_ohc=sdAa-Dp4SCAQ7kNvgHh-K5o&_nc_oc=Admdja7IRiu_jNBGpoNzFlkJ5VUIOOlHUiH3fic_jHOspbl-xrZ4AUdWpciL5nYYUOw&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=l_VhVVbwoao07VTc8l41gA&oh=00_AYECRuJ30tLgYU1d7pUq-_e3VaI1BZ4pavMg3GPA_E_NQA&oe=67EAA1B7"><img src="../img/481902145_1069260435242686_4303608045703335507_n.jpg" alt="Gallery Image 3"></a>
                            </div>
                        </div>

                        <a href="Project_ Coordinator.php">
                        <h4 style="margin-top: 10px; width: 300px; color: white; display: inline-flex;" id="see"data-aos="fade-up"  data-aos-delay="200"> view more</h4></a>

                        <h2 style="margin-top: 30px;" class="gallery-title" id="project-coordinator-title">Project Coordinator & Member</h2>
                        <!-- Gallery Item 4 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="40">
                            <div class="gallery-item">
                                <img src="../img//3.jpg" alt="Gallery Image 4">
                                <h3 style="margin-top: 20px; margin-left: 10px;">Hin Sam Ath</h3>
                                <h6 style="margin-left: 10px; margin-bottom: 20px;"> Member</h6>
                            </div>
                        </div>
                        <!-- Gallery Item 5 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="50">
                            <div class="gallery-item">
                                <img src="../img/4.jpg" alt="Gallery Image 5">
                                <h3 style="margin-top: 20px; margin-left: 10px;">Tep Kolap</h3>
                                <h6 style="margin-left: 10px; margin-bottom: 20px;"> Project Manager</h6>
                            </div>
                        </div>
                        <!-- Gallery Item 6 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="60">
                            <div class="gallery-item">
                                <img src="../img/1-1.jpg" alt="Gallery Image 6">
                                <h3 style="margin-top: 20px; margin-left: 10px;">Hong Phearin</h3>
                                <h6 style="margin-left: 10px; margin-bottom: 20px;">Member</h6>
                            </div>
                        </div>

                        <a href="Project_ Coordinator.php">
                    <h4 style="margin-top: 10px;   width: 300px; color: white; display: inline-flex; " id="saw" data-aos="fade-up"  data-aos-delay="250"> view more</h4></a>
                        </div>
                    </div>
                    
                  
                </div>

                <div  class="container text-center text">
                    <h2 class="" id="admissions-processes-title">Admissions Processes</h2>
                </div>
                    <!-- Bachelor's Section -->
                    <div class="textt" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="section-title text-center" id="bachelors-section-title">Bachelor's</h5>
                    </div>
                                        

                    <div class="row justify-content-center">
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-money-bill-wave"></i>
                            <h5 style="margin-top: 12px;">Step 1</h5>
                            <p id="p">Pay Application Fee</p>
                        </div>
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-calendar-check"></i>
                            <h5 style="margin-top: 12px;" id="bachelor-step2-title">Step 2</h5>
                            <p id="bachelor-step2-desc">English Placement Test</p>
                        </div>
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-file-alt"></i>
                            <h5 style="margin-top: 12px;" id="bachelor-step3-title">Step 3</h5>
                            <p id="bachelor-step3-desc">Submit Documents</p>
                        </div>
                    </div>
                    
                    <!-- Master's Section -->
                    <div class="textt" data-aos="fade-up" data-aos-duration="1000">
                            <h5 style="margin-top: 10px;" style="cursor: pointer;" class="section-title text-center" id="masters-section-title">Master's</h5>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="100">
                                <i class="fas fa-money-bill-wave"></i>
                                <h5 style="margin-top: 12px;" id="master-step1-title">Step 1</h5>
                                <p id="master-step1-desc">Pay Application Fee</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="200">
                                <i class="fas fa-calendar-check"></i>
                                <h5 style="margin-top: 12px;" id="master-step2-title">Step 2</h5>
                                <p id="master-step2-desc">English Placement Test</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="300">
                                <i class="fas fa-file-alt"></i>
                                <h5 style="margin-top: 12px;" id="master-step3-title">Step 3</h5>
                                <p id="master-step3-desc">Submit Documents</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="400">
                                <i class="fas fa-users"></i>
                                <h5 style="margin-top: 12px;" id="master-step4-title">Step 4</h5>
                                <p id="master-step4-desc">Interview with Coordinator</p>
                            </div>
                    </div>
            </div>

            <!-- Major Programs -->
            <div class="text">
                <h2 style="margin-bottom: 10px;" id="major-programs-heading">Major Programs</h2>
            </div>
                        

         <div style="margin-top: 25px;"  class="program-container " >

                 <!-- Master's Degree -->
                 <div  class="program-box" id="master-box" >
                 <div class="program-header" id="master-headero" onclick="toggleList('master-box')">
                    Master's Degree
                
                   <i  class="fas fa-bars"></i>
                 
                </div>
                <ul class="program-list">
                    <li id="master-1">Management</li>
                    <li id="master-2">Finance</li>
                    <li id="master-3">Law</li>
                    <li id="master-4">Marketing</li>
                    <li id="master-5">InternationalRelation</li>
                    <li id="master-6">public Administation</li>
                    <li id="master-7">Governance and Ledership</li>
                </ul>
                </div>

                <!-- Bachelor's Degree -->
                <div  class="program-box" id="bachelor-box">
                <div class="program-header" id="bachelor-headero" onclick="toggleList('bachelor-box')">
                    Bachelor's Degree
                    <i class="fas fa-bars"></i>
                </div>
                    <ul class="program-list">
                        <li id="bachelor-1">Accounting</li>
                        <li id="bachelor-2">Management</li>
                        <li id="bachelor-3">Law</li>
                        <li id="bachelor-4">Marketing</li>
                        <li id="bachelor-5">InternationalRelation</li>
                        <li id="bachelor-6">public Administation</li>
                        <li id="bachelor-7">Economic Development</li>
                        <li id="bachelor-8">Hotel & Tourism Management</li>
                        <li id="bachelor-9">Finance & Banking</li>
                        <li id="bachelor-10">Management Information System</li>
                        <li id="bachelor-11">English for Education</li>
                        <li id="bachelor-12">English for Business</li>
                        <li id="bachelor-13">International Business</li>
                        <li id="bachelor-14">Computer Sciences</li>
                        <li id="bachelor-16">Management Information System</li>
                        <li id="bachelor-15">Logistics Management</li>

                    </ul>
                </div>

            <div class="program-box" id="Associate-box">
                <div class="program-header" onclick="toggleList('Associate-box')" id="associate-headero">
                Associate's Degree
               <i    class="fas fa-bars"></i>
            </div>
    <ul  class="program-list">
        <li id="associate-accounting">Accounting</li>
        <li id="associate-management">Management</li>
        <li id="associate-marketing">Marketing</li>
        <li id="associate-hotel-tourism">Hotel & Tourism Management</li>
        <li id="associate-finance-banking">Finance & Banking</li>
        <li id="associate-economic-dev">Economic Development</li>
        <li id="associate-law">Law</li>
        <li id="associate-computer-science">Computer Sciences</li>
        <li id="associate-mis">Management Information System</li>
        <li id="associate-english-edu">English for Education</li>
    </ul>
</div>

<div class="program-box" id="Doctoral-box">
    <div class="program-header" onclick="toggleList('Doctoral-box')" id="doctoral-headero">
        Doctoral's Degree
        <i class="fas fa-bars"></i>
    </div>
    <ul class="program-list">
        <li id="doctoral-finance">Finance</li>
        <li id="doctoral-marketing">Marketing</li>
        <li id="doctoral-management">Management</li>
        <li id="doctoral-economic-dev">Economic Development</li>
        <li id="doctoral-public-admin">Public Administration</li> <!-- Corrected typo -->
    </ul>
</div>

            </div>

            

            <div class="textt">
            <h2 style="margin-top: 50px;" class="text-center fw-bold mb-4" id="news-title">News</h2>
            </div>
            
            <div class="container news-container">
                <div class="row g-4">
                
                    <!-- News Card 1 -->
                    <div class="col-md-6 col-lg-3"data-aos="fade-down" data-aos-delay="100">
                    <div class="news-card">
                        <a href="news1.php"><img src="../img/482985561_1071063881729008_5082609035351126105_n.jpg" alt="News Image" class="news-image"></a>
                        <div class="news-content">
                            <span class="news-date" id="news1-date">05 May 2025</span>
                            <h5 class="news-title" id="news1-title">New Enrollment!</h5>
                            <p class="news-description" id="news1-desc">For more information, please visit the Information Office on the 5th floor of Phnom Penh International University...</p>
                            <div class="read-more text-center">
                                <a style="text-decoration: none; color: white;" href="news1.php" id="news1-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    </div>
        
                    <!-- News Card 2 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="200">
                    <div class="news-card">
                        <a href="news2.php"><img src="../img/484534585_1075045201330876_4177505867786831929_n.jpg" alt="News Image" class="news-image"></a>
                        <div class="news-content">
                            <span class="news-date" id="news2-date">March 15, 2025</span>
                            <h5 class="news-title" id="news2-title">organized entrance exams</h5>
                            <p class="news-description" id="news2-desc">Postgraduate School Activities organized entrance exams for postgraduate students of Phnom Penh International University (PPIU).</p>
                            <div class="read-more text-center">
                                <a style="text-decoration: none; color: white;" href="news2.php" id="news2-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                    </div>
        
                    <!-- News Card 3 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="300">
                    <div class="news-card">
                            <a href="news3.php"><img src="../img/487175522_1085873030248093_1753334788662386249_n.jpg" alt="News Image" class="news-image"></a>
                            <div class="news-content">
                                <span class="news-date" id="news3-date">February 27, 2025</span>
                                <h5 class="news-title" id="news3-title">General General of the CPP</h5>
                                <p class="news-description" id="news3-desc">Phnom Penh International University PPIU and General General of the CPP Has organized...</p>
                                <div class="read-more text-center">
                                    <a style="text-decoration: none; color: white;" href="news3.php" id="news3-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- News Card 4 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="400">
                    <div class="news-card">
                        <a href="news4.php"><img src="../img/486419040_1083774647124598_14398397784573248_n.jpg" alt="News Image" class="news-image"></a>
                        <div class="news-content">
                            <span class="news-date" id="news4-date">February 18, 2025</span>
                            <h5 class="news-title" id="news4-title">Phnom Penh International University of Helds Sok Phone,</h5>
                            <p class="news-description" id="news4-desc">missionary studies the scholarships and sharing the opportunity...</p>
                            <div class="read-more text-center">
                                <a style="text-decoration: none; color: white;" href="news4.php" id="news4-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>

            <div class="container-fluid mt-2">
    <!-- First Row -->
    <div class="row d-flex">

        <div class="col-md-6 blue-section section">
            <h2 
                id="about-ppiu-left-title" 
                style="margin-top: 40px;" 
                data-aos="fade-right" 
                data-aos-duration="1000"
            >About PPIU</h2>
            <p 
                id="about-ppiu-left-desc" 
                data-aos="fade-right" 
                data-aos-duration="1000" 
                data-aos-delay="200"
            >The university was renamed "Phnom Penh International University - PPIU" in 2006 by Sub-Decree No. 111 ANKr. BK dated October 24, 2006, of the Royal Government of Cambodia</p>
            <a href="history.php#carouselExampleIndicators">
                <button 
                    class="btn btn-custom btn-outline-danger" 
                    id="about-ppiu-left-readmore" 
                    data-aos="fade-up" 
                    data-aos-duration="1000" 
                    data-aos-delay="400"
                >Read More</button>
            </a>
        </div>


        <div class="col-md-6 p-0">
            <img 
                src="../img/featpic-4.png" 
                class="img-fluid w-100" 
                alt="Students studying" 
                data-aos="fade-left" 
                data-aos-duration="1000"
            >
        </div>
    </div>
    
    <!-- Second Row -->
    <div class="row">
        <div class="col-md-6 p-0">
            <img 
                src="../img/feature-image.jpg" 
                class="img-fluid w-100" 
                alt="Faculty members" 
                data-aos="fade-right" 
                data-aos-duration="1000"
            >
        </div>


        <div class="col-md-6 white-section">
            <h2 
                style="margin-top: 20px;" 
                id="about-ppiu-right-title" 
                class="text-danger" 
                data-aos="fade-left" 
                data-aos-duration="1000"
            >Professor</h2>
            <p 
                id="about-ppiu-right-desc" 
                data-aos="fade-left" 
                data-aos-duration="1000" 
                data-aos-delay="200"
            >PPIU hires highly qualified and experienced faculty. Ninety percent of the faculty hold Ph.D.’s from American and other western universities and have extensive university-level teaching experience.</p>
            <a href="Professor.php">
                <button 
                    class="btn btn-outline-danger" 
                    id="about-ppiu-right-readmore" 
                    data-aos="fade-up" 
                    data-aos-duration="1000" 
                    data-aos-delay="400"
                >Read more</button>
            </a>

            <img 
                style="margin-top: 40px;" 
                src="../img/unnamed.jpg" 
                class="img-fluid w-100" 
                alt="Faculty members" 
                data-aos="zoom-in" 
                data-aos-duration="1000" 
                data-aos-delay="600"
            >
        </div>
    </div>
</div>

    <div class="container-fluid py-5">
        <div class="row">
            <!-- Dual Degree Partners Section -->
            <div class="col-md-6 text-center border-end">
                <h3 class="section-title"  id="dual-degree-partners-title">Dual Degree Partners</h3>
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-5 mt-4">
                    <div>
                        <img class="rub" src="../img/EMPM-Logo-WhiteBG-01.png" alt="University of Arizona Logo" class="img-fluid logo">
                     
                    </div>
                    <div>
                        <img  class="rub" src="../img/maxresdefault.jpg" alt="Fort Hays State University Logo" class="img-fluid logo">
                     
                    </div>
                </div>
            </div>

            <!-- Our Subsidiaries Section -->
            <div class="col-md-6 text-center">
                <h3 class="section-title " id="our-subsidiaries-title">Our Subsidiaries</h3>
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-5 mt-4">
                    <div>
                        <img  class="rub" src="../img/Batangas_State_Logo-1.png" alt="AUPP High School Logo" class="img-fluid logo">
                     
                    </div>
                    <div>
                        <img  class="rub" src="../img/Instituto_Superior_Tecnico_logo-1-1.png" alt="AUPP Technology Center Logo" class="img-fluid logo">
                     
                    </div>
                   
                </div>
            </div>
           
        </div>
       
        </div>
        <a href="Partner.php"><h4 style=" margin-left: 540px;  width: 250px; color: white; background-color:  goldenrod;" id="view" data-aos="fade-right"  data-aos-duration="1000">view more</h4></a>
    </div>    
 
</div>

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8362665810573!2d104.9088324748272!3d11.563592844181834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095114f1138ac5%3A0x7619b468836cd886!2sPhnom%20Penh%20international%20university!5e0!3m2!1sen!2skh!4v1743362769070!5m2!1sen!2skh" width="1800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

   <?php 
   include("../components/footer.php");
   ?>         
    <!-- Bootstrap JS -->
   
</body>


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true
        
    });
    
    AOS.init({
        duration: 1000, // Default duration of animation
        once: true, // Whether animation should happen only once
        offset: 100, // Offset (in pixels) before animation starts
    });
</script>

</html>

