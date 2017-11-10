-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- USE `northe51_newyork_dev`;

CREATE TABLE `activity_log` (
  `activitylogid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `usertype` enum('customer','business','admin') DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `activity_datetime` datetime DEFAULT NULL,
  `sessionid` varchar(255) DEFAULT NULL,
  `ipaddress` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`activitylogid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `activity_log` (`activitylogid`, `usertype`, `userid`, `activity`, `activity_datetime`, `sessionid`, `ipaddress`, `create_datetime`, `update_datetime`) VALUES
(00000000000000000001,	NULL,	'0',	'An user signed up',	'2016-11-08 08:01:32',	'0',	'122.178.161.106',	'2016-11-08 08:01:32',	NULL),
(00000000000000000002,	NULL,	'0',	'An user signed up',	'2016-11-08 08:05:04',	'0',	'122.178.161.106',	'2016-11-08 08:05:04',	NULL),
(00000000000000000003,	NULL,	'0',	'An user signed up',	'2016-11-08 08:08:21',	'0',	'122.178.161.106',	'2016-11-08 08:08:21',	NULL),
(00000000000000000004,	'',	'00000000000000000003',	'User Logged in',	'2016-11-08 08:11:19',	NULL,	'122.178.161.106',	'2016-11-08 08:11:19',	NULL),
(00000000000000000005,	'',	'00000000000000000003',	'User Logged out',	'2016-11-08 08:12:10',	NULL,	'122.178.161.106',	'2016-11-08 08:12:10',	NULL),
(00000000000000000006,	NULL,	'0',	'An user signed up',	'2016-11-08 08:16:40',	'0',	'122.178.161.106',	'2016-11-08 08:16:40',	NULL),
(00000000000000000007,	'',	'00000000000000000004',	'User Logged in',	'2016-11-08 08:17:50',	NULL,	'122.178.161.106',	'2016-11-08 08:17:50',	NULL),
(00000000000000000008,	'',	'00000000000000000004',	'User Logged out',	'2016-11-08 08:18:08',	NULL,	'122.178.161.106',	'2016-11-08 08:18:08',	NULL),
(00000000000000000009,	'',	'00000000000000000004',	'User Logged in',	'2016-11-08 08:18:15',	NULL,	'122.178.161.106',	'2016-11-08 08:18:15',	NULL),
(00000000000000000010,	'',	'00000000000000000004',	'User Logged out',	'2016-11-08 08:20:04',	NULL,	'122.178.161.106',	'2016-11-08 08:20:04',	NULL),
(00000000000000000011,	NULL,	'0',	'An user signed up',	'2016-11-08 08:21:20',	'0',	'73.150.228.61',	'2016-11-08 08:21:20',	NULL),
(00000000000000000012,	NULL,	'0',	'An user signed up',	'2016-11-10 09:18:07',	'0',	'73.198.5.226',	'2016-11-10 09:18:07',	NULL),
(00000000000000000013,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 09:19:32',	NULL,	'73.198.5.226',	'2016-11-10 09:19:32',	NULL),
(00000000000000000014,	'',	'00000000000000000006',	'User Logged out',	'2016-11-10 10:11:02',	NULL,	'73.198.5.226',	'2016-11-10 10:11:02',	NULL),
(00000000000000000015,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 10:16:59',	NULL,	'73.198.5.226',	'2016-11-10 10:16:59',	NULL),
(00000000000000000016,	'',	'00000000000000000006',	'User Logged out',	'2016-11-10 12:10:52',	NULL,	'73.198.5.226',	'2016-11-10 12:10:52',	NULL),
(00000000000000000017,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 12:22:47',	NULL,	'73.198.5.226',	'2016-11-10 12:22:47',	NULL),
(00000000000000000018,	'',	'00000000000000000004',	'User Logged in',	'2016-11-10 13:12:10',	NULL,	'122.178.130.224',	'2016-11-10 13:12:10',	NULL),
(00000000000000000019,	NULL,	'0',	'An user signed up',	'2016-11-10 13:50:05',	'0',	'122.178.130.224',	'2016-11-10 13:50:05',	NULL),
(00000000000000000020,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 13:51:51',	NULL,	'73.198.5.226',	'2016-11-10 13:51:51',	NULL),
(00000000000000000021,	'',	'00000000000000000004',	'User Logged out',	'2016-11-10 14:01:08',	NULL,	'122.178.130.224',	'2016-11-10 14:01:08',	NULL),
(00000000000000000022,	'',	'00000000000000000003',	'User Logged in',	'2016-11-10 14:01:13',	NULL,	'122.178.130.224',	'2016-11-10 14:01:13',	NULL),
(00000000000000000023,	'',	'00000000000000000003',	'User Logged out',	'2016-11-10 14:02:25',	NULL,	'122.178.130.224',	'2016-11-10 14:02:25',	NULL),
(00000000000000000024,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 23:04:30',	NULL,	'73.198.5.226',	'2016-11-10 23:04:30',	NULL),
(00000000000000000025,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 23:04:42',	NULL,	'73.198.5.226',	'2016-11-10 23:04:42',	NULL),
(00000000000000000026,	'',	'00000000000000000006',	'User Logged in',	'2016-11-10 23:04:42',	NULL,	'73.198.5.226',	'2016-11-10 23:04:42',	NULL),
(00000000000000000027,	'',	'00000000000000000006',	'User Logged in',	'2016-11-11 10:47:46',	NULL,	'73.198.5.226',	'2016-11-11 10:47:46',	NULL),
(00000000000000000028,	'',	'00000000000000000003',	'User Logged in',	'2016-11-11 13:14:09',	NULL,	'122.178.26.114',	'2016-11-11 13:14:09',	NULL),
(00000000000000000029,	'',	'00000000000000000006',	'User Logged in',	'2016-11-11 13:17:35',	NULL,	'73.198.5.226',	'2016-11-11 13:17:35',	NULL),
(00000000000000000030,	'',	'00000000000000000006',	'User Logged in',	'2016-11-11 16:46:59',	NULL,	'73.198.5.226',	'2016-11-11 16:46:59',	NULL);

CREATE TABLE `admin_login` (
  `adminid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','email_conf') DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `brands` (
  `brandid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `businessid` bigint(20) DEFAULT NULL,
  `brandname` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `business_login` (
  `loginid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `businessid` bigint(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('admin','user') DEFAULT NULL,
  `securityquestion1` varchar(255) DEFAULT NULL,
  `securityanswer1` varchar(255) DEFAULT NULL,
  `securityquestion2` varchar(255) DEFAULT NULL,
  `securityanswer2` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `business_login` (`loginid`, `businessid`, `username`, `contact_name`, `password`, `user_type`, `securityquestion1`, `securityanswer1`, `securityquestion2`, `securityanswer2`, `create_datetime`, `update_datetime`) VALUES
(1,	2,	'kpl@gmail.com',	'Stanislaus Kumar',	'acdbc7ee98f78e1607aeb020ebb91131',	NULL,	'00000000000000000001',	'Rex',	'00000000000000000002',	'Christina',	'2016-11-06 13:42:23',	NULL);

CREATE TABLE `business_profile` (
  `businessid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `business_name` varchar(255) DEFAULT NULL,
  `dba_name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `customerservice_phone` varchar(255) DEFAULT NULL,
  `warranty_phone` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `business_type` enum('manufacturer') DEFAULT NULL,
  `status` enum('active','inactive','activation_process','new') DEFAULT NULL,
  PRIMARY KEY (`businessid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `business_profile` (`businessid`, `business_name`, `dba_name`, `address1`, `address2`, `city`, `state`, `zip`, `phone`, `customerservice_phone`, `warranty_phone`, `weburl`, `fax`, `business_type`, `status`) VALUES
(00000000000000000002,	'SONY',	'SONY',	'123 Any street',	'',	'Plainsboro',	'00000000000000000002',	'08805',	'9082424242',	'9082424242',	'9082424242',	'www.sony.com',	'',	'manufacturer',	NULL),
(00000000000000000003,	'Apple',	'Apple',	'1123 Any street',	'',	'Princeton',	'00000000000000000002',	'08536',	'9084204535',	'9084204535',	'9084204535',	'http://www.google.com',	'',	'manufacturer',	NULL);

CREATE TABLE `categories` (
  `categoryid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `businessid` bigint(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `configuration` (
  `configurationid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `param_name` varchar(255) DEFAULT NULL,
  `param_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`configurationid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `configuration` (`configurationid`, `param_name`, `param_value`) VALUES
(00000000000000000001,	'MAX_BUSINESS_USERS',	'3');

CREATE TABLE `customer_login` (
  `loginid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `customerid` bigint(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `securityquestion1` varchar(255) DEFAULT NULL,
  `securityanswer1` varchar(255) DEFAULT NULL,
  `securityquestion2` varchar(255) DEFAULT NULL,
  `securityanswer2` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','email_conf') DEFAULT 'email_conf',
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `customer_login` (`loginid`, `customerid`, `username`, `password`, `token`, `securityquestion1`, `securityanswer1`, `securityquestion2`, `securityanswer2`, `status`, `create_datetime`, `update_datetime`) VALUES
(00000000000000000001,	1,	'ma.abilash@gmail.com',	'123456',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'email_conf',	'2016-11-08 08:01:27',	NULL),
(00000000000000000002,	2,	'user1@gp.com',	'123456',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'email_conf',	'2016-11-08 08:04:58',	NULL),
(00000000000000000003,	3,	'user2@gp.com',	'123456',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'active',	'2016-11-08 08:08:11',	'2016-11-08 08:10:01'),
(00000000000000000004,	4,	'raj.gisterpages@gmail.com',	'123123123',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'active',	'2016-11-08 08:16:35',	'2016-11-08 08:17:34'),
(00000000000000000006,	6,	'summerkum@yahoo.com',	'spring11',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'active',	'2016-11-10 09:18:02',	'2016-11-10 13:59:31'),
(00000000000000000007,	7,	'asasdf@gp.com',	'1234567',	NULL,	'q1',	'answer1',	'q2',	'answer2',	'active',	'2016-11-10 13:50:00',	'2016-11-10 13:58:25');

CREATE TABLE `customer_profile` (
  `customerid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `household_income` enum('upto 50000','50,000 - 100,000','100,000 - 150,000','150,000 & above') DEFAULT NULL,
  `education` enum('High School','UnderGraduate','Graduate','Post Graduate','Life Experience') DEFAULT NULL,
  `hoousehold_members` int(2) DEFAULT NULL,
  `own_rent` enum('own','rent') DEFAULT NULL,
  `employment` enum('FULL Time Employment','Self Employed','Unemployed','Retired','Home Maker') DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `birth_year` varchar(255) DEFAULT NULL,
  `birth_month` enum('January','February','March','April','May','June','July','August','September','October','November','December') DEFAULT NULL,
  `marital_status` enum('single','married') DEFAULT NULL,
  `kids` enum('y','n') DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `customer_profile` (`customerid`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `mobile`, `household_income`, `education`, `hoousehold_members`, `own_rent`, `employment`, `dob`, `birth_year`, `birth_month`, `marital_status`, `kids`, `create_datetime`, `update_datetime`) VALUES
(00000000000000000001,	'abilash',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(00000000000000000002,	'user1',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(00000000000000000003,	'user2',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(00000000000000000004,	'raj',	'address 1',	'address 2',	'city',	'state',	'123123',	'9999999999',	'100,000 - 150,000',	'Post Graduate',	6,	'own',	'Self Employed',	'20/05/1990',	NULL,	NULL,	'single',	'y',	NULL,	'2016-11-10 14:00:59'),
(00000000000000000006,	'stan kumar2',	'2245 Aspen drive',	'',	'plainsboro',	'NJ',	'08536',	'',	'150,000 & above',	'Post Graduate',	4,	'rent',	'FULL Time Employment',	'',	NULL,	NULL,	'single',	'y',	NULL,	'2016-11-10 13:53:52'),
(00000000000000000007,	'asddf',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

CREATE TABLE `manuals` (
  `manualid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `productid` bigint(20) DEFAULT NULL,
  `manual_name` varchar(255) DEFAULT NULL,
  `manual_type` varchar(255) DEFAULT NULL,
  `manual_version` varchar(255) DEFAULT NULL,
  `manual_date` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`manualid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `mydocs` (
  `mydocid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `myproductid` bigint(20) DEFAULT NULL,
  `docname` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`mydocid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `myproducts` (
  `myproductid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `customerid` bigint(20) DEFAULT NULL,
  `manualid` bigint(20) DEFAULT NULL,
  `productid` bigint(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `license_key` varchar(255) DEFAULT NULL,
  `license_no` varchar(255) DEFAULT NULL,
  `use_type` enum('Home Personal','Home Office','Business','Travel','Vacation') DEFAULT NULL,
  `purchase_store` varchar(255) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_price` float(10,2) DEFAULT NULL,
  `purchase_receiptno` varchar(255) DEFAULT NULL,
  `purchase_state` varchar(255) DEFAULT NULL,
  `warranty_expiry` date DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`myproductid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `products` (
  `productid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `businessid` bigint(20) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `producttype` varchar(255) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `manufactured_year` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `warranty_years` int(2) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `create_datetime` datetime DEFAULT NULL,
  `update_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE `security_questions` (
  `securityqid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `security_q` varchar(255) DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`securityqid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `security_questions` (`securityqid`, `security_q`, `create_datetime`, `update_datetime`) VALUES
(00000000000000000001,	'What is your pet name',	NULL,	NULL),
(00000000000000000002,	'What is your first girlfriends name',	NULL,	NULL),
(00000000000000000003,	'What is your mothers maiden name',	NULL,	NULL),
(00000000000000000004,	'Whats is your place of birth',	NULL,	NULL),
(00000000000000000005,	'House no where you grew up as a child',	NULL,	NULL),
(00000000000000000006,	'What is your preferred music genre',	NULL,	NULL),
(00000000000000000007,	'What was your high school mascot',	NULL,	NULL),
(00000000000000000008,	'The year you graduated high school',	NULL,	NULL),
(00000000000000000009,	'What is the name of your favorite teacher',	NULL,	NULL),
(00000000000000000010,	'WHo is your childhood hero',	NULL,	NULL);

CREATE TABLE `states_us` (
  `stateid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `state_abbr` char(2) DEFAULT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `states_us` (`stateid`, `state_abbr`, `state_name`) VALUES
(00000000000000000001,	'NJ',	'New Jersey'),
(00000000000000000002,	'NY',	'New York'),
(00000000000000000003,	'CA',	'California'),
(00000000000000000004,	'CT',	'Connecticut'),
(00000000000000000005,	'MD',	'Maryland'),
(00000000000000000006,	'PA',	'Pennsylvania'),
(00000000000000000007,	'RI',	'Rhode Island'),
(00000000000000000008,	'MA',	'Massachusets'),
(00000000000000000009,	'ME',	'Maine'),
(00000000000000000010,	'NH',	'New Hampshire'),
(00000000000000000011,	'TN',	'Tennessee'),
(00000000000000000012,	'GA',	'Georgia'),
(00000000000000000013,	'AL',	'Alabama'),
(00000000000000000014,	'WI',	'Wisconsin');

CREATE TABLE `stores` (
  `storeid` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) DEFAULT NULL,
  `store_type` enum('online','physical') DEFAULT NULL,
  `create_datetime` varchar(255) DEFAULT NULL,
  `update_datetime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`storeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `stores` (`storeid`, `store_name`, `store_type`, `create_datetime`, `update_datetime`) VALUES
(00000000000000000001,	'AMAZON',	'online',	NULL,	NULL),
(00000000000000000002,	'B&H ',	'physical',	NULL,	NULL);

-- 2016-11-12 16:58:01
