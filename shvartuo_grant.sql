-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 07 2024 г., 23:10
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shvartuo_grant`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guest`
--
-- Создание: Ноя 28 2023 г., 23:40
-- Последнее обновление: Дек 01 2023 г., 08:11
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE `guest` (
  `ID` int(3) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `guest`
--

INSERT INTO `guest` (`ID`, `name`, `text`) VALUES
(7, 'Аноним', 'Заказал BMW а пришол жигули. Эво как'),
(8, '', ''),
(10, 'Танчик', 'Все прошло замечательно, салону и персоналу 5 звёзд!!⭐ ⭐ ⭐ ⭐ ⭐ '),
(13, 'Сергей', 'Лучший салон , все сделали хорошо '),
(14, 'точно_не_светук', 'купил жигули,'),
(15, 'прям_точно_светук', 'купил жигули'),
(18, 'dsd', 'dsdsdsdd'),
(19, 'Наталья', 'Владислав, у Вас на сайте не работает форма регистрации. Пожаааааааалуйста, справьте это, а то я как пользователь сайте не понимаю, нафига эта форма находится на сайте');

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--
-- Создание: Дек 01 2023 г., 09:29
-- Последнее обновление: Дек 01 2023 г., 09:31
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE `reg` (
  `ID` int(3) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `tel` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`ID`, `name`, `lastname`, `tel`, `email`) VALUES
(1, 'Сергей', 'Мухин', '79109109109', 'qq@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `guest`
--
ALTER TABLE `guest`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
