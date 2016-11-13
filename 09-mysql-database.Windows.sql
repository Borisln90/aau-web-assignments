-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2014 at 11:06 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `amdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Movie ID',
  `title` varchar(128) NOT NULL COMMENT 'Movie title',
  `year` year(4) NOT NULL COMMENT 'Release year',
  `language` varchar(16) NOT NULL COMMENT 'Original language',
  `plot` text NOT NULL COMMENT 'Plot outline',
  `image_url` varchar(512) NOT NULL COMMENT 'URL of movie poster image',
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `year`, `language`, `plot`, `image_url`) VALUES
 (1, 'Pitch Perfect', 2012, 'english', 'Beca, a freshman at Barden University, is cajoled into joining The Bellas, her school''s all-girls singing group. Injecting some much needed energy into their repertoire, The Bellas take on their male rivals in a campus competition.', 'http://toinebogers.com/content/teaching/imdb-images/pitch_perfect.jpg'),
 (2, 'De Fortabte Sjæles Ø', 2007, 'danish', 'Den 14-årig hovedperson Lulu flytter til en lille provinsby med sin mor og lillebror, hvor hun keder sig og drømmer om en mere magisk verden. Pludselig besættes lillebroderen af en ånd, og hun må søge hjælp hos rigmandssønnen Oliver, og den clairvoyante opfinder Ricard. Sammen kæmper de mod de mørke kræfter, der gemmer sig på De fortabte sjæles ø.', 'http://toinebogers.com/content/teaching/imdb-images/de_fortabte.jpg'),
 (3, 'Back To The Future', 1985, 'english', 'A teenager is accidentally sent 30 years into the past in a time-traveling DeLorean invented by his friend, Dr. Emmett Brown, and must make sure his high-school-age parents unite in order to save his own existence.', 'http://toinebogers.com/content/teaching/imdb-images/back_to.jpg'),
 (4, 'X-Men: Days of Future Past', 2014, 'english', 'The X-Men send Wolverine to the past in a desperate effort to change history and prevent an event that results in doom for both humans and mutants.', 'http://toinebogers.com/content/teaching/imdb-images/x-men_days.jpg'),
 (5, 'Drinking Buddies', 2013, 'english', 'Luke and Kate are coworkers at a brewery who spend their nights drinking and flirting heavily. One weekend away together with their significant others proves who really belongs together and who doesn''t.', 'http://toinebogers.com/content/teaching/imdb-images/drinking_buddies.jpg'),
 (6, 'De Bende van Oss', 2011, 'dutch', 'De Bende van Oss vertelt het verhaal van Johanna van Heesch. De jonge en levenslustige Johanna is via haar man Ties  verzeild geraakt in ''de Ossche bende'', die bijna dagelijks samenkomt in haar café. Onder leiding van de machtige Wim de Kuiper zorgt de bende voor een golf van misdaad en moord die heel Nederland jarenlang in zijn greep houdt. Johanna wil breken met de misdaad die haar omringt, ze krijgt hulp uit onverwachte hoek van corrupte verzekeringsagent Harry. Maar hoe harder ze probeert los te komen van Oss, hoe verder ze wegzakt in oplichting, prostitutie en zelfs moord…', 'http://toinebogers.com/content/teaching/imdb-images/de_bende.jpg'),
 (7, 'Monsters University', 2013, 'english', 'A look at the relationship between Mike and Sulley during their days at Monsters University -- when they weren''t necessarily the best of friends.', 'http://toinebogers.com/content/teaching/imdb-images/monsters_university.jpg'),
 (8, 'Groundhog Day', 1993, 'english', 'A weatherman finds himself living the same day over and over again.', 'http://toinebogers.com/content/teaching/imdb-images/groundhog_day.jpg'),
 (9, 'Anchorman: The Legend of Ron Burgundy', 2004, 'english', 'Ron Burgundy is San Diego''s top rated newsman in the male-dominated broadcasting of the 70''s, but that''s all about to change for Ron and his cronies when an ambitious woman is hired as a new anchor.', 'http://toinebogers.com/content/teaching/imdb-images/anchorman.jpg'),
(10, 'Easy A', 2010, 'english', 'A clean-cut high school student relies on the school''s rumor mill to advance her social and financial standing.', 'http://toinebogers.com/content/teaching/imdb-images/easy_a.jpg'),
(11, 'Blades of Glory', 2007, 'english', 'In 2002, two rival Olympic ice skaters were stripped of their gold medals and permanently banned from men''s single competition. Presently, however, they''ve found a loophole that will allow them to qualify as a pairs team.', 'http://toinebogers.com/content/teaching/imdb-images/blades_of.jpg'),
(12, 'Casablanca', 1942, 'english', 'Set in unoccupied Africa during the early days of World War II: An American expatriate meets a former lover, with unforeseen complications.', 'http://toinebogers.com/content/teaching/imdb-images/casablanca.jpg'),
(13, 'City of Ember', 2008, 'english', 'For generations, the people of the City of Ember have flourished in an amazing world of glittering lights. But Ember''s once powerful generator is failing ... and the great lamps that illuminate the city are starting to flicker.', 'http://toinebogers.com/content/teaching/imdb-images/city_of.jpg'),
(14, 'Nerdcore Rising', 2008, 'english', 'Hilariously entertaining, "Nerdcore Rising" introduces a new wave of hip-hop to the world called "Nerdcore" where computer-obsessed geeks bust rhymes about the hard knock life of nerdom. The gut-busting comedy follows MC Frontalot, the "Godfather of Nerdcore" on his first national tour where the roots of the genre, the dorky complexities of its artists, and one MC''s fight for nerd stardom is revealed.', 'http://toinebogers.com/content/teaching/imdb-images/nerdcore_rising.jpg'),
(15, 'Yes Man', 2008, 'english', 'A guy challenges himself to say "yes" to everything for an entire year.', 'http://toinebogers.com/content/teaching/imdb-images/yes_man.jpg'),
(16, 'Guardians of the Galaxy', 2014, 'english', 'A group of intergalactic criminals are forced to work together to stop a fanatical warrior from taking control of the universe.', 'http://toinebogers.com/content/teaching/imdb-images/guardians_of.jpg'),
(17, 'Big Hero 6', 2014, 'english', 'The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.', 'http://toinebogers.com/content/teaching/imdb-images/big_hero.jpg'),
(18, 'Avengers 2: Age of Ultron', 2015, 'english', 'When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and it is up to the Avengers to stop the villainous Ultron from enacting his terrible plans.', 'http://toinebogers.com/content/teaching/imdb-images/avengers_2.jpg'),
(19, 'Inside Out', 2015, 'english', 'After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust and Sadness - conflict on how best to navigate a new city, house, and school.', 'http://toinebogers.com/content/teaching/imdb-images/inside_out.jpg'),
(20, 'Star Wars: The Force Awakens', 2015, 'english', 'A continuation of the saga created by George Lucas set thirty years after Star Wars: Episode VI - Return of the Jedi (1983).', 'http://toinebogers.com/content/teaching/imdb-images/force_awakens.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `username` varchar(32) NOT NULL COMMENT 'Username',
  `password` varchar(32) NOT NULL COMMENT 'Password',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'toine', 'kersenflap');