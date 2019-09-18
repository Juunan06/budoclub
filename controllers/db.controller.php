<?php
include './config/sql.config.php';
try {
    $dbh = new PDO($host, $utilisateur, $pwd);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}