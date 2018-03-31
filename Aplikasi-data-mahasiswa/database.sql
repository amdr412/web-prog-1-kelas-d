create database uts;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nim` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);