/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-10-03 10:04:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_login_date` datetime DEFAULT NULL,
  `access_level` int(2) DEFAULT NULL,
  `pw_reset_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `del_flag` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'admin', 'b37cd570449d78aa4f0a065f306501a935b4da46ff6701f4451c63d0761f92df94a434c5bffaef0cae3cb03e5a3ca8be5b30806cd82106f8c88df8048042b27fn4j2+clyYhw0rlrwo9+Nvc8UfiPf0A==', '', 'admin', 'jobportalnepal@gmail.com', null, null, '38Yuw3Z9jJ1912RR', '', '0');
INSERT INTO `tbl_admin` VALUES ('2', 'admin', '4a871c74bcd5af7e004ef4ff221fd9e4bcd7710d277aef0b95fa339a5cb031f09128a6457513ec068a0ad5b86fc609cb93544fe6349a5321b4eba0f85f1b0eadimo1EuSle55OIkXvwmA4+o0BxiuAVA==', '', 'admin', 'admin@admin.com', '0000-00-00 00:00:00', null, '33d1338e01ed47bc487080fb883266a0', '', '0');
