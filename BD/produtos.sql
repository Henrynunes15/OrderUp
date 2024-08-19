-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2024 às 16:26
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `orderup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `precos` decimal(10,2) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `precos`, `categoria`) VALUES
(51, 'xpto', '', '0.00', 'bebidas'),
(52, 'Coxinha', '', '0.00', 'bebidas'),
(53, 'Coxinha', '', '0.00', 'bebidas'),
(54, 'Coxinha', '', '0.00', 'salgados'),
(55, 'asdasd', '', '0.00', 'salgados'),
(56, 'asdasd', '', '0.00', 'salgados'),
(57, 'asdasd', '', '0.00', 'salgados'),
(58, 'asdasd', '', '0.00', 'salgados'),
(59, 'xpto', '', '0.00', 'combo'),
(60, 'xpto', '', '25.00', 'combo'),
(61, 'xpto', '25.50', '25.00', 'salgados'),
(62, 'xpto', '25.50', '25.00', 'salgados'),
(63, 'xpto', '25.50', '25.00', 'salgados'),
(64, 'asdasd', 'asdasdasd 25.89', '22.00', 'salgados'),
(65, 'asdasd', 'asdasdasd 25.89', '22.00', 'salgados'),
(66, 'asdasd', 'asdasdasd 25.89', '22.00', 'salgados');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
