<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do Exercício 16</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            try{
                $valor1 = (float) $_POST['valor1'] ?? 0;
                $valor2 = (float) $_POST['valor2'] ?? 0;
                // + - * / % ++ -- **
                $resultado = ($valor1 * ((100 - $valor2) / 100));
                echo "<p>Preço Final (R$): $resultado </p>";
            } catch(Exception $e){
                echo "Erro! ".$e->getMessage();
            }

        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>