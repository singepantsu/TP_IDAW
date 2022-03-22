<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newdb';

    $connexion = new mysqli($servername, $username, $password, $database);

    if($connexion->connect_error){
        die('Erreur de connexion: ' .$connexion->connect_error);
    }

    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['aimeCours']) && isset($_POST['remarque'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $aimeCours = $_POST['aimeCours'];
        $remarque = $_POST['remarque'];

        $query = "INSERT INTO utilisateur (id, nom, prenom, date_naissance, aime_cours, remarque) VALUES (NULL, '$nom', '$prenom', '$dateNaissance', $aimeCours, '$remarque')";
        $result = $connexion->query($query);
    }
?>