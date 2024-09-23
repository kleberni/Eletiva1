<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php

$codigos = $_POST['codigo'];
$nomes = $_POST['nome'];
$precos = $_POST['preco'];

$produtos = [];

for ($i = 0; $i < 5; $i++) {
    $codigo = $codigos[$i];
    $nome = $nomes[$i];
    $preco = floatval($precos[$i]);

    if ($preco > 100) {
        $preco *= 0.9;
    }

    $produtos[$codigo] = [
        'nome' => $nome,
        'preco' => number_format($preco, 2)
    ];
}

uasort($produtos, function($a, $b) {
    return strcmp($a['nome'], $b['nome']);
});

echo "<h3>Lista de Produtos:</h3>";
if (count($produtos) > 0) {
    foreach ($produtos as $codigo => $info) {
        echo "Código: $codigo - Produto: " . $info['nome'] . " - Preço: R$" . $info['preco'] . "<br>";
    }
} else {
    echo "Não há produtos para exibir.";
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>