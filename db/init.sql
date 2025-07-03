-- Criação do banco de dados aeroclube
CREATE DATABASE IF NOT EXISTS aeroclube CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE aeroclube;

-- Criação da tabela aeronaves
CREATE TABLE IF NOT EXISTS aeronaves (
  codigo INT(4) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(200) NOT NULL,
  valor FLOAT NOT NULL,
  ano INT(11) NOT NULL,
  PRIMARY KEY (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

-- Criação do banco de dados login
CREATE DATABASE IF NOT EXISTS login CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE login;

-- Criação da tabela usuario
CREATE TABLE IF NOT EXISTS usuario (
  codigo INT(4) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  senha VARCHAR(40) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  celular VARCHAR(14) NOT NULL,
  PRIMARY KEY (codigo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserção de dados na tabela usuario
INSERT INTO usuario (codigo, nome, senha, cpf, celular) VALUES
(7, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '038.281.350-21', ''),
(8, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '038.281.350-21', '50'),
(9, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '038.281.350-21', '50');
