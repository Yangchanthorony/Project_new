<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("../components/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner View Filter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .partner-card { transition: all 0.3s ease; }
        .partner-card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .filter-btn { margin: 5px; }
        .hide { display: none; }
        .card-img-top { width: 400px; height: 250px; object-fit: cover; margin-left: 3px; }
        .card-title { color: red; }
        .card-title:hover { color: red; }
        .header { color: white; margin-top: 190px; margin-left: 185px; font-size: 40px; font-weight: bold; }
        .header-pattern { background: rgb(164, 7, 7); padding: 40px; position: relative; }
        .header-pattern::after {
            content: ""; position: absolute; top: 0; right: 0; width: 30%; height: 100%;
            background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); opacity: 1;
        }
        .filter-container { display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; }
        select { padding: 5px; font-size: 16px; }
    </style>
</head>
<body>
    <div class="header-pattern">
        <div class="header" >PPIU Community</div>
    </div>

    <div class="container py-5">
        
        <!-- Partner Cards -->
        <div class="row h-50 w-100">
        <div class="col-md-4 mb-4 partner-card">
                <div class="card h-100">
                <a href="../img/491313935_1099799752188754_2003480241284711046_n.jpg">
                <img src="../img/491313935_1099799752188754_2003480241284711046_n.jpg" class="card-img-top fixed-img-height" alt="TechCorp" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/487693218_1089227853245944_6407260302013391399_n.jpg">
                <img src="../img/487693218_1089227853245944_6407260302013391399_n.jpg" class="card-img-top fixed-img-height" alt="Company 2" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/487823170_1089913236510739_3251080910656688319_n.jpg">
                <img src="../img/487823170_1089913236510739_3251080910656688319_n.jpg" class="card-img-top fixed-img-height" alt="Company 3" loading="lazy">
                </a>
            </div>
            </div>
        </div>

        <div class="row h-50 w-100">
            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/487824700_1089240866577976_4681677343694878140_n.jpg">
                <img src="../img/487824700_1089240866577976_4681677343694878140_n.jpg" class="card-img-top fixed-img-height" alt="Company 4" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/487413373_1089910073177722_933689245482237668_n.jpg">
                <img src="../img/487413373_1089910073177722_933689245482237668_n.jpg" class="card-img-top fixed-img-height" alt="Company 5" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/488054140_1089327259902670_6427290310901869849_n.jpg">
                <img src="../img/488054140_1089327259902670_6427290310901869849_n.jpg" class="card-img-top fixed-img-height" alt="Company 6" loading="lazy">
                </a>
            </div>
            </div>
        </div>


        <div class="row h-50 w-100">
            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/486604926_1083395753829154_7578014988736842865_n.jpg">
                <img src="../img/486604926_1083395753829154_7578014988736842865_n.jpg" class="card-img-top fixed-img-height" alt="Company 4" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/486516090_1083157510519645_4221678788777025983_n.jpg">
                <img src="../img/486516090_1083157510519645_4221678788777025983_n.jpg" class="card-img-top fixed-img-height" alt="Company 5" loading="lazy">
                </a>
            </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
            <div class="card h-100">
                <a href="../img/486705474_1083149677187095_37870977307567336_n.jpg">
                <img src="../img/486705474_1083149677187095_37870977307567336_n.jpg" class="card-img-top fixed-img-height" alt="Company 6" loading="lazy">
                </a>
            </div>
            </div>
        </div>
            <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
<?php 
include("../components/footer.php");
?>
</html>