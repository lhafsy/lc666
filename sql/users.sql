/*
Navicat MySQL Data Transfer

Source Server         : 1611-666
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : shijianfeishi

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-20 14:18:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(255) NOT NULL DEFAULT '0',
  `usersname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `userMask` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('0', '111', '111', null, null);
INSERT INTO `users` VALUES ('1', 'kinw', 'undefined', '', '');
INSERT INTO `users` VALUES ('2', 'tom', 'undefined', '', '');
INSERT INTO `users` VALUES ('3', 'Lily', 'undefined', '', '');
INSERT INTO `users` VALUES ('4', 'cat', 'undefined', '', '');
INSERT INTO `users` VALUES ('5', 'yy', 'undefined', '', '');
INSERT INTO `users` VALUES ('6', 'jjk', 'undefined', '', '');
