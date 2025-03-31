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
                    <a href="pages1.php"><img style="height: 280px; width: 150px;"  src="../img/1717205377.jpg" alt="Announcement"></a>
                   <h5 class="text"> Curriculum And Revision Rate</h5>
                    <p class=" pp">Post Date : 01-Jun-2024</p>
                </div>
            </div>
            <div  class="col-md-4">
                <div class="post-card">
                    <a href="pages2.php"><img style=" width:80%; height: 290px;"  src="../img/Visaka_Bochea.png" alt="Graduation"></a>
                    <h5 class="text2" >Visaka Bochea</h5>
                    <p class="pp2" >Post Date : 21-May-2024</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                   <a href="pages3.php"><img style="height: 275px; width: 70%; margin-left:15px" src="../img/1714209728.jpg" alt="University"></a>
                    <h5 class="text3" >គម្រោងព្រែកជីកហ្វូណនតេជោ....</h5>
                    <p class="pp3" >Post Date : 27-Apr-2024</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="post-card">
                  <a href="pages4.php">  <img style="height: 275px; width: 70%; margin-left:15px" src="../img/20240314 UNICATION Web Dev Info_2.jpg" alt="Training"></a>
                    <h5 class="text4">Call for Website Construction: UNICATION Project</h5>
                    <p class=" pp4">Post Date : 18-Mar-2024</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages5.php"><img src="../img/1704159899.jpg" alt="Congratulation"></a>
                    <h5  class="text5">All Telegram Channel Of PPIU S...</h5>
                    <p class=" pp5" >Post Date : 02-Jan-2024</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages6.php"><img style="height: 245px; width: 70%; margin-left:15px" src="../img/Scholarship_recipients_at_Phnom_Penh_International_University__PPIU__selected_by_the_.jpg" alt="Event"></a>
                    <h5  class="text6">Scholarship recipients at Phno...</h5>
                    <p class=" pp6">Post Date : 04-Dec-2023</p>
                </div>
            </div>
        </div>
        <div style="margin-top: 20px;" class="row">
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages7.php"><img style="margin-left: 20px; height: 270px; width: 70%;" src="../img/1701482145.jpg" alt="MOU"></a>
                    <h5 class="text7">For the new school year (2023-...</h5>
                    <p class=" pp7">Post Date : 02-Dec-2023</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages8.php"><img style="margin-left: 20px; height: 270px; width: 80%;" src="../img/Copy_of_Black_And_Orange_Modern_Corporate_Business_Webinar_Poster.png" alt="DIES-NMT"></a>
                    <h5  class="text8">Job Announcement...</h5>
                    <p class="pp8">Post Date : 17-Oct-2023</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post-card">
                    <a href="pages9.php"><img style="margin-left: 20px; height: 270px; width: 80%;" src="../img/Announcement__.jpg" alt="Culture"></a>
                    <h5 class="text8">Announcement !...</h5>
                    <p class="pp9">Post Date : 20-Jul-2023</p>
                </div>
            </div>
            <nav>
            <ul class="pagination float-end ">
                <li class="page-item disabled"><a class="page-link" href="news_page1.php"> <i class="fas fa-angle-left"></i>Previous</a></li>
                <li class="page-item active"><a class="page-link" href="news_page1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="news_page2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="news_page3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="news_page4.php">4</a></li>
                <li class="page-item"><a class="page-link" href="news_page5.php">5</a></li>
                <li class="page-item"><a class="page-link" href="news_page6.php">6</a></li>
                <li class="page-item"><a class="page-link" href="news_page7.php">7</a></li>
               
                <li class="page-item"><a class="page-link" href="news_page2.php">Next  <i class="fas fa-angle-right"></i></a></li>
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
