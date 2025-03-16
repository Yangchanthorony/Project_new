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
        "faculty-business-tourism": { "en": "<i class='fas fa-briefcase'></i> FACULTY OF BUSINESS AND TOURISM", "kh": "<i class='fas fa-briefcase'></i> មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍" },
        "faculty-law-economics": { "en": "<i class='fas fa-gavel'></i> FACULTY OF LAW AND ECONOMICS", "kh": "<i class='fas fa-gavel'></i> មហាវិទ្យាល័យនីតិសាស្ត្រ និងសេដ្ឋកិច្ច" },
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
        "library-materials": { "en": "<i class='fas fa-book'></i> LIBRARY MATERIALS", "kh": "<i class='fas fa-book'></i> សម្ភារៈបណ្ណាល័យ" },
        "about-library": { "en": "<i class='fas fa-info-circle'></i> ABOUT LIBRARY", "kh": "<i class='fas fa-info-circle'></i> អំពីបណ្ណាល័យ" },
        "Admissions": { "en": "Admissions <i class='fas fa-chevron-down'></i>", "kh": "ការចូលរៀន <i class='fas fa-chevron-down'></i>" },
        "admission-associate": { "en": "<i class='fas fa-user-graduate'></i> ASSOCIATE", "kh": "<i class='fas fa-user-graduate'></i> សញ្ញាបត្ររង" },
        "admission-master": { "en": "<i class='fas fa-user-tie'></i> MASTER", "kh": "<i class='fas fa-user-tie'></i> អនុបណ្ឌិត" },
        "admission-bachelor": { "en": "<i class='fas fa-user'></i> BACHELOR", "kh": "<i class='fas fa-user'></i> បរិញ្ញាបត្រ" },
        "admission-doctoral": { "en": "<i class='fas fa-graduation-cap'></i> DOCTORAL", "kh": "<i class='fas fa-graduation-cap'></i> បណ្ឌិត" },
        "contact": { "en": "Contact", "kh": "ទំនាក់ទំនង" },

        //mid
        
        // ... (other existing entries) ...
        "events-heading": { "en": "Events", "kh": "ព្រឹត្តិការណ៍" },
        // Event 1
        "event1-title": { "en": "Course at the Faculty of Law and Economics", "kh": "វគ្គសិក្សានៅមហាវិទ្យាល័យនីតិសាស្ត្រ និងសេដ្ឋកិច្ច" },
        "event1-date": { "en": "📅 Date: 11 Feb 2025 | ⏰ Time: 5:30 PM - 7:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ១១ កុម្ភៈ ២០២៥ | ⏰ ម៉ោង: ៥:៣០ ល្ងាច - ៧:ល្ងាច" },
        "event1-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event1-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 2
        "event2-title": { "en": "action Welcome back to class!!", "kh": "សកម្មភាពស្វាគមន៍ត្រឡប់មកថ្នាក់រៀនវិញ!!" },
        "event2-date": { "en": "📅 Date: 10 Dec 2022 | ⏰ Time: 1:00 PM - 5:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ១០ ធ្នូ ២០២២ | ⏰ ម៉ោង: ១:ល្ងាច - ៥:ល្ងាច" },
        "event2-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event2-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 3
        "event3-title": { "en": "PIU student activities to celebrate", "kh": "សកម្មភាពនិស្សិត PIU ដើម្បីអបអរសាទរ" },
        "event3-date": { "en": "📅 Date: 8 March 2025 | ⏰ Time: 2 PM - 5 PM", "kh": "📅 កាលបរិច្ឆេទ: ៨ មីនា ២០២៥ | ⏰ ម៉ោង: ២:ល្ងាច - ៥:ល្ងាច" },
        "event3-location": { "en": "📍 Location: PPIU Center", "kh": "📍 ទីតាំង: មជ្ឈមណ្ឌល PPIU" },
        "event3-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Event 4
        "event4-title": { "en": "The management of (PPIU) shared their experiences", "kh": "ការគ្រប់គ្រងរបស់ (PPIU) បានចែករំលែកបទពិសោធន៍របស់ពួកគេ" },
        "event4-date": { "en": "📅 Date: 21 February 2025 | ⏰ Time: 2:00 PM - 5:00 PM", "kh": "📅 កាលបរិច្ឆេទ: ២១ កុម្ភៈ ២០២៥ | ⏰ ម៉ោង: ២:ល្ងាចរសល្ងាច - ៥:ល្ងាច" },
        "event4-location": { "en": "📍 Location: Bunrany High School", "kh": "📍 ទីតាំង: វិទ្យាល័យប៊ុនរ៉ានី" },
        "event4-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        "major-programs-heading": { "en": "Major Programs", "kh": "កម្មវិធីសំខាន់ៗ" },

        // Master's Degree
        "master-header": { "en": "Master's Degree <i class='fas fa-bars'></i>", "kh": "សញ្ញាបត្រអនុបណ្ឌិត <i class='fas fa-bars'></i>" },
        "master-1": { "en": "Management", "kh": "គ្រប់គ្រង" },
        "master-2": { "en": "Finance", "kh": "ហិរញ្ញវត្ថុ" },
        "master-3": { "en": "Law", "kh": "នីតិសាស្ត្រ" },
        "master-4": { "en": "Marketing", "kh": "ទីផ្សារ" },
        "master-5": { "en": "InternationalRelation", "kh": "ទំនាក់ទំនងអន្តរជាតិ" },
        "master-6": { "en": "public Administation", "kh": "រដ្ឋបាលសាធារណៈ" },
        "master-7": { "en": "Governance and Ledership", "kh": "អភិបាលកិច្ច និងភាពជាអ្នកដឹកនាំ" },

        // Bachelor's Degree
        "bachelor-header": { "en": "Bachelor's Degree <i class='fas fa-bars'></i>", "kh": "សញ្ញាបត្របរិញ្ញាបត្រ <i class='fas fa-bars'></i>" },
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
        "bachelor-14": { "en": "Computer Sciences", "kh": "វិទ្យាសាស្ត្រកុំព្យូទ័រ" },
        "bachelor-15": { "en": "Logistics Management", "kh": "គ្រប់គ្រងភស្តុភារ" },

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
        "news2-desc": { "en": "Postgraduate School Activities organized entrance exams for postgraduate students of Phnom Penh International University (PPIU).", "kh": "សកម្មភាពសាលាក្រោយឧត្តមសិក្សាបានរៀបចំការប្រឡងចូលរៀនសម្រាប់និស្សិតក្រោយឧត្តមសិក្សានៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (PPIU)។" },
        "news2-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // News Card 3
        "news3-date": { "en": "February 27, 2025", "kh": "២៧ កុម្ភៈ ២០២៥" },
        "news3-title": { "en": "General General of the CPP", "kh": "ឧត្តមសេនីយ៍នៃ CPP" }, // Assuming "General General" is a typo; adjusted accordingly
        "news3-desc": { "en": "Phnom Penh International University PPIU and General General of the CPP Has organized...", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ PPIU និងឧត្តមសេនីយ៍នៃ CPP បានរៀបចំ..." },
        "news3-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // News Card 4
        "news4-date": { "en": "February 18, 2025", "kh": "១៨ កុម្ភៈ ២០២៥" },
        "news4-title": { "en": "Phnom Penh International University of Helds Sok Phone,", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញបានរៀបចំសុខ ផុន" }, // Assuming "Helds Sok Phone" is a typo or name; adjusted
        "news4-desc": { "en": "missionary studies the scholarships and sharing the opportunity...", "kh": "ការសិក្សាផ្នែកបេសកជនអំពីអាហារូបករណ៍ និងការចែករំលែកឱកាស..." },
        "news4-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // About PPIU Sections
        "about-ppiu-left-title": { "en": "About PPIU", "kh": "អំពី PPIU" },
        "about-ppiu-left-desc": { "en": "As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.", "kh": "ជាមជ្ឈមណ្ឌលសិក្សាឈានមុខគេនៅកម្ពុជា PPIU គឺជាសាកលវិទ្យាល័យតែមួយគត់ដែលផ្តល់កម្មវិធីសញ្ញាបត្រពីរដែលទទួលស្គាល់ជាអន្តរជាតិពីសហរដ្ឋអាមេរិក។" },
        "about-ppiu-left-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },
        "about-ppiu-right-title": { "en": "About PPIU", "kh": "អំពី PPIU" },
        "about-ppiu-right-desc": { "en": "As the leading academic center of excellence in Cambodia, PPIU is the only university providing internationally recognized US-accredited dual degree programs.", "kh": "ជាមជ្ឈមណ្ឌលសិក្សាឈានមុខគេនៅកម្ពុជា PPIU គឺជាសាកលវិទ្យាល័យតែមួយគត់ដែលផ្តល់កម្មវិធីសញ្ញាបត្រពីរដែលទទួលស្គាល់ជាអន្តរជាតិពីសហរដ្ឋអាមេរិក។" },
        "about-ppiu-right-readmore": { "en": "Read More", "kh": "អានបន្ថែម" },

        // Dual Degree Partners and Subsidiaries
        "dual-degree-partners-title": { "en": "Dual Degree Partners", "kh": "ដៃគូសញ្ញាបត្រពីរ" },
        "our-subsidiaries-title": { "en": "Our Subsidiaries", "kh": "បុត្រសម្ព័ន្ធរបស់យើង" },

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
        "welcome-back-title": { "en": "Welcome back to class!!", "kh": "សូមស្វាគមន៍ត្រឡប់មកថ្នាក់រៀនវិញ!!" },
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

        // History Section
        "history-header": { "en": "History", "kh": "ប្រវត្តិ" },
        "ppiu-title": { "en": "Phnom Penh International University ( Official )", "kh": "សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ (ផ្លូវការ)" },
        "ppiu-desc1": { 
            "en": "PPIU was established in 2002 as a Cambodian university (licensed) with an American curriculum. There were three founders who envisioned a new university that would meet international standards and be based on the US educational system.", 
            "kh": "PPIU ត្រូវបានបង្កើតឡើងនៅឆ្នាំ ២០០២ ជាសាកលវិទ្យាល័យកម្ពុជា (មានអាជ្ញាបណ្ណ) ជាមួយនឹងកម្មវិធីសិក្សាអាមេរិក។ មានស្ថាបនិកបីនាក់ដែលបានស្រមៃឃើញសាកលវិទ្យាល័យថ្មីមួយដែលនឹងបំពេញតាមស្តង់ដារអន្តរជាតិ និងផ្អែកលើប្រព័ន្ធអប់រំអាមេរិក។" 
        },
        "ppiu-desc2": { 
            "en": "PPIU began operations in May 2002 in a temporary facility in Toul Kork. It was grounded on several principles: senior managers were to be highly qualified, experienced western administrators with administrative skills and experience in academic affairs; faculty must have terminal degrees from U.S. institutions or other western countries, and teaching experience in western institutions; an undergraduate curriculum that meets U.S. accreditation requirements for a balance between liberal arts education and appropriate coursework for a major; and the recruitment of students who aspire to high levels of achievement.", 
            "kh": "PPIU បានចាប់ផ្តើមប្រតិបត្តិការនៅខែឧសភា ឆ្នាំ ២០០២ នៅក្នុងទីតាំងបណ្តោះអាសន្ននៅតំបន់ទួលគោក។ វាត្រូវបានបង្កើតឡើងលើគោលការណ៍ជាច្រើន៖ អ្នកគ្រប់គ្រងជាន់ខ្ពស់ត្រូវមានសមត្ថភាពខ្ពស់ ជាអ្នកគ្រប់គ្រងលោកខាងលិចដែលមានបទពិសោធន៍ជាមួយនឹងជំនាញរដ្ឋបាល និងបទពិសោធន៍ក្នុងកិច្ចការសិក្សា; មហាវិទ្យាល័យត្រូវតែមានសញ្ញាបត្រចុងក្រោយពីស្ថាប័នអាមេរិក ឬបណ្តាប្រទេសលោកខាងលិចផ្សេងទៀត និងបទពិសោធន៍បង្រៀននៅស្ថាប័នលោកខាងលិច; កម្មវិធីសិក្សាថ្នាក់បរិញ្ញាបត្រដែលបំពេញតាមតម្រូវការទទួលស្គាល់របស់សហរដ្ឋអាមេរិកសម្រាប់តុល្យភាពរវាងការអប់រំសិល្បៈសេរី និងមុខវិជ្ជាសមស្របសម្រាប់ជំនាញសំខាន់; និងការជ្រើសរើសនិស្សិតដែលប្រាថ្នាចង់ទទួលបានសមិទ្ធផលខ្ពស់។" 
        },
        "ppiu-desc3": { 
            "en": "A Board of Trustees (BOT) was formed to direct the course of the University and oversee its development. The Board is composed of American educators, executives of higher education institutions in the U.S., and business executives from Cambodia and around the globe. It is dedicated to making PPIU a leading higher education institution in Cambodia, fostering socially responsible behavior, lifelong learning, academic and professional excellence among students, and to producing students who are critical thinkers, innovators and ethical leaders to serve Cambodia and the ASEAN Economic Community.", 
            "kh": "ក្រុមប្រឹក្សាភិបាល (BOT) ត្រូវបានបង្កើតឡើងដើម្បីដឹកនាំទិសដៅរបស់សាកលវិទ្យាល័យ និងត្រួតពិនិត្យការអភិវឌ្ឍន៍របស់វា។ ក្រុមប្រឹក្សានេះមានសមាសភាពចេញពីអ្នកអប់រំអាមេរិក នាយកប្រតិបត្តិនៃស្ថាប័នឧត្តមសិក្សានៅសហរដ្ឋអាមេរិក និងនាយកប្រតិបត្តិធុរកិច្ចមកពីកម្ពុជា និងជុំវិញពិភពលោក។ វាប្តេជ្ញាធ្វើឱ្យ PPIU ក្លាយជាស្ថាប័នឧត្តមសិក្សាឈានមុខគេនៅកម្ពុជា ជំរុញឥរិយាបថដែលមានទំនួលខុសត្រូវសង្គម ការរៀនសូត្រពេញមួយជីវិត ឧត្តមភាពផ្នែកសិក្សា និងវិជ្ជាជីវៈក្នុងចំណោមនិស្សិត និងបង្កើតនិស្សិតដែលជាអ្នកគិតបែបរិះគន់ អ្នកបង្កើតថ្មី និងអ្នកដឹកនាំប្រកបដោយសីលធម៌ដើម្បីបម្រើកម្ពុជា និងសហគមន៍សេដ្ឋកិច្ចអាស៊ាន។" 
        },
        "ppiu-desc4": { 
            "en": "PPIU new modern facility was finished in October 2017 and has been designed to enhance and support a model academic teaching and learning environment, incorporating the newest technologies, a learning center, library, and student services that will complement academic offerings. This environment will allow students to develop their potential and acquire the education necessary and relevant for 21st century competitiveness.", 
            "kh": "អគារថ្មីទំនើបរបស់ PPIU ត្រូវបានបញ្ចប់នៅខែតុលា ឆ្នាំ ២០១៧ ហើយត្រូវបានរចនាឡើងដើម្បីលើកកម្ពស់ និងគាំទ្របរិយាកាសបង្រៀន និងរៀនសូត្រគំរូផ្នែកសិក្សា ដោយបញ្ចូលបច្ចេកវិទ្យាថ្មីបំផុត មជ្ឈមណ្ឌលសិក្សា បណ្ណាល័យ និងសេវាកម្មនិស្សិតដែលនឹងបំពេញបន្ថែមដល់ការផ្តល់ជូនផ្នែកសិក្សា។ បរិយាកាសនេះនឹងអនុញ្ញាតឱ្យនិស្សិតអភិវឌ្ឍសក្តានុពលរបស់ពួកគេ និងទទួលបានការអប់រំដែលចាំបាច់ និងពាក់ព័ន្ធសម្រាប់ការប្រកួតប្រជែងនៅសតវត្សរ៍ទី ២១។" 
        },
        "ppiu-desc5": { 
            "en": "The students attending PPIU are impressive. They have a strong desire to improve Cambodia and to make a mark on its development. They are bright; they have a mission and they are drivers of change. They come from all over Cambodia, with an increasing number from other countries in the region. PPIU provides scholarships for students based on merit and financial need.", 
            "kh": "និស្សិតដែលចូលរៀននៅ PPIU គឺគួរឱ្យចាប់អារម្មណ៍។ ពួកគេមានបំណងប្រាថ្នាខ្លាំងក្លាក្នុងការកែលម្អកម្ពុជា និងបន្សល់ស្នាមនៅលើការអភិវឌ្ឍរបស់វា។ ពួកគេឆ្លាតវៃ; ពួកគេមានបេសកកម្ម និងជាអ្នកជំរុញការផ្លាស់ប្តូរ។ ពួកគេមកពីទូទាំងប្រទេសកម្ពុជា ដោយមានចំនួនកើនឡើងពីបណ្តាប្រទេសផ្សេងទៀតនៅក្នុងតំបន់។ PPIU ផ្តល់អាហារូបករណ៍សម្រាប់និស្សិតដោយផ្អែកលើគុណសម្បត្តិ និងតម្រូវការហិរញ្ញវត្ថុ។" 
        },
        "ppiu-desc6": { 
            "en": "In the summer of 2016, PPIU signed agreements for dual degrees with the University of Arizona and with Fort Hays State University. The University of Arizona dual programs are Business Administration and Law. The dual degrees with Fort Hays State are Tourism and Hospitality Management and Computer Science.", 
            "kh": "នៅរដូវក្តៅឆ្នាំ ២០១៦ PPIU បានចុះកិច្ចព្រមព្រៀងសម្រាប់សញ្ញាបត្រពីរជាមួយសាកលវិទ្យាល័យអារីហ្សូណា និងជាមួយសាកលវិទ្យាល័យ Fort Hays State។ កម្មវិធីសញ្ញាបត្រពីររបស់សាកលវិទ្យាល័យអារីហ្សូណាគឺ រដ្ឋបាលធុរកិច្ច និងច្បាប់។ សញ្ញាបត្រពីរជាមួយ Fort Hays State គឺ គ្រប់គ្រងទេសចរណ៍ និងបដិសណ្ឋារកិច្ច និងវិទ្យាសាស្ត្រកុំព្យូទ័រ។" 
        },
        "ppiu-desc7": { 
            "en": "PPIU received full institutional accreditation (certificate) from 2019. During the Accreditation Committee of Cambodia visit in August 2023, the officials were impressed with the PPIU progress. We are currently preparing for the national accreditation renewal.", 
            "kh": "PPIU បានទទួលការទទួលស្គាល់ស្ថាប័នពេញលេញ (វិញ្ញាបនបត្រ) ចាប់ពីឆ្នាំ ២០១៩។ ក្នុងអំឡុងពេលដំណើរទស្សនកិច្ចរបស់គណៈកម្មាធិការទទួលស្គាល់នៃកម្ពុជានៅខែសីហា ឆ្នាំ ២០២៣ មន្ត្រីទាំងនោះបានចាប់អារម្មណ៍នឹងវឌ្ឍនភាពរបស់ PPIU។ បច្ចុប្បន្នយើងកំពុងរៀបចំសម្រាប់ការបន្តទទួលស្គាល់ជាតិ។" 
        },
        "ppiu-desc8": { 
            "en": "The history of PPIU is short, the accomplishments are enduring. This sets PPIU on a trajectory of meeting its mission and being a model University to assist Cambodia in its human resource development.", 
            "kh": "ប្រវត្តិរបស់ PPIU គឺខ្លី ប៉ុន្តែសមិទ្ធផលគឺឋិតថេរ។ នេះធ្វើឱ្យ PPIU ស្ថិតនៅលើគន្លងនៃការសម្រេចបេសកកម្មរបស់ខ្លួន និងក្លាយជាសាកលវិទ្យាល័យគំរូដើម្បីជួយកម្ពុជាក្នុងការអភិវឌ្ឍធនធានមនុស្សរបស់ខ្លួន។" 
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

    
    
</script>
</html>