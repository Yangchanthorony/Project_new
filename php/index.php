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
    <title>Navbar with Image</title>
  
  
    
</head>
<body>

<div class=" container-fluid">
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
    
            <div class="container my-5">
                <div class="container my-5">
                <div class="row g-4">
                        <!-- Event Cards -->
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="event-card">
                                <a href="Evens1.php"><img src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t39.30808-6/477246486_1051489760353087_7951468628992383051_n.jpg?stp=cp6_dst-jpg_s600x600_tt6&_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHQ8Hsa-yYyVj_iq5ASBRYxnVAgkj0gS52dUCCSPSBLnQNo1ljNP2COtUwoo8aH_AtXU_sinOftj-TDS8YJU5PF&_nc_ohc=hJSTgR7rwagQ7kNvgENVyNE&_nc_oc=AdgMxbhKi4X7sEltZa8Qb-SZ15tP1MTUJ-wU4iIBB7G3DxoAxoWSALjcGnDeRehUL3k&_nc_zt=23&_nc_ht=scontent.fpnh2-2.fna&_nc_gid=AbEYpuuFwDUR-JPk5RgZYCD&oh=00_AYF7RgfKoM_apWbcvySNEz5NbWmsd7nkmg3njnJt_EYAYQ&oe=67D62847" alt="Event 1"></a>
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
                                <a href="Evens2.php"><img src="https://www.ppiu.edu.kh/public/images/article/11195036069.jpg" alt="Event 2"></a>
                                <div class="event-card-body">
                                    <h5 id="event2-title">action Welcome back to class!!</h5>
                                    <p id="event2-date">📅 Date: 10 Dec 2022 | ⏰ Time: 1:00 PM - 5:00 PM</p>
                                    <p id="event2-location">📍 Location: PPIU Center</p>
                                    <a href="Evens2.php" class="read-more" id="event2-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="event-card">
                                <a href="Evens3.php"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/482095635_1071006088401454_3389041062273094251_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFYchEFV9QWBokKMrytPYmPcC1p9JvqK3FwLWn0m-orceIC1PFyh0i4bewVWd7APnAMFCJ0NURKA4UlsXfu63PQ&_nc_ohc=h3Iehx3HyhcQ7kNvgFr60Su&_nc_oc=Adi9KlirDTsT6hnw_EzvR_xtCApEuZL_9rR9kNEMVFYifHNc3R99f0XkBXJyAkNytI4&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=A7Q8DmvXLQiQm-mvRUUnZTJ&oh=00_AYFv6ZNSKTzeYXA4WZihiIQup_-PWmxqyTbaWT4aKWcfAw&oe=67D653EB" alt="Event 3"></a>
                                <div class="event-card-body">
                                    <h5 id="event3-title">PIU student activities to celebrate</h5>
                                    <p id="event3-date">📅 Date: 8 March 2025 | ⏰ Time: 2 PM - 5 PM</p>
                                    <p id="event3-location">📍 Location: PPIU Center</p>
                                    <a href="Evens3.php" class="read-more" id="event3-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300"   >
                            <div class="event-card">
                                <a href="Evens4.php"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/481134318_1061535806015149_3261788359234709455_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEMBvpdA8b3Bkpx5u-UsbeXBnTmetmQisQGdOZ62ZCKxOaHl5t-jmT2ZMm_k5EFmVmWOVZDfUup8iPtmZbm6hfO&_nc_ohc=bUvInmuRLN0Q7kNvgF_ckCY&_nc_oc=AdgGUlyvuvMTgA8cw6fvxFqFlBauC01a8ukd6lj27ZDYi3588tNs6aVLMSip7cLJa6Q&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=AoiTLpLEqPiDn0c7gyJtXgL&oh=00_AYHiZnc6uk6IJT9ogDfUBa2hFirc0FmUC5E4tHkozQ-dOQ&oe=67D79DD0" alt="Event 4"></a>
                                <div class="event-card-body">
                                    <h5 id="event4-title">The management of (PPIU)</h5>
                                    <p id="event4-date">📅 Date: 21 February 2025 | ⏰ Time: 2:00 PM - 5:00 PM</p>
                                    <p id="event4-location">📍 Location: High School</p>
                                    <a href="Evens4.php" class="read-more" id="event4-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div style=" height: 1200px;" class="container gallery-container">
                <h2 class="gallery-title" id="ppiu-community-title">PPIU Community</h2>
                    <div class="row g-4 pic">
                        <!-- Gallery Item 1 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="10">
                            <div class="gallery-item">
                                <a href="http://web.facebook.com/photo/?fbid=1065362475632482&set=a.641396244695776"><img src="https://scontent.fpnh2-1.fna.fbcdn.net/v/t39.30808-6/482024988_1065362482299148_2169729506199855396_n.jpg?stp=dst-jpg_p526x296_tt6&_nc_cat=110&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEfhgeNC5fmIHtKqEsCXKLUeXW5RMwMlMx5dblEzAyUzDjPPpDkKBFA2btBNLI2nMy7mfQafFDOEhKnDQFyXvzv&_nc_ohc=22b8gCZYnU4Q7kNvgGo-x4k&_nc_oc=Adj4WECuN0dK-2UqyxK4AIAwmXRSXR2PC-CKmNY--dmnVsdje6XpKzsSe_5Kh9pwbp8&_nc_zt=23&_nc_ht=scontent.fpnh2-1.fna&_nc_gid=Atf4ohTSCcoeuYouiN4OmjW&oh=00_AYEavOMlBA6Qmc-Zs8HqcSIIxl9dl0KQHdY20yVLuMU-6Q&oe=67D63B8A" alt="Gallery Image 1"></a>
                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="20">
                            <div class="gallery-item">
                                <a href="https://web.facebook.com/photo/?fbid=1055913179910745&set=a.641396244695776"><img src="https://scontent.fpnh2-1.fna.fbcdn.net/v/t39.30808-6/476159267_1055913233244073_5178311457900207246_n.jpg?stp=dst-jpg_s720x720_tt6&_nc_cat=110&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFmWxuaw7QNxnWbaBsd-Jw9ZwiNUrMoIcpnCI1Ssyghyvw_cBuc-iNL-QOgFRf649hkBd0HshfIwtfCF3x2MSZ9&_nc_ohc=36et9xfO87wQ7kNvgExbobr&_nc_oc=Adgea6Z7YoMGWSG8xwMhX6SIrUG70nsb3MBL6jVjj4RYWpGgwGGhOBpyV6AEsrGf39g&_nc_zt=23&_nc_ht=scontent.fpnh2-1.fna&_nc_gid=AijdubfNjeu4vleWa0YvoW-&oh=00_AYEQvqx5oFUw63SoQIXb9ZfKMYWrSUDgyq97dDf4O01ZSg&oe=67D6423B" alt="Gallery Image 2"></a>
                            </div>
                        </div>
                        <!-- Gallery Item 3 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="30">
                            <div class="gallery-item">
                                <a href="https://web.facebook.com/photo/?fbid=1055912533244143&set=a.641396244695776"><img src="https://scontent.fpnh2-2.fna.fbcdn.net/v/t39.30808-6/480282573_1055912599910803_4948037012777270904_n.jpg?stp=dst-jpg_s720x720_tt6&_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEdsBE3QnzqFLzi5WoLVTu-URjm924PgUlRGOb3bg-BSYeypobFbt7cLMuEAV6F7W9J0v04QjdLyx7ufJO-DmTD&_nc_ohc=H_AXmQa0d8UQ7kNvgGmeTXY&_nc_oc=AdjhtCBoQ5A7-4EWSxqKGxtUWBoYw_B8Qc8oTdRZNXTzPx-RREk96vu4B9t-F1BBn2I&_nc_zt=23&_nc_ht=scontent.fpnh2-2.fna&_nc_gid=AbEYpuuFwDUR-JPk5RgZYCD&oh=00_AYHyoIyGUU2fBTKCPVrelhL9QIa9Ky4ZpW0A4BbgCKwsiA&oe=67D648EE" alt="Gallery Image 3"></a>
                            </div>
                        </div>

                        <h2 class="gallery-title" id="ppiu-lecture-title">PPIU Lecture</h2>
                        <!-- Gallery Item 4 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="40">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 4">
                            </div>
                        </div>
                        <!-- Gallery Item 5 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="50">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 5">
                            </div>
                        </div>
                        <!-- Gallery Item 6 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="60">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 6">
                            </div>
                        </div>

                        <div style="margin-left: 440px;" class="col-md-4" data-aos="zoom-in-down" data-aos-delay="60">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 6">
                            </div>
                        </div>
                    </div>
                    
                    
                    <a href="https://web.facebook.com/ppiu.edu.kh.ppiucam">
                    <h4 style="margin-top: 50px; margin-left: 60px; color: white;" id="facebook-follow">
                        <i class="fa-brands fa-facebook"></i> follow in facebook
                    </h4>
                    </a>
                </div>

                
                

                <div style="margin-top: 50px;" class="container text-center text">
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
                            <h5 style="cursor: pointer;" class="section-title text-center" id="masters-section-title">Master's</h5>
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
                <h2 style="margin-bottom: 100px;" id="major-programs-heading">Major Programs</h2>
            </div>
                        

            <div style="margin-top: 25px;"  class="program-container " >

                 <!-- Master's Degree -->
                 <div  class="program-box" id="master-box" >
                 <div class="program-header" id="master-header" onclick="toggleList('master-box')">
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
                <div class="program-header" id="bachelor-header" onclick="toggleList('bachelor-box')">
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
    <div class="program-header" onclick="toggleList('Associate-box')" id="associate-header">
        Associate's Degree
        <i class="fas fa-bars"></i>
    </div>
    <ul class="program-list">
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
    <div class="program-header" onclick="toggleList('Doctoral-box')" id="doctoral-header">
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
                        <a href="news1.php"><img src="https://scontent.fpnh2-3.fna.fbcdn.net/v/t39.30808-6/482985561_1071063881729008_5082609035351126105_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHAcsvIedZtgHGw2mA6NHKwJtp495lxNhgm2nj3mXE2GB7CxiBCUxpzVsH98YEOtv3x0kGSXZvfWLZ6oW3LxOKl&_nc_ohc=1ObRH6BfsEcQ7kNvgFQMSco&_nc_oc=Adj_XwEhMAen6668TnpsEq1ziudlsHUFdzKwLIEPff_BpMo6U4z-yz1OhnLE_zv2lKY&_nc_zt=23&_nc_ht=scontent.fpnh2-3.fna&_nc_gid=APP6rqLJlAXjiiU6CODB7ih&oh=00_AYF6SXzA40WOv1yN1g8m07jPnwKiBVMOxGR5nzEA6WNIIQ&oe=67D62739" alt="News Image" class="news-image"></a>
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
                        <a href="news2.php"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/484534585_1075045201330876_4177505867786831929_n.jpg?stp=dst-jpg_p526x395_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeE3uPMglxVcAcjurt7xOXBHiwgGsG44ESGLCAawbjgRIY_r-7_bz4cWVh-PvLuYA5ZqiTmU4Nar7ODvWIkie_zz&_nc_ohc=HPMVmlGHKwsQ7kNvgElVHsb&_nc_oc=Adj_uihmZTinfapE1IfMFhouLrLJxYWp6iTf7pja9XTlH8jqi4xA4GDCWgbHmpvecnE&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=va4feiNufNE4TFBUmj73Tg&oh=00_AYFIByLfE8oGT17b1Gk97abBbaN228NXP4PfpkfX04F_pQ&oe=67DC657B" alt="News Image" class="news-image"></a>
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
                            <a href="news3.php"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/480692043_1062158615952868_6249600115321643827_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHkan397T3wT6A_RiK5chprJeBvBQhR9m4l4G8FCFH2bh9IyNSeBm0GEVS1CVt1gmmjrvgl-ubBkWCa8Li8vBlx&_nc_ohc=vex7r5Ou5rIQ7kNvgFAA-BG&_nc_oc=Adja_KyeyjR7K1htjyrttBdYb5xhWCWMTENOPlxAJlMB1D8gYagYDTBTkFB77I_-C0M&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=Oa8pjCfY9caktEFgAQdgAg&oh=00_AYGTMuPDFi09Iy3O1IXETxbDYhaIo2zW39vdVa92jw9LRg&oe=67DC90B5" alt="News Image" class="news-image"></a>
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
                        <a href="news4.php"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/480689758_1056963109805752_3223977946938057394_n.jpg?stp=dst-jpg_p526x395_tt6&_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGGpK48tUJCYsYbeyNCaAVFPnbJpCrEO-0-dsmkKsQ77dXMXiIfG5WEmQt6Qj2Hd_DFBogfxl10HYhQCKX2cqW8&_nc_ohc=VD3lspy5YcMQ7kNvgEUG-3B&_nc_oc=AdjwagKShwVNeJrlv-2iRrb6CxqbguJ3iIDtu4GJ0t0Tcv7IqZ1ZE7BM7BL4082UB2g&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=2xdEY3aI7t1CyaB5BxwmaQ&oh=00_AYETqKWWF-ItI0SfKjBE6W7NBI-7PqBAWM6yN0GhcJPLQA&oe=67DC7C46" alt="News Image" class="news-image"></a>
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
        

        <div style="margin-top: 30PX;" class="background d-flex flex-wrap">
            <div class="left col-md-6">
                <h2 id="about-ppiu-left-title">About PPIU</h2>
                <p id="about-ppiu-left-desc">As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.</p>
                <a href="history.php" class="btn-read-more" id="about-ppiu-left-readmore">Read More</a>
            </div>
                <div class="right col-md-6 ">
                    <img src="https://unication.eu/wp-content/uploads/2024/04/featpic-4.png" alt="">
                </div>

                <div class="left_mid col-md-6">
                    <img src="https://academics-bucket-sj19asxm-prod.s3.ap-southeast-1.amazonaws.com/c2765282-025a-4abb-87ad-a309ec66f543/feature-image.jpg" alt="">
                    <!-- <div class="box">
                    </div> -->
                </div>
                <div class="right_mid col-md-6 ">
                <div class="right_up">
                    <h2 id="about-ppiu-right-title">About PPIU</h2>
                    <p id="about-ppiu-right-desc">As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.</p>
                    <a href="history.php" class="btn-read-more" id="about-ppiu-right-readmore">Read More</a>
                </div>
                   <div class="right_down">
                    <img src="https://lh3.googleusercontent.com/proxy/-kDTKcZn6-IpGdF54CuuJo9jK1vgT4GBuHJIiH4XrZEMjBbjovSRETAt5wGMeoZU6XxxbWdTwM1qjsW0LozvyhHeEYr8YInpAl8xhJBd" alt="">
                   </div>
                </div>
        </div>


            <div class="container">
                <div class="row ">
                    <div class="col-md-6 logo-section ">
                    <div class="logo-title" id="dual-degree-partners-title">Dual Degree Partners</div>
                    
                        <div style="margin-right: 100px;"  class="logo d-flex">
                            <img src=" https://empm.education/wp-content/uploads/2023/09/EMPM-Logo-WhiteBG-01.png " alt="The University of Arizona">
                           
                            
                            <img src="https://i.ytimg.com/vi/P5CjkPSjAJc/maxresdefault.jpg" alt="Fort Hays State University">
                           
                        </div>
                       
                    </div>
                    
                    <div class="col-md-6 logo-section">
                    <div class="logo-title" id="our-subsidiaries-title">Our Subsidiaries</div>
                        <div style=" margin-left: 100px;" class="logo d-flex">
                            <img src="https://pbs.twimg.com/media/EujqV00VoAIQzPM.jpg" alt="Alfy High School">
                            <img src="https://i.ytimg.com/vi/P5CjkPSjAJc/maxresdefault.jpg" alt="Foxcroft Academy">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div  class="map">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.836266581057!2d104.9088324748272!3d11.56359284418184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095114f1138ac5%3A0x7619b468836cd886!2sPhnom%20Penh%20international%20university!5e0!3m2!1sen!2skh!4v1741534895919!5m2!1sen!2skh" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
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

