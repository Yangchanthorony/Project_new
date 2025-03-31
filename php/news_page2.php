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
                    <a href="pages10.php"><img style="height: 280px; width: 250px;"  src="../img/1683099799.jpg" alt="Announcement"></a>
                   <h5 class="text"> Request for Quotations for ... </h5>
                    <p class=" pp">Post Date : 03-May-2023</p>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="post-card">
                    <a href="pages11.php"><img style=" width:80%; height: 290px;"  src="../img/1682503155.jpg" alt="Graduation"></a>
                    <h5 class="text2" >Announcement... </h5>
                    <p class="pp2" >Post Date : 26-Apr-2023</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                   <a href="pages12.php"><img style="height: 275px; width: 70%; margin-left:15px" src="../img/3339796302.png" alt="University"></a>
                    <h5 class="text3" >Announcement on the opening of...  </h5>
                    <p class="pp3" >Post Date : 10-Dec-2022</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="post-card">
                  <a href="pages13.php">  <img style="height: 275px; width: 70%; margin-left:15px" src="../img/1669085185.jpg" alt="Training"></a>
                    <h5 class="text4">Phnom Penh International Univ...</h5>
                    <p class=" pp4">Post Date : 22-Nov-2022</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages14.php"><img style="height: 275px; width: 70%; " src="../img/1665117591.jpg" alt="Congratulation"></a>
                    <h5   class="text5">Phnom Penh International Unive...</h5>
                    <p class=" pp5" >Post Date : 07-Oct-2022</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages15.php"><img style="height: 245px; width: 70%; margin-left:15px" src="../img/1639477827.jpg" alt="Event"></a>
                    <h5  class="text6">លិខិតជូនពរ... </h5>
                    <p class=" pp6">Post Date : 14-Dec-2021</p>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px;" class="row">
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages16.php"><img style="margin-left: 20px; height: 270px; width: 70%;" src="https://www.ppiu.edu.kh/public/images/article/______________________________________________________________________________________________________________________________________________________________________________.jpg" alt="MOU"></a>
                    <h5 class="text7">លោកស្រី ទេព កូលាប បន្តចូលរួមលើ...</h5>
                    <p class=" pp7">Post Date : 24-Apr-2021</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages17.php"><img style="margin-left: 20px; height: 270px; width: 80%;" src="https://www.ppiu.edu.kh/public/images/article/1613099622.png" alt="DIES-NMT"></a>
                    <h5  class="text8">inform all candidates who pass...</h5>
                    <p class="pp8">Post Date : 12-Feb-2021</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages18.php"><img style="margin-left: 20px; height: 270px; width: 80%;" src="https://www.ppiu.edu.kh/public/images/article/___________________________________________________________________________________________________________________________.PNG" alt="Culture"></a>
                    <h5 class="text8">លោកជំទាវទេព កូលាប បាននាំយកថវិក...</h5>
                    <p class="pp9">Post Date : 11-Aug-2020</p>
                </div>
            </div>
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item"><a class="page-link" href="news_page1.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item "><a class="page-link" href="news_page1.php">1</a></li>
                <li class="page-item active"><a class="page-link" href="news_page2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="news_page3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="news_page4.php">4</a></li>
                <li class="page-item"><a class="page-link" href="news_page5.php">5</a></li>
                <li class="page-item"><a class="page-link" href="news_page6.php">6</a></li>
                <li class="page-item"><a class="page-link" href="news_page7.php">7</a></li>
               
                <li class="page-item"><a class="page-link" href="news_page3.php">Next  <i class="fas fa-angle-right"></i></a></li>
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
