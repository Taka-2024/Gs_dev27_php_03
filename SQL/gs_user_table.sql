-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-04 16:05:01
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_asg03`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `ID` int(12) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(255) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`ID`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'test1', '$2y$10$WTyN2q/6vENTODEBvc3fSOaXQYMUkzugEeW7b8jq8m/7CVXpZ2YlO', 1, 0),
(2, 'test2', '$2y$10$aVqYAsfUg4vBDRrN5OY05Owfn24J7YS2ibmzF4AlxMkD2VrTnpTPW', 0, 0),
(3, 'test3', '$2y$10$x84lQz2Ch6/vomCTUnRzoOw52QnbBslIg6LX3IvJ3fxRIa1zvHb0m', 0, 0),
(9, 'test9', '$2y$10$f5csTD6HmkqpAv5bYnpYE.OJHOWWxjM5mmzkrUc/1gen1HsKprukK', 0, 0),
(10, 'test10', '$2y$10$XZJSD2tgSCUHMIDel92w8.kzi1J6ZIaOwllO/pQqsyB0LQhgHvrx.', 0, 0),
(11, 'test11', '$2y$10$K6vBPlmnKP2tPXXqqw2/cezynlcKNpD0OXUorlupwFLlFAplLwpIO', 0, 0),
(12, 'test12', '$2y$10$c2vsGc4JNL4mnwawkKux7uzyjQRNcmtP2eiCUdDvG7E4gNinoJ9v6', 0, 0),
(13, 'test13', '$2y$10$LcwjTiO3aPQtQLdVRdkvneso41vQdHh7U9kLLsDZJr0NLbb6k6A06', 0, 0),
(14, 'test15', '$2y$10$se88OzXatPDQLTHsJbGNiOHLIYqWz3/X29wicj9sxfE1flDKjHm9m', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`ID`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
