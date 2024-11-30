<?php
$host = "localhost";
$db = "banco_php";
$usuario = "root";
$senha = "";
$port = "3307";

try {
    // Conectando ao banco de dados
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!<br>";

    // Teste de consulta simples
    $stmt = $pdo->query("SELECT 1");
    if ($stmt) {
        echo "Teste de consulta bem-sucedido!<br>";
    }

} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
