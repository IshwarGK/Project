-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 01:38 PM
-- Server version: 5.6.23-enterprise-commercial-advanced-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discount`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE IF NOT EXISTS `feedback_form` (
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`Email`, `Mobile_Number`, `Message`) VALUES
('rimish786@gmail.com', '8087245254', 'lkjldkfjasldfj'),
('rimishgb@goswift.co.in', '7028257052', 'rimish'),
('', '', ''),
('', '', ''),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'jhgj'),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'yu'),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'qq'),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'we'),
('rimish786@gmail.com', '7028257052', 'we'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('rimish786@gmail.com', '8087245254', 'hello'),
('rimish786@gmail.com', '7028257052', 'raja'),
('rimishgb@goswift.co.in', '8087245254', 'rani'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('rimish736@rediffmail.com', '8087245254', 'hirimish'),
('rimish736@rediffmail.com', '8087245254', 'hirimish'),
('rimish736@rediffmail.com', '8087245254', 'hirimish'),
('rimish736@rediffmail.com', '8087245254', 'hirimish'),
('rimish736@rediffmail.com', '8087245254', 'hirimish'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('rimishgb@goswift.co.in', '1234567890', 'nahi'),
('rimishgb@goswift.co.in', '9348593853', 'yeped'),
('rimish736@rediffmail.com', '9898989898', 'hirajarani'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '0909090090', 'jajajajajajaj'),
('rimishgb@goswift.co.in', '9090909000', 'banana'),
('rimishgb@goswift.co.in', '9090909000', 'banana'),
('rimishgb@goswift.co.in', '9090909000', 'banana'),
('rimishgb@goswift.co.in', '9898980800', 'apple'),
('rimishgb@goswift.co.in', '8890808000', 'orange'),
('rimishgb@goswift.co.in', '0000000000', 'pineapple'),
('rimishgb@goswift.co.in', '0909909090', 'jamjamjam'),
('rimishgb@goswift.co.in', '1234567890', 'natrang'),
('rimishgb@goswift.co.in', '9898989898', 'santosh'),
('rimish736@rediffmail.com', '1234567890', 'janvijanvi'),
('', '', ''),
('rimish786@gmail.com', '898', ''),
('rimish786@gmail.com', '', ''),
('', '', ''),
('rimish786@gmail.com', '9899880000', 'df '),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'df'),
('', '', ''),
('er', '', ''),
('', '', ''),
('', '', ''),
('rimish786@gmail.com', '7028257052', 'fg'),
('rimish786@gmail.com', '7028257052', 'fg'),
('rimish786@gmail.com', '7028257052', 'ui'),
('rimish786@gmail.com', '7028257052', 'kajal'),
('rimish786@gmail.com', '7879797979', '89'),
('rimish786@gmail.com', '7879797979', '89'),
('rimish786@gmail.com', '8799799999', 'chinar'),
('rimish786@gmail.com', '8799799999', 'chinar'),
('rimish786@gmail.com', '8799799999', 'hairat'),
('rimish786@gmail.com', '8998989898', 'hkh'),
('rimish786@gmail.com', '56', 'fg'),
('rimish786@gmail.com', '9889899899', 'fuck'),
('rimish786@gmail.com', '9889899899', 'fuck'),
('rimish786@gmail.com', '7777777777', 'rtr'),
('rimish786@gmail.com', '7777777777', 'rtr'),
('rimish786@gmail.com', '9999999999', 'jajaraja'),
('rimish786@gmail.com', '9999999999', 'jajaraja'),
('rimish786@gmail.com', '8998989898', 'iu'),
('rimish786@gmail.com', '8998989898', 'iu'),
('rimish786@gmail.com', '9898989899', 'uiiu'),
('rimish786@gmail.com', '9898989899', 'uiiu'),
('hyy@gmail.com', 'yyyy', 'ky'),
('ui@yu.oi', 'hj', 'oo'),
('ere@gmail.com', 'kjdk', 'df'),
('rimish786@gmail.com', '9iiui', 'jh'),
('4543@gmail.com', 'uiui', 'dfd'),
('rimish786@gmail.com', '9898989899', 'bettingraja'),
('rimish786@gmail.com', '9898989899', 'bettingraja'),
('rimish786@gmail.com', '5656556565', 'fgfg'),
('rimish786@gmail.com', '5656556565', 'fgfg'),
('rimish786@gmail.com', '4564564564', 'hj'),
('rimish786@gmail.com', '4564564564', 'hj'),
('rimish786@gmail.com', '9898989898', 'rimishjaiho'),
('rimish786@gmail.com', '9898989898', 'rimishjaiho'),
('rimish786@gmail.com', '9898989899', 'hihihihi'),
('rimish786@gmail.com', '9898989899', 'hihihihi'),
('rimish786@gmail.com', '8798798797', 'jhhjkhk'),
('rimish786@gmail.com', '8798798797', 'jhhjkhk'),
('rimish786@gmail.com', '4545343455', 'jkjk'),
('rimish786@gmail.com', '4545343455', 'jkjk'),
('rimish786@gmail.com', '4545444545', 'fg'),
('rimish786@gmail.com', '4545444545', 'fg'),
('rimish786@gmail.com', '8989898989', 'kjkj'),
('rimish786@gmail.com', '8989898989', 'kjkj'),
('rimish786@gmail.com', '4545454444', 'kdfjsdlkfjsdlkf'),
('rimish786@gmail.com', '4545454444', 'kdfjsdlkfjsdlkf'),
('ere@gmail.com', '9809808080', 'kjk'),
('rimish786@gmail.com', '6767676767', 'rand'),
('rimish786@gmail.com', '8989898989', 'hirimishhoware'),
('rimish786@gmail.com', '8989898989', 'hirimishhoware'),
('rimish786@gmail.com', '9898989898', 'hijai'),
('rimish786@gmail.com', '9898989898', 'hijai'),
('rimish786@gmail.com', '9898787779', 'hiu'),
('rimish786@gmail.com', '9898787779', 'hiu'),
('rimish786@gmail.com', '8989789797', 'lkjlkjlj'),
('rimish786@gmail.com', '8989789797', 'lkjlkjlj'),
('rimish786@gmail.com', '8767676868', 'khkjhkj'),
('rimish786@gmail.com', '8767676868', 'khkjhkj'),
('raja@gmail.com', '8087245254', 'hithisisrimish'),
('raja@gmail.com', '8087245254', 'hithisisrimish'),
('rimish786@gmail.com', '8087245254', 'hiimrimish'),
('rimish786@gmail.com', '8989898989', 'h this timish'),
('rimish786@gmail.com', '8989898989', 'h this timish'),
('', '', ''),
('', '', ''),
('', '', ''),
('sdjslj', '', 'fksjdlfsj'),
('fj', '', 'jfsdlk'),
('sfdjlsjd', 'ljsfd', 'lkddjfs'),
('', '', 'dkj lsfjldj sldjf'),
('rakesh@gmail.com', '8087245254', 'hello rakesh'),
('rakesh@gmail.com', '8087245254', 'hello rakesh'),
('erjle@gmail.com', '4584584958', 'df'),
('erjle@gmail.com', '4584584958', 'df'),
('ddfjs@gmail.com', '9808080808', 'hk'),
('ddfjs@gmail.com', '9808080808', 'hk'),
('ddfjs@gmail.com', '9898989898', 'kj'),
('kjfKJ', 'KJ', 'kj'),
('r@gmail.com', '9899898989', 'kjk'),
('r@gmail.com', '9899898989', 'kjk'),
('kj@ymail.com', '98998989', 'kj'),
('r@gmail.com', '989898', 'kj'),
('r@gmail.com', '00909099', 'lkklk'),
('r@gmail.com', '89', 'oiioi'),
('r', '909', 'jkjjk'),
('reew@gmail.com', '8989898989', 'dflsj'),
('reew@gmail.com', '8989898989', 'dflsj'),
('iu', '8989898989', 'ui'),
('rimish786@gmail.com', '8087245254', 'hihjdkjjfldjf'),
('rimish786@gmail.com', '8087245254', 'hihjdkjjfldjf'),
('rahul@gmail.com', '8087245254', 'apkapk'),
('rahul@gmail.com', '8087245254', 'apkapk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
