<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../components/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css//events_page2.css">
</head>
<body>
<div class="header-pattern">
        <div class="header">
        Events
        </div>
    </div>
    <div class="container mt-4">
        <div style="margin-top: 20px;" class="row">
            <div class="col-md-4">
                <div class="post-card pp">
                    <a href="backing10.php"><img style="margin-left: 20px; height: 270px; width: 80%;" src="https://www.ppiu.edu.kh/public/images/article/3107184034.jpg" alt="Announcement"></a>
                   <h5 class="text"> GRADUATION CEREMONYGRADUATION ...</h5>
                    <p class=" pp">Post Date : 30-Nov-2019</p>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="post-card">
                    <a href="backing11.php"><img style="margin-left: 20px; height: 270px; width: 80%;"  src="https://www.ppiu.edu.kh/public/images/article/9188304126.jpg" alt="Graduation"></a>
                    <h5 class="text2" >Blood Donation at Phnom Penh I...</h5>
                    <p class="pp2" >Post Date : 12-Jul-2018</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                   <a href="backing12.php"> <img style="margin-left: 20px; height: 270px; width: 80%;"  src="https://www.ppiu.edu.kh/public/images/article/9009895356.jpg" alt="University"></a>
                    <h5 class="text3" >Seminar on</h5>
                    <p class="pp3" >Post Date : 08-Feb-2021</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="post-card">
                  <a href="backing13.php">  <img src="https://www.ppiu.edu.kh/public/images/article/1494986020.jpg" alt="Training"></a>
                    <h5 class="text4">Graduated Ceremony</h5>
                    <p class=" pp4">Post Date : 17-May-2017</p>
                </div>
            </div>

        
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item "><a class="page-link" href="Evens.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item  "><a class="page-link" href="Evens.php">1</a></li>
                <li class="page-item active"><a class="page-link" href="Evens_page2.php">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="Evens_page2.php">Next  <i class="fas fa-angle-right"></i></a></li>
            </ul>
        </nav>
        
        </div>
        
    </div>
    

    <?php 
    include("../components/footer.php");
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
