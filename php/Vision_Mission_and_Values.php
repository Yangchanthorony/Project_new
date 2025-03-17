<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../components/header.php");
    
    include("../js/index.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision, Mission, and Values</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/Vision_Mission_and_Values.css">
</head>
<body>
   
  <!-- Header Section -->
<div class="header-pattern">
    <div class="header" id="vision-mission-header">Vision, Mission, and Values</div>
</div>

<!-- Content Section -->
<div class="container">
    <section class="text-section">
        <h4 style="margin-top: 30px;" class="section-title" id="vision-title">Vision</h4>
        <p class="section-text" id="vision-text">
            American University of Phnom Penh (PPIU) will be a leading center of academic excellence in Cambodia and in Asia.
            Recognized as thought leaders, we will be at the forefront of innovation and the partner of choice for industry.
        </p>
    </section>

    <section class="text-section">
        <h4 class="section-title" id="mission-title">Mission</h4>
        <p class="section-text" id="mission-text">
            PPIU is a private English language higher-education institution in Cambodia, offering high-quality American-style education 
            that is grounded in the latest teaching & learning theories and the culture of Cambodia and Asia. 
            The university fosters socially responsible behavior, lifelong learning, and academic and professional excellence, 
            producing critical thinkers, innovators, and ethical leaders who will make significant contributions to the world.
        </p>
    </section>

    <section class="text-section">
        <h4 class="section-title" id="values-title">Values</h4>
        <p class="section-text" id="values-text">To achieve its vision and fulfill its mission, PPIU values the following:</p>
        <ul class="list-unstyled">
            <li id="value-1"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Academic Freedom</strong> - PPIU upholds the spirit of free and critical thought...</li>
            <li id="value-2"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Continuous Improvement and Accountability</strong> - PPIU is committed to continuous...</li>
            <li id="value-3"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Diversity, Equity, and Cultural Heritage</strong> - PPIU recognizes the contributions...</li>
            <li id="value-4"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Excellence</strong> - PPIU is committed to the highest standards...</li>
            <li id="value-5"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Leadership and Integrity</strong> - PPIU upholds the highest professional and ethical standards...</li>
            <li id="value-6"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Lifelong Learning</strong> - PPIU instills the value of lifelong learning...</li>
            <li id="value-7"><i class="fa-solid fa-check-circle text-danger"></i> <strong>Social Responsibility</strong> - PPIU prepares students to be responsible citizens...</li>
        </ul>
    </section>
</div>
    <?php 
    include("../components/footer.php");
    ?>

    <!-- Bootstrap JS (for potential future enhancements) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   
</body>

</html>
