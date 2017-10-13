CREATE DATABASE IF NOT EXISTS `bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd`;

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `attempts` int(11) NOT NULL,
  `player` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;