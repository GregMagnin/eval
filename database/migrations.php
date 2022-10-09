<?php

require_once 'db.php';

$queries = [
    "CREATE TABLE user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(70) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
    )"
];

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br/>';
    }
}