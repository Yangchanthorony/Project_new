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
            height: 360px;
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
  .mid{
    color: white;
      margin-left: 185px;
      font-size: 40px;
      font-weight: bold;
  }
  .mid-pattern {
      background: rgb(164, 7, 7);
      padding: 40px;
      position: relative;
  }
  
  .mid::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 30%;
      height: 100%;
      background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); /* Example Pattern */
      opacity: 100;
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
            <div class="header" >Project Coordinator & Member</div>
        </div>

    <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">Project Coordinator</h2>

        <!-- Faculty Row -->
        <div class="row">
            <!-- Faculty Member 1 -->
            <div class="col-md-4">
              
                <div class="card faculty-card">
                    <img src="../img/4.jpg" alt="Tansareyvuth">
                    <div class="card-body">
                        <h5 class="faculty-name">Tep Kolap</h5>
                   
                        <p class="faculty-title">Project Manager</p>

                        <p class="faculty-qualifications">
                        Cambodia </p>
                        <p class="faculty-courses">tep.kolap@ppiu.edu.kh</p>                      
                    </div>
                </div>
            
            </div>

            <!-- Faculty Member 2 -->
            <div class="col-md-4">
                <div class="card faculty-card">
                    <img src="../img/4-3.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Ky Ravikun</h5>
                        <p class="faculty-title">Project Manager</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">ky.ravikun@ppiu.edu.kh</p>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
      <!-- Header Section -->
      <div class="mid-pattern">
            <div class="mid" >Dean</div>
        </div>
        <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">Members</h2>

        <!-- Faculty Row -->
        <div class="row">
            <!-- Faculty Member 1 -->
            <div class="col-md-4">
             
                <div class="card faculty-card">
                    <img src="../img/3 (1).jpg" alt="Tansareyvuth">
                    <div class="card-body">
                        <h5 class="faculty-name">Hin Sam Ath</h5>
                        <p class="faculty-title">Member</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">hin.samath@ppiu.edu.kh</p>
                    </div>
                </div>
               
            </div>

            <!-- Faculty Member 2 -->
            <div class="col-md-4">
                <div class="card faculty-card">
                    <img src="../img/chhin_kona.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Chhin Kona</h5>
                        <p class="faculty-title">Member</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">hin.samath@ppiu.edu.kh</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card faculty-card">
                    <img src="../img/1-1.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Hong Phearin</h5>
                        <p class="faculty-title">Member</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">hong.phearin@ppiu.edu.kh</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card faculty-card">
                    <img src="../img/acc-1.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Kong Kunthea</h5>
                        <p class="faculty-title">Member</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">kong.kunthea@ppiu.edu.kh</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card faculty-card">
                    <img src="../img/2-2.jpg" alt="Kenneth Paul Charman">
                    <div class="card-body">
                        <h5 class="faculty-name">Saram Veasna</h5>
                        <p class="faculty-title">Member</p>
                        <p class="faculty-qualifications">PPIU</p>
                        <p class="faculty-courses">saram.veasna@ppiu.edu.kh</p>
                    </div>
                </div>
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