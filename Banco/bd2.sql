-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 11-Nov-2013 às 21:56
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
  `cod_restaurante` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`cod_casa_de_show`),
  UNIQUE KEY `cod_restaurante` (`cod_restaurante`),
  KEY `cod_ponto_turistico` (`cod_ponto_turistico`),
  KEY `cod_ponto_turistico_2` (`cod_ponto_turistico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `casa_de_show`
--

INSERT INTO `casa_de_show` (`cod_casa_de_show`, `cod_ponto_turistico`, `descricao_show`, `dia_fechamento`, `horario_inicio`, `cod_restaurante`) VALUES
(1, 17, 'tecno dance', 'Segunda-Feira', '19:00:00', '1'),
(2, 18, 'pagode dos amigos', 'Quarta-Feira', '18:30:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `uf` set('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PQ','PB','PR','PE','PI','PA','RJ','RN','RS','RO','RR','SC','SP','SE','TO') NOT NULL,
  `populacao` int(9) NOT NULL,
  PRIMARY KEY (`cod_cidade`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`cod_cidade`, `nome`, `uf`, `populacao`) VALUES
(1, 'Manaus', 'AM', 2000000),
(2, 'Rio Branco', 'AC', 1000000),
(3, 'Itacoatiara', 'AM', 200000),
(4, 'Brasilia', 'DF', 1700000),
(5, 'São Lourenço', 'MG', 20000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundador`
--

CREATE TABLE IF NOT EXISTS `fundador` (
  `cod_fundador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `data_nascimento` date NOT NULL,
  `data_obito` date DEFAULT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_fundador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fundador`
--

INSERT INTO `fundador` (`cod_fundador`, `nome`, `data_nascimento`, `data_obito`, `nacionalidade`, `profissao`) VALUES
(1, 'Coronel Peixoto Ramos', '1927-01-01', '1982-12-01', 'Coronel das Forças Armadas', 'Brasileiro'),
(2, 'Dilma Houssef', '1882-01-01', '0000-00-00', 'Presidente', 'Brasileiro'),
(3, 'Machado de Assis', '1957-04-01', '1979-06-24', 'Escritor', 'Brasileiro');

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

--
-- Extraindo dados da tabela `fundador_museu`
--

INSERT INTO `fundador_museu` (`cod_museu`, `cod_fundador`) VALUES
(2, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `cod_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) NOT NULL,
  `num_de_quartos` varchar(11) NOT NULL,
  `categoria` set('0','1','2','3','4','5','6') NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `Cep` varchar(8) NOT NULL,
  `cod_restaurante` varchar(11) DEFAULT NULL,
  `nome` text NOT NULL,
  PRIMARY KEY (`cod_hotel`),
  UNIQUE KEY `cod_restaurante` (`cod_restaurante`),
  KEY `cod_cidade` (`cod_cidade`),
  KEY `cod_cidade_2` (`cod_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`cod_hotel`, `cod_cidade`, `num_de_quartos`, `categoria`, `logradouro`, `numero`, `bairro`, `Cep`, `cod_restaurante`, `nome`) VALUES
(1, 1, '100', '5', 'Praia da ponta negra', 'xxx', 'Ponta Negra', '6900000', NULL, 'teste1'),
(2, 1, '150', '5', 'praia da ponta negra', '1000', 'Ponta Negra', '69000000', NULL, 'teste2'),
(3, 1, '50', '4', 'Av. Paraiba', '1000', 'Chapada', '69000000', NULL, 'teste3'),
(4, 2, '15', '2', 'Ita', '123', 'xxx', '69000000', NULL, 'teste4'),
(7, 5, '12', '0', 'ouro', '121', '$xxx', '69000000', NULL, 'teste5'),
(8, 2, '3', '0,1', 'xxx', '1', 'yyy', '69000000', NULL, 'testeteste'),
(9, 1, '43', '2', 'yyy', '1231', 'nnmn', '69000000', NULL, 'ttt'),
(10, 1, '43', '2', 'yyy', '1231', 'nnmn', '69000000', NULL, 'tee');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `igreja`
--

INSERT INTO `igreja` (`cod_ponto_turistico`, `cod_igreja`, `arquitetura`, `data_de_construcao`) VALUES
(5, 4, 'Barroca', '1904-01-04'),
(12, 5, 'Rococo', '1989-07-26'),
(13, 6, 'Ruins from before', '2130-10-15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `museu`
--

INSERT INTO `museu` (`cod_ponto_turistico`, `cod_museu`, `numero_salas`, `data_fundacao`) VALUES
(14, 1, 15, '1959-11-29'),
(15, 2, 32, '2009-10-30'),
(16, 3, 43, '2022-01-06');

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
  `cep` varchar(8) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`cod_ponto_turistico`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `ponto_turistico`
--

INSERT INTO `ponto_turistico` (`cod_ponto_turistico`, `nome`, `descricao`, `logradouro`, `numero`, `bairro`, `cep`, `cod_cidade`) VALUES
(5, 'Catedral da Fé', 'Catedral Católica', 'rua rita de cassia', '123', 'jardins', '69000000', 4),
(12, 'Igreja de são Sebastião', 'Igreja dedicada ao santo Sebastião', 'Moraes Cruz', '123', 'Nova Cidade', '69000000', 1),
(13, 'Child of Athon', 'Culto pós apocaliptico', 'wastland', '66', 'megaton', '69000000', 5),
(14, 'Museu do Índio', 'Cultura indígena do Amazonas', 'Rua Silva ramos', '1234', 'Centro', '69077877', 1),
(15, 'Museu Militar', 'Homenagem as forças armadas', 'Av. São Jorge', '1200', 'Vila da Prata', '69065523', 1),
(16, 'xxx', 'xxxxxx', 'ccc', '123', 'ddd', '99999999', 1),
(17, 'Fire club', 'Boate temática', 'xxx', '123', 'fff', '69000000', 1),
(18, 'Eleven', 'Pagode bar', 'rrr', '223', 'eeer', '89887678', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`cod_quarto`, `cod_hotel`, `tipo`, `valor_diaria`, `numero`) VALUES
(1, 1, 'simples solteiro', 40, 123);

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
  `cep` varchar(8) NOT NULL,
  `preco_medio` float NOT NULL,
  `especialidade_cozinha` text NOT NULL,
  PRIMARY KEY (`cod_restaurante`),
  KEY `cod_cidade` (`cod_cidade`),
  KEY `cod_cidade_2` (`cod_cidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `restaurante`
--

INSERT INTO `restaurante` (`cod_restaurante`, `cod_cidade`, `categoria`, `nome`, `logradouro`, `numero`, `bairro`, `cep`, `preco_medio`, `especialidade_cozinha`) VALUES
(1, 1, 'Culinária Japonesa ', 'Restaurante Fast Temaki', 'xxxx ', '123', 'Chapada', '', 35, 'Sushi e sashimi'),
(2, 1, 'Culinária Japonesa', 'Fast Temaki', 'xxx', 'yyy', 'Chapada', '', 35, 'Sushi'),
(3, 1, 'Pizzaria', 'Loppiano Pizza', 'xxx', '123', 'Praça 14', '', 55, 'Pizzas'),
(4, 2, 'Carnes de Sol', 'João da Carne', 'zzz', '123', 'Nova vida', '', 22.5, 'Carne de Sol'),
(5, 1, 'Peixaria', 'Fróes peixaria', 'xxx', '123', 'Santos Drumond', '', 30, 'Tambaqui assado'),
(6, 1, 'Galeteria', 'pollos hermanos', 'aaa', '111', 'jardins', '69000000', 38, 'Frango Frito');

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
  `cep` varchar(8) DEFAULT NULL,
  `tipo` enum('1','2') NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `logradouro`, `numero`, `bairro`, `cep`, `tipo`, `login`, `senha`, `email`) VALUES
(1, 'Andre Moreira', 'Rua XXX', '123', 'YYY', '69000000', '1', 'admin', '123', 'andrelir@hotmail.com'),
(2, 'João Silva', 'Sucupiras', '1234', 'Dom Pedro', NULL, '2', 'jsilva', '123', 'js@yahoo.com'),
(3, 'Luís Carlos', 'Torquato Tapajós', '1200', 'Tarumã', '69077815', '1', 'lc2000', '123', 'lc@hotmail.com'),
(6, 'Luís Queiroz', 'Djalma Batista', '2342', 'Chapada', '69000000', '2', 'lqueiroz', '1232', 'lq200@hotmail.com'),
(24, 'Aluado Mota', 'xyz', '1', 'Dalua', '69000000', '2', 'aluado', '123', 'aluado@gmail.com'),
(27, 'mmmm', 'mmm', '12', 'mmm', '909', '2', 'miom', '1234', 'nojnoi'),
(28, 'qqq', 'aa', '334', 'fff', '45646767', '1', 'rrrrrrr', '123123', 'assaddaf'),
(29, 'Priscilla Peres', 'Paraíba', '2429', 'Parque 10', '69055700', '2', 'pperes', '12345', 'mp_pri@hotmail.com');

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
-- Extraindo dados da tabela `usuario_telefone`
--

INSERT INTO `usuario_telefone` (`cod_usuario`, `telefone`) VALUES
(27, '(11)98888-9999'),
(27, '(92)8888-9999'),
(28, '(92)8888-9978'),
(29, '(92)9183-8543');

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
  ADD CONSTRAINT `fundador_museu_ibfk_1` FOREIGN KEY (`cod_museu`) REFERENCES `museu` (`cod_museu`),
  ADD CONSTRAINT `fundador_museu_ibfk_2` FOREIGN KEY (`cod_fundador`) REFERENCES `fundador` (`cod_fundador`);

--
-- Limitadores para a tabela `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`);

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
  ADD CONSTRAINT `passeio_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`),
  ADD CONSTRAINT `passeio_ibfk_2` FOREIGN KEY (`cod_casa_de_show`) REFERENCES `casa_de_show` (`cod_casa_de_show`);

--
-- Limitadores para a tabela `ponto_turistico`
--
ALTER TABLE `ponto_turistico`
  ADD CONSTRAINT `ponto_turistico_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`cod_cidade`);

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
-- Limitadores para a tabela `usuario_telefone`
--
ALTER TABLE `usuario_telefone`
  ADD CONSTRAINT `usuario_telefone_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
