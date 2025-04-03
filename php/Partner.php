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
        .card-img-top { width: 200px; height: 250px; object-fit: contain; margin-left: 100px; }
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
        <div class="header" id="license-header">Partner</div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4">University of the Institute and the Partnership</h2>
        
        <!-- Filter Selection -->
        <div class="filter-container">
            <select id="countryFilter" class="form-select" style="width: 200px;">
                <option value="all">All Countries</option>
                <!-- Options will be populated dynamically -->
            </select>
            <select id="typeFilter" class="form-select" style="width: 200px;">
                <option value="all">All Types</option>
                <option value="university">University</option>
                <option value="bank">Bank</option>
                <option value="company">Company</option>
                <option value="Academic">Academic</option>
                <option value="Institute">Institute</option>
            </select>
        </div>

        <!-- Partner Cards -->
        <div class="row h-50 w-100" id="partnerGrid">
            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (1).jpg" class="card-img-top" alt="TechCorp">
                    <div class="card-body">
                        <h5 class="card-title">Institute of Technology of Cambodia</h5>
                        <p class="card-text">Leading technology solutions provider</p>
                        <p class="card-text"><small class="text-muted">Category: Technology</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (2).jpg" class="card-img-top" alt="TechCorp">
                    <div class="card-body">
                        <h5 class="card-title">Asian Institute of Technology (Thailand)</h5>
                        <p class="card-text">Leading technology solutions provider</p>
                        <p class="card-text"><small class="text-muted">Category: Technology</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (2).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Pajapruk University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (3).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">North Bangkok University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (4).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Srinakharinwirot University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (4).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">The Far Eastern University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (5).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Ubon Ratchathani University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (5).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Bansomdejchaopraya Rajabhat University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (6).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Rajamangala University of Technology Krungthep (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (7).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">University of the Thai Chamber of Commerce (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Myanmar" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (8).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Yangon University of Economics (Myanmar)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Malaysia" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (9).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">The National University of Malaysia (Malaysia)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Indonesia" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (6).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Bogor Agricultural University (Indonesia)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Vietnam" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (10).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">University of Social Sciences and Humanities - Hanoi (Vietnam)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Philippines" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (11).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Laguna State Polytechnic University (Philippines)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (12).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Panyapiwat Institute of Management (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Indonesia" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (13).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Mahasaraswati Denpasar University (Indonesia)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (7).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Bangkok Suvarnabhumi University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (8).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Suranaree University of Technology (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (9).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Southeast Bangkok College (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (10).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Southeast Bangkok College (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (11).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Dhurakij Pundit University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (14).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Mae Fah Luang University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Thailand" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (15).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Thonburi University (Thailand)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Myanmar" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (16).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Mandalay University (Myanmar)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Myanmar" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (17).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">University of Yangon (Myanmar)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Indonesia" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (18).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Diponegoro University (Indonesia)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Vietnam" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (19).jpg" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Hanoi University of Science and Technology (Vietnam)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="ASEAN regional cooperation partners" data-country="Laos" data-type="university">
                <div class="card h-100">
                    <img src="../img/logo.png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Sovannkhet University (Laos)</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="company">
                <div class="card h-100">
                    <img src="../img/download.png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">RMA Cambodia</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="bank">
                <div class="card h-100">
                    <img src="../img/download (1).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">Wing Bank Cambodia</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="China" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (20).jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Guangxi University of Finance and Economics(China)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="China" data-type="university">
                <div class="card h-100">
                    <img src="../img/images (1).jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Guangxi Teachers Educaiton University(China)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="China" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (12).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Xiamen University(China)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="South Korea" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (13).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Suseong University(South Korea)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="EUROPE" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (21).jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">EU SHARE(EUROPE)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="China" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (15).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Guangxi University for Nationalities(China)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="China" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (16).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">University of Sanya(China)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="South Korea" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (22).jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Daegu Haany University(South Korea)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="Germany" data-type="Academic">
                <div class="card h-100">
                    <img src="../img/DAAD_Logo_2000_1.jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">German Academic Exchange Service(Germany)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="Taiwan" data-type="university">
                <div class="card h-100">
                    <img src="../img/images (2).jpg" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title"> National Chung Cheng University(Taiwan)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="India" data-type="Institute">
                <div class="card h-100">
                    <img src="../img/download (17).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">Vellore Institute of Technology(India)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Europe regional cooperation partners" data-country="Taiwan" data-type="university">
                <div class="card h-100">
                    <img src="../img/download (18).png" class="card-img-top" alt="HealthNow">
                    <div class="card-body">
                        <h5 class="card-title">National United University(Taiwan)</h5>
                        <p class="card-text">Healthcare innovation company</p>
                        <p class="card-text"><small class="text-muted">Category: Healthcare</small></p>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="bank">
                <div class="card h-100">
                    <img src="../img/download (19).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">PPCBank Cambodia</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="company">
                <div class="card h-100">
                    <img src="../img/download (20).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title">The Pizza Company</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" data-category="Country Cooperation Partners" data-country="Cambodia" data-type="company">
                <div class="card h-100">
                    <img src="../img/download (21).png" class="card-img-top" alt="FinancePlus">
                    <div class="card-body">
                        <h5 class="card-title"> Café Amazon Cambodia</h5>
                        <p class="card-text">Financial services and consulting</p>
                        <p class="card-text"><small class="text-muted">Category: Finance</small></p>
                    </div>
                </div>
            </div>





        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const partnerCards = document.querySelectorAll('.partner-card');
            const countryFilter = document.getElementById('countryFilter');
            const typeFilter = document.getElementById('typeFilter');

            // Populate country filter dynamically
            const countries = new Set();
            partnerCards.forEach(card => {
                const country = card.getAttribute('data-country');
                if (country) countries.add(country);
            });
            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country;
                option.textContent = country;
                countryFilter.appendChild(option);
            });

            // Filter function
            function applyFilters() {
                const selectedCountry = countryFilter.value;
                const selectedType = typeFilter.value;

                partnerCards.forEach(card => {
                    const cardCountry = card.getAttribute('data-country');
                    const cardType = card.getAttribute('data-type');

                    const countryMatch = (selectedCountry === 'all' || cardCountry === selectedCountry);
                    const typeMatch = (selectedType === 'all' || cardType === selectedType);

                    if (countryMatch && typeMatch) {
                        card.classList.remove('hide');
                    } else {
                        card.classList.add('hide');
                    }
                });
            }

            // Event listeners for filter changes
            countryFilter.addEventListener('change', applyFilters);
            typeFilter.addEventListener('change', applyFilters);

            // Apply filters initially
            applyFilters();
        });
    </script>
</body>
<?php 
include("../components/footer.php");
?>
</html>