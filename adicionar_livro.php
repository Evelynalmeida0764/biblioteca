<h1>adicionar livro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name ="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Autor:</label>
        <input type="text" name="autor" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo:</label>
        <input type="text" name="tipo" class="form-control">
    </div>

    <div class="mb-3">
        <label>Genero:</label>
        <input type="text" name="genero" class="form-control">
    </div>

    <div class="mb-3">
        <label>Link:</label>
        <input type="text" name="link" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
</form>