<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Veículos</h2>
    <a href="novo_veiculo.php" class="btn btn-success mb-3">Novo Veículo</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano de Fabricação</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>EVZ5B26</td>
                <td>HONDA</td>
                <td>FIT</td>
                <td>2011</td>
                <td>PRATA</td>
                <td>
                    <a href="editar_veiculo.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_veiculo.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
