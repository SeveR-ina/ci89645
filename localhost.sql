-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 13 2015 г., 15:30
-- Версия сервера: 5.5.36-34.0-632.precise
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ci89645_777`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gb`
--

CREATE TABLE IF NOT EXISTS `gb` (
`id` int(10) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `name` text,
  `email` text,
  `message` text
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gb`
--

INSERT INTO `gb` (`id`, `date`, `name`, `email`, `message`) VALUES
(1, '2015-09-13 15:15:03', 'g', 'g', ' g');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gb`
--
ALTER TABLE `gb`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gb`
--
ALTER TABLE `gb`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
