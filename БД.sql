-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2022 г., 19:18
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
-- База данных: `bd_osnovnoy_raboti_fakt`
--
CREATE DATABASE IF NOT EXISTS `bd_osnovnoy_raboti_fakt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_osnovnoy_raboti_fakt`;

-- --------------------------------------------------------

--
-- Структура таблицы `zaregestrirovannie_polzovately`
--

CREATE TABLE `zaregestrirovannie_polzovately` (
  `id_polzovatelya` int(11) NOT NULL,
  `Login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zaregestrirovannie_polzovately`
--

INSERT INTO `zaregestrirovannie_polzovately` (`id_polzovatelya`, `Login`, `pass`) VALUES
(6, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'test', 'ad0234829205b9033196ba818f7a872b'),
(8, 'Люцифер', '8b37e0c9a0b0ba97b1b3c031867fe777');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `zaregestrirovannie_polzovately`
--
ALTER TABLE `zaregestrirovannie_polzovately`
  ADD PRIMARY KEY (`id_polzovatelya`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `zaregestrirovannie_polzovately`
--
ALTER TABLE `zaregestrirovannie_polzovately`
  MODIFY `id_polzovatelya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- База данных: `city`
--
CREATE DATABASE IF NOT EXISTS `city` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `city`;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `id_persen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `city`, `count`, `id_persen`) VALUES
(1, 'Magniitogorask', 10, 1),
(2, 'moskow', 20, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `ID_person` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`ID_person`, `Name`, `Age`) VALUES
(1, 'Tom', 10),
(2, 'Bob', 13),
(3, 'Smith', 22),
(4, 'liza', 23),
(5, 'Kate', 11),
(7, 'Vasya', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persen` (`id_persen`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`ID_person`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `ID_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_persen`) REFERENCES `person` (`ID_person`);
--
-- База данных: `hobbies`
--
CREATE DATABASE IF NOT EXISTS `hobbies` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `hobbies`;

-- --------------------------------------------------------

--
-- Структура таблицы `hobbies`
--

CREATE TABLE `hobbies` (
  `Id_Hobbies` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hobbies`
--

INSERT INTO `hobbies` (`Id_Hobbies`, `Name`, `Description`) VALUES
(1, 'beg', 'bistraya hotba'),
(2, 'plavanie', 'niryanie v vodu'),
(3, 'borba', 'draka'),
(4, 'prizhki', 'vverh prig'),
(5, 'sport', 'raznoe');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `Id_person` int(11) NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`Id_person`, `Name`, `Surname`, `Age`) VALUES
(1, 'Andrey', 'gavrilov', 25),
(2, 'vasya', 'petrov', 36),
(3, 'petia', 'smirmov', 56),
(4, 'kolya', 'petrosyan', 56),
(5, 'natalya', 'kurnosova', 48);

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies`
--

CREATE TABLE `people_hobbies` (
  `Id_record` int(11) NOT NULL,
  `Id_people` int(11) DEFAULT NULL,
  `id_hobbies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people_hobbies`
--

INSERT INTO `people_hobbies` (`Id_record`, `Id_people`, `id_hobbies`) VALUES
(1, 4, 1),
(2, 1, 2),
(3, 4, 3),
(4, 4, 4),
(5, 3, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`Id_Hobbies`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`Id_person`);

--
-- Индексы таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD PRIMARY KEY (`id_hobbies`),
  ADD KEY `Id_people` (`Id_people`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `Id_Hobbies` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `Id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD CONSTRAINT `people_hobbies_ibfk_1` FOREIGN KEY (`Id_people`) REFERENCES `people` (`Id_person`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
