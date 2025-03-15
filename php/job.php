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
    <link rel="stylesheet" href="../css/news_page1.css">
</head>
<body>
<div class="header-pattern">
        <div class="header">
        Job Announcements
        </div>
    </div>
    <div class="container mt-4">
        <div style="margin-top: 20px;" class="row">
            <div class="col-md-4">
                <div class="post-card pp">
                    <a href="job_page1.php"><img style="height: 280px; width: 250px;"  src="https://www.ppiu.edu.kh/public/images/article/1619605956.jpg" alt="Announcement"></a>
                   <h5 class="text">Looking For Lecturer of Logist...</h5>
                    <p class=" pp">Post Date : 28-Apr-2021</p>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="post-card">
                    <a href="job_page2.php"><img style=" width:80%; height: 290px;"  src="https://www.ppiu.edu.kh/public/ckeditor/kcfinder/upload/images/Job%20Annoucement/TOR%20Front%20Office%20Manager%20Rev1.jpg" alt="Graduation"></a>
                    <h5 class="text2" >Front Office Manager...</h5>
                    <p class="pp2" > Post Date : 24-Apr-2021</p>
                </div>
            </div>
            
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item disabled"><a class="page-link" href="news_page6.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item "><a class="page-link" href="news_page1.php">1</a></li>
               
               
                <li class="page-item disabled"><a class="page-link" href="">Next  <i class="fas fa-angle-right"></i></a></li>
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
