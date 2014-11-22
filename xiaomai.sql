/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : xiaomai

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2014-11-05 10:37:38
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ad`
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sanerwu` varchar(1000) DEFAULT NULL,
  `zimu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('1', '广告位300*250', '测试滚动字幕修改功能');

-- ----------------------------
-- Table structure for `help`
-- ----------------------------
DROP TABLE IF EXISTS `help`;
CREATE TABLE `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `pv` int(11) DEFAULT NULL,
  `jianjie` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of help
-- ----------------------------
INSERT INTO `help` VALUES ('2', '我是第二条标题', '我是第二条内容', '2222', '我是第二条简介', '2014-10-16 10:38:00', '/up');
INSERT INTO `help` VALUES ('1', '我是第一条标题', '我是第一条内容', '1111', '我是第一条简介', '2014-10-08 10:38:12', '/up');

-- ----------------------------
-- Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '盾灵网络', 'http://www.dunling.com/');
INSERT INTO `link` VALUES ('2', '找看点', 'http://www.zhaokandian.com/');
INSERT INTO `link` VALUES ('3', '唠唠堂', 'http://www.laolaotang.com/');

-- ----------------------------
-- Table structure for `mai`
-- ----------------------------
DROP TABLE IF EXISTS `mai`;
CREATE TABLE `mai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `content` varchar(11) DEFAULT NULL,
  `zhichi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of mai
-- ----------------------------
INSERT INTO `mai` VALUES ('1', '/up/bz.jpg', '我是第一条', '2014-10-13 09:29:47', 'http://www.zhaokandian.com/', '我是第一条的内容', 'win7,win8.winxp');
INSERT INTO `mai` VALUES ('2', '/up/php.jpg', '我是第二条', '2014-10-13 09:32:21', 'http://www.biadu.com/', '我是第二挑的内容', 'win9,win10,win11');
INSERT INTO `mai` VALUES ('3', '/up/sql.jpg', '我是第三条', '2014-10-13 09:39:23', 'http://www.sina.com.cn', '我是第三条的内容', 'win12.win13.win14');

-- ----------------------------
-- Table structure for `maixiao`
-- ----------------------------
DROP TABLE IF EXISTS `maixiao`;
CREATE TABLE `maixiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of maixiao
-- ----------------------------
INSERT INTO `maixiao` VALUES ('1', '21232F297A57A5A743894A0E4A801FC3', '21232f297a57a5a743894a0e4a801fc3', '站长');

-- ----------------------------
-- Table structure for `new`
-- ----------------------------
DROP TABLE IF EXISTS `new`;
CREATE TABLE `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `jianjie` varchar(255) DEFAULT NULL,
  `pv` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of new
-- ----------------------------
INSERT INTO `new` VALUES ('1', '最新消息一', '最新消息内容一', '2014-10-13 11:27:13', null, '9');
INSERT INTO `new` VALUES ('2', '最新消息二', '最新消息内容二', '2014-10-13 11:27:33', null, '6');
INSERT INTO `new` VALUES ('3', '最新消息三', '最新消息内容三', '2014-10-13 11:28:03', null, '5');

-- ----------------------------
-- Table structure for `soft`
-- ----------------------------
DROP TABLE IF EXISTS `soft`;
CREATE TABLE `soft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `pv` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `zhichi` varchar(255) DEFAULT NULL,
  `content` longtext,
  `banben` varchar(255) DEFAULT NULL,
  `daxiao` varchar(255) DEFAULT NULL,
  `jianjie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of soft
-- ----------------------------
INSERT INTO `soft` VALUES ('34', '小麦官网', '2014-10-25 16:50:34', '/up/image/20141025/20141025164942_26817.png', '3', '/up/file/20141025/20141025165007_95275.rar', 'win', '<span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span><span>简介</span>', 'v1.0', '1.3MB', null);

-- ----------------------------
-- Table structure for `win`
-- ----------------------------
DROP TABLE IF EXISTS `win`;
CREATE TABLE `win` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL,
  `cnzz` varchar(1000) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `banquan` varchar(255) DEFAULT NULL,
  `lianxi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of win
-- ----------------------------
INSERT INTO `win` VALUES ('1', 'http://www.xmsql.com/', '小麦官网,php源码下载,小麦源码下载,小麦下载,小麦PHP开发,小麦MYSQL,小麦虚拟主机,PHP定制', '小麦官网,php源码下载,小麦源码下载,小麦下载,小麦PHP开发,小麦MYSQL,小麦虚拟主机,PHP定制', '/images/logo.jpg', '闽ICP备10205599号', '这里是统计代码', '小麦官网', 'Copyright  2014 小麦网络 Allright Reserved.', 'QQ:693974786');
