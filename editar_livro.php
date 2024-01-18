<h1>Editar livro</h1>

<?php
    $sql = "SELECT * FROM livros WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name ="acao" value="editar">
    <input type="hidden" name ="id" value="<?php print $row->id;?>">
    
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Autor:</label>
        <input type="text" name="autor" value="<?php print $row->autor; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tipo:</label>
        <input type="text" name="tipo" value="<?php print $row->tipo; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Genero:</label>
        <input type="text" name="genero" value="<?php print $row->genero; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Link:</label>
        <input type="text" name="link" value="<?php print $row->link; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>