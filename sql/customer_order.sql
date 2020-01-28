CREATE TABLE IF NOT EXISTS `customer_order` (
  `id` varchar(10) NOT NULL,
  `order_no` varchar(10) NOT NULL,
  `order` varchar(50) NOT NULL,
  `delivary` varchar(50) NOT NULL,
  `item1` varchar(10) NOT NULL,
  `item1_qty` int(2) NOT NULL,
  `item2` varchar(10), 
  `item2_qty` int(2),
  `item3` varchar(10),
  `item3_qty` int(2),
  `add_details` varchar(50),
PRIMARY KEY (`id`,`order_no`)
)