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
        NEWS
        </div>
    </div>
    <div class="container mt-4">
        <div style="margin-top: 20px;" class="row">
            <div class="col-md-4">
                <div class="post-card pp">
                    <a href="pages55.php"><img style="height: 280px; width: 250px;"  src="../img/_____________________________________________________________________________________________________________MOU______________PPIU___________AIT.jpg" alt="Announcement"></a>
                   <h5 class="text"> ពិធីចុះហត្ថលេខាលើអនុស្សរណៈ...</h5>
                    <p class=" pp"> Post Date : 22-May-2017</p>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="post-card">
                    <a href="pages56.php"><img style=" width:80%; height: 290px;"  src="../img/PPIU___BSRU_ASEAN_Youth_Camp_2017.jpg" alt="Graduation"></a>
                    <h5 class="text2" >PPIU & BSRU-ASEAN Youth Camp 2...</h5>
                    <p class="pp2" >Post Date : 26-May-2017</p>
                </div>
            </div>
            
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item"><a class="page-link" href="news_page6.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item "><a class="page-link" href="news_page1.php">1</a></li>
                <li class="page-item "><a class="page-link" href="news_page2.php">2</a></li>
                <li class="page-item "><a class="page-link" href="news_page3.php">3</a></li>
                <li class="page-item "><a class="page-link" href="news_page4.php">4</a></li>
                <li class="page-item "><a class="page-link" href="news_page5.php">5</a></li>
                <li class="page-item "><a class="page-link" href="news_page6.php">6</a></li>
                <li class="page-item active"><a class="page-link" href="news_page7.php">7</a></li>
               
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
