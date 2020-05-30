-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3301
-- Время создания: Май 30 2020 г., 15:58
-- Версия сервера: 8.0.15
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(128) NOT NULL,
  `id_good` int(128) NOT NULL,
  `count` int(128) NOT NULL,
  `id_user` int(128) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `ID` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `pic_name` varchar(128) NOT NULL,
  `desc` text NOT NULL,
  `small_img` varchar(128) NOT NULL,
  `big_img` varchar(128) NOT NULL,
  `price` int(255) NOT NULL,
  `count` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`ID`, `name`, `pic_name`, `desc`, `small_img`, `big_img`, `price`, `count`) VALUES
(1, 'шерстяные носки', '001.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.', 'images\\small_img\\001.jpg', 'images\\big_img\\001.jpg', 1000, 10),
(2, 'Ажурные, вязаные носки', '002.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua.', 'images\\small_img\\002.jpg', 'images\\big_img\\002.jpg', 1200, 1),
(10, 'котик', 'kot.jpg', 'купи купи котика', 'images/small_img/kot.jpg', 'images/big_img/kot.jpg', 1000000000, 1),
(12, 'путёвка на море_2', 'more.jpg', 'куеуеуеуеуеуеуеуеууе', 'images/small_img/more.jpg', 'images/big_img/more.jpg', 50000, 1),
(13, 'нафелет', 'telephone.jpg', 'ывавыфпывфпваы', 'images/small_img/telephone.jpg', 'images/big_img/telephone.jpg', 1090, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(128) NOT NULL,
  `user_adres` varchar(256) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `goods` text NOT NULL,
  `price` int(255) NOT NULL,
  `flag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `name_user`, `user_adres`, `user_phone`, `comment`, `goods`, `price`, `flag`) VALUES
(22, 13, '22', 'пукпкина 13 -105', '334', 'ууууу', ' котик в количестве1шт., ', 1000000000, 1),
(23, 10, '1', 'vbvbvbv', 'eretet', 'ggg', ' котик в количестве2шт.,  нафелет в количестве3шт., ', 2000003270, 1),
(24, 15, 'Илья', 'Жукова 29-105', '89069538270', 'срочно', ' котик в количестве1шт., ', 1000000000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `login` varchar(128) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `pass`, `email`) VALUES
(10, '1', '1', '81dc9bdb52d04dc20036dbd8313ed055', 'ikzzz@ya.ru'),
(11, 'admin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@admin.ru'),
(12, '2', '2', '81dc9bdb52d04dc20036dbd8313ed055', 'fff@mail.ru'),
(13, '22', '22', '81dc9bdb52d04dc20036dbd8313ed055', '22@mail.ru'),
(15, 'Илья', '11', '81dc9bdb52d04dc20036dbd8313ed055', 'ikzzz@ya.ru'),
(22, 'пупсик', 'p', '81dc9bdb52d04dc20036dbd8313ed055', 'p@mail.ru'),
(25, '22', '122', '81dc9bdb52d04dc20036dbd8313ed055', 'mail@mail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
