/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-06 17:23:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL COMMENT '0: Female, \r\n1: Male',
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `newsletter_subscription` tinyint(4) DEFAULT '0' COMMENT '0:No,1:Yes',
  `reg_date` date DEFAULT NULL,
  `del_flag` tinyint(4) DEFAULT '0',
  `verification_status` varchar(255) DEFAULT '0' COMMENT '0: Unverified, 1: Email Verified, 2: Email & Admin Verified',
  `account_status` varchar(20) NOT NULL DEFAULT '1' COMMENT '1: Active, 2: Suspended, 3: Blocked',
  `activation_reset_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1', 'neetu@gmail.com', '111111', 'Neetu', 'Pradhan', '0', 'Sanepa,Lalitpur', null, '9841256321', null, '0', '2016-11-04', '0', '2', '1', null);
INSERT INTO `tbl_users` VALUES ('3', 'neetupradhan96@gmail.com', '68866690986e7e7916b4ee94d660b701c460b54de75bfe9fc21fe290c0137890a812405c9b37a233ca5b599a311436805984167724aac765fe7087ba0f7882ed01OvinuvD5Wy64RStLoEBn2Kga6IiA==', 'test', 'test', '1', 'dsffdf', '', '055665667', '8986756676', '0', '2016-11-06', '0', '0', '1', 'ocUmTcpyTR4W7TF85x3NdX39ZRC56Hd5');
INSERT INTO `tbl_users` VALUES ('4', 'admin@admin.com', '1c559505aaf9745696d19eb617017f295faa68dc39f4d4cbc682bb4df965788f072bfb25e951621d669f08d86aa3c86956c449bf23ce3dceeb73f9717a108845sEqtSWFd9LmI1Objxbk7ewH3Y8CNoA==', 'dfds', 'fdsf', '0', 'ddsffds', '', '98667', '98667999', '0', '2016-11-06', '0', '1', '1', 'RjeXlLXRNVfjAmAdi71qT282rKClJdu8Wh1nRHmfgM');
INSERT INTO `tbl_users` VALUES ('5', 'sunshine.neetu@gmail.com', 'f21f3aec39c794980e60562b973f94461104936515edacbf70298779174888d1cd8547641883de7039bb0289d984c2010e19c3a4f6c14811fea1abdf0ef66b9fxh0e3rA4uvMHVlmgfTzMHnNmbRMkNA==', 'cxcxzc', 'cxzcx', '1', '', '', '', '7654323456', '0', '2016-11-06', '0', '1', '1', 'sZyvAFlSX4M4oWgxRvQTt6XV3Y9eB9sYQCR3bCxh4W');
INSERT INTO `tbl_users` VALUES ('6', 'admin11@admin.com', '78f598de6203fce7d247cc8101781cf78e7b49e2b2f9e2ab8d4ad9313d02ab5ffbb9e37c249798510c70b527a19327dd1f7927d5dfc3480d496563fe40c135d8woXsUnVaBPAVhDtgQRa7nDCe0Ba5OA==', 'fdujyhgf', 'ytrfdfg', '0', '', '', '', '09876543', '0', '2016-11-06', '0', '0', '1', '9bpQIIan3AHyzutS8pKylxaAI32CRRpA');
