<div class="row">
    <div class="col-12 mb-2">
        <h2>Produtos</h2>
    </div>
</div>

<table class="table table-bordered table-condensed table-striped">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Saldo Em Estoque</th>
            <th>Preço de Venda</th>
            <th>Promoção</th>
            <th>Status</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->dados as $value): ?>
            <tr>
                <td><?= $value["id"] ?></td>
                <td><?= $value["descricao"] ?></td>
                <td><?= $value["categoria_id"] ?></td>
                <td class="text-end"><?= formataValor($value["saldoEmEstoque"], 3) ?></td>
                <td class="text-end"><?= formataValor($value["precoVenda"]) ?></td>
                <td class="text-end"><?= formataValor($value["precoPromocao"]) ?></td>
                <td><?= getStatus($value["statusRegistro"]) ?></td>
                <td>
                    <a href="<?= baseUrl() ?>Categoria/form/view/<?= $value['id'] ?>" class="btn btn-secondary">Visualizar</a>&nbsp;
                    <a href="#" class="btn btn-info">Alterar</a>&nbsp;
                    <a href="#" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>