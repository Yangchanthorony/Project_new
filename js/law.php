<script>
    function toggleLanguage(lang) {
    const translations = {
        // Faculty Header
        "faculty-header": { 
            "en": "FACULTY OF LAW AND ECONOMICS", 
            "kh": "មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច" 
        },
        // 1. Introduction
        "intro-title": { "en": "1. Introduction", "kh": "១. សេចក្តីផ្តើម" },
        "intro-text": { 
            "en": "The Faculty of Law and Economics is one of the four major faculties that provide training in various disciplines, including Finance and Banking, Economic Development, Law, and Public Administration. In response to labor market demands within the context of ASEAN economic integration, the faculty is continuously developing its academic programs to meet regional needs and enhance collaboration by bringing in well-qualified professors with extensive knowledge and practical experience. The faculty aims to train students to become key contributors to the social and economic development of the region.", 
            "kh": "មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ច គឺជាមហាវិទ្យាល័យសំខាន់មួយក្នុងចំណោមមហាវិទ្យាល័យធំៗទាំងបួន ដែលផ្តល់ការបណ្តុះបណ្តាលលើវិញ្ញាសាផ្សេងៗ រួមមាន ហិរញ្ញវត្ថុ និងធនាគារ ការអភិវឌ្ឍសេដ្ឋកិច្ច ច្បាប់ និងរដ្ឋបាលសាធារណៈ។ ដើម្បីឆ្លើយតបទៅនឹងតម្រូវការទីផ្សារការងារក្នុងបរិបទនៃការធ្វើសមាហរណកម្មសេដ្ឋកិច្ចអាស៊ាន មហាវិទ្យាល័យនេះកំពុងអភិវឌ្ឍកម្មវិធីសិក្សារបស់ខ្លួនជាបន្តបន្ទាប់ដើម្បីបំពេញតម្រូវការក្នុងតំបន់ និងបង្កើនកិច្ចសហប្រតិបត្តិការដោយនាំយកសាស្ត្រាចារ្យដែលមានសមត្ថភាពខ្ពស់ និងបទពិសោធន៍ជាក់ស្តែងច្រើន។ មហាវិទ្យាល័យមានគោលបំណងបណ្តុះបណ្តាលនិស្សិតឱ្យក្លាយជាអ្នករួមចំណែកសំខាន់ដល់ការអភិវឌ្ឍសង្គម និងសេដ្ឋកិច្ចនៃតំបន់។" 
        },
        // 2. Vision
        "vision-title": { "en": "2. Vision", "kh": "២. ចក្ខុវិស័យ" },
        "vision-text": { 
            "en": "The Faculty of Law and Economics at Phnom Penh International University is committed to providing high-quality human resource development to meet the demands of the local and ASEAN labor markets, ensuring mobility within the region and globally.", 
            "kh": "មហាវិទ្យាល័យច្បាប់ និងសេដ្ឋកិច្ចនៃសាកលវិទ្យាល័យអន្តរជាតិភ្នំពេញប្តេជ្ញាផ្តល់ការអភិវឌ្ឍធនធានមនុស្សដែលមានគុណភាពខ្ពស់ដើម្បីបំពេញតម្រូវការទីផ្សារការងារក្នុងស្រុក និងអាស៊ាន ដោយធានាការចល័តក្នុងតំបន់ និងទូទាំងពិភពលោក។" 
        },
        // 3. Mission
        "mission-title": { "en": "3. Mission", "kh": "៣. បេសកកម្ម" },
        "mission-intro": { 
            "en": "To achieve the above vision and goals, the Bachelor of Finance and Banking program has the following key missions:", 
            "kh": "ដើម្បីសម្រេចចក្ខុវិស័យ និងគោលដៅខាងលើ កម្មវិធីបរិញ្ញាបត្រផ្នែកហិរញ្ញវត្ថុ និងធនាគាមានបេសកកម្មសំខាន់ៗដូចខាងក្រោម:" 
        },
        "mission-curricula": { 
            "en": "- Develop new curricula aligned with the faculty's training programs and academic levels through cooperation with relevant stakeholders.", 
            "kh": "- អភិវឌ្ឍកម្មវិធីសិក្សាថ្មីឱ្យស្របតាមកម្មវិធីបណ្តុះបណ្តាល និងកម្រិតសិក្សារបស់មហាវិទ្យាល័យតាមរយៈកិច្ចសហប្រតិបត្តិការជាមួយភាគីពាក់ព័ន្ធ។" 
        },
        "mission-training": { 
            "en": "- Increase hands-on training hours to enhance soft skills through partnerships with banks, microfinance institutions, insurance companies, stock markets, courts, legal entities, and partner universities in the region.", 
            "kh": "- បង្កើនម៉ោងបណ្តុះបណ្តាលជាក់ស្តែងដើម្បីពង្រឹងជំនាញទន់តាមរយៈកិច្ចសហប្រតិបត្តិការជាមួយធនាគារ ស្ថាប័នមីក្រូហិរញ្ញវត្ថុ ក្រុមហ៊ុនធានារ៉ាប់រង ទីផ្សារភាគហ៊ុន តុលាការ អង្គភាពច្បាប់ និងសាកលវិទ្យាល័យដៃគូក្នុងតំបន់។" 
        },
        "mission-internships": { 
            "en": "- Strengthen cooperation in securing internship placements for students and job opportunities for graduates.", 
            "kh": "- ពង្រឹងកិច្ចសហប្រតិបត្តិការក្នុងការធានាកន្លែងហាត់ការ និងឱកាសការងារសម្រាប់និស្សិតបញ្ចប់ការសិក្សា។" 
        },
        // 4. Objectives
        "objectives-title": { "en": "4. Objectives", "kh": "៤. គោលបំណង" },
        "objectives-intro": { 
            "en": "The faculty actively develops students' capabilities through:", 
            "kh": "មហាវិទ្យាល័យអភិវឌ្ឍសមត្ថភាពនិស្សិតយ៉ាងសកម្មតាមរយៈ:" 
        },
        "objectives-assessment": { 
            "en": "- Regular assessment of academic programs and student performance through faculty evaluation, monitoring, and curriculum enhancement.", 
            "kh": "- ការវាយតម្លៃជាប្រចាំលើកម្មវិធីសិក្សា និងសមត្ថភាពនិស្សិតតាមរយៈការវាយតម្លៃមហាវិទ្យាល័យ ការត្រួតពិនិត្យ និងការពង្រឹងកម្មវិធីសិក្សា។" 
        },
        "objectives-partnerships": { 
            "en": "- Strengthening cooperation with partner institutions, companies, microfinance institutions, and banks to provide internship opportunities for students.", 
            "kh": "- ពង្រឹងកិច្ចសហប្រតិបត្តិការជាមួយស្ថាប័នដៃគូ ក្រុមហ៊ុន ស្ថាប័នមីក្រូហិរញ្ញវត្ថុ និងធនាគារ ដើម្បីផ្តល់ឱកាសហាត់ការសម្រាប់និស្សិត។" 
        },
        "objectives-research": { 
            "en": "- Encouraging research and innovation through modern learning resources and academic advancements.", 
            "kh": "- លើកទឹកចិត្តការស្រាវជ្រាវ និងការច្នៃប្រឌិតតាមរយៈធនធានសិក្សាទំនើប និងការជឿនលឿនផ្នែកសិក្សា។" 
        },
        "objectives-quality": { 
            "en": "- Providing high-quality and effective education.", 
            "kh": "- ផ្តល់ការអប់រំដែលមានគុណភាពខ្ពស់ និងមានប្រសិទ្ធភាព។" 
        },
        "objectives-monitoring": { 
            "en": "- Monitoring curricula, teaching quality, and student performance.", 
            "kh": "- ត្រួតពិនិត្យកម្មវិធីសិក្សា គុណភាពបង្រៀន និងសមត្ថភាពនិស្សិត។" 
        },
        "objectives-updating": { 
            "en": "- Regularly reviewing and updating academic programs.", 
            "kh": "- ពិនិត្យ និងធ្វើបច្ចុប្បន្នភាពកម្មវិធីសិក្សាជាប្រចាំ។" 
        },
        "objectives-infrastructure": { 
            "en": "- Developing and modernizing physical infrastructure.", 
            "kh": "- អភិវឌ្ឍ និងធ្វើទំនើបកម្មហេដ្ឋារចនាសម្ព័ន្ធរូបវន្ត។" 
        },
        "objectives-recruitment": { 
            "en": "- Recruiting and retaining high-quality professors with extensive expertise.", 
            "kh": "- ជ្រើសរើស និងរក្សាសាស្ត្រាចារ្យដែលមានគុណភាពខ្ពស់ និងជំនាញទូលំទូលាយ។" 
        },
        // 5. Professional Skills
        "skills-title": { "en": "5. Professional Skills", "kh": "៥. ជំនាញវិជ្ជាជីវៈ" },
        "skills-intro": { 
            "en": "This program is designed to provide students with real-world expertise by integrating theory and practical applications, ensuring students can quickly secure job opportunities while also enhancing the skills of banking, finance, corporate, and NGO professionals.", 
            "kh": "កម្មវិធីនេះត្រូវបានរចនាឡើងដើម្បីផ្តល់ជំនាញជាក់ស្តែងដល់និស្សិតតាមរយៈការបញ្ចូលទ្រឹស្តី និងការអនុវត្តជាក់ស្តែង ដើម្បីធានាថានិស្សិតអាចទទួលបានឱកាសការងារយ៉ាងឆាប់រហ័ស ព្រមទាំងពង្រឹងជំនាញរបស់អ្នកជំនាញធនាគារ ហិរញ្ញវត្ថុ សាជីវកម្ម និងអង្គការមិនមែនរដ្ឋាភិបាល។" 
        },
        "skills-financial-analysis": { 
            "en": "<span style=\"font-weight: bold;\">1-Financial Management and Analysis: </span><span style=\"font-weight: 400; color: black;\">This course prepares students to analyze financial statements for tasks such as credit and security analysis, lending decisions, and investment decisions. The course provides an in-depth understanding of financial reporting from the perspective of financial statement users and applies analytical tools for competitive analysis, credit decisions, investment assessments, bankruptcy predictions, and company valuations.</span>", 
            "kh": "<span style=\"font-weight: bold;\">១-ការគ្រប់គ្រង និងវិភាគហិរញ្ញវត្ថុ: </span><span style=\"font-weight: 400; color: black;\">វគ្គសិក្សានេះរៀបចំនិស្សិតឱ្យវិភាគរបាយការណ៍ហិរញ្ញវត្ថុសម្រាប់កិច្ចការដូចជា ការវិភាគឥណទាន និងសន្តិសុខ ការសម្រេចចិត្តផ្តល់ប្រាក់កម្ចី និងការសម្រេចចិត្តវិនិយោគ។ វគ្គនេះផ្តល់ការយល់ដឹងស៊ីជម្រៅអំពីរបាយការណ៍ហិរញ្ញវត្ថុពីទស្សនៈរបស់អ្នកប្រើប្រាស់របាយការណ៍ហិរញ្ញវត្ថុ និងអនុវត្តឧបករណ៍វិភាគសម្រាប់ការវិភាគប្រកួតប្រជែង ការសម្រេចចិត្តឥណទាន ការវាយតម្លៃវិនិយោគ ការព្យាករណ៍ការក្ស័យធន និងការវាយតម្លៃក្រុមហ៊ុន។</span>" 
        },
        "skills-financial-planning": { 
            "en": "<span style=\"font-weight: bold;\">2-Financial Management and Planning: </span><span style=\"font-weight: 400; color: black;\">This course covers financial decision-making for business managers. It focuses on financial tools and techniques that help firms maximize value through capital budgeting, capital structure, and working capital management. Topics include multinational financial management, risk management, and corporate financial strategies.</span>", 
            "kh": "<span style=\"font-weight: bold;\">២-ការគ្រប់គ្រង និងផែនការហិរញ្ញវត្ថុ: </span><span style=\"font-weight: 400; color: black;\">វគ្គសិក្សានេះគ្របដណ្តប់លើការសម្រេចចិត្តហិរញ្ញវត្ថុសម្រាប់អ្នកគ្រប់គ្រងអាជីវកម្ម។ វាផ្តោតលើឧបករណ៍ និងបច្ចេកទេសហិរញ្ញវត្ថុដែលជួយក្រុមហ៊ុនបង្កើនតម្លៃតាមរយៈការរៀបចំថវិកាមូលធន រចនាសម្ព័ន្ធមូលធន និងការគ្រប់គ្រងមូលធនធ្វើការ។ ប្រធានបទរួមមាន ការគ្រប់គ្រងហិរញ្ញវត្ថុអន្តរជាតិ ការគ្រប់គ្រងហានិភ័យ និងយុទ្ធសាស្ត្រហិរញ្ញវត្ថុសាជីវកម្ម។</span>" 
        },
        "skills-marketing": { 
            "en": "<span style=\"font-weight: bold;\">3-Marketing: </span><span style=\"font-weight: 400; color: black;\">This course explores market analysis, consumer behavior, segmentation, advertising, and long-term business relationships. Marketing connects material needs with economic trends and plays a crucial role in business success.</span>", 
            "kh": "<span style=\"font-weight: bold;\">៣-ទីផ្សារ: </span><span style=\"font-weight: 400; color: black;\">វគ្គសិក្សានេះស្វែងយល់ពីការវិភាគទីផ្សារ អាកប្បកិរិយារបស់អតិថិជន ការបែងចែកផ្នែកទីផ្សារ ការផ្សាយពាណិជ្ជកម្ម និងទំនាក់ទំនងអាជីវកម្មរយៈពេលវែង។ ទីផ្សារតភ្ជាប់តម្រូវការសម្ភារៈជាមួយនឹងនិន្នាការសេដ្ឋកិច្ច និងដើរតួនាទីសំខាន់ក្នុងភាពជោគជ័យនៃអាជីវកម្ម។</span>" 
        },
        "skills-business-comm": { 
            "en": "<span style=\"font-weight: bold;\">4-Business Communication: </span><span style=\"font-weight: 400; color: black;\">This course covers areas such as brand management, customer relations, advertising, public relations, corporate communication, reputation management, and event management, which are essential for professional and technical communication.</span>", 
            "kh": "<span style=\"font-weight: bold;\">៤-ទំនាក់ទំនងអាជីវកម្ម: </span><span style=\"font-weight: 400; color: black;\">វគ្គសិក្សានេះគ្របដណ្តប់លើផ្នែកដូចជា ការគ្រប់គ្រងម៉ាក ទំនាក់ទំនងអតិថិជន ការផ្សាយពាណិជ្ជកម្ម ទំនាក់ទំនងសាធារណៈ ទំនាក់ទំនងសាជីវកម្ម ការគ្រប់គ្រងកេរ្តិ៍ឈ្មោះ និងការគ្រប់គ្រងព្រឹត្តិការណ៍ ដែលជាចំណុចសំខាន់សម្រាប់ទំនាក់ទំនងវិជ្ជាជីវៈ និងបច្ចេកទេស។</span>" 
        },
        "skills-business-law": { 
            "en": "<span style=\"font-weight: bold;\">5-Business Law: </span><span style=\"font-weight: 400; color: black;\">This course focuses on laws governing business transactions, trade, contracts, and corporate regulations. It provides an understanding of both private and public commercial law.</span>", 
            "kh": "<span style=\"font-weight: bold;\">៥-ច្បាប់អាជីវកម្ម: </span><span style=\"font-weight: 400; color: black;\">វគ្គសិក្សានេះផ្តោតលើច្បាប់ដែលគ្រប់គ្រងប្រតិបត្តិការអាជីវកម្ម ពាណិជ្ជកម្ម កិច្ចសន្យា និងបទប្បញ្ញត្តិសាជីវកម្ម។ វាផ្តល់ការយល់ដឹងអំពីច្បាប់ពាណិជ្ជកម្មឯកជន និងសាធារណៈ។</span>" 
        },
        // 6. Associate Degree
        "associate-title": { "en": "6. Associate Degree", "kh": "៦. សញ្ញាបត្ររង" },
        "associate-finance-title": { 
            "en": "6.1 Associate Degree Program in Finance and Banking", 
            "kh": "៦.១ កម្មវិធីសញ្ញាបត្ររងផ្នែកហិរញ្ញវត្ថុ និងធនាគារ" 
        },
        "associate-finance-text": { 
            "en": "The Finance and Banking program focuses on both theoretical knowledge and practical skills to equip students with industry-relevant competencies. Graduates will be prepared to work in finance, banking, microfinance institutions, corporations, national and international organizations.", 
            "kh": "កម្មវិធីហិរញ្ញវត្ថុ និងធនាគារផ្តោតលើចំណេះដឹងទ្រឹស្តី និងជំនាញជាក់ស្តែងដើម្បីបំពាក់និស្សិតជាមួយនឹងសមត្ថភាពដែលទាក់ទងនឹងឧស្សាហកម្ម។ អ្នកបញ្ចប់ការសិក្សានឹងត្រូវបានរៀបចំដើម្បីធ្វើការក្នុងវិស័យហិរញ្ញវត្ថុ ធនាគារ ស្ថាប័នមីក្រូហិរញ្ញវត្ថុ សាជីវកម្ម និងអង្គការជាតិ និងអន្តរជាតិ។" 
        },

        // 7. Bachelor's Degree
        "bachelor-title": { 
            "en": "7. Bachelor's Degree", 
            "kh": "៧. សញ្ញាបត្របរិញ្ញាបត្រ" 
        },
        // 7.1 Bachelor's Program in Finance and Banking
        "bachelor-finance-title": { 
            "en": "7.1 Bachelor's Program in Finance and Banking", 
            "kh": "៧.១ កម្មវិធីបរិញ្ញាបត្រផ្នែកហិរញ្ញវត្ថុ និងធនាគារ" 
        },
        "bachelor-finance-text": { 
            "en": "Choosing a major in Finance and Banking provides students with strong knowledge in both theory and practical applications in the banking, finance, investment business, securities management, financial risk management, financial engineering, financial institutions, and international financial markets. Graduates can pursue careers in banks, financial institutions, financial firms, brokerage companies, and government agencies.", 
            "kh": "ការជ្រើសរើសជំនាញហិរញ្ញវត្ថុ និងធនាគាផ្តល់ឱ្យនិស្សិតនូវចំណេះដឹងរឹងមាំទាំងទ្រឹស្តី និងការអនុវត្តជាក់ស្តែងនៅក្នុងធនាគារ ហិរញ្ញវត្ថុ អាជីវកម្មវិនិយោគ ការគ្រប់គ្រងមូលបត្របំណុល ការគ្រប់គ្រងហានិភ័យហិរញ្ញវត្ថុ វិស្វកម្មហិរញ្ញវត្ថុ ស្ថាប័នហិរញ្ញវត្ថុ និងទីផ្សារហិរញ្ញវត្ថុអន្តរជាតិ។ អ្នកបញ្ចប់ការសិក្សាអាចបន្តអាជីពនៅក្នុងធនាគារ ស្ថាប័នហិរញ្ញវត្ថុ ក្រុមហ៊ុនហិរញ្ញវត្ឥុ ក្រុមហ៊ុនឈ្មួញកណ្តាល និងទីភ្នាក់ងាររដ្ឋាភិបាល។" 
        },
        // 7.2 Bachelor's Program in Economic Development
        "bachelor-econ-title": { 
            "en": "7.2 Bachelor's Program in Economic Development", 
            "kh": "៧.២ កម្មវិធីបរិញ្ញាបត្រផ្នែកការអភិវឌ្ឍសេដ្ឋកិច្ច" 
        },
        "bachelor-econ-text": { 
            "en": "Choosing a major in Economic Development is a social science that studies the societal context related to production activities, resource distribution, and consumption of goods and services. It examines the utilization of scarce resources in society to help students understand the processes of managing production, distribution, and consumption of goods and services in an economy. The program focuses on the behaviors and interactions of economic agents in social roles, equipping students with fundamental knowledge of efficient resource utilization, microeconomic and macroeconomic theories, both in theory and practice.", 
            "kh": "ការជ្រើសរើសជំនាញការអភិវឌ្ឍសេដ្ឋកិច្ច គឺជាវិទ្យាសាស្ត្រសង្គមដែលសិក្សាអំពីបរិបទសង្គមទាក់ទងនឹងសកម្មភាពផលិតកម្ម ការចែកចាយធនធាន និងការប្រើប្រាស់ទំនិញ និងសេវាកម្ម។ វាពិនិត្យលើការប្រើប្រាស់ធនធានដែលខ្វះខាតក្នុងសង្គម ដើម្បីជួយនិស្សិតឱ្យយល់ដឹងអំពីដំណើរការគ្រប់គ្រងផលិតកម្ម ការចែកចាយ និងការប្រើប្រាស់ទំនិញ និងសេវាកម្មនៅក្នុងសេដ្ឋកិច្ចមួយ។ កម្មវិធីនេះផ្តោតលើអាកប្បកិរិយា និងអន្តរកម្មរបស់ភ្នាក់ងារសេដ្ឋកិច្ចក្នុងតួនាទីសង្គម ដោយបំពាក់និស្សិតជាមួយនឹងចំណេះដឹងជាមូលដ្ឋានអំពីការប្រើប្រាស់ធនធានប្រកបដោយប្រសិទ្ធភាព ទ្រឹស្តីមីក្រូសេដ្ឋកិច្ច និងម៉ាក្រូសេដ្ឋកិច្ច ទាំងក្នុងទ្រឹស្តី និងការអនុវត្ត។" 
        },
        // 7.3 Bachelor's Program in Law
        "bachelor-law-title": { 
            "en": "7.3 Bachelor's Program in Law", 
            "kh": "៧.៣ កម្មវិធីបរិញ្ញាបត្រផ្នែកច្បាប់" 
        },
        "bachelor-law-text": { 
            "en": "The Law major is designed for students specializing in legal studies, providing foundational knowledge of law to prepare them for legal-related roles. The curriculum covers private law, public law, international law, and political science. This major explores legal perspectives, principles, and jurisprudence, the structure of national and international law, legal classifications, legal measures, legal sources, subjective and objective law, the role of lawyers, the role of notaries, other legal professions, dispute resolution principles, and judicial structures.", 
            "kh": "ជំនាញច្បាប់ត្រូវបានរចនាឡើងសម្រាប់និស្សិតដែលឯកទេសផ្នែកសិក្សាច្បាប់ ដោយផ្តល់ចំណេះដឹងជាមូលដ្ឋានអំពីច្បាប់ដើម្បីរៀបចំពួកគេសម្រាប់តួនាទីទាក់ទងនឹងច្បាប់។ កម្មវិធីសិក្សាគ្របដណ្តប់លើច្បាប់ឯកជន ច្បាប់សាធារណៈ ច្បាប់អន្តរជាតិ និងវិទ្យាសាស្ត្រនយោបាយ។ ជំនាញនេះស្វែងយល់ពីទស្សនៈច្បាប់ គោលការណ៍ និងយុត្តិវិជ្ជា រចនាសម្ព័ន្ធនៃច្បាប់ជាតិ និងអន្តរជាតិ ការចាត់ថ្នាក់ច្បាប់ វិធានច្បាប់ ប្រភពច្បាប់ ច្បាប់ប្រធានបទ និងច្បាប់គោលបំណង តួនាទីរបស់មេធាវី តួនាទីរបស់សារការី វិជ្ជាជីវៈច្បាប់ផ្សេងទៀត គោលការណ៍ដោះស្រាយជម្លោះ និងរចនាសម្ព័ន្ធតុលាការ។" 
        },
        // 7.4 Bachelor's Program in Public Administration
        "bachelor-admin-title": { 
            "en": "7.4 Bachelor's Program in Public Administration", 
            "kh": "៧.៤ កម្មវិធីបរិញ្ញាបត្រផ្នែករដ្ឋបាលសាធារណៈ" 
        },
        "bachelor-admin-text": { 
            "en": "The Public Administration major provides foundational knowledge in law and public administration related to royal institutions, legislative institutions, executive institutions, judicial courts at all levels, public administrative institutions, public institutions with economic characteristics, administrative management systems, public services, public administration in industrial and commercial sectors, public service careers, administrative documents, and public affairs.", 
            "kh": "ជំនាញរដ្ឋបាលសាធារណៈផ្តល់ចំណេះដឹងជាមូលដ្ឋានផ្នែកច្បាប់ និងរដ្ឋបាលសាធារណៈទាក់ទងនឹងស្ថាប័នរាជវង្ស ស្ថាប័ននីតិបញ្ញត្តិ ស្ថាប័នប្រតិបត្តិ តុលាការយុត្តិធម៌គ្រប់កម្រិត ស្ថាប័នរដ្ឋបាលសាធារណៈ ស្ថាប័នសាធារណៈដែលមានលក្ខណៈសេដ្ឋកិច្ច ប្រព័ន្ធគ្រប់គ្រងរដ្ឋបាល សេវាសាធារណៈ រដ្ឋបាលសាធារណៈក្នុងវិស័យឧស្សាហកម្ម និងពាណិជ្ជកម្ម អាជីពសេវាសាធារណៈ ឯកសាររដ្ឋបាល និងកិច្ចការសាធារណៈ។" 
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