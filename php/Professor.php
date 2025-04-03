<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../components/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Time Faculty</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            padding: 40px 0;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: left;
            margin-bottom: 20px;
            border-bottom: 2px solid #a52a2a; /* Maroon underline */
            padding-bottom: 10px;
            margin-top: 50px;
        }
        .faculty-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .faculty-card:hover {
            transform: translateY(-5px);
        }
        .faculty-card img {
            width: 100%;
            height: 370px;
            object-fit: cover;
            border-bottom: 2px solid #a52a2a;
        }
        .faculty-card .card-body {
            padding: 20px;
            text-align: center;
        }
        .faculty-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #a52a2a; /* Maroon color for names */
            margin-bottom: 5px;
        }
        .faculty-qualifications {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 10px;
        }
        .faculty-title {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .faculty-courses {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
        }
              /* Header Section */
 .header {
      
      color: white;
      margin-top: 150px;
      margin-left: 185px;
      font-size: 40px;
      font-weight: bold;
  }
    
  /* Background Pattern */
  .header-pattern {
      background: rgb(164, 7, 7);
      padding: 40px;
      position: relative;
  }
  
  .header-pattern::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 30%;
      height: 100%;
      background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); /* Example Pattern */
      opacity: 100;
  }
    </style>
</head>
<body>
          <!-- Header Section -->
          <div class="header-pattern">
            <div class="header" id="license-header">IT Department</div>
        </div>

    <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">PROFESSOR</h2>

        <!-- Faculty Row -->
        <div class="row">
            <!-- Faculty Member 1 -->
            <div class="col-md-4">
                <a style="list-style: none; text-decoration: none;" href="Tansareyvuth.php">
                <div class="card faculty-card">
                    <img src="../img/photo_2019-08-05_07-42-29.jpg" alt="Tansareyvuth">
                    <div class="card-body">
                        <h5 class="faculty-name">Tansareyvuth</h5>
                   
                        <p class="faculty-title">Professor</p>
                        <p>Cambodian</p>
                        <p class="faculty-qualifications">
                            건국대학교 / Konkuk University <br>
                            Master of Science, in Computer and Information Communication Engineering</p>
                                                
                    </div>
                </div>
                </a>
            </div>

            <!-- Faculty Member 2 -->
            <div class="col-md-4">
               <a style="list-style: none; text-decoration: none;" href="HemTola.php">
               <div class="card faculty-card">
                    <img src="../img/1672793011754.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Hem Tola</h5>
                    
                        <p class="faculty-title">Professor</p>

                        <p>Cambodian</p>
                        <p class="faculty-qualifications">
                        University of Cambodia<br>
                        Cambodian Mekong University<br>
                        Norton University</p>
                
                    </div>
                </div>
               </a>
            </div>

            <!-- Faculty Member 3 -->
            <div class="col-md-4">
            <a style="list-style: none; text-decoration: none;" href="Hin Samart.php">
                <div class="card faculty-card">
                    <img src="../img/3 (1).jpg" alt="Juliet Cadungog Uy">
                    <div class="card-body">
                        <h5 class="faculty-name">Hin SamArt</h5>
                        <p class="faculty-qualifications">PhD</p>
                        <p class="faculty-title">Professor</p>
                        <p>Cambodian</p>
                        <p class="faculty-qualifications">
                        Asian Institute of Technology, Thailand (December 1996)<br>
                        </p>
                    </div>
                </div>
                </a>
            </div>

               <!-- Faculty Member 2 -->
               <div class="col-md-4">
               <a style="list-style: none; text-decoration: none;" href="Sithy Cheam.php">
                <div class="card faculty-card">
                    <img src="../img/1574672309259.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Sithy Cheam</h5>
                        <p class="faculty-title">Professor</p>
                        <p>Cambodian</p>
                        <p class="faculty-qualifications">
                        Southeast Asia Union College, Singapore<br>
                        Walla Walla College, Washington, USA<br>
                         Several of certificates from Microsoft Virtual Academy (MVA) Free Training Center</p>
                    </div>
                </div>
                </a>
            </div>

            <!-- Faculty Member 3 -->
            <div class="col-md-4">
            <a style="list-style: none; text-decoration: none;" href="Chhay Buntha.php">
                <div class="card faculty-card">
                    <img src="../img/unnamed (1).jpg" alt="Juliet Cadungog Uy">
                    <div class="card-body">
                        <h5 class="faculty-name">Chhay Buntha</h5>
                        <p class="faculty-title">Professor</p>
                        <p>Cambodian</p>
                        <p class="faculty-qualifications">
                        Institute of Technology Delhi(IITD), India. <br>
                        Bachelor degree at BBU in Network Technology. Phnom Penh, Cambodia.<br></p>
                    </div>
                </div>
            </div>  
            </a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php 
include("../components/footer.php");
?>
</html>