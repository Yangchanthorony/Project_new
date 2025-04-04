<!DOCTYPE html>
<?php 
include("../components/header.php");

include("../js/index.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History - AUPP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/degree.css">
</head>
<body>
  <!-- Header Section -->
<div class="header-pattern">
    <div class="header" id="degree-header">Degree</div>
</div>

<!-- Content Section -->
<div class="content-container">
    <h5 style="color: red; font-weight: bold;" id="study-levels-title">Study Levels:</h5>

    <p style="margin-left: 40px;" id="study-levels-intro">
        Currently, Phnom Penh International University (PPU) offers academic services to students of all levels according to the following study programs:
    </p>

    <p style="margin-left: 30px;" id="study-levels-short-term">- Short-term training programs</p>
    <p style="margin-left: 30px;" id="study-levels-associate">- Associate degree programs (Year 1 and Year 2)</p>
    <p style="margin-left: 30px;" id="study-levels-bachelor">- Bachelor's degree programs (Year 1, Year 2, Year 3, and Year 4)</p>
    <p style="margin-left: 30px;" id="study-levels-master">- Master's degree programs (Year 1 and Year 2)</p>
    <p style="margin-left: 30px;" id="study-levels-doctoral">- Doctoral degree programs</p>

    <p style="margin-left: 40px;" id="faculty-intro">
        Students can choose their preferred major from the following faculties:
    </p>

    <h5 style="margin-left: 30px; font-weight: bold; color: red;" id="faculty-business-title">- Faculty of Business and Tourism:</h5>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-business-accounting">~ Accounting</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-business-management">~ Management</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-business-marketing">~ Marketing</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-business-tourismm">~ Hotel and Tourism Management</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-business-logistics">~ Logistics Management</p>

    <h5 style="margin-left: 30px; font-weight: bold; color: red;" id="faculty-law-title">- Faculty of Law and Economics:</h5>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-law-finance">~ Finance and Banking</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-law-economicss">~ Economic Development</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-law-public-admin">~ Public Administration</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-law-law">~ Law</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-law-intl-relations">~ International Relations</p>

    <h5 style="margin-left: 30px; font-weight: bold; color: red;" id="faculty-science-title">- Faculty of Science and Information Technology:</h5>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-science-computer">~ Computer Science</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-science-info-systems">~ Information Systems Management</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-science-telecom">~ Telecommunications Engineering</p>

    <h5 style="margin-left: 30px; font-weight: bold; color: red;" id="faculty-education-title">- Faculty of Education:</h5>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-education-english-edu">~ English for Education</p>
    <p style="margin-left: 50px; font-weight: 500;" id="faculty-education-english-bus">~ English for Business</p>

    <p style="margin-left: 40px;" id="regulations-intro">
        Additionally, students must comply with the university’s academic regulations, including the following:
    </p>

    <p style="margin-left: 30px;" id="regulations-attendance">
        - Students are eligible to take semester exams only if they have attended at least 75% of the total class hours for each subject:
    </p>
    <p style="margin-left: 40px; font-weight: 500;" id="regulations-attendance-rule1">
        + Students who are absent (both excused and unexcused) 10 times or unexcused 8 times in a subject will automatically fail that subject.
    </p>
    <p style="margin-left: 50px; font-weight: 500;" id="regulations-attendance-rule1a">~ The On-going Class Assessment (OCA) score will be forfeited, equating to zero.</p>
    <p style="margin-left: 50px; font-weight: 500;" id="regulations-attendance-rule1b">~ Students will have an opportunity to retake the exam with a 100/100 score, but if they score above 80, it will be adjusted to 80.</p>

    <p style="margin-left: 40px; font-weight: 500;" id="regulations-suspension">
        + Students are allowed to suspend their studies up to two times for a Bachelor's degree (4-year program) and once for an Associate or Master's degree (2-year program). 
        Bachelor's degree students can only suspend their studies in Year 2 or Year 3, and each suspension must not exceed one academic year. 
        Students must submit a study suspension request to the Academic Office at least 15 days before the start of the semester. If the above conditions are not met:
    </p>
    <p style="margin-left: 50px; font-weight: 500;" id="regulations-suspension-rule1">~ The university will not issue diplomas, study confirmation letters, or transcripts, regardless of any tuition fees paid in the last semester attended.</p>
    <p style="margin-left: 50px; font-weight: 500;" id="regulations-suspension-rule2">~ The student will be removed from the university’s enrollment list.</p>

    <p style="margin-left: 30px;" id="study-duration-associate">- The maximum study duration for an Associate degree is 3 years.</p>
    <p style="margin-left: 30px;" id="study-duration-bachelor">- The maximum study duration for a Bachelor's degree is 6 years.</p>
    <p style="margin-left: 30px;" id="study-duration-master">- The maximum study duration for a Master's degree is 3 years.</p>
    <p style="margin-left: 30px;" id="study-duration-doctoral">- The maximum study duration for a Doctoral degree is 6 years (full-time).</p>
</div>

    <?php 
    include("../components/footer.php");
    ?>

    <!-- Bootstrap JS (for potential future enhancements) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   
</body>

</html>
