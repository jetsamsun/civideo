/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : clusterctl_zodia

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 14/04/2020 23:50:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for app_admin
-- ----------------------------
DROP TABLE IF EXISTS `app_admin`;
CREATE TABLE `app_admin`  (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `otype` int(11) DEFAULT 1,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '邮箱',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '电话',
  `createtime` datetime(0) DEFAULT NULL,
  `is_visible` int(3) DEFAULT 1,
  PRIMARY KEY (`adminid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_admin
-- ----------------------------
INSERT INTO `app_admin` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, '236131928@qq.com', '18513000624', '2018-05-07 14:24:49', 1);

-- ----------------------------
-- Table structure for app_app_info
-- ----------------------------
DROP TABLE IF EXISTS `app_app_info`;
CREATE TABLE `app_app_info`  (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `os` int(5) DEFAULT 1 COMMENT '1：iOS  2：andriod ',
  `url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `qrcode` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bgpic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '引导页背景图',
  `text` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`oid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10003 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_app_info
-- ----------------------------
INSERT INTO `app_app_info` VALUES (10001, 1, 'https://fir.im/7axy', '/assets/qrcodes/1553049765648.png', '/assets/uploads/image/qrcode/2018/1229/1546084883083.png', '/assets/uploads/image/qrcode/2018/1229/1546084885955.jpg', '爱的那我i带你啊你你你你你你低啊我i的达瓦达');
INSERT INTO `app_app_info` VALUES (10002, 2, 'https://www.pgyer.com/ncug', '/assets/qrcodes/1553049885709.png', '/assets/uploads/image/qrcode/2018/1229/1546084896425.png', '/assets/uploads/image/qrcode/2018/1229/1546084898778.jpg', 'ada');

-- ----------------------------
-- Table structure for app_asset_detail
-- ----------------------------
DROP TABLE IF EXISTS `app_asset_detail`;
CREATE TABLE `app_asset_detail`  (
  `asset_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `byuid` int(11) DEFAULT NULL,
  `content` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `money` decimal(14, 2) DEFAULT NULL,
  `intro` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '支入/支出',
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`asset_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10084 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_asset_detail
-- ----------------------------
INSERT INTO `app_asset_detail` VALUES (10052, 10189, NULL, NULL, 2.00, '-', '1552377936');
INSERT INTO `app_asset_detail` VALUES (10053, 10188, 10189, NULL, 2.00, '+', '1552377936');
INSERT INTO `app_asset_detail` VALUES (10054, 10168, NULL, NULL, 1.00, '-', '1552878732');
INSERT INTO `app_asset_detail` VALUES (10055, 10197, NULL, NULL, 1.00, '-', '1553071928');
INSERT INTO `app_asset_detail` VALUES (10056, 10198, NULL, NULL, 3.00, '-', '1553132993');
INSERT INTO `app_asset_detail` VALUES (10057, 10194, NULL, NULL, 1.00, '-', '1553135448');
INSERT INTO `app_asset_detail` VALUES (10058, 10192, 10194, NULL, 1.00, '+', '1553135448');
INSERT INTO `app_asset_detail` VALUES (10059, 10199, NULL, NULL, 1.00, '-', '1553136937');
INSERT INTO `app_asset_detail` VALUES (10060, 10195, 10199, NULL, 1.00, '+', '1553136937');
INSERT INTO `app_asset_detail` VALUES (10061, 10189, NULL, NULL, 2.00, '-', '1553777504');
INSERT INTO `app_asset_detail` VALUES (10062, 10203, 10189, NULL, 2.00, '+', '1553777504');
INSERT INTO `app_asset_detail` VALUES (10063, 10199, 10189, NULL, 0.50, '+', '1553777504');
INSERT INTO `app_asset_detail` VALUES (10064, 10195, 10189, NULL, 0.30, '+', '1553777504');
INSERT INTO `app_asset_detail` VALUES (10065, 10204, NULL, NULL, 1.00, '-', '1553780135');
INSERT INTO `app_asset_detail` VALUES (10066, 10189, 10204, NULL, 1.00, '+', '1553780135');
INSERT INTO `app_asset_detail` VALUES (10067, 10203, 10204, NULL, 0.50, '+', '1553780135');
INSERT INTO `app_asset_detail` VALUES (10068, 10199, 10204, NULL, 0.15, '+', '1553780135');
INSERT INTO `app_asset_detail` VALUES (10069, 10195, 10204, NULL, 0.10, '+', '1553780135');
INSERT INTO `app_asset_detail` VALUES (10070, 10207, NULL, NULL, 3.00, '-', '1553819017');
INSERT INTO `app_asset_detail` VALUES (10071, 10205, 10207, NULL, 3.00, '+', '1553819017');
INSERT INTO `app_asset_detail` VALUES (10072, 10208, NULL, NULL, 3.00, '-', '1553819303');
INSERT INTO `app_asset_detail` VALUES (10073, 10207, 10208, NULL, 3.00, '+', '1553819303');
INSERT INTO `app_asset_detail` VALUES (10074, 10205, 10208, NULL, 1.50, '+', '1553819303');
INSERT INTO `app_asset_detail` VALUES (10075, 10209, NULL, NULL, 3.00, '-', '1553819485');
INSERT INTO `app_asset_detail` VALUES (10076, 10208, 10209, NULL, 3.00, '+', '1553819485');
INSERT INTO `app_asset_detail` VALUES (10077, 10207, 10209, NULL, 1.50, '+', '1553819485');
INSERT INTO `app_asset_detail` VALUES (10078, 10205, 10209, NULL, 0.45, '+', '1553819485');
INSERT INTO `app_asset_detail` VALUES (10079, 10210, NULL, NULL, 3.00, '-', '1553819639');
INSERT INTO `app_asset_detail` VALUES (10080, 10209, 10210, NULL, 3.00, '+', '1553819639');
INSERT INTO `app_asset_detail` VALUES (10081, 10208, 10210, NULL, 1.50, '+', '1553819639');
INSERT INTO `app_asset_detail` VALUES (10082, 10207, 10210, NULL, 0.45, '+', '1553819639');
INSERT INTO `app_asset_detail` VALUES (10083, 10205, 10210, NULL, 0.30, '+', '1553819639');

-- ----------------------------
-- Table structure for app_config
-- ----------------------------
DROP TABLE IF EXISTS `app_config`;
CREATE TABLE `app_config`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量名',
  `group` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '分组',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量标题',
  `tip` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '变量描述',
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '类型:string,text,int,bool,array,datetime,date,file',
  `value` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量值',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '变量字典数据',
  `rule` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '验证规则',
  `extend` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '扩展属性',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '系统配置' ROW_FORMAT = Compact;

-- ----------------------------
-- Records of app_config
-- ----------------------------
INSERT INTO `app_config` VALUES (9, 'categorytype', 'dictionary', 'Category type', '', 'array', '{\"default\":\"Default\",\"page\":\"Page\",\"article\":\"Article\",\"test\":\"Test\",\"video\":\"Video\"}', '', '', '');
INSERT INTO `app_config` VALUES (10, 'configgroup', 'dictionary', 'Config group', '', 'array', '{\"basic\":\"Basic\",\"email\":\"Email\",\"dictionary\":\"Dictionary\",\"user\":\"User\",\"example\":\"Example\",\"trans\":\"转码设置\",\"watermark\":\"水印设置\",\"screenshot\":\"截图设置\",\"theft\":\"防盗设置\",\"sync\":\"同步设置\"}', '', '', '');
INSERT INTO `app_config` VALUES (11, 'mail_type', 'email', 'Mail type', '选择邮件发送方式', 'select', '1', '[\"Please select\",\"SMTP\",\"Mail\"]', '', '');
INSERT INTO `app_config` VALUES (12, 'mail_smtp_host', 'email', 'Mail smtp host', '错误的配置发送邮件会导致服务器超时', 'string', 'smtp.qq.com', '', '', '');
INSERT INTO `app_config` VALUES (13, 'mail_smtp_port', 'email', 'Mail smtp port', '(不加密默认25,SSL默认465,TLS默认587)', 'string', '465', '', '', '');
INSERT INTO `app_config` VALUES (14, 'mail_smtp_user', 'email', 'Mail smtp user', '（填写完整用户名）', 'string', '10000', '', '', '');
INSERT INTO `app_config` VALUES (15, 'mail_smtp_pass', 'email', 'Mail smtp password', '（填写您的密码）', 'string', 'password', '', '', '');
INSERT INTO `app_config` VALUES (16, 'mail_verify_type', 'email', 'Mail vertify type', '（SMTP验证方式[推荐SSL]）', 'select', '2', '[\"None\",\"TLS\",\"SSL\"]', '', '');
INSERT INTO `app_config` VALUES (17, 'mail_from', 'email', 'Mail from', '', 'string', '10000@qq.com', '', '', '');
INSERT INTO `app_config` VALUES (18, 'site_url', 'basic', '网站URL', '网站地址', 'string', 'http://clusterctl.xyz', '', '', '');
INSERT INTO `app_config` VALUES (19, 'video_dir', 'basic', '转码文件路径', '资源文件夹', 'string', '/video/product', '', '', '');
INSERT INTO `app_config` VALUES (25, 'trans_mode', 'trans', '转码方式', '画质优先则转码速度变慢', 'select', 'veryfast', '{\"ultrafast\":\"极速转码\",\"veryfast\":\"速度优先\",\"fast\":\"均衡设置\",\"medium\":\"画质优先\"}', '', '');
INSERT INTO `app_config` VALUES (26, 'trans_ts_mask', 'trans', 'Ts伪装', 'Ts伪装成其他文件，如：jpg，该功能只在开启m3u8防盗后有效', 'string', '', '', '', '');
INSERT INTO `app_config` VALUES (27, 'trans_ts_space', 'trans', 'Ts时长', '', 'number', '180', '', '', '');
INSERT INTO `app_config` VALUES (28, 'trans_m3u8', 'trans', 'M3U8后缀', '', 'string', 'mmm.m3u8', '', '', '');
INSERT INTO `app_config` VALUES (30, 'mark_space', 'watermark', '水印间距', '', 'string', '50:10', '', '', '');
INSERT INTO `app_config` VALUES (31, 'mark_zs', 'watermark', '左上水印', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (32, 'mark_ys', 'watermark', '右上水印', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (33, 'mark_zx', 'watermark', '左下水印', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (34, 'mark_yx', 'watermark', '右下水印', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (35, 'shot_on', 'screenshot', '截图开关', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (37, 'shot_size', 'screenshot', '截图尺寸', '', 'string', '360x202', '', '', '');
INSERT INTO `app_config` VALUES (38, 'shot_gif_on', 'screenshot', '动图开关', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (41, 'shot_gif_size', 'screenshot', '动图尺寸', '', 'string', '360x202', '', '', '');
INSERT INTO `app_config` VALUES (42, 'thief_on', 'theft', '防盗开关', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (43, 'thief_direct', 'theft', '直接访问', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (45, 'thief_m3u8_on', 'theft', 'M3U8防盗', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (46, 'thief_freeip', 'theft', '放行域名', '留空为不限制，多个域名用竖线\"|\"隔开，如：www.123.com|www.baidu.com', 'text', 'www.baidu.com', '', '', '');
INSERT INTO `app_config` VALUES (47, 'sync_on', 'sync', '同步开关', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (48, 'sync_address', 'sync', '同步地址', '', 'string', 'http://fastadmin.te/api/video/index', '', '', '');
INSERT INTO `app_config` VALUES (49, 'sync_key', 'sync', '同步秘钥', '', 'string', 'sdfsdfdfsfsdfsdfsdfsdf', '', '', '');
INSERT INTO `app_config` VALUES (50, 'shot_gif_space', 'screenshot', '截取间隔', '用于截取图片合成动图', 'number', '5', '', '', '');
INSERT INTO `app_config` VALUES (52, 'trans_default_size', 'trans', '必选大小', '', 'radio', '360', '{\"2160\":\"2160p：3840x2160\",\"1440\":\"1440p：2560x1440\",\"1080\":\"1080p：1920x1080\",\"720\":\"720p：1280x720\",\"480\":\"480p：854x480\",\"360\":\"360p：640x360\",\"240\":\"240p：426x240\"}', '', '');
INSERT INTO `app_config` VALUES (53, 'trans_secret_on', 'trans', '加密开关', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (54, 'transm3u8', 'trans', '是否切片', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (55, 'transm3u8del', 'trans', '切片完成删除文件', '', 'switch', '1', '', '', '');
INSERT INTO `app_config` VALUES (56, 'tanscodedel', 'trans', '转码完成删除源文件', '', 'switch', '0', '', '', '');
INSERT INTO `app_config` VALUES (57, 'upload_dir', 'basic', '上传文件路径', '源码文件夹', 'string', '/video/upload', '', '', '');
INSERT INTO `app_config` VALUES (58, 'img_url', 'basic', '图片域名', '图片地址', 'string', 'http://clusterctl.xyz', '', '', '');
INSERT INTO `app_config` VALUES (59, 'm3u8_url', 'basic', 'm3u8域名', 'm3u8地址', 'string', 'http://clusterctl.xyz', '', '', '');
INSERT INTO `app_config` VALUES (60, 'syncdo', 'trans', '同步完成删除源文件及转码记录', '', 'switch', '0', '', '', '');

-- ----------------------------
-- Table structure for app_configs
-- ----------------------------
DROP TABLE IF EXISTS `app_configs`;
CREATE TABLE `app_configs`  (
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ret` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_configs
-- ----------------------------
INSERT INTO `app_configs` VALUES ('site_name', '青瓜TV', NULL);
INSERT INTO `app_configs` VALUES ('site_title', '最好的视频网站', NULL);
INSERT INTO `app_configs` VALUES ('site_logo', '/assets/img/logo/logo.png', NULL);
INSERT INTO `app_configs` VALUES ('site_url', 'http://civideo.xyz', NULL);
INSERT INTO `app_configs` VALUES ('smtp', '{\"\"}', NULL);
INSERT INTO `app_configs` VALUES ('phone', '40088866', NULL);
INSERT INTO `app_configs` VALUES ('telegram_token', '1034971964:AAGEFpTgSpStZOZGpH2_T_6_1wzJ8AVeDZg', NULL);
INSERT INTO `app_configs` VALUES ('site_domain', 'civideo.xyz', NULL);
INSERT INTO `app_configs` VALUES ('img_url', 'http://clusterctl.xyz', NULL);
INSERT INTO `app_configs` VALUES ('m3u8_url', 'http://clusterctl.xyz', NULL);

-- ----------------------------
-- Table structure for app_login_logs
-- ----------------------------
DROP TABLE IF EXISTS `app_login_logs`;
CREATE TABLE `app_login_logs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `logintime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for app_m3u8_list
-- ----------------------------
DROP TABLE IF EXISTS `app_m3u8_list`;
CREATE TABLE `app_m3u8_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `flag` tinyint(2) UNSIGNED DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `url`(`url`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10133 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_m3u8_list
-- ----------------------------
INSERT INTO `app_m3u8_list` VALUES (10132, '10085', 'http://clusterctl.xyz/video/product/20200316/u3XXhQ81/360/mmm.m3u8', 0);

-- ----------------------------
-- Table structure for app_media_actors
-- ----------------------------
DROP TABLE IF EXISTS `app_media_actors`;
CREATE TABLE `app_media_actors`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '名字',
  `English_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '英文名',
  `Country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '国际标准地区代码如CN,HK,TW',
  `Image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '图片',
  `Role` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_actors
-- ----------------------------
INSERT INTO `app_media_actors` VALUES (1, '成龙', NULL, 'CN', '/assets/uploads/image/star/2020/0228/1582874608391.png', '1');
INSERT INTO `app_media_actors` VALUES (2, '李连杰', NULL, 'CN', '/assets/uploads/image/star/2020/0228/1582874652317.png', '2');
INSERT INTO `app_media_actors` VALUES (3, '周星驰xx', NULL, 'TW', '/assets/uploads/image/star/2020/0228/1582874690516.png', '1,2');
INSERT INTO `app_media_actors` VALUES (4, '朴叙俊', NULL, 'KOR', NULL, '2');
INSERT INTO `app_media_actors` VALUES (5, '刘在明', NULL, 'KOR', NULL, '2');
INSERT INTO `app_media_actors` VALUES (6, '权娜拉', NULL, 'KOR', NULL, '2');
INSERT INTO `app_media_actors` VALUES (7, '金善允', NULL, 'KOR', NULL, '1');

-- ----------------------------
-- Table structure for app_media_cats
-- ----------------------------
DROP TABLE IF EXISTS `app_media_cats`;
CREATE TABLE `app_media_cats`  (
  `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Pid` int(10) NOT NULL DEFAULT 0 COMMENT '父分类',
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '名字',
  `Sort` int(11) DEFAULT NULL COMMENT '排序',
  `Mark` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标记如Hot',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_cats
-- ----------------------------
INSERT INTO `app_media_cats` VALUES (5, 0, '电影', 0, NULL);
INSERT INTO `app_media_cats` VALUES (6, 5, '动作片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (7, 0, '电视剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (8, 0, '动漫', 1, 'hot');
INSERT INTO `app_media_cats` VALUES (9, 5, '喜剧片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (10, 5, '爱情片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (11, 5, '科幻片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (12, 5, '恐怖片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (13, 5, '剧情片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (14, 5, '战争片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (15, 5, '悬疑片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (16, 5, '惊悚片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (17, 5, '记录片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (18, 5, '伦理片', 0, NULL);
INSERT INTO `app_media_cats` VALUES (19, 0, '综艺', 0, NULL);
INSERT INTO `app_media_cats` VALUES (20, 19, '内地', 0, NULL);
INSERT INTO `app_media_cats` VALUES (21, 19, '日韩', 0, NULL);
INSERT INTO `app_media_cats` VALUES (22, 19, '港台', 0, NULL);
INSERT INTO `app_media_cats` VALUES (23, 19, '欧美', 0, NULL);
INSERT INTO `app_media_cats` VALUES (24, 7, '国产剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (25, 7, '韩剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (26, 7, '日剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (27, 7, '泰剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (28, 7, '港台剧', 0, NULL);
INSERT INTO `app_media_cats` VALUES (29, 8, '其他', 0, NULL);

-- ----------------------------
-- Table structure for app_media_country
-- ----------------------------
DROP TABLE IF EXISTS `app_media_country`;
CREATE TABLE `app_media_country`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  PRIMARY KEY (`Id`) USING BTREE,
  UNIQUE INDEX `code`(`Code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_country
-- ----------------------------
INSERT INTO `app_media_country` VALUES (1, 'CN', '中国大陆');
INSERT INTO `app_media_country` VALUES (2, 'HK', '香港');
INSERT INTO `app_media_country` VALUES (3, 'TW', '台湾');
INSERT INTO `app_media_country` VALUES (4, 'JPN', '日本');
INSERT INTO `app_media_country` VALUES (5, 'KOR', '韩国');
INSERT INTO `app_media_country` VALUES (6, 'US', '美国');
INSERT INTO `app_media_country` VALUES (7, 'FR', '法国');
INSERT INTO `app_media_country` VALUES (8, 'GB', '英国');
INSERT INTO `app_media_country` VALUES (9, 'DE', '德国');
INSERT INTO `app_media_country` VALUES (10, 'TH', '泰国');
INSERT INTO `app_media_country` VALUES (11, 'IN', '印度');
INSERT INTO `app_media_country` VALUES (12, 'MX', '墨西哥');
INSERT INTO `app_media_country` VALUES (13, 'ES', '西班牙');
INSERT INTO `app_media_country` VALUES (14, 'IT', '意大利');
INSERT INTO `app_media_country` VALUES (15, 'CA', '加拿大');
INSERT INTO `app_media_country` VALUES (16, 'AU', '澳大利亚');
INSERT INTO `app_media_country` VALUES (17, 'OTHERS', '其他');

-- ----------------------------
-- Table structure for app_media_episodes
-- ----------------------------
DROP TABLE IF EXISTS `app_media_episodes`;
CREATE TABLE `app_media_episodes`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `MId` int(11) NOT NULL DEFAULT 0 COMMENT '对应视频主体Id',
  `Sid` int(11) DEFAULT 0 COMMENT '原始ID',
  `Image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '封面图',
  `Gif` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '封面动图',
  `Episode` int(10) NOT NULL DEFAULT 1 COMMENT '第几集',
  `Season` int(10) DEFAULT 1 COMMENT '第几季',
  `Title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '标题',
  `Description` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '简介',
  `Lang` char(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '语言',
  `Code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '码率,360P,720P,1080P',
  `Play_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '总播放时间',
  `Play_node` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键结点,按秒数',
  `Play_url` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '播放地址',
  `Source` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '来源,如youtube',
  `Create_time` int(10) NOT NULL DEFAULT 0 COMMENT '创建时间',
  `Update_time` int(10) NOT NULL DEFAULT 0 COMMENT '更新时间',
  `Issue` tinyint(2) NOT NULL DEFAULT 0 COMMENT '状态（0 未发布，1 发布）',
  PRIMARY KEY (`Id`, `MId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_episodes
-- ----------------------------
INSERT INTO `app_media_episodes` VALUES (39, 34, 0, '', '', 1, 1, 'dbshn', '', '', '240', '', '0', '', '', 0, 1585401745, 0);
INSERT INTO `app_media_episodes` VALUES (40, 34, 10087, '/video/product/20200316/tSgffoSB/360/cover.jpg', '/video/product/20200316/tSgffoSB/360/tSgffoSB.gif', 1, 1, '转码变宽屏问题', NULL, '0', '360', '21分13秒', '0', '/video/product/20200316/tSgffoSB/360/mmm.m3u8', '0', 1585401762, 0, 0);
INSERT INTO `app_media_episodes` VALUES (41, 34, 10089, '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.gif', 1, 1, '你被AI盯上了吗？', 'gasfdgdh', '0', '240', '3分16秒', '0', '/video/product/20200325/PVcKQFHP/240/mmm.m3u8', '0', 1585401762, 0, 0);
INSERT INTO `app_media_episodes` VALUES (42, 34, 10089, '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.gif', 1, 1, '你被AI盯上了吗？', 'gasfdgdh', '0', '360', '3分16秒', '0', '/video/product/20200325/PVcKQFHP/360/mmm.m3u8', '0', 1585401762, 0, 0);
INSERT INTO `app_media_episodes` VALUES (43, 35, 10084, '/video/product/20200323/8CjSJNGD/360/cover.jpg', '/video/product/20200323/8CjSJNGD/360/cover.gif', 1, 1, '【天然素人】缺少streams字段问题', '', '', '360', '1时19分15秒', '0', '/video/product/20200323/8CjSJNGD/360/mmm.m3u8', '', 1585401805, 1585403311, 1);
INSERT INTO `app_media_episodes` VALUES (71, 33, 11035, '/video/product/20200409/43vTAoc7/360/43vTAoc7.jpg', '/video/product/20200409/43vTAoc7/360/43vTAoc7.gif', 1, 1, '梨泰院第01集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时12分56秒', '0', '/video/product/20200409/43vTAoc7/360/mmm.m3u8', '', 1586423777, 1586424090, 1);
INSERT INTO `app_media_episodes` VALUES (72, 33, 11035, '/video/product/20200409/43vTAoc7/360/43vTAoc7.jpg', '/video/product/20200409/43vTAoc7/360/43vTAoc7.gif', 1, 1, '梨泰院第01集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '720', '1时12分56秒', '0', '/video/product/20200409/43vTAoc7/720/mmm.m3u8', '', 1586423777, 1586424716, 1);
INSERT INTO `app_media_episodes` VALUES (73, 33, 11036, '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.jpg', '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.gif', 2, 1, '梨泰院第02集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时6分27秒', '0', '/video/product/20200409/a0mqg9Qz/240/mmm.m3u8', '', 1586423777, 1586424723, 1);
INSERT INTO `app_media_episodes` VALUES (74, 33, 11036, '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.jpg', '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.gif', 2, 1, '梨泰院第02集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时6分27秒', '0', '/video/product/20200409/a0mqg9Qz/360/mmm.m3u8', '', 1586423777, 1586424735, 1);
INSERT INTO `app_media_episodes` VALUES (75, 33, 11037, '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.jpg', '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.gif', 3, 1, '梨泰院第03集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时5分18秒', '0', '/video/product/20200409/UYc9WrWu/240/mmm.m3u8', '', 1586423777, 1586424746, 1);
INSERT INTO `app_media_episodes` VALUES (76, 33, 11037, '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.jpg', '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.gif', 3, 1, '梨泰院第03集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时5分18秒', '0', '/video/product/20200409/UYc9WrWu/360/mmm.m3u8', '', 1586423777, 1586424758, 1);
INSERT INTO `app_media_episodes` VALUES (77, 33, 11038, '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.jpg', '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.gif', 4, 1, '梨泰院第04集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时2分48秒', '0', '/video/product/20200409/KvoB3HGX/240/mmm.m3u8', '', 1586423778, 1586424764, 1);
INSERT INTO `app_media_episodes` VALUES (78, 33, 11038, '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.jpg', '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.gif', 4, 1, '梨泰院第04集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时2分48秒', '0', '/video/product/20200409/KvoB3HGX/360/mmm.m3u8', '', 1586423778, 1586424769, 1);
INSERT INTO `app_media_episodes` VALUES (79, 33, 11039, '/video/product/20200409/XFT33rQK/240/XFT33rQK.jpg', '/video/product/20200409/XFT33rQK/240/XFT33rQK.gif', 5, 1, '梨泰院第05集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时7分2秒', '0', '/video/product/20200409/XFT33rQK/240/mmm.m3u8', '', 1586423778, 1586424773, 1);
INSERT INTO `app_media_episodes` VALUES (80, 33, 11039, '/video/product/20200409/XFT33rQK/240/XFT33rQK.jpg', '/video/product/20200409/XFT33rQK/240/XFT33rQK.gif', 5, 1, '梨泰院第05集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时7分2秒', '0', '/video/product/20200409/XFT33rQK/360/mmm.m3u8', '', 1586423778, 1586424777, 1);
INSERT INTO `app_media_episodes` VALUES (81, 33, 11040, '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.jpg', '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.gif', 6, 1, '梨泰院第06集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时7分9秒', '0', '/video/product/20200409/bvEyUu3T/240/mmm.m3u8', '', 1586423778, 1586424790, 1);
INSERT INTO `app_media_episodes` VALUES (82, 33, 11040, '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.jpg', '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.gif', 6, 1, '梨泰院第06集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时7分9秒', '0', '/video/product/20200409/bvEyUu3T/360/mmm.m3u8', '', 1586423778, 1586424797, 1);
INSERT INTO `app_media_episodes` VALUES (83, 33, 11041, '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.jpg', '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.gif', 7, 1, '梨泰院第07集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时8分57秒', '0', '/video/product/20200409/N4sYZm1L/240/mmm.m3u8', '', 1586423778, 1586424805, 1);
INSERT INTO `app_media_episodes` VALUES (84, 33, 11041, '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.jpg', '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.gif', 7, 1, '梨泰院第07集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时8分57秒', '0', '/video/product/20200409/N4sYZm1L/360/mmm.m3u8', '', 1586423778, 1586424813, 1);
INSERT INTO `app_media_episodes` VALUES (85, 33, 11042, '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.jpg', '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.gif', 8, 1, '梨泰院第08集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时4分43秒', '0', '/video/product/20200409/KQbDS0pn/240/mmm.m3u8', '', 1586423778, 1586424832, 1);
INSERT INTO `app_media_episodes` VALUES (86, 33, 11042, '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.jpg', '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.gif', 8, 1, '梨泰院第08集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时4分43秒', '0', '/video/product/20200409/KQbDS0pn/360/mmm.m3u8', '', 1586423778, 1586424841, 1);
INSERT INTO `app_media_episodes` VALUES (87, 33, 11043, '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.jpg', '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.gif', 9, 1, '梨泰院第09集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时6分5秒', '0', '/video/product/20200409/uMnJMIWF/240/mmm.m3u8', '', 1586423961, 1586424852, 1);
INSERT INTO `app_media_episodes` VALUES (88, 33, 11043, '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.jpg', '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.gif', 9, 1, '梨泰院第09集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时6分5秒', '0', '/video/product/20200409/uMnJMIWF/360/mmm.m3u8', '', 1586423961, 1586424887, 1);
INSERT INTO `app_media_episodes` VALUES (89, 33, 11044, '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.jpg', '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.gif', 10, 1, '梨泰院第10集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时10分8秒', '0', '/video/product/20200409/ZiLfCwqC/240/mmm.m3u8', '', 1586423961, 1586424881, 1);
INSERT INTO `app_media_episodes` VALUES (90, 33, 11044, '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.jpg', '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.gif', 10, 1, '梨泰院第10集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时10分8秒', '0', '/video/product/20200409/ZiLfCwqC/360/mmm.m3u8', '', 1586423961, 1586424871, 1);
INSERT INTO `app_media_episodes` VALUES (91, 33, 11045, '/video/product/20200409/flosGHJa/240/flosGHJa.jpg', '/video/product/20200409/flosGHJa/240/flosGHJa.gif', 11, 1, '梨泰院第11集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '240', '1时10分0秒', '0', '/video/product/20200409/flosGHJa/240/mmm.m3u8', '', 1586423961, 1586424904, 1);
INSERT INTO `app_media_episodes` VALUES (92, 33, 11045, '/video/product/20200409/flosGHJa/240/flosGHJa.jpg', '/video/product/20200409/flosGHJa/240/flosGHJa.gif', 11, 1, '梨泰院第11集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时10分0秒', '0', '/video/product/20200409/flosGHJa/360/mmm.m3u8', '', 1586423961, 1586424910, 1);
INSERT INTO `app_media_episodes` VALUES (93, 33, 11046, '/video/product/20200409/7uhTUNNC/360/7uhTUNNC.jpg', '/video/product/20200409/7uhTUNNC/360/7uhTUNNC.gif', 12, 1, '梨泰院第12集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时9分21秒', '0', '/video/product/20200409/7uhTUNNC/360/mmm.m3u8', '', 1586423961, 1586424916, 1);
INSERT INTO `app_media_episodes` VALUES (94, 33, 11047, '/video/product/20200409/JZjU6FOt/360/JZjU6FOt.jpg', '/video/product/20200409/JZjU6FOt/360/JZjU6FOt.gif', 13, 1, '梨泰院第13集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时8分42秒', '0', '/video/product/20200409/JZjU6FOt/360/mmm.m3u8', '', 1586423961, 1586424937, 1);
INSERT INTO `app_media_episodes` VALUES (95, 33, 11048, '/video/product/20200409/QtlZXBOR/360/QtlZXBOR.jpg', '/video/product/20200409/QtlZXBOR/360/QtlZXBOR.gif', 14, 1, '梨泰院第14集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时5分18秒', '0', '/video/product/20200409/QtlZXBOR/360/mmm.m3u8', '', 1586423961, 1586424943, 1);
INSERT INTO `app_media_episodes` VALUES (96, 33, 11049, '/video/product/20200409/szPOgAve/360/szPOgAve.jpg', '/video/product/20200409/szPOgAve/360/szPOgAve.gif', 15, 1, '梨泰院第15集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时5分12秒', '0', '/video/product/20200409/szPOgAve/360/mmm.m3u8', '', 1586423961, 1586424949, 1);
INSERT INTO `app_media_episodes` VALUES (97, 33, 11050, '/video/product/20200409/aETtYk2d/360/aETtYk2d.jpg', '/video/product/20200409/aETtYk2d/360/aETtYk2d.gif', 16, 1, '梨泰院第16集', 'Show Box将向电视剧领域进军，制作网络漫画改编的电视剧。Show Box与Daum签订了《梨泰院classes》(이태원 클라쓰，暂译)和《大势女的彩妆故事》(대새녀의 메이크업 이야기，暂译)韩国国内和海外电视剧的版权合约，电视剧作品将经过正式的企划开发，最早将于明年下半年公开。', '韩语', '360', '1时27分20秒', '0', '/video/product/20200409/aETtYk2d/360/mmm.m3u8', '', 1586423961, 1586424955, 1);
INSERT INTO `app_media_episodes` VALUES (99, 65, 11034, '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.jpg', '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.gif', 1, 1, '人类下达的命令，AI会吗？', '', '国语', '360', '3分26秒', '0', '/video/product/20200412/HeqvQbrL/360/mmm.m3u8', '', 1586682958, 1586683163, 1);

-- ----------------------------
-- Table structure for app_media_movies
-- ----------------------------
DROP TABLE IF EXISTS `app_media_movies`;
CREATE TABLE `app_media_movies`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sid` int(11) NOT NULL DEFAULT 0 COMMENT '原始ID',
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '标题',
  `KeyWord` varchar(90) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '关键字',
  `Image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '封面图',
  `Image_big` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '封面大图',
  `Episodes` int(4) NOT NULL DEFAULT 1 COMMENT '电视剧-总集数',
  `Content` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT '内容介绍',
  `Mark` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '备注',
  `Year` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '年份',
  `Country` char(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '地区代码',
  `Status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '状态（0完成，1连载中，2版权暂停，3人工暂停，4下架）',
  `Cats` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '从属分类ID',
  `Directors` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '从属导演ID',
  `Actors` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '从属演员ID',
  `Tags` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '标签如制服,地铁',
  `Type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '类型(未定0,电影1,电视2)',
  `IMDB` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT 'IMDB',
  `FH` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '日本番号',
  `Score` float NOT NULL DEFAULT 0 COMMENT '评分',
  `Preid` int(10) NOT NULL DEFAULT 0 COMMENT '上一部ID,如有多部',
  `Create_time` int(10) NOT NULL DEFAULT 0 COMMENT '创建时间',
  `Update_time` int(10) NOT NULL DEFAULT 0 COMMENT '最后更新时间',
  `Issue` tinyint(2) NOT NULL DEFAULT 0 COMMENT '状态（0 未发布，1 发布）',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_movies
-- ----------------------------
INSERT INTO `app_media_movies` VALUES (33, 11050, '梨泰院Class', '', '/assets/uploads/image/video/2020/0409/1586409980924.jpg', '/assets/uploads/image/video/2020/0409/1586409988134.jpg', 16, '梨泰院Class線上看,Show Box將向電視劇領域進軍，制作網絡漫畫改編的電視劇。Show Box與Daum簽訂瞭《梨泰院classes》(이태원 클라쓰', '', '1998', 'AU', 0, '25', '7', '4,5,6', '10044', 2, '10201', '韩国', 91, 0, 1585401700, 1586851079, 1);
INSERT INTO `app_media_movies` VALUES (34, 10089, '想見你', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '/assets/uploads/image/video/2020/0412/1586698867209.jpg', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 0, 0, 1585401736, 1586698868, 1);
INSERT INTO `app_media_movies` VALUES (35, 10084, '法證先鋒4粵語', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (36, 10084, '安傢', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (37, 10084, '謗法', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (38, 10084, '戀無止境', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (39, 10084, '如實陳述Class', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, '', '', '', '', 0, '29', '', '', '', 0, '', '', 0, 0, 1585401793, 1586878163, 1);
INSERT INTO `app_media_movies` VALUES (40, 10084, '良醫第三季', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (41, 10084, '愛回傢之開心速遞', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (42, 10084, '愛回傢之開心速遞粵語', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (43, 10084, '冰糖燉雪梨', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (44, 10084, '兩世歡', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (45, 10084, '美麗愛情完美人生', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (46, 10084, '大唐女法醫', '', '/video/product/20200323/8CjSJNGD/360/cover.jpg', '', 0, NULL, '', '', '', 0, '6', '', '', '', 0, '', '', 0, 0, 1585401793, 1585401805, 1);
INSERT INTO `app_media_movies` VALUES (47, 10089, '完美關系', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 21, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (48, 10089, '王國第二季/李屍朝鮮', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 19, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (49, 10089, '時光與你都很甜', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 56, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (50, 10089, '奈何boss要娶我2', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 23, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (51, 10089, '1917', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 81, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (52, 10089, '終結者6：黑暗命運', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 59, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (53, 10089, '星球大戰9：天行者崛', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 68, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (54, 10089, '勇敢者遊戲2：再戰巔', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 71, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (55, 10089, '殺戮都市：O GANTZ', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 79, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (56, 10089, '喪屍樂園2', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 76, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (57, 10089, '多力特的奇幻冒險', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 45, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (58, 10089, '哈莉·奎因：猛禽小隊', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 34, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (59, 10089, '北京女子圖鑒之整容大', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 89, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (60, 10089, '誤殺', '', '/video/product/20200325/PVcKQFHP/240/PVcKQFHP.jpg', '', 0, 'gasfdgdh', '', '2019', 'HK', 0, '5', '3', '2', '2,3', 0, '', '', 87, 0, 1585401736, 1585401762, 1);
INSERT INTO `app_media_movies` VALUES (65, 11034, '人类下达的命令，AI会吗？', '', '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.jpg', '', 1, '', '', '2019', 'CN', 0, '20', '1', '3', '34', 3, '10323', '大陆', 89, 0, 1586682958, 1586683075, 1);

-- ----------------------------
-- Table structure for app_media_role
-- ----------------------------
DROP TABLE IF EXISTS `app_media_role`;
CREATE TABLE `app_media_role`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_role
-- ----------------------------
INSERT INTO `app_media_role` VALUES (1, '导演');
INSERT INTO `app_media_role` VALUES (2, '演员');

-- ----------------------------
-- Table structure for app_media_status
-- ----------------------------
DROP TABLE IF EXISTS `app_media_status`;
CREATE TABLE `app_media_status`  (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_status
-- ----------------------------
INSERT INTO `app_media_status` VALUES (0, '完成');
INSERT INTO `app_media_status` VALUES (1, '连载中');
INSERT INTO `app_media_status` VALUES (2, '版权暂停');
INSERT INTO `app_media_status` VALUES (3, '人工暂停');
INSERT INTO `app_media_status` VALUES (4, '下架');

-- ----------------------------
-- Table structure for app_media_tags
-- ----------------------------
DROP TABLE IF EXISTS `app_media_tags`;
CREATE TABLE `app_media_tags`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10045 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_media_tags
-- ----------------------------
INSERT INTO `app_media_tags` VALUES (2, '剧情');
INSERT INTO `app_media_tags` VALUES (3, '喜剧');
INSERT INTO `app_media_tags` VALUES (4, '青春');
INSERT INTO `app_media_tags` VALUES (5, '悬疑');
INSERT INTO `app_media_tags` VALUES (6, '烧脑');
INSERT INTO `app_media_tags` VALUES (7, '科幻');
INSERT INTO `app_media_tags` VALUES (8, '动作');
INSERT INTO `app_media_tags` VALUES (10009, '战争');
INSERT INTO `app_media_tags` VALUES (10010, '精英');
INSERT INTO `app_media_tags` VALUES (10011, '文艺');
INSERT INTO `app_media_tags` VALUES (10012, '动漫');
INSERT INTO `app_media_tags` VALUES (10013, '卡通');
INSERT INTO `app_media_tags` VALUES (10014, '综艺');
INSERT INTO `app_media_tags` VALUES (10015, '选秀');
INSERT INTO `app_media_tags` VALUES (10016, '爱情');
INSERT INTO `app_media_tags` VALUES (10017, '犯罪');
INSERT INTO `app_media_tags` VALUES (10018, '冒险');
INSERT INTO `app_media_tags` VALUES (10019, '恐怖');
INSERT INTO `app_media_tags` VALUES (10020, '惊悚');
INSERT INTO `app_media_tags` VALUES (10021, '战争');
INSERT INTO `app_media_tags` VALUES (10022, '经典');
INSERT INTO `app_media_tags` VALUES (10023, '伦理');
INSERT INTO `app_media_tags` VALUES (10024, '宫廷');
INSERT INTO `app_media_tags` VALUES (10025, '古装');
INSERT INTO `app_media_tags` VALUES (10026, '情感');
INSERT INTO `app_media_tags` VALUES (10027, '热血');
INSERT INTO `app_media_tags` VALUES (10028, '推理');
INSERT INTO `app_media_tags` VALUES (10029, '搞笑');
INSERT INTO `app_media_tags` VALUES (10030, '萝莉');
INSERT INTO `app_media_tags` VALUES (10031, '校园');
INSERT INTO `app_media_tags` VALUES (10032, '机战');
INSERT INTO `app_media_tags` VALUES (10033, '运动');
INSERT INTO `app_media_tags` VALUES (10034, '访谈');
INSERT INTO `app_media_tags` VALUES (10035, '播报');
INSERT INTO `app_media_tags` VALUES (10036, '旅游');
INSERT INTO `app_media_tags` VALUES (10037, '音乐');
INSERT INTO `app_media_tags` VALUES (10038, '美食');
INSERT INTO `app_media_tags` VALUES (10039, '纪实');
INSERT INTO `app_media_tags` VALUES (10040, '曲艺');
INSERT INTO `app_media_tags` VALUES (10041, '生活');
INSERT INTO `app_media_tags` VALUES (10042, '游戏互动');
INSERT INTO `app_media_tags` VALUES (10043, '财经');
INSERT INTO `app_media_tags` VALUES (10044, '求职');

-- ----------------------------
-- Table structure for app_media_type
-- ----------------------------
DROP TABLE IF EXISTS `app_media_type`;
CREATE TABLE `app_media_type`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic STORAGE DISK;

-- ----------------------------
-- Records of app_media_type
-- ----------------------------
INSERT INTO `app_media_type` VALUES (1, '电影');
INSERT INTO `app_media_type` VALUES (2, '电视剧');
INSERT INTO `app_media_type` VALUES (3, '综艺');
INSERT INTO `app_media_type` VALUES (4, '动漫');

-- ----------------------------
-- Table structure for app_menu_info
-- ----------------------------
DROP TABLE IF EXISTS `app_menu_info`;
CREATE TABLE `app_menu_info`  (
  `menuid` int(11) NOT NULL AUTO_INCREMENT,
  `menuname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'fa-circle-o',
  `pid` int(11) DEFAULT NULL,
  `uri` varchar(220) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `sort` int(5) DEFAULT 5,
  `is_show` int(2) DEFAULT 1,
  `is_visible` int(3) DEFAULT 1,
  PRIMARY KEY (`menuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10025 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_menu_info
-- ----------------------------
INSERT INTO `app_menu_info` VALUES (10001, '转码管理', 'fa-circle-o', 0, NULL, NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10002, '资源列表', 'fa-circle-o', 10001, '/admin/video', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10003, '转码队列', 'fa-circle-o', 10001, '/admin/transqueue', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10004, '明星管理', 'fa-circle-o', 0, NULL, NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10005, '视频列表', 'fa-circle-o', 10009, '/admin/media', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10006, '新增明星', 'fa-circle-o', 10009, '/admin/addStar', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10007, '用户管理', 'fa-circle-o', 0, NULL, NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10008, '用户列表', 'fa-circle-o', 10007, '/admin/user', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10009, '视频管理', 'fa-circle-o', 0, NULL, NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10010, '视频类型', 'fa-circle-o', 10009, '/admin/firstotype', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10011, '视频分类', 'fa-circle-o', 10009, '/admin/vidotype', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10012, '标签管理', 'fa-circle-o', 10009, '/admin/tags', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10013, '留言管理', 'fa-circle-o', 0, NULL, NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10014, '留言列表', 'fa-circle-o', 10013, '/admin/msg', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10015, '引导页内容管理', 'fa-circle-o', 0, NULL, NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10016, '明星列表', 'fa-circle-o', 10009, '/admin/star', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10017, '视频分类', 'fa-circle-o', 10009, '/admin/seek', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10018, '提现管理', 'fa-circle-o', 0, NULL, NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10019, '视频类型', 'fa-circle-o', 10009, '/admin/withdraw', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10020, '站群管理', 'fa-circle-o', 0, NULL, NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10021, '站群配置', 'fa-circle-o', 10020, '/admin/sites', NULL, 5, 1, 1);
INSERT INTO `app_menu_info` VALUES (10022, '演员管理', 'fa-circle-o', 10009, '/admin/trouble', NULL, 5, 0, 0);
INSERT INTO `app_menu_info` VALUES (10024, '视频新增', 'fa-circle-o', 10001, '/admin/addVideo', NULL, 5, 0, 0);

-- ----------------------------
-- Table structure for app_msg_log
-- ----------------------------
DROP TABLE IF EXISTS `app_msg_log`;
CREATE TABLE `app_msg_log`  (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`mid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_msg_log
-- ----------------------------
INSERT INTO `app_msg_log` VALUES (1, 10001, '123', '1541647922');

-- ----------------------------
-- Table structure for app_order_info
-- ----------------------------
DROP TABLE IF EXISTS `app_order_info`;
CREATE TABLE `app_order_info`  (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `ordernum` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `payotype` int(5) DEFAULT 1 COMMENT '1:支付宝  2：微信',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '订单标题',
  `uid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT 0 COMMENT '购买的天数数量',
  `vipotype` int(5) DEFAULT 0 COMMENT '0:无 1：月卡 5：季卡 10 年卡',
  `vipstarttime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '购买时 vip开始时间',
  `vipendtime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT 'vip 到期时间',
  `price` decimal(14, 2) DEFAULT 0.00,
  `orderstatus` int(2) DEFAULT 1 COMMENT '1:已下单    2：已支付',
  `createtime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '下单时间',
  `is_visible` int(2) DEFAULT 1,
  PRIMARY KEY (`oid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10233 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_order_info
-- ----------------------------
INSERT INTO `app_order_info` VALUES (10001, '1541833889112', 1, '全站包月 CNY$30', 10001, 30, 0, '1544572993', '1544832193', 0.03, 2, '1541833889', 1);
INSERT INTO `app_order_info` VALUES (10002, '1541993768619', 1, '全站包月 CNY$30', 10001, 30, 0, '1544572993', '1547164993', 0.01, 2, '1541993768', 1);
INSERT INTO `app_order_info` VALUES (10003, '1542179578134', 3, '全站包月 CNY$30', 10001, 30, 0, '1544659393', '1547251393', 0.00, 2, '1542179578', 1);
INSERT INTO `app_order_info` VALUES (10004, '1542179598524', 3, '全站半年 CNY$180', 10002, 180, 0, '1542179598', '1557731598', 0.00, 2, '1542179598', 1);
INSERT INTO `app_order_info` VALUES (10005, '1542179675870', 3, '全站包月 CNY$30', 10002, 30, 0, '1557731598', '1560323598', 0.00, 2, '1542179675', 1);
INSERT INTO `app_order_info` VALUES (10006, '1542179729005', 3, '全站包月 CNY$30', 10002, 30, 0, '1560323598', '1562915598', 0.00, 2, '1542179729', 1);
INSERT INTO `app_order_info` VALUES (10007, '1542182483912', 3, '全站包月 CNY$30', 10001, 30, 0, '1547251393', '1549843393', 30.00, 2, '1542182483', 1);
INSERT INTO `app_order_info` VALUES (10009, '1544496416753', 1, '全站月卡 CNY$30', 10007, 30, 1, '1575528840', '1578120840', 30.00, 1, '1544496416', 1);
INSERT INTO `app_order_info` VALUES (10010, '1544496552801', 1, '全站月卡 CNY$30', 10007, 30, 1, '1575528840', '1578120840', 30.00, 1, '1544496552', 1);
INSERT INTO `app_order_info` VALUES (10011, '1544499689230', 1, '全站月卡 CNY$30', 10007, 30, 1, '1575528840', '1578120840', 30.00, 1, '1544499689', 1);
INSERT INTO `app_order_info` VALUES (10012, '1544499695612', 2, '全站月卡 CNY$30', 10007, 30, 1, '1575528840', '1578120840', 30.00, 1, '1544499695', 1);
INSERT INTO `app_order_info` VALUES (10015, '1545636042517', 1, '全站月卡 CNY$30', 10023, 30, 1, '1545636042', '1548228042', 30.00, 1, '1545636042', 1);
INSERT INTO `app_order_info` VALUES (10016, '1545636935149', 3, '全站包月 CNY$30', 10023, 30, 0, '1545636935', '1548228935', 30.00, 2, '1545636935', 1);
INSERT INTO `app_order_info` VALUES (10017, '1545708574834', 1, '全站月卡 CNY$30', 10025, 30, 1, '1545708574', '1548300574', 30.00, 1, '1545708574', 1);
INSERT INTO `app_order_info` VALUES (10019, '1545737656751', 1, '全站月卡 CNY$30', 10018, 30, 1, '1545737656', '1548329656', 30.00, 1, '1545737656', 1);
INSERT INTO `app_order_info` VALUES (10021, '1545829405515', 2, '全站月卡 CNY$30', 10018, 30, 1, '1545829405', '1548421405', 30.00, 1, '1545829405', 1);
INSERT INTO `app_order_info` VALUES (10022, '1546417139483', 3, '全站包月 CNY$30', 10018, 30, 0, '1546417139', '1549009139', 30.00, 2, '1546417139', 1);
INSERT INTO `app_order_info` VALUES (10023, '1546417767912', 3, '全站包年 CNY$300', 10018, 365, 0, '1549009139', '1580545139', 300.00, 2, '1546417767', 1);
INSERT INTO `app_order_info` VALUES (10024, '1546438651659', 3, '全站包月 CNY$30', 10039, 30, 0, '1546438651', '1549030651', 30.00, 2, '1546438651', 1);
INSERT INTO `app_order_info` VALUES (10026, '1547101338182', 3, '全站月卡 CNY$30', 10016, 30, 1, '1547101338', '1549693338', 30.00, 2, '1547101338', 1);
INSERT INTO `app_order_info` VALUES (10027, '1547105520277', 3, '全站月卡 CNY$30', 10052, 30, 1, '1547105520', '1549697520', 30.00, 2, '1547105520', 1);
INSERT INTO `app_order_info` VALUES (10028, '1547108541843', 3, '全站月卡 CNY$30', 10053, 30, 1, '1547108541', '1549700541', 30.00, 2, '1547108541', 1);
INSERT INTO `app_order_info` VALUES (10029, '1547109058044', 3, '全站年卡 CNY$268', 10054, 365, 10, '1547109058', '1578645058', 268.00, 2, '1547109058', 1);
INSERT INTO `app_order_info` VALUES (10030, '1547175200884', 3, '全站季卡 CNY$68', 10055, 90, 5, '1547175200', '1554951200', 68.00, 2, '1547175200', 1);
INSERT INTO `app_order_info` VALUES (10031, '1547196455397', 3, '全站月卡 CNY$30', 10051, 30, 1, '1547196455', '1549788455', 30.00, 2, '1547196455', 1);
INSERT INTO `app_order_info` VALUES (10032, '1547518334869', 3, '全站月卡 CNY$30', 10129, 30, 1, '1547518334', '1550110334', 30.00, 2, '1547518334', 1);
INSERT INTO `app_order_info` VALUES (10033, '1547518797760', 3, '全站季卡 CNY$68', 10129, 90, 5, '1550110334', '1557886334', 68.00, 2, '1547518797', 1);
INSERT INTO `app_order_info` VALUES (10034, '1547518940952', 3, '全站年卡 CNY$268', 10129, 365, 10, '1557886334', '1589422334', 268.00, 2, '1547518940', 1);
INSERT INTO `app_order_info` VALUES (10035, '1547520631835', 3, '全站月卡 CNY$30', 10130, 30, 1, '1547520631', '1550112631', 30.00, 2, '1547520631', 1);
INSERT INTO `app_order_info` VALUES (10036, '1547552354814', 1, '全站月卡 CNY$30', 10129, 30, 1, '1589422334', '1592014334', 30.00, 1, '1547552354', 1);
INSERT INTO `app_order_info` VALUES (10037, '1547552360489', 2, '全站月卡 CNY$30', 10129, 30, 1, '1589422334', '1592014334', 21.00, 1, '1547552360', 1);
INSERT INTO `app_order_info` VALUES (10039, '1550231840231', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550231840', '1552823840', 30.00, 1, '1550231840', 1);
INSERT INTO `app_order_info` VALUES (10040, '1550231843041', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550231843', '1552823843', 30.00, 1, '1550231843', 1);
INSERT INTO `app_order_info` VALUES (10041, '1550231844120', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550231844', '1552823844', 30.00, 1, '1550231844', 1);
INSERT INTO `app_order_info` VALUES (10042, '1550232030714', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232030', '1552824030', 30.00, 1, '1550232030', 1);
INSERT INTO `app_order_info` VALUES (10043, '1550232033404', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550232033', '1552824033', 30.00, 1, '1550232033', 1);
INSERT INTO `app_order_info` VALUES (10044, '1550232034689', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232034', '1552824034', 30.00, 1, '1550232034', 1);
INSERT INTO `app_order_info` VALUES (10045, '1550232035805', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232035', '1552824035', 30.00, 1, '1550232035', 1);
INSERT INTO `app_order_info` VALUES (10046, '1550232036925', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550232036', '1552824036', 30.00, 1, '1550232036', 1);
INSERT INTO `app_order_info` VALUES (10048, '1550232040153', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232040', '1552824040', 30.00, 1, '1550232040', 1);
INSERT INTO `app_order_info` VALUES (10049, '1550232041519', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550232041', '1552824041', 30.00, 1, '1550232041', 1);
INSERT INTO `app_order_info` VALUES (10050, '1550232042608', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232042', '1552824042', 30.00, 1, '1550232042', 1);
INSERT INTO `app_order_info` VALUES (10051, '1550232043874', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232043', '1552824043', 30.00, 1, '1550232043', 1);
INSERT INTO `app_order_info` VALUES (10052, '1550232491844', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232491', '1552824491', 30.00, 1, '1550232491', 1);
INSERT INTO `app_order_info` VALUES (10053, '1550232492989', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550232492', '1552824492', 30.00, 1, '1550232492', 1);
INSERT INTO `app_order_info` VALUES (10054, '1550232494066', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550232494', '1552824494', 30.00, 1, '1550232494', 1);
INSERT INTO `app_order_info` VALUES (10055, '1550232514910', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550232514', '1552824514', 30.00, 1, '1550232514', 1);
INSERT INTO `app_order_info` VALUES (10056, '1550232539116', 1, '全站月卡 CNY$30', 10130, 30, 1, '1550232539', '1552824539', 30.00, 1, '1550232539', 1);
INSERT INTO `app_order_info` VALUES (10057, '1550232737180', 1, '全站月卡 CNY$30', 10130, 30, 1, '1550232737', '1552824737', 30.00, 1, '1550232737', 1);
INSERT INTO `app_order_info` VALUES (10058, '1550452822569', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550452822', '1553044822', 30.00, 1, '1550452822', 1);
INSERT INTO `app_order_info` VALUES (10059, '1550457871903', 1, '全站月卡 CNY$30', 10154, 30, 1, '1550457871', '1553049871', 30.00, 1, '1550457871', 1);
INSERT INTO `app_order_info` VALUES (10061, '1550457916756', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550457916', '1556333116', 90.00, 1, '1550457916', 1);
INSERT INTO `app_order_info` VALUES (10062, '1550458299438', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550458299', '1556333499', 90.00, 1, '1550458299', 1);
INSERT INTO `app_order_info` VALUES (10063, '1550458334315', 1, '全站月卡 CNY$30', 10154, 30, 1, '1550458334', '1553050334', 30.00, 1, '1550458334', 1);
INSERT INTO `app_order_info` VALUES (10064, '1550458791914', 1, '全站月卡 CNY$30', 10154, 30, 1, '1550458791', '1553050791', 30.00, 1, '1550458791', 1);
INSERT INTO `app_order_info` VALUES (10065, '1550459176333', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550459176', '1556334376', 90.00, 1, '1550459176', 1);
INSERT INTO `app_order_info` VALUES (10066, '1550459187695', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550459187', '1556334387', 90.00, 1, '1550459187', 1);
INSERT INTO `app_order_info` VALUES (10067, '1550459200880', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550459200', '1556334400', 90.00, 1, '1550459200', 1);
INSERT INTO `app_order_info` VALUES (10068, '1550473609776', 1, '全站月卡 CNY$30', 10154, 30, 1, '1550473609', '1553065609', 30.00, 1, '1550473609', 1);
INSERT INTO `app_order_info` VALUES (10069, '1550473642974', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550473642', '1556348842', 90.00, 1, '1550473642', 1);
INSERT INTO `app_order_info` VALUES (10070, '1550473652960', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550473652', '1556348852', 90.00, 1, '1550473652', 1);
INSERT INTO `app_order_info` VALUES (10071, '1550474116764', 1, '全站月卡 CNY$30', 10154, 30, 1, '1550474116', '1553066116', 30.00, 1, '1550474116', 1);
INSERT INTO `app_order_info` VALUES (10072, '1550474212211', 1, '全站年卡 CNY$268', 10154, 68, 5, '1550474212', '1556349412', 90.00, 1, '1550474212', 1);
INSERT INTO `app_order_info` VALUES (10074, '1550474556026', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550474556', '1553066556', 30.00, 1, '1550474556', 1);
INSERT INTO `app_order_info` VALUES (10075, '1550474562865', 2, '全站包年 CNY$300', 10151, 365, 0, '1550474562', '1582010562', 300.00, 1, '1550474562', 1);
INSERT INTO `app_order_info` VALUES (10076, '1550474571166', 1, '全站包年 CNY$300', 10151, 365, 0, '1550474571', '1582010571', 300.00, 1, '1550474571', 1);
INSERT INTO `app_order_info` VALUES (10077, '1550474605862', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550474605', '1553066605', 30.00, 1, '1550474605', 1);
INSERT INTO `app_order_info` VALUES (10078, '1550474742854', 1, '全站年卡 CNY$268', 10160, 365, 3, '1550474742', '1582010742', 268.00, 1, '1550474742', 1);
INSERT INTO `app_order_info` VALUES (10079, '1550474915263', 2, '全站月卡 CNY$30', 10154, 30, 1, '1550474915', '1553066915', 30.00, 1, '1550474915', 1);
INSERT INTO `app_order_info` VALUES (10080, '1550480742688', 2, '全站月卡 CNY$30', 10130, 30, 1, '1550480742', '1553072742', 30.00, 1, '1550480742', 1);
INSERT INTO `app_order_info` VALUES (10081, '1550480780088', 1, '全站年卡 CNY$268', 10130, 68, 5, '1550480780', '1556355980', 90.00, 1, '1550480780', 1);
INSERT INTO `app_order_info` VALUES (10082, '1550480796018', 1, '全站年卡 CNY$268', 10130, 365, 10, '1550480796', '1582016796', 268.00, 1, '1550480796', 1);
INSERT INTO `app_order_info` VALUES (10083, '1550480809454', 1, '全站月卡 CNY$30', 10130, 30, 1, '1550480809', '1553072809', 30.00, 1, '1550480809', 1);
INSERT INTO `app_order_info` VALUES (10084, '1550480820152', 2, '全站月卡 CNY$30', 10130, 30, 1, '1550480820', '1553072820', 30.00, 1, '1550480820', 1);
INSERT INTO `app_order_info` VALUES (10085, '1550480837518', 2, '全站年卡 CNY$268', 10130, 365, 10, '1550480837', '1582016837', 268.00, 1, '1550480837', 1);
INSERT INTO `app_order_info` VALUES (10086, '1550480870324', 1, '全站月卡 CNY$30', 10157, 30, 1, '1550480870', '1553072870', 30.00, 1, '1550480870', 1);
INSERT INTO `app_order_info` VALUES (10087, '1550480889892', 1, '全站季卡 CNY$68', 10157, 90, 2, '1550480889', '1558256889', 68.00, 1, '1550480889', 1);
INSERT INTO `app_order_info` VALUES (10088, '1550480902823', 2, '全站年卡 CNY$268', 10157, 365, 3, '1550480902', '1582016902', 268.00, 1, '1550480902', 1);
INSERT INTO `app_order_info` VALUES (10090, '1550480913966', 1, '全站年卡 CNY$268', 10157, 365, 3, '1550480913', '1582016913', 268.00, 1, '1550480913', 1);
INSERT INTO `app_order_info` VALUES (10091, '1550480980460', 2, '全站月卡 CNY$30', 10157, 30, 1, '1550480980', '1553072980', 30.00, 1, '1550480980', 1);
INSERT INTO `app_order_info` VALUES (10092, '1550481329982', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550481329', '1553073329', 30.00, 1, '1550481329', 1);
INSERT INTO `app_order_info` VALUES (10093, '1550481362361', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550481362', '1553073362', 30.00, 1, '1550481362', 1);
INSERT INTO `app_order_info` VALUES (10094, '1550481391435', 2, '全站季卡 CNY$68', 10160, 90, 2, '1550481391', '1558257391', 68.00, 1, '1550481391', 1);
INSERT INTO `app_order_info` VALUES (10095, '1550481422186', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550481422', '1553073422', 30.00, 1, '1550481422', 1);
INSERT INTO `app_order_info` VALUES (10096, '1550481669867', 2, '全站季卡 CNY$68', 10160, 90, 2, '1550481669', '1558257669', 68.00, 1, '1550481669', 1);
INSERT INTO `app_order_info` VALUES (10097, '1550481722436', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550481722', '1553073722', 30.00, 1, '1550481722', 1);
INSERT INTO `app_order_info` VALUES (10098, '1550481859783', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550481859', '1553073859', 30.00, 1, '1550481859', 1);
INSERT INTO `app_order_info` VALUES (10099, '1550482160662', 1, '全站年卡 CNY$268', 10160, 365, 3, '1550482160', '1582018160', 268.00, 1, '1550482160', 1);
INSERT INTO `app_order_info` VALUES (10100, '1550482188988', 2, '全站季卡 CNY$68', 10160, 90, 2, '1550482188', '1558258188', 68.00, 1, '1550482188', 1);
INSERT INTO `app_order_info` VALUES (10101, '1550482347343', 2, '全站月卡 CNY$30', 10154, 30, 1, '1550482347', '1553074347', 30.00, 1, '1550482347', 1);
INSERT INTO `app_order_info` VALUES (10102, '1550482357887', 2, '全站季卡 CNY$68', 10147, 90, 2, '1561093904', '1568869904', 68.00, 1, '1550482357', 1);
INSERT INTO `app_order_info` VALUES (10103, '1550482468006', 2, '全站月卡 CNY$30', 10162, 30, 1, '1550482468', '1553074468', 30.00, 1, '1550482468', 1);
INSERT INTO `app_order_info` VALUES (10104, '1550482491794', 1, '全站年卡 CNY$268', 10162, 68, 5, '1550482491', '1556357691', 90.00, 1, '1550482491', 1);
INSERT INTO `app_order_info` VALUES (10105, '1550482504388', 2, '全站年卡 CNY$268', 10162, 365, 10, '1550482504', '1582018504', 268.00, 1, '1550482504', 1);
INSERT INTO `app_order_info` VALUES (10106, '1550482522267', 2, '全站年卡 CNY$268', 10162, 68, 5, '1550482522', '1556357722', 90.00, 1, '1550482522', 1);
INSERT INTO `app_order_info` VALUES (10107, '1550482535848', 2, '全站月卡 CNY$30', 10162, 30, 1, '1550482535', '1553074535', 30.00, 1, '1550482535', 1);
INSERT INTO `app_order_info` VALUES (10108, '82552645', 2, '全站年卡 CNY$268', 10162, 365, 10, '1550482552', '1582018552', 28.00, 1, '1550482552', 1);
INSERT INTO `app_order_info` VALUES (10109, '1550482698693', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550482698', '1553074698', 30.00, 1, '1550482698', 1);
INSERT INTO `app_order_info` VALUES (10110, '1550482700110', 2, '全站月卡 CNY$30', 10160, 30, 1, '1550482700', '1553074700', 30.00, 1, '1550482700', 1);
INSERT INTO `app_order_info` VALUES (10111, '1550482761760', 2, '全站季卡 CNY$68', 10163, 90, 5, '1550482761', '1558258761', 68.00, 1, '1550482761', 1);
INSERT INTO `app_order_info` VALUES (10112, '1550482783391', 2, '全站月卡 CNY$30', 10163, 30, 1, '1550482783', '1553074783', 30.00, 1, '1550482783', 1);
INSERT INTO `app_order_info` VALUES (10123, '2318090569280', 2, '全站月卡 CNY$30', 10164, 30, 1, '1550538208', '1553130208', 30.00, 1, '1550538208', 1);
INSERT INTO `app_order_info` VALUES (10124, '2318183944907', 2, '全站季卡 CNY$68', 10164, 90, 2, '1550631584', '1558407584', 68.00, 1, '1550631584', 1);
INSERT INTO `app_order_info` VALUES (10125, '2318184290831', 2, '全站月卡 CNY$30', 10164, 30, 1, '1550631930', '1553223930', 30.00, 1, '1550631930', 1);
INSERT INTO `app_order_info` VALUES (10126, '2318184321184', 2, '全站季卡 CNY$68', 10164, 90, 2, '1550631960', '1558407960', 68.00, 1, '1550631960', 1);
INSERT INTO `app_order_info` VALUES (10127, '2318187970922', 2, '全站月卡 CNY$30', 10130, 30, 1, '1550635610', '1553227610', 30.00, 1, '1550635610', 1);
INSERT INTO `app_order_info` VALUES (10128, '2318187994616', 1, '全站月卡 CNY$30', 10130, 30, 1, '1550635634', '1553227634', 30.00, 1, '1550635634', 1);
INSERT INTO `app_order_info` VALUES (10130, '2318244457547', 2, '全站月卡 CNY$30', 10165, 30, 1, '1550692097', '1553284097', 30.00, 1, '1550692097', 1);
INSERT INTO `app_order_info` VALUES (10131, '2318244479810', 1, '全站年卡 CNY$268', 10165, 365, 10, '1550692119', '1582228119', 268.00, 1, '1550692119', 1);
INSERT INTO `app_order_info` VALUES (10132, '2318287592370', 2, '全站季卡 CNY$68', 10164, 90, 2, '1550735231', '1558511231', 68.00, 1, '1550735231', 1);
INSERT INTO `app_order_info` VALUES (10133, '2318704234418', 1, '全站季卡 CNY$68', 10147, 90, 2, '1561093904', '1568869904', 2.00, 1, '1551151873', 1);
INSERT INTO `app_order_info` VALUES (10134, '2318704278234', 1, '全站月卡 CNY$30', 10147, 30, 1, '1561093904', '1563685904', 1.00, 1, '1551151917', 1);
INSERT INTO `app_order_info` VALUES (10135, '2318704394874', 1, '全站月卡 CNY$30', 10147, 30, 1, '1561093904', '1563685904', 1.00, 1, '1551152034', 1);
INSERT INTO `app_order_info` VALUES (10136, '2318704399410', 1, '全站月卡 CNY$30', 10147, 30, 1, '1561093904', '1563685904', 1.00, 1, '1551152038', 1);
INSERT INTO `app_order_info` VALUES (10137, '2318706938180', 1, '全站月卡 CNY$30', 10147, 30, 1, '1561093904', '1563685904', 1.00, 1, '1551154577', 1);
INSERT INTO `app_order_info` VALUES (10138, '2318706968083', 1, '全站月卡 CNY$30', 10147, 30, 1, '1561093904', '1563685904', 1.00, 1, '1551154607', 1);
INSERT INTO `app_order_info` VALUES (10139, '2318706974653', 1, '全站年卡 CNY$268', 10147, 365, 3, '1561093904', '1592629904', 3.00, 1, '1551154614', 1);
INSERT INTO `app_order_info` VALUES (10140, '2318706978668', 1, '全站年卡 CNY$268', 10147, 365, 3, '1561093904', '1592629904', 3.00, 1, '1551154618', 1);
INSERT INTO `app_order_info` VALUES (10141, '2318706984177', 1, '全站年卡 CNY$268', 10147, 365, 3, '1561093904', '1592629904', 3.00, 1, '1551154623', 1);
INSERT INTO `app_order_info` VALUES (10142, '2318707165955', 1, '全站季卡 CNY$68', 10147, 90, 2, '1561093904', '1568869904', 2.00, 1, '1551154805', 1);
INSERT INTO `app_order_info` VALUES (10143, '2318707192819', 1, '全站年卡 CNY$268', 10147, 365, 3, '1561093904', '1592629904', 3.00, 1, '1551154832', 1);
INSERT INTO `app_order_info` VALUES (10144, '2318707329394', 1, '全站季卡 CNY$68', 10147, 90, 2, '1561093904', '1568869904', 2.00, 1, '1551154968', 1);
INSERT INTO `app_order_info` VALUES (10145, '2318707351741', 1, '全站季卡 CNY$68', 10147, 90, 2, '1561093904', '1568869904', 2.00, 1, '1551154991', 1);
INSERT INTO `app_order_info` VALUES (10147, '2318707511755', 1, '全站年卡 CNY$268', 10147, 365, 3, '1561093904', '1592629904', 3.00, 1, '1551155151', 1);
INSERT INTO `app_order_info` VALUES (10148, '2318715185897', 1, '全站月卡 CNY$30', 10166, 30, 1, '1551162825', '1553754825', 30.00, 1, '1551162825', 1);
INSERT INTO `app_order_info` VALUES (10149, '2318717584555', 1, '全站月卡 CNY$30', 10167, 30, 1, '1551165224', '1553757224', 30.00, 1, '1551165224', 1);
INSERT INTO `app_order_info` VALUES (10150, '2318718786393', 1, '全站季卡 CNY$68', 10167, 90, 5, '1551166425', '1558942425', 68.00, 1, '1551166425', 1);
INSERT INTO `app_order_info` VALUES (10151, '2318721406955', 1, '全站月卡 CNY$30', 10167, 30, 1, '1551169046', '1553761046', 3.00, 1, '1551169046', 1);
INSERT INTO `app_order_info` VALUES (10152, '2318721429063', 1, '全站季卡 CNY$68', 10167, 90, 5, '1551169068', '1558945068', 2.00, 1, '1551169068', 1);
INSERT INTO `app_order_info` VALUES (10153, '2318721444731', 1, '全站年卡 CNY$268', 10167, 365, 10, '1551169084', '1582705084', 1.00, 1, '1551169084', 1);
INSERT INTO `app_order_info` VALUES (10154, '2318721730489', 1, '全站月卡 CNY$30', 10167, 30, 1, '1551169369', '1553761369', 1.00, 1, '1551169369', 1);
INSERT INTO `app_order_info` VALUES (10155, '2318721761983', 1, '全站季卡 CNY$68', 10167, 90, 5, '1551169401', '1558945401', 2.00, 1, '1551169401', 1);
INSERT INTO `app_order_info` VALUES (10156, '2318721777640', 1, '全站年卡 CNY$268', 10167, 365, 10, '1551169417', '1582705417', 3.00, 1, '1551169417', 1);
INSERT INTO `app_order_info` VALUES (10157, '2318721812611', 1, '全站年卡 CNY$268', 10167, 365, 10, '1551169452', '1582705452', 3.00, 1, '1551169452', 1);
INSERT INTO `app_order_info` VALUES (10158, '2318721895084', 2, '全站季卡 CNY$68', 10167, 90, 5, '1551169534', '1558945534', 68.00, 1, '1551169534', 1);
INSERT INTO `app_order_info` VALUES (10159, '2319327081845', 1, '全站月卡 CNY$30', 10171, 30, 1, '1551774721', '1554366721', 1.00, 1, '1551774721', 1);
INSERT INTO `app_order_info` VALUES (10160, '2319327453390', 1, '全站月卡 CNY$30', 10170, 30, 1, '1551775092', '1554367092', 1.00, 1, '1551775092', 1);
INSERT INTO `app_order_info` VALUES (10161, '2319456837628', 2, '全站月卡 CNY$30', 10177, 30, 1, '1551904477', '1554496477', 1.00, 2, '1551904477', 1);
INSERT INTO `app_order_info` VALUES (10162, '2319457179803', 2, '全站年卡 CNY$268', 10180, 365, 3, '1551904819', '1583440819', 3.00, 1, '1551904819', 1);
INSERT INTO `app_order_info` VALUES (10163, '2319457200903', 2, '全站年卡 CNY$268', 10180, 365, 3, '1551904840', '1583440840', 3.00, 1, '1551904840', 1);
INSERT INTO `app_order_info` VALUES (10164, '2319457219642', 1, '全站年卡 CNY$268', 10180, 365, 3, '1551904859', '1583440859', 3.00, 2, '1551904859', 1);
INSERT INTO `app_order_info` VALUES (10165, '1551905316534', 3, '全站季卡 CNY$68', 10176, 90, 5, '1551905316', '1559681316', 68.00, 2, '1551905316', 1);
INSERT INTO `app_order_info` VALUES (10166, '1551905317092', 3, '全站季卡 CNY$68', 10176, 90, 5, '1559681316', '1567457316', 68.00, 2, '1551905317', 1);
INSERT INTO `app_order_info` VALUES (10167, '1551905317642', 3, '全站季卡 CNY$68', 10176, 90, 5, '1567457316', '1575233316', 68.00, 2, '1551905317', 1);
INSERT INTO `app_order_info` VALUES (10168, '1551905318628', 3, '全站季卡 CNY$68', 10176, 90, 5, '1575233316', '1583009316', 68.00, 2, '1551905318', 1);
INSERT INTO `app_order_info` VALUES (10169, '1551905319150', 3, '全站季卡 CNY$68', 10176, 90, 5, '1583009316', '1590785316', 68.00, 2, '1551905319', 1);
INSERT INTO `app_order_info` VALUES (10170, '1551905347468', 3, '全站年卡 CNY$268', 10176, 365, 10, '1590785316', '1622321316', 268.00, 2, '1551905347', 1);
INSERT INTO `app_order_info` VALUES (10171, '1551906335976', 3, '全站月卡 CNY$30', 10176, 30, 10, '1622321316', '1624913316', 30.00, 2, '1551906335', 1);
INSERT INTO `app_order_info` VALUES (10172, '1551906364100', 3, '全站月卡 CNY$30', 10176, 30, 10, '1624913316', '1627505316', 30.00, 2, '1551906364', 1);
INSERT INTO `app_order_info` VALUES (10173, '1551906410068', 3, '全站月卡 CNY$30', 10176, 30, 10, '1627505316', '1630097316', 30.00, 2, '1551906410', 1);
INSERT INTO `app_order_info` VALUES (10174, '1551906412447', 3, '全站月卡 CNY$30', 10176, 30, 10, '1630097316', '1632689316', 30.00, 2, '1551906412', 1);
INSERT INTO `app_order_info` VALUES (10175, '1551906419121', 3, '全站季卡 CNY$68', 10176, 90, 10, '1632689316', '1640465316', 68.00, 2, '1551906419', 1);
INSERT INTO `app_order_info` VALUES (10176, '1551906614492', 3, '全站月卡 CNY$30', 10180, 30, 3, '1583440859', '1586032859', 30.00, 2, '1551906614', 1);
INSERT INTO `app_order_info` VALUES (10177, '2319853405323', 1, '全站年卡 CNY$268', 10186, 365, 3, '1552301044', '1583837044', 3.00, 1, '1552301044', 1);
INSERT INTO `app_order_info` VALUES (10178, '2319912193183', 1, '全站年卡 CNY$268', 10189, 365, 3, '1552359832', '1583895832', 3.00, 2, '1552359832', 1);
INSERT INTO `app_order_info` VALUES (10179, '2319913190834', 2, '全站月卡 CNY$30', 10188, 30, 1, '1552360830', '1554952830', 1.00, 1, '1552360830', 1);
INSERT INTO `app_order_info` VALUES (10180, '2319913239758', 2, '全站季卡 CNY$68', 10188, 90, 5, '1552360879', '1560136879', 2.00, 1, '1552360879', 1);
INSERT INTO `app_order_info` VALUES (10181, '2319913252407', 2, '全站年卡 CNY$268', 10188, 365, 10, '1552360891', '1583896891', 3.00, 1, '1552360891', 1);
INSERT INTO `app_order_info` VALUES (10182, '2319915395959', 1, '全站年卡 CNY$268', 10189, 365, 3, '1583895832', '1615431832', 3.00, 2, '1552363035', 1);
INSERT INTO `app_order_info` VALUES (10183, '2319923189599', 1, '全站季卡 CNY$68', 10189, 90, 2, '1615431832', '1623207832', 2.00, 2, '1552370829', 1);
INSERT INTO `app_order_info` VALUES (10184, '2319923814106', 2, '全站月卡 CNY$30', 10189, 30, 1, '1623207832', '1625799832', 1.00, 1, '1552371453', 1);
INSERT INTO `app_order_info` VALUES (10185, '2319923886512', 1, '全站月卡 CNY$30', 10189, 30, 1, '1623207832', '1625799832', 1.00, 2, '1552371526', 1);
INSERT INTO `app_order_info` VALUES (10186, '2319930245443', 1, '全站季卡 CNY$68', 10189, 90, 2, '1615431832', '1623207832', 2.00, 2, '1552377884', 1);
INSERT INTO `app_order_info` VALUES (10187, '2320427867903', 1, '全站月卡 CNY$30', 10192, 30, 1, '1552875507', '1555467507', 1.00, 1, '1552875507', 1);
INSERT INTO `app_order_info` VALUES (10188, '2320431020182', 1, '全站月卡 CNY$30', 10168, 30, 1, '1552878659', '1555470659', 1.00, 2, '1552878659', 1);
INSERT INTO `app_order_info` VALUES (10189, '2320431100458', 1, '全站月卡 CNY$30', 10168, 30, 1, '1555470659', '1558062659', 1.00, 1, '1552878739', 1);
INSERT INTO `app_order_info` VALUES (10190, '2320462160250', 2, '全站月卡 CNY$30', 10192, 30, 1, '1552909799', '1555501799', 1.00, 1, '1552909799', 1);
INSERT INTO `app_order_info` VALUES (10191, '2320462252806', 1, '全站年卡 CNY$268', 10192, 365, 10, '1552909892', '1584445892', 3.00, 1, '1552909892', 1);
INSERT INTO `app_order_info` VALUES (10192, '2320462785223', 2, '全站月卡 CNY$30', 10192, 30, 1, '1552910424', '1555502424', 1.00, 1, '1552910424', 1);
INSERT INTO `app_order_info` VALUES (10193, '2320462849270', 1, '全站月卡 CNY$30', 10192, 30, 1, '1552910488', '1555502488', 1.00, 1, '1552910488', 1);
INSERT INTO `app_order_info` VALUES (10195, '2320530287473', 2, '全站月卡 CNY$30', 10192, 30, 1, '1552977926', '1555569926', 1.00, 1, '1552977926', 1);
INSERT INTO `app_order_info` VALUES (10197, '2320530351477', 1, '全站月卡 CNY$30', 10194, 30, 1, '1552977990', '1555569990', 1.00, 1, '1552977990', 1);
INSERT INTO `app_order_info` VALUES (10198, '2320537164799', 2, '全站月卡 CNY$30', 10193, 30, 1, '1552984804', '1555576804', 1.00, 1, '1552984804', 1);
INSERT INTO `app_order_info` VALUES (10199, '2320537203850', 2, '全站月卡 CNY$30', 10193, 30, 1, '1552984843', '1555576843', 1.00, 1, '1552984843', 1);
INSERT INTO `app_order_info` VALUES (10200, '2320537233607', 1, '全站月卡 CNY$30', 10193, 30, 1, '1552984873', '1555576873', 1.00, 1, '1552984873', 1);
INSERT INTO `app_order_info` VALUES (10202, '2320594431973', 1, '全站月卡 CNY$30', 10193, 30, 1, '1553042071', '1555634071', 1.00, 1, '1553042071', 1);
INSERT INTO `app_order_info` VALUES (10203, '2320594538373', 1, '全站月卡 CNY$30', 10193, 30, 1, '1553042177', '1555634177', 1.00, 1, '1553042177', 1);
INSERT INTO `app_order_info` VALUES (10204, '2320623836314', 1, '全站月卡 CNY$30', 10197, 30, 1, '1553071475', '1555663475', 1.00, 1, '1553071475', 1);
INSERT INTO `app_order_info` VALUES (10205, '2320624180073', 2, '全站月卡 CNY$30', 10197, 30, 1, '1553071819', '1555663819', 1.00, 1, '1553071819', 1);
INSERT INTO `app_order_info` VALUES (10206, '2320624187145', 1, '全站月卡 CNY$30', 10197, 30, 1, '1553071826', '1555663826', 1.00, 2, '1553071826', 1);
INSERT INTO `app_order_info` VALUES (10207, '2320624690715', 1, '全站季卡 CNY$68', 10197, 90, 5, '1555663826', '1563439826', 2.00, 1, '1553072330', 1);
INSERT INTO `app_order_info` VALUES (10208, '2320624701311', 2, '全站季卡 CNY$68', 10197, 90, 5, '1555663826', '1563439826', 2.00, 1, '1553072340', 1);
INSERT INTO `app_order_info` VALUES (10209, '2320680072500', 2, '全站月卡 CNY$30', 10193, 30, 1, '1553127712', '1555719712', 1.00, 1, '1553127712', 1);
INSERT INTO `app_order_info` VALUES (10210, '2320680240507', 1, '全站月卡 CNY$30', 10193, 30, 1, '1553127880', '1555719880', 1.00, 1, '1553127880', 1);
INSERT INTO `app_order_info` VALUES (10211, '2320685217530', 1, '全站年卡 CNY$268', 10198, 365, 10, '1553132857', '1584668857', 3.00, 2, '1553132857', 1);
INSERT INTO `app_order_info` VALUES (10212, '1553133427029', 3, '全站季卡 CNY$68', 10197, 90, 5, '1555663826', '1563439826', 68.00, 2, '1553133427', 1);
INSERT INTO `app_order_info` VALUES (10213, '2320687690051', 1, '全站月卡 CNY$30', 10194, 30, 1, '1553135329', '1555727329', 1.00, 2, '1553135329', 1);
INSERT INTO `app_order_info` VALUES (10214, '2320689199643', 1, '全站月卡 CNY$30', 10199, 30, 1, '1553136839', '1555728839', 1.00, 2, '1553136839', 1);
INSERT INTO `app_order_info` VALUES (10215, '2320689390224', 1, '全站年卡 CNY$268', 10199, 365, 10, '1555728839', '1587264839', 3.00, 1, '1553137029', 1);
INSERT INTO `app_order_info` VALUES (10216, '2320689506753', 1, '全站季卡 CNY$68', 10199, 90, 5, '1555728839', '1563504839', 2.00, 1, '1553137146', 1);
INSERT INTO `app_order_info` VALUES (10217, '2320689622238', 2, '全站年卡 CNY$268', 10199, 365, 10, '1555728839', '1587264839', 3.00, 1, '1553137261', 1);
INSERT INTO `app_order_info` VALUES (10218, '2320713317200', 1, '全站月卡 CNY$30', 10193, 30, 1, '1553160956', '1555752956', 1.00, 1, '1553160956', 1);
INSERT INTO `app_order_info` VALUES (10219, '2321329749085', 2, '全站季卡 CNY$68', 10189, 90, 2, '1623207832', '1630983832', 2.00, 2, '1553777388', 1);
INSERT INTO `app_order_info` VALUES (10220, '2321332051914', 2, '全站季卡 CNY$68', 10204, 90, 5, '1553779691', '1561555691', 2.00, 1, '1553779691', 1);
INSERT INTO `app_order_info` VALUES (10221, '2321332082126', 1, '全站月卡 CNY$30', 10204, 30, 1, '1553779721', '1556371721', 1.00, 1, '1553779721', 1);
INSERT INTO `app_order_info` VALUES (10222, '2321332187701', 1, '全站月卡 CNY$30', 10204, 30, 1, '1553779827', '1556371827', 1.00, 1, '1553779827', 1);
INSERT INTO `app_order_info` VALUES (10223, '2321332324256', 1, '全站月卡 CNY$30', 10204, 30, 1, '1553779963', '1556371963', 1.00, 2, '1553779963', 1);
INSERT INTO `app_order_info` VALUES (10224, '2321340141002', 1, '全站月卡 CNY$30', 10205, 30, 1, '1553787780', '1556379780', 1.00, 1, '1553787780', 1);
INSERT INTO `app_order_info` VALUES (10225, '2321371013488', 1, '全站年卡 CNY$268', 10207, 365, 10, '1553818652', '1585354652', 3.00, 1, '1553818652', 1);
INSERT INTO `app_order_info` VALUES (10226, '2321371187767', 2, '全站年卡 CNY$268', 10207, 365, 10, '1553818827', '1585354827', 3.00, 1, '1553818827', 1);
INSERT INTO `app_order_info` VALUES (10227, '2321371236658', 2, '全站年卡 CNY$268', 10207, 365, 10, '1553818876', '1585354876', 3.00, 1, '1553818876', 1);
INSERT INTO `app_order_info` VALUES (10228, '2321371322052', 1, '全站年卡 CNY$268', 10207, 365, 10, '1553818961', '1585354961', 3.00, 2, '1553818961', 1);
INSERT INTO `app_order_info` VALUES (10229, '2321371610391', 1, '全站年卡 CNY$268', 10208, 365, 10, '1553819249', '1585355249', 3.00, 2, '1553819249', 1);
INSERT INTO `app_order_info` VALUES (10230, '2321371807389', 1, '全站年卡 CNY$268', 10209, 365, 10, '1553819446', '1585355446', 3.00, 2, '1553819446', 1);
INSERT INTO `app_order_info` VALUES (10231, '2321371964561', 1, '全站年卡 CNY$268', 10210, 365, 10, '1553819604', '1585355604', 3.00, 2, '1553819604', 1);
INSERT INTO `app_order_info` VALUES (10232, '2321372423726', 2, '全站年卡 CNY$268', 10205, 365, 10, '1553820063', '1585356063', 3.00, 1, '1553820063', 1);

-- ----------------------------
-- Table structure for app_order_logs
-- ----------------------------
DROP TABLE IF EXISTS `app_order_logs`;
CREATE TABLE `app_order_logs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `order_status` int(5) DEFAULT NULL,
  `createtime` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 274 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_order_logs
-- ----------------------------
INSERT INTO `app_order_logs` VALUES (74, 10001, 10001, 1, '2018-11-10 15:11:29');
INSERT INTO `app_order_logs` VALUES (75, 10002, 10001, 1, '2018-11-12 11:36:08');
INSERT INTO `app_order_logs` VALUES (77, 10009, 10007, 1, '2018-12-11 10:46:56');
INSERT INTO `app_order_logs` VALUES (78, 10010, 10007, 1, '2018-12-11 10:49:12');
INSERT INTO `app_order_logs` VALUES (79, 10011, 10007, 1, '2018-12-11 11:41:29');
INSERT INTO `app_order_logs` VALUES (80, 10012, 10007, 1, '2018-12-11 11:41:35');
INSERT INTO `app_order_logs` VALUES (83, 10015, 10023, 1, '2018-12-24 15:20:42');
INSERT INTO `app_order_logs` VALUES (84, 10017, 10025, 1, '2018-12-25 11:29:34');
INSERT INTO `app_order_logs` VALUES (86, 10019, 10018, 1, '2018-12-25 19:34:16');
INSERT INTO `app_order_logs` VALUES (88, 10021, 10018, 1, '2018-12-26 21:03:25');
INSERT INTO `app_order_logs` VALUES (90, 10036, 10129, 1, '2019-01-15 19:39:14');
INSERT INTO `app_order_logs` VALUES (91, 10037, 10129, 1, '2019-01-15 19:39:20');
INSERT INTO `app_order_logs` VALUES (93, 10039, 10157, 1, '2019-02-15 19:57:20');
INSERT INTO `app_order_logs` VALUES (94, 10040, 10157, 1, '2019-02-15 19:57:23');
INSERT INTO `app_order_logs` VALUES (95, 10041, 10157, 1, '2019-02-15 19:57:24');
INSERT INTO `app_order_logs` VALUES (96, 10042, 10157, 1, '2019-02-15 20:00:30');
INSERT INTO `app_order_logs` VALUES (97, 10043, 10157, 1, '2019-02-15 20:00:33');
INSERT INTO `app_order_logs` VALUES (98, 10044, 10157, 1, '2019-02-15 20:00:34');
INSERT INTO `app_order_logs` VALUES (99, 10045, 10157, 1, '2019-02-15 20:00:35');
INSERT INTO `app_order_logs` VALUES (100, 10046, 10157, 1, '2019-02-15 20:00:36');
INSERT INTO `app_order_logs` VALUES (102, 10048, 10157, 1, '2019-02-15 20:00:40');
INSERT INTO `app_order_logs` VALUES (103, 10049, 10157, 1, '2019-02-15 20:00:41');
INSERT INTO `app_order_logs` VALUES (104, 10050, 10157, 1, '2019-02-15 20:00:42');
INSERT INTO `app_order_logs` VALUES (105, 10051, 10157, 1, '2019-02-15 20:00:43');
INSERT INTO `app_order_logs` VALUES (106, 10052, 10157, 1, '2019-02-15 20:08:11');
INSERT INTO `app_order_logs` VALUES (107, 10053, 10157, 1, '2019-02-15 20:08:12');
INSERT INTO `app_order_logs` VALUES (108, 10054, 10157, 1, '2019-02-15 20:08:14');
INSERT INTO `app_order_logs` VALUES (109, 10055, 10157, 1, '2019-02-15 20:08:34');
INSERT INTO `app_order_logs` VALUES (110, 10056, 10130, 1, '2019-02-15 20:08:59');
INSERT INTO `app_order_logs` VALUES (111, 10057, 10130, 1, '2019-02-15 20:12:17');
INSERT INTO `app_order_logs` VALUES (112, 10058, 10157, 1, '2019-02-18 09:20:22');
INSERT INTO `app_order_logs` VALUES (113, 10059, 10154, 1, '2019-02-18 10:44:31');
INSERT INTO `app_order_logs` VALUES (115, 10061, 10154, 1, '2019-02-18 10:45:16');
INSERT INTO `app_order_logs` VALUES (116, 10062, 10154, 1, '2019-02-18 10:51:39');
INSERT INTO `app_order_logs` VALUES (117, 10063, 10154, 1, '2019-02-18 10:52:14');
INSERT INTO `app_order_logs` VALUES (118, 10064, 10154, 1, '2019-02-18 10:59:51');
INSERT INTO `app_order_logs` VALUES (119, 10065, 10154, 1, '2019-02-18 11:06:16');
INSERT INTO `app_order_logs` VALUES (120, 10066, 10154, 1, '2019-02-18 11:06:27');
INSERT INTO `app_order_logs` VALUES (121, 10067, 10154, 1, '2019-02-18 11:06:40');
INSERT INTO `app_order_logs` VALUES (122, 10068, 10154, 1, '2019-02-18 15:06:49');
INSERT INTO `app_order_logs` VALUES (123, 10069, 10154, 1, '2019-02-18 15:07:22');
INSERT INTO `app_order_logs` VALUES (124, 10070, 10154, 1, '2019-02-18 15:07:32');
INSERT INTO `app_order_logs` VALUES (125, 10071, 10154, 1, '2019-02-18 15:15:16');
INSERT INTO `app_order_logs` VALUES (126, 10072, 10154, 1, '2019-02-18 15:16:52');
INSERT INTO `app_order_logs` VALUES (128, 10074, 10160, 1, '2019-02-18 15:22:36');
INSERT INTO `app_order_logs` VALUES (129, 10075, 10151, 1, '2019-02-18 15:22:42');
INSERT INTO `app_order_logs` VALUES (130, 10076, 10151, 1, '2019-02-18 15:22:51');
INSERT INTO `app_order_logs` VALUES (131, 10077, 10160, 1, '2019-02-18 15:23:25');
INSERT INTO `app_order_logs` VALUES (132, 10078, 10160, 1, '2019-02-18 15:25:42');
INSERT INTO `app_order_logs` VALUES (133, 10079, 10154, 1, '2019-02-18 15:28:35');
INSERT INTO `app_order_logs` VALUES (134, 10080, 10130, 1, '2019-02-18 17:05:42');
INSERT INTO `app_order_logs` VALUES (135, 10081, 10130, 1, '2019-02-18 17:06:20');
INSERT INTO `app_order_logs` VALUES (136, 10082, 10130, 1, '2019-02-18 17:06:36');
INSERT INTO `app_order_logs` VALUES (137, 10083, 10130, 1, '2019-02-18 17:06:49');
INSERT INTO `app_order_logs` VALUES (138, 10084, 10130, 1, '2019-02-18 17:07:00');
INSERT INTO `app_order_logs` VALUES (139, 10085, 10130, 1, '2019-02-18 17:07:17');
INSERT INTO `app_order_logs` VALUES (140, 10086, 10157, 1, '2019-02-18 17:07:50');
INSERT INTO `app_order_logs` VALUES (141, 10087, 10157, 1, '2019-02-18 17:08:09');
INSERT INTO `app_order_logs` VALUES (142, 10088, 10157, 1, '2019-02-18 17:08:22');
INSERT INTO `app_order_logs` VALUES (144, 10090, 10157, 1, '2019-02-18 17:08:33');
INSERT INTO `app_order_logs` VALUES (145, 10091, 10157, 1, '2019-02-18 17:09:40');
INSERT INTO `app_order_logs` VALUES (146, 10092, 10160, 1, '2019-02-18 17:15:29');
INSERT INTO `app_order_logs` VALUES (147, 10093, 10160, 1, '2019-02-18 17:16:02');
INSERT INTO `app_order_logs` VALUES (148, 10094, 10160, 1, '2019-02-18 17:16:31');
INSERT INTO `app_order_logs` VALUES (149, 10095, 10160, 1, '2019-02-18 17:17:02');
INSERT INTO `app_order_logs` VALUES (150, 10096, 10160, 1, '2019-02-18 17:21:09');
INSERT INTO `app_order_logs` VALUES (151, 10097, 10160, 1, '2019-02-18 17:22:02');
INSERT INTO `app_order_logs` VALUES (152, 10098, 10160, 1, '2019-02-18 17:24:19');
INSERT INTO `app_order_logs` VALUES (153, 10099, 10160, 1, '2019-02-18 17:29:20');
INSERT INTO `app_order_logs` VALUES (154, 10100, 10160, 1, '2019-02-18 17:29:48');
INSERT INTO `app_order_logs` VALUES (155, 10101, 10154, 1, '2019-02-18 17:32:27');
INSERT INTO `app_order_logs` VALUES (156, 10102, 10147, 1, '2019-02-18 17:32:37');
INSERT INTO `app_order_logs` VALUES (157, 10103, 10162, 1, '2019-02-18 17:34:28');
INSERT INTO `app_order_logs` VALUES (158, 10104, 10162, 1, '2019-02-18 17:34:51');
INSERT INTO `app_order_logs` VALUES (159, 10105, 10162, 1, '2019-02-18 17:35:04');
INSERT INTO `app_order_logs` VALUES (160, 10106, 10162, 1, '2019-02-18 17:35:22');
INSERT INTO `app_order_logs` VALUES (161, 10107, 10162, 1, '2019-02-18 17:35:35');
INSERT INTO `app_order_logs` VALUES (162, 10108, 10162, 1, '2019-02-18 17:35:52');
INSERT INTO `app_order_logs` VALUES (163, 10109, 10160, 1, '2019-02-18 17:38:18');
INSERT INTO `app_order_logs` VALUES (164, 10110, 10160, 1, '2019-02-18 17:38:20');
INSERT INTO `app_order_logs` VALUES (165, 10111, 10163, 1, '2019-02-18 17:39:21');
INSERT INTO `app_order_logs` VALUES (166, 10112, 10163, 1, '2019-02-18 17:39:43');
INSERT INTO `app_order_logs` VALUES (167, 10113, 10147, 1, '2019-02-18 17:39:58');
INSERT INTO `app_order_logs` VALUES (168, 10114, 10147, 1, '2019-02-18 17:40:15');
INSERT INTO `app_order_logs` VALUES (169, 10115, 10164, 1, '2019-02-18 17:59:51');
INSERT INTO `app_order_logs` VALUES (170, 10116, 10164, 1, '2019-02-18 18:01:35');
INSERT INTO `app_order_logs` VALUES (171, 10117, 10164, 1, '2019-02-18 18:04:24');
INSERT INTO `app_order_logs` VALUES (172, 10118, 10164, 1, '2019-02-18 18:24:29');
INSERT INTO `app_order_logs` VALUES (173, 10119, 10164, 1, '2019-02-18 18:24:51');
INSERT INTO `app_order_logs` VALUES (174, 10120, 10164, 1, '2019-02-18 18:25:38');
INSERT INTO `app_order_logs` VALUES (175, 10121, 10164, 1, '2019-02-18 18:28:37');
INSERT INTO `app_order_logs` VALUES (176, 10122, 10164, 1, '2019-02-18 18:30:23');
INSERT INTO `app_order_logs` VALUES (177, 10123, 10164, 1, '2019-02-19 09:03:28');
INSERT INTO `app_order_logs` VALUES (178, 10124, 10164, 1, '2019-02-20 10:59:44');
INSERT INTO `app_order_logs` VALUES (179, 10125, 10164, 1, '2019-02-20 11:05:30');
INSERT INTO `app_order_logs` VALUES (180, 10126, 10164, 1, '2019-02-20 11:06:00');
INSERT INTO `app_order_logs` VALUES (181, 10127, 10130, 1, '2019-02-20 12:06:50');
INSERT INTO `app_order_logs` VALUES (182, 10128, 10130, 1, '2019-02-20 12:07:14');
INSERT INTO `app_order_logs` VALUES (184, 10130, 10165, 1, '2019-02-21 03:48:17');
INSERT INTO `app_order_logs` VALUES (185, 10131, 10165, 1, '2019-02-21 03:48:39');
INSERT INTO `app_order_logs` VALUES (186, 10132, 10164, 1, '2019-02-21 15:47:11');
INSERT INTO `app_order_logs` VALUES (187, 10133, 10147, 1, '2019-02-26 11:31:13');
INSERT INTO `app_order_logs` VALUES (188, 10134, 10147, 1, '2019-02-26 11:31:57');
INSERT INTO `app_order_logs` VALUES (189, 10135, 10147, 1, '2019-02-26 11:33:54');
INSERT INTO `app_order_logs` VALUES (190, 10136, 10147, 1, '2019-02-26 11:33:58');
INSERT INTO `app_order_logs` VALUES (191, 10137, 10147, 1, '2019-02-26 12:16:17');
INSERT INTO `app_order_logs` VALUES (192, 10138, 10147, 1, '2019-02-26 12:16:47');
INSERT INTO `app_order_logs` VALUES (193, 10139, 10147, 1, '2019-02-26 12:16:54');
INSERT INTO `app_order_logs` VALUES (194, 10140, 10147, 1, '2019-02-26 12:16:58');
INSERT INTO `app_order_logs` VALUES (195, 10141, 10147, 1, '2019-02-26 12:17:03');
INSERT INTO `app_order_logs` VALUES (196, 10142, 10147, 1, '2019-02-26 12:20:05');
INSERT INTO `app_order_logs` VALUES (197, 10143, 10147, 1, '2019-02-26 12:20:32');
INSERT INTO `app_order_logs` VALUES (198, 10144, 10147, 1, '2019-02-26 12:22:48');
INSERT INTO `app_order_logs` VALUES (199, 10145, 10147, 1, '2019-02-26 12:23:11');
INSERT INTO `app_order_logs` VALUES (201, 10147, 10147, 1, '2019-02-26 12:25:51');
INSERT INTO `app_order_logs` VALUES (202, 10148, 10166, 1, '2019-02-26 14:33:45');
INSERT INTO `app_order_logs` VALUES (203, 10149, 10167, 1, '2019-02-26 15:13:44');
INSERT INTO `app_order_logs` VALUES (204, 10150, 10167, 1, '2019-02-26 15:33:45');
INSERT INTO `app_order_logs` VALUES (205, 10151, 10167, 1, '2019-02-26 16:17:26');
INSERT INTO `app_order_logs` VALUES (206, 10152, 10167, 1, '2019-02-26 16:17:48');
INSERT INTO `app_order_logs` VALUES (207, 10153, 10167, 1, '2019-02-26 16:18:04');
INSERT INTO `app_order_logs` VALUES (208, 10154, 10167, 1, '2019-02-26 16:22:50');
INSERT INTO `app_order_logs` VALUES (209, 10155, 10167, 1, '2019-02-26 16:23:21');
INSERT INTO `app_order_logs` VALUES (210, 10156, 10167, 1, '2019-02-26 16:23:37');
INSERT INTO `app_order_logs` VALUES (211, 10157, 10167, 1, '2019-02-26 16:24:12');
INSERT INTO `app_order_logs` VALUES (212, 10158, 10167, 1, '2019-02-26 16:25:34');
INSERT INTO `app_order_logs` VALUES (213, 10159, 10171, 1, '2019-03-05 16:32:01');
INSERT INTO `app_order_logs` VALUES (214, 10160, 10170, 1, '2019-03-05 16:38:12');
INSERT INTO `app_order_logs` VALUES (215, 10161, 10177, 1, '2019-03-07 04:34:37');
INSERT INTO `app_order_logs` VALUES (216, 10162, 10180, 1, '2019-03-07 04:40:19');
INSERT INTO `app_order_logs` VALUES (217, 10163, 10180, 1, '2019-03-07 04:40:40');
INSERT INTO `app_order_logs` VALUES (218, 10164, 10180, 1, '2019-03-07 04:40:59');
INSERT INTO `app_order_logs` VALUES (219, 10177, 10186, 1, '2019-03-11 18:44:04');
INSERT INTO `app_order_logs` VALUES (220, 10178, 10189, 1, '2019-03-12 11:03:52');
INSERT INTO `app_order_logs` VALUES (221, 10179, 10188, 1, '2019-03-12 11:20:30');
INSERT INTO `app_order_logs` VALUES (222, 10180, 10188, 1, '2019-03-12 11:21:19');
INSERT INTO `app_order_logs` VALUES (223, 10181, 10188, 1, '2019-03-12 11:21:31');
INSERT INTO `app_order_logs` VALUES (224, 10182, 10189, 1, '2019-03-12 11:57:15');
INSERT INTO `app_order_logs` VALUES (225, 10183, 10189, 1, '2019-03-12 14:07:09');
INSERT INTO `app_order_logs` VALUES (226, 10184, 10189, 1, '2019-03-12 14:17:33');
INSERT INTO `app_order_logs` VALUES (227, 10185, 10189, 1, '2019-03-12 14:18:46');
INSERT INTO `app_order_logs` VALUES (228, 10186, 10189, 1, '2019-03-12 16:04:44');
INSERT INTO `app_order_logs` VALUES (229, 10187, 10192, 1, '2019-03-18 10:18:27');
INSERT INTO `app_order_logs` VALUES (230, 10188, 10168, 1, '2019-03-18 11:10:59');
INSERT INTO `app_order_logs` VALUES (231, 10189, 10168, 1, '2019-03-18 11:12:19');
INSERT INTO `app_order_logs` VALUES (232, 10190, 10192, 1, '2019-03-18 19:49:59');
INSERT INTO `app_order_logs` VALUES (233, 10191, 10192, 1, '2019-03-18 19:51:32');
INSERT INTO `app_order_logs` VALUES (234, 10192, 10192, 1, '2019-03-18 20:00:24');
INSERT INTO `app_order_logs` VALUES (235, 10193, 10192, 1, '2019-03-18 20:01:28');
INSERT INTO `app_order_logs` VALUES (237, 10195, 10192, 1, '2019-03-19 14:45:26');
INSERT INTO `app_order_logs` VALUES (239, 10197, 10194, 1, '2019-03-19 14:46:30');
INSERT INTO `app_order_logs` VALUES (240, 10198, 10193, 1, '2019-03-19 16:40:04');
INSERT INTO `app_order_logs` VALUES (241, 10199, 10193, 1, '2019-03-19 16:40:43');
INSERT INTO `app_order_logs` VALUES (242, 10200, 10193, 1, '2019-03-19 16:41:13');
INSERT INTO `app_order_logs` VALUES (244, 10202, 10193, 1, '2019-03-20 08:34:31');
INSERT INTO `app_order_logs` VALUES (245, 10203, 10193, 1, '2019-03-20 08:36:17');
INSERT INTO `app_order_logs` VALUES (246, 10204, 10197, 1, '2019-03-20 16:44:35');
INSERT INTO `app_order_logs` VALUES (247, 10205, 10197, 1, '2019-03-20 16:50:19');
INSERT INTO `app_order_logs` VALUES (248, 10206, 10197, 1, '2019-03-20 16:50:26');
INSERT INTO `app_order_logs` VALUES (249, 10207, 10197, 1, '2019-03-20 16:58:50');
INSERT INTO `app_order_logs` VALUES (250, 10208, 10197, 1, '2019-03-20 16:59:00');
INSERT INTO `app_order_logs` VALUES (251, 10209, 10193, 1, '2019-03-21 08:21:52');
INSERT INTO `app_order_logs` VALUES (252, 10210, 10193, 1, '2019-03-21 08:24:40');
INSERT INTO `app_order_logs` VALUES (253, 10211, 10198, 1, '2019-03-21 09:47:37');
INSERT INTO `app_order_logs` VALUES (254, 10213, 10194, 1, '2019-03-21 10:28:49');
INSERT INTO `app_order_logs` VALUES (255, 10214, 10199, 1, '2019-03-21 10:53:59');
INSERT INTO `app_order_logs` VALUES (256, 10215, 10199, 1, '2019-03-21 10:57:09');
INSERT INTO `app_order_logs` VALUES (257, 10216, 10199, 1, '2019-03-21 10:59:06');
INSERT INTO `app_order_logs` VALUES (258, 10217, 10199, 1, '2019-03-21 11:01:01');
INSERT INTO `app_order_logs` VALUES (259, 10218, 10193, 1, '2019-03-21 17:35:56');
INSERT INTO `app_order_logs` VALUES (260, 10219, 10189, 1, '2019-03-28 20:49:48');
INSERT INTO `app_order_logs` VALUES (261, 10220, 10204, 1, '2019-03-28 21:28:11');
INSERT INTO `app_order_logs` VALUES (262, 10221, 10204, 1, '2019-03-28 21:28:41');
INSERT INTO `app_order_logs` VALUES (263, 10222, 10204, 1, '2019-03-28 21:30:27');
INSERT INTO `app_order_logs` VALUES (264, 10223, 10204, 1, '2019-03-28 21:32:43');
INSERT INTO `app_order_logs` VALUES (265, 10224, 10205, 1, '2019-03-28 23:43:00');
INSERT INTO `app_order_logs` VALUES (266, 10225, 10207, 1, '2019-03-29 08:17:33');
INSERT INTO `app_order_logs` VALUES (267, 10226, 10207, 1, '2019-03-29 08:20:27');
INSERT INTO `app_order_logs` VALUES (268, 10227, 10207, 1, '2019-03-29 08:21:16');
INSERT INTO `app_order_logs` VALUES (269, 10228, 10207, 1, '2019-03-29 08:22:41');
INSERT INTO `app_order_logs` VALUES (270, 10229, 10208, 1, '2019-03-29 08:27:29');
INSERT INTO `app_order_logs` VALUES (271, 10230, 10209, 1, '2019-03-29 08:30:46');
INSERT INTO `app_order_logs` VALUES (272, 10231, 10210, 1, '2019-03-29 08:33:24');
INSERT INTO `app_order_logs` VALUES (273, 10232, 10205, 1, '2019-03-29 08:41:03');

-- ----------------------------
-- Table structure for app_paylogs
-- ----------------------------
DROP TABLE IF EXISTS `app_paylogs`;
CREATE TABLE `app_paylogs`  (
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
) ENGINE = InnoDB AUTO_INCREMENT = 456 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_paylogs
-- ----------------------------
INSERT INTO `app_paylogs` VALUES (424, 0, 562.00, NULL, 1, '15822559473792708', 1582255948, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (425, 0, 500.00, NULL, 1, '15822673799949733', 1582267380, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (450, 0, 500.00, 16.00, 0, '15827873263128619', 1582787343, '支付', 'bitcoin', 'bitcoin', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (451, 0, 500.00, 13.50, 1, '15827877139687298', 1582787715, '支付', 'th', 'thalipay', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (452, 0, 300.00, 7.50, 1, '15828932684962354', 1582893269, '支付', 'th', 'chinabank', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (453, 0, 500.00, 15.50, 0, '15844999138672199', 1584499915, '支付', 'payssion', 'bank', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (454, 0, 500.00, 11.50, 0, '15859196449902200', 1585919648, '支付', 'pay9', 'yunshoufu', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);
INSERT INTO `app_paylogs` VALUES (455, 0, 300.00, 6.90, 0, '15859199999137115', 1585920009, '支付', 'pay9', 'yunshoufu', NULL, NULL, NULL, NULL, NULL, NULL, 'x.paysite.xyz', NULL);

-- ----------------------------
-- Table structure for app_payment
-- ----------------------------
DROP TABLE IF EXISTS `app_payment`;
CREATE TABLE `app_payment`  (
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
-- Records of app_payment
-- ----------------------------
INSERT INTO `app_payment` VALUES (1, '人民币大额', '天宏', 'th', '支付宝', 'thalipay', 2.50, 1.00, 5.00, 500.00, 20000.00, 1, '/template/default/img/pay-alipay.png');
INSERT INTO `app_payment` VALUES (2, '人民币大额', '天宏', 'th', '微信', 'thtenpay', 2.50, 0.00, 0.00, 500.00, 10000.00, 1, '/template/default/img/pay-wechat.png');
INSERT INTO `app_payment` VALUES (3, '人民币大额', '天宏', 'th', '网银', 'chinabank', 2.50, 0.00, 0.00, 100.00, 50000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `app_payment` VALUES (4, '备用支付通道', 'pay9', 'pay9', '支付宝', 'alipay', 2.30, 0.00, 3.00, 300.00, 10000.00, 1, '/template/default/img/pay-alipay.png');
INSERT INTO `app_payment` VALUES (5, '备用支付通道', 'pay9', 'pay9', '微信支付', 'tenpay', 2.30, 0.00, 3.00, 300.00, 10000.00, 1, '/template/default/img/pay-wechat.png');
INSERT INTO `app_payment` VALUES (6, '备用支付通道', 'pay9', 'pay9', '云闪付', 'yunshoufu', 2.30, 0.00, 3.00, 300.00, 30000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `app_payment` VALUES (7, '备用支付通道2', 'payssion', 'payssion', '网银', 'bank', 2.90, 1.00, 5.00, 100.00, 20000.00, 1, '/template/default/img/pay-union.png');
INSERT INTO `app_payment` VALUES (8, '加密货币', '比特币', 'bitcoin', '比特币', 'bitcoin', 3.00, 1.00, 3.00, 500.00, 50000.00, 1, '/template/default/img/pay-bitcoin.png');

-- ----------------------------
-- Table structure for app_screen_otype
-- ----------------------------
DROP TABLE IF EXISTS `app_screen_otype`;
CREATE TABLE `app_screen_otype`  (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `otype` int(11) DEFAULT 1 COMMENT '1：明星  5：排行   10 其他',
  `otypename` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '分类名称',
  `pid` int(6) DEFAULT 0,
  PRIMARY KEY (`oid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10049 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_screen_otype
-- ----------------------------
INSERT INTO `app_screen_otype` VALUES (10013, 5, '标签', 0);
INSERT INTO `app_screen_otype` VALUES (10018, 1, '销量最多', 10011);
INSERT INTO `app_screen_otype` VALUES (10019, 1, 'A', 10012);
INSERT INTO `app_screen_otype` VALUES (10020, 1, 'C', 10012);
INSERT INTO `app_screen_otype` VALUES (10021, 5, '最新', 10013);
INSERT INTO `app_screen_otype` VALUES (10022, 5, '自拍', 10014);
INSERT INTO `app_screen_otype` VALUES (10023, 5, '悬疑', 10014);
INSERT INTO `app_screen_otype` VALUES (10024, 5, '惊悚', 10014);
INSERT INTO `app_screen_otype` VALUES (10025, 10, '最新上架', 10015);
INSERT INTO `app_screen_otype` VALUES (10026, 10, '科幻', 10016);
INSERT INTO `app_screen_otype` VALUES (10027, 10, '古装', 10016);
INSERT INTO `app_screen_otype` VALUES (10028, 10, '惊悚', 10016);
INSERT INTO `app_screen_otype` VALUES (10029, 10, '国内', 10017);
INSERT INTO `app_screen_otype` VALUES (10030, 10, '香港', 10017);
INSERT INTO `app_screen_otype` VALUES (10033, 1, '粉丝最多', 10011);
INSERT INTO `app_screen_otype` VALUES (10036, 5, '1MV', 10035);
INSERT INTO `app_screen_otype` VALUES (10038, 10, '11', 10037);
INSERT INTO `app_screen_otype` VALUES (10039, 10, '22', 10037);
INSERT INTO `app_screen_otype` VALUES (10040, 5, '热门', 10013);
INSERT INTO `app_screen_otype` VALUES (10042, 10, '546457', 10041);
INSERT INTO `app_screen_otype` VALUES (10043, 10, '地区', 0);
INSERT INTO `app_screen_otype` VALUES (10044, 10, '日本', 10043);
INSERT INTO `app_screen_otype` VALUES (10045, 10, '韩国', 10043);
INSERT INTO `app_screen_otype` VALUES (10046, 10, '大陆', 10043);
INSERT INTO `app_screen_otype` VALUES (10047, 10, '台湾', 10043);
INSERT INTO `app_screen_otype` VALUES (10048, 10, '欧美', 10043);

-- ----------------------------
-- Table structure for app_seek_video
-- ----------------------------
DROP TABLE IF EXISTS `app_seek_video`;
CREATE TABLE `app_seek_video`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `content` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10017 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_seek_video
-- ----------------------------
INSERT INTO `app_seek_video` VALUES (10001, 10006, '来来来', '1543818739');
INSERT INTO `app_seek_video` VALUES (10002, 10016, '国家计量局', '1545029436');
INSERT INTO `app_seek_video` VALUES (10004, 10018, '123456', '1545306142');
INSERT INTO `app_seek_video` VALUES (10005, 10025, '1111', '1545708527');
INSERT INTO `app_seek_video` VALUES (10006, 10018, '123456', '1545739336');
INSERT INTO `app_seek_video` VALUES (10007, 10173, 'Qqq', '1551870720');
INSERT INTO `app_seek_video` VALUES (10008, 10172, '今天晚上我', '1551904030');
INSERT INTO `app_seek_video` VALUES (10009, 10172, '想就觉得好失败', '1551904115');
INSERT INTO `app_seek_video` VALUES (10010, 10176, 'jml', '1551904123');
INSERT INTO `app_seek_video` VALUES (10011, 10176, 'jml', '1551904123');
INSERT INTO `app_seek_video` VALUES (10012, 10176, '我要看凯哥演的片', '1551905425');
INSERT INTO `app_seek_video` VALUES (10013, 10176, '我要看凯哥演的片', '1551905426');
INSERT INTO `app_seek_video` VALUES (10014, 10164, '京蓝科技', '1552296661');
INSERT INTO `app_seek_video` VALUES (10015, 10196, 'iuuu', '1553023362');
INSERT INTO `app_seek_video` VALUES (10016, 10196, 'iuuu', '1553023363');

-- ----------------------------
-- Table structure for app_share_logs
-- ----------------------------
DROP TABLE IF EXISTS `app_share_logs`;
CREATE TABLE `app_share_logs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `time` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10014 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_share_logs
-- ----------------------------
INSERT INTO `app_share_logs` VALUES (10001, 10001, '2018-11-26 00:00:00');
INSERT INTO `app_share_logs` VALUES (10002, 10006, '2018-12-03 00:00:00');
INSERT INTO `app_share_logs` VALUES (10003, 10015, '2018-12-20 00:00:00');
INSERT INTO `app_share_logs` VALUES (10004, 10051, '2019-01-10 00:00:00');
INSERT INTO `app_share_logs` VALUES (10005, 10170, '2019-03-06 00:00:00');
INSERT INTO `app_share_logs` VALUES (10006, 10172, '2019-03-07 00:00:00');
INSERT INTO `app_share_logs` VALUES (10007, 10170, '2019-03-07 00:00:00');
INSERT INTO `app_share_logs` VALUES (10008, 10170, '2019-03-08 00:00:00');
INSERT INTO `app_share_logs` VALUES (10009, 10168, '2019-03-17 00:00:00');
INSERT INTO `app_share_logs` VALUES (10010, 10192, '2019-03-19 00:00:00');
INSERT INTO `app_share_logs` VALUES (10011, 10186, '2019-03-21 00:00:00');
INSERT INTO `app_share_logs` VALUES (10012, 10191, '2019-03-28 00:00:00');
INSERT INTO `app_share_logs` VALUES (10013, 10193, '2019-03-29 00:00:00');

-- ----------------------------
-- Table structure for app_site_cfg
-- ----------------------------
DROP TABLE IF EXISTS `app_site_cfg`;
CREATE TABLE `app_site_cfg`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0',
  `Key` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Ip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  UNIQUE INDEX `key`(`Key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_site_cfg
-- ----------------------------
INSERT INTO `app_site_cfg` VALUES (1, '3029', 'xwIqVLokZDRRjyh0', '127.0.0.1');

-- ----------------------------
-- Table structure for app_siterate
-- ----------------------------
DROP TABLE IF EXISTS `app_siterate`;
CREATE TABLE `app_siterate`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rate` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `width` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `heigth` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `default` tinyint(2) UNSIGNED DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of app_siterate
-- ----------------------------
INSERT INTO `app_siterate` VALUES (1, '240', '426', '240', 0);
INSERT INTO `app_siterate` VALUES (2, '360', '640', '360', 1);
INSERT INTO `app_siterate` VALUES (3, '480', '854', '480', 0);
INSERT INTO `app_siterate` VALUES (4, '720', '1280', '720', 0);
INSERT INTO `app_siterate` VALUES (5, '1080', '1920', '1080', 0);
INSERT INTO `app_siterate` VALUES (6, '1440', '2560', '1440', 0);
INSERT INTO `app_siterate` VALUES (7, '2160', '3840', '2160', 0);

-- ----------------------------
-- Table structure for app_sms_logs
-- ----------------------------
DROP TABLE IF EXISTS `app_sms_logs`;
CREATE TABLE `app_sms_logs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `verify_code` int(6) DEFAULT NULL,
  `time` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for app_star_list
-- ----------------------------
DROP TABLE IF EXISTS `app_star_list`;
CREATE TABLE `app_star_list`  (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '明星名称',
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '头像',
  `screenotype` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '筛选条件 10001,10002',
  PRIMARY KEY (`sid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10004 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_star_list
-- ----------------------------
INSERT INTO `app_star_list` VALUES (10001, '成龙', '/assets/uploads/image/star/2020/0228/1582874608391.png', '10020,10033');
INSERT INTO `app_star_list` VALUES (10002, '李连杰', '/assets/uploads/image/star/2020/0228/1582874652317.png', '10018,10019');
INSERT INTO `app_star_list` VALUES (10003, '周星驰', '/assets/uploads/image/star/2020/0228/1582874690516.png', '10018,10019,10033');

-- ----------------------------
-- Table structure for app_trans_log
-- ----------------------------
DROP TABLE IF EXISTS `app_trans_log`;
CREATE TABLE `app_trans_log`  (
  `code` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `msg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `data` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `time` int(12) DEFAULT NULL,
  `date` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `vid` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `filename` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_trans_log
-- ----------------------------
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '转码准备', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"size_rate\":{\"5\":\"360p\\uff1a640x360\"}}', 1586675185, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '正在转码', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\",\"togifdir\":\"E:\\/phpstudy_pro\\/WWW\\/clusterctl.xyz\\/public\\/video\\/product\\/20200412\\/HeqvQbrL\\/360\\/HeqvQbrL.gif\",\"toimgedir\":\"E:\\/phpstudy_pro\\/WWW\\/clusterctl.xyz\\/public\\/video\\/product\\/20200412\\/HeqvQbrL\\/360\\/HeqvQbrL.jpg\",\"tovideodir\":\"E:\\/phpstudy_pro\\/WWW\\/clusterctl.xyz\\/public\\/video\\/product\\/20200412\\/HeqvQbrL\\/360\\/HeqvQbrL.mp4\",\"videodir\":\"E:\\/phpstudy_pro\\/WWW\\/clusterctl.xyz\\/public\\/video\\/upload\\/\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\"}', 1586675185, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '转码成功', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\"}', 1586675208, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '正在切片', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\"}', 1586675208, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '切片成功', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\"}', 1586675208, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '第一次组合m3u8 json数据', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\"}', 1586675208, '20200412', '11034', '人类下达的命令，AI会吗？.mp4');
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '更新记录成功', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"rate\":\"360\"}', 1586675209, NULL, NULL, NULL);
INSERT INTO `app_trans_log` VALUES ('HeqvQbrL', '转码完毕', '{\"ids\":\"11034\",\"file\":\"\\u4eba\\u7c7b\\u4e0b\\u8fbe\\u7684\\u547d\\u4ee4\\uff0cAI\\u4f1a\\u5417\\uff1f.mp4\",\"size_rate\":{\"5\":\"360p\\uff1a640x360\"}}', 1586675209, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for app_user
-- ----------------------------
DROP TABLE IF EXISTS `app_user`;
CREATE TABLE `app_user`  (
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
-- Records of app_user
-- ----------------------------
INSERT INTO `app_user` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'QQ：78590495544\n微信：18434354504', 'x.paysite.xyz', 'paysite.xyz', 'https://bpic.588ku.com/element_origin_min_pic/19/07/30/45b55a2c975d5e5ee1609bfeb6b8f906.jpg', 'http://www.baidu.com', 1582027800, 1, 'admin@winskyx.com', '1. wfjklj;   \n2. 327489;   \n3. fdj37a;', '蚂蚁科技', '        },function (ret) {\n            lightyear.loading(\'show\');  // 显示\n            setTimeout(function() {\n                lightyear.loading(\'hide\');  // 隐藏\n                lightyear.notify(ret.msg+\'，页面即将刷新页面~\', \'success\', 2000);\n                setTimeout(function() {\n                    window.location.reload();\n                }, 1500);\n            }, 1500);', 0, 1, 'th,pay9,payssion', '{\"deposit\":\"ABC\",\"branch\":\"\\u897f\\u4e3d\\u652f\\u884c\",\"account\":\"73285789435794456\",\"address\":\"\\u897f\\u4e3d\"}', '1022421443', 'email,telegram', 953.50, 562.00, 33043.00, 1091.50, 46, 3);

-- ----------------------------
-- Table structure for app_user_click
-- ----------------------------
DROP TABLE IF EXISTS `app_user_click`;
CREATE TABLE `app_user_click`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `lookcount` int(11) DEFAULT 0,
  `time` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10029 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_user_click
-- ----------------------------
INSERT INTO `app_user_click` VALUES (10001, 10003, 1, '2019-01-03 17:40:01');
INSERT INTO `app_user_click` VALUES (10002, 10051, 3, '2019-01-10 14:29:39');
INSERT INTO `app_user_click` VALUES (10003, 10116, 1, '2019-01-11 11:48:30');
INSERT INTO `app_user_click` VALUES (10004, 10118, 2, '2019-01-11 17:01:27');
INSERT INTO `app_user_click` VALUES (10005, 10121, 3, '2019-01-13 10:30:33');
INSERT INTO `app_user_click` VALUES (10006, 10124, 1, '2019-01-11 19:02:49');
INSERT INTO `app_user_click` VALUES (10007, 10129, 3, '2019-01-15 09:27:52');
INSERT INTO `app_user_click` VALUES (10008, 10130, 2, '2019-02-15 20:09:34');
INSERT INTO `app_user_click` VALUES (10009, 10131, 2, '2019-01-15 11:33:52');
INSERT INTO `app_user_click` VALUES (10010, 10135, 1, '2019-01-15 11:37:47');
INSERT INTO `app_user_click` VALUES (10011, 10140, 3, '2019-01-15 11:41:53');
INSERT INTO `app_user_click` VALUES (10012, 10141, 3, '2019-01-15 11:44:09');
INSERT INTO `app_user_click` VALUES (10013, 10150, 1, '2019-01-21 19:08:02');
INSERT INTO `app_user_click` VALUES (10014, 10155, 1, '2019-01-22 20:18:08');
INSERT INTO `app_user_click` VALUES (10015, 10156, 1, '2019-01-26 02:12:22');
INSERT INTO `app_user_click` VALUES (10016, 10157, 1, '2019-01-26 14:13:09');
INSERT INTO `app_user_click` VALUES (10017, 10158, 2, '2019-01-31 09:14:52');
INSERT INTO `app_user_click` VALUES (10018, 10165, 1, '2019-02-21 03:46:18');
INSERT INTO `app_user_click` VALUES (10019, 10172, 1, '2019-03-06 09:38:50');
INSERT INTO `app_user_click` VALUES (10020, 10173, 3, '2019-03-06 17:20:46');
INSERT INTO `app_user_click` VALUES (10021, 10182, 3, '2019-03-07 05:33:15');
INSERT INTO `app_user_click` VALUES (10022, 10181, 3, '2019-03-07 05:33:49');
INSERT INTO `app_user_click` VALUES (10023, 10183, 3, '2019-03-07 07:46:39');
INSERT INTO `app_user_click` VALUES (10024, 10164, 1, '2019-03-11 18:01:45');
INSERT INTO `app_user_click` VALUES (10025, 10186, 1, '2019-03-11 18:59:01');
INSERT INTO `app_user_click` VALUES (10026, 10168, 1, '2019-03-17 15:26:19');
INSERT INTO `app_user_click` VALUES (10027, 10194, 3, '2019-03-19 21:25:46');
INSERT INTO `app_user_click` VALUES (10028, 10195, 1, '2019-03-19 22:14:20');

-- ----------------------------
-- Table structure for app_user_collect
-- ----------------------------
DROP TABLE IF EXISTS `app_user_collect`;
CREATE TABLE `app_user_collect`  (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `oid` int(11) DEFAULT 0 COMMENT '对象id',
  `otype` int(11) DEFAULT 1 COMMENT '类型 1：明星 5：mv  10 视频',
  PRIMARY KEY (`cid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10151 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_user_collect
-- ----------------------------
INSERT INTO `app_user_collect` VALUES (10002, 10001, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10003, 10001, 3, 10);
INSERT INTO `app_user_collect` VALUES (10004, 10001, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10005, 10002, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10031, 10008, 10005, 5);
INSERT INTO `app_user_collect` VALUES (10035, 10008, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10041, 10009, 10004, 10);
INSERT INTO `app_user_collect` VALUES (10048, 10016, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10049, 10023, 10002, 10);
INSERT INTO `app_user_collect` VALUES (10052, 10025, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10053, 10025, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10057, 10025, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10060, 10025, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10061, 10039, 10007, 5);
INSERT INTO `app_user_collect` VALUES (10070, 10050, 10011, 5);
INSERT INTO `app_user_collect` VALUES (10071, 10054, 10012, 5);
INSERT INTO `app_user_collect` VALUES (10074, 10121, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10076, 10148, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10077, 10148, 10004, 10);
INSERT INTO `app_user_collect` VALUES (10078, 10148, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10079, 10155, 10013, 5);
INSERT INTO `app_user_collect` VALUES (10082, 10168, 10005, 1);
INSERT INTO `app_user_collect` VALUES (10084, 10171, 10012, 5);
INSERT INTO `app_user_collect` VALUES (10085, 10173, 10015, 5);
INSERT INTO `app_user_collect` VALUES (10086, 10173, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10087, 10177, 10017, 5);
INSERT INTO `app_user_collect` VALUES (10093, 10182, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10096, 10183, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10098, 10181, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10099, 10181, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10100, 10181, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10101, 10181, 10005, 1);
INSERT INTO `app_user_collect` VALUES (10103, 10167, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10104, 10167, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10105, 10167, 10017, 5);
INSERT INTO `app_user_collect` VALUES (10106, 10167, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10107, 10185, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10108, 10186, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10109, 10186, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10110, 10186, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10111, 10186, 10005, 1);
INSERT INTO `app_user_collect` VALUES (10112, 10186, 10015, 5);
INSERT INTO `app_user_collect` VALUES (10114, 10186, 10022, 5);
INSERT INTO `app_user_collect` VALUES (10115, 10186, 10021, 5);
INSERT INTO `app_user_collect` VALUES (10122, 10188, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10123, 10188, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10124, 10188, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10127, 10188, 10018, 5);
INSERT INTO `app_user_collect` VALUES (10131, 10186, 10020, 5);
INSERT INTO `app_user_collect` VALUES (10132, 10186, 10004, 10);
INSERT INTO `app_user_collect` VALUES (10136, 10188, 10017, 5);
INSERT INTO `app_user_collect` VALUES (10138, 10188, 10004, 10);
INSERT INTO `app_user_collect` VALUES (10139, 10188, 10013, 5);
INSERT INTO `app_user_collect` VALUES (10140, 10188, 10001, 5);
INSERT INTO `app_user_collect` VALUES (10141, 10194, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10142, 10194, 10023, 5);
INSERT INTO `app_user_collect` VALUES (10143, 10192, 10015, 5);
INSERT INTO `app_user_collect` VALUES (10144, 10195, 10022, 5);
INSERT INTO `app_user_collect` VALUES (10145, 10196, 10020, 5);
INSERT INTO `app_user_collect` VALUES (10146, 10196, 10001, 1);
INSERT INTO `app_user_collect` VALUES (10147, 10196, 10002, 1);
INSERT INTO `app_user_collect` VALUES (10148, 10196, 10003, 1);
INSERT INTO `app_user_collect` VALUES (10149, 10196, 10005, 1);
INSERT INTO `app_user_collect` VALUES (10150, 10196, 10001, 5);

-- ----------------------------
-- Table structure for app_user_info
-- ----------------------------
DROP TABLE IF EXISTS `app_user_info`;
CREATE TABLE `app_user_info`  (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `device` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '手机设备',
  `token` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '手机设备',
  `pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '/upload/logo.png',
  `randomnum` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '随机账号',
  `abstract` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '简介',
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '手机号',
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '邮箱',
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '密码',
  `salt` int(10) DEFAULT NULL,
  `nickname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '昵称',
  `vipendtime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT 'vip到期时间 时间戳',
  `vipotype` int(5) DEFAULT 0 COMMENT '1:月卡 5：季卡 10：年卡 0：默认',
  `invitecode` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '邀请码',
  `safecode` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '安全码  Md5(md5(密码+invitecode))',
  `downcount` int(5) DEFAULT 0 COMMENT '下载次数',
  `lookcount` int(5) DEFAULT 0 COMMENT '剩余观看次数',
  `lookedcount` int(5) DEFAULT 0 COMMENT '已观看次数',
  `asset` decimal(14, 2) DEFAULT 0.00 COMMENT '总资产',
  `residual_asset` decimal(14, 2) DEFAULT 0.00 COMMENT '剩余资金',
  `cash_asset` decimal(14, 2) DEFAULT 0.00 COMMENT '提现资产',
  `frozen_asset` decimal(14, 2) DEFAULT 0.00 COMMENT '冷冻资产',
  `os` int(2) DEFAULT 1 COMMENT '1:ios  2:安卓',
  `qrcodetoken` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '用户二维码 临时token',
  `version` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '版本',
  `registertime` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '注册时间',
  `is_visible` int(2) DEFAULT 1 COMMENT '是否有效',
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10214 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_user_info
-- ----------------------------
INSERT INTO `app_user_info` VALUES (10003, NULL, '06a365d56073371f72a8c4745a35e38e', NULL, 'aGVgKdmIVW9yzM2', NULL, '18513000624', NULL, NULL, NULL, NULL, '1575528840', 0, 'L54M', '3a0f7c8450ea3fb34b5442e2ffbc3709', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 1, '', '1', '1543395129', 1);
INSERT INTO `app_user_info` VALUES (10004, NULL, 'b78eb516b0d95317451d5941868c4ac7', '/upload/logo.png', '1543398634542TB0', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1543398634', 1);
INSERT INTO `app_user_info` VALUES (10005, NULL, '24ede4e805e40be7e44eddeff0f47aa8', '/upload/logo.png', '1543405276794dBi', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1543405276', 1);
INSERT INTO `app_user_info` VALUES (10006, NULL, 'ff7859916f5194817c6d0a173e9f43bb', '/upload/logo.png', 'Ew3lkRjPthvVbp0', NULL, '18632857777', NULL, NULL, NULL, NULL, '0', 0, 'NtIB', '74b938f17e2d7ff2061cc064f4a62082', 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1543814427', 1);
INSERT INTO `app_user_info` VALUES (10007, NULL, '82b5c4bedefde40af0992b46a05e8b2d', '/upload/logo.png', '0mrVNlGwxaDcC4N', NULL, '18710877966', NULL, NULL, NULL, NULL, '1575528840', 10, 'DOrW', NULL, 12, 0, 3, 0.00, 0.00, 1000.00, -1000.00, 2, NULL, '1', '1543859922', 1);
INSERT INTO `app_user_info` VALUES (10008, NULL, 'c7d4489a81c046afb926c5765e86979d', '/upload/logo.png', 'prd4dKReDvhmyRq', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'JNo5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1543989898', 1);
INSERT INTO `app_user_info` VALUES (10009, NULL, '9f033f788ccedd2d4adc807139293bd2', '/upload/logo.png', '4Y6gsaOMJ8EJeaV', NULL, '18612345678', NULL, NULL, NULL, NULL, '0', 0, 'I8mJ', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544064696', 1);
INSERT INTO `app_user_info` VALUES (10010, NULL, 'c45439a8a9bda43e3bea2d22f9452de0', '/upload/logo.png', 'JQ3e0fqdKpjEczb', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '2PRT', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544091745', 1);
INSERT INTO `app_user_info` VALUES (10011, NULL, '15c83ddc4f9b895fa31ce8e49e09f036', '/upload/logo.png', 'Rczm7qOgtWOjMYz', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'gIV5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544510763', 1);
INSERT INTO `app_user_info` VALUES (10012, NULL, '68210b63b2ceacbc65434cc58a20957e', '/upload/logo.png', 'ot7jFjycQ2jUmw5', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'rEMX', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544511890', 1);
INSERT INTO `app_user_info` VALUES (10013, NULL, 'f035c012782dd07c514f84b897e962fb', '/upload/logo.png', 'U6lPN2Cu1p6UA9w', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '6y0q', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, '', '1', '1544512026', 1);
INSERT INTO `app_user_info` VALUES (10014, NULL, 'b035adcf7cfd31711bf102948548b655', '/upload/logo.png', 'IXRMpoogKTsheqR', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'LtXw', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544512329', 1);
INSERT INTO `app_user_info` VALUES (10015, NULL, 'cc03ad04e390dd7190ac37a30f69b500', '/upload/logo.png', 'kF9Dee1eI6LYqJV', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'M5Uc', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1544681772', 1);
INSERT INTO `app_user_info` VALUES (10016, NULL, '9123a5f8fd83e41e300b5e29662dbc47', '/upload/logo.png', 'bO3qsktJwOPfu89', NULL, NULL, NULL, NULL, NULL, NULL, '1549693338', 1, 'T3pp', NULL, 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545028993', 1);
INSERT INTO `app_user_info` VALUES (10017, NULL, 'bb1e9630f0a9ed8b28d645b0228b1f2b', '/upload/logo.png', 'OARTm02JDMLqNwL', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'IOPO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, '9e94239595567558733e2d6d690cbe18', '1', '1545305780', 1);
INSERT INTO `app_user_info` VALUES (10018, NULL, '938b1946e74fc862032e1faf750c4ac8', '/upload/logo.png', 'AozC3L8zjTrc0Jy', NULL, NULL, NULL, NULL, NULL, NULL, '1580545139', 10, 'qLx4', '4bc9327252762dfe8a150e154df02b08', 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545306090', 1);
INSERT INTO `app_user_info` VALUES (10019, NULL, 'e69f4d46d3759d56df1b75b937ccff55', '/upload/logo.png', 'GkwEN1obx7kgkCT', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'lGKc', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545453729', 1);
INSERT INTO `app_user_info` VALUES (10020, NULL, '55b816d764a8f3e40b11e036c8aef08c', '/upload/logo.png', 'kYTyt7Y3765ASNH', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'zzlT', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545567782', 1);
INSERT INTO `app_user_info` VALUES (10021, NULL, '6cde123f161b927855925d0b55f02a04', '/upload/logo.png', 'krDHncvE9J1gL1a', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OKTo', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545569615', 1);
INSERT INTO `app_user_info` VALUES (10022, NULL, '097cc1eb0462a5c4ed6783bcfe5d9ffb', '/upload/logo.png', 'Vlue1aBWG2kMww5', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'FspR', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545578073', 1);
INSERT INTO `app_user_info` VALUES (10023, NULL, 'c1df8b18eca838afc5b397ff08fbc13c', '/upload/logo.png', 'IFmMxx4EqJuOuab', NULL, NULL, NULL, NULL, NULL, NULL, '1550829430', 1, '5NUd', NULL, 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545632957', 1);
INSERT INTO `app_user_info` VALUES (10024, NULL, 'a90363ebf5c37ab40e6fe9245b41b87e', '/upload/logo.png', '1oOb4I8WO5Ual03', NULL, NULL, NULL, NULL, NULL, NULL, '1550829430', 5, 'bMQN', NULL, 8, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545633244', 1);
INSERT INTO `app_user_info` VALUES (10025, NULL, '783bd5bd930a0f26fc8e36252fff26ab', '/upload/logo.png', '7DwOyHJ7QEnFm4B', NULL, NULL, NULL, NULL, NULL, NULL, '1550829430', 10, 'O1Gi', NULL, 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545705598', 1);
INSERT INTO `app_user_info` VALUES (10026, NULL, 'd16c58d5c0cfc914435073b7e7e92f99', '/upload/logo.png', 'TVLAhH7lqDqAFCg', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'AD5y', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545716213', 1);
INSERT INTO `app_user_info` VALUES (10027, NULL, 'ded654390f3d893848ecdff650862d30', '/upload/logo.png', 'sekkv1NplhCX51X', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'MHbO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545813064', 1);
INSERT INTO `app_user_info` VALUES (10028, NULL, '472b2dfce902c39cc1f715b60626d613', '/upload/logo.png', 'jaOf76G1LDb0H8U', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'yQst', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545813511', 1);
INSERT INTO `app_user_info` VALUES (10029, NULL, '8949411d033162172984af912b99ceb9', '/upload/logo.png', 'hidwDCrlo2u446m', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'G8zu', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545816481', 1);
INSERT INTO `app_user_info` VALUES (10030, NULL, '5eb51c3cfadef05c3cb70877e63fd70f', '/upload/logo.png', 'La7GfVOtSHY6lVi', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'VuX0', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545816535', 1);
INSERT INTO `app_user_info` VALUES (10031, NULL, 'e14d162d710a63d0e1b5856936fe1742', '/upload/logo.png', 'nPkNNGiNAQtMwAv', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'GVYo', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545818137', 1);
INSERT INTO `app_user_info` VALUES (10032, NULL, 'e903c8f7068802f2a64068deceb8e6bb', '/upload/logo.png', 'dvQPixQRrX6eE0z', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '9iMB', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545818138', 1);
INSERT INTO `app_user_info` VALUES (10033, NULL, 'c9ec7170228d38ff8e2610afdbc6df7d', '/upload/logo.png', 'CJq3XIORjmEpB41', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '6BCg', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545818197', 1);
INSERT INTO `app_user_info` VALUES (10034, NULL, '233aeaadf28c27db010d64c36d89b63b', '/upload/logo.png', 'N5hdCHJFv4GiOEo', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'zg7U', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545821651', 1);
INSERT INTO `app_user_info` VALUES (10035, NULL, '95cf1d001272f19a8792abf7ebee72b2', '/upload/logo.png', 'NOsVjbJMXQvOhge', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'KDQw', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545877237', 1);
INSERT INTO `app_user_info` VALUES (10036, NULL, '8acd565e0b9ddabc1e26945866e59466', '/upload/logo.png', 'VIWaeMbD4hjJsHS', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'dvR5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545893611', 1);
INSERT INTO `app_user_info` VALUES (10037, NULL, '5df37921ac3b9bdc3bfcfefb85959913', '/upload/logo.png', '2RMroAitOCCaNBT', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '8TCo', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545894350', 1);
INSERT INTO `app_user_info` VALUES (10038, NULL, '3b9e386508024d4dea0bac9416c42e1e', '/upload/logo.png', 'KPB2Yd0BL1UhOzg', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Wq8u', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1545902608', 1);
INSERT INTO `app_user_info` VALUES (10039, NULL, '07216dc189633cded4c1a7307ec1fa25', '/upload/logo.png', '3fc5qcXJAijTt9S', NULL, NULL, NULL, NULL, NULL, NULL, '1549030651', 1, 'W9tx', 'ba3115ad45b14768ea889cc830b4b4c8', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546401237', 1);
INSERT INTO `app_user_info` VALUES (10040, NULL, '7b626fa666ff6cf5ac0d976ce5ba7ff9', '/upload/logo.png', 'go5JBjyuW0Ra2Dc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'PjSh', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546421202', 1);
INSERT INTO `app_user_info` VALUES (10041, NULL, '0ca4195bbd909b8bdab7902cd138443b', '/upload/logo.png', 'xJ2mht5zR8OCFsQ', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'CmLN', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546482807', 1);
INSERT INTO `app_user_info` VALUES (10042, NULL, 'fc2709099cb9101e006cb7f2e3324b74', '/upload/logo.png', '8cbo9sKODmpvaFz', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'cip0', '4639270378ac07476523d0af29e70e85', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546483418', 1);
INSERT INTO `app_user_info` VALUES (10043, NULL, '572fca50bee9d93fb23a364c8e2ea095', '/upload/logo.png', 'gwQeTekxpiqXOBP', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Jj0t', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546485794', 1);
INSERT INTO `app_user_info` VALUES (10044, NULL, '1066454a94507e869af424f329a23ad4', '/upload/logo.png', 'OgOk16IggpMGmQ2', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'kq9Y', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546499877', 1);
INSERT INTO `app_user_info` VALUES (10045, NULL, 'a6d70667cbfe765d0020768a684c9d6e', '/upload/logo.png', 'kMrol1ckOjjzCap', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'sno2', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546916361', 1);
INSERT INTO `app_user_info` VALUES (10046, NULL, 'ce421988ef2023b76c6562ff11e323ee', '/upload/logo.png', '8LGhIX9n9YIpXrT', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '2nNi', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546934729', 1);
INSERT INTO `app_user_info` VALUES (10047, NULL, '1b3958938b4759026403635b4a819cfb', '/upload/logo.png', '1nPK0jnRd8Eip3N', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'q72o', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546935262', 1);
INSERT INTO `app_user_info` VALUES (10048, NULL, '032bb7f17b554963d6f0760356332be1', '/upload/logo.png', 'ImQUWHKUUAu3aNo', NULL, NULL, NULL, NULL, NULL, NULL, '1549697520', 1, 'H7he', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1546935408', 1);
INSERT INTO `app_user_info` VALUES (10049, NULL, '5de3a1447031a1a3739bc658b3b3e04b', '/upload/logo.png', 'iChG92CsBtHYDgO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Pfh3', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547025815', 1);
INSERT INTO `app_user_info` VALUES (10050, NULL, '039ad1e85309304bacc650b1175e76f3', '/upload/logo.png', 'V0sRrr4H0NqIk9i', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'z7XM', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547025879', 1);
INSERT INTO `app_user_info` VALUES (10051, NULL, '47ecfffc072c10b7156cec032ed5d193', '/upload/logo.png', 'iN7wg3O1HvVFfOo', NULL, NULL, NULL, NULL, NULL, NULL, '1549788455', 1, 'rhO7', NULL, 0, 2, 2, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547101462', 1);
INSERT INTO `app_user_info` VALUES (10052, NULL, '9df1ece2fb945eabb3d82a4771089333', '/upload/logo.png', '5kIJBr5sDj1M6Ga', NULL, NULL, NULL, NULL, NULL, NULL, '1549697520', 1, 'icKj', NULL, 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547104348', 1);
INSERT INTO `app_user_info` VALUES (10053, NULL, 'ecccdf31bff4aed9930532dcdf16fee2', '/upload/logo.png', '7OfrE1VTxiuyBQj', NULL, NULL, NULL, NULL, NULL, NULL, '1549700541', 1, 'MYWO', NULL, 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547108467', 1);
INSERT INTO `app_user_info` VALUES (10054, NULL, 'b28aecc4c03cee2bfb207b1ca9ef9355', '/upload/logo.png', 'yxLWO72rAeAY6Fc', NULL, NULL, NULL, NULL, NULL, NULL, '1578645058', 10, 'fkzT', NULL, 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547108744', 1);
INSERT INTO `app_user_info` VALUES (10055, NULL, '4eb76531bb7d61a3ebb370c8204b2b2c', '/upload/logo.png', 'K8yXgqsuUhTjkRm', NULL, NULL, NULL, NULL, NULL, NULL, '1554951200', 5, '44at', NULL, 8, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, 'e511e419e6a6b410de8637d019a0edea', '1', '1547174203', 1);
INSERT INTO `app_user_info` VALUES (10056, NULL, '59a419c8ab0afbc29f9373466206e61c', '/upload/logo.png', 'qRoOXTw1OkEXj5m', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '164e', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10057, NULL, 'b32ac52b5a24b3d6057a268b736e6eca', '/upload/logo.png', 'V7hKu3p0ryARJ9C', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'JJD1', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10058, NULL, '9eebdca6de42c50536e202c4e82c402e', '/upload/logo.png', 'BbG1S9By8Ogq1nk', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'xqxO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10059, NULL, '0b1f98fd5113a809908b1fedd90d13b2', '/upload/logo.png', 'cxKsAvhNjzmuMoy', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'kBQG', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10060, NULL, '3109ef518f6dedf322f657999b5576d6', '/upload/logo.png', 'bHMGsYro9MHnyJP', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'QWJh', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10061, NULL, 'dd7eafdd0f03ba83353451953e9d6bb8', '/upload/logo.png', 'hiYgVmrq3xjcyg7', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'rBd2', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10062, NULL, '9d524059f28d8d8a7e8363a5d3e00ca5', '/upload/logo.png', 'na7yfoCh94B0QJJ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'vCa5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10063, NULL, '93f889058ff9c1c390bda5c8513865af', '/upload/logo.png', 'VPulNQyNhCOkodz', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OszT', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10064, NULL, '6bcf60f96b8d43782b9dc0c116cb330e', '/upload/logo.png', 'cAhc7OwiYKXvh10', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'bOKE', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10065, NULL, 'd12cbc98cfc3fc3d38145eb669fc4aca', '/upload/logo.png', 'HRlLD3EaIEOQgI8', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '5Sa1', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10066, NULL, 'ec2491337207b6b4b5e1bf454b2d72e1', '/upload/logo.png', 'ASj1AIGLavLk9pP', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'A0gr', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10067, NULL, '7c26af442473d4af4dcd70cca7f69a02', '/upload/logo.png', 'Q3OBu90OOuUREWT', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'etBy', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10068, NULL, 'c03f6bff743886094d30e53dee143f67', '/upload/logo.png', 'HE4dvjD4mHKu4Mk', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'oDk5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10069, NULL, 'a06b5cab7515b55eb48d9eb48a31fd44', '/upload/logo.png', 'gWFyAmzTOQptHdI', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'pIk8', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10070, NULL, 'b1413d6cf143a7b477f3d1fe12b98378', '/upload/logo.png', 'zfL7yMGnWIf62lr', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'PeCh', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10071, NULL, '35f85d23edd67e579fb4b7f6ca78d246', '/upload/logo.png', 'WOos3XXh73jlMvC', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'NRW9', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10072, NULL, 'f95b8ba327fe981382a15b6cba56114a', '/upload/logo.png', 'qK8CBkywv7pCC6S', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OJyE', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10073, NULL, 'f72472f4075c24b09e98ead77d2a9c7b', '/upload/logo.png', 'A633r4cIdYSULdo', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'fp6u', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10074, NULL, '67e4e1d83ee2115aa0c85cc6d1f6e81f', '/upload/logo.png', 'yDN0p95hzNSOkDF', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'wLCs', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10075, NULL, '4d869a7505d7653b44364017900e63b0', '/upload/logo.png', '9aQhGbYuJUBpVoe', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'b5KK', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10076, NULL, 'd681f0b78b0c9bcd27ead3cea88887a2', '/upload/logo.png', 'DV2tnJMr80IxP43', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '8KJF', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10077, NULL, '75f9fe6c1e6623870aea75f544532ac6', '/upload/logo.png', '9kDaOCHDI9EMSDX', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'PQoO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10078, NULL, '574fb362d6928b26ed157841cf8d68de', '/upload/logo.png', 'ur6gcT6NvNhTBGU', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'fRD1', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10079, NULL, '083ab1c2e0fc394d160ba809d5e5b5b6', '/upload/logo.png', 'RVVoaLGjJhDbfuc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'lQzi', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10080, NULL, '7bfbe437a8c526834315452d59e73d6d', '/upload/logo.png', 'xaqa5zLmNrE2vTh', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '3AFY', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177567', 1);
INSERT INTO `app_user_info` VALUES (10081, NULL, '71ae89895a76b558e9901d4f0ac98766', '/upload/logo.png', 'c1wXvXN1MOG88YV', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'g7bU', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177568', 1);
INSERT INTO `app_user_info` VALUES (10082, NULL, 'd2d2a377912a4629706f53b5dbf9e586', '/upload/logo.png', 'Aj1QNY4iyuKE1h5', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'qq3O', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177568', 1);
INSERT INTO `app_user_info` VALUES (10083, NULL, '6107a38ca92785deaba31efd690bbff9', '/upload/logo.png', 'FHGoeHviqTYkAs5', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'x3JB', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177568', 1);
INSERT INTO `app_user_info` VALUES (10084, NULL, '8a9f9f05440721b3e1642d818ca2195b', '/upload/logo.png', 'G3wjJcmnPCn35tm', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Bev7', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177568', 1);
INSERT INTO `app_user_info` VALUES (10085, NULL, '881c7fc27ac8ee9d72e2d121564ae944', '/upload/logo.png', 'OQBFtuwcLvuAkEE', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'heoF', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10086, NULL, '23c281d7556bdd3d91e32cb0b2b322e7', '/upload/logo.png', 'B54MxEObOUOzGpv', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'JzAp', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10087, NULL, '87096028d050ea78a153f6abe1e5184e', '/upload/logo.png', 'VNlamAx1pFOvOzO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'B3mz', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10088, NULL, '48c27ddb6888e0c7e23755fafccd016e', '/upload/logo.png', 'wz4OpcJE7JecDfn', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'WGIn', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10089, NULL, 'b4763d03c90ed9b5ba885f17fa9d5344', '/upload/logo.png', 'DVYqzI1AWmgFnF8', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Qt1o', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10090, NULL, 'ae860f7d71b06a3dc6e45a571efbc5a5', '/upload/logo.png', '8O1PdSwBhT5hwjj', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'HoOw', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10091, NULL, 'c8706b057f506bba52e831dc3eb45d4e', '/upload/logo.png', 'OrlxYRQP4GoxfFJ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'SqTh', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10092, NULL, '456647a61ac97216c5a46163acee77b0', '/upload/logo.png', 'zEmI9OtPLs0Vi6A', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'A3NJ', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10093, NULL, 'e921f60db7022226f22313d97a3f6601', '/upload/logo.png', '1uUhKhWL8q6jqGt', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'DHbT', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10094, NULL, 'f0f96deaa69cfecffa34071b29cf3459', '/upload/logo.png', '1YaNkRpjnKgvk7q', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'hTMn', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10095, NULL, 'a6265f7826326ebf21f6f890562ee11d', '/upload/logo.png', 'azpOePIw6a83F8R', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'QNsf', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177569', 1);
INSERT INTO `app_user_info` VALUES (10096, NULL, '4f20e8531f9b3f3cc5a89e2bcf16edf1', '/upload/logo.png', 'SNG8D6FuNn6LRiQ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'sHjN', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177573', 1);
INSERT INTO `app_user_info` VALUES (10097, NULL, '77def25bdde0bbbc0bc62034b5392c22', '/upload/logo.png', '3FlVC2EU08I208l', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'BvgB', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10098, NULL, '82be5cfb691da1b55ad27e6b3da6af05', '/upload/logo.png', 'RLFz3rGmuOAxkhe', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'IWnV', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10099, NULL, 'c47d61c322cbe2aa36c8bf4d42342284', '/upload/logo.png', 'F1a4gOCPBspzs5q', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'xuKU', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10100, NULL, '7dde62cfbcda2f05ac2c86ca2c683e46', '/upload/logo.png', 'FcJqdCBO6RU4T9i', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'YMNi', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10101, NULL, 'aee154b7d4c2502403bce4bd76b52dec', '/upload/logo.png', '3XUnLJVbb0gei61', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'yqsf', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10102, NULL, 'd3b09b7524e0c24e860ff41d1817f02f', '/upload/logo.png', 'Dqc3y8ytdOzeB7I', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '6Mma', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10103, NULL, 'c8f08e7687f2f06bec31beae4950354a', '/upload/logo.png', 'r5BJKVHdkDpxJaT', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'KGOp', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177574', 1);
INSERT INTO `app_user_info` VALUES (10104, NULL, '639bec9b5353112ba90ad523b2d4329c', '/upload/logo.png', 'Ofhk4vEi2a6YSXk', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'YEy4', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10105, NULL, '132dd96f22397ff748ceb3cd09820d02', '/upload/logo.png', '0PoDq6kOGMHv09B', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'O4BX', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10106, NULL, '35bf00bb88230f123262275ce9c267e6', '/upload/logo.png', 'UDpNk3TjbKAEaF5', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Ge3w', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10107, NULL, 'c1538340546234e505c2e659bcdf86a8', '/upload/logo.png', 'HKB6Xpag1JhwLRY', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '0g0O', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10108, NULL, 'a4d0f58cbad8da8564d14c0e8e949a24', '/upload/logo.png', 'deVo1mJI5vKCUv3', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OmSy', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10109, NULL, 'c74ac2574f55488ac625ce37514a8f20', '/upload/logo.png', 'vxJ8AmOoMo7uEKO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '8r34', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10110, NULL, '17ee8c4ba34f8b850157cf6ee196597d', '/upload/logo.png', '4WDGaIzzQXMnHC8', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'cu6c', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10111, NULL, 'e8258a0f0b646acd7e54b14ccb1f3cbb', '/upload/logo.png', 'b7qJzT0fBJlBl29', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'ks0h', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10112, NULL, '9fc73edd885c9e32ff42729efc20cbd6', '/upload/logo.png', 'bOcQAtynQyPyxYb', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'UcOY', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10113, NULL, '47d304cfd71e710b9ea71c9f0438715e', '/upload/logo.png', 'XUFyO4jzgfepe1j', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '8wyn', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10114, NULL, '2c42af6e14edca2290102d0c2c16e170', '/upload/logo.png', 'pbQUmCkIsemk6cJ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'cW4b', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10115, NULL, '9e65eba5304baae039c2553b903b4c08', '/upload/logo.png', '4UE87BM26Pm2nbb', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'oC0G', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177575', 1);
INSERT INTO `app_user_info` VALUES (10116, NULL, '034ae9ad4f1089fe9e295a649b8ad0cc', '/upload/logo.png', 'xTIagi5ApqsXCEb', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, '4NM3', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547177576', 1);
INSERT INTO `app_user_info` VALUES (10117, NULL, '17cb9d3cd262fd04a97daf9e4979a27f', '/upload/logo.png', 'TLx22oVM2FFb3Ce', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'yVpp', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547191851', 1);
INSERT INTO `app_user_info` VALUES (10118, NULL, 'edcc40ffe289c945df510a61f0e19b2b', '/upload/logo.png', 'lGGtL6QTDTw5P46', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'rfAY', NULL, 16, 0, 2, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547195379', 1);
INSERT INTO `app_user_info` VALUES (10119, NULL, '2410a76a8813468f39ebbd36275ce86c', '/upload/logo.png', 'QTeOx1EcyKSki0i', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'sMDM', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547197018', 1);
INSERT INTO `app_user_info` VALUES (10120, NULL, '06d8f5f041e6b0f7a51fa5faa1c43bef', '/upload/logo.png', 'Mjreu6p6XafpkMO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OPy5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547197026', 1);
INSERT INTO `app_user_info` VALUES (10121, NULL, '129464d148ff87f5f8d3eda9e45cfdac', '/upload/logo.png', '4TJXVe382kJCKPV', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'ImGP', NULL, 0, 1, 5, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547197597', 1);
INSERT INTO `app_user_info` VALUES (10122, NULL, '5e613d5045384d0d0868f18500be55e8', '/upload/logo.png', 'hl7b2bMxm1jJalW', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'xQgx', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547200218', 1);
INSERT INTO `app_user_info` VALUES (10123, NULL, '6bd693ad73a77890497201e0bced6d76', '/upload/logo.png', 'JFs0cDqJacQt12a', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '5erA', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547200572', 1);
INSERT INTO `app_user_info` VALUES (10124, NULL, 'd36bdfe0db2e8a530e0c6a4350c383ac', '/upload/logo.png', '1wJz2MlVfaehyYs', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'IMQY', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, '', '1', '1547201250', 1);
INSERT INTO `app_user_info` VALUES (10125, NULL, '70862b5d35955dfa9cd744bca01caad9', '/upload/logo.png', 'ocsmOegrFJj5Al9', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'Tj2C', NULL, 3, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547205860', 1);
INSERT INTO `app_user_info` VALUES (10126, NULL, '21dc3e72e52b206146790cfc48956cc9', '/upload/logo.png', 'AA8lgXRfOSc4Ijc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'tTo7', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547206387', 1);
INSERT INTO `app_user_info` VALUES (10127, NULL, 'f21354ddbf5e8b8e48ef8332827c067c', '/upload/logo.png', 'npscrJ7RVRu54Dr', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'ohx7', NULL, 15, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547433656', 1);
INSERT INTO `app_user_info` VALUES (10128, NULL, '4d37f6a5606f3f69c4f9983e6d1241a8', '/upload/logo.png', 'Cli5a2l5K3b319d', NULL, NULL, NULL, NULL, NULL, NULL, '1549179371', 1, 'twTC', NULL, 19, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547435384', 1);
INSERT INTO `app_user_info` VALUES (10129, NULL, '50e646c88db6ad45c3f5e5119b8264f6', '/upload/logo.png', 'IrwKsaFvOSlFsA5', NULL, NULL, NULL, NULL, NULL, NULL, '1589422334', 10, 'KE5j', 'dbd38208cd407cfee700fc5ba0a87ab7', 12, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547515590', 1);
INSERT INTO `app_user_info` VALUES (10130, NULL, '8fde143dc5a7225080d1267aaf4508b4', '/upload/logo.png', 'D4ROYdAOX7WE3XN', NULL, NULL, NULL, NULL, NULL, NULL, '1550112631', 1, 'TqrX', NULL, 3, 2, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547516051', 1);
INSERT INTO `app_user_info` VALUES (10131, NULL, '3ed974e1a6ac4ade1c574e63a16acfca', '/upload/logo.png', 'JRtGYLplYsw1QpM', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'PULb', NULL, 0, 2, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547522621', 1);
INSERT INTO `app_user_info` VALUES (10132, NULL, 'da3e07e40edbe6fc9524ca6beee966a8', '/upload/logo.png', 'u5On7tDngTxkeP8', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '1z7W', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523455', 1);
INSERT INTO `app_user_info` VALUES (10133, NULL, '84f4cbea31a2cd87b82b8e13b562e9ce', '/upload/logo.png', 'TdMJOdRdE95NUi2', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'pr8j', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523455', 1);
INSERT INTO `app_user_info` VALUES (10134, NULL, '9f2e9b27d2e50504e706bbe9cf849f31', '/upload/logo.png', 'Ki91SX9yD9N3RpM', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'dHqH', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523455', 1);
INSERT INTO `app_user_info` VALUES (10135, NULL, 'ef3a507a9ff0725a28fd045889cf895d', '/upload/logo.png', 'rSV1DKxhiAKuQqs', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'OIVM', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523456', 1);
INSERT INTO `app_user_info` VALUES (10136, NULL, 'a81c01d5cefd0e7deb36d07a45a4c9d2', '/upload/logo.png', 'yobTiy7tP1E6j78', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '4yM0', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523495', 1);
INSERT INTO `app_user_info` VALUES (10137, NULL, '096d2b5ebe8218f0f9677559385bac01', '/upload/logo.png', '7M31PFWL4i4j6T3', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'PlHq', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523495', 1);
INSERT INTO `app_user_info` VALUES (10138, NULL, '8949d8bb74e31952b210f76efcc8316c', '/upload/logo.png', 'Xk9hChQxWccTtrC', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'UlLA', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523495', 1);
INSERT INTO `app_user_info` VALUES (10139, NULL, 'be876ff34c5baa79bcf3cd24fdd6eec6', '/upload/logo.png', 'te3hSOaSHMjc3jc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '97HN', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523495', 1);
INSERT INTO `app_user_info` VALUES (10140, NULL, '25a92211c2075ebf532412f7ee92e51e', '/upload/logo.png', 'LnmGdxNueOnUkRK', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'xERz', NULL, 0, 3, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523498', 1);
INSERT INTO `app_user_info` VALUES (10141, NULL, 'e30d6e4324652150ebe98509ce9702d6', '/upload/logo.png', 'S8grivU86tnX3ih', NULL, NULL, NULL, NULL, NULL, NULL, '1589422334', 1, 'DyUb', NULL, 5, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547523828', 1);
INSERT INTO `app_user_info` VALUES (10142, NULL, 'e124cfe9dc21de9185ad5da723893d25', '/upload/logo.png', '2b5olVOQVJl36ma', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '9EMw', 'db641846dd1863850821db67da3ea961', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547548842', 1);
INSERT INTO `app_user_info` VALUES (10143, NULL, '1b784d267cba3efc2c681507af8a2302', '/upload/logo.png', 'qPqFz3CAfiVPTMB', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'huMM', 'fbda4bc923e866c1f53dc7e61ac6be32', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1547548958', 1);
INSERT INTO `app_user_info` VALUES (10144, NULL, '517f540859b58079cb643ace23fca97e', '/upload/logo.png', '1548042674981OmK', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548042674', 1);
INSERT INTO `app_user_info` VALUES (10145, NULL, '96b9f3c1b5498111367e39bfb95b1bf1', '/upload/logo.png', '1548042696301a0f', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548042696', 1);
INSERT INTO `app_user_info` VALUES (10146, NULL, '837851eb5b92150528e09314ab06db47', '/upload/logo.png', 'bVheOewLqoY1jyb', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '5Gn7', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548045917', 1);
INSERT INTO `app_user_info` VALUES (10147, NULL, '403bdf70580b9b26530e3769d9c6c9a6', '/upload/logo.png', 'rNr3qYTjDf0MQov', NULL, NULL, NULL, NULL, NULL, NULL, '1561093904', 5, 'y5Bj', NULL, 8, 5, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548046057', 1);
INSERT INTO `app_user_info` VALUES (10148, NULL, '3583b1abb02534eeac714dacd53e5266', '/upload/logo.png', '1548047756330OQ2', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548047756', 1);
INSERT INTO `app_user_info` VALUES (10149, NULL, '3a46f48b4302033a3ec8bd4305dd62ee', '/upload/logo.png', '6jONNtmdXDKWVE3', NULL, NULL, NULL, NULL, NULL, NULL, '1561093904', 10, 'vtP8', NULL, 12, 5, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548067324', 1);
INSERT INTO `app_user_info` VALUES (10150, NULL, '16c6c7c4a76d1ccad83581fd348cc36b', '/upload/logo.png', 'i1B6Ou6PjMXmcIN', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'msC3', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548068868', 1);
INSERT INTO `app_user_info` VALUES (10151, NULL, 'afc02d5d42276be6b163f4aeee81d77c', '/upload/logo.png', '1548125046094b61', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548125046', 1);
INSERT INTO `app_user_info` VALUES (10152, NULL, '80c38489d04abf34fe10aae5557629e0', '/upload/logo.png', '1548125279908RKU', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548125279', 1);
INSERT INTO `app_user_info` VALUES (10153, NULL, 'faf6a503ac2fc5596ca7a21861793ef6', '/upload/logo.png', '15481253634835G3', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548125363', 1);
INSERT INTO `app_user_info` VALUES (10154, NULL, 'a6c5154b529445b2887d576e54197394', '/upload/logo.png', 'fjTVyNV51gvFwUq', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'v9Ty', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548159058', 1);
INSERT INTO `app_user_info` VALUES (10155, NULL, '16d0c442bbb9130ab2b3e3f5c253606f', '/upload/logo.png', 'H5UvVHFlIS4eU3X', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'NJRq', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548159463', 1);
INSERT INTO `app_user_info` VALUES (10156, NULL, 'c058fc04771704fe93d0705638e962ee', '/upload/logo.png', 'Nvr50ltrz5aCkWk', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'bx9G', NULL, 0, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548309922', 1);
INSERT INTO `app_user_info` VALUES (10157, NULL, 'fc4869277a6ee7349f61bf985adee249', '/upload/logo.png', 'OkRNrY77x6iH4Ox', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'euCH', NULL, 0, 0, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548483175', 1);
INSERT INTO `app_user_info` VALUES (10158, NULL, 'a9efe3f8fbf5f382473508d65160741e', '/upload/logo.png', 'ssDY8eioE23Fkag', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'm64V', NULL, 0, 0, 2, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548897264', 1);
INSERT INTO `app_user_info` VALUES (10159, NULL, '3a9185ecd24f008d2c2c358758ec41f5', '/upload/logo.png', '1548897408246jVU', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, NULL, NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1548897408', 1);
INSERT INTO `app_user_info` VALUES (10160, NULL, '0cac8e2b517f7beaeb73d25c52078402', '/upload/logo.png', 'utlXQriXaiPKuCz', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'zpUl', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550474521', 1);
INSERT INTO `app_user_info` VALUES (10161, NULL, 'd23e3e87004b352314b11024ba49f3b4', '/upload/logo.png', 'h14QuafGiT9pCzC', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Ii3O', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550480735', 1);
INSERT INTO `app_user_info` VALUES (10162, NULL, '3c27b618fed71f9a4cebc821809cd79c', '/upload/logo.png', 'tzT29q47WOYqwkd', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Vdqd', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550482462', 1);
INSERT INTO `app_user_info` VALUES (10163, NULL, 'ea478e7bee40fb041d996f238dacdd57', '/upload/logo.png', 'tsO5TwYot5xImpc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'WrcM', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550482754', 1);
INSERT INTO `app_user_info` VALUES (10164, NULL, 'e7a743f3b0390b36b6e9b079e174f795', '/upload/logo.png', 'vdlNpLYetr8vcet', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'mHa4', '173e412249287bb976ff06bdd9028421', 0, 0, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550483977', 1);
INSERT INTO `app_user_info` VALUES (10165, NULL, 'a33652867bb2ac537df27673d7fca9ad', '/upload/logo.png', 'sjCvHnvaGI0QdaJ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'hPqN', NULL, 0, 0, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1550636277', 1);
INSERT INTO `app_user_info` VALUES (10166, NULL, 'f3990321485f5d29b8b7080fc57be840', '/upload/logo.png', 'FgzEzQ2r053EaiL', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '8OWn', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551151816', 1);
INSERT INTO `app_user_info` VALUES (10167, NULL, '4f53ac87b4ea5ea3e0416b5a7ef43a74', '/upload/logo.png', 'Wyrcmz33IpKWczA', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'XIdp', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551164621', 1);
INSERT INTO `app_user_info` VALUES (10168, NULL, 'f46159487b1d409695e4190485c1c9f6', '/upload/logo.png', 'fx6TP4wvOm26Psc', NULL, NULL, NULL, NULL, NULL, NULL, '1555470659', 1, '2mU9', NULL, 5, 1, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551230928', 1);
INSERT INTO `app_user_info` VALUES (10169, NULL, '1a636b5752e6d4e63ef7582b8dd47110', '/upload/logo.png', 'DWLpXOe7OlwSloM', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'CaAR', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551773931', 1);
INSERT INTO `app_user_info` VALUES (10170, NULL, '53ea9e3fd8c6a1373c8acad4b316d439', '/upload/logo.png', 'lorkIsowib0QlpO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'dlBT', NULL, 0, 2, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551773939', 1);
INSERT INTO `app_user_info` VALUES (10171, NULL, 'ac3c9570b36ed20b808dea1f72c4d26d', '/upload/logo.png', 'WNj1zzFJDoI90GA', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'QAB5', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551774229', 1);
INSERT INTO `app_user_info` VALUES (10172, NULL, 'c0468df451cc352840a7c648e8dea099', '/upload/logo.png', 'WSrQjavJOEd8uWO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'HwOs', NULL, 0, 0, 2, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551836161', 1);
INSERT INTO `app_user_info` VALUES (10173, NULL, '78bebc7c1654d93dfeba1478993ec71b', '/upload/logo.png', '0Vnlc0vUlEF4lNg', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '1yc9', NULL, 0, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551836674', 1);
INSERT INTO `app_user_info` VALUES (10174, NULL, 'ec6fed5276af9ac0edfadc293f84d721', '/upload/logo.png', 'P65toqoc8yXBvf9', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'nGYa', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551836867', 1);
INSERT INTO `app_user_info` VALUES (10175, NULL, '12010f49696e99d41f5b32bd92cd9e4c', '/upload/logo.png', 'EFB6QxLwszcT5pm', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'yMeU', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551903148', 1);
INSERT INTO `app_user_info` VALUES (10176, NULL, 'e3d49ec27056f92f5adca09a1c802da8', '/upload/logo.png', 'fKNnstaHW4tWhSc', NULL, NULL, NULL, NULL, NULL, NULL, '1640465316', 10, 'kLDi', '7b5d21f62f87acd64c33231b4d91c62d', 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551903336', 1);
INSERT INTO `app_user_info` VALUES (10177, NULL, 'b5a8d28a49507f92d0e4d428adf6cd5b', '/upload/logo.png', 'u67zAIWhimcTEqq', NULL, NULL, NULL, NULL, NULL, NULL, '1554496477', 1, '70P2', '59a9c357e2bf20347999a908f033bf5c', 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551903487', 1);
INSERT INTO `app_user_info` VALUES (10178, NULL, '25566332a6cb84364d86ee3bfb0b9e6f', '/upload/logo.png', 'fKSGQ8o0IBjpbFv', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'kxcO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551904215', 1);
INSERT INTO `app_user_info` VALUES (10179, NULL, 'b0ff60badb9b4c8d8c05b5237e6c00de', '/upload/logo.png', 'InOWzSxdHPV3anc', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'RIOj', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551904543', 1);
INSERT INTO `app_user_info` VALUES (10180, NULL, '0e5071f9fc7a9e02cb94def454818c89', '/upload/logo.png', 'fMH9x5i0Q5xbeO6', NULL, NULL, NULL, NULL, NULL, NULL, '1586032859', 3, 'TNOT', '1805c4a88f0774c912e2ced9f4f0dd27', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551904748', 1);
INSERT INTO `app_user_info` VALUES (10181, NULL, 'e9b8c900a4d335073648b5382631c16f', '/upload/logo.png', 'N0SX7132cRlg5fN', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'JhEX', '2fa9b861d89fed49016872f474b3e8a3', 0, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551906959', 1);
INSERT INTO `app_user_info` VALUES (10182, NULL, '2ff1de409e34fc77d3776ec5c1cec36d', '/upload/logo.png', 'RRCuO5QF66VH7wp', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'SOPp', NULL, 0, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551907473', 1);
INSERT INTO `app_user_info` VALUES (10183, NULL, '4d12bae968424210c753ae1a08ba933e', '/upload/logo.png', 'uAvjEi3ipolUfwX', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'ztk3', NULL, 0, 3, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1551908213', 1);
INSERT INTO `app_user_info` VALUES (10184, NULL, '4aa3b763e3aa7776cb4ffb295d5acf2b', '/upload/logo.png', 'vQ6lOcW2bLbolSq', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '6chW', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552296603', 1);
INSERT INTO `app_user_info` VALUES (10185, NULL, '70fc17670c59675add2b7854fcc190b0', '/upload/logo.png', '3PVoIVlLQhFW9s0', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '9kSj', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552296728', 1);
INSERT INTO `app_user_info` VALUES (10186, NULL, 'bff142291003ea5afc52c78e6cd5e0c4', '/upload/logo.png', 'YS8v5MxNiO7iniC', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'HCQC', NULL, 0, 1, 1, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552298312', 1);
INSERT INTO `app_user_info` VALUES (10187, NULL, '03065d5a53d2a38b1058e25943b1eaf3', '/upload/logo.png', 'HNWGAoNQ0cXgAHm', NULL, NULL, NULL, NULL, NULL, NULL, '1552387256', 1, 'gUtO', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552299636', 1);
INSERT INTO `app_user_info` VALUES (10188, NULL, '31abf896ef4b460ea44b0d8f016280fa', '/upload/logo.png', 'HzyFqXf4GxkjyEF', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'ROxj', NULL, 0, 10, 0, 20.00, 20.00, 0.00, 0.00, 2, NULL, '1', '1552301309', 1);
INSERT INTO `app_user_info` VALUES (10189, NULL, 'e0971fdbdf62da044998291ea933e85a', '/upload/logo.png', 'o2iAhqu2sdJayla', NULL, NULL, NULL, NULL, NULL, NULL, '1630983832', 10, '0dNc', 'cb78ecad0bedc0cc878e98d01c6711ce', 12, 1, 0, 1.00, 1.00, 0.00, 0.00, 2, NULL, '1', '1553777025', 1);
INSERT INTO `app_user_info` VALUES (10190, NULL, 'fbf7d12ea428c0d9945e17d11e91d064', '/upload/logo.png', 'eSOVN1c7mmJdcqw', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'TmCQ', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552375190', 1);
INSERT INTO `app_user_info` VALUES (10191, NULL, 'c4f6c349e96f083b68215fa5d0510bde', '/upload/logo.png', 'yhqCB3L3Bm8h16m', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'M4Ir', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552464001', 1);
INSERT INTO `app_user_info` VALUES (10192, NULL, 'ab81ede3e0521d47b4ab1d855d044d9c', '/upload/logo.png', 'aNVig2zA2lXOam4', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'oGGx', '57a931e718b326160ac20d3750c85a08', 0, 1, 1, 1.00, 1.00, 0.00, 0.00, 2, NULL, '1', '1552875482', 1);
INSERT INTO `app_user_info` VALUES (10193, NULL, '85120884ba6cb7234018a5d1ff4ab93d', '/upload/logo.png', 'CUOqtpVKSBdxQ8l', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'qkQu', NULL, 0, 1, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552977353', 1);
INSERT INTO `app_user_info` VALUES (10194, NULL, 'a0025995c5ba9af19f48228d9552b4b7', '/upload/logo.png', 'DybME9zJN8AzoRb', NULL, NULL, NULL, NULL, NULL, NULL, '1555727329', 1, 'TFDv', '281e9bf993919d1515d97d682df4fcf8', 5, 0, 3, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1552977946', 1);
INSERT INTO `app_user_info` VALUES (10195, NULL, '29b180a2b7c607c21b245ab1c16f868d', '/upload/logo.png', 'AT9lo3nSThdwY3k', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'Uzrl', NULL, 0, 2, 0, 0.40, 0.40, 0.00, 0.00, 2, NULL, '1', '1553004457', 1);
INSERT INTO `app_user_info` VALUES (10196, NULL, '8586e993831ca5f03b84d442542717d1', '/upload/logo.png', 'vT3cV9FBWdAihvQ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '0Ia8', '7a47705ae339d78f2a67cebd810d0c56', 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553005582', 1);
INSERT INTO `app_user_info` VALUES (10197, NULL, '2768e2426c90c0e3a5e5758b6db7c42d', '/upload/logo.png', 'cXoSaHpEcvORr6N', NULL, NULL, NULL, NULL, NULL, NULL, '1563439826', 5, 'mVya', NULL, 8, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553071420', 1);
INSERT INTO `app_user_info` VALUES (10198, NULL, 'e21148a24789f52ececbf6a43effdf2c', '/upload/logo.png', 'VmKnWfkjEJupY02', NULL, NULL, NULL, NULL, NULL, NULL, '1584668857', 10, 'eCi4', NULL, 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553132671', 1);
INSERT INTO `app_user_info` VALUES (10199, NULL, '712ba6c1b98f38a8d7888764df95a966', '/upload/logo.png', 'bT3PsCbrBPxfooU', NULL, NULL, NULL, NULL, NULL, NULL, '1555728839', 1, 'QKiD', '6f38843cfdd9923dc9fe002f7aa8cce7', 5, 0, 0, 0.65, 0.65, 0.00, 0.00, 2, NULL, '1', '1553136774', 1);
INSERT INTO `app_user_info` VALUES (10200, NULL, '23916ae367aebcceb720987eaad830ee', '/upload/logo.png', 'LoYECmP56ytCSHq', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'w3v2', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553142469', 1);
INSERT INTO `app_user_info` VALUES (10201, NULL, '6811b25d71edfc44235a9a2ecc9699fc', '/upload/logo.png', 'CwYEokHoaXr2kwi', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'cxWX', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553142469', 1);
INSERT INTO `app_user_info` VALUES (10202, NULL, 'ba7f11907e6a8c97ea2f86ede7a99598', '/upload/logo.png', 'AjCWvQGF2xXoSHO', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'dp7h', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553142469', 1);
INSERT INTO `app_user_info` VALUES (10203, NULL, '43ec6e6cc9b10bf13e59441f470b82a5', '/upload/logo.png', 'qzhO2BUyj9m5Wj6', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'wQtA', NULL, 0, 1, 0, 2.50, 2.50, 0.00, 0.00, 2, NULL, '1', '1553777025', 1);
INSERT INTO `app_user_info` VALUES (10204, NULL, '5ad8a5403a787023a0271beda1e0ad3a', '/upload/logo.png', 'b9Nj9EsWLO7tG6T', NULL, NULL, NULL, NULL, NULL, NULL, '1556371963', 1, 'juOt', NULL, 5, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553779645', 1);
INSERT INTO `app_user_info` VALUES (10205, NULL, '5df37f1bd35216fc1f15ba83b3a2898a', '/upload/logo.png', 'r3PAiJAQVVf7vIh', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'QeOX', 'e3dc5ec6dfbed7a057d0fefaa7d2c12d', 0, 1, 0, 5.25, 5.25, 0.00, 0.00, 2, NULL, '1', '1553786023', 1);
INSERT INTO `app_user_info` VALUES (10206, NULL, '9433b1757b66e865c821f32d94fdcc9b', '/upload/logo.png', 'YkYw4MtRdyHB49C', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'vOpC', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553817774', 1);
INSERT INTO `app_user_info` VALUES (10207, NULL, '9518291e71e7b7040a68abfc5735aa74', '/upload/logo.png', 'X1pBGHluOXWetJp', NULL, NULL, NULL, NULL, NULL, NULL, '1585354961', 10, 'Yn4d', NULL, 12, 1, 0, 4.95, 4.95, 0.00, 0.00, 2, NULL, '1', '1553818009', 1);
INSERT INTO `app_user_info` VALUES (10208, NULL, '5d247227ce7ff1ae1a6abafdb1458557', '/upload/logo.png', 'yLuhJCQuYwaU0Ie', NULL, NULL, NULL, NULL, NULL, NULL, '1585355249', 10, 'BrSD', NULL, 12, 1, 0, 4.50, 4.50, 0.00, 0.00, 2, NULL, '1', '1553819205', 1);
INSERT INTO `app_user_info` VALUES (10209, NULL, '7260d554e1fd0421488773770d88f4b8', '/upload/logo.png', '3SqxL9PDkqUOJYS', NULL, NULL, NULL, NULL, NULL, NULL, '1585355446', 10, 'BxAh', NULL, 12, 1, 0, 3.00, 3.00, 0.00, 0.00, 2, NULL, '1', '1553819426', 1);
INSERT INTO `app_user_info` VALUES (10210, NULL, 'f0b4ff11f103d448c3907149096c2f3a', '/upload/logo.png', 'DUMFpbKncLmSp38', NULL, NULL, NULL, NULL, NULL, NULL, '1585355604', 10, 'zyOw', NULL, 12, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553819570', 1);
INSERT INTO `app_user_info` VALUES (10211, NULL, '607d5433fee6e959b464117a8514fbe6', '/upload/logo.png', '5WWqBHLt6U250Be', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'w8nA', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553876412', 1);
INSERT INTO `app_user_info` VALUES (10212, NULL, 'f41e9b2255f50ce8b3cd6f64283763b3', '/upload/logo.png', 'Nb2qrqMByWuPrxm', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'JQwi', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1553876895', 1);
INSERT INTO `app_user_info` VALUES (10213, NULL, 'c1861b67f9347c4880aedbe2a2400eff', '/upload/logo.png', 'P5Jabdajfc6VKBJ', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, 'AvwB', NULL, 0, 0, 0, 0.00, 0.00, 0.00, 0.00, 2, NULL, '1', '1554085064', 1);

-- ----------------------------
-- Table structure for app_user_level
-- ----------------------------
DROP TABLE IF EXISTS `app_user_level`;
CREATE TABLE `app_user_level`  (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_level` int(11) DEFAULT 0 COMMENT '一级用户',
  `second_level` int(11) DEFAULT 0 COMMENT '二级用户',
  `third_level` int(11) DEFAULT 0 COMMENT '三级用户',
  `fourth_level` int(11) DEFAULT 0 COMMENT '四级用户',
  `uid` int(11) DEFAULT 0 COMMENT '用户id',
  PRIMARY KEY (`level_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_user_level
-- ----------------------------
INSERT INTO `app_user_level` VALUES (1, 10129, 0, 0, 0, 10130);
INSERT INTO `app_user_level` VALUES (2, 10130, 10129, 0, 0, 10143);
INSERT INTO `app_user_level` VALUES (4, 10143, 10130, 10129, 0, 10142);
INSERT INTO `app_user_level` VALUES (6, 10142, 10143, 10130, 10129, 10130);
INSERT INTO `app_user_level` VALUES (7, 10143, 10130, 10129, 0, 10129);
INSERT INTO `app_user_level` VALUES (8, 10173, 0, 0, 0, 10173);
INSERT INTO `app_user_level` VALUES (9, 10176, 0, 0, 0, 10177);
INSERT INTO `app_user_level` VALUES (10, 10176, 0, 0, 0, 10180);
INSERT INTO `app_user_level` VALUES (12, 10192, 0, 0, 0, 10194);
INSERT INTO `app_user_level` VALUES (13, 10195, 0, 0, 0, 10199);
INSERT INTO `app_user_level` VALUES (14, 10199, 10195, 0, 0, 10203);
INSERT INTO `app_user_level` VALUES (15, 10203, 10199, 10195, 0, 10189);
INSERT INTO `app_user_level` VALUES (16, 10189, 10203, 10199, 10195, 10204);
INSERT INTO `app_user_level` VALUES (17, 10205, 0, 0, 0, 10207);
INSERT INTO `app_user_level` VALUES (18, 10207, 10205, 0, 0, 10208);
INSERT INTO `app_user_level` VALUES (19, 10208, 10207, 10205, 0, 10209);
INSERT INTO `app_user_level` VALUES (20, 10209, 10208, 10207, 10205, 10210);

-- ----------------------------
-- Table structure for app_user_withdraw
-- ----------------------------
DROP TABLE IF EXISTS `app_user_withdraw`;
CREATE TABLE `app_user_withdraw`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '收款人',
  `bankcard` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '银行卡',
  `cash_asset` decimal(14, 2) DEFAULT 0.00 COMMENT '提现金额',
  `status` int(5) DEFAULT 1 COMMENT '1:已提交  2：成功 3：拒绝',
  `content` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '拒绝原因',
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `is_visible` int(5) DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10007 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_user_withdraw
-- ----------------------------
INSERT INTO `app_user_withdraw` VALUES (10001, 10007, '张三', '6212262201023557228', 1000.00, 2, NULL, '1543998412', 1);
INSERT INTO `app_user_withdraw` VALUES (10002, 10007, '李四', '6212262201023557228', 100.00, 2, NULL, '1543998412', 1);
INSERT INTO `app_user_withdraw` VALUES (10003, 10007, '昂五', '6212262201023557228', 100.00, 3, NULL, '1543998412', 1);
INSERT INTO `app_user_withdraw` VALUES (10004, 10009, '李丽', '6212262201023557228', 100.00, 1, NULL, '1543998412', 1);
INSERT INTO `app_user_withdraw` VALUES (10005, 10009, '安稳', '6212262201023557228', 1000.00, 2, NULL, '1543998412', 1);
INSERT INTO `app_user_withdraw` VALUES (10006, 10009, '矮子', '6212262201023557228', 100.00, 3, NULL, '1543998412', 1);

-- ----------------------------
-- Table structure for app_userlook_logs
-- ----------------------------
DROP TABLE IF EXISTS `app_userlook_logs`;
CREATE TABLE `app_userlook_logs`  (
  `lookid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `looktime` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `createtime` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`lookid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10319 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_userlook_logs
-- ----------------------------
INSERT INTO `app_userlook_logs` VALUES (10001, 10003, 10001, 'mv输送输送', '/upload/17.jpg', '6699', '1543562177');
INSERT INTO `app_userlook_logs` VALUES (10002, 10007, 10001, 'mv输送输送', '/upload/17.jpg', '1', '1544493956');
INSERT INTO `app_userlook_logs` VALUES (10003, 10013, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1545550814');
INSERT INTO `app_userlook_logs` VALUES (10004, 10013, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '3998', '1545471312');
INSERT INTO `app_userlook_logs` VALUES (10005, 10014, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '4', '1544513686');
INSERT INTO `app_userlook_logs` VALUES (10006, 10014, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '3', '1544513692');
INSERT INTO `app_userlook_logs` VALUES (10007, 10013, 10001, 'mv输送输送', '/upload/17.jpg', '4', '1544515356');
INSERT INTO `app_userlook_logs` VALUES (10008, 10013, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '4', '1544514508');
INSERT INTO `app_userlook_logs` VALUES (10009, 10013, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '1', '1545467275');
INSERT INTO `app_userlook_logs` VALUES (10010, 10011, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4', '1544754013');
INSERT INTO `app_userlook_logs` VALUES (10011, 10011, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '2', '1544752959');
INSERT INTO `app_userlook_logs` VALUES (10012, 10015, 10001, 'mv输送输送', '/upload/17.jpg', '1', '1544681950');
INSERT INTO `app_userlook_logs` VALUES (10013, 10015, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '4', '1544682300');
INSERT INTO `app_userlook_logs` VALUES (10014, 10015, 10004, '视频test说一个', '/assets/uploads/image/video/2018/1211/1544512306601.jpg', '1', '1544682144');
INSERT INTO `app_userlook_logs` VALUES (10015, 10015, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4', '1544682192');
INSERT INTO `app_userlook_logs` VALUES (10016, 10016, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '4', '1545029202');
INSERT INTO `app_userlook_logs` VALUES (10017, 10016, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '1', '1545029606');
INSERT INTO `app_userlook_logs` VALUES (10018, 10019, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '1', '1545459811');
INSERT INTO `app_userlook_logs` VALUES (10019, 10019, 10006, '测试', '/assets/uploads/image/video/2018/1211/1544512338150.jpg', '1', '1545459794');
INSERT INTO `app_userlook_logs` VALUES (10020, 10017, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '8', '1545465502');
INSERT INTO `app_userlook_logs` VALUES (10021, 10013, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545550795');
INSERT INTO `app_userlook_logs` VALUES (10022, 10017, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4', '1545465391');
INSERT INTO `app_userlook_logs` VALUES (10023, 10020, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545567809');
INSERT INTO `app_userlook_logs` VALUES (10024, 10009, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545568291');
INSERT INTO `app_userlook_logs` VALUES (10025, 10021, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545576794');
INSERT INTO `app_userlook_logs` VALUES (10026, 10021, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1545577205');
INSERT INTO `app_userlook_logs` VALUES (10027, 10021, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1545573857');
INSERT INTO `app_userlook_logs` VALUES (10028, 10021, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '0', '1545573886');
INSERT INTO `app_userlook_logs` VALUES (10029, 10018, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547026524');
INSERT INTO `app_userlook_logs` VALUES (10030, 10018, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1546418084');
INSERT INTO `app_userlook_logs` VALUES (10031, 10018, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1546417698');
INSERT INTO `app_userlook_logs` VALUES (10032, 10018, 10004, '视频test说一个', '/assets/uploads/image/video/2018/1211/1544512306601.jpg', '0', '1547026433');
INSERT INTO `app_userlook_logs` VALUES (10033, 10023, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1545633327');
INSERT INTO `app_userlook_logs` VALUES (10034, 10023, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4551', '1545633227');
INSERT INTO `app_userlook_logs` VALUES (10035, 10023, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '1807', '1545633248');
INSERT INTO `app_userlook_logs` VALUES (10036, 10023, 10006, '测试', '/assets/uploads/image/video/2018/1211/1544512338150.jpg', '0', '1545634064');
INSERT INTO `app_userlook_logs` VALUES (10037, 10023, 10002, '特殊儿童', '/upload/17.jpg', '0', '1545635946');
INSERT INTO `app_userlook_logs` VALUES (10038, 10023, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545636743');
INSERT INTO `app_userlook_logs` VALUES (10039, 10023, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '2122', '1545634348');
INSERT INTO `app_userlook_logs` VALUES (10040, 10023, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1545634625');
INSERT INTO `app_userlook_logs` VALUES (10041, 10025, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '691773', '1545708370');
INSERT INTO `app_userlook_logs` VALUES (10042, 10025, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1545706964');
INSERT INTO `app_userlook_logs` VALUES (10043, 10025, 10004, '视频test说一个', '/assets/uploads/image/video/2018/1211/1544512306601.jpg', '4626', '1545706438');
INSERT INTO `app_userlook_logs` VALUES (10044, 10025, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1545706232');
INSERT INTO `app_userlook_logs` VALUES (10045, 10025, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1545706242');
INSERT INTO `app_userlook_logs` VALUES (10046, 10025, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4626', '1545706428');
INSERT INTO `app_userlook_logs` VALUES (10047, 10025, 10002, '特殊儿童', '/upload/17.jpg', '0', '1545706222');
INSERT INTO `app_userlook_logs` VALUES (10048, 10025, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '4626', '1545706402');
INSERT INTO `app_userlook_logs` VALUES (10049, 10025, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '4619', '1545706364');
INSERT INTO `app_userlook_logs` VALUES (10050, 10025, 10006, '测试', '/assets/uploads/image/video/2018/1211/1544512338150.jpg', '0', '1545706228');
INSERT INTO `app_userlook_logs` VALUES (10051, 10027, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '0', '1545813194');
INSERT INTO `app_userlook_logs` VALUES (10052, 10038, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1546396707');
INSERT INTO `app_userlook_logs` VALUES (10053, 10039, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '0', '1546432047');
INSERT INTO `app_userlook_logs` VALUES (10054, 10039, 10004, '视频test说一个', '/assets/uploads/image/video/2018/1211/1544512306601.jpg', '0', '1546407104');
INSERT INTO `app_userlook_logs` VALUES (10055, 10039, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547104289');
INSERT INTO `app_userlook_logs` VALUES (10056, 10039, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1546418028');
INSERT INTO `app_userlook_logs` VALUES (10057, 10018, 10001, 'mv输送输送', '/upload/17.jpg', '4', '1547100687');
INSERT INTO `app_userlook_logs` VALUES (10058, 10018, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '5', '1547101138');
INSERT INTO `app_userlook_logs` VALUES (10059, 10039, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1546431357');
INSERT INTO `app_userlook_logs` VALUES (10060, 10039, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '0', '1547104288');
INSERT INTO `app_userlook_logs` VALUES (10061, 10039, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1547104278');
INSERT INTO `app_userlook_logs` VALUES (10062, 10042, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1547195954');
INSERT INTO `app_userlook_logs` VALUES (10063, 10042, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1546858804');
INSERT INTO `app_userlook_logs` VALUES (10064, 10043, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1546509240');
INSERT INTO `app_userlook_logs` VALUES (10065, 10041, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '437', '1546848309');
INSERT INTO `app_userlook_logs` VALUES (10066, 10041, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '3269', '1546488457');
INSERT INTO `app_userlook_logs` VALUES (10067, 10041, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1546916192');
INSERT INTO `app_userlook_logs` VALUES (10068, 10043, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1546490373');
INSERT INTO `app_userlook_logs` VALUES (10069, 10041, 10004, '视频test说一个', '/assets/uploads/image/video/2018/1211/1544512306601.jpg', '0', '1546512780');
INSERT INTO `app_userlook_logs` VALUES (10070, 10041, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1546830057');
INSERT INTO `app_userlook_logs` VALUES (10071, 10044, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8', '1546853686');
INSERT INTO `app_userlook_logs` VALUES (10072, 10041, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '0', '1546507758');
INSERT INTO `app_userlook_logs` VALUES (10073, 10042, 10006, '测试', '/assets/uploads/image/video/2018/1211/1544512338150.jpg', '0', '1546513765');
INSERT INTO `app_userlook_logs` VALUES (10074, 10041, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '437', '1546848315');
INSERT INTO `app_userlook_logs` VALUES (10075, 10041, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1546831245');
INSERT INTO `app_userlook_logs` VALUES (10076, 10041, 10006, '测试', '/assets/uploads/image/video/2018/1211/1544512338150.jpg', '0', '1546832164');
INSERT INTO `app_userlook_logs` VALUES (10077, 10041, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '437', '1546848326');
INSERT INTO `app_userlook_logs` VALUES (10078, 10042, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1546858808');
INSERT INTO `app_userlook_logs` VALUES (10079, 10042, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1546858813');
INSERT INTO `app_userlook_logs` VALUES (10080, 10042, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1546858817');
INSERT INTO `app_userlook_logs` VALUES (10081, 10042, 10001, 'mv输送输送', '/upload/17.jpg', '4', '1546861397');
INSERT INTO `app_userlook_logs` VALUES (10082, 10045, 10001, 'mv输送输送', '/upload/17.jpg', '4751', '1546934374');
INSERT INTO `app_userlook_logs` VALUES (10083, 10047, 10001, 'mv输送输送', '/upload/17.jpg', '663', '1546935282');
INSERT INTO `app_userlook_logs` VALUES (10084, 10047, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '663', '1546935287');
INSERT INTO `app_userlook_logs` VALUES (10085, 10047, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '663', '1546935292');
INSERT INTO `app_userlook_logs` VALUES (10086, 10047, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '663', '1546935294');
INSERT INTO `app_userlook_logs` VALUES (10087, 10048, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1546937759');
INSERT INTO `app_userlook_logs` VALUES (10088, 10048, 10001, 'mv输送输送', '/upload/17.jpg', '4711', '1547175147');
INSERT INTO `app_userlook_logs` VALUES (10089, 10048, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1547005822');
INSERT INTO `app_userlook_logs` VALUES (10090, 10048, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1546937766');
INSERT INTO `app_userlook_logs` VALUES (10091, 10051, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8', '1547196509');
INSERT INTO `app_userlook_logs` VALUES (10092, 10051, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1547196548');
INSERT INTO `app_userlook_logs` VALUES (10093, 10051, 10001, 'mv输送输送', '/upload/17.jpg', '3', '1547196590');
INSERT INTO `app_userlook_logs` VALUES (10094, 10051, 10002, '特殊儿童', '/upload/17.jpg', '1', '1547101685');
INSERT INTO `app_userlook_logs` VALUES (10095, 10039, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1547104288');
INSERT INTO `app_userlook_logs` VALUES (10096, 10052, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '463', '1547108265');
INSERT INTO `app_userlook_logs` VALUES (10097, 10052, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1547105332');
INSERT INTO `app_userlook_logs` VALUES (10098, 10052, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '0', '1547105341');
INSERT INTO `app_userlook_logs` VALUES (10099, 10052, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547105328');
INSERT INTO `app_userlook_logs` VALUES (10100, 10052, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1547104642');
INSERT INTO `app_userlook_logs` VALUES (10101, 10052, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1547104670');
INSERT INTO `app_userlook_logs` VALUES (10102, 10052, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1547105071');
INSERT INTO `app_userlook_logs` VALUES (10103, 10052, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '0', '1547105344');
INSERT INTO `app_userlook_logs` VALUES (10104, 10054, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1547117172');
INSERT INTO `app_userlook_logs` VALUES (10105, 10054, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '4817', '1547109416');
INSERT INTO `app_userlook_logs` VALUES (10106, 10054, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547117077');
INSERT INTO `app_userlook_logs` VALUES (10107, 10048, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '4078', '1547172560');
INSERT INTO `app_userlook_logs` VALUES (10108, 10055, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '1', '1547205492');
INSERT INTO `app_userlook_logs` VALUES (10109, 10048, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547174506');
INSERT INTO `app_userlook_logs` VALUES (10110, 10055, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '7063', '1547205119');
INSERT INTO `app_userlook_logs` VALUES (10111, 10116, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1547187785');
INSERT INTO `app_userlook_logs` VALUES (10112, 10117, 10001, 'mv输送输送', '/upload/17.jpg', '1', '1547192646');
INSERT INTO `app_userlook_logs` VALUES (10113, 10042, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '141', '1547198921');
INSERT INTO `app_userlook_logs` VALUES (10114, 10118, 10001, 'mv输送输送', '/upload/17.jpg', '1', '1547202949');
INSERT INTO `app_userlook_logs` VALUES (10115, 10118, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '3481', '1547197615');
INSERT INTO `app_userlook_logs` VALUES (10116, 10118, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8478', '1547197831');
INSERT INTO `app_userlook_logs` VALUES (10117, 10051, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547196525');
INSERT INTO `app_userlook_logs` VALUES (10118, 10051, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1547196561');
INSERT INTO `app_userlook_logs` VALUES (10119, 10051, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '0', '1547197422');
INSERT INTO `app_userlook_logs` VALUES (10120, 10118, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '7079', '1547202414');
INSERT INTO `app_userlook_logs` VALUES (10121, 10121, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '1', '1547198289');
INSERT INTO `app_userlook_logs` VALUES (10122, 10118, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '3481', '1547197619');
INSERT INTO `app_userlook_logs` VALUES (10123, 10118, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '3481', '1547197623');
INSERT INTO `app_userlook_logs` VALUES (10124, 10121, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547197633');
INSERT INTO `app_userlook_logs` VALUES (10125, 10120, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547198906');
INSERT INTO `app_userlook_logs` VALUES (10126, 10055, 10001, 'mv输送输送', '/upload/17.jpg', '3055', '1547205092');
INSERT INTO `app_userlook_logs` VALUES (10127, 10055, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '31334', '1547205085');
INSERT INTO `app_userlook_logs` VALUES (10128, 10055, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '8255', '1547203932');
INSERT INTO `app_userlook_logs` VALUES (10129, 10055, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '7063', '1547205119');
INSERT INTO `app_userlook_logs` VALUES (10130, 10124, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '9', '1547203979');
INSERT INTO `app_userlook_logs` VALUES (10131, 10055, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '3055', '1547205099');
INSERT INTO `app_userlook_logs` VALUES (10132, 10125, 10001, 'mv输送输送', '/upload/17.jpg', '1', '1547207412');
INSERT INTO `app_userlook_logs` VALUES (10133, 10125, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '7374', '1547433536');
INSERT INTO `app_userlook_logs` VALUES (10134, 10125, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8501', '1547206291');
INSERT INTO `app_userlook_logs` VALUES (10135, 10125, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '75', '1547206679');
INSERT INTO `app_userlook_logs` VALUES (10136, 10125, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '4133', '1547206692');
INSERT INTO `app_userlook_logs` VALUES (10137, 10126, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '60', '1547291208');
INSERT INTO `app_userlook_logs` VALUES (10138, 10121, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547346639');
INSERT INTO `app_userlook_logs` VALUES (10139, 10127, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '13442', '1547435154');
INSERT INTO `app_userlook_logs` VALUES (10140, 10127, 10001, 'mv输送输送', '/upload/17.jpg', '3121', '1547435135');
INSERT INTO `app_userlook_logs` VALUES (10141, 10127, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '2776', '1547434095');
INSERT INTO `app_userlook_logs` VALUES (10142, 10127, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '3121', '1547435140');
INSERT INTO `app_userlook_logs` VALUES (10143, 10127, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '3121', '1547435144');
INSERT INTO `app_userlook_logs` VALUES (10144, 10128, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547438327');
INSERT INTO `app_userlook_logs` VALUES (10145, 10128, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547435898');
INSERT INTO `app_userlook_logs` VALUES (10146, 10128, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '4456', '1547438144');
INSERT INTO `app_userlook_logs` VALUES (10147, 10128, 10005, 'test10001', '/assets/uploads/image/video/2018/1211/1544512321137.jpg', '4176', '1547435907');
INSERT INTO `app_userlook_logs` VALUES (10148, 10128, 10001, 'mv输送输送', '/upload/17.jpg', '2399', '1547436801');
INSERT INTO `app_userlook_logs` VALUES (10149, 10121, 10001, 'mv输送输送', '/upload/17.jpg', '4', '1547515329');
INSERT INTO `app_userlook_logs` VALUES (10150, 10129, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '5', '1547518429');
INSERT INTO `app_userlook_logs` VALUES (10151, 10129, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '4963', '1547515735');
INSERT INTO `app_userlook_logs` VALUES (10152, 10130, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '1678011', '1550128504');
INSERT INTO `app_userlook_logs` VALUES (10153, 10130, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '4772', '1547520732');
INSERT INTO `app_userlook_logs` VALUES (10154, 10130, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547517402');
INSERT INTO `app_userlook_logs` VALUES (10155, 10129, 10007, '11100000001', '/assets/uploads/image/video/2018/1211/1544512352211.jpg', '0', '1547518388');
INSERT INTO `app_userlook_logs` VALUES (10156, 10129, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4', '1548149743');
INSERT INTO `app_userlook_logs` VALUES (10157, 10131, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1547522639');
INSERT INTO `app_userlook_logs` VALUES (10158, 10141, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8311', '1548158530');
INSERT INTO `app_userlook_logs` VALUES (10159, 10141, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1547532853');
INSERT INTO `app_userlook_logs` VALUES (10160, 10141, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1548152161');
INSERT INTO `app_userlook_logs` VALUES (10161, 10141, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '52835', '1548152484');
INSERT INTO `app_userlook_logs` VALUES (10162, 10129, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1547548860');
INSERT INTO `app_userlook_logs` VALUES (10163, 10147, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '1', '1548417011');
INSERT INTO `app_userlook_logs` VALUES (10164, 10147, 10011, '12312312', '/assets/uploads/image/video/2018/1220/1545305479263.png', '0', '1548046414');
INSERT INTO `app_userlook_logs` VALUES (10165, 10147, 10010, '1211test1', '/assets/uploads/image/video/2018/1211/1544512426912.jpg', '0', '1548046421');
INSERT INTO `app_userlook_logs` VALUES (10166, 10147, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1548416989');
INSERT INTO `app_userlook_logs` VALUES (10167, 10147, 10008, '啊达瓦大大', '/assets/uploads/image/video/2018/1211/1544512366601.jpg', '0', '1548046478');
INSERT INTO `app_userlook_logs` VALUES (10168, 10147, 10009, '视频', '/assets/uploads/image/video/2018/1210/1544410541935.jpg', '0', '1548046726');
INSERT INTO `app_userlook_logs` VALUES (10169, 10147, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1551152604');
INSERT INTO `app_userlook_logs` VALUES (10170, 10147, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '2', '1548046830');
INSERT INTO `app_userlook_logs` VALUES (10171, 10147, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4', '1548417001');
INSERT INTO `app_userlook_logs` VALUES (10172, 10149, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '3', '1548136443');
INSERT INTO `app_userlook_logs` VALUES (10173, 10141, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4574', '1548152217');
INSERT INTO `app_userlook_logs` VALUES (10174, 10154, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '5261', '1548415550');
INSERT INTO `app_userlook_logs` VALUES (10175, 10154, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4645', '1549211633');
INSERT INTO `app_userlook_logs` VALUES (10176, 10156, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1548381819');
INSERT INTO `app_userlook_logs` VALUES (10177, 10156, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1548381822');
INSERT INTO `app_userlook_logs` VALUES (10178, 10156, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '4', '1548309996');
INSERT INTO `app_userlook_logs` VALUES (10179, 10156, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4', '1548444080');
INSERT INTO `app_userlook_logs` VALUES (10180, 10156, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1548379761');
INSERT INTO `app_userlook_logs` VALUES (10181, 10157, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '4', '1548483198');
INSERT INTO `app_userlook_logs` VALUES (10182, 10158, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '6776', '1548897315');
INSERT INTO `app_userlook_logs` VALUES (10183, 10158, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4703', '1549033529');
INSERT INTO `app_userlook_logs` VALUES (10184, 10154, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1549211624');
INSERT INTO `app_userlook_logs` VALUES (10185, 10130, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1549506888');
INSERT INTO `app_userlook_logs` VALUES (10186, 10157, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '19', '1549868514');
INSERT INTO `app_userlook_logs` VALUES (10187, 10130, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '3795', '1550232753');
INSERT INTO `app_userlook_logs` VALUES (10188, 10130, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '0', '1550635522');
INSERT INTO `app_userlook_logs` VALUES (10189, 10165, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1550636497');
INSERT INTO `app_userlook_logs` VALUES (10190, 10165, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4761', '1550692031');
INSERT INTO `app_userlook_logs` VALUES (10191, 10165, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '4687', '1550692056');
INSERT INTO `app_userlook_logs` VALUES (10192, 10168, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1551231035');
INSERT INTO `app_userlook_logs` VALUES (10193, 10168, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1551231035');
INSERT INTO `app_userlook_logs` VALUES (10194, 10157, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4', '1551278097');
INSERT INTO `app_userlook_logs` VALUES (10195, 10170, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '4', '1551773964');
INSERT INTO `app_userlook_logs` VALUES (10196, 10171, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '1', '1551774245');
INSERT INTO `app_userlook_logs` VALUES (10197, 10171, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1551774629');
INSERT INTO `app_userlook_logs` VALUES (10198, 10172, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '4', '1551903209');
INSERT INTO `app_userlook_logs` VALUES (10199, 10173, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '3', '1551871510');
INSERT INTO `app_userlook_logs` VALUES (10200, 10173, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '3', '1551836767');
INSERT INTO `app_userlook_logs` VALUES (10201, 10173, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '22', '1551837453');
INSERT INTO `app_userlook_logs` VALUES (10202, 10173, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1551871533');
INSERT INTO `app_userlook_logs` VALUES (10203, 10173, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1551871394');
INSERT INTO `app_userlook_logs` VALUES (10204, 10171, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1551857168');
INSERT INTO `app_userlook_logs` VALUES (10205, 10170, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '47', '1551857494');
INSERT INTO `app_userlook_logs` VALUES (10206, 10170, 10014, '1231', '/assets/uploads/image/video/2019/0305/1551776097919.png', '1566', '1551845364');
INSERT INTO `app_userlook_logs` VALUES (10207, 10171, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8', '1551857180');
INSERT INTO `app_userlook_logs` VALUES (10208, 10172, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '1930', '1551903931');
INSERT INTO `app_userlook_logs` VALUES (10209, 10175, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4505', '1551903179');
INSERT INTO `app_userlook_logs` VALUES (10210, 10175, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '1517684', '1551903229');
INSERT INTO `app_userlook_logs` VALUES (10211, 10172, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1551903220');
INSERT INTO `app_userlook_logs` VALUES (10212, 10172, 10002, '特殊儿童', '/upload/17.jpg', '0', '1551903242');
INSERT INTO `app_userlook_logs` VALUES (10213, 10175, 10001, 'mv输送输送', '/upload/17.jpg', '1517684', '1551903395');
INSERT INTO `app_userlook_logs` VALUES (10214, 10176, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '60', '1551903819');
INSERT INTO `app_userlook_logs` VALUES (10215, 10177, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '4358535', '1551905346');
INSERT INTO `app_userlook_logs` VALUES (10216, 10177, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4589', '1551905373');
INSERT INTO `app_userlook_logs` VALUES (10217, 10177, 10001, 'mv输送输送', '/upload/17.jpg', '34379', '1551907395');
INSERT INTO `app_userlook_logs` VALUES (10218, 10177, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '4054', '1551905359');
INSERT INTO `app_userlook_logs` VALUES (10219, 10177, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '4589', '1551905918');
INSERT INTO `app_userlook_logs` VALUES (10220, 10176, 10001, 'mv输送输送', '/upload/17.jpg', '0', '1551903898');
INSERT INTO `app_userlook_logs` VALUES (10221, 10177, 10016, '语言给给给给', '/assets/uploads/image/video/2019/0307/1551905757901.jpg', '34234', '1551906202');
INSERT INTO `app_userlook_logs` VALUES (10222, 10177, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '34379', '1551906717');
INSERT INTO `app_userlook_logs` VALUES (10223, 10180, 10016, '语言给给给给', '/assets/uploads/image/video/2019/0307/1551905757901.jpg', '795', '1551906289');
INSERT INTO `app_userlook_logs` VALUES (10224, 10180, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '103', '1551906580');
INSERT INTO `app_userlook_logs` VALUES (10225, 10180, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '2', '1551906653');
INSERT INTO `app_userlook_logs` VALUES (10226, 10181, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '22', '1551908511');
INSERT INTO `app_userlook_logs` VALUES (10227, 10177, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '34379', '1551907678');
INSERT INTO `app_userlook_logs` VALUES (10228, 10182, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1551909322');
INSERT INTO `app_userlook_logs` VALUES (10229, 10177, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1551907945');
INSERT INTO `app_userlook_logs` VALUES (10230, 10183, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '0', '1551908433');
INSERT INTO `app_userlook_logs` VALUES (10231, 10181, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '1', '1551911112');
INSERT INTO `app_userlook_logs` VALUES (10232, 10181, 10014, '1231', '/assets/uploads/image/video/2019/0305/1551776097919.png', '60', '1551908643');
INSERT INTO `app_userlook_logs` VALUES (10233, 10181, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '0', '1551938809');
INSERT INTO `app_userlook_logs` VALUES (10234, 10181, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '141', '1551910858');
INSERT INTO `app_userlook_logs` VALUES (10235, 10183, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '1950919', '1551909145');
INSERT INTO `app_userlook_logs` VALUES (10236, 10181, 10002, '特殊儿童', '/upload/17.jpg', '0', '1551909015');
INSERT INTO `app_userlook_logs` VALUES (10237, 10181, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '1446', '1551911100');
INSERT INTO `app_userlook_logs` VALUES (10238, 10181, 10018, '鹿鼎记2', '/assets/uploads/image/video/2019/0307/1551902866704.jpg', '166', '1551909148');
INSERT INTO `app_userlook_logs` VALUES (10239, 10182, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '1', '1551909331');
INSERT INTO `app_userlook_logs` VALUES (10240, 10183, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1551911215');
INSERT INTO `app_userlook_logs` VALUES (10241, 10182, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '0', '1551910594');
INSERT INTO `app_userlook_logs` VALUES (10242, 10181, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '190', '1551910721');
INSERT INTO `app_userlook_logs` VALUES (10243, 10182, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1551910632');
INSERT INTO `app_userlook_logs` VALUES (10244, 10183, 10016, '语言给给给给', '/assets/uploads/image/video/2019/0307/1551905757901.jpg', '3639', '1551910632');
INSERT INTO `app_userlook_logs` VALUES (10245, 10181, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '2177', '1551910815');
INSERT INTO `app_userlook_logs` VALUES (10246, 10183, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '0', '1551911167');
INSERT INTO `app_userlook_logs` VALUES (10247, 10181, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '4', '1551910954');
INSERT INTO `app_userlook_logs` VALUES (10248, 10181, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1551911038');
INSERT INTO `app_userlook_logs` VALUES (10249, 10183, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '0', '1551911529');
INSERT INTO `app_userlook_logs` VALUES (10250, 10170, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '0', '1551922109');
INSERT INTO `app_userlook_logs` VALUES (10251, 10170, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '2083', '1551939069');
INSERT INTO `app_userlook_logs` VALUES (10252, 10147, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1552298153');
INSERT INTO `app_userlook_logs` VALUES (10253, 10167, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '0', '1552291114');
INSERT INTO `app_userlook_logs` VALUES (10254, 10167, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '70494', '1552290477');
INSERT INTO `app_userlook_logs` VALUES (10255, 10167, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '14065', '1552290703');
INSERT INTO `app_userlook_logs` VALUES (10256, 10167, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '14065', '1552290718');
INSERT INTO `app_userlook_logs` VALUES (10257, 10167, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1552291109');
INSERT INTO `app_userlook_logs` VALUES (10258, 10167, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '0', '1552291111');
INSERT INTO `app_userlook_logs` VALUES (10259, 10185, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1552296801');
INSERT INTO `app_userlook_logs` VALUES (10260, 10185, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '425120', '1552299401');
INSERT INTO `app_userlook_logs` VALUES (10261, 10185, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '132', '1552296921');
INSERT INTO `app_userlook_logs` VALUES (10262, 10185, 10002, '特殊儿童', '/upload/17.jpg', '132', '1552296922');
INSERT INTO `app_userlook_logs` VALUES (10263, 10185, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '65669', '1552297004');
INSERT INTO `app_userlook_logs` VALUES (10264, 10185, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '425120', '1552299388');
INSERT INTO `app_userlook_logs` VALUES (10265, 10186, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '50', '1552544396');
INSERT INTO `app_userlook_logs` VALUES (10266, 10164, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '4', '1552299156');
INSERT INTO `app_userlook_logs` VALUES (10267, 10186, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '0', '1552301431');
INSERT INTO `app_userlook_logs` VALUES (10268, 10186, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '60', '1552301442');
INSERT INTO `app_userlook_logs` VALUES (10269, 10187, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1552299656');
INSERT INTO `app_userlook_logs` VALUES (10270, 10187, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '0', '1552299660');
INSERT INTO `app_userlook_logs` VALUES (10271, 10187, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '1', '1552300949');
INSERT INTO `app_userlook_logs` VALUES (10272, 10187, 10018, '鹿鼎记2', '/assets/uploads/image/video/2019/0307/1551902866704.jpg', '289745', '1552300907');
INSERT INTO `app_userlook_logs` VALUES (10273, 10187, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '1339581', '1552301210');
INSERT INTO `app_userlook_logs` VALUES (10274, 10188, 10018, '鹿鼎记2', '/assets/uploads/image/video/2019/0307/1551902866704.jpg', '0', '1552371412');
INSERT INTO `app_userlook_logs` VALUES (10275, 10188, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '0', '1552371432');
INSERT INTO `app_userlook_logs` VALUES (10276, 10186, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1552301949');
INSERT INTO `app_userlook_logs` VALUES (10277, 10186, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1552544327');
INSERT INTO `app_userlook_logs` VALUES (10278, 10188, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1552373674');
INSERT INTO `app_userlook_logs` VALUES (10279, 10188, 10005, 'test10001', '/assets/uploads/image/video/2019/0121/1548046583463.png', '0', '1552302002');
INSERT INTO `app_userlook_logs` VALUES (10280, 10188, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '0', '1552373685');
INSERT INTO `app_userlook_logs` VALUES (10281, 10188, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '0', '1552372749');
INSERT INTO `app_userlook_logs` VALUES (10282, 10188, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '0', '1552302021');
INSERT INTO `app_userlook_logs` VALUES (10283, 10188, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '0', '1552371421');
INSERT INTO `app_userlook_logs` VALUES (10284, 10188, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1552371438');
INSERT INTO `app_userlook_logs` VALUES (10285, 10188, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '0', '1552373090');
INSERT INTO `app_userlook_logs` VALUES (10286, 10168, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1552807882');
INSERT INTO `app_userlook_logs` VALUES (10287, 10168, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '0', '1552807913');
INSERT INTO `app_userlook_logs` VALUES (10288, 10192, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1553004120');
INSERT INTO `app_userlook_logs` VALUES (10289, 10193, 10018, '鹿鼎记2', '/assets/uploads/image/video/2019/0307/1551902866704.jpg', '0', '1553114881');
INSERT INTO `app_userlook_logs` VALUES (10290, 10193, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '60', '1553076261');
INSERT INTO `app_userlook_logs` VALUES (10291, 10193, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '0', '1552977489');
INSERT INTO `app_userlook_logs` VALUES (10292, 10193, 10012, '测试测试1111', '/assets/uploads/image/video/2019/0102/1546430309045.png', '8', '1552977515');
INSERT INTO `app_userlook_logs` VALUES (10293, 10193, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1552978694');
INSERT INTO `app_userlook_logs` VALUES (10294, 10194, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1553001964');
INSERT INTO `app_userlook_logs` VALUES (10295, 10192, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1553004184');
INSERT INTO `app_userlook_logs` VALUES (10296, 10194, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '13', '1553135270');
INSERT INTO `app_userlook_logs` VALUES (10297, 10192, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '60157', '1553004257');
INSERT INTO `app_userlook_logs` VALUES (10298, 10195, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '0', '1553004712');
INSERT INTO `app_userlook_logs` VALUES (10299, 10195, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1553004603');
INSERT INTO `app_userlook_logs` VALUES (10300, 10195, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1553004667');
INSERT INTO `app_userlook_logs` VALUES (10301, 10195, 10004, '视频test说一个', '/assets/uploads/image/video/2019/0121/1548046515244.png', '0', '1553004698');
INSERT INTO `app_userlook_logs` VALUES (10302, 10196, 10013, '12121', '/assets/uploads/image/video/2019/0110/1547110096894.png', '0', '1553017943');
INSERT INTO `app_userlook_logs` VALUES (10303, 10196, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '1', '1553018209');
INSERT INTO `app_userlook_logs` VALUES (10304, 10196, 10001, 'mv输送输送', '/assets/uploads/image/video/2019/0307/1551908720395.jpg', '0', '1553027333');
INSERT INTO `app_userlook_logs` VALUES (10305, 10196, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1553018255');
INSERT INTO `app_userlook_logs` VALUES (10306, 10196, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '0', '1553018259');
INSERT INTO `app_userlook_logs` VALUES (10307, 10196, 10019, '震惊 此人竟然做出这种事', '/assets/uploads/image/video/2019/0307/1551906548024.jpg', '3', '1553018435');
INSERT INTO `app_userlook_logs` VALUES (10308, 10193, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '1', '1553467150');
INSERT INTO `app_userlook_logs` VALUES (10309, 10196, 10017, '逃学威龙3', '/assets/uploads/image/video/2019/0307/1551902854552.jpg', '0', '1553037401');
INSERT INTO `app_userlook_logs` VALUES (10310, 10193, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '40', '1553794191');
INSERT INTO `app_userlook_logs` VALUES (10311, 10193, 10022, '23122222', '/assets/uploads/image/video/2019/0307/1551907516657.jpg', '0', '1553794149');
INSERT INTO `app_userlook_logs` VALUES (10312, 10193, 10020, '界外球', '/assets/uploads/image/video/2019/0307/1551907412716.jpg', '0', '1553794159');
INSERT INTO `app_userlook_logs` VALUES (10313, 10200, 10021, '2 32', '/assets/uploads/image/video/2019/0307/1551907450470.jpg', '0', '1553143586');
INSERT INTO `app_userlook_logs` VALUES (10314, 10189, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '1', '1553161080');
INSERT INTO `app_userlook_logs` VALUES (10315, 10211, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '19716', '1553876820');
INSERT INTO `app_userlook_logs` VALUES (10316, 10213, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '37', '1554086642');
INSERT INTO `app_userlook_logs` VALUES (10317, 10191, 10023, '测试视频4', '/assets/uploads/image/video/2019/0319/1553003218351.png', '0', '1554088472');
INSERT INTO `app_userlook_logs` VALUES (10318, 10191, 10015, '地球', '/assets/uploads/image/video/2019/0306/1551842681710.png', '0', '1554088697');

-- ----------------------------
-- Table structure for app_video_admin_log
-- ----------------------------
DROP TABLE IF EXISTS `app_video_admin_log`;
CREATE TABLE `app_video_admin_log`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for app_video_list
-- ----------------------------
DROP TABLE IF EXISTS `app_video_list`;
CREATE TABLE `app_video_list`  (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标题',
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '封面图URL',
  `gif` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `m3u8` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `content` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '简介',
  `otype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '2' COMMENT '1:mv      2:视频',
  `url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '视频链接',
  `firstotype` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '例如 最新 最热  多个条件用 ，拼接ID',
  `secondotype` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '例如 1：Hi动画  多个条件用 ，拼接ID',
  `secondbestotype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '1' COMMENT '分类里面 最新=1 最热=2    多个条件用 ，拼接ID',
  `screenotype` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '筛选条件  多个条件用 ，拼接ID',
  `director` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `star` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '明星id  ，拼接',
  `is_free` int(5) DEFAULT 0 COMMENT '1：限免  0：不用',
  `hotcount` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '热度',
  `videotime` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '0' COMMENT '视频时长',
  `createtime` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '上传时间',
  `is_visible` int(2) DEFAULT 1,
  `play_urls` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `download_urls` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `video` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'video',
  `nickname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `size` bigint(20) DEFAULT NULL COMMENT '视频大小',
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `bit_rate` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '比特率',
  `duration` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '视频时长',
  `audio` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `vcode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ext` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `dis_ratio` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `acode` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `score` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '评分',
  `imdb` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'IMDB',
  `designation` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '番号',
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED DEFAULT 0 COMMENT '0 = 待转码   1=转码完成  2=转码异常',
  `tags` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '标签',
  `country` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `year` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`vid`) USING BTREE,
  UNIQUE INDEX `title`(`title`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11052 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_video_list
-- ----------------------------
INSERT INTO `app_video_list` VALUES (11033, '【天然素人】缺少streams字段问题', NULL, NULL, NULL, NULL, '2', '/video/upload/【天然素人】缺少streams字段问题.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414745', 1, NULL, NULL, NULL, '', 1222588909, 1920, 1080, '2056751', '4755.416667', 'aac', 'h264', 'mov,mp4,m4a,3gp,3g2,mj2', '', 'aac', NULL, NULL, NULL, '603891586414745682.mp4', 0, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11034, '人类下达的命令，AI会吗？', '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.jpg', '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.gif', '{\"360\":\"\\/video\\/product\\/20200412\\/HeqvQbrL\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/人类下达的命令，AI会吗？.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414745', 1, NULL, NULL, '/video/product/20200412/HeqvQbrL/360/HeqvQbrL.mp4', 'HeqvQbrL.mp4', 31391061, 1280, 720, '1215059', '206.640000', 'aac', 'h264', 'mov,mp4,m4a,3gp,3g2,mj2', '16:9', 'aac', NULL, NULL, NULL, '720871586414745728.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11035, '梨泰院第01集', '/video/product/20200409/43vTAoc7/360/43vTAoc7.jpg', '/video/product/20200409/43vTAoc7/360/43vTAoc7.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/43vTAoc7\\/360\\/mmm.m3u8\",\"720\":\"\\/video\\/product\\/20200409\\/43vTAoc7\\/720\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第01集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/43vTAoc7/360/43vTAoc7.mp4', '43vTAoc7.mp4', 403575276, 1080, 606, '737631', '4376.960000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '902581586414746491.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11036, '梨泰院第02集', '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.jpg', '/video/product/20200409/a0mqg9Qz/240/a0mqg9Qz.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/a0mqg9Qz\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/a0mqg9Qz\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第02集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/a0mqg9Qz/360/a0mqg9Qz.mp4', 'a0mqg9Qz.mp4', 350124432, 1080, 606, '702464', '3987.360000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '689251586414746411.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11037, '梨泰院第03集', '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.jpg', '/video/product/20200409/UYc9WrWu/240/UYc9WrWu.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/UYc9WrWu\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/UYc9WrWu\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第03集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/UYc9WrWu/360/UYc9WrWu.mp4', 'UYc9WrWu.mp4', 374817292, 1080, 606, '765319', '3918.000000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '767251586414746915.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11038, '梨泰院第04集', '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.jpg', '/video/product/20200409/KvoB3HGX/240/KvoB3HGX.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/KvoB3HGX\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/KvoB3HGX\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第04集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/KvoB3HGX/360/KvoB3HGX.mp4', 'KvoB3HGX.mp4', 318459592, 1080, 606, '676095', '3768.200000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '514891586414746888.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11039, '梨泰院第05集', '/video/product/20200409/XFT33rQK/240/XFT33rQK.jpg', '/video/product/20200409/XFT33rQK/240/XFT33rQK.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/XFT33rQK\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/XFT33rQK\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第05集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/XFT33rQK/360/XFT33rQK.mp4', 'XFT33rQK.mp4', 375300076, 1080, 606, '746415', '4022.400000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '748031586414746572.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11040, '梨泰院第06集', '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.jpg', '/video/product/20200409/bvEyUu3T/240/bvEyUu3T.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/bvEyUu3T\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/bvEyUu3T\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第06集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414746', 1, NULL, NULL, '/video/product/20200409/bvEyUu3T/360/bvEyUu3T.mp4', 'bvEyUu3T.mp4', 324792372, 1080, 606, '644905', '4029.000000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '645421586414746671.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11041, '梨泰院第07集', '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.jpg', '/video/product/20200409/N4sYZm1L/240/N4sYZm1L.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/N4sYZm1L\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/N4sYZm1L\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第07集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/N4sYZm1L/360/N4sYZm1L.mp4', 'N4sYZm1L.mp4', 312947244, 1080, 606, '605129', '4137.240000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '754131586414747135.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11042, '梨泰院第08集', '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.jpg', '/video/product/20200409/KQbDS0pn/240/KQbDS0pn.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/KQbDS0pn\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/KQbDS0pn\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第08集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/KQbDS0pn/360/KQbDS0pn.mp4', 'KQbDS0pn.mp4', 304025704, 1080, 606, '626323', '3883.280000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '996031586414747429.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11043, '梨泰院第09集', '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.jpg', '/video/product/20200409/uMnJMIWF/240/uMnJMIWF.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/uMnJMIWF\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/uMnJMIWF\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第09集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/uMnJMIWF/360/uMnJMIWF.mp4', 'uMnJMIWF.mp4', 306703764, 1080, 606, '618818', '3965.000000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '851911586414747879.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11044, '梨泰院第10集', '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.jpg', '/video/product/20200409/ZiLfCwqC/240/ZiLfCwqC.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/ZiLfCwqC\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/ZiLfCwqC\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第10集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/ZiLfCwqC/360/ZiLfCwqC.mp4', 'ZiLfCwqC.mp4', 329003008, 1080, 606, '625430', '4208.320000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '112191586414747197.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11045, '梨泰院第11集', '/video/product/20200409/flosGHJa/240/flosGHJa.jpg', '/video/product/20200409/flosGHJa/240/flosGHJa.gif', '{\"240\":\"\\/video\\/product\\/20200409\\/flosGHJa\\/240\\/mmm.m3u8\",\"360\":\"\\/video\\/product\\/20200409\\/flosGHJa\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第11集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/flosGHJa/360/flosGHJa.mp4', 'flosGHJa.mp4', 329378068, 1080, 606, '627341', '4200.280000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '446831586414747111.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11046, '梨泰院第12集', '/video/product/20200409/7uhTUNNC/360/7uhTUNNC.jpg', '/video/product/20200409/7uhTUNNC/360/7uhTUNNC.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/7uhTUNNC\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第12集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414747', 1, NULL, NULL, '/video/product/20200409/7uhTUNNC/360/7uhTUNNC.mp4', '7uhTUNNC.mp4', 304528228, 1080, 606, '585464', '4161.160000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '233101586414747808.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11047, '梨泰院第13集', '/video/product/20200409/JZjU6FOt/360/JZjU6FOt.jpg', '/video/product/20200409/JZjU6FOt/360/JZjU6FOt.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/JZjU6FOt\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第13集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414748', 1, NULL, NULL, '/video/product/20200409/JZjU6FOt/360/JZjU6FOt.mp4', 'JZjU6FOt.mp4', 316632420, 1080, 606, '614405', '4122.720000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '729741586414748281.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11048, '梨泰院第14集', '/video/product/20200409/QtlZXBOR/360/QtlZXBOR.jpg', '/video/product/20200409/QtlZXBOR/360/QtlZXBOR.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/QtlZXBOR\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第14集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414748', 1, NULL, NULL, '/video/product/20200409/QtlZXBOR/360/QtlZXBOR.mp4', 'QtlZXBOR.mp4', 284239456, 1080, 606, '580296', '3918.480000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '852151586414748821.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11049, '梨泰院第15集', '/video/product/20200409/szPOgAve/360/szPOgAve.jpg', '/video/product/20200409/szPOgAve/360/szPOgAve.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/szPOgAve\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第15集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414748', 1, NULL, NULL, '/video/product/20200409/szPOgAve/360/szPOgAve.mp4', 'szPOgAve.mp4', 281802036, 1080, 606, '576208', '3912.440000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '233761586414748764.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11050, '梨泰院第16集', '/video/product/20200409/aETtYk2d/360/aETtYk2d.jpg', '/video/product/20200409/aETtYk2d/360/aETtYk2d.gif', '{\"360\":\"\\/video\\/product\\/20200409\\/aETtYk2d\\/360\\/mmm.m3u8\"}', NULL, '2', '/video/upload/梨泰院第16集.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414748', 1, NULL, NULL, '/video/product/20200409/aETtYk2d/360/aETtYk2d.mp4', 'aETtYk2d.mp4', 392425936, 1080, 606, '599061', '5240.480000', 'aac', 'h264', 'mpegts', '16:9', 'aac', NULL, NULL, NULL, '842411586414748350.mp4', 1, NULL, NULL, NULL);
INSERT INTO `app_video_list` VALUES (11051, '转码变宽屏问题', NULL, NULL, NULL, NULL, '2', '/video/upload/转码变宽屏问题.mp4', '0', '0', '1', '0', NULL, NULL, 0, NULL, '0', '1586414748', 1, NULL, NULL, NULL, '', 237254668, 608, 1080, '1490437', '1273.428000', 'aac', 'h264', 'mov,mp4,m4a,3gp,3g2,mj2', '9:16', 'aac', NULL, NULL, NULL, '120901586414748820.mp4', 0, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for app_video_otype
-- ----------------------------
DROP TABLE IF EXISTS `app_video_otype`;
CREATE TABLE `app_video_otype`  (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `otype` int(11) DEFAULT 1 COMMENT ' 1:mv    5:视频',
  `otypename` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '分类名称',
  `pic` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`oid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10027 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_video_otype
-- ----------------------------
INSERT INTO `app_video_otype` VALUES (10024, 0, '爱情片', NULL);
INSERT INTO `app_video_otype` VALUES (10025, 0, '动作片', NULL);
INSERT INTO `app_video_otype` VALUES (10026, 10024, '犯罪', NULL);

-- ----------------------------
-- Table structure for app_video_trouble
-- ----------------------------
DROP TABLE IF EXISTS `app_video_trouble`;
CREATE TABLE `app_video_trouble`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT 0 COMMENT '房间id',
  `content` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10021 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_video_trouble
-- ----------------------------
INSERT INTO `app_video_trouble` VALUES (10001, 10006, 0, '来来来', '1543818739');
INSERT INTO `app_video_trouble` VALUES (10002, 10016, 0, '国家计量局', '1545029436');
INSERT INTO `app_video_trouble` VALUES (10003, 10018, 0, '123456', '1545306141');
INSERT INTO `app_video_trouble` VALUES (10004, 10018, 0, '123456', '1545306142');
INSERT INTO `app_video_trouble` VALUES (10005, 10025, 0, '1111', '1545708527');
INSERT INTO `app_video_trouble` VALUES (10006, 10018, 0, '123456', '1545739336');
INSERT INTO `app_video_trouble` VALUES (10007, 10111, 10001, '111', '1547205638');
INSERT INTO `app_video_trouble` VALUES (10008, 10111, 10001, '111', '1547205687');
INSERT INTO `app_video_trouble` VALUES (10009, 10125, 10001, '没有声音', '1547207164');
INSERT INTO `app_video_trouble` VALUES (10010, 10126, 10013, '播放控制不好用', '1547291185');
INSERT INTO `app_video_trouble` VALUES (10011, 10126, 10013, '视频卡顿不流畅', '1547292129');
INSERT INTO `app_video_trouble` VALUES (10012, 10128, 10013, '视频卡顿不流畅', '1547438326');
INSERT INTO `app_video_trouble` VALUES (10013, 10121, 10001, '播放控制不好用', '1547515329');
INSERT INTO `app_video_trouble` VALUES (10014, 10129, 10012, '播放控制不好用', '1547515864');
INSERT INTO `app_video_trouble` VALUES (10015, 10182, 10022, '视频卡顿不流畅', '1551907662');
INSERT INTO `app_video_trouble` VALUES (10016, 10177, 10021, '很棒', '1551907677');
INSERT INTO `app_video_trouble` VALUES (10017, 10181, 10017, '视频卡顿不流畅', '1551910625');
INSERT INTO `app_video_trouble` VALUES (10018, 10164, 10020, '视频无法播放', '1552299153');
INSERT INTO `app_video_trouble` VALUES (10019, 10194, 10023, '视频卡顿不流畅', '1553003368');
INSERT INTO `app_video_trouble` VALUES (10020, 10192, 10022, '视频卡顿不流畅', '1553004119');

-- ----------------------------
-- Table structure for app_video_user_log
-- ----------------------------
DROP TABLE IF EXISTS `app_video_user_log`;
CREATE TABLE `app_video_user_log`  (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `vid` int(11) DEFAULT NULL,
  `is_down` int(11) DEFAULT 0 COMMENT '是否下载  0：否 1：是',
  `is_flag` int(11) DEFAULT 0 COMMENT '操作 1：已点赞   2已点踩',
  PRIMARY KEY (`logid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10079 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of app_video_user_log
-- ----------------------------
INSERT INTO `app_video_user_log` VALUES (10002, 10001, 10001, 1, 1);
INSERT INTO `app_video_user_log` VALUES (10003, 10007, 10001, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10008, 10013, 10001, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10009, 10011, 10010, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10010, 10015, 10010, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10011, 10009, 10010, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10012, 10009, 10009, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10013, 10016, 10010, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10014, 10019, 10011, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10015, 10019, 10010, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10016, 10009, 10011, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10017, 10018, 10011, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10018, 10018, 10004, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10019, 10023, 10002, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10020, 10025, 10004, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10021, 10025, 10010, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10022, 10025, 10005, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10023, 10025, 10007, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10024, 10025, 10001, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10025, 10025, 10008, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10026, 10018, 10010, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10027, 10039, 10007, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10028, 10042, 10012, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10029, 10054, 10012, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10030, 10048, 10013, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10031, 10055, 10013, 1, 1);
INSERT INTO `app_video_user_log` VALUES (10032, 10055, 10012, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10033, 10118, 10012, 1, 1);
INSERT INTO `app_video_user_log` VALUES (10034, 10118, 10001, 1, 1);
INSERT INTO `app_video_user_log` VALUES (10035, 10042, 10013, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10036, 10051, 10012, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10037, 10051, 10011, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10038, 10051, 10010, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10039, 10051, 10008, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10040, 10051, 10001, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10041, 10118, 10013, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10042, 10055, 10001, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10043, 10055, 10011, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10044, 10055, 10005, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10045, 10125, 10001, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10046, 10125, 10013, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10047, 10125, 10012, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10048, 10127, 10013, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10049, 10127, 10001, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10050, 10127, 10012, 1, 0);
INSERT INTO `app_video_user_log` VALUES (10051, 10130, 10013, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10052, 10129, 10005, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10053, 10165, 10004, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10054, 10168, 10001, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10055, 10173, 10013, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10056, 10173, 10015, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10057, 10172, 10015, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10058, 10176, 10015, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10059, 10182, 10022, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10060, 10183, 10015, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10061, 10181, 10020, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10062, 10181, 10017, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10063, 10183, 10016, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10064, 10181, 10015, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10065, 10181, 10022, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10066, 10181, 10021, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10067, 10167, 10017, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10068, 10167, 10022, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10069, 10164, 10020, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10070, 10192, 10015, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10071, 10195, 10015, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10072, 10195, 10004, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10073, 10196, 10018, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10074, 10193, 10022, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10075, 10193, 10023, 0, 1);
INSERT INTO `app_video_user_log` VALUES (10076, 10193, 10021, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10077, 10193, 10020, 0, 2);
INSERT INTO `app_video_user_log` VALUES (10078, 10211, 10023, 0, 2);

-- ----------------------------
-- Table structure for app_vip
-- ----------------------------
DROP TABLE IF EXISTS `app_vip`;
CREATE TABLE `app_vip`  (
  `vip_id` int(11) NOT NULL AUTO_INCREMENT,
  `vip_month_money` decimal(14, 2) DEFAULT 0.00 COMMENT '月卡金额',
  `vip_season_money` decimal(14, 2) DEFAULT 0.00 COMMENT '季卡金额',
  `vip_year_money` decimal(14, 2) DEFAULT 0.00 COMMENT '年卡金额',
  PRIMARY KEY (`vip_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of app_vip
-- ----------------------------
INSERT INTO `app_vip` VALUES (1, 1.00, 2.00, 3.00);

-- ----------------------------
-- Table structure for app_withdraw
-- ----------------------------
DROP TABLE IF EXISTS `app_withdraw`;
CREATE TABLE `app_withdraw`  (
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
-- Records of app_withdraw
-- ----------------------------
INSERT INTO `app_withdraw` VALUES (424, 0, 562.00, 1, '15822559473792708', 1582255948, 20, 'x.paysite.xyz', '处理完毕');
INSERT INTO `app_withdraw` VALUES (425, 0, 423125.00, 0, '19451582862443728', 1582862443, 0, 'x.paysite.xyz', NULL);
INSERT INTO `app_withdraw` VALUES (426, 0, 120.00, 0, '61911582862670477', 1582862670, 0, 'x.paysite.xyz', NULL);

SET FOREIGN_KEY_CHECKS = 1;
