SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `safepark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `safepark`;

CREATE TABLE IF NOT EXISTS `cor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `gestor` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `modelo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `ano` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `ocorrencia` (
  `id` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `data_ocorrencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `prontuario` varchar(10) NOT NULL,
  `hash_senha` varchar(128) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `tel_fixo` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_desattivacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `vaga` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `veiculo` (
  `id` int(11) NOT NULL,
  `id_modelo` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `veiculo_ocorrencia` (
  `id` int(11) NOT NULL,
  `id_ocorrencia` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `cor`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `gestor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`);

ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marca` (`id_marca`);

ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vaga` (`id_vaga`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_modelo_veiculo` (`id_modelo`),
  ADD KEY `fk_cor_veiculo` (`id_cor`),
  ADD KEY `fk_usuario_veiculo` (`id_usuario`);

ALTER TABLE `veiculo_ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ocorrencia` (`id_ocorrencia`),
  ADD KEY `fk_veiculo` (`id_veiculo`);


ALTER TABLE `gestor`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id`);

ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `fk_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vaga` (`id`);

ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_modelo_veiculo` FOREIGN KEY (`id_modelo`) REFERENCES `modelo` (`id`),
  ADD CONSTRAINT `fk_cor_veiculo` FOREIGN KEY (`id_cor`) REFERENCES `cor` (`id`),
  ADD CONSTRAINT `fk_usuario_veiculo` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `veiculo_ocorrencia`
  ADD CONSTRAINT `fk_ocorrencia` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`id`),
  ADD CONSTRAINT `fk_veiculo` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
