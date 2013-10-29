-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 29-Out-2013 às 22:57
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd2`
--
CREATE DATABASE IF NOT EXISTS `bd2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd2`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `casa_de_show`
--

CREATE TABLE IF NOT EXISTS `casa_de_show` (
  `cod_casa_de_show` int(11) NOT NULL AUTO_INCREMENT,
  `cod_ponto_turistico` int(11) NOT NULL,
  `descricao_show` text NOT NULL,
  `dia_fechamento` set('Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado','Domingo') NOT NULL,
  `horario_inicio` time NOT NULL,
  PRIMARY KEY (`cod_casa_de_show`),
  KEY `cod_ponto_turistico` (`cod_ponto_turistico`),
  KEY `cod_ponto_turistico_2` (`cod_ponto_turistico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `uf` set('AC','AL','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `populacao` int(8) NOT NULL,
  PRIMARY KEY (`cod_cidade`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundador`
--

CREATE TABLE IF NOT EXISTS `fundador` (
  `cod_fundador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_obito` date NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_fundador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundador_museu`
--

CREATE TABLE IF NOT EXISTS `fundador_museu` (
  `cod_museu` int(11) NOT NULL,
  `cod_fundador` int(11) NOT NULL,
  KEY `cod_museu` (`cod_museu`),
  KEY `cod_fundador` (`cod_fundador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `cod_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) NOT NULL,
  `cod_quarto` int(11) NOT NULL,
  `num_de_quartos` int(11) NOT NULL,
  `categoria` enum('1','2','3','4','5','6') NOT NULL,
  `nome` text NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `Cep` varchar(7) NOT NULL,
  PRIMARY KEY (`cod_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `igreja`
--

CREATE TABLE IF NOT EXISTS `igreja` (
  `cod_ponto_turistico` int(11) NOT NULL,
  `cod_igreja` int(11) NOT NULL AUTO_INCREMENT,
  `arquitetura` varchar(45) NOT NULL,
  `data_de_construcao` date NOT NULL,
  PRIMARY KEY (`cod_igreja`),
  UNIQUE KEY `cod_ponto_turistico_2` (`cod_ponto_turistico`),
  KEY `cod_ponto_turistico` (`cod_ponto_turistico`),
  KEY `cod_ponto_turistico_3` (`cod_ponto_turistico`),
  KEY `cod_ponto_turistico_4` (`cod_ponto_turistico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `museu`
--

CREATE TABLE IF NOT EXISTS `museu` (
  `cod_ponto_turistico` int(11) NOT NULL,
  `cod_museu` int(11) NOT NULL AUTO_INCREMENT,
  `numero_salas` int(3) NOT NULL,
  `data_fundacao` date NOT NULL,
  PRIMARY KEY (`cod_museu`),
  KEY `cod_ponto_turistico` (`cod_ponto_turistico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passeio`
--

CREATE TABLE IF NOT EXISTS `passeio` (
  `cod_passeio` int(11) NOT NULL AUTO_INCREMENT,
  `cod_usuario` int(11) NOT NULL,
  `cod_casa_de_show` int(11) NOT NULL,
  `data_horario` datetime NOT NULL,
  PRIMARY KEY (`cod_passeio`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_casa_de_show` (`cod_casa_de_show`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_turistico`
--

CREATE TABLE IF NOT EXISTS `ponto_turistico` (
  `cod_ponto_turistico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `descricao` text NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cep` varchar(7) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`cod_ponto_turistico`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE IF NOT EXISTS `quarto` (
  `cod_quarto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_hotel` int(11) NOT NULL,
  `tipo` set('simples solteiro','simples casal','luxo solteiro','luxo casal','super luxo solteiro','super luxo casal','cobertura','duplo','triplo','quadruplo','Presidencial') NOT NULL,
  `valor_diaria` float NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`cod_quarto`),
  KEY `cod_hotel` (`cod_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurante`
--

CREATE TABLE IF NOT EXISTS `restaurante` (
  `cod_restaurante` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `nome` text NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cep` varchar(7) NOT NULL,
  `preço_medio` float NOT NULL,
  `especialidade_cozinha` text NOT NULL,
  PRIMARY KEY (`cod_restaurante`),
  KEY `cod_cidade` (`cod_cidade`),
  KEY `cod_cidade_2` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cep` varchar(7) DEFAULT NULL,
  `tipo` enum('1','2') NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_email`
--

CREATE TABLE IF NOT EXISTS `usuario_email` (
  `cod_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_usuario_2` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_telefone`
--

CREATE TABLE IF NOT EXISTS `usuario_telefone` (
  `cod_usuario` int(11) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  PRIMARY KEY (`telefone`),
  KEY `cod_usuario` (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `casa_de_show`
--
ALTER TABLE `casa_de_show`
  ADD CONSTRAINT `casa_de_show_ibfk_1` FOREIGN KEY (`cod_ponto_turistico`) REFERENCES `ponto_turistico` (`cod_ponto_turistico`);

--
-- Limitadores para a tabela `fundador_museu`
--
ALTER TABLE `fundador_museu`
  ADD CONSTRAINT `fundador_museu_ibfk_2` FOREIGN KEY (`cod_fundador`) REFERENCES `fundador` (`cod_fundador`),
  ADD CONSTRAINT `fundador_museu_ibfk_1` FOREIGN KEY (`cod_museu`) REFERENCES `museu` (`cod_museu`);

--
-- Limitadores para a tabela `igreja`
--
ALTER TABLE `igreja`
  ADD CONSTRAINT `igreja_ibfk_1` FOREIGN KEY (`cod_ponto_turistico`) REFERENCES `ponto_turistico` (`cod_ponto_turistico`);

--
-- Limitadores para a tabela `museu`
--
ALTER TABLE `museu`
  ADD CONSTRAINT `museu_ibfk_1` FOREIGN KEY (`cod_ponto_turistico`) REFERENCES `ponto_turistico` (`cod_ponto_turistico`);

--
-- Limitadores para a tabela `passeio`
--
ALTER TABLE `passeio`
  ADD CONSTRAINT `passeio_ibfk_2` FOREIGN KEY (`cod_casa_de_show`) REFERENCES `casa_de_show` (`cod_casa_de_show`),
  ADD CONSTRAINT `passeio_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `ponto_turistico`
--
ALTER TABLE `ponto_turistico`
  ADD CONSTRAINT `ponto_turistico_ibfk_1` FOREIGN KEY (`cod_ponto_turistico`) REFERENCES `cidade` (`cod_cidade`);

--
-- Limitadores para a tabela `quarto`
--
ALTER TABLE `quarto`
  ADD CONSTRAINT `quarto_ibfk_1` FOREIGN KEY (`cod_hotel`) REFERENCES `hotel` (`cod_hotel`);

--
-- Limitadores para a tabela `restaurante`
--
ALTER TABLE `restaurante`
  ADD CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`);

--
-- Limitadores para a tabela `usuario_email`
--
ALTER TABLE `usuario_email`
  ADD CONSTRAINT `usuario_email_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `usuario_telefone`
--
ALTER TABLE `usuario_telefone`
  ADD CONSTRAINT `usuario_telefone_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
