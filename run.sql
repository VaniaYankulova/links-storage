-- CREATE DATABASE `links-storage`;
-- RUN:

CREATE TABLE IF NOT EXISTS `users` (
`userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
`firstName` varchar(50) NOT NULL,
`lastName` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`username` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`link` text NULL,
`description` text NULL,
`dateAndTime` timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (userID)
) ENGINE=InnoDB  default charset=utf8 collate=utf8_unicode_ci;

