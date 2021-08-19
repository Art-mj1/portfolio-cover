-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-08-19 07:54
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
  `Portfolio_writer` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글 작성자',
  `Portfolio_pass` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글 비밀번호',
  `Portfolio_tit` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '포트폴리오 글 제목',
  `Portfolio_con` text CHARACTER SET utf8 NOT NULL COMMENT '포트폴리오 내용',
  `Portfoilo_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '포트폴리오 등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `portfolio_write`
--

INSERT INTO `portfolio_write` (`Portfolio_idx`, `Portfolio_writer`, `Portfolio_pass`, `Portfolio_tit`, `Portfolio_con`, `Portfoilo_reg`) VALUES
(1, '미완예찬', '0', 'ㅁㅁ', 'ㅁㅁ', '2021'),
(2, '남자를 몰라', '0', '안녕하세요', '2번째 글', '2021'),
(3, '1st', '0', '안녕하세요', '3번째 글', '2021'),
(4, '가시', '0', '안녕하세요', '4번째 글', '2021'),
(5, '모놀로그', '0', '안녕하세요', '4', '2021'),
(6, '겁쟁이', '0', '안녕하세요', '5', '2021-08-16'),
(7, '사랑은 가슴이 시킨다', '0', '안녕하세요', '7', '2021-08-16'),
(8, '어쩌면', '0', '글을 써봅니다.', '첫 입력', '2021-08-16'),
(9, 'Funny rock', '0', '자유롭게 글을 써주세요', '자유롭게 글을 남겨주세요.', '2021-08-17'),
(10, '일기', '0', '8월 17일 오늘의 일정', '오늘은 푸터완료 및 수정할 부분 3분의 1 고치기가 오전시간 목표입니다.', '2021-08-17'),
(11, '거짓말', '0', '다영언니 ', '나 이제 글도 넘기고 페이지도 넘어간다~ ㅋㄱㅋㄱㅋ', '2021-08-17'),
(12, '안녕', '0', '다영언니', '따라해서 만든 거지만 여전히 신기해~', '2021-08-17'),
(13, 'Just One', '0', '내가 쓸꺼야아아아', '여기는 내가 점령햇다 이 게시판은 내꺼다 내가 전세냈다고오~~~', '2021-08-17'),
(14, 'My Love', '0', '그랬드아', '배가 고픈거시었던 거시었었던 거시읏드아아아\r\n그리하야 우리는 롤링파스타로 원정을 떠났는드에\r\n투비컨티뉴우', '2021-08-17'),
(15, 'Dariling', '0', '메시지', '메시지를 남깁니다. ', '2021-08-17'),
(16, '비망록', '0', '글 작성합니다', '글 작성해보아요', '2021-08-17'),
(18, '버즈가 적어주면 좋겠다', '123456', '아날로그', '글 작성해봅니다', '2021-08-19'),
(19, '오늘 점심 모 먹지', '1234567', '안녕하세요', '비밀번호', '2021-08-19'),
(20, '어떡하지', '3456', '버즈가 보고 싶은데', '콘서트 가고 싶다', '2021-08-19'),
(21, '오랜만', '34567', '안녕', '오랜만이에요', '2021-08-19'),
(22, '버즈는 언제 컴백해', '7890', '아날로그', '0과 1이 끊임없이 돌아가는 세상은 오래된 건 쳐다보지도 않아.', '2021-08-19');

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
  MODIFY `Portfolio_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '포트폴리오 고유번호', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
