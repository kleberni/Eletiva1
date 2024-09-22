<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Contatos</h1>
    <form action="exer1resp.php" method="POST">
    <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nome1" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome1" name="nome[]" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefone1" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone1" name="telefone[]" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nome2" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome2" name="nome[]" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefone2" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone2" name="telefone[]" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nome3" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome3" name="nome[]" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefone3" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone3" name="telefone[]" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nome4" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome4" name="nome[]" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefone4" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone4" name="telefone[]" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="nome5" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome5" name="nome[]" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefone5" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone5" name="telefone[]" required>
            </div>
        </div>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
