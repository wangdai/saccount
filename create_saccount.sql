use saccount;
CREATE TABLE IF NOT EXISTS `saccount_admin` (
	`id` int(16) NOT NULL auto_increment,
	`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`user` varchar(20) NOT NULL,
	`passwd` char(40) NOT NULL,
	`name` varchar(20),
	`mobile` varchar(20),
	PRIMARY KEY(`id`),
	UNIQUE KEY(`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `saccount_individual` (
	`no` int NOT NULL auto_increment,
	`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`name` varchar(20) NOT NULL,
	`gender` char(3) NOT NULL DEFAULT "男",
	`id_no` char(18) NOT NULL,
	`address` varchar(50) NOT NULL,
	`occupation` varchar(20),
	`education` varchar(10) NOT NULL,
	`company` varchar(50),
	`mobile` varchar(20) NOT NULL,
	`agent_id_no` char(18) DEFAULT NULL,
	`capital_account` int DEFAULT NULL, 
	`status` int(4) NOT NULL DEFAULT 0,
	PRIMARY KEY(`no`),
	UNIQUE KEY(`id_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `saccount_individual` auto_increment = 10000000;

CREATE TABLE IF NOT EXISTS `saccount_organization` (
	`no` int NOT NULL auto_increment,
	`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`legal_registration_no` varchar(20) NOT NULL,
	`business_license_no` varchar(20) NOT NULL,
	`legal_id` char(18) NOT NULL,
	`legal_name` varchar(20) NOT NULL,
	`legal_mobile` varchar(20) NOT NULL,
	`legal_address` varchar(50) NOT NULL,
	`authorizee_id` char(18) NOT NULL,
	`authorizee_name` varchar(20) NOT NULL,
	`authorizee_mobile` varchar(20) NOT NULL,
	`authorizee_address` varchar(50) NOT NULL,
	`capital_account` int DEFAULT NULL, 
	`status` int(4) NOT NULL DEFAULT 0,
	PRIMARY KEY(`no`),
	UNIQUE KEY(`legal_registration_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `saccount_organization` auto_increment = 60000000;

CREATE TABLE IF NOT EXISTS `saccount_stocks` (
	`id` int(32) NOT NULL AUTO_INCREMENT,
	`account_no` char(10) NOT NULL,
	`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`stock_code` char(10) NOT NULL,
	`stock_amount` int(32) NOT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;