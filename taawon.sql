-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taawon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content_ar`, `content_en`) VALUES
(1, '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>', '<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt </p>');

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

CREATE TABLE `accounting` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounting`
--

INSERT INTO `accounting` (`id`, `content_ar`, `content_en`) VALUES
(1, '<p>في شركة تعاون لحلول الأعمال نقوم من خلال شركاؤنا الاستراتيجيين في العديد من الدول بتقديم الخدمات المالية والمحاسبية ومن ذلك الآتي:<br>النظام المالي والمحاسبي في أي شركة من العوامل الهامة جدا للنجاح حيث انها تعتبر الوسيلة الوحيدة لقياس نتائج الشركة وكل ما كان لديك نظام محاسبي جيد سيجعل ذلك مهمة اتخاذ القرارات الحالية والمستقبلية اسهل بالنسبة لك , لذلك نحن نقوم بتوفير العديد من الخدمات المحاسبية لعملائنا بدأ من تأسيس النظام المحاسبي الى امساك الدفاتر والتسجيل بها واعداد التسويات البنكية والائتمانية وتسويات المخزون واعداد القوائم المالية ومؤشرات الاداء للشركات , بالإضافة الى اننا نقوم بتولي مهمة اعداد الاقرارات الضريبية وفقا للقوانين الضريبية في دولة العميل.<br>ونقدم هذه الخدمات وأكثر كل عبر مختصون لديهم الخبرة العلمية والعملية الكافية<br>وفيما يلي قائمة بخدمات مسك الدفاتر والمحاسبة عن بعد التي نقوم بها والتي تعتبر أكثر شيوعا، إذا كانت شركتك بحاجة إلى خدمة غير مدرجة هنا، يمكنكم أخبارنا بها عند التواصل:<br>⦁ إنشاء وإدارة قسم المحاسبة<br>⦁ تسجيل كافة المصاريف والإيرادات<br>⦁ إعداد القوائم المالية الشهرية والربعية والسنوية<br>⦁ إعداد السياسات والإجراءات لقسم المحاسبة<br>⦁ توفير برنامج محاسبي<br>⦁ مكافحة الاحتيال والاختلاسات.<br>⦁ تطوير البيئة الرقابية للمنشأة.<br>⦁ إعداد دليل الحسابات ودليل المواد المناسب لأعمالك<br>⦁ خدمات مسك الدفاتر، يومية وأسبوعية وشهرية وربع سنوية وسنوية<br>⦁ الإقفالات الدورية وتحديد مصاريف وإيرادات الفترة وتدوير الأرصدة<br>⦁ التسويات المصرفية والقروض والاستثمار وحسابات التجار<br>⦁ استلام ومطابقة الفواتير مع مورديك والجهات التي تتعاقد معها للحصول على خدمات وسلع متنوعة<br>⦁ تشكيل المخصصات اللازمة لمواجهة الخسائر المحتملة فيه<br>⦁ إعداد كشوف المرتبات للموظفين المتضمنة التخفيضات والزيادات<br>⦁ إعداد جداول الأصول الثابتة و اهتلاكاتها<br>⦁ إعداد الموازنة المالية لكافة أقسام العمل ومتابعة تطبيقها ومقارنتها مع الواقع<br>⦁ اعتماد الميزانيات من خلال رفعها عبر محاسب قانوني معتمد على منصة <br>⦁ يمكنك التواصل مع القسم المختص على الأرقام التالية: </p>', '<p>At Taawon Business Solutions Company, we, through our strategic partners in many countries, provide financial and accounting services, including the following:<br>The financial and accounting system in any company is a very important factor for success, as it is considered the only means of measuring the company’s results. The more you have a good accounting system, the more it will make the task of making current and future decisions easier for you. Therefore, we provide many accounting services to our clients, starting from establishing the system. The accountant is responsible for keeping and registering books, preparing bank and credit reconciliations, inventory reconciliations, and preparing financial statements and performance indicators for companies. In addition, we undertake the task of preparing tax returns in accordance with the tax laws in the client’s country.<br>We provide these services and more, all through specialists with sufficient scientific and practical experience<br>Below is a list of the bookkeeping and remote accounting services that we provide that are considered the most common. If your company needs a service that is not listed here, you can tell us about it when contacting:<br>⦁ Establishing and managing the accounting department<br>⦁ Record all expenses and revenues<br>⦁ Preparing monthly, quarterly and annual financial statements<br>⦁ Preparing policies and procedures for the accounting department<br>⦁ Providing an accounting program<br>⦁ Combating fraud and embezzlement.<br>⦁ Developing the facility’s control environment.<br>⦁ Preparing the chart of accounts and materials guide appropriate for your business<br>⦁ Bookkeeping services, daily, weekly, monthly, quarterly and annual<br>⦁ Periodic closings, determining period expenses and revenues, and rotating balances<br>⦁ Bank reconciliations, loans, investment and merchant accounts<br>⦁ Receive and reconcile invoices with your suppliers and the parties you contract with to obtain various services and goods<br>⦁ Forming the necessary allocations to confront potential losses<br>⦁ Preparing employee payrolls including reductions and increases<br>⦁ Preparing fixed asset schedules and their depreciation<br>⦁ Preparing the financial budget for all work departments, following up on its implementation and comparing it with reality<br>⦁ Approval of budgets by submitting them via a certified public accountant on the platform<br>⦁ You can contact the relevant department on the following numbers:</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `image`) VALUES
(1, 'موقع تعاون يطلق موقعه الإلكتروني الجديد', 'Taawon lanch new website', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p><p><br>&nbsp;</p>', '<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”ertret</p>', 0x75706c6f6164732f66696c655f31363935363430303436352e6a7067),
(2, 'بوابة الشركات للخدمات المحاسبية والإدارية والقانونية', 'Taawon lanch new website', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>', '<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt&nbsp;</p><p>mollit anim id est laborum.”</p><p>&nbsp;</p>', 0x75706c6f6164732f66696c655f3136393530363239373031322e6a7067),
(3, 'بوابة الشركات للخدمات المحاسبية والإدارية والقانونية', 'بوابة الشركات للخدمات المحاسبية والإدارية والقانونية', '<p>بوابة الشركات للخدمات المحاسبية والإدارية والقانونية</p>', '<p>بوابة الشركات للخدمات المحاسبية والإدارية والقانونية</p>', 0x75706c6f6164732f66696c655f31363935363430303233352e6a7067),
(4, 'موقع تعاون يطلق موقعه الإلكتروني الجديد', 'Taawon lanch new website', '<p>موقع تعاون يطلق موقعه الإلكتروني الجديد موقع تعاون يطلق موقعه الإلكتروني الجديد</p>', '<p>Taawon lanch new website Taawon lanch new website</p>', 0x75706c6f6164732f66696c655f3136393536333939363031302e6a7067),
(5, 'بوابة الشركات للخدمات المحاسبية والإدارية والقانونية', 'Taawon lanch new website', '<p>للبيليبيللللللللللللللليبلبيليلب</p>', '<p>dsdasdsdsdsd</p>', 0x75706c6f6164732f66696c655f31363935363339393438352e6a7067),
(6, 'موقع تعاون يطلق موقعه الإلكتروني الجديد', 'يسيسشيسشي', '<p>يسشيسشيسي</p>', '<p>يسيسيسش</p>', 0x75706c6f6164732f66696c655f3136393536333939313331322e6a7067),
(7, 'asaSASA', 'DSDSAD', '<p>DSDSAD</p>', '<p>DSADSD</p>', 0x75706c6f6164732f66696c655f3136393536333939303131302e6a7067),
(8, 'بوابة الشركات للخدمات المحاسبية والإدارية والقانونية', 'Taawon lanch new websiteد', '<p>يسشيسشيسي</p>', '<p>dsdssd</p>', 0x75706c6f6164732f66696c655f31363935363339383930382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `parent`) VALUES
(2, 'مذكرات جوابية', 'Answer notes', 0),
(3, 'لوائح اعتراض بالاستئناف', 'Appeal objection regulations', 0),
(4, 'لوائح اعتراض بطلب النقض', 'Objection regulations requesting cassation', 0),
(5, 'لوائح اعتراض بالتماس إعادة النظر', 'Objection regulations to seek reconsideration', 0),
(6, 'استشارات قانونية', 'Legal advice', 0),
(7, 'نماذج عقود', 'Contract forms', 3),
(8, 'قسم', 'section', 2);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `content_ar`, `content_en`) VALUES
(33, 'نقوم بتمثيلك في إنهاء إجراءات تأسيس الشركات والدخول كمستثمر في كل من كندا والمملكة العربية السعودية وجمهورية مصر العربية والأمارات المتحدة حيث نوفر لك الدعم الكامل بكل ما يتعلق في تأسيس الشركات وتخليص جميع المعاملات لمساعدتك على تأسيس شركتك حيث نقوم بالتالي:\r\n⦁ نقوم بمتابعة إنهاء الموافقات الأمنية بمساعدة فريق المتخصصين في كل دولة.\r\n⦁ نقوم بتمثيلك من خلال توقيع عقد التأسيس والتخصيص وخطابات التفويض وفقا للنشاط المراد الاستثمار به.\r\n⦁ نقوم بحجز السجل التجاري واستخراج التراخيص اللازمة لإنهاء إجراءات تأسيس الشركة.\r\n⦁ نقوم بمساعدتك في فتح الحسابات البنكية وتأسيس العناوين الوطنية.\r\n⦁ نقوم باعتماد الميزانيات بما يتوافق ومتطلبات فتح سجل استثمار فرعي في دول الخليج ومنها المملكة العربية السعودية.\r\nيمكنك التواصل مع القسم المختص على الأرقام التالية...', 'We represent you in the procedures for establishing companies and entering as an investor in Canada, Saudi Arabia, the Arab Republic of Egypt, and the United Arab Emirates, where we provide you with full support with everything related to establishing companies and clearing all transactions to help establish your company, as you follow:\r\n⦁ After completing the signing of the security agreement, our team assisted in each country.\r\n⦁ Register your representation by signing the group contract and allocating the group data according to the specification of the activities in which you want to invest.\r\n⦁ Commercial Registry: Reserving the commercial registry and obtaining licenses is necessary for the company’s activities.\r\n⦁ We help you open the scientific bank and establish the national structure.\r\n⦁ Relying on budgets commensurate with the requirements of opening a sub-investment registry in the Gulf countries, including the Kingdom of Saudi Arabia.\r\n\r\nYou can contact the shortlisted specialty on the following numbers:'),
(34, 'محمد', '<p>sadasdsffdffd</p>'),
(35, 'mm', '<p>sadasdsffdffd</p>'),
(36, 'l', '<p>sadasdsffdffd</p>'),
(37, '<p>يسبسيبيبيسبيسبيسب</p>', '<p>sadasdsffdffd</p>'),
(38, 'gggggg', '<p>sadasdsffdffd</p>'),
(39, 'gggggg', '<p>sadasdsffdffd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `feasibility`
--

CREATE TABLE `feasibility` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `feasibility`
--

INSERT INTO `feasibility` (`id`, `content_ar`, `content_en`) VALUES
(1, '<p>في شركة تعاون لحلول الأعمال نقوم من خلال شركاؤنا الاستراتيجيين في العديد من الدول بتقديم خدمات دراسة الجدوى ومن ذلك الآتي:</p><p>بداية لماذا دراسة الجدوى مهمة لمشروعك؟<br>⦁ تعطي المستثمر شعور الأمان للاستثمار في مشروعك.<br>⦁ تساعدك دراسة الجدوى في الاستغلال الأمثل للموارد المتاحة لديك<br>⦁ أصبحت شرطاً أساسياً للحصول على التمويل من الجهات الحكومية والبنوك لتمويل المشاريع<br>⦁ تجنبك أخطار التعرض للأزمات المالية في مشروعك خلال فترة التأسيس<br>⦁ تساعدك دراسة الجدوى على التوزيع ألأمثل لرأس المال المملوك والمقترض على الأصول<br>⦁ تساعدك دراسة الجدوى في تحديد التكاليف التشغيلية اللازمة للمشروع<br>⦁ تجنبك دراسة الجدوى المخاطر التشغيلية وتوضح لك البدائل المقترحة<br>⦁ تجيبك على التساؤل المهم: هل نستمر في تنفيذ فكرة المشروع أم لا؟</p><p>مكونات دراسة الجدوى التي يحصل عليها عملاؤنا:<br>تشمل دراسة الجدوى المقدمة من شركة تعاون لحلول الأعمال على عدة دراسات منها:<br>⦁ الدراسة التسويقية<br>⦁ الدراسة الفنية<br>⦁ الدراسة المالية<br>⦁ الدراسة التنظيمية والإدارية<br>⦁ الدراسة القانونية</p><p> </p><p>⦁ يمكنك التواصل مع القسم المختص على الأرقام التالية:<br> </p> ...', '<p>At Taawon Business Solutions Company, we, through our strategic partners in many countries, provide feasibility study services, including the following:</p><p>Firstly, why is the feasibility study important for your project?<br>⦁ Give the investor a feeling of security to invest in your project.<br>⦁ The feasibility study helps you make optimal use of your available resources<br>⦁ It has become a basic condition for obtaining financing from government agencies and banks to finance projects<br>⦁ You avoid the risks of financial crises in your project during the establishment period<br>⦁ The feasibility study helps you make the optimal distribution of owned and borrowed capital over the assets<br>⦁ The feasibility study helps you determine the necessary operational costs for the project<br>⦁ The feasibility study avoids operational risks and explains the proposed alternatives<br>⦁ It answers the important question: Do we continue implementing the project idea or not?</p><p>Components of the feasibility study that our clients obtain:<br>The feasibility study submitted by Taawun Business Solutions Company includes several studies, including:<br>⦁ Marketing study<br>⦁ Technical study<br>⦁ Financial study<br>⦁ Organizational and administrative study<br>⦁ Legal study</p><p> </p><p>⦁ You can contact the relevant department on the following numbers:</p>');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `whatsapp`, `facebook`, `twitter`, `youtube`, `linkedin`, `instagram`, `email`) VALUES
(1, '+966536663424', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `content_ar` varchar(255) NOT NULL,
  `content_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`) VALUES
(1, '... تعاون ', 'Taawon . . .', '<p>بوابة المحامي للتخصص وجودة الأعمال</p>', '<p>Lawyer portal for specialization and quality of work</p>'),
(2, '... تعاون ', 'Taawon . . .', '. بوابة الشركات لعالم الأعمال ', 'Corporate portal to the business world'),
(3, '... تعاون ', 'Taawon . . .', 'بوابة الشركات للخدمات المحاسبية', 'Corporate portal for accounting services'),
(4, '... تعاون ', 'Taawon . . .', 'بوابة التدريب والتميز  ودراسات الجدوى', 'Training, excellence and feasibility studies portal');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `content_ar`, `content_en`) VALUES
(1, '<p>في شركة تعاون لحلول الأعمال نقوم من خلال شركاؤنا الاستراتيجيين في العديد من الدول بتقديم خدمات الدعم اللوجستي ومن ذلك الآتي:</p><p>⦁ التطوير التنظيمي واعادة الهيكلة<br>⦁ إعداد نظم الإمداد القيادي<br>⦁ بناء وتطوير مصفوفة الصلاحيات<br>⦁ إعداد خطط التدريب والتأهيل للموظفين<br>⦁ تطوير نظم إدارة الموارد البشرية<br>⦁ خدمة إدارة الرواتب - حماية الأجور -<br>⦁ خدمة الدعم المباشر لمشاكل الوزارات الحكومية.<br>⦁ خدمة إدارة الملفات والموائمة.<br>⦁ خدمة تجديد التراخيص السنوية.<br>⦁ خدمة التأمين التعاوني للمنشآت.<br>⦁ إدارة خدمات المنصات الحكومية للشركات</p><p> </p><p>⦁ يمكنك التواصل مع القسم المختص على الأرقام التالية:<br> </p> ...', '<p>At Taawon Business Solutions Company, we, through our strategic partners in many countries, provide logistical support services, including the following:</p><p>⦁ Organizational development and restructuring<br>⦁ Preparing leadership supply systems<br>⦁ Building and developing a matrix of powers<br>⦁ Preparing training and qualification plans for employees<br>⦁ Developing human resources management systems<br>⦁ Payroll Management Service - Wage Protection -<br>⦁ Direct support service for problems of government ministries.<br>⦁ File management and alignment service.<br>⦁ Annual license renewal service.<br>⦁ Cooperative insurance service for establishments.<br>⦁ Managing government platform services for companies</p><p> </p><p>⦁ You can contact the relevant department on the following numbers:</p>');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `content_ar`, `content_en`) VALUES
(1, '<p>في شركة تعاون لحلول الأعمال نقوم من خلال شركاؤنا الاستراتيجيين في العديد من الدول بتقديم خدمات التدريب والتطوير حيث نقدم بالتعاون مع شركاؤنا الاستراتيجيين العديد من الدورات التدريبية منها:<br>⦁ دورة تدريب المدربين TOT<br>⦁ دورة طريقك لاحتراف المحاماة<br>⦁ دورة إعداد وتصميم الحقائب الإلكترونية<br>⦁ دورة مهارات التعليم والتدريب عن بعد<br>⦁ دورة التسويق الاحترافي<br>⦁ دورة إدارة المشاريع pmp<br>⦁ دورة التخطيط الاستراتيجي<br>⦁ دورة مهارات الاقناع<br>⦁ دورة فن التفاوض</p>', '<p>At Taawon Business Solutions Company, we, through our strategic partners in many countries, provide training and development services. We, in cooperation with our strategic partners, provide many training courses, including:<br>⦁ Training of Trainers (TOT) course<br>⦁ Your path to becoming a professional lawyer<br>⦁ Course on preparing and designing electronic bags<br>⦁ Distance education and training skills course<br>⦁ Professional marketing course<br>⦁ PMP project management course<br>⦁ Strategic planning course<br>⦁ Persuasion skills course<br>⦁ The art of negotiation course</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'taawon', 'm.legaladvisor@gmail.com', 't@@won', '');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `content_ar` longtext NOT NULL,
  `content_en` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `category_id`, `user`, `date`, `image`) VALUES
(3, '... تعاون ', 'Taawon . . .', '<p>بلبيبيلبلبي</p>', '<p>ddfdfsfdf</p>', 2, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f3136393536343031333331332e6a7067),
(4, 'dsadsd AsaSAS', 'Taawon lanch new website AdsAA', '<p>dsadsda aDAdD</p>', '<p>dsada ddd</p>', 4, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f31363935363430313233382e6a7067),
(5, 'dasdasda', 'dasdd', '<p>dsadd</p>', '<p>sadsaa</p>', 5, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f31363935363430313037362e6a7067),
(6, 'grrree', 'rtrt', '<p>trtrte</p>', '<p>treteter</p>', 6, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f3136393536343030383031332e6a7067),
(7, 'aAsa', 'SAsas', '<p>sasas</p>', '<p>sasaskkkk</p>', 7, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f31363935363430303634352e6a7067),
(8, 'موقع تعاون يطلق موقعه الإلكتروني الجديد', 'Taawon lanch new website', '<p>czczxc</p>', '<p>cxzcxcx</p>', 8, 'taawon', '2023-09-25', 0x75706c6f6164732f66696c655f3136393536353131343331352e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feasibility`
--
ALTER TABLE `feasibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `feasibility`
--
ALTER TABLE `feasibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
