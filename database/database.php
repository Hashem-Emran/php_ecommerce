
<?php
$servername = "localhost";
$username = "username";
$password = "";

$pdo = new PDO("mysql:host=$servername;dbname=site_ecommerce_php", $username, $password);
var_dump($pdo);
?>