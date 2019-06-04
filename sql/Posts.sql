-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2019 г., 12:38
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Prog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Posts`
--

CREATE TABLE `Posts` (
  `id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Posts`
--

INSERT INTO `Posts` (`id`, `text`, `user_id`, `post_img`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 1, '1.png'),
(2, 'Lorem ipquis nost labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrutrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 2, 'tree.png'),
(5, 'Это тупо для теста. Вообще очень много инфы. Слишком много, чтобы сказать много', 1, 'tree.png'),
(6, 'ENGLISH', 0, 'tree.png'),
(7, 'ENGLISH', 0, 'tree.png'),
(8, 'ssdada', 0, 'avatar.png'),
(9, 'Это тупо для теста. Вообще очень много инфы. Слишком много, чтобы сказать много', 2, '2.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Posts`
--
ALTER TABLE `Posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
