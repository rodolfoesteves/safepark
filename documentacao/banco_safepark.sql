-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2016 Ã s 21:01
-- VersÃ£o do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safepark`
--
CREATE DATABASE IF NOT EXISTS `safepark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `safepark`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestor`
--

CREATE TABLE `gestor` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `data_ocorrencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `prontuario` varchar(10) NOT NULL,
  `hash_senha` varchar(128) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `tel_fixo` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_desativacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo_ocorrencia`
--

CREATE TABLE `veiculo_ocorrencia` (
  `id` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gestor`
--
ALTER TABLE `gestor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marca` (`id_marca`);

--
-- Indexes for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vaga` (`id_vaga`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modelo_veiculo` (`id_modelo`),
  ADD KEY `fk_cor_veiculo` (`id_cor`),
  ADD KEY `fk_usuario_veiculo` (`id_usuario`);

--
-- Indexes for table `veiculo_ocorrencia`
--
ALTER TABLE `veiculo_ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ocorrencia` (`id_ocorrencia`),
  ADD KEY `fk_veiculo` (`id_veiculo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cor`
--
ALTER TABLE `cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gestor`
--
ALTER TABLE `gestor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veiculo_ocorrencia`
--
ALTER TABLE `veiculo_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `gestor`
--
ALTER TABLE `gestor`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`);

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `fk_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id`);

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_cor_veiculo` FOREIGN KEY (`id_cor`) REFERENCES `cor` (`id`),
  ADD CONSTRAINT `fk_modelo_veiculo` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id`),
  ADD CONSTRAINT `fk_usuario_veiculo` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `veiculo_ocorrencia`
--
ALTER TABLE `veiculo_ocorrencia`
  ADD CONSTRAINT `fk_ocorrencia` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id`),
  ADD CONSTRAINT `fk_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
