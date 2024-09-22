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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomes = $_POST['nome'];
        $telefones = $_POST['telefone'];
        $contatos = [];


        for ($i = 0; $i < count($nomes); $i++) {
            $nome = $nomes[$i];
            $telefone = $telefones[$i];

            if (array_key_exists($nome, $contatos)) {
                echo "Nome duplicado: $nome";
            } elseif (in_array($telefone, $contatos)) {
                echo "Telefone duplicado: $telefone";
            } else {
                $contatos[$nome] = $telefone;
            }
        }


        ksort($contatos);


        echo "<h3>Lista de Contatos:</h3>";
        if (count($contatos) > 0) {
            echo "<ul class='list-group'>";
            foreach ($contatos as $nome => $telefone) {
                echo "<li class='list-group-item'>Nome: $nome - Telefone: $telefone</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Não há contatos para exibir.</p>";
        }
    }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>