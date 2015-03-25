-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 25 2015 г., 13:56
-- Версия сервера: 5.5.41-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `dateforplace` datetime NOT NULL,
  `nameofpicture` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `sizepix` int(11) DEFAULT NULL,
  `pathofimage` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  UNIQUE KEY `nameofpicture` (`nameofpicture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `picture`
--

INSERT INTO `picture` (`dateforplace`, `nameofpicture`, `size`, `sizepix`, `pathofimage`, `comment`) VALUES
('0000-00-00 00:00:00', NULL, 0, NULL, '', ''),
('0000-00-00 00:00:00', NULL, 0, NULL, '', ''),
('0000-00-00 00:00:00', NULL, 0, NULL, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
