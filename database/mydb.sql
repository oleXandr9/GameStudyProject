-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Лис 18 2022 р., 11:56
-- Версія сервера: 10.4.25-MariaDB
-- Версія PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `видавець`
--

CREATE TABLE `видавець` (
  `Назва` varchar(50) NOT NULL,
  `К-сть випущених ігор` int(11) DEFAULT NULL,
  `Популярність` varchar(45) DEFAULT NULL,
  `Країна` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `видавець`
--

INSERT INTO `видавець` (`Назва`, `К-сть випущених ігор`, `Популярність`, `Країна`) VALUES
('Epic Games', 40, 'Висока', 'USA'),
('Valve', 17, 'Висока', 'Netherland');

-- --------------------------------------------------------

--
-- Структура таблиці `гра`
--

CREATE TABLE `гра` (
  `Назва` varchar(100) NOT NULL,
  `Ксть_завантажень` int(11) DEFAULT NULL,
  `Графіка` varchar(45) NOT NULL,
  `Ціна` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `гра`
--

INSERT INTO `гра` (`Назва`, `Ксть_завантажень`, `Графіка`, `Ціна`) VALUES
('Counter-Strike', 10000000, '3D', 'Free'),
('Unreal Tournament', 5000000, '3D', 'Free');

-- --------------------------------------------------------

--
-- Структура таблиці `гра_has_жанри`
--

CREATE TABLE `гра_has_жанри` (
  `Гра_Назва` varchar(100) NOT NULL,
  `Жанри_Гра_Назва` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `гра_has_розробник`
--

CREATE TABLE `гра_has_розробник` (
  `Гра_Назва` varchar(100) NOT NULL,
  `Розробник_Назва студії` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `гра_has_сервер`
--

CREATE TABLE `гра_has_сервер` (
  `Гра_Назва` varchar(100) NOT NULL,
  `Сервер_Позиція` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `гравець`
--

CREATE TABLE `гравець` (
  `id_Гравця` int(11) NOT NULL,
  `Логін` varchar(16) NOT NULL,
  `Пароль` varchar(8) NOT NULL,
  `Адреса електронної пошти` varchar(45) NOT NULL,
  `Країна` varchar(45) DEFAULT NULL,
  `Гра_Назва1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `гравець`
--

INSERT INTO `гравець` (`id_Гравця`, `Логін`, `Пароль`, `Адреса електронної пошти`, `Країна`, `Гра_Назва1`) VALUES
(1, 'Alfagamer023', 'vhrvhurb', 'alfagamer023@yahoo.com', 'USA', 'Unreal Tournament'),
(2, 'Warhammer', '123456', 'ilovewarhammer@gmail.com', 'China', 'Counter-Strike');

-- --------------------------------------------------------

--
-- Структура таблиці `жанри`
--

CREATE TABLE `жанри` (
  `Гра_Назва` varchar(100) NOT NULL,
  `Жанр` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `жанри`
--

INSERT INTO `жанри` (`Гра_Назва`, `Жанр`) VALUES
('Counter-Strike', 'Командний шутер'),
('Unreal Tournament', 'Шутери');

-- --------------------------------------------------------

--
-- Структура таблиці `обладнання`
--

CREATE TABLE `обладнання` (
  `Сервер_Позиція` varchar(20) NOT NULL,
  `Обладнання` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `розробник`
--

CREATE TABLE `розробник` (
  `Назва_студії` varchar(30) NOT NULL,
  `Досвід` varchar(45) DEFAULT NULL,
  `Країна` varchar(45) DEFAULT NULL,
  `Видавець_Назва` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `розробник`
--

INSERT INTO `розробник` (`Назва_студії`, `Досвід`, `Країна`, `Видавець_Назва`) VALUES
('Epic Games', '31р', 'USA', 'Epic Games'),
('Valve', '30p', 'Netherland', 'Valve');

-- --------------------------------------------------------

--
-- Структура таблиці `сервер`
--

CREATE TABLE `сервер` (
  `Позиція` varchar(20) NOT NULL,
  `Пінг` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `сервер_has_обладнання`
--

CREATE TABLE `сервер_has_обладнання` (
  `Сервер_Позиція` varchar(20) NOT NULL,
  `Обладнання_Сервер_Позиція` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `ігри`
--

CREATE TABLE `ігри` (
  `Назва` varchar(45) DEFAULT NULL,
  `Розробник_Назва студії1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `видавець`
--
ALTER TABLE `видавець`
  ADD PRIMARY KEY (`Назва`);

--
-- Індекси таблиці `гра`
--
ALTER TABLE `гра`
  ADD PRIMARY KEY (`Назва`);

--
-- Індекси таблиці `гра_has_жанри`
--
ALTER TABLE `гра_has_жанри`
  ADD PRIMARY KEY (`Гра_Назва`,`Жанри_Гра_Назва`),
  ADD KEY `Жанри_Гра_Назва` (`Жанри_Гра_Назва`);

--
-- Індекси таблиці `гра_has_розробник`
--
ALTER TABLE `гра_has_розробник`
  ADD PRIMARY KEY (`Гра_Назва`,`Розробник_Назва студії`),
  ADD KEY `Розробник_Назва студії` (`Розробник_Назва студії`);

--
-- Індекси таблиці `гра_has_сервер`
--
ALTER TABLE `гра_has_сервер`
  ADD PRIMARY KEY (`Гра_Назва`,`Сервер_Позиція`),
  ADD KEY `Сервер_Позиція` (`Сервер_Позиція`);

--
-- Індекси таблиці `гравець`
--
ALTER TABLE `гравець`
  ADD PRIMARY KEY (`id_Гравця`,`Гра_Назва1`);

--
-- Індекси таблиці `жанри`
--
ALTER TABLE `жанри`
  ADD PRIMARY KEY (`Гра_Назва`);

--
-- Індекси таблиці `обладнання`
--
ALTER TABLE `обладнання`
  ADD PRIMARY KEY (`Сервер_Позиція`);

--
-- Індекси таблиці `розробник`
--
ALTER TABLE `розробник`
  ADD PRIMARY KEY (`Назва_студії`,`Видавець_Назва`),
  ADD KEY `Видавець_Назва` (`Видавець_Назва`);

--
-- Індекси таблиці `сервер`
--
ALTER TABLE `сервер`
  ADD PRIMARY KEY (`Позиція`);

--
-- Індекси таблиці `сервер_has_обладнання`
--
ALTER TABLE `сервер_has_обладнання`
  ADD PRIMARY KEY (`Сервер_Позиція`,`Обладнання_Сервер_Позиція`),
  ADD KEY `Обладнання_Сервер_Позиція` (`Обладнання_Сервер_Позиція`);

--
-- Індекси таблиці `ігри`
--
ALTER TABLE `ігри`
  ADD PRIMARY KEY (`Розробник_Назва студії1`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `гравець`
--
ALTER TABLE `гравець`
  MODIFY `id_Гравця` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `гра_has_розробник`
--
ALTER TABLE `гра_has_розробник`
  ADD CONSTRAINT `гра_has_розробник_ibfk_1` FOREIGN KEY (`Гра_Назва`) REFERENCES `гра` (`Назва`),
  ADD CONSTRAINT `гра_has_розробник_ibfk_2` FOREIGN KEY (`Розробник_Назва студії`) REFERENCES `розробник` (`Назва_студії`);

--
-- Обмеження зовнішнього ключа таблиці `гра_has_сервер`
--
ALTER TABLE `гра_has_сервер`
  ADD CONSTRAINT `гра_has_сервер_ibfk_1` FOREIGN KEY (`Гра_Назва`) REFERENCES `гра` (`Назва`),
  ADD CONSTRAINT `гра_has_сервер_ibfk_2` FOREIGN KEY (`Сервер_Позиція`) REFERENCES `сервер` (`Позиція`);

--
-- Обмеження зовнішнього ключа таблиці `сервер_has_обладнання`
--
ALTER TABLE `сервер_has_обладнання`
  ADD CONSTRAINT `сервер_has_обладнання_ibfk_1` FOREIGN KEY (`Сервер_Позиція`) REFERENCES `сервер` (`Позиція`),
  ADD CONSTRAINT `сервер_has_обладнання_ibfk_2` FOREIGN KEY (`Обладнання_Сервер_Позиція`) REFERENCES `обладнання` (`Сервер_Позиція`);

--
-- Обмеження зовнішнього ключа таблиці `ігри`
--
ALTER TABLE `ігри`
  ADD CONSTRAINT `ігри_ibfk_1` FOREIGN KEY (`Розробник_Назва студії1`) REFERENCES `розробник` (`Назва_студії`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
