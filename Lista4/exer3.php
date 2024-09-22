<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Palavras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Verifica Palavras Contidas</h1>
    <form action="exer3resp.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="primeira_palavra" class="form-label">Primeiro texto:</label>
                <input type="text" class="form-control" id="primeira_palavra" name="primeira_palavra" required>
            </div>
            <div class="col">
                <label for="segunda_palavra" class="form-label">Segunda texto:</label>
                <input type="text" class="form-control" id="segunda_palavra" name="segunda_palavra" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Verificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
