/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-09 14:49:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_announcement
-- ----------------------------
DROP TABLE IF EXISTS `tbl_announcement`;
CREATE TABLE `tbl_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `fiscal_year` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_announcement
-- ----------------------------
