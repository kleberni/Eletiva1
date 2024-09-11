<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Insira 7 números</h1>
    <form action="exer1resp.php" method="POST">
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "
            <div class='col'>
                <label for='num$i' class='form-label'>Número $i:</label>
                <input type='number' class='form-control' name='num$i' id='num$i'>
            </div>";
        }
        ?>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [];

        for ($i = 1; $i <= 7; $i++) {
            $numeros[] = (int)$_POST["num$i"];
        }

        $menorValor = $numeros[0];
        $posicaoMenorValor = 1;

        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] < $menorValor) {
                $menorValor = $numeros[$i];
                $posicaoMenorValor = $i + 1; 
            }
        }

        echo "
        <div class='alert alert-success mt-4' role='alert'>
            <p>O menor valor é: <strong>$menorValor</strong></p>
            <p>A posição do menor valor é: <strong>$posicaoMenorValor</strong></p>
        </div>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
