<?php
try {
    $pdo = new PDO('mysql:host=10.10.11.102;dbname=mysite',
        'root',
        '',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}