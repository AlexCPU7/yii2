-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2017 г., 18:46
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2_v2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `title`) VALUES
(1, 'Alex'),
(3, 'Den'),
(4, 'Joo');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `description`, `pic`) VALUES
(2, 'Life', 'description life life life life life life', 'uploads/2.jpg'),
(3, 'I''m coming', 'description coming coming coming coming', 'uploads/3.jpg'),
(4, 'Kill', 'description kill kill kill kill kill', 'uploads/4.jpg'),
(5, 'Big Boon', 'description boom boom boom boom boom', 'uploads/5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`id`, `title`) VALUES
(2, 'comedy'),
(3, 'horror'),
(4, 'drama');

-- --------------------------------------------------------

--
-- Структура таблицы `id_book_author`
--

CREATE TABLE IF NOT EXISTS `id_book_author` (
  `id` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_author` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=299 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `id_book_author`
--

INSERT INTO `id_book_author` (`id`, `id_book`, `id_author`) VALUES
(285, 2, 3),
(286, 3, 1),
(287, 4, 4),
(288, 5, 1),
(289, 5, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `id_book_genre`
--

CREATE TABLE IF NOT EXISTS `id_book_genre` (
  `id` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `id_book_genre`
--

INSERT INTO `id_book_genre` (`id`, `id_book`, `id_genre`) VALUES
(285, 2, 2),
(286, 3, 4),
(287, 4, 3),
(288, 4, 4),
(289, 5, 2),
(290, 5, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1503414913),
('m170822_150554_create_book_table', 1503414917),
('m170823_062637_create_author_table', 1503469740),
('m170823_062913_create_genre_table', 1503469825),
('m170823_063108_create_id_book_author_table', 1503471190),
('m170823_063207_create_id_book_genre_table', 1503471190),
('m170823_065735_create_id_book_author_table', 1503471480),
('m170823_065811_create_id_book_genre_table', 1503471570);

-- --------------------------------------------------------

--
-- Структура таблицы `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `id` int(11) NOT NULL,
  `tite` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test1`
--

INSERT INTO `test1` (`id`, `tite`) VALUES
(1, 11),
(2, 111),
(3, 11111);

-- --------------------------------------------------------

--
-- Структура таблицы `test2`
--

CREATE TABLE IF NOT EXISTS `test2` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test2`
--

INSERT INTO `test2` (`id`, `title`) VALUES
(1, 222),
(2, 22222),
(3, 22222222);

-- --------------------------------------------------------

--
-- Структура таблицы `test12`
--

CREATE TABLE IF NOT EXISTS `test12` (
  `id` int(11) NOT NULL,
  `id_test1` int(11) NOT NULL,
  `id_test2` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test12`
--

INSERT INTO `test12` (`id`, `id_test1`, `id_test2`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `id_book_author`
--
ALTER TABLE `id_book_author`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book_author_book_id_fk` (`id_book`),
  ADD KEY `id_book_author_author_id_fk` (`id_author`);

--
-- Индексы таблицы `id_book_genre`
--
ALTER TABLE `id_book_genre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book_genre_book_id_fk` (`id_book`),
  ADD KEY `id_book_genre_genre_id_fk` (`id_genre`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test12`
--
ALTER TABLE `test12`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test12_test1_id_fk` (`id_test1`),
  ADD KEY `test12_test2_id_fk` (`id_test2`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `id_book_author`
--
ALTER TABLE `id_book_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT для таблицы `id_book_genre`
--
ALTER TABLE `id_book_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT для таблицы `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `test12`
--
ALTER TABLE `test12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `id_book_author`
--
ALTER TABLE `id_book_author`
  ADD CONSTRAINT `id_book_author_author_id_fk` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `id_book_author_book_id_fk` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`);

--
-- Ограничения внешнего ключа таблицы `id_book_genre`
--
ALTER TABLE `id_book_genre`
  ADD CONSTRAINT `id_book_genre_book_id_fk` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `id_book_genre_genre_id_fk` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`);

--
-- Ограничения внешнего ключа таблицы `test12`
--
ALTER TABLE `test12`
  ADD CONSTRAINT `test12_test1_id_fk` FOREIGN KEY (`id_test1`) REFERENCES `test1` (`id`),
  ADD CONSTRAINT `test12_test2_id_fk` FOREIGN KEY (`id_test2`) REFERENCES `test2` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
