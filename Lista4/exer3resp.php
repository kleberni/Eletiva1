<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Verifica Palavras Contidads</h1>

    <?php
        // Função para verificar se a segunda palavra está contida na primeira
        function verificarContido($primeira, $segunda) {
            return strpos($primeira, $segunda) !== false; // Função interna do PHP strpos()
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $primeira_palavra = $_POST['primeira_palavra'];
            $segunda_palavra = $_POST['segunda_palavra'];

            // Verificando se a segunda palavra está contida na primeira
            $contido = verificarContido($primeira_palavra, $segunda_palavra);

            if ($contido) {
                echo "<div class='mt-3'><h2>A segunda palavra '<b>$segunda_palavra</b>' está contida na primeira palavra '<b>$primeira_palavra</b>'.</h2></div>";
            } else {
                echo "<div class='mt-3'><h2>A segunda palavra '<b>$segunda_palavra</b>' NÃO está contida na primeira palavra '<b>$primeira_palavra</b>'.</h2></div>";
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>