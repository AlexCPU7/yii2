-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 06 2017 г., 12:47
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `title`) VALUES
(1, 'Alex'),
(3, 'Den'),
(4, 'Joo'),
(5, 'Илья Ильф'),
(6, 'Евгений Петров'),
(7, 'Александр Пушкин'),
(8, 'Николай Гоголь'),
(9, 'Михаил Булгаков'),
(10, 'Лев Толстой'),
(11, 'Александр Беляев');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `description`, `pic`) VALUES
(2, 'Life', 'description life life life life life life', '/web/uploads/LGXjTKIr.jpg'),
(3, 'I''m coming', 'description coming coming coming coming', '/web/uploads/_H7qKZnv.jpg'),
(4, 'Kill', 'description kill kill kill kill kill', '/web/uploads/7kfo4aub.jpg'),
(5, 'Big Boon', 'description boom boom boom boom boom', '/web/uploads/5vlGyA8Z.jpg'),
(6, 'Двенадцать стульев', 'В томе представлены наиболее известные произведения классиков отечественной литературы XX века И.Ильфа и Е.Петрова "Двенадцать стульев".', '/web/uploads/GpmFzEy0.jpg'),
(33, 'Одноэтажная Америка', 'оманы великих сатириков Ильи Ильфа и Евгения Петрова постоянно переиздаются, экранизируются и ставятся на сцене. Не менее знаменитая их книга о путешествии по Америке, переведенная, кстати, на множество языков, не выходила в России, как ни странно, более двадцати лет. Продолжая свою линию на восстановление подлинных текстов Ильфа и Петрова, "Текст" публикует полную версию блестящей "Одноэтажной Америки", восстановленную по авторской рукописи дочерью Ильи Ильфа Александрой Ильиничной. Чтобы читатель получил более полное впечатление об этом путешествии, книга дополнена впервые опубликованными письмами авторов из Америки домой, их женам, а также многочисленными фотографиями, которые Илья Ильф делал как всегда с большим мастерством. И еще в книге есть отклики читателей на первую публикацию "Одноэтажной Америки" - а вышла она впервые, между прочим, в том самом 37-м году... \r\n', '/web/uploads/za4Q1LSJ.jpg'),
(34, 'Евгений Онегин', '«Евгений Онегин» — самое известное и самое значительное произведение А. С. Пушкина, вершина русской поэзии и предмет многочисленных исследований. Пушкин начал роман в мае 1823 года, а закончил только осенью 1831 года, когда было написано «Письмо Онегина к Татьяне». Осенью 1823 года поэт сообщал друзьям: «Я теперь пишу не роман, а роман в стихах — дьявольская разница...» Занимательный, легкий, основанный на любовной истории, переданной в манере доверительной беседы автора с читателем, — и вместе с тем полный неразрешимых парадоксов и загадок, пушкинский роман привлекает новые и новые поколения читателей. В настоящее издание включен комментарий к роману известного филолога Ю. М. Лотмана. Ученый показывает внутренне сложную, полную противоречий структуру романа «Евгений Онегин», скрывающуюся за внешней легкостью и понятностью пушкинских строк. Текст романа публикуется с иллюстрациями выдающегося художника-графика Н. В. Кузьмина. ', '/web/uploads/CJ6NTnjA.jpg'),
(35, 'Мертвые души', 'Покой и тишину провинциального города N нарушает стук колес брички, в которой едет Павел Иванович Чичиков. Горожане очарованы приезжим господином. Но до тех пор, пока им не становится известно о весьма странном обстоятельстве, приведшем его в город. Так по чью же душу этот загадочный Чичиков? ', '/web/uploads/GzzteljZ.jpg'),
(36, 'Собачье сердце', 'Повесть «Собачье сердце» написана М. А. Булгаковым в январе-марте 1925 года, в СССР впервые опубликована в журнале «Знамя» в 1987 году, но до публикации широко ходила в самиздате. История введения «Собачьего сердца» в «официальный оборот» подробно описана в статье М. О. Чудаковой, завершающей эту книгу. Огромная популярность пришла к булгаковским героям после чрезвычайно удачной экранизации книги в 1989 году. Шарик-Шариков, профессор Преображенский, доктор Борменталь, председатель домкома Швондер стали нарицательными персонажами. А история о бездомной собаке, принявшей после хирургической операции человеческий облик, но затем под влиянием идей о классовой вражде пролетариата и буржуазии вновь утратившей его, обрела почти фольклорную известность. Сегодня обращенное к человеку определение «Шариков» — синоним глупости, жадности и неблагодарности. Пес Шарик, между прочим, таким не был — это чисто людские свойства. ', '/web/uploads/mR2YMsjq.jpg'),
(37, 'Анна Каренина', 'Роман "Анна Каренина" Льва Николаевича Толстого (1828-1910) является самой читаемой книгой в мире. По словам Достоевского, это произведение поражает "не только вседневностью содержания, но и огромной психологической разработкой души человеческой, страшной глубиной и силой". История любви замужней женщины к блестящему офицеру, губительной для Анны, но завораживающей своей страстностью и самоотверженностью, уже более ста лет не сходит со сценических подмостков и экранизирована множество раз как в России, так и за рубежом. ', '/web/uploads/ina1OjqL.jpg'),
(38, 'Человек-амфибия', 'Трогательная история любви восхитительной Гутиэрре и необычного Ихтиандра покорила сердца не одного поколения читателей, став примером верности своим чувствам, честности и достоинства. ', '/web/uploads/J5nNXCrO.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`id`, `title`) VALUES
(2, 'комедия'),
(3, 'ужасы'),
(4, 'драма'),
(5, 'приключения'),
(6, 'поэзия'),
(7, 'поэма'),
(8, 'сатира'),
(9, 'роман'),
(10, 'научная фантастика');

-- --------------------------------------------------------

--
-- Структура таблицы `id_book_author`
--

CREATE TABLE IF NOT EXISTS `id_book_author` (
  `id` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_author` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=400 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `id_book_author`
--

INSERT INTO `id_book_author` (`id`, `id_book`, `id_author`) VALUES
(385, 2, 3),
(387, 4, 4),
(388, 3, 1),
(389, 5, 1),
(390, 5, 4),
(391, 6, 5),
(392, 6, 6),
(393, 33, 5),
(394, 33, 6),
(395, 34, 7),
(396, 35, 8),
(397, 36, 9),
(398, 37, 10),
(399, 38, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `id_book_genre`
--

CREATE TABLE IF NOT EXISTS `id_book_genre` (
  `id` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL,
  `id_genre` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=409 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `id_book_genre`
--

INSERT INTO `id_book_genre` (`id`, `id_book`, `id_genre`) VALUES
(391, 2, 2),
(393, 4, 3),
(394, 4, 4),
(395, 3, 4),
(396, 5, 2),
(397, 5, 4),
(398, 6, 2),
(399, 33, 2),
(400, 33, 5),
(401, 34, 2),
(402, 34, 6),
(403, 35, 5),
(404, 35, 7),
(405, 36, 8),
(406, 37, 9),
(407, 38, 5),
(408, 38, 10);

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
('m170823_065811_create_id_book_genre_table', 1503471570),
('m170830_135556_create_user_table', 1504101498);

-- --------------------------------------------------------

--
-- Структура таблицы `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `id` int(11) NOT NULL,
  `tite` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test1`
--

INSERT INTO `test1` (`id`, `tite`) VALUES
(1, 11),
(2, 111),
(3, 11111),
(4, 12);

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

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$MBeMuHINy/KkiYhLbtMXvewCXFhuKxEn8PKXRanWIN9bcbHkWVY1O', 'iF3qXq6RFzevZeG2Qajkbg_0BlXgfG98');

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
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `id_book_author`
--
ALTER TABLE `id_book_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=400;
--
-- AUTO_INCREMENT для таблицы `id_book_genre`
--
ALTER TABLE `id_book_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=409;
--
-- AUTO_INCREMENT для таблицы `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
