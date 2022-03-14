<?php
    $content = "style1";

    if (isset($_COOKIE["quelStyle"]))
        $content = $_COOKIE["quelStyle"];
    if(isset($_GET['css'])){
        $content = $_GET['css'];
        setcookie("quelStyle", $content, time()+3600);
    }
?>
<head>
    <meta charset="UTF-8">
    <title>Log to site</title>
<?php
    
    echo "<link rel=\"stylesheet\" href=\"$content.css\" type=\"text/css\">";
?>
</head>
<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer"/>
</form>
<form id="login_form" action="connected.php" method="GET">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Se connecter..." /></td>
        </tr>
    </table>
</form>
<?php
require_once('inscription.php');
?>