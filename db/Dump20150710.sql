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
-- Table structure for table `acompanhamento`
--

DROP TABLE IF EXISTS `acompanhamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acompanhamento` (
  `idacompanhamento` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_idgrupo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `dt_cadastro` varchar(20) DEFAULT NULL,
  `hr_cadastro` varchar(10) DEFAULT NULL,
  `area` varchar(155) DEFAULT NULL,
  `largura` varchar(45) DEFAULT NULL,
  `profundidade` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `dt_cadastro2` varchar(45) DEFAULT NULL,
  `trecho_idtrecho` int(11) DEFAULT NULL,
  PRIMARY KEY (`idacompanhamento`),
  KEY `fk_acompanhamento_grupo1_idx` (`grupo_idgrupo`),
  KEY `fk_acompanhamento_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_acompanhamento_trecho_idx` (`trecho_idtrecho`),
  CONSTRAINT `fk_acompanhamento_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acompanhamento_trecho` FOREIGN KEY (`trecho_idtrecho`) REFERENCES `trecho` (`idtrecho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acompanhamento_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acompanhamento`
--

LOCK TABLES `acompanhamento` WRITE;
/*!40000 ALTER TABLE `acompanhamento` DISABLE KEYS */;
INSERT INTO `acompanhamento` VALUES (49,1,4,'1434405600','01:01:01','area','10','10','-22.823198','-42.997081',NULL,1),(50,1,4,'1434492000','01:01:01','area','10','10','-22.823198','-42.997081',NULL,1),(51,2,5,'1434405600','10:10:11','aare','larg','prof','1','2','1434497446',2);
/*!40000 ALTER TABLE `acompanhamento` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `acompanhamento_pergunta_resposta` VALUES (49,1,1),(50,1,2),(51,1,1),(49,2,4),(50,2,5),(51,2,5),(49,3,8),(50,3,8),(51,3,8),(49,4,13),(50,4,13),(51,4,13),(49,5,14),(50,5,16),(51,5,15),(49,6,20),(50,6,20),(51,6,20),(49,7,24),(50,7,24),(51,7,24),(49,8,25),(50,8,26),(51,8,26),(49,9,28),(50,9,28),(51,9,28),(49,10,30),(50,10,32),(51,10,31),(49,11,33),(50,11,35),(51,11,34),(49,12,40),(50,12,41),(51,12,40),(49,13,43),(50,13,44),(51,13,43),(49,14,45),(50,14,46),(51,14,46),(49,15,49),(50,15,49),(51,15,49),(49,17,53),(50,17,53),(51,17,53);
/*!40000 ALTER TABLE `acompanhamento_pergunta_resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bacia`
--

DROP TABLE IF EXISTS `bacia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bacia` (
  `idbacia` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `status` enum('Ativo','Inativo','','') NOT NULL,
  PRIMARY KEY (`idbacia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bacia`
--

LOCK TABLES `bacia` WRITE;
/*!40000 ALTER TABLE `bacia` DISABLE KEYS */;
INSERT INTO `bacia` VALUES (1,'Bacia 1','Ativo');
/*!40000 ALTER TABLE `bacia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `dt_criacao` varchar(45) DEFAULT NULL,
  `trecho_idtrecho` int(11) NOT NULL,
  PRIMARY KEY (`idgrupo`),
  KEY `fk_grupo_trecho1_idx` (`trecho_idtrecho`),
  CONSTRAINT `fk_grupo_trecho1` FOREIGN KEY (`trecho_idtrecho`) REFERENCES `trecho` (`idtrecho`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,'Grupo 1','',1),(2,'Grupo 2',NULL,2);
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_usuario`
--

DROP TABLE IF EXISTS `grupo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo_usuario` (
  `grupo_idgrupo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`grupo_idgrupo`,`usuario_idusuario`),
  KEY `fk_grupo_has_usuario_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_grupo_has_usuario_grupo1_idx` (`grupo_idgrupo`),
  CONSTRAINT `fk_grupo_has_usuario_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupo_has_usuario_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_usuario`
--

LOCK TABLES `grupo_usuario` WRITE;
/*!40000 ALTER TABLE `grupo_usuario` DISABLE KEYS */;
INSERT INTO `grupo_usuario` VALUES (1,2);
/*!40000 ALTER TABLE `grupo_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Admin',1),(2,'Coordenador Geral',2),(3,'Coordenador',3),(4,'Monitor',4);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

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
  `exibeGrupo` int(11) DEFAULT '0',
  PRIMARY KEY (`idpergunta`),
  KEY `pkGrupoPerg_idx` (`idperguntagrupo`),
  CONSTRAINT `pkGrupoPerg` FOREIGN KEY (`idperguntagrupo`) REFERENCES `pergunta_grupo` (`idpergunta_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta`
--

LOCK TABLES `pergunta` WRITE;
/*!40000 ALTER TABLE `pergunta` DISABLE KEYS */;
INSERT INTO `pergunta` VALUES (1,'Chuvoso ',2,1),(2,'Nublado ',2,0),(3,'O leito do rio apresenta em sua composição maior percentual de',2,0),(4,'Presença de barreiras?',1,1),(5,'As áreas a beira do rio são ocupadas por',1,0),(6,'Há dutos de descaraga desembocando no rio?',1,0),(7,'Existe rede de coleta de esgoto?',1,0),(8,'Existe rede de distribuição de água?',1,0),(9,'Existe rede de drenagem de águas pluviais?',1,0),(10,'Aparência da água:',1,0),(11,'Cor da água:',1,0),(12,'Lixo flutuante (plásticos, papeis, resto de vegetação etc)',1,0),(13,'Lixo acumulado nas margens (plásticos, papeis, resto de vegetação, entulhos  etc)',1,0),(14,'Mata ciliar na margem do rio ',3,1),(15,'Topo da margem',3,0),(17,'Odor',1,0);
/*!40000 ALTER TABLE `pergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pergunta_grupo`
--

DROP TABLE IF EXISTS `pergunta_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pergunta_grupo` (
  `idpergunta_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idpergunta_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta_grupo`
--

LOCK TABLES `pergunta_grupo` WRITE;
/*!40000 ALTER TABLE `pergunta_grupo` DISABLE KEYS */;
INSERT INTO `pergunta_grupo` VALUES (1,'Características'),(2,'Condições climáticas'),(3,'Cobertura vegetal');
/*!40000 ALTER TABLE `pergunta_grupo` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pergunta_resposta`
--

LOCK TABLES `pergunta_resposta` WRITE;
/*!40000 ALTER TABLE `pergunta_resposta` DISABLE KEYS */;
INSERT INTO `pergunta_resposta` VALUES (1,1,'não'),(2,1,'últimas 24 horas '),(3,1,'durante a coleta de dados'),(4,2,'não'),(5,2,'pouco'),(6,2,'forte'),(7,3,'limo/lama'),(8,3,'areia – grãos peq'),(9,3,'pedras'),(10,3,'cascalho'),(11,3,'impossível de ver'),(12,4,'diques'),(13,4,'outros tipos de obstáculos'),(14,5,'casas'),(15,5,'matas'),(16,5,'clubes/ área de lazer'),(17,4,'industrias'),(18,5,'favelas'),(19,5,'rua, avenida, estrada'),(20,6,'Há dutos de descaraga desembocando no rio'),(21,6,'sim'),(22,6,'não'),(23,7,'sim'),(24,7,'não'),(25,8,'sim'),(26,8,'não'),(27,9,'sim'),(28,9,'não'),(29,10,'parda'),(30,10,'leitosa'),(31,10,'lamacenta'),(32,10,'clara'),(33,11,'verde escuro'),(34,11,'esverdeada'),(35,11,'cor de coca cola ou outra coloração escura'),(36,11,'verde como sopa de ervilha'),(37,11,'cristalina'),(38,11,'amarelada'),(39,12,'muito lixo'),(40,12,'pouco lixo'),(41,12,'nenhum'),(42,13,'muito lixo'),(43,13,'pouco lixo'),(44,13,'nenhum'),(45,14,'acima de70%'),(46,14,'de 30% a 70% '),(47,14,'menos de 30% '),(48,15,'acima de70% '),(49,15,'de 30% a 70% '),(50,15,'menos de 30%'),(52,17,'sem odor'),(53,17,'ovo podre'),(54,17,'esgoto ');
/*!40000 ALTER TABLE `pergunta_resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rio`
--

DROP TABLE IF EXISTS `rio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rio` (
  `idrio` int(11) NOT NULL AUTO_INCREMENT,
  `bacia_idbacia` int(11) NOT NULL,
  `descricao` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idrio`),
  KEY `fk_rio_bacia1_idx` (`bacia_idbacia`),
  CONSTRAINT `fk_rio_bacia1` FOREIGN KEY (`bacia_idbacia`) REFERENCES `bacia` (`idbacia`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rio`
--

LOCK TABLES `rio` WRITE;
/*!40000 ALTER TABLE `rio` DISABLE KEYS */;
INSERT INTO `rio` VALUES (1,1,'Rio 1'),(2,1,'Rio 2');
/*!40000 ALTER TABLE `rio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Ativo'),(2,'Inativo');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trecho`
--

DROP TABLE IF EXISTS `trecho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trecho` (
  `idtrecho` int(11) NOT NULL AUTO_INCREMENT,
  `rio_idrio` int(11) NOT NULL,
  `descricao` varchar(155) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL COMMENT '	',
  `lon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtrecho`),
  KEY `fk_trecho_rio1_idx` (`rio_idrio`),
  CONSTRAINT `fk_trecho_rio1` FOREIGN KEY (`rio_idrio`) REFERENCES `rio` (`idrio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trecho`
--

LOCK TABLES `trecho` WRITE;
/*!40000 ALTER TABLE `trecho` DISABLE KEYS */;
INSERT INTO `trecho` VALUES (1,1,'Trecho 2','-22.83788','-43.07030'),(2,1,'Trecho 3','-22.83788','-43.07030');
/*!40000 ALTER TABLE `trecho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(155) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `perfil_idperfil` int(11) NOT NULL,
  `grupo_idgrupo` int(11) DEFAULT NULL,
  `authKey` varchar(45) DEFAULT NULL,
  `password_reset_token` varchar(45) DEFAULT NULL,
  `status` enum('Ativo','Inativo','','') NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_perfil1_idx` (`perfil_idperfil`),
  CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (2,'adm','a@a.com','1234','',1,0,NULL,NULL,'Ativo'),(3,'Coordenador geral','cg@cg.com','cg','',2,NULL,NULL,NULL,'Ativo'),(4,'Coordenador','c@c.com','1234','',3,1,NULL,NULL,'Ativo'),(5,'Monitor','m@m.com','1234','',4,2,NULL,NULL,'Ativo');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-10 11:09:56
