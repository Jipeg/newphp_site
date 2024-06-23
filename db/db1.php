<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include Composer's autoloader

use Dotenv\Dotenv;

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host= $_ENV['DB_HOST'];
$user=$_ENV['DB_USER'];
$password= $_ENV['DB_PASS'];
$db= $_ENV['DB_NAME'];

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $password);
?>