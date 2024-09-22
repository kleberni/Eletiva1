<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Verificar Data</h1>
    <form action="exer4resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Dia:</label>
                <input type="number" class="form-control" id="dia" name="dia" required>
            </div>
            <div class="col">
                <label for="mes" class="form-label">Mês:</label>
                <input type="number" class="form-control" id="mes" name="mes" required>
            </div>
            <div class="col">
                <label for="ano" class="form-label">Ano:</label>
                <input type="number" class="form-control" id="ano" name="ano" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Verificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
