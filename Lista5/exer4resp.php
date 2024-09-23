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
    $nomes = $_POST['nome'];
    $precos = $_POST['preco'];

    $itens = [];

    for ($i = 0; $i < 5; $i++) {
        $nome = $nomes[$i];
        $preco = floatval($precos[$i]);

        $precoComImposto = $preco * 1.15;

        $itens[$nome] = number_format($precoComImposto, 2);
    }

    ksort($itens);

    echo "<h3>Lista de Itens:</h3>";
    if (count($itens) > 0) {
        foreach ($itens as $nome => $preco) {
            echo "Nome: $nome - Preço com Imposto: R$ $preco<br>";
        }
    } else {
        echo "Não há itens para exibir.";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>