-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2022 г., 21:39
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
-- База данных: `leon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
                            `Id` int(11) NOT NULL COMMENT 'Индетификатор записи',
                            `Created` date NOT NULL COMMENT 'Дата публикации заметки',
                            `Author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Автор комментария',
                            `Comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Содержание комментария',
                            `Art_Id` int(11) NOT NULL COMMENT 'Индетификатор'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`Id`, `Created`, `Author`, `Comment`, `Art_Id`) VALUES
                                                                            (1, '2022-02-06', 'Vova', 'Text', 6),
                                                                            (2, '2022-04-04', 'Gosha', 'Text', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `kor`
--

CREATE TABLE `kor` (
                       `login` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
                       `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `date_of_birth` date NOT NULL,
                       `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `country` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `notes` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kor`
--

INSERT INTO `kor` (`login`, `password`, `name`, `date_of_birth`, `sex`, `country`, `email`, `notes`) VALUES
                                                                                                         ('leon', 'fsd', 'fds', '2001-02-12', 'fds', 'fds', 'fds', 'fds'),
                                                                                                         ('111', '1112', '222', '2000-02-12', '42', '42', '42', '42');

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
                         `Id` int(11) NOT NULL COMMENT 'Индетификатор записи',
                         `Created` date NOT NULL COMMENT 'Дата создания',
                         `Title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Заглавие',
                         `Article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Содержание'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `privileges`
--

CREATE TABLE `privileges` (
                              `Id` int(11) NOT NULL COMMENT 'Индетификатор записи',
                              `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя пользователя',
                              `Password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль пользователя',
                              `Rights` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Права доступа пользователя к страницам сайта'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`Id`),
  ADD KEY `Art_Id` (`Art_Id`) USING BTREE;

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
    ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `privileges`
--
ALTER TABLE `privileges`
    ADD PRIMARY KEY (`Id`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
    ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`Art_Id`) REFERENCES `notes` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
