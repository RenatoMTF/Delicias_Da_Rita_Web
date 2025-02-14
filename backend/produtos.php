<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Conexão com o Banco de Dados
$pdo = new PDO("mysql:host=localhost;dbname=delicias_rita", "root", "");

// Pegando a requisição
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    $stmt = $pdo->query("SELECT * FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($produtos);
}

?>
