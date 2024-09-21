<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Palavras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Modifica Palavras</h1>
    <form action="exer2resp.php" method="POST">
        <div class="col-12 mb-3">
            <label for="numero" class="form-label">Informe a palavra para modificar para maiúsculas e minúsculas:</label>
            <input type="text" class="form-control" name="palavra" id="palavra"   >
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
