-- Script SQL Localhost - form_web- Atualizado 10,10,2022

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_web`
--
DROP DATABASE `form_web`;
CREATE DATABASE IF NOT EXISTS `form_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `form_web`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dados`
--

DROP TABLE IF EXISTS `tb_dados`;
CREATE TABLE `tb_dados` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `data_nascimento` date,
  `celular` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
