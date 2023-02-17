<?php 
$user = 'f0767272';
$password = 'imuwukbema';
$db = 'f0767272_db';
$host = 'localhost';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);
?>