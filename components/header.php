<!DOCTYPE html>
<html lang="en">
    <?php 
    include("../js/index.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
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
            justify-content: space-between;
            background-color: white;
            padding: 18px 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 55px; /* Adjust this based on .top-bar height */
            left: 0;
            z-index: 999;
        }
        
        
        .navbar img{
            object-fit: cover;
           
            background-size: cover;
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
            color: wheat; /* Change the icon color when the link is active */
            font-size: 25px;
        }
        
        .nav-links a {
            text-decoration: none;
            padding: 10px;
            display: block;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: black;
            
        }
        .nav-links a:hover {
            color: #fff;  /* White text color on hover */
            background-color: red;  /* Blue background on hover */
        }


        .dropdown-menu {
            list-style: none;
            padding: 0;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            display: none;
            min-width: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu li {
            width: 100%;
            
        }

        .dropdown-menu a {
            padding: 10px;
            display: block;
            white-space: nowrap;
        }

        /* Show dropdown on hover */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu .divider {
            border-bottom: 1px solid #ddd; /* Thin gray line */
           
        }
        
        .fa-chevron-down{
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
        
        .mid {
            display: flex;
            flex-direction: column;
            
        }
       
         /* login button */
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

        .login-btn i, .login-btn svg {
            font-size: 18px;
            vertical-align: middle;
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
               <input type="text" placeholder="Search...">
               <button>Search</button>
           </div>
           
           <div  class="language-toggle">
               <button onclick="toggleLanguage('kh')">KH</button>
               <button onclick="toggleLanguage('en')">EN</button>
           </div>
           
           <a href="login.php"><button id="login" class="login-btn">  
               <i class="fas fa-sign-in-alt"></i>Login</button></a>
           <!-- <p id="text">
               <span id="en">Hello, welcome to our website!</span>
               <span id="kh" style="display: none;">សួស្តី, ស្វាគមន៍មកកាន់គេហទំព័ររបស់យើង!</span>
           </p> -->

       </div>
       <nav style="height: 132px;  margin-top: 10px ; position: fixed;"  class="navbar">
           <img src="data:image/png;base64,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 " alt="">
           <ul class="nav-links">
               <li><a  href="index.php" class="nav-link active"><i class="fas fa-home"></i> </a></li>

               <li style="margin-top: 3px;" class="dropdown">
                   <a id="about-us" data-bs-toggle="collapse" href="#">
                       About Us <i class="fas fa-chevron-down"></i>
                   </a>
                   <ul class="dropdown-menu">
                       <li><a id="Mission" href="history.php"><i class="fas fa-history"></i> History</a></li>
                       <li class="divider"></li>
                       <li><a href="PPIU_License_and_Accreditation.php"><i class="fas fa-certificate"></i> PPIU License and Accreditation</a></li>
                       <li class="divider"></li>
                       <li><a href="Vision_Mission_and_Values.php"><i class="fas fa-eye"></i> Vision, Mission, and Values</a></li>
                       <li class="divider"></li>
                       <li><a href="Career_Opportunities.php"><i class="fas fa-briefcase"></i> Career Opportunities</a></li>
                       <li class="divider"></li>
                       <li><a href="Alumni.php"><i class="fas fa-users"></i> ALUMNI</a></li>
                   </ul>
               </li>
               
                   
                   <li style="margin-top: 3px;" class="dropdown">
                       <a id="Academic" data-bs-toggle="collapse" href="#">
                           Academics <i class="fas fa-chevron-down"></i>
                       </a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fas fa-school"></i> Schools, Programs, and FACULTIES</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-graduation-cap"></i> Degree</a></li>
                       </ul>
                   </li>
                   

                   <li style="margin-top: 3px;" class="dropdown">
                       <a id="New" data-bs-toggle="collapse" href="#">
                           New <i class="fas fa-chevron-down"></i>
                       </a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fas fa-calendar-alt"></i> EVENTS</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-graduation-cap"></i> SCHOLARSHIP</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-briefcase"></i> Job Announcements</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-hand-holding-usd"></i> Student Loan</a></li>
                       </ul>
                   </li>
                   

                   <li style="margin-top: 3px;" class="dropdown">
                       <a id="Library" data-bs-toggle="collapse" href="#">
                           LIBRARY <i class="fas fa-chevron-down"></i>
                       </a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fas fa-book-reader"></i> PPIU Reading Club</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-book"></i> LIBRARY MATERIALS</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-info-circle"></i> ABOUT LIBRARY</a></li>
                       </ul>
                   </li>    
                   
                   <li style="margin-top: 3px;" class="dropdown">
                       <a id="Academic" data-bs-toggle="collapse" href="#">
                           Admissions <i class="fas fa-chevron-down"></i>
                       </a>
                       <ul class="dropdown-menu">
                           <li><a href="#"><i class="fas fa-user-graduate"></i> ASSOCIATE</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-user-tie"></i> MASTER</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-user"></i> BACHELOR</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><i class="fas fa-graduation-cap"></i> DOCTORAL</a></li>
                       </ul>
                   </li>
                   <li><a  style="margin-top: 3px;" href="#">Contact</a></li>
                   
               </ul>
           
           
           <div class="buttons">
               <a href="#">Book a Tour</a>
               <a href="#">Apply ▼</a>
           </div>
       </nav>
       
    
</body>
</html>