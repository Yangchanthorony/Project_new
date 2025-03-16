<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
    include("../components/header.php");
   ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reading Club</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/reading.css">
</head>
<body>
<div class="header-pattern">
        <div class="headerr">
        Library
        </div>
    </div>
    <div class=" container-fluid">
    <div class="section">
            <h2> Collection</h2>
            <p class="highlight">Books:</p>
            <ul>
                <li> Curriculum books</li>
                <li> General subject</li>
                <li> General reference (Dictionary, encyclopedia, atlas, etc.)</li>
                <li> Fiction (Fairy tales, novels, etc.)</li>
                <li> Non-fiction (Memoirs, biography, guides, manuals, etc.)</li>
            </ul>
        </div>

        <div class="section">
            <p class="highlight"> Newspapers & Resources:</p>
            <ul>
                <li> Magazines</li>
                <li> Assignments & Projects of Students</li>
                <li> Scholarly Journals</li>
                <li> E-resources</li>
            </ul>
            <p><strong> The existing library collection contains over <span class="highlight">13,000 volumes</span> in print.</strong></p>
        </div>

        <div class="section">
            <h2> Organization & Classification</h2>
            <ul>
                <li><strong> Dewey Decimal Classification (DDC)</strong> – for general subject books</li>
                <li><strong> PPIU Library Code</strong> – for curriculum books</li>
            </ul>
            <section class="library-info">
                <h2>Library Hours</h2>
                <p><strong>Monday – Saturday:</strong> 8:00 AM – 7:30 PM</p>
                <p><strong>Sunday:</strong> 10:00 AM – 4:00 PM</p>

        </div>
   
    </div>

</body>
<?php 
include("../components/footer.php");
?>
</html>
