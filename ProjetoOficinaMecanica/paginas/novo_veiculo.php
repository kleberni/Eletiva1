<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Cadastro de Veículos</h2>

    <form method="post">
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" id="placa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="number" name="modelo" id="modelo" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="ano_fabricacao" class="form-label">Ano de Fabricação</label>
            <input type="number" name="ano_fabricacao" id="ano_fabricacao" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" name="cor" id="cor" class="form-control" required>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Veículo</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
