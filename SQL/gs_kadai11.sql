-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 7 月 14 日 22:23
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_dbwatanabe`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `naiyou`, `indate`) VALUES
(1, '111', 'test1@test.jp', 'テスト１', '2019-10-05 15:36:52'),
(2, 'TEST2', 'test2@test.jp', 'テスト２', '2019-10-05 15:37:04'),
(3, 'TEST3', 'test3@test.jp', 'TEST3', '2019-10-05 15:37:29'),
(5, '沖縄旅行', '＃沖縄', '楽しかった', '2021-07-11 16:06:46'),
(6, '香港旅行', '＃香港', '美味しいものがたくさんあった', '2021-07-11 16:10:26');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_img_table`
--

CREATE TABLE `gs_img_table` (
  `id` int(11) NOT NULL,
  `img` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_img_table`
--

INSERT INTO `gs_img_table` (`id`, `img`) VALUES
(1, '20210711161111fe0302945e6560c0cbba72e6af5b4539.png'),
(2, '20210711161555fd6a0d1d9d3802be30939a0ca68a692c.png'),
(3, '20210711162430fd6a0d1d9d3802be30939a0ca68a692c.png'),
(4, '20210711165416fd6a0d1d9d3802be30939a0ca68a692c.png'),
(5, '20210711165621fd6a0d1d9d3802be30939a0ca68a692c.png'),
(6, '20210711170139d29576c891bb10a801770aeb5ec592fe.png'),
(7, '2021071118353343c1affc4ede7b615f785197bd288ef3.png'),
(8, '202107120556000167d223dcdf5ba607c0afc274152af1.png'),
(9, '20210713165043e6a0fa7518d52ec7d4267d50f564c563.png');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_posting_table`
--

CREATE TABLE `gs_posting_table` (
  `id1` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_posting_table`
--

INSERT INTO `gs_posting_table` (`id1`, `name`, `text`) VALUES
(3, '渡邊', 'aaa'),
(4, '飯塚', 'いいね'),
(5, 'ai', 'ok'),
(6, 'aa', 'jj'),
(7, 'おおお', 'ok'),
(8, '1ss', 'jj');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', '$2y$10$pj.tmkqQorUsot5u2hPN9eohftnGTSHm0pvEvi78bOncFKA1dmefK', 1, 0),
(2, 'テスト2一般', 'test2', '$2y$10$agmW79VukwoR7fdQRJGvD.WlEoa4BhCju6UCKTdXo6cpGJI6y0WEC', 0, 0),
(3, 'テスト３', 'test3', 'test3', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_img_table`
--
ALTER TABLE `gs_img_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_posting_table`
--
ALTER TABLE `gs_posting_table`
  ADD PRIMARY KEY (`id1`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルの AUTO_INCREMENT `gs_img_table`
--
ALTER TABLE `gs_img_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `gs_posting_table`
--
ALTER TABLE `gs_posting_table`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
