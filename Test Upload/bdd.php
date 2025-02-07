<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=upload_file', 'root', 'MdP');
} catch (PDOException $e) {
    ('Erreur sur la base de données : '.$e->getMessage()); die;
}