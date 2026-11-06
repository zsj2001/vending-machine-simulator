<?php

declare(strict_types=1);

$host = 'localhost';
$database = 'vend_mac_db';
$username = 'root';
$password = '7430';
$port = '3306';
$charset = 'utf8mb4';

$dsn = "mysql:host={$host};dbname={$database};port={$port};charset={$charset}";

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    die("Database Connection Error: " . $e->getMessage());
}