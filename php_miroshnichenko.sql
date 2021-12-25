-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 20 2021 г., 14:25
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_miroshnichenko`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `pub_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `pub_year`) VALUES
(1, 'War and Peace', '1867'),
(2, 'Dead souls', '1842'),
(3, 'Anna Karenina', '1873'),
(4, 'Fathers and Children', '1860'),
(5, 'Inspector', '1836');

-- --------------------------------------------------------

--
-- Структура таблицы `log_taking`
--

CREATE TABLE `log_taking` (
  `id` int NOT NULL,
  `reader_id` int NOT NULL,
  `book_id` int NOT NULL,
  `taking_at` datetime NOT NULL,
  `returned_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `log_taking`
--

INSERT INTO `log_taking` (`id`, `reader_id`, `book_id`, `taking_at`, `returned_at`) VALUES
(1, 1, 1, '2021-11-01 15:52:28', '2021-11-03 15:52:28'),
(2, 2, 1, '2021-11-04 15:52:28', '2021-11-07 15:52:28'),
(3, 3, 1, '2021-11-04 15:52:28', '2021-11-05 15:52:28'),
(4, 2, 5, '2021-11-07 15:52:28', '2021-11-07 17:52:28'),
(5, 4, 2, '2021-11-07 15:52:28', '2021-11-08 15:52:28'),
(6, 5, 3, '2021-11-07 15:52:28', '2021-11-09 15:52:28'),
(7, 1, 4, '2021-11-09 15:52:28', '2021-11-10 16:52:28'),
(8, 3, 2, '2021-11-10 15:52:28', '2021-11-11 15:52:28'),
(9, 2, 2, '2021-11-10 15:52:28', '2021-11-12 15:52:28'),
(10, 4, 3, '2021-11-10 15:52:28', '2021-11-12 15:52:28'),
(11, 5, 1, '2021-11-11 15:52:28', '2021-11-12 15:52:28'),
(12, 1, 1, '2021-11-11 15:52:28', '2021-11-11 18:52:28'),
(13, 5, 2, '2021-11-12 15:52:28', '2021-11-14 15:52:28'),
(14, 2, 4, '2021-11-12 15:52:28', '2021-11-13 15:52:28'),
(15, 3, 4, '2021-11-14 15:52:28', '2021-11-16 15:52:28'),
(16, 4, 5, '2021-11-15 15:52:28', '2021-11-17 15:52:28'),
(17, 1, 3, '2021-11-15 15:52:28', '2021-11-16 15:52:28'),
(18, 2, 3, '2021-11-16 15:52:28', '2021-11-19 15:52:28'),
(19, 4, 1, '2021-11-17 15:52:28', '2021-11-19 15:52:28'),
(20, 5, 2, '2021-11-18 15:52:28', '2021-11-20 15:52:28'),
(21, 3, 1, '2021-11-18 15:52:28', '2021-11-21 15:52:28'),
(22, 2, 4, '2021-11-21 15:52:28', NULL),
(23, 5, 3, '2021-11-23 15:52:28', NULL),
(24, 4, 5, '2021-11-26 15:52:28', '2021-11-27 15:52:28'),
(25, 1, 2, '2021-11-26 15:52:28', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `readers`
--

CREATE TABLE `readers` (
  `id` int NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `readers`
--

INSERT INTO `readers` (`id`, `last_name`, `first_name`) VALUES
(1, 'Ivanov', 'Ivan'),
(2, 'Petrov', 'Petr'),
(3, 'Andreev', 'Andrey'),
(4, 'Gennadiev', 'Genadiy'),
(5, 'Alexeev', 'Alexey');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_taking`
--
ALTER TABLE `log_taking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reader_id` (`reader_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Индексы таблицы `readers`
--
ALTER TABLE `readers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `log_taking`
--
ALTER TABLE `log_taking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `readers`
--
ALTER TABLE `readers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `log_taking`
--
ALTER TABLE `log_taking`
  ADD CONSTRAINT `log_taking_ibfk_1` FOREIGN KEY (`reader_id`) REFERENCES `readers` (`id`),
  ADD CONSTRAINT `log_taking_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
