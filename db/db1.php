<?php 
$user = 'f0767272';
$password = 'imuwukbema';
$db = 'f0767272_db';
$host = 'db';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);
?>