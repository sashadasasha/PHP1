-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 23 2019 г., 13:49
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_root`
--

CREATE TABLE `gallery_root` (
  `id` int(11) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery_root`
--

INSERT INTO `gallery_root` (`id`, `image`, `views`) VALUES
(1, '01.jpg', 4),
(2, '02.jpg', 2),
(3, '03.jpg', 0),
(4, '04.jpg', 0),
(5, '05.jpg', 0),
(6, '06.jpg', 1),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 1),
(10, '10.jpg', 0),
(11, '11.jpg', 0),
(12, '12.jpg', 0),
(13, '13.jpg', 0),
(14, '14.jpg', 0),
(15, '15.jpg', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery_root`
--
ALTER TABLE `gallery_root`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery_root`
--
ALTER TABLE `gallery_root`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
