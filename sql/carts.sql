/*
Navicat MySQL Data Transfer

Source Server         : 1611-666
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shijianfeishi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-21 08:56:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `carts`
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `cartid` int(255) NOT NULL AUTO_INCREMENT,
  `gid` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `num` int(255) DEFAULT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES ('86', '48', '', '7');
INSERT INTO `carts` VALUES ('87', '22', '', '7');
INSERT INTO `carts` VALUES ('88', '1', '', '4');
INSERT INTO `carts` VALUES ('89', '4', '', '11');
