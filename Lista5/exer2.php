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
    <form action="exer2resp.php" method="POST">
        <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="row mb-3">
            <div class="col">
                <label for="nome<?php echo $i; ?>" class="form-label">Nome <?php echo $i; ?>:</label>
                <input type="text" class="form-control" id="nome<?php echo $i; ?>" name="nome[]" required>
            </div>
            <div class="col">
                <label for="nota1_<?php echo $i; ?>" class="form-label">Nota 1:</label>
                <input type="number" step="0.01" class="form-control" id="nota1_<?php echo $i; ?>" name="nota1[]" required>
            </div>
            <div class="col">
                <label for="nota2_<?php echo $i; ?>" class="form-label">Nota 2:</label>
                <input type="number" step="0.01" class="form-control" id="nota2_<?php echo $i; ?>" name="nota2[]" required>
            </div>
            <div class="col">
                <label for="nota3_<?php echo $i; ?>" class="form-label">Nota 3:</label>
                <input type="number" step="0.01" class="form-control" id="nota3_<?php echo $i; ?>" name="nota3[]" required>
            </div>
        </div>
        <?php endfor; ?>
        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
