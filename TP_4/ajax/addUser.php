<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newdb';

    $connexion = new mysqli($servername, $username, $password, $database);

    if($connexion->connect_error){
        die('Erreur de connexion: ' .$connexion->connect_error);
    }

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['aime']) && isset($_POST['remarque'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['date'];
        if ($_POST['aime']){
            $aimeCours = 'oui';
        }else{
            $aimeCours = 'non';
        }
        $remarque = $_POST['remarque'];

        $query = "INSERT INTO utilisateur (id, nom, prenom, date_naissance, aime_cours, remarque) VALUES (NULL, '$nom', '$prenom', '$dateNaissance', '$aimeCours', '$remarque')";
        $result = $connexion->query($query);
        if($result)
            echo $connection->insert_id;
    }
?>