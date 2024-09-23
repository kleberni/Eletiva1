<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Cadastro de Livros</h1>
    <form action="exer5resp.php" method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="row mb-3">
            <div class="col">
                <label for="titulo<?php echo $i; ?>" class="form-label">Título <?php echo $i; ?>:</label>
                <input type="text" class="form-control" id="titulo<?php echo $i; ?>" name="titulo[]" required>
            </div>
            <div class="col">
                <label for="quantidade<?php echo $i; ?>" class="form-label">Quantidade em Estoque <?php echo $i; ?>:</label>
                <input type="number" class="form-control" id="quantidade<?php echo $i; ?>" name="quantidade[]" required>
            </div>
        </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
