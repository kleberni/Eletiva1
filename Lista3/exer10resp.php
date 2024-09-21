<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = $_POST['numero'];

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo " <h2> $numero x $i = $resultado </h2>";
        }

    }
    ?>