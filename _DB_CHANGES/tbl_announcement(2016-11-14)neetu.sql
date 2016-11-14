/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-14 19:20:38
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
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_announcement
-- ----------------------------
INSERT INTO `tbl_announcement` VALUES ('1', 'jhuy', '2', null, 'yuhyty', '2016-11-09 21:22:33', '1');
INSERT INTO `tbl_announcement` VALUES ('2', 'sdfd', '3', null, 'fdsfdsf', '2016-11-10 14:59:41', '1');
INSERT INTO `tbl_announcement` VALUES ('3', 'ioyut', '3', null, 'fggfg', '2016-11-10 14:59:51', '1');
INSERT INTO `tbl_announcement` VALUES ('4', 'United Finance', '3', null, 'United Finance Limited has published a financial statement from the fiscal year 2072/73.', '2016-11-10 15:00:41', '1');
INSERT INTO `tbl_announcement` VALUES ('5', ' Swabalamban Laghubitta Bikas Bank Limited has published its provisional financial statement from the first quarter of the fiscal year 2073/74.', '3', null, '\r\nSwabalamban Laghubitta Bikas Bank Limited has published its provisional financial statement from the first quarter of the fiscal year 2073/74.', '2016-11-10 15:00:58', '1');
INSERT INTO `tbl_announcement` VALUES ('6', ' Jyoti Bikas Bank Limited has published its provisional financial statement from the first quarter of the fiscal year 2073/74.', '3', null, '\r\nJyoti Bikas Bank Limited has published its provisional financial statement from the first quarter of the fiscal year 2073/74.', '2016-11-10 15:01:08', '1');
INSERT INTO `tbl_announcement` VALUES ('7', 'Guheshwori Merchant Banking And Finance Limited is going to close the issue and sale of its 2:1 ordinary right share to its shareholders from today (Kartik 25, 2073-after banking hours).', '2', null, 'Guheshwori Merchant Banking And Finance Limited is going to close the issue and sale of its 2:1 ordinary right share to its shareholders from today (Kartik 25, 2073-after banking hours).', '2016-11-10 15:01:21', '1');
INSERT INTO `tbl_announcement` VALUES ('8', 'First Microfinance Development Bank Limited urge its shareholders to provide DMAT account to distribute 15% bonus share.', '2', null, 'First Microfinance Development Bank Limited urge its shareholders to provide DMAT account to distribute 15% bonus share.', '2016-11-10 15:01:50', '1');
INSERT INTO `tbl_announcement` VALUES ('9', 'Sunrise Bank Limited has published details as per the information right Act 2064 clause No.5 subclause No.3.', '1', null, 'Sunrise Bank Limited has published details as per the information right Act 2064 clause No.5 subclause No.3.', '2016-11-10 15:02:07', '1');
INSERT INTO `tbl_announcement` VALUES ('10', ' Sanima Bank Limited has publish', '1', null, '\r\nSanima Bank Limited has publish', '2016-11-10 15:02:31', '1');
INSERT INTO `tbl_announcement` VALUES ('11', 'published a financial statement from the fiscal year 2072/73.', '1', null, 'published a financial statement from the fiscal year 2072/73.', '2016-11-10 15:02:58', '2');
