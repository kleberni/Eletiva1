<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];
        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        echo "<h2>O fatorial de $numero é: $fatorial</h2>";
    }
    ?>