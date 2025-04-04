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
            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                  <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/488054140_1089327259902670_6427290310901869849_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHvm3T6qVr7TIpFJLg0Cy40LYksdjct9F4tiSx2Ny30XgHy18qR0AbpMw4zjeXp65qYFIkM52L-vcy_IrqWLM6D&_nc_ohc=dFg7QEXgl7MQ7kNvgFp_FO1&_nc_oc=Adn5TRnWK2cfHXv7lb-QJ15lFiLiClb857GQYjAgwWoCdexSvjlCPzyJUK0neoHoZRs&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=emhBVcgcRt_0eHka8SvI8w&oh=00_AYFmxe13Eq_VqS9XVDRthFJvbrJyH6ews-S6EymUSvRZlQ&oe=67F48E3B">  <img  src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/488054140_1089327259902670_6427290310901869849_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHvm3T6qVr7TIpFJLg0Cy40LYksdjct9F4tiSx2Ny30XgHy18qR0AbpMw4zjeXp65qYFIkM52L-vcy_IrqWLM6D&_nc_ohc=dFg7QEXgl7MQ7kNvgFp_FO1&_nc_oc=Adn5TRnWK2cfHXv7lb-QJ15lFiLiClb857GQYjAgwWoCdexSvjlCPzyJUK0neoHoZRs&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=emhBVcgcRt_0eHka8SvI8w&oh=00_AYFmxe13Eq_VqS9XVDRthFJvbrJyH6ews-S6EymUSvRZlQ&oe=67F48E3B" class="card-img-top" alt="TechCorp">
                  </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                   <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487413373_1089910073177722_933689245482237668_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEaf41KXACAL57ynPcp-FLMKCUaNzi5oVIoJRo3OLmhUpCI3VneSAff7PD6mjz8LH2IuG_0JodyIdRc8hJGxKmb&_nc_ohc=BQQzc6-cvwQQ7kNvgHuo4AD&_nc_oc=Adnf8yLM0BA6PCC5qz0O97e1bPBLjdbgBW1HSmbJN47ysqhutp6EfvF8XGHIQaXwK1o&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYFHee6m1vMvjNsrnMXDAwpBnRzYfmjxpA5Icmt-Qo8TsA&oe=67F472B6"> <img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487413373_1089910073177722_933689245482237668_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEaf41KXACAL57ynPcp-FLMKCUaNzi5oVIoJRo3OLmhUpCI3VneSAff7PD6mjz8LH2IuG_0JodyIdRc8hJGxKmb&_nc_ohc=BQQzc6-cvwQQ7kNvgHuo4AD&_nc_oc=Adnf8yLM0BA6PCC5qz0O97e1bPBLjdbgBW1HSmbJN47ysqhutp6EfvF8XGHIQaXwK1o&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYFHee6m1vMvjNsrnMXDAwpBnRzYfmjxpA5Icmt-Qo8TsA&oe=67F472B6" class="card-img-top" alt="TechCorp">
                   </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                    <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487823170_1089913236510739_3251080910656688319_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF3WxdK9rb_aih_ziFAJZvNrnUDd7agBTCudQN3tqAFMCJLMYgDRCy2IAJLzDm_CTLgGPEPMgm1NVnqW0T9GHQw&_nc_ohc=BtEyRUzEAE8Q7kNvgGOtGGq&_nc_oc=AdmDOKLxJBQigGI_T8yPT6P9tFGjQYoC4aFJ5TtpK2pD9YS_O_jERPoYOfd1SsEE3a4&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYHhTQgzddX6i7X2ux5yLOHhgoFn939PtbxtmoBASVP9GQ&oe=67F46879"><img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487823170_1089913236510739_3251080910656688319_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeF3WxdK9rb_aih_ziFAJZvNrnUDd7agBTCudQN3tqAFMCJLMYgDRCy2IAJLzDm_CTLgGPEPMgm1NVnqW0T9GHQw&_nc_ohc=BtEyRUzEAE8Q7kNvgGOtGGq&_nc_oc=AdmDOKLxJBQigGI_T8yPT6P9tFGjQYoC4aFJ5TtpK2pD9YS_O_jERPoYOfd1SsEE3a4&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYHhTQgzddX6i7X2ux5yLOHhgoFn939PtbxtmoBASVP9GQ&oe=67F46879" class="card-img-top" alt="FinancePlus">
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                    <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/488205214_1089135429921853_155476128788039949_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHeawbAOUNsT3gkHnKMCoVYAfS_b01liV4B9L9vTWWJXne_yw9T3u-RNIMpMSHri5hH1nnsU5TRzw7m8tXD2UxM&_nc_ohc=pDuZnBJ-szgQ7kNvgGFQEjd&_nc_oc=Admn8f5qw692RbFik0h9yuZsxN4IyRODJx35R7crVXw3dRl2XTrjjvW65CQ1H0QkJ0M&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=v1uxuFc92VPD78FFZiei2g&oh=00_AYFaFqGwHpwhfXyDqwZrXtjknzX-CI_5g2M7aXRWrah7Uw&oe=67F46CF3">
                        <img style="height: 340px;" src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/488205214_1089135429921853_155476128788039949_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHeawbAOUNsT3gkHnKMCoVYAfS_b01liV4B9L9vTWWJXne_yw9T3u-RNIMpMSHri5hH1nnsU5TRzw7m8tXD2UxM&_nc_ohc=pDuZnBJ-szgQ7kNvgGFQEjd&_nc_oc=Admn8f5qw692RbFik0h9yuZsxN4IyRODJx35R7crVXw3dRl2XTrjjvW65CQ1H0QkJ0M&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=v1uxuFc92VPD78FFZiei2g&oh=00_AYFaFqGwHpwhfXyDqwZrXtjknzX-CI_5g2M7aXRWrah7Uw&oe=67F46CF3" class="card-img-top" alt="FinancePlus">
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                   <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487568159_1089215696580493_498890899369909522_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFARuyS6LIZCcs8eSibRmYUE5cmLw2uLHgTlyYvDa4seBX6dZRyMCFl_LwhVfFa4aNdo4kusDuNf28cGLGtwRab&_nc_ohc=stguDMryoX4Q7kNvgGRmzxZ&_nc_oc=Adm3oHv5xSom38sjODBiS5CUlnWYSdaXTHTDj1Vhar09zhwCY4MuGlrFLHyxcX0EeQQ&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYHVzLCyewKGSp5De_RON_-z_JHQDgxH283h8YL-VARuZA&oe=67F465C6"> 
                    <img style="height: 340px;" src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487568159_1089215696580493_498890899369909522_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFARuyS6LIZCcs8eSibRmYUE5cmLw2uLHgTlyYvDa4seBX6dZRyMCFl_LwhVfFa4aNdo4kusDuNf28cGLGtwRab&_nc_ohc=stguDMryoX4Q7kNvgGRmzxZ&_nc_oc=Adm3oHv5xSom38sjODBiS5CUlnWYSdaXTHTDj1Vhar09zhwCY4MuGlrFLHyxcX0EeQQ&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYHVzLCyewKGSp5De_RON_-z_JHQDgxH283h8YL-VARuZA&oe=67F465C6" class="card-img-top" alt="FinancePlus">
                   </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                  <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487693218_1089227853245944_6407260302013391399_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHzGOjINKVxVFWlFow69MUY3Pct0-fI17Pc9y3T58jXs5jyTgZoF8v52ZU0Iw6voRfUUbn79EOR7X2SlS796ZzL&_nc_ohc=-7tT1CZ3FzkQ7kNvgFvyGTy&_nc_oc=AdmC0egFQgb626L22d8bEs4ErXHchRPHVx5wh6pfpezYs5fj5cGDnT6VsOD23s3PdzE&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYE9jjVIS0fn2pnnU9k8DzBjzqV1SzzDBvlyP_JXnECX3w&oe=67F48351"> 
                     <img  style="height: 340px;" src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487693218_1089227853245944_6407260302013391399_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHzGOjINKVxVFWlFow69MUY3Pct0-fI17Pc9y3T58jXs5jyTgZoF8v52ZU0Iw6voRfUUbn79EOR7X2SlS796ZzL&_nc_ohc=-7tT1CZ3FzkQ7kNvgFvyGTy&_nc_oc=AdmC0egFQgb626L22d8bEs4ErXHchRPHVx5wh6pfpezYs5fj5cGDnT6VsOD23s3PdzE&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYE9jjVIS0fn2pnnU9k8DzBjzqV1SzzDBvlyP_JXnECX3w&oe=67F48351" alt="FinancePlus">
                  </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                   <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487824700_1089240866577976_4681677343694878140_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEsY8uRkq4R2hzJxiCjWPgZ80rNKk3NIcDzSs0qTc0hwPZ9-eSwQoioPck6InPJuq7BtrNz4D6WPwtCRV8At7tQ&_nc_ohc=gw_wdaMc-5sQ7kNvgGa1NTk&_nc_oc=Adk3m6vpowgY7fOdqDcoW2FMPr26jQhRutaGqUEQbeRQKb_f7cWQlmXJFQ6wPEX4LCY&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYHLyfwYgZYyY-ADHvpAQ0go6K9S1TcnYDOnlE3CTpw1Fg&oe=67F46D84"> <img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487824700_1089240866577976_4681677343694878140_n.jpg?stp=dst-jpg_s600x600_tt6&_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEsY8uRkq4R2hzJxiCjWPgZ80rNKk3NIcDzSs0qTc0hwPZ9-eSwQoioPck6InPJuq7BtrNz4D6WPwtCRV8At7tQ&_nc_ohc=gw_wdaMc-5sQ7kNvgGa1NTk&_nc_oc=Adk3m6vpowgY7fOdqDcoW2FMPr26jQhRutaGqUEQbeRQKb_f7cWQlmXJFQ6wPEX4LCY&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=WT9HzpN7qUtfjR71szAMUg&oh=00_AYHLyfwYgZYyY-ADHvpAQ0go6K9S1TcnYDOnlE3CTpw1Fg&oe=67F46D84" class="card-img-top" alt="FinancePlus">
                   </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card">
                <div class="card h-100">
                  <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487747290_122221361210234005_8165068219738532667_n.jpg?stp=dst-jpg_p526x296_tt6&_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeG3xV1lrFs81X34mXx0-1q0g_yg7x97zECD_KDvH3vMQNlopOw4rlpGGh3pc12hFDUKXQCNLlVJE67g9Bin06tL&_nc_ohc=Cw_IM8LyIYQQ7kNvgGPTuZ9&_nc_oc=Adlwip76yczVWOMzjFLM-YwFtCo-z4bjip9Lv-c3XggpYoO6XB2BEiXK56sMD_Uil-s&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYHDxRL3JrL7QHcuylkrFv4o3WwjnaIOBJnXRgLJ8zJLZg&oe=67F47D73">  <img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/487747290_122221361210234005_8165068219738532667_n.jpg?stp=dst-jpg_p526x296_tt6&_nc_cat=102&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeG3xV1lrFs81X34mXx0-1q0g_yg7x97zECD_KDvH3vMQNlopOw4rlpGGh3pc12hFDUKXQCNLlVJE67g9Bin06tL&_nc_ohc=Cw_IM8LyIYQQ7kNvgGPTuZ9&_nc_oc=Adlwip76yczVWOMzjFLM-YwFtCo-z4bjip9Lv-c3XggpYoO6XB2BEiXK56sMD_Uil-s&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=902zcUidNwmT1LK_pvdPpw&oh=00_AYHDxRL3JrL7QHcuylkrFv4o3WwjnaIOBJnXRgLJ8zJLZg&oe=67F47D73" class="card-img-top" alt="FinancePlus">
                  </a>
                </div>
            </div>

            <div class="col-md-4 mb-4 partner-card" >
                <div class="card h-100">
                  <a href="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/486329217_1083680783800651_9009727993935223578_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeFHpjJY1YFwt0VhVkLD64JRyActl0Gt0tbIBy2XQa3S1n9sASbdQJkAzlrhinJcvYmO8sRb0eJdsp28nfIdqMZJ&_nc_ohc=K7oJ4C9hFOwQ7kNvgEIE9Rj&_nc_oc=AdmGXz7mBcWUbEf_8DIdYOCG9JYQs7gLpS2riadufqn182ztWwB2GDXK4Pky3d9n-ak&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=Eujbq3O5Tm1mCYJI3EHW-w&oh=00_AYG0zMtDCDOoUEGEckJ-jRCK4Yp19yIlsUaQzTA-1mU0qg&oe=67F49367">  <img src="https://scontent.fpnh24-1.fna.fbcdn.net/v/t39.30808-6/486329217_1083680783800651_9009727993935223578_n.jpg?stp=dst-jpg_p180x540_tt6&_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeFHpjJY1YFwt0VhVkLD64JRyActl0Gt0tbIBy2XQa3S1n9sASbdQJkAzlrhinJcvYmO8sRb0eJdsp28nfIdqMZJ&_nc_ohc=K7oJ4C9hFOwQ7kNvgEIE9Rj&_nc_oc=AdmGXz7mBcWUbEf_8DIdYOCG9JYQs7gLpS2riadufqn182ztWwB2GDXK4Pky3d9n-ak&_nc_zt=23&_nc_ht=scontent.fpnh24-1.fna&_nc_gid=bY0g1NHh0w6wveSoUo9iQg&oh=00_AYGLAwemAhleUhoCIjCHziXBz8TPqn-k-RB3evfHWvKN0A&oe=67F49367" class="card-img-top" alt="FinancePlus"></a>
                    
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
<?php 
include("../components/footer.php");
?>
</html>