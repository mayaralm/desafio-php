create DATABASE desafio;

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nomeCliente` varchar(220) NOT NULL,
  `cpfCliente` varchar(520) NOT NULL)

CREATE TABLE IF NOT EXISTS `produtos` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`nome` varchar(220),
`descricao` varchar(220),
`preco` varchar(220),)