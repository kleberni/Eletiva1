<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        echo "<h2>Contagem regressiva a partir de $numero:</h2>";

        do {
            echo $numero . "<br>";
            $numero--;
        } while ($numero >= 1);
    }
    ?>