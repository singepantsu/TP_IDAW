<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newdb';

    $connexion = new mysqli($servername, $username, $password, $database);

    if($connexion->connect_error){
        die('Erreur de connexion: ' .$connexion->connect_error);
    }

    if(isset($_POST['idStud']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date']) && isset($_POST['aime']) && isset($_POST['remarque'])){
        $id = $_POST['idStud'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['date'];
        if ($_POST['aime']){
            $aimeCours = 'oui';
        }else{
            $aimeCours = 'non';
        }
        $remarque = $_POST['remarque'];
        $query = "UPDATE `utilisateur` SET `nom` = '$nom',`prenom` = '$prenom',`date_naissance` = '$dateNaissance', `aime_cours` = '$aimeCours', `remarque` = '$remarque' WHERE utilisateur.id = $id";
        $result = $connexion->query($query);
    }
?>