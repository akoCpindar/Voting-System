CREATE database db_voting;

USE db_voting;

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
	`adm_id` int(4) unsigned NOT NULL auto_increment,
	`adm_email` varchar(100) NOT NULL default '',
	`adm_password` varchar(100) NOT NULL default '',
	`adm_lname` varchar(180) NOT NULL default '',
	`adm_fname` varchar(180) NOT NULL default '',
	`adm_mname` varchar(180) NOT NULL default '',
	`adm_gender` varchar(180) NOT NULL default '',
	`adm_dob` varchar(180) NOT NULL default '',
	`adm_date_added` date NOT NULL default '0000-00-00',
	`adm_time_added` time NOT NULL default '00:00:00',
	PRIMARY KEY (`adm_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=1001;

DROP TABLE IF EXISTS `tbl_cresult`;
CREATE TABLE `tbl_cresult` (
	`crs_id` int(4) unsigned NOT NULL auto_increment,
	`can_id` int(4) NOT NULL default '0',
	PRIMARY KEY (`crs_id`),
	KEY (`can_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=2001;

DROP TABLE IF EXISTS `tbl_winner`;
CREATE TABLE `tbl_winner` (
	`win_id` int(4) unsigned NOT NULL auto_increment,
	`can_id` int(4) NOT NULL default '0',
	PRIMARY KEY (`win_id`),
	KEY (`can_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=3001;

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE `tbl_student` (
	`stu_id` int(4) unsigned NOT NULL auto_increment,
	`stu_idnumber` int(7) NOT NULL default '0',
	`stu_lname` varchar(100) NOT NULL default '',
	`stu_fname` varchar(100) NOT NULL default '',
	`stu_mname` varchar(100) NOT NULL default '',
	`stu_gender` varchar(100) NOT NULL default '',
	`stu_status` varchar(100) NOT NULL default '',
	`stu_dob` date NOT NULL,
	`stu_address` varchar(255) NOT NULL default '',
	`stu_mobile` varchar(50) NOT NULL default '',
	`stu_email` varchar(100) NOT NULL default '',
	`stu_date_added` date NOT NULL default '0000-00-00',
	`stu_time_added` time NOT NULL default '00:00:00',
	`cor_id` int(5) NOT NULL default '0',
	`yer_id` int(5) NOT NULL default '0',
	PRIMARY KEY (`stu_id`),
	KEY (`cor_id`),
	KEY (`yer_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=7001;

DROP TABLE IF EXISTS `tbl_candidate`;
CREATE TABLE `tbl_candidate` (
	`can_id` int(4) unsigned NOT NULL auto_increment,
	`can_idnumber` int(7) NOT NULL default '0',
	`can_lname` varchar(100) NOT NULL default '',
	`can_fname` varchar(100) NOT NULL default '',
	`can_mname` varchar(100) NOT NULL default '',
	`can_gender` varchar(100) NOT NULL default '',
	`can_votes` int(10) NOT NULL default '0',
	`can_dob` date NOT NULL,
	`can_address` varchar(255) NOT NULL default '',
	`can_mobile` varchar(50) NOT NULL default '',
	`can_email` varchar(100) NOT NULL default '',
	`can_date_added` date NOT NULL default '0000-00-00',
	`can_time_added` time NOT NULL default '00:00:00',
	`pos_id` int(4) NOT NULL default '0',
	`par_id` int(4) NOT NULL default '0',
	`cor_id` int(5) NOT NULL default '0',
	`yer_id` int(5) NOT NULL default '0',
	`col_id` int(4) NOT NULL default '0',
	PRIMARY KEY (`can_id`),
	KEY (`pos_id`),
	KEY (`par_id`),
	KEY (`cor_id`),
	KEY (`yer_id`),
	KEY (`col_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=4001;

DROP TABLE IF EXISTS `tbl_parties`;
CREATE TABLE `tbl_parties` (
	`par_id` int(4) unsigned NOT NULL auto_increment,
	`par_name` varchar(50) NOT NULL default '',
	`par_description` varchar(100) NOT NULL default '',
	PRIMARY KEY (`par_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=5001;

DROP TABLE IF EXISTS `tbl_vlist`;
CREATE TABLE `tbl_vlist` (
	`vlt_id` int(4) unsigned NOT NULL auto_increment,
	`can_idnumber` int(7) NOT NULL default '0',
	`stu_idnumber` int(7) NOT NULL default '0',
	`vlt_date_voted` date NOT NULL default '0000-00-00',
	`vlt_time_voted` time NOT NULL default '00:00:00',
	PRIMARY KEY (`vlt_id`),
	KEY (`can_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=6001;

DROP TABLE IF EXISTS `tbl_position`;
CREATE TABLE `tbl_position` (
	`pos_id` int(4) unsigned NOT NULL auto_increment,
	`pos_name` varchar(180) NOT NULL default '',
	PRIMARY KEY (`pos_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=8001;

DROP TABLE IF EXISTS `tbl_college`;
CREATE TABLE `tbl_college` (
	`col_id` int(4) unsigned NOT NULL auto_increment,
	`col_fname` varchar(180) NOT NULL default '',
	`col_description` varchar(180) NOT NULL default '',
	PRIMARY KEY (`col_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=9001;

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE `tbl_course` (
	`cor_id` int(5) unsigned NOT NULL auto_increment,
	`cor_name` varchar(180) NOT NULL default '',
	PRIMARY KEY (`cor_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=10001;

DROP TABLE IF EXISTS `tbl_year`;
CREATE TABLE `tbl_year` (
	`yer_id` int(5) unsigned NOT NULL auto_increment,
	`yer_number` int(1) NOT NULL default '0',
	PRIMARY KEY (`yer_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=20001;


DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE `tbl_settings` (
	`set_id` int(5) unsigned NOT NULL auto_increment,
	`set_name` varchar(180) NOT NULL default '',
	`set_version` varchar(180) NOT NULL default '0',
	PRIMARY KEY (`set_id`)
)
ENGINE=MyISAM AUTO_INCREMENT=30001;
