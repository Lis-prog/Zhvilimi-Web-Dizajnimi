-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 12:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albmov`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `comment` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Blin Sahatqija', 'blinsahatqija@gmail.com', 'gggggggggggggg'),
(2, 'Blin', 'blinsahatqija@gmail.com', '78789'),
(3, 'test1', 'test1@gmail.com', 'test'),
(10, 'blin', 'blinsahatqija@gmail.com', ''),
(14, 'Blin', 'blin18@gmail.com', '123123'),
(15, '10:26', 'blinsahatqija@gmail.com', 'test'),
(16, 'blin', 'blin@email.com', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `addedby` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `name`, `addedby`) VALUES
(1, 'dunkirk.jpg', 'Dunkirk', 'Blin18'),
(2, 'bloodshot.jpg', 'Bloodshot', 'Blin18'),
(3, 'la llorona.jpg', 'La Llorona', 'Blin18'),
(4, 'avengers.jpg', 'Avengers', 'Blin18'),
(5, 'gog.jpeg', 'Guardians Of Galaxy', 'Blin18'),
(6, 'nightmare.jpg', 'Wes Craven\'s New Nightmare', 'Blin18'),
(7, 'frightnight.jpg', 'Fright Night', 'Blin18'),
(8, 'muppets.jpg', 'The Muppet Christmas Carol', 'Blin18');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `addedby` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `content`, `addedby`) VALUES
(1, 'joker.jpg', 'Zack Snyder Always Intended To Bring Jared Leto’s Joker Into His Justice League World', 'Ahead of his cut\'s release, Zack Snyder reveals including Jared Leto\'s version of the Joker in the Justice League world was always his intention. Director Zack Snyder always intended to include Jared Leto\'s Joker in his Justice League world. The original Justice League movie released in 2017. Snyder served as the director, but was unable to complete the film after a family tragedy.', 'Blin18'),
(2, 'belowzero.jpg', ' Below Zero: Why Rei’s Ring Is So Important', 'The intense thriller Below Zero has become a sleeper hit for Netflix, but why is minor character Rei’s ring so vital to the movie’s message? A tense and thrilling crime movie from Spain, Below Zero fuses Rio Bravo’s siege storyline with a cast of toughened criminals to create an intense psychological thriller with countless clever twists.', 'Blin18'),
(3, 'spiderman.jpeg', 'Spider-Man 3: Tobey Maguire and Andrew Garfield to reprise web-slinging roles alongside Tom Holland', 'Maguire who played Peter Parker in three films between 2002 and 2007 is working through some contracting issues with Marvel and Sony, while Garfield who starred in 2012\'s Amazing Spider-Man reboot and its maligned 2014 sequel is already on board.', 'Blin18'),
(4, 'matrix.jpg', 'The Matrix 4 Should Make Trinity The New One', ' Here\'s why Trinity should be promoted to The One in The Matrix 4. After Neo first meets Morpheus and the gang in 1999\'s original The Matrix movie, he\'s ultimately revealed to be a reincarnation of The One - an ancient hero that prophecy foretold would return to save Zion from the Machines. In a later conversation with The Architect, Neo discovers there\'s much about The One Morpheus wasn\'t privy to. The One is simply a piece of code carried by a random human plugged into the Matrix, designed to bring stability to the simulation by embodying the natural subversion of the human mind. ', 'Blin18'),
(5, 'justiceleague.jpg', 'Justice League: HBO Max Head Defends Snyder Cut Decision', 'HBO Max boss Tony Goncalves defends their decision to release Justice League Snyder Cut on the platform. After more than two years, the Release the Snyder Cut movement finally got what they were campaigning for - Zack Snyder\'s original version of the 2017 ensemble DC movie is confirmed to roll out next year via the latest streaming service. However, not everyone is thrilled about this development, with pushback coming from those who argue that this sets a bad precedent for fandoms when it comes to demanding something from studios.', 'Blin18'),
(6, 'fantasticbeasts.jpg', 'Fantastic Beasts Director David Yates Still Expected To Direct 4 and 5', 'Fantastic Beasts director David Yates is still expected to direct the fourth and fifth installments of the popular Harry Potter spinoff franchise. Yates has been at the helm of the series since it first arrived in 2016, and despite numerous changes, controversies, and delays since then, it continues to look as though he remains the man for the job.', 'Blin18'),
(7, 'blade.jpg', ' Marvel\'s Blade Movie Adds Watchmen Writer Stacy Osei-Kuffour', 'Marvel Studios hires Watchmen writer Stacy Osei-Kuffour to write the script for Mahershala Ali\'s solo Blade movie. In the aftermath of Avengers: Endgame\'s record-setting box office performance, Kevin Feige unveiled the future of the Marvel Cinematic Universe at San Diego Comic-Con 2019.', 'Blin18'),
(8, 'starwars.jpg', 'Star Wars: Rogue Squadron Is An Original Story, Won\'t Adapt Books Or Games', 'Disney revealed that Wonder Woman 1984 director Patty Jenkins will be helming a Star Wars: Rogue Squadron movie that follows a group of fighter pilots—and it will not be an adaptation of any books or games. ', 'Blin18'),
(9, 'Ryan-Reynolds.jpg', 'Ryan Reynolds Supports Defacing Hugh Jackman’s Hollywood Star', 'The lengthy rivalry between Ryan Reynolds and good friend Hugh Jackman continues, with Reynolds celebrating the altering of Jackman\'s Hollywood star.', 'Blin18');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `addedby` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `addedby`) VALUES
(1, 'noTime.jpg', 'Blin18'),
(2, 'rumble.jpg', 'Blin18'),
(3, 'spaceJam.jpg', 'Blin18');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `name` varchar(32) NOT NULL,
  `addedby` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `image`, `name`, `addedby`) VALUES
(1, 'user.png', 'Blin Sahatqija', 'Blin18'),
(2, 'user.png', 'Arianit Lleshi', 'Blin18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Blin18', 'blin18@gmail.com', '$2y$10$2xRavIQpyeAJe5mlw5r6F.VA7o5zgKAIbOn84i3LtElMXiPrssEkC', 1),
(2, 'noadm', 'noadm@gmail.com', '$2y$10$rmbtRvR1ckZ096H8ekSgQO7v4sQzoKVWJP5NiKKiDW2w61.VfeA92', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
