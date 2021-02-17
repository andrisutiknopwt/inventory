/*
Navicat MySQL Data Transfer

Source Server         : andri
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-02-17 09:11:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('4', '2021-02-05-015655', 'App\\Database\\Migrations\\User', 'default', 'App', '1613376097', '1');
INSERT INTO `migrations` VALUES ('5', '2021-02-05-020615', 'App\\Database\\Migrations\\UserMenu', 'default', 'App', '1613376097', '1');
INSERT INTO `migrations` VALUES ('6', '2021-02-05-021036', 'App\\Database\\Migrations\\UserAccess', 'default', 'App', '1613376097', '1');
INSERT INTO `migrations` VALUES ('7', '2021-02-05-021254', 'App\\Database\\Migrations\\UserLevel', 'default', 'App', '1613376097', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(2) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'joko   susanto', 'joko', '123', '1', '', '0', null, null);
INSERT INTO `users` VALUES ('2', 'john wick', 'john', '124', '3', '', '0', null, null);
INSERT INTO `users` VALUES ('4', 'ADA', 'ADA', '1234', '2', '', '0', null, null);
INSERT INTO `users` VALUES ('7', 'nama', 'nama', '123', '3', '', '0', null, null);

-- ----------------------------
-- Table structure for `user_access`
-- ----------------------------
DROP TABLE IF EXISTS `user_access`;
CREATE TABLE `user_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `urut` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_access
-- ----------------------------

-- ----------------------------
-- Table structure for `user_level`
-- ----------------------------
DROP TABLE IF EXISTS `user_level`;
CREATE TABLE `user_level` (
  `id_level` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_level
-- ----------------------------
INSERT INTO `user_level` VALUES ('1', 'Administrator', '1');
INSERT INTO `user_level` VALUES ('2', 'General Manager', '1');
INSERT INTO `user_level` VALUES ('3', 'Manager', '1');
INSERT INTO `user_level` VALUES ('4', 'Staf', '1');

-- ----------------------------
-- Table structure for `user_menu`
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_active` varchar(50) NOT NULL,
  `is_active_sub` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
