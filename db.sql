CREATE TABLE IF NOT EXISTS `accounts` (
  `accountID` int(7) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` enum('admin','company','doctor','nurse','secretary') NOT NULL,
  `companyID` int(7) NOT NULL
)