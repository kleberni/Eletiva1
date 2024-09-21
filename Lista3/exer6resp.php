<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST['numero'];

    for ($i = 1; $i <= $numero; $i++) {

        echo $i . "<br>";
    }

}
?>
