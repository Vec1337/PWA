-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3390
-- Generation Time: Jun 23, 2024 at 10:28 AM
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
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$Cn.KsP9O99DOvH0bXrf82OUmLLhUMV7q538N41/1fMpMn/so6fUh.', 1),
(2, 'admin', '213', '213', '$2y$10$Caa1aaj2oRAXLceoNhQi4uWIhvbmCKrdWiEVLvtGZ81fSE1HR4xiO', 0),
(3, 'admin', '213', 'admin2', '$2y$10$y6xTV/8f9ikJ12MB8vIypeoBJ1QyUTRB0HL60D.2MjXI6Xmd.RPkC', 0),
(5, 'user123', 'user', 'user123', '$2y$10$69HbEfi2sgLguPa82eqkn.PQ2Gkd7ZDXGEmrRmulsA7.6TDPU0aky', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(4, '07.06.2024.', 'Abby Phillip rolls tape of Trumps pattern of making promises', 'CNNs Abby Phillip weighs in on Donald Trumps recurring pattern of making promises to deliver plans within a timeframe of two weeks.', 'CNNs Abby Phillip weighs in on Donald Trumps recurring pattern of making promises to deliver plans within a timeframe of two weeks.\r\nCNNs Abby Phillip weighs in on Donald Trumps recurring pattern of making promises to deliver plans within a timeframe of two weeks.', '123.jpg', 'politics', 0),
(5, '09.06.2024.', ' As young women show distended bellies on TikTok, bloating gets ', 'Several doctors said they are seeing more patients talk about bloating issues now than in years past.', 'Nadya Okamoto had the perfect costume for her friend?s Rihanna-themed birthday party: a likeness of the pregnant pop star in black lingerie, based on her iconic outfit at Paris Fashion Week. \r\n\r\nOkamoto was not pregnant but her belly was distended: ?I literally had a watermelon-sized bloat,? she said. \r\n\r\nThe 26-year-old TikTok creator is vocal about her digestive issues. A video Okamoto posted of the Rihanna costume, showing her ?bloated, poo-filled belly,? has amassed 3.8 million views. \r\n\r\n?This made me feel so much better!!? one commenter wrote. ?I?ve had a bloated stomach since I was little and I was so insecure about it today.?\r\n\r\nOkamoto is one of many young, female creators who are documenting and discussing bloating on the app, filming their distended bellies. Some attribute the issue to menstruation or constipation, while many others just describe it as mysterious and painful. ', 'health1.webp', 'health', 0),
(6, '09.06.2024.', 'BMI has its flaws. Is the body roundness index any better?', 'BMI calculates obesity using just two measurements: height and weight. The body roundness index adds hip and waist measurements into the equation.', 'New research points to a better way to measure obesity than body mass index.\r\n\r\nBody mass index was first developed in 1832 and has been the standard way to estimate a person?s body fat since the 1980s. The calculation, however, has come under increasing scrutiny in recent years.\r\n\r\nOne major critique of BMI is that it doesn?t look at how much of a person?s weight is fat, and where fat is distributed around the body. It also doesn?t take into account the other elements that make up a person?s body composition beyond fat, including muscle, bone, water and organs.\r\n\r\n?Fat distribution and body composition can vary dramatically among different people with the same BMI,? Wenquan Niu, a professor at the Capital Institute of Pediatrics in Beijing, wrote in an email.', 'health2.webp', 'health', 0),
(7, '09.06.2024.', 'A dangerous new animal sedative is making its way into the illeg', 'An animal tranquilizer called medetomidine has been linked to a recent rise in overdoses in Illinois, Michigan and Pennsylvania', 'Another powerful animal tranquilizer has made its way into street drugs, added to illicit fentanyl and other opioids to prolong a user?s high.\r\n\r\nThe drug, called medetomidine, is linked to a recent spate of deadly overdoses throughout the Midwest and Northeast. It dramatically slows down breathing, heart rate, blood pressure and decreases activity in the brain and spinal cord. It?s not meant for use in people.\r\n\r\n?It?s really concerning, the types of contaminants that we are seeing,? said Dr. Natasha Bagdasarian, chief medical executive of the Michigan Department of Health and Human Services. ?Drugs are becoming deadlier.?\r\n\r\nMedetomidine is more potent than a similar animal sedative, xylazine, or ?tranq,? that?s become widespread in the U.S. over the past several years.', 'health3.webp', 'health', 0),
(8, '09.06.2024.', 'Labour does not rule out continuing early prison releases', 'Labours shadow justice secretary has declined to rule out continuing a scheme that allows some prisoners to be freed early to deal with overcrowding.', 'Labours shadow justice secretary has declined to rule out continuing a scheme that allows some prisoners to be freed early to deal with overcrowding.\r\nShabana Mahmood said it would be irresponsible to make a decision on the future of the scheme without seeing figures on how many offenders had been released.\r\nUnder a policy introduced last October, some less serious offenders could be released up to 18 days early, with this extended to 70 days in May.\r\nThe Conservatives said they were overseeing the largest expansion of the prison estate since the Victorian era.\r\nMinisters accused of cover-up on prisoners freed early\r\nPrisoners could be released up to 70 days early\r\nThe prison population has ballooned in recent decades as a result of tougher sentences and court backlogs.\r\nLabour says overcrowding has meant fewer criminals are being arrested, court hearings being delayed and criminals are being released from prison early.\r\nThe government has insisted only \"lower-level offenders\" can be released early and they are subject to strict supervision and conditions such as tagging and curfews.\r\nIt says anyone convicted of a sexual, terrorist or serious violent offence is exempt from early release.', 'politics1.jpg.webp', 'politics', 0),
(9, '09.06.2024.', 'Antidepressant withdrawal affects one in six people', 'One out of every six people have symptoms when they stop taking antidepressants - fewer than previously thought, a review of previous studies suggests.', 'One out of every six people have symptoms when they stop taking antidepressants - fewer than previously thought, a review of previous studies suggests.\r\nThe researchers say their findings will help inform doctors and patients \"without causing undue alarm\".\r\nThe Lancet Psychiatry review looked at data from 79 trials involving more than 20,000 patients.\r\nSome had been treated with antidepressants and others with a dummy drug or placebo, which helped researchers gauge the true effect of withdrawing from the drugs.\r\nSome people have unpleasant symptoms such as dizziness, headache, nausea and insomnia when they stop taking antidepressants, which, the researchers say, can cause considerable distress.\r\nPrevious estimates suggested antidepressant discontinuation symptoms (ADS) affected 56% of patients, with almost half of cases classed as severe.', 'health4.jpg.webp', 'health', 1),
(22, '09.06.2024.', 'A big issue: Dr. Phil on Trump teasing retribution against polit', 'TV psychologist Dr. Phil McGraw joins CNN?s Abby Phillip to discuss his recent interview with former President Donald Trump.', 'TV psychologist Dr. Phil McGraw joins CNN?s Abby Phillip to discuss his recent interview with former President Donald Trump.', 'DrPhill.jpg', 'politics', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
