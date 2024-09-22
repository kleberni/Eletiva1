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
        function verificarContido($primeira, $segunda) {
            return strpos($primeira, $segunda) !== false;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $primeira_palavra = $_POST['primeira_palavra'];
            $segunda_palavra = $_POST['segunda_palavra'];

            $contido = verificarContido($primeira_palavra, $segunda_palavra);

            if ($contido) {
                echo "A palavra está contida!";
            } else {
                echo "<A palavra <strong>NÃO</strong> está contida!";
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>