<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script>
     // Carousel autoplay
 document.querySelectorAll('.slide-img').forEach(img => {
    img.addEventListener('click', function () {
        let carousel = new bootstrap.Carousel(document.getElementById('carouselExampleIndicators'));
        carousel.next();
    });
});

function toggleLanguage(lang) {
const translations = {
    "myppiu": { "en": "MyPPIU", "kh": "MyPPIU (ខ្មែរ)" },
    "logos": { "en": "PPIU Logos", "kh": "ផ្លាកសញ្ញា PPIU" },
    "future-students": { "en": "Future Students", "kh": "និស្សិតអនាគត" },
    "commencement": { "en": "Commencement", "kh": "ពិធីចេញសាកលវិទ្យាល័យ" },
    "student-life": { "en": "Student Life", "kh": "ជីវិតនិស្សិត" },
    "centers": { "en": "Centers", "kh": "កណ្តាល" },
    "about-us": { "en": "About Us <i class='fas fa-chevron-down'></i>", "kh": "អំពីសាលា <i class='fas fa-chevron-down'></i>" },
    "Mission": { "en": "<i class='fas fa-bullseye'></i> Our Mission", "kh": "<i class='fas fa-bullseye'></i> បេសកម្ម" },
    "Academic": { "en": "Academic <i class='fas fa-chevron-down'></i>", "kh": "វគ្គសិក្សា <i class='fas fa-chevron-down'></i>"},
    "p": { "en": "Pay Application Fee", "kh": "បង់ថ្លៃពាក្យសុំ" },
    "register": { "en": "register <i class='fas fa-sign-in-alt'></i>  ", "kh": "<i class='fas fa-sign-in-alt'></i> ចូល"},
    "scroll": { "en": "Enrolment form today on!", "kh": "PPIU ទទួលចុះឈ្មោះចូលរៀនចាប់ពីពេលនេះតទៅ!" },
    "scroll2": { "en": "Let's sign up get special price!", "kh": "តោះចុះឈ្នោះនឹងទទួលបានតម្លៃពិសេស!" },
};

for (const id in translations) {
    const element = document.getElementById(id);
    if (element) {
        element.innerHTML = translations[id][lang]; // Use innerHTML to keep icons
    }
}

// Toggle welcome text
document.getElementById('welcome-text').textContent = lang === 'kh' ? '' : 'Welcome!';
document.getElementById('en').style.display = lang === 'kh' ? 'none' : 'inline';
document.getElementById('kh').style.display = lang === 'kh' ? 'inline' : 'none';
}

// change major programming
function toggleList(id) {
    var box = document.getElementById(id);
    box.classList.toggle('active');
}
document.querySelectorAll(".dropdown > a").forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("show");
    });
});

document.addEventListener("click", function (e) {
    document.querySelectorAll(".dropdown-menu").forEach(menu => {
        if (!menu.parentElement.contains(e.target)) {
            menu.classList.remove("show");
        }
    });
});


</script>
</html>