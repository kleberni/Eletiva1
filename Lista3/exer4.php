<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicador de Desconto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Digite o valor</h1>
    <form action="exer4resp.php" method="POST">
        <div class="col">
            <label for="valorA" class="form-label">Valor (R$):</label>
            <input type="number" class="form-control" name="valorA" id="valorA">
        </div>
        <div class="col mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
