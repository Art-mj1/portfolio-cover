-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-18 10:41
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
-- 테이블 구조 `portfolio_mem`
--

CREATE TABLE `portfolio_mem` (
  `Portfolio_mem_idx` int(11) NOT NULL COMMENT '회원 고유번호',
  `Portfolio_mem_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 아이디',
  `Portfolio_mem_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 이름',
  `Portfolio_mem_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '회원 이메일',
  `Portfolio_mem_pass` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '회원 비밀번호',
  `Portfolio_mem_reg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 가입일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `portfolio_mem`
--

INSERT INTO `portfolio_mem` (`Portfolio_mem_idx`, `Portfolio_mem_id`, `Portfolio_mem_name`, `Portfolio_mem_email`, `Portfolio_mem_pass`, `Portfolio_mem_reg`) VALUES
(1, 'port', '포트', '1212@12.com', '1256', '2021-08-18'),
(2, 'port1', '포트1', 'red@red.com', '1234', '2021-08-18');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `portfolio_mem`
--
ALTER TABLE `portfolio_mem`
  ADD PRIMARY KEY (`Portfolio_mem_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `portfolio_mem`
--
ALTER TABLE `portfolio_mem`
  MODIFY `Portfolio_mem_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '회원 고유번호', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
