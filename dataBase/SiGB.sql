-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 28-Maio-2018 às 22:57
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sigb`
--
CREATE DATABASE IF NOT EXISTS `sigb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sigb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `idUsuario_FK` int(11) NOT NULL AUTO_INCREMENT,
  `responsavel` varchar(50) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `turma` varchar(10) NOT NULL,
  `serie` varchar(10) NOT NULL,
  KEY `FK_USUARIOS_ALUNOS` (`idUsuario_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `idAutor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`idAutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibliotecaria`
--

CREATE TABLE IF NOT EXISTS `bibliotecaria` (
  `idBibliotecaria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeBibliotecaria` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nomeLogin` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`idBibliotecaria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE IF NOT EXISTS `editora` (
  `idEditora` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`idEditora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecobibliotecaria`
--

CREATE TABLE IF NOT EXISTS `enderecobibliotecaria` (
  `endBibliotecaria_PK` int(11) NOT NULL AUTO_INCREMENT,
  `idBibliotecaria_FK` int(11) NOT NULL,
  `rua` varchar(25) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  PRIMARY KEY (`endBibliotecaria_PK`),
  KEY `FK_BIBLIOTECARIA_enderecoBibliotecaria` (`idBibliotecaria_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecousuario`
--

CREATE TABLE IF NOT EXISTS `enderecousuario` (
  `endUsuario_PK` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario_FK` int(11) NOT NULL,
  `rua` varchar(25) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  PRIMARY KEY (`endUsuario_PK`),
  KEY `FK_USUARIOS_enderecoUsuario` (`idUsuario_FK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE IF NOT EXISTS `livros` (
  `isbn` varchar(20) NOT NULL,
  `idObras_FK` int(11) NOT NULL,
  `volume` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn`),
  KEY `FK_OBRAS_LIVROS` (`idObras_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `idObras` int(11) NOT NULL AUTO_INCREMENT,
  `dataCadastro` date NOT NULL,
  `nomeObras` varchar(50) NOT NULL,
  `anoPublicacao` int(11) NOT NULL,
  `obs` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idObras`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui`
--

CREATE TABLE IF NOT EXISTS `possui` (
  `idEditora_FK` int(11) NOT NULL,
  `idObras_FK` int(11) NOT NULL,
  KEY `FK_EDITORA_possui` (`idEditora_FK`),
  KEY `FK_OBRAS_possui` (`idObras_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `idUsuario_FK` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cpf` int(11) NOT NULL,
  KEY `FK_USUARIOS_PROFESSORES` (`idUsuario_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `revistas`
--

CREATE TABLE IF NOT EXISTS `revistas` (
  `idObras_FK` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `edicao` int(11) DEFAULT NULL,
  KEY `FK_OBRAS_REVISTAS` (`idObras_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefonebibliotecaria`
--

CREATE TABLE IF NOT EXISTS `telefonebibliotecaria` (
  `telefone_PK` int(11) NOT NULL AUTO_INCREMENT,
  `idBibliotecaria_FK` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`telefone_PK`),
  KEY `FK_BIBLIOTECARIA_telefoneBibliotecaria` (`idBibliotecaria_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefoneusuario`
--

CREATE TABLE IF NOT EXISTS `telefoneusuario` (
  `telefone_PK` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(15) DEFAULT NULL,
  `idUsuario_FK` int(11) NOT NULL,
  PRIMARY KEY (`telefone_PK`),
  KEY `FK_USUARIOS_telefoneUsuario` (`idUsuario_FK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tem`
--

CREATE TABLE IF NOT EXISTS `tem` (
  `idAutor_FK` int(11) NOT NULL,
  `isbn_FK` varchar(20) NOT NULL,
  KEY `FK_AUTOR_tem` (`idAutor_FK`),
  KEY `FK_LIVROS_tem` (`isbn_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuarios` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_emprestimo`
--

CREATE TABLE IF NOT EXISTS `usuarios_emprestimo` (
  `idEmprestimo` int(11) NOT NULL,
  `idBibliotecaria_FK` int(11) NOT NULL,
  `idObras_FK` int(11) NOT NULL,
  `idUsuario_FK` int(11) NOT NULL,
  `dataDevolucao` date NOT NULL,
  `dataEmprestimo` date NOT NULL,
  PRIMARY KEY (`idEmprestimo`),
  KEY `FK_BIBLIOTECARIA_USUARIOS_EMPRESTIMO` (`idObras_FK`),
  KEY `FK_OBRAS_USUARIOS_EMPRESTIMO` (`idUsuario_FK`),
  KEY `FK_USUARIOS_USUARIOS_EMPRESTIMO` (`idBibliotecaria_FK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `FK_USUARIOS_ALUNOS` FOREIGN KEY (`idUsuario_FK`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `enderecobibliotecaria`
--
ALTER TABLE `enderecobibliotecaria`
  ADD CONSTRAINT `FK_BIBLIOTECARIA_enderecoBibliotecaria` FOREIGN KEY (`idBibliotecaria_FK`) REFERENCES `bibliotecaria` (`idBibliotecaria`);

--
-- Limitadores para a tabela `enderecousuario`
--
ALTER TABLE `enderecousuario`
  ADD CONSTRAINT `FK_USUARIOS_enderecoUsuario` FOREIGN KEY (`idUsuario_FK`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `FK_OBRAS_LIVROS` FOREIGN KEY (`idObras_FK`) REFERENCES `obras` (`idObras`);

--
-- Limitadores para a tabela `possui`
--
ALTER TABLE `possui`
  ADD CONSTRAINT `FK_EDITORA_possui` FOREIGN KEY (`idEditora_FK`) REFERENCES `editora` (`idEditora`),
  ADD CONSTRAINT `FK_OBRAS_possui` FOREIGN KEY (`idObras_FK`) REFERENCES `obras` (`idObras`);

--
-- Limitadores para a tabela `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `FK_USUARIOS_PROFESSORES` FOREIGN KEY (`idUsuario_FK`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `revistas`
--
ALTER TABLE `revistas`
  ADD CONSTRAINT `FK_OBRAS_REVISTAS` FOREIGN KEY (`idObras_FK`) REFERENCES `obras` (`idObras`);

--
-- Limitadores para a tabela `telefonebibliotecaria`
--
ALTER TABLE `telefonebibliotecaria`
  ADD CONSTRAINT `FK_BIBLIOTECARIA_telefoneBibliotecaria` FOREIGN KEY (`idBibliotecaria_FK`) REFERENCES `bibliotecaria` (`idBibliotecaria`);

--
-- Limitadores para a tabela `telefoneusuario`
--
ALTER TABLE `telefoneusuario`
  ADD CONSTRAINT `FK_USUARIOS_telefoneUsuario` FOREIGN KEY (`idUsuario_FK`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `tem`
--
ALTER TABLE `tem`
  ADD CONSTRAINT `FK_AUTOR_tem` FOREIGN KEY (`idAutor_FK`) REFERENCES `autor` (`idAutor`),
  ADD CONSTRAINT `FK_LIVROS_tem` FOREIGN KEY (`isbn_FK`) REFERENCES `livros` (`isbn`);

--
-- Limitadores para a tabela `usuarios_emprestimo`
--
ALTER TABLE `usuarios_emprestimo`
  ADD CONSTRAINT `FK_BIBLIOTECARIA_USUARIOS_EMPRESTIMO` FOREIGN KEY (`idObras_FK`) REFERENCES `obras` (`idObras`),
  ADD CONSTRAINT `FK_OBRAS_USUARIOS_EMPRESTIMO` FOREIGN KEY (`idUsuario_FK`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `FK_USUARIOS_USUARIOS_EMPRESTIMO` FOREIGN KEY (`idBibliotecaria_FK`) REFERENCES `bibliotecaria` (`idBibliotecaria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
