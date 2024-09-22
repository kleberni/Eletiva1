<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php

$nomes = $_POST['nome'];
$notas1 = $_POST['nota1'];
$notas2 = $_POST['nota2'];
$notas3 = $_POST['nota3'];

$alunos = [];

for ($i = 0; $i < 5; $i++) {
    $nome = $nomes[$i];
    $nota1 = floatval($notas1[$i]);
    $nota2 = floatval($notas2[$i]);
    $nota3 = floatval($notas3[$i]);
    $media = ($nota1 + $nota2 + $nota3) / 3;

    $alunos[$nome] = $media;
}

arsort($alunos);

echo "<h3>Lista de Alunos:</h3>";
if (count($alunos) > 0) {
    foreach ($alunos as $nome => $media) {
        echo "Nome: $nome - Média: " . number_format($media, 2) . "<br>";
    }
} else {
    echo "Não há alunos para exibir.";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>