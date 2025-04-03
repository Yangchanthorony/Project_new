<!DOCTYPE html>
<html lang="en">
    <?php 
    include("../js/index.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phnom Penh international university</title>
    <link rel="website icon"  type="png" href="../img/download.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

    font-family: "Khmer", sans-serif;
  font-weight: 400;
  font-style: normal;

}
body {
    background-color: #f8f9fa;
}

        .top-bar {
          background-color: gold;
            color: white;
            padding: 10px 20px;
            text-align: right;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        
        gap: 15px; /* Adds spacing between items */
           
        }

        /* Tablet responsiveness (768px - 1024px) */
@media (max-width: 1024px) {
  .top-bar {
    padding: 8px 15px; /* Slightly reduce padding for tablets */
    font-size: 13px; /* Slightly smaller font size */
    gap: 10px; /* Reduce gap between items */
    text-align: center; /* Center text for better balance */
    flex-wrap: wrap; /* Allow items to wrap if needed */
  }
}

/* Mobile responsiveness (below 768px, optional) */
@media (max-width: 767px) {
  .top-bar {
    padding: 6px 10px; /* Further reduce padding */
    font-size: 12px; /* Smaller font size for mobile */
    gap: 8px; /* Smaller gap */
    justify-content: space-between; /* Spread items out */
  }
}
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            background: #f8f9fa;
            
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar input {
            border: none;
            outline: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 50px;
            width: 250px;
            color: black;
        }

        .search-bar button {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }

        .search-bar button:hover {
            background: linear-gradient(45deg, #6610f2, #007bff);
            transform: scale(1.05);
        }

        /* Language toggle button */
        .language-toggle {
            display: flex;
            gap: 10px;
        }

        .language-toggle button {
            background: #ffffff;
            border: 2px solid #007bff;
            color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
        }

        .language-toggle button:hover {
            background: #007bff;
            color: white;
        }

        .active-lang {
            background: #007bff !important;
            color: white !important;
        }
        .navbar {
  display: flex;
  align-items: center;
  background-color: white;
  padding: 18px 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  position: fixed;
  width: 100%;
  top: 55px; /* Adjust based on .top-bar height */
  left: 0;
  z-index: 999;
  justify-content: space-evenly; /* From inline style */
  height: 132px; /* From inline style */
  margin-top: 10px; /* From inline style */
}

.navbar img {
  object-fit: cover;
  background-size: cover;
  max-height: 100px; /* Ensure logo fits within navbar height */
}

.nav-links {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 25px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.nav-links li {
  position: relative;
}

.nav-link.active i {
  color: wheat;
  font-size: 25px;
}

.nav-links a {
  text-decoration: none;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: black;
}

.nav-links a:hover {
  color: #fff;
  background-color: red;
  text-decoration: none;
}

.dropdown-menu {
  list-style: none;
  padding: 0;
  position: absolute;
  top: 100%;
  left: 0;
  background: white;
  display: none;
  min-width: 200px; /* Adjusted for better fit */
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.dropdown-menu li {
  width: 100%;
}

.dropdown-menu a {
  padding: 8px 10px; /* Slightly reduced padding */
  display: block;
  white-space: nowrap;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-menu .divider {
  border-bottom: 1px solid #ddd;
}

.fa-sign-in-alt {
  margin-right: 10px;
}

.fa-chevron-down {
  margin-left: 5px;
}

.buttons {
  display: flex;
  gap: 10px;
}

.buttons a {
  background-color: #B71C1C;
  color: white;
  padding: 10px 15px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}

.buttons a:hover {
  background-color: #8E0000;
}

.login-btn {
  background: linear-gradient(135deg, #e24a4a, #357ABD);
  color: white;
  font-size: 18px;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  padding: 12px 24px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin-left: 20px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.login-btn:hover {
  background: linear-gradient(135deg, #357ABD, #e24a4a);
  transform: scale(1.05);
}

.login-btn:active {
  transform: scale(0.98);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.login-btn i,
.login-btn svg {
  font-size: 18px;
  vertical-align: middle;
}

.drop-right {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
  background-color: white;
  min-width: 200px;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.drop-right li {
  display: block;
}

.drop-right li a {
  padding: 8px 10px;
  display: block;
}

.drop-right li a:hover {
  background-color: red;
}

.has-dropright:hover .drop-right {
  display: block;
}

ul {
  list-style: none;
  text-decoration: none;
}

/* Tablet Responsiveness (768px - 1024px) */
@media (max-width: 1024px) {
  .navbar {
    padding: 15px 8px; /* Reduced padding */
    height: auto; /* Allow height to adjust */
    flex-wrap: wrap; /* Allow items to wrap */
    justify-content: space-between; /* Better spacing */
    top: 65px; /* Adjust based on .top-bar height */
  }

  .navbar img {
    max-height: 50px; /* Smaller logo */
  }

  .nav-links {
    gap: 15px; /* Reduced gap */
    flex-wrap: wrap; /* Allow links to wrap */
  }

  .nav-links a {
    padding: 8px; /* Reduced padding */
    font-size: 14px; /* Slightly smaller text */
  }

  .dropdown-menu {
    min-width: 180px; /* Slightly smaller dropdown */
    position: static; /* Stack dropdowns naturally */
    box-shadow: none; /* Remove shadow for simplicity */
  }

  .drop-right {
    position: static; /* Stack submenus naturally */
    min-width: 100%; /* Full width of parent */
    box-shadow: none;
  }

  .dropdown:hover .dropdown-menu,
  .has-dropright:hover .drop-right {
    display: none; /* Disable hover on tablets */
  }

  .dropdown-menu.show,
  .has-dropright .drop-right.show {
    display: block; /* Show only when toggled */
  }

  .buttons {
    margin-top: 10px; /* Space if wrapped */
  }

  .login-btn {
    padding: 10px 20px; /* Slightly smaller button */
    font-size: 16px; /* Smaller text */
  }
}

/* Mobile Responsiveness (below 768px, optional) */
@media (max-width: 767px) {
  .navbar {
    padding: 10px 5px;
    flex-direction: column;
    align-items: flex-start;
    top: 40px;
  }

  .navbar img {
    max-height: 60px;
    
  }

  .nav-links {
    flex-direction: column;
    width: 100%;
    gap: 5px;
  }

  .nav-links li {
    width: 100%;
  }

  .nav-links a {
    padding: 10px;
    font-size: 16px;
  }

  .dropdown-menu,
  .drop-right {
    position: static;
    width: 100%;
    box-shadow: none;
  }

  .buttons {
    flex-direction: column;
    width: 100%;
    gap: 5px;
  }

  .login-btn {
    width: 100%;
    margin-left: 0;
  }
}
        
</style>
<body>
    
        <div  class="top-bar">
           
           <span id="logos">PPIU Logos</span> | 
           <span id="future-students">Future Students</span> | 
           <span id="commencement">Commencement</span> | 
           <span id="student-life">Student Life</span> | 
           <span id="centers">Centers</span> | 
           
           
           <div class="search-bar">
                <input type="text" placeholder="Search names...">
                <button >Search</button>
            </div>
           
           <div  class="language-toggle">
               <button onclick="toggleLanguage('kh')">KH</button>
               <button onclick="toggleLanguage('en')">EN</button>
           </div>
           
           <a href="../php/register.php"><button id="register" class="login-btn">  
               <i class="fas fa-sign-in-alt"></i>register</button></a>
           <!-- <p id="text">
               <span id="en">Hello, welcome to our website!</span>
               <span id="kh" style="display: none;">សួស្តី, ស្វាគមន៍មកកាន់គេហទំព័ររបស់យើង!</span>
           </p> -->

       </div>
       <nav style="height: 132px;  margin-top: 10px ; position: fixed; justify-content: space-evenly;   "  class="navbar">
           <img src="../img/download (22).png " alt="">
           <ul class="nav-links">
               <li><a  href="index.php" class="nav-link active"><i class="fas fa-home"></i> </a></li>
               

             <li style="margin-top: 3px;" class="dropdown">
            <a id="about-us" data-bs-toggle="collapse" href="#">
                About Us <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a id="History" href="history.php"><i class="fas fa-history"></i> History</a></li>
                <li class="divider"></li>
                <li><a id="License" href="PPIU_License_and_Accreditation.php"><i class="fas fa-certificate"></i> PPIU License and Accreditation</a></li>
                <li class="divider"></li>
                <li><a href="Vision_Mission_and_Values.php" id="vision-mission-values"><i class="fas fa-eye"></i> Vision, Mission, and Values</a></li>
                <li class="divider"></li>
                <li><a href="Career_Opportunities.php" id="career-opportunities-link"><i class="fas fa-briefcase"></i> Career Opportunities</a></li>
                <li class="divider"></li>
                <li><a href="Alumni.php" id="alumni"><i class="fas fa-users"></i> ALUMNI</a></li>
            </ul>
        </li>
                   
                <li style="margin-top: 3px;" class="dropdown">
                       <a id="Academic" data-bs-toggle="collapse" href="#">
                           Academics <i class="fas fa-chevron-down"></i>
                       </a>
                     
                    <ul class="dropdown-menu">
                            <li class="has-dropright">
                            <a href="degree.php" id="degree"><i class="fas fa-graduation-cap"></i> DEGREE</a>
                                <ul class="drop-right">
                                <li><a href="professional.php" id="professional"><i class="fas fa-chalkboard-teacher"></i>  PROFESSIONAL/ SHORT COURSE</a></li>
                                <li class="divider"></li>
                                <li><a href="associate.php" id="associate"><i class="fas fa-user-graduate"></i> ASSOCIATE</a></li>
                                <li class="divider"></li>
                                <li><a href="master_degree.php" id="masters-degree"><i class="fas fa-university"></i> MASTER'S DEGREE</a></li>
                                <li class="divider"></li>
                                <a href="bachelor.php" id="bachelor"><i class="fas fa-user-graduate"></i> BACHELOR</a>
                                <li class="divider"></li>
                                <li><a href="doctoral.php" id="doctoral"><i class="fas fa-award"></i> DOCTORAL</a></li>
                                </ul>
                                
                            </li>
                           <li class="divider"></li>
                           
                            <li class="has-dropright">
                            <a href="faculty.php" id="faculties"><i class="fas fa-building"></i> FACULTIES</a>
                                    
                                    <ul class="drop-right">
                                    <li><a href="cse.php" id="faculty-science-it"><i class="fas fa-flask"></i> FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY</a></li>
                                        <li class="divider"></li>
                                        <a href="Business.php" id="faculty-business-tourismmo">
                                            <i class="fas fa-briefcase"></i> FACULTY OF BUSINESS AND TOURISM
                                        </a>
                                        <li class="divider"></li>
                                        <li> <a href="law.php" id="faculty-law-economicso">
                                            <i class="fas fa-balance-scale"></i> FACULTY OF LAW AND ECONOMICS
                                        </a></li>
                                        <li class="divider"></li>
                                        <li><a href="education.php" id="faculty-education"><i class="fas fa-book"></i> FACULTY OF EDUCATION SCIENCE</a></li>
                                        <li class="divider"></li>
                                        <!-- <li><a href="#" id="faculty-news-views"><i class="fas fa-newspaper"></i> FACULTY OF NEWS AND VIEWS</a></li> -->
                                    </ul>
                                    <li class="divider"></li>
                            </li>

                                    <li class="has-dropright">
                                    <li><a href="program.php" id="study-programs"><i class="fas fa-book"></i> STUDY PROGRAMS - PPIU</a></li>
                                    </li>
                        </ul>
                   </li>
                   

                   <li style="margin-top: 3px;" class="dropdown">
                   <a id="New" data-bs-toggle="collapse" href="#">New <i class="fas fa-chevron-down"></i></a>

                       <ul class="dropdown-menu">
                       <li><a href="Evens.php" id="events"><i class="fas fa-calendar-alt"></i> EVENTS</a></li>
                       <li class="divider"></li>
                        <li><a href="news_page1.php" id="news"><i class="fas fa-newspaper"></i> News</a></li>
                        <li class="divider"></li>
                        <li><a href="scholarship.php" id="scholarship"><i class="fas fa-graduation-cap"></i> 
                        SCHOLARSHIP</a></li>
                        <li class="divider"></li>
                        <li><a href="job.php" id="job-announcements"><i class="fas fa-briefcase"></i> Job Announcements</a></li>
                        <li class="divider"></li>
                        <li><a href="loan.php" id="student-loan"><i class="fas fa-hand-holding-usd"></i> Student Loan</a></li>
                       </ul>
                   </li>
                   

                   <li style="margin-top: 3px;" class="dropdown">
                   <a id="Library" data-bs-toggle="collapse" href="#">LIBRARY <i class="fas fa-chevron-down"></i></a>
                       <ul class="dropdown-menu">
                       <li><a href="reading_club.php" id="reading-club"><i class="fas fa-book-reader"></i> PPIU Reading Club</a></li>
                       <li class="divider"></li>
                       <li><a href="music_club.php"><i class="fas fa-music"></i> <span id="music-club">Music Club</span></a></li>
                       <li class="divider"></li>
                        <li><a href="Library.php" id="library-materials"><i class="fas fa-book"></i> LIBRARY MATERIALS</a></li>
                        <li class="divider"></li>
                        <li><a href="about_library.php" id="about-library"><i class="fas fa-info-circle"></i> ABOUT LIBRARY</a></li>
                       </ul>
                   </li>    
                   
                   <li style="margin-top: 3px;" class="dropdown">
                   <a id="Admissions" data-bs-toggle="collapse" href="#">
                Admissions <i class="fas fa-chevron-down"></i>
                    </a>
                       <ul class="dropdown-menu">
                       <li><a href="admition_AA.php" id="admission-associate"><i class="fas fa-user-graduate"></i> ASSOCIATE</a></li>
                        <li class="divider"></li>
                        <li><a href="admition_master.php" id="admission-master"><i class="fas fa-user-tie"></i> MASTER</a></li>
                        <li class="divider"></li>
                        <li><a href="admition_BA.php" id="admission-bachelor"><i class="fas fa-user"></i> BACHELOR</a></li>
                        <li class="divider"></li>
                        <li><a href="admition_doctor.php" id="admission-doctoral"><i class="fas fa-graduation-cap"></i> DOCTORAL</a></li>
                       </ul>
                   </li>
                   <li><a style="margin-top: 3px;" href="contact.php" id="contact">Contact</a></li>
                   
               </ul>
           
<!--            
           <div class="buttons">
               <a href="#">Book a Tour</a>
               <a href="#">Apply ▼</a>
           </div> -->
       </nav>
       
    
</body>
</html>