-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2020 a las 00:13:49
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `danielspainting`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `galle_id` int(11) NOT NULL,
  `galle_route` text NOT NULL,
  `serv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`galle_id`, `galle_route`, `serv_id`) VALUES
(13, 'views/images/galeriaservicio/galeria581.jpg', 3),
(14, 'views/images/galeriaservicio/galeria877.jpg', 3),
(16, 'views/images/galeriaservicio/galeria215.jpg', 3),
(17, 'views/images/galeriaservicio/galeria825.jpg', 3),
(18, 'views/images/galeriaservicio/galeria182.jpg', 4),
(19, 'views/images/galeriaservicio/galeria206.jpg', 4),
(20, 'views/images/galeriaservicio/galeria552.jpg', 4),
(21, 'views/images/galeriaservicio/galeria142.jpg', 4),
(22, 'views/images/galeriaservicio/galeria478.jpg', 4),
(23, 'views/images/galeriaservicio/galeria762.jpg', 5),
(24, 'views/images/galeriaservicio/galeria987.jpg', 5),
(25, 'views/images/galeriaservicio/galeria395.jpg', 5),
(26, 'views/images/galeriaservicio/galeria799.jpg', 5),
(27, 'views/images/galeriaservicio/galeria712.jpg', 5),
(28, 'views/images/galeriaservicio/galeria872.jpg', 6),
(29, 'views/images/galeriaservicio/galeria612.jpg', 6),
(30, 'views/images/galeriaservicio/galeria354.jpg', 6),
(31, 'views/images/galeriaservicio/galeria897.jpg', 6),
(32, 'views/images/galeriaservicio/galeria271.jpg', 6),
(38, 'views/images/galeriaservicio/galeria428.jpg', 3),
(39, 'views/images/galeriaservicio/galeria436.jpg', 7),
(40, 'views/images/galeriaservicio/galeria420.jpg', 7),
(41, 'views/images/galeriaservicio/galeria214.jpg', 7),
(42, 'views/images/galeriaservicio/galeria440.jpg', 7),
(48, 'views/images/galeriaservicio/galeria143.jpg', 9),
(49, 'views/images/galeriaservicio/galeria605.jpg', 9),
(50, 'views/images/galeriaservicio/galeria530.jpg', 9),
(52, 'views/images/galeriaservicio/galeria455.jpg', 10),
(54, 'views/images/galeriaservicio/galeria866.jpg', 10),
(55, 'views/images/galeriaservicio/galeria969.jpg', 10),
(58, 'views/images/galeriaservicio/galeria846.jpg', 12),
(59, 'views/images/galeriaservicio/galeria169.jpg', 12),
(60, 'views/images/galeriaservicio/galeria329.jpg', 12),
(61, 'views/images/galeriaservicio/galeria115.jpg', 12),
(62, 'views/images/galeriaservicio/galeria338.jpg', 12),
(63, 'views/images/galeriaservicio/galeria265.jpg', 12),
(64, 'views/images/galeriaservicio/galeria412.jpg', 12),
(65, 'views/images/galeriaservicio/galeria820.jpg', 12),
(66, 'views/images/galeriaservicio/galeria789.jpg', 12),
(67, 'views/images/galeriaservicio/galeria920.jpg', 12),
(68, 'views/images/galeriaservicio/galeria473.jpg', 3),
(69, 'views/images/galeriaservicio/galeria118.jpg', 3),
(70, 'views/images/galeriaservicio/galeria152.jpg', 3),
(71, 'views/images/galeriaservicio/galeria851.jpg', 3),
(72, 'views/images/galeriaservicio/galeria636.jpg', 3),
(73, 'views/images/galeriaservicio/galeria578.jpg', 3),
(74, 'views/images/galeriaservicio/galeria358.jpg', 3),
(75, 'views/images/galeriaservicio/galeria653.jpg', 3),
(76, 'views/images/galeriaservicio/galeria598.jpg', 3),
(77, 'views/images/galeriaservicio/galeria522.jpg', 3),
(78, 'views/images/galeriaservicio/galeria172.jpg', 3),
(79, 'views/images/galeriaservicio/galeria860.jpg', 3),
(80, 'views/images/galeriaservicio/galeria911.jpg', 3),
(81, 'views/images/galeriaservicio/galeria728.jpg', 3),
(82, 'views/images/galeriaservicio/galeria845.jpg', 3),
(83, 'views/images/galeriaservicio/galeria476.jpg', 3),
(85, 'views/images/galeriaservicio/galeria637.jpg', 3),
(88, 'views/images/galeriaservicio/galeria156.jpg', 3),
(89, 'views/images/galeriaservicio/galeria541.jpg', 3),
(90, 'views/images/galeriaservicio/galeria190.jpg', 3),
(91, 'views/images/galeriaservicio/galeria293.jpg', 3),
(92, 'views/images/galeriaservicio/galeria668.jpg', 3),
(94, 'views/images/galeriaservicio/galeria512.jpg', 3),
(96, 'views/images/galeriaservicio/galeria267.jpg', 3),
(97, 'views/images/galeriaservicio/galeria251.jpg', 3),
(98, 'views/images/galeriaservicio/galeria597.jpg', 3),
(99, 'views/images/galeriaservicio/galeria204.jpg', 3),
(100, 'views/images/galeriaservicio/galeria771.jpg', 3),
(101, 'views/images/galeriaservicio/galeria365.jpg', 3),
(102, 'views/images/galeriaservicio/galeria573.jpg', 3),
(103, 'views/images/galeriaservicio/galeria211.jpg', 3),
(104, 'views/images/galeriaservicio/galeria598.jpg', 3),
(105, 'views/images/galeriaservicio/galeria198.jpg', 3),
(106, 'views/images/galeriaservicio/galeria688.jpg', 3),
(107, 'views/images/galeriaservicio/galeria482.jpg', 3),
(108, 'views/images/galeriaservicio/galeria330.jpg', 3),
(110, 'views/images/galeriaservicio/galeria686.jpg', 4),
(111, 'views/images/galeriaservicio/galeria906.jpg', 4),
(112, 'views/images/galeriaservicio/galeria754.jpg', 4),
(113, 'views/images/galeriaservicio/galeria378.jpg', 4),
(114, 'views/images/galeriaservicio/galeria760.jpg', 4),
(116, 'views/images/galeriaservicio/galeria523.jpg', 4),
(117, 'views/images/galeriaservicio/galeria313.jpg', 4),
(118, 'views/images/galeriaservicio/galeria146.jpg', 4),
(119, 'views/images/galeriaservicio/galeria713.jpg', 4),
(120, 'views/images/galeriaservicio/galeria766.jpg', 4),
(121, 'views/images/galeriaservicio/galeria859.jpg', 4),
(122, 'views/images/galeriaservicio/galeria232.jpg', 4),
(123, 'views/images/galeriaservicio/galeria130.jpg', 4),
(124, 'views/images/galeriaservicio/galeria123.jpg', 4),
(125, 'views/images/galeriaservicio/galeria713.jpg', 4),
(126, 'views/images/galeriaservicio/galeria753.jpg', 4),
(127, 'views/images/galeriaservicio/galeria467.jpg', 4),
(128, 'views/images/galeriaservicio/galeria349.jpg', 4),
(129, 'views/images/galeriaservicio/galeria548.jpg', 4),
(130, 'views/images/galeriaservicio/galeria264.jpg', 4),
(131, 'views/images/galeriaservicio/galeria649.jpg', 12),
(132, 'views/images/galeriaservicio/galeria810.jpg', 12),
(133, 'views/images/galeriaservicio/galeria259.jpg', 12),
(134, 'views/images/galeriaservicio/galeria966.jpg', 8),
(135, 'views/images/galeriaservicio/galeria527.jpg', 8),
(136, 'views/images/galeriaservicio/galeria917.jpg', 8),
(137, 'views/images/galeriaservicio/galeria541.jpg', 3),
(138, 'views/images/galeriaservicio/galeria489.jpg', 3),
(139, 'views/images/galeriaservicio/galeria753.jpg', 3),
(141, 'views/images/galeriaservicio/galeria835.jpg', 5),
(142, 'views/images/galeriaservicio/galeria136.jpg', 3),
(143, 'views/images/galeriaservicio/galeria268.jpg', 3),
(144, 'views/images/galeriaservicio/galeria739.jpg', 4),
(145, 'views/images/galeriaservicio/galeria953.jpg', 3),
(146, 'views/images/galeriaservicio/galeria922.jpg', 3),
(147, 'views/images/galeriaservicio/galeria890.jpg', 3),
(148, 'views/images/galeriaservicio/galeria882.jpg', 3),
(149, 'views/images/galeriaservicio/galeria203.jpg', 3),
(150, 'views/images/galeriaservicio/galeria791.jpg', 5),
(151, 'views/images/galeriaservicio/galeria672.jpg', 3),
(152, 'views/images/galeriaservicio/galeria582.jpg', 3),
(153, 'views/images/galeriaservicio/galeria728.jpg', 3),
(155, 'views/images/galeriaservicio/galeria616.jpg', 3),
(156, 'views/images/galeriaservicio/galeria421.jpg', 3),
(157, 'views/images/galeriaservicio/galeria299.jpg', 3),
(158, 'views/images/galeriaservicio/galeria629.jpg', 3),
(159, 'views/images/galeriaservicio/galeria360.jpg', 4),
(160, 'views/images/galeriaservicio/galeria432.jpg', 4),
(161, 'views/images/galeriaservicio/galeria675.jpg', 4),
(162, 'views/images/galeriaservicio/galeria806.jpg', 4),
(164, 'views/images/galeriaservicio/galeria339.jpg', 4),
(165, 'views/images/galeriaservicio/galeria776.jpg', 4),
(166, 'views/images/galeriaservicio/galeria453.jpg', 4),
(167, 'views/images/galeriaservicio/galeria999.jpg', 12),
(168, 'views/images/galeriaservicio/galeria292.jpg', 12),
(169, 'views/images/galeriaservicio/galeria178.jpg', 3),
(170, 'views/images/galeriaservicio/galeria817.jpg', 3),
(171, 'views/images/galeriaservicio/galeria871.jpg', 3),
(172, 'views/images/galeriaservicio/galeria263.jpg', 3),
(173, 'views/images/galeriaservicio/galeria850.jpg', 3),
(175, 'views/images/galeriaservicio/galeria193.jpg', 5),
(176, 'views/images/galeriaservicio/galeria585.jpg', 5),
(178, 'views/images/galeriaservicio/galeria373.jpg', 5),
(179, 'views/images/galeriaservicio/galeria713.jpg', 5),
(180, 'views/images/galeriaservicio/galeria212.jpg', 12),
(181, 'views/images/galeriaservicio/galeria928.jpg', 12),
(182, 'views/images/galeriaservicio/galeria628.jpg', 4),
(183, 'views/images/galeriaservicio/galeria962.jpg', 12),
(184, 'views/images/galeriaservicio/galeria599.jpg', 12),
(185, 'views/images/galeriaservicio/galeria195.jpg', 4),
(186, 'views/images/galeriaservicio/galeria298.jpg', 4),
(187, 'views/images/galeriaservicio/galeria932.jpg', 4),
(188, 'views/images/galeriaservicio/galeria551.jpg', 4),
(189, 'views/images/galeriaservicio/galeria923.jpg', 4),
(190, 'views/images/galeriaservicio/galeria797.jpg', 6),
(191, 'views/images/galeriaservicio/galeria742.jpg', 3),
(192, 'views/images/galeriaservicio/galeria646.jpg', 3),
(194, 'views/images/galeriaservicio/galeria375.jpg', 3),
(195, 'views/images/galeriaservicio/galeria942.jpg', 3),
(196, 'views/images/galeriaservicio/galeria204.jpg', 3),
(197, 'views/images/galeriaservicio/galeria916.jpg', 3),
(198, 'views/images/galeriaservicio/galeria298.jpg', 3),
(199, 'views/images/galeriaservicio/galeria110.jpg', 3),
(200, 'views/images/galeriaservicio/galeria424.jpg', 3),
(201, 'views/images/galeriaservicio/galeria549.jpg', 3),
(202, 'views/images/galeriaservicio/galeria692.jpg', 3),
(203, 'views/images/galeriaservicio/galeria741.jpg', 3),
(204, 'views/images/galeriaservicio/galeria930.jpg', 3),
(205, 'views/images/galeriaservicio/galeria499.jpg', 3),
(206, 'views/images/galeriaservicio/galeria556.jpg', 3),
(207, 'views/images/galeriaservicio/galeria355.jpg', 3),
(208, 'views/images/galeriaservicio/galeria630.jpg', 3),
(209, 'views/images/galeriaservicio/galeria419.jpg', 3),
(210, 'views/images/galeriaservicio/galeria514.jpg', 3),
(211, 'views/images/galeriaservicio/galeria652.jpg', 3),
(212, 'views/images/galeriaservicio/galeria112.jpg', 3),
(213, 'views/images/galeriaservicio/galeria251.jpg', 3),
(214, 'views/images/galeriaservicio/galeria563.jpg', 4),
(215, 'views/images/galeriaservicio/galeria977.jpg', 4),
(216, 'views/images/galeriaservicio/galeria623.jpg', 4),
(217, 'views/images/galeriaservicio/galeria151.jpg', 4),
(218, 'views/images/galeriaservicio/galeria844.jpg', 4),
(219, 'views/images/galeriaservicio/galeria969.jpg', 4),
(220, 'views/images/galeriaservicio/galeria603.jpg', 4),
(221, 'views/images/galeriaservicio/galeria563.jpg', 4),
(222, 'views/images/galeriaservicio/galeria808.jpg', 5),
(223, 'views/images/galeriaservicio/galeria779.jpg', 3),
(224, 'views/images/galeriaservicio/galeria878.jpg', 4),
(225, 'views/images/galeriaservicio/galeria334.jpg', 3),
(226, 'views/images/galeriaservicio/galeria770.jpg', 5),
(227, 'views/images/galeriaservicio/galeria800.jpg', 5),
(228, 'views/images/galeriaservicio/galeria341.jpg', 3),
(229, 'views/images/galeriaservicio/galeria233.jpg', 12),
(231, 'views/images/galeriaservicio/galeria197.jpg', 8),
(232, 'views/images/galeriaservicio/galeria674.jpg', 8),
(233, 'views/images/galeriaservicio/galeria766.jpg', 4),
(234, 'views/images/galeriaservicio/galeria715.jpg', 3),
(235, 'views/images/galeriaservicio/galeria263.jpg', 3),
(236, 'views/images/galeriaservicio/galeria362.jpg', 3),
(237, 'views/images/galeriaservicio/galeria914.jpg', 3),
(238, 'views/images/galeriaservicio/galeria464.jpg', 3),
(239, 'views/images/galeriaservicio/galeria564.jpg', 3),
(240, 'views/images/galeriaservicio/galeria576.jpg', 3),
(241, 'views/images/galeriaservicio/galeria300.jpg', 3),
(242, 'views/images/galeriaservicio/galeria936.jpg', 4),
(243, 'views/images/galeriaservicio/galeria194.jpg', 3),
(244, 'views/images/galeriaservicio/galeria971.jpg', 3),
(245, 'views/images/galeriaservicio/galeria398.jpg', 3),
(246, 'views/images/galeriaservicio/galeria742.jpg', 4),
(247, 'views/images/galeriaservicio/galeria248.jpg', 3),
(248, 'views/images/galeriaservicio/galeria815.jpg', 4),
(249, 'views/images/galeriaservicio/galeria451.jpg', 4),
(250, 'views/images/galeriaservicio/galeria114.jpg', 4),
(251, 'views/images/galeriaservicio/galeria862.jpg', 6),
(252, 'views/images/galeriaservicio/galeria215.jpg', 6),
(253, 'views/images/galeriaservicio/galeria671.jpg', 4),
(254, 'views/images/galeriaservicio/galeria926.jpg', 3),
(255, 'views/images/galeriaservicio/galeria261.jpg', 4),
(256, 'views/images/galeriaservicio/galeria715.jpg', 4),
(257, 'views/images/galeriaservicio/galeria465.jpg', 3),
(258, 'views/images/galeriaservicio/galeria465.jpg', 4),
(259, 'views/images/galeriaservicio/galeria798.jpg', 4),
(260, 'views/images/galeriaservicio/galeria485.jpg', 3),
(261, 'views/images/galeriaservicio/galeria183.jpg', 3),
(262, 'views/images/galeriaservicio/galeria914.jpg', 3),
(263, 'views/images/galeriaservicio/galeria259.jpg', 3),
(264, 'views/images/galeriaservicio/galeria493.jpg', 3),
(265, 'views/images/galeriaservicio/galeria293.jpg', 5),
(266, 'views/images/galeriaservicio/galeria781.jpg', 3),
(267, 'views/images/galeriaservicio/galeria641.jpg', 4),
(268, 'views/images/galeriaservicio/galeria241.jpg', 4),
(269, 'views/images/galeriaservicio/galeria616.jpg', 4),
(270, 'views/images/galeriaservicio/galeria849.jpg', 4),
(271, 'views/images/galeriaservicio/galeria394.jpg', 3),
(272, 'views/images/galeriaservicio/galeria946.jpg', 3),
(273, 'views/images/galeriaservicio/galeria380.jpg', 4),
(274, 'views/images/galeriaservicio/galeria313.jpg', 4),
(275, 'views/images/galeriaservicio/galeria828.jpg', 3),
(276, 'views/images/galeriaservicio/galeria508.jpg', 4),
(277, 'views/images/galeriaservicio/galeria673.jpg', 4),
(278, 'views/images/galeriaservicio/galeria566.jpg', 4),
(279, 'views/images/galeriaservicio/galeria679.jpg', 3),
(280, 'views/images/galeriaservicio/galeria538.jpg', 5),
(281, 'views/images/galeriaservicio/galeria295.jpg', 4),
(282, 'views/images/galeriaservicio/galeria496.jpg', 4),
(283, 'views/images/galeriaservicio/galeria840.jpg', 4),
(284, 'views/images/galeriaservicio/galeria157.jpg', 4),
(285, 'views/images/galeriaservicio/galeria902.jpg', 4),
(286, 'views/images/galeriaservicio/galeria889.jpg', 4),
(287, 'views/images/galeriaservicio/galeria790.jpg', 4),
(288, 'views/images/galeriaservicio/galeria697.jpg', 3),
(289, 'views/images/galeriaservicio/galeria586.jpg', 3),
(290, 'views/images/galeriaservicio/galeria231.jpg', 4),
(291, 'views/images/galeriaservicio/galeria277.jpg', 4),
(292, 'views/images/galeriaservicio/galeria541.jpg', 4),
(293, 'views/images/galeriaservicio/galeria656.jpg', 3),
(294, 'views/images/galeriaservicio/galeria385.jpg', 4),
(295, 'views/images/galeriaservicio/galeria931.jpg', 3),
(296, 'views/images/galeriaservicio/galeria732.jpg', 3),
(297, 'views/images/galeriaservicio/galeria237.jpg', 4),
(298, 'views/images/galeriaservicio/galeria642.jpg', 4),
(299, 'views/images/galeriaservicio/galeria583.jpg', 12),
(300, 'views/images/galeriaservicio/galeria501.jpg', 12),
(301, 'views/images/galeriaservicio/galeria139.jpg', 3),
(302, 'views/images/galeriaservicio/galeria911.jpg', 4),
(303, 'views/images/galeriaservicio/galeria852.jpg', 4),
(304, 'views/images/galeriaservicio/galeria808.jpg', 4),
(305, 'views/images/galeriaservicio/galeria753.jpg', 12),
(306, 'views/images/galeriaservicio/galeria465.jpg', 12),
(307, 'views/images/galeriaservicio/galeria715.jpg', 4),
(308, 'views/images/galeriaservicio/galeria743.jpg', 4),
(309, 'views/images/galeriaservicio/galeria298.jpg', 4),
(310, 'views/images/galeriaservicio/galeria670.jpg', 4),
(311, 'views/images/galeriaservicio/galeria944.jpg', 4),
(312, 'views/images/galeriaservicio/galeria121.jpg', 3),
(313, 'views/images/galeriaservicio/galeria659.jpg', 12),
(314, 'views/images/galeriaservicio/galeria124.jpg', 12),
(315, 'views/images/galeriaservicio/galeria608.jpg', 12),
(316, 'views/images/galeriaservicio/galeria390.jpg', 12),
(317, 'views/images/galeriaservicio/galeria607.jpg', 12),
(318, 'views/images/galeriaservicio/galeria124.jpg', 4),
(319, 'views/images/galeriaservicio/galeria365.jpg', 4),
(320, 'views/images/galeriaservicio/galeria314.jpg', 4),
(321, 'views/images/galeriaservicio/galeria953.jpg', 4),
(322, 'views/images/galeriaservicio/galeria462.jpg', 4),
(323, 'views/images/galeriaservicio/galeria845.jpg', 4),
(324, 'views/images/galeriaservicio/galeria934.jpg', 4),
(325, 'views/images/galeriaservicio/galeria812.jpg', 4),
(326, 'views/images/galeriaservicio/galeria483.jpg', 4),
(327, 'views/images/galeriaservicio/galeria630.jpg', 4),
(328, 'views/images/galeriaservicio/galeria834.jpg', 6),
(329, 'views/images/galeriaservicio/galeria684.jpg', 6),
(330, 'views/images/galeriaservicio/galeria186.jpg', 6),
(331, 'views/images/galeriaservicio/galeria643.jpg', 3),
(332, 'views/images/galeriaservicio/galeria753.jpg', 3),
(333, 'views/images/galeriaservicio/galeria876.jpg', 4),
(334, 'views/images/galeriaservicio/galeria367.jpg', 4),
(335, 'views/images/galeriaservicio/galeria325.jpg', 4),
(336, 'views/images/galeriaservicio/galeria251.jpg', 3),
(337, 'views/images/galeriaservicio/galeria161.jpg', 3),
(338, 'views/images/galeriaservicio/galeria968.jpg', 3),
(339, 'views/images/galeriaservicio/galeria455.jpg', 3),
(340, 'views/images/galeriaservicio/galeria274.jpg', 4),
(341, 'views/images/galeriaservicio/galeria822.jpg', 4),
(342, 'views/images/galeriaservicio/galeria781.jpg', 4),
(343, 'views/images/galeriaservicio/galeria250.jpg', 4),
(344, 'views/images/galeriaservicio/galeria411.jpg', 4),
(345, 'views/images/galeriaservicio/galeria524.jpg', 4),
(346, 'views/images/galeriaservicio/galeria991.jpg', 4),
(347, 'views/images/galeriaservicio/galeria576.jpg', 4),
(348, 'views/images/galeriaservicio/galeria365.jpg', 4),
(349, 'views/images/galeriaservicio/galeria172.jpg', 4),
(350, 'views/images/galeriaservicio/galeria147.jpg', 4),
(351, 'views/images/galeriaservicio/galeria889.jpg', 4),
(352, 'views/images/galeriaservicio/galeria179.jpg', 4),
(353, 'views/images/galeriaservicio/galeria608.jpg', 4),
(354, 'views/images/galeriaservicio/galeria308.jpg', 12),
(355, 'views/images/galeriaservicio/galeria982.jpg', 12),
(356, 'views/images/galeriaservicio/galeria372.jpg', 12),
(357, 'views/images/galeriaservicio/galeria587.jpg', 12),
(358, 'views/images/galeriaservicio/galeria704.jpg', 12),
(359, 'views/images/galeriaservicio/galeria724.jpg', 12),
(360, 'views/images/galeriaservicio/galeria645.jpg', 12),
(361, 'views/images/galeriaservicio/galeria682.jpg', 12),
(362, 'views/images/galeriaservicio/galeria194.jpg', 12),
(363, 'views/images/galeriaservicio/galeria557.jpg', 12),
(364, 'views/images/galeriaservicio/galeria648.jpg', 12),
(365, 'views/images/galeriaservicio/galeria698.jpg', 12),
(366, 'views/images/galeriaservicio/galeria268.jpg', 12),
(367, 'views/images/galeriaservicio/galeria885.jpg', 12),
(368, 'views/images/galeriaservicio/galeria770.jpg', 12),
(369, 'views/images/galeriaservicio/galeria557.jpg', 12),
(370, 'views/images/galeriaservicio/galeria631.jpg', 12),
(371, 'views/images/galeriaservicio/galeria889.jpg', 3),
(372, 'views/images/galeriaservicio/galeria512.jpg', 4),
(373, 'views/images/galeriaservicio/galeria340.jpg', 4),
(374, 'views/images/galeriaservicio/galeria335.jpg', 4),
(375, 'views/images/galeriaservicio/galeria498.jpg', 4),
(376, 'views/images/galeriaservicio/galeria788.jpg', 3),
(377, 'views/images/galeriaservicio/galeria911.jpg', 3),
(378, 'views/images/galeriaservicio/galeria307.jpg', 4),
(379, 'views/images/galeriaservicio/galeria579.jpg', 4),
(380, 'views/images/galeriaservicio/galeria204.jpg', 4),
(381, 'views/images/galeriaservicio/galeria839.jpg', 3),
(382, 'views/images/galeriaservicio/galeria374.jpg', 3),
(383, 'views/images/galeriaservicio/galeria342.jpg', 4),
(384, 'views/images/galeriaservicio/galeria433.jpg', 4),
(385, 'views/images/galeriaservicio/galeria909.jpg', 3),
(386, 'views/images/galeriaservicio/galeria801.jpg', 4),
(387, 'views/images/galeriaservicio/galeria925.jpg', 3),
(388, 'views/images/galeriaservicio/galeria936.jpg', 4),
(389, 'views/images/galeriaservicio/galeria892.jpg', 3),
(390, 'views/images/galeriaservicio/galeria853.jpg', 4),
(391, 'views/images/galeriaservicio/galeria395.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `msg_name` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `msg_email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `msg_message` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `msg_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`msg_id`, `msg_name`, `msg_email`, `msg_message`, `msg_date`, `msg_review`) VALUES
(14, 'Donald Cornett', 'Donaldcor@verizon.net', 'Estamate for vented aluminum soffits, and aluminum fascia to cover house trim as well as house painting estimate.\r\n', '2018-12-18 16:23:44', 1),
(15, 'Anna S', 'annagsexton@gmail.com', 'I was just wondering what you would charge to paint three bedrooms, one bathroom, a living room and hallway. Its about nine hundred square feet. \r\nPlease email me back at your earliest convenience, thank you. ', '2018-12-18 16:23:44', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `serv_id` int(11) NOT NULL,
  `serv_title` text NOT NULL,
  `serv_introduction` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `serv_route` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `serv_content` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `serv_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`serv_id`, `serv_title`, `serv_introduction`, `serv_route`, `serv_content`, `serv_order`) VALUES
(3, 'Interiors', 'Our interior house painting service will freshen up your space and give  ...', 'views/images/servicios/servicio293.jpg', 'Our interior house painting service will freshen up your space and give you a unique new look. Revitalize your kitchen, beautify your living space, and add elegance to the bedrooms with a great looking coat of paint.\r\n\r\nFC Daniel\'s Painting LLC, specialist in interiors design, interior design and residential and commercial decoration helps you to conceptualize and define your home and business. Cutting-edge technology and design culture come together to offer you the best solutions according to your needs.', 0),
(4, 'exteriors', 'Protect your home from the havoc of Mother Nature with our ...', 'views/images/servicios/servicio527.jpg', 'Protect your home from the havoc of Mother Nature with our exterior house painting service. Whether you have vinyl, aluminium, stucco or brick siding, our friendly team of expert house painters will do a great job. Bring back your home\'s curb appeal. \r\n\r\nWe paint and remodel exteriors. We offer professional gardening, maintenance and construction and all types of finishes for your home.\r\n\r\nWe are at your services, budgets without commitments.\r\n\r\n', 0),
(5, 'garage floors', 'The perfect garage is one that adapts to our needs, either because ...', 'views/images/servicios/servicio770.jpg', 'The perfect garage is one that adapts to our needs, either because we want a place to park our car, because we need space to store things from home, or an extra room set as a leisure area; A garage is the right place to carry out almost any project.\r\n\r\nIf you do not have this space and you are interested in building one in your home or remodeling the floors and tablets there are professionals that can help you design and build the perfect parking, the best way to start is looking for all the information you can about floors and materials you want, that\'s why; FC DANIEL\'S PAINTING LLC can facilitate the search, on our page you can find design ideas and expert professionals in the same place.', 0),
(6, 'deck and fences', 'We also do fence painting if you\'re looking to improve your curb appeal!...', 'views/images/servicios/servicio794.jpg', 'Decks: \r\nAll of our Decks are custom designed. We have over 10 years of experience in designing and building residential and commercial decks.\r\n\r\nPressure Treated Wood decks and Composite/PVC decks are custom designed around specific customer requirements, needs or an inspirational dream. Each deck our experienced designers create is hand drawn detailing the unique qualities that make the end product as functional as it is beautiful.\r\nFences.\r\n\r\nWood Residential/Commercial: \r\nThe most popular fencing material is pressure treated pine. An alternative to pine is Cedar. Cedar fencing is attractive and functional, because of its natural deterrents to insect infestation and resilience in the worst of climates. We offer a large variety of cedar and pine fencing styles and numerous board sizes.\r\n\r\nVinyl Residential/Commercial:\r\nMaintenance free, attractive and long lasting. Available in a variety of styles and colors is an excellent investment and addition to your home. All our vinyl fencing comes complete with a manufacturer\'s lifetime warranty.\r\n\r\nVinyl Pasture Rail:\r\nFor the clean, crisp look of white pasture rail fencing without the maintenance, vinyl is definitely the correct choice. Handsome and practical, vinyl rail fencing is suitable for both livestock and landscaping. All our vinyl rail fencing comes with a manufacturer\'s lifetime warranty.\r\n\r\nChain Link Residential/Commercial: \r\nVersatile, economical and available in a variety of styles and sizes. All structural components are galvanized for long life. The galvanizing process protects the steel providing a fence that is corrosion resistant, maintenance free and long lasting. Vinyl coated, Chain Link Fencing is also available in several colors adding beauty and style.\r\n\r\nOrnamental Aluminum Residential/Commercial:\r\nAluminum fencing offers a combination of durability, strength and clean appearance. Aluminum fencing will remain structurally sound for a lifetime. The finish will not crack, chip or peal. We issue a manufacture\'s lifetime warranty with every fence system sold.', 0),
(7, 'eco friendly painting', 'Brush Up Your Interior With Nontoxic Paints...', 'views/images/servicios/servicio262.jpg', 'To transform a space into a sanctuary requires healthy and thoughtful choices. The products we choose to bring into our homes make an impact on our quality of life whether we know it or not. It\'s true for the food we eat, the clothes we wear and even the air we breathe. That last one might seem surprising but it\'s true. Indoors, the air that surrounds us nearly 80% of the time isn\'t always safe for people or the planet. Toxic interior paints are the culprits behind many common ailments that can affect us and our loved ones including those furry and four-legged family members. \r\n\r\nWhat makes a paint eco-friendly?\r\nDescribing a paint, finish or a lacquer as eco-friendly means that it doesn\'t contain airborne chemicals or gases that will wreak havoc on your health. These low-level toxic emissions are called Volatile Organic Compounds (VOCs) that leach out into the air and cause symptoms like headaches, dizziness, visual and respiratory impairment\'s even memory loss.The EPA notes that the effects of VOCs are about 2-5 times higher indoors than outdoors, and if you\'re stripping paint during a home project studies show that it can skyrocket up to 1,000 times higher.\r\n\r\nThe good news is that you can be proactive and clean up the air in your home with more than just a few potted plants. Ready for a fresh start and a fresh coat of paint? Here are the best eco-friendly options for your space.\r\n', 0),
(8, 'pressure washing', 'Power washing is key to removing years of dirt and grime ...', 'views/images/servicios/servicio853.jpg', 'Power washing is key to removing years of dirt and grime from your property. We can wash your siding, your deck, and your walkway to give your home a simple, clean look. As a bonus, pressure washing ensures that if we do any exterior house painting, the paint is absorbed properly.\r\n\r\nOur  technicians use commercial grade pressure washers with high PSI attached to surface cleaners to provide the most efficient and effective surface cleaning. Our surface cleaning units are exceptional at removing mold, mildew, dirt and discoloration.\r\nWhy do you need pressure washing services?\r\n- Regular maintenance and power washing of your walkways and driveways can prevent decay and add years to their lifespan.\r\n- Driveways and walkways that are covered in mold, mildew or other growth can become very slippery and hazardous when wet. Keeping them clean also means keeping the people who walk on them safe.\r\n- If you have a more delicate surface to clean such as stone pavers or aggregate, doing this job yourself can cause damage. Professionals can evaluate the surface and use the appropriate cleaning method as to not hurt any delicate surface.\r\n- If your wood or vinyl deck is looking aged a good power washing can bring its vibrancy and shine back.\r\n- Driveways or walkways that have mold or mildew growing on them are not only hazardous to your health outside, but will track inside your home if left unclean.\r\n\r\nA clean and fresh looking driveway or safe and vibrant walkways around your home will also add curb value if you are in the market to sell. If you are not in the market to sell, then it just adds peace of mind and makes you feel better about your home.', 0),
(9, 'carpentry services', 'Our carpenters are great at processing wood and furniture  ...', 'views/images/servicios/servicio657.jpg', 'Our carpenters are great at processing wood and furniture boards - they have been creating furniture for years mostly for individual projects. \r\nWe take care of::\r\n- Mounting kitchen, bathroom furniture and wardrobe closets \r\n- Mounting countertops and cutting out holes \r\n- Setting in windows and doors, both inside and outside \r\n- Laying floor panels, wooden parquet and floor planks.\r\n\r\nAt FC DANIEL\'S PAINTING LLC, Every franchisee is a highly qualified and experienced carpenter that can handle all your required repair, maintenance and installation projects. Our Carpentry Services are second to none! Take advantage of our wide range of services today. Our team members are available throughout Australia. Just get in touch and we will introduce you to your local handyman.\r\n\r\nAt FC DANIEL\'S PAINTING LLC, our services are fully mobile. We will come to your home or workplace at a time that is convenient for you. We are committed to quality work and friendly services. You can be sure that any carpentry maintenance or installation projects that we complete will be secure and cost effective.\r\n\r\nHave a project in mind? Get a free quote today. Our building maintenance team are ready to help.', 0),
(10, 'landscaping service', 'Residential Landscaping and Lawn Care...', 'views/images/servicios/servicio440.jpg', 'Residential Landscaping & Lawn Care\r\n\r\nGrounds Care Services for Homeowners\r\n\r\nWe provide services for both residential and commercial properties. The FC DANIEL\'S PAINTING LLC serve clients across the Roanoke Virginia. Our team is proud to continue to earn our reputation for reliable and consistent work, excellent service, and uniformed professionalism.\r\n\r\nProviding service with a smile is important to us. We show up to your home in full uniform and marked trucks, and we are committed to being on time and getting the job done right. We clean up after ourselves so your property always looks better than we found it.\r\n\r\nOur residential landscaping services include the following:\r\n\r\n- Lawn & bed maintenance\r\n- Landscape / hardscape\r\n- Outdoor lighting\r\n- Snow & ice management\r\n- Irrigation\r\n- Pest, weed & fertilization.\r\n\r\nWe Treat Your Landscaping As If It Were Our Own: \r\n\r\nOur team of lawn care experts at FC DANIEL\'S PAINTING LLC is prepared to help you keep your home looking beautiful all year long.  Our customers trust us to put their interests first and to provide top-of-the-line service designed to keep their landscaping green, healthy, and pest and weed free through the seasons.\r\n\r\nProfessional, Honest, Trustworthy:\r\nOur work is a source of pride for us. You can have confidence that we\'ll do our best to make you happy and to keep your home looking beautiful year-round.', 0),
(12, 'Commercial ', 'We’ll get the job done. Fast. (Faster than you can imagine!) Say good...', 'views/images/servicios/servicio533.jpg', 'We’ll get the job done. Fast. (Faster than you can imagine!) Say goodbye to painters that take weeks to finish the job, cause property damage, provide poor workmanship, or disappear in the middle of the job. We’ll be there when you need us, and we’ll always make sure you’re happy with the results. We have tons of experience in providing interior and exterior painting services to all types of businesses, including:\r\n\r\nOffices,\r\nWarehouses,\r\nGyms and fitness centers,\r\nProperty management companies, and more.\r\n\r\nWe’ll always strive to give you the quality you expect in a timeline that’s unexpected. You won’t believe how quick and easy it is to give your office or workspace a fresh new look with FC DANIEL\'S PAINTING  LLC.\r\n\r\n How do we do it? It\'s easy—our BIG crews! We’ll always make sure we send big crews of painters to get the job done fast, without compromising on quality.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_route` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `slide_title` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `slide_description` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `slide_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_route`, `slide_title`, `slide_description`, `slide_order`) VALUES
(4, '../../views/images/slide/slide916.jpg', '', '', 10),
(5, '../../views/images/slide/slide629.jpg', '', '', 1),
(6, '../../views/images/slide/slide203.jpg', '', '', 12),
(7, '../../views/images/slide/slide701.jpg', '', '', 11),
(11, '../../views/images/slide/slide448.jpg', '', '', 7),
(15, '../../views/images/slide/slide546.jpg', '', '', 9),
(16, '../../views/images/slide/slide971.jpg', '', '', 6),
(17, '../../views/images/slide/slide486.jpg', '', '', 3),
(21, '../../views/images/slide/slide974.jpg', '', '', 8),
(23, '../../views/images/slide/slide476.jpg', '', '', 2),
(24, '../../views/images/slide/slide861.jpg', '', '', 4),
(27, '../../views/images/slide/slide683.jpg', '', '', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriber`
--

CREATE TABLE `subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_name` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `subs_email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `subs_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subscriber`
--

INSERT INTO `subscriber` (`subs_id`, `subs_name`, `subs_email`, `subs_review`) VALUES
(10, 'Donald Cornett', 'Donaldcor@verizon.net', 0),
(11, 'Anna S', 'annagsexton@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_user` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_password` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_email` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_photo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_try` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_user`, `user_password`, `user_email`, `user_photo`, `user_try`) VALUES
(1, 'Andrés Ariza', 'admin', '123456', 'admin@hotmail.com', 'views/images/photo.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `vid_id` int(11) NOT NULL,
  `vid_route` text NOT NULL,
  `vid_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`vid_id`, `vid_route`, `vid_order`) VALUES
(7, '../../views/videos/video263.mp4', 0),
(8, '../../views/videos/video703.mp4', 0),
(9, '../../views/videos/video514.mp4', 0),
(10, '../../views/videos/video989.mp4', 0),
(11, '../../views/videos/video593.mp4', 0),
(12, '../../views/videos/video636.mp4', 0),
(13, '../../views/videos/video471.mp4', 0),
(14, '../../views/videos/video789.mp4', 0),
(15, '../../views/videos/video492.mp4', 0),
(16, '../../views/videos/video432.mp4', 0),
(17, '../../views/videos/video118.mp4', 0),
(18, '../../views/videos/video209.mp4', 0),
(19, '../../views/videos/video575.mp4', 0),
(20, '../../views/videos/video703.mp4', 0),
(21, '../../views/videos/video557.mp4', 0),
(22, '../../views/videos/video981.mp4', 0),
(23, '../../views/videos/video454.mp4', 0),
(24, '../../views/videos/video899.mp4', 0),
(25, '../../views/videos/video869.mp4', 0),
(26, '../../views/videos/video183.mp4', 0),
(27, '../../views/videos/video960.mp4', 0),
(28, '../../views/videos/video442.mp4', 0),
(29, '../../views/videos/video355.mp4', 0),
(30, '../../views/videos/video763.mp4', 0),
(31, '../../views/videos/video649.mp4', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galle_id`),
  ADD UNIQUE KEY `galle_id` (`galle_id`),
  ADD KEY `IX_Relationship1` (`serv_id`);

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indices de la tabla `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`serv_id`) REFERENCES `service` (`serv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
