-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 05 2019 г., 15:25
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
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`) VALUES
(1, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(2, 2, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(3, 1, 'unggkdqubc480dpg5ds0krk9t3uri8n7'),
(4, 3, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(5, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(6, 2, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(7, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(8, 1, 'si967rjm76fqf2sn19d4a5rj6j4kbi4v'),
(9, 3, 'kji2vlg327bqc374ojj4cai5ruv1g0qi'),
(10, 0, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(11, 1, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(12, 0, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(13, 1, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(14, 0, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(15, 3, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(16, 0, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(17, 2, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(18, 2, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(19, 2, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(20, 2, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(21, 2, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(22, 1, '43b78ef1c5f7a1811bd2562ce8f207ab'),
(23, 1, 'ba8c3a3603579f1d2c6d99066ca964d4'),
(24, 2, 'ba8c3a3603579f1d2c6d99066ca964d4'),
(25, 2, 'ba8c3a3603579f1d2c6d99066ca964d4'),
(66, 2, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(67, 2, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(68, 2, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(69, 1, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(70, 1, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(71, 3, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(72, 3, 'c3d4d48d70ee1045a805cd62d70f3e6b'),
(90, 1, 'e7e42de87c7e25cea44e9f15e8645c9e'),
(91, 1, 'e7e42de87c7e25cea44e9f15e8645c9e'),
(92, 1, '19e854b394f48b6ddf57000364b5efbe'),
(93, 1, '19e854b394f48b6ddf57000364b5efbe'),
(94, 2, '19e854b394f48b6ddf57000364b5efbe'),
(95, 2, '19e854b394f48b6ddf57000364b5efbe'),
(96, 3, '19e854b394f48b6ddf57000364b5efbe'),
(97, 3, '19e854b394f48b6ddf57000364b5efbe'),
(98, 1, '2f318cb5c5edcdf209b2396cea5e8954'),
(99, 2, '2f318cb5c5edcdf209b2396cea5e8954'),
(100, 3, '2f318cb5c5edcdf209b2396cea5e8954'),
(101, 1, 'd905c738607bb456fbd3659acb3d0667'),
(102, 2, 'd905c738607bb456fbd3659acb3d0667'),
(103, 2, 'd905c738607bb456fbd3659acb3d0667'),
(104, 2, '77b31ab365c1880109dd777bc380c1ca'),
(105, 3, '77b31ab365c1880109dd777bc380c1ca'),
(106, 1, '77b31ab365c1880109dd777bc380c1ca'),
(107, 1, '77b31ab365c1880109dd777bc380c1ca');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(15, 'Посетитель', 'Еще отзыв'),
(28, 'Aleksandra', '23567'),
(29, 'Aleksandra', 'е555'),
(30, 'Resume', '234248999'),
(31, '24234', '2342342342424');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `name`, `description`, `price`) VALUES
(1, 'metla.png', 'Метла', 'Отличная метла для любого хозяйственного дворника!', 22),
(2, 'matches.png', 'Спички', 'Спички особые, изготовленные из редких пород дерева.', 1),
(3, 'vedro-plastik.jpg', 'Ведро', 'Пластиковое ведро с крепчайшей ручкой для самых сильных хозяев.', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category`, `prev`, `text`) VALUES
(1, 2, 'В штабе Зеленского не признают референдум в Крыму', 'КИЕВ, 15 апр — РИА Новости. Пресс-служба кандидата в президенты Украины Владимира Зеленского заявила, что в его штабе не признают референдум о воссоединении Крыма с Россией.\r\n\"Так называемый \"референдум\" не может считаться актом, свидетельствующим о свободном волеизъявлении жителей Крыма\", — говорится в заявлении, которое имеется в распоряжении РИА Новости.'),
(2, 2, 'Путин подписал закон о запрете размещения хостелов в жилых домах', 'МОСКВА, 15 апр - РИА Новости. Владимир Путин подписал закон о запрете размещения хостелов в многоквартирных домах с первого октября 2019 года, соответствующий документ опубликован на официальном портале правовой информации.\r\nЗакон запрещает использовать жилые помещения в качестве гостиницы или другого средства временного размещения. Предусматривается, что оказывать гостиничные услуги можно лишь после перевода жилого помещения в нежилое и оснащения его оборудованием надлежащего качества:');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `login` varchar(64) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `address` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `session_id`, `login`, `tel`, `address`) VALUES
(1, 'c3d4d48d70ee1045a805cd62d70f3e6b', '24234', 'werwerwer', 'werwrwerwr'),
(2, '77b31ab365c1880109dd777bc380c1ca', 'sas', '+79096870832', 'qweqwe');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL,
  `tel` varchar(63) NOT NULL,
  `email` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`, `tel`, `email`) VALUES
(1, 'admin', '$2y$10$GAh95KWqFf1Fw4YyH/BCnuODYbJ1Mln78vDuOIwj7WQvChhR8QcX.', '6783721935d6cc670b6bb68.51256905', '', ''),
(3, 'sas', '$2y$10$ZbnZQFwYeRvGAMQYQOVRvuJgNAtxL9Q3NcSEwMFnbue2veuIcSJfi', '7212751445d70fdbd835ba5.09533111', '+79096870832', 'sas@gmail.com'),
(7, 'test', '$2y$10$KKCgMY82S1NWPgV9DLdh1.TvmNPhSV8UPVO76BA/1SlUEn.nSUDRy', '687176625d70fa3b667ae9.50687446', '123@345.ru', '+1234567895');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
