# PHP e MySQL I: Fundamentos para criar um sistema na Web

<<<<<<< HEAD
=======
## Aula 10 : Alterando produtos

1. Alterando produtos
2. Link de alterar
3. Busca produto
4. Altera produto
5. Formulário de alterção
6. Ação de alteração
7. Similaridades

## Recursos extras utilizados durante o curso

1. Container do banco de dados

    ```bash
    docker run --name alura-mariadb -p 3306:3306 -e MYSQL_ROOT_PASSWORD=1q2w3e4r -d mariadb:latest
    ```

    Para acessar o console do banco via terminal:

    ```bash
    docker exec -it alura-mariadb mysql -u root -p
    ```

2. Banco de dados

    ```sql
    -- banco loja
    create database loja;
    use loja;

    -- tabela produtos
    CREATE TABLE `produtos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(255) DEFAULT NULL,
    `preco` decimal(10,2) DEFAULT NULL,
    `descricao` text DEFAULT NULL,
    `categoria_id` int(11) DEFAULT NULL,
    `usado` tinyint(1) DEFAULT 0,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

    -- tabela categorias
    CREATE TABLE `categorias` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

    -- dados de categorias
    INSERT INTO categorias (nome) VALUES ('escolar'), ('esporte'), ('mobilidade'), ('guloseimas');

    ```
>>>>>>> AULA_11
