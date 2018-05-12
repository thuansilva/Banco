-- --------   << Sistema Gerenciador de Biblioteca>>    ------------ --
--                                                                   --
--                    SCRIPT DE CRIACAO (DDL)                        --
--                                                                   --
-- Data Criacao ...........: 31/03/2018                              --
-- Autor(es) ..............: Anna Lopes		                         --
--                           Clinton Hudson 						 --
--							 Thuan Aguiar							 --
-- Banco de Dados .........: MySQL                                   --
-- Banco de Dados(nome) ...: sigb					                 --
--                                                                   --
-- PROJETO => 1 Base de Dados                                        --
--         => 18 Tabelas                                             --
--                                                                   --
-- ----------------------------------------------------------------- --

CREATE DATABASE  IF NOT EXISTS sigb DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE sigb;

CREATE TABLE USUARIOS (
idUsuario INTEGER NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
CONSTRAINT PK_USUARIOS PRIMARY KEY(idUsuario)
)ENGINE = InnoDB;

CREATE TABLE enderecoUsuario (
endUsuario_PK INTEGER NOT NULL AUTO_INCREMENT,
idUsuario_FK INTEGER NOT NULL,
rua VARCHAR(25) NOT NULL,
numero INTEGER NOT NULL,
bairro VARCHAR(25) NOT NULL, 
CONSTRAINT PK_enderecoUsuario PRIMARY KEY(endUsuario_PK),
CONSTRAINT FK_USUARIOS_enderecoUsuario FOREIGN KEY(idUsuario_FK) REFERENCES USUARIOS(idUsuario)
)ENGINE = InnoDB;

CREATE TABLE telefoneUsuario (
telefone_PK INTEGER NOT NULL AUTO_INCREMENT,
telefone VARCHAR(15),
idUsuario_FK INTEGER NOT NULL,
CONSTRAINT PK_telefoneUsuario PRIMARY KEY(telefone_PK),
CONSTRAINT FK_USUARIOS_telefoneUsuario FOREIGN KEY(idUsuario_FK) REFERENCES USUARIOS(idUsuario)
)ENGINE = InnoDB;

CREATE TABLE TURMA(
idTurma INTEGER NOT NULL AUTO_INCREMENT,
nomeTurma VARCHAR(10) NOT NULL,
CONSTRAINT PK_TURMA PRIMARY KEY(idTurma)
)ENGINE = InnoDB;

CREATE TABLE SERIE(
idSerie INTEGER NOT NULL AUTO_INCREMENT,
nomeSerie VARCHAR(10) NOT NULL,
CONSTRAINT PK_SERIE PRIMARY KEY(idSerie)
)ENGINE = InnoDB;

CREATE TABLE ALUNOS (
idUsuario_FK INTEGER NOT NULL,
responsavel VARCHAR(50) NOT NULL,
matricula VARCHAR(10) NOT NULL,
idTurma_FK INTEGER NOT NULL,
idSerie_FK INTEGER NOT NULL,
CONSTRAINT FK_USUARIOS_ALUNOS FOREIGN KEY(idUsuario_FK) REFERENCES USUARIOS (idUsuario),
CONSTRAINT FK_TURMA_ALUNOS FOREIGN KEY(idTurma_FK) REFERENCES TURMA(idTurma),
CONSTRAINT FK_SERIE_ALUNOS FOREIGN KEY(idSerie_FK) REFERENCES SERIE(idSerie)
)ENGINE = InnoDB;

CREATE TABLE PROFESSORES (
idUsuario_FK INTEGER NOT NULL,
email VARCHAR(25) NOT NULL,
cpf INTEGER NOT NULL,
CONSTRAINT FK_USUARIOS_PROFESSORES FOREIGN KEY(idUsuario_FK) REFERENCES USUARIOS (idUsuario)
)ENGINE = InnoDB;

CREATE TABLE BIBLIOTECARIA (
idBibliotecaria INTEGER NOT NULL AUTO_INCREMENT,
nomeBibliotecaria VARCHAR(50) NOT NULL,
email VARCHAR(25) NOT NULL,
nomeLogin VARCHAR(25) NOT NULL,
senha VARCHAR(25) NOT NULL,
CONSTRAINT PK_BIBLIOTECARIA PRIMARY KEY (idBibliotecaria)
)ENGINE = InnoDB;

CREATE TABLE enderecoBibliotecaria (
endBibliotecaria_PK INTEGER NOT NULL AUTO_INCREMENT,
idBibliotecaria_FK INTEGER NOT NULL,
rua VARCHAR(25) NOT NULL,
numero INTEGER NOT NULL,
bairro VARCHAR(25) NOT NULL, 
CONSTRAINT PK_enderecoBibliotecaria PRIMARY KEY(endBibliotecaria_PK),
CONSTRAINT FK_BIBLIOTECARIA_enderecoBibliotecaria FOREIGN KEY(idBibliotecaria_FK) REFERENCES BIBLIOTECARIA(idBibliotecaria)
)ENGINE = InnoDB;

CREATE TABLE telefoneBibliotecaria (
telefone_PK INTEGER NOT NULL AUTO_INCREMENT,
idBibliotecaria_FK INTEGER NOT NULL,
telefone VARCHAR(15) NOT NULL,
CONSTRAINT PK_telefoneBibliotecaria PRIMARY KEY(telefone_PK),
CONSTRAINT FK_BIBLIOTECARIA_telefoneBibliotecaria FOREIGN KEY(idBibliotecaria_FK) REFERENCES BIBLIOTECARIA (idBibliotecaria)
)ENGINE = InnoDB;

CREATE TABLE OBRAS (
idObras INTEGER NOT NULL AUTO_INCREMENT,
dataCadastro DATETIME NOT NULL,
nome VARCHAR(50) NOT NULL,
anoPublicacao INTEGER NOT NULL,
obs VARCHAR(500),
CONSTRAINT PK_OBRAS PRIMARY KEY(idObras)
)ENGINE = InnoDB;

CREATE TABLE LIVROS (
isbn VARCHAR(20) NOT NULL,
idObras_FK INTEGER NOT NULL,
volume INTEGER,
CONSTRAINT PK_LIVROS PRIMARY KEY(isbn),
CONSTRAINT FK_OBRAS_LIVROS FOREIGN KEY(idObras_FK) REFERENCES OBRAS(idObras)
)ENGINE = InnoDB;

CREATE TABLE REVISTAS (
idObras_FK INTEGER NOT NULL,
titulo VARCHAR(50) NOT NULL,
edicao INTEGER,
CONSTRAINT FK_OBRAS_REVISTAS FOREIGN KEY(idObras_FK) REFERENCES OBRAS(idObras)
)ENGINE = InnoDB;

CREATE TABLE AUTOR (
idAutor INTEGER NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
CONSTRAINT PK_AUTOR PRIMARY KEY (idAutor)
)ENGINE = InnoDB;

CREATE TABLE tem (
idAutor_FK INTEGER NOT NULL,
isbn_FK VARCHAR(20) NOT NULL,
CONSTRAINT FK_AUTOR_tem FOREIGN KEY(idAutor_FK) REFERENCES AUTOR(idAutor),
CONSTRAINT FK_LIVROS_tem FOREIGN KEY(isbn_FK) REFERENCES LIVROS(isbn)
)ENGINE = InnoDB;

CREATE TABLE EDITORA (
idEditora INTEGER NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
CONSTRAINT PK_EDITORA PRIMARY KEY(idEditora)
)ENGINE = InnoDB;

CREATE TABLE possui (
idEditora_FK INTEGER NOT NULL,
idObras_FK INTEGER NOT NULL,
CONSTRAINT FK_EDITORA_possui FOREIGN KEY(idEditora_FK) REFERENCES EDITORA(idEditora),
CONSTRAINT FK_OBRAS_possui FOREIGN KEY(idObras_FK) REFERENCES OBRAS (idObras)
)ENGINE = InnoDB;

CREATE TABLE USUARIOS_EMPRESTIMO (
idBibliotecaria_FK INTEGER NOT NULL,
idObras_FK INTEGER NOT NULL,
idUsuario_FK INTEGER NOT NULL,
dataDevolucao DATETIME NOT NULL,
dataEmprestimo DATETIME NOT NULL,
CONSTRAINT FK_BIBLIOTECARIA_USUARIOS_EMPRESTIMO FOREIGN KEY(idObras_FK) REFERENCES OBRAS (idObras),
CONSTRAINT FK_OBRAS_USUARIOS_EMPRESTIMO FOREIGN KEY(idUsuario_FK) REFERENCES USUARIOS (idUsuario),
CONSTRAINT FK_USUARIOS_USUARIOS_EMPRESTIMO FOREIGN KEY(idBibliotecaria_FK) REFERENCES Bibliotecaria (idBibliotecaria)
)ENGINE = InnoDB;