/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-12 15:27:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_company
-- ----------------------------
DROP TABLE IF EXISTS `tbl_company`;
CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_type` char(20) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `del_flag` tinyint(4) DEFAULT '0',
  `verification_status` varchar(255) DEFAULT '0' COMMENT '0: Unverified, 1: Email Verified, 2: Email & Admin Verified',
  `account_status` varchar(20) NOT NULL DEFAULT '1' COMMENT '1: Active, 2: Suspended, 3: Blocked',
  `activation_reset_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_company
-- ----------------------------
INSERT INTO `tbl_company` VALUES ('1', 'SAPP', 'ShareApp', 'share_app@gmail.com', 'f079556850dc990d92f1b8c7c9ea938ca29a05091e52a79fe7fde49debc2d8c8e0dfdff8d725d03ac7d3579027aeb84ed6d002d14e3106dea2ffdad4828b547fnGDyjiAKEKLFHe5hFCdF949DhxE6Mg==', '35586255', '', '', '1', '2016-11-08', '0', '1', '1', 'r6qH4XayII6z5ZN3a21uSxMNssJNtBrieh1cb6RE73');
INSERT INTO `tbl_company` VALUES ('2', 'NIBL', 'Nepal Investment Bank', 'nibl@gmail.com', '233cf2066549093bd518ea3f6afcf134c6f7baaaadcfad7211523e47995a56ebbaa381efac2972b9932f9b805bed4d44983e9923736725c7b1560ef3b2bb9e9fe1J5slm7JIoCz53G6Wfpjg==', '9845665214', '7858454', 'gfgfdg', '4', '2016-11-08', '0', '1', '1', 'c8jhqs9cNEAKhAq3tW5GaSh6u7xX2AkCAcZ7ohZqsR');
INSERT INTO `tbl_company` VALUES ('3', 'pbl', 'Prime', 'prime@gmail.com', 'f5a5ad1365374eb1921775e8be8c5bd38684222c9ae4b9871dc9def329bbd4db3bdf363621dd54a92136ad7cb35b4a2f11a746a4ab19f041a66d607d364d4345K12e9G1oEY4UZGtyeQaUGU5ojElejQ==', '987456652', '', '', '4', '2016-11-09', '0', '1', '1', 'r93pnsYtjemNRAOWFN9Dx43CNvNO6t96HQ7T37sEdf');
