<div class="row">
    <div class="col-12 mb-2">
        <h2>Categorias</h2>
    </div>
</div>

<table class="table table-bordered table-condensed table-striped">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->dados as $categoria): ?>
            <tr>
                <td><?= $categoria["id"] ?></td>
                <td><?= $categoria["descricao"] ?></td>
                <td><?= getStatus($categoria["statusRegistro"]) ?></td>
                <td>
                    <a href="<?= baseUrl() ?>Categoria/form/view/<?= $categoria['id'] ?>" class="btn btn-secondary">Visualizar</a>&nbsp;
                    <a href="#" class="btn btn-info">Alterar</a>&nbsp;
                    <a href="#" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>