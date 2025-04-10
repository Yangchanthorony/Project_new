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

            

        
        "Academic": { "en": "Academic <i class='fas fa-chevron-down'></i>", "kh": "វគ្គសិក្សា <i class='fas fa-chevron-down'></i>"},
        "p": { "en": "Pay Application Fee", "kh": "បង់ថ្លៃពាក្យសុំ" },
        "register": { "en": "register <i class='fas fa-sign-in-alt'></i>  ", "kh": "<i class='fas fa-sign-in-alt'></i> ចុះឈ្មោះ"},
        "scroll": { "en": "Enrolment form today on!", "kh": "PPIU ទទួលចុះឈ្មោះចូលរៀនចាប់ពីពេលនេះតទៅ!" },
        "scroll2": { "en": "Let's sign up get special price!", "kh": "តោះចុះឈ្នោះនឹងទទួលបានតម្លៃពិសេស!" },

        "History": { "en": " <i class='fas fa-history'></i> History  ", "kh": "  <i class='fas fa-history'></i>  ប្រវត្តិ"},
        "License": { "en": " <i class='fas fa-certificate'></i>  PPIU License and Accreditation  ", "kh": " <i class='fas fa-certificate'></i>  PPIU អាជ្ញាប័ណ្ណ និងការទទួលស្គាល់"},
       "vision-mission-values": { "en": "<i class='fas fa-eye'></i> Vision, Mission, and Values", "kh": "<i class='fas fa-eye'></i> ចក្ខុវិស័យ បេសកកម្ម និងតម្លៃ" },
        "career-opportunities-link": { "en": "<i class='fas fa-briefcase'></i> Career Opportunities", "kh": "<i class='fas fa-briefcase'></i> ឱកាសការងារ" },
       "alumni": { "en": "<i class='fas fa-users'></i> ALUMNI", "kh": "<i class='fas fa-users'></i> អតីតនិស្សិត" },
        "degree": { "en": "<i class='fas fa-graduation-cap'></i> DEGREE", "kh": "<i class='fas fa-graduation-cap'></i> សញ្ញាបត្រ" },
        "professional": { "en": "<i class='fas fa-chalkboard-teacher'></i> PROFESSIONAL/ SHORT COURSE", "kh": "<i class='fas fa-chalkboard-teacher'></i> វគ្គវិជ្ជាជីវៈ/វគ្គខ្លី" },
        "associate": { "en": "<i class='fas fa-user-graduate'></i> ASSOCIATE", "kh": "<i class='fas fa-user-graduate'></i> សញ្ញាបត្ររង" },
        "masters-degree": { "en": "<i class='fas fa-university'></i> MASTER'S DEGREE", "kh": "<i class='fas fa-university'></i> សញ្ញាបត្រអនុបណ្ឌិត" },
        "bachelor": { "en": "<i class='fas fa-user-graduate'></i> BACHELOR", "kh": "<i class='fas fa-user-graduate'></i> សញ្ញាបត្របរិញ្ញាបត្រ" },
        "doctoral": { "en": "<i class='fas fa-award'></i> DOCTORAL", "kh": "<i class='fas fa-award'></i> សញ្ញាបត្របណ្ឌិត" },
        "faculties": { "en": "<i class='fas fa-building'></i> FACULTIES", "kh": "<i class='fas fa-building'></i> មហាវិទ្យាល័យ" },
        "faculty-science-it": { "en": "<i class='fas fa-flask'></i> FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY", "kh": "<i class='fas fa-flask'></i> មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន" },
        "faculty-business-tourismmo": { "en": "<i class='fas fa-briefcase'></i> FACULTY OF BUSINESS AND TOURISM", "kh": "<i class='fas fa-briefcase'></i> មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍" },
        "faculty-law-economicso": { "en": "<i class='fas fa-gavel'></i> FACULTY OF LAW AND ECONOMICS", "kh": "<i class='fas fa-gavel'></i> មហាវិទ្យាល័យនីតិសាស្ត្រ និងសេដ្ឋកិច្ច" },
        "faculty-education": { "en": "<i class='fas fa-book'></i> FACULTY OF EDUCATION SCIENCE", "kh": "<i class='fas fa-book'></i> មហាវិទ្យាល័យវិទ្យាសាស្ត្រអប់រំ" },
        "faculty-news-views": { "en": "<i class='fas fa-newspaper'></i> FACULTY OF NEWS AND VIEWS", "kh": "<i class='fas fa-newspaper'></i> មហាវិទ្យាល័យព័ត៌មាន និងទស្សនៈ" },
        "study-programs": { "en": "<i class='fas fa-book'></i> STUDY PROGRAMS - PPIU", "kh": "<i class='fas fa-book'></i> កម្មវិធីសិក្សា - PPIU" },
        "New": { "en": "New <i class='fas fa-chevron-down'></i>", "kh": "ថ្មី <i class='fas fa-chevron-down'></i>" },
        "events": { "en": "<i class='fas fa-calendar-alt'></i> EVENTS", "kh": "<i class='fas fa-calendar-alt'></i> ព្រឹត្តិការណ៍" },
        "news": { "en": "<i class='fas fa-newspaper'></i> News", "kh": "<i class='fas fa-newspaper'></i> ព័ត៌មាន" },
        "scholarship": { "en": "<i class='fas fa-graduation-cap'></i> SCHOLARSHIP", "kh": "<i class='fas fa-graduation-cap'></i> អាហារូបករណ៍" },
        "job-announcements": { "en": "<i class='fas fa-briefcase'></i> Job Announcements", "kh": "<i class='fas fa-briefcase'></i> សេចក្តីប្រកាសការងារ" },
        "student-loan": { "en": "<i class='fas fa-hand-holding-usd'></i> Student Loan", "kh": "<i class='fas fa-hand-holding-usd'></i> ប្រាក់កម្ចីនិស្សិត" },
        "Library": { "en": "LIBRARY <i class='fas fa-chevron-down'></i>", "kh": "បណ្ណាល័យ <i class='fas fa-chevron-down'></i>" },
        "reading-club": { "en": "<i class='fas fa-book-reader'></i> PPIU Reading Club", "kh": "<i class='fas fa-book-reader'></i> ក្លឹបអានសៀវភៅ PPIU" },
        "music-club": {
            "en": " <i class='fas fa-music'></i> Music Club",
            "kh": " ក្លឹបតន្ត្រី"
        },
        "library-materials": { "en": "<i class='fas fa-book'></i> LIBRARY MATERIALS", "kh": "<i class='fas fa-book'></i> សម្ភារៈបណ្ណាល័យ" },
        "about-library": { "en": "<i class='fas fa-info-circle'></i> ABOUT LIBRARY", "kh": "<i class='fas fa-info-circle'></i> អំពីបណ្ណាល័យ" },
        "Admissions": { "en": "Admissions <i class='fas fa-chevron-down'></i>", "kh": "ការចូលរៀន <i class='fas fa-chevron-down'></i>" },
        "admission-associate": { "en": "<i class='fas fa-user-graduate'></i> ASSOCIATE", "kh": "<i class='fas fa-user-graduate'></i> សញ្ញាបត្ររង" },
        "admission-master": { "en": "<i class='fas fa-user-tie'></i> MASTER", "kh": "<i class='fas fa-user-tie'></i> អនុបណ្ឌិត" },
        "admission-bachelor": { "en": "<i class='fas fa-user'></i> BACHELOR", "kh": "<i class='fas fa-user'></i> បរិញ្ញាបត្រ" },
        "admission-doctoral": { "en": "<i class='fas fa-graduation-cap'></i> DOCTORAL", "kh": "<i class='fas fa-graduation-cap'></i> បណ្ឌិត" },
        "contact": { "en": "Contact", "kh": "ទំនាក់ទំនង" },

        "loan-header": { "en": "You can achieve your dreams by using a student loan", "kh": "អ្នកអាចសម្រេចក្តីសុបិនរបស់អ្នកដោយប្រើប្រាស់ប្រាក់កម្ចីនិស្សិត" },
                "loan-intro": { "en": "Phnom Penh International University (PPIU) has partnered with PRINCE Bank to provide student loans for Associate Degrees, Bachelor's Degrees, Master's Degrees, and Doctorates with the following special conditions:", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) បានចាប់ដៃគូជាមួយធនាគារ PRINCE Bank ដើម្បីផ្តល់ប្រាក់កម្ចីនិស្សិតសម្រាប់សញ្ញាបត្ររង សញ្ញាបត្របរិញ្ញាបត្រ សញ្ញាបត្រអនុបណ្ឌិត និងសញ្ញាបត្របណ្ឌិតជាមួយលក្ខខណ្ឌពិសេសដូចខាងក្រោម:" },
                "terms-title": { "en": "1. Terms and Conditions: Student Loan", "kh": "១. លក្ខខណ្ឌ៖ ប្រាក់កម្ចីនិស្សិត" },
                "eligibility-title": { "en": "2. Eligibility Criteria for Students", "kh": "២. លក្ខណៈវិនិច្ឆ័យសម្រាប់និស្សិត" },
                "eligibility-age": { "en": "Students must be at least 18 years old", "kh": "និស្សិតត្រូវមានអាយុយ៉ាងតិច ១៨ ឆ្នាំ" },
                "eligibility-studying": { "en": "Students must be currently studying at a university or institute", "kh": "និស្សិតត្រូវកំពុងសិក្សានៅសាកលវិទ្យាល័យ ឬវិទ្យាស្ថានមួយ" },
                "eligibility-outstanding": { "en": "Outstanding students (scholarship recipients, continuing education, or employed students)", "kh": "និស្សិតឆ្នើម (អ្នកទទួលអាហារូបករណ៍ ការអប់រំបន្ត ឬនិស្សិតដែលមានការងារធ្វើ)" },
                "eligibility-guarantor": { "en": "Students must have a guarantor, collateral, income, or a scholarship", "kh": "និស្សិតត្រូវមានអ្នកធានា ទ្រព្យបញ្ចាំ ប្រាក់ចំណូល ឬអាហារូបករណ៍" },
                "overlay-student-loan": { "en": "STUDENT LOAN", "kh": "ប្រាក់កម្ចីនិស្សិត" },
                "overlay-amount": { "en": "Up to $3,200", "kh": "រហូតដល់ ៣,២០០ ដុល្លារ" },
                "overlay-partnership": { "en": "PARTNERSHIP", "kh": "ភាពជាដៃគូ" },
                "overlay-prince-bank": { "en": "PRINCE BANK", "kh": "ធនាគារ PRINCE" },
                "overlay-contact": { "en": "Contact: 123-456-789", "kh": "ទំនាក់ទំនង: ១២៣-៤៥៦-៧៨៩" },
                "overlay-tenor": { "en": "LOAN TENOR UP TO 8 YEARS", "kh": "រយៈពេលកម្ចីរហូតដល់ ៨ ឆ្នាំ" },   

                

        //mid
        
        // ... (other existing entries) ...
        "events-heading": { "en": "Events", "kh": "ព្រឹត្តិការណ៍" },
        // Event 1
        "event1-title": { "en": "Course at the Faculty of Law and Economics", "kh": "វគ្គសិក្សានៅមហាវិទ្យាល័យនីតិសាស្ត្រ និងសេដ្ឋកិច្ច" },
        "event1-date": { "en": "📅 Date: 11 Feb 2025 | ⏰ Time: 5:30 PM - 7:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ១១ កុម្ភៈ ២០២៥ | ⏰ ម៉ោង: ៥:៣០ ល្ងាច - ៧:ល្ងាច" },
        "event1-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event1-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 2
        "event2-title": { "en": " Action Welcome back to class!!", "kh": "ស្វាគមន៍ត្រឡប់មកថ្នាក់រៀនវិញ!!" },
        "event2-date": { "en": "📅 Date: 10 Dec 2022 | ⏰ Time: 1:00 PM - 5:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ១០ ធ្នូ ២០២២ | ⏰ ម៉ោង: ១:ល្ងាច - ៥:ល្ងាច" },
        "event2-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event2-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 3
        "event3-title": { "en": "PIU student activities to celebrate", "kh": "សកម្មភាពនិស្សិត PIU ដើម្បីអបអរសាទរ" },
        "event3-date": { "en": "📅 Date: 8 March 2025 | ⏰ Time: 2 PM - 5 PM", "kh": "📅 កាលបរិច្ឆេទ: ៨ មីនា ២០២៥ | ⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event3-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event3-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 4
        "event4-title": { "en": "The management of (PPIU) share experiences... ", "kh": "ការគ្រប់គ្រងរបស់ (PPIU) បានចែករំលែកបទពិសោធន៍" },
        "event4-date": { "en": "📅 Date: 21 February 2025 | ⏰ Time: 2:00 PM - 5:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ២១ កុម្ភៈ ២០២៥ | ⏰ ម៉ោង: ២:ល្ងាចរសល្ងាច - ៥:ល្ងាច" },
        "event4-location": { "en": "📍 Location: Bunrany High School", "kh": "📍 ទីតាំង: វិទ្យាល័យប៊ុនរ៉ានី" },
        "event4-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        "major-programs-heading": { "en": "Major Programs", "kh": "កម្មវិធីសំខាន់ៗ" },

        // Master's Degree
        "master-headero": { "en": "Master's Degree <i class='fas fa-bars'></i>", "kh": "ថ្នាក់អនុបណ្ឌិត <i class='fas fa-bars'></i>" },
        "master-1": { "en": "Management", "kh": "គ្រប់គ្រង" },
        "master-2": { "en": "Finance", "kh": "ហិរញ្ញវត្ថុ" },
        "master-3": { "en": "Law", "kh": "នីតិសាស្ត្រ" },
        "master-4": { "en": "Marketing", "kh": "ទីផ្សារ" },
        "master-5": { "en": "InternationalRelation", "kh": "ទំនាក់ទំនងអន្តរជាតិ" },
        "master-6": { "en": "public Administation", "kh": "រដ្ឋបាលសាធារណៈ" },
        "master-7": { "en": "Governance and Ledership", "kh": "អភិបាលកិច្ច និងភាពជាអ្នកដឹកនាំ" },

        // Bachelor's Degree
        "bachelor-headero": { "en": "Bachelor's Degree <i class='fas fa-bars'></i>", "kh": "ថ្នាក់បរិញ្ញាបត្រ <i class='fas fa-bars'></i>" },
        "bachelor-1": { "en": "Accounting", "kh": "គណនេយ្យ" },
        "bachelor-2": { "en": "Management", "kh": "គ្រប់គ្រង" },
        "bachelor-3": { "en": "Law", "kh": "នីតិសាស្ត្រ" },
        "bachelor-4": { "en": "Marketing", "kh": "ទីផ្សារ" },
        "bachelor-5": { "en": "InternationalRelation", "kh": "ទំនាក់ទំនងអន្តរជាតិ" },
        "bachelor-6": { "en": "public Administation", "kh": "រដ្ឋបាលសាធារណៈ" },
        "bachelor-7": { "en": "Economic Development", "kh": "ការអភិវឌ្ឍន៍សេដ្ឋកិច្ច" },
        "bachelor-8": { "en": "Hotel & Tourism Management", "kh": "គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
        "bachelor-9": { "en": "Finance & Banking", "kh": "ហិរញ្ញវត្ថុ និងធនាគារ" },
        "bachelor-10": { "en": "Management Information System", "kh": "ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង" },
        "bachelor-11": { "en": "English for Education", "kh": "ភាសាអង់គ្លេសសម្រាប់ការអប់រំ" },
        "bachelor-12": { "en": "English for Business", "kh": "ភាសាអង់គ្លេសសម្រាប់ធុរកិច្ច" },
        "bachelor-13": { "en": "International Business", "kh": "ធុរកិច្ចអន្តរជាតិ" },
        "bachelor-16": { "en": "Management Information System", "kh": "ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង" },
        "bachelor-14": { "en": "Computer Sciences", "kh": "វិទ្យាសាស្ត្រកុំព្យូទ័រ" },
        "bachelor-15": { "en": "Logistics Management", "kh": "គ្រប់គ្រងភស្តុភារ" },

        // Associate's Degree Section
        "associate-headero": { "en": "Associate's Degree <i class='fas fa-bars'></i>", "kh": "ថ្នាក់បរិញ្ញាបត្ររង <i class='fas fa-bars'></i>" },
        "associate-accounting": { "en": "Accounting", "kh": "គណនេយ្យ" },
        "associate-management": { "en": "Management", "kh": "គ្រប់គ្រង" },
        "associate-marketing": { "en": "Marketing", "kh": "ទីផ្សារ" },
        "associate-hotel-tourism": { "en": "Hotel & Tourism Management", "kh": "គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
        "associate-finance-banking": { "en": "Finance & Banking", "kh": "ហិរញ្ញវត្ថុ និងធនាគារ" },
        "associate-economic-dev": { "en": "Economic Development", "kh": "ការអភិវឌ្ឍសេដ្ឋកិច្ច" },
        "associate-law": { "en": "Law", "kh": "ច្បាប់" },
        "associate-computer-science": { "en": "Computer Sciences", "kh": "វិទ្យាសាស្ត្រកុំព្យូទ័រ" },
        "associate-mis": { "en": "Management Information System", "kh": "ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង" },
        "associate-english-edu": { "en": "English for Education", "kh": "ភាសាអង់គ្លេសសម្រាប់ការអប់រំ" },

        // Doctoral's Degree Section
        "doctoral-headero": { "en": "Doctoral's Degree <i class='fas fa-bars'></i>", "kh": "ថ្នាក់បណ្ឌិត <i class='fas fa-bars'></i>" },
        "doctoral-finance": { "en": "Finance", "kh": "ហិរញ្ញវត្ថុ" },
        "doctoral-marketing": { "en": "Marketing", "kh": "ទីផ្សារ" },
        "doctoral-management": { "en": "Management", "kh": "គ្រប់គ្រង" },
        "doctoral-economic-dev": { "en": "Economic Development", "kh": "ការអភិវឌ្ឍសេដ្ឋកិច្ច" },
        "doctoral-public-admin": { "en": "Public Administration", "kh": "រដ្ឋបាលសាធារណៈ" }, // Corrected typo from "public

        // News Section
        "news-title": { "en": "News", "kh": "ព័ត៌មាន" },

        // Associate's Degree
        "associate-header": { "en": "Associate's Degree <i class='fas fa-bars'></i>", "kh": "សញ្ញាបត្ររង <i class='fas fa-bars'></i>" },
        "associate-1": { "en": "School of Business", "kh": "សាលាធុរកិច្ច" },
        "associate-2": { "en": "School of Digital Technologies", "kh": "សាលាបច្ចេកវិទ្យាឌីជីថល" },
        "associate-3": { "en": "School of Law", "kh": "សាលានីតិសាស្ត្រ" },
        "associate-4": { "en": "School of Social Sciences", "kh": "សាលាវិទ្យាសាស្ត្រសង្គម" },

        // Doctoral's Degree
        "doctoral-header": { "en": "Doctoral's Degree <i class='fas fa-bars'></i>", "kh": "សញ្ញាបត្របណ្ឌិត <i class='fas fa-bars'></i>" },
        "doctoral-1": { "en": "School of Business", "kh": "សាលាធុរកិច្ច" },
        "doctoral-2": { "en": "School of Digital Technologies", "kh": "សាលាបច្ចេកវិទ្យាឌីជីថល" },
        "doctoral-3": { "en": "School of Law", "kh": "សាលានីតិសាស្ត្រ" },
        "doctoral-4": { "en": "School of Social Sciences", "kh": "សាលាវិទ្យាសាស្ត្រសង្គម" },

        "ppiu-community-title": { "en": "PPIU Community", "kh": "សហគមន៍ PPIU" },
        "ppiu-lecture-title": { "en": "PPIU Lecture", "kh": "ការបង្រៀន PPIU" },
        "facebook-follow": { "en": "<i class='fa-brands fa-facebook'></i> follow in facebook", "kh": "<i class='fa-brands fa-facebook'></i> តាមដាននៅក្នុងហ្វេសប៊ុក" },
        "admissions-processes-title": { "en": "Admissions Processes", "kh": "ដំណើរការចូលរៀន" },
        "bachelors-section-title": { "en": "Bachelor's", "kh": "បរិញ្ញាបត្រ" },

        // Bachelor's Steps
        "bachelor-step2-title": { "en": "Step 2", "kh": "ជំហានទី ២" },
        "bachelor-step2-desc": { "en": "English Placement Test", "kh": "ការធ្វើតេស្តភាសាអង់គ្លេស" },
        "bachelor-step3-title": { "en": "Step 3", "kh": "ជំហានទី ៣" },
        "bachelor-step3-desc": { "en": "Submit Documents", "kh": "ដាក់ស្នើឯកសារ" },

        // Master's Section
        "masters-section-title": { "en": "Master's", "kh": "អនុបណ្ឌិត" },
        "master-step1-title": { "en": "Step 1", "kh": "ជំហានទី ១" },
        "master-step1-desc": { "en": "Pay Application Fee", "kh": "បង់ថ្លៃពាក្យសុំ" },
        "master-step2-title": { "en": "Step 2", "kh": "ជំហានទី ២" },
        "master-step2-desc": { "en": "English Placement Test", "kh": "ការធ្វើតេស្តភាសាអង់គ្លេស" },
        "master-step3-title": { "en": "Step 3", "kh": "ជំហានទី ៣" },
        "master-step3-desc": { "en": "Submit Documents", "kh": "ដាក់ស្នើឯកសារ" },
        "master-step4-title": { "en": "Step 4", "kh": "ជំហានទី ៤" },
        "master-step4-desc": { "en": "Interview with Coordinator", "kh": "សម្ភាសន៍ជាមួយអ្នកសម្របសម្រួល" },

        // News Card 1
        "news1-date": { "en": "05 May 2025", "kh": "០៥ ឧសភា ២០២៥" },
        "news1-title": { "en": "New Enrollment!", "kh": "ការចុះឈ្មោះថ្មី!" },
        "news1-desc": { "en": "For more information, please visit the Information Office on the 5th floor of Phnom Penh International University...", "kh": "សម្រាប់ព័ត៌មានបន្ថែម សូមទៅកាន់ការិយាល័យព័ត៌មាននៅជាន់ទី៥ នៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ..." },
        "news1-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // News Card 2
        "news2-date": { "en": "March 15, 2025", "kh": "១៥ មីនា ២០២៥" },
        "news2-title": { "en": "organized entrance exams", "kh": "បានរៀបចំការប្រឡងចូលរៀន" },
        "news2-desc": { "en": "Postgraduate School Activities organized entrance exams for postgraduate students of Phnom Penh International University (PPIU).", "kh": "សកម្មភាពសាលាក្រោយឧត្តមសិក្សាបានរៀបចំការប្រឡងចូលរៀនសម្រាប់និស្សិតក្រោយឧត្តមសិក្សា... " },
        "news2-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // News Card 3
        "news3-date": { "en": "February 27, 2025", "kh": "២៧ កុម្ភៈ ២០២៥" },
        "news3-title": { "en": "General General of the CPP", "kh": "ឧត្តមសេនីយ៍នៃ CPP" }, // Assuming "General General" is a typo; adjusted accordingly
        "news3-desc": { "en": "Phnom Penh International University PPIU and General General of the CPP Has organized...", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងឧត្តមសេនីយ៍នៃ CPP បានរៀបចំជាមួយលោក សុខ ផុន អភិបាលខេត្តស្ទឹងត្រែង" },
        "news3-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // News Card 4
        "news4-date": { "en": "February 18, 2025", "kh": "១៨ កុម្ភៈ ២០២៥" },
        "news4-title": { "en": "Phnom Penh International University of Helds Sok Phone,", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញបានរៀបចំសុខ ផុន" }, // Assuming "Helds Sok Phone" is a typo or name; adjusted
        "news4-desc": { "en": "missionary studies the scholarships and sharing the opportunity...", "kh": "ការសិក្សាផ្នែកបេសកជនអំពីអាហារូបករណ៍ និងការចែករំលែកឱកាស..." },
        "news4-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // About PPIU Sections
        "about-ppiu-left-title": { "en": "About PPIU", "kh": "អំពី PPIU" },
        "about-ppiu-left-desc": { "en": "The university was renamed Phnom Penh International University - PPIU in 2006 by Sub-Decree No. 111 ANKr. BK dated October 24, 2006, of the Royal Government of Cambodia", "kh": "សាកលវិទ្យាល័យនេះត្រូវបានប្តូរឈ្មោះជា សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ក្នុងឆ្នាំ 2006 ដោយអនុក្រឹត្យ លេខ 111 អង្គ.បក ចុះថ្ងៃទី 24 ខែតុលា ឆ្នាំ 2006 របស់រាជរដ្ឋាភិបាលកម្ពុជា។" },
        "about-ppiu-left-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },
        "about-ppiu-right-title": { "en": "Professor", "kh": "សាស្រ្តាចារ្យ" },
        "about-ppiu-right-desc": { "en": "PPIU hires highly qualified and experienced faculty. Ninety percent of the faculty hold Ph.D.’s from American and other western universities and have extensive university-level teaching experience.", "kh": "PPIU ជាមហាវិទ្យាល័យដែលមានសមត្ថភាព និងបទពិសោធន៍ខ្ពស់។ កៅសិបភាគរយនៃមហាវិទ្យាល័យទទួលបានបណ្ឌិតពីសាកលវិទ្យាល័យអាមេរិក និងបស្ចិមប្រទេសផ្សេងទៀត និងមានបទពិសោធន៍បង្រៀនកម្រិតសាកលវិទ្យាល័យយ៉ាងទូលំទូលាយ។" },
        "about-ppiu-right-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },
        "view": { "en": "View More", "kh": "មើលបន្ថែម" },
        "see": { "en": "View More", "kh": "មើលបន្ថែម" },
        "saw": { "en": "View More", "kh": "មើលបន្ថែម" },

        // Dual Degree Partners and Subsidiaries
        "dual-degree-partners-title": { "en": "Dual Degree Partners", "kh": "ដៃគូសញ្ញាបត្រពីរ" },
        "our-subsidiaries-title": { "en": "Our Subsidiaries", "kh": "ក្រុមហ៊ុនបុត្រសម្ព័ន្ធរបស់យើង" },

        // UDHR Event Section
        "udhr-title": { "en": "Universal Declaration of Human Rights (UDHR)", "kh": "សេចក្តីប្រកាសជាសកលស្តីពីសិទ្ធិមនុស្ស (UDHR)" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 students from the Human Rights Course at the Faculty of Law and Economics of Phnom Penh International University (PPIU)", "kh": "📌 និស្សិតពីវគ្គសិទ្ធិមនុស្សនៅមហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ចនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)" },
        "event-info-date": { "en": "📅 Date: 11 Feb 2025", "kh": "📅 កាលបរិច្ឆេទ: ១១ កុម្ភៈ ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 5:30 PM - 7:00 PM", "kh": "⏰ ម៉ោង: ៥:៣០ ល្ងាច - ៧:០០ ល្ងាច" },
        "event-info-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-info-desc2": { "en": "Adopted by the UN General Assembly on December 10, 1948, the UDHR continues to serve as a crucial framework for promoting and protecting human dignity worldwide. This event provided an excellent opportunity for students to deepen their understanding of these vital principles.", "kh": "ត្រូវបានអនុម័តដោយមហាសន្និបាតអង្គការសហប្រជាជាតិនៅថ្ងៃទី ១០ ធ្នូ ១៩៤៨ UDHR នៅតែបន្តដើរតួជាក្របខណ្ឌដ៏សំខាន់សម្រាប់ការលើកកម្ពស់ និងការពារសេចក្តីថ្លៃថ្នូរមនុស្សទូទាំងពិភពលោក។ ព្រឹត្តិការណ៍នេះផ្តល់ឱកាសដ៏ល្អសម្រាប់និស្សិតដើម្បីស្វែងយល់កាន់តែស៊ីជម្រៅអំពីគោលការណ៍សំខាន់ៗទាំងនេះ។" },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // Welcome Back Event Section
        "welcome-back-title": { "en": " welcome back to class!!", "kh": "សូមស្វាគមន៍ត្រឡប់មកថ្នាក់រៀនវិញ!!" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 Open exclusively to PPIU students", "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU" },
        "event-info-date": { "en": "📅 Date: 10 Dec 2022", "kh": "📅 កាលបរិច្ឆេទ: ១០ ធ្នូ ២០២២" },
        "event-info-time": { "en": "⏰ Time: 1:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ១:០០ រសល្ងាច - ៥:០០ ល្ងាច" },
        "event-info-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-info-desc2": { "en": "The management of the Phnom Penh International University (PPIU) is honored to be welcomed HE Carpent Naron and the organization of the high school.", "kh": "ថ្នាក់ដឹកនាំនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) មានកិត្តិយសដែលបានស្វាគមន៍ឯកឧត្តម កាប៉ែន ណារ៉ុន និងអង្គការនៃវិទ្យាល័យ។" },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // New event translations
        "event-title": { "en": "PPIU students participate in the Cambodia-Thai Youth", "kh": "និស្សិត PPIU ចូលរួមក្នុងយុវជនកម្ពុជា-ថៃ" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានព្រឹត្តិការណ៍:" },
        "event-desc": { "en": "📌 PPIU students participate in the Cambodia-Thai Youth", "kh": "📌 និស្សិត PPIU ចូលរួមក្នុងយុវជនកម្ពុជា-ថៃ" },
        "event-date": { "en": "📅 Date: 08 March 2025", "kh": "📅 កាលបរិច្ឆេទ: ០៨ មីនា ២០២៥" },
        "event-time": { "en": "⏰ Time: 2:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ២:០០ រសល្ងាច - ៥:ល្ងាច" },
        "event-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-details": { "en": "PPIU student activities to celebrate the Cambodia-Thailand friendship football event at the National Olympic Stadium", "kh": "សកម្មភាពនិស្សិត PPIU ដើម្បីអបអរព្រឹត្តិការណ៍បាល់ទាត់មិត្តភាពកម្ពុជា-ថៃ នៅកីឡដ្ឋានជាតិអូឡាំពិក" },
        "share-text": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },
        
        // Scholarship Event Section
        "scholarship-title": { "en": "Share scholarship opportunities with your children as well.", "kh": "ចែករំលែកឱកាសអាហារូបករណ៍ជាមួយកូនៗរបស់អ្នកផងដែរ។" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 well as share scholarship opportunities with the students.", "kh": "📌 ព្រមទាំងចែករំលែកឱកាសអាហារូបករណ៍ជាមួយនិស្សិត។" },
        "event-info-date": { "en": "📅 Date: 21 February 2025", "kh": "📅 កាលបរិច្ឆេទ: ២១ កុម្ភៈ ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 2:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event-info-location": { "en": "📍 Location: Bunrany High School, Hun Sen Speu", "kh": "📍 ទីតាំង: វិទ្យាល័យប៊ុនរ៉ានី ហ៊ុនសែន ស្ពឺ" },
        "event-info-desc2": { "en": "The management of Phnom Penh International University shared their experiences in studying and choosing academic majors with students at Bunrany, Hun Sen, Speu and Bos Knoor High School and encourage the students to continue their higher education after completing secondary school, as well as share scholarship opportunities with the students. Wishing the students to pass the secondary school exam in the future. 🙏🙏🙏", "kh": "ថ្នាក់ដឹកនាំនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញបានចែករំលែកបទពិសោធន៍ក្នុងការសិក្សា និងការជ្រើសរើសជំនាញសិក្សាជាមួយនិស្សិតនៅវិទ្យាល័យប៊ុនរ៉ានី ហ៊ុនសែន ស្ពឺ និងបុស្តិ៍ខ្នុរនិងលើកទឹកចិត្តឱ្យនិស្សិតបន្តការអប់រំឧត្តមសិក្សាបន្ទាប់ពីបញ្ចប់ថ្នាក់មធ្យមសិក្សា ព្រមទាំងចែករំលែកឱកាសអាហារូបករណ៍ជាមួយនិស្សិត។ សូមជូនពរឱ្យនិស្សិតប្រឡងជាប់មធ្យមសិក្សានាពេលអនាគត។ 🙏🙏🙏" },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // New Enrollment Event Section
        "new-enrollment-title": { "en": "New Enrollment!", "kh": "ការចុះឈ្មោះថ្មី!" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 Open exclusively to PPIU students", "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU" },
        "event-info-date": { "en": "📅 Date: 05 May 2025", "kh": "📅 កាលបរិច្ឆេទ: ០៥ ឧសភា ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 2:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event-info-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-info-desc2": { "en": "For more information, please visit the Information Office on the 5th floor of Phnom Penh International University (In front of Bak Touk High School), or you can contact us directly through Telegram PPIU: 071 333 6777 Facebook Page: Phnom Penh International University (official).", "kh": "សម្រាប់ព័ត៌មានបន្ថែម សូមទៅកាន់ការិយាល័យព័ត៌មាននៅជាន់ទី៥ នៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (នៅមុខវិទ្យាល័យបាក់ទូក) ឬអ្នកអាចទាក់ទងមកយើងដោយផ្ទាល់តាមរយៈ Telegram PPIU: 071 333 6777 ទំព័រហ្វេសប៊ុក: សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (ផ្លូវការ)។" },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // Postgraduate Activities Event Section
        "postgraduate-activities-title": { "en": "Postgraduate school activities", "kh": "សកម្មភាពសាលាក្រោយឧត្តមសិក្សា" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 Open exclusively to PPIU students", "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU" },
        "event-info-date": { "en": "📅 Date: 15 March 2025", "kh": "📅 កាលបរិច្ឆេទ: ១៥ មីនា ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 2:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event-info-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-info-desc2": { "en": "Postgraduate School Activities organized entrance exams for postgraduate students of Phnom Penh International University (PPIU).", "kh": "សកម្មភាពសាលាក្រោយឧត្តមសិក្សាបានរៀបចំការប្រឡងចូលរៀនសម្រាប់និស្សិតក្រោយឧត្តមសិក្សានៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)។" },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // CPP Event Section
        "cpp-event-title": { "en": "Cambodia in charge of the General Department of CPP..", "kh": "កម្ពុជាទទួលខុសត្រូវលើនាយកដ្ឋានទូទៅនៃ CPP.." },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 Phnom Penh International University PPIU and General General of the CPP", "kh": "📌 សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងនាយកដ្ឋានទូទៅនៃ CPP" },
        "event-info-date": { "en": "📅 Date: 27 February 2025", "kh": "📅 កាលបរិច្ឆេទ: ២៧ កុម្ភៈ ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 2:00 PM - 5:00 PM", "kh": "⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event-info-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event-info-desc2": { 
            "en": "Phnom Penh International University PPIU and General General of the CPP Has organized the \"Musting Program of Knowledge of the user's rights and benefits to university students\" aim to build a CEO of Cambodia in Cambodia in charge of the General Department of CPP.. High representative of Lok Chumteav Chamber, Minister of Commerce, held in Phnom Penh International University. Seminar on consumer protection laws and mechanisms to file a complaint with the General Department of General C.. And understanding the rights and protection in both online and non-online markets as well as the reporting steps of reporting to obtain solutions and requires the permissions you have.", 
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងនាយកដ្ឋានទូទៅនៃ CPP បានរៀបចំ \"កម្មវិធីចំណេះដឹងស្តីពីសិទ្ធិ និងអត្ថប្រយោជន៍របស់អ្នកប្រើប្រាស់សម្រាប់និស្សិតសាកលវិទ្យាល័យ\" ដែលមានគោលបំណងបង្កើតនាយកប្រតិបត្តិនៃកម្ពុជានៅកម្ពុជាដែលទទួលខុសត្រូវលើនាយកដ្ឋានទូទៅនៃ CPP.. តំណាងជាន់ខ្ពស់នៃអង្គជំនុំជម្រះលោកជំទាវ រដ្ឋមន្ត្រីក្រសួងពាណិជ្ជកម្ម បានប្រារព្ធនៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ។ សិក្ខាសាលាស្តីពីច្បាប់ការពារអ្នកប្រើប្រាស់ និងយន្តការដាក់ពាក្យបណ្តឹងទៅនាយកដ្ឋានទូទៅនៃ CPP.. និងការយល់ដឹងអំពីសិទ្ធិ និងការការពារទាំងនៅក្នុងទីផ្សារអនឡាញ និងមិនមែនអនឡាញ ព្រមទាំងជំហាននៃការរាយការណ៍ដើម្បីទទួលបានដំណោះស្រាយ និងតម្រូវឱ្យមានការអនុញ្ញាតដែលអ្នកមាន។" 
        },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

        // Exam Wishes Event Section
        "exam-wishes-title": { "en": "Wishing you the upcoming high school passage exams", "kh": "សូមជូនពរឱ្យអ្នកប្រឡងជាប់ការប្រឡងឆ្លងថ្នាក់វិទ្យាល័យនាពេលខាងមុខ" },
        "event-info-title": { "en": "Event Information:", "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:" },
        "event-info-desc1": { "en": "📌 Phnom Penh International University PPIU and General General of the CPP", "kh": "📌 សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងនាយកដ្ឋានទូទៅនៃ CPP" },
        "event-info-date": { "en": "📅 Date: 18 February 2025", "kh": "📅 កាលបរិច្ឆេទ: ១៨ កុម្ភៈ ២០២៥" },
        "event-info-time": { "en": "⏰ Time: 8:00 AM - 11:00 AM", "kh": "⏰ ម៉ោង: ៨:ល្ងាច - ១១:ល្ងាច" },
        "event-info-location": { "en": "📍 Stung Treng,", "kh": "📍 ស្ទឹងត្រែង," },
        "event-info-desc2": { 
            "en": "Phnom Penh International University of Helds Sok Phone, the Governor of Stung Treng, and the missionary studies the scholarships and sharing the opportunity to you. Wishing you the upcoming high school passage exams.", 
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញបានរៀបចំជាមួយលោក សុខ ផុន អភិបាលខេត្តស្ទឹងត្រែង និងក្រុមអ្នកស្រាវជ្រាវផ្នែកអាហារូបករណ៍ដើម្បីចែករំលែកឱកាសជូនអ្នក។ សូមជូនពរឱ្យអ្នកប្រឡងជាប់ការប្រឡងឆ្លងថ្នាក់វិទ្យាល័យនាពេលខាងមុខ។" 
        },
        "share-event-title": { "en": "Share this Event", "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ" },

       //history

       "header-title": {
            "en": "History",
            "kh": "ប្រវត្តិ"
        },
        "university-history-title": {
            "en": "University History",
            "kh": "ប្រវត្តិសាកលវិទ្យាល័យ"
        },
        "history-text-1": {
            "en": "Phnom Penh International University (PPIU) was established in 2002 as \"ASEAN University\" under the initiative of the Rector, Mrs. Tep Kolap, a Cambodian scholar with high dedication, determination, and vision for the higher education sector of the future generations of Cambodia. The Rector devoted her physical and mental strength, honor, and personal wealth to build and expand the university, growing from only 1,050 students to 7,000 students and from renting physical premises to constructing well-equipped infrastructure with a good learning environment for students.",
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ត្រូវបានបង្កើតឡើងនៅឆ្នាំ ២០០២ ក្រោមឈ្មោះ \"សាកលវិទ្យាល័យអាស៊ាន\" តាមគំនិតផ្តួចផ្តើមរបស់សាកលវិទ្យាធិការ លោកស្រី ទេព កុលាប ដែលជាអ្នកប្រាជ្ញខ្មែរមួយរូបដែលមានការលះបង់ខ្ពស់ ការតាំងចិត្ត និងចក្ខុវិស័យសម្រាប់វិស័យឧត្តមសិក្សារបស់មនុស្សជំនាន់ក្រោយនៃប្រទេសកម្ពុជា។ សាកលវិទ្យាធិការបានលះបង់កម្លាំងកាយចិត្ត កិត្តិយស និងទ្រព្យសម្បត្តិផ្ទាល់ខ្លួនដើម្បីសាងសង់ និងពង្រីកសាកលវិទ្យាល័យនេះ ដោយបានរីកចម្រើនពីនិស្សិតត្រឹម ១,០៥០ នាក់ ដល់ ៧,០០០ នាក់ និងពីការជួលទីតាំងរូបវន្ត ទៅជាការសាងសង់ហេដ្ឋារចនាសម្ព័ន្ធដែលបំពាក់បរិក្ខារល្អ ជាមួយបរិយាកាសសិក្សាដ៏ល្អសម្រាប់និស្សិត។"
        },
        "history-text-2": {
            "en": "The university was renamed \"Phnom Penh International University - PPIU\" in 2006 by Sub-Decree No. 111 ANKr. BK dated October 24, 2006, of the Royal Government of Cambodia and under the supervision of the Ministry of Education, Youth, and Sports.",
            "kh": "សាកលវិទ្យាល័យនេះត្រូវបានប្តូរឈ្មោះទៅជា \"សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ - PPIU\" នៅឆ្នាំ ២០០៦ តាមអនុក្រឹត្យលេខ ១១១ អនក្រ.បក ចុះថ្ងៃទី ២៤ ខែតុលា ឆ្នាំ ២០០៦ របស់រាជរដ្ឋាភិបាលកម្ពុជា និងស្ថិតក្រោមការត្រួតពិនិត្យរបស់ក្រសួងអប់រំ យុវជន និងកីឡា។"
        },
        "vision-title": {
            "en": "I. Vision",
            "kh": "១. ចក្ខុវិស័យ"
        },
        "vision-text": {
            "en": "Phnom Penh International University adheres to national and international educational quality standards by focusing on digital education and research as its core principles.",
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញប្រកាន់ខ្ជាប់នូវស្តង់ដារគុណភាពអប់រំជាតិ និងអន្តរជាតិ ដោយផ្តោតលើការអប់រំឌីជីថល និងការស្រាវជ្រាវជាគោលការណ៍ស្នូល។"
        },
        "mission-title": {
            "en": "II. Mission",
            "kh": "២. បេសកកម្ម"
        },
        "mission-text": {
            "en": "Phnom Penh International University is committed to providing knowledge and skills through the integration of digital technology and research to contribute to the development of human resources with high professionalism and ethics, meeting the demands of the labor market.",
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញប្តេជ្ញាផ្តល់ចំណេះដឹង និងជំនាញតាមរយៈការបញ្ចូលបច្ចេកវិទ្យាឌីជីថល និងការស្រាវជ្រាវ ដើម្បីរួមចំណែកក្នុងការអភិវឌ្ឍធនធានមនុស្សដែលមានវិជ្ជាជីវៈខ្ពស់ និងសីលធម៌ ដើម្បីបំពេញតម្រូវការទីផ្សារការងារ។"
        },
        "values-title": {
            "en": "III. Values - IDT",
            "kh": "៣. តម្លៃ - IDT"
        },
        "values-text": {
            "en": "Phnom Penh International University upholds integrity, trust, dignity, and leadership.",
            "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញរក្សាភាពស្មោះត្រង់ ទំនុកចិត្ត សេចក្តីថ្លៃថ្នូរ និងភាពជាអ្នកដឹកនាំ។"
        },
        "goals-title": {
            "en": "* Goals (What we must achieve to be successful?)",
            "kh": "* គោលដៅ (តើយើងត្រូវសម្រេចអ្វីខ្លះដើម្បីជោគជ័យ?)"
        },
        "goals-intro": {
            "en": "To achieve the vision and mission stated above, PPIU will:",
            "kh": "ដើម្បីសម្រេចចក្ខុវិស័យ និងបេសកកម្មដែលបានរៀបរាប់ខាងលើ PPIU នឹង៖"
        },
        "goal-1": {
            "en": "1. Update the curriculum by integrating digital technology and research.",
            "kh": "១. ធ្វើបច្ចុប្បន្នភាពកម្មវិធីសិក្សាដោយបញ្ចូលបច្ចេកវិទ្យាឌីជីថល និងការស្រាវជ្រាវ។"
        },
        "goal-2": {
            "en": "2. Strengthen relationships with institutions, enterprises, national and international organizations, and educational institutions.",
            "kh": "២. ពង្រឹងទំនាក់ទំនងជាមួយស្ថាប័ន សហគ្រាស អង្គការជាតិ និងអន្តរជាតិ និងគ្រឹះស្ថានអប់រំ។"
        },
        "goal-3": {
            "en": "3. Enhance the capacity of academic and non-academic staff and students, including the use of digital technology.",
            "kh": "៣. ពង្រឹងសមត្ថភាពបុគ្គលិកសិក្សា និងមិនមែនសិក្សា និងនិស្សិត រួមទាំងការប្រើប្រាស់បច្ចេកវិទ្យាឌីជីថល។"
        },
        "goal-4": {
            "en": "4. Maintain and promote a teamwork culture.",
            "kh": "៤. រក្សា និងលើកកម្ពស់វប្បធម៌ការងារជាក្រុម។"
        },
        "goal-5": {
            "en": "5. Continue promoting a research culture and quality assurance.",
            "kh": "៥. បន្តលើកកម្ពស់វប្បធម៌ស្រាវជ្រាវ និងការធានាគុណភាព។"
        },
        "goal-6": {
            "en": "6. Improve information technology services.",
            "kh": "៦. ធ្វើឱ្យប្រសើរឡើងនូវសេវាបច្ចេកវិទ្យាព័ត៌មាន។"
        },
        "goal-7": {
            "en": "7. Regularly enhance student support services and administration.",
            "kh": "៧. ពង្រឹងសេវាគាំទ្រនិស្សិត និងរដ្ឋបាលជាប្រចាំ។"
        },
        "goal-8": {
            "en": "8. Strengthen good governance and infrastructure.",
            "kh": "៨. ពង្រឹងអភិបាលកិច្ចល្អ និងហេដ្ឋារចនាសម្ព័ន្ធ។"
        },
        "goal-9": {
            "en": "9. Continue to uphold the university’s reputation.",
            "kh": "៩. បន្តរក្សាកេរ្តិ៍ឈ្មោះរបស់សាកលវិទ្យាល័យ។"
        },
        "goals-source": {
            "en": "Extracted from the PPIU Strategic Plan 2020-2025",
            "kh": "ដកស្រង់ចេញពីផែនការយុទ្ធសាស្ត្រ PPIU ២០២០-២០២៥"
        },


        // Vision, Mission, and Values Section
        "vision-mission-header": { "en": "Vision, Mission, and Values", "kh": "ចក្ខុវិស័យ បេសកកម្ម និងតម្លៃ" },
        "vision-title": { "en": "Vision", "kh": "ចក្ខុវិស័យ" },
        "vision-text": { 
            "en": "American University of Phnom Penh (PPIU) will be a leading center of academic excellence in Cambodia and in Asia. Recognized as thought leaders, we will be at the forefront of innovation and the partner of choice for industry.", 
            "kh": "សាកលវិទ្យាល័យអាមេរិកនៃភ្នំពេញ (PPIU) នឹងក្លាយជាមជ្ឈមណ្ឌលឈានមុខនៃឧត្តមភាពសិក្សានៅកម្ពុជា និងនៅអាស៊ី។ ត្រូវបានទទួលស្គាល់ថាជាអ្នកដឹកនាំគំនិត យើងនឹងនៅជួរមុខនៃការច្នៃប្រឌិត និងជាដៃគូជម្រើសសម្រាប់ឧស្សាហកម្ម។" 
        },
        "mission-title": { "en": "Mission", "kh": "បេសកកម្ម" },
        "mission-text": { 
            "en": "PPIU is a private English language higher-education institution in Cambodia, offering high-quality American-style education that is grounded in the latest teaching & learning theories and the culture of Cambodia and Asia. The university fosters socially responsible behavior, lifelong learning, and academic and professional excellence, producing critical thinkers, innovators, and ethical leaders who will make significant contributions to the world.", 
            "kh": "PPIU ជាស្ថាប័នឧត្តមសិក្សាឯកជនភាសាអង់គ្លេសនៅកម្ពុជា ដែលផ្តល់ការអប់រំបែបអាមេរិកដែលមានគុណភាពខ្ពស់ ដោយផ្អែកលើទ្រឹស្តីបង្រៀន និងរៀនសូត្រចុងក្រោយបំផុត និងវប្បធម៌នៃកម្ពុជា និងអាស៊ី។ សាកលវិទ្យាល័យជំរុញឥរិយាបថទទួលខុសត្រូវសង្គម ការរៀនសូត្រពេញមួយជីវិត និងឧត្តមភាពផ្នែកសិក្សា និងវិជ្ជាជីវៈ ដោយបង្កើតអ្នកគិតបែបរិះគន់ អ្នកបង្កើតថ្មី និងអ្នកដឹកនាំប្រកបដោយសីលធម៌ដែលនឹងធ្វើការរួមចំណែកយ៉ាងសំខាន់ដល់ពិភពលោក។" 
        },
        "values-title": { "en": "Values", "kh": "តម្លៃ" },
        "values-text": { 
            "en": "To achieve its vision and fulfill its mission, PPIU values the following:", 
            "kh": "ដើម្បីសម្រេចចក្ខុវិស័យ និងបំពេញបេសកកម្មរបស់ខ្លួន PPIU ឱ្យតម្លៃដូចខាងក្រោម:" 
        },
        "value-1": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Academic Freedom</strong> - PPIU upholds the spirit of free and critical thought...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>សេរីភាពសិក្សា</strong> - PPIU គាំទ្រស្មារតីនៃការគិតសេរី និងរិះគន់..." 
        },
        "value-2": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Continuous Improvement and Accountability</strong> - PPIU is committed to continuous...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ការកែលម្អជាបន្ត និងទំនួលខុសត្រូវ</strong> - PPIU ប្តេជ្ញាចិត្តក្នុងការបន្ត..." 
        },
        "value-3": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Diversity, Equity, and Cultural Heritage</strong> - PPIU recognizes the contributions...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ភាពចម្រុះ សមធម៌ និងបេតិកភណ្ឌវប្បធម៌</strong> - PPIU ទទួលស្គាល់ការរួមចំណែក..." 
        },
        "value-4": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Excellence</strong> - PPIU is committed to the highest standards...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ឧត្តមភាព</strong> - PPIU ប្តេជ្ញាចិត្តចំពោះស្តង់ដារខ្ពស់បំផុត..." 
        },
        "value-5": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Leadership and Integrity</strong> - PPIU upholds the highest professional and ethical standards...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ភាពជាអ្នកដឹកនាំ និងសុចរិតភាព</strong> - PPIU គាំទ្រស្តង់ដារវិជ្ជាជីវៈ និងសីលធម៌ខ្ពស់បំផុត..." 
        },
        "value-6": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Lifelong Learning</strong> - PPIU instills the value of lifelong learning...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ការរៀនសូត្រពេញមួយជីវិត</strong> - PPIU បញ្ចូលតម្លៃនៃការរៀនសូត្រពេញមួយជីវិត..." 
        },
        "value-7": { 
            "en": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>Social Responsibility</strong> - PPIU prepares students to be responsible citizens...", 
            "kh": "<i class=\"fa-solid fa-check-circle text-danger\"></i> <strong>ទំនួលខុសត្រូវសង្គម</strong> - PPIU រៀបចំនិស្សិតឱ្យក្លាយជាពលរដ្ឋទទួលខុសត្រូវ..." 
        },

        // Career Opportunities Section
        "career-header": { "en": "Career Opportunities", "kh": "ឱកាសការងារ" },
        "career-intro": { 
            "en": "It is the mission of the human resources department to develop, implement, and support processes that add value to PPIU and its employees, leading to improved employee welfare, empowerment, growth, and retention, while remaining committed to PPIU key business drivers, its management, and prosperity for its students, employees, and community partners.", 
            "kh": "វាជាបេសកកម្មរបស់នាយកដ្ឋានធនធានមនុស្សក្នុងការអភិវឌ្ឍ អនុវត្ត និងគាំទ្រដំណើរការដែលបន្ថែមតម្លៃដល់ PPIU និងបុគ្គលិករបស់ខ្លួន ដែលនាំទៅដល់ការកែលម្អសុខុមាលភាពបុគ្គលិក ការផ្តល់អំណាច ការរីកចម្រើន និងការរក្សាទុក ខណៈពេលដែលនៅតែប្តេជ្ញាចំពោះកត្តាជំរុញអាជីវកម្មសំខាន់ៗរបស់ PPIU ការគ្រប់គ្រងរបស់វា និងភាពរុងរឿងសម្រាប់និស្សិត បុគ្គលិក និងដៃគូសហគមន៍របស់ខ្លួន។" 
        },
        "about-ppiu-title": { "en": "About PPIU", "kh": "អំពី PPIU" },
        "about-ppiu-text1": { 
            "en": "The American University of Phnom Penh is a private university with a non-profit mission, founded using the supportive guidance and initiative of experienced American educators. Our founders aspire to provide high-quality education to every student in Cambodia and across the Asian region from its operation within the cultural heart of Southeast Asia.", 
            "kh": "សាកលវិទ្យាល័យអាមេរិកនៃភ្នំពេញគឺជាសាកលវិទ្យាល័យឯកជនដែលមានបេសកកម្មមិនស្វែងរកប្រាក់ចំណេញ ដែលត្រូវបានបង្កើតឡើងដោយប្រើការណែនាំ និងគំនិតផ្តួចផ្តើមគាំទ្រពីអ្នកអប់រំអាមេរិកដែលមានបទពិសោធន៍។ ស្ថាបនិករបស់យើងប្រាថ្នាចង់ផ្តល់ការអប់រំដែលមានគុណភាពខ្ពស់ដល់និស្សិតគ្រប់រូបនៅកម្ពុជា និងទូទាំងតំបន់អាស៊ី ពីប្រតិបត្តិការរបស់ខ្លួននៅក្នុងបេះដូងវប្បធម៌នៃអាស៊ីអាគ្នេយ៍។" 
        },
        "about-ppiu-text2": { 
            "en": "In 2021, PPIU has continued its rapid growth. There are now seven undergraduate programs and an MBA program. We are also proud to be the only university in Cambodia to provide accredited international degrees through our dual-degree programs enabled by the generous efforts of our partner institutions: the University of Arizona and Fort Hays State University.", 
            "kh": "នៅឆ្នាំ ២០២១ PPIU បានបន្តការរីកចម្រើនយ៉ាងឆាប់រហ័ស។ ឥឡូវនេះមានកម្មវិធីថ្នាក់បរិញ្ញាបត្រចំនួនប្រាំពីរ និងកម្មវិធី MBA មួយ។ យើងក៏មានមោទនភាពដែលជាសាកលវិទ្យាល័យតែមួយគត់នៅកម្ពុជាដែលផ្តល់សញ្ញាបត្រអន្តរជាតិដែលទទួលស្គាល់តាមរយៈកម្មវិធីសញ្ញាបត្រពីររបស់យើង ដែលអាចធ្វើទៅបានដោយការខិតខំប្រឹងប្រែងដ៏សប្បុរសរបស់ស្ថាប័នដៃគូរបស់យើងគឺ សាកលវិទ្យាល័យអារីហ្សូណា និងសាកលវិទ្យាល័យ Fort Hays State។" 
        },
        "working-ppiu-title": { "en": "Working at PPIU", "kh": "ធ្វើការនៅ PPIU" },
        "working-ppiu-text1": { 
            "en": "PPIU offers a unique working environment with scholars from Cambodia and overseas alike. Our remuneration scheme has attracted many experienced faculty and staff members from the U.S., Canada, the U.K., and various other global regions. Our students' growth is our main motivation.", 
            "kh": "PPIU ផ្តល់បរិយាកាសការងារដ៏ពិសេសមួយជាមួយអ្នកប្រាជ្ញមកពីកម្ពុជា និងក្រៅប្រទេសដូចគ្នា។ គម្រោងប្រាក់ឈ្នួលរបស់យើងបានទាក់ទាញសាស្ត្រាចារ្យ និងបុគ្គលិកដែលមានបទពិសោធន៍ជាច្រើនមកពីសហរដ្ឋអាមេរិក កាណាដា ចក្រភពអង់គ្លេស និងតំបន់ផ្សេងៗទៀតនៅទូទាំងពិភពលោក។ ការរីកចម្រើនរបស់និស្សិតគឺជាកម្លាំងចិត្តដ៏សំខាន់របស់យើង។" 
        },
        "working-ppiu-text2": { 
            "en": "In 2017, we moved into our new state-of-the-art campus located in northern Phnom Penh, the robust capital of Cambodia. The city, as well as Cambodia in general, is not only known for its rich history and culture but also for its friendly people.", 
            "kh": "នៅឆ្នាំ ២០១៧ យើងបានផ្លាស់ទៅកាន់បរិវេណសាលាថ្មីទំនើបបំផុតរបស់យើងដែលមានទីតាំងនៅភាគខាងជើងនៃភ្នំពេញ ដែលជារដ្ឋធានីដ៏រឹងមាំរបស់កម្ពុជា។ ទីក្រុងនេះ ក៏ដូចជាប្រទេសកម្ពុជាទាំងមូល មិនត្រឹមតែត្រូវបានគេស្គាល់ដោយសារប្រវត្តិសាស្ត្រ និងវប្បធម៌ដ៏សម្បូរបែបរបស់វាប៉ុណ្ណោះទេ ប៉ុន្តែក៏ដោយសារប្រជាជនដែលរួសរាយរាក់ទាក់ផងដែរ។" 
        },
        "working-ppiu-text3": { 
            "en": "Whether you are a young scholar seeking to build your academic career, a veteran educator looking for ways to contribute, or anything in between, PPIU will provide a supportive environment where you can succeed while contributing to the human resources development of Cambodia. Furthermore, PPIU offers a competitive benefits package which includes round-trip airfare (conditions apply), a free visa, free work permit, and a subsidized international healthcare plan.", 
            "kh": "មិនថាអ្នកជាអ្នកប្រាជ្ញវ័យក្មេងដែលកំពុងស្វែងរកការកសាងអាជីពសិក្សារបស់អ្នក អ្នកអប់រំជើងចាស់ដែលកំពុងស្វែងរកវិធីដើម្បីរួមចំណែក ឬអ្វីផ្សេងនៅចន្លោះនោះទេ PPIU នឹងផ្តល់បរិយាកាសគាំទ្រដែលអ្នកអាចជោគជ័យ ខណៈពេលដែលរួមចំណែកដល់ការអភិវឌ្ឍធនធានមនុស្សរបស់កម្ពុជា។ លើសពីនេះ PPIU ផ្តល់ជូននូវកញ្ចប់អត្ថប្រយោជន៍ប្រកួតប្រជែង ដែលរួមមានសំបុត្រយន្តហោះទៅមក (មានលក្ខខណ្ឌ) ទិដ្ឋាការឥតគិតថ្លៃ ប័ណ្ណការងារឥតគិតថ្លៃ និងផែនការថែទាំសុខភាពអន្តរជាតិដែលមានការឧបត្ថម្ភធន។" 
        },

        // Alumni Section
        "alumni-header": { "en": "Alumni", "kh": "អតីតនិស្សិត" },
        "alumni-card1-title": { "en": "Alumni Student Pro 12", "kh": "អតីតនិស្សិត ជំនាន់ទី ១២" },
        "alumni-card1-date": { "en": "Post Date: 27-Jun-2017", "kh": "កាលបរិច្ឆេទបង្ហោះ: ២៧-មិថុនា-២០១៧" },
        "alumni-card1-desc": { "en": "Graduation ceremony for students studying at PPIU", "kh": "ពិធីបញ្ចប់ការសិក្សាសម្រាប់និស្សិតដែលសិក្សានៅ PPIU" },
        "alumni-card2-title": { "en": "Alumni Student Pro 11", "kh": "អតីតនិស្សិត ជំនាន់ទី ១១" },
        "alumni-card2-date": { "en": "Post Date: 27-Jun-2017", "kh": "កាលបរិច្ឆេទបង្ហោះ: ២៧-មិថុនា-២០១៧" },
        "alumni-card2-desc": { "en": "Graduation ceremony for students studying at PPIU", "kh": "ពិធីបញ្ចប់ការសិក្សាសម្រាប់និស្សិតដែលសិក្សានៅ PPIU" },
        "alumni-card3-title": { "en": "Alumni Student Pro 10", "kh": "អតីតនិស្សិត ជំនាន់ទី ១០" },
        "alumni-card3-date": { "en": "Post Date: 27-Apr-2017", "kh": "កាលបរិច្ឆេទបង្ហោះ: ២៧-មេសា-២០១៧" },
        "alumni-card3-desc": { "en": "Graduation ceremony for students studying at PPIU", "kh": "ពិធីបញ្ចប់ការសិក្សាសម្រាប់និស្សិតដែលសិក្សានៅ PPIU" },
        "alumni-card4-title": { "en": "Alumni Student Pro 10", "kh": "អតីតនិស្សិត ជំនាន់ទី ១០" },
        "alumni-card4-date": { "en": "Post Date: 27-Apr-2017", "kh": "កាលបរិច្ឆេទបង្ហោះ: ២៧-មេសា-២០១៧" },
        "alumni-card4-desc": { "en": "Graduation ceremony for students studying at PPIU", "kh": "ពិធីបញ្ចប់ការសិក្សាសម្រាប់និស្សិតដែលសិក្សានៅ PPIU" },
    
        // Degree Section
        "degree-header": { "en": "Degree", "kh": "សញ្ញាបត្រ" },
        "study-levels-title": { "en": "Study Levels:", "kh": "កម្រិតសិក្សា:" },
        "study-levels-intro": { 
            "en": "Currently, Phnom Penh International University (PPU) offers academic services to students of all levels according to the following study programs:", 
            "kh": "បច្ចុប្បន្ន សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPU) ផ្តល់សេវាកម្មសិក្សាដល់និស្សិតគ្រប់កម្រិតទាំងអស់តាមកម្មវិធីសិក្សាដូចខាងក្រោម:" 
        },
        "study-levels-short-term": { "en": "- Short-term training programs", "kh": "- កម្មវិធីបណ្តុះបណ្តាលរយៈពេលខ្លី" },
        "study-levels-associate": { "en": "- Associate degree programs (Year 1 and Year 2)", "kh": "- កម្មវិធីសញ្ញាបត្ររង (ឆ្នាំទី ១ និងឆ្នាំទី ២)" },
        "study-levels-bachelor": { "en": "- Bachelor's degree programs (Year 1, Year 2, Year 3, and Year 4)", "kh": "- កម្មវិធីសញ្ញាបត្របរិញ្ញាបត្រ (ឆ្នាំទី ១ ឆ្នាំទី ២ ឆ្នាំទី ៣ និងឆ្នាំទី ៤)" },
        "study-levels-master": { "en": "- Master's degree programs (Year 1 and Year 2)", "kh": "- កម្មវិធីសញ្ញាបត្រអនុបណ្ឌិត (ឆ្នាំទី ១ និងឆ្នាំទី ២)" },
        "study-levels-doctoral": { "en": "- Doctoral degree programs", "kh": "- កម្មវិធីសញ្ញាបត្របណ្ឌិត" },
        "faculty-intro": { 
            "en": "Students can choose their preferred major from the following faculties:", 
            "kh": "និស្សិតអាចជ្រើសរើសជំនាញដែលពួកគេចូលចិត្តពីមហាវិទ្យាល័យដូចខាងក្រោម:" 
        },
        "faculty-business-title": { "en": "- Faculty of Business and Tourism:", "kh": "- មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍:" },
        "faculty-business-accounting": { "en": "~ Accounting", "kh": "~ គណនេយ្យ" },
        "faculty-business-management": { "en": "~ Management", "kh": "~ គ្រប់គ្រង" },
        "faculty-business-marketing": { "en": "~ Marketing", "kh": "~ ទីផ្សារ" },
        "faculty-business-tourismm": { "en": "~ Hotel and Tourism Management", "kh": "~ គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
        "faculty-business-logistics": { "en": "~ Logistics Management", "kh": "~ គ្រប់គ្រងភស្តុភារ" },
        "faculty-law-title": { "en": "- Faculty of Law and Economics:", "kh": "- មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច:" },
        "faculty-law-finance": { "en": "~ Finance and Banking", "kh": "~ ហិរញ្ញវត្ថុ និងធនាគារ" },
        "faculty-law-economicss": { "en": "~ Economic Development", "kh": "~ ការអភិវឌ្ឍសេដ្ឋកិច្ច" },
        "faculty-law-public-admin": { "en": "~ Public Administration", "kh": "~ រដ្ឋបាលសាធារណៈ" },
        "faculty-law-law": { "en": "~ Law", "kh": "~ ច្បាប់" },
        "faculty-law-intl-relations": { "en": "~ International Relations", "kh": "~ ទំនាក់ទំនងអន្តរជាតិ" },
        "faculty-science-title": { "en": "- Faculty of Science and Information Technology:", "kh": "- មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន:" },
        "faculty-science-computer": { "en": "~ Computer Science", "kh": "~ វិទ្យាសាស្ត្រកុំព្យូទ័រ" },
        "faculty-science-info-systems": { "en": "~ Information Systems Management", "kh": "~ គ្រប់គ្រងប្រព័ន្ធព័ត៌មាន" },
        "faculty-science-telecom": { "en": "~ Telecommunications Engineering", "kh": "~ វិស្វកម្មទូរគមនាគមន៍" },
        "faculty-education-title": { "en": "- Faculty of Education:", "kh": "- មហាវិទ្យាល័យអប់រំ:" },
        "faculty-education-english-edu": { "en": "~ English for Education", "kh": "~ ភាសាអង់គ្លេសសម្រាប់អប់រំ" },
        "faculty-education-english-bus": { "en": "~ English for Business", "kh": "~ ភាសាអង់គ្លេសសម្រាប់ធុរកិច្ច" },
        "regulations-intro": { 
            "en": "Additionally, students must comply with the university’s academic regulations, including the following:", 
            "kh": "លើសពីនេះ និស្សិតត្រូវគោរពតាមបទបញ្ញត្តិសិក្សារបស់សាកលវិទ្យាល័យ រួមមានដូចខាងក្រោម:" 
        },
        "regulations-attendance": { 
            "en": "- Students are eligible to take semester exams only if they have attended at least 75% of the total class hours for each subject:", 
            "kh": "- និស្សិតមានសិទ្ធិចូលប្រឡងប្រចាំឆមាសបាន លុះត្រាតែពួកគេបានចូលរៀនយ៉ាងតិច ៧៥% នៃចំនួនម៉ោងសរុបនៃមុខវិជ្ជានីមួយៗ:" 
        },
        "regulations-attendance-rule1": { 
            "en": "+ Students who are absent (both excused and unexcused) 10 times or unexcused 8 times in a subject will automatically fail that subject.", 
            "kh": "+ និស្សិតដែលអវត្តមាន (ទាំងមានលេស និងគ្មានលេស) ១០ ដង ឬអវត្តមានគ្មានលេស ៨ ដងក្នុងមុខវិជ្ជាមួយនឹងធ្លាក់មុខវិជ្ជានោះដោយស្វ័យប្រវត្តិ។" 
        },
        "regulations-attendance-rule1a": { 
            "en": "~ The On-going Class Assessment (OCA) score will be forfeited, equating to zero.", 
            "kh": "~ ពិន្ទុវាយតម្លៃក្នុងថ្នាក់បន្ត (OCA) នឹងត្រូវបានបោះបង់ ស្មើនឹងសូន្យ។" 
        },
        "regulations-attendance-rule1b": { 
            "en": "~ Students will have an opportunity to retake the exam with a 100/100 score, but if they score above 80, it will be adjusted to 80.", 
            "kh": "~ និស្សិតនឹងមានឱកាសប្រឡងឡើងវិញជាមួយនឹងពិន្ទុ ១០០/១០០ ប៉ុន្តែប្រសិនបើពួកគេទទួលបានពិន្ទុលើស ៨០ វានឹងត្រូវកែសម្រួលមក ៨០។" 
        },
        "regulations-suspension": { 
            "en": "+ Students are allowed to suspend their studies up to two times for a Bachelor's degree (4-year program) and once for an Associate or Master's degree (2-year program). Bachelor's degree students can only suspend their studies in Year 2 or Year 3, and each suspension must not exceed one academic year. Students must submit a study suspension request to the Academic Office at least 15 days before the start of the semester. If the above conditions are not met:", 
            "kh": "+ និស្សិតត្រូវបានអនុញ្ញាតឱ្យផ្អាកការសិក្សារហូតដល់ ២ ដងសម្រាប់សញ្ញាបត្របរិញ្ញាបត្រ (កម្មវិធី ៤ ឆ្នាំ) និង ១ ដងសម្រាប់សញ្ញាបត្ររង ឬអនុបណ្ឌិត (កម្មវិធី ២ ឆ្នាំ)។ និស្សិតបរិញ្ញាបត្រអាចផ្អាកការសិក្សាបានតែនៅឆ្នាំទី ២ ឬឆ្នាំទី ៣ ហើយការផ្អាកនីមួយៗមិនត្រូវលើសពី ១ ឆ្នាំសិក្សាឡើយ។ និស្សិតត្រូវដាក់ពាក្យស្នើសុំផ្អាកការសិក្សាទៅការិយាល័យសិក្សាយ៉ាងតិច ១៥ ថ្ងៃមុនការចាប់ផ្តើមឆមាស។ ប្រសិនបើលក្ខខណ្ឌខាងលើមិនត្រូវបានបំពេញ:" 
        },
        "regulations-suspension-rule1": { 
            "en": "~ The university will not issue diplomas, study confirmation letters, or transcripts, regardless of any tuition fees paid in the last semester attended.", 
            "kh": "~ សាកលវិទ្យាល័យនឹងមិនចេញសញ្ញាបត្រ លិខិតបញ្ជាក់ការសិក្សា ឬប្រតិចារិកឡើយ ដោយមិនគិតពីថ្លៃសិក្សាដែលបានបង់ក្នុងឆមាសចុងក្រោយដែលបានចូលរៀន។" 
        },
        "regulations-suspension-rule2": { 
            "en": "~ The student will be removed from the university’s enrollment list.", 
            "kh": "~ និស្សិតនឹងត្រូវដកចេញពីបញ្ជីចុះឈ្មោះរបស់សាកលវិទ្យាល័យ។" 
        },
        "study-duration-associate": { "en": "- The maximum study duration for an Associate degree is 3 years.", "kh": "- រយៈពេលសិក្សាអតិបរមាសម្រាប់សញ្ញាបត្ររងគឺ ៣ ឆ្នាំ។" },
        "study-duration-bachelor": { "en": "- The maximum study duration for a Bachelor's degree is 6 years.", "kh": "- រយៈពេលសិក្សាអតិបរមាសម្រាប់សញ្ញាបត្របរិញ្ញាបត្រគឺ ៦ ឆ្នាំ។" },
        "study-duration-master": { "en": "- The maximum study duration for a Master's degree is 3 years.", "kh": "- រយៈពេលសិក្សាអតិបរមាសម្រាប់សញ្ញាបត្រអនុបណ្ឌិតគឺ ៣ ឆ្នាំ។" },
        "study-duration-doctoral": { "en": "- The maximum study duration for a Doctoral degree is 6 years (full-time).", "kh": "- រយៈពេលសិក្សាអតិបរមាសម្រាប់សញ្ញាបត្របណ្ឌិតគឺ ៦ ឆ្នាំ (ពេញម៉ោង)។" },

        // Faculty Section
        "faculty-header": { "en": "Faculty", "kh": "មហាវិទ្យាល័យ" },
        "faculty-business-title": { "en": "1- Faculty of Business & Tourism", "kh": "១- មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍" },
        "faculty-business-offers": { 
            "en": "+ Offers Associate and Bachelor’s Degree Programs in Management", 
            "kh": "+ ផ្តល់កម្មវិធីសញ្ញាបត្ររង និងបរិញ្ញាបត្រផ្នែកគ្រប់គ្រង" 
        },
        "faculty-business-major-management": { "en": "- Major in Management", "kh": "- ជំនាញគ្រប់គ្រង" },
        "faculty-business-major-accounting": { "en": "- Major in Accounting", "kh": "- ជំនាញគណនេយ្យ" },
        "faculty-business-major-tourism": { "en": "- Major in Hotel & Tourism Management", "kh": "- ជំនាញគ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
        "faculty-business-major-logistics": { "en": "- Major in Logistics Management", "kh": "- ជំនាញគ្រប់គ្រងភស្តុភារ" },
        "faculty-business-major-marketing": { "en": "- Major in Marketing", "kh": "- ជំនាញទីផ្សារ" },

        "faculty-law-title": { "en": "2- Faculty of Law & Economics", "kh": "២- មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច" },
        "faculty-law-offers": { 
            "en": "+ Offers Associate and Bachelor’s Degree Programs", 
            "kh": "+ ផ្តល់កម្មវិធីសញ្ញាបត្ររង និងបរិញ្ញាបត្រ" 
        },
        "faculty-law-major-economics": { "en": "- Major in Economics", "kh": "- ជំនាញសេដ្ឋកិច្ច" },
        "faculty-law-major-finance": { "en": "- Major in Finance & Banking", "kh": "- ជំនាញហិរញ្ញវត្ថុ និងធនាគារ" },
        "faculty-law-major-public-admin": { "en": "- Major in Public Administration", "kh": "- ជំនាញរដ្ឋបាលសាធារណៈ" },
        "faculty-law-major-law": { "en": "- Major in Law", "kh": "- ជំនាញច្បាប់" },
        "faculty-law-major-intl-relations": { "en": "- Major in International Relations", "kh": "- ជំនាញទំនាក់ទំនងអន្តរជាតិ" },

        "faculty-education-title": { "en": "3- Faculty of Education Science", "kh": "៣- មហាវិទ្យាល័យវិទ្យាសាស្ត្រអប់រំ" },
        "faculty-education-offers": { 
            "en": "+ Offers Associate and Bachelor’s Degree Programs", 
            "kh": "+ ផ្តល់កម្មវិធីសញ្ញាបត្ររង និងបរិញ្ញាបត្រ" 
        },
        "faculty-education-major-english-edu": { "en": "- Major in English for Education", "kh": "- ជំនាញភាសាអង់គ្លេសសម្រាប់អប់រំ" },
        "faculty-education-major-english-bus": { "en": "- Major in English for Business", "kh": "- ជំនាញភាសាអង់គ្លេសសម្រាប់ធុរកិច្ច" },

        "faculty-science-title": { "en": "4- Faculty of Science & Information Technology", "kh": "៤- មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន" },
        "faculty-science-offers": { 
            "en": "+ Offers Associate and Bachelor’s Degree Programs", 
            "kh": "+ ផ្តល់កម្មវិធីសញ្ញាបត្ររង និងបរិញ្ញាបត្រ" 
        },
        "faculty-science-major-mis": { "en": "- Major in Management Information System", "kh": "- ជំនាញប្រព័ន្ធព័ត៌មានគ្រប់គ្រង" },
        "faculty-science-major-computer": { "en": "- Major in Computer Science", "kh": "- ជំនាញវិទ្យាសាស្ត្រកុំព្យូទ័រ" },
        "faculty-science-major-telecom": { "en": "- Major in Telecommunications", "kh": "- ជំនាញទូរគមនាគមន៍" },

        "faculty-grad-title": { "en": "5- Faculty of Science & Information Technology", "kh": "៥- មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន" },
        "faculty-grad-master": { 
            "en": "- Master’s Degree Programs: Majors in Management, Marketing, Finance, Computer Science, and English Literature", 
            "kh": "- កម្មវិធីសញ្ញាបត្រអនុបណ្ឌិត: ជំនាញគ្រប់គ្រង, ទីផ្សារ, ហិរញ្ញវត្ថុ, វិទ្យាសាស្ត្រកុំព្យូទ័រ, និងអក្សរសាស្ត្រអង់គ្លេស" 
        },
        "faculty-grad-doctoral": { 
            "en": "- Doctoral Degree Programs: Majors in Management, Marketing, Finance, Economics, and Public Policy (Doctoral programs are available at both national and international levels, depending on the selected candidates)", 
            "kh": "- កម្មវិធីសញ្ញាបត្របណ្ឌិត: ជំនាញគ្រប់គ្រង, ទីផ្សារ, ហិរញ្ញវត្ថុ, សេដ្ឋកិច្ច, និងគោលនយោបាយសាធារណៈ (កម្មវិធីបណ្ឌិតមានទាំងកម្រិតជាតិ និងអន្តរជាតិ អាស្រ័យលើបេក្ខជនដែលត្រូវបានជ្រើសរើស)" 
        },

        "faculty-vocational-title": { "en": "6- Vocational Training Center", "kh": "៦- មជ្ឈមណ្ឌលបណ្តុះបណ្តាលវិជ្ជាជីវៈ" },
        "faculty-vocational-english-general": { 
            "en": "- General English, English as a Second Language: Training from Level 1 to Level 12", 
            "kh": "- ភាសាអង់គ្លេសទូទៅ, ភាសាអង់គ្លេសជាភាសាទីពីរ: បណ្តុះបណ្តាលពីកម្រិត ១ ដល់កម្រិត ១២" 
        },
        "faculty-vocational-english-specific": { 
            "en": "- English for Specific Purposes: Training duration of up to 18 months", 
            "kh": "- ភាសាអង់គ្លេសសម្រាប់គោលបំណងជាក់លាក់: រយៈពេលបណ្តុះបណ្តាលរហូតដល់ ១៨ ខែ" 
        },
        "faculty-vocational-accounting": { 
            "en": "- Accounting: Training duration of up to 18 months", 
            "kh": "- គណនេយ្យ: រយៈពេលបណ្តុះបណ្តាលរហូតដល់ ១៨ ខែ" 
        },
        "faculty-vocational-computer": { 
            "en": "- Computer Skills: Training duration of up to 18 months", 
            "kh": "- ជំនាញកុំព្យូទ័រ: រយៈពេលបណ្តុះបណ្តាលរហូតដល់ ១៨ ខែ" 
        },
        "faculty-vocational-finance": { 
            "en": "- Finance: Training duration of up to 18 months", 
            "kh": "- ហិរញ្ញវត្ថុ: រយៈពេលបណ្តុះបណ្តាលរហូតដល់ ១៨ ខែ" 
        },
        "faculty-vocational-taxation": { 
            "en": "- Taxation: Training duration of up to 18 months", 
            "kh": "- ពន្ធដារ: រយៈពេលបណ្តុះបណ្តាលរហូតដល់ ១៨ ខែ" 
        },

        "study-programs-header": { 
                    "en": "STUDY PROGRAMS - PPIU", 
                    "kh": "កម្មវិធីសិក្សា - PPIU" 
                },
                "programs-title": { 
                    "en": "PROGRAMS", 
                    "kh": "កម្មវិធី" 
                },
                "programs-intro": { 
                    "en": "Phnom Penh International University (PPIU) has its own important missions in the development of human resources with a real atmosphere of Quality, Excellence, and Innovation in order to lecture students to become professional people and also to be part of national, regional, and global developments. To get rid successes to these missions, PPIU has potentially selected the core and a must programs with higher experienced and qualified lecturers to lecture students more than just their discipline, dignity, and ethics.", 
                    "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) មានបេសកកម្មសំខាន់ផ្ទាល់ខ្លួនក្នុងការអភិវឌ្ឍធនធានមនុស្សជាមួយនឹងបរិយាកាសពិតប្រាកដនៃគុណភាព ឧត្តមភាព និងការច្នៃប្រឌិត ដើម្បីបង្រៀននិស្សិតឱ្យក្លាយជាមនុស្សជំនាញវិជ្ជាជីវៈ និងជាផ្នែកមួយនៃការអភិវឌ្ឍជាតិ តំបន់ និងសកលលោក។ ដើម្បីទទួលបានជោគជ័យចំពោះបេសកកម្មទាំងនេះ PPIU បានជ្រើសរើសកម្មវិធីស្នូល និងកម្មវិធីចាំបាច់ដែលមានសក្តានុពលជាមួយនឹងសាស្ត្រាចារ្យដែលមានបទពិសោធន៍ខ្ពស់ និងមានសមត្ថភាព ដើម្បីបង្រៀននិស្សិតលើសពីវិន័យ កិត្តិយស និងក្រមសីលធម៌របស់ពួកគេ។" 
                },
                "programs-offerings": { 
                    "en": "PPIU currently provides a training center, International Language Center (ILC), and professional short, medium classes as well as the Associate's Degree (AA), Bachelor's Degree (BA), Master's Degree (MA), and Doctoral Degree (PhD.) in just one campus which is located in the middle heart of Phnom Penh City.", 
                    "kh": "បច្ចុប្បន្ន PPIU ផ្តល់មជ្ឈមណ្ឌលបណ្តុះបណ្តាល មជ្ឈមណ្ឌលភាសាអន្តរជាតិ (ILC) និងថ្នាក់រយៈពេលខ្លី មធ្យមប្រកបដោយវិជ្ជាជីវៈ ព្រមទាំងសញ្ញាបត្ររង (AA) សញ្ញាបត្របរិញ្ញាបត្រ (BA) សញ្ញាបត្រអនុបណ្ឌិត (MA) និងសញ្ញាបត្របណ្ឌិត (PhD.) នៅក្នុងបរិវេណតែមួយដែលស្ថិតនៅចំកណ្តាលទីក្រុងភ្នំពេញ។" 
                },
                "programs-majors-intro": { 
                    "en": "PPIU is having the following selective majors among its own four faculties such as:", 
                    "kh": "PPIU មានជំនាញជ្រើសរើសដូចខាងក្រោមក្នុងចំណោមមហាវិទ្យាល័យទាំងបួនរបស់ខ្លួន ដូចជា:" 
                },
                "major-finance-banking": { 
                    "en": "1. Finance-Banking (FNB)", 
                    "kh": "១. ហិរញ្ញវត្ថុ-ធនាគារ (FNB)" 
                },
                "major-accounting": { 
                    "en": "2. Accounting (ACC)", 
                    "kh": "២. គណនេយ្យ (ACC)" 
                },
                "major-economics": { 
                    "en": "3. Economics Development (ECO)", 
                    "kh": "៣. ការអភិវឌ្ឍសេដ្ឋកិច្ច (ECO)" 
                },
                "major-management": { 
                    "en": "4. Management (MGT)", 
                    "kh": "៤. គ្រប់គ្រង (MGT)" 
                },
                "major-marketing": { 
                    "en": "5. Marketing (MKT)", 
                    "kh": "៥. ទីផ្សារ (MKT)" 
                },
                "major-tourism": { 
                    "en": "6. Hotel and Tourism Management (TOU)", 
                    "kh": "៦. គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍ (TOU)" 
                },
                "major-law": { 
                    "en": "7. Law (LLB)", 
                    "kh": "៧. ច្បាប់ (LLB)" 
                },
                "major-computer-science": { 
                    "en": "8. Computer Science (CSE)", 
                    "kh": "៨. វិទ្យាសាស្ត្រកុំព្យូទ័រ (CSE)" 
                },
                "major-mis": { 
                    "en": "9. Management Information System (MIS)", 
                    "kh": "៩. ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង (MIS)" 
                },
                "major-english": { 
                    "en": "10. English: for Education (EDU) and for Business (EBU)", 
                    "kh": "១០. ភាសាអង់គ្លេស: សម្រាប់អប់រំ (EDU) និងសម្រាប់ធុរកិច្ច (EBU)" 
                },
                "major-intl-relations": { 
                    "en": "11. International Relations (IR)", 
                    "kh": "១១. ទំនាក់ទំនងអន្តរជាតិ (IR)" 
                },
                "major-logistics": { 
                    "en": "12. Logistics Management (LGM)", 
                    "kh": "១២. គ្រប់គ្រងភស្តុភារ (LGM)" 
                },

        "professional-course-header": { 
                    "en": "PROFESSIONAL/ SHORT COURSE", 
                    "kh": "វគ្គសិក្សាវិជ្ជាជីវៈ/រយៈពេលខ្លី" 
                },
                "professional-course-title": { 
                    "en": "PROFESSIONAL/ SHORT COURSE", 
                    "kh": "វគ្គសិក្សាវិជ្ជាជីវៈ/រយៈពេលខ្លី" 
                },
                "professional-course-intro": { 
                    "en": "For those who are interested and wished to pursue his/her professional/short course(s) within, medium, and long period, PPU is providing him/her the following choices of fields:", 
                    "kh": "សម្រាប់អ្នកដែលចាប់អារម្មណ៍ និងមានបំណងចង់សិក្សាវគ្គសិក្សាវិជ្ជាជីវៈ/រយៈពេលខ្លីរបស់ខ្លួនក្នុងរយៈពេលខ្លី មធ្យម និងវែង PPU ផ្តល់ជូនគាត់នូវជម្រើសនៃវិស័យដូចខាងក្រោម:" 
                },
                "course-customer-service": { 
                    "en": "- Customer Service Supervisor", 
                    "kh": "- អ្នកគ្រប់គ្រងសេវាកម្មអតិថិជន" 
                },
                "course-tax-statement": { 
                    "en": "- Tax Statement", 
                    "kh": "- របាយការណ៍ពន្ធ" 
                },
                "course-logistics-coordinator": { 
                    "en": "- Logistics Coordinator", 
                    "kh": "- អ្នកសម្របសម្រួលភស្តុភារ" 
                },
                "course-credit-officer": { 
                    "en": "- Credit Officer", 
                    "kh": "- មន្ត្រីឥណទាន" 
                },
                "course-management": { 
                    "en": "- Management", 
                    "kh": "- គ្រប់គ្រង" 
                },
                "course-accounting-assistant": { 
                    "en": "- Accounting Assistant", 
                    "kh": "- ជំនួយការគណនេយ្យ" 
                },
                "course-quickbooks": { 
                    "en": "- QuickBooks", 
                    "kh": "- សៀវភៅកត់ត្រា" // Note: Software name remains untranslated
                },
                "language-center-intro": { 
                    "en": "Moreover, we are also providing you a center of language; it is International Language Center (ILC) that offers you the below English Programs:", 
                    "kh": "លើសពីនេះ យើងក៏ផ្តល់ជូនអ្នកនូវមជ្ឈមណ្ឌលភាសាមួយដែរ គឺមជ្ឈមណ្ឌលភាសាអន្តរជាតិ (ILC) ដែលផ្តល់ជូនអ្នកនូវកម្មវិធីភាសាអង់គ្លេសដូចខាងក្រោម:" 
                },
                "course-esl": { 
                    "en": "- English as a Second Language (ESL)", 
                    "kh": "- ភាសាអង់គ្លេសជាភាសាទីពីរ (ESL)" 
                },
                "course-iep": { 
                    "en": "- Intensive English Program (IEP)", 
                    "kh": "- កម្មវិធីភាសាអង់គ្លេសផ្តោតខ្លាំង (IEP)" 
                },
                "course-epp": { 
                    "en": "- English Proficiency Program (EPP)", 
                    "kh": "- កម្មវិធីជំនាញភាសាអង់គ្លេស (EPP)" 
                },
                "contact-note": { 
                    "en": "Please contact us for more details.", 
                    "kh": "សូមទាក់ទងមកយើងខ្ញុំសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" 
                },
                //ASSOCIATE

                "associate-header": { "en": "ASSOCIATE", "kh": "សញ្ញាបត្ររង" },
                "associate-degree-title": { "en": "Associate Degree:", "kh": "សញ្ញាបត្ររង:" },
                "associate-intro": { 
                    "en": "Students who are interested and wish to pursue an associate degree at Phnom Penh International University can choose their preferred major under the following faculties:", 
                    "kh": "និស្សិតដែលចាប់អារម្មណ៍ និងមានបំណងចង់សិក្សាសញ្ញាបត្ររងនៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញអាចជ្រើសរើសជំនាញដែលពួកគេចូលចិត្តនៅក្រោមមហាវិទ្យាល័យដូចខាងក្រោម:" 
                },
                "faculty-business-title": { "en": "+ Faculty of Business & Tourism:", "kh": "+ មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍:" },
                "faculty-business-accounting": { "en": "~ Accounting", "kh": "~ គណនេយ្យ" },
                "faculty-business-management": { "en": "~ Management", "kh": "~ គ្រប់គ្រង" },
                "faculty-business-marketing": { "en": "~ Marketing", "kh": "~ ទីផ្សារ" },
                "faculty-business-tourism": { "en": "~ Hotel & Tourism Management", "kh": "~ គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
                "faculty-law-title": { "en": "+ Faculty of Law & Economics:", "kh": "+ មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច:" },
                "faculty-law-finance": { "en": "~ Finance & Banking", "kh": "~ ហិរញ្ញវត្ថុ និងធនាគារ" },
                "faculty-law-economics": { "en": "~ Economic Development", "kh": "~ ការអភិវឌ្ឍសេដ្ឋកិច្ច" },
                "faculty-law-law": { "en": "~ Law", "kh": "~ ច្បាប់" },
                "faculty-science-title": { "en": "+ Faculty of Science & Information Technology:", "kh": "+ មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន:" },
                "faculty-science-computer": { "en": "~ Computer Science", "kh": "~ វិទ្យាសាស្ត្រកុំព្យូទ័រ" },
                "faculty-education-title": { "en": "+ Faculty of Education Science:", "kh": "+ មហាវិទ្យាល័យវិទ្យាសាស្ត្រអប់រំ:" },
                "faculty-education-english": { "en": "~ English Language", "kh": "~ ភាសាអង់គ្លេស" },
                "enrollment-title": { "en": "Enrollment and Semester Completion Dates for the Associate Degree:", "kh": "ការចុះឈ្មោះ និងកាលបរិច្ឆេទបញ្ចប់ឆមាសសម្រាប់សញ្ញាបត្ររង:" },
                "new-course-2019-2020": { "en": "+ New Course for Academic Year 2019-2020:", "kh": "+ វគ្គសិក្សាថ្មីសម្រាប់ឆ្នាំសិក្សា ២០១៩-២០២០:" },
                "new-course-start-1": { "en": "- Start Date: November 4, 2019 (First Intake)", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ៤ វិច្ឆិកា ២០១៩ (ការចូលរៀនលើកទីមួយ)" },
                "new-course-complete-2": { "en": "- Semester Completion: March 9, 2019 (Second Intake)", "kh": "- ការបញ្ចប់ឆមាស: ៩ មីនា ២០១៩ (ការចូលរៀនលើកទីពីរ)" },
                "batch-14-y1s1": { "en": "+ Year 1, Semester 1, Batch 14:", "kh": "+ ឆ្នាំទី១ ឆមាសទី១ ជំនាន់ទី១៤:" },
                "batch-14-y1s1-start": { "en": "- Start Date: November 5, 2018", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ៥ វិច្ឆិកា ២០១៨" },
                "batch-14-y1s1-complete": { "en": "- Semester Completion: March 31, 2019", "kh": "- ការបញ្ចប់ឆមាស: ៣១ មីនា ២០១៩" },
                "batch-14-y1s1-exams": { "en": "- Final Exams: March 6 - April 7, 2019", "kh": "- ប្រឡងចុងក្រោយ: ៦ មីនា - ៧ មេសា ២០១៩" },
                "contact-note-1": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងខ្ញុំសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },
                "batch-14-y1s2": { "en": "+ Year 1, Semester 2, Batch 14:", "kh": "+ ឆ្នាំទី១ ឆមាសទី២ ជំនាន់ទី១៤:" },
                "batch-14-y1s2-start": { "en": "- Start Date: May 6, 2019", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ៦ ឧសភា ២០១៩" },
                "batch-14-y1s2-complete": { "en": "- Semester Completion: September 22, 2019", "kh": "- ការបញ្ចប់ឆមាស: ២២ កញ្ញា ២០១៩" },
                "batch-14-y1s2-exams": { "en": "- Final Exams: October 5 - October 6, 2019", "kh": "- ប្រឡងចុងក្រោយ: ៥ - ៦ តុលា ២០១៩" },
                "batch-13-y1s1": { "en": "+ Year 1, Semester 1, Batch 13:", "kh": "+ ឆ្នាំទី១ ឆមាសទី១ ជំនាន់ទី១៣:" },
                "batch-13-y1s1-start": { "en": "- Start Date: November 5, 2018", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ៥ វិច្ឆិកា ២០១៨" },
                "batch-13-y1s1-complete": { "en": "- Semester Completion: March 10, 2019", "kh": "- ការបញ្ចប់ឆមាស: ១០ មីនា ២០១៩" },
                "batch-13-y1s1-exams": { "en": "- Final Exams: March 16 - April 17, 2019", "kh": "- ប្រឡងចុងក្រោយ: ១៦ មីនា - ១៧ មេសា ២០១៩" },
                "batch-13-y1s2": { "en": "+ Year 1, Semester 1, Batch 13:", "kh": "+ ឆ្នាំទី១ ឆមាសទី១ ជំនាន់ទី១៣:" },
                "batch-13-y1s2-start": { "en": "- Start Date: April 22, 2019", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ២២ មេសា ២០១៩" },
                "batch-13-y1s2-complete": { "en": "- Expected Semester Completion: September 31, 2019", "kh": "- ការបញ្ចប់ឆមាសដែលរំពឹងទុក: ៣១ កញ្ញា ២០១៩" },
                "batch-13-y1s2-exams": { "en": "- Expected Final Exams: October 5, 2019", "kh": "- ប្រឡងចុងក្រោយដែលរំពឹងទុក: ៥ តុលា ២០១៩" },
                "contact-note-2": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងខ្ញុំសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },

                 //MASTER

                "masters-header": { "en": "MASTER'S DEGREE", "kh": "សញ្ញាបត្រអនុបណ្ឌិត" },
                "masters-title": { "en": "MASTER'S DEGREE", "kh": "សញ្ញាបត្រអនុបណ្ឌិត" },
                "masters-intro": { 
                    "en": "Master is a degree that Phnom Penh International University (PPIU) provides to all students who had already passed their Bachelor's Degree. They are eligible for registering their study at PPIU by just fulfil the following conditions:", 
                    "kh": "អនុបណ្ឌិតគឺជាសញ្ញាបត្រមួយដែលសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ផ្តល់ជូននិស្សិតទាំងអស់ដែលបានបញ្ចប់សញ្ញាបត្របរិញ្ញាបត្ររួចហើយ។ ពួកគេមានសិទ្ធិចុះឈ្មោះសិក្សានៅ PPIU ដោយគ្រាន់តែបំពេញលក្ខខណ្ឌដូចខាងក្រោម:" 
                },
                "condition-1": { 
                    "en": "+ Fill out the Master's degree application form at PPIU with required information", 
                    "kh": "+ បំពេញទម្រង់ស្នើសុំសញ្ញាបត្រអនុបណ្ឌិតនៅ PPIU ជាមួយនឹងព័ត៌មានដែលតម្រូវ" 
                },
                "condition-2": { "en": "+ Attached with:", "kh": "+ ភ្ជាប់ជាមួយ:" },
                "condition-photo": { 
                    "en": "- Current 7 photo sized 4 x 6 with white background (straight face with the two ears, black hair.)", 
                    "kh": "- រូបថតបច្ចុប្បន្ន ៧ សន្លឹកទំហំ ៤ x ៦ ជាមួយផ្ទៃខាងក្រោយពណ៌ស (មុខត្រង់បង្ហាញត្រចៀកទាំងពីរ សBreastសក់ខ្មៅ)" 
                },
                "condition-documents": { "en": "- Study records and documents:", "kh": "- ឯកសារសិក្សា និងឯកសារ:" },
                "document-bachelor": { 
                    "en": "~ 1 copy of Bachelor's graduation certificate or Bachelor's degree Certificate.", 
                    "kh": "~ ច្បាប់ចម្លង ១ នៃវិញ្ញាបនបត្របញ្ចប់បរិញ្ញាបត្រ ឬសញ្ញាបត្របរិញ្ញាបត្រ" 
                },
                "document-id": { 
                    "en": "~ 1 copy of student's national identity card.", 
                    "kh": "~ ច្បាប់ចម្លង ១ នៃអត្តសញ្ញាណប័ណ្ណជាតិរបស់និស្សិត" 
                },
                "document-birth": { 
                    "en": "~ 1 copy of student's birth certificate (if applicable.)", 
                    "kh": "~ ច្បាប់ចម្លង ១ នៃសំបុត្រកំណើតរបស់និស្សិត (ប្រសិនបើអាចអនុវត្តបាន)" 
                },
                "condition-3": { 
                    "en": "+ Pay the Bachelor's study fee at the PPIU's Cashier.", 
                    "kh": "+ បង់ថ្លៃសិក្សាបរិញ្ញាបត្រនៅអ្នកគិតលុយរបស់ PPIU" 
                },
                "condition-4": { 
                    "en": "+ Start class according to the PPIU's schedule.", 
                    "kh": "+ ចាប់ផ្តើមថ្នាក់សិក្សាតាមកាលវិភាគរបស់ PPIU" 
                },
                "condition-5": { 
                    "en": "+ Follow all current rules and regulations of PPIU.", 
                    "kh": "+ អនុវត្តតាមច្បាប់ និងបទបញ្ជាបច្ចុប្បន្នទាំងអស់របស់ PPIU" 
                },
                "academic-dates-title": { "en": "Academic Starting and End Dates:", "kh": "កាលបរិច្ឆេទចាប់ផ្តើម និងបញ្ចប់សិក្សា:" },
                "start-dates-title": { "en": "- Starting dates:", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម:" },
                "start-weekend": { "en": "~ June 17, 2017 (Weekend)", "kh": "~ ១៧ មិថុនា ២០១៧ (ចុងសប្តាហ៍)" },
                "start-weekday": { "en": "~ June 19, 2017 (Weekday)", "kh": "~ ១៩ មិថុនា ២០១៧ (ថ្ងៃធ្វើការ)" },
                "end-semester-title": { "en": "- Planned to End Semester date:", "kh": "- កាលបរិច្ឆេទគ្រោងបញ្ចប់ឆមាស:" },
                "end-semester-date": { "en": "~ October 01, 2017", "kh": "~ ១ តុលា ២០៧" },
                "final-exam-title": { "en": "- Planned to do the Final Exam date:", "kh": "- កាលបរិច្ឆេទគ្រោងធ្វើប្រឡងចុងក្រោយ:" },
                "final-exam-date": { "en": "~ October 21, 2017", "kh": "~ ២១ តុលា ២០១៧" },
                "contact-note": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងខ្ញុំសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },

                // Bachelor Section
        "bachelor-header": { "en": "BACHELOR", "kh": "បរិញ្ញាបត្រ" },
        "bachelor-title": { "en": "BACHELOR", "kh": "បរិញ្ញាបត្រ" },
        "bachelor-intro": { 
            "en": "Those students who intentionally study with your desired majors for the Bachelor's Degree (BA), you could choose amongst the following faculties:", 
            "kh": "និស្សិតទាំងឡាយដែលមានបំណងសិក្សាជាមួយជំនាញដែលអ្នកចង់បានសម្រាប់សញ្ញាបត្របរិញ្ញាបត្រ (BA) អ្នកអាចជ្រើសរើសក្នុងចំណោមមហាវិទ្យាល័យដូចខាងក្រោម:" 
        },
        "faculty-law-link": { 
            "en": "- Faculty of Law and Economics (FLF)", 
            "kh": "- មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច (FLF)" 
        },
        "faculty-law-finance": { "en": "+ Finance-Banking (FNB)", "kh": "+ ហិរញ្ញវត្ថុ-ធនាគារ (FNB)" },
        "faculty-law-economics": { "en": "+ Economics Development (ECO)", "kh": "+ ការអភិវឌ្ឍសេដ្ឋកិច្ច (ECO)" },
        "faculty-law-public-relations": { "en": "+ Public Relations (PR)", "kh": "+ ទំនាក់ទំនងសាធារណៈ (PR)" },
        "faculty-law-law": { "en": "+ Law (LLB)", "kh": "+ ច្បាប់ (LLB)" },
        "faculty-law-intl-relations": { "en": "+ International Relations (IR)", "kh": "+ ទំនាក់ទំនងអន្តរជាតិ (IR)" },

        "faculty-business-link": { 
            "en": "- Faculty of Business and Tourism (FBT)", 
            "kh": "- មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍ (FBT)" 
        },
        "faculty-business-accounting": { "en": "+ Accounting (ACC)", "kh": "+ គណនេយ្យ (ACC)" },
        "faculty-business-management": { "en": "+ Management (MGT)", "kh": "+ គ្រប់គ្រង (MGT)" },
        "faculty-business-marketing": { "en": "+ Marketing (MKT)", "kh": "+ ទីផ្សារ (MKT)" },
        "faculty-business-tourism": { "en": "+ Hotel and Tourism Management (TOU)", "kh": "+ គ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍ (TOU)" },
        "faculty-business-logistics": { "en": "+ Logistics Management (LGM)", "kh": "+ គ្រប់គ្រងភស្តុភារ (LGM)" },

        "faculty-education-link": { 
            "en": "- Faculty of Education Science (FES)", 
            "kh": "- មហាវិទ្យាល័យវិទ្យាសាស្ត្រអប់រំ (FES)" 
        },
        "faculty-education-english-edu": { "en": "+ English for Education (EDU)", "kh": "+ ភាសាអង់គ្លេសសម្រាប់អប់រំ (EDU)" },
        "faculty-education-english-bus": { "en": "+ English for Business (EBU)", "kh": "+ ភាសាអង់គ្លេសសម្រាប់ធុរកិច្ច (EBU)" },

        "faculty-science-link": { 
            "en": "- Faculty of Science and Information Technology (FSIT)", 
            "kh": "- មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន (FSIT)" 
        },
        "faculty-science-computer": { "en": "+ Computer Science (CSE)", "kh": "+ វិទ្យាសាស្ត្រកុំព្យូទ័រ (CSE)" },
        "faculty-science-mis": { "en": "+ Management Information System (MIS)", "kh": "+ ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង (MIS)" },
        "faculty-science-telecom": { "en": "+ Telecommunication Architecture (TEL)", "kh": "+ ស្ថាបត្យកម្មទូរគមនាគមន៍ (TEL)" },

        "faculty-news-link": { 
            "en": "- Faculty Of News and View", 
            "kh": "- មហាវិទ្យាល័យព័ត៌មាន និងទស្សនៈ" 
        },
        "faculty-news-multimedia": { "en": "+ Multimedia Journalism", "kh": "+ សារព័ត៌មានពហុមេឌៀ" },
        "faculty-news-media-mgt": { "en": "+ Media Management", "kh": "+ គ្រប់គ្រងប្រព័ន្ធផ្សព្វផ្សាយ" },
        "faculty-news-digital": { "en": "+ Digital Media", "kh": "+ ប្រព័ន្ធផ្សព្វផ្សាយឌីជីថល" },
        "faculty-news-pr": { "en": "+ Public Relations", "kh": "+ ទំនាក់ទំនងសាធារណៈ" },

        // Reading Club Section
        "reading-club-header": { "en": "Reading club", "kh": "ក្លឹបអានសៀវភៅ" },
        "reading-club-join": { 
            "en": "Join the Reading Club to increase general knowledge and improve your English!", 
            "kh": "ចូលរួមក្លឹបអានសៀវភៅដើម្បីបង្កើនចំណេះដឹងទូទៅ និងធ្វើឱ្យប្រសើរឡើងនូវភាសាអង់គ្លេសរបស់អ្នក!" 
        },
        "reading-club-host": { 
            "en": "The Reading Club is hosted by our enthusiastic and caring head librarian, <strong>Ms. Princess May Oliva</strong>.", 
            "kh": "ក្លឹបអានសៀវភៅត្រូវបានរៀបចំឡើងដោយប្រធានបណ្ណារក្សដែលមានភាពរីករាយ និងយកចិត្តទុកដាក់របស់យើង <strong>កញ្ញា Princess May Oliva</strong>។" 
        },
        "reading-club-purpose": { 
            "en": "The purpose of the club is to help students improve their speaking in English and foster their love of reading.", 
            "kh": "គោលបំណងនៃក្លឹបនេះគឺដើម្បីជួយនិស្សិតធ្វើឱ្យប្រសើរឡើងនូវការនិយាយជាភាសាអង់គ្លេស និងជំរុញឱ្យពួកគេស្រឡាញ់ការអាន។" 
        },
        "reading-club-first-meeting": { 
            "en": "<strong>First meeting:</strong> 13th February 2021 at 3 p.m. at the PPIU Library (7th Floor).", 
            "kh": "<strong>ការប្រជុំលើកដំបូង:</strong> ថ្ងៃទី ១៣ ខែកុម្ភៈ ឆ្នាំ ២០២១ នៅម៉ោង ៣ រសៀល នៅបណ្ណាល័យ PPIU (ជាន់ទី ៧)។" 
        },
        "objectives-title": { "en": "1. Objectives", "kh": "១. គោលបំណង" },
        "objectives-intro": { 
            "en": "PPIU Reading Club is a platform to provide students with an opportunity to:", 
            "kh": "ក្លឹបអានសៀវភៅ PPIU គឺជាវេទិកាមួយដើម្បីផ្តល់ឱកាសដល់និស្សិតក្នុងការ:" 
        },
        "objective-1": { "en": "+ Improve speaking and writing in English", "kh": "+ ធ្វើឱ្យប្រសើរឡើងនូវការនិយាយ និងការសរសេរជាភាសាអង់គ្លេស" },
        "objective-2": { "en": "+ Broaden general knowledge", "kh": "+ ពង្រីកចំណេះដឹងទូទៅ" },
        "objective-3": { "en": "+ Enhance personal development and leadership", "kh": "+ ពង្រឹងការអភិវឌ្ឍផ្ទាល់ខ្លួន និងភាពជាអ្នកដឹកនាំ" },
        "objective-4": { "en": "+ Cultivate a reading habit", "kh": "+ បណ្តុះទម្លាប់អាន" },
        
        "method-title": { "en": "2. Method", "kh": "២. វិធីសាស្ត្រ" },
        "method-1": { 
            "en": "+ Members meet every week from 3 to 4 p.m. every Saturday at a library reading room to discuss an assigned reading book or book chapter", 
            "kh": "+ សមាជិកជួបជុំគ្នារៀងរាល់សប្តាហ៍ចាប់ពីម៉ោង ៣ ដល់ ៤ រសៀលរៀងរាល់ថ្ងៃសៅរ៍នៅបន្ទប់អានសៀវភៅក្នុងបណ្ណាល័យ ដើម្បីពិភាក្សាអំពីសៀវភៅ ឬជំពូកសៀវភៅដែលបានកំណត់" 
        },
        "method-2": { "en": "+ Members decide which book or book chapter to read", "kh": "+ សមាជិកសម្រេចចិត្តថាសៀវភៅ ឬជំពូកសៀវភៅណាដែលត្រូវអាន" },
        "method-3": { 
            "en": "+ Each member is required to have a journal which they can write a journal entry of every book or book chapter they read", 
            "kh": "+ សមាជិកម្នាក់ៗតម្រូវឱ្យមានសៀវភៅកត់ត្រាដែលពួកគេអាចសរសេរកំណត់ហេតុអំពីសៀវភៅ ឬជំពូកសៀវភៅនីមួយៗដែលពួកគេអាន" 
        },
        
        "membership-title": { "en": "3. Membership", "kh": "៣. សមាជិកភាព" },
        "membership-1": { "en": "+ Requirements", "kh": "+ តម្រូវការ" },
        "membership-2": { "en": "+ PPIU students", "kh": "+ និស្សិត PPIU" },
        "membership-3": { "en": "+ Demonstrate a commitment to engage in the club", "kh": "+ បង្ហាញការប្តេជ្ញាចិត្តក្នុងការចូលរួមនៅក្នុងក្លឹប" },
        "membership-4": { "en": "+ Actively participate in club reading and discussion activities", "kh": "+ ចូលរួមយ៉ាងសកម្មក្នុងសកម្មភាពអាន និងពិភាក្សារបស់ក្លឹប" },
        "membership-5": { 
            "en": "+ When a member cannot join a club meeting, s/he shall inform a club leader", 
            "kh": "+ នៅពេលសមាជិកមិនអាចចូលរួមការប្រជុំក្លឹបបាន គាត់/នាងត្រូវជូនដំណឹងដល់អ្នកដឹកនាំក្លឹប" 
        },
        "membership-6": { "en": "+ Duration – three months", "kh": "+ រយៈពេល – បីខែ" },
        
        "materials-title": { "en": "4. Reading Materials", "kh": "៤. សម្ភារៈអាន" },
        "materials-desc": { 
            "en": "The reading materials including the following, but not limited to grade reader series, famous people book, personal development and leadership books", 
            "kh": "សម្ភារៈអានរួមមានដូចខាងក្រោម ប៉ុន្តែមិនកំណត់ចំពោះស៊េរីសៀវភៅអានតាមកម្រិត សៀវភៅអំពីមនុស្សល្បី សៀវភៅអភិវឌ្ឍផ្ទាល់ខ្លួន និងភាពជាអ្នកដឹកនាំ" 
        },
        
        "certificate-title": { "en": "5. Certificate", "kh": "៥. វិញ្ញាបនបត្រ" },
        "certificate-desc": { 
            "en": "At the end of the club cycle, a member will be awarded the Certificate of Participation if he/she attends at least 6 meetings of the club.", 
            "kh": "នៅចុងបញ្ចប់នៃវដ្តក្លឹប សមាជិកនឹងទទួលបានវិញ្ញាបនបត្រចូលរួម ប្រសិនបើគាត់/នាងចូលរួមយ៉ាងហោចណាស់ ៦ ការប្រជុំរបស់ក្លឹប។" 
        },
        
        "registration-title": { "en": "6. Registration", "kh": "៦. ការចុះឈ្មោះ" },
        "registration-desc": { 
            "en": "To register to become a club, just send your full name, batch number and major to princess.oliva@ppiu.edu.kh", 
            "kh": "ដើម្បីចុះឈ្មោះចូលជាសមាជិកក្លឹប គ្រាន់តែផ្ញើឈ្មោះពេញ លេខក្រុម និងជំនាញរបស់អ្នកទៅ princess.oliva@ppiu.edu.kh" 
        },
        
        "info-more": { "en": "For further information, please visit this", "kh": "សម្រាប់ព័ត៌មានបន្ថែម សូមចូលទៅកាន់" },
        "info-link": { "en": "link: shorturl.at/ptKQ8", "kh": "តំណភ្ជាប់: shorturl.at/ptKQ8" },
        "contact-phone": { "en": "or contact us at 023999907", "kh": "ឬទាក់ទងមកយើងតាម 023999907" },
        "contact-email": { "en": "/ princess.oliva@ppiu.edu.kh", "kh": "/ princess.oliva@ppiu.edu.kh" },
        "contact-fb": { "en": "/ PPIU Facebook messenger!", "kh": "/ សារជជែក Facebook PPIU!" },

        // Library Section
        "library-header": { "en": "Library", "kh": "បណ្ណាល័យ" },
        "collection-title": { "en": "Collection", "kh": "បណ្តុំ" },
        "collection-books": { "en": "Books:", "kh": "សៀវភៅ:" },
        "book-curriculum": { "en": "Curriculum books", "kh": "សៀវភៅកម្មវិធីសិក្សា" },
        "book-general": { "en": "General subject", "kh": "មុខវិជ្ជាទូទៅ" },
        "book-reference": { 
            "en": "General reference (Dictionary, encyclopedia, atlas, etc.)", 
            "kh": "ឯកសារយោងទូទៅ (វចនានុក្រម សព្វវចនាធិប្បាយ អាត់ឡាស ជាដើម)" 
        },
        "book-fiction": { "en": "Fiction (Fairy tales, novels, etc.)", "kh": "ប្រឌិត (រឿងនិទាន ប្រលោមលោក ជាដើម)" },
        "book-nonfiction": { 
            "en": "Non-fiction (Memoirs, biography, guides, manuals, etc.)", 
            "kh": "មិនប្រឌិត (កំណត់ហេតុ ជីវប្រវត្តិ មគ្គុទ្ទេសក៍ សៀវភៅណែនាំ ជាដើម)" 
        },
        
        "resources-title": { "en": "Newspapers & Resources:", "kh": "កាសែត និងធនធាន:" },
        "resource-magazines": { "en": "Magazines", "kh": "ទស្សនាវដ្តី" },
        "resource-projects": { "en": "Assignments & Projects of Students", "kh": "កិច្ចការ និងគម្រោងរបស់និស្សិត" },
        "resource-journals": { "en": "Scholarly Journals", "kh": "ទិនានុប្បវត្តិបែបវិទ្យាសាស្ត្រ" },
        "resource-eresources": { "en": "E-resources", "kh": "ធនធានអេឡិចត្រូនិក" },
        "collection-volume": { 
            "en": "<strong>The existing library collection contains over <span class=\"highlight\">13,000 volumes</span> in print.</strong>", 
            "kh": "<strong>បណ្តុំបណ្ណាល័យដែលមានស្រាប់មានជាង <span class=\"highlight\">១៣,០០០ ក្បាល</span> ជាទម្រង់បោះពុម្ព។</strong>" 
        },
        
        "organization-title": { "en": "Organization & Classification", "kh": "ការរៀបចំ និងការចាត់ថ្នាក់" },
        "org-ddc": { 
            "en": "<strong>Dewey Decimal Classification (DDC)</strong> – for general subject books", 
            "kh": "<strong>ការចាត់ថ្នាក់ដេវីដេស៊ីម៉ល (DDC)</strong> – សម្រាប់សៀវភៅមុខវិជ្ជាទូទៅ" 
        },
        "org-ppiu": { 
            "en": "<strong>PPIU Library Code</strong> – for curriculum books", 
            "kh": "<strong>កូដបណ្ណាល័យ PPIU</strong> – សម្រាប់សៀវភៅកម្មវិធីសិក្សា" 
        },
        
        "hours-title": { "en": "Library Hours", "kh": "ម៉ោងបណ្ណាល័យ" },
        "hours-mon-sat": { 
            "en": "<strong>Monday – Saturday:</strong> 8:00 AM – 7:30 PM", 
            "kh": "<strong>ថ្ងៃច័ន្ទ – ថ្ងៃសៅរ៍:</strong> ៨:០០ ព្រឹក – ៧:៣០ ល្ងាច" 
        },
        "hours-sun": { 
            "en": "<strong>Sunday:</strong> 10:00 AM – 4:00 PM", 
            "kh": "<strong>ថ្ងៃអាទិត្យ:</strong> ១០:ៀ០ ព្រឹក – ៤:០០ ល្ងាច" 
        },

        // Associate's Degree Section
        "associate-header": { "en": "ASSOCIATE'S DEGREE", "kh": "សញ្ញាបត្ររង" },
        "associate-title": { "en": "Associate’s Degree:", "kh": "សញ្ញាបត្ររង:" },
        "associate-intro": { 
            "en": "Associate’s degree is a program that Phnom Penh International University (PPIU) provides to students who have not yet passed their BAC II. They are eligible to register for their studies at PPIU for Year 1 by fulfilling the following conditions:", 
            "kh": "សញ្ញាបត្ររងគឺជាកម្មវិធីមួយដែលសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ផ្តល់ជូននិស្សិតដែលមិនទាន់បានប្រឡងជាប់ BAC II។ ពួកគេមានសិទ្ធិចុះឈ្មោះសិក្សានៅ PPIU សម្រាប់ឆ្នាំទី ១ ដោយបំពេញលក្ខខណ្ឌដូចខាងក្រោម:" 
        },
        "condition-form": { 
            "en": "+ Fill out the Associate's degree application form at PPIU with the required information.", 
            "kh": "+ បំពេញទម្រង់ពាក្យសុំសញ្ញាបត្ររងនៅ PPIU ជាមួយព័ត៌មានដែលតម្រូវឱ្យមាន។" 
        },
        "condition-attach": { "en": "+ Attach the following:", "kh": "+ ភ្ជាប់ឯកសារដូចខាងក្រោម:" },
        "attach-photos": { 
            "en": "- 7 current photos sized 4 x 6 with a white background (straight face showing both ears, black hair).", 
            "kh": "- រូបថតបច្ចុប្បន្ន ៧ សន្លឹកទំហំ ៤ x ៦ ជាមួយផ្ទៃខាងក្រោយពណ៌ស (មុខត្រង់បង្ហាញត្រចៀកទាំងសងខាង សក់ខ្មៅ)។" 
        },
        "attach-documents": { "en": "- Study records and documents:", "kh": "- ឯកសារសិក្សា និងឯកសារ:" },
        "doc-bac-ii": { 
            "en": "~ 1 copy of the failed BAC II provisional certificate.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃវិញ្ញាបនបត្របណ្តោះអាសន្ន BAC II ដែលបានបរាជ័យ។" 
        },
        "doc-id": { 
            "en": "~ 1 copy of the student's national identity card.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃអត្តសញ្ញាណប័ណ្ណជាតិរបស់និស្សិត។" 
        },
        "doc-birth": { 
            "en": "~ 1 copy of the student's birth certificate (if applicable).", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃសំបុត្រកំណើតរបស់និស្សិត (ប្រសិនបើមាន)។" 
        },
        "condition-fee": { 
            "en": "+ Pay the Bachelor's study fee at PPIU's Cashier.", 
            "kh": "+ បង់ថ្លៃសិក្សាបរិញ្ញាបត្រនៅអ្នកគិតលុយរបស់ PPIU។" 
        },
        "condition-start": { 
            "en": "+ Start class according to PPIU's schedule.", 
            "kh": "+ ចាប់ផ្តើមថ្នាក់រៀនតាមកាលវិភាគរបស់ PPIU។" 
        },
        "condition-rules": { 
            "en": "+ Follow all current rules and regulations of PPIU.", 
            "kh": "+ ធ្វើតាមច្បាប់ និងបទបញ្ជាបច្ចុប្បន្នទាំងអស់របស់ PPIU។" 
        },
        
        "dates-title": { "en": "Academic Starting and End Dates:", "kh": "កាលបរិច្ឆេទចាប់ផ្តើម និងបញ្ចប់ការសិក្សា:" },
        "enrollment-title": { 
            "en": "Enrollment and Semester Completion Dates for the Associate’s Degree:", 
            "kh": "កាលបរិច្ឆេទចុះឈ្មោះ និងការបញ្ចប់ឆមាសសម្រាប់សញ្ញាបត្ររង:" 
        },
        
        "course-2019-2020-title": { "en": "+ New Course for Academic Year 2019-2020:", "kh": "+ វគ្គថ្មីសម្រាប់ឆ្នាំសិក្សា ២០១៩-២ៀ០:" },
        "course-2019-start": { 
            "en": "- Start Date: November 4, 2019 (First Semester Start)", 
            "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ថ្ងៃទី ៤ ខែវិច្ឆិកា ឆ្នាំ ២ៀ១៩ (ចាប់ផ្តើមឆមាសទី ១)" 
        },
        "course-2019-end": { 
            "en": "- Semester Completion: March 9, 2020 (Second Semester Start)", 
            "kh": "- ការបញ្ចប់ឆមាស: ថ្ងៃទី ៩ ខែមីនា ឆ្នាំ ២ៀ២០ (ចាប់ផ្តើមឆមាសទី ២)" 
        },
        
        "batch-14-sem1-title": { "en": "+ Year 1, Semester 1, Batch 14:", "kh": "+ ឆ្នាំទី ១ ឆមាសទី ១ ក្រុម ១៤:" },
        "batch-14-sem1-start": { "en": "- Start Date: November 5, 2018", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ថ្ងៃទី ៥ ខែវិច្ឆិកា ឆ្នាំ ២ៀ១៨" },
        "batch-14-sem1-end": { "en": "- Semester Completion: March 31, 2019", "kh": "- ការបញ្ចប់ឆមាស: ថ្ងៃទី ៣១ ខែមីនា ឆ្នាំ ២ៀ១៩" },
        "batch-14-sem1-exams": { 
            "en": "- Semester Exams: March 6 - April 7, 2019", 
            "kh": "- ការប្រឡងឆមាស: ថ្ងៃទី ៦ ខែមីនា - ថ្ងៃទី ៧ ខែមេសា ឆ្នាំ ២ៀ១៩" 
        },
        "contact-note-1": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },
        
        "batch-14-sem2-title": { "en": "+ Year 1, Semester 2, Batch 14:", "kh": "+ ឆ្នាំទី ១ ឆមាសទី ២ ក្រុម ១៤:" },
        "batch-14-sem2-start": { "en": "- Start Date: May 6, 2019", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ថ្ងៃទី ៦ ខែឧសភា ឆ្នាំ ២ៀ១៩" },
        "batch-14-sem2-end": { "en": "- Semester Completion: September 22, 2019", "kh": "- ការបញ្ចប់ឆមាស: ថ្ងៃទី ២២ ខែកញ្ញា ឆ្នាំ ២ៀ១៩" },
        "batch-14-sem2-exams": { 
            "en": "- Semester Exams: October 5 - October 6, 2019", 
            "kh": "- ការប្រឡងឆមាស: ថ្ងៃទី ៥ - ថ្ងៃទី ៦ ខែតុលា ឆ្នាំ ២ៀ១៩" 
        },
        
        "batch-13-sem1-title": { "en": "+ Year 1, Semester 1, Batch 13:", "kh": "+ ឆ្នាំទី ១ ឆមាសទី ១ ក្រុម ១៣:" },
        "batch-13-sem1-start": { "en": "- Start Date: November 5, 2018", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ថ្ងៃទី ៥ ខែវិច្ឆិកា ឆ្នាំ ២ៀ១៨" },
        "batch-13-sem1-end": { "en": "- Semester Completion: March 10, 2019", "kh": "- ការបញ្ចប់ឆមាស: ថ្ងៃទី ១០ ខែមីនា ឆ្នាំ ២ៀ១៩" },
        "batch-13-sem1-exams": { 
            "en": "- Semester Exams: March 16 - April 17, 2019", 
            "kh": "- ការប្រឡងឆមាស: ថ្ងៃទី ១៦ ខែមីនា - ថ្ងៃទី ១៧ ខែមេសា ឆ្នាំ ២ៀ១៩" 
        },
        
        "batch-13-sem2-title": { "en": "+ Year 1, Semester 1, Batch 13:", "kh": "+ ឆ្នាំទី ១ ឆមាសទី ១ ក្រុម ១៣:" }, // Note: Should be Semester 2; kept as per original
        "batch-13-sem2-start": { "en": "- Start Date: April 22, 2019", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ថ្ងៃទី ២២ ខែមេសា ឆ្នាំ ២ៀ១៩" },
        "batch-13-sem2-end": { 
            "en": "- Expected Semester Completion: September 31, 2019", 
            "kh": "- ការបញ្ចប់ឆមាសដែលរំពឹងទុក: ថ្ងៃទី ៣១ ខែកញ្ញា ឆ្នាំ ២ៀ១៩" 
        },
        "batch-13-sem2-exams": { 
            "en": "- Expected Final Exams: October 5, 2019", 
            "kh": "- ការប្រឡងចុងក្រោយដែលរំពឹងទុក: ថ្ងៃទី ៥ ខែតុលា ឆ្នាំ ២ៀ១៩" 
        },
        "contact-note-2": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },

         // MASTER's Degree Section
        "master-header": { "en": "MASTER'S DEGREE", "kh": "សញ្ញាបត្រអនុបណ្ឌិត" },
                "master-title": { "en": "MASTER'S DEGREE", "kh": "សញ្ញាបត្រអនុបណ្ឌិត" },
                "master-intro": { 
                    "en": "Master is a degree that Phnom Penh International University (PPIU) provides to all students who had already passed their Bachelor's Degree. They are eligible for registering their study at PPIU by just fulfil the following conditions:", 
                    "kh": "អនុបណ្ឌិតគឺជាសញ្ញាបត្រមួយដែលសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ផ្តល់ជូននិស្សិតទាំងអស់ដែលបានបញ្ចប់សញ្ញាបត្របរិញ្ញាបត្ររួចហើយ។ ពួកគេមានសិទ្ធិចុះឈ្មោះសិក្សានៅ PPIU ដោយគ្រាន់តែបំពេញលក្ខខណ្ឌដូចខាងក្រោម:" 
                },
                "condition-form": { "en": "+ Fill out the Associate's degree application form at PPIU with required information", "kh": "+ បំពេញទម្រង់ពាក្យសុំសញ្ញាបត្រអនុបណ្ឌិតនៅ PPIU ជាមួយព័ត៌មានដែលតម្រូវឱ្យមាន" },
                "condition-attach": { "en": "+ Attached with:", "kh": "+ ភ្ជាប់ជាមួយ:" },
                "attach-photos": { "en": "- Current 7 photo sized 4 x 6 with white background (straight face with the two ears, black hair.)", "kh": "- រូបថតបច្ចុប្បន្ន ៧ សន្លឹកទំហំ ៤ x ៦ ជាមួយផ្ទៃខាងក្រោយពណ៌ស (មុខត្រង់បង្ហាញត្រចៀកទាំងពីរ សក់ខ្មៅ)" },
                "attach-documents": { "en": "- Study records and documents:", "kh": "- ឯកសារសិក្សា និងឯកសារ:" },
                "doc-bac-ii": { "en": "~ 1 copy of Failed BAC II provisional certificate.", "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃវិញ្ញាបនបត្របណ្តោះអាសន្ន BAC II ដែលបានបរាជ័យ។" },
                "doc-id": { "en": "~ 1 copy of student's national identity card.", "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃអត្តសញ្ញាណប័ណ្ណជាតិរបស់និស្សិត។" },
                "doc-birth": { "en": "~ 1 copy of student's birth certificate (if applicable.)", "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃសំបុត្រកំណើតរបស់និស្សិត (ប្រសិនបើមាន)។" },
                "condition-fee": { "en": "+ Pay the Bachelor's study fee at the PPIU's Cashier.", "kh": "+ បង់ថ្លៃសិក្សាអនុបណ្ឌិតនៅអ្នកគិតលុយរបស់ PPIU។" },
                "condition-start": { "en": "+ Start class according to the PPIU's schedule.", "kh": "+ ចាប់ផ្តើមថ្នាក់រៀនតាមកាលវិភាគរបស់ PPIU១" },
                "condition-rules": { "en": "+ Follow all current rules and regulations of PPIU.", "kh": "+ ធ្វើតាមច្បាប់ និងបទបញ្ជាបច្ចុប្បន្នទាំងអស់របស់ PPIU។" },
                "dates-title": { "en": "Academic Starting and End Dates:", "kh": "កាលបរិច្ឆេទចាប់ផ្តើម និងបញ្ចប់ការសិក្សា:" },
                "start-dates": { "en": "- Starting dates:", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម:" },
                "start-weekend": { "en": "~ June 17, 2017 (Weekdend)", "kh": "~ ថ្ងៃទី ១៧ ខែមិថុនា ឆ្នាំ ២ៀ១៧ (ចុងសប្តាហ៍)" },
                "start-weekday": { "en": "~ June 19, 2017 (Weekday)", "kh": "~ ថ្ងៃទី ១៩ ខែមិថុនា ឆ្នាំ ២ៀ១៧ (ថ្ងៃធ្វើការ)" },
                "end-semester": { "en": "- Planned to End Semester date:", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាសដែលបានគ្រោងទុក:" },
                "end-date": { "en": "~ October 01, 2017", "kh": "~ ថ្ងៃទី ១ ខែតុលា ឆ្នាំ ២ៀ១៧" },
                "final-exam-title": { "en": "- Planned to do the Final Exam date:", "kh": "- កាលបរិច្ឆេទប្រឡងចុងក្រោយដែលបានគ្រោងទុក:" },
                "final-exam-date": { "en": "~ October 21, 2017", "kh": "~ ថ្ងៃទី ២១ ខែតុលា ឆ្នាំ ២ៀ១៧" },
                "contact-note": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងសម្រាប់ព័ត៌មានលម្អិតបន្ថែម។" },

                // Bachelor's Degree Section
        "bachelor-header": { "en": "BACHELOR'S DEGREE", "kh": "សញ្ញាបត្របរិញ្ញាបត្រ" },
        "bachelor-title": { "en": "BACHELOR'S DEGREE", "kh": "សញ្ញាបត្របរិញ្ញាបត្រ" },
        "bachelor-intro": { 
            "en": "Bachelor is a degree that Phnom Penh International University (PPIU) provides to all students who had already passed their BAC II. They are eligible for registering their study at PPIU, for the Foundation Year (Year 1) by just fulfil the following conditions:", 
            "kh": "បរិញ្ញាបត្រគឺជាសញ្ញាបត្រមួយដែលសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ផ្តល់ជូននិស្សិតទាំងអស់ដែលបានប្រឡងជាប់ BAC II រួចហើយ។ ពួកគេមានសិទ្ធិចុះឈ្មោះសិក្សានៅ PPIU សម្រាប់ឆ្នាំគោល (ឆ្នាំទី ១) ដោយគ្រាន់តែបំពេញលក្ខខណ្ឌដូចខាងក្រោម:" 
        },
        "condition-form": { 
            "en": "+ Fill out the Associate's degree application form at PPIU with required information", 
            "kh": "+ បំពេញទម្រង់ពាក្យសុំសញ្ញាបត្របរិញ្ញាបត្រនៅ PPIU ជាមួយព័ត៌មានដែលតម្រូវឱ្យមាន" // Corrected from Associate's to Bachelor's
        },
        "condition-attach": { "en": "+ Attached with:", "kh": "+ ភ្ជាប់ជាមួយ:" },
        "attach-photos": { 
            "en": "- Current 7 photo sized 4 x 6 with white background (straight face with the two ears, black hair.)", 
            "kh": "- រូបថតបច្ចុប្បន្ន ៧ សន្លឹកទំហំ ៤ x ៦ ជាមួយផ្ទៃខាងក្រោយពណ៌ស (មុខត្រង់បង្ហាញត្រចៀកទាំងពីរ សក់ខ្មៅ)" 
        },
        "attach-documents": { "en": "- Study records and documents:", "kh": "- ឯកសារសិក្សា និងឯកសារ:" },
        "doc-bac-ii": { 
            "en": "~ 1 copy of Failed BAC II provisional certificate.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃវិញ្ញាបនបត្របណ្តោះអាសន្ន BAC II ដែលបានជាប់" // Corrected "Failed" to "Passed"
        },
        "doc-id": { 
            "en": "~ 1 copy of student's national identity card.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃអត្តសញ្ញាណប័ណ្ណជាតិរបស់និស្សិត" 
        },
        "doc-birth": { 
            "en": "~ 1 copy of student's birth certificate (if applicable.)", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃសំបុត្រកំណើតរបស់និស្សិត (ប្រសិនបើមាន)" 
        },
        "condition-fee": { 
            "en": "+ Pay the Bachelor's study fee at the PPIU's Cashier.", 
            "kh": "+ បង់ថ្លៃសិក្សាបរិញ្ញាបត្រនៅអ្នកគិតលុយរបស់ PPIU" 
        },
        "condition-start": { 
            "en": "+ Start class according to the PPIU's schedule.", 
            "kh": "+ ចាប់ផ្តើមថ្នាក់រៀនតាមកាលវិភាគរបស់ PPIU" 
        },
        "condition-rules": { 
            "en": "+ Follow all current rules and regulations of PPIU.", 
            "kh": "+ ធ្វើតាមច្បាប់ និងបទបញ្ជាបច្ចុប្បន្នទាំងអស់របស់ PPIU" 
        },
        "dates-title": { "en": "Academic Starting and End Dates:", "kh": "កាលបរិច្ឆេទចាប់ផ្តើម និងបញ្ចប់ការសិក្សា:" },
        
        "batch-19-fy-sem1-title": { "en": "+ Foundation Year (Year 1), Semester 1, Batch 19:", "kh": "+ ឆ្នាំគោល (ឆ្នាំទី ១) ឆមាសទី ១ ក្រុម ១៩:" },
        "batch-19-fy-sem1-start": { "en": "- Starting date: 26-10-2020", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ២៦-១០-២០២០" },
        "batch-19-fy-sem1-end": { "en": "- End Semester date: 28-02-2020", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ២៨-០២-២ៀ០" }, // Note: Date inconsistency
        
        "batch-18-fy-sem1-title": { "en": "+ Foundation Year (Year 2), Semester 1, Batch 18:", "kh": "+ ឆ្នាំគោល (ឆ្នាំទី ២) ឆមាសទី ១ ក្រុម ១៨:" }, // Note: Should be Year 1?
        "batch-18-fy-sem1-start": { "en": "- Starting date: 26-10-2020", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ២៦-១០-២ៀ០" },
        "batch-18-fy-sem1-end": { "en": "- End Semester date: 28-02-2020", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ២៨-០២-២ៀ០" }, // Note: Date inconsistency
        
        "batch-18-y2-sem2-title": { "en": "+ Year 2, Semester 2, Batch 18:", "kh": "+ ឆ្នាំទី ២ ឆមាសទី ២ ក្រុម ១៨:" },
        "batch-18-y2-sem2-start": { "en": "- Starting date: 09-03-2021", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ០៩-០៣-២ៀ១" },
        "batch-18-y2-sem2-end": { "en": "- End Semester date: 18-07-2021", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ១៨-០៧-២ៀ១" },
        
        "batch-17-y3-sem1-title": { "en": "+ Year 3, Semester 1, Batch 17:", "kh": "+ ឆ្នាំទី ៣ ឆមាសទី ១ ក្រុម ១៧:" },
        "batch-17-y3-sem1-start": { "en": "- Starting date: 05-10-2020", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ០៥-១០-២ៀ០" },
        "batch-17-y3-sem1-end": { "en": "- End Semester date: 07-02-2021", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ០៧-០២-២ៀ១" },
        
        "batch-17-y3-sem2-title": { "en": "+ Year 3, Semester 2, Batch 17:", "kh": "+ ឆ្នាំទី ៣ ឆមាសទី ២ ក្រុម ១៧:" },
        "batch-17-y3-sem2-start": { "en": "- Starting date: 09-03-2021", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ០៩-០៣-២ៀ១" },
        "batch-17-y3-sem2-end": { "en": "- End Semester date: 18-07-2021", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ១៨-០៧-២ៀ១" },
        
        "batch-16-y4-sem1-title": { "en": "+ Year 4, Semester 1, Batch 16:", "kh": "+ ឆ្នាំទី ៤ ឆមាសទី ១ ក្រុម ១៦:" },
        "batch-16-y4-sem1-start": { "en": "- Starting date: 07-09-2020", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ០៧-០៩-២ៀ០" },
        "batch-16-y4-sem1-end": { "en": "- End Semester date: 17-01-2021", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ១៧-០១-២ៀ១" },
        
        "batch-16-y4-sem2-title": { "en": "+ Year 4, Semester 2, Batch 16:", "kh": "+ ឆ្នាំទី ៤ ឆមាសទី ២ ក្រុម ១៦:" },
        "batch-16-y4-sem2-start": { "en": "- Starting dates: 01-02-2021", "kh": "- កាលបរិច្ឆេទចាប់ផ្តើម: ០១-០២-២ៀ១" },
        "batch-16-y4-sem2-end": { "en": "- End Semester date: 27-06-2021", "kh": "- កាលបរិច្ឆេទបញ្ចប់ឆមាស: ២៧-០៦-២ៀ១" },
        
        "contact-note": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងសម្រាប់ព័ត៌មានលម្អិតបន្ថែម" },

        // Doctoral Degree Section
        "doctoral-header": { "en": "DOCTORAL DEGREE", "kh": "សញ្ញាបត្របណ្ឌិត" },
        "doctoral-title": { "en": "DOCTORAL DEGREE", "kh": "សញ្ញាបត្របណ្ឌិត" },
        "doctoral-intro": { 
            "en": "Doctoral (PhD) is a degree that Phnom Penh International University (PPIU) provides to all students who had already passed their Master's degree. They are eligible for registering their study at PPIU, by just fulfil the following conditions:", 
            "kh": "បណ្ឌិត (PhD) គឺជាសញ្ញាបត្រមួយដែលសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ផ្តល់ជូននិស្សិតទាំងអស់ដែលបានបញ្ចប់សញ្ញាបត្រអនុបណ្ឌិតរួចហើយ។ ពួកគេមានសិទ្ធិចុះឈ្មោះសិក្សានៅ PPIU ដោយគ្រាន់តែបំពេញលក្ខខណ្ឌដូចខាងក្រោម:" 
        },
        "condition-form": { 
            "en": "+ Fill out the Associate's degree application form at PPIU with required information", 
            "kh": "+ បំពេញទម្រង់ពាក្យសុំសញ្ញាបត្របណ្ឌិតនៅ PPIU ជាមួយព័ត៌មានដែលតម្រូវឱ្យមាន" // Corrected from Associate's to Doctoral
        },
        "condition-attach": { "en": "+ Attached with:", "kh": "+ ភ្ជាប់ជាមួយ:" },
        "attach-photos": { 
            "en": "- Current 7 photo sized 4 x 6 with white background (straight face with the two ears, black hair.)", 
            "kh": "- រូបថតបច្ចុប្បន្ន ៧ សន្លឹកទំហំ ៤ x ៦ ជាមួយផ្ទៃខាងក្រោយពណ៌ស (មុខត្រង់បង្ហាញត្រចៀកទាំងពីរ សក់ខ្មៅ)" 
        },
        "attach-documents": { "en": "- Study records and documents:", "kh": "- ឯកសារសិក្សា និងឯកសារ:" },
        "doc-bac-ii": { 
            "en": "~ 1 copy of Failed BAC II provisional certificate.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃសញ្ញាបត្រអនុបណ្ឌិត" // Corrected from Failed BAC II to Master's degree
        },
        "doc-id": { 
            "en": "~ 1 copy of student's national identity card.", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃអត្តសញ្ញាណប័ណ្ណជាតិរបស់និស្សិត" 
        },
        "doc-birth": { 
            "en": "~ 1 copy of student's birth certificate (if applicable.)", 
            "kh": "~ ច្បាប់ថតចម្លង ១ ច្បាប់នៃសំបុត្រកំណើតរបស់និស្សិត (ប្រសិនបើមាន)" 
        },
        "condition-fee": { 
            "en": "+ Pay the Bachelor's study fee at the PPIU's Cashier.", 
            "kh": "+ បង់ថ្លៃសិក្សាបណ្ឌិតនៅអ្នកគិតលុយរបស់ PPIU" // Corrected from Bachelor's to Doctoral
        },
        "condition-start": { 
            "en": "+ Start class according to the PPIU's schedule.", 
            "kh": "+ ចាប់ផ្តើមថ្នាក់រៀនតាមកាលវិភាគរបស់ PPIU" 
        },
        "condition-rules": { 
            "en": "+ Follow all current rules and regulations of PPIU.", 
            "kh": "+ ធ្វើតាមច្បាប់ និងបទបញ្ជាបច្ចុប្បន្នទាំងអស់របស់ PPIU" 
        },
        "dates-title": { "en": "Academic Starting and End Dates:", "kh": "កាលបរិច្ឆេទចាប់ផ្តើម និងបញ្ចប់ការសិក្សា:" },
        "enroll-today": { "en": "- Enroll today!", "kh": "- ចុះឈ្មោះថ្ងៃនេះ!" },
        "contact-note": { "en": "Please contact us for more details.", "kh": "សូមទាក់ទងមកយើងសម្រាប់ព័ត៌មានលម្អិតបន្ថែម" },


        "project-coordinator-title": {
            "en": "Project Coordinator & Member",
            "kh": "អ្នកសម្របសម្រួលគម្រោង និងសមាជិក"
        },

        //teacher vuth

        "back-label": { "en": "BACK", "kh": "ត្រឡប់ក្រោយ" },
                "contact-info-title": { "en": "Contact Info", "kh": "ព័ត៌មានទំនាក់ទំនង" },
                "linkedin-label": { "en": "LinkedIn Profile", "kh": "ប្រវត្តិរូប LinkedIn" },
                "professor-title": { "en": "Professor", "kh": "សាស្ត្រាចារ្យ" },
                "experience-title": { "en": "+ Experience", "kh": "+ បទពិសោធន៍" },
                "deputy-director-title": { "en": ". Deputy Director", "kh": ". អនុប្រធាន" },
                "deputy-director-content": { 
                    "en": "- Data Management Center of MPTC <br>- 2014 - Present . 11 years<br>- Phnom Penh <br>",
                    "kh": "- មជ្ឈមណ្ឌលគ្រប់គ្រងទិន្នន័យនៃ MPTC <br>- ២០១៤ - បច្ចុប្បន្ន . ១១ ឆ្នាំ<br>- ភ្នំពេញ <br>"
                },
                "nationality-title": { "en": ". Nationality", "kh": ". សញ្ជាតិ" },
                "nationality-content": { "en": "Cambodian", "kh": "កម្ពុជា" },
                "deputy-director-egov-title": { "en": ". Deputy Director of E-Government Department", "kh": ". អនុនាយកនាយកដ្ឋានរដ្ឋបាលអេឡិចត្រូនិក" },
                "deputy-director-egov-content": { 
                    "en": "- General ICT Department<br>- Nov 2013 - Present . 11 years 5 months<br>- Phnom Penh<br>",
                    "kh": "- នាយកដ្ឋាន ICT ទូទៅ<br>- វិច្ឆិកា ២០១៣ - បច្ចុប្បន្ន . ១១ ឆ្នាំ ៥ ខែ<br>- ភ្នំពេញ<br>"
                },
                "lecturer-title": { "en": ". Lecturer", "kh": ". សាស្ត្រាចារ្យ" },
                "lecturer-content": { 
                    "en": "- Phnom Penh International University <br>- 2013 - Present . 12 years<br>- Phnom Penh <br>",
                    "kh": "- សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ <br>- ២០១៣ - បច្ចុប្បន្ន . ១២ ឆ្នាំ<br>- ភ្នំពេញ <br>"
                },
                "ict-official-title": { "en": ". ICT Government Official", "kh": ". មន្ត្រីរដ្ឋាភិបាលផ្នែក ICT" },
                "ict-official-content": { 
                    "en": "- Royal Government of Cambodia <br>- 2007 - Present . 18 years <br>- Phnom Penh, Cambodia <br>- The National Information Communications Technology Development Authority (NiDA) is a government agency responsible for managing the development of the information technology industry in Cambodia. Among the agency's projects are the computerization of government function and training of internet personnel.",
                    "kh": "- រាជរដ្ឋាភិបាលកម្ពុជា <br>- ២០០៧ - បច្ចុប្បន្ន . ១៨ ឆ្នាំ <br>- ភ្នំពេញ កម្ពុជា <br>- អាជ្ញាធរអភិវឌ្ឍន៍បច្ចេកវិទ្យាទំនាក់ទំនងព័ត៌មានជាតិ (NiDA) គឺជាទីភ្នាក់ងាររដ្ឋាភិបាលដែលទទួលខុសត្រូវក្នុងការគ្រប់គ្រងការអភិវឌ្ឍឧស្សាហកម្មបច្ចេកវិទ្យាព័ត៌មាននៅកម្ពុជា។ ក្នុងចំណោមគម្រោងរបស់ទីភ្នាក់ងារនេះមានការធ្វើឱ្យមុខងាររដ្ឋាភិបាលទៅជាកុំព្យូទ័រ និងការបណ្តុះបណ្តាលបុគ្គលិកអ៊ីនធឺណិត។"
                },
                "nida-title": { "en": "National ICT Development Authority (NiDA)", "kh": "អាជ្ញាធរអភិវឌ្ឍន៍បច្ចេកវិទ្យាទំនាក់ទំនងព័ត៌មានជាតិ (NiDA)" },
                "nida-content": { "en": "- 18 years<br>", "kh": "- ១៨ ឆ្នាំ<br>" },
                "web-dev-title": { "en": ". Web Developer", "kh": ". អ្នកអភិវឌ្ឍន៍គេហទំព័រ" },
                "web-dev-content": { 
                    "en": "- 2007 - Present . 18 years <br>- Phnom Penh, Cambodia <br>- Analyze, Design and Develop Web Application, Web Site UI and Content Management System (CMS) using PHP, MySQL, JavaScript, JQuery, XML and some of other web-based technologies and databases.<br>",
                    "kh": "- ២០០៧ - បច្ចុប្បន្ន . ១៨ ឆ្នាំ <br>- ភ្នំពេញ កម្ពុជា <br>- វិភាគ រចនា និងអភិវឌ្ឍកម្មវិធីគេហទំព័រ ចំណុចប្រទាក់គេហទំព័រ (UI) និងប្រព័ន្ធគ្រប់គ្រងមាតិកា (CMS) ដោយប្រើ PHP, MySQL, JavaScript, JQuery, XML និងបច្ចេកវិទ្យា និងមូលដ្ឋានទិន្នន័យផ្អែកលើគេហទំព័រផ្សេងទៀត។<br>"
                },
                "net-admin-title": { "en": ". Network Administrator", "kh": ". អ្នកគ្រប់គ្រងបណ្តាញ" },
                "net-admin-content": { 
                    "en": "- Phnom Penh, Cambodia <br>- Server Administration, Maintenance and Security including Web Server, DNS Server, Mail Server, File Server and some of other servers. <br>- Technologies involved are Microsoft Operating System, Linux Operating System, Apache and Tomcat Web Server, MySQL, CUBRID, Authentication and Policy. <br>- Cooperate with KISAN Telecom Co., Ltd, Seoul, Korea. <br>",
                    "kh": "- ភ្នំពេញ កម្ពុជា <br>- ការគ្រប់គ្រង ថែទាំ និងសុវត្ថិភាពម៉ាស៊ីនមេ រួមមាន ម៉ាស៊ីនមេគេហទំព័រ, DNS Server, Mail Server, File Server និងម៉ាស៊ីនមេផ្សេងទៀត។ <br>- បច្ចេកវិទ្យាដែលពាក់ព័ន្ធរួមមាន Microsoft Operating System, Linux Operating System, Apache និង Tomcat Web Server, MySQL, CUBRID, ការផ្ទៀងផ្ទាត់ និងគោលនយោបាយ។ <br>- សហការជាមួយ KISAN Telecom Co., Ltd, សេអ៊ូល កូរ៉េ។ <br>"
                },
                "app-dev-title": { "en": ". Application Developer", "kh": ". អ្នកអភិវឌ្ឍន៍កម្មវិធី" },
                "app-dev-content": { 
                    "en": "- 2009 - 2011 . 2 years <br>- Phnom Penh, Cambodia <br>- Joined with PAIS (Provincial Administration Information System) project that cooperated with Korean experts as a application developer for development and maintenance of resident registration application system. <br>- Technologies involved are Virtual Basic dot Net, CUBRID. <br>",
                    "kh": "- ២០០៩ - ២០១១ . ២ ឆ្នាំ <br>- ភ្នំពេញ កម្ពុជា <br>- ចូលរួមជាមួយគម្រោង PAIS (ប្រព័ន្ធព័ត៌មានរដ្ឋបាលខេត្ត) ដែលសហការជាមួយអ្នកជំនាញកូរ៉េក្នុងនាមជាអ្នកអភិវឌ្ឍន៍កម្មវិធីសម្រាប់ការអភិវឌ្ឍ និងថែទាំប្រព័ន្ធកម្មវិធីចុះឈ្មោះប្រជាពលរដ្ឋ។ <br>- បច្ចេកវិទ្យាដែលពាក់ព័ន្ធគឺ Virtual Basic dot Net, CUBRID។ <br>"
                },
                "intern-title": { "en": "Software Intern", "kh": "អ្នកហ្វឹកហាត់ផ្នែកកម្មវិធី" },
                "intern-content": { 
                    "en": "- Netpia Company (넷피아) <br>- Jul 2012 - Aug 2012 . 2 months <br>- Seoul, Korea <br>- Project planning for two month internship period. <br>- Develop a Smart TV application named NLIA Browser providing the Internet addressing service of Netpia. <br>- Samsung and LG Smart TV application development process and SDK. <br>- Technologies involved are JavaScript, JSON, HTML5, WebSocket, and other web-based technologies. <br>- Build, deploy, and test the application with the real environment. <br>",
                    "kh": "- ក្រុមហ៊ុន Netpia (넷피아) <br>- កក្កដា ២០១២ - សីហា ២០១២ . ២ ខែ <br>- សេអ៊ូល កូរ៉េ <br>- ការរៀបចំផែនការគម្រោងសម្រាប់រយៈពេលហ្វឹកហាត់ ២ ខែ។ <br>- អភិវឌ្ឍកម្មវិធី Smart TV ឈ្មោះ NLIA Browser ដែលផ្តល់សេវាអាសយដ្ឋានអ៊ីនធឺណិតរបស់ Netpia។ <br>- ដំណើរការអភិវឌ្ឍកម្មវិធី Smart TV របស់ Samsung និង LG និង SDK។ <br>- បច្ចេកវិទ្យាដែលពាក់ព័ន្ធគឺ JavaScript, JSON, HTML5, WebSocket និងបច្ចេកវិទ្យាផ្អែកលើគេហទំព័រផ្សេងទៀត។ <br>- បង្កើត ដាក់ឱ្យប្រើប្រាស់ និងសាកល្បងកម្មវិធីជាមួយបរិស្ថានពិត។ <br>"
                },
                "instructor-title": { "en": ". Computer Instructor", "kh": ". គ្រូបង្រៀនកុំព្យូទ័រ" },
                "instructor-content": { 
                    "en": "- SACHAK ASIA DEVELOPMENT INSTITUTE<br>- 2011 - 2012 . 1 year<br>- Phnom Penh, Cambodia <br>",
                    "kh": "- វិទ្យាស្ថានអភិវឌ្ឍន៍អាស៊ីសច្ចៈ<br>- ២០១១ - ២០១២ . ១ ឆ្នាំ<br>- ភ្នំពេញ កម្ពុជា <br>"
                },
                "team-leader-title": { "en": ". Team Leader", "kh": ". ប្រធានក្រុម" },
                "team-leader-content": { 
                    "en": "- Khmer Invent Technology <br>- Jan 2011 - Aug 2011 . 8 months <br>- Phnom Penh, Cambodia <br>- Provides web and software application development services. <br>",
                    "kh": "- Khmer Invent Technology <br>- មករា ២០១១ - សីហា ២០១១ . ៨ ខែ <br>- ភ្នំពេញ កម្ពុជា <br>- ផ្តល់សេវាអភិវឌ្ឍន៍កម្មវិធីគេហទំព័រ និងកម្មវិធីទន់។ <br>"
                },
                "education-title": { "en": "+ Education", "kh": "+ ការអប់រំ" },
                "konkuk-title": { "en": ". 건국대학교 / Konkuk University", "kh": ". សាកលវិទ្យាល័យ Konkuk (건국대학교)" },
                "konkuk-content": { 
                    "en": "- Master of Science in Computer and Information Communication Engineering <br>- 2011 - 2013 <br>+ Research Interests: <br>- Mobile Ad-hoc Network (MANET) <br>- Mobile Computing and Applications <br>- Wireless Communication <br>- Wireless Sensor Network <br>- Computer and Network Security <br>- Cloud Computing <br>- Smart Application Devices <br>- Future Internet <br>- Internet of Things <br>",
                    "kh": "- អនុបណ្ឌិតវិទ្យាសាស្ត្រផ្នែកវិស្វកម្មកុំព្យូទ័រ និងទំនាក់ទំនងព័ត៌មាន <br>- ២០១១ - ២០១៣ <br>+ ចំណាប់អារម្មណ៍ស្រាវជ្រាវ៖ <br>- បណ្តាញ Ad-hoc ចល័ត (MANET) <br>- ការគណនាចល័ត និងកម្មវិធី <br>- ទំនាក់ទំនងឥតខ្សែ <br>- បណ្តាញឧបករណ៍ចាប់សញ្ញាឥតខ្សែ <br>- សុវត្ថិភាពកុំព្យូទ័រ និងបណ្តាញ <br>- ការគណនាលើពពក <br>- ឧបករណ៍កម្មវិធីឆ្លាតវៃ <br>- អ៊ីនធឺណិតនាពេលអនាគត <br>- អ៊ីនធឺណិតនៃវត្ថុ (Internet of Things) <br>"
                },
                "bbu-title": { "en": ". Build Bright University", "kh": ". សាកលវិទ្យាល័យ Build Bright" },
                "bbu-content": { 
                    "en": "- Bachelor Degree of Information Technology <br>- 2002 - 2006 <br>+ Course Interests: <br>- Programming <br>- Database Management System <br>- Network and Computer Security <br>- Linux Operating System <br>- Windows Operating System <br>- System Analysis and Design <br>",
                    "kh": "- បរិញ្ញាបត្រផ្នែកបច្ចេកវិទ្យាព័ត៌មាន <br>- ២០០២ - ២០០៦ <br>+ ចំណាប់អារម្មណ៍វគ្គសិក្សា៖ <br>- ការសរសេរកម្មវិធី <br>- ប្រព័ន្ធគ្រប់គ្រងមូលដ្ឋានទិន្នន័យ <br>- សុវត្ថិភាពបណ្តាញ និងកុំព្យូទ័រ <br>- ប្រព័ន្ធប្រតិបត្តិការ Linux <br>- ប្រព័ន្ធប្រតិបត្តិការ Windows <br>- ការវិភាគ និងរចនាប្រព័ន្ធ <br>"
                },

                //teacher tola

                "back-label": { "en": "BACK", "kh": "ត្រឡប់ក្រោយ" },
                "contact-info-title": { "en": "Contact Info", "kh": "ព័ត៌មានទំនាក់ទំនង" },
                "linkedin-label": { "en": "LinkedIn Profile", "kh": "ប្រវត្តិរូប LinkedIn" },
                "professor-title": { "en": "Professor", "kh": "សាស្ត្រាចារ្យ" },
                "experience-title": { "en": "+ Experience", "kh": "+ បទពិសោធន៍" },
                "assistant-title": { "en": "Assistant to Secretary of State", "kh": "ជំនួយការរដ្ឋលេខាធិការ" },
                "assistant-content": { 
                    "en": "- Ministry of Post and Telecommunications · Full-time<br>- Present · 3 yrs 4 mos Jan 2022 to Present<br>- Manage ICT, Administration, Finance<br>- Manage and develop Cybersecurity administration and reporting <br>",
                    "kh": "- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ · ពេញម៉ោង<br>- បច្ចុប្បន្ន · ៣ ឆ្នាំ ៤ ខែ មករា ២០២២ ដល់ បច្ចុប្បន្ន<br>- គ្រប់គ្រង ICT រដ្ឋបាល ហិរញ្ញវត្ថុ<br>- គ្រប់គ្រង និងអភិវឌ្ឍរដ្ឋបាលសុវត្ថិភាពតាមអ៊ីនធឺណិត និងរបាយការណ៍ <br>"
                },
                "nationality-title": { "en": ". Nationality", "kh": ". សញ្ជាតិ" },
                "nationality-content": { "en": "Cambodian", "kh": "កម្ពុជា" },
                "it-lecturer-ppiu-title": { "en": ". Information Technology Lecturer", "kh": ". គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាន" },
                "it-lecturer-ppiu-content": { 
                    "en": "- Phnom Penh International University · Part-time <br>- Present · 3 yrs 4 mos Jan 2022 to Present<br>- Nov 2013 - Present . 11 years 5 months<br>",
                    "kh": "- សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ · ក្រៅម៉ោង <br>- បច្ចុប្បន្ន · ៣ ឆ្នាំ ៤ ខែ មករា ២០២២ ដល់ បច្ចុប្បន្ន<br>- វិច្ឆិកា ២០១៣ - បច្ចុប្បន្ន . ១១ ឆ្នាំ ៥ ខែ<br>"
                },
                "it-lecturer-spi-title": { "en": ". Information Technology Lecturer", "kh": ". គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាន" },
                "it-lecturer-spi-content": { 
                    "en": "- Saint Paul Institute (SPI) · Part-time <br>- Aug 2017 - Present · 7 yrs 9 mos <br>",
                    "kh": "- វិទ្យាស្ថាន Saint Paul (SPI) · ក្រៅម៉ោង <br>- សីហា ២០១៧ - បច្ចុប្បន្ន · ៧ ឆ្នាំ ៩ ខែ <br>"
                },
                "education-title": { "en": "+ Education", "kh": "+ ការអប់រំ" },
                "uc-title": { "en": ". University of Cambodia", "kh": ". សាកលវិទ្យាល័យកម្ពុជា" },
                "uc-content": { 
                    "en": "- Master of Business Administration <br>- MBA, International Business <br>- Sep 2016 - Dec 2019 <br>- Grade: 3.5 <br>",
                    "kh": "- អនុបណ្ឌិតផ្នែកគ្រប់គ្រងពាណិជ្ជកម្ម <br>- MBA ពាណិជ្ជកម្មអន្តរជាតិ <br>- កញ្ញា ២០១៦ - ធ្នូ ២០១៩ <br>- ពិន្ទុ៖ ៣.៥ <br>"
                },
                "cmu-title": { "en": ". Cambodian Mekong University", "kh": ". សាកលវិទ្យាល័យមេគង្គកម្ពុជា" },
                "cmu-content": { 
                    "en": "- Bachelor of Technology - BTech <br>- BTech Jan 2006 - Dec 2011 <br>- Grade: 3.0 <br>",
                    "kh": "- បរិញ្ញាបត្រផ្នែកបច្ចេកវិទ្យា - BTech <br>- BTech មករា ២០០៦ - ធ្នូ ២០១១ <br>- ពិន្ទុ៖ ៣.០ <br>"
                },
                "norton-title": { "en": ". Norton University", "kh": ". សាកលវិទ្យាល័យ Norton" },
                "norton-content": { 
                    "en": "- Master of IT, Information Technology <br>- May 2012 <br>",
                    "kh": "- អនុបណ្ឌិតផ្នែក IT បច្ចេកវិទ្យាព័ត៌មាន <br>- ឧសភា ២០១២ <br>"
                },
                "skills-title": { "en": "+ Skills", "kh": "+ ជំនាញ" },
                "systems-analysis-title": { "en": ". Systems Analysis", "kh": ". ការវិភាគប្រព័ន្ធ" },
                "systems-analysis-content": { 
                    "en": "- Information Technology Lecturer at Saint Paul Institute (SPI) <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅវិទ្យាស្ថាន Saint Paul (SPI) <br>"
                },
                "e-commerce-title": { "en": ". E-Commerce", "kh": ". ពាណិជ្ជកម្មអេឡិចត្រូនិក" },
                "e-commerce-content": { 
                    "en": "- Information Technology Lecturer at Saint Paul Institute (SPI) <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅវិទ្យាស្ថាន Saint Paul (SPI) <br>"
                },
                "pmis-title": { "en": ". Project Management Information Systems (PMIS)", "kh": ". ប្រព័ន្ធព័ត៌មានគ្រប់គ្រងគម្រោង (PMIS)" },
                "pmis-content": { 
                    "en": "- Information Technology Lecturer at Saint Paul Institute (SPI) <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅវិទ្យាស្ថាន Saint Paul (SPI) <br>"
                },
                "data-structures-title": { "en": ". Data Structures", "kh": ". រចនាសម្ព័ន្ធទិន្នន័យ" },
                "data-structures-content": { 
                    "en": "- Information Technology Lecturer at Saint Paul Institute (SPI) <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅវិទ្យាស្ថាន Saint Paul (SPI) <br>"
                },
                "uni-lecturing-title": { "en": ". University Lecturing", "kh": ". ការបង្រៀននៅសាកលវិទ្យាល័យ" },
                "uni-lecturing-content": { 
                    "en": "- Information Technology Lecturer at Phnom Penh International University <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ <br>"
                },
                "ict-global-commerce-title": { "en": ". ICT and Global Commerce", "kh": ". ICT និងពាណិជ្ជកម្មសកល" },
                "ict-global-commerce-content": { 
                    "en": "- Information Technology Lecturer at Phnom Penh International University <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ <br>"
                },
                "db-admin-title": { "en": ". Database Administration", "kh": ". ការគ្រប់គ្រងមូលដ្ឋានទិន្នន័យ" },
                "db-admin-content": { 
                    "en": "- Information Technology Lecturer at Phnom Penh International University <br>",
                    "kh": "- គ្រូបង្រៀនបច្ចេកវិទ្យាព័ត៌មាននៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ <br>"
                },
                "business-planning-title": { "en": ". Business Planning", "kh": ". ការធ្វើផែនការអាជីវកម្ម" },
                "business-planning-content": { 
                    "en": "- University of Cambodia <br>",
                    "kh": "- សាកលវិទ្យាល័យកម្ពុជា <br>"
                },
                "managerial-finance-title": { "en": ". Managerial Finance", "kh": ". ហិរញ្ញវត្ថុគ្រប់គ្រង" },
                "managerial-finance-content": { 
                    "en": "- University of Cambodia <br>",
                    "kh": "- សាកលវិទ្យាល័យកម្ពុជា <br>"
                },
                "intl-relations-title": { "en": ". International Relations", "kh": ". ទំនាក់ទំនងអន្តរជាតិ" },
                "intl-relations-content": { 
                    "en": "- University of Cambodia <br>",
                    "kh": "- សាកលវិទ្យាល័យកម្ពុជា <br>"
                },
                "economics-title": { "en": ". Economics", "kh": ". សេដ្ឋកិច្ច" },
                "economics-content": { 
                    "en": "- University of Cambodia <br>",
                    "kh": "- សាកលវិទ្យាល័យកម្ពុជា <br>"
                },
                "net-admin-title": { "en": ". Network Administration", "kh": ". ការគ្រប់គ្រងបណ្តាញ" },
                "net-admin-content": { 
                    "en": "- Cambodian Mekong University <br>",
                    "kh": "- សាកលវិទ្យាល័យមេគង្គកម្ពុជា <br>"
                },
                "c-sharp-title": { "en": ". C#", "kh": ". C#" },
                "c-sharp-content": { 
                    "en": "- Cambodian Mekong University <br>",
                    "kh": "- សាកលវិទ្យាល័យមេគង្គកម្ពុជា <br>"
                },
                "db-programming-title": { "en": ". Database Programming", "kh": ". ការសរសេរកម្មវិធីមូលដ្ឋានទិន្នន័យ" },
                "db-programming-content": { 
                    "en": "- Cambodian Mekong University <br>",
                    "kh": "- សាកលវិទ្យាល័យមេគង្គកម្ពុជា <br>"
                },
                "net-security-title": { "en": ". Network Security", "kh": ". សុវត្ថិភាពបណ្តាញ" },
                "net-security-content": { 
                    "en": "- Cambodian Mekong University <br>",
                    "kh": "- សាកលវិទ្យាល័យមេគង្គកម្ពុជា <br>"
                },
                "web-dev-title": { "en": ". Web Development", "kh": ". ការអភិវឌ្ឍគេហទំព័រ" },
                "web-dev-content": { 
                    "en": "- Cambodian Mekong University <br>",
                    "kh": "- សាកលវិទ្យាល័យមេគង្គកម្ពុជា <br>"
                },
                "proj-management-title": { "en": ". Project Management", "kh": ". ការគ្រប់គ្រងគម្រោង" },
                "proj-management-content": { 
                    "en": "- 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- Ministry of Post and Telecommunications <br>- University of Cambodia <br>",
                    "kh": "- បទពិសោធន៍ ២ នៅក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- សាកលវិទ្យាល័យកម្ពុជា <br>"
                },
                "communication-title": { "en": ". Communication", "kh": ". ការទំនាក់ទំនង" },
                "communication-content": { 
                    "en": "- Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- Ministry of Post and Telecommunications <br>",
                    "kh": "- ជំនួយការរដ្ឋលេខាធិការនៅក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>"
                },
                "finance-title": { "en": ". Finance", "kh": ". ហិរញ្ញវត្ថុ" },
                "finance-content": { 
                    "en": "- Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- Ministry of Post and Telecommunications <br>",
                    "kh": "- ជំនួយការរដ្ឋលេខាធិការនៅក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>"
                },
                "cybersecurity-title": { "en": ". Cybersecurity", "kh": ". សុវត្ថិភាពតាមអ៊ីនធឺណិត" },
                "cybersecurity-content": { 
                    "en": "- 2 experiences across ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- Ministry of Post and Telecommunications <br>",
                    "kh": "- បទពិសោធន៍ ២ នៅក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>"
                },
                "sdlc-title": { "en": ". Software Development Life Cycle (SDLC)", "kh": ". វដ្តជីវិតនៃការអភិវឌ្ឍកម្មវិធី (SDLC)" },
                "sdlc-content": { 
                    "en": "- Assistant to Secretary of State at ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- Ministry of Post and Telecommunications <br>",
                    "kh": "- ជំនួយការរដ្ឋលេខាធិការនៅក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>- ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍ <br>"
                },

                //teacher samart

                "back-label": { "en": "BACK", "kh": "ត្រឡប់ក្រោយ" },
            "contact-info-title": { "en": "Contact Info", "kh": "ព័ត៌មានទំនាក់ទំនង" },
            "linkedin-label": { "en": "LinkedIn Profile", "kh": "ប្រវត្តិរូប LinkedIn" },
            "professor-title": { "en": "Professor", "kh": "សាស្ត្រាចារ្យ" },
            "experience-title": { "en": "+ Experience", "kh": "+ បទពិសោធន៍" },
            "senior-vice-rector-title": { "en": ". Senior Vice Rector", "kh": ". អនុសាកលវិទ្យាធិការជាន់ខ្ពស់" },
            "senior-vice-rector-content": { 
                "en": "- Phnom Penh International University (PPIU)<br>- May 2011 to Present · 14 yrs<br>- In charge of university general affair.<br>",
                "kh": "- សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)<br>- ឧសភា ២០១១ ដល់ បច្ចុប្បន្ន · ១៤ ឆ្នាំ<br>- ទទួលខុសត្រូវលើកិច្ចការទូទៅរបស់សាកលវិទ្យាល័យ។<br>"
            },
            "nationality-title": { "en": ". Nationality", "kh": ". សញ្ជាតិ" },
            "nationality-content": { "en": "Cambodian", "kh": "កម្ពុជា" },
            "chief-accounting-title": { "en": ". Chief of Accounting & Finance dept.", "kh": ". ប្រធានផ្នែកគណនេយ្យ និងហិរញ្ញវត្ថុ" },
            "chief-accounting-content": { 
                "en": "- PPIU<br>- 2006 - 2014 · 8 yrs<br>",
                "kh": "- PPIU<br>- ២០០៦ - ២០១៤ · ៨ ឆ្នាំ<br>"
            },
            "hacl-title": { "en": ". Hello Axiata Company Limited (HACL)", "kh": ". ក្រុមហ៊ុន Hello Axiata Limited (HACL)" },
            "hacl-content": { 
                "en": "- 3 yrs 6 mos<br>",
                "kh": "- ៣ ឆ្នាំ ៦ ខែ<br>"
            },
            "head-ict-title": { "en": ". Head of Information & Communication Technology (ICT)", "kh": ". ប្រធានផ្នែកបច្ចេកវិទ្យាព័ត៌មាន និងទំនាក់ទំនង (ICT)" },
            "head-ict-content": { 
                "en": "- Jan 2010 - Jun 2011 · 1 yr 6 mos <br>",
                "kh": "- មករា ២០១០ - មិថុនា ២០១១ · ១ ឆ្នាំ ៦ ខែ <br>"
            },
            "head-intl-business-title": { "en": ". Head of International Business & Billing", "kh": ". ប្រធានផ្នែកអាជីវកម្មអន្តរជាតិ និងវិក្កយបត្រ" },
            "head-intl-business-content": { 
                "en": "- Jan 2008 - Dec 2009 · 2 yrs <br>",
                "kh": "- មករា ២០០៨ - ធ្នូ ២០០៩ · ២ ឆ្នាំ <br>"
            },
            "billing-roaming-title": { "en": ". Billing & International Roaming Manager", "kh": ". អ្នកគ្រប់គ្រងវិក្កយបត្រ និងសេវារ៉ូមីងអន្តរជាតិ" },
            "billing-roaming-content": { 
                "en": "- SAMART <br>- Jan 2000 - Mar 2008 · 8 yrs 3 mos <br>- Head quarter <br>",
                "kh": "- SAMART <br>- មករា ២០០០ - មីនា ២០០៨ · ៨ ឆ្នាំ ៣ ខែ <br>- ទីស្នាក់ការកណ្តាល <br>"
            },
            "education-title": { "en": "+ Education", "kh": "+ ការអប់រំ" },
            "ait-title": { "en": ". Asian Institute of Technology, Thailand (December 1996)", "kh": ". វិទ្យាស្ថានបច្ចេកវិទ្យាអាស៊ី ប្រទេសថៃ (ធ្នូ ១៩៩៦)" },
            "ait-content": { 
                "en": "- Master of Science, Computer Science 1995 - 1996 <br>- Activities and societies: AIT Alumni <br>",
                "kh": "- អនុបណ្ឌិតវិទ្យាសាស្ត្រ ផ្នែកវិទ្យាសាស្ត្រកុំព្យូទ័រ ១៩៩៥ - ១៩៩៦ <br>- សកម្មភាព និងសមាគម៖ អតីតនិស្សិត AIT <br>"
            },
            "skills-title": { "en": "+ Skills", "kh": "+ ជំនាញ" },
            "telecom-title": { "en": ". Telecommunications", "kh": ". ទូរគមនាគមន៍" },
            "three-g-title": { "en": ". 3G", "kh": ". 3G" },
            "management-title": { "en": ". Management", "kh": ". ការគ្រប់គ្រង" },
            "project-management-title": { "en": ". Project Management", "kh": ". ការគ្រប់គ្រងគម្រោង" },
            "vas-title": { "en": ". VAS", "kh": ". VAS" },
            "team-management-title": { "en": ". Team Management", "kh": ". ការគ្រប់គ្រងក្រុម" },
            "business-planning-title": { "en": ". Business Planning", "kh": ". ការធ្វើផែនការអាជីវកម្ម" },
            "project-planning-title": { "en": ". Project Planning", "kh": ". ការធ្វើផែនការគម្រោង" },
            "team-leadership-title": { "en": ". Team Leadership", "kh": ". ភាពជាអ្នកដឹកនាំក្រុម" },
            "intl-relations-title": { "en": ". International Relations", "kh": ". ទំនាក់ទំនងអន្តរជាតិ" },
            "intl-relations-content": { 
                "en": "- University of Cambodia <br>",
                "kh": "- សាកលវិទ្យាល័យកម្ពុជា <br>"
            },
            "training-title": { "en": ". Training", "kh": ". ការបណ្តុះបណ្តាល" },
            "networking-title": { "en": ". Networking", "kh": ". បណ្តាញ" },
            "product-management-title": { "en": ". Product Management", "kh": ". ការគ្រប់គ្រងផលិតផល" },
            "analysis-title": { "en": ". Analysis", "kh": ". ការវិភាគ" },
            "strategic-leadership-title": { "en": ". Strategic Leadership", "kh": ". ភាពជាអ្នកដឹកនាំជាយុទ្ធសាស្ត្រ" },
        
            //teacher sity

            "back-label": { "en": "BACK", "kh": "ត្រឡប់ក្រោយ" },
            "contact-info-title": { "en": "Contact Info", "kh": "ព័ត៌មានទំនាក់ទំនង" },
            "linkedin-label": { "en": "LinkedIn Profile", "kh": "ប្រវត្តិរូប LinkedIn" },
            "professor-title": { "en": "Professor", "kh": "សាស្ត្រាចារ្យ" },
            "experience-title": { "en": "+ Experience", "kh": "+ បទពិសោធន៍" },
            "exec-director-title": { "en": ". Executive Director", "kh": ". នាយកប្រតិបត្តិ" },
            "exec-director-content": { 
                "en": "- SVI (Specialized Vocational Institute) · Full-time <br>- Dec 2023 - Present · 1 yr 5 mos<br>- Poitpet, Banteay Meanchey, Cambodia<br>",
                "kh": "- SVI (វិទ្យាស្ថានជំនាញវិជ្ជាជីវៈ) · ពេញម៉ោង <br>- ធ្នូ ២០២៣ - បច្ចុប្បន្ន · ១ ឆ្នាំ ៥ ខែ<br>- ប៉ោយប៉ែត បន្ទាយមានជ័យ កម្ពុជា<br>"
            },
            "nationality-title": { "en": ". Nationality", "kh": ". សញ្ជាតិ" },
            "nationality-content": { "en": "Cambodian", "kh": "កម្ពុជា" },
            "it-lecturer-title": { "en": ". IT Lecturer", "kh": ". គ្រូបង្រៀនផ្នែក IT" },
            "it-lecturer-content": { 
                "en": "- PPIU <br>- Sep 2002 - Nov 2023 · 21 yrs 3 mos Phnom Penh<br>- C/C++ Programming, DBMS, E-Commerce, UML<br>",
                "kh": "- PPIU <br>- កញ្ញា ២០០២ - វិច្ឆិកា ២ៀ២៣ · ២១ ឆ្នាំ ៣ ខែ ភ្នំពេញ<br>- ការសរសេរកម្មវិធី C/C++ ប្រព័ន្ធគ្រប់គ្រងទិន្នន័យ (DBMS) ពាណិជ្ជកម្មអេឡិចត្រូនិក និង UML<br>"
            },
            "freelance-consultant-title": { "en": ". Freelance IT Consultant", "kh": ". អ្នកប្រឹក្សា IT ឯករាជ្យ" },
            "freelance-consultant-content": { 
                "en": "- Self Employed <br>- Jun 2002 - Nov 2023 · 21 yrs 6 mos <br>- Cambodia <br>- Provide consultancy service in the field of IT infrastructure, system analysis and design, software development, database management system and related IT work. <br>",
                "kh": "- ធ្វើការដោយខ្លួនឯង <br>- មិថុនា ២០០២ - វិច្ឆិកា ២០២៣ · ២១ ឆ្នាំ ៦ ខែ <br>- កម្ពុជា <br>- ផ្តល់សេវាប្រឹក្សាក្នុងវិស័យហេដ្ឋារចនាសម្ព័ន្ធ IT ការវិភាគនិងរចនាប្រព័ន្ធ ការអភិវឌ្ឍកម្មវិធី ប្រព័ន្ធគ្រប់គ្រងទិន្នន័យ និងការងារ IT ពាក់ព័ន្ធ។ <br>"
            },
            "moe-title": { "en": ". Ministry of Education", "kh": ". ក្រសួងអប់រំ" },
            "moe-content": { "en": "- 1 yr 7 mos <br>", "kh": "- ១ ឆ្នាំ ៧ ខែ <br>" },
            "ec-consultant-title": { "en": ". IT Specialist Consultant - EC (European Commission) - HRMIS Database Security", "kh": ". អ្នកប្រឹក្សាឯកទេស IT - EC (គណៈកម្មការអឺរ៉ុប) - សុវត្ថិភាពទិន្នន័យ HRMIS" },
            "ec-consultant-content": { 
                "en": "- Nov 2010 - Mar 2011 · 5 mos <br>- Design a master plan for database security for the Department of Personnel for the Ministry of Education <br>",
                "kh": "- វិច្ឆិកា ២០១០ - មីនា ២០១១ · ៥ ខែ <br>- រចនាផែនការមេសម្រាប់សុវត្ថិភាពទិន្នន័យសម្រាប់នាយកដ្ឋានបុគ្គលិកនៃក្រសួងអប់រំ <br>"
            },
            "adb-consultant-title": { "en": ". IT Specialist Consultant - ADB (Enhancing Education Quality Project)", "kh": ". អ្នកប្រឹក្សាឯកទេស IT - ADB (គម្រោងបង្កើនគុណភាពអប់រំ)" },
            "adb-consultant-content": { 
                "en": "- Sep 2009 - Jan 2011 · 1 yr 5 mos <br>- Funded by ADB for the Ministry of Education working on three database management systems. 1. HRMIS (Human Resource Management Information System), EMIS (Education Management Information System) and FMIS (Financial Management Information System) <br>",
                "kh": "- កញ្ញា ២០០៩ - មករា ២០១១ · ១ ឆ្នាំ ៥ ខែ <br>- ឧបត្ថម្ភដោយ ADB សម្រាប់ក្រសួងអប់រំ ធ្វើការលើប្រព័ន្ធគ្រប់គ្រងទិន្នន័យចំនួនបី៖ ១. HRMIS (ប្រព័ន្ធព័ត៌មានគ្រប់គ្រងធនធានមនុស្ស) EMIS (ប្រព័ន្ធព័ត៌មានគ្រប់គ្រងអប់រំ) និង FMIS (ប្រព័ន្ធព័ត៌មានគ្រប់គ្រងហិរញ្ញវត្ថុ) <br>"
            },
            "managing-director-title": { "en": ". Managing Director", "kh": ". នាយកគ្រប់គ្រង" },
            "managing-director-content": { 
                "en": "- K Digital Solutions <br>- Nov 2007 - Mar 2009 · 1 yr 7 mos <br>- KDS is an IT firm equipped with pools of professionals with mass experiences in the field of IT and businesses <br>",
                "kh": "- K Digital Solutions <br>- វិច្ឆិកា ២០០៧ - មីនា ២០០៩ · ១ ឆ្នាំ ៧ ខែ <br>- KDS ជាក្រុមហ៊ុន IT ដែលបំពាក់ដោយក្រុមអ្នកជំនាញដែលមានបទពិសោធន៍ច្រើនក្នុងវិស័យ IT និងអាជីវកម្ម <br>"
            },
            "khmer-handicraft-title": { "en": ". Co-Founder", "kh": ". សហស្ថាបនិក" },
            "khmer-handicraft-content": { 
                "en": "- Khmer Handicraft <br>- Jan 2007 - Mar 2009 · 2 yr 3 mos <br>- Khmer Handicraft is an e-commerce site to promote art and craft products produce by the poor Cambodian and handicapped people. <br>- Helping to buy Khmer Handicraft products mean helping an orphan or a handicapped person <br>",
                "kh": "- ខ្មែរហេនឌីខាហ្វ <br>- មករា ២០០៧ - មីនា ២០០៩ · ២ ឆ្នាំ ៣ ខែ <br>- ខ្មែរហេនឌីខាហ្វ ជាគេហទំព័រពាណិជ្ជកម្មអេឡិចត្រូនិកដើម្បីផ្សព្វផ្សាយផលិតផលសិល្បៈ និងសិប្បកម្មដែលផលិតដោយជនក្រីក្រ និងជនពិការកម្ពុជា។ <br>- ការជួយទិញផលិតផលខ្មែរហេនឌីខាហ្វ មានន័យថាជួយកុមារកំព្រា ឬជនពិការម្នាក់ <br>"
            },
            "morodok-title": { "en": ". Co-Founder", "kh": ". សហស្ថាបនិក" },
            "morodok-content": { 
                "en": "- Morodok <br>- Jan 2007 - Mar 2009 · 2 yrs 3 mos <br>- IT Lecturer. Freelance IT Consultant. <br>",
                "kh": "- មរតក <br>- មករា ២០០៧ - មីនា ២០០៩ · ២ ឆ្នាំ ៣ ខែ <br>- គ្រូបង្រៀន IT។ អ្នកប្រឹក្សា IT ឯករាជ្យ។ <br>"
            },
            "general-manager-title": { "en": ". General Manager", "kh": ". អ្នកគ្រប់គ្រងទូទៅ" },
            "general-manager-content": { 
                "en": "- Net I Solutions <br>- Dec 2006 - Nov 2007 · 1 yr <br>- Overseeing 3 core departments: Software Development, Professional Training, and Hardware Installation and Maintenance <br>",
                "kh": "- Net I Solutions <br>- ធ្នូ ២០០៦ - វិច្ឆិកា ២០០៧ · ១ ឆ្នាំ <br>- ត្រួតពិនិត្យនាយកដ្ឋានស្នូលចំនួន ៣៖ ការអភិវឌ្ឍកម្មវិធី ការបណ្តុះបណ្តាលវិជ្ជាជីវៈ និងការដំឡើងនិងថែទាំផ្នែករឹង <br>"
            },
            "dean-it-title": { "en": ". Dean of IT", "kh": ". ព្រឹទ្ធបុរសផ្នែក IT" },
            "dean-it-content": { 
                "en": "- Phnom Penh International University (Former ASEAN University) <br>- 2002 - 2006 · 4 yrs <br>- Recruitment of IT Lecturers, Scheduling of course offering, Curriculum Development, and Strategic Formulation to strengthen the U <br>",
                "kh": "- សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (អតីតសាកលវិទ្យាល័យអាស៊ាន) <br>- ២០០២ - ២០០៦ · ៤ ឆ្នាំ <br>- ការជ្រើសរើសគ្រូបង្រៀន IT ការកំណត់កាលវិភាគវគ្គសិក្សា ការអភិវឌ្ឍកម្មវិធីសិក្សា និងការបង្កើតយុទ្ធសាស្ត្រដើម្បីពង្រឹងសាកលវិទ្យាល័យ <br>"
            },
            "prog-developer-title": { "en": ". Program Developer/Sun Accounting System Administrator", "kh": ". អ្នកអភិវឌ្ឍកម្មវិធី/អ្នកគ្រប់គ្រងប្រព័ន្ធគណនេយ្យ Sun" },
            "prog-developer-content": { 
                "en": "- CamGSM <br>- Nov 1997 - Apr 2002 · 4 yrs 6 mos <br>- Develop Several Applications for Helpline Center, Customer Service Dept, Finance, Warehouse and Cashier maintain Sun Accounting System and ongoing Database Management System <br>",
                "kh": "- CamGSM <br>- វិច្ឆិកា ១៩៩៧ - មេសា ២០០២ · ៤ ឆ្នាំ ៦ ខែ <br>- អភិវឌ្ឍកម្មវិធីជាច្រើនសម្រាប់មជ្ឈមណ្ឌលជំនួយ នាយកដ្ឋានសេវាអតិថិជន ហិរញ្ញវត្ថុ ឃ្លាំង និងអ្នកគិតលុយ ថែទាំប្រព័ន្ធគណនេយ្យ Sun និងប្រព័ន្ធគ្រប់គ្រងទិន្នន័យដែលកំពុងដំណើរការ <br>"
            },
            "education-title": { "en": "+ Education", "kh": "+ ការអប់រំ" },
            "seau-title": { "en": ". Southeast Asia Union College, Singapore", "kh": ". មហាវិទ្យាល័យសហភាពអាស៊ីអាគ្នេយ៍ សិង្ហបុរី" },
            "seau-content": { 
                "en": "- Bachelor, Business Administration/Computer Science <br>- 1990 - 1995 <br>- Activities and societies: One of the outstanding students <br>- Recipient of several awards while studying there. <br>",
                "kh": "- បរិញ្ញាបត្រ រដ្ឋបាលពាណិជ្ជកម្ម/វិទ្យាសាស្ត្រកុំព្យូទ័រ <br>- ១៩៩០ - ១៩៩៥ <br>- សកម្មភាពនិងសមាគម៖ ជានិស្សិតឆ្នើមម្នាក់ <br>- ទទួលបានពានរង្វាន់ជាច្រើនពេលសិក្សានៅទីនោះ។ <br>"
            },
            "wwc-title": { "en": ". Walla Walla College, Washington, USA", "kh": ". មហាវិទ្យាល័យ Walla Walla វ៉ាស៊ីនតោន សហរដ្ឋអាមេរិក" },
            "wwc-content": { 
                "en": "- Bachelor, Business Administration <br>- 1990 - 1995 <br>- Activities and societies: One of the outstanding students. <br>",
                "kh": "- បរិញ្ញាបត្រ រដ្ឋបាលពាណិជ្ជកម្ម <br>- ១៩៩០ - ១៩៩៥ <br>- សកម្មភាពនិងសមាគម៖ ជានិស្សិតឆ្នើមម្នាក់។ <br>"
            },
            "skills-title": { "en": "+ Skills", "kh": "+ ជំនាញ" },
            "telecom-title": { "en": ". Telecommunications", "kh": ". ទូរគមនាគមន៍" },
            "analysis-title": { "en": ". Analysis", "kh": ". ការវិភាគ" },
            "strategic-planning-title": { "en": ". Strategic Planning", "kh": ". ការធ្វើផែនការជាយុទ្ធសាស្ត្រ" },
            "software-dev-title": { "en": ". Software Development", "kh": ". ការអភិវឌ្ឍកម្មវិធី" },
            "project-management-title": { "en": ". Project Management", "kh": ". ការគ្រប់គ្រងគម្រោង" },
            "business-analysis-title": { "en": ". Business Analysis", "kh": ". ការវិភាគអាជីវកម្ម" },
            "db-admin-title": { "en": ". Database Administration", "kh": ". ការគ្រប់គ្រងមូលដ្ឋានទិន្នន័យ" },
            "team-leadership-title": { "en": ". Team Leadership", "kh": ". ភាពជាអ្នកដឹកនាំក្រុម" },
            "business-strategy-title": { "en": ". Business Strategy", "kh": ". យុទ្ធសាស្ត្រអាជីវកម្ម" },
            "strategy-title": { "en": ". Strategy", "kh": ". យុទ្ធសាស្ត្រ" },
            "program-management-title": { "en": ". Program Management", "kh": ". ការគ្រប់គ្រងកម្មវិធី" },
            "management-title": { "en": ". Management", "kh": ". ការគ្រប់គ្រង" },
            "e-commerce-title": { "en": ". E-commerce", "kh": ". ពាណិជ្ជកម្មអេឡិចត្រូនិក" },
            "project-planning-title": { "en": ". Project Planning", "kh": ". ការធ្វើផែនការគម្រោង" },
            "business-planning-title": { "en": ". Business Planning", "kh": ". ការធ្វើផែនការអាជីវកម្ម" },
            "management-consulting-title": { "en": ". Management Consulting", "kh": ". ការប្រឹក្សាគ្រប់គ្រង" },
            "team-management-title": { "en": ". Team Management", "kh": ". ការគ្រប់គ្រងក្រុម" },
            "risk-management-title": { "en": ". Risk Management", "kh": ". ការគ្រប់គ្រងហានិភ័យ" },
            "business-intelligence-title": { "en": ". Business Intelligence", "kh": ". បញ្ញាអាជីវកម្ម" },
            "entrepreneurship-title": { "en": ". Entrepreneurship", "kh": ". សហគ្រិនភាព" },
            "change-management-title": { "en": ". Change Management", "kh": ". ការគ្រប់គ្រងការផ្លាស់ប្តូរ" },
            "negotiation-title": { "en": ". Negotiation", "kh": ". ការចរចា" },
            "marketing-strategy-title": { "en": ". Marketing Strategy", "kh": ". យុទ្ធសាស្ត្រទីផ្សារ" },
            "operations-management-title": { "en": ". Operations Management", "kh": ". ការគ្រប់គ្រងប្រតិបត្តិការ" },
            "new-business-dev-title": { "en": ". New Business Development", "kh": ". ការអភិវឌ្ឍអាជីវកម្មថ្មី" },
            "business-dev-title": { "en": ". Business Development", "kh": ". ការអភិវឌ្ឍអាជីវកម្ម" },
            "crm-title": { "en": ". CRM", "kh": ". CRM" },
            "budgets-title": { "en": ". Budgets", "kh": ". ថវិកា" },
            "business-process-title": { "en": ". Business Process Improvement", "kh": ". ការកែលម្អដំណើរការអាជីវកម្ម" },
            "org-dev-title": { "en": ". Organizational Development", "kh": ". ការអភិវឌ្ឍអង្គភាព" },
            "recruiting-title": { "en": ". Recruiting", "kh": ". ការជ្រើសរើសបុគ្គលិក" },
            "hr-title": { "en": ". Human Resources", "kh": ". ធនធានមនុស្ស" },
            "leadership-title": { "en": ". Leadership", "kh": ". ភាពជាអ្នកដឹកនាំ" },
            "training-title": { "en": ". Training", "kh": ". ការបណ្តុះបណ្តាល" },
            "startups-title": { "en": ". Start-ups", "kh": ". ការចាប់ផ្តើមអាជីវកម្ម" },
            "coaching-title": { "en": ". Coaching", "kh": ". ការបង្វឹក" },
            "data-analysis-title": { "en": ". Data Analysis", "kh": ". ការវិភាគទិន្នន័យ" },
            "team-building-title": { "en": ". Team Building", "kh": ". ការកសាងក្រុម" },
            "performance-management-title": { "en": ". Performance Management", "kh": ". ការគ្រប់គ្រងប្រសិទ្ធភាព" },
            "system-admin-title": { "en": ". System Administration", "kh": ". ការគ្រប់គ្រងប្រព័ន្ធ" },
            "market-research-title": { "en": ". Market Research", "kh": ". ការស្រាវជ្រាវទីផ្សារ" },
            "leadership-dev-title": { "en": ". Leadership Development", "kh": ". ការអភិវឌ្ឍភាពជាអ្នកដឹកនាំ" },
            "policy-title": { "en": ". Policy", "kh": ". គោលនយោបាយ" },
            "customer-service-title": { "en": ". Customer Service", "kh": ". សេវាអតិថិជន" },
            "networking-title": { "en": ". Networking", "kh": ". បណ្តាញ" },
            "it-title": { "en": ". Information Technology", "kh": ". បច្ចេកវិទ្យាព័ត៌មាន" },
            "systems-analysis-title": { "en": ". Systems Analysis", "kh": ". ការវិភាគប្រព័ន្ធ" },
            "vendor-management-title": { "en": ". Vendor Management", "kh": ". ការគ្រប់គ្រងអ្នកផ្គត់ផ្គង់" },
            "governance-title": { "en": ". Governance", "kh": ". អភិបាលកិច្ច" },
            "it-management-title": { "en": ". IT Management", "kh": ". ការគ្រប់គ្រង IT" },

            //teacher Buntha

            "back-label": { "en": "BACK", "kh": "ត្រឡប់ក្រោយ" },
            "contact-info-title": { "en": "Contact Info", "kh": "ព័ត៌មានទំនាក់ទំនង" },
            "linkedin-label": { "en": "LinkedIn Profile", "kh": "ប្រវត្តិរូប LinkedIn" },
            "professor-title": { "en": "Professor", "kh": "សាស្ត្រាចារ្យ" },
            "experience-title": { "en": "+ Experience", "kh": "+ បទពិសោធន៍" },
            "experience-content": {
                "en": "- 2011: Digital Convergence Technology and Policy Seoul, South Korea. Master of Technology in Computer Technology (Base on Networking).<br>- 2010: At Indian Institute of Technology Delhi (IITD), India. <br>- 2009: English Fluency and IT Skill training at CMC, Ltd New Delhi, India. <br>- 2008: International Leadership Skills, Phnom Penh, Cambodia. <br>- 2007: Bachelor degree at BBU in Network Technology. Phnom Penh, Cambodia. <br>+ Mr. Buntha used to work an Internet Gateway technical support (DIX/IIX). Open connection port (VLAN) for leased line customers through fiber optic. (CISCO router and Zyxel switch). Support to leased line customers. IT-Coordinator at University of Cambodia.",
                "kh": "- ២០១១៖ បច្ចេកវិទ្យាបញ្ចូលឌីជីថល និងគោលនយោបាយ ទីក្រុងសេអ៊ូល កូរ៉េខាងត្បូង។ អនុបណ្ឌិតផ្នែកបច្ចេកវិទ្យាកុំព្យូទ័រ (ផ្អែកលើបណ្តាញ)។<br>- ២០១០៖ នៅវិទ្យាស្ថានបច្ចេកវិទ្យាឥណ្ឌា ទីក្រុងដេលី (IITD) ប្រទេសឥណ្ឌា។ <br>- ២០០៩៖ ការបណ្តុះបណ្តាលភាសាអង់គ្លេស និងជំនាញ IT នៅ CMC, Ltd ទីក្រុងញូវដេលី ប្រទេសឥណ្ឌា។ <br>- ២០០៨៖ ជំនាញភាពជាអ្នកដឹកនាំអន្តរជាតិ ភ្នំពេញ កម្ពុជា។ <br>- ២០០៧៖ បរិញ្ញាបត្រនៅ BBU ផ្នែកបច្ចេកវិទ្យាបណ្តាញ។ ភ្នំពេញ កម្ពុជា។ <br>+ លោក ប៊ុនថា ធ្លាប់ធ្វើការជាអ្នកគាំទ្របច្ចេកទេស Internet Gateway (DIX/IIX)។ បើកច្រកតភ្ជាប់ (VLAN) សម្រាប់អតិថិជនខ្សែជួលតាមរយៈ Fiber Optic (CISCO router និង Zyxel switch)។ គាំទ្រដល់អតិថិជនខ្សែជួល។ អ្នកសម្របសម្រួល IT នៅសាកលវិទ្យាល័យកម្ពុជា។"
            },

            //professor

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
        },



        "event-titleddd": {
                    "en": "Universal Declaration of Human Rights (UDHR)",
                    "kh": "សេចក្តីប្រកាសជាសកលស្តីពីសិទ្ធិមនុស្ស (UDHR)"
                },
                "event-info-titleo": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1o": {
                    "en": "📌 students from the Human Rights Course at the Faculty of Law and Economics of Phnom Penh International University (PPIU)",
                    "kh": "📌 និស្សិតមកពីវគ្គសិទ្ធិមនុស្សនៅមហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ចនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)"
                },
                "event-dateo": {
                    "en": "📅 Date: 11 Feb 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ១១ កុម្ភៈ ២០២៥"
                },
                "event-timeo": {
                    "en": "⏰ Time: 5:30 PM - 7:00 PM",
                    "kh": "⏰ ម៉ោង: ៥:៣០ ល្ងាច - ៧:០០ ល្ងាច"
                },
                "event-locationo": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc2o": {
                    "en": "Adopted by the UN General Assembly on December 10, 1948, the UDHR continues to serve as a crucial framework for promoting and protecting human dignity worldwide. This event provided an excellent opportunity for students to deepen their understanding of these vital principles.",
                    "kh": "ត្រូវបានអនុម័តដោយមហាសន្និបាតអង្គការសហប្រជាជាតិនៅថ្ងៃទី ១០ ធ្នូ ១៩៤៨ UDHR នៅតែបន្តដើរតួជាក្របខ័ណ្ឌដ៏សំខាន់សម្រាប់ការលើកកម្ពស់ និងការពារសេចក្តីថ្លៃថ្នូររបស់មនុស្សទូទាំងពិភពលោក។ ព្រឹត្តិការណ៍នេះបានផ្តល់ឱកាសដ៏ល្អសម្រាប់និស្សិតក្នុងការស្វែងយល់កាន់តែស៊ីជម្រៅអំពីគោលការណ៍សំខាន់ៗទាំងនេះ។"
                },
                "share-event-titleo": {
                    "en": "Share this Event",
                    "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ"
                },





                "event-title1": {
                    "en": "Welcome back to class!!",
                    "kh": "សូមស្វាគមន៍ត្រឡប់មកថ្នាក់រៀនវិញ!!"
                },
                "event-info-title1": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc11": {
                    "en": "📌 Open exclusively to PPIU students",
                    "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU"
                },
                "event-date1": {
                    "en": "📅 Date: 10 Dec 2022",
                    "kh": "📅 កាលបរិច្ឆេទ: ១០ ធ្នូ ២០២២"
                },
                "event-time1": {
                    "en": "⏰ Time: 1:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ១:០០ រសៀល - ៥:ៀ០០ ល្ងាច"
                },
                "event-location1": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc21": {
                    "en": "The management of the Phnom Penh International University (PPIU) is honored to be welcomed HE Carpent Naron and the organization of the high school.",
                    "kh": "ក្រុមគ្រប់គ្រងនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) មានកិត្តិយសដែលបានស្វាគមន៍ឯកឧត្តម កាប៉ែន ណារ៉ុន និងអង្គការនៃវិទ្យាល័យ។"
                },
                "share-event-title1": {
                    "en": "Share this Event",
                    "kh": "ចែករំលែកព្រឹត្តិការណ៍នេះ"
                },





                "event-titleq": {
                    "en": "The management of (PPIU) share experiences...",
                    "kh": "ក្រុមគ្រប់គ្រងនៃ (PPIU) ចែករំលែកបទពិសោធន៍..."
                },
                "event-info-titleq": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1q": {
                    "en": "The management of the scholarships and shared the opportunity to you.",
                    "kh": "ក្រុមគ្រប់គ្រងនៃអាហារូបករណ៍ និងចែករំលែកឱកាសជូនអ្នក។"
                },
                "event-dateq": {
                    "en": "📅 Date: 21 February 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ២១ កុម្ភៈ ២០២៥"
                },
                "event-timeq": {
                    "en": "⏰ Time: 2:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ២:០០ រសៀល - ៥:០០ ល្ងាច"
                },
                "event-locationq": {
                    "en": "📍 Location: Bun Rany Hun Sen High School",
                    "kh": "📍 ទីតាំង: វិទ្យាល័យ ប៊ុន រ៉ានី ហ៊ុនសែន"
                },
                "event-info-desc2q": {
                    "en": "The Phnom Penh International University (PPIU) management shares experiences at Bun Rany Hun Sen High School, highlighting scholarship opportunities for students. Wishing you success in the upcoming high school passage exams. 🙏🙏🙏",
                    "kh": "ក្រុមគ្រប់គ្រងនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) ចែករំលែកបទពិសោធន៍នៅវិទ្យាល័យ ប៊ុន រ៉ានី ហ៊ុនសែន ដោយផ្តល់ព័ត៌មានអំពីឱកាសអាហារូបករណ៍សម្រាប់និស្សិត។ សូមជូនពរឱ្យអ្នកទទួលជោគជ័យក្នុងការប្រឡងឆ្លងថ្នាក់វិទ្យាល័យនាពេលខាងមុខ។ 🙏🙏🙏"
                },






                "event-titlez": {
                    "en": "PPIU students participate in the Cambodia-Thai Youth",
                    "kh": "និស្សិត PPIU ចូលរួមក្នុងកម្មវិធីយុវជនកម្ពុជា-ថៃ"
                },
                "event-info-titlez": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1z": {
                    "en": "📌 PPIU students participate in the Cambodia-Thai Youth",
                    "kh": "📌 និស្សិត PPIU ចូលរួមក្នុងកម្មវិធីយុវជនកម្ពុជា-ថៃ"
                },
                "event-datez": {
                    "en": "📅 Date: 08 March 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ០៨ មីនា ២០២៥"
                },
                "event-timez": {
                    "en": "⏰ Time: 2:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ២:០០ រសៀល - ៥:ៀ០០ ល្ងាច"
                },
                "event-locationz": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc2z": {
                    "en": "PPIU student activities to celebrate the Cambodia-Thailand friendship football event at the National Olympic Stadium",
                    "kh": "សកម្មភាពរបស់និស្សិត PPIU ដើម្បីអបអរព្រឹត្តិការណ៍បាល់ទាត់មិត្តភាពកម្ពុជា-ថៃ នៅកីឡដ្ឋានជាតិអូឡាំពិក"
                },






                //news


                "event-titleb": {
                    "en": "New Enrollment!",
                    "kh": "ការចុះឈ្មោះថ្មី!"
                },
                "event-info-titleb": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1b": {
                    "en": "📌 Open exclusively to PPIU students",
                    "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU"
                },
                "event-dateb": {
                    "en": "📅 Date: 05 May 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ០៥ ឧសភា ២០២៥"
                },
                "event-timeb": {
                    "en": "⏰ Time: 2:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ២:០០ រសៀល - ៥:០០ ល្ងាច"
                },
                "event-locationb": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc2b": {
                    "en": "For more information, please visit the Information Office on the 5th floor of Phnom Penh International University (In front of Bak Touk High School), or you can contact us directly through Telegram PPIU: 071 333 6777 Facebook Page: Phnom Penh International University (official).",
                    "kh": "សម្រាប់ព័ត៌មានបន្ថែម សូមទៅទស្សនាការិយាល័យព័ត៌មាននៅជាន់ទី៥ នៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (នៅមុខវិទ្យាល័យបាក់ទូក) ឬអ្នកអាចទាក់ទងមកយើងដោយផ្ទាល់តាម Telegram PPIU: 071 333 6777 ទំព័រហ្វេសប៊ុក: សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (ផ្លូវការ)។"
                },




                "event-info-titlen": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1n": {
                    "en": "📌 Open exclusively to PPIU students",
                    "kh": "📌 បើកផ្តាច់មុខសម្រាប់និស្សិត PPIU"
                },
                "event-info-daten": {
                    "en": "📅 Date: 15 March 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ១៥ មីនា ២០២៥"
                },
                "event-info-timen": {
                    "en": "⏰ Time: 2:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ២:០០ រសៀល - ៥:០០ ល្ងាច"
                },
                "event-info-locationn": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc2n": {
                    "en": "Postgraduate School Activities organized entrance exams for postgraduate students of Phnom Penh International University (PPIU).",
                    "kh": "សកម្មភាពសាលាក្រោយបរិញ្ញាបត្របានរៀបចំការប្រឡងចូលរៀនសម្រាប់និស្សិតក្រោយបរិញ្ញាបត្រនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)។"
                },



                "event-info-titlej": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1j": {
                    "en": "📌 Phnom Penh International University PPIU and General General of the CPP",
                    "kh": "📌 សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងនាយកដ្ឋានទូទៅនៃ CPP"
                },
                "event-info-datej": {
                    "en": "📅 Date: 27 February 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ២៧ កុម្ភៈ ២០២៥"
                },
                "event-info-timej": {
                    "en": "⏰ Time: 2:00 PM - 5:00 PM",
                    "kh": "⏰ ម៉ោង: ២:០០ រសៀល - ៥:០០ ល្ងាច"
                },
                "event-info-locationj": {
                    "en": "📍 Location: PPIU Center",
                    "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU"
                },
                "event-info-desc2j": {
                    "en": "Phnom Penh International University (PPIU) and the General Department of the CPP have organized the \"Musting Program of Knowledge of the User's Rights and Benefits to University Students\" to build a CEO of Cambodia in charge of the General Department of CPP. A high representative of Lok Chumteav, Minister of Commerce, held this event at Phnom Penh International University. The seminar focuses on consumer protection laws, mechanisms to file complaints with the General Department of CPP, understanding rights and protections in both online and offline markets, and the reporting steps to obtain solutions, requiring the permissions you have.",
                    "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) និងនាយកទូទៅនៃ CPP បានរៀបចំ \"កម្មវិធីចំណេះដឹងស្តីពីសិទ្ធិ និងអត្ថប្រយោជន៍របស់អ្នកប្រើប្រាស់សម្រាប់និស្សិតសាកលវិទ្យាល័យ\" ដើម្បីបង្កើតនាយកប្រតិបត្តិនៃកម្ពុជាដែលទទួលខុសត្រូវលើនាយកដ្ឋានទូទៅនៃ CPP។ តំណាងជាន់ខ្ពស់នៃលោកជំទាវ រដ្ឋមន្ត្រីក្រសួងពាណិជ្ជកម្ម បានរៀបចំព្រឹត្តិការណ៍នេះនៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ។ សិក្ខាសាលាផ្តោតលើច្បាប់ការពារអ្នកប្រើប្រាស់ យន្តការដាក់ពាក្យបណ្តឹងទៅនាយកដ្ឋានទូទៅនៃ CPP ការយល់ដឹងអំពីសិទ្ធិ និងការការពារទាំងនៅក្នុងទីផ្សារអនឡាញ និងក្រៅអនឡាញ ព្រមទាំងជំហានរាយការណ៍ដើម្បីទទួលបានដំណោះស្រាយ ដែលតម្រូវឱ្យមានការអនុញ្ញាតដែលអ្នកមាន។"
                },



                "event-info-titlel": {
                    "en": "Event Information:",
                    "kh": "ព័ត៌មានអំពីព្រឹត្តិការណ៍:"
                },
                "event-info-desc1l": {
                    "en": "📌 Phnom Penh International University PPIU and General General of the CPP",
                    "kh": "📌 សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងនាយកដ្ឋានទូទៅនៃ CPP"
                },
                "event-info-datel": {
                    "en": "📅 Date: 18 February 2025",
                    "kh": "📅 កាលបរិច្ឆេទ: ១៨ កុម្ភៈ ២០២៥"
                },
                "event-info-timel": {
                    "en": "⏰ Time: 8:00 AM - 11:00 AM",
                    "kh": "⏰ ម៉ោង: ៨:០០ ព្រឹក - ១១:០០ ព្រឹក"
                },
                "event-info-locationl": {
                    "en": "📍 Stung Treng",
                    "kh": "📍 ស្ទឹងត្រែង"
                },
                "event-info-desc2l": {
                    "en": "Phnom Penh International University (PPIU) hosts Sok Phone, the Governor of Stung Treng, and missionary studies to discuss scholarships and share opportunities with you. Wishing you success in the upcoming high school passage exams.",
                    "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU) រៀបចំទទួលឯកឧត្តម សុខ ផុន អភិបាលខេត្តស្ទឹងត្រែង និងការសិក្សាផ្នែកបេសកកម្មដើម្បីពិភាក្សាអំពីអាហារូបករណ៍ និងចែករំលែកឱកាសជូនអ្នក។ សូមជូនពរឱ្យអ្នកទទួលជោគជ័យក្នុងការប្រឡងឆ្លងថ្នាក់វិទ្យាល័យនាពេលខាងមុខ។"
                }
       
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
    document.querySelectorAll(".dropdown a").forEach(link => {
        if (translations[link.textContent.trim()]) {
            link.textContent = translations[link.textContent.trim()];
        }
    });


    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.querySelector(".search-bar input");
        const searchButton = document.querySelector(".search-bar button");
        const links = document.querySelectorAll("ul.dropdown-menu a");

        searchButton.addEventListener("click", function() {
            const query = searchInput.value.trim().toLowerCase();
            if (query === "") return;

            let found = false;

            links.forEach(link => {
                if (link.innerText.toLowerCase().includes(query)) {
                    window.location.href = link.href;
                    found = true;
                }
            });

            if (!found) {
                alert("No matching page found!");
            }
        });

        searchInput.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                searchButton.click();
            }
        });
    });
    
</script>
</html>