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
-- Table structure for table `pergunta_resposta`
--

DROP TABLE IF EXISTS `pergunta_resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pergunta_resposta` (
  `idpergunta_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `idpergunta` int(11) NOT NULL,
  `resposta` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idpergunta_resposta`,`idpergunta`),
  KEY `fk_pergunta_idx` (`idpergunta`),
  CONSTRAINT `fk_pergunta` FOREIGN KEY (`idpergunta`) REFERENCES `pergunta` (`idpergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta_resposta`
--

LOCK TABLES `pergunta_resposta` WRITE;
/*!40000 ALTER TABLE `pergunta_resposta` DISABLE KEYS */;
INSERT INTO `pergunta_resposta` VALUES (1,1,'não'),(2,1,'últimas 24 horas '),(3,1,'durante a coleta de dados'),(4,2,'não'),(5,2,'pouco'),(6,2,'forte'),(7,3,'limo/lama'),(8,3,'areia – grãos peq'),(9,3,'pedras'),(10,3,'cascalho'),(11,3,'impossível de ver'),(12,4,'diques'),(13,4,'outros tipos de obstáculos'),(14,5,'casas'),(15,5,'matas'),(16,5,'clubes/ área de lazer'),(17,4,'industrias'),(18,5,'favelas'),(19,5,'rua, avenida, estrada'),(20,6,'Há dutos de descaraga desembocando no rio'),(21,6,'sim'),(22,6,'não'),(23,7,'sim'),(24,7,'não'),(25,8,'sim'),(26,8,'não'),(27,9,'sim'),(28,9,'não');
/*!40000 ALTER TABLE `pergunta_resposta` ENABLE KEYS */;
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
