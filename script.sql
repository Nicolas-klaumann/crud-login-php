CREATE DATABASE crud DEFAULT CHARACTER SET utf8;
USE crud;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clientes` (
    `codigo` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(255) NOT NULL,
    `sobrenome` varchar(255) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `endereco` varchar(500) NOT NULL,
    `email` varchar(255) NOT NULL,
    `idUsuario` int(11) NOT NULL,
    PRIMARY KEY (`codigo`),
    FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
      ON DELETE CASCADE
      ON UPDATE CASCADE
);
