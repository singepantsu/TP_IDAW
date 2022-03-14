<head>
    <meta charset="UTF-8">
    <title>Log to db</title>
    <link rel="stylesheet" href="style1.css" type="text/css"/>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'newdb';

$connexion = new mysqli($servername, $username, $password, $database);
$result = $connexion->query('SELECT * FROM user');
if($result)
    $data=$result->fetch_all();
echo "<table><tbody id=\"hauttab\"><tr>
        <th>id</th>
        <th>login</th>
        <th>password</th>
        <th>pseudo</th>
        </tr>
        </tbody>";
if ($data != NULL){
    foreach($data as $row){
        echo "<tr>
            <th>$row[0]</th>
            <th>$row[1]</th>
            <th>$row[2]</th>
            <th>$row[3]</th>
            </tr>";
    }
}
echo "</table>"

?>