<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newdb';

    $connexion = new mysqli($servername, $username, $password, $database);

    if($connexion->connect_error){
        die('Erreur de connexion: ' .$connexion->connect_error);
    }

    if(isset($_POST['idStud'])){
        $id = $_POST['idStud'];
        $query = "DELETE FROM utilisateur WHERE utilisateur.id = $id";
        $result = $connexion->query($query);
        if ($result)
            echo json_encode($result);
    }
?>