-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Haz 2020, 22:15:35
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `patient_info_sys`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `comment_repby` varchar(50) NOT NULL,
  `comment_mssg` text NOT NULL,
  `comment_date` varchar(50) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`comment_id`, `p_id`, `comment_repby`, `comment_mssg`, `comment_date`) VALUES
(21, 69, 'Dr.Dani Berg', 'Sed at gravida nibh. Sed gravida non felis ac porta. Quisque sed enim at massa vulputate lobortis dictum id odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed congue, magna et convallis ullamcorper, odio enim interdum erat, hendrerit volutpat ipsum urna quis ipsum. Nulla ac nibh sed augue gravida maximus nec a arcu. Etiam nec ante eu ante rutrum pulvinar at sit amet lorem. Nunc eget est id libero placerat euismod a et nisl. Morbi lobortis, enim ut vehicula tincidunt, mauris nulla faucibus est, vel accumsan leo ipsum vel massa. Nam vitae tempus ante, eu euismod lectus. Phasellus ac egestas mauris. Quisque nunc mauris, iaculis et orci ut, ultricies laoreet ipsum. Nam consectetur convallis luctus.', '2020-06-04 22:09:06'),
(22, 69, 'Dr.Carwyn Andrade', 'Pellentesque scelerisque vulputate pharetra. Curabitur metus ligula, sagittis eget ante tempor, laoreet condimentum ipsum. Sed ac diam blandit, consequat magna et, laoreet ipsum. In a ante egestas urna pulvinar tincidunt ac ac ipsum. Integer ex metus, blandit nec dapibus ut, sodales non urna. Maecenas egestas lobortis augue, quis laoreet sem dignissim at. Nam sed quam accumsan, finibus leo ut, semper nibh. Duis non bibendum velit.', '2020-06-04 22:09:23'),
(23, 69, 'Dr.Ebony Dunlap', 'Cras ultricies, mi quis tincidunt euismod, dolor augue blandit arcu, non malesuada est lorem sed mauris. Vivamus a nibh sit amet turpis congue commodo at at felis. Integer hendrerit et urna ac rutrum. Fusce leo turpis, rhoncus sit amet placerat ac, molestie id magna. Integer varius felis id ipsum laoreet, ut lobortis tortor ultricies. Integer cursus interdum sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec aliquam ligula a diam facilisis rutrum. Proin vehicula quam rutrum, luctus sapien a, sagittis libero.', '2020-06-04 22:09:46');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_username` varchar(35) NOT NULL,
  `d_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_username`, `d_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kent`
--

CREATE TABLE `kent` (
  `t_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `score_overall` int(11) NOT NULL,
  `mental_age` int(11) NOT NULL,
  `iq` int(11) NOT NULL,
  `k_q1` varchar(200) DEFAULT NULL,
  `k_q2` varchar(200) DEFAULT NULL,
  `k_q3` varchar(200) DEFAULT NULL,
  `k_q4` varchar(200) DEFAULT NULL,
  `k_q5` varchar(200) DEFAULT NULL,
  `k_q6` varchar(200) DEFAULT NULL,
  `k_q7` varchar(200) DEFAULT NULL,
  `k_q8` varchar(200) DEFAULT NULL,
  `k_q9` varchar(200) DEFAULT NULL,
  `k_q10` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kent`
--

INSERT INTO `kent` (`t_id`, `patient_id`, `score_overall`, `mental_age`, `iq`, `k_q1`, `k_q2`, `k_q3`, `k_q4`, `k_q5`, `k_q6`, `k_q7`, `k_q8`, `k_q9`, `k_q10`) VALUES
(46, 69, 33, 15, 107, 'brick stone concrete', 'glass park', 'north', 'parrot owl penguin ', 'noon', 'antalya istanbul ankara', 'star is far', 'iron steel', 'southwest', '5'),
(47, 71, 25, 13, 93, 'wood gib', 'game construction', '', 'pinguin sparrow', 'noon', 'aydın bursa balıkesir izmir denizli', 'moon is close', 'iron steel', 'southwest', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kent_report`
--

CREATE TABLE `kent_report` (
  `kent_rep_id` int(11) NOT NULL,
  `kent_pid` int(11) NOT NULL,
  `kent_pname` varchar(40) NOT NULL,
  `kent_gender` varchar(10) NOT NULL,
  `kent_age` int(11) NOT NULL,
  `kent_reqby` varchar(40) NOT NULL,
  `kent_repby` varchar(40) NOT NULL,
  `kent_tmethod` varchar(15) NOT NULL,
  `kent_ttype` varchar(15) NOT NULL,
  `kent_date` date NOT NULL,
  `kent_title` varchar(100) NOT NULL,
  `kent_descrp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kent_report`
--

INSERT INTO `kent_report` (`kent_rep_id`, `kent_pid`, `kent_pname`, `kent_gender`, `kent_age`, `kent_reqby`, `kent_repby`, `kent_tmethod`, `kent_ttype`, `kent_date`, `kent_title`, `kent_descrp`) VALUES
(10, 69, 'Rose Gray', 'Female', 26, 'Dr. Aisling Jennings', 'Dr. Carmel Howard', 'Online', 'KENT-EGY', '2020-06-02', 'Kent Report ', 'Morbi tristique luctus magna, sit amet suscipit eros rhoncus et. In hac habitasse platea dictumst. Praesent consequat, risus vitae sollicitudin maximus, nibh ipsum aliquet eros, vel gravida orci ligula id odio. In vehicula libero non nisi consectetur, vel aliquam nibh efficitur. Etiam id turpis sit amet orci pharetra volutpat ac vitae urna. Aliquam erat volutpat. Nunc quis ornare nulla, sed ullamcorper lorem. Praesent sapien elit, congue ac imperdiet interdum, porttitor eu mi. Nulla mauris est, egestas quis pretium et, malesuada eget quam. Ut facilisis lectus sed lectus rutrum varius. In egestas sodales dolor, a mattis nunc mattis non. Donec fermentum finibus mauris sed aliquam. Curabitur tempus accumsan sem non molestie. Sed blandit metus pellentesque laoreet iaculis. Phasellus cursus luctus erat nec rutrum.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mmpi`
--

CREATE TABLE `mmpi` (
  `t_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `p_identity` varchar(11) NOT NULL,
  `Score_Empty` int(11) DEFAULT NULL,
  `T_scoreL` int(11) NOT NULL,
  `T_scoreF` int(11) NOT NULL,
  `T_scoreK` int(11) NOT NULL,
  `T_scoreHS` int(11) NOT NULL,
  `T_scoreD` int(11) NOT NULL,
  `T_scoreHY` int(11) NOT NULL,
  `T_scorePD` int(11) NOT NULL,
  `T_scoreMF` int(11) NOT NULL,
  `T_scorePA` int(11) NOT NULL,
  `T_scorePT` int(11) NOT NULL,
  `T_scoreSC` int(11) NOT NULL,
  `T_scoreMA` int(11) NOT NULL,
  `T_scoreSI` int(11) NOT NULL,
  `answer1` varchar(5) DEFAULT NULL,
  `answer2` varchar(5) DEFAULT NULL,
  `answer3` varchar(5) DEFAULT NULL,
  `answer4` varchar(5) DEFAULT NULL,
  `answer5` varchar(5) DEFAULT NULL,
  `answer6` varchar(5) DEFAULT NULL,
  `answer7` varchar(5) DEFAULT NULL,
  `answer8` varchar(5) DEFAULT NULL,
  `answer9` varchar(5) DEFAULT NULL,
  `answer10` varchar(5) DEFAULT NULL,
  `answer11` varchar(5) NOT NULL,
  `answer12` varchar(5) NOT NULL,
  `answer13` varchar(5) NOT NULL,
  `answer14` varchar(5) NOT NULL,
  `answer15` varchar(5) NOT NULL,
  `answer16` varchar(5) NOT NULL,
  `answer17` varchar(5) NOT NULL,
  `answer18` varchar(5) NOT NULL,
  `answer19` varchar(5) NOT NULL,
  `answer20` varchar(5) NOT NULL,
  `answer21` varchar(5) NOT NULL,
  `answer22` varchar(5) NOT NULL,
  `answer23` varchar(5) NOT NULL,
  `answer24` varchar(5) NOT NULL,
  `answer25` varchar(5) NOT NULL,
  `answer26` varchar(5) NOT NULL,
  `answer27` varchar(5) NOT NULL,
  `answer28` varchar(5) NOT NULL,
  `answer29` varchar(5) NOT NULL,
  `answer30` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mmpi`
--

INSERT INTO `mmpi` (`t_id`, `patient_id`, `p_identity`, `Score_Empty`, `T_scoreL`, `T_scoreF`, `T_scoreK`, `T_scoreHS`, `T_scoreD`, `T_scoreHY`, `T_scorePD`, `T_scoreMF`, `T_scorePA`, `T_scorePT`, `T_scoreSC`, `T_scoreMA`, `T_scoreSI`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`, `answer11`, `answer12`, `answer13`, `answer14`, `answer15`, `answer16`, `answer17`, `answer18`, `answer19`, `answer20`, `answer21`, `answer22`, `answer23`, `answer24`, `answer25`, `answer26`, `answer27`, `answer28`, `answer29`, `answer30`) VALUES
(48, 69, '47385967594', 536, 65, 72, 63, 76, 30, 90, 58, 29, 66, 32, 22, 46, 53, 'F', 'T', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F'),
(49, 70, '37596758493', 538, 81, 171, 82, 136, 133, 13, 36, -21, 27, 53, 55, 73, 20, 'F', 'T', 'F', 'T', 'F', 'E', 'T', 'T', 'T', 'F', 'T', 'F', 'F', 'T', 'F', 'T', 'F', 'F', 'T', 'F', 'T', 'F', 'E', 'T', 'F', 'T', 'F', 'T', 'F', 'T'),
(50, 72, '67495674934', 536, 90, 156, 95, 116, 121, 23, 33, -24, 26, 52, 52, 76, 13, 'F', 'F', 'F', 'T', 'T', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F', 'T', 'F');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mmpi_report`
--

CREATE TABLE `mmpi_report` (
  `mmpi_rep_id` int(11) NOT NULL,
  `mmpi_pid` int(255) NOT NULL,
  `mmpi_pname` varchar(40) NOT NULL,
  `mmpi_gender` varchar(10) NOT NULL,
  `mmpi_age` int(11) NOT NULL,
  `mmpi_reqby` varchar(40) NOT NULL,
  `mmpi_repby` varchar(40) NOT NULL,
  `mmpi_tmethod` varchar(10) NOT NULL,
  `mmpi_ttype` varchar(10) NOT NULL,
  `mmpi_date` varchar(20) NOT NULL,
  `mmpi_title` varchar(100) NOT NULL,
  `mmpi_descrp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mmpi_report`
--

INSERT INTO `mmpi_report` (`mmpi_rep_id`, `mmpi_pid`, `mmpi_pname`, `mmpi_gender`, `mmpi_age`, `mmpi_reqby`, `mmpi_repby`, `mmpi_tmethod`, `mmpi_ttype`, `mmpi_date`, `mmpi_title`, `mmpi_descrp`) VALUES
(18, 69, 'Rose Gray', 'Female', 26, 'Dr.Brenna Levy', 'Dr.Alexis Lott', 'Online', 'MMPI', '2020-06-03', 'MMPI Report', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ullamcorper eros nisl, vel ultrices neque rhoncus non. Cras ultrices metus odio, quis faucibus odio lobortis id. Ut a suscipit neque, et posuere sapien. Morbi suscipit tincidunt dolor, quis molestie ipsum laoreet id. Vestibulum luctus porta ante a tempus. Maecenas ultricies libero in massa pretium, ac pretium felis scelerisque. Curabitur vel vulputate quam, et vulputate dolor. Vestibulum ut pellentesque libero. Fusce posuere malesuada massa vel viverra. Nullam maximus orci sed tellus fermentum pellentesque. Ut condimentum sollicitudin justo id imperdiet. Donec in leo arcu. Aliquam finibus dictum magna, sed sagittis augue blandit eu.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `p_identity` varchar(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_surname` varchar(40) NOT NULL,
  `p_gender` varchar(6) NOT NULL,
  `p_age` int(3) NOT NULL,
  `p_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `patient`
--

INSERT INTO `patient` (`p_id`, `p_identity`, `p_name`, `p_surname`, `p_gender`, `p_age`, `p_phone`) VALUES
(69, '47385967594', 'Rose', 'Gray', 'Female', 26, '5436854968'),
(70, '37596758493', 'Damon', 'Mullen', 'Male', 45, '5345285648'),
(71, '19473894538', 'Brandon', 'Peel', 'Male', 15, '5329674839'),
(72, '67495674934', 'Cheryl', 'Smith', 'Female', 42, '5546578904'),
(74, '11111111111', 'öykü', 'Aslan', 'Female', 22, '1111111111');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(3, 'Eva Williams MMPI', '2020-05-12 00:00:00', '2020-05-13 00:00:00'),
(4, 'Jocelyn Simmons KENT', '2020-05-20 00:00:00', '2020-05-21 00:00:00'),
(5, 'Meeting', '2020-05-22 00:00:00', '2020-05-23 00:00:00'),
(6, 'Harper Rose ', '2020-05-06 00:00:00', '2020-05-07 00:00:00'),
(7, 'Aria Perry', '2020-05-28 00:00:00', '2020-05-29 00:00:00'),
(8, 'Meeting', '2020-05-08 00:00:00', '2020-05-09 00:00:00'),
(9, 'James Espinoza MMPI', '2020-05-25 00:00:00', '2020-05-26 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tests`
--

CREATE TABLE `tests` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `t_type` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `t_totalquestion` varchar(5) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Tablo döküm verisi `tests`
--

INSERT INTO `tests` (`t_id`, `t_name`, `t_type`, `t_totalquestion`) VALUES
(1, 'MMPI', 'Personality', '566'),
(2, 'KENT-EGY', 'IQ', '10');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Tablo için indeksler `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Tablo için indeksler `kent`
--
ALTER TABLE `kent`
  ADD PRIMARY KEY (`t_id`);

--
-- Tablo için indeksler `kent_report`
--
ALTER TABLE `kent_report`
  ADD PRIMARY KEY (`kent_rep_id`);

--
-- Tablo için indeksler `mmpi`
--
ALTER TABLE `mmpi`
  ADD PRIMARY KEY (`t_id`);

--
-- Tablo için indeksler `mmpi_report`
--
ALTER TABLE `mmpi_report`
  ADD PRIMARY KEY (`mmpi_rep_id`);

--
-- Tablo için indeksler `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Tablo için indeksler `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`t_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kent`
--
ALTER TABLE `kent`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `kent_report`
--
ALTER TABLE `kent_report`
  MODIFY `kent_rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `mmpi`
--
ALTER TABLE `mmpi`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `mmpi_report`
--
ALTER TABLE `mmpi_report`
  MODIFY `mmpi_rep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Tablo için AUTO_INCREMENT değeri `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `tests`
--
ALTER TABLE `tests`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
