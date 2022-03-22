<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newdb';

    $connexion = new mysqli($servername, $username, $password, $database);

    if($connexion->connect_error){
        die('Erreur de connexion: ' .$connexion->connect_error);
    }

    $result = $connexion->query('SELECT * FROM utilisateur');
    $getAll = $result->fetch_all();
    if($result)
        echo json_encode($all);
?>