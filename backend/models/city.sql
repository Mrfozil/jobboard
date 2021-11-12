-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 13 2021 г., 19:37
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yiidars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `regionId` int(11) DEFAULT NULL,
  `name_oz` varchar(100) DEFAULT NULL,
  `name_uz` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `regionId`, `name_oz`, `name_uz`, `name_ru`, `name_en`) VALUES
(1, 14, 'Шахрисабз шаҳар', 'SHaxrisabz shahar', 'Шахрисабз шаҳар', 'SHaxrisabz shahar'),
(2, 3, 'Поп тумани', 'Pop tumani', 'Поп тумани', 'Pop tumani'),
(3, 2, 'Асака туман', 'Asaka tuman', 'Асака туман', 'Asaka tuman'),
(4, 5, 'Тошкент тумани', 'Toshkent tumani', 'Тошкент тумани', 'Toshkent tumani'),
(5, 5, 'Янгийўл шаҳар', 'Яngiyo\'l shahar', 'Янгийўл шаҳар', 'Яngiyo\'l shahar'),
(6, 5, 'Оҳангарон шаҳар', 'Ohangaron shahar', 'Оҳангарон шаҳар', 'Ohangaron shahar'),
(7, 5, 'Нурафшон шаҳар', 'Nurafshon shahar', 'Нурафшон шаҳар', 'Nurafshon shahar'),
(8, 11, 'Нукус шаҳар', 'Nukus shahar', 'Нукус шаҳар', 'Nukus shahar'),
(9, 11, 'Тахиатош тумани', 'Taxiatosh tumani', 'Тахиатош тумани', 'Taxiatosh tumani'),
(10, 4, 'Хива шаҳар', 'Xiva shahar', 'Хива шаҳар', 'Xiva shahar'),
(11, 11, 'Амударё туман', 'Amudaryo tuman', 'Амударё туман', 'Amudaryo tuman'),
(12, 11, 'Беруний туман', 'Beruniy tuman', 'Беруний туман', 'Beruniy tuman'),
(13, 11, 'Қонликул туман', 'Qonlikul tuman', 'Қонликул туман', 'Qonlikul tuman'),
(14, 11, 'Қораузак туман', 'Qorauzak tuman', 'Қораузак туман', 'Qorauzak tuman'),
(15, 11, 'Кегейли туман', 'Kegeyli tuman', 'Кегейли туман', 'Kegeyli tuman'),
(16, 11, 'Қўнғирот туман', 'Qo\'nғirot tuman', 'Қўнғирот туман', 'Qo\'nғirot tuman'),
(17, 11, 'Муйнақ туман', 'Muynaq tuman', 'Муйнақ туман', 'Muynaq tuman'),
(18, 11, 'Нукус туман', 'Nukus tuman', 'Нукус туман', 'Nukus tuman'),
(19, 11, 'Тахтакупир туман', 'Taxtakupir tuman', 'Тахтакупир туман', 'Taxtakupir tuman'),
(20, 11, 'Турткул туман', 'Turtkul tuman', 'Турткул туман', 'Turtkul tuman'),
(21, 11, 'Хўжайли туман', 'Xo\'jayli tuman', 'Хўжайли туман', 'Xo\'jayli tuman'),
(22, 11, 'Чимбой туман', 'Чimboy tuman', 'Чимбой туман', 'Чimboy tuman'),
(23, 11, 'Шуманай туман ', 'SHumanay tuman', 'Шуманай туман ', 'SHumanay tuman'),
(24, 11, 'Элликкалъа туман', 'Ellikkal\'a tuman', 'Элликкалъа туман', 'Ellikkal\'a tuman'),
(25, 2, 'Андижон шаҳар', 'Andijon shahar', 'Андижон шаҳар', 'Andijon shahar'),
(26, 2, 'Хонобод шаҳар', 'Xonobod shahar', 'Хонобод шаҳар', 'Xonobod shahar'),
(27, 2, 'Андижон тумани', 'Andijon tumani', 'Андижон тумани', 'Andijon tumani'),
(28, 2, 'Балиқчи туман', 'Baliqchi tuman', 'Балиқчи туман', 'Baliqchi tuman'),
(29, 2, 'Булоқбоши туман', 'Buloqboshi tuman', 'Булоқбоши туман', 'Buloqboshi tuman'),
(30, 2, 'Бўз туман', 'Bo\'z tuman', 'Бўз туман', 'Bo\'z tuman'),
(31, 2, 'Жалақудуқ туман', 'Jalaquduq tuman', 'Жалақудуқ туман', 'Jalaquduq tuman'),
(32, 2, 'Избоскан туман', 'Izboskan tuman', 'Избоскан туман', 'Izboskan tuman'),
(33, 2, 'Улуғнор туман', 'Uluғnor tuman', 'Улуғнор туман', 'Uluғnor tuman'),
(34, 2, 'Марҳамат туман', 'Marhamat tuman', 'Марҳамат туман', 'Marhamat tuman'),
(35, 2, 'Пахтаобод туман', 'Paxtaobod tuman', 'Пахтаобод туман', 'Paxtaobod tuman'),
(36, 2, 'Хўжаобод туман', 'Xo\'jaobod tuman', 'Хўжаобод туман', 'Xo\'jaobod tuman'),
(37, 2, 'Олтинкўл туман', 'Oltinko\'l tuman', 'Олтинкўл туман', 'Oltinko\'l tuman'),
(38, 2, 'Қўрғонтепа туман', 'Qo\'rғontepa tuman', 'Қўрғонтепа туман', 'Qo\'rғontepa tuman'),
(39, 2, 'Шахрихон туман', 'SHaxrixon tuman', 'Шахрихон туман', 'SHaxrixon tuman'),
(40, 7, 'Бухоро шаҳар', 'Buxoro shahar', 'Бухоро шаҳар', 'Buxoro shahar'),
(41, 7, 'Когон шаҳар', 'Kogon shahar', 'Когон шаҳар', 'Kogon shahar'),
(42, 7, 'Бухоро туман', 'Buxoro tuman', 'Бухоро туман', 'Buxoro tuman'),
(43, 7, 'Бобкент туман ', 'Bobkent tuman', 'Бобкент туман ', 'Bobkent tuman'),
(44, 7, 'Жондор туман', 'Jondor tuman', 'Жондор туман', 'Jondor tuman'),
(45, 7, 'Когон туман', 'Kogon tuman', 'Когон туман', 'Kogon tuman'),
(46, 7, 'Олот туман', 'Olot tuman', 'Олот туман', 'Olot tuman'),
(47, 7, 'Пешку туман', 'Peshku tuman', 'Пешку туман', 'Peshku tuman'),
(48, 7, 'Ромитан туман', 'Romitan tuman', 'Ромитан туман', 'Romitan tuman'),
(49, 7, 'Шофиркон туман', 'SHofirkon tuman', 'Шофиркон туман', 'SHofirkon tuman'),
(50, 7, 'Қоракўл туман', 'Qorako\'l tuman', 'Қоракўл туман', 'Qorako\'l tuman'),
(51, 7, 'Қоровулбозор туман', 'Qorovulbozor tuman', 'Қоровулбозор туман', 'Qorovulbozor tuman'),
(52, 7, 'Ғиждувон туман', 'Ғijduvon tuman', 'Ғиждувон туман', 'Ғijduvon tuman'),
(53, 9, 'Арнасой туман', 'Arnasoy tuman', 'Арнасой туман', 'Arnasoy tuman'),
(54, 9, 'Бахмал туман', 'Baxmal tuman', 'Бахмал туман', 'Baxmal tuman'),
(55, 9, 'Ғаллаорол туман', 'Ғallaorol tuman', 'Ғаллаорол туман', 'Ғallaorol tuman'),
(56, 9, 'Дўстлик туман', 'Do\'stlik tuman', 'Дўстлик туман', 'Do\'stlik tuman'),
(57, 9, 'Жиззах шаҳар', 'Jizzax shahar', 'Жиззах шаҳар', 'Jizzax shahar'),
(58, 9, 'Жиззах туман', 'Jizzax tuman', 'Жиззах туман', 'Jizzax tuman'),
(59, 9, 'Зарбдор туман', 'Zarbdor tuman', 'Зарбдор туман', 'Zarbdor tuman'),
(60, 9, 'Зафаробод туман', 'Zafarobod tuman', 'Зафаробод туман', 'Zafarobod tuman'),
(61, 9, 'Зомин туман ', 'Zomin tuman', 'Зомин туман ', 'Zomin tuman'),
(62, 9, 'Мирзачўл туман', 'Mirzacho\'l tuman', 'Мирзачўл туман', 'Mirzacho\'l tuman'),
(63, 9, 'Пахтакор туман', 'Paxtakor tuman', 'Пахтакор туман', 'Paxtakor tuman'),
(64, 9, 'Фориш туман', 'Forish tuman', 'Фориш туман', 'Forish tuman'),
(65, 9, 'Янгиобод туман', 'Яngiobod tuman', 'Янгиобод туман', 'Яngiobod tuman'),
(66, 14, 'Қарши шаҳар', 'Qarshi shahar', 'Қарши шаҳар', 'Qarshi shahar'),
(67, 14, 'Қарши туман', 'Qarshi tuman', 'Қарши туман', 'Qarshi tuman'),
(68, 14, 'Муборак туман', 'Muborak tuman', 'Муборак туман', 'Muborak tuman'),
(69, 14, 'Ғузор тумани', 'Ғuzor tumani', 'Ғузор тумани', 'Ғuzor tumani'),
(70, 14, 'Қамаши туман', 'Qamashi tuman', 'Қамаши туман', 'Qamashi tuman'),
(71, 14, 'Чироқчи туман', 'Чiroqchi tuman', 'Чироқчи туман', 'Чiroqchi tuman'),
(72, 14, 'Шахрисабз туман', 'SHaxrisabz tuman', 'Шахрисабз туман', 'SHaxrisabz tuman'),
(73, 14, 'Касби туман', 'Kasbi tuman', 'Касби туман', 'Kasbi tuman'),
(74, 14, 'Косон туман', 'Koson tuman', 'Косон туман', 'Koson tuman'),
(75, 14, 'Китоб туман', 'Kitob tuman', 'Китоб туман', 'Kitob tuman'),
(76, 14, 'Нишон туман', 'Nishon tuman', 'Нишон туман', 'Nishon tuman'),
(77, 14, 'Миришкор туман ', 'Mirishkor tuman', 'Миришкор туман ', 'Mirishkor tuman'),
(78, 14, 'Деҳқонобод туман', 'Dehqonobod tuman', 'Деҳқонобод туман', 'Dehqonobod tuman'),
(79, 14, 'Яккабоғ туман', 'Яkkaboғ tuman', 'Яккабоғ туман', 'Яkkaboғ tuman'),
(80, 10, 'Навоий шаҳар', 'Navoiy shahar', 'Навоий шаҳар', 'Navoiy shahar'),
(81, 10, 'Зарафшон шаҳар', 'Zarafshon shahar', 'Зарафшон шаҳар', 'Zarafshon shahar'),
(82, 10, 'Кармана туман', 'Karmana tuman', 'Кармана туман', 'Karmana tuman'),
(83, 10, 'Томди тумани', 'Tomdi tumani', 'Томди тумани', 'Tomdi tumani'),
(84, 10, 'Навбаҳор туман', 'Navbahor tuman', 'Навбаҳор туман', 'Navbahor tuman'),
(85, 10, 'Нурота туман', 'Nurota tuman', 'Нурота туман', 'Nurota tuman'),
(86, 10, 'Хатирчи туман', 'Xatirchi tuman', 'Хатирчи туман', 'Xatirchi tuman'),
(87, 10, 'Қизилтепа туман', 'Qiziltepa tuman', 'Қизилтепа туман', 'Qiziltepa tuman'),
(88, 10, 'Конимех туман', 'Konimex tuman', 'Конимех туман', 'Konimex tuman'),
(89, 10, 'Учқудуқ туман', 'Uchquduq tuman', 'Учқудуқ туман', 'Uchquduq tuman'),
(90, 3, 'Наманган шаҳар', 'Namangan shahar', 'Наманган шаҳар', 'Namangan shahar'),
(91, 3, 'Мингбулоқ тумани', 'Mingbuloq tumani', 'Мингбулоқ тумани', 'Mingbuloq tumani'),
(92, 3, 'Косонсой тумани', 'Kosonsoy tumani', 'Косонсой тумани', 'Kosonsoy tumani'),
(93, 3, 'Наманган тумани', 'Namangan tumani', 'Наманган тумани', 'Namangan tumani'),
(94, 3, 'Норин тумани', 'Norin tumani', 'Норин тумани', 'Norin tumani'),
(95, 3, 'Тўрақўрғон тумани', 'To\'raqo\'rғon tumani', 'Тўрақўрғон тумани', 'To\'raqo\'rғon tumani'),
(96, 3, 'Уйчи тумани', 'Uychi tumani', 'Уйчи тумани', 'Uychi tumani'),
(97, 3, 'Учқўрғон тумани', 'Uchqo\'rғon tumani', 'Учқўрғон тумани', 'Uchqo\'rғon tumani'),
(98, 3, 'Чортоқ тумани', 'Чortoq tumani', 'Чортоқ тумани', 'Чortoq tumani'),
(99, 3, 'Чуст тумани', 'Чust tumani', 'Чуст тумани', 'Чust tumani'),
(100, 3, 'Янгиқўрғон тумани', 'Яngiqo\'rғon tumani', 'Янгиқўрғон тумани', 'Яngiqo\'rғon tumani'),
(101, 8, 'Самарқанд шаҳар', 'Samarqand shahar', 'Самарқанд шаҳар', 'Samarqand shahar'),
(102, 8, 'Ургут туман', 'Urgut tuman', 'Ургут туман', 'Urgut tuman'),
(103, 8, 'Пахтачи туман', 'Paxtachi tuman', 'Пахтачи туман', 'Paxtachi tuman'),
(104, 8, 'Каттақўрғон туман', 'Kattaqo\'rғon tuman', 'Каттақўрғон туман', 'Kattaqo\'rғon tuman'),
(105, 8, 'Самарқанд туман', 'Samarqand tuman', 'Самарқанд туман', 'Samarqand tuman'),
(106, 8, 'Булунғур туман', 'Bulunғur tuman', 'Булунғур туман', 'Bulunғur tuman'),
(107, 8, 'Жомбой туман', 'Jomboy tuman', 'Жомбой туман', 'Jomboy tuman'),
(108, 8, 'Қўшробод туман', 'Qo\'shrobod tuman', 'Қўшробод туман', 'Qo\'shrobod tuman'),
(109, 8, 'Нарпай туман', 'Narpay tuman', 'Нарпай туман', 'Narpay tuman'),
(110, 8, 'Тайлоқ туман', 'Tayloq tuman', 'Тайлоқ туман', 'Tayloq tuman'),
(111, 8, 'Пастдарғом туман', 'Pastdarғom tuman', 'Пастдарғом туман', 'Pastdarғom tuman'),
(112, 8, 'Нуробод туман', 'Nurobod tuman', 'Нуробод туман', 'Nurobod tuman'),
(113, 8, 'Каттақўрғон шаҳар', 'Kattaqo\'rғon shahar', 'Каттақўрғон шаҳар', 'Kattaqo\'rғon shahar'),
(114, 8, 'Пайариқ туман', 'Payariq tuman', 'Пайариқ туман', 'Payariq tuman'),
(115, 8, 'Оқдарё туман', 'Oqdaryo tuman', 'Оқдарё туман', 'Oqdaryo tuman'),
(116, 8, 'Иштихон туман', 'Ishtixon tuman', 'Иштихон туман', 'Ishtixon tuman'),
(117, 13, 'Термиз шаҳар', 'Termiz shahar', 'Термиз шаҳар', 'Termiz shahar'),
(118, 13, 'Термиз туман', 'Termiz tuman', 'Термиз туман', 'Termiz tuman'),
(119, 13, 'Музработ туман', 'Muzrabot tuman', 'Музработ туман', 'Muzrabot tuman'),
(120, 13, 'Олтинсой туман', 'Oltinsoy tuman', 'Олтинсой туман', 'Oltinsoy tuman'),
(121, 13, 'Денов туман', 'Denov tuman', 'Денов туман', 'Denov tuman'),
(122, 13, 'Сариосиё туман', 'Sariosiyo tuman', 'Сариосиё туман', 'Sariosiyo tuman'),
(123, 13, 'Қизириқ туман', 'Qiziriq tuman', 'Қизириқ туман', 'Qiziriq tuman'),
(124, 13, 'Жарқўрғон туман', 'Jarqo\'rғon tuman', 'Жарқўрғон туман', 'Jarqo\'rғon tuman'),
(125, 13, 'Ангор туман', 'Angor tuman', 'Ангор туман', 'Angor tuman'),
(126, 13, 'Қумқўрғон туман', 'Qumqo\'rғon tuman', 'Қумқўрғон туман', 'Qumqo\'rғon tuman'),
(127, 13, 'Бойсун туман', 'Boysun tuman', 'Бойсун туман', 'Boysun tuman'),
(128, 13, 'Шўрчи туман', 'SHo\'rchi tuman', 'Шўрчи туман', 'SHo\'rchi tuman'),
(129, 13, 'Шеробод туман', 'SHerobod tuman', 'Шеробод туман', 'SHerobod tuman'),
(130, 13, 'Узун туман', 'Uzun tuman', 'Узун туман', 'Uzun tuman'),
(131, 12, 'Гулистон шаҳар', 'Guliston shahar', 'Гулистон шаҳар', 'Guliston shahar'),
(132, 12, 'Янгиер туман', 'Яngier tuman', 'Янгиер туман', 'Яngier tuman'),
(133, 12, 'Ширин туман', 'SHirin tuman', 'Ширин туман', 'SHirin tuman'),
(134, 12, 'Оқолтин тумани', 'Oqoltin tumani', 'Оқолтин тумани', 'Oqoltin tumani'),
(135, 12, 'Боёвут туман', 'Boyovut tuman', 'Боёвут туман', 'Boyovut tuman'),
(136, 12, 'Гулистон туман', 'Guliston tuman', 'Гулистон туман', 'Guliston tuman'),
(137, 12, 'Мирзаобод туман', 'Mirzaobod tuman', 'Мирзаобод туман', 'Mirzaobod tuman'),
(138, 12, 'Сайхунобод туман', 'Sayxunobod tuman', 'Сайхунобод туман', 'Sayxunobod tuman'),
(139, 12, 'Сардоба туман', 'Sardoba tuman', 'Сардоба туман', 'Sardoba tuman'),
(140, 12, 'Сирдарё туман', 'Sirdaryo tuman', 'Сирдарё туман', 'Sirdaryo tuman'),
(141, 12, 'Ховос туман', 'Xovos tuman', 'Ховос туман', 'Xovos tuman'),
(142, 5, 'Ангрен шаҳар', 'Angren shahar', 'Ангрен шаҳар', 'Angren shahar'),
(143, 5, 'Бекобод шаҳар', 'Bekobod shahar', 'Бекобод шаҳар', 'Bekobod shahar'),
(144, 5, 'Олмалиқ шаҳар', 'Olmaliq shahar', 'Олмалиқ шаҳар', 'Olmaliq shahar'),
(145, 5, 'Чирчиқ шаҳар', 'Чirchiq shahar', 'Чирчиқ шаҳар', 'Чirchiq shahar'),
(146, 5, 'Бекобод туман', 'Bekobod tuman', 'Бекобод туман', 'Bekobod tuman'),
(147, 5, 'Бўстонлиқ туман', 'Bo\'stonliq tuman', 'Бўстонлиқ туман', 'Bo\'stonliq tuman'),
(148, 5, 'Қибрай туман', 'Qibray tuman', 'Қибрай туман', 'Qibray tuman'),
(149, 5, 'Зангиота туман', 'Zangiota tuman', 'Зангиота туман', 'Zangiota tuman'),
(150, 5, 'Қуйичирчиқ туман', 'Quyichirchiq tuman', 'Қуйичирчиқ туман', 'Quyichirchiq tuman'),
(151, 5, 'Оққўрғон туман', 'Oqqo\'rғon tuman', 'Оққўрғон туман', 'Oqqo\'rғon tuman'),
(152, 5, 'Паркент туман', 'Parkent tuman', 'Паркент туман', 'Parkent tuman'),
(154, 5, 'Ўртачирчиқ туман', 'Ўrtachirchiq tuman', 'Ўртачирчиқ туман', 'Ўrtachirchiq tuman'),
(155, 5, 'Чиноз туман', 'Чinoz tuman', 'Чиноз туман', 'Чinoz tuman'),
(156, 5, 'Юқоричирчиқ туман', 'Юqorichirchiq tuman', 'Юқоричирчиқ туман', 'Юqorichirchiq tuman'),
(157, 5, 'Бўка туман', 'Bo\'ka tuman', 'Бўка туман', 'Bo\'ka tuman'),
(158, 5, 'Янгийўл туман', 'Яngiyo\'l tuman', 'Янгийўл туман', 'Яngiyo\'l tuman'),
(159, 5, 'Охангарон туман', 'Oxangaron tuman', 'Охангарон туман', 'Oxangaron tuman'),
(160, 15, 'Фарғона шаҳар ', 'Farғona shahar', 'Фарғона шаҳар ', 'Farғona shahar'),
(161, 15, 'Марғилон шаҳар', 'Marғilon shahar', 'Марғилон шаҳар', 'Marғilon shahar'),
(162, 15, 'Қувасой шаҳар', 'Quvasoy shahar', 'Қувасой шаҳар', 'Quvasoy shahar'),
(163, 15, 'Қўқон шаҳар', 'Qo\'qon shahar', 'Қўқон шаҳар', 'Qo\'qon shahar'),
(164, 15, 'Боғдод туман', 'Boғdod tuman', 'Боғдод туман', 'Boғdod tuman'),
(165, 15, 'Бувайда туман', 'Buvayda tuman', 'Бувайда туман', 'Buvayda tuman'),
(166, 15, 'Данғара туман ', 'Danғara tuman', 'Данғара туман ', 'Danғara tuman'),
(167, 15, 'Ёзёвон туман', 'Ёzyovon tuman', 'Ёзёвон туман', 'Ёzyovon tuman'),
(168, 15, 'Олтиариқ туман', 'Oltiariq tuman', 'Олтиариқ туман', 'Oltiariq tuman'),
(169, 15, 'Бешариқ туман', 'Beshariq tuman', 'Бешариқ туман', 'Beshariq tuman'),
(170, 15, 'Қўштепа туман', 'Qo\'shtepa tuman', 'Қўштепа туман', 'Qo\'shtepa tuman'),
(171, 15, 'Риштон туман', 'Rishton tuman', 'Риштон туман', 'Rishton tuman'),
(172, 15, 'Сўх туман', 'So\'x tuman', 'Сўх туман', 'So\'x tuman'),
(173, 15, 'Тошлоқ туман', 'Toshloq tuman', 'Тошлоқ туман', 'Toshloq tuman'),
(174, 15, 'Учкўприк туман', 'Uchko\'prik tuman', 'Учкўприк туман', 'Uchko\'prik tuman'),
(175, 15, 'Фарғона туман', 'Farғona tuman', 'Фарғона туман', 'Farғona tuman'),
(176, 15, 'Ўзбекистон туман', 'Ўzbekiston tuman', 'Ўзбекистон туман', 'Ўzbekiston tuman'),
(177, 15, 'Қува туман', 'Quva tuman', 'Қува туман', 'Quva tuman'),
(178, 15, 'Фурқат туман', 'Furqat tuman', 'Фурқат туман', 'Furqat tuman'),
(179, 4, 'Урганч шаҳар', 'Urganch shahar', 'Урганч шаҳар', 'Urganch shahar'),
(180, 4, 'Боғот туман', 'Boғot tuman', 'Боғот туман', 'Boғot tuman'),
(181, 4, 'Урганч туман', 'Urganch tuman', 'Урганч туман', 'Urganch tuman'),
(182, 4, 'Қўшкўпир туман', 'Qo\'shko\'pir tuman', 'Қўшкўпир туман', 'Qo\'shko\'pir tuman'),
(183, 4, 'Хонка туман', 'Xonka tuman', 'Хонка туман', 'Xonka tuman'),
(184, 4, 'Янгиариқ туман', 'Яngiariq tuman', 'Янгиариқ туман', 'Яngiariq tuman'),
(185, 4, 'Хива туман', 'Xiva tuman', 'Хива туман', 'Xiva tuman'),
(186, 4, 'Янгибозор туман', 'Яngibozor tuman', 'Янгибозор туман', 'Яngibozor tuman'),
(187, 4, 'Хозарасп туман', 'Xozarasp tuman', 'Хозарасп туман', 'Xozarasp tuman'),
(188, 4, 'Шовот туман', 'SHovot tuman', 'Шовот туман', 'SHovot tuman'),
(189, 4, 'Гурлан туман', 'Gurlan tuman', 'Гурлан туман', 'Gurlan tuman'),
(190, 6, 'Бектемир тумани', 'Bektemir tumani', 'Бектемир тумани', 'Bektemir tumani'),
(191, 6, 'Миробод тумани', 'Mirobod tumani', 'Миробод тумани', 'Mirobod tumani'),
(192, 6, 'М.Улуғбек тумани', 'M.Uluғbek tumani', 'М.Улуғбек тумани', 'M.Uluғbek tumani'),
(193, 6, 'Сергели тумани', 'Sergeli tumani', 'Сергели тумани', 'Sergeli tumani'),
(194, 6, 'Олмазор тумани', 'Olmazor tumani', 'Олмазор тумани', 'Olmazor tumani'),
(195, 6, 'Учтепа тумани', 'Uchtepa tumani', 'Учтепа тумани', 'Uchtepa tumani'),
(196, 6, 'Яшнобод тумани', 'Яshnobod tumani', 'Яшнобод тумани', 'Яshnobod tumani'),
(197, 6, 'Чилонзор тумани', 'Чilonzor tumani', 'Чилонзор тумани', 'Чilonzor tumani'),
(198, 6, 'Шайхонтохур тумани', 'SHayxontoxur tumani', 'Шайхонтохур тумани', 'SHayxontoxur tumani'),
(199, 6, 'Юнусобод тумани', 'Юnusobod tumani', 'Юнусобод тумани', 'Юnusobod tumani'),
(200, 6, 'Яккасарой тумани', 'Яkkasaroy tumani', 'Яккасарой тумани', 'Яkkasaroy tumani'),
(201, 5, 'Пискент туман', 'Piskent tuman', 'Пискент туман', 'Piskent tuman');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
