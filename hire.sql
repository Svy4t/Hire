-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2023 г., 20:44
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hire`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advts`
--

CREATE TABLE `advts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type_of_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type_of_property` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `area` bigint NOT NULL,
  `place_for_cars` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `year_of_construction` int NOT NULL,
  `possession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `floor` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `number_of_storeys` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` bigint NOT NULL,
  `bathroom` int NOT NULL,
  `living_room` int NOT NULL,
  `bedroom` int NOT NULL,
  `kitchen` int NOT NULL,
  `benefits` varchar(255) NOT NULL,
  `description` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `advts`
--

INSERT INTO `advts` (`id`, `user_id`, `type`, `type_of_user`, `type_of_property`, `area`, `place_for_cars`, `year_of_construction`, `possession`, `header`, `floor`, `address`, `number_of_storeys`, `status`, `cost`, `bathroom`, `living_room`, `bedroom`, `kitchen`, `benefits`, `description`, `tel`, `created_at`, `updated_at`) VALUES
(72, 8, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 99м2', 5, 'Астрахань, улица Мечникова, 30', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт,Парковка,гардеробная', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 06:11:38', '2022-12-11 06:11:38'),
(73, 9, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 99м2', 5, 'Астрахань,улица Николая Островского, 72к1', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 07:46:59', '2022-12-11 07:46:59'),
(74, 10, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 99м2', 5, 'Астрахань,Бакинская улица, 41', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 07:47:04', '2022-12-11 07:47:04'),
(75, 11, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 99м2', 5, 'Астрахань, Кремлёвская улица, 2', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 07:47:07', '2022-12-11 07:47:07'),
(76, 11, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 98м2', 5, 'Астрахань, улица Чехова, 66', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 08:20:35', '2022-12-11 08:20:35'),
(77, 11, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 97м2', 5, 'Астрахань, Революционная улица, 76', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 08:20:40', '2022-12-11 08:20:40'),
(78, 11, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 96м2', 5, 'Астрахань, Оранжерейная улица, 9', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 08:20:44', '2022-12-11 08:20:44'),
(79, 11, 'Продажа', 'Посредник', 'Квартира', 99, 'парковка', 2007, 'я', 'Продаю квартиру 95м2', 5, 'Астрахань, 2-я Замьянская улица, 49', 9, 'продается', 19999999, 2, 2, 1, 1, 'Лифт, Парковка', 'Lorem ipsum Lorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumvLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', '79673318957', '2022-12-11 08:20:47', '2022-12-11 08:20:47'),
(80, 8, 'Продажа', 'Посредник', 'Дом', 76, 'Гараж', 4555, 'Владелец', 'блаблалалалалалалала', 4, 'Астрахань, Савушкина, 67', 9, 'Продажа', 321321321, 2, 2, 2, 2, 'undefinedЛифт,Закрытая территория,Парковка,', 'пролдпролдапролд', '+75675673434', '2022-12-22 07:37:45', '2022-12-22 07:37:45'),
(81, 12, 'Продажа', 'Посредник', 'Квартира', 55, 'Парковка', 1980, 'Владелец', '2-к. квартира, 55 м², 4/9 эт.', 4, 'Астрахань, ул. Бориса Алексеева, 65', 9, 'Продажа', 3777777, 1, 1, 1, 1, 'Бытовая техника,Детская площадка,Лифт,Гардероб,', 'Продаю 2-х ком в квартиру на 4-м этаже полностью готовую к проживанию.\nОтапливаемая площадь 55кв/м, С УЧЕТОМ ЛОДЖИИ площади 64кв/м\n>По всей квартире напольное покрытие - ЛАМИНАТ ,современные пластиковые окна, все коммуникации и эл.проводка заменены', '+56656565656', '2022-12-26 01:44:19', '2022-12-26 01:44:19'),
(82, 10, 'Продажа', 'Посредник', 'Квартира', 40, 'Парковка', 2020, 'Распорядитель', '2-х комнатная кв', 4, 'Астрахань, проезд Воробьёва, 8', 6, 'Продажа', 12000000, 1, 1, 1, 1, 'Бытовая техника,Гардероб,Лифт,Парковка,Детская площадка,', 'выаываыва', '+34554553434', '2023-01-12 12:55:02', '2023-01-12 12:55:02'),
(83, 10, 'Аренда', 'Владелец', 'Квартира', 181, 'Парковка', 2000, 'Распорядитель', 'Дом на продаже', 1, 'Астрахань, Нерчинская 1-я, 10', 1, 'Аренда', 19999999, 1, 1, 1, 1, 'Закрытая территория,', 'Продам дом, буду рыбой', '+43243455656', '2023-01-12 13:01:05', '2023-01-12 13:01:05'),
(84, 10, 'Аренда', 'Посредник', 'Квартира', 300, 'Парковка', 2010, 'Распорядитель', 'Элитный домище', 1, 'Астрахань, 7-й Углегорский переулок, 11', 2, 'Аренда', 1223231233, 2, 2, 2, 1, 'Бытовая техника,Закрытая территория,', 'Домище це чмище', '+45623451232', '2023-01-12 13:05:18', '2023-01-12 13:05:18'),
(85, 10, 'Продажа', 'Владелец', 'Квартира', 67, 'Парковка', 1989, 'Распорядитель', 'Хорошая кв на Боевой', 4, 'Астрахань, Боевая, 133', 5, 'Продажа', 23000000, 1, 1, 1, 1, 'Бытовая техника,Гардероб,Детская площадка,Лифт,', 'топ кв , все на Никольскую', '+42342345353', '2023-01-12 13:10:34', '2023-01-12 13:10:34'),
(86, 12, 'Продажа', 'Владелец', 'Дом', 45, 'Парковка', 1993, 'Владелец', 'цуцуцуцу23', 4, 'Астрахань, Луконина, 9', 9, 'Продажа', 2232323, 2, 2, 2, 2, 'Бытовая техника,Закрытая территория,', 'аываыацуя кец5423542352', '+79673313333', '2023-04-02 09:22:25', '2023-04-02 09:22:25');

-- --------------------------------------------------------

--
-- Структура таблицы `electes`
--

CREATE TABLE `electes` (
  `advt_id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `electes`
--

INSERT INTO `electes` (`advt_id`, `user_id`, `updated_at`, `created_at`) VALUES
(77, 8, '2022-12-20 06:23:46', '2022-12-20 06:23:46'),
(76, 8, '2022-12-20 07:16:57', '2022-12-20 07:16:57'),
(72, 10, '2022-12-21 04:36:01', '2022-12-21 04:36:01'),
(78, 10, '2022-12-21 04:36:06', '2022-12-21 04:36:06'),
(72, 12, '2022-12-26 01:36:47', '2022-12-26 01:36:47'),
(84, 10, '2023-01-12 13:25:42', '2023-01-12 13:25:42'),
(72, 12, '2023-03-28 13:52:08', '2023-03-28 13:52:08');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `advt_id` int NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`advt_id`, `file_name`, `updated_at`, `created_at`) VALUES
(46, 'sRx027ZqtKoHy1m.jpg', '2022-12-07 06:49:43', '2022-12-07 06:49:43'),
(46, 'iZdHdzL9WgI9SpA.jpg', '2022-12-07 06:49:43', '2022-12-07 06:49:43'),
(61, 'tpBf7rfU9C5yHfb.jpg', '2022-12-07 07:28:38', '2022-12-07 07:28:38'),
(61, 'pucDy7gHSDa5oyu.jpg', '2022-12-07 07:28:38', '2022-12-07 07:28:38'),
(61, 'y1kbg7TCzt22jjQ.jpg', '2022-12-07 07:28:38', '2022-12-07 07:28:38'),
(70, 'IcQBAekBknUzrCP.png', '2022-12-07 11:26:42', '2022-12-07 11:26:42'),
(70, 'bYbSeZb1DijGeG4.png', '2022-12-07 11:26:42', '2022-12-07 11:26:42'),
(70, 'vxzO2fHQJyzKsvi.png', '2022-12-07 11:26:42', '2022-12-07 11:26:42'),
(72, 'qJi2BEt9xOz3uqP.png', '2022-12-07 11:28:12', '2022-12-07 11:28:12'),
(72, 'KOumYr1WEs2vylo.png', '2022-12-07 11:28:12', '2022-12-07 11:28:12'),
(72, 'mw1yWWM2ttLIB62.png', '2022-12-07 11:28:12', '2022-12-07 11:28:12'),
(80, 'b0lPh3tO1KFivXQ.jpg', '2022-12-22 07:37:48', '2022-12-22 07:37:48'),
(80, 'Bpw12kR4isDWKfv.jpg', '2022-12-22 07:37:48', '2022-12-22 07:37:48'),
(80, 'XZsPbHq0BSTUJr9.jpg', '2022-12-22 07:37:48', '2022-12-22 07:37:48'),
(80, 'IJsf5SClrlPgfnh.png', '2022-12-22 07:37:48', '2022-12-22 07:37:48'),
(81, 'zmV9xUPOgFqh1yB.png', '2022-12-26 01:44:19', '2022-12-26 01:44:19'),
(81, 'mG2Asvzg1CEJAhX.png', '2022-12-26 01:44:19', '2022-12-26 01:44:19'),
(82, 'axoKNv2Bp9hAfcq.jpg', '2023-01-12 12:55:03', '2023-01-12 12:55:03'),
(82, 'YiCJVbIg4jmbbPt.jpg', '2023-01-12 12:55:03', '2023-01-12 12:55:03'),
(82, '45tdJGt2IM9OJOL.jpg', '2023-01-12 12:55:03', '2023-01-12 12:55:03'),
(84, 'rpTkIezC8Su7dWd.jpg', '2023-01-12 13:05:19', '2023-01-12 13:05:19'),
(84, 'bKEPhAXWPuUP4dC.jpg', '2023-01-12 13:05:19', '2023-01-12 13:05:19'),
(84, 'TCHVqGLx8fiMRMP.jpg', '2023-01-12 13:05:19', '2023-01-12 13:05:19'),
(85, 'VSBXhupapEFY9hK.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'EWMgI6BNX6kOxJK.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, '2uUeZVO6T9IwyHq.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'n0Cqg2N0h8u7tkb.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'Gom9cS73zpNfFru.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'cytn7F5MJ3lPV2W.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'GsPsoXwswm3YNqZ.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'gkzhnEmkSuRnprL.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'sBuNoVo4AqsUi4f.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(85, 'letHV8IJWJcqZ9A.jpg', '2023-01-12 13:10:35', '2023-01-12 13:10:35'),
(86, '4760vmwHHYafrqh.png', '2023-04-02 09:22:25', '2023-04-02 09:22:25'),
(86, 'MIUGC3Oro1gIfNV.png', '2023-04-02 09:22:25', '2023-04-02 09:22:25'),
(86, 'UQYI63LtWJrLh9R.png', '2023-04-02 09:22:25', '2023-04-02 09:22:25'),
(86, 'sUp28NXgyOQFeHL.png', '2023-04-02 09:22:25', '2023-04-02 09:22:25'),
(86, 'hRkHuwIes3etT0b.png', '2023-04-02 09:22:25', '2023-04-02 09:22:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `updated_at` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `middle_name`, `password`, `tel`, `email`, `avatar`, `role`, `token`, `created_at`, `updated_at`) VALUES
(8, '12', '12', '12', 'c9d21e89dc04f9f2b446b4fbdafdf4b8', '+79999999999', '12@mail.ru', 'Mcj7wWe9uJuECBs.png', 'none', 'Kh9CK78Yf1AF8hT', '2022-11-23 11:22:58', '2022-12-23 09:45:46'),
(9, '123', '123', '123', 'c9d21e89dc04f9f2b446b4fbdafdf4b8', '1231233', 'aa@mail.ru', 'tjfEo6sEaSUT1gX.jpg', 'none', 'wTtikbm3lrVAOhZ', '2022-11-23 11:25:03', '2022-12-19 11:47:58'),
(10, 'asdff', 'asdf', 'asd', 'c9d21e89dc04f9f2b446b4fbdafdf4b8', '+73453454545', 'mail@mail.ru', 'WQDcyZQ0NcsTK5x.PNG', 'none', 'XGccOrIxHI9TTAB', '2022-12-19 12:36:34', '2023-01-12 16:30:52'),
(11, 'ggg', 'ggg', 'ggg', 'c9d21e89dc04f9f2b446b4fbdafdf4b8', '+93456789090', 'asdsd@mail.ru', 'AP1cKhwp8HPLFSb.png', 'none', 'xsKZC8ox8gsGpDN', '2022-12-19 13:01:06', '2023-01-12 16:30:23'),
(12, 'Святослав', 'Ануфриев', 'Дмитриевич', 'c9d21e89dc04f9f2b446b4fbdafdf4b8', '+78988989090', 'asvytoslav@mail.ru', 'HKm7yMeeL7jsF0X.jpg', 'none', 'snZ8rtANm36KolS', '2022-12-26 05:36:26', '2023-03-26 11:13:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advts`
--
ALTER TABLE `advts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advts`
--
ALTER TABLE `advts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
