/*
Navicat MySQL Data Transfer

Source Server         : 1611-666
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shijianfeishi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-19 11:22:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cartid` int(255) NOT NULL DEFAULT '0',
  `cartnum` varchar(255) DEFAULT NULL,
  `cartmsg` varchar(255) DEFAULT NULL,
  `cartprice` varchar(255) DEFAULT NULL,
  `cartimg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '12', '', '11', '');
INSERT INTO `cart` VALUES ('2', '2', '3', '33', '11');
INSERT INTO `cart` VALUES ('3', '1', '1', '11', null);
INSERT INTO `cart` VALUES ('4', '1', null, '434', null);
INSERT INTO `cart` VALUES ('11', '111', '11', '11', '11');
