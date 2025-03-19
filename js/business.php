<script>
    function toggleLanguage(lang) {
    const translations = {
        "faculty-header": { 
            "en": "FACULTY OF BUSINESS AND TOURISM", 
            "kh": "មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍" 
        },
        "intro-text": { 
            "en": "All businesses operate and function well because they are managed with quality, efficiency, productivity, and continuous innovation. In the global era, countries are constantly integrating into regional and international communities based on interdependence across political, economic, cultural, and technological sectors. This global interconnectedness leads to further openness, without barriers in communication, fostering an open economic system. These developments bring about innovation, as well as challenges and competition, especially regarding the skilled workforce, income generation in the private sector, and accountability in the public sector's economic development. To address rapid social changes in the global context, Phnom Penh International University, along with other universities in Business and Tourism, is developing advanced study programs at various levels: master's, bachelor's, associate degrees, and professional training programs. These programs focus on areas such as management, accounting, marketing, hotel management, and tourism. After completing studies at the university, graduates can work in private companies, government institutions, or start their own businesses in various sectors such as accounting, auditing, taxation, marketing, human resource management, logistics, office management, hospitality, and food production. The mission of the Faculty of Business and Tourism is to provide specialized knowledge, skills, and high moral integrity for successful business management in any societal context in the future.", 
            "kh": "អាជីវកម្មទាំងអស់ដំណើរការ និងមានមុខងារល្អ ព្រោះវាត្រូវបានគ្រប់គ្រងដោយគុណភាព ប្រសិទ្ធភាព ផលិតភាព និងការច្នៃប្រឌិតជាបន្តបន្ទាប់។ នៅក្នុងយុគសកល បណ្តាប្រទេសកំពុងធ្វើសមាហរណកម្មជាបន្តបន្ទាប់ទៅក្នុងសហគមន៍តំបន់ និងអន្តរជាតិ ដោយផ្អែកលើអន្តរកម្មភាពផ្នែកនយោបាយ សេដ្ឋកិច្ច វប្បធម៌ និងបច្ចេកវិទ្យា។ ការតភ្ជាប់ជាសកលនេះនាំឱ្យមានភាពបើកចំហបន្ថែមទៀត ដោយគ្មានឧបសគ្គក្នុងការទំនាក់ទំនង ដែលជំរុញប្រព័ន្ធសេដ្ឋកិច្ចបើកចំហ។ ការអភិវឌ្ឍទាំងនេះនាំមកនូវការច្នៃប្រឌិត ព្រមទាំងបញ្ហាប្រឈម និងការប្រកួតប្រជែង ជាពិសេសទាក់ទងនឹងកម្លាំងពលកម្មជំនាញ ការបង្កើតប្រាក់ចំណូលនៅក្នុងវិស័យឯកជន និងភាពទទួលខុសត្រូវក្នុងការអភិវឌ្ឍសេដ្ឋកិច្ចរបស់វិស័យសាធារណៈ។ ដើម្បីដោះស្រាយការផ្លាស់ប្តូរសង្គមយ៉ាងឆាប់រហ័សក្នុងបរិបទសកល សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ រួមជាមួយសាកលវិទ្យាល័យផ្សេងទៀតផ្នែកធុរកិច្ច និងទេសចរណ៍ កំពុងអភិវឌ្ឍកម្មវិធីសិក្សាកម្រិតខ្ពស់នៅកម្រិតផ្សេងៗ៖ អនុបណ្ឌិត បរិញ្ញាបត្រ សញ្ញាបត្ររង និងកម្មវិធីបណ្តុះបណ្តាលវិជ្ជាជីវៈ។ កម្មវិធីទាំងនេះផ្តោតលើផ្នែកដូចជា ការគ្រប់គ្រង គណនេយ្យ ទីផ្សារ ការគ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍។ បន្ទាប់ពីបញ្ចប់ការសិក្សានៅសាកលវិទ្យាល័យ និស្សិតបញ្ចប់ការសិក្សាអាចធ្វើការនៅក្នុងក្រុមហ៊ុនឯកជន ស្ថាប័នរដ្ឋាភិបាល ឬចាប់ផ្តើមអាជីវកម្មផ្ទាល់ខ្លួននៅក្នុងវិស័យផ្សេងៗ ដូចជា គណនេយ្យ សវនកម្ម ពន្ធដារ ទីផ្សារ ការគ្រប់គ្រងធនធានមនុស្ស ភស្តុភារ ការគ្រប់គ្រងការិយាល័យ បដិសណ្ឋារកិច្ច និងការផលិតអាហារ។ បេសកកម្មរបស់មហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍ គឺផ្តល់ចំណេះដឹងជំនាញ ជំនាញ និងសីលធម៌ខ្ពស់សម្រាប់ការគ្រប់គ្រងអាជីវកម្មប្រកបដោយជោគជ័យនៅក្នុងបរិបទសង្គមណាមួយនាពេលអនាគត។" 
        },
        "associate-title": { "en": "3.1.2 Associate Degree", "kh": "៣.១.២ សញ្ញាបត្ររង" },
        "associate-text": { 
            "en": "High school graduates who have completed secondary education level 2 are eligible to study for an Associate Degree for 2 years at Phnom Penh International University, focusing on current market trends and business practices.", 
            "kh": "និស្សិតបញ្ចប់វិទ្យាល័យដែលបានបញ្ចប់ការអប់រំមធ្យមសិក្សាកម្រិត២ មានសិទ្ធិសិក្សាសញ្ញាបត្ររងរយៈពេល ២ ឆ្នាំនៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញ ដោយផ្តោតលើនិន្នាការទីផ្សារ និងការអនុវត្តអាជីវកម្មបច្ចុប្បន្ន។" 
        },
        "hotel-front-office": { 
            "en": "+ Hotel (Front Office)", 
            "kh": "+ សណ្ឋាគារ (ផ្នែកទទួលភ្ញៀវ)" 
        },
        "hotel-housekeeping": { 
            "en": "+ Hotel (Housekeeping)", 
            "kh": "+ សណ្ឋាគារ (ផ្នែកសម្អាត)" 
        },
        "bachelor-title": { "en": "3.1.3 Bachelor’s Degree", "kh": "៣.១.៣ សញ្ញាបត្របរិញ្ញាបត្រ" },
        "bachelor-text": { 
            "en": "Currently, Phnom Penh International University is providing training to students in 9 fields across 4 major faculties, with plans to establish additional faculties in the future. The 4 faculties are as follows:", 
            "kh": "បច្ចុប្បន្ន សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញកំពុងផ្តល់ការបណ្តុះបណ្តាលដល់និស្សិតនៅក្នុង ៩ វិស័យនៅទូទាំង ៤ មហាវិទ្យាល័យធំៗ ដោយមានគម្រោងបង្កើតមហាវិទ្យាល័យបន្ថែមនាពេលអនាគត។ មហាវិទ្យាល័យទាំង ៤ មានដូចខាងក្រោម:" 
        },
        "accounting-title": { "en": "3.1.3.1 Accounting", "kh": "៣.១.៣.១ គណនេយ្យ" },
        "accounting-text-1": { 
            "en": "The Accounting program trains students to have knowledge and skills in preparing income and expense statements, managing the cash flow of an organization, managing physical and intangible assets, and analyzing production costs, among others. Students can apply this knowledge and skill to work in the private and public accounting sectors or run their own business. This new program follows international standards established by the Cambodian Institute of Certified Public Accountants and Auditors (KICPAA) under the Ministry of Economy and Finance. The program prepares students with the necessary qualifications to continue their studies in other advanced fields such as accounting and auditing, business management, banking, and finance. Furthermore, students can easily pursue certifications in various professional qualifications such as:", 
            "kh": "កម្មវិធីគណនេយ្យបណ្តុះបណ្តាលនិស្សិតឱ្យមានចំណេះដឹង និងជំនាញក្នុងការរៀបចំរបាយការណ៍ចំណូល និងចំណាយ គ្រប់គ្រងលំហូរសាច់ប្រាក់របស់អង្គការ គ្រប់គ្រងទ្រព្យសម្បត្តិរូបវន្ត និងអរូបី និងវិភាគថ្លៃដើមផលិតកម្ម ក្នុងចំណោមផ្សេងទៀត។ និស្សិតអាចអនុវត្តចំណេះដឹង និងជំនាញនេះដើម្បីធ្វើការនៅក្នុងវិស័យគណនេយ្យឯកជន និងសាធារណៈ ឬដំណើរការអាជីវកម្មផ្ទាល់ខ្លួន។ កម្មវិធីថ្មីនេះអនុវត្តតាមស្តង់ដារអន្តរជាតិដែលបង្កើតឡើងដោយវិទ្យាស្ថានគណនេយ្យករសាធារណៈ និងសវនករបញ្ជាក់កម្ពុជា (KICPAA) ក្រោមក្រសួងសេដ្ឋកិច្ច និងហិរញ្ញវត្ថុ។ កម្មវិធីនេះរៀបចំនិស្សិតឱ្យមានគុណវុឌ្ឍិចាំបាច់ដើម្បីបន្តការសិក្សានៅក្នុងវិស័យកម្រិតខ្ពស់ផ្សេងទៀតដូចជា គណនេយ្យ និងសវនកម្ម ការគ្រប់គ្រងអាជីវកម្ម ធនាគារ និងហិរញ្ញវត្ថុ។ លើសពីនេះ និស្សិតអាចងាយស្រួលបន្តទទួលសញ្ញាបត្របញ្ជាក់ជំនាញវិជ្ជាជីវៈផ្សេងៗ ដូចជា:" 
        },
        "accounting-certs": { 
            "en": "+ Chartered Certified Accountant (ACCA),<br>+ Chartered Professional Accountant (CPA),<br>+ Certified Public Accountant (CPA),<br>+ Certified Management Accountant (CMA),<br>+ Cost & Management Accountant (CMA),<br>+ Certified Commercial Professional Accountant (CCPA).", 
            "kh": "+ គណនេយ្យករបញ្ជាក់វិជ្ជាជីវៈ (ACCA),<br>+ គណនេយ្យករវិជ្ជាជីវៈបញ្ជាក់ (CPA),<br>+ គណនេយ្យករសាធារណៈបញ្ជាក់ (CPA),<br>+ គណនេយ្យករគ្រប់គ្រងបញ្ជាក់ (CMA),<br>+ គណនេយ្យករថ្លៃដើម និងគ្រប់គ្រង (CMA),<br>+ គណនេយ្យករវិជ្ជាជីវៈពាណិជ្ជកម្មបញ្ជាក់ (CCPA)." 
        },
        "accounting-text-2": { 
            "en": "To obtain a Bachelor's degree in Accounting, students must successfully complete the courses listed below and fulfill the requirements for each subject as specified by the university:", 
            "kh": "ដើម្បីទទួលបានសញ្ញាបត្របរិញ្ញាបត្រផ្នែកគណនេយ្យ និស្សិតត្រូវបញ្ចប់វគ្គសិក្សាដែលបានរាយខាងក្រោមដោយជោគជ័យ និងបំពេញតម្រូវការសម្រាប់មុខវិជ្ជានីមួយៗដែលបានកំណត់ដោយសាកលវិទ្យាល័យ:" 
        },
        "management-title": { "en": "3.1.3.2 Management", "kh": "៣.១.៣.២ ការគ្រប់គ្រង" },
        "management-text": { 
            "en": "The Management program trains students to have knowledge and skills in human resource management, office management, managing company meetings, quality control of products and services, financial management, investment management, strategic management, and more.", 
            "kh": "កម្មវិធីគ្រប់គ្រងបណ្តុះបណ្តាលនិស្សិតឱ្យមានចំណេះដឹង និងជំនាញក្នុងការគ្រប់គ្រងធនធានមនុស្ស ការគ្រប់គ្រងការិយាល័យ ការគ្រប់គ្រងកិច្ចប្រជុំក្រុមហ៊ុន ការត្រួតពិនិត្យគុណភាពផលិតផល និងសេវាកម្ម ការគ្រប់គ្រងហិរញ្ញវត្ថុ ការគ្រប់គ្រងវិនិយោគ ការគ្រប់គ្រងជាយុទ្ធសាស្ត្រ និងផ្សេងៗទៀត។" 
        },
        "hotel-tourism-title": { "en": "3.1.3.3 Hotel and Tourism Management", "kh": "៣.១.៣.៣ ការគ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍" },
        "hotel-tourism-text": { 
            "en": "The Hotel and Tourism Management program trains students to have knowledge and skills in front office management, housekeeping, and food service. Currently, PPIU has organized a curriculum in line with the Cambodian Competency Standards for Tourism Professionals (CCSTP), focusing on hotel service, developed by the National Tourism Professional Committee under the Ministry of Tourism, and adheres to the ASEAN Mutual Recognition Arrangement (MRA) on Tourism Professionals. Students have the opportunity to work as managers or front office supervisors, housekeeping managers, food production managers, and food and beverage service managers.", 
            "kh": "កម្មវិធីគ្រប់គ្រងសណ្ឋាគារ និងទេសចរណ៍បណ្តុះបណ្តាលនិស្សិតឱ្យមានចំណេះដឹង និងជំនាញក្នុងការគ្រប់គ្រងផ្នែកទទួលភ្ញៀវ ការសម្អាត និងសេវាកម្មម្ហូបអាហារ។ បច្ចុប្បន្ន PPIU បានរៀបចំកម្មវិធីសិក្សាស្របតាមស្តង់ដារសមត្ថភាពអ្នកជំនាញទេសចរណ៍កម្ពុជា (CCSTP) ដោយផ្តោតលើសេវាសណ្ឋាគារ ដែលត្រូវបានអភិវឌ្ឍដោយគណៈកម្មាធិការជំនាញទេសចរណ៍ជាតិក្រោមក្រសួងទេសចរណ៍ និងអនុលោមតាមកិច្ចព្រមព្រៀងទទួលស្គាល់គ្នាទៅវិញទៅមកអាស៊ាន (MRA) លើអ្នកជំនាញទេសចរណ៍។ និស្សិតមានឱកាសធ្វើការជាអ្នកគ្រប់គ្រង ឬអ្នកត្រួតពិនិត្យផ្នែកទទួលភ្ញៀវ អ្នកគ្រប់គ្រងផ្នែកសម្អាត អ្នកគ្រប់គ្រងផលិតកម្មអាហារ និងអ្នកគ្រប់គ្រងសេវាកម្មអាហារ និងភេសជ្ជៈ។" 
        },
        "marketing-title": { "en": "3.1.3.4 Marketing", "kh": "៣.១.៣.៤ ទីផ្សារ" },
        "dual-major-title": { "en": "3.1.3.5 Dual Major Studies in the Faculty of Business and Tourism", "kh": "៣.១.៣.៥ ការសិក្សាជំនាញពីរនៅមហាវិទ្យាល័យធុរកិច្ច និងទេសចរណ៍" },
        "dual-major-text": { 
            "en": "In the case that a student intends to pursue a double major at the same time or at different times, the student must take additional courses or credits as listed below:", 
            "kh": "ក្នុងករណីដែលនិស្សិតមានបំណងសិក្សាជំនាញពីរក្នុងពេលតែមួយ ឬនៅពេលខុសគ្នា និស្សិតត្រូវសិក្សាវគ្គបន្ថែម ឬក្រេឌីតដូចដែលបានរាយខាងក្រោម:" 
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