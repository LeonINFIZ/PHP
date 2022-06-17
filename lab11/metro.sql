-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2022 г., 19:53
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `metro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `metro_lines`
--

CREATE TABLE `metro_lines` (
  `line_id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `stations`
--

CREATE TABLE `stations` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_id` int(10) NOT NULL,
  `next_station` int(10) NOT NULL,
  `previous_station` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `transitions`
--

CREATE TABLE `transitions` (
  `first` int(10) NOT NULL,
  `second` int(10) NOT NULL,
  `third` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `metro_lines`
--
ALTER TABLE `metro_lines`
  ADD PRIMARY KEY (`line_id`);

--
-- Индексы таблицы `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `line_id` (`line_id`);

--
-- Индексы таблицы `transitions`
--
ALTER TABLE `transitions`
  ADD KEY `first` (`first`,`second`,`third`),
  ADD KEY `second` (`second`),
  ADD KEY `third` (`third`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `stations`
--
ALTER TABLE `stations`
  ADD CONSTRAINT `stations_ibfk_1` FOREIGN KEY (`line_id`) REFERENCES `metro_lines` (`line_id`);

--
-- Ограничения внешнего ключа таблицы `transitions`
--
ALTER TABLE `transitions`
  ADD CONSTRAINT `transitions_ibfk_1` FOREIGN KEY (`first`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `transitions_ibfk_2` FOREIGN KEY (`second`) REFERENCES `stations` (`id`),
  ADD CONSTRAINT `transitions_ibfk_3` FOREIGN KEY (`third`) REFERENCES `stations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
