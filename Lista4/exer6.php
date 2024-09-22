<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arredondar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Arredondar</h1>
    <form action="exer6resp.php" method="POST">
    <div class="row">
            <div class="col">
                <label for="numero" class="form-label">Número:</label>
                <input type="number" step="any" class="form-control" id="numero" name="numero" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Verificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
