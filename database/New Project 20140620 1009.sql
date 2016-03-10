-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.36-community-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema stp_2014
--

CREATE DATABASE IF NOT EXISTS stp_2014;
USE stp_2014;

--
-- Definition of table `p_regi`
--

DROP TABLE IF EXISTS `p_regi`;
CREATE TABLE `p_regi` (
  `userno` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_regi`
--

/*!40000 ALTER TABLE `p_regi` DISABLE KEYS */;
INSERT INTO `p_regi` (`userno`,`name`,`gender`,`age`,`email`,`phone`,`user_id`,`password`,`city`) VALUES 
 (1,'Drishti','Female',18,'say2drishti@gmail.com',2147483647,'Drishti/18/1@GoDaddy.com','drishti@1','Kolkata');
/*!40000 ALTER TABLE `p_regi` ENABLE KEYS */;


--
-- Definition of table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `srno` int(10) DEFAULT NULL,
  `pro_id` varchar(20) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`srno`,`pro_id`,`category`,`price`,`status`) VALUES 
 (1,'sw1s','swimming',1000,'on'),
 (2,'sw2s','swimming',800,'on'),
 (3,'sw3s','swimming',1000,'on'),
 (4,'sw4s','swimming',850,'on'),
 (5,'sw5s','swimming',750,'on'),
 (6,'sw6s','swimming',900,'on'),
 (7,'sw7s','swimming',1200,'on'),
 (8,'sw8s','swimming',800,'on'),
 (9,'y8s','sports and fitness',500,'on'),
 (10,'y7s','sports and fitness',500,'on'),
 (11,'y6s','sports and fitness',600,'on'),
 (12,'y2s','sports and fitness',500,'on'),
 (13,'y3s','sports and fitness',650,'on'),
 (14,'y4s','sports and fitness',550,'on'),
 (15,'bx1s','boxing',450,'on'),
 (16,'bx2s','boxing',750,'on'),
 (17,'bx3s','boxing',799,'on'),
 (18,'bx4s','boxing',1099,'on'),
 (19,'bx5s','boxing',900,'on'),
 (20,'bx6s','boxing',800,'on'),
 (21,'bx7s','boxing',400,'on'),
 (22,'bx8s','boxing',400,'on'),
 (23,'ch1s','chess',350,'on'),
 (24,'ch2s','chess',250,'on'),
 (25,'ch3s','chess',300,'on'),
 (26,'ch4s','chess',500,'on'),
 (27,'ch5s','chess',400,'on'),
 (28,'ch6s','chess',400,'on'),
 (29,'ch7s','chess',700,'on'),
 (30,'ch8s','chess',400,'on'),
 (31,'c1s','cricket',800,'on'),
 (32,'c2s','cricket',999,'on'),
 (33,'c3s','cricket',899,'on'),
 (34,'c4s','cricket',1099,'on'),
 (35,'c5s','cricket',1500,'on'),
 (36,'c6s','cricket',1500,'on'),
 (37,'c7s','cricket',800,'on'),
 (38,'c8s','cricket',600,'on'),
 (39,'d1s','darts',600,'on'),
 (40,'d2s','darts',500,'on'),
 (41,'d3s','darts',700,'on'),
 (42,'d4s','darts',500,'on'),
 (43,'d5s','darts',650,'on'),
 (44,'d6s','darts',750,'on'),
 (45,'d7s','darts',680,'on'),
 (46,'d8s','darts',660,'on'),
 (47,'fb1s','football',1000,'on'),
 (48,'fb2s','football',1100,'on'),
 (49,'fb3s','football',1100,'on'),
 (50,'fb4s','football',2100,'on'),
 (51,'fb5s','football',1800,'on'),
 (52,'fb6s','football',800,'on'),
 (53,'fb7s','football',1900,'on'),
 (54,'fb8s','football',1700,'on'),
 (55,'g1s','gym gloves',700,'on'),
 (56,'g2s','gym gloves',725,'on'),
 (57,'g3s','gym gloves',625,'on'),
 (58,'g4s','gym gloves',825,'on'),
 (59,'g5s','gym gloves',850,'on'),
 (60,'g6s','gym gloves',750,'on'),
 (61,'g7s','gym gloves',650,'on'),
 (62,'g8s','gym gloves',1050,'on'),
 (63,'go1s','golf',1200,'on'),
 (64,'go2s','golf',4000,'on'),
 (65,'go3s','golf',800,'on'),
 (66,'go4s','golf',900,'on'),
 (67,'go5s','golf',1300,'on'),
 (68,'go6s','golf',1700,'on'),
 (69,'go7s','golf',1200,'on'),
 (70,'go8s','golf',1200,'on'),
 (71,'n1s','nike',1200,'on'),
 (72,'n2s','nike',1300,'on'),
 (73,'n3s','nike',1250,'on'),
 (74,'n4s','nike',1450,'on'),
 (75,'n5s','nike',1350,'on'),
 (76,'n6s','nike',1450,'on'),
 (77,'n7s','nike',1500,'on'),
 (78,'sk1s','skating',1500,'on'),
 (79,'sk2s','skating',1600,'on'),
 (80,'sk3s','skating',1600,'on'),
 (81,'sk4s','skating',900,'on'),
 (82,'sk5s','skating',1400,'on'),
 (83,'sk6s','skating',1700,'on'),
 (84,'sk7s','skating',1750,'on'),
 (85,'sk8s','skating',1350,'on'),
 (86,'v1s','vega',1300,'on'),
 (87,'v2s','vega',1400,'on'),
 (88,'v3s','vega',1450,'on'),
 (89,'v4s','vega',1400,'on'),
 (90,'v5s','vega',1500,'on'),
 (91,'v6s','vega',1450,'on'),
 (92,'v7s','vega',1600,'on'),
 (93,'v8s','vega',1500,'on'),
 (94,'vb1s','volleyball',500,'on'),
 (95,'vb2s','volleyball',600,'on'),
 (96,'vb3s','volleyball',650,'on'),
 (97,'vb4s','volleyball',650,'on'),
 (98,'vb5s','volleyball',750,'on'),
 (99,'vb6s','volleyball',800,'on'),
 (100,'vb7s','volleyball',7500,'on'),
 (101,'vb8s','volleyball',900,'on'),
 (102,'m1s','yoga mats',400,'on'),
 (103,'m2s','yoga mats',350,'on'),
 (104,'m3s','yoga mats',350,'on'),
 (105,'m4s','yoga mats',450,'on'),
 (106,'m5s','yoga mats',400,'on'),
 (107,'m6s','yoga mats',450,'on'),
 (108,'m7s','yoga mats',450,'on'),
 (109,'m8s','yoga mats',350,'on'),
 (110,'y1s','sports and fitness',700,'on'),
 (111,'y5s','sports and fitness',750,'on'),
 (112,'mc1','memory card',700,'on'),
 (113,'mc2','memory card',700,'on'),
 (114,'mc3','memory card',750,'on'),
 (115,'mc4','memory card',650,'on'),
 (116,'mc5','memory card',650,'on'),
 (117,'mc6','memory card',650,'on'),
 (118,'cb1','camera bags',650,'on'),
 (119,'cb2','camera bags',850,'on'),
 (120,'cb3','camera bags',950,'on'),
 (121,'cb4','camera bags',950,'on'),
 (122,'cb5','camera bags',925,'on'),
 (123,'cb6','camera bags',925,'on'),
 (124,'ehd1','external hard disk',1125,'on'),
 (125,'ehd2','external hard disk',1125,'on'),
 (126,'ehd3','external hard disk',1525,'on'),
 (127,'ehd4','external hard disk',1525,'on'),
 (128,'ehd5','external hard disk',1725,'on'),
 (129,'ehd6','external hard disk',1725,'on'),
 (130,'hp1','headphones',725,'off'),
 (131,'hp2','headphones',825,'on'),
 (132,'hp3','headphones',925,'on'),
 (133,'hp4','headphones',950,'on'),
 (134,'hp5','headphones',1050,'on'),
 (135,'hp6','headphones',1150,'on'),
 (136,'ip1','ipods',1150,'on'),
 (137,'ip2','ipods',1250,'on'),
 (138,'ip3','ipods',2150,'on'),
 (139,'ip4','ipods',2250,'on'),
 (140,'ip5','ipods',2250,'on'),
 (141,'ip6','ipods',3250,'on'),
 (142,'le1','lenses',1250,'on'),
 (143,'le2','lenses',1750,'on'),
 (144,'le3','lenses',2150,'on'),
 (145,'le4','lenses',2750,'on'),
 (146,'le5','lenses',3250,'on'),
 (147,'le6','lenses',3050,'on'),
 (148,'m1','mouses',450,'on'),
 (149,'m2','mouses',550,'on'),
 (150,'m3','mouses',575,'on'),
 (151,'m4','mouses',625,'on'),
 (152,'m5','mouses',625,'on'),
 (153,'m6','mouses',725,'on'),
 (154,'mp1','mp3 players',725,'on'),
 (155,'mp2','mp3 players',725,'on'),
 (156,'mp3','mp3 players',825,'on'),
 (157,'mp4','mp3 players',825,'on'),
 (158,'mp5','mp3 players',825,'on'),
 (159,'mp6','mp3 players',875,'on'),
 (160,'pd1','pen drives',875,'off'),
 (161,'pd2','pen drives',575,'on'),
 (162,'pd3','pen drives',975,'on'),
 (163,'pd4','pen drives',975,'on'),
 (164,'pd5','pen drives',1075,'on'),
 (165,'pd6','pen drives',1875,'on'),
 (166,'pri1','printers',1875,'on'),
 (167,'pri2','printers',2075,'on'),
 (168,'pri3','printers',2175,'on'),
 (169,'pri4','printers',2275,'on'),
 (170,'pri5','printers',2875,'on'),
 (171,'pri6','printers',2975,'on'),
 (172,'sp1','speakers',275,'on'),
 (173,'sp2','speakers',375,'on'),
 (174,'sp3','speakers',325,'on'),
 (1741,'sp4','speakers',425,'on'),
 (175,'sp5','speakers',425,'on'),
 (176,'sp6','speakers',525,'on'),
 (177,'tri1','tripod',1525,'on'),
 (178,'tri2','tripod',1425,'on'),
 (179,'tri3','tripod',1225,'on'),
 (180,'tri4','tripod',1375,'on'),
 (181,'tri5','tripod',1875,'on'),
 (182,'tri6','tripod',2275,'on'),
 (183,'vi6','video players',975,'on'),
 (184,'vi2','video players',1075,'on'),
 (185,'vi3','video players',1275,'on'),
 (186,'vi4','video players',1575,'on'),
 (187,'vi5','video players',1875,'on'),
 (188,'vi6','video players',1875,'on'),
 (189,'iw1','indian writings',175,'on'),
 (190,'iw2','indian writings',225,'on'),
 (191,'iw3','indian writings',275,'on'),
 (192,'ac1','academics',375,'on'),
 (193,'ac2','academics',345,'on'),
 (194,'ac3','academics',345,'on'),
 (195,'ac4','academics',375,'on'),
 (196,'ac5','academics',275,'on'),
 (197,'ac6','academics',325,'on'),
 (198,'bb1','biography',325,'on'),
 (199,'bb2','biography',325,'on'),
 (200,'bb3','biography',375,'on'),
 (201,'bb4','biography',375,'on'),
 (202,'bb5','biography',375,'on'),
 (203,'bb6','biography',375,'on'),
 (204,'bi1','business',375,'on'),
 (205,'bi2','business',475,'on'),
 (206,'bi3','business',475,'on'),
 (207,'bi4','business',425,'on'),
 (208,'bi5','business',425,'on'),
 (209,'bi6','business',525,'on'),
 (210,'l1','literature',525,'on'),
 (211,'l2','literature',525,'on'),
 (212,'l3','literature',425,'on'),
 (213,'l4','literature',425,'on'),
 (214,'l5','literature',475,'on'),
 (215,'l6','literature',475,'on'),
 (216,'ps21','ps2',475,'on'),
 (217,'ps22','ps2',375,'on'),
 (218,'ps23','ps2',535,'on'),
 (219,'ps24','ps2',535,'on'),
 (220,'ps25','ps2',435,'on'),
 (221,'ps26','ps2',435,'on'),
 (222,'ps31','ps3',435,'on'),
 (223,'ps32','ps3',435,'on'),
 (224,'ps33','ps3',735,'on'),
 (225,'ps34','ps3',735,'on'),
 (226,'ps35','ps3',735,'on'),
 (227,'ps36','ps3',735,'on'),
 (228,'psp1','psp',1035,'on'),
 (229,'psp2','psp',1035,'on'),
 (230,'psp3','psp',935,'on'),
 (231,'psp4','psp',935,'on'),
 (232,'psp5','psp',935,'on'),
 (233,'psp6','psp',1435,'on'),
 (234,'ac1','air conditioner',42829,'on'),
 (235,'ac2','air conditioner',34990,'on'),
 (236,'ac3','air conditioner',25290,'on'),
 (237,'wp1','water purifier',2159,'on'),
 (238,'vc1','vacuum cleaner',3299,'off'),
 (239,'vc2','vacuum cleaner',19199,'on'),
 (240,'iron1','Iron',894,'on'),
 (241,'iron2','Iron',2995,'on'),
 (242,'mix1','mixer/juicer/grinder',4895,'on'),
 (243,'mix2','mixer/juicer/grinder',1999,'on'),
 (244,'mix3','mixer/juicer/grinder',1805,'on'),
 (245,'ict1','induction cook tops',2536,'on'),
 (246,'ict2','induction cook tops',3999,'on'),
 (247,'ict3','induction cook tops',4343,'on'),
 (248,'ref1','refrigerators',22440,'on'),
 (249,'ref2','refrigerators',91950,'on'),
 (249,'ref2','refrigerators',91950,'on'),
 (250,'cur1','curtains',475,'on'),
 (251,'cur2','curtains',499,'on'),
 (252,'mts1','mats',499,'on'),
 (253,'mts2','mats',795,'on'),
 (254,'bt1','bath towels',499,'on'),
 (255,'bt2','bath towels',2195,'on'),
 (256,'bt3','bath towels',1047,'on'),
 (257,'bt4','bath towels',799,'on'),
 (258,'pil1','pillows',495,'on'),
 (259,'pil2','pillows',497,'on'),
 (260,'pil3','pillows',699,'on'),
 (261,'bl1','blankets',2659,'on'),
 (262,'bl2','blankets',2799,'on'),
 (263,'bl3','blankets',1099,'on'),
 (264,'bl4','blankets',2659,'on'),
 (265,'bs1','bed sheets',1299,'on'),
 (266,'bs2','bed sheets',3499,'on'),
 (267,'bs3','bed sheets',1057,'on'),
 (268,'bs4','bed sheets',1699,'on'),
 (269,'cnd1','condiment sets',825,'on'),
 (270,'cnd2','condiment sets',179,'on'),
 (271,'cnd3','condiment sets',999,'on'),
 (272,'cnd4','condiment sets',343,'on'),
 (273,'cnd5','condiment sets',699,'on'),
 (274,'cnd6','condiment sets',499,'on'),
 (275,'cnc1','cutlery and crockery',3515,'on'),
 (276,'cnc2','cutlery and crockery',556,'on'),
 (277,'cnc3','cutlery and crockery',1395,'on'),
 (278,'cnc4','cutlery and crockery',4091,'on'),
 (279,'cnc5','cutlery and crockery',6788,'on'),
 (280,'cnc6','cutlery and crockery',1360,'on'),
 (281,'pan1','pans',646,'on'),
 (282,'pan2','pans',824,'on'),
 (283,'pan3','pans',473,'on'),
 (284,'pan4','pans',1375,'on'),
 (285,'pan5','pans',1251,'on'),
 (286,'pan6','pans',3090,'on'),
 (287,'pc1','pressure cookers',3515,'on'),
 (288,'pc2','pressure cookers',1820,'on'),
 (289,'pc3','pressure cookers',1071,'on'),
 (290,'pc4','pressure cookers',1045,'on'),
 (291,'pc5','pressure cookers',1249,'on'),
 (292,'pc6','pressure cookers',1568,'on'),
 (295,'s1','science and technology',568,'on'),
 (296,'s2','science and technology',580,'on'),
 (297,'s3','science and technology',480,'on'),
 (298,'s4','science and technology',430,'on'),
 (299,'s5','science and technology',630,'on'),
 (300,'s6','science and technology',330,'on'),
 (301,'bl5','blankets',1999,'on'),
 (302,'bl6','blankets',2599,'on'),
 (303,'bs5','bed sheets',1699,'on'),
 (304,'bs6','bed sheets',8495,'on');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


--
-- Definition of table `regi`
--

DROP TABLE IF EXISTS `regi`;
CREATE TABLE `regi` (
  `sr_no` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `U_ID` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi`
--

/*!40000 ALTER TABLE `regi` DISABLE KEYS */;
INSERT INTO `regi` (`sr_no`,`name`,`address`,`age`,`password`,`gender`,`U_ID`) VALUES 
 (1,'Drishti',' ahiritolla',18,'efg','Female','Drishti/18/1@ hpes'),
 (2,'Hima','malapara',19,'567','Female','Hima/19/2@ hpes'),
 (3,'Armaan',' Rabindra Sarani',21,'|}~','Male','Armaan/21/3@ hpes'),
 (4,'Sushila',' bkpal',29,'egf','Female','Sushila/29/4@ hpes');
/*!40000 ALTER TABLE `regi` ENABLE KEYS */;


--
-- Definition of table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `roll_no` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`roll_no`,`name`,`age`,`dept`) VALUES 
 ('311','drish',18,'cse'),
 ('11','richa',20,'ece'),
 ('22','annie',21,'it');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
