-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 24, 2020 at 06:58 AM
-- Server version: 5.7.28
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barlettah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankbranch`
--

DROP TABLE IF EXISTS `bankbranch`;
CREATE TABLE IF NOT EXISTS `bankbranch` (
  `code` varchar(3) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bankCode` varchar(3) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1056 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankbranch`
--

INSERT INTO `bankbranch` (`code`, `bname`, `bankCode`, `id`) VALUES
('089', 'OPERATIONS PROCESSING CENTER', '001', 1),
('091', 'EASTLEIGH', '001', 2),
('092', 'CENTRAL CLEARING CENTRE', '001', 3),
('093', 'MTWAPA', '001', 4),
('094', 'HEAD OFFICE', '001', 5),
('095', 'WOTE', '001', 6),
('097', 'SWIFT CENTER', '001', 7),
('098', 'PAYROLL CENTER', '001', 8),
('100', 'MOI AVENUE NAIROBI', '001', 9),
('101', 'KIPANDE HOUSE', '001', 10),
('102', 'TREASURY SQ MOMBASA', '001', 11),
('103', 'NAKURU', '001', 12),
('104', 'KICC', '001', 13),
('105', 'KISUMU', '001', 14),
('106', 'KERICHO', '001', 15),
('107', 'TOM MBOYA', '001', 16),
('108', 'THIKA', '001', 17),
('109', 'ELDORET', '001', 18),
('110', 'KAKAMEGA', '001', 19),
('111', 'KILINDINI', '001', 20),
('112', 'NYERI', '001', 21),
('113', 'INDUSTRIAL AREA', '001', 22),
('114', 'RIVER ROAD', '001', 23),
('115', 'MURANG\'A', '001', 24),
('116', 'EMBU', '001', 25),
('117', 'KANGEMA', '001', 26),
('119', 'KIAMBU', '001', 27),
('120', 'KARATINA', '001', 28),
('121', 'SIAYA', '001', 29),
('122', 'NYAHURURU', '001', 30),
('123', 'MERU', '001', 31),
('124', 'MUMIAS', '001', 32),
('125', 'NANYUKI', '001', 33),
('127', 'MOYALE', '001', 34),
('129', 'KIKUYU', '001', 35),
('130', 'TALA', '001', 36),
('131', 'KAJIADO', '001', 37),
('133', 'CUSTODY SERVICES', '001', 38),
('134', 'MATUU', '001', 39),
('135', 'KITUI', '001', 40),
('136', 'MVITA', '001', 41),
('137', 'JOGOO ROAD', '001', 42),
('139', 'CARD CENTRE', '001', 43),
('140', 'MARSABIT', '001', 44),
('141', 'SARIT CENTRE', '001', 45),
('142', 'LOITOKITOK', '001', 46),
('143', 'NANDI HILLS', '001', 47),
('144', 'LODWAR', '001', 48),
('145', 'UN GIGIRI', '001', 54),
('146', 'HOLA', '001', 55),
('147', 'RUIRU', '001', 56),
('148', 'MWINGI', '001', 57),
('149', 'KITALE', '001', 58),
('150', 'MANDERA', '001', 59),
('151', 'KAPENGURIA', '001', 60),
('152', 'KABARNET', '001', 61),
('153', 'WAJIR', '001', 62),
('154', 'MARALAL', '001', 63),
('155', 'LIMURU', '001', 64),
('157', 'UKUNDA', '001', 65),
('158', 'ITEN', '001', 66),
('159', 'GILGIL', '001', 67),
('161', 'ONGATA RONGAI', '001', 68),
('162', 'KITENGELA', '001', 69),
('163', 'ELDAMA RAVINE', '001', 70),
('164', 'KIBWEZI', '001', 71),
('166', 'KAPSABET', '001', 72),
('167', 'UNIVERSITY WAY', '001', 73),
('168', 'ELDORET WEST BRANCH', '001', 74),
('169', 'GARISSA', '001', 75),
('173', 'LAMU', '001', 76),
('174', 'KILIFI', '001', 77),
('175', 'MILIMANI/COMMUNITY', '001', 78),
('176', 'NYAMIRA', '001', 79),
('177', 'MUKURWEINI', '001', 80),
('180', 'VILLAGE MARKET', '001', 81),
('181', 'BOMET', '001', 82),
('183', 'MBALE', '001', 83),
('184', 'NAROK', '001', 84),
('185', 'OTHAYA', '001', 85),
('186', 'VOI', '001', 86),
('188', 'WEBUYE', '001', 87),
('189', 'SOTIK', '001', 88),
('190', 'NAIVASHA', '001', 89),
('191', 'KISII', '001', 90),
('192', 'MIGORI', '001', 91),
('193', 'GITHUNGURI', '001', 92),
('194', 'MACHAKOS', '001', 93),
('195', 'KERUGOYA', '001', 94),
('196', 'CHUKA', '001', 95),
('197', 'BUNGOMA', '001', 96),
('198', 'WUNDANYI', '001', 97),
('199', 'MALINDI', '001', 98),
('201', 'CAPITAL HILL', '001', 99),
('202', 'KAREN', '001', 100),
('203', 'LOKICHOGGIO', '001', 101),
('204', 'GATEWAY', '001', 102),
('205', 'BURUBURU', '001', 103),
('206', 'CHOGORIA', '001', 104),
('207', 'KANGARI', '001', 105),
('208', 'KIANYAGA', '001', 106),
('209', 'NKUBU', '001', 107),
('210', 'OL KALOU', '001', 108),
('211', 'MAKUYU', '001', 114),
('212', 'MWEA', '001', 115),
('213', 'NJAMBINI', '001', 116),
('214', 'GATUNDU', '001', 117),
('215', 'EMALI', '001', 118),
('216', 'ISIOLO', '001', 119),
('217', 'FLAMINGO SAVINGS', '001', 120),
('218', 'NJORO', '001', 121),
('219', 'MUTOMO', '001', 122),
('220', 'MARIAKANI', '001', 123),
('221', 'MPEKETONI', '001', 124),
('222', 'MTITO ANDEI', '001', 125),
('223', 'MTWAPA', '001', 126),
('224', 'TAVETA', '001', 127),
('225', 'KENGELENI', '001', 128),
('226', 'GARSEN', '001', 129),
('227', 'WATAMU', '001', 130),
('228', 'BONDO', '001', 131),
('229', 'BUSIA', '001', 132),
('230', 'HOMABAY', '001', 133),
('231', 'KAPSOWAR', '001', 134),
('232', 'KEHANCHA', '001', 135),
('233', 'KEROKA', '001', 136),
('234', 'KILGORIS', '001', 137),
('235', 'KIMILILI', '001', 138),
('236', 'LITEIN', '001', 139),
('237', 'LONDIANI', '001', 140),
('238', 'LUANDA', '001', 141),
('239', 'MALABA', '001', 142),
('240', 'MUHORONI', '001', 143),
('241', 'OYUGIS', '001', 144),
('242', 'UGUNJA', '001', 145),
('243', 'UNITED MALL', '001', 146),
('244', 'SEREM', '001', 147),
('245', 'SONDU', '001', 148),
('246', 'KISUMU WEST', '001', 149),
('247', 'MARIGAT', '001', 150),
('248', 'MOI\'S BRIDGE', '001', 151),
('249', 'MASHARIKI (I/A)', '001', 152),
('250', 'NARO MORU', '001', 153),
('251', 'KIRIAINI', '001', 154),
('252', 'EGERTON', '001', 155),
('253', 'MAUA', '001', 156),
('254', 'KAWANGWARE', '001', 157),
('255', 'KIMATHI', '001', 158),
('256', 'NAMANGA', '001', 159),
('257', 'GIKOMBA', '001', 160),
('258', 'KWALE', '001', 161),
('259', 'PRESTIGE PLAZA', '001', 162),
('260', 'KARIOBANGI', '001', 163),
('263', 'BIASHARA', '001', 164),
('266', 'NGARA', '001', 165),
('267', 'KYUSO', '001', 166),
('270', 'MASII', '001', 167),
('272', 'TOWN CENTRE', '001', 168),
('278', 'MAKINDU', '001', 174),
('283', 'RONGO', '001', 175),
('284', 'ISIBANIA', '001', 176),
('285', 'KISERIAN', '001', 177),
('286', 'MOMBASA', '001', 178),
('287', 'MOMBASA', '001', 179),
('288', 'HAILE SELASSIE', '001', 180),
('289', 'SALAMA HOUSE', '001', 181),
('290', 'GARDEN PLAZA', '001', 182),
('000', 'ELDORET', '002', 183),
('001', 'KERICHO', '002', 184),
('002', 'KISUMU', '002', 185),
('003', 'KITALE', '002', 186),
('004', 'TREASURY SQUARE', '002', 187),
('005', 'KILINDINI', '002', 188),
('006', 'KENYATTA AVENUE', '002', 189),
('008', 'MOI AVENUE', '002', 190),
('009', 'NAKURU', '002', 191),
('010', 'NANYUKI', '002', 192),
('011', 'NYERI', '002', 193),
('012', 'THIKA', '002', 194),
('015', 'WESTLANDS', '002', 195),
('016', 'MACHAKOS', '002', 196),
('017', 'MERU', '002', 197),
('019', 'HARAMBEE AVENUE', '002', 198),
('020', 'KIAMBU', '002', 199),
('053', 'INDUSTRIAL AREA', '002', 200),
('054', 'KAKAMEGA', '002', 201),
('060', 'MALINDI', '002', 202),
('061', 'GATUNDU', '002', 203),
('062', 'LAMU', '002', 204),
('064', 'OLD MUTUAL', '002', 205),
('065', 'KABARNET', '002', 206),
('070', 'ELDORET', '002', 207),
('071', 'YAYA CENTRE BRANCH', '002', 208),
('072', 'RUARAKA', '002', 209),
('073', 'LANGATA', '002', 210),
('074', 'MAKUPA', '002', 211),
('075', 'KAREN', '002', 212),
('076', 'MUTHAIGA', '002', 213),
('078', 'C.O.U', '002', 214),
('079', 'UKAY', '002', 215),
('080', 'EASTLEIGH', '002', 216),
('081', 'KISII', '002', 217),
('082', 'UPPER HILL', '002', 218),
('083', 'NYALI', '002', 219),
('001', 'HEAD OFFICE - CPIC', '003', 220),
('003', 'ELDORET', '003', 221),
('004', 'EMBU', '003', 222),
('005', 'MURANG\'A', '003', 223),
('006', 'KAPENGURIA', '003', 224),
('007', 'KERICHO', '003', 225),
('008', 'KISII', '003', 226),
('009', 'KISUMU', '003', 227),
('010', 'NAIROBI SOUTH \'C\' (REDCROSS)', '003', 228),
('011', 'LIMURU', '003', 234),
('012', 'MALINDI', '003', 235),
('013', 'MERU', '003', 236),
('014', 'EASTLEIGH', '003', 237),
('015', 'KITUI', '003', 238),
('016', 'NKRUMAH ROAD', '003', 239),
('017', 'GARISSA', '003', 240),
('018', 'NYAMIRA', '003', 241),
('019', 'KILIFI', '003', 242),
('002', 'KAPSABET', '003', 243),
('020', 'WAIYAKI WAY', '003', 244),
('021', 'CARD CENTRE', '003', 245),
('022', 'NAFEX', '003', 246),
('023', 'GILGIL', '003', 247),
('024', 'GITHURAI', '003', 248),
('026', 'KAKAMEGA', '003', 249),
('027', 'NAKURU EAST/NAIVASHA', '003', 250),
('028', 'BURU BURU', '003', 251),
('029', 'BOMET', '003', 252),
('030', 'NYERI', '003', 253),
('031', 'THIKA', '003', 254),
('032', 'PORT', '003', 255),
('033', 'GIKOMBA', '003', 256),
('034', 'KAWANGWARE', '003', 257),
('035', 'MBALE', '003', 258),
('036', 'PLAZA PREMIER BRANCH', '003', 259),
('037', 'RIVER ROAD', '003', 260),
('038', 'CHOMBA HOUSE(RIVER ROAD NO.2)', '003', 261),
('039', 'MUMIAS', '003', 262),
('040', 'MACHAKOS', '003', 263),
('041', 'NAROK', '003', 264),
('042', 'ISIOLO', '003', 265),
('043', 'NGONG', '003', 266),
('044', 'MAUA', '003', 267),
('045', 'HURLINGHAM', '003', 268),
('046', 'MAKUPA', '003', 269),
('047', 'DEVELOPMENT HOUSE', '003', 270),
('048', 'BUNGOMA', '003', 271),
('049', 'LAVINGTON', '003', 272),
('051', 'HOMABAY', '003', 273),
('052', 'ONGATA RONGAI', '003', 274),
('053', 'OTHAYA', '003', 275),
('054', 'VOI', '003', 276),
('055', 'MUTHAIGA', '003', 277),
('057', 'GITHUNGURI', '003', 278),
('058', 'WEBUYE', '003', 279),
('059', 'KASARANI', '003', 280),
('060', 'CHUKA', '003', 281),
('061', 'WESTGATE', '003', 282),
('062', 'KABARNET', '003', 283),
('063', 'KERUGOYA', '003', 284),
('064', 'TAVETA', '003', 285),
('065', 'KAREN', '003', 286),
('066', 'WUNDANYI', '003', 287),
('067', 'RUARAKA', '003', 288),
('069', 'WOTE', '003', 294),
('070', 'BUNYALA ROAD', '003', 295),
('071', 'NAKUMATT MERU', '003', 296),
('072', 'JUJA', '003', 297),
('073', 'WESTLANDS', '003', 298),
('074', 'KIKUYU', '003', 299),
('075', 'MOI AVENUE NAIROBI', '003', 300),
('077', 'PLAZA BUSINESS CENTRE', '003', 301),
('078', 'KIRIAINI', '003', 302),
('079', 'BUTERE ROAD', '003', 303),
('080', 'MIGORI', '003', 304),
('081', 'DIGO RD', '003', 305),
('082', 'HAILE SELASSIE AVENUE', '003', 306),
('083', 'NAIROBI UNIVERSITY', '003', 307),
('084', 'BUNYALA RD', '003', 308),
('086', 'NAIROBI WEST', '003', 309),
('087', 'PARKLANDS (HIGHRIDGE)', '003', 310),
('088', 'BUSIA', '003', 311),
('089', 'PANGANI', '003', 312),
('090', 'ABC PRESTIGE', '003', 313),
('093', 'KARIOBANGI', '003', 314),
('094', 'QUEENSWAY HOUSE', '003', 315),
('095', 'NAKUMATT - EMBAKASI', '003', 316),
('100', 'DIANI', '003', 317),
('103', 'JKIA', '003', 318),
('105', 'VILLAGE MRKT', '003', 319),
('106', 'SARIT PRESTIGE', '003', 320),
('109', 'YAYA PRESTIGE', '003', 321),
('111', 'NAIVASHA', '003', 322),
('113', 'MARKET BR', '003', 323),
('114', 'CHANGAMWE MSA', '003', 324),
('117', 'RAHIMTULLA PERSTIGE', '003', 325),
('128', 'BAMBURI', '003', 326),
('130', 'HARAMBEE AVE', '003', 327),
('132', 'KITALE', '003', 328),
('139', 'NYAHURURU', '003', 329),
('142', 'NAKURU WEST', '003', 330),
('145', 'MOI AV MSA PRESTIGE', '003', 331),
('190', 'NANYUKI BR', '003', 332),
('206', 'KARATINA', '003', 333),
('220', 'NYERERE PRESTIGE', '003', 334),
('000', 'KENYATTA AVENUE , NAIROBI', '005', 335),
('001', 'NKRUMAH ROAD', '005', 336),
('002', 'INDUSTRIAL AREA', '005', 337),
('003', 'WESTLANDS', '005', 338),
('008', 'ELDORET', '005', 339),
('000', 'NAIROBI MAIN', '006', 340),
('001', 'CITY SQUARE', '006', 341),
('002', 'DIGO ROAD', '006', 342),
('004', 'THIKA', '006', 343),
('005', 'KISUMU', '006', 344),
('006', 'SARIT CENTRE', '006', 345),
('007', 'INDUSTRIAL AREA', '006', 346),
('008', 'ELDORET', '006', 347),
('000', 'HEAD OFFICE UPPER HILL', '007', 348),
('001', 'INTERNATIONAL HSE', '007', 354),
('002', 'WABERA STREET', '007', 355),
('003', 'MAMLAKA AGENCY', '007', 356),
('004', 'HILTON AGENCY', '007', 357),
('005', 'MOMBASA - NKURUMAH ROAD', '007', 358),
('020', 'MOMBASA', '007', 359),
('021', 'MERU', '007', 360),
('022', 'BAMBURI AGENCY', '007', 361),
('046', 'MOMBASA', '008', 362),
('047', 'MALINDI', '008', 363),
('048', 'KOINANGE STREET', '008', 364),
('001', 'HEAD OFFICE', '009', 365),
('002', 'MOMBASA', '009', 366),
('003', 'KISUMU', '009', 367),
('004', 'ELDORET', '009', 368),
('000', 'H/O RIVERSIDE', '010', 369),
('001', 'KENINDIA', '010', 370),
('002', 'BIASHARA', '010', 371),
('003', 'MOMBASA', '010', 372),
('004', 'WESTLANDS', '010', 373),
('005', 'INDUSTRIAL AREA', '010', 374),
('006', 'KISUMU', '010', 375),
('007', 'PARKLANDS', '010', 376),
('008', 'RIVERSIDE DRIVE', '010', 377),
('010', 'HURLIGHAM', '010', 378),
('011', 'CAPITAL CENTRE', '010', 379),
('012', 'NYALI BRANCH', '010', 380),
('014', 'KAMUKUNJI', '010', 381),
('000', 'HEAD OFFICE', '011', 382),
('001', 'FINANCE AND ACCOUNTS', '011', 383),
('002', 'CO-OP HOUSE', '011', 384),
('003', 'KISUMU', '011', 385),
('004', 'NKRUMAH ROAD', '011', 386),
('005', 'MERU', '011', 387),
('006', 'NAKURU', '011', 388),
('007', 'INDUSTRIAL AREA', '011', 389),
('008', 'KISII', '011', 390),
('009', 'MACHAKOS', '011', 391),
('010', 'NYERI', '011', 392),
('011', 'UKULIMA', '011', 393),
('012', 'KERUGOYA', '011', 394),
('013', 'ELDORET', '011', 395),
('014', 'MOI AVENUE', '011', 396),
('015', 'NAIVASHA', '011', 397),
('016', 'STAFF TRAINING CENTRE', '011', 398),
('017', 'NYAHURURU', '011', 399),
('018', 'CHUKA', '011', 400),
('019', 'WAKULIMA MARKET', '011', 401),
('020', 'EASTLEIGH', '011', 402),
('021', 'KIAMBU', '011', 403),
('022', 'HOMA BAY', '011', 404),
('023', 'EMBU', '011', 405),
('024', 'KERICHO', '011', 406),
('025', 'BUNGOMA', '011', 407),
('026', 'MURAN\'GA', '011', 408),
('027', 'KAYOLE', '011', 414),
('028', 'KARATINA', '011', 415),
('029', 'UKUNDA', '011', 416),
('030', 'MTWAPA', '011', 417),
('031', 'UNIVERSITY WAY', '011', 418),
('032', 'BURUBURU', '011', 419),
('033', 'ATHI RIVER', '011', 420),
('034', 'MUMIAS', '011', 421),
('035', 'STIMA PLAZA', '011', 422),
('036', 'WESTLANDS', '011', 423),
('037', 'UPPER HILL', '011', 424),
('038', 'ONGATA RONGAI', '011', 425),
('039', 'THIKA', '011', 426),
('040', 'NACICO', '011', 427),
('041', 'KARIOBANGI', '011', 428),
('042', 'KAWANGWARE', '011', 429),
('043', 'MAKUTANO', '011', 430),
('044', 'PARLIAMENT ROAD', '011', 431),
('045', 'KIMATHI STREET', '011', 432),
('046', 'KITALE', '011', 433),
('047', 'GITHURAI', '011', 434),
('048', 'MAUA', '011', 435),
('049', 'CITY  HALL', '011', 436),
('050', 'DIGO ROAD', '011', 437),
('051', 'NAIROBI BUSINESS CENTRE', '011', 438),
('052', 'KAKAMEGA', '011', 439),
('053', 'MIGORI', '011', 440),
('054', 'KENYATTA AVENUE', '011', 441),
('055', 'NKUBU', '011', 442),
('056', 'ENTERPRISE ROAD', '011', 443),
('057', 'BUSIA', '011', 444),
('058', 'SIAYA', '011', 445),
('059', 'VOI', '011', 446),
('060', 'MARIAKANI', '011', 447),
('061', 'MALINDI', '011', 448),
('062', 'ZIMMERMAN', '011', 449),
('063', 'NAKURU EAST', '011', 450),
('064', 'KITENGELA', '011', 451),
('065', 'AGA KHAN WALK', '011', 452),
('066', 'NAROK', '011', 453),
('067', 'KITUI', '011', 454),
('068', 'NANYUKI', '011', 455),
('069', 'EMBAKASI', '011', 456),
('070', 'KIBERA', '011', 457),
('071', 'SIAKAGO', '011', 458),
('072', 'KAPSABET', '011', 459),
('073', 'MBITA', '011', 460),
('074', 'KANGEMI', '011', 461),
('075', 'DANDORA', '011', 462),
('076', 'KAJIADO', '011', 463),
('077', 'TALA', '011', 464),
('078', 'GIKOMBA', '011', 465),
('079', 'RIVER ROAD', '011', 466),
('080', 'NYAMIRA', '011', 467),
('081', 'GARISSA', '011', 468),
('082', 'BOMET', '011', 474),
('083', 'KEROKA', '011', 475),
('084', 'GILGIL', '011', 476),
('085', 'TOM MBOYA', '011', 477),
('086', 'LIKONI', '011', 478),
('087', 'DONHOLM', '011', 479),
('088', 'MWINGI', '011', 480),
('097', 'C.O.U', '011', 481),
('098', 'CO-OP CARD CENTRE', '011', 482),
('099', 'SETTLEMENTS', '011', 483),
('266', 'KILINDINI PORT', '011', 484),
('270', 'MONEY TRANSFERS AGENCY', '011', 485),
('001', 'MOI AVENUE', '012', 486),
('002', 'KENYATTA', '012', 487),
('003', 'HARAMBEE', '012', 488),
('004', 'HILL', '012', 489),
('005', 'BUSIA', '012', 490),
('006', 'MUHORONI', '012', 491),
('007', 'MERU, KIANJAI AGENCY', '012', 492),
('008', 'KARATINA', '012', 493),
('009', 'NAROK', '012', 494),
('010', 'KISII', '012', 495),
('012', 'NYERI', '012', 496),
('013', 'KITALE -MOI\'S BRIDGE AGENCY', '012', 497),
('014', 'KERICHO', '012', 498),
('015', 'EASTLEIGH', '012', 499),
('016', 'LIMURU', '012', 500),
('017', 'KITUI', '012', 501),
('018', 'MOLO', '012', 502),
('019', 'BUNGOMA', '012', 503),
('020', 'MOMBASA', '012', 504),
('021', 'KAPSABET', '012', 505),
('022', 'AWENDO', '012', 506),
('023', 'MOMBASA - PORTWAY', '012', 507),
('024', 'VALLEY RD', '012', 508),
('025', 'HOSPITAL BR.', '012', 509),
('026', 'RUIRU', '012', 510),
('027', 'ONGATA RONGAI', '012', 511),
('028', 'EMBU', '012', 512),
('029', 'KAKAMEGA', '012', 513),
('030', 'NAKURU', '012', 514),
('040', 'ELDORET', '012', 515),
('050', 'KISUMU', '012', 516),
('098', 'CARD CENTRE', '012', 517),
('099', 'HEAD OFFICE', '012', 518),
('198', 'TSC SALARIES', '012', 519),
('001', 'KOINANGE STREET', '014', 520),
('004', 'NAKURU', '014', 521),
('005', 'ELDORET', '014', 522),
('006', 'KITALE', '014', 523),
('007', 'WESTLANDS', '014', 524),
('000', 'NAIROBI', '015', 525),
('001', 'MOMBASA', '015', 526),
('000', 'HEAD OFFICE ,  NAIROBI', '016', 527),
('400', 'MOMBASA', '016', 528),
('500', 'GIGIRI AGENCY', '016', 534),
('700', 'KISUMU', '016', 535),
('000', 'HEAD OFFICE', '017', 536),
('001', 'MOMBASA', '017', 537),
('002', 'INDUSTRIAL AREA', '017', 538),
('003', 'WESTLANDS', '017', 539),
('000', 'HEAD OFFICE', '018', 540),
('001', 'NAIROBI', '018', 541),
('002', 'MOMBASA', '018', 542),
('003', 'MILIMANI', '018', 543),
('000', 'REINSURANCE PLAZA NAIROBI', '019', 544),
('001', 'MOMBASA', '019', 545),
('002', 'WESTLANDS', '019', 546),
('003', 'UHURU HIGHWAY', '019', 547),
('004', 'RIVER ROAD', '019', 548),
('005', 'THIKA', '019', 549),
('006', 'KISUMU', '019', 550),
('007', 'BABA DOGO', '019', 551),
('008', 'MONROVIA STREET', '019', 552),
('010', 'NGONG ROAD', '019', 553),
('011', 'ELDORET', '019', 554),
('012', 'EMBAKASI', '019', 555),
('000', 'HEAD OFFICE', '020', 556),
('002', 'EASTLEIGH', '020', 557),
('003', 'MOMBASA', '020', 558),
('004', 'NAKURU', '020', 559),
('000', 'HARAMBEE AVENUE', '023', 560),
('001', 'MURANGA', '023', 561),
('002', 'EMBU', '023', 562),
('003', 'MOMBASA', '023', 563),
('004', 'KOINANGE STREET', '023', 564),
('005', 'THIKA', '023', 565),
('006', 'MERU', '023', 566),
('007', 'NYERI', '023', 567),
('009', 'MAUA', '023', 568),
('010', 'ISIOLO', '023', 569),
('013', 'UMOJA', '023', 570),
('099', 'ELDORET', '023', 571),
('000', 'KOINANGE STREET', '025', 572),
('001', 'KISUMU', '025', 573),
('002', 'NAKURU', '025', 574),
('003', 'KISII', '025', 575),
('004', 'WESTLANDS', '025', 576),
('001', 'HEAD OFFICE', '026', 577),
('002', 'MOMBASA', '026', 578),
('003', 'ELDORET', '026', 579),
('004', 'NAKURU', '026', 580),
('007', 'KIRINYAGA RD NAIROBI', '026', 581),
('009', 'OLENGURUONE', '026', 582),
('010', 'KERICHO', '026', 583),
('013', 'NANDI HILLS', '026', 584),
('014', 'EPZ', '026', 585),
('000', 'KISUMU', '030', 586),
('001', 'NAIROBI', '030', 587),
('002', 'VILLAGE MARKET', '030', 588),
('007', 'PARKLANDS', '030', 594),
('008', 'RIVERSIDE MEWS', '030', 595),
('009', 'IMAN BANKING CENTRE', '030', 596),
('010', 'THIKA', '030', 597),
('011', 'NAKURU', '030', 598),
('012', 'DONHOLM', '030', 599),
('013', 'BONDENI', '030', 600),
('014', 'NGARA MINI', '030', 601),
('000', 'CLEARING CENTRE HEAD OFFICE', '031', 602),
('002', 'KIMATHI STREET', '031', 603),
('003', 'DIGO ROAD', '031', 604),
('004', 'WAIYAKI WAY', '031', 605),
('005', 'INDUSTRIAL AREA', '031', 606),
('006', 'HARAMBEE AVENUE', '031', 607),
('007', 'CHIROMO ROAD', '031', 608),
('008', 'INTERNATIONAL HOUSE', '031', 609),
('009', 'NKRUMAH BRANCH', '031', 610),
('010', 'UPPER HILL BRANCH', '031', 611),
('011', 'NAIVASHA', '031', 612),
('012', 'WESTGATE', '031', 613),
('013', 'KISUMU', '031', 614),
('014', 'NAKURU', '031', 615),
('015', 'THIKA', '031', 616),
('017', 'CFC STANBIC', '031', 617),
('018', 'BURUBURU', '031', 618),
('019', 'GIKOMBA', '031', 619),
('020', 'MERU', '031', 620),
('021', 'RUARAKA', '031', 621),
('999', 'CENTRAL PROCESSING HEAD OFFICE', '031', 622),
('000', 'MAIN BRANCH', '035', 623),
('001', 'WESTLANDS', '035', 624),
('002', 'INDUSTRIAL AREA', '035', 625),
('003', 'MOMBASA', '035', 626),
('004', 'KISUMU', '035', 627),
('005', 'ELDORET', '035', 628),
('006', 'MERU', '035', 629),
('007', 'LIBRA HOUSE', '035', 630),
('008', 'NAKURU', '035', 631),
('001', 'HEAD OFFICE', '039', 632),
('002', 'MOMBASA', '039', 633),
('003', 'UPPER HILL', '039', 634),
('004', 'PARKLANDS', '039', 635),
('005', 'MALINDI', '039', 636),
('006', 'INDUSTRIAL AREA', '039', 637),
('007', 'WATAMU', '039', 638),
('008', 'DIANI', '039', 639),
('009', 'KILIFI', '039', 640),
('010', 'ELDORET', '039', 641),
('011', 'KAREN', '039', 642),
('012', 'THIKA', '039', 643),
('000', 'NIC HOUSE', '041', 644),
('101', '20TH CENTURY PLAZA', '041', 645),
('102', 'AMBANK HSE', '041', 646),
('103', 'MOMBASA', '041', 647),
('105', 'WESTLANDS', '041', 648),
('106', 'THE JUNCTION BR.', '041', 654),
('107', 'NAKURU', '041', 655),
('109', 'NKRUMAH ROAD', '041', 656),
('110', 'HARAMBEE AVENUE', '041', 657),
('111', 'PRESTIGE', '041', 658),
('112', 'KISUMU', '041', 659),
('113', 'THIKA', '041', 660),
('114', 'MERU', '041', 661),
('000', 'KIMATHI STREET', '042', 662),
('001', 'MOMBASA', '042', 663),
('002', 'INDUSTRIAL AREA', '042', 664),
('003', 'KIMATHI ST.', '042', 665),
('004', 'KISUMU BRANCH', '042', 666),
('005', 'WESTLANDS', '042', 667),
('007', 'PARKLANDS', '042', 668),
('000', 'ECOBANKTOWERS,  HEAD OFFICE', '043', 669),
('001', 'MOI AVENUE NAIROBI', '043', 670),
('002', 'AKIBA HSE MOMBASA', '043', 671),
('003', 'PLAZA 2000', '043', 672),
('009', 'KISII', '043', 673),
('010', 'KITALE', '043', 674),
('012', 'KARATINA', '043', 675),
('013', 'WESTLANDS', '043', 676),
('014', 'UNITED MALL', '043', 677),
('015', 'NAKURU', '043', 678),
('016', 'JOMO KENYATTA AVENUE', '043', 679),
('017', 'NYERI', '043', 680),
('000', 'HEAD OFFICE', '049', 681),
('001', 'NYERERE', '049', 682),
('002', 'MOMBASA', '049', 683),
('003', 'WESTLANDS', '049', 684),
('004', 'MOMBASA ROAD', '049', 685),
('005', 'CHESTER', '049', 686),
('007', 'WAIYAKI WAY', '049', 687),
('008', 'KAKAMEGA', '049', 688),
('009', 'ELDORET', '049', 689),
('011', 'NYALI', '049', 690),
('012', 'KISUMU', '049', 691),
('013', 'INDUSTRIAL AREA', '049', 692),
('000', 'HEAD OFFICE', '050', 693),
('001', 'WESTLANDS', '050', 694),
('002', 'PARKLANDS', '050', 695),
('003', 'KIMATHI', '050', 696),
('005', 'KOINANGE', '050', 697),
('000', 'HEAD OFFICE', '051', 698),
('001', 'INDUSTRIAL AREA', '051', 699),
('001', 'HEAD OFFICE', '053', 700),
('002', 'INDUSTRIAL AREA', '053', 701),
('003', 'WESTLANDS', '053', 702),
('004', 'LAVINGTONE', '053', 703),
('005', 'NKRUMAH ROAD', '053', 704),
('006', 'NAKURU', '053', 705),
('007', 'ELDORET', '053', 706),
('009', 'NANYUKI', '053', 707),
('013', 'MERU', '053', 708),
('020', 'THIKA', '053', 714),
('021', 'FINA BANK', '053', 715),
('001', 'NAIROBI', '054', 716),
('002', 'KISUMU', '054', 717),
('001', 'HEAD OFFICE', '055', 718),
('002', 'WESTLANDS', '055', 719),
('003', 'MOMBASA', '055', 720),
('004', 'ELDORET', '055', 721),
('005', 'KISUMU', '055', 722),
('006', 'BIASHARA STREET', '055', 723),
('007', 'MOMBASA ROAD', '055', 724),
('000', 'KENYATTA AVENUE', '057', 725),
('001', '2ND NONG AVENUE', '057', 726),
('002', 'SARIT CENTRE', '057', 727),
('003', 'HEAD OFFICE', '057', 728),
('004', 'BIASHARA ST', '057', 729),
('005', 'MOMBASA', '057', 730),
('006', 'INDUSTRIAL AREA', '057', 731),
('007', 'KISUMU', '057', 732),
('008', 'KAREN', '057', 733),
('009', 'PANARI CENTRE', '057', 734),
('010', 'PARKLANDS', '057', 735),
('011', 'WILSON AIRPORT', '057', 736),
('012', 'ONGATA RONGAI', '057', 737),
('013', 'SOUTH C SHOPPING CENTRE', '057', 738),
('014', 'NYALI CINEMAX', '057', 739),
('015', 'LANGATA LINK', '057', 740),
('016', 'LAVINGTON BR', '057', 741),
('098', 'CARD CENTRE', '057', 742),
('000', 'HEAD OFFICE', '059', 743),
('001', 'LOITA STREET', '059', 744),
('001', 'HEADOFFICE', '060', 745),
('002', 'WESTLANDS', '060', 746),
('003', 'INDUSTRIAL AREA', '060', 747),
('004', 'DIANI', '060', 748),
('005', 'MALINDI', '060', 749),
('006', 'MOMBASA', '060', 750),
('000', 'HEAD OFFICE', '063', 751),
('001', 'NATION CENTRE', '063', 752),
('002', 'MOMBASA', '063', 753),
('003', 'KISUMU', '063', 754),
('005', 'PARKLANDS', '063', 755),
('006', 'WESTGATE', '063', 756),
('008', 'MOMBASA RD', '063', 757),
('009', 'INDUSTRIAL AREA', '063', 758),
('010', 'KISII', '063', 759),
('011', 'MALINDI', '063', 760),
('012', 'THIKA', '063', 761),
('013', 'OTC', '063', 762),
('015', 'EASTLEIGH', '063', 763),
('016', 'CHANGAMWE', '063', 764),
('017', 'T-MALL', '063', 765),
('018', 'NAKURU', '063', 766),
('019', 'VILLAGE MARKET', '063', 767),
('020', 'DIANI', '063', 768),
('021', 'BUNGOMA', '063', 774),
('022', 'KITALE', '063', 775),
('023', 'PRESTIGE', '063', 776),
('024', 'BURUBURU', '063', 777),
('025', 'KITENGELA', '063', 778),
('026', 'JOMO KENYATTA', '063', 779),
('027', 'KAKAMEGA', '063', 780),
('028', 'KERICHO', '063', 781),
('029', 'UPPERHILL', '063', 782),
('030', 'WABERA', '063', 783),
('031', 'KAREN', '063', 784),
('032', 'VOI', '063', 785),
('034', 'MERU', '063', 786),
('050', 'TOM MBOYA', '063', 787),
('000', 'LONGONOT PLACE-KIJABE STREET', '064', 788),
('002', 'MOMBASA', '064', 789),
('003', 'NGONG', '064', 790),
('004', 'UHURU H/WAY', '064', 791),
('005', 'WESTLANDS', '064', 792),
('006', 'VILLAGE MARKET', '064', 793),
('007', 'NYALI', '064', 794),
('008', 'LIKONI', '064', 795),
('009', 'MEGA CITY', '064', 796),
('001', 'HEAD OFFICE', '066', 797),
('002', 'MOMBASA', '066', 798),
('003', 'KENYATTA AVE NBI', '066', 799),
('004', 'NAKURU', '066', 800),
('005', 'NYERI', '066', 801),
('006', 'BURUBURU', '066', 802),
('007', 'EMBU', '066', 803),
('008', 'ELDORET', '066', 804),
('009', 'KISUMU', '066', 805),
('010', 'KERICHO', '066', 806),
('015', 'KISII', '066', 807),
('018', 'MACHAKOS', '066', 808),
('019', 'NANYUKI', '066', 809),
('021', 'KONGOWEA MKT-MSA', '066', 810),
('022', 'NAIVASHA TOWN', '066', 811),
('023', 'MIMA CENTER', '066', 812),
('024', 'ISIOLO TOWN', '066', 813),
('025', 'GHANA ROAD', '066', 814),
('026', 'VICTOR HOUSE', '066', 815),
('027', 'MANNA HOUSE', '066', 816),
('028', 'MOI STREET', '066', 817),
('029', 'KAJIADO', '066', 818),
('031', 'MTWAPA', '066', 819),
('033', 'MOI AVENUE', '066', 820),
('034', 'MWEA', '066', 821),
('035', 'KENGELENI', '066', 822),
('036', 'KILIMANI', '066', 823),
('000', 'HEAD OFFICE', '068', 824),
('001', 'CORPORATE', '068', 825),
('002', 'FOURWAYS', '068', 826),
('003', 'KANGEMA', '068', 827),
('004', 'KARATINA', '068', 828),
('005', 'KIRIAINI', '068', 834),
('006', 'MURARANDIA', '068', 835),
('007', 'KANGARI', '068', 836),
('008', 'OTHAYA', '068', 837),
('009', 'THIKA', '068', 838),
('010', 'KERUGOYA', '068', 839),
('011', 'NYERI', '068', 840),
('012', 'TOM MBOYA', '068', 841),
('013', 'NAKURU', '068', 842),
('014', 'MERU', '068', 843),
('015', 'MAMA NGINA', '068', 844),
('016', 'NYAHURURU', '068', 845),
('017', 'COMMUNITY', '068', 846),
('018', 'COMMUNITY CORPORATE', '068', 847),
('019', 'EMBU', '068', 848),
('020', 'NAIVASHA', '068', 849),
('021', 'CHUKA', '068', 850),
('022', 'MURANG\'A', '068', 851),
('023', 'MOLO', '068', 852),
('024', 'HARAMBEE AVENUE', '068', 853),
('025', 'MOMBASA', '068', 854),
('026', 'KIMATHI', '068', 855),
('027', 'NANYUKI', '068', 856),
('028', 'KERICHO', '068', 857),
('029', 'KISUMU', '068', 858),
('030', 'ELDORET', '068', 859),
('031', 'NAKURU-KENYATTA AVENUE', '068', 860),
('032', 'KARIOBANGI', '068', 861),
('033', 'KITALE', '068', 862),
('034', 'THIKA-KENYATTA HIGHWAY', '068', 863),
('035', 'KNUT HOUSE', '068', 864),
('036', 'NAROK', '068', 865),
('037', 'NKUBU', '068', 866),
('038', 'MWEA', '068', 867),
('039', 'MATUU', '068', 868),
('040', 'MAUA', '068', 869),
('041', 'ISIOLO', '068', 870),
('042', 'KAGIO', '068', 871),
('043', 'GIKOMBA', '068', 872),
('044', 'UKUNDA', '068', 873),
('045', 'MALINDI', '068', 874),
('046', 'DIGO ROAD', '068', 875),
('047', 'MOI AVENUE', '068', 876),
('048', 'BUNGOMA', '068', 877),
('049', 'KAPSABET', '068', 878),
('050', 'KAKAMEGA', '068', 879),
('051', 'KISII', '068', 880),
('052', 'NYAMIRA', '068', 881),
('053', 'LITEIN BRANCH', '068', 882),
('054', 'MOI AVENUE CORPORATE', '068', 883),
('055', 'WESTLANDS', '068', 884),
('056', 'KENPIPE PLAZA', '068', 885),
('057', 'KIKUYU', '068', 886),
('058', 'GARISSA', '068', 887),
('059', 'MWINGI', '068', 888),
('060', 'MACHAKOS', '068', 894),
('061', 'ONGATA RONGAI', '068', 895),
('062', 'OL-KALAO', '068', 896),
('063', 'KAWANGWARE', '068', 897),
('064', 'KIAMBU', '068', 898),
('065', 'KAYOLE', '068', 899),
('066', 'GATUNDU', '068', 900),
('067', 'WOTE', '068', 901),
('068', 'MUMIAS', '068', 902),
('069', 'LIMURU', '068', 903),
('070', 'KITENGELA', '068', 904),
('071', 'GITHURAI', '068', 905),
('072', 'KITUI', '068', 906),
('073', 'NGONG', '068', 907),
('074', 'LOITOKTOK', '068', 908),
('075', 'BONDO', '068', 909),
('076', 'MBITA POINT', '068', 910),
('077', 'GILGIL', '068', 911),
('078', 'BUSIA', '068', 912),
('079', 'VOI', '068', 913),
('080', 'ENTERPRISE ROAD', '068', 914),
('081', 'EQUITY CENTRE', '068', 915),
('082', 'DONHOLM', '068', 916),
('083', 'MUKURWE-INI', '068', 917),
('084', 'EASTLEIGH', '068', 918),
('085', 'NAMANGA', '068', 919),
('086', 'KAJIADO', '068', 920),
('087', 'RUIRU', '068', 921),
('088', 'OTC', '068', 922),
('089', 'KENOL', '068', 923),
('090', 'TALA', '068', 924),
('091', 'NGARA', '068', 925),
('092', 'NANDI HILLS', '068', 926),
('093', 'GITHUNGURI', '068', 927),
('094', 'TEA ROOM', '068', 928),
('095', 'BURUBURU', '068', 929),
('096', 'MBALE', '068', 930),
('097', 'SIAYA', '068', 931),
('098', 'HOMABAY', '068', 932),
('099', 'LODWAR', '068', 933),
('100', 'MANDERA', '068', 934),
('101', 'MARSABIT', '068', 935),
('102', 'MOYALE', '068', 936),
('103', 'WAJIR', '068', 937),
('104', 'MERU MAKUTANO', '068', 938),
('105', 'MALABA', '068', 939),
('106', 'KILIFI', '068', 940),
('107', 'KAPENGURIA', '068', 941),
('108', 'MOMBASA RD', '068', 942),
('109', 'ELDORET MARKET', '068', 943),
('110', 'MARALAL', '068', 944),
('111', 'KIMENDE', '068', 945),
('112', 'LUANDA', '068', 946),
('113', 'KU SUB BRANCH', '068', 947),
('115', 'NYERI KIMATHI WAY', '068', 948),
('116', 'MIGORI', '068', 954),
('117', 'KIBERA', '068', 955),
('144', 'KENGELENI', '068', 956),
('000', 'HEAD OFFICE', '070', 957),
('001', 'KIAMBU', '070', 958),
('002', 'GITHUNGURI', '070', 959),
('003', 'SONALUX', '070', 960),
('004', 'GATUNDU', '070', 961),
('005', 'THIKA', '070', 962),
('006', 'MURANGA', '070', 963),
('007', 'KANGARI', '070', 964),
('008', 'KIRIAINI', '070', 965),
('009', 'KANGEMA', '070', 966),
('011', 'OTHAYA', '070', 967),
('012', 'KENYATTA AVENUE', '070', 968),
('014', 'CARGEN HOUSE', '070', 969),
('018', 'NAKURU FINANCE', '070', 970),
('019', 'NAKURU NJORO', '070', 971),
('024', 'RUIRU', '070', 972),
('025', 'KISUMU', '070', 973),
('026', 'NYAMIRA', '070', 974),
('027', 'KISII', '070', 975),
('031', 'NAIVASHA', '070', 976),
('033', 'DONHOLM', '070', 977),
('035', 'FOURWAYS RETAIL', '070', 978),
('038', 'KTDA RETAIL', '070', 979),
('041', 'KARIOBANGI', '070', 980),
('043', 'GIKOMBA/SOKONI', '070', 981),
('045', 'GITHURAI', '070', 982),
('046', 'YAYA', '070', 983),
('047', 'LIMURU', '070', 984),
('051', 'BANANA', '070', 985),
('053', 'INDUSTRIAL AREA', '070', 986),
('055', 'NYERI', '070', 987),
('057', 'KERUGOYA', '070', 988),
('058', 'TOM MBOYA', '070', 989),
('059', 'RIVER ROAD', '070', 990),
('061', 'KAYOLE', '070', 991),
('062', 'NKUBU', '070', 992),
('063', 'MERU', '070', 993),
('065', 'KTDA CORPORATE', '070', 994),
('068', 'FOURWAYS CORPORATE', '070', 995),
('069', 'NGARA', '070', 996),
('071', 'KITENGELA', '070', 997),
('073', 'MACHAKOS', '070', 998),
('075', 'EMBU', '070', 999),
('077', 'BUNGOMA', '070', 1000),
('078', 'KAKAMEGA', '070', 1001),
('079', 'BUSIA', '070', 1002),
('083', 'MOLO', '070', 1003),
('085', 'ELDORET', '070', 1004),
('093', 'KITALE', '070', 1005),
('095', 'MOMBASA', '070', 1006),
('096', 'MOMBASA 11', '070', 1007),
('097', 'KAPSABET', '070', 1008),
('001', 'HEAD OFFICE', '072', 1014),
('002', 'UPPERHILL', '072', 1015),
('003', 'EASTLEIGH', '072', 1016),
('004', 'KENYATTA AVENUE', '072', 1017),
('005', 'MOMBASA', '072', 1018),
('006', 'GARISSA', '072', 1019),
('007', 'LAMU', '072', 1020),
('008', 'MALINDI', '072', 1021),
('009', 'MUTHAIGA', '072', 1022),
('001', 'WABERA STREET', '074', 1023),
('002', 'EASTLEIGH', '074', 1024),
('003', 'MOMBASA 1', '074', 1025),
('004', 'GARISSA', '074', 1026),
('005', 'EASTLEIGH 11', '074', 1027),
('006', 'MALINDI', '074', 1028),
('007', 'KISUMU', '074', 1029),
('008', 'KIMATHI', '074', 1030),
('009', 'WESTLANDS', '074', 1031),
('010', 'SOUTH C', '074', 1032),
('011', 'INDUSTRIAL AREA', '074', 1033),
('012', 'MASALANI', '074', 1034),
('013', 'HABASWENI', '074', 1035),
('014', 'WAJIR', '074', 1036),
('015', 'MOYALE', '074', 1037),
('016', 'NAKURU', '074', 1038),
('017', 'MOMBASA 2', '074', 1039),
('999', 'HEAD OFFICE/CLEARING CENTRE', '074', 1040),
('001', 'HEAD OFFICE/CLEARING CENTRE', '076', 1041),
('002', 'INDUSTRIAL AREA', '076', 1042),
('003', 'UPPER HILL', '076', 1043),
('099', 'WESTLANDS', '076', 1044),
('002', 'KISUMU', '054', 1045),
('001', 'NAIROBI', '054', 1046),
('222', 'Bsss', '222', 1047),
('090', 'Eblue Kenindia', '900', 1050),
('02', 'MPESA', '990', 1051),
('064', 'Nanyuki', '070', 1052),
('308', 'KCB Thika Road Mall', '001', 1053),
('120', 'Chnagamwe', '106', 1055);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `bank` varchar(255) NOT NULL,
  `bcode` varchar(3) NOT NULL,
  `countryId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank`, `bcode`, `countryId`) VALUES
(1, 'KENYA COMMERCIAL BANK LTD', '001', 1),
(17, 'STANDARD CHARTERED', '002', 1),
(18, 'BARCLAYS BANK OF KENYA LIMITED', '003', 1),
(29, 'BANK OF INDIA', '005', 1),
(30, 'BANK OF BARODA', '006', 1),
(31, 'COMMERCIAL BANK OF AFRICA LTD', '007', 1),
(37, 'HABIB BANK LTD', '008', 1),
(38, 'CENTRAL BANK OF KENYA', '009', 1),
(39, 'PRIME BANK LIMITED', '010', 1),
(40, 'CO-OPERATIVE BANK', '011', 1),
(51, 'NATIONAL BANK OF KENYA', '012', 1),
(52, 'ORIENTAL COMMERCIAL BANK', '014', 1),
(53, 'FIRST AMERICAN BANK OF KENYA', '015', 1),
(54, 'CITIBANK N.A.', '016', 1),
(60, 'HABIB BANK A.G.', '017', 1),
(61, 'MIDDLE EAST BANK (K) LIMITED', '018', 1),
(62, 'BANK OF AFRICA KENYA LTD', '019', 1),
(63, 'DUBAI BANK OF KENYA LTD', '020', 1),
(64, 'CONSOLIDATED BANK OF KENYA LTD', '023', 1),
(65, 'CREDIT BANK LTD', '025', 1),
(66, 'TRANS-NATIONAL BANK', '026', 1),
(67, 'CHASE BANK (KENYA) LIMITED', '030', 1),
(73, 'STANBIC BANK KENYA LIMITED', '031', 1),
(74, 'AFRICAN BANKING CORPORATION', '035', 1),
(75, 'IMPERIAL BANK LIMITED', '039', 1),
(76, 'NIC BANK', '041', 1),
(82, 'GIRO BANK LTD', '042', 1),
(83, 'ECOBANK KENYA LTD', '043', 1),
(84, 'EQUITORIAL COMMERCIAL BANK LTD', '049', 1),
(85, 'PARAMOUNT UNIVERSAL BANK LTD', '050', 1),
(86, 'JAMII BORA BANK LTD', '051', 1),
(87, 'FINA BANK', '053', 1),
(93, 'VICTORIA COMMERCIAL BANK LTD', '054', 1),
(94, 'GUARDIAN BANK', '055', 1),
(95, 'INVESTMENTS AND MORTGAGES', '057', 1),
(96, 'DEVELOPMENT BANK OF KENYA', '059', 1),
(97, 'FIDELITY COMMERCIAL BANK', '060', 1),
(98, 'DIAMOND TRUST BANK', '063', 1),
(104, 'CHARTERHOUSE BANK LTD', '064', 1),
(105, 'K-REP BANK', '066', 1),
(106, 'EQUITY BANK', '068', 1),
(122, 'FAMILY BANK LTD', '070', 1),
(130, 'UBA KENYA LTD', '076', 1),
(128, 'GULF AFRICAN BANK LTD', '072', 1),
(129, 'FIRST COMMUNITY BANK', '074', 1),
(132, 'red', '102', 5),
(136, 'MPESA', '990', 1),
(137, 'Eblue Bank', '900', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_to_cashbook`
--

DROP TABLE IF EXISTS `bank_to_cashbook`;
CREATE TABLE IF NOT EXISTS `bank_to_cashbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) NOT NULL,
  `recordedby` varchar(45) NOT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `particulars` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_to_cashbook`
--

INSERT INTO `bank_to_cashbook` (`id`, `amount`, `recordedby`, `dateadded`, `datemodified`, `particulars`) VALUES
(1, '', '', '2016-06-12', '2016-06-12 13:57:11', 'payment of blah blah'),
(2, '', '', '2016-06-12', '2016-06-12 14:00:45', 'payment of blah blah'),
(3, '', '', '2016-06-12', '2016-06-12 14:02:34', 'payment of blah blah'),
(4, '', '', '2016-06-12', '2016-06-12 14:03:35', 'payment of blah blah'),
(5, '200', '', '2016-06-12', '2016-06-12 14:04:21', 'for votes');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

DROP TABLE IF EXISTS `deductions`;
CREATE TABLE IF NOT EXISTS `deductions` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `deduction` varchar(255) NOT NULL,
  `pre_tax` varchar(1) NOT NULL,
  `countryId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `deduction`, `pre_tax`, `countryId`) VALUES
(1, 'Helb', 'n', 1),
(2, 'Absenteeism Penalty ', 'n', 1),
(4, 'Loans', 'n', 1),
(5, 'Penalty', 'n', 1),
(7, 'Voluntary Contribution', 'y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `datemodified`) VALUES
(1, 'Accounting', '2017-10-27 11:47:31'),
(2, 'Human Resources', '2017-10-27 11:47:48'),
(3, 'Security', '2017-10-27 11:48:00'),
(4, 'Sales and Marketing', '2017-10-27 11:48:13'),
(5, 'Production', '2017-10-27 11:48:27'),
(6, 'All', '2017-10-27 11:51:27'),
(7, 'COOMERCIAL', '2019-12-30 06:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `empdeductions`
--

DROP TABLE IF EXISTS `empdeductions`;
CREATE TABLE IF NOT EXISTS `empdeductions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employeeId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `empdeductionid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empvsadvances`
--

DROP TABLE IF EXISTS `empvsadvances`;
CREATE TABLE IF NOT EXISTS `empvsadvances` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `empid` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payrollPeriod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empvsdepartment`
--

DROP TABLE IF EXISTS `empvsdepartment`;
CREATE TABLE IF NOT EXISTS `empvsdepartment` (
  `empId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empvsleaves`
--

DROP TABLE IF EXISTS `empvsleaves`;
CREATE TABLE IF NOT EXISTS `empvsleaves` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `empid` bigint(20) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `days` float NOT NULL,
  `approvaldate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `period` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empvsloans`
--

DROP TABLE IF EXISTS `empvsloans`;
CREATE TABLE IF NOT EXISTS `empvsloans` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `empid` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loanid` bigint(20) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(30) NOT NULL,
  `pay_period` float NOT NULL,
  `interest_rate` float NOT NULL,
  `total_amount_payable` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empvsovertime`
--

DROP TABLE IF EXISTS `empvsovertime`;
CREATE TABLE IF NOT EXISTS `empvsovertime` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `empid` bigint(20) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `hrs` float NOT NULL DEFAULT '0',
  `rate` float NOT NULL DEFAULT '0',
  `totalamount` float NOT NULL DEFAULT '0',
  `period` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empvsovertime`
--

INSERT INTO `empvsovertime` (`id`, `empid`, `datefrom`, `dateto`, `timefrom`, `timeto`, `datemodified`, `status`, `hrs`, `rate`, `totalamount`, `period`) VALUES
(1, 1001, '2017-05-30', '2017-05-30', '18:30:00', '21:30:00', '2017-06-01 11:04:47', 2, 3, 0, 0, '2017-05'),
(2, 1001, '2017-05-30', '2017-05-30', '17:30:00', '18:55:00', '2017-06-01 11:05:27', 2, 1.4, 0, 0, '2017-05'),
(5, 1001, '2017-06-02', '2017-06-02', '17:30:00', '20:30:00', '2017-06-01 11:25:19', 1, 3, 300, 800, '2017-06'),
(4, 1001, '2017-06-02', '2017-06-02', '17:30:00', '19:30:00', '2017-06-01 11:18:22', 2, 2, 300, 600, '2017-06');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
CREATE TABLE IF NOT EXISTS `leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(34) NOT NULL,
  `days` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `name`, `days`) VALUES
(1, 'Annual', 21),
(2, 'Sick', 7);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staffid` int(11) NOT NULL,
  `msg` text NOT NULL,
  `tel` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payrollruns`
--

DROP TABLE IF EXISTS `payrollruns`;
CREATE TABLE IF NOT EXISTS `payrollruns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `period` varchar(45) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_tbl`
--

DROP TABLE IF EXISTS `payroll_tbl`;
CREATE TABLE IF NOT EXISTS `payroll_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payrollrun` varchar(200) NOT NULL,
  `staffid` varchar(45) NOT NULL,
  `payrollno` varchar(76) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `salary` double NOT NULL DEFAULT '0',
  `lunch` double NOT NULL DEFAULT '0',
  `allowance` double NOT NULL DEFAULT '0',
  `commission` double NOT NULL DEFAULT '0',
  `balance_bf` int(11) NOT NULL DEFAULT '0',
  `totalbenefits` double NOT NULL DEFAULT '0',
  `nhif` double NOT NULL DEFAULT '0',
  `nssf` double NOT NULL DEFAULT '1080',
  `advance` double NOT NULL DEFAULT '0',
  `overtime` double NOT NULL DEFAULT '0',
  `surrcharge` double NOT NULL DEFAULT '0',
  `helb` double NOT NULL DEFAULT '0',
  `deduction` double NOT NULL DEFAULT '0',
  `totaldeductions` int(11) NOT NULL DEFAULT '0',
  `taxableincome` double NOT NULL DEFAULT '0',
  `tax` double NOT NULL DEFAULT '0',
  `netpay` double NOT NULL DEFAULT '0',
  `daterun` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `main_name` varchar(200) NOT NULL,
  `main_location` varchar(200) NOT NULL,
  `main_tel` varchar(200) NOT NULL,
  `main_address` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `main_name`, `main_location`, `main_tel`, `main_address`, `email`, `dateadded`, `datemodified`) VALUES
(1, 'Solved Technologies Ltd', 'Watermark Business Park -Karen Nairobi', '+254-12345678', 'Watermark B/S Park Nairobi', 'create@hr.co.ke', '2016-09-05', '2020-01-24 06:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `smssettings`
--

DROP TABLE IF EXISTS `smssettings`;
CREATE TABLE IF NOT EXISTS `smssettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `senderid` varchar(200) NOT NULL,
  `api` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smssettings`
--

INSERT INTO `smssettings` (`id`, `username`, `senderid`, `api`) VALUES
(1, 'barletta', 'BARLETTA', '167c94e63a11b90e075c230bc6702e7693b247deedf7b902481c14f967a8d398');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(200) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_email` varchar(200) DEFAULT NULL,
  `staff_telno` varchar(20) DEFAULT NULL,
  `staff_type` varchar(20) NOT NULL DEFAULT '2',
  `status` varchar(20) NOT NULL,
  `nhifno` varchar(200) DEFAULT NULL,
  `nssfno` varchar(200) DEFAULT NULL,
  `pinno` varchar(200) DEFAULT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` double DEFAULT '0',
  `allowance` double DEFAULT '0',
  `bankcode` varchar(45) DEFAULT NULL,
  `branchcode` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `accountname` varchar(145) DEFAULT NULL,
  `payrollno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stafftype`
--

DROP TABLE IF EXISTS `stafftype`;
CREATE TABLE IF NOT EXISTS `stafftype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `deptid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftype`
--

INSERT INTO `stafftype` (`id`, `type_name`, `deptid`) VALUES
(4, 'Human Resource Manager', 2),
(5, 'Accountant', 1),
(6, 'Agronomist', 5),
(7, 'General Worker', 5),
(9, 'Security Guard', 3),
(11, 'Human Resource Assistance', 2),
(12, 'Human Resource Assistance', 2),
(13, 'Greenhouses Crop Supervisor', 5),
(14, 'Human Resources & Admin Assistance', 2),
(15, 'Sales/Delivery Representative', 2),
(16, 'Driver', 2),
(17, 'Human Resource & Accountant Assistance', 2),
(18, 'Security Supervisor', 3),
(19, 'Storekeeper', 1),
(20, 'Pack House Supervisor', 5),
(21, 'Farm Manager', 5),
(22, 'Irrigation Technician', 5),
(23, 'Pest and Disease Control Supervisor', 5),
(24, 'Creative Designer', 4),
(25, 'Sales Team leader', 4),
(26, 'Sales Executive', 4),
(27, 'Sales Manager', 4),
(28, 'Diaspora Sales Executive', 4),
(29, 'Relationship Manager', 4),
(30, 'Security Manager', 3),
(31, 'Greenhouse Technician', 5),
(32, 'Customer Service Manager', 7),
(33, 'Digital Marketing Manager', 7);

-- --------------------------------------------------------

--
-- Table structure for table `staff_copy`
--

DROP TABLE IF EXISTS `staff_copy`;
CREATE TABLE IF NOT EXISTS `staff_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(200) DEFAULT NULL,
  `staff_name` varchar(200) DEFAULT NULL,
  `staff_email` varchar(200) DEFAULT NULL,
  `staff_telno` varchar(20) DEFAULT NULL,
  `staff_type` varchar(20) DEFAULT '2',
  `status` varchar(20) DEFAULT NULL,
  `nhifno` varchar(200) DEFAULT NULL,
  `nssfno` varchar(200) DEFAULT NULL,
  `pinno` varchar(200) DEFAULT NULL,
  `dateadded` date DEFAULT NULL,
  `datemodified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` double DEFAULT '0',
  `allowance` double DEFAULT '0',
  `bankcode` varchar(45) DEFAULT NULL,
  `branchcode` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `accountname` varchar(145) DEFAULT NULL,
  `payrollno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_old`
--

DROP TABLE IF EXISTS `staff_old`;
CREATE TABLE IF NOT EXISTS `staff_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(200) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_email` varchar(200) DEFAULT NULL,
  `staff_telno` varchar(20) DEFAULT NULL,
  `staff_type` varchar(20) NOT NULL DEFAULT '2',
  `status` varchar(20) NOT NULL,
  `nhifno` varchar(200) DEFAULT NULL,
  `nssfno` varchar(200) DEFAULT NULL,
  `pinno` varchar(200) DEFAULT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` double DEFAULT '0',
  `allowance` double DEFAULT '0',
  `bankcode` varchar(45) DEFAULT NULL,
  `branchcode` varchar(45) DEFAULT NULL,
  `accountno` varchar(45) DEFAULT NULL,
  `accountname` varchar(145) DEFAULT NULL,
  `payrollno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `national_id` (`national_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `account_type` int(20) NOT NULL DEFAULT '0',
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`, `account_type`, `datemodified`) VALUES
(1, 'Admin Guy', 'Admin Guy', 'admin@hr.com', '21232f297a57a5a743894a0e4a801fc3', 0, '2020-01-24 06:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `wageruns`
--

DROP TABLE IF EXISTS `wageruns`;
CREATE TABLE IF NOT EXISTS `wageruns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wageid` varchar(40) NOT NULL,
  `period` varchar(10) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wageid` (`wageid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wageruns`
--

INSERT INTO `wageruns` (`id`, `wageid`, `period`, `dateadded`) VALUES
(1, 'DDWG-WAGES-X9090-1', '2017/08', '2017-08-18 16:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `wages`
--

DROP TABLE IF EXISTS `wages`;
CREATE TABLE IF NOT EXISTS `wages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wageid` varchar(40) NOT NULL,
  `name` varchar(56) NOT NULL,
  `idno` varchar(45) NOT NULL,
  `mon` double NOT NULL,
  `tue` double NOT NULL,
  `wed` double NOT NULL,
  `thur` double NOT NULL,
  `fri` double NOT NULL,
  `sat` double NOT NULL,
  `sun` double NOT NULL,
  `nhif` double NOT NULL,
  `nssf` double NOT NULL,
  `tot` double NOT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wages`
--

INSERT INTO `wages` (`id`, `wageid`, `name`, `idno`, `mon`, `tue`, `wed`, `thur`, `fri`, `sat`, `sun`, `nhif`, `nssf`, `tot`, `dateadded`, `datemodified`, `startdate`, `enddate`) VALUES
(1, 'DDWG-WAGES-X9090-1', 'Simon Mbugua', '2566658', 2000, 2000, 2000, 2000, 2000, 2000, 0, 0, 0, 12000, '2017-08-18', '2017-08-18 16:06:22', '2017-08-13', '2017-08-19'),
(2, 'DDWG-WAGES-X9090-1', 'phillip amwayi', '2533665', 0, 0, 0, 1000, 1000, 0, 0, 0, 0, 2000, '2017-08-18', '2017-08-18 16:06:22', '2017-08-13', '2017-08-19'),
(3, 'DDWG-WAGES-X9090-1', 'jane wanjiru', '2225225', 500, 500, 500, 500, 500, 0, 0, 0, 0, 2500, '2017-08-18', '2017-08-18 16:06:22', '2017-08-13', '2017-08-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
