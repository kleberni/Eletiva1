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

    $titulos = $_POST['titulo'];
    $quantidades = $_POST['quantidade'];

    $livros = [];

    for ($i = 0; $i < 5; $i++) {
        $titulo = $titulos[$i];
        $quantidade = intval($quantidades[$i]);

        $livros[$titulo] = $quantidade;
    }

    ksort($livros);

    echo "<h3>Lista de Livros:</h3>";
    if (count($livros) > 0) {
        foreach ($livros as $titulo => $quantidade) {

            if ($quantidade < 5) {
                echo "Título: $titulo - Quantidade em Estoque: $quantidade <strong>(Baixa Quantidade!)</strong><br>";
            } else {
                echo "Título: $titulo - Quantidade em Estoque: $quantidade<br>";
            }
        }
    } else {
        echo "Não há livros para exibir.";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>