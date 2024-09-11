<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Calcular Soma</h1>
    <form action="exer2resp.php" method="POST" class="row">
        <div class="col-12 mb-3">
            <label for="valor1" class="form-label">Valor 1:</label>
            <input type="number" class="form-control" name="valor1" id="valor1" required>
        </div>
        <div class="col-12 mb-3">
            <label for="valor2" class="form-label">Valor 2:</label>
            <input type="number" class="form-control" name="valor2" id="valor2" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
