
<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Editar Serviço</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Serviço</label>
            <input type="text" name="nome" id="nome" class="form-control" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Serviço</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
