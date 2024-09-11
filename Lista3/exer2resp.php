<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Resultado Exercício 2</h1>
    <?php
    try {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $valor1 = (int) $_POST['valor1'];
            $valor2 = (int) $_POST['valor2'];

            $soma = $valor1 + $valor2;

            if ($valor1 == $valor2) {
                $resultado = 3 * $soma;
                echo "<p>Tripo da Soma: $resultado </p>";
            } else {
                echo "<p>Soma dos Valores: $soma </p>";
            }
        }
    } catch(Exception $e){
        echo "Erro! ".$e->getMessage();
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
