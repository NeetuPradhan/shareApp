/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-15 16:29:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_news
-- ----------------------------
DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `del_flag` int(11) DEFAULT '0',
  `status` int(1) DEFAULT NULL,
  `display_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_news
-- ----------------------------
INSERT INTO `tbl_news` VALUES ('1', 'New1', 'news 1', '2016-11-01 16:39:03', '2016-11-01 16:41:12', '0', '1', '2');
INSERT INTO `tbl_news` VALUES ('2', 'News2', 'New2', '2016-11-01 16:41:33', null, '0', '1', '1');
INSERT INTO `tbl_news` VALUES ('3', 'News3', 'News3', '2016-11-03 06:14:20', null, '0', '1', '3');
INSERT INTO `tbl_news` VALUES ('4', 'Supermoon delights world’s star gazers in full moon, eclipse combination', 'Google moves to restrict ads on fake news sites', '2016-11-01 16:39:03', '2016-11-01 16:41:12', '0', '1', '4');
INSERT INTO `tbl_news` VALUES ('5', 'Chaudhary, Pandey co-convenors of ICC advisory committee to resolve Nepal cricket crisis', 'Russian President Vladimir Putin spoke with US President-elect Donald Trump on Monday and agreed to work towards \"constructive cooperation\", the Krem...', '2016-11-01 16:41:33', null, '0', '1', '5');
INSERT INTO `tbl_news` VALUES ('6', 'PM Dahal pays tribute to late Pandey', 'Prime Minister and CPN Maoist Centre Chairman Pushpa Kamal Dahal today paid tribute to lawmaker Bhakti Prasad Pandey who died on Monday....', '2016-11-03 06:14:20', null, '0', '1', '6');
INSERT INTO `tbl_news` VALUES ('7', 'Chaudhary, Pandey co-convenors of ICC advisory committee to resolve Nepal cricket crisis', 'International Cricket Council\'s advisory committee on Tuesday appointed industrialist Binod Kumar Chaudhary and Cricket Association of Nepal\'s former ...', '2016-11-01 16:39:03', '2016-11-01 16:41:12', '0', '1', '7');
INSERT INTO `tbl_news` VALUES ('8', 'Property worth Rs 126,000 stolen from Kapan room', 'Property worth around Rs 126,000 was stolen from a rented room at Akasedhara, in Kapan of Budhanilka...', '2016-11-01 16:41:33', null, '0', '1', '8');
INSERT INTO `tbl_news` VALUES ('9', 'RPP, RPP-N to announce unification on November 21', 'Rastriya Prajatantra Party (RPP) and Rastriya Prajatantra Party-Nepal (RPP-N) have said that they would announce the unification between two parties o...', '2016-11-03 06:14:20', null, '0', '1', '9');
