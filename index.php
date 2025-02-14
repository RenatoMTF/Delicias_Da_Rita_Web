<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Simulação de um banco de dados (vamos conectar depois)
$produtos = [
    ["id" => 1, "nome" => "Brownie", "preco" => 5.00],
    ["id" => 2, "nome" => "Brigadeiro", "preco" => 2.50]
];

// Pegando a requisição do usuário
$method = $_SERVER["REQUEST_METHOD"];
$rota = explode("/", trim($_SERVER["REQUEST_URI"], "/"));

// Rota de Produtos
if ($rota[0] === "api" && $rota[1] === "produtos") {
    if ($method === "GET") {
        echo json_encode($produtos);
    } else {
        echo json_encode(["error" => "Método não permitido"]);
    }
} else {
    echo json_encode(["error" => "Rota não encontrada"]);
}

// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost;dbname=delicias_rita", "root", "");

// Pegando a requisição
$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {
    $stmt = $pdo->query("SELECT * FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($produtos);
}
?>

