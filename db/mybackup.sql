#
# TABLE STRUCTURE FOR: materi
#

DROP TABLE IF EXISTS `materi`;

CREATE TABLE `materi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `matapelajaran` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `konten` text NOT NULL,
  `tipe` enum('Tertulis','File') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

