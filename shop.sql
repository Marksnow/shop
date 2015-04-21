-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 21 日 09:31
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_num` varchar(40) NOT NULL,
  `order_shop_id` int(11) NOT NULL,
  `order_shop_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `order_shop_qty` int(10) NOT NULL,
  `order_shop_total` float NOT NULL,
  `order_date` datetime NOT NULL,
  `order_operater` varchar(20) CHARACTER SET utf8 NOT NULL,
  `order_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`id`, `order_num`, `order_shop_id`, `order_shop_name`, `order_shop_qty`, `order_shop_total`, `order_date`, `order_operater`, `order_status`) VALUES
(3, '15042110737895', 6, '【考拉包袋】梅花十字扣小包', 1, 59.5, '2015-04-21 10:15:23', '小田', 1),
(4, '15042110710637', 4, '美女', 2, 11110, '2015-04-21 10:15:23', '小田', 1);

-- --------------------------------------------------------

--
-- 表的结构 `product_img`
--

CREATE TABLE IF NOT EXISTS `product_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `product_IMG` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `product_img`
--

INSERT INTO `product_img` (`id`, `product_id`, `product_IMG`) VALUES
(10, 2, '2015-04-09/55260d9598901.jpeg'),
(11, 2, '2015-04-09/55260d959a2aa.jpeg'),
(12, 2, '2015-04-09/55260d959b238.jpeg'),
(16, 4, '2015-04-09/552692e8ac62a.jpeg'),
(17, 4, '2015-04-09/552692e8accec.jpg'),
(18, 4, '2015-04-09/552692e8ad1d8.jpeg'),
(20, 6, '2015-04-14/552c87e99b9f2.jpg'),
(21, 6, '2015-04-14/552c87e99e935.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `product_type` int(10) NOT NULL,
  `product_price` float NOT NULL,
  `product_stocks` int(10) NOT NULL,
  `product_detail` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `product_date` date NOT NULL,
  `product_auth` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `product_info`
--

INSERT INTO `product_info` (`product_id`, `product_name`, `product_type`, `product_price`, `product_stocks`, `product_detail`, `product_date`, `product_auth`) VALUES
(2, '雷神', 0, 4700, 25, '雷神雷神雷神雷神雷神雷神雷神雷神雷神雷神雷神雷神', '0000-00-00', '威少'),
(4, '美女', 1, 5555, 20, '美女美女美女美女美女美女美女美女美女', '0000-00-00', '小田'),
(6, '【考拉包袋】梅花十字扣小包', 1, 59.5, 30, '<p><img style="width: 559px; height: 389px;" alt="bag_2.jpg" src="/shop/Public/img/20150414/1428981673913628.jpg" title="1428981673913628.jpg" height="389" width="559"/></p><p><img alt="bag_1.jpg" src="/shop/Public/img/20150414/1428981731994601.jpg" title="1428981731994601.jpg"/></p>', '2015-04-14', '小田'),
(7, '', 0, 0, 0, '', '2015-04-21', '小田'),
(8, '', 0, 0, 0, '', '2015-04-21', '小田'),
(9, '', 0, 0, 0, '', '2015-04-21', '小田'),
(10, '', 0, 0, 0, '', '2015-04-21', '小田'),
(11, '', 0, 0, 0, '', '2015-04-21', '小田'),
(12, '', 0, 0, 0, '', '2015-04-21', '小田'),
(13, '', 0, 0, 0, '', '2015-04-21', '小田'),
(14, '', 0, 0, 0, '', '2015-04-21', '小田'),
(15, '', 0, 0, 0, '', '2015-04-21', '小田'),
(16, '', 0, 0, 0, '', '2015-04-21', '小田'),
(17, '', 0, 0, 0, '', '2015-04-21', '小田'),
(18, '', 0, 0, 0, '', '2015-04-21', '小田'),
(19, '', 0, 0, 0, '', '2015-04-21', '小田'),
(20, '收到', 0, 0, 0, '', '2015-04-21', '小田'),
(21, '收到', 0, 0, 0, '', '2015-04-21', '小田'),
(22, '收到', 0, 0, 0, '', '2015-04-21', '小田'),
(23, '收到', 0, 0, 0, '', '2015-04-21', '小田'),
(24, '收到', 0, 0, 0, '', '2015-04-21', '小田'),
(25, '', 0, 0, 0, '', '2015-04-21', '小田'),
(26, '', 0, 0, 0, '', '2015-04-21', '小田'),
(27, '', 0, 0, 0, '', '2015-04-21', '小田');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_type` int(2) NOT NULL DEFAULT '0',
  `user_cart` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_pass`, `user_address`, `user_email`, `user_type`, `user_cart`) VALUES
(3, '小田', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '四川成都', '676100598@qq.com', 1, '{"6":"1","4":"2"}'),
(4, '威少', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '四川成都', '676100598@qq.com', 0, '{"6":"1","4":"2"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
