/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 80012
Source Host           : localhost:3306
Source Database       : db_shop

Target Server Type    : MYSQL
Target Server Version : 80012
File Encoding         : 65001

Date: 2021-04-12 22:41:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `detail_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(10) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', 'Men\'s Wrist Watch', '280.00', 'Pm8.html', 'images/3.jpg', '5', '278.00');
INSERT INTO `product` VALUES ('3', 'Women\'s Wrist Watch', '275.00', 'Pm7.html', 'images/woman3.jpg', '5', '253.00');
INSERT INTO `product` VALUES ('4', 'Women\'s Wrist Watch', '230.00', 'Pm6.html', 'images/woman1.jpg', '5', '200.00');
INSERT INTO `product` VALUES ('6', 'Men\'s Wrist Watch', '220.00', 'Pm1.html', 'images/FTW4019_6.jfif', '5', '190.00');
INSERT INTO `product` VALUES ('7', 'Men\'s Wrist Watch', '260.00', 'Pm2.html', 'images/man2.jpg', '5', '260.00');
INSERT INTO `product` VALUES ('8', 'Men\'s Wrist Watch', '170.00', 'Pm3.html', 'images/man3.jpg', '5', '169.00');
INSERT INTO `product` VALUES ('9', 'Men\'s Wrist Watch', '180.00', 'Pm4.html', 'images/1.jpg', '3', '179.00');
INSERT INTO `product` VALUES ('10', 'Men\'s Wrist Watch', '140.00', 'Pm5.html', 'images/man5.jpg', '4', '140.00');
INSERT INTO `product` VALUES ('11', 'Men\'s Wrist Watch', '300.00', 'Pm6.html', 'images/man6.jpg', '5', '298.00');
INSERT INTO `product` VALUES ('12', 'Men\'s Wrist Watch', '180.00', 'Pm7.html', 'images/man7.JPG', '5', '170.00');
