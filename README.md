# startec-test
Desafio Técnico

# Qual o desafio?
Criar uma tabela no banco de dados e configurar algumas informações utilizando o framework Springy.
Hospedar a aplicação em uma máquina virtual AWS e o código em um repositóriono GitHub.

# url
http://ec2-54-160-127-99.compute-1.amazonaws.com


# criação da tabela
CREATE TABLE `tests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


# criação do conteúdo da tabela
INSERT INTO `tests` (`id`, `name`, `created_at`, `updated_at`, `deleted`)
VALUES
	(1, 'Teste 1', '2020-06-18 12:20:00', '2020-06-18 12:30:00', 0),
	(2, 'Teste 2', '2020-06-18 12:20:00', '2020-06-18 12:30:00', 1),
	(3, 'Teste 3', '2020-06-18 12:20:00', '2020-06-18 12:30:00', 0),
	(4, 'Teste 4', '2020-06-18 12:20:00', '2020-06-18 12:30:00', 1),
	(5, 'Teste 5', '2020-06-18 12:20:00', '2020-06-18 12:30:00', 0);
