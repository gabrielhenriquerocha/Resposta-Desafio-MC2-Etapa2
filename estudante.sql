-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Jun-2021 às 22:26
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemadegerenciamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

DROP TABLE IF EXISTS `estudante`;
CREATE TABLE IF NOT EXISTS `estudante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Estudante` varchar(255) DEFAULT NULL,
  `Nome_Estudante` varchar(255) DEFAULT NULL,
  `CPF_Estudante` varchar(255) DEFAULT NULL,
  `Datadenascimento_Estudante` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id`, `Codigo_Estudante`, `Nome_Estudante`, `CPF_Estudante`, `Datadenascimento_Estudante`) VALUES
(1, '999', 'teste', '000.000.000-00', '00/00/0000'),
(2, '1', 'Pedro', '111.111.111-11', '01/01/2001'),
(3, '2', 'Guilherme', '222.222.222-22', '09/10/2001'),
(4, '3', 'Arthur Moura', '333.333.333-33', '01/04/2001'),
(5, '4', 'Alexandre Ferreira', '000.000.000-00', '00/00/0000'),
(6, '1110', 'Jose Mario', '113.021.234-09', '03/04/1987');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
