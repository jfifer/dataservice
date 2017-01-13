-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: portal
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tmp_Top5`
--

DROP TABLE IF EXISTS `tmp_Top5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_Top5` (
  `v_companyName` varchar(255) DEFAULT NULL,
  `v_customerId` int(11) DEFAULT NULL,
  `didCount` int(11) DEFAULT NULL,
  `userCount` int(11) DEFAULT NULL,
  `extCount` int(11) DEFAULT NULL,
  `v_mailCount` int(11) DEFAULT NULL,
  `v_aaCount` int(11) DEFAULT NULL,
  `v_confCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_Top5`
--

LOCK TABLES `tmp_Top5` WRITE;
/*!40000 ALTER TABLE `tmp_Top5` DISABLE KEYS */;
INSERT INTO `tmp_Top5` VALUES ('BNCVoice & Data',203,20,12,35,144,14,3),('DiReggio Advertising',205,12,6,8,11,3,0),('Touchtone Technologies Inc.',210,4,3,2,7,2,0),('DOC James Tobacco, Inc.',230,2,2,3,7,2,0),('Remax Ace Realty',264,3,2,3,9,3,0),('Pure Physique',272,3,3,4,12,3,0),('Random Farms',285,2,3,2,21,3,0),('Yorktown Tire',291,3,2,7,12,2,0),('Hudson Sound Brokerage Corp',300,5,2,6,11,3,1),('J Giardina Insurance Agency LTD',328,5,5,5,16,1,0),('North County Oil',345,7,1,4,11,3,0),('The Health Search Group',347,31,6,23,37,2,1),('April\'s Child',361,4,2,10,13,2,1),('Meadowland of Carmel',391,106,10,67,111,12,0),('Temple Shaaray Tefila',409,25,7,37,36,3,0),('ACHS HVAC',410,2,3,1,3,2,0),('Robert Feiner',425,6,3,20,21,6,0),('Northern Auto',426,6,6,14,23,5,0),('Kutter Group',427,4,3,0,2,1,1),('NRL Wealth Creation Strategies',436,19,24,49,58,2,0),('Tarrytown Music Hall',442,2,7,21,38,8,2),('Bill Volz Westchester',464,34,6,30,38,2,0),('Life The Place To Be-dba',468,5,2,17,36,6,0),('United Door Corporation',478,17,4,1,24,6,0),('Brewster Ford',497,35,4,29,46,5,0),('Jon Kearney Esq',500,2,2,3,19,2,0),('Eco-Bags Products Inc.',511,5,3,7,15,5,2),('Key Chrysler Jeep Dodge',523,25,8,65,78,5,2),('New Carlisle Chrysler',524,4,3,21,43,6,0),('The MDI Group Inc.',551,3,3,2,7,2,1),('Little Joes',573,2,2,4,2,2,0),('Newman Resources',576,5,2,6,11,3,0),('Superior Chrysler Dodge Jeep',589,7,6,44,59,3,1),('David Howell &amp; Company',590,2,2,7,13,5,0),('Susies Smartcookies',595,1,1,2,4,2,0),('Keller Williams',599,3,2,6,22,2,0),('Swope Family of Dealerships',654,70,6,206,250,24,1),('People To People',696,2,3,10,16,3,0),('Foundation For Economic Education',755,8,6,15,19,2,1),('ClientWise',773,15,14,16,53,2,1),('Giles Communications',774,23,2,6,9,2,1),('Keystone Paper & Box',793,4,3,33,47,3,1),('Safe Haven',800,2,4,4,15,2,0),('Preferred Properties',801,5,3,9,16,3,0),('John McCormack Bloodstock',805,2,2,5,9,2,0),('Central Electric',813,1,2,2,5,2,0),('Dr. Richard Harvey',849,2,2,9,15,2,0),('Berkshire Hathaway HomeServices River Towns Real Estate',863,5,4,30,56,3,0),('BRC',866,5,4,3,9,4,0),('Nerak',910,12,7,16,19,2,0),('Girl Scouts Heart of Hudson',921,15,85,90,146,10,5),('Attorney\'s Title',929,8,3,12,19,3,0),('Prestige Pro Contracting Inc.',934,10,2,6,17,6,0),('KLS Transportation',935,6,4,4,10,2,0),('Alliance For Safe Kids',956,2,3,4,11,2,1),('Koren Law Group',958,16,3,8,12,3,0),('SJS Pharmacy',988,3,3,8,1,2,0),('Albert Palancia Insurance Inc.',1007,6,2,16,29,4,0),('A & J Home Care',1009,8,4,9,16,2,0),('Allstate - Tuckahoe',1042,1,5,4,7,3,0),('Good Bread Bakery',1061,2,2,6,5,3,0),('Novick Edelstein Lubell Reisman - Yonkers',1084,3,7,58,66,2,1),('Leo F Kearns Funeral Homes',1120,6,2,27,0,2,0),('Slutsky McMorris &amp; Meehan',1136,6,3,7,9,2,0),('Pattison &amp; Flannery',1154,4,3,7,14,3,0),('Aqueduct Services',1155,4,5,7,7,2,0),('Creative Video Corporation',1177,1,4,4,17,4,0),('Acura of Bedford Hills',1234,32,3,32,61,25,0),('Dr. Joseph Cucci',1242,4,3,7,5,2,0),('INPEx',1256,3,7,23,82,6,3),('Tarry Med',1260,4,3,10,30,4,0),('Richard Madison Associates',1373,4,3,4,10,3,0),('Altium Wealth',1405,62,5,51,95,39,0),('Flip a Hit',1436,2,1,2,24,10,0),('BKR Lamar Retail Services LLC',1565,1,1,4,8,2,0),('Fashion Floor',1590,4,2,2,12,2,0),('Wilson and Son LTD',1694,3,4,12,26,6,0),('Avery Management Group - Carsmetics',2006,3,1,2,73,14,0),('Guyan Golf &amp; Country Club',2221,7,6,27,48,4,1),('Barrier Beach Management',2241,4,2,6,9,2,0),('Allstate - Shaw Agency',2260,1,1,0,0,0,0),('Allstate - Victor Varela Agency',2266,5,3,6,12,2,0),('Corrigan and Baker LLC',2276,9,2,5,8,2,0),('Flavor Solutions, Inc',2372,4,1,10,19,5,0),('Orrick and Company',2373,5,2,8,12,2,0),('Suffolk Glass',2423,19,5,12,34,6,0),('Professional Financial Consultants',2462,5,2,10,22,3,1),('ZED Development',2493,5,1,8,11,2,0),('Sampogna, Sullivan, Gargano and Bonafede',2509,11,5,64,71,4,0),('Great Success Realty',2510,22,3,23,36,3,0),('Perfect Equities',2511,13,2,9,28,3,0),('Murray Schoen and Homer Inc',2536,11,2,11,14,2,0),('Many\'s Express',2650,5,2,2,5,2,0),('Breiter and Raines, LLP',2713,2,2,5,10,2,0),('Keppler Title Agency, LLC',2718,2,2,8,10,2,0),('The Metropolitan Agency',2816,5,3,6,11,3,0),('John Chiaia',2952,1,1,2,5,2,0),('P. Morrissey Contracting Inc.',2995,3,3,6,10,2,0),('360 Corporate Benefit Advisors',2996,4,2,11,14,2,0),('Bridgeport Hospital dba Cardiac Specialists',2999,35,11,139,45,2,0),('Burke ERC',3070,8,5,9,19,3,0),('Kilter Group LLC',3236,2,2,1,3,2,0),('D&B Auto',3379,4,2,4,3,2,0),('Chipman Mazzucco Land & Pennarola LLC',3447,9,5,27,35,4,0),('Search Smart',3555,9,9,7,15,3,0),('Alan D Lichtenstein',3580,4,2,3,6,2,0),('Riko\'s Pizza',3618,11,2,14,26,10,0),('Enterprise Food Products USA Inc',3673,7,4,13,20,3,1),('PEC Group of NY Inc',4151,5,3,7,12,2,0),('R n B Enterprises',4352,3,3,20,23,2,0),('Samalin Investment Council LLC',4431,17,3,10,12,2,0),('Patient Care Center',4447,4,5,13,15,16,0),('The Ekberg Family Law Group LLC',4572,8,2,5,7,2,0),('IPA Manhattan',4591,2,4,6,8,2,0),('Cindy Hoffman D.O., P.C.',4655,5,2,14,40,9,0),('East Side Movers',4748,7,4,19,24,4,0),('Allstate - Robert LaBarbera Insurance',4810,8,5,4,8,2,0),('Kantrowitz Goldhamer &amp; Graifman',4937,36,8,46,64,11,13),('Jan Drywall Corp',4938,3,2,2,1,2,0),('Yorktown Stage',5036,2,2,4,11,6,0),('Shamrock Network Technologies LLC',5038,4,6,4,14,2,0),('Jet Limousine Service Inc',5060,5,2,3,6,2,0),('Allstate - Fuentes Insurance Agency Inc',5378,2,3,6,8,2,0),('Carlinsky Dunn &amp; Pasquariello',5530,10,2,7,13,2,2),('Pascale &amp; LaMorte LLC',5611,8,6,5,9,2,0),('Mahoney Asset Management',5615,12,8,10,20,4,1),('Goldstein Associates',5616,11,2,7,15,2,0),('Allstate - Anthony Sorrentino',5740,5,4,9,15,2,0),('The Atlantic Group',6027,96,4,67,73,3,3),('Shared Line Appearance ',6381,2,1,4,8,2,0),('Tiffany Outdoor',6443,4,2,7,9,2,0),('MSP-Ignite',6457,5,2,2,8,2,1),('Spector Eye Care',6926,9,5,27,28,9,0),('The Rye Arts Center',7030,3,5,9,16,4,0),('Bar 6',7240,8,3,4,10,2,0),('Derecktor Shipyards',7365,5,4,11,14,3,1),('Demansys Energy',7383,4,5,1,9,4,0),('Direct Connections ',7658,3,2,2,3,2,0),('Roberts IT Consulting',7854,1,3,2,7,2,0),('Neave Group Outdoor Solutions',7950,8,10,23,31,2,0),('One Girl Cookies',7999,5,2,12,14,5,0),('Spring Valley Housing Authority',8015,4,2,6,8,2,0),('Mt Kisco Honda',8043,4,8,40,50,3,0),('American Waste',8092,3,2,3,6,2,0),('Today\'s Students Tomorrow\'s Teachers',8122,3,4,15,18,4,2),('Frank Catalina Esq',8248,3,3,7,4,2,0),('Altech Services',8464,18,6,13,24,3,0),('Food Bank',8543,36,21,49,52,8,0),('IQ Landscaping',8824,3,2,9,12,2,0),('Marval Industries',9145,3,2,36,34,4,0),('Metropolis Country Club',9404,7,3,48,56,6,0),('Gregory Packaging, Inc.',9780,19,5,55,54,3,5),('Carlinksy Dunn &amp; Pasquariello - Hicksville',9830,10,1,7,12,2,0),('The Bar Room (Harry)',9863,5,2,4,5,2,0),('Kinrose Partners',10190,10,3,8,10,2,1),('Rey Insurance Agency',10284,2,2,8,32,8,0),('Bronx Honda',10402,6,5,53,64,5,0),('Golden Knights Limo',10514,5,3,1,1,2,0),('NationWide Coils',10517,9,2,6,7,2,0),('Weiss Advisory Group',10660,9,2,11,13,5,0),('Bergen Funeral',11079,8,8,27,30,2,0),('Valrhona Inc',11081,2,3,21,22,2,0),('Sea Board Solar Operations LLC',11113,2,4,12,18,3,0),('Long Island ENT',11313,7,2,51,63,12,0),('The Murphy Agency',11318,4,2,6,8,2,0),('Kicksplosion',11397,2,2,7,9,2,0),('RTA Inc.',11419,1,1,3,4,2,0),('Weston Field Club',11560,2,2,9,14,3,0),('Maureen McLennon',11571,2,2,1,1,2,0),('Allstate Mike Daly',11734,2,5,4,6,1,0),('Harrison Edwards',12289,4,3,10,13,3,0);
/*!40000 ALTER TABLE `tmp_Top5` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-06 12:35:02
