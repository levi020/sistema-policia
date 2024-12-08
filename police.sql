-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/12/2024 às 20:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `police`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `casos`
--

DROP TABLE IF EXISTS `casos`;
CREATE TABLE IF NOT EXISTS `casos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numCaso` varchar(500) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `suspeitos` varchar(500) NOT NULL,
  `vitimas` varchar(500) NOT NULL,
  `tipo` varchar(500) NOT NULL,
  `solucao` varchar(1) NOT NULL,
  `nomeOficial` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `casos`
--

INSERT INTO `casos` (`id`, `numCaso`, `descricao`, `suspeitos`, `vitimas`, `tipo`, `solucao`, `nomeOficial`) VALUES
(1, '#1', 'caso teste', 'eu', 'todas', 'roubo', 'n', 'Levi');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resgistros`
--

DROP TABLE IF EXISTS `resgistros`;
CREATE TABLE IF NOT EXISTS `resgistros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `resgistros`
--

INSERT INTO `resgistros` (`id`, `name`, `senha`, `cargo`) VALUES
(1, '5884030325d3dd1cb236c6ac3d90c77dc44ed346c4ffd843a096a2907c84a8731d0d5f9b438a0a6e9aedb57234a07772f079cc31a229d78e03b2a5927ef3adb2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'a27358d85dd868ffef5741268f5b8c14e53b813e6420a84f23db89e93369e127666bb493f7d6d7147f3a7a7af964e37c229e2c7fb814311ef9b6776f6c67558d'),
(2, '5884030325d3dd1cb236c6ac3d90c77dc44ed346c4ffd843a096a2907c84a8731d0d5f9b438a0a6e9aedb57234a07772f079cc31a229d78e03b2a5927ef3adb2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'f4d6e64c4a6fbbab2e81552c0c03e8417e4a21b215299561789f36a0f4785183d1c6190bfcad226fadc45616eaad2891f7be672886ea56f6c305aab0bddeb260'),
(3, 'f6c5600ed1dbdcfdf829081f5417dccbbd2b9288e0b427e65c8cf67e274b69009cd142475e15304f599f429f260a661b5df4de26746459a3cef7f32006e5d1c1', 'f6c5600ed1dbdcfdf829081f5417dccbbd2b9288e0b427e65c8cf67e274b69009cd142475e15304f599f429f260a661b5df4de26746459a3cef7f32006e5d1c1', '4ef8ab0a7cdd7ec183c5fd5092185bdfaaed38b34f158d5de973fcc2fabc362fcbeff132447949136b1bbd05508fd0a189929f24593735d70a36d934e35f4fdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
