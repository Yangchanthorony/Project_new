<script>
       function toggleLanguage(lang) {
    const translations = {
        // Header Section
        "license-header": {
            "en": "IT Department",
            "kh": "នាយកដ្ឋានបច្ចេកវិទ្យាព័ត៌មាន"
        },
        // Section Title
        "section-title": {
            "en": "PROFESSOR",
            "kh": "សាស្ត្រាចារ្យ"
        },
        // Faculty Member 1 - Tansareyvuth
        "faculty-name-1": {
            "en": "Tansareyvuth",
            "kh": "តាន់ សារីវុធ"
        },
        "faculty-title-1": {
            "en": "Professor",
            "kh": "សាស្ត្រាចារ្យ"
        },
        "nationality-1": {
            "en": "Cambodian",
            "kh": "ខ្មែរ"
        },
        "faculty-qualifications-1": {
            "en": "건국대학교 / Konkuk University <br> Master of Science, in Computer and Information Communication Engineering",
            "kh": "សាកលវិទ្យាល័យកុនគុក (Konkuk University) <br> អនុបណ្ឌិតវិទ្យាសាស្ត្រ ផ្នែកវិស្វកម្មកុំព្យូទ័រនិងទំនាក់ទំនងព័ត៌មាន"
        },
        // Faculty Member 2 - Hem Tola
        "faculty-name-2": {
            "en": "Hem Tola",
            "kh": "ហែម តុលា"
        },
        "faculty-title-2": {
            "en": "Professor",
            "kh": "សាស្ត្រាចារ្យ"
        },
        "nationality-2": {
            "en": "Cambodian",
            "kh": "ខ្មែរ"
        },
        "faculty-qualifications-2": {
            "en": "University of Cambodia<br>Cambodian Mekong University<br>Norton University",
            "kh": "សាកលវិទ្យាល័យកម្ពុជា<br>សាកលវិទ្យាល័យមេគង្គកម្ពុជា<br>សាកលវិទ្យាល័យន័រតុន"
        },
        // Faculty Member 3 - Hin SamArt
        "faculty-name-3": {
            "en": "Hin SamArt",
            "kh": "ហ៊ិន សមអាត"
        },
        "faculty-title-3": {
            "en": "Professor",
            "kh": "សាស្ត្រាចារ្យ"
        },
        "nationality-3": {
            "en": "Cambodian",
            "kh": "ខ្មែរ"
        },
        "faculty-qualifications-3a": {
            "en": "PhD",
            "kh": "បណ្ឌិត"
        },
        "faculty-qualifications-3b": {
            "en": "Asian Institute of Technology, Thailand (December 1996)<br>",
            "kh": "វិទ្យាស្ថានបច្ចេកវិទ្យាអាស៊ី ប្រទេសថៃ (ធ្នូ ១៩៩៦)<br>"
        },
        // Faculty Member 4 - Sithy Cheam
        "faculty-name-4": {
            "en": "Sithy Cheam",
            "kh": "ស៊ីធី ជាម"
        },
        "faculty-title-4": {
            "en": "Professor",
            "kh": "សាស្ត្រាចារ្យ"
        },
        "nationality-4": {
            "en": "Cambodian",
            "kh": "ខ្មែរ"
        },
        "faculty-qualifications-4": {
            "en": "Southeast Asia Union College, Singapore<br>Walla Walla College, Washington, USA<br>Several of certificates from Microsoft Virtual Academy (MVA) Free Training Center",
            "kh": "មហាវិទ្យាល័យសហភាពអាស៊ីអាគ្នេយ៍ សិង្ហបុរី<br>មហាវិទ្យាល័យវ៉លឡា វ៉លឡា វ៉ាស៊ីនតោន សហរដ្ឋអាមេរិក<br>វិញ្ញាបនបត្រជាច្រើនពីមជ្ឈមណ្ឌលបណ្តុះបណ្តាលឥតគិតថ្លៃ Microsoft Virtual Academy (MVA)"
        },
        // Faculty Member 5 - Chhay Buntha
        "faculty-name-5": {
            "en": "Chhay Buntha",
            "kh": "ឆាយ ប៊ុនថា"
        },
        "faculty-title-5": {
            "en": "Professor",
            "kh": "សាស្ត្រាចារ្យ"
        },
        "nationality-5": {
            "en": "Cambodian",
            "kh": "ខ្មែរ"
        },
        "faculty-qualifications-5": {
            "en": "Institute of Technology Delhi(IITD), India. <br>Bachelor degree at BBU in Network Technology. Phnom Penh, Cambodia.<br>",
            "kh": "វិទ្យាស្ថានបច្ចេកវិទ្យាដេលី (IITD) ប្រទេសឥណ្ឌា <br>បរិញ្ញាបត្រផ្នែកបច្ចេកវិទ្យាបណ្តាញនៅ BBU ភ្នំពេញ កម្ពុជា<br>"
        }
        
    };

    for (const id in translations) {
        const element = document.getElementById(id);
        if (element) {
            element.innerHTML = translations[id][lang];
        }
    }

    const enButton = document.getElementById('en');
    const khButton = document.getElementById('kh');
    if (enButton) enButton.style.display = lang === 'kh' ? 'none' : 'inline';
    if (khButton) khButton.style.display = lang === 'kh' ? 'inline' : 'none';
}
    </script>