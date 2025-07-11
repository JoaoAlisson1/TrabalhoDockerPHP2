<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Aeronaves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aeronaves</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrarAeronaves.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mostrarAeronaves.php">Mostrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Editar Aeronave</h1>
        <?php
            include 'controleAeronaves.php';
            $codigo=$_GET["codigo"];
            $resultados=mostrarCadaAeronaveAlterar($codigo);
            foreach($resultados as $linha);
        ?>
        <form method="post" action="controleAeronaves.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$linha['nome']?>">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Preço:</label>
                <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="<?=$linha['valor']?>">
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano:</label>
                <input type="number" class="form-control" id="ano" name="ano" value="<?=$linha['ano']?>">
            </div>
            <input type="hidden" name="codigo" 
                   value="<?=$linha['codigo']?>">
            <button type="submit" class="btn btn-primary" 
                name="opcao" value="alterar">Alterar</button>
            <button type="submit" class="btn btn-danger" 
                name="opcao" value="excluir">Excluir</button>
            <a class="btn btn-light" href="mostrarAeronaves.php">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>