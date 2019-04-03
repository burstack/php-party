-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 17 december 2018 kl 10:49
-- Serverversion: 5.1.44
-- PHP-version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `party`
--

-- --------------------------------------------------------

--
-- Struktur för tabell `guests`
--

CREATE TABLE `guests` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `nname` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `civil` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Data i tabell `guests`
--

