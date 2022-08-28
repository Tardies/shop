SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `shop` (
  `id` int(10) AUTO_INCREMENT NOT NULL,
  `type` varchar(1) NOT NULL,
  `sku` varchar(9) NOT NULL,
  `name` text NOT NULL,
  `price` int(10) NOT NULL,
  `size` int(10) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `length` int(10) DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
