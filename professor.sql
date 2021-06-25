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
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Professor` varchar(255) DEFAULT NULL,
  `Nome_Professor` varchar(255) DEFAULT NULL,
  `CPF_Professor` varchar(255) DEFAULT NULL,
  `Datadenascimento_Professor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `Codigo_Professor`, `Nome_Professor`, `CPF_Professor`, `Datadenascimento_Professor`) VALUES
(1, '999', 'teste', '000.000.000-00', '00/00/0000'),
(2, '1', 'Carlos', '111.111.111-11', '01/01/2001'),
(3, '2', 'Fulano', '222.222.222-22', '02/02/2001'),
(4, '3', 'Henrique', '333.333.333-33', '03/03/2001'),
(5, '4', 'Diego Souza', '000.000.000-00', '00/00/0000'),
(6, '1011', 'Jose Henrique', '110.252.110.10', '09/10/1999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
