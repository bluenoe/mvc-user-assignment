<?php
$dsn = 'mysql:host=localhost;dbname=mvc_userdb;charset=utf8mb4';
$username = 'root';      // tuy Laragon / xampp
$password = 'sesame';          

try {
    $db = new PDO($dsn, $username, $password);
    // bao loi neu co van de
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../view/database_error.php'); // ra view
    exit();
}
