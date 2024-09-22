<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diferença entre datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Diferença entre datas</h1>
    <?php
      function calcularDiferencaDias(string $data1, string $data2): int {
        $data1 = DateTime::createFromFormat('d/m/Y', $data1);
        $data2 = DateTime::createFromFormat('d/m/Y', $data2);

        if ($data1 && $data2) {
          $intervalo = $data1->diff($data2);
          return $intervalo->days; // Retorna a diferença em dias
        } else {
          return -1; // Retorna -1 em caso de erro na conversão
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        $diferencaDias = calcularDiferencaDias($data1, $data2);

        if ($diferencaDias >= 0) {
          echo "A diferença entre as datas é: $diferencaDias dias";
        } else {
          echo "Formato de data inválido. Use o formato dd/mm/YYYY.";
        }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>