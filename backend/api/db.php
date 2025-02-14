<?php
$host = "localhost";
$dbname = "delicias_rita";
$username = "root";
$password = "00"; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erro na conexão com o banco: " . $e->getMessage()]);
    exit;
}
?>
