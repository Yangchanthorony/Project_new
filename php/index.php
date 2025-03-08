<?php 
include("../components/header.php");
include("../js/index.php");
include("../css/index.php");

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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">
    <title>Navbar with Image</title>
  
    
    
</head>
<body>
    <div class=" container-fluid">
        <div class="mid">
            <!-- Bootstrap Carousel -->
            <div  id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div style="margin-top: 210px;" class="carousel-inner ">
                    <div class="carousel-item active">
                        <img  src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" class="d-block w-100 slide-img" alt="Slide 1">
                        <div class="carousel-caption">
                            <h3>Welcome to Our Website</h3>
                            <p>Discover amazing stories and updates.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQd1kWKsODGmz1P44kiLTfpeIOkaemYITnaRVOZEn372xCyrpNoQQ_dMDAV4dWLpVTDFekNEtlkJaDnhlTzoQWdNg" class="d-block w-100 slide-img" alt="Slide 2">
                        <div class="carousel-caption">
                            <h3>Welcome to Our Website</h3>
                            <p>Discover amazing stories and updates.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqKzREP51Xq_omnZXfiR_cgSut-NRkQEQ6TsQ-kctrJp8tQdIm6NxhBugsd_atPTmgYTvjxPWnRjVNlkhD_nTRsLvHrQ3sRmKS3lefGg" class="d-block w-100 slide-img" alt="Slide 3">
                        <div class="carousel-caption">
                            <h3>Welcome to Our Website</h3>
                            <p>Discover amazing stories and updates.</p>
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
                <h1>Events</h1>
            </div>
    
            <div class="container my-5">
                <div class="container my-5">
                    <div class="row g-4">
                        <!-- Event Cards -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="event-card">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Event 1">
                                <div class="event-card-body">
                                    <h5>Seminar on "Resolving Disputes in a Globalized Economy"</h5>
                                    <p>📅 Date: 05 March 2025 | ⏰ Time: 1:30 PM - 3:00 PM</p>
                                    <p>📍 Location: AUPP Technology Center</p>
                                    <a href="Evens.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="event-card">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Event 2">
                                <div class="event-card-body">
                                    <h5>Seminar on "Resolving Disputes in a Globalized Economy"</h5>
                                    <p>📅 Date: 26 February 2025 | ⏰ Time: 1:00 PM - 5:00 PM</p>
                                    <p>📍 Location: AUPP Campus - ATC</p>
                                    <a href="Evens2.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="event-card">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Event 3">
                                <div class="event-card-body">
                                    <h5>Seminar on "Resolving Disputes in a Globalized Economy"</h5>
                                    <p>📅 Date: 21-23 February 2025 | ⏰ Time: 8 AM - 5 PM</p>
                                    <p>📍 Location: AUPP Campus</p>
                                    <a href="Evens3.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container gallery-container">
                    <h2 class="gallery-title">PPIU Community</h2>
                    <div class="row g-4 pic">
                        <!-- Gallery Item 1 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="10">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 1">
                            </div>
                        </div>
                        <!-- Gallery Item 2 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="20">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 2">
                            </div>
                        </div>
                        <!-- Gallery Item 3 -->
                        <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="30">
                            <div class="gallery-item">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Cat_November_2010-1a.jpg" alt="Gallery Image 3">
                            </div>
                        </div>
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
                    </div>
                    
                    
                    <h4 style="margin-top: 40px;"><i class="fa-brands fa-facebook"></i>
                    follow in facebook</h4>
                </div>

                <div class="container text-center  text ">
                    <h2 class="">Admissions Processes</h2>
                </div>  
                    <!-- Bachelor's Section -->
                    <div class="textt" data-aos="fade-up" data-aos-duration="1000">
                       <h5 class="section-title text-center">Bachelor's</h5>
                    </div>
                    

                    <div class="row justify-content-center">
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-money-bill-wave"></i>
                            <h5 style="margin-top: 12px;">Step 1</h5>
                            <p id="p">Pay Application Fee</p>
                        </div>
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-calendar-check"></i>
                            <h5 style="margin-top: 12px;">Step 2</h5>
                            <p >English Placement Test</p>
                        </div>
                        <div class="col-md-3 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-file-alt"></i>
                            <h5 style="margin-top: 12px;">Step 3</h5>
                            <p>Submit Documents</p>
                        </div>
                    </div>
                    
                    <!-- Master's Section -->
                    <div class="textt"  data-aos="fade-up" data-aos-duration="1000">
                        <h5 style="cursor: pointer;" class="section-title  text-center ">Master's</h5>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-money-bill-wave"></i>
                            <h5 style="margin-top: 12px;">Step 1</h5>
                            <p>Pay Application Fee</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-calendar-check"></i>
                            <h5 style="margin-top: 12px;">Step 2</h5>
                            <p>English Placement Test</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-file-alt"></i>
                            <h5 style="margin-top: 12px;">Step 3</h5>
                            <p>Submit Documents</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-2 step-box por" data-aos="fade-up" data-aos-delay="400">
                            <i class="fas fa-users"></i>
                            <h5 style="margin-top: 12px;">Step 4</h5>
                            <p>Interview with Coordinator</p>
                        </div>
                    </div>  
            </div>

            <!-- Major Programs -->
            <div  class="text">
                <h2 style="margin-bottom: 100px;" >Major Programs</h2>
            </div>
            

            <div  class="program-container red">

                 <!-- Master's Degree -->
                 <div class="program-box" id="master-box">
                    <div class="program-header" onclick="toggleList('master-box')">
                        Master's Degree
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="program-list">
                        <li>Business Administration</li>
                        <li>Legal Studies</li>
                        <li>Laws in International Business and Digital Technologies</li>
                        <li>Laws in Artificial Intelligence</li>
                        <li>Laws in Cybersecurity</li>
                        <li>Computer Science (AI Specialization)</li>
                    </ul>
                </div>

                <!-- Bachelor's Degree -->
                <div class="program-box" id="bachelor-box">
                    <div class="program-header" onclick="toggleList('bachelor-box')">
                        Bachelor's Degree
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="program-list">
                        <li>School of Business</li>
                        <li>School of Digital Technologies</li>
                        <li>School of Law</li>
                        <li>School of Social Sciences</li>
                    </ul>
                </div>

                <div class="program-box" id="Associate-box">
                    <div class="program-header" onclick="toggleList('Associate-box')">
                        Associate's Degree
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="program-list">
                        <li>School of Business</li>
                        <li>School of Digital Technologies</li>
                        <li>School of Law</li>
                        <li>School of Social Sciences</li>
                    </ul>
                </div>

                <div class="program-box" id="Doctoral-box">
                    <div class="program-header" onclick="toggleList('Doctoral-box')">
                        Doctoral's Degree
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul class="program-list">
                        <li>School of Business</li>
                        <li>School of Digital Technologies</li>
                        <li>School of Law</li>
                        <li>School of Social Sciences</li>
                    </ul>
                </div>

            </div>

            <div class="textt">
                <h2 class="text-center fw-bold mb-4  ">News</h2>
            </div>
            
            <div class="container news-container">
                <div class="row g-4">
                
                    <!-- News Card 1 -->
                    <div class="col-md-6 col-lg-3"data-aos="fade-down" data-aos-delay="100">
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfGnRGl2DBu6wZ6t_kal9etixFzBw10WKoFg&s" alt="News Image" class="news-image">
                            <div class="news-content">
                                <span class="news-date">March 4, 2025</span>
                                <h5 class="news-title">AUPP Student wins 3rd prize in the Cloud Track...</h5>
                                <p class="news-description">Representing Cambodia, our talented students, Sethisak SAN, Singyean HONG, and Sophanith SOM, distinguished themselves.</p>
                                <div class="read-more text-center">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- News Card 2 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="200">
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfGnRGl2DBu6wZ6t_kal9etixFzBw10WKoFg&s" alt="News Image" class="news-image">
                            <div class="news-content">
                                <span class="news-date">February 28, 2025</span>
                                <h5 class="news-title">Eagle of AUPP, Meilang Hut</h5>
                                <p class="news-description">Meilang Hut is a junior pursuing a Bachelor of Science in Business...</p>
                                <div class="read-more text-center">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- News Card 3 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="300">
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfGnRGl2DBu6wZ6t_kal9etixFzBw10WKoFg&s" alt="News Image" class="news-image">
                            <div class="news-content">
                                <span class="news-date">February 20, 2025</span>
                                <h5 class="news-title">AUPP and CIA FIRST International School Forge...</h5>
                                <p class="news-description">We are pleased to announce the signing of a Memorandum of Understanding...</p>
                                <div class="read-more text-center">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- News Card 4 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-down" data-aos-delay="400">
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfGnRGl2DBu6wZ6t_kal9etixFzBw10WKoFg&s" alt="News Image" class="news-image">
                            <div class="news-content">
                                <span class="news-date">February 19, 2025</span>
                                <h5 class="news-title">AUPP Business Students Win First Runner-Up...</h5>
                                <p class="news-description">Congratulations to our AUPP Business students for their achievements...</p>
                                <div class="read-more text-center">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        

            <div class="background d-flex flex-wrap">
                <div class="left col-md-6">
                    <h2>About PPIU</h2>
                    <p>As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.</p>
                    <a href="#" class="btn-read-more">Read More</a>
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
                    <h2>About PPIU</h2>
                    <p>As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.</p>
                    <a href="#" class="btn-read-more">Read More</a>
                   </div>
                   <div class="right_down">
                    <img src="https://lh3.googleusercontent.com/proxy/-kDTKcZn6-IpGdF54CuuJo9jK1vgT4GBuHJIiH4XrZEMjBbjovSRETAt5wGMeoZU6XxxbWdTwM1qjsW0LozvyhHeEYr8YInpAl8xhJBd" alt="">
                   </div>
                </div>
            </div>
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 logo-section ">
                        <div class="logo-title">Dual Degree Partners</div>
                        <div class="logo d-flex">
                            <img src="https://academics-bucket-sj19asxm-prod.s3.ap-southeast-1.amazonaws.com/c2765282-025a-4abb-87ad-a309ec66f543/feature-image.jpg" alt="The University of Arizona">
                           
                            
                            <img src="https://academics-bucket-sj19asxm-prod.s3.ap-southeast-1.amazonaws.com/c2765282-025a-4abb-87ad-a309ec66f543/feature-image.jpg" alt="Fort Hays State University">
                            <div class="dividerr"></div>
                        </div>
                    </div>
                    <div class="col-md-6 logo-section">
                        <div class="logo-title">Our Subsidiaries</div>
                        <div class="logo d-flex">
                            <img src="https://empm.education/wp-content/uploads/2023/09/EMPM-Logo-WhiteBG-01.png" alt="Alfy High School">
                            <img src="https://i.ytimg.com/vi/P5CjkPSjAJc/maxresdefault.jpg" alt="Foxcroft Academy">
                          
                        </div>
                    </div>
                </div>
            </div>
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

