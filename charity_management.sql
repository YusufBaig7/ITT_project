

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `charitymanagementdb`
--
CREATE DATABASE IF NOT EXISTS `charitymanagementdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `charitymanagementdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(300) NOT NULL,
  `emailId` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobileNo` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `identityNo` int(12) NOT NULL,
  `accountNo` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullName`, `emailId`, `password`, `mobileNo`,  `type`, `identityNo`, `accountNo`,) VALUES
(1, 'Siddhisa Banerjee', 'siddhisab@gmail.com', '12345', '7890022964', 'donor',  '123456789876','123456789875',),
(2, 'Yusuf Baig', 'yusuf.baig7@gmail.com', '56789', '7774036965', 'donor', '123456789874', '123456789873');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
