<div class="container">
    
    <h2>Categoria</h2>

    <div class="row">

        <form method="POST" action="<?= baseUrl() ?>Categoria/view">

            <div class="mb-3 col-12">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" 
                    maxlength="50" placeholder="Informe a descrição da categoria"
                    value=""
                    autofocus>
            </div>

            <div class="mb-3 col-12">
                <label for="statusRegistro" class="form-label">Status</label>
                <select class="form-control" name="statusRegistro" id="statusRegistro" required>
                    <option value="">...</option>
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                </select>
            </div>

            <input type="hidden" name="id" id="id" value="">

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-primary">Gravar</button>&nbsp;&nbsp;
                <a href="<?= baseUrl() ?>/Categoria/" class="btn btn-outline-secondary">Voltar</a>
            </div>

        </form>

    </div>

</div>