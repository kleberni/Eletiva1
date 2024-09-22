<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1>Diferença entre datas</h1>
    <form action="exer7resp.php" method="POST">
    <div class="mb-3">
        <label for="data1" class="form-label">Primeira Data (dd/mm/YYYY):</label>
        <input type="text" class="form-control" id="data1" name="data1" placeholder="01/01/2024" required>
      </div>
      <div class="mb-3">
        <label for="data2" class="form-label">Segunda Data (dd/mm/YYYY):</label>
        <input type="text" class="form-control" id="data2" name="data2" placeholder="31/12/2024" required>
      </div>
      <button type="submit" class="btn btn-primary">Calcular Diferença</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
