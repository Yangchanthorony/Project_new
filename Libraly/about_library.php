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
    <div class="headerr" id="library-header">Library</div>
</div>
<div class="container-fluid">
    <div class="section">
        <h2 id="collection-title">Collection</h2>
        <p class="highlight" id="collection-books">Books:</p>
        <ul>
            <li id="book-curriculum">Curriculum books</li>
            <li id="book-general">General subject</li>
            <li id="book-reference">General reference (Dictionary, encyclopedia, atlas, etc.)</li>
            <li id="book-fiction">Fiction (Fairy tales, novels, etc.)</li>
            <li id="book-nonfiction">Non-fiction (Memoirs, biography, guides, manuals, etc.)</li>
        </ul>
    </div>

    <div class="section">
        <p class="highlight" id="resources-title">Newspapers & Resources:</p>
        <ul>
            <li id="resource-magazines">Magazines</li>
            <li id="resource-projects">Assignments & Projects of Students</li>
            <li id="resource-journals">Scholarly Journals</li>
            <li id="resource-eresources">E-resources</li>
        </ul>
        <p id="collection-volume"><strong>The existing library collection contains over <span class="highlight">13,000 volumes</span> in print.</strong></p>
    </div>

    <div class="section">
        <h2 id="organization-title">Organization & Classification</h2>
        <ul>
            <li id="org-ddc"><strong>Dewey Decimal Classification (DDC)</strong> – for general subject books</li>
            <li id="org-ppiu"><strong>PPIU Library Code</strong> – for curriculum books</li>
        </ul>
        <section class="library-info">
            <h2 id="hours-title">Library Hours</h2>
            <p id="hours-mon-sat"><strong>Monday – Saturday:</strong> 8:00 AM – 7:30 PM</p>
            <p id="hours-sun"><strong>Sunday:</strong> 10:00 AM – 4:00 PM</p>
        </section>
    </div>
</div>

</body>
<?php 
include("../components/footer.php");
?>
</html>
