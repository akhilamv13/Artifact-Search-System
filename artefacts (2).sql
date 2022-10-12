-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artefacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(2) NOT NULL,
  `city_name` varchar(35) NOT NULL,
  `state_id` int(2) NOT NULL,
  `district_id` int(2) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `district_id`, `status`) VALUES
(1, 'Adimaly', 19, 3, 1),
(2, 'Adoor', 19, 0, 1),
(3, 'Adur', 19, 0, 1),
(4, 'Akathiyur', 19, 0, 1),
(5, 'Alangad', 19, 0, 1),
(6, 'Alappuzha', 19, 1, 1),
(7, 'Aluva', 19, 2, 1),
(8, 'Ancharakandy', 19, 0, 1),
(9, 'Angamaly', 19, 2, 1),
(10, 'Aroor', 19, 1, 1),
(11, 'Arukutti', 19, 1, 1),
(12, 'Attingal', 19, 12, 1),
(13, 'Avinissery', 19, 0, 1),
(14, 'Azhikode North', 19, 0, 1),
(15, 'Azhikode South', 19, 0, 1),
(16, 'Azhiyur', 19, 0, 1),
(17, 'Balussery', 19, 0, 1),
(18, 'Bangramanjeshwar', 19, 0, 1),
(19, 'Beypur', 19, 0, 1),
(20, 'Brahmakulam', 19, 0, 1),
(21, 'Chala', 19, 0, 1),
(22, 'Chalakudi', 19, 13, 1),
(23, 'Changanacheri', 19, 7, 1),
(24, 'Chauwara', 19, 0, 1),
(25, 'Chavakkad', 19, 13, 1),
(26, 'Chelakkara', 19, 0, 1),
(27, 'Chelora', 19, 0, 1),
(28, 'Chendamangalam', 19, 2, 1),
(29, 'Chengamanad', 19, 0, 1),
(30, 'Chengannur', 19, 1, 1),
(31, 'Cheranallur', 19, 2, 1),
(32, 'Cheriyakadavu', 19, 0, 1),
(33, 'Cherthala', 19, 1, 1),
(34, 'Cherukunnu', 19, 0, 1),
(35, 'Cheruthazham', 19, 0, 1),
(36, 'Cheruvannur', 19, 0, 1),
(37, 'Cheruvattur', 19, 0, 1),
(38, 'Chevvur', 19, 0, 1),
(39, 'Chirakkal', 19, 0, 1),
(40, 'Chittur', 19, 10, 1),
(41, 'Chockli', 19, 0, 1),
(42, 'Churnikkara', 19, 0, 1),
(43, 'Dharmadam', 19, 0, 1),
(44, 'Edappal', 19, 8, 1),
(45, 'Edathala', 19, 0, 1),
(46, 'Elayavur', 19, 0, 1),
(47, 'Elur', 19, 0, 1),
(48, 'Eranholi', 19, 0, 1),
(49, 'Erattupetta', 19, 7, 1),
(50, 'Ernakulam', 19, 2, 1),
(51, 'Eruvatti', 19, 0, 1),
(52, 'Ettumanoor', 19, 7, 1),
(53, 'Feroke', 19, 0, 1),
(54, 'Guruvayur', 19, 13, 1),
(55, 'Haripad', 19, 1, 1),
(56, 'Hosabettu', 19, 0, 1),
(57, 'Idukki', 19, 3, 1),
(58, 'Iringprom', 19, 0, 1),
(59, 'Irinjalakuda', 19, 0, 1),
(60, 'Iriveri', 19, 0, 1),
(61, 'Kadachira', 19, 0, 1),
(62, 'Kadalundi', 19, 0, 1),
(63, 'Kadamakkudy', 19, 2, 1),
(64, 'Kadirur', 19, 0, 1),
(65, 'Kadungallur', 19, 0, 1),
(66, 'Kakkodi', 19, 0, 1),
(67, 'Kalady', 19, 0, 1),
(68, 'Kalamassery', 19, 2, 1),
(69, 'Kalliasseri', 19, 0, 1),
(70, 'Kalpetta', 19, 0, 1),
(71, 'Kanhangad', 19, 0, 1),
(72, 'Kanhirode', 19, 0, 1),
(73, 'Kanjikkuzhi', 19, 0, 1),
(74, 'Kanjikode', 19, 0, 1),
(75, 'Kanjirappalli', 19, 0, 1),
(76, 'Kannadiparamba', 19, 0, 1),
(77, 'Kannangad', 19, 0, 1),
(78, 'Kannapuram', 19, 0, 1),
(79, 'Kannur', 19, 4, 1),
(80, 'Kannur Cantonment', 19, 0, 1),
(81, 'Karunagappally', 19, 0, 1),
(82, 'Karuvamyhuruthy', 19, 0, 1),
(83, 'Kasaragod', 19, 5, 1),
(84, 'Kasargod', 19, 0, 1),
(85, 'Kattappana', 19, 3, 1),
(86, 'Kayamkulam', 19, 1, 1),
(87, 'Kedamangalam', 19, 0, 1),
(88, 'Kochi', 19, 2, 1),
(89, 'Kodamthuruthu', 19, 0, 1),
(90, 'Kodungallur', 19, 0, 1),
(91, 'Koduvally', 19, 0, 1),
(92, 'Koduvayur', 19, 0, 1),
(93, 'Kokkothamangalam', 19, 0, 1),
(94, 'Kolazhy', 19, 0, 1),
(95, 'Kollam', 19, 6, 1),
(96, 'Komalapuram', 19, 0, 1),
(97, 'Koothattukulam', 19, 2, 1),
(98, 'Koratty', 19, 0, 1),
(99, 'Kothamangalam', 19, 2, 1),
(100, 'Kottarakkara', 19, 6, 1),
(101, 'Kottayam', 19, 7, 1),
(102, 'Kottayam Malabar', 19, 0, 1),
(103, 'Kottuvally', 19, 0, 1),
(104, 'Koyilandi', 19, 0, 1),
(105, 'Kozhikode', 19, 8, 1),
(106, 'Kudappanakunnu', 19, 0, 1),
(107, 'Kudlu', 19, 0, 1),
(108, 'Kumarakom', 19, 0, 1),
(109, 'Kumily', 19, 0, 1),
(110, 'Kunnamangalam', 19, 0, 1),
(111, 'Kunnamkulam', 19, 0, 1),
(112, 'Kurikkad', 19, 0, 1),
(113, 'Kurkkanchery', 19, 0, 1),
(114, 'Kuthuparamba', 19, 4, 1),
(115, 'Kuttakulam', 19, 0, 1),
(116, 'Kuttikkattur', 19, 0, 1),
(117, 'Kuttur', 19, 0, 1),
(118, 'Malappuram', 19, 9, 1),
(119, 'Mallappally', 19, 0, 1),
(120, 'Manjeri', 19, 0, 1),
(121, 'Manjeshwar', 19, 0, 1),
(122, 'Mannancherry', 19, 0, 1),
(123, 'Mannar', 19, 0, 1),
(124, 'Mannarakkat', 19, 0, 1),
(125, 'Maradu', 19, 2, 1),
(126, 'Marathakkara', 19, 0, 1),
(127, 'Marutharod', 19, 0, 1),
(128, 'Mattannur', 19, 0, 1),
(129, 'Mavelikara', 19, 0, 1),
(130, 'Mavilayi', 19, 0, 1),
(131, 'Mavur', 19, 0, 1),
(132, 'Methala', 19, 0, 1),
(133, 'Muhamma', 19, 1, 1),
(134, 'Mulavukad', 19, 0, 1),
(135, 'Mundakayam', 19, 0, 1),
(136, 'Munderi', 19, 0, 1),
(137, 'Munnar', 19, 0, 1),
(138, 'Muthakunnam', 19, 0, 1),
(139, 'Muvattupuzha', 19, 2, 1),
(140, 'Muzhappilangad', 19, 0, 1),
(141, 'Nadapuram', 19, 0, 1),
(142, 'Nadathara', 19, 0, 1),
(143, 'Narath', 19, 0, 1),
(144, 'Nattakam', 19, 13, 1),
(145, 'Nedumangad', 19, 0, 1),
(146, 'Nenmenikkara', 19, 0, 1),
(147, 'New Mahe', 19, 0, 1),
(148, 'Neyyattinkara', 19, 0, 1),
(149, 'Nileshwar', 19, 0, 1),
(150, 'Olavanna', 19, 0, 1),
(151, 'Ottapalam', 19, 10, 1),
(152, 'Ottappalam', 19, 10, 1),
(153, 'Paduvilayi', 19, 0, 1),
(154, 'Palai', 19, 7, 1),
(155, 'Palakkad', 19, 10, 1),
(156, 'Palayad', 19, 0, 1),
(157, 'Palissery', 19, 0, 1),
(158, 'Pallikkunnu', 19, 0, 1),
(159, 'Paluvai', 19, 0, 1),
(160, 'Panniyannur', 19, 0, 1),
(161, 'Pantalam', 19, 0, 1),
(162, 'Panthiramkavu', 19, 0, 1),
(163, 'Panur', 19, 0, 1),
(164, 'Pappinisseri', 19, 0, 1),
(165, 'Parassala', 19, 0, 1),
(166, 'Paravur', 19, 0, 1),
(167, 'Pathanamthitta', 19, 11, 1),
(168, 'Pathanapuram', 19, 6, 1),
(169, 'Pathiriyad', 19, 0, 1),
(170, 'Pattambi', 19, 13, 1),
(171, 'Pattiom', 19, 0, 1),
(172, 'Pavaratty', 19, 0, 1),
(173, 'Payyannur', 19, 4, 1),
(174, 'Peermade', 19, 0, 1),
(175, 'Perakam', 19, 0, 1),
(176, 'Peralasseri', 19, 0, 1),
(177, 'Peringathur', 19, 0, 1),
(178, 'Perinthalmanna', 19, 0, 1),
(179, 'Perole', 19, 0, 1),
(180, 'Perumanna', 19, 0, 1),
(181, 'Perumbaikadu', 19, 0, 1),
(182, 'Perumbavoor', 19, 2, 1),
(183, 'Pinarayi', 19, 0, 1),
(184, 'Piravam', 19, 2, 1),
(185, 'Ponnani', 19, 9, 1),
(186, 'Pottore', 19, 0, 1),
(187, 'Pudukad', 19, 0, 1),
(188, 'Punalur', 19, 0, 1),
(189, 'Puranattukara', 19, 0, 1),
(190, 'Puthunagaram', 19, 0, 1),
(191, 'Puthuppariyaram', 19, 0, 1),
(192, 'Puzhathi', 19, 0, 1),
(193, 'Ramanattukara', 19, 0, 1),
(194, 'Shoranur', 19, 0, 1),
(195, 'Sultans Battery', 19, 0, 1),
(196, 'Sulthan Bathery', 19, 0, 1),
(197, 'Talipparamba', 19, 0, 1),
(198, 'Thaikkad', 19, 0, 1),
(199, 'Thalassery', 19, 8, 1),
(200, 'Thannirmukkam', 19, 0, 1),
(201, 'Theyyalingal', 19, 0, 1),
(202, 'Thiruvalla', 19, 11, 1),
(203, 'Thiruvananthapuram', 19, 12, 1),
(204, 'Thiruvankulam', 19, 0, 1),
(205, 'Thodupuzha', 19, 3, 1),
(206, 'Thottada', 19, 0, 1),
(207, 'Thrippunithura', 19, 2, 1),
(208, 'Thrissur', 19, 13, 1),
(209, 'Tirur', 19, 0, 1),
(210, 'Udma', 19, 0, 1),
(211, 'Vadakara', 19, 0, 1),
(212, 'Vaikam', 19, 7, 1),
(213, 'Valapattam', 19, 0, 1),
(214, 'Vallachira', 19, 0, 1),
(215, 'Varam', 19, 0, 1),
(216, 'Varappuzha', 19, 2, 1),
(217, 'Varkala', 19, 12, 1),
(218, 'Vayalar', 19, 1, 1),
(219, 'Vazhakkala', 19, 2, 1),
(220, 'Venmanad', 19, 0, 1),
(221, 'Villiappally', 19, 0, 1),
(222, 'Wayanad', 19, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(2) NOT NULL,
  `country_name` varchar(35) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `status`) VALUES
(1, 'Afghanistan', 1),
(2, 'Albania', 1),
(3, 'Algeria', 1),
(4, 'American Samoa', 1),
(5, 'Andorra', 1),
(6, 'Angola', 1),
(7, 'Anguilla', 1),
(8, 'Antarctica', 1),
(9, 'Antigua And Barbuda', 1),
(10, 'Argentina', 1),
(11, 'Armenia', 1),
(12, 'Aruba', 1),
(13, 'Australia', 1),
(14, 'Austria', 1),
(15, 'Azerbaijan', 1),
(16, 'Bahamas The', 1),
(17, 'Bahrain', 1),
(18, 'Bangladesh', 1),
(19, 'Barbados', 1),
(20, 'Belarus', 1),
(21, 'Belgium', 1),
(22, 'Belize', 1),
(23, 'Benin', 1),
(24, 'Bermuda', 1),
(25, 'Bhutan', 1),
(26, 'Bolivia', 1),
(27, 'Bosnia and Herzegovina', 1),
(28, 'Botswana', 1),
(29, 'Bouvet Island', 1),
(30, 'Brazil', 1),
(31, 'British Indian Ocean Territory', 1),
(32, 'Brunei', 1),
(33, 'Bulgaria', 1),
(34, 'Burkina Faso', 1),
(35, 'Burundi', 1),
(36, 'Cambodia', 1),
(37, 'Cameroon', 1),
(38, 'Canada', 1),
(39, 'Cape Verde', 1),
(40, 'Cayman Islands', 1),
(41, 'Central African Republic', 1),
(42, 'Chad', 1),
(43, 'Chile', 1),
(44, 'China', 1),
(45, 'Christmas Island', 1),
(46, 'Cocos (Keeling) Islands', 1),
(47, 'Colombia', 1),
(48, 'Comoros', 1),
(49, 'Republic Of The Congo', 1),
(50, 'Democratic Republic Of The Congo', 1),
(51, 'Cook Islands', 1),
(52, 'Costa Rica', 1),
(53, 'Cote D\'Ivoire (Ivory Coast)', 1),
(54, 'Croatia (Hrvatska)', 1),
(55, 'Cuba', 1),
(56, 'Cyprus', 1),
(57, 'Czech Republic', 1),
(58, 'Denmark', 1),
(59, 'Djibouti', 1),
(60, 'Dominica', 1),
(61, 'Dominican Republic', 1),
(62, 'East Timor', 1),
(63, 'Ecuador', 1),
(64, 'Egypt', 1),
(65, 'El Salvador', 1),
(66, 'Equatorial Guinea', 1),
(67, 'Eritrea', 1),
(68, 'Estonia', 1),
(69, 'Ethiopia', 1),
(70, 'External Territories of Australia', 1),
(71, 'Falkland Islands', 1),
(72, 'Faroe Islands', 1),
(73, 'Fiji Islands', 1),
(74, 'Finland', 1),
(75, 'France', 1),
(76, 'French Guiana', 1),
(77, 'French Polynesia', 1),
(78, 'French Southern Territories', 1),
(79, 'Gabon', 1),
(80, 'Gambia The', 1),
(81, 'Georgia', 1),
(82, 'Germany', 1),
(83, 'Ghana', 1),
(84, 'Gibraltar', 1),
(85, 'Greece', 1),
(86, 'Greenland', 1),
(87, 'Grenada', 1),
(88, 'Guadeloupe', 1),
(89, 'Guam', 1),
(90, 'Guatemala', 1),
(91, 'Guernsey and Alderney', 1),
(92, 'Guinea', 1),
(93, 'Guinea-Bissau', 1),
(94, 'Guyana', 1),
(95, 'Haiti', 1),
(96, 'Heard and McDonald Islands', 1),
(97, 'Honduras', 1),
(98, 'Hong Kong S.A.R.', 1),
(99, 'Hungary', 1),
(100, 'Iceland', 1),
(101, 'India', 1),
(102, 'Indonesia', 1),
(103, 'Iran', 1),
(104, 'Iraq', 1),
(105, 'Ireland', 1),
(106, 'Israel', 1),
(107, 'Italy', 1),
(108, 'Jamaica', 1),
(109, 'Japan', 1),
(110, 'Jersey', 1),
(111, 'Jordan', 1),
(112, 'Kazakhstan', 1),
(113, 'Kenya', 1),
(114, 'Kiribati', 1),
(115, 'Korea North', 1),
(116, 'Korea South', 1),
(117, 'Kuwait', 1),
(118, 'Kyrgyzstan', 1),
(119, 'Laos', 1),
(120, 'Latvia', 1),
(121, 'Lebanon', 1),
(122, 'Lesotho', 1),
(123, 'Liberia', 1),
(124, 'Libya', 1),
(125, 'Liechtenstein', 1),
(126, 'Lithuania', 1),
(127, 'Luxembourg', 1),
(128, 'Macau S.A.R.', 1),
(129, 'Macedonia', 1),
(130, 'Madagascar', 1),
(131, 'Malawi', 1),
(132, 'Malaysia', 1),
(133, 'Maldives', 1),
(134, 'Mali', 1),
(135, 'Malta', 1),
(136, 'Man (Isle of)', 1),
(137, 'Marshall Islands', 1),
(138, 'Martinique', 1),
(139, 'Mauritania', 1),
(140, 'Mauritius', 1),
(141, 'Mayotte', 1),
(142, 'Mexico', 1),
(143, 'Micronesia', 1),
(144, 'Moldova', 1),
(145, 'Monaco', 1),
(146, 'Mongolia', 1),
(147, 'Montserrat', 1),
(148, 'Morocco', 1),
(149, 'Mozambique', 1),
(150, 'Myanmar', 1),
(151, 'Namibia', 1),
(152, 'Nauru', 1),
(153, 'Nepal', 1),
(154, 'Netherlands Antilles', 1),
(155, 'Netherlands The', 1),
(156, 'New Caledonia', 1),
(157, 'New Zealand', 1),
(158, 'Nicaragua', 1),
(159, 'Niger', 1),
(160, 'Nigeria', 1),
(161, 'Niue', 1),
(162, 'Norfolk Island', 1),
(163, 'Northern Mariana Islands', 1),
(164, 'Norway', 1),
(165, 'Oman', 1),
(166, 'Pakistan', 1),
(167, 'Palau', 1),
(168, 'Palestinian Territory Occupied', 1),
(169, 'Panama', 1),
(170, 'Papua new Guinea', 1),
(171, 'Paraguay', 1),
(172, 'Peru', 1),
(173, 'Philippines', 1),
(174, 'Pitcairn Island', 1),
(175, 'Poland', 1),
(176, 'Portugal', 1),
(177, 'Puerto Rico', 1),
(178, 'Qatar', 1),
(179, 'Reunion', 1),
(180, 'Romania', 1),
(181, 'Russia', 1),
(182, 'Rwanda', 1),
(183, 'Saint Helena', 1),
(184, 'Saint Kitts And Nevis', 1),
(185, 'Saint Lucia', 1),
(186, 'Saint Pierre and Miquelon', 1),
(187, 'Saint Vincent And The Grenadines', 1),
(188, 'Samoa', 1),
(189, 'San Marino', 1),
(190, 'Sao Tome and Principe', 1),
(191, 'Saudi Arabia', 1),
(192, 'Senegal', 1),
(193, 'Serbia', 1),
(194, 'Seychelles', 1),
(195, 'Sierra Leone', 1),
(196, 'Singapore', 1),
(197, 'Slovakia', 1),
(198, 'Slovenia', 1),
(199, 'Smaller Territories of the UK', 1),
(200, 'Solomon Islands', 1),
(201, 'Somalia', 1),
(202, 'South Africa', 1),
(203, 'South Georgia', 1),
(204, 'South Sudan', 1),
(205, 'Spain', 1),
(206, 'Sri Lanka', 1),
(207, 'Sudan', 1),
(208, 'Suriname', 1),
(209, 'Svalbard And Jan Mayen Islands', 1),
(210, 'Swaziland', 1),
(211, 'Sweden', 1),
(212, 'Switzerland', 1),
(213, 'Syria', 1),
(214, 'Taiwan', 1),
(215, 'Tajikistan', 1),
(216, 'Tanzania', 1),
(217, 'Thailand', 1),
(218, 'Togo', 1),
(219, 'Tokelau', 1),
(220, 'Tonga', 1),
(221, 'Trinidad And Tobago', 1),
(222, 'Tunisia', 1),
(223, 'Turkey', 1),
(224, 'Turkmenistan', 1),
(225, 'Turks And Caicos Islands', 1),
(226, 'Tuvalu', 1),
(227, 'Uganda', 1),
(228, 'Ukraine', 1),
(229, 'United Arab Emirates', 1),
(230, 'United Kingdom', 1),
(231, 'United States', 1),
(232, 'United States Minor Outlying Island', 1),
(233, 'Uruguay', 1),
(234, 'Uzbekistan', 1),
(235, 'Vanuatu', 1),
(236, 'Vatican City State (Holy See)', 1),
(237, 'Venezuela', 1),
(238, 'Vietnam', 1),
(239, 'Virgin Islands (British)', 1),
(240, 'Virgin Islands (US)', 1),
(241, 'Wallis And Futuna Islands', 1),
(242, 'Western Sahara', 1),
(243, 'Yemen', 1),
(244, 'Yugoslavia', 1),
(245, 'Zambia', 1),
(246, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(2) NOT NULL,
  `district_name` varchar(35) NOT NULL,
  `state_id` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `state_id`, `status`) VALUES
(1, 'Alappuzha', 19, 1),
(2, 'Ernakulam', 19, 1),
(3, 'Idukki', 19, 1),
(4, 'Kannur', 19, 1),
(5, 'Kasargod', 19, 1),
(6, 'Kollam', 19, 1),
(7, 'Kottayam', 19, 1),
(8, 'Kozhikode', 19, 1),
(9, 'Malapuram', 19, 1),
(10, 'Palakad', 19, 1),
(11, 'Pathanamthitta', 19, 1),
(12, 'Thiruvananthapuram', 19, 1),
(13, 'Thrissur', 19, 1),
(14, 'Wayanad', 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `usertype` int(1) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `usertype`, `status`) VALUES
('1235@gmail.com', 'Aa123528', 1, NULL),
('admin@gmail.com', 'admin1234', 2, NULL),
('akhilaasmv13@gmail.com', 'Kj123528', 1, NULL),
('akhiladmv13@gmail.com', 'Aa123528', 1, NULL),
('akhilamv13@gmail.com', 'akku1234', 0, NULL),
('akhilamv223@gmail.com', 'As123528', 1, NULL),
('anju@gmail.com', 'qwertyuiop', 1, NULL),
('arathy@gmail.com', 'asdfghjkl', 1, NULL),
('jeslin@gmail.com', 'asdfghjkl', 0, NULL),
('rajivijayan0402@gmail.com', '1234567890', 1, NULL),
('rajivijayan@gmail.com', '1234567890', 1, NULL),
('rinsharinu@gmail.com', '123456789', 0, NULL),
('rinuu@gmail.com', 'fizzaamrin', 1, NULL),
('sfs@sjfbsjf.xom', 'Aa123456', 1, NULL),
('vijayan@gmail.com', '1234567890', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(35) NOT NULL,
  `ptype` varchar(35) NOT NULL,
  `pdetails` varchar(50) NOT NULL,
  `pimg` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `ptype`, `pdetails`, `pimg`) VALUES
(1, 'lakme', 'lipstick', 'LAKMÉ 9 TO 5 PRIMER + MATTE LIP COLOR  ₹ 425 ', 'img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(35) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `phone`) VALUES
('1235@gmail.com', '+915679745865'),
('jeslin@gmail.com', '+918764214678'),
('rinsharinu@gmail.com', '+919846170951'),
('akhilamv13@gmail.com', '+919895416930'),
('rinuu@gmail.com', '+919947320968'),
('rajivijayan@gmail.com', '8137916930');

-- --------------------------------------------------------

--
-- Table structure for table `sellerreg`
--

CREATE TABLE `sellerreg` (
  `sellerid` int(4) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(15) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  `gst` varchar(15) NOT NULL,
  `idproof` varchar(15) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `idcard` varchar(15) NOT NULL,
  `drivlic` varchar(15) NOT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerreg`
--

INSERT INTO `sellerreg` (`sellerid`, `fname`, `lname`, `email`, `phone`, `password`, `addr`, `gender`, `dob`, `age`, `gst`, `idproof`, `aadhar`, `idcard`, `drivlic`, `status`) VALUES
(24, 'Akhila', 'M', '1235@gmail.com', '+915679745865', 'Aa123528', 'dsgdsg', 'female', '2022-10-07', 0, '109873456789', 'aadhar', 2147483647, '0', '0', 1),
(7, 'Raji', 'Vijayan', 'rajivijayan@gmail.com', '8137916930', '1234567890', 'Madhavam', 'female', '1987-02-17', 35, '543567687908', 'aadhar', 0, '', '', 0),
(26, 'rinu', 'r', 'rinuu@gmail.com', '+919947320968', 'fizzaamrin', 'serdthjio', 'female', '2022-10-06', 0, '123456789098', 'aadhar', 2147483647, '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(2) NOT NULL,
  `state_name` varchar(35) NOT NULL,
  `country_id` int(3) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`, `status`) VALUES
(1, 'Andaman and Nicobar Islands', 101, 1),
(2, 'Andhra Pradesh', 101, 1),
(3, 'Arunachal Pradesh', 101, 1),
(4, 'Assam', 101, 1),
(5, 'Bihar', 101, 1),
(6, 'Chandigarh', 101, 1),
(7, 'Chhattisgarh', 101, 1),
(8, 'Dadra and Nagar Haveli', 101, 1),
(9, 'Daman and Diu', 101, 1),
(10, 'Delhi', 101, 1),
(11, 'Goa', 101, 1),
(12, 'Gujarat', 101, 1),
(13, 'Haryana', 101, 1),
(14, 'Himachal Pradesh', 101, 1),
(15, 'Jammu and Kashmir', 101, 1),
(16, 'Jharkhand', 101, 1),
(17, 'Karnataka', 101, 1),
(18, 'Kenmore', 101, 1),
(19, 'Kerala', 101, 1),
(20, 'Lakshadweep', 101, 1),
(21, 'Madhya Pradesh', 101, 1),
(22, 'Maharashtra', 101, 1),
(23, 'Manipur', 101, 1),
(24, 'Meghalaya', 101, 1),
(25, 'Mizoram', 101, 1),
(26, 'Nagaland', 101, 1),
(27, 'Narora', 101, 1),
(28, 'Natwar', 101, 1),
(29, 'Odisha', 101, 1),
(30, 'Paschim Medinipur', 101, 1),
(31, 'Pondicherry', 101, 1),
(32, 'Punjab', 101, 1),
(33, 'Rajasthan', 101, 1),
(34, 'Sikkim', 101, 1),
(35, 'Tamil Nadu', 101, 1),
(36, 'Telangana', 101, 1),
(37, 'Tripura', 101, 1),
(38, 'Uttar Pradesh', 101, 1),
(39, 'Uttarakhand', 101, 1),
(40, 'Vaishali', 101, 1),
(41, 'West Bengal', 101, 1),
(42, 'Badakhshan', 1, 1),
(43, 'Badgis', 1, 1),
(44, 'Baglan', 1, 1),
(45, 'Balkh', 1, 1),
(46, 'Bamiyan', 1, 1),
(47, 'Farah', 1, 1),
(48, 'Faryab', 1, 1),
(49, 'Gawr', 1, 1),
(50, 'Gazni', 1, 1),
(51, 'Herat', 1, 1),
(52, 'Hilmand', 1, 1),
(53, 'Jawzjan', 1, 1),
(54, 'Kabul', 1, 1),
(55, 'Kapisa', 1, 1),
(56, 'Khawst', 1, 1),
(57, 'Kunar', 1, 1),
(58, 'Lagman', 1, 1),
(59, 'Lawghar', 1, 1),
(60, 'Nangarhar', 1, 1),
(61, 'Nimruz', 1, 1),
(62, 'Nuristan', 1, 1),
(63, 'Paktika', 1, 1),
(64, 'Paktiya', 1, 1),
(65, 'Parwan', 1, 1),
(66, 'Qandahar', 1, 1),
(67, 'Qunduz', 1, 1),
(68, 'Samangan', 1, 1),
(69, 'Sar-e Pul', 1, 1),
(70, 'Takhar', 1, 1),
(71, 'Uruzgan', 1, 1),
(72, 'Wardag', 1, 1),
(73, 'Zabul', 1, 1),
(74, 'Berat', 2, 1),
(75, 'Bulqize', 2, 1),
(76, 'Delvine', 2, 1),
(77, 'Devoll', 2, 1),
(78, 'Dibre', 2, 1),
(79, 'Durres', 2, 1),
(80, 'Elbasan', 2, 1),
(81, 'Fier', 2, 1),
(82, 'Gjirokaster', 2, 1),
(83, 'Gramsh', 2, 1),
(84, 'Has', 2, 1),
(85, 'Kavaje', 2, 1),
(86, 'Kolonje', 2, 1),
(87, 'Korce', 2, 1),
(88, 'Kruje', 2, 1),
(89, 'Kucove', 2, 1),
(90, 'Kukes', 2, 1),
(91, 'Kurbin', 2, 1),
(92, 'Lezhe', 2, 1),
(93, 'Librazhd', 2, 1),
(94, 'Lushnje', 2, 1),
(95, 'Mallakaster', 2, 1),
(96, 'Malsi e Madhe', 2, 1),
(97, 'Mat', 2, 1),
(98, 'Mirdite', 2, 1),
(99, 'Peqin', 2, 1),
(100, 'Permet', 2, 1),
(101, 'Pogradec', 2, 1),
(102, 'Puke', 2, 1),
(103, 'Sarande', 2, 1),
(104, 'Shkoder', 2, 1),
(105, 'Skrapar', 2, 1),
(106, 'Tepelene', 2, 1),
(107, 'Tirane', 2, 1),
(108, 'Tropoje', 2, 1),
(109, 'Vlore', 2, 1),
(110, '\'Ayn Daflah', 3, 1),
(111, '\'Ayn Tamushanat', 3, 1),
(112, 'Adrar', 3, 1),
(113, 'Algiers', 3, 1),
(114, 'Annabah', 3, 1),
(115, 'Bashshar', 3, 1),
(116, 'Batnah', 3, 1),
(117, 'Bijayah', 3, 1),
(118, 'Biskrah', 3, 1),
(119, 'Blidah', 3, 1),
(120, 'Buirah', 3, 1),
(121, 'Bumardas', 3, 1),
(122, 'Burj Bu Arririj', 3, 1),
(123, 'Ghalizan', 3, 1),
(124, 'Ghardayah', 3, 1),
(125, 'Ilizi', 3, 1),
(126, 'Jijili', 3, 1),
(127, 'Jilfah', 3, 1),
(128, 'Khanshalah', 3, 1),
(129, 'Masilah', 3, 1),
(130, 'Midyah', 3, 1),
(131, 'Milah', 3, 1),
(132, 'Muaskar', 3, 1),
(133, 'Mustaghanam', 3, 1),
(134, 'Naama', 3, 1),
(135, 'Oran', 3, 1),
(136, 'Ouargla', 3, 1),
(137, 'Qalmah', 3, 1),
(138, 'Qustantinah', 3, 1),
(139, 'Sakikdah', 3, 1),
(140, 'Satif', 3, 1),
(141, 'Sayda\'', 3, 1),
(142, 'Sidi ban-al-\'Abbas', 3, 1),
(143, 'Suq Ahras', 3, 1),
(144, 'Tamanghasat', 3, 1),
(145, 'Tibazah', 3, 1),
(146, 'Tibissah', 3, 1),
(147, 'Tilimsan', 3, 1),
(148, 'Tinduf', 3, 1),
(149, 'Tisamsilt', 3, 1),
(150, 'Tiyarat', 3, 1),
(151, 'Tizi Wazu', 3, 1),
(152, 'Umm-al-Bawaghi', 3, 1),
(153, 'Wahran', 3, 1),
(154, 'Warqla', 3, 1),
(155, 'Wilaya d Alger', 3, 1),
(156, 'Wilaya de Bejaia', 3, 1),
(157, 'Wilaya de Constantine', 3, 1),
(158, 'al-Aghwat', 3, 1),
(159, 'al-Bayadh', 3, 1),
(160, 'al-Jaza\'ir', 3, 1),
(161, 'al-Wad', 3, 1),
(162, 'ash-Shalif', 3, 1),
(163, 'at-Tarif', 3, 1),
(164, 'Eastern', 4, 1),
(165, 'Manu\'a', 4, 1),
(166, 'Swains Island', 4, 1),
(167, 'Western', 4, 1),
(168, 'Andorra la Vella', 5, 1),
(169, 'Canillo', 5, 1),
(170, 'Encamp', 5, 1),
(171, 'La Massana', 5, 1),
(172, 'Les Escaldes', 5, 1),
(173, 'Ordino', 5, 1),
(174, 'Sant Julia de Loria', 5, 1),
(175, 'Bengo', 6, 1),
(176, 'Benguela', 6, 1),
(177, 'Bie', 6, 1),
(178, 'Cabinda', 6, 1),
(179, 'Cunene', 6, 1),
(180, 'Huambo', 6, 1),
(181, 'Huila', 6, 1),
(182, 'Kuando-Kubango', 6, 1),
(183, 'Kwanza Norte', 6, 1),
(184, 'Kwanza Sul', 6, 1),
(185, 'Luanda', 6, 1),
(186, 'Lunda Norte', 6, 1),
(187, 'Lunda Sul', 6, 1),
(188, 'Malanje', 6, 1),
(189, 'Moxico', 6, 1),
(190, 'Namibe', 6, 1),
(191, 'Uige', 6, 1),
(192, 'Zaire', 6, 1),
(193, 'Other Provinces', 7, 1),
(194, 'Sector claimed by Argentina/Ch', 8, 1),
(195, 'Sector claimed by Argentina/UK', 8, 1),
(196, 'Sector claimed by Australia', 8, 1),
(197, 'Sector claimed by France', 8, 1),
(198, 'Sector claimed by New Zealand', 8, 1),
(199, 'Sector claimed by Norway', 8, 1),
(200, 'Unclaimed Sector', 8, 1),
(201, 'Barbuda', 9, 1),
(202, 'Saint George', 9, 1),
(203, 'Saint John', 9, 1),
(204, 'Saint Mary', 9, 1),
(205, 'Saint Paul', 9, 1),
(206, 'Saint Peter', 9, 1),
(207, 'Saint Philip', 9, 1),
(208, 'Buenos Aires', 10, 1),
(209, 'Catamarca', 10, 1),
(210, 'Chaco', 10, 1),
(211, 'Chubut', 10, 1),
(212, 'Cordoba', 10, 1),
(213, 'Corrientes', 10, 1),
(214, 'Distrito Federal', 10, 1),
(215, 'Entre Rios', 10, 1),
(216, 'Formosa', 10, 1),
(217, 'Jujuy', 10, 1),
(218, 'La Pampa', 10, 1),
(219, 'La Rioja', 10, 1),
(220, 'Mendoza', 10, 1),
(221, 'Misiones', 10, 1),
(222, 'Neuquen', 10, 1),
(223, 'Rio Negro', 10, 1),
(224, 'Salta', 10, 1),
(225, 'San Juan', 10, 1),
(226, 'San Luis', 10, 1),
(227, 'Santa Cruz', 10, 1),
(228, 'Santa Fe', 10, 1),
(229, 'Santiago del Estero', 10, 1),
(230, 'Tierra del Fuego', 10, 1),
(231, 'Tucuman', 10, 1),
(232, 'Aragatsotn', 11, 1),
(233, 'Ararat', 11, 1),
(234, 'Armavir', 11, 1),
(235, 'Gegharkunik', 11, 1),
(236, 'Kotaik', 11, 1),
(237, 'Lori', 11, 1),
(238, 'Shirak', 11, 1),
(239, 'Stepanakert', 11, 1),
(240, 'Syunik', 11, 1),
(241, 'Tavush', 11, 1),
(242, 'Vayots Dzor', 11, 1),
(243, 'Yerevan', 11, 1),
(244, 'Aruba', 12, 1),
(245, 'Auckland', 13, 1),
(246, 'Australian Capital Territory', 13, 1),
(247, 'Balgowlah', 13, 1),
(248, 'Balmain', 13, 1),
(249, 'Bankstown', 13, 1),
(250, 'Baulkham Hills', 13, 1),
(251, 'Bonnet Bay', 13, 1),
(252, 'Camberwell', 13, 1),
(253, 'Carole Park', 13, 1),
(254, 'Castle Hill', 13, 1),
(255, 'Caulfield', 13, 1),
(256, 'Chatswood', 13, 1),
(257, 'Cheltenham', 13, 1),
(258, 'Cherrybrook', 13, 1),
(259, 'Clayton', 13, 1),
(260, 'Collingwood', 13, 1),
(261, 'Frenchs Forest', 13, 1),
(262, 'Hawthorn', 13, 1),
(263, 'Jannnali', 13, 1),
(264, 'Knoxfield', 13, 1),
(265, 'Melbourne', 13, 1),
(266, 'New South Wales', 13, 1),
(267, 'Northern Territory', 13, 1),
(268, 'Perth', 13, 1),
(269, 'Queensland', 13, 1),
(270, 'South Australia', 13, 1),
(271, 'Tasmania', 13, 1),
(272, 'Templestowe', 13, 1),
(273, 'Victoria', 13, 1),
(274, 'Werribee south', 13, 1),
(275, 'Western Australia', 13, 1),
(276, 'Wheeler', 13, 1),
(277, 'Bundesland Salzburg', 14, 1),
(278, 'Bundesland Steiermark', 14, 1),
(279, 'Bundesland Tirol', 14, 1),
(280, 'Burgenland', 14, 1),
(281, 'Carinthia', 14, 1),
(282, 'Karnten', 14, 1),
(283, 'Liezen', 14, 1),
(284, 'Lower Austria', 14, 1),
(285, 'Niederosterreich', 14, 1),
(286, 'Oberosterreich', 14, 1),
(287, 'Salzburg', 14, 1),
(288, 'Schleswig-Holstein', 14, 1),
(289, 'Steiermark', 14, 1),
(290, 'Styria', 14, 1),
(291, 'Tirol', 14, 1),
(292, 'Upper Austria', 14, 1),
(293, 'Vorarlberg', 14, 1),
(294, 'Wien', 14, 1),
(295, 'Abseron', 15, 1),
(296, 'Baki Sahari', 15, 1),
(297, 'Ganca', 15, 1),
(298, 'Ganja', 15, 1),
(299, 'Kalbacar', 15, 1),
(300, 'Lankaran', 15, 1),
(301, 'Mil-Qarabax', 15, 1),
(302, 'Mugan-Salyan', 15, 1),
(303, 'Nagorni-Qarabax', 15, 1),
(304, 'Naxcivan', 15, 1),
(305, 'Priaraks', 15, 1),
(306, 'Qazax', 15, 1),
(307, 'Saki', 15, 1),
(308, 'Sirvan', 15, 1),
(309, 'Xacmaz', 15, 1),
(310, 'Abaco', 16, 1),
(311, 'Acklins Island', 16, 1),
(312, 'Andros', 16, 1),
(313, 'Berry Islands', 16, 1),
(314, 'Biminis', 16, 1),
(315, 'Cat Island', 16, 1),
(316, 'Crooked Island', 16, 1),
(317, 'Eleuthera', 16, 1),
(318, 'Exuma and Cays', 16, 1),
(319, 'Grand Bahama', 16, 1),
(320, 'Inagua Islands', 16, 1),
(321, 'Long Island', 16, 1),
(322, 'Mayaguana', 16, 1),
(323, 'New Providence', 16, 1),
(324, 'Ragged Island', 16, 1),
(325, 'Rum Cay', 16, 1),
(326, 'San Salvador', 16, 1),
(327, '\'Isa', 17, 1),
(328, 'Badiyah', 17, 1),
(329, 'Hidd', 17, 1),
(330, 'Jidd Hafs', 17, 1),
(331, 'Mahama', 17, 1),
(332, 'Manama', 17, 1),
(333, 'Sitrah', 17, 1),
(334, 'al-Manamah', 17, 1),
(335, 'al-Muharraq', 17, 1),
(336, 'ar-Rifa\'a', 17, 1),
(337, 'Bagar Hat', 18, 1),
(338, 'Bandarban', 18, 1),
(339, 'Barguna', 18, 1),
(340, 'Barisal', 18, 1),
(341, 'Bhola', 18, 1),
(342, 'Bogora', 18, 1),
(343, 'Brahman Bariya', 18, 1),
(344, 'Chandpur', 18, 1),
(345, 'Chattagam', 18, 1),
(346, 'Chittagong Division', 18, 1),
(347, 'Chuadanga', 18, 1),
(348, 'Dhaka', 18, 1),
(349, 'Dinajpur', 18, 1),
(350, 'Faridpur', 18, 1),
(351, 'Feni', 18, 1),
(352, 'Gaybanda', 18, 1),
(353, 'Gazipur', 18, 1),
(354, 'Gopalganj', 18, 1),
(355, 'Habiganj', 18, 1),
(356, 'Jaipur Hat', 18, 1),
(357, 'Jamalpur', 18, 1),
(358, 'Jessor', 18, 1),
(359, 'Jhalakati', 18, 1),
(360, 'Jhanaydah', 18, 1),
(361, 'Khagrachhari', 18, 1),
(362, 'Khulna', 18, 1),
(363, 'Kishorganj', 18, 1),
(364, 'Koks Bazar', 18, 1),
(365, 'Komilla', 18, 1),
(366, 'Kurigram', 18, 1),
(367, 'Kushtiya', 18, 1),
(368, 'Lakshmipur', 18, 1),
(369, 'Lalmanir Hat', 18, 1),
(370, 'Madaripur', 18, 1),
(371, 'Magura', 18, 1),
(372, 'Maimansingh', 18, 1),
(373, 'Manikganj', 18, 1),
(374, 'Maulvi Bazar', 18, 1),
(375, 'Meherpur', 18, 1),
(376, 'Munshiganj', 18, 1),
(377, 'Naral', 18, 1),
(378, 'Narayanganj', 18, 1),
(379, 'Narsingdi', 18, 1),
(380, 'Nator', 18, 1),
(381, 'Naugaon', 18, 1),
(382, 'Nawabganj', 18, 1),
(383, 'Netrakona', 18, 1),
(384, 'Nilphamari', 18, 1),
(385, 'Noakhali', 18, 1),
(386, 'Pabna', 18, 1),
(387, 'Panchagarh', 18, 1),
(388, 'Patuakhali', 18, 1),
(389, 'Pirojpur', 18, 1),
(390, 'Rajbari', 18, 1),
(391, 'Rajshahi', 18, 1),
(392, 'Rangamati', 18, 1),
(393, 'Rangpur', 18, 1),
(394, 'Satkhira', 18, 1),
(395, 'Shariatpur', 18, 1),
(396, 'Sherpur', 18, 1),
(397, 'Silhat', 18, 1),
(398, 'Sirajganj', 18, 1),
(399, 'Sunamganj', 18, 1),
(400, 'Tangayal', 18, 1),
(401, 'Thakurgaon', 18, 1),
(402, 'Christ Church', 19, 1),
(403, 'Saint Andrew', 19, 1),
(404, 'Saint George', 19, 1),
(405, 'Saint James', 19, 1),
(406, 'Saint John', 19, 1),
(407, 'Saint Joseph', 19, 1),
(408, 'Saint Lucy', 19, 1),
(409, 'Saint Michael', 19, 1),
(410, 'Saint Peter', 19, 1),
(411, 'Saint Philip', 19, 1),
(412, 'Saint Thomas', 19, 1),
(413, 'Brest', 20, 1),
(414, 'Homjel\'', 20, 1),
(415, 'Hrodna', 20, 1),
(416, 'Mahiljow', 20, 1),
(417, 'Mahilyowskaya Voblasts', 20, 1),
(418, 'Minsk', 20, 1),
(419, 'Minskaja Voblasts\'', 20, 1),
(420, 'Petrik', 20, 1),
(421, 'Vicebsk', 20, 1),
(422, 'Antwerpen', 21, 1),
(423, 'Berchem', 21, 1),
(424, 'Brabant', 21, 1),
(425, 'Brabant Wallon', 21, 1),
(426, 'Brussel', 21, 1),
(427, 'East Flanders', 21, 1),
(428, 'Hainaut', 21, 1),
(429, 'Liege', 21, 1),
(430, 'Limburg', 21, 1),
(431, 'Luxembourg', 21, 1),
(432, 'Namur', 21, 1),
(433, 'Ontario', 21, 1),
(434, 'Oost-Vlaanderen', 21, 1),
(435, 'Provincie Brabant', 21, 1),
(436, 'Vlaams-Brabant', 21, 1),
(437, 'Wallonne', 21, 1),
(438, 'West-Vlaanderen', 21, 1),
(439, 'Belize', 22, 1),
(440, 'Cayo', 22, 1),
(441, 'Corozal', 22, 1),
(442, 'Orange Walk', 22, 1),
(443, 'Stann Creek', 22, 1),
(444, 'Toledo', 22, 1),
(445, 'Alibori', 23, 1),
(446, 'Atacora', 23, 1),
(447, 'Atlantique', 23, 1),
(448, 'Borgou', 23, 1),
(449, 'Collines', 23, 1),
(450, 'Couffo', 23, 1),
(451, 'Donga', 23, 1),
(452, 'Littoral', 23, 1),
(453, 'Mono', 23, 1),
(454, 'Oueme', 23, 1),
(455, 'Plateau', 23, 1),
(456, 'Zou', 23, 1),
(457, 'Hamilton', 24, 1),
(458, 'Saint George', 24, 1),
(459, 'Bumthang', 25, 1),
(460, 'Chhukha', 25, 1),
(461, 'Chirang', 25, 1),
(462, 'Daga', 25, 1),
(463, 'Geylegphug', 25, 1),
(464, 'Ha', 25, 1),
(465, 'Lhuntshi', 25, 1),
(466, 'Mongar', 25, 1),
(467, 'Pemagatsel', 25, 1),
(468, 'Punakha', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `userid` int(4) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`userid`, `fname`, `lname`, `phone`, `email`, `password`, `status`) VALUES
(1, 'Akhila', 'MV', '+919895416930', 'akhilamv13@gmail.com', 'akku1234', NULL),
(5, 'Jeslin', 'Johnson', '+918764214678', 'jeslin@gmail.com', 'asdfghjkl', NULL),
(3, 'Fathima', 'Rinsha', '+919846170951', 'rinsharinu@gmail.com', '123456789', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `sellerreg`
--
ALTER TABLE `sellerreg`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `gst` (`gst`),
  ADD KEY `sellerid` (`sellerid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellerreg`
--
ALTER TABLE `sellerreg`
  MODIFY `sellerid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
