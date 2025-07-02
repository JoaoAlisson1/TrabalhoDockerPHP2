<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <?php
            session_start();
            if(isset($_SESSION["nome"])){
                echo 'Seja bem-vindo(a) ',$_SESSION["nome"];
            }else{
                header("Location: paginaLogin.php");
            }
        ?>
        <form method="post" action="controleUsuario.php">
            <button type="submit" name="opcao" value="sair">
                Sair</button>
        </form>
    </div>
</body>
</html>