<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tentetiva de crud</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mundo magico</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Adicionar livro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Lista de livros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="conteiner">
        <div class="row ms-5 me-5">
            <div class="col mt-5 me-5">
                <?php
                    include("configuracoes.php");
                        switch(@$_REQUEST["page"]){
                        case "novo":
                            include("adicionar_livro.php");
                            break;
                        case "listar":
                            include("lista_livro.php");
                            break;
                        case "salvar":
                            include("salvar_livro.php");
                            break;
                        case "editar":
                            include("editar_livro.php");
                            break;
                        case "vizualizar":
                            include("vizualizar.php");
                            break;
                        
                        default:
                            print "<h1>Bem vindos</h1>";
                        }
                ?>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>