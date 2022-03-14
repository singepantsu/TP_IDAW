<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'newdb';

$connexion = new mysqli($servername, $username, $password, $database);
    // on simule une base de données
    $users = array(
    // login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );
    $receive="style1";
    if (isset($_COOKIE["quelStyle"]))
        $receive=$_COOKIE["quelStyle"];
    echo "<link rel=\"stylesheet\" href=$receive.css type=\"text/css\" media=\"screen\" title=\"default\" charset=\"utf-8\"/>";
    
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if (isset($_SESSION['log']))
        $successfullyLogged = true;
    else{
    if(isset($_GET['login']) && isset($_GET['password'])) {
        $tryLogin=$_GET['login'];
        $tryPwd=$_GET['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
            $_SESSION['log'] = $login;
        }
        else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    }
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
