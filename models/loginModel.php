<?php


function getUsers(string $name): array
{
    require $_SERVER['DOCUMENT_ROOT'] . '/database/db.php';
    $sql = "SELECT * FROM user WHERE name = :name";
    $query = $connection->prepare($sql);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->execute();
    $data =  $query->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


function getUsersByRowCount(string $name)
{
    require $_SERVER['DOCUMENT_ROOT'] . '/database/db.php';
    $sql = "SELECT * FROM user WHERE name = :name";
    $query = $connection->prepare($sql);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->execute();
    $row = $query->rowCount();
    return $row;
}