-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2022 г., 13:20
-- Версия сервера: 8.0.29
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tokens`
--

CREATE TABLE `tokens` (
  `user_login` varchar(20) NOT NULL,
  `token` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `actually` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tokens`
--

INSERT INTO `tokens` (`user_login`, `token`, `actually`) VALUES
('Maxim', 'mRHcHZzZ4XLw1M2wA5OHIbBgpC7DUb', '2022-06-14 16:32:01'),
('adsfasd', 'lXjFiAxlzhMgpJ8RpIJvUB2tE1qZs', '2022-06-15 14:08:37'),
('sadasd', 'YOT04FaKRDcjyokhn84OPtwX92qpI', '2022-06-15 14:07:28'),
('Dorokhov', 'HGQF83vS0sQWs4mEGXGjTkAax5yHFI', '2022-06-15 10:44:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `name`) VALUES
('adsfasd', 'de92e54c8a52742be470bdf21f00420828888542', 'adsfasd'),
('Dorokhov', '22742015325a2ab57b7c4d1cd7c9c4a1afc7daec', 'Dorokhov'),
('Maxim', '07b96f9f74a63e8fee986e99643fcd9a24db3c49', 'Maxim'),
('sadasd', 'd5644e8105ad77c3c3324ba693e83d8fffd54950', 'sadasd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD KEY `user_login` (`user_login`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_login`) REFERENCES `users` (`login`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
