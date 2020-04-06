/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : paysite

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 28/02/2020 14:16:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for options
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options`  (
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ret` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of options
-- ----------------------------
INSERT INTO `options` VALUES ('site_name', '收付站', NULL);
INSERT INTO `options` VALUES ('site_title', '最好的收款服务', NULL);
INSERT INTO `options` VALUES ('site_logo', '/assets/img/logo/logo.png', NULL);
INSERT INTO `options` VALUES ('site_url', 'http://paysite.xyz', NULL);
INSERT INTO `options` VALUES ('smtp', '{\"\"}', NULL);
INSERT INTO `options` VALUES ('phone', '40088866', NULL);
INSERT INTO `options` VALUES ('telegram_token', '1034971964:AAGEFpTgSpStZOZGpH2_T_6_1wzJ8AVeDZg', NULL);

-- ----------------------------
-- Table structure for paylogs
-- ----------------------------
DROP TABLE IF EXISTS `paylogs`;
CREATE TABLE `paylogs`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `total` decimal(12, 2) NOT NULL,
  `fee` decimal(11, 2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `tradeno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `datetime` bigint(20) NOT NULL DEFAULT 0,
  `trade_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gate_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pay_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `plat_cur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `rel_amount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `receipt_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `refunds_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `payment_tok` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `domain` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tradeno1`(`tradeno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 452 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paylogs
-- ----------------------------
INSERT INTO `paylogs` VALUES (424, 0, 562.00, NULL, 1, '15822559473792708', 1582255948, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `paylogs` VALUES (425, 0, 500.00, NULL, 1, '15822673799949733', 1582267380, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `paylogs` VALUES (450, 0, 500.00, 16.00, 0, '15827873263128619', 1582787343, '支付', 'bitcoin', 'bitcoin', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `paylogs` VALUES (451, 0, 500.00, 13.50, 1, '15827877139687298', 1582787715, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);

-- ----------------------------
-- Table structure for payment
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `label` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sprovider_text` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sprovider` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gateway_text` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gateway` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fee_rate` decimal(11, 2) UNSIGNED DEFAULT NULL,
  `single_fee` decimal(11, 2) DEFAULT NULL,
  `min_fee` decimal(11, 2) DEFAULT 0.00,
  `min_charge` decimal(11, 2) DEFAULT NULL,
  `max_charge` decimal(11, 2) DEFAULT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT 0,
  `ico_pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `gateway`(`gateway`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of payment
-- ----------------------------
INSERT INTO `payment` VALUES (1, '人民币大额', '天宏', 'th', '支付宝', 'thalipay', 2.50, 1.00, 5.00, 500.00, 20000.00, 1, '/template/default/img/pay-alipay.png');
INSERT INTO `payment` VALUES (2, '人民币大额', '天宏', 'th', '微信', 'thtenpay', 2.50, 0.00, 0.00, 500.00, 10000.00, 1, '/template/default/img/pay-wechat.png');
INSERT INTO `payment` VALUES (3, '人民币大额', '天宏', 'th', '网银', 'chinabank', 2.50, 0.00, 0.00, 100.00, 50000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `payment` VALUES (4, '备用支付通道', 'pay9', 'pay9', '支付宝', 'alipay', 2.30, 0.00, 3.00, 300.00, 10000.00, 1, '/template/default/img/pay-alipay.png');
INSERT INTO `payment` VALUES (5, '备用支付通道', 'pay9', 'pay9', '微信支付', 'tenpay', 2.30, 0.00, 3.00, 300.00, 10000.00, 1, '/template/default/img/pay-wechat.png');
INSERT INTO `payment` VALUES (6, '备用支付通道', 'pay9', 'pay9', '云闪付', 'yunshoufu', 2.30, 0.00, 3.00, 300.00, 30000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `payment` VALUES (7, '备用支付通道2', 'payssion', 'payssion', '网银', 'bank', 2.90, 1.00, 5.00, 100.00, 20000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `payment` VALUES (8, '加密货币', '比特币', 'bitcoin', '比特币', 'bitcoin', 3.00, 1.00, 3.00, 500.00, 50000.00, 1, '/template/default/img/pay-bitcoin.png');

-- ----------------------------
-- Table structure for site
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contact` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `sub_domain` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  `domain` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  `createtime` int(11) DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT 0,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `site_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `js_code` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `grade` tinyint(1) UNSIGNED DEFAULT 0,
  `foreign` tinyint(1) UNSIGNED DEFAULT 0,
  `payment` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `bank` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `telegram` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `notify` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `balance` decimal(12, 2) DEFAULT NULL COMMENT '账户余额',
  `withdraw` decimal(12, 2) DEFAULT NULL COMMENT '提现金额',
  `his_amout` decimal(12, 2) DEFAULT NULL COMMENT '历史交易',
  `fee_amout` decimal(12, 2) DEFAULT NULL COMMENT '总费用',
  `pay_num` int(11) UNSIGNED DEFAULT 0 COMMENT '成功付款笔数',
  `get_num` int(11) UNSIGNED DEFAULT 0 COMMENT '成功提现笔数',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `sub_domain`(`sub_domain`) USING BTREE,
  UNIQUE INDEX `username`(`name`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'QQ：78590495544\n微信：18434354504', 'x.paysite.xyz', 'paysite.xyz', 'https://bpic.588ku.com/element_origin_min_pic/19/07/30/45b55a2c975d5e5ee1609bfeb6b8f906.jpg', 'http://www.baidu.com', 1582027800, 1, 'admin@winskyx.com', '1. wfjklj;   \n2. 327489;   \n3. fdj37a;', '蚂蚁科技', '        },function (ret) {\n            lightyear.loading(\'show\');  // 显示\n            setTimeout(function() {\n                lightyear.loading(\'hide\');  // 隐藏\n                lightyear.notify(ret.msg+\'，页面即将刷新页面~\', \'success\', 2000);\n                setTimeout(function() {\n                    window.location.reload();\n                }, 1500);\n            }, 1500);', 0, 1, 'th,pay9,payssion', '{\"deposit\":\"ABC\",\"branch\":\"\\u897f\\u4e3d\\u652f\\u884c\",\"account\":\"73285789435794456\",\"address\":\"\\u897f\\u4e3d\"}', '1022421443', 'email', 953.50, 562.00, 33043.00, 1091.50, 46, 3);

-- ----------------------------
-- Table structure for withdraw
-- ----------------------------
DROP TABLE IF EXISTS `withdraw`;
CREATE TABLE `withdraw`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` bigint(20) NOT NULL,
  `total` decimal(12, 2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `tradeno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `datetime` bigint(20) NOT NULL DEFAULT 0,
  `fee` int(11) UNSIGNED DEFAULT 0,
  `domain` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tradeno1`(`tradeno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 427 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of withdraw
-- ----------------------------
INSERT INTO `withdraw` VALUES (424, 0, 562.00, 1, '15822559473792708', 1582255948, 20, 'x.paysite.xyz', '处理完毕');
INSERT INTO `withdraw` VALUES (425, 0, 423125.00, 0, '19451582862443728', 1582862443, 0, 'x.paysite.xyz', NULL);
INSERT INTO `withdraw` VALUES (426, 0, 120.00, 0, '61911582862670477', 1582862670, 0, 'x.paysite.xyz', NULL);

SET FOREIGN_KEY_CHECKS = 1;
