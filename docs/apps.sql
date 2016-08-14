DROP TABLE IF EXISTS `app`.`apps`;
CREATE TABLE `app`.`apps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `pluginIds` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` char(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密钥',
  `domain` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '行业',
  `configs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createTime` datetime NOT NULL,
  `updateTime` datetime NOT NULL,
  `createUser` int(11) NOT NULL,
  `updateUser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

BEGIN;
INSERT INTO `app`.`apps` VALUES ('1', '0', '', 'app', 'app', '', '', '', 'site', '[]', '0000-00-00 00:00:00', '2016-07-22 15:51:57', '1', '1'), ('2', '0', '', 'test', 'test', '', '', '', 'site', '[]', '2015-04-02 23:42:04', '2016-06-16 14:51:42', '1', '1');
COMMIT;
