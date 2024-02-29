-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2023 às 16:52
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(255) NOT NULL,
  `nomecli` varchar(70) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(14) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `telefone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nomecli`, `data_nasc`, `cpf`, `rg`, `sexo`, `telefone`) VALUES
(2, 'Ricardo', '2023-10-03', 123456, 1234567, 'masc', 33),
(3, 'Matheus', '2023-10-02', 444, 1234567, 'outro', 995478236),
(4, 'Ricardo', '2023-10-11', 12121, 212121, 'outro', 0),
(5, 'Ricardo', '2023-10-03', 123456, 1234567, 'fem', 995478236),
(6, 'Ricardo', '2023-10-03', 123456, 1234567, 'fem', 995478236);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_func` int(255) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `user` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_func`, `nome`, `user`, `senha`) VALUES
(1, 'Ricardo', 'user1', '6720720054e9d24fbf6c'),
(2, '', 'user1', '6720720054e9d24fbf6c'),
(3, '', '', 'd41d8cd98f00b204e980'),
(4, '', '', 'd41d8cd98f00b204e980'),
(5, '', '', 'd41d8cd98f00b204e980'),
(6, 'Ricardo', 'user1', '202cb962ac59075b964b07152d234b70'),
(7, 'Ricardo', 'user1', '202cb962ac59075b964b07152d234b70'),
(8, 'Ricardo', 'user2', '202cb962ac59075b964b07152d234b70'),
(9, 'Ricardo', 'user3', '202cb962ac59075b964b07152d234b70'),
(10, 'matheus', 'usuario', 'e8d95a51f3af4a3b134bf6bb680a213a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio`
--

CREATE TABLE `remedio` (
  `id_remedio` int(255) NOT NULL,
  `nomeremed` varchar(50) NOT NULL,
  `data_validade` date NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `quantidade` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `modo_uso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `remedio`
--

INSERT INTO `remedio` (`id_remedio`, `nomeremed`, `data_validade`, `fabricante`, `quantidade`, `preco`, `modo_uso`) VALUES
(3, 'rivotril', '2023-10-25', 'farmacia', '12', 70, 'oral'),
(4, 'rivotril', '2023-10-25', 'farmacia', '12', 0, 'oral'),
(5, 'remediogenerico', '0000-00-00', 'farmaciafoda', '123', 12, 'oral'),
(7, 'rivotril', '2023-10-04', 'farmacia', '50', 25, 'aerea'),
(8, 'rivotril', '2023-10-06', 'farmacia', '232', 2323, 'oral');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices para tabela `remedio`
--
ALTER TABLE `remedio`
  ADD PRIMARY KEY (`id_remedio`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_func` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `remedio`
--
ALTER TABLE `remedio`
  MODIFY `id_remedio` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
