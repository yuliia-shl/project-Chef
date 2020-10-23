-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 25 2020 г., 15:56
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `projectchef`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `user_id`, `feedback_date`, `description`) VALUES
(1, 1, '2020-01-06', 'We are very happy to see you here!'),
(2, 2, '2020-01-23', 'Fro is a life saver. I don\'t have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Udemy, I\'m really close. Fro is a life saver. I don\'t have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Udemy, I\'m really close!!!'),
(3, 3, '2020-02-03', 'Thanks'),
(4, 4, '2020-02-14', 'pasib'),
(5, 5, '2020-02-27', 'very nice'),
(42, 6, '2020-03-09', 'i liked'),
(43, 7, '2020-03-18', 'Masster classes are superb!'),
(44, 8, '2020-04-01', 'Muchos Gracias!'),
(45, 9, '2020-04-14', 'I will order again! Absolutely!'),
(46, 3, '2020-04-29', 'I was happy to meet you! Thanks for great knowledges.'),
(47, 2, '2020-04-30', 'Thanks for your job. The dishes are very tasty!'),
(51, 10, '2020-05-01', 'Thank you for your job. I realy like your recipes!');

-- --------------------------------------------------------

--
-- Структура таблицы `masterclass`
--

CREATE TABLE `masterclass` (
  `id_master` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `descr` text NOT NULL,
  `mc_date` date NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `masterclass`
--

INSERT INTO `masterclass` (`id_master`, `title`, `price`, `descr`, `mc_date`, `photo`) VALUES
(1, 'Salmon Tataki', '$100', 'Salmon inspired by Japanese technique matching with Turkish summers flavors development my own.\r\n\r\nIngredients:\r\n\r\nSalmon sliced,\r\nApple, \r\nMelon, \r\nAyran,\r\nDill oil,\r\nRice vinegar,\r\nOrange wedges,\r\nBlack Quinoa,\r\nSalt.', '2020-05-16', 'img/Chef Fro-8877.jpg'),
(2, 'Chicken and shitake mushroom', '$90', 'Chicken growing in small villages with a lot of care filled with Asian mushroom inspired by European techniques and ingredients from the black side Mountains.\r\n\r\nIngredients:\r\n\r\nChicken breast,\r\nShitake,\r\nChicken broth,\r\nButter,\r\nLemon juice,\r\nPotato sliced, \r\nNori seaweed,\r\nBaby carrot,\r\nParsley powder.', '2020-05-23', 'img/Chef Fro-1452.jpg'),
(3, 'Apricot Vanilla (New recipe!)', '$150', 'Summer fruit combined with the most high quality of vanilla from México making one of the most successful dessert that I create in the latest days.\r\n\r\nIngredients:\r\n\r\nApricot,\r\nCream,\r\nVanilla from Chiapas (Mexico),\r\nFlour,\r\nCorn starch,\r\nGelatin,\r\nButter,\r\nSugar,\r\nCinnamon powder,\r\nCardamom,\r\nWater.', '2020-05-30', 'img/Chef Fro-0548.jpg'),
(4, 'Norway Lobster Beurre Blanc', '$100', 'Imported Norway Fresh Lobster Poached in Beurre Blanc.\r\nIngridients:\r\nLobster Norway,\r\nSalmon Caviar,\r\nWhite wine,\r\nButter,\r\nOnion,\r\nGarlic,\r\nLemon Juice,\r\nMint oil,\r\nFlower to decoration.', '2020-06-06', 'img/Chef Fro-1164.jpg'),
(5, 'Red Snapper Citrus Sauce', '$90', 'Grilled Red Snapper with torched vegetables and home made citrus sauce.\r\nIngredients:\r\n\r\nRed Snapper,\r\nZuchini,\r\nRed Radish,\r\nOrange Juice,\r\nLemon Juice,\r\nPomegranate Juice,\r\nXantana,\r\nPower Milk, \r\nButter,\r\nFlour,\r\nBlack Garlic.', '2020-06-13', 'img/Chef Fro-7949.jpg'),
(6, 'Bogavante', '$150', 'Poached Bogavante with butter and plum juice  and cous cous wrapped in spinach leaves.\r\n\r\nIngredients:\r\n\r\nBogavante,\r\nCelery sticks,\r\nButter,\r\nCous cous,\r\nMint,\r\nTomato,\r\nOnion,\r\nPlum juice,\r\nAgar agar,\r\nSpinach leaves.', '2020-06-20', 'img/Chef Fro-9968.jpg'),
(7, 'Mahi Mahi', '$100', 'Cured Mahi mahi in beet root juice for 24 hours served like Ceviche style.\r\n\r\nIngredients:\r\nMahi mahi,\r\nBeet root juice,\r\nRed whine vinegar,\r\nLemon juice,\r\nGinger,\r\nGarlic,\r\nBaby cabagge,\r\nBaby carrot,\r\nAvocado.', '2020-06-27', 'img/Chef Fro-8040.jpg'),
(8, 'Quail BBQ', '$90', 'Grilled Quail leg over Turkish charcoal for kebab glazed with inspired Japanese sauce technique gathering al the umami flavors on it.\r\n\r\nIngredients:\r\n Quail leg,\r\nSoya sauce,\r\nChicken bones,\r\nOnion,\r\nFresh Garlic,\r\nGinger,\r\nCorn starch,\r\nCives,\r\nFried garlic.', '2020-07-04', 'img/Chef Fro-8223.jpg'),
(9, 'Tempura Quail Wings', '$150', 'Japanese fry technique served in brown beef sauce dressed with oyster and fresh and pickles.\r\nIngredients:\r\nQuail wings,\r\nCorn starch,\r\nFlour,\r\nBeer,\r\nBrown beef stock,\r\nOyster sauce,\r\nFresh apple,\r\nPickled cucumber,\r\nFry oil.', '2020-07-11', 'img/Chef Fro-8680.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `id_master`, `date_order`, `status`) VALUES
(1, 1, 1, '2020-05-25 12:47:08', '0'),
(2, 11, 2, '2020-05-25 13:41:57', '2'),
(4, 11, 2, '2020-05-25 13:41:54', '1'),
(5, 7, 6, '2020-05-25 12:37:54', '1'),
(29, 2, 1, '2020-05-25 13:07:39', '1'),
(32, 2, 2, '2020-05-25 13:08:43', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `root` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `us_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `root`, `name`, `email`, `password`, `phone`, `us_photo`) VALUES
(1, 1, 'Chef Froylan Rincon', '111', '111', '+905550212563', 'img/chef11.jpg'),
(2, 0, 'Bartolomeo Rastrelli', '123', '123', '+447722451297', 'img/user1.png'),
(3, 0, 'Maruska', '222', '222', '+380684536728', 'img/dish1.jpg'),
(4, 0, 'Ivan Petrovich', '333', '333', '+380738546209', 'img/dish2.jpg'),
(5, 0, 'Daniel Agger', 'dani@', '123456', '+44444444444', 'img/dish3.jpg'),
(6, 0, 'Oleg Mar', 'olegatorius1@gmail.com', '55555', '0506634441', 'img/dish4.jpg'),
(7, 0, 'Oleg', 'oleg@', '666', '0506634441', 'img/dish5.jpg'),
(8, 0, 'Олег Марченко', 'olegatorius1@gmail.com', '555555', '0506634441', 'img/dish6.jpg'),
(9, 0, 'Oleg Mar', 'olegatorius1@gmail.com', '123456789', '0506634441', 'img/dish7.jpg'),
(10, 0, 'Rine', 'rine@', '666', '0506634441', 'img/user2.png'),
(11, 0, 'Hungry team', '777', '777', '777', 'img/user3.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Индексы таблицы `masterclass`
--
ALTER TABLE `masterclass`
  ADD PRIMARY KEY (`id_master`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `masterclass`
--
ALTER TABLE `masterclass`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
