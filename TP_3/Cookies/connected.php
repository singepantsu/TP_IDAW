<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'newdb';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connexion = new mysqli($servername, $username, $password, $database);
    /*// on simule une base de données
    $users = array(
    // login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );
    $receive="style1";
    */
    if (isset($_COOKIE["quelStyle"]))
        $receive=$_COOKIE["quelStyle"];
    echo "<link rel=\"stylesheet\" href=$receive.css type=\"text/css\" media=\"screen\" title=\"default\" charset=\"utf-8\"/>";
    
    $pseudo = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    //if (isset($_SESSION['log']))
    //    $successfullyLogged = true;
    //else{
    if(isset($_GET['login']) && isset($_GET['password'])) {
        $tryLogin = $_GET['login'];
        $tryPwd = $_GET['password'];
        $results = $connexion->query("Select * from user where LOGIN = '".$tryLogin."' and PASSWORD='".$tryPwd."'");
        $data = $results->fetch_array(MYSQLI_NUM);
        // si login et password correspond
        if($results) {
            $successfullyLogged = true;
            $pseudo = $data[3];
            $_SESSION['log'] = $pseudo;
        }
        else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    //}
    if(!$successfullyLogged) {
        echo $errorText;
    } 
    else {
        require_once("template_menu.php");
        $currentPageId = 'test1';
        if(isset($_GET['page'])) 
            $currentPageId = $_GET['page'];
        require_once($currentPageId.".php");

    echo "<h1>Bienvenue ".$_SESSION['log']."</h1>";
    }
?>
