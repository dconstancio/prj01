
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 10/07/2015 às 15:29:01
-- Versão do Servidor: 10.0.12-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u500171439_bd1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamento`
--

CREATE TABLE IF NOT EXISTS `acompanhamento` (
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
  KEY `fk_acompanhamento_trecho_idx` (`trecho_idtrecho`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `acompanhamento`
--

INSERT INTO `acompanhamento` (`idacompanhamento`, `grupo_idgrupo`, `usuario_idusuario`, `dt_cadastro`, `hr_cadastro`, `area`, `largura`, `profundidade`, `latitude`, `longitude`, `dt_cadastro2`, `trecho_idtrecho`) VALUES
(56, 1, 4, '1436400000', '12:00:00', 'Área 1', '10 mt', '2 mt', '-22.823199', '-43.000618', '1436541510', 3),
(57, 1, 4, '1435708800', '12:00:00', 'Área 1', '10 mt', '2 mt', '-22.823199', '-43.000618', '1436541547', 3),
(58, 2, 5, '1436486400', '12:00:00', 'Área 2', '10 mt', '2 mt', '-22.823199', '-43.000618', '1436541660', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamento_pergunta_resposta`
--

CREATE TABLE IF NOT EXISTS `acompanhamento_pergunta_resposta` (
  `idacompanhamento` int(11) NOT NULL,
  `idpergunta` int(11) NOT NULL,
  `idresposta` int(11) NOT NULL,
  PRIMARY KEY (`idacompanhamento`,`idpergunta`,`idresposta`),
  KEY `pkPerg1_idx` (`idpergunta`),
  KEY `pkResp1_idx` (`idresposta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acompanhamento_pergunta_resposta`
--

INSERT INTO `acompanhamento_pergunta_resposta` (`idacompanhamento`, `idpergunta`, `idresposta`) VALUES
(52, 1, 1),
(52, 2, 5),
(52, 3, 8),
(52, 4, 13),
(52, 5, 15),
(52, 6, 20),
(52, 7, 24),
(52, 8, 26),
(52, 9, 27),
(52, 10, 31),
(52, 11, 33),
(52, 12, 40),
(52, 13, 43),
(52, 14, 46),
(52, 15, 49),
(52, 17, 53),
(53, 1, 1),
(53, 2, 5),
(53, 3, 8),
(53, 4, 13),
(53, 5, 15),
(53, 6, 20),
(53, 7, 24),
(53, 8, 26),
(53, 9, 28),
(53, 10, 30),
(53, 11, 34),
(53, 12, 40),
(53, 13, 43),
(53, 14, 45),
(53, 15, 49),
(53, 17, 53),
(54, 1, 1),
(54, 2, 5),
(54, 3, 8),
(54, 4, 13),
(54, 5, 16),
(54, 6, 20),
(54, 7, 24),
(54, 8, 26),
(54, 9, 28),
(54, 10, 30),
(54, 11, 33),
(54, 12, 40),
(54, 13, 43),
(54, 14, 46),
(54, 15, 49),
(54, 17, 53),
(55, 1, 1),
(55, 2, 4),
(55, 3, 7),
(55, 4, 12),
(55, 5, 15),
(55, 6, 20),
(55, 7, 24),
(55, 8, 26),
(55, 9, 28),
(55, 10, 30),
(55, 11, 33),
(55, 12, 39),
(55, 13, 42),
(55, 14, 45),
(55, 15, 48),
(55, 17, 52),
(56, 1, 1),
(56, 2, 4),
(56, 3, 7),
(56, 4, 12),
(56, 5, 14),
(56, 6, 20),
(56, 7, 23),
(56, 8, 25),
(56, 9, 27),
(56, 10, 29),
(56, 11, 33),
(56, 12, 39),
(56, 13, 42),
(56, 14, 45),
(56, 15, 48),
(56, 17, 52),
(57, 1, 2),
(57, 2, 5),
(57, 3, 8),
(57, 4, 13),
(57, 5, 15),
(57, 6, 20),
(57, 7, 24),
(57, 8, 26),
(57, 9, 28),
(57, 10, 29),
(57, 11, 33),
(57, 12, 40),
(57, 13, 43),
(57, 14, 45),
(57, 15, 49),
(57, 17, 53),
(58, 1, 2),
(58, 2, 5),
(58, 3, 8),
(58, 4, 13),
(58, 5, 14),
(58, 6, 20),
(58, 7, 24),
(58, 8, 26),
(58, 9, 27),
(58, 10, 31),
(58, 11, 35),
(58, 12, 41),
(58, 13, 44),
(58, 14, 45),
(58, 15, 49),
(58, 17, 52);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bacia`
--

CREATE TABLE IF NOT EXISTS `bacia` (
  `idbacia` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `status` enum('Ativo','Inativo','','') NOT NULL,
  PRIMARY KEY (`idbacia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `bacia`
--

INSERT INTO `bacia` (`idbacia`, `descricao`, `status`) VALUES
(2, 'Guaxindiba/Alcântara', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `dt_criacao` varchar(45) DEFAULT NULL,
  `trecho_idtrecho` int(11) NOT NULL,
  PRIMARY KEY (`idgrupo`),
  KEY `fk_grupo_trecho1_idx` (`trecho_idtrecho`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descricao`, `dt_criacao`, `trecho_idtrecho`) VALUES
(1, 'Grupo 1', '', 3),
(2, 'Grupo 2', NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_usuario`
--

CREATE TABLE IF NOT EXISTS `grupo_usuario` (
  `grupo_idgrupo` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`grupo_idgrupo`,`usuario_idusuario`),
  KEY `fk_grupo_has_usuario_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_grupo_has_usuario_grupo1_idx` (`grupo_idgrupo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupo_usuario`
--

INSERT INTO `grupo_usuario` (`grupo_idgrupo`, `usuario_idusuario`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idperfil` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idperfil`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `descricao`, `peso`) VALUES
(1, 'Admin', 1),
(2, 'Coordenador Geral', 2),
(3, 'Coordenador', 3),
(4, 'Monitor', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE IF NOT EXISTS `pergunta` (
  `idpergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(155) DEFAULT NULL,
  `idperguntagrupo` int(11) DEFAULT NULL,
  `exibeGrupo` int(11) DEFAULT '0',
  PRIMARY KEY (`idpergunta`),
  KEY `pkGrupoPerg_idx` (`idperguntagrupo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`idpergunta`, `pergunta`, `idperguntagrupo`, `exibeGrupo`) VALUES
(1, 'Chuvoso ', 2, 1),
(2, 'Nublado ', 2, 0),
(3, 'O leito do rio apresenta em sua composição maior percentual de', 2, 0),
(4, 'Presença de barreiras?', 1, 1),
(5, 'As áreas a beira do rio são ocupadas por', 1, 0),
(6, 'Há dutos de descaraga desembocando no rio?', 1, 0),
(7, 'Existe rede de coleta de esgoto?', 1, 0),
(8, 'Existe rede de distribuição de água?', 1, 0),
(9, 'Existe rede de drenagem de águas pluviais?', 1, 0),
(10, 'Aparência da água:', 1, 0),
(11, 'Cor da água:', 1, 0),
(12, 'Lixo flutuante (plásticos, papeis, resto de vegetação etc)', 1, 0),
(13, 'Lixo acumulado nas margens (plásticos, papeis, resto de vegetação, entulhos  etc)', 1, 0),
(14, 'Mata ciliar na margem do rio ', 3, 1),
(15, 'Topo da margem', 3, 0),
(17, 'Odor', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta_grupo`
--

CREATE TABLE IF NOT EXISTS `pergunta_grupo` (
  `idpergunta_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idpergunta_grupo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `pergunta_grupo`
--

INSERT INTO `pergunta_grupo` (`idpergunta_grupo`, `descricao`) VALUES
(1, 'Características'),
(2, 'Condições climáticas'),
(3, 'Cobertura vegetal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta_resposta`
--

CREATE TABLE IF NOT EXISTS `pergunta_resposta` (
  `idpergunta_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `idpergunta` int(11) NOT NULL,
  `resposta` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idpergunta_resposta`,`idpergunta`),
  KEY `fk_pergunta_idx` (`idpergunta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Extraindo dados da tabela `pergunta_resposta`
--

INSERT INTO `pergunta_resposta` (`idpergunta_resposta`, `idpergunta`, `resposta`) VALUES
(1, 1, 'não'),
(2, 1, 'últimas 24 horas '),
(3, 1, 'durante a coleta de dados'),
(4, 2, 'não'),
(5, 2, 'pouco'),
(6, 2, 'forte'),
(7, 3, 'limo/lama'),
(8, 3, 'areia – grãos peq'),
(9, 3, 'pedras'),
(10, 3, 'cascalho'),
(11, 3, 'impossível de ver'),
(12, 4, 'diques'),
(13, 4, 'outros tipos de obstáculos'),
(14, 5, 'casas'),
(15, 5, 'matas'),
(16, 5, 'clubes/ área de lazer'),
(17, 4, 'industrias'),
(18, 5, 'favelas'),
(19, 5, 'rua, avenida, estrada'),
(20, 6, 'Há dutos de descaraga desembocando no rio'),
(21, 6, 'sim'),
(22, 6, 'não'),
(23, 7, 'sim'),
(24, 7, 'não'),
(25, 8, 'sim'),
(26, 8, 'não'),
(27, 9, 'sim'),
(28, 9, 'não'),
(29, 10, 'parda'),
(30, 10, 'leitosa'),
(31, 10, 'lamacenta'),
(32, 10, 'clara'),
(33, 11, 'verde escuro'),
(34, 11, 'esverdeada'),
(35, 11, 'cor de coca cola ou outra coloração escura'),
(36, 11, 'verde como sopa de ervilha'),
(37, 11, 'cristalina'),
(38, 11, 'amarelada'),
(39, 12, 'muito lixo'),
(40, 12, 'pouco lixo'),
(41, 12, 'nenhum'),
(42, 13, 'muito lixo'),
(43, 13, 'pouco lixo'),
(44, 13, 'nenhum'),
(45, 14, 'acima de70%'),
(46, 14, 'de 30% a 70% '),
(47, 14, 'menos de 30% '),
(48, 15, 'acima de70% '),
(49, 15, 'de 30% a 70% '),
(50, 15, 'menos de 30%'),
(52, 17, 'sem odor'),
(53, 17, 'ovo podre'),
(54, 17, 'esgoto ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rio`
--

CREATE TABLE IF NOT EXISTS `rio` (
  `idrio` int(11) NOT NULL AUTO_INCREMENT,
  `bacia_idbacia` int(11) NOT NULL,
  `descricao` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`idrio`),
  KEY `fk_rio_bacia1_idx` (`bacia_idbacia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `rio`
--

INSERT INTO `rio` (`idrio`, `bacia_idbacia`, `descricao`) VALUES
(3, 2, 'Alcântara'),
(4, 2, 'Guaxindiba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`idstatus`, `descricao`) VALUES
(1, 'Ativo'),
(2, 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trecho`
--

CREATE TABLE IF NOT EXISTS `trecho` (
  `idtrecho` int(11) NOT NULL AUTO_INCREMENT,
  `rio_idrio` int(11) NOT NULL,
  `descricao` varchar(155) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL COMMENT '	',
  `lon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtrecho`),
  KEY `fk_trecho_rio1_idx` (`rio_idrio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `trecho`
--

INSERT INTO `trecho` (`idtrecho`, `rio_idrio`, `descricao`, `lat`, `lon`) VALUES
(3, 3, 'Trecho 1 - Alcântara', '-22.819716', '-43.004627'),
(4, 3, 'Trecho 2 - Alcântara', '-22.823199', '-43.000618');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
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
  KEY `fk_usuario_perfil1_idx` (`perfil_idperfil`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `username`, `password`, `telefone`, `perfil_idperfil`, `grupo_idgrupo`, `authKey`, `password_reset_token`, `status`) VALUES
(2, 'adm', 'a@a.com', '1234', '', 1, 0, NULL, NULL, 'Ativo'),
(3, 'Coordenador geral', 'cg@cg.com', 'cg', '', 2, NULL, NULL, NULL, 'Ativo'),
(4, 'Coordenador', 'c@c.com', '1234', '', 3, 1, NULL, NULL, 'Ativo'),
(5, 'Monitor', 'm@m.com', '1234', '', 4, 2, NULL, NULL, 'Ativo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
