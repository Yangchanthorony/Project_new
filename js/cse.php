<script>
    function toggleLanguage(lang) {
    const translations = {
        "faculty-header": {
            "en": "FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY (FSIT)",
            "kh": "មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន (FSIT)"
        },
        "intro-text-1": {
            "en": "Currently, the field of Information Technology has become a key element in the development of society across all sectors, whether in public or private institutions. It is essential for these institutions to rely on information technology to advance their operations, especially as ASEAN countries organized their integration in 2015.",
            "kh": "បច្ចុប្បន្ននេះ វិស័យបច្ចេកវិទ្យាព័ត៌មានបានក្លាយជាធាតុសំខាន់ក្នុងការអភិវឌ្ឍសង្គមនៅគ្រប់វិស័យ មិនថាស្ថាប័នសាធារណៈ ឬឯកជន។ វាចាំបាច់សម្រាប់ស្ថាប័នទាំងនេះក្នុងការពឹងផ្អែកលើបច្ចេកវិទ្យាព័ត៌មានដើម្បីជំរុញប្រតិបត្តិការរបស់ពួកគេ ជាពិសេសនៅពេលដែលបណ្តាប្រទេសអាស៊ានបានរៀបចំការរួមបញ្ចូលគ្នានៅឆ្នាំ ២០១៥។"
        },
        "intro-text-2": {
            "en": "In response to these needs, the Faculty of Science and Information Technology (FSIT) at Phnom Penh International University is committed to training human resources with expertise by continuously adapting the curriculum to align with the development of science and technology, as well as market demands. FSIT has also ensured that its professors are well-qualified, with knowledge and work experience in all areas, to teach students to achieve quality both theoretically and practically. Upon completing their Bachelor's degree in this field, students will be well-equipped to work in sectors such as:",
            "kh": "ដើម្បីឆ្លើយតបនឹងតម្រូវការទាំងនេះ មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន (FSIT) នៅសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញប្តេជ្ញាបណ្តុះបណ្តាលធនធានមនុស្សដែលមានជំនាញ ដោយការកែសម្រួលកម្មវិធីសិក្សាជាបន្តបន្ទាប់ឱ្យស្របតាមការអភិវឌ្ឍវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យា ព្រមទាំងតម្រូវការទីផ្សារ។ FSIT ក៏បានធានាថាសាស្ត្រាចារ្យរបស់ខ្លួនមានគុណភាពខ្ពស់ មានចំណេះដឹង និងបទពិសោធន៍ការងារនៅគ្រប់ផ្នែក ដើម្បីបង្រៀននិស្សិតឱ្យសម្រេចបានគុណភាពទាំងផ្នែកទ្រឹស្តី និងការអនុវត្ត។ នៅពេលបញ្ចប់សញ្ញាបត្របរិញ្ញាបត្រក្នុងវិស័យនេះ និស្សិតនឹងត្រូវបានបំពាក់យ៉ាងល្អដើម្បីធ្វើការនៅក្នុងវិស័យដូចជា៖"
        },
        "sector-1": {
            "en": "+ Network Administration",
            "kh": "+ ការគ្រប់គ្រងបណ្តាញ"
        },
        "sector-2": {
            "en": "+ Database Administration",
            "kh": "+ ការគ្រប់គ្រងមូលដ្ឋានទិន្នន័យ"
        },
        "sector-3": {
            "en": "+ Database Design",
            "kh": "+ ការរចនាមូលដ្ឋានទិន្នន័យ"
        },
        "sector-4": {
            "en": "+ Web Administration, Web Developer, etc.",
            "kh": "+ ការគ្រប់គ្រងគេហទំព័រ អ្នកអភិវឌ្ឍគេហទំព័រ ជាដើម"
        },
        "evaluation-title": {
            "en": "Evaluation, Grading, and Thesis",
            "kh": "ការវាយតម្លៃ ការដាក់ពិន្ទុ និងនិក្ខេបបទ"
        },
        "evaluation-titlee": {
            "en": "For the Faculty of Science and Information Technology, student evaluations for each subject should be carried out as follows: Academic Evaluation",
            "kh": "សម្រាប់មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន ការវាយតម្លៃនិស្សិតសម្រាប់មុខវិជ្ជានីមួយៗគួរតែត្រូវបានអនុវត្តដូចខាងក្រោម៖ ការវាយតម្លៃសិក្សា"
        },

      
        "associate-title": {
            "en": "Associate Degree",
            "kh": "សញ្ញាបត្ររង"
        },
        "associate-text": {
            "en": "To meet current market demands and provide opportunities for students who did not pass the secondary education diploma, Phnom Penh International University has designed specialized courses for the Associate Degree. These programs are available to students who wish to continue their studies and pursue a Bachelor's degree. Candidates who wish to pursue an Associate Degree in Information Technology must meet the following requirements:",
            "kh": "ដើម្បីបំពេញតម្រូវការទីផ្សារបច្ចុប្បន្ន និងផ្តល់ឱកាសដល់និស្សិតដែលមិនបានជាប់សញ្ញាបត្រអប់រំមធ្យមសិក្សា សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញបានរចនាវគ្គសិក្សាឯកទេសសម្រាប់សញ្ញាបត្ររង។ កម្មវិធីទាំងនេះមានសម្រាប់និស្សិតដែលចង់បន្តការសិក្សា និងបន្តទៅកាន់សញ្ញាបត្របរិញ្ញាបត្រ។ បេក្ខជនដែលចង់បន្តសញ្ញាបត្ររងផ្នែកបច្ចេកវិទ្យាព័ត៌មានត្រូវបំពេញតាមតម្រូវការដូចខាងក្រោម៖"
        },
        "associate-req-1": {
            "en": "- Must have a certificate confirming completion of secondary education",
            "kh": "- ត្រូវមានវិញ្ញាបនបត្របញ្ជាក់ការបញ្ចប់ការអប់រំមធ្យមសិក្សា"
        },
        "short-term-title": {
            "en": "Short-term Skill Training",
            "kh": "ការបណ្តុះបណ្តាលជំនាញរយៈពេលខ្លី"
        },
        "short-term-text": {
            "en": "Candidates can pursue short-term skill training in Information Technology by meeting the following conditions:",
            "kh": "បេក្ខជនអាចបន្តការបណ្តុះបណ្តាលជំនាញរយៈពេលខ្លីផ្នែកបច្ចេកវិទ្យាព័ត៌មានដោយបំពេញលក្ខខណ្ឌដូចខាងក្រោម៖"
        },
        "short-term-req-1": {
            "en": "- Must have knowledge of the English language",
            "kh": "- ត្រូវមានចំណេះដឹងភាសាអង់គ្លេស"
        },
        "short-term-req-2": {
            "en": "- Must have some basic knowledge of computer fundamentals",
            "kh": "- ត្រូវមានចំណេះដឹងជាមូលដ្ឋានខ្លះអំពីគោលការណ៍កុំព្យូទ័រ"
        },
        "duration-title": {
            "en": "Duration of Study",
            "kh": "រយៈពេលសិក្សា"
        },
        "duration-text": {
            "en": "The duration is between 3 months to 1 year for short-term skill courses, and 2 years for the Associate Degree level.",
            "kh": "រយៈពេលគឺចន្លោះពី ៣ ខែ ទៅ ១ ឆ្នាំសម្រាប់វគ្គជំនាញរយៈពេលខ្លី និង ២ ឆ្នាំសម្រាប់កម្រិតសញ្ញាបត្ររង។"
        },
        "facilities-title": {
            "en": "Facilities",
            "kh": "បរិក្ខារ"
        },
        "facilities-text": {
            "en": "The computer laboratory is equipped with modern computers connected to the internet and WiFi. It also includes a large library, reading rooms, study rooms, and professors available for consultation.",
            "kh": "មន្ទីរពិសោធន៍កុំព្យូទ័រត្រូវបានបំពាក់ដោយកុំព្យូទ័រទំនើបដែលភ្ជាប់ទៅអ៊ីនធឺណិត និង WiFi។ វាក៏រួមបញ្ចូលបណ្ណាល័យធំ បន្ទប់អាន បន្ទប់សិក្សា និងសាស្ត្រាចារ្យដែលអាចរកបានសម្រាប់ការពិគ្រោះយោបល់។"
        },
        "career-title": {
            "en": "Career Opportunities",
            "kh": "ឱកាសអាជីព"
        },
        "career-text": {
            "en": "Information Technology is an essential field, and it offers valuable career opportunities in both government and private sectors, as well as domestic and international job prospects in all industries.",
            "kh": "បច្ចេកវិទ្យាព័ត៌មានគឺជាវិស័យចាំបាច់ ហើយវាផ្តល់ឱកាសអាជីពដ៏មានតម្លៃទាំងនៅក្នុងវិស័យរដ្ឋាភិបាល និងឯកជន ព្រមទាំងការងារក្នុងស្រុក និងអន្តរជាតិនៅគ្រប់ឧស្សាហកម្ម។"
        },
        "associate-programs-title": {
            "en": "Programs for the Associate Degree",
            "kh": "កម្មវិធីសម្រាប់សញ្ញាបត្ររង"
        },
        "bachelor-title": {
            "en": "Bachelor's Degree",
            "kh": "សញ្ញាបត្របរិញ្ញាបត្រ"
        },
        "bachelor-text-1": {
            "en": "The Faculty of Science and Information Technology offers educational programs in Computer Science, Management Information Systems, Telecommunications, and Mathematics. Students who graduate from the Faculty of Science and Information Technology will be capable of managing and working in various fields, such as telecommunications companies, data management systems in all institutions, or creating their own businesses. The field of Information Technology has become a major factor in the development of society across all sectors, whether public or private institutions, and it is essential for these institutions to adopt information technology to advance their operations. In line with ASEAN's integration in 2015, Phnom Penh International University is committed to developing human resources through Computer Science and Information Technology programs that align with the evolving scientific and market demands. The university has recruited professors with knowledge and work experience in all areas to teach students, ensuring quality education both theoretically and practically.",
            "kh": "មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មានផ្តល់កម្មវិធីអប់រំផ្នែកវិទ្យាសាស្ត្រកុំព្យូទ័រ ប្រព័ន្ធព័ត៌មានគ្រប់គ្រង ទូរគមនាគមន៍ និងគណិតវិទ្យា។ និស្សិតដែលបញ្ចប់ការសិក្សាពីមហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាននឹងមានសមត្ថភាពគ្រប់គ្រង និងធ្វើការក្នុងវិស័យផ្សេងៗ ដូចជាក្រុមហ៊ុនទូរគមនាគមន៍ ប្រព័ន្ធគ្រប់គ្រងទិន្នន័យនៅគ្រប់ស្ថាប័ន ឬបង្កើតអាជីវកម្មផ្ទាល់ខ្លួន។ វិស័យបច្ចេកវិទ្យាព័ត៌មានបានក្លាយជាកត្តាសំខាន់ក្នុងការអភិវឌ្ឍសង្គមនៅគ្រប់វិស័យ មិនថាស្ថាប័នសាធារណៈ ឬឯកជន ហើយវាចាំបាច់សម្រាប់ស្ថាប័នទាំងនេះក្នុងការទទួលយកបច្ចេកវិទ្យាព័ត៌មានដើម្បីជំរុញប្រតិបត្តិការរបស់ពួកគេ។ ស្របតាមការរួមបញ្ចូលគ្នារបស់អាស៊ាននៅឆ្នាំ ២០១៥ សាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញប្តេជ្ញាអភិវឌ្ឍធនធានមនុស្សតាមរយៈកម្មវិធីវិទ្យាសាស្ត្រកុំព្យូទ័រ និងបច្ចេកវិទ្យាព័ត៌មានដែលស្របតាមតម្រូវការវិទ្យាសាស្ត្រ និងទីផ្សារដែលកំពុងវិវត្ត។ សាកលវិទ្យាល័យបានជ្រើសរើសសាស្ត្រាចារ្យដែលមានចំណេះដឹង និងបទពិសោធន៍ការងារនៅគ្រប់ផ្នែកដើម្បីបង្រៀននិស្សិត ធានាគុណភាពអប់រំទាំងផ្នែកទ្រឹស្តី និងការអនុវត្ត។"
        },
        "bachelor-text-2": {
            "en": "The key objectives of the Faculty of Science and Information Technology include:",
            "kh": "គោលបំណងសំខាន់របស់មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មានរួមមាន៖"
        },
        "objective-1": {
            "en": "- Recruiting experienced professors with strong ethics and expertise in each subject, in line with current curricula.",
            "kh": "- ជ្រើសរើសសាស្ត្រាចារ្យដែលមានបទពិសោធន៍ មានសីលធម៌ខ្ពស់ និងជំនាញក្នុងមុខវិជ្ជានីមួយៗ ស្របតាមកម្មវិធីសិក្សាបច្ចុប្បន្ន។"
        },
        "objective-2": {
            "en": "- Providing fundamental knowledge and specialized IT skills, enabling students to perform daily tasks effectively.",
            "kh": "- ផ្តល់ចំណេះដឹងជាមូលដ្ឋាន និងជំនាញបច្ចេកវិទ្យាព័ត៌មានឯកទេស ដែលអាចឱ្យនិស្សិតអនុវត្តកិច្ចការប្រចាំថ្ងៃប្រកបដោយប្រសិទ្ធភាព។"
        },
        "objective-3": {
            "en": "- Continuously improving the curriculum to meet market needs both locally and internationally.",
            "kh": "- កែលម្អកម្មវិធីសិក្សាជាបន្តបន្ទាប់ដើម្បីបំពេញតម្រូវការទីផ្សារទាំងក្នុងស្រុក និងអន្តរជាតិ។"
        },
        "objective-4": {
            "en": "- Providing students with new knowledge and experiences to meet both local and international market demands.",
            "kh": "- ផ្តល់ចំណេះដឹង និងបទពិសោធន៍ថ្មីៗដល់និស្សិតដើម្បីបំពេញតម្រូវការទីផ្សារទាំងក្នុងស្រុក និងអន្តរជាតិ។"
        },
        "objective-5": {
            "en": "- Encouraging leadership in the fields of science and IT, both domestically and internationally, to compete with universities in the region in terms of both quantity and quality.",
            "kh": "- លើកទឹកចិត្តឱ្យមានភាពជាអ្នកដឹកនាំក្នុងវិស័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យាព័ត៌មាន ទាំងក្នុងស្រុក និងអន្តរជាតិ ដើម្បីប្រកួតប្រជែងជាមួយសាកលវិទ្យាល័យនានានៅក្នុងតំបន់ទាំងបរិមាណ និងគុណភាព។"
        },
        "objective-6": {
            "en": "- Enhancing educational quality in IT to ensure students can meet the critical market demands for career opportunities in both public and private sectors, as well as internationally.",
            "kh": "- ពង្រឹងគុណភាពអប់រំផ្នែកបច្ចេកវិទ្យាព័ត៌មានដើម្បីធានាថានិស្សិតអាចបំពេញតម្រូវការទីផ្សារដ៏សំខាន់សម្រាប់ឱកាសអាជីពទាំngក្នុងវិស័យសាធារណៈ និងឯកជន ព្រមទាំងអន្តរជាតិ។"
        },
        "bachelor-program-title": {
            "en": "Bachelor's Degree Program",
            "kh": "កម្មវិធីសញ្ញាបត្របរិញ្ញាបត្រ"
        },
        "contact-info": {
            "en": "For more information, please contact the professor directly through the Telegram Group at the following link:<br>",
            "kh": "សម្រាប់ព័ត៌មានបន្ថែម សូមទាក់ទងសាស្ត្រាចារ្យដោយផ្ទាល់តាមរយៈក្រុម Telegram នៅតំណភ្ជាប់ខាងក្រោម៖<br>"
        },
        "professor-name": {
            "en": "Professor Tam Sakirin (Dean IT)<br>",
            "kh": "សាស្ត្រាចារ្យ តាំ សាគីរិន (ព្រឹទ្ធបុរស IT)<br>"
        },
       
    };

    for (const id in translations) {
        const element = document.getElementById(id);
        if (element) {
            element.innerHTML = translations[id][lang];
        }
    }

    // Optional: Toggle visibility of language buttons
    const enButton = document.getElementById('en');
    const khButton = document.getElementById('kh');
    if (enButton) enButton.style.display = lang === 'kh' ? 'none' : 'inline';
    if (khButton) khButton.style.display = lang === 'kh' ? 'inline' : 'none';
}
</script>