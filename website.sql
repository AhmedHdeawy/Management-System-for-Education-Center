-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 05:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(200) NOT NULL,
  `art_content` text NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `art_pic` longblob NOT NULL,
  `pic_name` varchar(200) NOT NULL,
  `art_date` datetime NOT NULL,
  `liked` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`art_id`, `art_title`, `art_content`, `category_id`, `art_pic`, `pic_name`, `art_date`, `liked`, `dislike`) VALUES
(33, 'Learn How ', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\n\nsed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 9, 0x433a78616d7070096d70706870413234462e746d70, '58_1024.JPG', '2016-07-20 09:52:31', NULL, NULL),
(36, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 10, 0x433a78616d7070096d70706870443339302e746d70, '14.JPG', '2016-07-21 22:30:39', NULL, NULL),
(40, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 11, 0x433a78616d7070096d70706870334639462e746d70, 'nightflower1024.jpg', '2016-07-21 23:38:50', NULL, NULL),
(41, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 9, 0x433a78616d7070096d70706870413437462e746d70, '007.JPG', '2016-07-22 10:15:23', NULL, NULL),
(42, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 9, 0x433a78616d7070096d707068703846372e746d70, '005.JPG', '2016-07-22 10:15:49', NULL, NULL),
(43, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 10, 0x433a78616d7070096d70706870363130422e746d70, '011.JPG', '2016-07-22 10:16:12', NULL, NULL),
(44, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 10, 0x433a78616d7070096d70706870434344352e746d70, '010.JPG', '2016-07-22 10:16:39', NULL, NULL),
(45, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 11, 0x433a78616d7070096d70706870323341312e746d70, '024.JPG', '2016-07-22 10:17:02', NULL, NULL),
(46, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 11, 0x433a78616d7070096d70706870363942342e746d70, '042.JPG', '2016-07-22 10:17:19', NULL, NULL),
(47, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 14, 0x433a78616d7070096d70706870454334332e746d70, '006.JPG', '2016-07-22 10:17:53', NULL, NULL),
(48, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 14, 0x433a78616d7070096d70706870363236452e746d70, '068.JPG', '2016-07-22 10:18:23', NULL, NULL),
(49, 'Learn How to Learn Correct', 'sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 11, 0x433a78616d7070096d70706870383346382e746d70, '2013_1385009340_672.jpg', '2016-07-28 07:49:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(9, 'WebDesign'),
(10, 'Web Development'),
(11, 'Andriod'),
(14, 'network'),
(15, 'IPN$'),
(16, 'IIII');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` text NOT NULL,
  `course_pic` longblob NOT NULL,
  `pic_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `no_users` int(3) NOT NULL,
  `date_of_publish` date NOT NULL,
  `instructor` varchar(20) NOT NULL,
  `no_hours` int(3) NOT NULL,
  `price` int(4) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `course_link` varchar(250) DEFAULT NULL,
  `reg_users` int(3) NOT NULL,
  `course_lvl` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `category_id`, `course_name`, `course_desc`, `course_pic`, `pic_name`, `no_users`, `date_of_publish`, `instructor`, `no_hours`, `price`, `user_id`, `type`, `course_link`, `reg_users`, `course_lvl`) VALUES
(42, 14, 'Learn Protocol', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870353742392e746d70, 'Capture2.PNG', 0, '0000-00-00', '', 60, 3700, NULL, 'offline', NULL, 0, ''),
(43, 10, 'PHP CMS', 'You asked, Font Awesome delivers with 30 shiny new icons in version 4.6. Want to request new icons? Here&#39;s how. Need vectors or want to use on the desktop? Check the cheatsheet.', 0x433a5c78616d70705c746d705c706870314644362e746d70, '0007052d_EX.gif', 0, '0000-00-00', '', 21, 3800, NULL, 'online', 'https://www.youtube.com/playlist?list=PLrwRNJX9gLs22STNYbNYkIPT5akYTDNgT', 0, ''),
(44, 9, 'Html5', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870414132452e746d70, 'download.png', 0, '0000-00-00', '', 10, 500, NULL, 'offline', NULL, 0, ''),
(47, 10, 'ASP MVC', 'If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).\r\n\r\nIf length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, FALSE will be returned.', 0x433a5c78616d70705c746d705c706870314639352e746d70, 'X7.JPG', 0, '0000-00-00', '', 79, 8000, NULL, 'online', 'https://www.youtube.com/playlist?list=PLhbkMMTWYjMm96Iuk522X5lPwmD2xYGhe', 0, ''),
(48, 10, 'ASP MVC', 'If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).\r\n\r\nIf length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, FALSE will be returned.', 0x433a5c78616d70705c746d705c706870463645422e746d70, '345.JPG', 0, '0000-00-00', '', 34, 9400, NULL, 'online', 'https://www.youtube.com/playlist?list=PLhbkMMTWYjMm96Iuk522X5lPwmD2xYGhe', 0, ''),
(49, 11, 'Cordova Phonegap', 'If length is given and is positive, the string returned will contain at most length characters beginning from start (depending on the length of string).\r\n\r\nIf length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, FALSE will be returned.', 0x433a5c78616d70705c746d705c706870423842352e746d70, 'Baby4.jpg', 0, '0000-00-00', '', 23, 3000, NULL, 'online', 'https://www.youtube.com/playlist?list=PLjxKX38YWFbGM82MUzyMjCmaiN9rUHhsp', 0, ''),
(201, 9, 'Learn Web Design Using CSS3', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870344141352e746d70, 'download.jpg', 0, '0000-00-00', '', 35, 700, NULL, 'offline', NULL, 0, ''),
(212, 11, 'Learn Anjular', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0xffd8ffe000104a46494600010100000100010000ffdb0043000b08080a08070b0a090a0d0c0b0d111c12110f0f1122191a141c29242b2a282427272d3240372d303d302727384c393d43454849482b364f554e465440474845ffdb0043010c0d0d110f1121121221452e272e4545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545454545ffc0001108015400f203012200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00f55a28a298828a28a002945251400e24519a69a335231d9a4a4cd19a421d9a334dcd266818b413494502168a4a2800340a28a004634dcd38d4669142934c2694d34d002719a09149486800a292928006351e29e699409898a4cd38f4a61a43484c8a29b4522ac6c514e038a315b198da29d8a31400da29714629008692948a3148618a4a752629084a29714628189452e28c5002514b8a314009452e28c5021a6986a42298450030d21a71148690c8e8a52293140c69a4a7114940084534d3cd30d0034d21a534940c8a8a7668a4336696928ab245a28c518a0414628c514008452538d3714d884a5a4c52d201314c9a68e089a595c2220cb31e805134d1dbc2f2cce12341b9998f00578b78ebc7afae48d63a7314b053cb0eb37d7da9058d9d67e2bca9a8b47a4c113db21c6f907dfabfa67c5bd3e6da9a95ac96eddde3f9d7fc6bc7b7526ea659f4969be25d1f56e2c6fe195bfb9bb0df91ad5af9655ca9c83835b5a778bf5bd2f02d7519d507f0336e5fc8d2158fa2cd15e3fa77c5cbe876aea16715c8eee87637f8574fa7fc54d0eef8b9135a37fb6bb87e62811db9a4acfb2d7f4ad4155ad750b790b7f089067f2ad1a0069a611521a61a43184537152629a68019494e34da048434c34f6a61a0634f4a8c9a90d466931a1b45145219b629c052014ead080a28a2988292969280131453a9a690c69a8a69e3b685e69dc246832ccdd00a5b89a3b785e595d5234196663c015e29e3bf1e3ebd21b1b0629a7a1e4f4329f7f6a602f8e3c7f26b6cf63a73347a78e18f797ebed5c213484d3334863f34dcd216a6eea007eea37547ba8dd401286a706a84352eea00984841e0d6a58f89f57d3862d750b88c7a07c8fd6b17752eea00eeecfe2a6bf0604cf05c2ffb71807f315bb65f17918e2ff4e2bfed42f9fd0d7946ea5dd4582e7b7c3f14b40971bfed5167fbd18fe86b561f1a787ee7013558067fbe76ff003af9f37538352b0cfa4a0d4ac6e7fd45edbc9fee4a0d5ae3b57cc82423a1ab50ea97b01cc5773a11fdd908a2c2b1f4731a6578245e2ed761184d4ee71eef9ab91f8ffc40a31f6d2dfef20a5603db4d466b89f87fab6b3ab4b7125fcaf2da84c2bb8fe3cf6aee3148647451452037a8a28ad480a29692800a28a2800a8ae278eda179a67091a0cb31e82965952089a49182a20c927b0af12f1ff8f1f5b95b4fd3db6d8a1e587590ff0085001e3cf1e36b7235869cec962bf7dba194ff00857064d2134c26818a4d309a4269b9a063b34dcd2668cd0216928cd0280168cd145002e68cd18a31400b9a506998a78140c7034a0d2014e0b48029454f6965717d70b05a42f34add110649af43f0f7c2b9250971adca624ebf678fef1fa9ed401c2699a45f6af71e4585b3cefdf68e17ea6bd23c3ff0c61b60971acbacf2f5f213ee8fa9ef5dd5869d69a65b2c165024118eca31f9d5a6a96c122bc50c76f12c5122c71a8c2aa8c014ea735368019ba8a36d1480dca2814b5a121494b45002553d4753b5d2ed9a7bc99628c7763599e26f16597872d8bcce1a63f7631d4d7877897c557be24bc32dc36d887dc894f0a2819b7e33f88373aebbda58b34363edc17fad70c4d05aa32d40c526984d04d30d02149a4a28c5002514b8a31400628c5380a5c50032969e16976500305380a784a76cc5218cc50053f15d1f83bc2a3c517ef135d2409100ce3f8987b50073f04124f22c70c6ceedd154649aef7c3df0b6fef9966d5c9b383fe79ffcb46ff0af4cd0bc2ba5787e302cad9449de56e5cfe35b5408cad2340d3b4283cad3ed96207ef3f566fa9abed523f4a84d48c6b54669ed4ca00434da79a61a006d149ba8a406e0a5a4aaf797d6f610f9b732ac69ea4d6822c570fe32f1fdbe871b5b59b096ecfa745ac2f197c4a051ad3486ce7ef495e573cf25c4ad24ae5ddba934013ea5a9dd6ab74d71772b48edea7a552268a0d218d34c34fc534ad3019494fc52628109452e297140c4c52e29c169c12900cc53c2d382d380a00684a784a5a5140c025384740a78a43b0cf2ab4fc39aa49a16b96d7abf751b0e07753d6a88a5c50163e94b79d2e6de39a3fb8eb915266b88f871af9d4b486b299b335980a3d4a76aed58f1489119aa3341a4a006b532a4238a8ea500869a69cc69a6a808a8a28a928dd1d2bcabe23695e22bad419ed62927b12a36f95d47b62bd5874a4c56a66b43e663a0eabff40eb9ff00bf469fff0008ceb3ff0040cbbffbf46be93f223fee2fe54ef293fb8bf954ea55d1f349f0d6b1ff0040cbaffbf468ff00846758ff00a065d7fdfa35f4af949fdc5fca8f293fba28d42e8f9abfe117d65ba69975ff007ecd2ffc227ae1ff00985dcffdf15f4af96be9515d441e070abce38a02e7cd9ff08b6afe7b426c6459148055b03ad674b653431a3c88555f3b73df15ee2d7293c97179bbe633671ecabffd7af30f12ab0b2b0dcbc83273eb920d30b1cb84a705a7e28c5002628ad1b2d12ff50ff510315fef3702b7ad7c093bf37572b1fb20cd4b9c56e68a9c9f4391a7015e850782b4f8fef9924fa9ad387c3ba6c5f76d63fc466b175e28d6387933cc60b59ae1b6c313c8de8a335b765e0dd52eb9745817fe9a1e7f215e8f15ac30ae238d57e82ac21c5632c4be874470b1eace42d3e1cc7b775cde337b4698fe7574780b4c4ead3b7d5abac88d120ac1d69bea6aa94169638e9fc0fa76dfddb4cbff0002cd73fa8783ef6d51a5b7613c6bdba357a49e869980ca41e845546b4d7514e8c1f43cd7c1fa9b691e25b691be5576f2a407d0d7bb678af14f17592417114f0a6d766c1dbdfd2bd7f49699f4bb67b91b666894b8f7c577465ccae79d523caec5a34c269ed511aa330cd068a69a400dd2a3269c6986994368a28a406f514515a998514514005277a5a69a603a918ed524d14d946e8987a8a40799ce4c1631f95d67137fdf40d723e38950496b6d1fdd8d038ff8101fe15d66bf21b5d2a2dbf2b66529fef118fe75e77e24b8f3f532376e10c6b103fee8c5245b326ba4f0d68a974df6ab85dc8a7e553deb9e82332caa83a938af47b4856c2ca2451c818159d49591ad38df566944aa8005e3156548c5633c972c32bb47b52457b3af0c31eb5cbca76291b9b853d1866b323badf53c72e6a5c4b52d4d1df42b8aa2d395aaf35f18c676e6b2e534523762939a9e4191c57376fa9176c6c615af05d061b5ce0f6a86ac3dc7bd44e08538ab0cbb871504a08e3da81bd8c55b58f52d62da1b95dc8b286dbf4af47e82bcdccc60d7e075e8ac335e8cadb901aeea3b1e657f8809a8cd38d34d6c6219a613413494800d34d29a69a006d14da2981bc0d28348071456840ecd19a6d14c419a29b9a5cd3016aa4d35cc33b36c57b70bfc3f7b356c553d425f2edd829c13c521a3cc3c63749168f19d8dfbeb9246efee839c57017d6ced7ceabf333b7ea7b5749e2dbe9352d4a3b545db6f6ef85ff68fad730d34a8e7639f918e2a4d158d8d3bc3d711cf14876b0dc338aeebca091e7d0573fe1971745ae0bf5c061db777aeaca82315c9293bea76462ba1c6ea3ae48b70d15b293b7b05cd65278927597f7d1ab29f4eb5dc5de9704bf3a2857e95cebf8461326417c7a0356a51b6a4ca33be85fd3e74bc45788e41ad68e06155f4cd292c23da993939e6b6a08f738ac67237844cdb84f2a2dcd5cdea1ad4368704176f415ddde5889a2c5709a8786267dc37832648c91d4514f95fc413e6b7ba2d8788565750b12e7d33827e99aeaac278af63ce2b9ad37c33318fcabadb2606d8f03ee7be6ba8d33423a7fdd98b03d8d4d4e5fb23a7cd6f78d0890aae0d433ff5abeca235aa0ff337b5606ab531ecedbed9aa991beed7776ec7cbdb8c62b8bbfbe36010c712fced8e6bacd2e4692c519b3cfad755196b6393134ecb98b869a7a529a43d2ba8e11869294d21a918d34c269c69a6980da28a2901ba1b8a5cd460d2e6ba0cc7e6909a4cd2134001a052502900ece05729ad6b0935f7f67daef9662a73b7a2d7512c7e626dce01eb54a3d32ded5498930c7a9ea4d4b1ad0f2bf1868ff65b68e44214a81bb6d7136cf1a48e8c46d7e327eb5eb9e27b177864548d991bef6ee6bca67b33637720c6421e0f5c0a114cd8f0bcac23b8d8785756db5dfeee2bcf3c293a45aa2c5b3e59815c9e9eb5de99029c572555ef1df45de36262a315190a0d46f7036d57f3f73601ac56e744ac5b2c323b5588641bb8619ae7f5117d2855b46dbea76e6a0f2f52583118c4bea694a371c5a4769e69039e6a0711c87e602b2b4abbbc6b468ef900907008a9fcec3e2b3772d2573423880fba71571570bc9cd6743255cf386ca4124c599be5ae7358babab59e1922e225393ee7deb719f7557b9b413a6d907cb9e68b8e292dcccbfcea37165b17e53c90b5db59c7e4dac69e8b59fa558203e732e147082b5f6f15d742165ccce0c555527c91e8349a09a0d309ae938c0d30d3a9a4520129a69d4d3400da28a2901b54520a5adccc5a4268cd21340c33452668a403b3475a4a0520285fc3e6a32aaee63d85705ab785248ed6468cf94b23ee9075f96bd32aadd5aa5c70e323d2958699e18d692a5f186db7bc7167663d3bd760cd94423f8941aed4693696e87640809ee16b075bd3dd079cb1e14704d65515d1d3427cb2d4c1958ede2aa433904976ab2ec31cd555b6174c55b815ce91dacb035158c7dea963d510f2d5466d162d9d4e3d7bd53fec5c300b712014348a5e6748b7f1b275aab7173f30da6a8ff63cca998e66fc69c2da48caac8c58fa9acec8d1bea6cda5d1e031c9ad257dd58f6f105db5a51f02b2922d3b96e0824b994a44403ea7a56845a74ecc3cf0aabdf0739a7e8f0e226919793d2b5315d74e92b2b9e6d7af2e66a235115102a8c014353cd31aba4e42334c229e69280194529a6d2010d30d39a986900945145006c03466928ad89173452519a002945373466801d4669b9a29123a90d2514009b73d691e2491191d43291820fa52b3aa0cb1c0aa173ad5bc3c47fbc6f6a96d2dcb49bd8e735af0d3db869ad7e787a95eebfe35850a6d35d35f6a33dc8c33617d05654916fe475ae695ba1db072b6a552a0f04f147d9d18f0d514fbd1b0462a112b29fbc7f3acda378cbb9a891fcbd6a19e2e6990ce4fbd5c8e232f5acf62f9afa22bc4a78ef5b5a6598b99b12b631ce29b6f6db7a2d5d588c6c187047422927aec12bf2b499b28a2350aa3814eaa70de67893f3ab99c8aef8c94b63ca945c5ea2534f4a7521aa1119a4a534c2680034da5a4a4034d34d38d34d201b45145006bd04d1486b6243349484d19a005cd19a6d1400b9a5cd2504851935200d22a292c4003bd64ddeb423f96dd7737a9e955750be6b872887118fd6b3dab094ff94eaa7474bc82e6f2e2e9bf79213edd053114d205f9b35301c5666d65d04d81bad31a3dbd2a4a775a4c7633e68c3751549ad46ead96843527d9c7f76a7987caca36b6b86cd6c5bdb67da99043f374ad08d768ac9ea6bb2d07ac4a829b31e38a7e6a095b14885abd488cdb78a9edef5e36c0395f4acd91be6a5858eea716d6c5ca317a33a48a759578ebe94e615990163c8e2aea4c5b01bafad7542af368ce0a94b97543cd30d3cd308adcc44a4a5a2900c34d34a692801b451452035b3484d26ee29b9adc9149a4cd145210668cd3334668b05c93354355b9f2e0f2d7abff002abb581a8cde65db0ecbc56751da26d495e4543498cd2934a8735c87688129714fa2980ddb4a169d4a2a594902ad4aa94d0454aa6a0b1c8b56074a856a4a925837155a6e7a54d23605561b99b3431c57520688f5a7c51fcd56b6e45302e281972dc0dbcd4cf16572b5522620d5f88e579a68c663237de9cf514ea8dff7737b353cd76c1f323866ad2109a693484d2568203494b494806e68a4a2901a00d2e69b456e663b34d2d4d2d499a403f34669b9a4a928591f646cde8335cd336e626b7af9f65a49f4ae773c573d53aa82dd91cf26c535240e0c60d50be9711354d6326fb58cfb5646ecbe29d51ab5499a4c698a28a4cd2e6a596801a954d41baa55a965162335266a34e95211524b11b9eb4c185a71a81de81a1ccfcd46b30690ad40f36daa3a74fe647b81cf279a0ad11bd1d5d85ab320939ad085a999cd0fb8fbb91d451bb7283493364629911cc62ba283dd1c9516898e34d2694d21ae830109a4cd0692800a299ba8a00d0078a334c069735b58cc534945140052d25148651d59f6db05fef9fe558acdb455cd5a7f32ebcb07e541fad67c8d85ae4a8ef23be8ab44cad41f0ad5168977bcc901ea9f30fa1a8b5093ad50d218ff006c00bfdc39a85b1a33b346a981e2a924bf362a60f4128b00d2335461a866a834e83b352c6d8aabbea556a4c132f46d52b37154d1ea62d9acd956159aaaccf5331e2a9dcb617349156b233750ba10c4edbbb533466ff428cfaf3583acdd932301e95aba0c9bec23615af2e8677d4e9207e6b46127359109ad2864c0150d16f62d39a8eddbf767eb4a4ee14c80fdefad6b477396afc24c4d2668345759c834d266834940094525145c0bf45028adc8168a4a28016992c82182495ba20cd3eb135ebdda82d91baf2ffe1594e5ca8d211e69246599ccd233b7527350dc4831d6a07936f43542eae481d6b8ae7a7ecfb152f24f99aa0d0be7d6653fdd8ffad4534bb89cd58f0c2eebbbb93dc2d5ad8ce4ada1d3f97993766a50c69a0714b8a404ab4e63c5314d0c6a404cd3d4d439352250089c3714c69dd0f1d29c29de583d6b266a8549f72d55bd93f7753b205e954aefeed111b7a1c66a9cccd5a7e159f366633d51b159da98fde134ff000c4a5679e3fa35743f84c3ed1dbc2dcd694158f0b569dbc9c8ac246ab6b1a5b3e4a8621b6464fc6a656dc95031db3034e9bb48c2a2bc5a2c521a7534d769c430d21a71a6d3019452d1401741a7530528adccc75028a05031b34a2189a56fbaa326b8bbb966b992494e3731cd6b6b77a659becc8df227def73598178ae0ad3bbb1df87834b9998f2dc143b6552a7d7b55594f982b62ea059570eb915837713dabee4394ac51d52932b4ebb41ad2f0927fa24eff00de93f95644d36f15b9e14f974fff0079c9adba1937a9d10e94bb452669bbb9a42240b4eda29aa78a42dcd48014c5390734aa770a7a8a01053c6695453b1593354889cf1542efeed68482b3ee9688848e4b511f39a8f42f93507f75ab1a80c3d54d2ce35243f85747432ea76d1355cb77f9ab390e2ac473056ac5ec691dce82061b69937cc73e95460bb0bf7b8ab5e72c838acee3940b68731834b55eda4c1287f0ab15dd09732b9e6d48f2cac31a9b4f6a61ab206d14b45202d8a050052e2b7205a86f2e05adac929ec38fad4d5ccf883520f3adba3655396fad44e5ca8d29c79a56292e5dcbb1cb1e49a9b8158f75a9ac109da7e7ed5069b7b24b2fcdeb5e749753d682d0da947158f7f1650d6e48bc5655f7fab34442472770ade66c4192c7007b9aee20d3c68d1c367d5d231bcffb479354bc23a2fdbf57fb64cbfb8b5f987bbf6ad8d75b6eacdfee8aea6bddb9c4a579d90cdd4ddf5007a76eaccd99615f8a335029a786a0572756a9d1b8aaca69dbf152345b56a7eeaa824a77995958d532576acdbd7da2adb3d65dfb7cb5514293302fcef92abd92edbc46f7a96e0fcf49691ef987b56dd0c6fa9d187e3ad4a8a58f278aa511c9c7a55c46e6b368d132f44a8bff00d7a9d66456dbb867d2a83ce2288bb7415cfa5ec86f0c9bbe62d59389bc5df43b8864c4aa4d69560c1216894b75adab77df0a9ade84b4b1c78b859a9121a61a735348ae83886d14945005e028a70e951cd22c5133b1c051cd6ed91631bc41acff0067c4238bfd73f4f6f7ae3999a424b3124f5351dfdfb5fea12cacd919c2fd2ab7daf64c11bbf4ae1a92e667a3461ca88ae2c2e4bef8ff00780f5153e90ac6e5474f9b915a16972bbd7755cb9c2caae8067bd62dbd8eb491709da9cd671824d4ae92dadfab3727d07ad5a512dd3ac302ef76ed5d4e93a3c5a6459fbd3b7de7fe82b6a70b9cb5ab5b444da758c5a759a5b41f753a9f53dcd737e284f2f5085ffbebfcabb0c56078b2d4cda679c9f7a06ddf8574b5ee9c317695ce695e9fbaa9432ee5cd4be656163aee5b57a5df5595b34edd40ee5912d3bccaac1a8df52345af3294cd558352338a5ca5291399fdea85dc9ba877aab2b134d444e465dc31692b434a8b3266ab34259b35b1a5c3865a6c4b71ef1f9570cbdba8a7efda2a7d423c3a49ea3159f2be0525aa29e8c82fee999766702b1d5bf7a2aecedb8e0d32030a367196a96ac6917d4e96c2e7f76ab9e31deba5d3e68de008adf30ea2bcfd6e5a36043633d2b76ca4754462df37ad6717ecddcbab4fda46c8ebb1498a8ed66335bab37deef52d75dcf2dab3b116de68a7515422ca9e2b23c4b33c5a25d14383b0d14568f6263ba3cd2363c53ee115a02e47ccbd0d145711e9223b099cb726b6e1919d9771cd14527b9a7d93d0b4db486ced63f25305c6589ea6aee68a2bb56c792f7109e2b2f5c72ba5cd8fe21834514dec0b7479cc0c7711daac8268a2b9cea240c69e18d1450500639a7e68a29142e4d3189a28a48081d8d40c68a2992490818e95b160063a0a28a896c544b1a981f61271c8618ae7e7638a28a21b0e7b99b2b1cd3233f38a28aa65c761f7323022b6ac677682124d1456333a23b1dbd980b6c981d6a7cd145754763c99fc4c61639a28a2a893ffd9, '', 0, '0000-00-00', '', 40, 3000, NULL, 'offline', NULL, 0, ''),
(213, 10, 'Web Dev Using ASP.Net', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870413146412e746d70, 'download (4).jpg', 0, '0000-00-00', '', 50, 5000, NULL, 'offline', NULL, 0, ''),
(220, 9, 'Learn Bootstrap', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870394534342e746d70, 'download (1).jpg', 0, '0000-00-00', '', 20, 1000, NULL, 'offline', NULL, 0, ''),
(223, 10, 'Learn WEB Dev Using PHP', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870333636452e746d70, 'download (3).jpg', 0, '0000-00-00', '', 40, 4000, NULL, 'offline', NULL, 0, ''),
(233, 11, 'Learn Cross Plate Form', 'Maecenas cursus mauris libero, a imperdiet enim pellentesque id. Aliquam erat volutpat. Suspendisse sit amet sapien at risus efficitur sagittis. Pellentesque non ullamcorper justo. Vivamus commodo, sem et vestibulum eleifend, erat odio tristique enim, nec tempus tortor ligula in neque. Vestibulum eu commodo ante. Nunc volutpat nec diam a congue. Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique', 0x433a5c78616d70705c746d705c706870364346442e746d70, 'download (2).png', 0, '0000-00-00', '', 50, 5000, NULL, 'offline', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `course_users`
--

CREATE TABLE `course_users` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `liked` int(1) NOT NULL,
  `dislike` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(11) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(11) CHARACTER SET utf8 NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `profile_pic` longblob NOT NULL,
  `pic_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `role` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `password` varchar(12) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `user_name`, `email`, `profile_pic`, `pic_name`, `role`, `user_id`, `course_id`, `password`) VALUES
('Ahmed', 'Hdeawy', 'Ahmed', 'ahmedhdawy@azhar.edu.eg', 0x433a5c78616d70705c746d705c706870393245352e746d70, '001c05242OB.gif', 1, 53, NULL, 'ahmed12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `course_users`
--
ALTER TABLE `course_users`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_users`
--
ALTER TABLE `course_users`
  ADD CONSTRAINT `course_users_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
