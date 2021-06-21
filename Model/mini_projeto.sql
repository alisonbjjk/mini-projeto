-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2021 às 00:10
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mini_projeto`
--
CREATE DATABASE IF NOT EXISTS `mini_projeto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mini_projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_processos`
--

DROP TABLE IF EXISTS `tb_processos`;
CREATE TABLE `tb_processos` (
  `id` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `cpf_user` varchar(15) NOT NULL,
  `rg_user` varchar(12) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `documentos` longtext NOT NULL,
  `dt_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','2','0') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_processos`
--

INSERT INTO `tb_processos` (`id`, `nm_user`, `cpf_user`, `rg_user`, `email_user`, `documentos`, `dt_criacao`, `status`) VALUES
(1, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '', '2021-06-11 17:37:59', '2'),
(2, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '123', '2021-06-11 17:39:45', '1'),
(3, 'Alison Cristiano Silva Tavares', '321323123', '213123213', 'alisonbjjk@gmail.com', 'affasfasf', '2021-06-11 17:41:20', '1'),
(4, 'Alison Tavares', '12345678900', '123456789', 'alisonbjjk@gmail.com', 'Preciso da documentação', '2021-06-11 20:30:34', '2'),
(5, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '12312213af ', '2021-06-11 20:47:53', '0'),
(6, 'MARCOS', '12332145643', '678024321', 'Marcos@gmail.com', 'teste de teste', '2021-06-11 20:48:53', '0'),
(7, '12312', '123123', '123131', '123@gmail.com', '123123', '2021-06-12 16:42:01', '0'),
(8, '12312', '123123', '123131', '123@gmail.com', '123123', '2021-06-12 16:42:11', '0'),
(9, 'Alison Cristiano Silva Tavares', 'teste', 'teste', 'alisonbjjk@gmail.com', 'teste', '2021-06-12 16:44:51', '0'),
(10, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '123', '2021-06-12 16:51:27', '0'),
(11, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '123', '2021-06-12 16:52:52', '0'),
(12, 'Alison Cristiano Silva Tavares', '123', '123', 'alisonbjjk@gmail.com', '123', '2021-06-12 16:53:41', '0'),
(13, 'Cristiano Silva', '12345678900', '123456789', 'alisonbjjk@gmail.com', 'Preciso da documentação do IDEMA', '2021-06-12 16:56:07', '0'),
(14, 'Alison Cristiano Silva Tavares', '123', '123321g', 'alisonbjjk@gmail.com', 'Preciso da documentação123', '2021-06-21 21:38:57', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(50) NOT NULL,
  `rgUser` varchar(12) NOT NULL,
  `cpfUser` varchar(15) NOT NULL,
  `telUser` varchar(20) NOT NULL,
  `emailUser` varchar(50) NOT NULL,
  `senhaUser` varchar(50) NOT NULL,
  `statusUser` enum('1','0') DEFAULT '1',
  `dtCriacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `adminUser` enum('1','0') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUser`, `nomeUser`, `rgUser`, `cpfUser`, `telUser`, `emailUser`, `senhaUser`, `statusUser`, `dtCriacao`, `adminUser`) VALUES
(1, 'primeiro teste', '123456789', '123456789', '', 'alisonbjjk@gmail.com', '123456', '1', '2021-06-10 18:52:34', '1'),
(5, 'admin', '123456', '1234567980', '123456', 'admin@admin', 'admin', '1', '2021-06-11 20:51:35', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_processos`
--
ALTER TABLE `tb_processos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_processos`
--
ALTER TABLE `tb_processos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
