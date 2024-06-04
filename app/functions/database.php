<?php

function connect()
{
    global $host, $dbname, $user, $pass;

    try {
        $pdo = new \PDO("mysql:host=localhost;dbname=LivrariaJosé;charset=utf8", "root", "root");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

        return $pdo;
    } catch (\PDOException $e) {
        echo 'Erro de conexão: ' . $e->getMessage();
        return null;
    }
}

function create($table, $fields)
{
    $pdo = connect();

    var_dump($fields);

    $columns = array_keys($fields);
    var_dump($columns);

    $placeholders = array_map(function ($field) {
        return ':' . $field;
    }, $columns);
    var_dump($placeholders);

    $columnsList = implode(", ", $columns);
    $placeholdersList = implode(", ", $placeholders);
    var_dump($columnsList);
    var_dump($placeholdersList);

    $sql = "INSERT INTO {$table} ({$columnsList}) VALUES ({$placeholdersList})";
    var_dump($sql);

    $stmt = $pdo->prepare($sql);

    foreach ($fields as $key => $value) {
        $stmt->bindValue(':' . $key, $value);
        echo "Campo: $key, Valor: $value <br>";
    }

    $stmt->execute();
}

function find()
{
}

function all($table)
{
    $pdo = connect();

    $sql = "SELECT * FROM {$table}";
    $list = $pdo->query($sql);

    $list->execute();

    return $list->fetchAll();
}

function login()
{
}
