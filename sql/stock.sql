CREATE TABLE IF NOT EXISTS `stock` (
  `sid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
)