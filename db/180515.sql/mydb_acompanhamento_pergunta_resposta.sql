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
-- Table structure for table `acompanhamento_pergunta_resposta`
--

DROP TABLE IF EXISTS `acompanhamento_pergunta_resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acompanhamento_pergunta_resposta` (
  `idacompanhamento` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL,
  `idresposta` int(11) NOT NULL,
  PRIMARY KEY (`idacompanhamento`,`idpergunta`,`idresposta`),
  KEY `pkPerg1_idx` (`idpergunta`),
  KEY `pkResp1_idx` (`idresposta`),
  CONSTRAINT `pkAcomp1` FOREIGN KEY (`idacompanhamento`) REFERENCES `acompanhamento` (`idacompanhamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pkPerg1` FOREIGN KEY (`idpergunta`) REFERENCES `pergunta` (`idpergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pkResp1` FOREIGN KEY (`idresposta`) REFERENCES `pergunta_resposta` (`idpergunta_resposta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acompanhamento_pergunta_resposta`
--

LOCK TABLES `acompanhamento_pergunta_resposta` WRITE;
/*!40000 ALTER TABLE `acompanhamento_pergunta_resposta` DISABLE KEYS */;
INSERT INTO `acompanhamento_pergunta_resposta` VALUES (15,1,2),(15,2,4),(15,3,8),(15,4,12),(15,5,14),(15,6,20),(15,7,23),(15,8,25),(15,9,27);
/*!40000 ALTER TABLE `acompanhamento_pergunta_resposta` ENABLE KEYS */;
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
