<!DOCTYPE html>
<html lang="en">
    <?php 
    include("../components/header.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile - IV Veasna</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: "Khmer", sans-serif;
    font-weight: 400;
    font-style: normal;
        }
        
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
           
        }
        .profile-img {
            border-radius: 50%;
            width: 170px;
            height: 200px;
            object-fit: cover;
        }
        .section-title {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
        .list-group-item {
            border: none;
            padding: 10px 0;
        }
        h1.text-center {
    color: red; /* Deep blue for a professional tone */
    font-weight: 700;
    font-size: 2.5rem;
    margin-bottom: 2rem;
}

        /* Post Footer Styling */
        .post-footer {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0; /* Light gray border to separate from content */
            text-align: center;
        }
        .post-footer .btn {
            margin-right: 10px;
            transition: all 0.3s ease; /* Smooth hover effect */
        }
        .post-footer .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .post-footer .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .post-footer .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .post-footer .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }
        .post-footer p {
            color: #6c757d; /* Gray text for comment count */
            font-size: 14px;
            margin-bottom: 10px;
        }
        .post-footer .form-control {
            border-radius: 20px; /* Rounded input field */
            border: 1px solid #ced4da;
            padding: 8px 15px;
            font-size: 14px;
        }
        .post-footer .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Blue glow on focus */
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 style="margin-top: 200px;" class="text-center mb-4">PPIU Alumni Success Stories</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card shadow-lg">
                    <!-- Profile Image -->
                    <div class="text-center">
                        <img src="../img/481279560_122228173070200745_420989743270165767_n.jpg" alt="IV Veasna" class="profile-img">
                    </div>
                    <!-- Name and Introduction -->
                    <h2 class="text-center mt-3">អ៊ីវ វាសនា (IV Veasna)</h2>
                    <p class="text-center">អតីតនិស្សិត ទទួលជោគជ័យក្នុងការសិក្សា និងអាជីពការងារ</p>

                    <!-- Education -->
                    <h4 class="section-title">ការសិក្សា</h4>
                    <p>ខ្ញុំបាទបានបញ្ចប់ការសិក្សាជំនាញ <strong>Management</strong> ថ្នាក់បរិញ្ញាបត្រជាន់ខ្ពស់នៅ <strong>PPIU</strong>។ មូលហេតុដែលខ្ញុំជ្រើសយក PPIU ព្រោះ:</p>
                    <ul>
                        <li>កម្មវិធីសិក្សាល្អ</li>
                        <li>គ្រូមានវិន័យក្នុងការប្រលង</li>
                        <li>មានសេវាល្អ ដោះស្រាយការងារជូននិស្សិតដោយមិនទុកចោល</li>
                    </ul>

                    <!-- Success Factors -->
                    <h4 class="section-title">កត្តាជម្រុញឱ្យទទួលបានជោគជ័យ</h4>
                    <ul>
                        <li>ការប្រើប្រាស់សមត្ថភាពត្រូវប្រើឱ្យចំគោលដៅ និងកាលៈទេសៈ ហើយត្រូវដុះខាត់ជាប្រចាំ</li>
                        <li>រូបមន្តក្នុងអាជីវកម្ម: គិត វិភាគ សម្រេចចិត្ត អនុវត្ត តាមដាន ដោះស្រាយ និងអភិវឌ្ឍជានិច្ច</li>
                    </ul>

                    <!-- Career and Roles -->
                    <h4 class="section-title">អាជីពការងារ និងតួនាទី</h4>
                    <ul class="list-group">
                        <li class="list-group-item">1. MD & Co Founder: Bright Star Logistics Cambodia Co., Ltd.</li>
                        <li class="list-group-item">2. MD & Co Founder: S.V Logistics Cambodia Co., Ltd.</li>
                        <li class="list-group-item">3. Board of Director: Grand Tiger Logistics Cambodia Co., Ltd.</li>
                        <li class="list-group-item">4. CEO: Bright Star Advertising & Trade Co., Ltd.</li>
                        <li class="list-group-item">5. Board of Director, in charge of General Secretary: Cambodia Freight Forwarders Association</li>
                        <li class="list-group-item">6. Founder: Best Partner Alliance (Worldwide)</li>
                        <li class="list-group-item">7. Member: Cambodia Chamber of Commerce</li>
                        <li class="list-group-item">8. Member: Young Entrepreneurs Association of Cambodia (YEAC)</li>
                        <li class="list-group-item">9. Member: Cambodia-Japan Association for Business Investment (CJBI)</li>
                    </ul>

                    <!-- Gratitude -->
                    <h4 class="section-title">សេចក្តីថ្លែងអំណរគុណ</h4>
                    <p>ខ្ញុំសូមថ្លែងអំណរគុណជាអនេកប្បការដល់អ្នកមានគុណទាំងទ្វេរ ជាពិសេសថ្នាក់ដឹកនាំ សហការី និងសាស្ត្រាចារ្យនៃសាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ (PPIU) ដែលបានផ្តល់ភាពងាយស្រួល និងខិតខំផ្ទេរចំណេះដឹងដល់ខ្ញុំបាទ រហូតទទួលបានជោគជ័យនៅថ្ងៃនេះ។</p>
                </div>
                <div class="post-footer">
                    <button class="btn btn-primary btn-sm">Like</button>
                    <button class="btn btn-secondary btn-sm">Share</button>
                    <p class="mt-2">0 comments</p>
                    <input type="text" class="form-control" placeholder="Add a comment...">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php 
include("../components/footer.php");
?>
</html>