-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 28 Mar 2012 ob 04:04 PM
-- Različica strežnika: 5.1.49
-- Različica PHP: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Podatkovna zbirka: `ops`
--

-- --------------------------------------------------------

--
-- Struktura tabele `Omw`
--

DROP TABLE IF EXISTS `Omw`;
CREATE TABLE IF NOT EXISTS `Omw` (
  `idomw` int(11) NOT NULL AUTO_INCREMENT,
  `Izdajatelj` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Kupec` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Kartica` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Registracija` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Datum_TRX` datetime DEFAULT NULL,
  `Produkt_INV` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Kolicina` float DEFAULT NULL,
  `Bruto` float DEFAULT NULL,
  `DDV_valuta_kupca` float DEFAULT NULL,
  `Dobavnica` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Stanje_km` int(11) DEFAULT '0',
  `Popr_Stanja_km` int(11) DEFAULT '0',
  `Vnos_voznika` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Drzava_dobave` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Prodajno_mesto` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Produkt_DEL` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Cena_enoto` float DEFAULT NULL,
  `Znesek` float DEFAULT NULL,
  `Popust` float DEFAULT NULL,
  `Pribitek` float DEFAULT NULL,
  `DDV` float DEFAULT NULL,
  `Valuta_prodaje` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Racun_st` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Datum_racuna` date DEFAULT NULL,
  `Obracunan` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Status` int(11) DEFAULT '0',
  `Dobavitelj` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Str_mesto_1` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Str_mesto_2` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Referencna_st` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Tip_zapisa` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Amount_other` float DEFAULT NULL,
  `listprice` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Datum_TRX_do` date DEFAULT NULL,
  PRIMARY KEY (`idomw`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=1 ;

--
-- Odloži podatke za tabelo `Omw`
--


-- --------------------------------------------------------

--
-- Struktura tabele `Petrol`
--

DROP TABLE IF EXISTS `Petrol`;
CREATE TABLE IF NOT EXISTS `Petrol` (
  `idPetrol` int(11) NOT NULL AUTO_INCREMENT,
  `Kupec` varchar(45) COLLATE cp1250_bin NOT NULL,
  `St_kartice` varchar(7) COLLATE cp1250_bin NOT NULL,
  `Reg_st_vozila` varchar(45) COLLATE cp1250_bin NOT NULL,
  `St_racuna` int(11) NOT NULL DEFAULT '0',
  `BL_ST` varchar(45) COLLATE cp1250_bin NOT NULL,
  `SifraBL_ST` int(11) NOT NULL,
  `NazivBL_ST` varchar(45) COLLATE cp1250_bin NOT NULL,
  `Sifra_pr_mesta` int(11) NOT NULL,
  `Naziv_pr_mesta` varchar(45) COLLATE cp1250_bin NOT NULL,
  `Datum_nakup` date NOT NULL,
  `VCE` varchar(45) COLLATE cp1250_bin NOT NULL,
  `Kolicina` float NOT NULL,
  `Cena` float NOT NULL,
  `Popust` float DEFAULT NULL,
  `Znesek_procent` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Znesek` float NOT NULL,
  `Cena_brez_DDV` float NOT NULL,
  `DDV_procent` int(11) NOT NULL DEFAULT '20',
  `Znesek_DDV` float NOT NULL,
  `Datum_izst_racuna` date DEFAULT NULL,
  `Datum_zap_racuna` date DEFAULT NULL,
  `ID_soferja` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Stanje_km_stevca` int(11) DEFAULT NULL,
  `Potni_nalog` varchar(45) COLLATE cp1250_bin DEFAULT NULL,
  `Cas_trans` time NOT NULL,
  `Arhiv` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idPetrol`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=1 ;

--
-- Odloži podatke za tabelo `Petrol`
--


-- --------------------------------------------------------

--
-- Struktura tabele `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `idtable1` int(11) NOT NULL AUTO_INCREMENT,
  `St_kartice1` varchar(7) COLLATE cp1250_bin NOT NULL,
  `Cost_center` varchar(7) COLLATE cp1250_bin NOT NULL,
  `Lokacija_koda` varchar(4) COLLATE cp1250_bin NOT NULL,
  `Func_area` varchar(3) COLLATE cp1250_bin NOT NULL,
  PRIMARY KEY (`idtable1`),
  FULLTEXT KEY `Lokacija_koda` (`Lokacija_koda`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=150 ;

--
-- Odloži podatke za tabelo `table1`
--

INSERT INTO `table1` (`idtable1`, `St_kartice1`, `Cost_center`, `Lokacija_koda`, `Func_area`) VALUES
(134, '5415773', '9908LJ1', '7LJU', '111'),
(133, '5415468', '9908LJ1', '7LJU', '112'),
(132, '5415278', '9908LJ1', '7LJU', '800'),
(131, '5415104', '9908LJ1', '7LJU', '111'),
(130, '6780084', '9908LJ1', '7LJU', '304'),
(129, '6634638', '9908LJ1', '7LJU', '304'),
(128, '6509541', '9908LJ1', '7LJU', '700'),
(127, '6403596', '9908LJ1', '7LJU', '112'),
(126, '6402622', '9908LJ1', '7LJU', '010'),
(125, '6402614', '9908LJ1', '7LJU', '010'),
(124, '6402606', '9908LJ1', '7LJU', '112'),
(123, '6402580', '9908LJ1', '7LJU', '112'),
(122, '6293021', '9908LJ1', '7LJU', '210'),
(121, '6293013', '9908LJ1', '7LJU', '111'),
(120, '6293005', '9908LJ1', '7LJU', '111'),
(119, '6292999', '9908LJ1', '7LJU', '111'),
(118, '6292981', '9908LJ1', '7LJU', '111'),
(117, '6292973', '9908LJ1', '7LJU', '111'),
(116, '6292965', '9908LJ1', '7LJU', '111'),
(115, '6292957', '9908LJ1', '7LJU', '010'),
(114, '6292940', '9908LJ1', '7LJU', '010'),
(113, '6292932', '9908LJ1', '7LJU', '111'),
(112, '6292924', '9908LJ1', '7LJU', '010'),
(111, '6292916', '9908LJ1', '7LJU', '010'),
(110, '6292908', '9908LJ1', '7LJU', '111'),
(109, '6292890', '9908LJ1', '7LJU', '111'),
(108, '6292882', '9908LJ1', '7LJU', '010'),
(107, '6292874', '9908LJ1', '7LJU', '111'),
(106, '6292866', '9908LJ1', '7LJU', '111'),
(105, '6292841', '9908LJ1', '7LJU', '111'),
(104, '6292833', '9908LJ1', '7LJU', '111'),
(103, '6292825', '9908LJ1', '7LJU', '111'),
(102, '6292783', '9908LJ1', '7LJU', '111'),
(101, '6292775', '9908LJ1', '7LJU', '111'),
(100, '6292734', '9908LJ1', '7LJU', '111'),
(99, '6292577', '9908LJ1', '7LJU', '112'),
(98, '5458062', '9908LJ1', '7LJU', '111'),
(97, '5415831', '9908LJ1', '7LJU', '010'),
(96, '5415807', '9908LJ1', '7LJU', '111'),
(95, '5415799', '9908LJ1', '7LJU', '010'),
(94, '5415781', '9908LJ1', '7LJU', '111'),
(93, '5415765', '9908LJ1', '7LJU', '111'),
(92, '5415690', '9908LJ1', '7LJU', '111'),
(91, '5415658', '9908LJ1', '7LJU', '111'),
(90, '5415591', '9908LJ1', '7LJU', '112'),
(89, '5415484', '9908LJ1', '7LJU', '111'),
(88, '5415310', '9908LJ1', '7LJU', '301'),
(87, '5415294', '9908LJ1', '7LJU', '500'),
(86, '5415286', '9908LJ1', '7LJU', '111'),
(85, '5415252', '9908LJ1', '7LJU', '600'),
(84, '5415237', '9908LJU', '7LJU', '000'),
(83, '5415211', '9908LJ1', '7LJU', '304'),
(82, '5415195', '9908LJ1', '7LJU', '400'),
(81, '5415179', '9908LJ1', '7LJU', '304'),
(80, '5415153', '9908LJ1', '7LJU', '303'),
(79, '5415096', '9908LJ1', '7LJU', '111'),
(78, '5415088', '9908LJ1', '7LJU', '111'),
(148, '5415070', '9908LJ1', '7LJU', '111'),
(76, '5415054', '9908LJ1', '7LJU', '111'),
(75, '5415039', '9908LJ1', '7LJU', '111'),
(74, '5415013', '9908LJ1', '7LJU', '111'),
(73, '5414974', '9908LJ1', '7LJU', '111'),
(72, '5414958', '9908LJ1', '7LJU', '111'),
(71, '5414933', '9908LJ1', '7LJU', '111'),
(70, '5414917', '9908LJ1', '7LJU', '111'),
(69, '5414891', '9908LJ1', '7LJU', '111'),
(135, '6292858', '9908LJ1', '7LJU', '111'),
(136, '6292536', '9908LJ1', '7LJU', '000'),
(143, '5415112', '9908LJ1', '7LJU', '240'),
(149, '5415111', '9908LJ1', '7LJU', '111');

-- --------------------------------------------------------

--
-- Struktura tabele `table2`
--

DROP TABLE IF EXISTS `table2`;
CREATE TABLE IF NOT EXISTS `table2` (
  `idtable2` int(11) NOT NULL AUTO_INCREMENT,
  `Func_area_test` varchar(3) COLLATE cp1250_bin NOT NULL,
  `Sifra_BL_ST` varchar(7) COLLATE cp1250_bin NOT NULL,
  `Material_group` varchar(10) COLLATE cp1250_bin NOT NULL,
  `GLAccount_override` varchar(20) COLLATE cp1250_bin NOT NULL,
  `Short_desc` varchar(40) COLLATE cp1250_bin NOT NULL,
  PRIMARY KEY (`idtable2`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=81 ;

--
-- Odloži podatke za tabelo `table2`
--

INSERT INTO `table2` (`idtable2`, `Func_area_test`, `Sifra_BL_ST`, `Material_group`, `GLAccount_override`, `Short_desc`) VALUES
(1, '111', '62', '03020010', '590300', 'Gorivo tovornih vozil'),
(2, '112', '62', '03020010', '590300', 'Gorivo tovornih vozil'),
(3, '010', '62', '03020010', '590300', 'Gorivo tovornih vozil'),
(4, '000', '62', '03020010', '590300', 'Gorivo tovornih vozil'),
(5, '111', '1568', '02050050', '631500', 'Cestnine tovornih vozil'),
(6, '112', '1568', '02050050', '631500', 'Cestnine tovornih vozil'),
(7, '010', '1568', '02050050', '631500', 'Cestnine tovornih vozil'),
(8, '303', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(9, '303', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(10, '303', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(11, '303', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(12, '303', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(13, '303', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(14, '303', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(15, '303', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(16, '304', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(17, '304', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(18, '304', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(19, '304', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(20, '304', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(21, '304', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(22, '304', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(23, '304', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(24, '500', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(25, '500', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(26, '500', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(27, '500', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(28, '500', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(29, '500', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(30, '500', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(31, '500', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(32, '600', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(33, '600', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(34, '600', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(35, '600', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(36, '600', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(37, '600', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(38, '600', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(39, '600', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(40, '700', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(41, '700', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(42, '700', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(43, '700', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(44, '700', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(45, '700', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(46, '700', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(47, '700', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(48, '210', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(49, '210', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(50, '210', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(51, '210', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(52, '210', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(53, '210', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(54, '210', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(55, '210', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(56, '301', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(57, '301', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(58, '301', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(59, '301', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(60, '301', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(61, '301', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(62, '301', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(63, '301', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(64, '800', '18', '03025010', '590400', 'Gorivo osebnih vozil'),
(65, '800', '23230', '03020030', '580200', 'Vitrex zimski 1L Petrol'),
(66, '800', '30963', '03020030', '580200', 'Vitrex zimski 3L Sonax'),
(67, '800', '36080', '03020030', '580200', 'Vitrex letni 1L Petrol'),
(68, '800', '50854', '03020030', '580200', 'Vitrex zimski 4L Petrol'),
(69, '800', '90233', '03020030', '580200', 'Kombo Vitrex 4L + strgalo'),
(70, '800', '891', '02130030', '621800', 'Sesanje osebnih vozil'),
(71, '800', '937', '02130030', '621800', 'Pranje osebnih vozil'),
(72, '240', '62', '03020010', '590300', 'Gorivo tovornih vozil'),
(73, '400', '62', '03025010', '590400', 'Gorivo osebnih vozil'),
(80, '000', '99847', 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Struktura tabele `tableh`
--

DROP TABLE IF EXISTS `tableh`;
CREATE TABLE IF NOT EXISTS `tableh` (
  `idtableh` int(11) NOT NULL AUTO_INCREMENT,
  `RecType` varchar(4) COLLATE cp1250_bin DEFAULT 'H011',
  `SourceSys` varchar(10) COLLATE cp1250_bin DEFAULT 'SI_SP_SYS',
  `MessageType` varchar(30) COLLATE cp1250_bin DEFAULT 'ZEBO_PURCH_ORD',
  `MessageGrp` varchar(14) COLLATE cp1250_bin DEFAULT NULL,
  `CompCode` varchar(10) COLLATE cp1250_bin DEFAULT 'SI11',
  `PORef` int(20) DEFAULT NULL,
  `Vendor` varchar(10) COLLATE cp1250_bin DEFAULT '0002061537',
  `LineCnt` int(11) DEFAULT NULL,
  `Currency` varchar(5) COLLATE cp1250_bin DEFAULT 'EUR',
  `DocDate` varchar(10) COLLATE cp1250_bin DEFAULT NULL,
  `RecDate` varchar(10) COLLATE cp1250_bin DEFAULT NULL,
  `Purchorg` varchar(4) COLLATE cp1250_bin DEFAULT 'SI01',
  `Purchgrp` varchar(3) COLLATE cp1250_bin DEFAULT '521',
  PRIMARY KEY (`idtableh`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=8 ;

--
-- Odloži podatke za tabelo `tableh`
--

INSERT INTO `tableh` (`idtableh`, `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`) VALUES
(1, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1467, '0002061537', 4, 'EUR', '20120314', '20120314', 'SI01', '521'),
(2, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1468, '0002061537', 3, 'EUR', '20120314', '20120314', 'SI01', '521'),
(3, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1469, '0002061537', 1, 'EUR', '20120314', '20120314', 'SI01', '521'),
(4, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1470, '0002061537', 1, 'EUR', '20120314', '20120314', 'SI01', '521'),
(5, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1471, '0002061537', 0, 'EUR', '20120314', '20120314', 'SI01', '521'),
(6, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1472, '0002061537', 1, 'EUR', '20120314', '20120314', 'SI01', '521'),
(7, 'H011', 'SI_SP_SYS', 'ZEBO_PURCH_ORD', NULL, 'SI11', 1473, '0002061537', 1, 'EUR', '20120314', '20120314', 'SI01', '521');

-- --------------------------------------------------------

--
-- Struktura tabele `tablel`
--

DROP TABLE IF EXISTS `tablel`;
CREATE TABLE IF NOT EXISTS `tablel` (
  `idtablel` int(11) NOT NULL AUTO_INCREMENT,
  `RecType` varchar(4) COLLATE cp1250_bin DEFAULT 'L011',
  `Lokacija_koda` varchar(6) COLLATE cp1250_bin DEFAULT NULL,
  `Material_group` varchar(10) COLLATE cp1250_bin DEFAULT NULL,
  `Cost_center` varchar(10) COLLATE cp1250_bin DEFAULT NULL,
  `Func_area` varchar(16) COLLATE cp1250_bin DEFAULT NULL,
  `TaxCode` varchar(10) COLLATE cp1250_bin DEFAULT NULL,
  `ShortText` varchar(40) COLLATE cp1250_bin DEFAULT NULL,
  `Cena` float DEFAULT NULL,
  `Kolicina` float DEFAULT NULL,
  `UnitOfMeas` varchar(5) COLLATE cp1250_bin DEFAULT 'EA',
  `GLAccount_override` varchar(20) COLLATE cp1250_bin DEFAULT NULL,
  `Short_desc` varchar(40) COLLATE cp1250_bin DEFAULT NULL,
  PRIMARY KEY (`idtablel`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1250 COLLATE=cp1250_bin AUTO_INCREMENT=1 ;

--
-- Odloži podatke za tabelo `tablel`
--

