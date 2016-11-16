/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : db_share_app

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2016-11-16 12:22:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_stock
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stock`;
CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) DEFAULT NULL,
  `no_of_transactions` int(11) DEFAULT NULL,
  `max_price` decimal(10,2) DEFAULT NULL,
  `min_price` decimal(10,2) DEFAULT NULL,
  `closing_price` decimal(10,2) DEFAULT NULL,
  `traded_shares` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `previous_closing` varchar(255) DEFAULT NULL,
  `difference` varchar(255) DEFAULT NULL,
  `added_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_stock
-- ----------------------------
INSERT INTO `tbl_stock` VALUES ('1', 'Agriculture Development Bank Limited', '41', '612.00', '590.00', '596.00', '7995', '4812885', '600', '-4', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('2', 'Alpine Development Bank Limited', '4', '418.00', '410.00', '411.00', '556', '228655', '410', '1', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('3', 'Api Power Company Ltd.', '21', '590.00', '563.00', '569.00', '573', '330221', '578', '-9', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('4', 'Arun Valley Hydropower Development Co. Ltd.', '12', '298.00', '293.00', '298.00', '2655', '783348', '296', '2', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('5', 'Asian Life Insurance Co. Limited', '9', '1743.00', '1716.00', '1716.00', '1746', '3023149', '1738', '-22', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('6', 'Bank of Kathmandu Lumbini Ltd.', '257', '710.00', '692.00', '698.00', '66240', '46245204', '698', '0', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('7', 'Barun Hydropower Co. Ltd.', '11', '382.00', '360.00', '365.00', '410', '152160', '375', '-10', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('8', 'Bhargav Bikash Bank Ltd.', '1', '545.00', '545.00', '545.00', '100', '54500', '545', '0', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('9', 'Bottlers Nepal (Balaju) Limited', '1', '1660.00', '1660.00', '1660.00', '100', '166000', '1660', '0', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('10', 'Bottlers Nepal (Terai) Limited', '4', '5175.00', '5000.00', '5000.00', '150', '754910', '5280', '-280', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('11', 'Butwal Power Company Limited', '7', '715.00', '683.00', '683.00', '2011', '1420701', '718', '-35', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('12', 'Century Commercial Bank Ltd.', '60', '430.00', '418.00', '421.00', '9731', '4119582', '422', '-1', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('13', 'Chhimek Laghubitta Bikas Bank Limited', '20', '2050.00', '2011.00', '2026.00', '2004', '4087025', '2050', '-24', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('14', 'Chilime Hydropower Company Limited', '61', '1209.00', '1182.00', '1195.00', '8187', '9798072', '1198', '-3', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('15', 'Citizen Bank International Limited', '96', '535.00', '525.00', '525.00', '18050', '9570590', '528', '-3', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('16', 'Citizen Investment Trust', '9', '4595.00', '4500.00', '4511.00', '438', '1988775', '4518', '-7', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('17', 'Civil Bank Ltd', '293', '324.00', '321.00', '323.00', '96574', '31130191', '321', '2', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('18', 'Cosmos Development Bank Ltd.', '1', '460.00', '460.00', '460.00', '250', '115000', '462', '-2', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('19', 'Deprosc Development Bank Limited', '13', '2764.00', '2705.00', '2705.00', '1623', '4448980', '2710', '-5', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('20', 'Deva Bikas Bank Limited', '13', '352.00', '346.00', '350.00', '2200', '768382', '351', '-1', '2016-11-16 12:17:54');
INSERT INTO `tbl_stock` VALUES ('21', 'Everest Bank Limited', '302', '3725.00', '3695.00', '3706.00', '46810', '173458190', '3690', '16', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('22', 'Everest Insurance Co. Ltd.', '3', '1970.00', '1955.00', '1955.00', '600', '1176000', '2002', '-47', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('23', 'Excel Development Bank Ltd.', '7', '675.00', '668.00', '675.00', '1971', '1325169', '665', '10', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('24', 'Garima Bikas Bank Limited', '11', '430.00', '398.00', '430.00', '1507', '646978', '391', '39', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('25', 'Global IME Bank Limited', '65', '488.00', '483.00', '485.00', '11394', '5534719', '487', '-2', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('26', 'Global IME Samunnat Scheme-1', '2', '11.45', '11.41', '11.41', '18986', '217009.98', '11.45', '-0.04', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('27', 'Goodwill Finance Co. Ltd.', '1', '380.00', '380.00', '380.00', '500', '190000', '377', '3', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('28', 'Guheshowori Merchant Bank & Finance Co. Ltd.', '4', '300.00', '295.00', '295.00', '1550', '461100', '300', '-5', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('29', 'Gurans Life Insurance Company Ltd.', '15', '895.00', '886.00', '890.00', '2677', '2384300', '897', '-7', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('30', 'Hamro Bikas Bank Ltd.', '4', '520.00', '510.00', '520.00', '867', '450340', '510', '10', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('31', 'Himalayan Bank Limited', '16', '1370.00', '1330.00', '1340.00', '1307', '1758130', '1355', '-15', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('32', 'Himalayan General Insurance Co. Ltd', '12', '1855.00', '1820.00', '1830.00', '1060', '1953841', '1845', '-15', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('33', 'ICFC Finance Limited', '8', '295.00', '291.00', '292.00', '763', '223462', '290', '2', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('34', 'ILFCO Microfinance Bittiya Sanstha Ltd.', '5', '900.00', '858.00', '858.00', '550', '481980', '900', '-42', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('35', 'Jalabidyut Lagani tatha Bikas Co. Ltd.', '224', '281.00', '272.00', '281.00', '43991', '12166152', '279', '2', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('36', 'Janaki Finance Ltd.', '10', '351.00', '347.00', '347.00', '3125', '1092950', '353', '-6', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('37', 'Janautthan Samudayic Laghubitta Bikas Bank Ltd.', '20', '2900.00', '2820.00', '2840.00', '200', '570080', '2868', '-28', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('38', 'Jebils Finance Ltd.', '3', '265.00', '265.00', '265.00', '1150', '304750', '270', '-5', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('39', 'Jyoti Bikas Bank Limited', '46', '387.00', '377.00', '381.00', '5083', '1941283', '384', '-3', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('40', 'Kabeli Bikas Bank Limited', '2', '605.00', '604.00', '605.00', '48', '29016', '613', '-8', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('41', 'Kailash Bikas Bank Ltd.', '20', '606.00', '603.00', '605.00', '2979', '1800446', '605', '0', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('42', 'Kalika Microcredit Development Bank Ltd.', '6', '1887.00', '1820.00', '1820.00', '250', '460610', '1850', '-30', '2016-11-16 12:17:55');
INSERT INTO `tbl_stock` VALUES ('43', 'Kamana Bikas Bank Limited', '18', '420.00', '414.00', '416.00', '2446', '1016101', '420', '-4', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('44', 'Kanchan Development Bank Limited', '6', '560.00', '540.00', '550.00', '2611', '1440940', '559', '-9', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('45', 'Kankai Bikas Bank Ltd.', '4', '650.00', '637.00', '637.00', '850', '546900', '640', '-3', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('46', 'Kisan Microfinance Bittiya Sanstha Ltd.', '37', '4077.00', '3771.00', '4000.00', '620', '2455680', '3845', '155', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('47', 'Kumari Bank Limited', '252', '618.00', '608.00', '610.00', '54607', '33391312', '605', '5', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('48', 'Lalitpur Finance Ltd.', '2', '222.00', '220.00', '220.00', '400', '88600', '225', '-5', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('49', 'Laxmi Bank Limited', '45', '832.00', '825.00', '825.00', '7412', '6131363', '825', '0', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('50', 'Laxmi Laghubitta Bittiya Sanstha Ltd.', '8', '1700.00', '1638.00', '1638.00', '428', '719940', '1670', '-32', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('51', 'Laxmi Value Fund-1', '1', '12.85', '12.85', '12.85', '581', '7465.85', '12.6', '0.25', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('52', 'Life Insurance Co. Nepal', '7', '3235.00', '3150.00', '3200.00', '1112', '3533216', '3218', '-18', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('53', 'Lumbini Finance Ltd.', '5', '415.00', '410.00', '415.00', '1616', '667324', '413', '2', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('54', 'Lumbini General Insurance Co. Ltd.', '61', '1800.00', '1760.00', '1760.00', '11756', '20811475', '1760', '0', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('55', 'Machhapuchhre Bank Limited', '93', '555.00', '521.00', '546.00', '21495', '11715798', '548', '-2', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('56', 'Mahila Sahayatra Microfinance Bittiya Sanstha Ltd.', '26', '1169.00', '1053.00', '1053.00', '650', '709940', '1170', '-117', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('57', 'Manjushree Financial Institution Ltd.', '7', '420.00', '416.00', '420.00', '850', '356180', '415', '5', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('58', 'Mega Bank Nepal Ltd.', '58', '500.00', '493.00', '493.00', '20196', '10004184', '502', '-9', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('59', 'Mirmire Microfinance Development Bank Ltd.', '4', '3180.00', '3121.00', '3121.00', '120', '375230', '3213', '-92', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('60', 'Mission Development Bank Ltd.', '1', '623.00', '623.00', '623.00', '254', '158242', '635', '-12', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('61', 'Miteri Development Bank Limited', '2', '600.00', '590.00', '590.00', '93', '55070', '600', '-10', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('62', 'Muktinath Bikas Bank Ltd.', '40', '990.00', '977.00', '983.00', '5532', '5443594', '995', '-12', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('63', 'Nabil Balance Fund 1', '5', '21.80', '21.10', '21.80', '10934', '234177.7', '21.52', '0.28', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('64', 'Nabil Bank Limited', '48', '1725.00', '1710.00', '1716.00', '4705', '8079617', '1722', '-6', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('65', 'NABIL Bank Limited Promotor Share', '11', '1244.00', '1231.00', '1231.00', '2927', '3613414', '1240', '-9', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('66', 'NagBeli LaghuBitta Bikas Bank Ltd.', '27', '5000.00', '4880.00', '4980.00', '1084', '5364305', '4794', '186', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('67', 'National Hydro Power Company Limited', '17', '167.00', '162.00', '163.00', '13680', '2247650', '166', '-3', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('68', 'National Life Insurance Co. Ltd.', '67', '3380.00', '3320.00', '3369.00', '11704', '39221379', '3310', '59', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('69', 'Naya Nepal Laghubitta Bikas Bank Ltd.', '3', '1373.00', '1372.00', '1372.00', '139', '190757', '1371', '1', '2016-11-16 12:17:56');
INSERT INTO `tbl_stock` VALUES ('70', 'NB Insurance Co. Ltd.', '2', '176.00', '173.00', '176.00', '20', '3490', '170', '6', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('71', 'Neco Insurance Co. Ltd.', '25', '2205.00', '2180.00', '2180.00', '3940', '8648700', '2185', '-5', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('72', 'Nepal Bangladesh Bank Limited', '103', '830.00', '810.00', '810.00', '12093', '9851136', '818', '-8', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('73', 'Nepal Bank Limited', '130', '508.00', '482.00', '490.00', '40639', '20215137', '494', '-4', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('74', 'Nepal Community Development Bank Ltd.', '1', '404.00', '404.00', '404.00', '20', '8080', '397', '7', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('75', 'Nepal Doorsanchar Comapany Limited', '19', '693.00', '676.00', '685.00', '3534', '2414632', '676', '9', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('76', 'Nepal Grameen Bikas Bank Ltd.', '13', '695.00', '660.00', '693.00', '1560', '1041280', '695', '-2', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('77', 'Nepal Insurance Co. Ltd.', '8', '1216.00', '1192.00', '1192.00', '668', '800976', '1240', '-48', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('78', 'Nepal Investment Bank Limited', '101', '785.00', '772.00', '775.00', '16965', '13212541', '774', '1', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('79', 'Nepal Investment Bank Ltd. Promoter Share', '4', '681.00', '675.00', '675.00', '550', '373550', '668', '7', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('80', 'Nepal Life Insurance Co. Ltd.', '21', '3731.00', '3700.00', '3700.00', '3421', '12740206', '3700', '0', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('81', 'Nepal SBI Bank Limited', '30', '1680.00', '1658.00', '1665.00', '3340', '5556035', '1670', '-5', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('82', 'Nerude Laghubita Bikas Bank Limited', '11', '1820.00', '1810.00', '1820.00', '2177', '3951640', '1809', '11', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('83', 'Ngadi Group Power Ltd.', '49', '341.00', '335.00', '336.00', '1645', '555751', '344', '-8', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('84', 'NIBL Samriddhi Fund 1', '3', '12.51', '12.51', '12.51', '15000', '187650', '12.75', '-0.24', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('85', 'NIC Asia Bank Ltd.', '92', '592.00', '570.00', '570.00', '15963', '9282123', '586', '-16', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('86', 'Nirdhan Utthan Bank Limited', '17', '1570.00', '1500.00', '1540.00', '1172', '1790490', '1500', '40', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('87', 'NLG Insurance Company Ltd.', '21', '2115.00', '2100.00', '2101.00', '3829', '8070035', '2110', '-9', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('88', 'NMB Microfinance Bittiya Sanstha Ltd.', '8', '2065.00', '2060.00', '2060.00', '165', '340005', '2020', '40', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('89', 'NMB Bank Limited', '114', '710.00', '699.00', '707.00', '29778', '20958219', '699', '8', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('90', 'NMB Sulav Investment Fund-1', '4', '13.53', '13.00', '13.30', '9810', '129775', '13', '0.3', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('91', 'Oriental Hotels Limited', '3', '485.00', '481.00', '485.00', '962', '466350', '490', '-5', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('92', 'Prabhu Insurance Ltd.', '28', '1500.00', '1466.00', '1470.00', '3001', '4430130', '1510', '-40', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('93', 'Premier Insurance Co. Ltd.', '6', '2240.00', '2190.00', '2215.00', '509', '1118260', '2230', '-15', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('94', 'Prime Commercial Bank Ltd.', '73', '609.00', '598.00', '600.00', '9017', '5438412', '600', '0', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('95', 'Prime Life Insurance Company Limited', '7', '2195.00', '2161.00', '2165.00', '661', '1439669', '2180', '-15', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('96', 'ProgressiveFinance Limited', '4', '229.00', '225.00', '225.00', '40010', '9002790', '225', '0', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('97', 'Prudential Insurance Co. Ltd.', '11', '1550.00', '1520.00', '1540.00', '1280', '1967540', '1535', '5', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('98', 'Purnima Bikas Bank Ltd.', '1', '473.00', '473.00', '473.00', '100', '47300', '464', '9', '2016-11-16 12:17:57');
INSERT INTO `tbl_stock` VALUES ('99', 'Raptibheri Bikas Bank Ltd.', '16', '493.00', '485.00', '486.00', '1787', '873350', '478', '8', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('100', 'Rastriya Beema Company Limited', '8', '13526.00', '12990.00', '13200.00', '610', '8066280', '13800', '-600', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('101', 'Rastriya Beema Company Limited Promoter Share', '3', '12505.00', '12500.00', '12500.00', '158', '1975500', '12726', '-226', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('102', 'Reliable Microfinance Bittiya Sanstha Ltd.', '52', '2050.00', '1950.00', '1950.00', '886', '1768763', '2000', '-50', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('103', 'Reliance Lotus Finance Ltd.', '3', '314.00', '314.00', '314.00', '30', '9420', '314', '0', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('104', 'Ridi Hydropower Development Company Ltd.', '11', '267.00', '252.00', '257.00', '1850', '476724', '262', '-5', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('105', 'Rural Microfinance Development Centre Ltd.', '42', '780.00', '755.00', '760.00', '4435', '3409435', '779', '-19', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('106', 'Sagarmatha Finance Limited', '10', '527.00', '518.00', '521.00', '1608', '841994', '529', '-8', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('107', 'Sagarmatha Insurance Co. Ltd.', '2', '2210.00', '2205.00', '2210.00', '300', '662500', '2215', '-5', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('108', 'Sajha Bikas Bank Ltd.', '2', '290.00', '290.00', '290.00', '56', '16240', '294', '-4', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('109', 'Sana Kisan Bikas Bank Ltd', '35', '1667.00', '1639.00', '1644.00', '5214', '8583565', '1635', '9', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('110', 'Sanima Bank Limited', '131', '607.00', '600.00', '601.00', '23608', '14255124', '605', '-4', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('111', 'Sanima Mai Hydropower Ltd.', '29', '930.00', '918.00', '918.00', '3389', '3126386', '930', '-12', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('112', 'Saptakoshi Development Bank Ltd.', '1', '494.00', '494.00', '494.00', '10', '4940', '485', '9', '2016-11-16 12:17:58');
INSERT INTO `tbl_stock` VALUES ('113', 'Seti Finance Limited', '4', '250.00', '250.00', '250.00', '600', '150000', '255', '-5', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('114', 'Sewa Bikas Bank Limited', '13', '345.00', '339.00', '339.00', '3100', '1061800', '345', '-6', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('115', 'Shangrila Development Bank Ltd.', '11', '450.00', '445.00', '450.00', '2829', '1271265', '450', '0', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('116', 'Shikhar Insurance Co. Ltd.', '69', '4145.00', '4020.00', '4065.00', '8055', '32788804', '4050', '15', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('117', 'Shine Resunga Development Bank Ltd.', '14', '586.00', '573.00', '586.00', '1512', '878346', '591', '-5', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('118', 'Siddhartha Bank Limited', '139', '1090.00', '1065.00', '1066.00', '28207', '30305815', '1075', '-9', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('119', 'Siddhartha Development Bank Ltd.', '29', '485.00', '477.00', '478.00', '7889', '3786311', '481', '-3', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('120', 'Siddhartha Equity Orineted Scheme', '1', '12.65', '12.65', '12.65', '12000', '151800', '12.75', '-0.1', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('121', 'Siddhartha Insurance Ltd.', '25', '2560.00', '2510.00', '2510.00', '3142', '7958335', '2508', '2', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('122', 'Sindhu Bikash Bank Ltd', '3', '435.00', '427.00', '427.00', '345', '147850', '432', '-5', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('123', 'Soaltee Hotel Limited', '11', '422.00', '412.00', '412.00', '4648', '1927649', '420', '-8', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('124', 'Standard Chartered Bank Limited', '69', '3215.00', '3165.00', '3170.00', '6987', '22279197', '3213', '-43', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('125', 'Sunrise Bank Limited', '54', '550.00', '535.00', '540.00', '8574', '4645584', '540', '0', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('126', 'Surya Life Insurance Company Limited', '11', '892.00', '880.00', '880.00', '1046', '926430', '875', '5', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('127', 'Swabalamban Bikas Bank Limited', '5', '2393.00', '2375.00', '2385.00', '743', '1775875', '2390', '-5', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('128', 'Synergy Finance Ltd.', '2', '173.00', '172.00', '173.00', '350', '60500', '170', '3', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('129', 'Taragaon Regency Hotel Limited', '5', '255.00', '252.00', '255.00', '2000', '507500', '252', '3', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('130', 'Tinau Development Bank Limited', '4', '482.00', '473.00', '482.00', '362', '173890', '490', '-8', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('131', 'Tourism Development Bank Limited', '5', '526.00', '516.00', '522.00', '790', '408900', '506', '16', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('132', 'Uniliver Nepal Limited', '3', '30100.00', '30100.00', '30100.00', '100', '3010000', '29655', '445', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('133', 'Union Finance Co. Ltd.', '3', '190.00', '187.00', '187.00', '148', '27940', '190', '-3', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('134', 'United Insurance Co. (Nepal) Ltd.', '32', '1387.00', '1360.00', '1360.00', '5075', '6931285', '1370', '-10', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('135', 'Vibor Society Development Bank Limited', '111', '227.00', '220.00', '223.00', '29862', '6644488', '224', '-1', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('136', 'Vijaya laghubitta Bittiya Sanstha Ltd.', '14', '1210.00', '1174.00', '1174.00', '1350', '1599620', '1195', '-21', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('137', 'Western Development Bank Limited', '5', '340.00', '331.00', '340.00', '1425', '478121', '330', '10', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('138', 'Womi Microfinance Bittiya Sanstha Ltd.', '3', '1850.00', '1850.00', '1850.00', '36', '66600', '1850', '0', '2016-11-16 12:17:59');
INSERT INTO `tbl_stock` VALUES ('139', 'Yeti Development Bank Limited', '16', '344.00', '335.00', '335.00', '1703', '580299', '338', '-3', '2016-11-16 12:18:00');
