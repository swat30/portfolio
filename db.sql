-- phpMyAdmin SQL Dump
-- version 3.2.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2009 at 01:09 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6-2ubuntu4.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `order` smallint(6) NOT NULL,
  `url` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `description`, `image`, `order`, 
`url`) VALUES
(1, 'Ennsett Environmental', '<p>Ennsett Environmental is a group that 
provides environmental offsets to individuals and businesses, as well as 
funding research and projects with their profits. They give people the 
chance to help cleanup the environment and reduce their carbon 
footprint.</p>\r\n<p>This site was elegantly designed by Justin 
Bellefontaine, a graphic artist at Queen Street Studios at the time. The 
programming side showcases some basic skills which I acquired during my 
time at Norex. Most noteably, the Projects section was one of my first 
custom javascripts using Prototype and Scriptaculous. Although it does 
not appear to be anything overly significant, it allowed me to become 
familiar with those APIs and sparked an interest in using them to make 
sites more intuitive and interactive.</p>\r\n<p>During the progress of 
programming Ennsett''s site, I had the pleasure of working with Bob 
Munro, one of the group''s creators. I came to realize that when dealing 
with clients, they will give you with the same respect that you give 
them. I built a good client relationship with Bob, causing the 
development process to go smoothly, even when there were descrepencies 
in what he had envisioned and what I had created. Upon the site''s 
completion, Bob was so pleased with how the process went, he offered to 
do part-time sales for Norex. Not only did I have an enjoyable 
experience, I also learned how being good to a client can pay off for 
both sides.</p>', 'ennsett.jpg', 1, 'http://www.ennsett.ca/'),
(2, 'Safeballot', '<p>Safeballot was arguably one of my most interesting 
projects for Norex in 2008. It is owned internally and was developed to 
be a service that is sold to clients on a per-user basis. The site 
serves a seemingly simple purpose: to provide groups and organizations 
with a reliable, secure voting system hosted by a third party to ensure 
confidentiality of voters. The idea for Safeballot originated from a 
request by the Halifax Professional Firefighters Association, who wanted 
the system so they wouldn''t have to setup ballot stations all over the 
province every time they wanted to have a vote.</p>\r\n<p>The biggest 
challenge in the development of Safeballot was its demand for security. 
When providing users with the opportunity to place a vote online, they 
want to know that their vote is confidential. This involved setting up a 
hash system that disassociated every vote from the voter, yet at the 
same time, ensuring that the data was their in case of an audit of some 
sort. Database structuring skills were critical to providing this kind 
of confidence. Using PHP and MySQL, along with an SSL Certificate, I was 
able to secure voting data both during and after votes were 
cast.</p>\r\n<p>Not only was there a demand for security for the 
front-end user, providing an easy-to-use interface for the administrator 
was also a key aspect of this service. Although the administrative 
back-end is based on Norex''s dashboard Content Management System (CMS), 
the voting system was essentially done from scratch. Using the Prototype 
and Scriptaculous javascript libraries, I developed an intuitive 
management system for clients. This involved allowing them to easily 
create, edit, and archive campaigns, manage voters, view results, and 
print hash-code sheets for clients without an e-mail address. I also 
provided error-checking for campaigns being created to ensure that they 
were properly designed, and had dynamic voting option editing through 
the use of some heavy javascripting.</p>', 'safeballot.png', 2, 
'https://www.safeballot.com/'),
(3, 'Dashboard CMS', '', '', 3, ''),
(4, 'test2', 'sdgasdf', '', 4, '');

