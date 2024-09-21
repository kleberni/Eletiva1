<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST['numero'];
    $contador = 1;
    $soma = 0;

    while ($contador <= $numero) {
        $soma += $contador;
        $contador++;
        }

    echo "<h2>A soma de 1 até $numero é: $soma</h2>";

}
?>
