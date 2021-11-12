-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 13 2021 г., 19:37
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yiidars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `name_oz` varchar(100) DEFAULT NULL,
  `name_uz` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `name_oz`, `name_uz`, `name_ru`, `name_en`) VALUES
(2, 'Андижон', 'Andijon', 'Андижон', 'Andijon'),
(3, 'Наманган', 'Namangan', 'Наманган', 'Namangan'),
(4, 'Хоразм', 'Xorazm', 'Хоразм', 'Xorazm'),
(5, 'Тошкент вил.', 'Toshkent vil.', 'Тошкент вил.', 'Toshkent vil.'),
(6, 'Тошкент', 'Toshkent', 'Тошкент', 'Toshkent'),
(7, 'Бухоро', 'Buxoro', 'Бухоро', 'Buxoro'),
(8, 'Самарканд', 'Samarkand', 'Самарканд', 'Samarkand'),
(9, 'Жиззах', 'Jizzax', 'Жиззах', 'Jizzax'),
(10, 'Навоий', 'Navoiy', 'Навоий', 'Navoiy'),
(11, 'Коракалпогистон', 'Korakalpogiston', 'Коракалпогистон', 'Korakalpogiston'),
(12, 'Сирдарё', 'Sirdaryo', 'Сирдарё', 'Sirdaryo'),
(13, 'Сурхондарё', 'Surxondaryo', 'Сурхондарё', 'Surxondaryo'),
(14, 'Кашкадарё', 'Kashkadaryo', 'Кашкадарё', 'Kashkadaryo'),
(15, 'Фаргона', 'Fargona', 'Фаргона', 'Fargona');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
