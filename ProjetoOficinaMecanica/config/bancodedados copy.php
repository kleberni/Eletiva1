<?php>

function buscarProdutos() : array {
    global $pdo;
    $stmt = $pdo ->query("SELECT p.*, c.nome as nome_categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id");
    return $stmt->fetchall(PDO::FETCH_ASSOC);
}

function buscarProdutosPorId(int $id) : ?array {
    global $pdo;
    $stmt = $pdo ->prepare("SELECT p.*, c.nome as nome_categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id WHERE p.id = ?");
    $stmt->execute([$id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
    return $produto ? produto 

}

function criarProduto(string $nome, string $descricao, float $preco, int $estoque_minimo, int $categoria_id) : bool {
    global $pdo;
    $stmt = $pdo->preprar("INSERT INTO produto(nome, descricao, preco, estoque_minimo, categoria_id) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nome, $descricao, $preco, $estoque_minimo, $categoria_id]);
}

function alterarProduto(int $id, string $nome, string $descricao, float $preco, int $estoque_minimo, int $categoria_id) : bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produto SET nome = ?, descricao = ?, preco = ?, estoque_minimo = ?, categoria_id = ?");
    return $stmt->execute([$nome, $descricao, $preco, $estoque_minimo, $categoria_id, $id]);

}

function exluirProduto(int $id) : bool {
    global $pdo;
    $stmt = $pedo->prepare("DELETE FROM produto WHERE id = ?");
    return $stmt->execute([$id]);
}