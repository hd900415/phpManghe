/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : mh

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2021-10-11 00:15:19
*/

SET FOREIGN_KEY_CHECKS=0;

INSERT INTO `box_auth_rule` (`type`, `pid`, `name`, `title`, `icon`, `url`, `condition`, `remark`, `ismenu`, `menutype`, `extend`, `createtime`, `updatetime`, `weigh`, `status`) VALUES ('file', '0', 'virtuial', '开盒假数据', 'fa fa-circle-o\r', '', '', '', '1', NULL, '', '1633850736', '1633850736', '0', 'normal');

-- ----------------------------
-- Table structure for box_virtuial
-- ----------------------------
DROP TABLE IF EXISTS `box_virtuial`;
CREATE TABLE `box_virtuial` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `image` varchar(255) DEFAULT NULL COMMENT '商品图',
  `price` decimal(10,2) DEFAULT NULL COMMENT '价格',
  `add_time` int(11) DEFAULT NULL COMMENT '开盒时间',
  `goods_id` int(11) DEFAULT NULL COMMENT '商品id',
  `goods_name` varchar(50) DEFAULT NULL COMMENT '商品名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='开盒假数据';
update box_virtuial set avatar = '/default.png';

alter table `box_box` add column `sort` int(11) unsigned DEFAULT '0' COMMENT '自定义排序';
alter table `box_box` add column `switch` tinyint unsigned DEFAULT '1' COMMENT '显示隐藏';

CREATE TABLE `box_uv` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `ip` varchar(50) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

