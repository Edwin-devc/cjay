<?php
$servername = 'localhost';
$user = 'root';
$user_password = '';
$dbname = 'cjay';

try {
    $conn  = new PDO("mysql:host=$servername;dbname=$dbname", $user, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Database connection failed: ".$e->getMessage();
}

?>