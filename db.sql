-- phpMyAdmin SQL Dump
-- version 3.2.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2009 at 07:21 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `description`, `image`, `order`, `url`) VALUES
(1, 'Ennsett Environmental', '<p>Ennsett Environmental is a group that provides environmental offsets to individuals and businesses, as well as funding research and projects with their profits. They give people the chance to help cleanup the environment and reduce their carbon footprint.</p>\r\n<p>This site was elegantly designed by Justin Bellefontaine, a graphic artist at Queen Street Studios at the time. The programming side showcases some basic skills which I acquired during my time at Norex. Most noteably, the Projects section was one of my first custom javascripts using Prototype and Scriptaculous. Although it does not appear to be anything overly significant, it allowed me to become familiar with those APIs and sparked an interest in using them to make sites more intuitive and interactive.</p>\r\n<p>During the progress of programming Ennsett''s site, I had the pleasure of working with Bob Munro, one of the group''s creators. I came to realize that when dealing with clients, they will give you with the same respect that you give them. I built a good client relationship with Bob, causing the development process to go smoothly, even when there were descrepencies in what he had envisioned and what I had created. Upon the site''s completion, Bob was so pleased with how the process went, he offered to do part-time sales for Norex. Not only did I have an enjoyable experience, I also learned how being good to a client can pay off for both sides.</p>', 'ennsett.jpg', 1, 'http://www.ennsett.ca/'),
(2, 'Safeballot', '<p>Safeballot was arguably one of my most interesting projects for Norex in 2008. It is owned internally and was developed to be a service that is sold to clients on a per-user basis. The site serves a seemingly simple purpose: to provide groups and organizations with a reliable, secure voting system hosted by a third party to ensure confidentiality of voters. The idea for Safeballot originated from a request by the Halifax Professional Firefighters Association, who wanted the system so they wouldn''t have to setup ballot stations all over the province every time they wanted to have a vote.</p>\r\n<p>The biggest challenge in the development of Safeballot was its demand for security. When providing users with the opportunity to place a vote online, they want to know that their vote is confidential. This involved setting up a hash system that disassociated every vote from the voter, yet at the same time, ensuring that the data was their in case of an audit of some sort. Database structuring skills were critical to providing this kind of confidence. Using PHP and MySQL, along with an SSL Certificate, I was able to secure voting data both during and after votes were cast.</p>\r\n<p>Not only was there a demand for security for the front-end user, providing an easy-to-use interface for the administrator was also a key aspect of this service. Although the administrative back-end is based on Norex''s dashboard Content Management System (CMS), the voting system was essentially done from scratch. Using the Prototype and Scriptaculous javascript libraries, I developed an intuitive management system for clients. This involved allowing them to easily create, edit, and archive campaigns, manage voters, view results, and print hash-code sheets for clients without an e-mail address. I also provided error-checking for campaigns being created to ensure that they were properly designed, and had dynamic voting option editing through the use of some heavy javascripting.</p>', 'safeballot.png', 2, 'https://www.safeballot.com/'),
(3, 'Dashboard CMS', '<p>Norex''s Dashboard content management system (CMS) has been under development since the early 2000''s, but was redeveloped in 2007 by Christopher Troup. This new version, which is still the core driving the CMS today, was made to replace old PHP4 style coding with the more up-to-date, PHP5 object oriented programming structure. Norex uses this product as the backbone to nearly all of their web development, using it to build all of their client''s websites. In early 2009, the Dashboard CMS was deemed an open-source project, allowing the entire web community to begin contributing their ideas through collaborative development.</p>\r\n<p>During my first week of employment at Norex, I was asked to redevelop the Photo Gallery module for Dashboard. It had initially been developed by another potential hire, but was not working properly. I quickly picked up on the framework of the CMS and was able to develop a pretty stable module. Since then, I have been both contributing to the Dashboard project, and using it to create client websites. This kind of work was my first in the PHP object oriented style and I have a hard time going back to my old procedural style. It was definitely a key learning point in my web development career, opening me up to a more modern and efficient way of working.</p>', 'cms.png', 3, ''),
(4, 'Doug Bragg Enterprises', '<p>Doug Bragg Enterprises is a company based in rural Nova Scotia. They sell machinery and electronics for harvesting and farming. They were one of my first clients with Norex in July of 2008, so the development of this website was a good learning experience for me. Although it was basic as far as features were concerned, it allowed me to become more familiar with both the Dashboard CMS, as well as dealing with clients.</p>\r\n<p>This project required little custom work, so it gave me a chance to further explore the inner workings of our CMS. However, I did develop a small module to allow their clients to browse used equipment. It didn''t require any E-commerce, so it was rather uncomplicated, but furthered my module and object oriented development skills.</p>', 'dbe.png', 4, 'http://dbe.norex.ca'),
(5, 'High-Crest Enterprises', '<p>From their website: "Founded in 1981, High-Crest Enterprises Ltd. is a leader in providing quality healthcare to seniors in Nova Scotia. Presently operating five facilities, it is one the largest providers of health care in the province. High-Crest offers nursing homes in Springhill and Sherbrooke, seniors residential care in Antigonish and New Glasgow, and a second residential care facility in downtown New Glasgow."</p>\r\n<p>This website, which I began working on in mid-July 2008, was also amongst one of my first at Norex. It was another important experience while building my object oriented programming skill set. I was simultaneously improving the photo gallery module that I had built only a week or so before. Highcrest also helped me improve on my quality control standards, as I had realized that I had made some mistakes while developing the photo gallery which could have easily been avoided with little testing.</p>', 'hce.png', 5, 'http://highcrest.norex.ca/'),
(6, 'Dynamic Hosting', '<p>Dynamic Hosting has been around since 2000 and is a partner company with Norex Web Development. They provide hosting solutions for all levels of clientele, including personal, small, and large business services. Their previous website was very outdated and was falling behind the current standards in the industry. After several attempts to outsource the development to other firms across the globe, Dynamic Hosting decided to do it internally with Norex. One of the main goals of the site is to promote environmental sustainability through carbon offsets. It gives clients the assurance that Dynamic Hosting is aware of the current situation with our surroundings and is taking action. </p>\r\n<p>This site was very e-commerce heavy, as the entire purpose of it was to sell web-hosting services. It required some tweaking of our existing E-Commerce module for the Norex Dashboard content management system. This involved plugin development to account for hosting services, as they had different needs than other items. Also, I was required to port over some old CSS meant for a different CMS to meet the standards of Dashboard''s templating system, Smarty.</p>', 'dynamic.png', 6, 'http://dynamichosting.norex.ca');
