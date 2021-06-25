-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Jun-2021 às 22:25
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
-- Estrutura da tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Disciplina` varchar(255) DEFAULT NULL,
  `Nome_Disciplina` varchar(255) DEFAULT NULL,
  `Nome_Professor` varchar(255) DEFAULT NULL,
  `Nomes_Estudantes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `Codigo_Disciplina`, `Nome_Disciplina`, `Nome_Professor`, `Nomes_Estudantes`) VALUES
(1, '999', 'teste', 'teste', 'teste '),
(2, '1', 'matematica', 'Carlos', 'Pedro , Guilherme , Arthur Moura '),
(3, '2', 'Programacao', 'Jose Henrique', 'Arthur Moura , Alexandre Ferreira , Jose Mario '),
(4, '3', 'Paradigmas', 'Henrique', 'Guilherme , Arthur Moura , Alexandre Ferreira , Jose Mario '),
(5, '4', 'Algoritmos e estrutura de dados', 'Diego Souza', 'Pedro , Guilherme , Arthur Moura , Alexandre Ferreira ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
