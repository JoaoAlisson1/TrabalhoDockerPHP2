<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <a href="paginaLogin.php" class="text-white text-decoration-none h4">Acessar - Fazer Login</a>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Cadastrar Usuário</h1>
                <form method="post" action="controleUsuario.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Usuário:</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" 
                            pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato 999.999.999-99" onkeydown="mascara(this,cpf2)" maxlength="14" required>
                    </div>
                    <button type="submit" name="opcao" value="cadastrar" class="btn btn-primary w-100">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        function mascara(o, f) {

            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {

            v_obj.value = v_fun(v_obj.value)
        }

       

        function cpf2(v) {

            v = v.replace(/\D/g, "") //Remove tudo o que não é dígito
            v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1.$2") //Coloca um ponto entre o terceiro e o quarto dígitos
            //de novo (para o segundo bloco de números)
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
            return v // 
        }

    </script>

</body>
</html>
