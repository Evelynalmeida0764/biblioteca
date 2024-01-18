<span>
<h1>listar</h1>
<button class = "btn btn-dark">Filtrar</button>
</span>


<?php
    print "<table class='table table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Autor</th>";
        print "<th>Tipo</th>";
        print "<th>Genero</th>";
        print "<th>Opções</th>";
        print "</tr>";

        print "<tr>";
            print "<td>""</td>";
            print "<td>""</td>";
            print "<td>""</td>";
            print "<td>""</td>";
            print "<td>""</td>";
        print "</tr>;
    print "</table>";


    $sql = "SELECT * FROM livros";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Autor</th>";
            print "<th>Tipo</th>";
            print "<th>Genero</th>";
            print "<th>Opções</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->autor."</td>";
            print "<td>".$row->tipo."</td>";
            print "<td>".$row->genero."</td>";
            print "<td>
                    <button onclick= \"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick= \" if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\" class='btn btn-danger'>Excluir</button>
                    <button onclick= \"location.href='?page=vizualizar&id=".$row->id."';\"class='btn btn-info'>Mais...</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }
    else{
        print "<p class='alert alert-danger'>Não foi encontrado livros.</p>";
    }


?>