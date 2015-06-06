-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pergunta` (
  `idpergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(155) DEFAULT NULL,
  `idperguntagrupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpergunta`),
  KEY `pkGrupoPerg_idx` (`idperguntagrupo`),
  CONSTRAINT `pkGrupoPerg` FOREIGN KEY (`idperguntagrupo`) REFERENCES `pergunta_grupo` (`idpergunta_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta`
--

LOCK TABLES `pergunta` WRITE;
/*!40000 ALTER TABLE `pergunta` DISABLE KEYS */;
INSERT INTO `pergunta` VALUES (1,'Chuvoso ',2),(2,'Nublado ',2),(3,'O leito do rio apresenta em sua composição maior percentual de',2),(4,'Presença de barreiras?',1),(5,'As áreas a beira do rio são ocupadas por:',1),(6,'Há dutos de descaraga desembocando no rio?',1),(7,'Existe rede de coleta de esgoto?',1),(8,'Existe rede de distribuição de água?',1),(9,'Existe rede de drenagem de águas pluviais?',1),(10,'Aparência da água:',1),(11,'Cor da água:',1),(12,'Lixo flutuante (plásticos, papeis, resto de vegetação etc)',1),(13,'Lixo acumulado nas margens (plásticos, papeis, resto de vegetação, entulhos  etc)',1),(14,'Mata ciliar na margem do rio ',2),(15,'Topo da margem ',2),(16,'Odor:',1);
/*!40000 ALTER TABLE `pergunta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-18 22:05:07
