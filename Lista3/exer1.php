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
        // Cria campos de entrada para 7 números com Bootstrap
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

        // Lê os 7 números do formulário e armazena no array $numeros
        for ($i = 1; $i <= 7; $i++) {
            $numeros[] = (int)$_POST["num$i"];
        }

        // Inicializa as variáveis para armazenar o menor valor e sua posição
        $menorValor = $numeros[0];
        $posicaoMenorValor = 1;

        // Itera sobre o array para encontrar o menor valor
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] < $menorValor) {
                $menorValor = $numeros[$i];
                $posicaoMenorValor = $i + 1; // Posição humana começa em 1, não 0
            }
        }

        // Exibe o menor valor e sua posição com Bootstrap
        echo "
        <div class='alert alert-success mt-4' role='alert'>
            <p>O menor valor é: <strong>$menorValor</strong></p>
            <p>A posição do menor valor é: <strong>$posicaoMenorValor</strong></p>
        </div>";
    }
    ?>
    <!-- Script do Bootstrap via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
