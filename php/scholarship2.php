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
        SCHOLARSHIP
        </div>
    </div>
    <div class="container mt-4">
        <div style="margin-top: 20px;" class="row">
        <div class="col-md-4">
                <div class="post-card pp">
                    <a href="ship_page10.php"><img style="height: 280px; width: 350px;"  src="../img/12020206272.jpg" alt="Announcement"></a>
                   <h5 class="text"> PPIU & SHARE Scholarship Progr...</h5>
                    <p class=" pp">Post Date : 08-Feb-2021</p>
                </div>
            </div>
            
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item "><a class="page-link" href="scholarship.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item "><a class="page-link" href="scholarship.php">1</a></li>
                <li class="page-item active "><a class="page-link" href="scholarship2.php">2</a></li>
                
               
                <li class="page-item disabled "><a class="page-link" href="">Next  <i class="fas fa-angle-right"></i></a></li>
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
