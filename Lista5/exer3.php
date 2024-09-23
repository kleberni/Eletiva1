<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Notas Alunos</h1>
    <form action="exer3resp.php" method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="row mb-3">
            <div class="col">
                <label for="codigo<?php echo $i; ?>" class="form-label">Código <?php echo $i; ?>:</label>
                <input type="text" class="form-control" id="codigo<?php echo $i; ?>" name="codigo[]" required>
            </div>
            <div class="col">
                <label for="nome<?php echo $i; ?>" class="form-label">Nome <?php echo $i; ?>:</label>
                <input type="text" class="form-control" id="nome<?php echo $i; ?>" name="nome[]" required>
            </div>
            <div class="col">
                <label for="preco<?php echo $i; ?>" class="form-label">Preço <?php echo $i; ?>:</label>
                <input type="number" step="0.01" class="form-control" id="preco<?php echo $i; ?>" name="preco[]" required>
            </div>
        </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
