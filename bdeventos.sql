-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2025 às 22:34
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdeventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcadastro`
--

CREATE TABLE `tbcadastro` (
  `idCadastro` int(11) NOT NULL,
  `nomeCadastro` varchar(100) NOT NULL,
  `emailCadastro` varchar(120) NOT NULL,
  `senhaCadastro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbcadastro`
--

INSERT INTO `tbcadastro` (`idCadastro`, `nomeCadastro`, `emailCadastro`, `senhaCadastro`) VALUES
(1, 'Jhonny Souza dos Santos', 'manoel1952.vo@gmail.com', '$2y$10$LCStUofQsRLk/FcTzF6lUOonYfZIaqkyQBP3m2449H/J1uu.SErUO'),
(2, 'Ricardo dos Santos Faustino', 'aaaa@gmail.com', '$2y$10$5CIWntvUHMcT35ZSFwLOH.GtXri8OCzbxEE2NhLRE7XagP5iOQiYy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(100) NOT NULL,
  `cnpjContato` varchar(14) NOT NULL,
  `telefoneContato` varchar(12) NOT NULL,
  `emailContato` varchar(320) NOT NULL,
  `idCadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nomeContato`, `cnpjContato`, `telefoneContato`, `emailContato`, `idCadastro`) VALUES
(2, 'Jhonny', '6534634', '11984359735', 'manoel1952.vo@gmail.com', 1),
(3, 'Jhonny', '6534634', '11984359735', 'manoel1952.vo@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinfoevento`
--

CREATE TABLE `tbinfoevento` (
  `idInfoEvento` int(11) NOT NULL,
  `imagemInfoEvento` varchar(255) DEFAULT NULL,
  `tituloInfoEvento` varchar(100) DEFAULT NULL,
  `dataInfoEvento` date DEFAULT NULL,
  `localInfoEvento` varchar(100) DEFAULT NULL,
  `descInfoEvento` varchar(255) DEFAULT NULL,
  `idCadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbinfoevento`
--

INSERT INTO `tbinfoevento` (`idInfoEvento`, `imagemInfoEvento`, `tituloInfoEvento`, `dataInfoEvento`, `localInfoEvento`, `descInfoEvento`, `idCadastro`) VALUES
(1, 'imagem3.jpeg', 'Teste 1', '2025-02-20', 'aaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 1),
(2, 'imagem12.jpg', 'Teste 2', '2025-08-28', 'aaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbb', 1),
(3, 'imagem13.jpg', 'Teste 3', '2025-06-20', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(4, 'imagem14.jpg', 'Teste 123456789', '2025-08-28', 'aaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 1),
(5, 'imagem15.jpg', 'Teste 5', '2025-06-12', 'aaaaaaaaaaa', 'lllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 1),
(6, 'imagem16.jpg', 'Teste 6', '2025-06-12', 'aaaaaaaaaaa', 'asfasgadshdhsdhsdhasdh', 1),
(7, 'imagem17.jpg', 'Teste a1', '2025-08-28', 'aaaaaaaaaaa', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`idCadastro`);

--
-- Índices para tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices para tabela `tbinfoevento`
--
ALTER TABLE `tbinfoevento`
  ADD PRIMARY KEY (`idInfoEvento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  MODIFY `idCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbinfoevento`
--
ALTER TABLE `tbinfoevento`
  MODIFY `idInfoEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
