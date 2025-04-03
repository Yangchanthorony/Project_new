<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../components/header.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional/Short Course</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/bachelor.css"> -->
    <style>
        .faculty-card img {
            width: 100%;
            height: 300px;
    
        }
        .faculty-card {
            transition: transform 0.3s;
        }
        .faculty-card:hover {
            transform: scale(1.05);
        }
        

        .header {
      
      color: white;
      margin-top: 240px;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
  }
/* Background Pattern */
.header-pattern {
    background: rgb(164, 7, 7);
  padding: 1px;
    position: relative;
}

.header-pattern::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 30%;
    height: 100;
    background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); /* Example Pattern */
    opacity: 100;
}

    </style>
</head>
<body>
<div class="header-pattern">
    <div class="header" id="associate-header">BACHELOR </div>
</div>
    <div class="text-center py-3  text-black">
        <h2>BACHELOR PROGRAMS</h2>
    </div>
    
    <div style="margin-top: 20px;" class="container ">
        <div class="row">
            <!-- Faculty of Law and Economics -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card faculty-card">
                    <a href="law.php"><img src="../img/486609957_1082895393879190_4171540092522230944_n.jpg" class="card-img-top" alt="Law Faculty"></a>
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Law and Economics (FLF)</h5>
                        <ul>
                            <li>Finance-Banking (FNB)</li>
                            <li>Economics Development (ECO)</li>
                            <li>Public Relations (PR)</li>
                            <li>Law (LLB)</li>
                            <li>International Relations (IR)</li>
                        </ul>
                        <a href="law.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Faculty of Business and Tourism -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card faculty-card">
                   <a href="Business.php"> <img src="../img/484067267_1076685057833557_5697796366693492590_n.jpg" class="card-img-top" alt="Business Faculty"></a>
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Business and Tourism (FBT)</h5>
                        <ul>
                            <li>Accounting (ACC)</li>
                            <li>Management (MGT)</li>
                            <li>Marketing (MKT)</li>
                            <li>Hotel and Tourism Management (TOU)</li>
                            <li>Logistics Management (LGM)</li>
                        </ul>
                        <a href="Business.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Faculty of Education Science -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card faculty-card">
                   <a href="education.php"> <img src="../img/484788039_1076723261163070_3075397000407103142_n.jpg" class="card-img-top" alt="Education Faculty"></a>
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Education Science (FES)</h5>
                        <ul>
                            <li>English for Education (EDU)</li>
                            <li>English for Business (EBU)</li>
                        </ul>
                        <a href="education.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Faculty of Science and Information Technology -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card faculty-card">
                <a href="cse.php"><img src="../img/hqdefault.jpg" class="card-img-top" alt="Science Faculty"></a>
                    <div class="card-body">
                        <h5 class="card-title">Faculty of Science and Information Technology (FSIT)</h5>
                        <ul>
                            <li>Computer Science (CSE)</li>
                            <li>Management Information System (MIS)</li>
                            <li>Telecommunication Architecture (TEL)</li>
                        </ul>
                        <a href="cse.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
