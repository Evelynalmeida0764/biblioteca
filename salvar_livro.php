<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome = $_POST["nome"];
            $autor = $_POST["autor"];
            $tipo = $_POST["tipo"];
            $genero = $_POST["genero"]; 
            $link = $_POST["link"];

            $sql = "INSERT INTO livros (nome, autor, tipo, genero, link) VALUES ('{$nome}','{$autor}','{$tipo}','{$genero}','{$link}')";

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Adicionado com secesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Infelizmente não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            
           break;

        case "editar":
            $nome = $_POST["nome"];
            $autor = $_POST["autor"];
            $tipo = $_POST["tipo"];
            $genero = $_POST["genero"];
            $link = $_POST["link"];

            $sql = "UPDATE livros SET nome='{$nome}',autor='{$autor}', tipo='{$tipo}',genero='{$genero}', link='{$link}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Editado com secesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Infelizmente não foi possivel Editar');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            break;

        case "excluir":

            $sql = "DELETE FROM livros WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('excluido com secesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            else{
                print "<script>alert('Infelizmente não foi possivel excluir');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            break;
    }

?>