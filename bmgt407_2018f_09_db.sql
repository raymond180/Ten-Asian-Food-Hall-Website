-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 02:43 PM
-- Server version: 10.1.30-MariaDB-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmgt407_2018f_09_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `customerID` int(10) NOT NULL,
  `customerName` varchar(30) NOT NULL,
  `customerTelephone` varchar(20) NOT NULL,
  `customerEmail` varchar(25) NOT NULL,
  `customerPassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`customerID`, `customerName`, `customerTelephone`, `customerEmail`, `customerPassword`) VALUES
(1, 'John Smith', '1111111111', '1@yahoo.com', 'EverybodyLoves'),
(2, 'Jane Doe', '2111111111', '2@gmail.com', 'LebronRocks'),
(3, 'Money Man', '5407864598', '2char@yahoo.com', 'fgfdhbteh'),
(4, 'Elvin Killigrew', '111-668-8431', 'ekilligrew0@hexun.com', 'ODKKzE1'),
(5, 'Karmen Michieli', '741-629-1895', 'kmichieli1@va.gov', 'sXRxyHo5ME5'),
(6, 'Erskine Bursnell', '520-556-9397', 'ebursnell2@ocn.ne.jp', 'PH7ZWRw4XEKm'),
(7, 'Inger Kingdom', '439-688-2746', 'ikingdom3@networkadvertis', 'wxg4om'),
(8, 'Royall Doggrell', '246-777-3630', 'rdoggrell4@goo.gl', 'XjTxWqM'),
(9, 'Audrye Girardey', '540-787-3527', 'agirardey5@blinklist.com', '1sp5b6zQ'),
(10, 'Tiffy Diegan', '888-584-0333', 'tdiegan6@ning.com', 'BpZPtLLqv'),
(11, 'Roman Blaik', '405-127-1795', 'rblaik7@photobucket.com', 'LomnFlzY40Q'),
(12, 'Logan Ellsworthe', '925-661-3016', 'lellsworthe8@epa.gov', 'aweQC0NzUrt'),
(13, 'Pippa Baude', '295-615-0160', 'pbaude9@soup.io', 'SIBM360Ibc'),
(14, 'Curr Rosencrantz', '271-590-1021', 'crosencrantza@ebay.com', 'HPrPgyjZPo'),
(15, 'Sarine Helin', '216-168-7652', 'shelinb@nhs.uk', '6bPcWDZ'),
(16, 'Konrad Ancliff', '476-790-8395', 'kancliffc@wikispaces.com', 'xu9Dxv7fstG'),
(17, 'Lannie Hamon', '732-714-3595', 'lhamond@themeforest.net', 'fKPlmMx'),
(18, 'Marcille Carrane', '196-893-4108', 'mcarranee@slashdot.org', 'TEFWUwp0OmwP'),
(19, 'Linea Mildenhall', '494-729-2728', 'lmildenhallf@youtu.be', 's3jGMlcd'),
(20, 'Maisie McMichell', '236-599-7912', 'mmcmichellg@telegraph.co.', '4OMXoKgFR8'),
(21, 'Winifield Van Der Walt', '837-850-4612', 'wvanh@chronoengine.com', 'f49UqEDB0ouY'),
(22, 'Ahmed Chandler', '567-369-7947', 'achandleri@macromedia.com', 'yuUE6t7H4W6l'),
(23, 'Brunhilda O\'Dowd', '167-312-1286', 'bodowdj@engadget.com', 'NP61QeVH'),
(24, 'Ogdan Wakerley', '950-121-8368', 'owakerley0@biblegateway.c', 'F4wLua'),
(25, 'Munroe McRoberts', '773-432-2818', 'mmcroberts1@nydailynews.c', 'VlkgOpWml2w4'),
(26, 'Clarissa Tschirasche', '654-871-1191', 'ctschirasche2@newsvine.co', 'I3JP27I9vf'),
(27, 'Ellis Battison', '305-679-8197', 'ebattison3@alexa.com', 'iYgqfKhyMYty'),
(28, 'Simonne Braidford', '750-598-6271', 'sbraidford4@sbwire.com', 'V9eXCkLIOw'),
(29, 'Dimitry Husk', '830-718-7695', 'dhusk5@icio.us', 'iEEjoML9BN3'),
(30, 'Nichol Astupenas', '901-960-6853', 'nastupenas6@economist.com', 'nl7usSYY'),
(31, 'Ban Ost', '991-324-7031', 'bost7@google.co.uk', 'HcjxqUBW'),
(32, 'Swen Toolan', '926-427-0019', 'stoolan8@last.fm', '5QGAyzc8'),
(33, 'Beryl Arbon', '447-478-5798', 'barbon9@state.gov', 'Ky5VH7z'),
(34, 'Kala Fawdrey', '369-400-3479', 'kfawdreya@wikispaces.com', 'XKkCnrAI'),
(35, 'Constantine Maylor', '476-864-7910', 'cmaylorb@weather.com', 'RYYDpb0qYf'),
(36, 'Belle Tweed', '223-920-6439', 'btweedc@pen.io', 'mplw99Qb2'),
(37, 'Galen Pritchett', '458-445-9948', 'gpritchettd@businesswire.', 'OERLZyvc1wMS'),
(38, 'Keir Keyzor', '824-493-0241', 'kkeyzore@utexas.edu', 'JlKPhi2Z'),
(39, 'Cosette Moughton', '353-656-1906', 'cmoughtonf@state.gov', 'n2e1wZA'),
(40, 'Angelo Elmes', '198-954-0060', 'aelmesg@nps.gov', 'tEWhdhYF3'),
(41, 'Sinclair Studholme', '300-329-0091', 'sstudholmeh@mtv.com', 'eSgLdxbnm1SU'),
(42, 'Danni Janman', '462-430-5476', 'djanmani@pcworld.com', 'pFYrL4qlZ2zZ'),
(43, 'Nick Maybery', '731-552-6695', 'nmayberyj@wp.com', 'AXqDq8c9wsGc'),
(44, 'Coriss Hendriks', '561-205-9281', 'chendriksk@gov.uk', '7y3o6T'),
(45, 'Marysa Danher', '259-282-4516', 'mdanherl@nbcnews.com', 'EP6UTCTGD'),
(46, 'Sibelle Kleinhausen', '421-629-7311', 'skleinhausenm@storify.com', 'gmzxUG'),
(47, 'Cherrita Vagges', '933-641-7705', 'cvaggesn@dyndns.org', 'L2IYL40MNT'),
(48, 'Agace Ellor', '881-821-1436', 'aelloro@vkontakte.ru', 'KgG4mV'),
(49, 'Logan Fieldhouse', '332-823-1335', 'lfieldhousep@pbs.org', 'l3ZEbs4d'),
(50, 'Melisse Shinn', '772-216-3213', 'mshinnq@cpanel.net', 'smumvi'),
(51, 'Matilda Pechell', '213-685-9389', 'mpechellr@ask.com', 'lUti9XyQwE'),
(52, 'Nevil Presman', '104-344-5987', 'npresmans@blinklist.com', 'nrsuws'),
(53, 'Lazarus Dudgeon', '609-391-8461', 'ldudgeont@digg.com', 'JQkhwmHa'),
(54, 'Aymer Penhalurick', '381-708-6127', 'apenhaluricku@imdb.com', 'qm9J4B37n2fL'),
(55, 'Renaud Deniske', '324-858-4001', 'rdeniskev@amazon.com', 'VATxoTOwZ'),
(56, 'Che Doag', '407-420-3643', 'cdoagw@list-manage.com', 'f3GakhnTs'),
(57, 'Alyssa Wadman', '783-577-7173', 'awadmanx@nih.gov', '5woALQQcLy5'),
(58, 'Waldo Pott', '298-469-9922', 'wpotty@seattletimes.com', 'UJA4pzKpCJk'),
(59, 'Adelind Pease', '857-855-6933', 'apeasez@mayoclinic.com', 'mGfi6e'),
(60, 'Wood Orthmann', '403-155-7813', 'worthmann10@ftc.gov', 'H00BfihhV'),
(61, 'Dena Cleugher', '316-377-8548', 'dcleugher11@europa.eu', 'CQxhnkBa9sky'),
(62, 'Ashbey Linguard', '931-856-0831', 'alinguard12@un.org', 'lSyJL7q8QnGd'),
(63, 'Jarrod Caustic', '979-443-6203', 'jcaustic13@hc360.com', 'PaB77Vp8s'),
(64, 'Rayshell Quainton', '684-370-3516', 'rquainton14@stumbleupon.c', 'oo1zddpbH'),
(65, 'Coral Doneld', '988-205-4320', 'cdoneld15@ftc.gov', 'lw7cfX'),
(66, 'Randolf Asplen', '202-770-2409', 'rasplen16@slate.com', 'JvEMonxG'),
(67, 'Feodor Verick', '517-161-3013', 'fverick17@wikispaces.com', 'yOXV17qtehjV'),
(68, 'Ciel Redley', '642-840-5162', 'credley18@home.pl', '9kpsGMQy'),
(69, 'Stephana Reast', '460-874-1779', 'sreast19@jalbum.net', 'cAYxokO'),
(70, 'Illa Heningham', '717-906-3185', 'iheningham1a@sina.com.cn', '3yfemixlo'),
(71, 'Maryanne Allmark', '310-964-6255', 'mallmark1b@slideshare.net', '565IfheYL'),
(72, 'Elnora Barter', '176-599-5085', 'ebarter1c@harvard.edu', '1mS1VqBj0'),
(73, 'Natasha Jost', '856-611-2517', 'njost1d@dmoz.org', 'M1UzF0'),
(74, 'Hester Roskelley', '897-608-2228', 'hroskelley1e@google.ca', '9vXMIM'),
(75, 'Isaak Normanville', '674-165-4152', 'inormanville1f@so-net.ne.', 'UFrJDtT7sp'),
(76, 'Rinaldo Dyne', '814-990-4388', 'rdyne1g@narod.ru', 'YwGIONa'),
(77, 'Dillie Shovell', '353-503-2005', 'dshovell1h@behance.net', '9fA5I8JDa'),
(78, 'Hilton Deppen', '906-821-9248', 'hdeppen1i@army.mil', '95uvNDM'),
(79, 'Manfred Dunklee', '668-377-1278', 'mdunklee1j@istockphoto.co', 'cslf6bcbXs5g'),
(80, 'Anjela Dairton', '373-713-7649', 'adairton1k@xing.com', 'rUCau06IvHP2'),
(81, 'Julieta Latey', '675-878-8209', 'jlatey1l@spiegel.de', 'gdvJmvlZq'),
(82, 'Dacy Tillman', '555-380-9965', 'dtillman1m@twitter.com', '3NhtZe5'),
(83, 'Cy Philbrick', '310-399-9569', 'cphilbrick1n@dagondesign.', 'xz18AZgbxi'),
(84, 'Armstrong Rowesby', '843-912-3692', 'arowesby1o@reuters.com', 'uNj1Qt4'),
(85, 'Anestassia Donalson', '766-390-7676', 'adonalson1p@icio.us', 'GVws8s396'),
(86, 'Jorge Hancell', '612-637-1625', 'jhancell1q@desdev.cn', '6tISFw2'),
(87, 'Eleanore Clay', '903-151-8426', 'eclay1r@theatlantic.com', 'gh3kZaHUmM'),
(88, 'Dre Gerard', '904-396-3426', 'dgerard1s@engadget.com', 'MvTMSLv0BR'),
(89, 'Alfi Brownstein', '996-359-1444', 'abrownstein1t@eventbrite.', 'woJHIlJs'),
(90, 'Griz Milmore', '645-146-5246', 'gmilmore1u@engadget.com', 'hKYzf19t7woe'),
(91, 'Cirillo Serchwell', '832-609-0978', 'cserchwell1v@i2i.jp', 'm6qVIev'),
(92, 'Leland Damato', '533-428-4644', 'ldamato1w@prnewswire.com', 'iW4w4moHSEc'),
(93, 'Winny Matthewes', '252-225-3293', 'wmatthewes1x@examiner.com', 'iHqz40m'),
(94, 'Gerik Lilleyman', '681-441-3414', 'glilleyman1y@techcrunch.c', 'Y8A7VaPdnyL1'),
(95, 'Mag McCanny', '341-554-3074', 'mmccanny1z@nasa.gov', 'K2N1tq'),
(96, 'Ajay Vairow', '628-143-1021', 'avairow20@businessweek.co', 'UBJs8baoC59d'),
(97, 'Ricki Sampson', '989-532-1114', 'rsampson21@etsy.com', '2psFOedl7p'),
(98, 'Quintilla Croan', '729-387-9962', 'qcroan22@wiley.com', '0TzkaIwjHQwg'),
(99, 'Jaynell Kelbie', '146-343-0485', 'jkelbie23@accuweather.com', 'RlfT8Hq'),
(100, 'Jacquie Hayland', '793-952-1925', 'jhayland24@opensource.org', '49GxHVYjseLb'),
(101, 'Antonius Jollie', '447-406-9030', 'ajollie25@umich.edu', 'zuYiMe4'),
(102, 'Ardath Van den Hof', '253-514-6083', 'avan26@eventbrite.com', 'EhEqwsQXU'),
(103, 'Ignacio Malamore', '238-388-7576', 'imalamore27@ft.com', '4IFVp5tiEdj'),
(104, 'Lara Banstead', '729-261-2386', 'lbanstead28@usnews.com', 'c3N3iG'),
(105, 'Mariann O\'Cahey', '819-356-2928', 'mocahey29@usa.gov', 'Rly8gofVQh'),
(106, 'Preston Elston', '598-170-2752', 'pelston2a@canalblog.com', 'KK3UI3jdKMR'),
(107, 'Hilary Rohmer', '780-749-5215', 'hrohmer2b@gmpg.org', 'Qp6ijG'),
(108, 'Raimund Semark', '815-687-8398', 'rsemark2c@i2i.jp', 'OgySfQwL'),
(109, 'Kat Gerson', '815-645-6783', 'kgerson2d@arizona.edu', 'gVfR78B3QM'),
(110, 'Brigitte Oliveira', '206-939-1141', 'boliveira2e@whitehouse.go', 'Agi3WXjM'),
(111, 'Clayson O\'Longain', '873-596-8301', 'colongain2f@naver.com', '50uDFKL'),
(112, 'Robena Tippin', '608-211-2598', 'rtippin2g@vk.com', 'GlEJ6HRTzP'),
(113, 'Pippy Cahn', '649-157-8448', 'pcahn2h@behance.net', 'lmu8zyzP'),
(114, 'Frederick Creaney', '880-630-2628', 'fcreaney2i@thetimes.co.uk', 'CDJ6dW'),
(115, 'Fleming O\'Cullinane', '314-501-2364', 'focullinane2j@wordpress.o', 'YxqJAA'),
(116, 'Dorene Shivlin', '375-747-1721', 'dshivlin2k@pen.io', 'fluk9ec'),
(117, 'Francisco Rentelll', '836-686-4987', 'frentelll2l@google.co.jp', '8kZgas'),
(118, 'Mella Stark', '300-529-8891', 'mstark2m@mashable.com', 'Vrf5bErs'),
(119, 'Kale Teasell', '110-867-1301', 'kteasell2n@goodreads.com', 'VxJ5127vh'),
(120, 'Saraann Gierth', '746-830-7726', 'sgierth2o@craigslist.org', 'Xg7jYHq3'),
(121, 'Ariella Grunnell', '499-789-0160', 'agrunnell2p@time.com', 'vq7UXm99dN'),
(122, 'Kiley Le Jean', '796-319-9661', 'kle2q@squarespace.com', 'mK5ftTT9V1'),
(123, 'Rollin Edgehill', '775-727-9934', 'redgehill2r@washington.ed', 'Wdtn5Teo'),
(124, 'Alessandro Yesenin', '457-741-0216', 'ayesenin2s@army.mil', 'nhso9Lrb'),
(125, 'Berk Priestley', '977-318-6415', 'bpriestley2t@typepad.com', 'FWxg4Q'),
(126, 'Daniel Gagg', '762-257-1894', 'dgagg2u@google.cn', '9tYKSlE'),
(127, 'Sloan Bendon', '876-855-3143', 'sbendon2v@sphinn.com', 'J0xXENE'),
(128, 'Joachim Cockett', '182-683-5364', 'jcockett2w@hud.gov', 'v9XHARF'),
(129, 'Aube Reddington', '860-955-6353', 'areddington2x@intel.com', 'YgAjh1y'),
(130, 'Jose Hurich', '207-393-4954', 'jhurich2y@samsung.com', 'Sz2ldsCqpG'),
(131, 'Taddeo Mattimoe', '354-236-6904', 'tmattimoe2z@dailymail.co.', 'Ek9YyCvR4'),
(132, 'Margaret Baccup', '703-166-4158', 'mbaccup30@jalbum.net', 'opRdEJ9Fp'),
(133, 'Bobby Lewty', '399-898-1237', 'blewty31@businesswire.com', '9JYNgi4jSaz'),
(134, 'Trina Klinck', '624-428-3270', 'tklinck32@imgur.com', 'UoRlfN4vc1Yt'),
(135, 'Fairleigh Tatchell', '272-905-1506', 'ftatchell33@scientificame', 'TWm1byOw'),
(136, 'Stephanus Abade', '387-844-4437', 'sabade34@homestead.com', 'OCoqUf75AUS'),
(137, 'Nevin Trippitt', '318-818-6650', 'ntrippitt35@patch.com', 'CIELhFC9FPv'),
(138, 'Letisha Rebillard', '869-462-2682', 'lrebillard36@nyu.edu', 'zXRqlzzFTzce'),
(139, 'Quint Minnock', '418-205-1936', 'qminnock37@aboutads.info', 'yyQGt2Bxc'),
(140, 'Pierson Armell', '796-887-4453', 'parmell38@elpais.com', '38eAnvP8'),
(141, 'D\'arcy Pareman', '421-568-4350', 'dpareman39@t-online.de', 'lCleqFjaKH'),
(142, 'Porty Attwill', '867-800-0561', 'pattwill3a@technorati.com', 'Wred3lpNfk'),
(143, 'Anetta Camacke', '638-767-2143', 'acamacke3b@posterous.com', '4haROYH8yWjY'),
(144, 'Shannah Jain', '680-679-2317', 'sjain3c@redcross.org', '1leKQnRCH1rC'),
(145, 'Duky Lewry', '557-886-6301', 'dlewry3d@nytimes.com', 'QY2KbCm'),
(146, 'Annie Hinckesman', '817-293-4799', 'ahinckesman3e@zdnet.com', 'xS1aSr'),
(147, 'Eirena Boerder', '637-573-7122', 'eboerder3f@mozilla.com', 'eFTW4h'),
(148, 'Diane Fries', '482-873-9731', 'dfries3g@ask.com', 'NXc4cdvmeg0j'),
(149, 'Kym Kirkland', '824-136-0792', 'kkirkland3h@earthlink.net', '5WKP8Q'),
(150, 'Erny Figiovanni', '263-624-5866', 'efigiovanni3i@hao123.com', 'ro7gDLA'),
(151, 'Golda Duerdin', '574-160-6795', 'gduerdin3j@symantec.com', '5G9Ll7hFoXx'),
(152, 'Lynne Sutterfield', '381-147-9672', 'lsutterfield3k@bizjournal', '4AZ3z0'),
(153, 'Marlo Tissington', '325-625-3440', 'mtissington3l@nymag.com', 'GzT2KWV1'),
(154, 'Matilda Rentalll', '457-332-4931', 'mrentalll3m@patch.com', 'a23gIU8Xg'),
(155, 'Eugenia Wilacot', '389-258-8005', 'ewilacot3n@marketwatch.co', 'ooPHeE7Sa'),
(156, 'Matthew Winslet', '122-408-2921', 'mwinslet3o@miitbeian.gov.', 'eWBR45'),
(157, 'Marris Gossart', '424-793-8497', 'mgossart3p@oaic.gov.au', '2BJgoptYQWZk'),
(158, 'Gaylene Lillee', '838-119-6107', 'glillee3q@weebly.com', 'DHNaGmiE5q'),
(159, 'Ebony Stickney', '429-920-2358', 'estickney3r@tiny.cc', 'myVOd8'),
(160, 'Jean Brabbs', '521-934-4862', 'jbrabbs3s@booking.com', 'EfmYQ80A5'),
(161, 'Doug Eliot', '106-471-4358', 'deliot3t@google.com.au', 'C3OAZXvBTBdz'),
(162, 'Bondy Drieu', '426-102-7588', 'bdrieu3u@seesaa.net', 'Dq8evawreeIO'),
(163, 'Vonny Ivanusyev', '457-909-1055', 'vivanusyev3v@nps.gov', '8X1Q5d0Kg6'),
(164, 'Martica Johantges', '543-632-8898', 'mjohantges3w@facebook.com', 'QBSWq1W3u'),
(165, 'Zebadiah Daulton', '620-627-0908', 'zdaulton3x@icio.us', 'TGrCsmn4yLCi'),
(166, 'Kacy Woolbrook', '562-442-1743', 'kwoolbrook3y@japanpost.jp', 'JeO7GNUSs'),
(167, 'Lemmie Dowsing', '133-520-1340', 'ldowsing3z@gravatar.com', 'dkkazVmixD'),
(168, 'Elvina Newell', '633-527-6527', 'enewell40@flickr.com', 'PM9JTEA'),
(169, 'Saloma Di Giacomo', '690-373-1150', 'sdi41@phoca.cz', '6v4qUq8hk2w'),
(170, 'Flinn Dibley', '204-633-4903', 'fdibley42@home.pl', 'F26K34QYpluU'),
(171, 'Galina Demanche', '314-788-2072', 'gdemanche43@java.com', 'hjy35zqjM'),
(172, 'Cheslie Mirfin', '122-425-9562', 'cmirfin44@google.ru', 'qG6u1C'),
(173, 'Ailina Dugdale', '142-802-6710', 'adugdale45@blogspot.com', 'ddXSwHnZBv'),
(174, 'Jonis Stoffel', '585-519-3900', 'jstoffel46@paypal.com', 'qVgejqwf6Z'),
(175, 'Nat Ashcroft', '651-990-7134', 'nashcroft47@squidoo.com', 'VsePCOa0Wpp'),
(176, 'Tadd Pauncefort', '351-764-4502', 'tpauncefort48@tumblr.com', '9mBRPj'),
(177, 'Mora Chill', '278-939-5840', 'mchill49@dot.gov', 'r0IUkli'),
(178, 'Peder Mowne', '891-470-4598', 'pmowne4a@usda.gov', 'El4jaloKH'),
(179, 'Binny Jenner', '565-957-5951', 'bjenner4b@vinaora.com', 'NyzHrB'),
(180, 'Adeline Feaks', '166-336-1695', 'afeaks4c@issuu.com', '30yADyCXOk'),
(181, 'Claudelle Nystrom', '414-547-9812', 'cnystrom4d@smh.com.au', 'qsRTxqpYx'),
(182, 'Adaline Berthouloume', '878-276-6656', 'aberthouloume4e@usatoday.', 'newoIEOUv4B4'),
(183, 'Rowena Abbe', '320-383-5394', 'rabbe4f@youtu.be', 'Y9iigL2twz'),
(184, 'Kathleen Mollindinia', '536-926-4506', 'kmollindinia4g@gov.uk', 'U0U5AnaaAN'),
(185, 'Reynard Keene', '272-563-6088', 'rkeene4h@mysql.com', 'OHRmCCa0'),
(186, 'Ingmar Blaszczyk', '120-761-8986', 'iblaszczyk4i@indiatimes.c', 'aOvHFzJ6al'),
(187, 'Kennie Soppett', '513-268-9200', 'ksoppett4j@europa.eu', '37o9aeHa'),
(188, 'Kirk Fuster', '994-403-3144', 'kfuster4k@bizjournals.com', 'WDnlawuwx1ZZ'),
(189, 'Berry Strowlger', '108-901-5055', 'bstrowlger4l@nymag.com', '8oAvPTjeu'),
(190, 'Jessamine Reveland', '367-900-4271', 'jreveland4m@wired.com', 'T1XC9oFlHp'),
(191, 'Godfrey Spraberry', '527-659-8177', 'gspraberry4n@hugedomains.', '5omhoNvqSR'),
(192, 'Phillida Fruchter', '837-837-8696', 'pfruchter4o@japanpost.jp', 'GHld7khaSHGK'),
(193, 'Jesselyn Cranfield', '789-458-4651', 'jcranfield4p@lulu.com', 'sfJakIeBInbf'),
(194, 'Kiri Acom', '491-525-8706', 'kacom4q@yelp.com', 'c8msyVq051i'),
(195, 'Danielle Tabourier', '675-972-3240', 'dtabourier4r@wiley.com', 'AKBUwOh54'),
(196, 'Burlie Gladdolph', '816-942-5073', 'bgladdolph4s@businessinsi', 'xNGaUpoQK'),
(197, 'Kristy Chapiro', '528-779-1269', 'kchapiro4t@biblegateway.c', 'UuZB8TiJ'),
(198, 'Fraser Tchaikovsky', '629-498-8999', 'ftchaikovsky4u@msn.com', 'hy573AcFQx2v'),
(199, 'Gerek Chapell', '882-788-8277', 'gchapell4v@comsenz.com', 'O7uFWp'),
(200, 'Abigael Birkinshaw', '998-671-4879', 'abirkinshaw4w@disqus.com', 'ak8gYE2l'),
(201, 'Moritz Denniston', '622-121-5133', 'mdenniston4x@blog.com', 'A9Ub43I'),
(202, 'Farlie Milton-White', '344-184-5329', 'fmiltonwhite4y@yellowbook', '6SrPU1N'),
(203, 'Andros Cordero', '638-767-9586', 'acordero4z@businesswire.c', 'uMEZjrbK7zA'),
(204, 'Hayyim Obin', '666-604-1794', 'hobin50@youtube.com', 'wJUPlW6F0'),
(205, 'Jarret Spellsworth', '473-178-3377', 'jspellsworth51@google.cn', '7RM7kP9DI'),
(206, 'Clayborne Jeacocke', '657-948-9023', 'cjeacocke52@netlog.com', 'QmqibGV7q5W'),
(207, 'Bryant Culshew', '727-565-5227', 'bculshew53@skype.com', '0jtq8X'),
(208, 'Jandy Moynham', '206-706-1960', 'jmoynham54@bigcartel.com', 'kmxlHg'),
(209, 'Addie Warrick', '427-794-0256', 'awarrick55@ask.com', 'K1QnugYH1nn'),
(210, 'Cyndy Climpson', '207-691-0612', 'cclimpson56@washingtonpos', 'MvTj4VKET'),
(211, 'Flss Guilloux', '540-228-7507', 'fguilloux57@businessinsid', '7nir4IV6BFg'),
(212, 'Griswold Tibbles', '551-163-7736', 'gtibbles58@virginia.edu', 'p8SblInfUvwd'),
(213, 'Theodora Kores', '938-985-1247', 'tkores59@canalblog.com', 'FvQ2AiV'),
(214, 'Elmira Giraudel', '180-492-0604', 'egiraudel5a@yale.edu', 'FrIsJjhz'),
(215, 'Nehemiah Pedycan', '420-107-6334', 'npedycan5b@bbb.org', 'JVUxSQ'),
(216, 'Mora Ronnay', '631-248-2482', 'mronnay5c@msn.com', 'kQOIosLsxcUo'),
(217, 'Pepe Rosenhaupt', '322-139-6331', 'prosenhaupt5d@jugem.jp', '8NKhay'),
(218, 'Andy Oman', '900-557-6801', 'aoman5e@auda.org.au', 'aOr3xq7ELm4'),
(219, 'Barnabas Grimbleby', '403-120-9465', 'bgrimbleby5f@state.gov', 'g6QLZNQrKk'),
(220, 'Tricia Prazer', '360-340-8584', 'tprazer5g@youtube.com', 'snCBKWEbj'),
(221, 'Isidro Clayfield', '789-728-9631', 'iclayfield5h@nytimes.com', 'yj794Au'),
(222, 'Sascha Heinzel', '924-973-9817', 'sheinzel5i@gizmodo.com', 'suhPnvPLKi4S'),
(223, 'Olympe Phipson', '689-144-9819', 'ophipson5j@unesco.org', 't154ly'),
(224, 'Harlin Peschka', '256-778-5367', 'hpeschka5k@ocn.ne.jp', '08rLaIGo'),
(225, 'Sybille Vogele', '365-372-6137', 'svogele5l@cpanel.net', 'oBtOesUF'),
(226, 'Mozes Petrelli', '933-147-4888', 'mpetrelli5m@mtv.com', 'R7NAu2PKg'),
(227, 'Chen Whitehair', '396-715-3020', 'cwhitehair5n@utexas.edu', 'v8URi9JUzBG'),
(228, 'Angelico Tarbin', '385-757-9908', 'atarbin5o@cbsnews.com', 'nviZqmDriP'),
(229, 'Ezequiel Seddon', '966-510-5134', 'eseddon5p@godaddy.com', 'G6BsyI7P'),
(230, 'Adelina Farndale', '115-613-7530', 'afarndale5q@rambler.ru', 'qJkfvd'),
(231, 'Pansie Zaniolini', '583-250-8800', 'pzaniolini5r@cbslocal.com', 'FFNwAZLvherp'),
(232, 'Boyd Danielski', '424-841-7269', 'bdanielski5s@symantec.com', 'fbyrG0gY'),
(233, 'Berthe Daniel', '187-626-4903', 'bdaniel5t@goodreads.com', 'FfQTj8q'),
(234, 'Franky Syder', '532-832-3646', 'fsyder5u@wikimedia.org', '4GabxbO'),
(235, 'Kameko Ruffli', '105-265-7080', 'kruffli5v@un.org', 'vDxCMmjfGrv5'),
(236, 'Nicol Hordle', '760-758-2108', 'nhordle5w@com.com', 'RhBI6m2fzmt'),
(237, 'Cloris Basilone', '622-289-8597', 'cbasilone5x@histats.com', 'zQUCig4Y6'),
(238, 'Fredrika Furzey', '264-224-4012', 'ffurzey5y@xing.com', 'E1t848q'),
(239, 'Genovera Tournay', '131-504-4486', 'gtournay5z@earthlink.net', 'eUWezvnxa'),
(240, 'Merna Sier', '477-477-0616', 'msier60@state.gov', '47jtrFw1KQ'),
(241, 'Geri Hatley', '556-196-9305', 'ghatley61@goo.gl', 'KWAwMxWL'),
(242, 'Juli Banfill', '713-454-1820', 'jbanfill62@naver.com', 'G9IrcLPua'),
(243, 'Horten Tomalin', '888-146-2885', 'htomalin63@phpbb.com', 'ARrsnpK'),
(244, 'Farley Couves', '795-261-2910', 'fcouves64@furl.net', '27bdavZq'),
(245, 'Timothea Pargent', '774-528-3803', 'tpargent65@over-blog.com', 'UPY5MqqQ'),
(246, 'Genny Deegin', '556-723-5921', 'gdeegin66@microsoft.com', 'uiD4M3'),
(247, 'Carolin Clymo', '362-392-8865', 'cclymo67@parallels.com', '6wfcMTgoMlL'),
(248, 'Desiri Milner', '359-872-2352', 'dmilner68@marriott.com', 'NXdkoHRLWu'),
(249, 'Brendan Servant', '401-770-3435', 'bservant69@constantcontac', 'gRbYIIKc2'),
(250, 'Tanney Corryer', '426-239-9223', 'tcorryer6a@squarespace.co', 'xovrQ1rvWi9'),
(251, 'Connie Dudson', '221-118-9569', 'cdudson6b@discovery.com', 'EC5fnS'),
(252, 'Corabelle McNickle', '331-732-9309', 'cmcnickle6c@chronoengine.', 'gsrDY4'),
(253, 'Nadine Petras', '982-418-2452', 'npetras6d@desdev.cn', 'JcvhVouwz'),
(254, 'Bradney Sherville', '678-392-5133', 'bsherville6e@newyorker.co', 'jBeJ21'),
(255, 'Hephzibah Everex', '282-146-6032', 'heverex6f@wordpress.org', 'z2SzuMAc'),
(256, 'Brigham Strand', '874-851-2882', 'bstrand6g@amazon.de', 'ewEXZfmEr7Z'),
(257, 'Ingmar Dudney', '768-822-0899', 'idudney6h@hhs.gov', 'xBYGrURK1Rd'),
(258, 'Brinn O\'Downe', '672-723-0643', 'bodowne6i@hao123.com', 'C5xjJtUGQsy'),
(259, 'Rosmunda Bosson', '516-300-7579', 'rbosson6j@si.edu', 'RuK7kBc'),
(260, 'Taddeo Goranov', '102-326-8082', 'tgoranov6k@pen.io', 'PTXqzrEC4N'),
(261, 'Roxanna Mattisson', '615-502-7218', 'rmattisson6l@businesswire', 'di0ULhHQ'),
(262, 'Deonne McKeon', '341-769-4134', 'dmckeon6m@bizjournals.com', '0OU0ez0rlP'),
(263, 'Darya Ziemecki', '878-810-5886', 'dziemecki6n@bloglines.com', 'oPmHzM3'),
(264, 'Artemis Sambals', '671-170-4763', 'asambals6o@bizjournals.co', 'hzzToat4u'),
(265, 'Tades Moreno', '787-683-5693', 'tmoreno6p@youtube.com', 'mJEfr4qZKaG'),
(266, 'Juliann Upham', '412-821-0647', 'jupham6q@last.fm', 'uaYFLc6'),
(267, 'Carmon Hebdon', '440-375-0744', 'chebdon6r@opensource.org', 'ffWZkzB7I1Sm'),
(268, 'Fleurette Tezure', '325-383-1708', 'ftezure6s@nih.gov', 'a9IbXW'),
(269, 'Riannon Kerman', '766-107-1500', 'rkerman6t@fastcompany.com', 'GZA8oM1dl'),
(270, 'Lorne Cottey', '984-780-0999', 'lcottey6u@sphinn.com', 'BPjehpjpCox'),
(271, 'Sheilakathryn Netherwood', '267-456-9988', 'snetherwood6v@privacy.gov', 'SAcJXeB'),
(272, 'Ephrayim Douthwaite', '554-635-5398', 'edouthwaite6w@sakura.ne.j', 'bJt5FeWwnkJt'),
(273, 'Ahmed Vatini', '740-104-3793', 'avatini6x@europa.eu', 'kabbS3llEep'),
(274, 'Branden Neild', '132-296-1687', 'bneild6y@github.com', 'JmUQV11PdlG'),
(275, 'Inesita Haliburn', '301-827-7360', 'ihaliburn6z@seesaa.net', 'QTTaK7'),
(276, 'Neville Greenroyd', '527-406-2834', 'ngreenroyd70@gnu.org', '3BMHg7'),
(277, 'Jerald Bru', '742-721-0694', 'jbru71@chron.com', 'y6vCySZidn'),
(278, 'Cherye Nevitt', '367-194-1598', 'cnevitt72@amazonaws.com', 'xAspDG'),
(279, 'Claretta Jeavon', '635-100-9857', 'cjeavon73@icio.us', 'C1brDu'),
(280, 'Free Ridde', '122-422-8671', 'fridde74@skyrock.com', 'gP2RWg'),
(281, 'Geralda Furphy', '739-800-8311', 'gfurphy75@msn.com', 'Es1CoESgyuGi'),
(282, 'Monique Vannikov', '811-523-6335', 'mvannikov76@macromedia.co', 'gULlSi4SBF7'),
(283, 'Daven Sagar', '715-998-1090', 'dsagar77@disqus.com', '9xDv5B8fp'),
(284, 'Torre Hanselmann', '492-259-1974', 'thanselmann78@diigo.com', 'WslnFuNalv'),
(285, 'Alaster Clayden', '686-709-4248', 'aclayden79@discovery.com', '1q8GKMww6V'),
(286, 'Leslie Rizzetti', '868-206-6950', 'lrizzetti7a@cmu.edu', 'YOMHwn'),
(287, 'Nichols Triswell', '748-128-7872', 'ntriswell7b@lycos.com', '0zMmVO8'),
(288, 'Phillipe Doggett', '907-364-2457', 'pdoggett7c@yellowpages.co', 'wZW3qbOYFv'),
(289, 'Matthaeus Vedeshkin', '690-483-7140', 'mvedeshkin7d@ebay.com', 'yVQCxufR8xVW'),
(290, 'Gerta Stevings', '994-481-2265', 'gstevings7e@unc.edu', 'SNcOlPLhXVG'),
(291, 'Barbara-anne Sywell', '939-207-1737', 'bsywell7f@bizjournals.com', 'KuZOrqcY5N'),
(292, 'Fleming Rubinow', '803-947-4469', 'frubinow7g@msu.edu', 'pCovvmHYkt3W'),
(293, 'Hermione Sabatier', '906-978-3067', 'hsabatier7h@mashable.com', 'qst86iEj'),
(294, 'Bailie Lush', '619-849-5970', 'blush7i@stanford.edu', 'e1hqbhHz'),
(295, 'Malorie Hymer', '416-682-7895', 'mhymer7j@amazon.co.jp', 'f3ZAeZ'),
(296, 'Charita Groneway', '378-304-8964', 'cgroneway7k@over-blog.com', 'g2q4cAoE86'),
(297, 'Clemmy Burras', '343-359-6493', 'cburras7l@zimbio.com', 'ZAQHOsE3xhFE'),
(298, 'Lenka Hedylstone', '504-453-5571', 'lhedylstone7m@shareasale.', 'SqlAkuzFXau'),
(299, 'Arte Bonsale', '597-349-1619', 'abonsale7n@bbb.org', 'mQjL10'),
(300, 'Brynna Fessions', '952-726-4420', 'bfessions7o@macromedia.co', 'uxNNYIfdX'),
(301, 'Brietta Garnsworthy', '495-244-5709', 'bgarnsworthy7p@squidoo.co', 'Qe10RZCJWbE'),
(302, 'Ella Lacotte', '186-967-9464', 'elacotte7q@google.de', 'dXM6gMnf'),
(303, 'Doe Heifer', '587-871-5456', 'dheifer7r@geocities.com', 'cAhMtQWIR'),
(304, 'Nikolaos Triplet', '897-569-7397', 'ntriplet7s@dropbox.com', 'YIWUJLRouRD'),
(305, 'Zechariah Oppie', '459-382-5773', 'zoppie7t@instagram.com', 'wpEol7eq'),
(306, 'Anna-diane Rigate', '766-853-4416', 'arigate7u@fastcompany.com', 'RhKT4D4d'),
(307, 'Jermaine Saynor', '854-995-2158', 'jsaynor7v@wired.com', 'Zp8fzLPd'),
(308, 'Parker Clowney', '518-977-2048', 'pclowney7w@multiply.com', 'nlDLPb'),
(309, 'Delcine Revie', '330-837-9735', 'drevie7x@geocities.com', 'yFoys312'),
(310, 'Katha Winman', '964-735-7890', 'kwinman7y@answers.com', '3aNnu8ZBec4'),
(311, 'Cristine Cosslett', '192-314-6869', 'ccosslett7z@theguardian.c', 'Jkhox7vReJ'),
(312, 'Templeton Hauxby', '222-874-4407', 'thauxby80@scribd.com', 'fkfGu2b3x'),
(313, 'Corby Drinkhall', '319-631-6770', 'cdrinkhall81@upenn.edu', 'DzK47lrfz'),
(314, 'Chicky Eldin', '823-124-2983', 'celdin82@blogger.com', '2xu4pn1h'),
(315, 'Blondie Ceeley', '975-388-6760', 'bceeley83@youku.com', 'BOHsUM5'),
(316, 'Retha Gherardini', '489-187-0904', 'rgherardini84@google.ca', 'D0mS22aw2w'),
(317, 'Maureen Buick', '868-326-7233', 'mbuick85@123-reg.co.uk', '30IxoX5p49a'),
(318, 'Merrie Pither', '398-568-3172', 'mpither86@tripod.com', 'EpzOMVKfUOt'),
(319, 'Julio Jesty', '809-889-1402', 'jjesty87@army.mil', 'QQy2FLvMz'),
(320, 'Gwendolyn Leborgne', '302-696-4926', 'gleborgne88@yellowbook.co', '26r3Hk364'),
(321, 'Anthia Lowing', '202-424-1892', 'alowing89@soup.io', 'Zqsv5brGiui8'),
(322, 'Ruperto Breddy', '396-549-2372', 'rbreddy8a@bbb.org', 'Owgckv2nb4Y'),
(323, 'Yasmeen Brant', '704-756-5459', 'ybrant8b@godaddy.com', '8LbbsFV'),
(324, 'Otha Coyett', '462-891-6063', 'ocoyett8c@exblog.jp', '7QIR9Zy9'),
(325, 'Seline Grogona', '902-306-4186', 'sgrogona8d@imdb.com', 'q3IIa7Rjof'),
(326, 'Sarita Smorfit', '305-346-2008', 'ssmorfit8e@hostgator.com', 'SNLQGI7'),
(327, 'Brittan Crookston', '890-722-7575', 'bcrookston8f@furl.net', 'OP6vg3'),
(328, 'Dannie Eason', '859-763-5882', 'deason8g@apple.com', 'R4Wk2zF1E4k'),
(329, 'Tootsie Brazil', '628-782-2969', 'tbrazil8h@state.gov', 'm7HJAfORF'),
(330, 'Adriena Belsey', '922-336-8211', 'abelsey8i@walmart.com', 'RbFnp2'),
(331, 'Pippy Ewbanche', '639-871-6897', 'pewbanche8j@google.com.hk', 'okkoxive'),
(332, 'Evelin Andre', '725-481-3328', 'eandre8k@forbes.com', 'TKJjU0'),
(333, 'Benjamen Coleborn', '236-587-2322', 'bcoleborn8l@sourceforge.n', 'WzsPTbURg6'),
(334, 'Wye Egerton', '439-715-2700', 'wegerton8m@alibaba.com', 'zc4NrOUcajdS'),
(335, 'Burnard Dibben', '821-939-5618', 'bdibben8n@wordpress.org', 'CCbH3vMpV'),
(336, 'Juditha Padfield', '978-577-7826', 'jpadfield8o@engadget.com', 'z42JprMf'),
(337, 'Ennis Douglas', '425-230-4893', 'edouglas8p@google.fr', 'QRGHeU2PwbU'),
(338, 'Emmey Drewitt', '811-406-4052', 'edrewitt8q@cloudflare.com', 'rg6i5PdEhg'),
(339, 'Artemas Siveyer', '679-873-0704', 'asiveyer8r@goodreads.com', 'TYbDeK'),
(340, 'Tabatha McKernan', '404-857-8585', 'tmckernan8s@addtoany.com', 'BSdgeGnLkk'),
(341, 'Mohandis Truscott', '549-909-7509', 'mtruscott8t@blogtalkradio', 'YNrGT58U8'),
(342, 'Berri Pauley', '640-572-9215', 'bpauley8u@hibu.com', 'Npil3DfDiB'),
(343, 'Ellene Fabbro', '849-423-9178', 'efabbro8v@reddit.com', 'LC4gyIXn'),
(344, 'Boote Ping', '740-967-8354', 'bping8w@huffingtonpost.co', 'tl5LEopxd2gu'),
(345, 'Angelo Lidbetter', '209-173-8474', 'alidbetter8x@who.int', 'VrQ9OQSJRZ'),
(346, 'Carlo Henrionot', '836-141-4220', 'chenrionot8y@deviantart.c', 'YGp4Tqcs2U'),
(347, 'Bertha Francesco', '813-871-8608', 'bfrancesco8z@irs.gov', 'HJzyjE'),
(348, 'Annissa Shekle', '427-899-9378', 'ashekle90@deviantart.com', 'iahEsA'),
(349, 'Krista Egleton', '913-808-1759', 'kegleton91@plala.or.jp', 'i3svgT'),
(350, 'Ree Goble', '108-321-4378', 'rgoble92@usnews.com', 'iN5COJ7U'),
(351, 'Niles Oglethorpe', '201-940-7888', 'noglethorpe93@cbslocal.co', '9b4hC4e'),
(352, 'Dix Tattersall', '199-384-9096', 'dtattersall94@mail.ru', '0zt4ieW8'),
(353, 'Ardath Damp', '425-577-0119', 'adamp95@nbcnews.com', 'wipiq1S6V3rd'),
(354, 'Nicky McSporon', '428-924-8882', 'nmcsporon96@dyndns.org', 'ypR4zhJ'),
(355, 'Aurie Edgerton', '612-594-5078', 'aedgerton97@sitemeter.com', '0sCZupCM4'),
(356, 'Jessey Grange', '819-598-9325', 'jgrange98@freewebs.com', 'i7gMNkQ1E'),
(357, 'Vale Geratt', '395-458-9891', 'vgeratt99@boston.com', 'ZIDJnZWJ'),
(358, 'Benedikta Lanney', '815-883-1882', 'blanney9a@wunderground.co', 'V1Y0VTVhBlF7'),
(359, 'Karlyn McElroy', '591-369-6135', 'kmcelroy9b@fda.gov', 'GgS49eR9j'),
(360, 'Jsandye Phare', '181-818-3655', 'jphare9c@marketwatch.com', 'sHUD626g'),
(361, 'Bel Wimbush', '508-473-0735', 'bwimbush9d@intel.com', 'lptuqLiwRpW5'),
(362, 'Linda Keld', '696-729-4810', 'lkeld9e@linkedin.com', 'LaBLqC'),
(363, 'Butch Norrie', '243-356-3249', 'bnorrie9f@soundcloud.com', 'pXfNGOS'),
(364, 'Ailis Gentreau', '915-554-3218', 'agentreau9g@alexa.com', 'SedD03FRC'),
(365, 'Olenolin Bentson', '213-800-9580', 'obentson9h@google.fr', 'ryWEDQJm'),
(366, 'Asa Labba', '654-360-8553', 'alabba9i@umn.edu', 'jspl0EHma'),
(367, 'Ally Plinck', '580-576-6593', 'aplinck9j@toplist.cz', 'vuH92Te'),
(368, 'Terrence Gainsborough', '431-102-8047', 'tgainsborough9k@yelp.com', 'rrhoTLVis'),
(369, 'Donnie Neicho', '367-773-1443', 'dneicho9l@usnews.com', 'ZLQaztC'),
(370, 'Bourke Sayer', '928-398-9605', 'bsayer9m@creativecommons.', 'VUbAhvj'),
(371, 'Brigitte Kincaid', '329-458-3322', 'bkincaid9n@csmonitor.com', 'YbGaJhJ'),
(372, 'Giovanni Tomaszewski', '638-879-6060', 'gtomaszewski9o@discuz.net', '1hb73R2V'),
(373, 'Dur Kolodziejski', '469-286-3240', 'dkolodziejski9p@europa.eu', '8SNgbCOY'),
(374, 'Cherice Mizzen', '354-890-4718', 'cmizzen9q@skype.com', 'btxWG6Nz'),
(375, 'Clem Columbell', '594-241-3772', 'ccolumbell9r@time.com', 'JqZPFhA97mg'),
(376, 'Rawley Brabbins', '515-131-7140', 'rbrabbins9s@amazon.de', 'leKy8pjplHGF'),
(377, 'Caritta Aron', '990-440-8753', 'caron9t@engadget.com', 'Z4MBzR'),
(378, 'Rikki Fruin', '957-718-3466', 'rfruin9u@1688.com', 'EyhhSU'),
(379, 'Jacqui Riccardi', '810-117-8118', 'jriccardi9v@mysql.com', 'CFLJmOW5gQ'),
(380, 'Hasheem Stanlike', '202-170-8529', 'hstanlike9w@alexa.com', 'r5x68r5zn5'),
(381, 'Hughie Goater', '636-727-5812', 'hgoater9x@toplist.cz', 'U5GAjxM1e'),
(382, 'Lauraine Adami', '486-902-2219', 'ladami9y@biglobe.ne.jp', 'z1pIub'),
(383, 'Mayer Filppetti', '654-353-3219', 'mfilppetti9z@house.gov', 'ZMzHdiy1mO'),
(384, 'Somerset Jahn', '632-634-0843', 'sjahna0@rakuten.co.jp', 'syJzneP'),
(385, 'Samuele Zaniolo', '787-913-7890', 'szanioloa1@baidu.com', 'bQxLEUGL9n'),
(386, 'Aluin Tayler', '650-134-2471', 'ataylera2@discovery.com', 'yz4VOL5'),
(387, 'Britney Demanche', '416-788-2281', 'bdemanchea3@salon.com', '4GSrLs'),
(388, 'Matthaeus Lugsdin', '104-590-1512', 'mlugsdina4@stanford.edu', '0iOVMr'),
(389, 'Royce Kimmince', '929-373-4440', 'rkimmincea5@patch.com', '4ENdE3uaP'),
(390, 'Lazare Bramham', '728-647-4037', 'lbramhama6@princeton.edu', 'ba8rM9Ix9D3Q'),
(391, 'Dave Dehmel', '344-573-3051', 'ddehmela7@chronoengine.co', 'UFv3Gj5ct6M'),
(392, 'Laurence Masse', '281-745-5929', 'lmassea8@ucla.edu', 'SdQkFRptm'),
(393, 'Demott Hazelden', '513-961-5962', 'dhazeldena9@oaic.gov.au', 'vmEqAJ'),
(394, 'Lilas Golthorpp', '300-206-0651', 'lgolthorppaa@cocolog-nift', 'XSZ1X76hKvV'),
(395, 'Robers Shakesby', '202-497-1799', 'rshakesbyab@forbes.com', 'bbUsQyyFP8z'),
(396, 'Boycie Trainer', '200-180-4449', 'btrainerac@buzzfeed.com', 'zHJqbfm'),
(397, 'Karina Pedrozzi', '772-348-3353', 'kpedrozziad@economist.com', 'g3JPR1tRl4BE'),
(398, 'Dione Bentzen', '100-409-3612', 'dbentzenae@uol.com.br', '8AXTE5cY5'),
(399, 'Ilsa Marston', '651-282-4148', 'imarstonaf@ustream.tv', '6wKV8I'),
(400, 'Vivie Foukx', '654-242-0261', 'vfoukxag@wordpress.org', 'MMFoxCz1cer'),
(401, 'Taylor Teffrey', '607-860-7897', 'tteffreyah@ebay.co.uk', 'T0SRpMhf2j'),
(402, 'Rockwell Braven', '653-175-2406', 'rbravenai@miitbeian.gov.c', 'gi12tVxw5J8'),
(403, 'Friederike Lynde', '124-488-7812', 'flyndeaj@slideshare.net', 'JvBgD25'),
(404, 'Jere Izkovicz', '807-417-0101', 'jizkoviczak@hatena.ne.jp', 'RBxqCkhZd9qH'),
(405, 'Fannie Borne', '664-428-1889', 'fborneal@altervista.org', 'jhSDa86p'),
(406, 'Coral Otter', '604-154-2710', 'cotteram@imgur.com', 'L6byqf'),
(407, 'Cassandry Breagan', '997-984-3655', 'cbreaganan@sun.com', 'xGgSoJ9bU'),
(408, 'Patrizio McClurg', '894-672-1282', 'pmcclurgao@si.edu', 'RAFwiaVS'),
(409, 'Gerald MacCarter', '302-829-8541', 'gmaccarterap@e-recht24.de', 'ORTJrV'),
(410, 'Fredek Linning', '834-512-4411', 'flinningaq@ft.com', 'kUFTBmaMBK1R'),
(411, 'Quill Dasent', '372-704-4894', 'qdasentar@tmall.com', 'wAtZD4nq'),
(412, 'Berke Cropp', '215-171-6471', 'bcroppas@canalblog.com', 'GK0ibUcA'),
(413, 'Glory Scane', '343-164-9671', 'gscaneat@about.me', '0y21nnqFeg'),
(414, 'Brigit Marchenko', '817-982-0460', 'bmarchenkoau@earthlink.ne', 'r5KJRV8c8j'),
(415, 'Erastus Pedder', '339-646-3803', 'epedderav@amazon.com', 'zhfVKvzD48Q'),
(416, 'Ulrika Bielfelt', '679-228-1421', 'ubielfeltaw@de.vu', 'Z86jUJXw'),
(417, 'Alida Couth', '597-328-6591', 'acouthax@bandcamp.com', 'SBQP99lxRKG'),
(418, 'Siward Hebdon', '807-188-9863', 'shebdonay@wp.com', 'sLkCqGZCQXn'),
(419, 'Robena Jerg', '631-823-3130', 'rjergaz@infoseek.co.jp', 'Rjkz8MQE'),
(420, 'Hanni Inkles', '613-313-9477', 'hinklesb0@japanpost.jp', 'qqfHEYM'),
(421, 'Dulci Kerss', '612-928-9838', 'dkerssb1@marketwatch.com', 'oriEc7Ab'),
(422, 'Carolina Cozins', '431-548-0078', 'ccozinsb2@angelfire.com', 'Ogc0sZjg0'),
(423, 'Dora Ingamells', '295-650-0438', 'dingamellsb3@noaa.gov', 'JJ5J1pFh'),
(424, 'Alonzo Grandin', '782-189-3797', 'agrandinb4@fda.gov', 'SMSNtiQq'),
(425, 'Crawford Pullan', '657-609-7913', 'cpullanb5@a8.net', 'OapqUto'),
(426, 'Valeda Yakov', '587-102-6805', 'vyakovb6@cdbaby.com', 'KuY2O1wFyu'),
(427, 'Decca Timby', '839-211-5604', 'dtimbyb7@linkedin.com', 'zoMHkJ'),
(428, 'Des Rawdales', '202-500-0525', 'drawdalesb8@si.edu', 'KBm4lNL5'),
(429, 'Walsh Delgadillo', '292-444-8984', 'wdelgadillob9@reuters.com', 'VzYGOB7IRmZ'),
(430, 'Rosanna Polin', '505-868-3635', 'rpolinba@cornell.edu', 'pYkrJNYbFl'),
(431, 'Gill Coulman', '469-554-9470', 'gcoulmanbb@pcworld.com', '3M5rISLyk'),
(432, 'Freddie Fennessy', '480-313-6951', 'ffennessybc@naver.com', 'WwDejwy67sV'),
(433, 'Ardenia Maris', '571-530-3403', 'amarisbd@economist.com', 'xUr3bmwX'),
(434, 'Braden Yurenev', '428-131-2980', 'byurenevbe@booking.com', '7ShC3xb23'),
(435, 'Larisa Risbie', '919-339-1069', 'lrisbiebf@japanpost.jp', 'NmYfyAV9WKq4'),
(436, 'Ashli Pecey', '645-886-4872', 'apeceybg@unicef.org', 'l9B78Yd'),
(437, 'Sheba Lippett', '280-209-8194', 'slippettbh@salon.com', 'sg28YbZDgl0'),
(438, 'Luz O\' Gara', '177-265-7668', 'lobi@meetup.com', 'xzJpJFf6lG'),
(439, 'Randell Moakes', '551-314-2278', 'rmoakesbj@census.gov', 'lSqiVmzXfRM5'),
(440, 'Ripley Nucci', '786-900-3121', 'rnuccibk@oaic.gov.au', 'Wwthgnz3YjD'),
(441, 'Matilda Pickring', '814-993-1862', 'mpickringbl@dyndns.org', 'Y95ilhtQ'),
(442, 'Layton Mower', '221-736-6165', 'lmowerbm@infoseek.co.jp', 'ZjsNF3utXUZ'),
(443, 'Austine Beal', '836-453-1138', 'abealbn@sun.com', 'i9MGWxHs'),
(444, 'Clemmy Cressor', '587-932-3129', 'ccressorbo@moonfruit.com', 'nwsvbf3rdpf'),
(445, 'Nananne Avramovitz', '839-113-1420', 'navramovitzbp@mediafire.c', 'FXRa8Fh'),
(446, 'Polly Bricham', '102-718-0511', 'pbrichambq@spotify.com', '20Tn6bUaIJQ'),
(447, 'Boote Simmins', '647-505-1639', 'bsimminsbr@fda.gov', 'Zg5AHc'),
(448, 'Zollie Cassells', '570-404-6822', 'zcassellsbs@goodreads.com', 'ZOxhgq'),
(449, 'Lyn Rasher', '563-494-1783', 'lrasherbt@timesonline.co.', 'Kjj79c5rE2UU'),
(450, 'Arvie Ubsdall', '578-438-4082', 'aubsdallbu@youku.com', 'GRAiL1'),
(451, 'Carla Ducarel', '754-619-2885', 'cducarelbv@latimes.com', 'V1dtpV'),
(452, 'Sandi Samways', '843-968-0196', 'ssamwaysbw@theguardian.co', 'L8BOnfl'),
(453, 'Noll Boxell', '398-417-8675', 'nboxellbx@wordpress.org', 'BHTSd6hdPWeJ'),
(454, 'Elaine Dearsley', '332-265-6824', 'edearsleyby@seesaa.net', 'IInWrcB'),
(455, 'Milty Thayre', '326-999-6034', 'mthayrebz@yolasite.com', 'KZKgak'),
(456, 'Clovis Swayland', '678-233-1505', 'cswaylandc0@ycombinator.c', 'VeGx8Fo5U'),
(457, 'Marylynne Utridge', '187-402-4208', 'mutridgec1@va.gov', 'vCjy8l3vH'),
(458, 'Krisha Guidi', '508-994-7544', 'kguidic2@dion.ne.jp', '3nE3xz'),
(459, 'Wyatan Wyllt', '340-251-3134', 'wwylltc3@qq.com', 'IhDlNnDdEq'),
(460, 'Karim Goadsby', '602-485-5320', 'kgoadsbyc4@ebay.co.uk', 'br76ir'),
(461, 'Sofie Cody', '865-965-5918', 'scodyc5@ucoz.ru', 'ckZHsgOEk'),
(462, 'Christan Sasser', '899-260-8843', 'csasserc6@disqus.com', 'GVjAJ7VGc'),
(463, 'Arabelle Duell', '594-629-3180', 'aduellc7@webs.com', 'lXSaLUQ'),
(464, 'Nickie Buckbee', '295-468-5895', 'nbuckbeec8@slideshare.net', 'hDmnvYO'),
(465, 'Ardene Treneman', '573-529-9376', 'atrenemanc9@businesswire.', 'Q9zfEsl'),
(466, 'Terrel Comazzo', '529-642-6978', 'tcomazzoca@microsoft.com', 'Oewyex48Jog'),
(467, 'Fannie Beange', '476-857-6733', 'fbeangecb@acquirethisname', 'sR4FvJpij9'),
(468, 'Linea Kleyn', '457-552-9971', 'lkleyncc@samsung.com', '9LQ42cDJU'),
(469, 'Webster Grouen', '123-383-1523', 'wgrouencd@seesaa.net', 'mrzbcBsLyH'),
(470, 'Megan Groome', '963-190-6075', 'mgroomece@engadget.com', '1nlm7AO2X'),
(471, 'Janina Stych', '239-954-2023', 'jstychcf@imdb.com', 'wouxWWCg73'),
(472, 'Denny Wildash', '729-399-8719', 'dwildashcg@fotki.com', 'CD2FkRDT'),
(473, 'Helsa Radloff', '864-779-5157', 'hradloffch@engadget.com', 'giQW8s373'),
(474, 'Leonie Tenaunt', '802-339-3193', 'ltenauntci@amazon.com', 'qKWbwTJcu'),
(475, 'Aubert Deller', '517-134-3126', 'adellercj@telegraph.co.uk', 'ZxXtJI3xFrbp'),
(476, 'Farrand Davidou', '606-432-0536', 'fdavidouck@multiply.com', 'MaTE6g07yy'),
(477, 'Stirling Morrilly', '927-268-2339', 'smorrillycl@weebly.com', '5szvCdkZ76'),
(478, 'Rodrique Shadrach', '436-417-5424', 'rshadrachcm@gov.uk', 'iqOXzLjMtDt0'),
(479, 'Farley Duckinfield', '163-593-5813', 'fduckinfieldcn@ebay.com', 'ea9JHkkDl2e'),
(480, 'Ade Blaise', '385-673-5987', 'ablaiseco@goodreads.com', 'RilfMQixeEGY'),
(481, 'Katharine Rose', '470-338-8290', 'krosecp@phpbb.com', 'HP73k5VMJK'),
(482, 'Bat Jeffcoate', '610-972-2689', 'bjeffcoatecq@simplemachin', 'bTfmBcS2F'),
(483, 'Hort O\'Clery', '397-191-0166', 'hoclerycr@4shared.com', 'V1dIfMSsHhA'),
(484, 'Janelle Ackroyd', '970-652-7820', 'jackroydcs@indiatimes.com', 'kGErOdnD'),
(485, 'Lindsay Gabriely', '352-719-0729', 'lgabrielyct@cbsnews.com', 'mTDGPY'),
(486, 'Samuele Brewitt', '227-842-6117', 'sbrewittcu@ask.com', 'rNISXcbz'),
(487, 'Valera Pearmain', '109-248-6215', 'vpearmaincv@ezinearticles', '5hatJVgEgDo'),
(488, 'Jeramie Vankeev', '385-341-5232', 'jvankeevcw@sogou.com', '3uhW5Pc53eL'),
(489, 'Kamillah Hamley', '661-149-5887', 'khamleycx@washingtonpost.', 'DxGDiI'),
(490, 'Esme Spedding', '725-712-6965', 'espeddingcy@jugem.jp', '87pQ4f'),
(491, 'Robin Lannin', '217-537-8344', 'rlannincz@java.com', 'roE1zCR'),
(492, 'Arley Ravenscroftt', '369-980-4427', 'aravenscrofttd0@noaa.gov', 'tkjUJH'),
(493, 'Avie Fowlie', '144-110-8342', 'afowlied1@epa.gov', 'oL3yLDEM'),
(494, 'Terrance Pentony', '146-825-5085', 'tpentonyd2@rakuten.co.jp', '0cstdoizb'),
(495, 'Angelia Geke', '452-314-1225', 'ageked3@creativecommons.o', 'VXcx6px'),
(496, 'Celestia Plues', '213-616-5831', 'cpluesd4@wikipedia.org', 'YCIjUEF6O3m'),
(497, 'Dara Bedells', '791-456-0259', 'dbedellsd5@who.int', 'XOAg4zJ85Xu'),
(498, 'Carly Downey', '669-150-0554', 'cdowneyd6@alexa.com', 'gzcICcX'),
(499, 'Farris Millichap', '398-254-0270', 'fmillichapd7@addthis.com', '2fjBmaC'),
(500, 'Andeee Zink', '723-917-2729', 'azinkd8@businesswire.com', '1j4xXtB'),
(501, 'Vincenz Bienvenu', '763-650-5318', 'vbienvenud9@blogger.com', 'i49FFMZcqpZ'),
(502, 'Elroy Banton', '719-909-0301', 'ebantonda@guardian.co.uk', 'aOmwvQe91V'),
(503, 'Carlye Craiker', '291-425-5173', 'ccraikerdb@paginegialle.i', 'klWYiG7C'),
(504, 'Netty Kirvin', '174-236-1453', 'nkirvindc@bizjournals.com', 'rjeuRLY2'),
(505, 'Bryana Sprott', '295-652-4021', 'bsprottdd@nba.com', 'dJadLIS57Ez2'),
(506, 'Rudd McRavey', '524-997-1919', 'rmcraveyde@smugmug.com', '0g7xprH9E'),
(507, 'Olivie Maro', '706-154-6596', 'omarodf@jugem.jp', '0jgn8w7YZaeD'),
(508, 'Rozelle Paynter', '190-334-5601', 'rpaynterdg@techcrunch.com', '77KSILq6Z9T'),
(509, 'Torey Braybrookes', '968-411-0917', 'tbraybrookesdh@posterous.', 'Y5rGreJO'),
(510, 'Valentijn Gledhall', '260-544-5912', 'vgledhalldi@cargocollecti', 'oSsXl7gt'),
(511, 'Olly Bellefant', '750-306-9288', 'obellefantdj@hud.gov', 'h4leaVBQo'),
(512, 'Moshe Beastall', '622-865-8367', 'mbeastalldk@live.com', 'gbZA9nxnZ5gm'),
(513, 'Evanne Buckie', '301-929-2547', 'ebuckiedl@mail.ru', '0hCdRgy'),
(514, 'Brana Goodlip', '905-451-9312', 'bgoodlipdm@cmu.edu', 'rDHCsYb'),
(515, 'Kerri Mallya', '517-444-9224', 'kmallyadn@netlog.com', '6cICJPmH2FYG'),
(516, 'Tudor Beartup', '293-858-3615', 'tbeartupdo@goo.gl', 'BzKKEeK'),
(517, 'Urban Sprakes', '858-916-1340', 'usprakesdp@nsw.gov.au', 'Rbl3VJos'),
(518, 'Carol-jean Allum', '287-498-3711', 'callumdq@netlog.com', 'gjisnoC1'),
(519, 'Austina Avrasin', '452-839-2639', 'aavrasindr@squarespace.co', '3BIO01q'),
(520, 'Christye Pretsell', '210-371-4507', 'cpretsellds@is.gd', 'fpSxg3s'),
(521, 'Demetri Binyon', '665-584-1021', 'dbinyondt@cnet.com', '52O9wBS45'),
(522, 'Roze Grundle', '389-896-5210', 'rgrundledu@latimes.com', 'jTXSdY7Kwb'),
(523, 'Godart Dorbon', '583-828-5969', 'gdorbondv@liveinternet.ru', 'lDtIsTQ'),
(524, 'Bruce Ji', '2064897138', 'bruceji@terpmail.umd.edu', '123'),
(525, 'ray', '2109218092', 'rahkjwh@XS.COM', '123'),
(526, 'Bruce Ji', '2064897138', 'bruceji@terpmail.umd.edu', '123'),
(527, 'Bruce Ji', '2064897138', 'bruceji@terpmail.umd.edu', '123'),
(528, 'dfdf', 'dfsaf', '1@11.com', 'dfdfds'),
(529, 'a', '2021111111', 'a@a', 'a'),
(530, 'Zoey Fan', '279-099-0000', 'zoey210@gmail.com', 'Panckaes'),
(531, 'Ibrahim', '3014055000', 'hibrahim@umd.edu', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employeeID` int(10) NOT NULL,
  `employeeName` varchar(20) NOT NULL,
  `isManager` tinyint(1) NOT NULL DEFAULT '0',
  `employeeLogin` varchar(20) NOT NULL,
  `employeePassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employeeID`, `employeeName`, `isManager`, `employeeLogin`, `employeePassword`) VALUES
(1, 'Bruce Ji', 1, 'bruceji101', 'AirPlane'),
(2, 'James Garrett', 0, 'jgarrett202', 'SkyisBlue'),
(3, 'Raymond Chen', 1, 'b', 'b'),
(4, 'Jiayu Wang', 0, 'jwang252', 'Wji789'),
(5, 'Boss', 1, 'Boss000', 'Boss000'),
(7, 'ray', 0, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `feedbackID` int(10) NOT NULL,
  `salesID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `overall` int(5) NOT NULL,
  `speed` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  `comment` text NOT NULL,
  `feedbackTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`feedbackID`, `salesID`, `customerID`, `overall`, `speed`, `accuracy`, `service`, `comment`, `feedbackTime`) VALUES
(1, 1, 0, 5, 4, 4, 2, 'abc', '2018-11-30 19:32:22'),
(2, 2, 0, 4, 5, 5, 4, 'Good food', '2018-11-30 19:32:22'),
(3, 3, 0, 5, 1, 1, 1, 'Nice chicken', '2018-11-30 19:32:22'),
(4, 4, 4, 1, 1, 1, 1, 'Shit', '2018-11-30 19:32:22'),
(5, 5, 5, 5, 5, 5, 5, 'Heaven!!!', '2018-11-30 19:32:22'),
(112, 1234, 0, 5, 5, 5, 5, 'gio.', '2018-11-30 19:32:22'),
(113, 123, 0, 5, 4, 3, 1, 'nice', '2018-11-30 19:32:22'),
(114, 1244, 0, 5, 4, 3, 4, 'Awesome', '2018-11-30 19:32:22'),
(115, 1234, 0, 5, 5, 5, 5, 'TEST DESCRIPTION', '2018-11-30 19:32:22'),
(116, 123, 0, 5, 3, 3, 5, 'sis', '2018-11-30 19:32:22'),
(117, 65, 0, 3, 2, 2, 2, '', '2018-11-30 19:32:22'),
(118, 7, 0, 5, 4, 4, 3, 'Chickens well done please.', '2018-12-04 13:38:06'),
(119, 8, 0, 5, 4, 2, 5, '', '2018-12-04 13:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `Ingredients`
--

CREATE TABLE `Ingredients` (
  `IngredientID` int(10) NOT NULL,
  `IngredientName` varchar(40) NOT NULL,
  `IngredientQuantity` int(200) NOT NULL,
  `Unit` char(11) NOT NULL,
  `SafetyQuantity` int(11) NOT NULL,
  `lastShipmentQuantity` int(11) NOT NULL,
  `lastShipmentDate` datetime NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `inTransit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ingredients`
--

INSERT INTO `Ingredients` (`IngredientID`, `IngredientName`, `IngredientQuantity`, `Unit`, `SafetyQuantity`, `lastShipmentQuantity`, `lastShipmentDate`, `SupplierID`, `inTransit`) VALUES
(1, 'Chicken', 400, 'pounds', 400, 50, '2018-12-05 19:42:39', 1, 0),
(2, 'Soy Sauce', 92, 'gallon', 300, 172, '2018-12-05 18:45:30', 2, 1),
(3, 'Brown Rice', 100, 'pounds', 100, 108, '2018-12-05 18:50:29', 3, 0),
(4, 'Amber Bubble', 108, 'bottle', 200, 24, '2018-11-05 00:00:00', 4, 0),
(5, 'Milk Cream', 51, 'gallon', 100, 50, '2018-11-30 18:50:42', 5, 0),
(6, 'Pork', 250, 'pounds', 250, 50, '2018-11-30 18:50:38', 6, 0),
(7, 'Fish', 322, 'pounds', 100, 14, '2018-11-15 00:00:00', 7, 0),
(8, 'Brown Sugar Jelly', 265, 'pounds', 100, 16, '2018-11-17 00:00:00', 8, 0),
(9, 'Grass Jelly', 338, 'gallon', 100, 27, '2018-11-12 00:00:00', 9, 0),
(10, 'Green Tea', 149, 'bags', 100, 47, '2018-11-24 00:00:00', 10, 0),
(11, 'Beef', 350, 'gallon', 100, 16, '2018-11-24 00:00:00', 11, 0),
(12, 'Bubble', 350, 'pounds', 300, 87, '2018-11-14 00:00:00', 12, 0),
(13, 'Whipped Cream', 350, 'pounds', 300, 65, '2018-11-21 00:00:00', 13, 0),
(14, 'Fortune Cookies', 350, 'pounds', 300, 99, '2018-11-15 00:00:00', 14, 0),
(15, 'Red Bean', 300, 'pounds', 300, 6, '2018-12-05 19:45:02', 15, 0),
(16, 'Strawberries', 350, 'pounds', 300, 78, '2018-11-22 00:00:00', 16, 0),
(17, 'Lime', 350, 'pounds', 300, 45, '2018-11-19 00:00:00', 17, 0),
(18, 'Lemons', 350, 'pounds', 300, 65, '2018-11-28 00:00:00', 18, 0),
(19, 'White Rice', 350, 'pounds', 300, 77, '2018-11-13 00:00:00', 19, 0),
(20, 'Brown Sugar', 350, 'pounds', 300, 98, '2018-11-07 00:00:00', 20, 0),
(21, 'pure water', 350, 'gallon', 300, 68, '2018-11-19 00:00:00', 1, 0),
(22, 'cheese', 350, 'pounds', 300, 64, '2018-11-23 00:00:00', 2, 0),
(23, 'salt', 350, 'pounds', 300, 53, '2018-11-06 00:00:00', 3, 0),
(24, 'soy', 350, 'gallon', 300, 35, '2018-11-19 00:00:00', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Menu Items`
--

CREATE TABLE `Menu Items` (
  `itemID` int(10) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `itemName` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu Items`
--

INSERT INTO `Menu Items` (`itemID`, `price`, `itemName`, `type`) VALUES
(1, '9.75', 'Honolulu Special', 'food'),
(2, '9.50', 'Poke Man Special', 'food'),
(3, '9.95', 'Dancing Eel', 'food'),
(4, '9.50', 'Wasabi Shrimps & Scallops', 'food'),
(6, '8.75', 'Spicy Ginger Chicken', 'food'),
(7, '9.75', 'Salmon', 'food'),
(8, '9.75', 'Hawaiian Classic', 'food'),
(9, '9.75', 'Umami Classics', 'food'),
(10, '9.75', 'Ahi On Fire', 'food'),
(11, '9.75', 'Spicy Ponzu Albacore', 'food'),
(12, '8.25', 'Sweet Chili Tofu (V)', 'food'),
(13, '9.75', 'Ahi On Fire', 'food'),
(14, '4.00', 'Jasmine Green Tea', 'drink'),
(15, '4.00', 'King of Tea', 'drink'),
(16, '4.25', 'Queen of Tea', 'drink'),
(17, '0.75', 'Brown Sugar Jelly', 'topping'),
(18, '0.75', 'Amber Bubble', 'topping'),
(19, '0.50', 'Red Bean', 'topping'),
(20, '1.00', 'Milk Cream', 'topping'),
(21, '0.75', 'Grass Jelly', 'topping'),
(22, '5.25', 'Pu\'er Tea', 'drink'),
(23, '4.65', 'Peach Milk Tea', 'drink'),
(24, '4.65', 'Sakura Milk Tea', 'drink'),
(25, '4.35', 'Ruby Milk Tea', 'drink'),
(26, '4.65', 'Grapefruit Drink', 'drink'),
(27, '4.25', 'Caramel Bubble Tea', 'drink'),
(28, '4.65', 'Passion Fruit & Lime', 'drink');

-- --------------------------------------------------------

--
-- Table structure for table `Menu Items Sales`
--

CREATE TABLE `Menu Items Sales` (
  `itemID` int(25) NOT NULL,
  `saleID` int(10) NOT NULL,
  `quantitySold` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu Items Sales`
--

INSERT INTO `Menu Items Sales` (`itemID`, `saleID`, `quantitySold`) VALUES
(4, 1, 10),
(3, 2, 7),
(1, 3, 8),
(4, 1, 10),
(3, 2, 7),
(1, 3, 8),
(2, 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Menu Recipes`
--

CREATE TABLE `Menu Recipes` (
  `itemID` int(10) NOT NULL,
  `ingredientID` int(10) NOT NULL,
  `quantityused` int(100) NOT NULL,
  `receipID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Menu Recipes`
--

INSERT INTO `Menu Recipes` (`itemID`, `ingredientID`, `quantityused`, `receipID`) VALUES
(1, 1, 10, 1),
(2, 2, 9, 2),
(3, 3, 8, 3),
(4, 4, 7, 4),
(6, 5, 5, 5),
(7, 7, 4, 6),
(8, 10, 1, 7),
(9, 3, 4, 8),
(10, 3, 6, 9),
(11, 3, 6, 10),
(12, 3, 2, 11),
(13, 3, 6, 12),
(14, 10, 9, 13),
(15, 8, 7, 14),
(16, 5, 6, 15),
(17, 8, 12, 16),
(18, 4, 7, 17),
(19, 15, 4, 18),
(20, 5, 7, 20),
(21, 9, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `Sales`
--

CREATE TABLE `Sales` (
  `saleID` int(10) NOT NULL,
  `employeeID` int(10) DEFAULT NULL,
  `customerID` int(10) DEFAULT NULL,
  `price` float NOT NULL,
  `dateSold` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salesPHPArray` longtext NOT NULL,
  `Finish` tinyint(1) NOT NULL DEFAULT '0',
  `CustomerName` text NOT NULL,
  `EmailAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sales`
--

INSERT INTO `Sales` (`saleID`, `employeeID`, `customerID`, `price`, `dateSold`, `salesPHPArray`, `Finish`, `CustomerName`, `EmailAddress`) VALUES
(8, 7, NULL, 64.75, '2018-11-28 19:48:18', 'a:8:{s:4:\"14-1\";a:1:{i:0;s:2:\"19\";}s:4:\"14-2\";a:3:{i:0;s:2:\"17\";i:1;s:2:\"18\";i:2;s:2:\"19\";}s:4:\"14-3\";a:2:{i:0;s:2:\"17\";i:1;s:2:\"21\";}s:3:\"1-1\";s:1:\"1\";s:3:\"1-2\";s:1:\"1\";s:3:\"1-3\";s:1:\"1\";s:4:\"11-1\";s:1:\"1\";s:4:\"11-2\";s:1:\"1\";}', 1, 'James Hi', 'James@umd.edu'),
(9, 7, 524, 84, '2018-11-28 19:48:18', 'a:10:{s:4:\"15-1\";a:3:{i:0;s:2:\"18\";i:1;s:2:\"19\";i:2;s:2:\"20\";}s:4:\"15-2\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"15-3\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:3:\"2-1\";s:1:\"1\";s:3:\"2-2\";s:1:\"1\";s:3:\"2-3\";s:1:\"1\";s:3:\"2-4\";s:1:\"1\";s:3:\"9-1\";s:1:\"1\";s:3:\"9-2\";s:1:\"1\";s:3:\"9-3\";s:1:\"1\";}', 1, 'Steve Jobs', 'Steve@umd.edu'),
(10, 7, NULL, 41.1, '2018-11-28 21:26:05', 'a:5:{s:4:\"16-2\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"20\";}s:4:\"16-4\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:3:\"3-1\";s:1:\"1\";s:3:\"3-2\";s:1:\"1\";s:3:\"3-3\";s:1:\"1\";}', 1, 'Harry Potter', 'Harry@umd.edu'),
(11, 7, NULL, 29.75, '2018-11-28 21:26:37', 'a:4:{s:4:\"15-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"15-2\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"20\";}s:3:\"2-1\";s:1:\"1\";s:3:\"2-2\";s:1:\"1\";}', 1, 'Bruce Ji', 'Bruce@umd.edu'),
(47, 7, NULL, 53.5, '2018-11-30 19:03:27', 'a:7:{s:4:\"14-1\";a:1:{i:0;s:2:\"20\";}s:4:\"14-2\";a:1:{i:0;s:2:\"19\";}s:4:\"14-3\";a:1:{i:0;s:2:\"20\";}s:3:\"9-1\";s:1:\"2\";s:3:\"9-2\";s:1:\"0\";s:3:\"9-3\";s:1:\"1\";s:3:\"9-4\";s:1:\"1\";}', 1, 'Raymond', 'aaa@umd.edu'),
(48, 7, NULL, 56.75, '2018-11-30 19:03:36', 'a:9:{s:4:\"15-2\";a:1:{i:0;s:2:\"19\";}s:4:\"15-3\";a:1:{i:0;s:2:\"19\";}s:4:\"15-4\";a:1:{i:0;s:2:\"19\";}s:4:\"15-5\";a:1:{i:0;s:2:\"19\";}s:4:\"15-6\";a:1:{i:0;s:2:\"21\";}s:4:\"15-7\";a:1:{i:0;s:2:\"18\";}s:4:\"10-1\";s:1:\"1\";s:4:\"10-2\";s:1:\"1\";s:4:\"10-3\";s:1:\"1\";}', 1, 'nierdaye', 'a@erdaye.com'),
(52, 7, NULL, 70.65, '2018-12-02 16:13:08', 'a:9:{s:4:\"15-1\";a:3:{i:0;s:2:\"18\";i:1;s:2:\"19\";i:2;s:2:\"20\";}s:4:\"15-2\";a:1:{i:0;s:2:\"17\";}s:4:\"15-3\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"21\";}s:4:\"15-4\";a:2:{i:0;s:2:\"17\";i:1;s:2:\"19\";}s:3:\"3-1\";s:1:\"1\";s:3:\"3-2\";s:1:\"1\";s:3:\"8-1\";s:1:\"1\";s:3:\"8-2\";s:1:\"1\";s:3:\"8-3\";s:1:\"1\";}', 1, 'Raymond', 'a@umd.edu'),
(53, 7, NULL, 29.25, '2018-12-04 14:53:40', 'a:3:{s:4:\"10-1\";s:1:\"1\";s:4:\"10-2\";s:1:\"1\";s:4:\"10-3\";s:1:\"1\";}', 1, 'Raymond', 'raymond@umd.edu'),
(54, 7, NULL, 14.7, '2018-12-05 18:44:34', 'a:2:{s:4:\"14-1\";a:1:{i:0;s:2:\"18\";}s:3:\"3-1\";s:1:\"1\";}', 1, 'John Doe', 'j.doe123@yahoo.com'),
(55, 7, NULL, 34.5, '2018-12-05 18:44:36', 'a:4:{s:4:\"16-1\";a:1:{i:0;s:2:\"20\";}s:3:\"1-1\";s:1:\"1\";s:3:\"1-2\";s:1:\"0\";s:3:\"1-3\";s:1:\"1\";}', 1, 'bruceji', 'kldsfkldfl@smflasglk.com'),
(56, 7, NULL, 14.5, '2018-12-05 18:46:43', 'a:2:{s:4:\"14-1\";a:1:{i:0;s:2:\"17\";}s:3:\"1-1\";s:1:\"1\";}', 1, 'Cyrus Testing 12/2', 'cyrus@cyrus.com'),
(57, 7, 529, 20, '2018-12-05 18:46:44', 'a:3:{s:4:\"14-1\";a:1:{i:0;s:2:\"17\";}s:4:\"14-2\";a:2:{i:0;s:2:\"17\";i:1;s:2:\"18\";}s:4:\"13-1\";s:1:\"1\";}', 1, 'cyrus2', 'test2@test.com'),
(58, 7, NULL, 4.75, '2018-12-03 21:35:19', 'a:1:{s:4:\"14-1\";a:1:{i:0;s:2:\"17\";}}', 1, 'a', 'a'),
(59, 7, 529, 21.3, '2018-12-05 18:46:45', 'a:4:{s:4:\"15-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"15-2\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"24-1\";a:1:{i:0;s:2:\"18\";}s:4:\"24-2\";a:1:{i:0;s:2:\"21\";}}', 1, 'abc', 'abc@umd.edu'),
(60, 7, 529, 16.5, '2018-12-05 18:46:49', 'a:2:{s:4:\"12-1\";s:1:\"1\";s:4:\"12-2\";s:1:\"1\";}', 1, '', ''),
(61, 7, 529, 5.25, '2018-12-05 18:46:50', 'a:1:{s:4:\"15-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}}', 1, '', ''),
(62, 7, 529, 14.5, '2018-12-05 18:46:52', 'a:2:{s:4:\"14-1\";a:1:{i:0;s:2:\"18\";}s:4:\"10-1\";s:1:\"1\";}', 1, '', ''),
(63, 7, 529, 9.75, '2018-12-05 18:46:53', 'a:1:{s:4:\"11-1\";s:1:\"1\";}', 1, '', ''),
(64, 7, NULL, 20.7, '2018-12-05 18:46:54', 'a:4:{s:4:\"15-1\";a:1:{i:0;s:2:\"19\";}s:4:\"23-1\";a:1:{i:0;s:2:\"19\";}s:4:\"23-2\";a:1:{i:0;s:2:\"20\";}s:4:\"23-3\";a:1:{i:0;s:2:\"21\";}}', 1, 'umd', 'umd@umd.edu'),
(65, 7, 529, 5.5, '2018-12-05 18:46:55', 'a:1:{s:4:\"16-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}}', 1, '', ''),
(66, 3, NULL, 34, '2018-12-05 19:40:31', 'a:4:{s:4:\"16-1\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"21\";}s:3:\"2-1\";s:1:\"0\";s:3:\"2-2\";s:1:\"1\";s:3:\"2-3\";s:1:\"2\";}', 1, 'dff', 'fdfsdfs'),
(67, NULL, NULL, 34, '2018-12-05 14:18:49', 'a:4:{s:4:\"16-1\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"21\";}s:3:\"2-1\";s:1:\"0\";s:3:\"2-2\";s:1:\"1\";s:3:\"2-3\";s:1:\"2\";}', 0, 'dff', 'fdfsdfs'),
(68, NULL, NULL, 10.3, '2018-12-05 14:32:23', 'a:2:{s:4:\"24-1\";a:1:{i:0;s:2:\"19\";}s:4:\"24-2\";a:1:{i:0;s:2:\"19\";}}', 0, 'bruce ', 'bruceji@terpmail.umd.edu'),
(69, NULL, NULL, 19.5, '2018-12-05 14:42:14', 'a:2:{s:3:\"7-1\";s:1:\"1\";s:3:\"7-2\";s:1:\"1\";}', 0, 'Raymond', 'cchen07@umd.edu'),
(70, NULL, NULL, 8.25, '2018-12-05 14:44:28', 'a:1:{s:4:\"12-1\";s:1:\"1\";}', 0, 'Raymond', 'cchen07@umd.edu'),
(71, NULL, NULL, 8.25, '2018-12-05 14:45:44', 'a:1:{s:4:\"12-1\";s:1:\"1\";}', 0, 'Raymond', 'cchen07@umd.edu'),
(72, 7, NULL, 4.75, '2018-12-05 18:46:48', 'a:1:{s:4:\"15-2\";a:1:{i:0;s:2:\"18\";}}', 1, 'Raymond', 'cchen07@umd.edu'),
(73, NULL, NULL, 6.15, '2018-12-05 14:48:34', 'a:1:{s:4:\"24-1\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"20\";}}', 0, 'Raymond', 'cchen07@umd.edu'),
(74, NULL, NULL, 6.15, '2018-12-05 14:48:57', 'a:1:{s:4:\"24-1\";a:2:{i:0;s:2:\"19\";i:1;s:2:\"20\";}}', 0, 'Raymond', 'cchen07@umd.edu'),
(75, 3, NULL, 6.25, '2018-12-05 18:29:00', 'a:1:{s:4:\"16-1\";a:3:{i:0;s:2:\"17\";i:1;s:2:\"18\";i:2;s:2:\"19\";}}', 1, 'Raymond', 'cchen07@umd.edu'),
(76, 3, NULL, 20.75, '2018-12-05 18:28:07', 'a:3:{s:4:\"16-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"20\";}s:4:\"16-2\";a:1:{i:0;s:2:\"17\";}s:3:\"1-1\";s:1:\"1\";}', 1, 'Bruce', 'bruceji@umd.edu'),
(77, 7, NULL, 33, '2018-12-05 18:47:01', 'a:5:{s:4:\"15-1\";a:2:{i:0;s:2:\"17\";i:1;s:2:\"18\";}s:4:\"15-2\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"22-1\";a:2:{i:0;s:2:\"18\";i:1;s:2:\"19\";}s:4:\"22-2\";a:1:{i:0;s:2:\"21\";}s:4:\"10-1\";s:1:\"1\";}', 1, 'raymond', 'cchen07@umd.edu'),
(78, NULL, NULL, 18, '2018-12-05 19:17:20', 'a:4:{s:4:\"14-1\";a:1:{i:0;s:2:\"19\";}s:4:\"14-2\";a:1:{i:0;s:2:\"19\";}s:4:\"14-3\";a:1:{i:0;s:2:\"19\";}s:4:\"14-4\";a:1:{i:0;s:2:\"19\";}}', 0, 'raymond', 'cchen07@umd.edu'),
(79, NULL, NULL, 18, '2018-12-05 19:20:29', 'a:4:{s:4:\"14-1\";a:1:{i:0;s:2:\"19\";}s:4:\"14-2\";a:1:{i:0;s:2:\"19\";}s:4:\"14-3\";a:1:{i:0;s:2:\"19\";}s:4:\"14-4\";a:1:{i:0;s:2:\"19\";}}', 0, 'Raymond', 'cchen07@umd.edu'),
(80, 3, NULL, 59, '2018-12-05 19:41:18', 'a:7:{s:4:\"14-1\";a:1:{i:0;s:2:\"18\";}s:4:\"14-2\";a:2:{i:0;s:2:\"17\";i:1;s:2:\"18\";}s:3:\"7-1\";s:1:\"2\";s:3:\"7-2\";s:1:\"2\";s:3:\"7-3\";s:1:\"2\";s:3:\"7-4\";s:1:\"2\";s:3:\"7-5\";s:1:\"0\";}', 1, 'cyrus', 'cyrus7766@gmail.com'),
(81, NULL, NULL, 27, '2018-12-05 19:44:40', 'a:6:{s:4:\"14-1\";a:1:{i:0;s:2:\"19\";}s:4:\"14-2\";a:1:{i:0;s:2:\"19\";}s:4:\"14-3\";a:1:{i:0;s:2:\"19\";}s:4:\"14-4\";a:1:{i:0;s:2:\"19\";}s:4:\"14-5\";a:1:{i:0;s:2:\"19\";}s:4:\"14-6\";a:1:{i:0;s:2:\"19\";}}', 0, 'cyrus', 'cyrus7766@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Suppliers`
--

CREATE TABLE `Suppliers` (
  `supplierID` int(10) NOT NULL,
  `supplierName` varchar(20) NOT NULL,
  `supplierTelephone` int(20) NOT NULL,
  `supplierEmail` varchar(25) NOT NULL,
  `supplierLogin` varchar(10) NOT NULL,
  `supplierPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Suppliers`
--

INSERT INTO `Suppliers` (`supplierID`, `supplierName`, `supplierTelephone`, `supplierEmail`, `supplierLogin`, `supplierPassword`) VALUES
(1, 'Grant, Block and Wiz', 473, 'adesan@terpmail.umd.edu', 'lvero0', 'g0uZm6P1Z'),
(2, 'Morissette LLC', 125, 'adesan@terpmail.umd.edu', 'jbracci1', 'bliJ7N1sV'),
(3, 'Gleichner-Aufderhar', 246, 'adesan@terpmail.umd.edu', 'bstidworth', 'tk4OKZ8'),
(4, 'Morissette LLC', 226, 'adesan@terpmail.umd.edu', 'rbawles3', 'tXIkaNiO'),
(5, 'Abshire LLC', 483, 'adesan@terpmail.umd.edu', 'leschelle4', 'BkMJz7AOoWJ'),
(6, 'O\'Conner and Sons', 195, 'adesan@terpmail.umd.edu', 'aduval5', 'Fvsxyo'),
(7, 'Abernathy-Parker', 174, 'adesan@terpmail.umd.edu', 'bmatschek6', 'ldv47TgpFSbT'),
(8, 'Emard-Wisozk', 691, 'jdg21@terpmail.umd.edu', 'lweekland7', '9FDFI3'),
(9, 'Maggio-Brakus', 579, 'jdg21@terpmail.umd.edu', 'mbestwall8', 'hwKVzIued5o'),
(10, 'Lakin, Gleichner and', 259, 'jdg21@terpmail.umd.edu', 'isatteford', 'RKjOr771tnbM'),
(11, 'Maggio-Botsford', 503, 'jdg21@terpmail.umd.edu', 'bousbiea', 'vAlgoE'),
(12, 'Hyatt and Sons', 281, 'jdg21@terpmail.umd.edu', 'akensettb', 'czHeTuYTyv'),
(13, 'Kub, Wyman and McDer', 143, 'jdg21@terpmail.umd.edu', 'sbartosekc', '9qgygUCXez'),
(14, 'Gulgowski-Bosco', 195, 'jdg21@terpmail.umd.edu', 'mbluckd', 'j27AwNl'),
(15, 'Hilpert Group', 336, 'jdg21@terpmail.umd.edu', 'jtruckelle', 'l0yAsNQMDju'),
(16, 'Lynch LLC', 133, 'jdg21@terpmail.umd.edu', 'kchafferf', 'gSzms08'),
(17, 'Sawayn Group', 496, 'jdg21@terpmail.umd.edu', 'adarlaston', 'cl1Iflo'),
(18, 'Kub, Yost and Auer', 593, 'jdg21@terpmail.umd.edu', 'itoplingh', 'pIRBzgKmU9q'),
(19, 'Koss-McCullough', 912, 'jwang151@terpmail.umd.edu', 'vivashechk', 'v1BT8a'),
(20, 'Leuschke-Bernhard', 735, 'jwang151@terpmail.umd.edu', 'dskipperbo', 'wP8eevNZwNzp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD UNIQUE KEY `feedbackID` (`feedbackID`);

--
-- Indexes for table `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD PRIMARY KEY (`IngredientID`),
  ADD KEY `Foreign_Key` (`SupplierID`);

--
-- Indexes for table `Menu Items`
--
ALTER TABLE `Menu Items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `Menu Items Sales`
--
ALTER TABLE `Menu Items Sales`
  ADD KEY `itemID` (`itemID`),
  ADD KEY `Menu Items Sales SaleID fk` (`saleID`);

--
-- Indexes for table `Menu Recipes`
--
ALTER TABLE `Menu Recipes`
  ADD PRIMARY KEY (`receipID`),
  ADD KEY `itemID` (`itemID`),
  ADD KEY `ingredientID` (`ingredientID`);

--
-- Indexes for table `Sales`
--
ALTER TABLE `Sales`
  ADD PRIMARY KEY (`saleID`),
  ADD KEY `employeeID` (`employeeID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `Suppliers`
--
ALTER TABLE `Suppliers`
  ADD PRIMARY KEY (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;
--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `employeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `feedbackID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `Ingredients`
--
ALTER TABLE `Ingredients`
  MODIFY `IngredientID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Menu Items`
--
ALTER TABLE `Menu Items`
  MODIFY `itemID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Menu Recipes`
--
ALTER TABLE `Menu Recipes`
  MODIFY `receipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `Sales`
--
ALTER TABLE `Sales`
  MODIFY `saleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `Suppliers`
--
ALTER TABLE `Suppliers`
  MODIFY `supplierID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD CONSTRAINT `Foreign_Key` FOREIGN KEY (`SupplierID`) REFERENCES `Suppliers` (`supplierID`);

--
-- Constraints for table `Menu Items Sales`
--
ALTER TABLE `Menu Items Sales`
  ADD CONSTRAINT `Menu Items Sales SaleID fk` FOREIGN KEY (`saleID`) REFERENCES `Sales` (`saleID`),
  ADD CONSTRAINT `Menu Items Sales_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `Menu Items` (`itemID`);

--
-- Constraints for table `Menu Recipes`
--
ALTER TABLE `Menu Recipes`
  ADD CONSTRAINT `Menu Recipes_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `Menu Items` (`itemID`),
  ADD CONSTRAINT `Menu Recipes_ibfk_2` FOREIGN KEY (`ingredientID`) REFERENCES `Ingredients` (`IngredientID`);

--
-- Constraints for table `Sales`
--
ALTER TABLE `Sales`
  ADD CONSTRAINT `Sales_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `Employees` (`employeeID`),
  ADD CONSTRAINT `Sales_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `Customers` (`customerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
