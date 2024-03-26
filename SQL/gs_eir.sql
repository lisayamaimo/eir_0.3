-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 3 月 25 日 15:59
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_eir`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_eir`
--

CREATE TABLE `gs_eir` (
  `ID` int(11) NOT NULL,
  `shipping_line` varchar(256) NOT NULL,
  `place` varchar(256) NOT NULL,
  `date_time` datetime NOT NULL,
  `carrier` varchar(256) NOT NULL,
  `vessel` varchar(256) NOT NULL,
  `voy` varchar(256) NOT NULL,
  `bkg_bl_no` varchar(256) NOT NULL,
  `container_no` varchar(256) NOT NULL,
  `seal_no` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `pod` varchar(256) NOT NULL,
  `discharging_port` varchar(256) NOT NULL,
  `loading_port` varchar(256) NOT NULL,
  `por` varchar(256) NOT NULL,
  `tare_weight` varchar(256) NOT NULL,
  `imo_no` varchar(256) NOT NULL,
  `mg_set_no` varchar(256) NOT NULL,
  `ref_temperature` varchar(256) NOT NULL,
  `shipper_consignee` varchar(256) NOT NULL,
  `yard_location` varchar(256) NOT NULL,
  `condition` varchar(256) NOT NULL,
  `destination` varchar(256) NOT NULL,
  `return_place` varchar(256) NOT NULL,
  `remarks` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_eir`
--

INSERT INTO `gs_eir` (`ID`, `shipping_line`, `place`, `date_time`, `carrier`, `vessel`, `voy`, `bkg_bl_no`, `container_no`, `seal_no`, `size`, `type`, `status`, `pod`, `discharging_port`, `loading_port`, `por`, `tare_weight`, `imo_no`, `mg_set_no`, `ref_temperature`, `shipper_consignee`, `yard_location`, `condition`, `destination`, `return_place`, `remarks`) VALUES
(1, 'ああああああ', '', '2024-01-20 05:35:41', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_eir`
--
ALTER TABLE `gs_eir`
  ADD PRIMARY KEY (`ID`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_eir`
--
ALTER TABLE `gs_eir`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
