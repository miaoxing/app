DROP TABLE IF EXISTS `app`.`apps`;
CREATE TABLE `app`.`apps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL DEFAULT '0',
  `pluginIds` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `secret` char(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '密钥',
  `domain` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `industry` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '行业',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `configs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `createTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updateTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createUser` int(11) NOT NULL DEFAULT '0',
  `updateUser` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

BEGIN;
INSERT INTO `app`.`apps` VALUES
  ('1', '0', '', 'app', 'app', '', '', '', 'site', '1', '[]', '0000-00-00 00:00:00', '2016-07-22 15:51:57', '1', '1'),
  ('2', '0', '', 'test', 'test', '', '', '', 'site', '1', '[]', '2015-04-02 23:42:04', '2016-06-16 14:51:42', '1', '1');
COMMIT;
