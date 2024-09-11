<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Resultado Exercício 4</h1>
    <?php
    try {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $valorA = $_POST['valorA'];
            
            if ($valorA > 100) {
                $desconto = $valorA * 0.85;
                echo "<p>Valor com desconto: $desconto </p> " ;
            } else {
                echo "<p> Valor R$: $ValorA </p>";
            }
        }
    } catch(Exception $e){
        echo "Erro! ".$e->getMessage();
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
