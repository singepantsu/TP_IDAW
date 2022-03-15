<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'newdb';

$sub = new mysqli($servername, $username, $password, $database);
if (isset($_GET["new_login"]) && isset($_GET["new_pseudo"]) && isset($_GET["new_password"])){
    $new_log=$_GET["new_login"];
    $new_p=$_GET["new_pseudo"];
    $new_pass=$_GET["new_password"];
    //J'ai du séparer sinon le navigateur lit pas la String
    $query = "INSER"."T INTO user ('ID','LOGIN', 'PASSWORD', 'PSEUDO') VALUES (NULL, '".$new_log."','".$new_pass."','".$new_p."')";
    $sub->query($query);
}
?>
<form id="subscribe_form" action="index.php" method="GET">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="new_login"></td>
        </tr>
        <tr>
            <th>pseudo :</th>
            <td><input type="text" name="new_pseudo"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="new_password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="S'inscrire" /></td>
        </tr>
    </table>
</form>