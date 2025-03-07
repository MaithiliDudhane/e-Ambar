-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambar`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`firstname`, `lastname`, `username`, `email`, `password`, `confirmpass`) VALUES
('Maithili', 'Dudhane', 'maithili', 'maithilidudhane@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `getenglisharticle`
--

CREATE TABLE `getenglisharticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `article` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getenglisharticle`
--

INSERT INTO `getenglisharticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `article`) VALUES
(1, 'Absolute Success vs. Relative Success', 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'yyd.jpg', 'SUCCESS.docx');

-- --------------------------------------------------------

--
-- Table structure for table `getenglishpoem`
--

CREATE TABLE `getenglishpoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `poem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getenglishpoem`
--

INSERT INTO `getenglishpoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `poem`) VALUES
(1, 'Believe This ', 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'Believe This.jpg', 'Believe This.docx');

-- --------------------------------------------------------

--
-- Table structure for table `gethindiarticle`
--

CREATE TABLE `gethindiarticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hindiarticle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gethindiarticle`
--

INSERT INTO `gethindiarticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `hindiarticle`) VALUES
(1, 'योग का महत्व', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'yoga.jpg', 'योग का महत्व.docx');

-- --------------------------------------------------------

--
-- Table structure for table `gethindipoem`
--

CREATE TABLE `gethindipoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hindipoem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gethindipoem`
--

INSERT INTO `gethindipoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `hindipoem`) VALUES
(1, 'नीरज चोपड़ा के प्रेरक शब्द', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'NC.jpg', 'जब सफलता की ख़्वाहिश.docx');

-- --------------------------------------------------------

--
-- Table structure for table `getmarathiarticle`
--

CREATE TABLE `getmarathiarticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Marathiarticle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getmarathiarticle`
--

INSERT INTO `getmarathiarticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `Marathiarticle`) VALUES
(1, 'मी राजवाडा बोलतोय', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'mrb.jpg', 'मी राजवाडा बोलतोय.docx');

-- --------------------------------------------------------

--
-- Table structure for table `getmarathipoem`
--

CREATE TABLE `getmarathipoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Marathipoem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getmarathipoem`
--

INSERT INTO `getmarathipoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `Marathipoem`) VALUES
(1, 'जे अशक्य वाटतय', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'db.jpg', 'जे अशक्य वाटतय.docx');

-- --------------------------------------------------------

--
-- Table structure for table `getphography`
--

CREATE TABLE `getphography` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `yearofstudy` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `photography` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getphography`
--

INSERT INTO `getphography` (`id`, `firstname`, `lastname`, `yearofstudy`, `department`, `photography`) VALUES
(1, 'Maithili', 'Dudhane', 'First Year', 'CSE', 'hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `getsketch`
--

CREATE TABLE `getsketch` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `sketch` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `getsketch`
--

INSERT INTO `getsketch` (`id`, `firstname`, `lastname`, `yearofstudy`, `department`, `sketch`) VALUES
(1, 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'sketch.png');

-- --------------------------------------------------------

--
-- Table structure for table `sturegister`
--

CREATE TABLE `sturegister` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sturegister`
--

INSERT INTO `sturegister` (`id`, `firstname`, `lastname`, `prn`, `email`, `password`, `confirmpass`) VALUES
(1, 'Maithili', 'Dudhane', '22UCS303', 'maithili3335@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `uploadenglisharticle`
--

CREATE TABLE `uploadenglisharticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(100) DEFAULT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `summery` text NOT NULL,
  `summerysec` text NOT NULL,
  `summerythird` text NOT NULL,
  `englisharticle` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadenglisharticle`
--

INSERT INTO `uploadenglisharticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `summery`, `summerysec`, `summerythird`, `englisharticle`) VALUES
(1, 'Absolute Success vs. Relative Success', 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'yyd.jpg', 'One way to answer this question is to say: Luck matters more in an absolute sense and hard work matters more in a relative sense.\r\nThe absolute view considers your level of success compared to everyone else. What makes someone the best in the world in a particular domain? When viewed at this level, success is nearly always attributable to luck. Even if you make a good initial choice—like Bill Gates choosing to start a computer company—you can’t understand all of the factors that cause world-class outcomes.\r\n              ', 'As a general rule, the wilder the success, the more extreme and unlikely the circumstances that caused it. It’s often a combination of the right genes, the right connections, the right timing, and a thousand other influences that nobody is wise enough to predict.            ', '               Then there is the relative view, which considers your level of success compared to those similar to you. What about the millions of people who received similar levels of education, grew up in similar neighborhoods, or were born with similar levels of genetic talent?             ', '                  These people aren’t achieving the same results. The more local the comparison becomes, the more success is determined by hard work. When you compare yourself to those who have experienced similar levels of luck, the difference is in your habits and choices.\r\nAbsolute success is luck. Relative success is choices and habits.\r\nThere is an important insight that follows naturally from this definition: As outcomes become more extreme, the role of luck increases. That is, as you become more successful in an absolute sense, we can attribute a greater proportion of your success to luck.\r\nAs Nassim Taleb wrote in Fooled by Randomness, “Mild success can be explainable by skills and labor. Wild success is attributable to variance.”\r\n               ');

-- --------------------------------------------------------

--
-- Table structure for table `uploadenglishpoem`
--

CREATE TABLE `uploadenglishpoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `englishpoem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadenglishpoem`
--

INSERT INTO `uploadenglishpoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `englishpoem`) VALUES
(1, 'Believe This ', 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'Believe This.jpg', '             \r\nYou’re winning. You simply cannot fail.\r\nThe only obstacle is doubt;\r\nThere’s not a hill you cannot scale\r\nOnce fear is put to rout.\r\nDon’t think defeat, don’t talk defeat,\r\nThe word will rob you of your strength.\r\n“I will succeed,” This phrase repeat\r\nThroughout the journey’s length.\r\nThe minute that “I can’t is said –\r\nYou slam a door right in your face.\r\nWhy not exclaim, “I will” instead?\r\nHalf won then is the race.\r\nYou close the door to your success\r\nBy entertaining one small fear.\r\nThink happiness, talk happiness,\r\nWatch joy then coming near.\r\nThe word “impossible” is black.\r\n“I can” is like a flame of gold.\r\nNo whining, heart! Eyes! look not back;\r\nBe strong, O Will! and bold.\r\nYou’re winning, though the journey’s slow;\r\nYou’re gaining steadily each day.\r\nO Courage! what a warmth and glow\r\nYou shed along your way.\r\n\r\n            ');

-- --------------------------------------------------------

--
-- Table structure for table `uploadhindiarticle`
--

CREATE TABLE `uploadhindiarticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `summery` text NOT NULL,
  `summerysec` text NOT NULL,
  `summerythird` text NOT NULL,
  `hindiarticle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadhindiarticle`
--

INSERT INTO `uploadhindiarticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `summery`, `summerysec`, `summerythird`, `hindiarticle`) VALUES
(1, 'योग का महत्व', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'yogaa.jpg', '                                                                                          योग का उदगम हमारे प्राचीन भारत के संतो द्वारा विकसित ध्यान की एक पारंपरित पद्धति है। योग हमारे शारीरिक गतविधियों एवम्, मन को नियंत्रित करने के लिए भी किया जाता है।\r\n\r\nयोग यह संस्कृत शब्द से उत्पन्न हुआ है जिसका अर्थ है शामिल होना एकजुट होना। योग करने से मन, शरीर, चेतन और आत्मा को एकत्रीत या एकजुट करके संतुलन में लाया जाता है।\r\n                                                                                    ', ' \r\n               \r\n               \r\n               \r\n              खुश रहना हर व्यक्ति की इच्छा है, हाले किं, आधुनिक वक्त में अधिक से अधिक भावनात्मक और शारीरिक मागे बढ़ती जा रही है। जिसके परिणाम स्वरुप अधिक से अधिक लोग मानसिक और शारीरिक बीमारियों से गस्त हो रहे है। जिसमें अनिद्रा, चिंता, तनाव शामिल है। यही सब कारण है कि स्वास्थ्य के सुधार के लिए नए नए तरीके और तकनीक खोजे जा रहे है।                                                                        ', '                                                                                    योग करने से आत्मज्ञान की प्राप्ति तथा सभी प्रकार की शारीरिक परेशानियों को दूर करता है। योग करने से हमें नींद अच्छी आती है तथा हमारा शरीर तंदुरुस्त और स्वस्थ रहता है। योग करने से हमारा मस्तिष्क, एकाग्रचित होकर कार्य करता है। तथा हमारे मने में अच्छे विचारों का निवास हो जाता है। योग से हमारा शरीर स्वस्थ लचीला तथा शक्तिशाली बना रहात है। योगाभ्यास करने से कई रोगों से लड़ने की शक्ती मिलती है।\r\n\r\n                                                                        ', '                                                                                                                                                                  मधुमेह की बीमारी का इलाज करने में योग सहायक है। यह डायबिटीज के मरीजों के लिए फायदेमंद है। कर्द योगासन ऐसे भी है जिसे करने से हमें इवादयों की जरुरत कम पडती है और योग से हमारी दर्द सहने की क्षमता भी बढती है।\r\n\r\nध्यान करने से मानसिक तनाव दूर हो जाता है। और हमे आत्मिक शांति महसूस होती है। इससे एकाग्रता तथा धारणा शक्ति भी बढती है। योग के गर्भावस्था में भी काफी लाभ होते है। योग करने से शरीर में सहनशीलता में वृद्धि होती है। तथा हड्डियां और मांसपेशियां मजबूत होती है। शरीर का आकार और शारीरिक क्षमता अच्छी होती है।\r\n\r\nरोजना योगाभ्यास करने से चेहरे पर झुर्रियां करम हो जाती है। योगभ्यास करने से हमारे जीवन को एक सकारात्मक तरीके से जीने और काम करने की ऊर्जा प्रदान करता है।\r\n                                                                                                                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `uploadhindipoem`
--

CREATE TABLE `uploadhindipoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `hindipoem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadhindipoem`
--

INSERT INTO `uploadhindipoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `hindipoem`) VALUES
(1, 'नीरज चोपड़ा के प्रेरक शब्द', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'NC.jpg', 'जब सफलता की ख़्वाहिश आपको सोने ना दे| \r\nजब मेहनत के अलावा ओर कुछ अच्छा ना लगे|\r\nजब लगातार काम करने के बाद थकावट ना हो| \r\nसमझ लेना सफलता का नया इतिहास रचने वाला है|\r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `uploadmarathiarticle`
--

CREATE TABLE `uploadmarathiarticle` (
  `id` int(11) NOT NULL,
  `articlename` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `summery` text NOT NULL,
  `summerysec` text NOT NULL,
  `summerythird` text NOT NULL,
  `marathiarticle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadmarathiarticle`
--

INSERT INTO `uploadmarathiarticle` (`id`, `articlename`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `summery`, `summerysec`, `summerythird`, `marathiarticle`) VALUES
(1, 'मी राजवाडा बोलतोय', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'mrb.jpg', '                कोल्हापूर जिल्ह्यातील इचलकरंजी येथे स्थित घोरपडे सरकारांचा देखणा राजवाडा, तोच मी.होय होय मी राजवाडाच बोलतोय... मी प्रत्येक\r\nइचलकरंजीवासीयांच्या मनात घर करून आहे आणि नेहमीच राहणार. मला आठवतंय १९८२ साली माझे शिक्षण संकुलात रूपांतर झाले. इचलकरंजीचे जहागीरदार श्रीमंत आबासाहेब घोरपडे यांनी आदरणीय श्री. कल्लाप्पाण्णा आवाडे यांचा शिक्षण क्षेत्रामध्ये कार्य करण्याचा पवित्र हेतू पाहत त्यांना शिक्षण संस्थेसाठी मला स्वाधीन केले. त्यांनी लावलेल्या रोपट्याचे आज वटवृक्षात रुपांतर झाले आणि माझ्या प्रांगणात महाराष्ट्रातील पहिली सेल्फ फायनान्स्ड तत्त्वावर सुरू झालेली डीकेटीई आज इंजिनियरिंगच्या विविध शाखांमध्ये शिक्षण देणारी यशस्वी संस्था म्हणून परिचित झाली.              ', '\r\n               होय होय मी राजवाडाच बोलतोय ! डिप्लोमापासून डॉक्टरेटपर्यंतचे अभ्यासक्रम इथे यशस्वीरित्या सुरू आहेत. विद्यार्थ्यांना त्यांचे करिअर घडवायचे असेल तर त्यांनी येथे जरूर यावे. सर्वोत्तम सुविधा, तडजोड विरहित दर्जा, नवनवे उपक्रम, नवनवे अभ्यासक्रम आणि अव्वल गुणवत्ता यांचे उदाहरण म्हणजे माझ्यात वसलेली डिकेटीई.            ', '              मग ते नेट ए प्लस मानांकन असेल, एनबीए अॅक्रिडिटेशन असेल, एरिया इनोवेशन बँड असेल, कॅम्पस इंटरव्ह्यू प्लेसमेंटची उत्तुंग भरारी असेल, उत्तम इंडस्ट्री इन्स्टिट्यूट इंटरॅक्शन, शैक्षणिक सामंजस्य करार, तंत्रज्ञान, अध्यापन, अध्ययन प्रक्रिया, माजी विद्यार्थी, प्रशिक्षण, संशोधन, उत्तम लायब्ररी अशा अनेक आणि अनेक गुणधर्मामुळे इंजिनिअरिंग क्षेत्रात माझ्या डीकेटीईची ब्रँड म्हणून ओळख आहे. इचलकरंजीच्या वस्त्रोद्योग विकासामध्ये देखील माझा अमूल्य सहभाग आहे. मित्रहो, तब्बल ६३ करोड रुपयांचे गव्हन्मेंट प्रकल्प येथे कार्यरत आहेत.            ', '                  होय, होय मी राजवाडाच बोलतोय! सुरुवातीपासून अकॅडमी एक्सलन्ससाठी डीकेटीईची वेगळी ओळख आहे. अप्रतिम शैक्षणिक संपत्तीचा वारसा असलेल्या डीकेटीईमधून शिक्षण प्राप्त केलेला इंजिनिअर हा विशेष घडतो.\r\n\r\nइथल्या विद्यार्थ्यांना माझा असा काही लळा लागतो की, आमच्यातील नात्याची वीण दिवसेंदिवस अधिक घट्ट बनत जाते. सुतावरून स्वर्गात जाता येते अशा अर्थाची स आहे पण वास्तविक मात्र सुतावरून जगभर पसरता येते। इथल्या विद्यार्थ्यांनी सिद्ध केले आहे. प्रबळ आत्मविश्वासामु करिअरच्या अनेक क्षेत्रात उदाहरणार्थ, इंजिनिअरिंद सात व टेक्स्टाईलचे पाच अशा विविध शाखात डिकटीड विद्यार्थी यशस्वी होतात. शिक्षण घेऊन देशात आणि परदेशाल गेलेले विद्यार्थी मला म्हणजे त्यांच्या मातृसंस्थेला आवडू गेलेले गेला भेटायला येतात तेव्हा त्यांच्या चेहऱ्यावरचा स्वर आणि त्यांच्या व्यक्तिमत्त्वातील बदल मी निरखून पाहतो आणि\r\n\r\nसुखावतो. होय होय मी राजवाडाच बोलतोय.....तर मित्रहो. सांगण्याचा उद्देश एवढाच की, इथेच मिळते फॉरेन इंटर्नशिप इथेच मिळते फॉरेन प्लेसमेंट, इथेच आहेत फॉरेन इंडस्ट्रीज स्पॉन्सर्ड लॅबोरेटरीज, तज्ञ प्राध्यापकांकडून लेक्चर्स, प्रेक्टिकल्स, प्रोजेक्ट्स, व्यक्तिमत्व विकासासाठी कुशल मार्गदर्शन. तर यशाची उत्तुंग शिखरं गाठायला तुम्हीही या व यशाचे मानकरी व्हा. होय होय मी राजवाडाच बोलतोय !\r\n               ');

-- --------------------------------------------------------

--
-- Table structure for table `uploadmarathipoem`
--

CREATE TABLE `uploadmarathipoem` (
  `id` int(11) NOT NULL,
  `poemname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `marathipoem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadmarathipoem`
--

INSERT INTO `uploadmarathipoem` (`id`, `poemname`, `firstname`, `lastname`, `yearofstudy`, `department`, `image`, `marathipoem`) VALUES
(1, 'जे अशक्य वाटतय', 'मैथिली', 'दुधाने', 'अंतिम वर्ष', 'सी एस ई', 'db.jpg', ' जे अशक्य वाटतय\r\nते स्वप्न मला पहाचय...! \r\nज्या शञुचा कोणी पराभव करु शकत नाही\r\nत्याला मला हरवाचय...!\r\n\r\nकोणालाही सहन होत नाही अस दुःख मला सहन कराचय...!\r\nज्या ठिकाणी धाडसी माणस जाण्यास धाडस करत नाही\r\n\r\nत्या ठिकाणी मला जाऊन धावाचय...!\r\nज्या वेळी माझे भाऊ थकलेत\r\n\r\nपाय थकलेत, हात थकलेत,\r\nशरीर थकलय, त्या वेळेस मला,\r\nसमोर मला \" एव्हरेस्ट \" दिसतय त्या वेळी मला माझे\r\nएक एक पाऊल त्या \" एव्हरेस्ट \" च्या दिशेने टाकाचय...!\r\n\r\nतो \" स्टार \" मला गाठाचाय मला \" सत्यासाठी \" झगडाचय सर्घष कराचाय..\r\nकुठलाही प्रश्न त्यासाठी विचरायचा नाही\r\nथांबा घ्यायचा नाही...! \r\nमाझी नर्कात जायची सुद्धा तयारी आहे पण\r\nत्याला कारण \" स्वर्गीय \"\r\nअसल पाहिजे...!\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `uploadphography`
--

CREATE TABLE `uploadphography` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `uploadedphography` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadphography`
--

INSERT INTO `uploadphography` (`id`, `firstname`, `lastname`, `yearofstudy`, `department`, `uploadedphography`) VALUES
(1, 'Maithili', 'Dudhane', 'First Year', 'CSE', 'hd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uploadsketch`
--

CREATE TABLE `uploadsketch` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `yearofstudy` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `uploadedsketch` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadsketch`
--

INSERT INTO `uploadsketch` (`id`, `firstname`, `lastname`, `yearofstudy`, `department`, `uploadedsketch`) VALUES
(1, 'Maithili', 'Dudhane', 'Final Year', 'CSE', 'cmsd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `getenglisharticle`
--
ALTER TABLE `getenglisharticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getenglishpoem`
--
ALTER TABLE `getenglishpoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gethindiarticle`
--
ALTER TABLE `gethindiarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gethindipoem`
--
ALTER TABLE `gethindipoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getmarathiarticle`
--
ALTER TABLE `getmarathiarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getmarathipoem`
--
ALTER TABLE `getmarathipoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getphography`
--
ALTER TABLE `getphography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getsketch`
--
ALTER TABLE `getsketch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sturegister`
--
ALTER TABLE `sturegister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadenglisharticle`
--
ALTER TABLE `uploadenglisharticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadenglishpoem`
--
ALTER TABLE `uploadenglishpoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadhindiarticle`
--
ALTER TABLE `uploadhindiarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadhindipoem`
--
ALTER TABLE `uploadhindipoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadmarathiarticle`
--
ALTER TABLE `uploadmarathiarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadmarathipoem`
--
ALTER TABLE `uploadmarathipoem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadphography`
--
ALTER TABLE `uploadphography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadsketch`
--
ALTER TABLE `uploadsketch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `getenglisharticle`
--
ALTER TABLE `getenglisharticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getenglishpoem`
--
ALTER TABLE `getenglishpoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gethindiarticle`
--
ALTER TABLE `gethindiarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gethindipoem`
--
ALTER TABLE `gethindipoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getmarathiarticle`
--
ALTER TABLE `getmarathiarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getmarathipoem`
--
ALTER TABLE `getmarathipoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getphography`
--
ALTER TABLE `getphography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getsketch`
--
ALTER TABLE `getsketch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sturegister`
--
ALTER TABLE `sturegister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadenglishpoem`
--
ALTER TABLE `uploadenglishpoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadhindiarticle`
--
ALTER TABLE `uploadhindiarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadhindipoem`
--
ALTER TABLE `uploadhindipoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadmarathiarticle`
--
ALTER TABLE `uploadmarathiarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadmarathipoem`
--
ALTER TABLE `uploadmarathipoem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadphography`
--
ALTER TABLE `uploadphography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadsketch`
--
ALTER TABLE `uploadsketch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
