<?php 
include("../components/header.php");
include("../js/index.php");

// include("function.php");


// $id = $_GET['id'];
// $sql = "SELECT * FROM `events` WHERE id = '$id'";
// $res = $con->query($sql);

// $row =mysqli_fetch_assoc($res);

// $title = $row['title'];
// $banner = $row['banner'];
// $word = $row['word'];
// $small = $row['small'];
// $date = $row['date'];
// $time = $row['time'];
// $location = $row['location'];
// $desc = $row['description'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AUPP Alumni Engagement Day</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/Evens3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container text-center mt-5">
<h3 style="margin-top: 220px;" class="event-title" id="event-titleq">The management of (PPIU) share experiences...</h3>
        
        <!-- Event Image -->
        <div class="event-image">
            <img src="../img/487203215_1085235110311885_8707928451971242358_n.jpg" class="img-fluid" alt="Alumni Engagement Event">
        </div>

        <!-- Event Information -->
        <div class="event-info mt-4">
            <h5 class="text-danger fw-bold" id="event-info-titleq">Event Information:</h5>
            <p id="event-info-desc1q">The management of the scholarships and shared the opportunity to you.</p>
            <p id="event-dateq">📅 Date: 21 February 2025</p>
            <p id="event-timeq">⏰ Time: 2:00 PM - 5:00 PM</p>
            <p id="event-locationq">📍 Location: Bun Rany Hun Sen High School</p>
            <p id="event-info-desc2q">The Phnom Penh International University (PPIU) management shares experiences at Bun Rany Hun Sen High School, highlighting scholarship opportunities for students. Wishing you success in the upcoming high school passage exams. 🙏🙏🙏</p>
        </div>

    <!-- Social Media Share Buttons -->
    <div class="social-share mt-4">
        <p class="fw-bold" id="share-event-titleo">Share this Event</p>
       <a href="https://web.facebook.com/ppiu.edu.kh.ppiucam"> <button class="btn btn-primary"><i class="fab fa-facebook-f"></i></button></a>
        <a href="https://x.com/ppiuoffical"><button class="btn btn-dark"><i class="fab fa-x-twitter"></i></button></a>
        <a href="https://www.linkedin.com/company/phnompenh-international-university/"><button class="btn btn-info text-white"><i class="fab fa-linkedin-in"></i></button></a>
        <a  href="https://www.youtube.com/channel/UCtQK_K719j7z3urWlNyeQjA?view_as=subscriber"><button class="btn btn-danger"><i class="fab fa-youtube"></i></button></a>
    </div>
</div>
<?php 
include("../components/footer.php");
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>

</html>
