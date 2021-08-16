-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-16 10:48
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `portfolio_write`
--

CREATE TABLE `portfolio_write` (
  `Portfolio_idx` int(11) NOT NULL COMMENT '포트폴리오 고유번호',
  `Portfolio_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '포트폴리오 글 작성자',
  `Portfolio_con` text CHARACTER SET utf8 NOT NULL COMMENT '포트폴리오 내용',
  `Portfoilo_reg` varchar(20) NOT NULL COMMENT '포트폴리오 등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `portfolio_write`
--

INSERT INTO `portfolio_write` (`Portfolio_idx`, `Portfolio_tit`, `Portfolio_con`, `Portfoilo_reg`) VALUES
(1, 'ㅁㅁ', 'ㅁㅁ', '2021'),
(2, '안녕하세요', '2번째 글', '2021'),
(3, '안녕하세요', '3번째 글', '2021'),
(4, '안녕하세요', '4번째 글', '2021'),
(5, '안녕하세요', '4', '2021');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `portfolio_write`
--
ALTER TABLE `portfolio_write`
  ADD PRIMARY KEY (`Portfolio_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `portfolio_write`
--
ALTER TABLE `portfolio_write`
  MODIFY `Portfolio_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '포트폴리오 고유번호', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
