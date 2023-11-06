SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- banco de dados usuario

DROP DATABASE IF EXISTS `ETEC`;
CREATE DATABASE IF NOT EXISTS `ETEC` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ETEC`;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `setor` varchar(40) NOT NULL,
    `email` varchar(40) NOT NULL,
    `senha` int(8) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id`, `nome`, `setor`, `email`, `senha`)
VALUES (1, 'usuario', 'secretaria', 'usuario@etec', 12345678);

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
    `idaluno` int(11) NOT NULL AUTO_INCREMENT,
    `nomealuno` varchar(100) NOT NULL,
    `turma` varchar(60) NOT NULL,
    PRIMARY KEY (`idaluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `aluno` (`idaluno`, `nomealuno`, `turma`)
VALUES (1, 'aluno', 'adm');

COMMIT;