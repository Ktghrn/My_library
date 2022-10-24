<?php
try{
    // Connexion à la bdd
    $db = new PDO('mysql:host=localhost;dbname=myLibrary', 'root','root');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}
