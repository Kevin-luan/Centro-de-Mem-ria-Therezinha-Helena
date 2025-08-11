<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="telaLogin.css">
</head>

<body>
    <!-- #region -->

    <a href="primeiraTela.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">

            <input type="text" name="nome" placeholder="Nome"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>


            <input class="botaoSubmit" type="submit" name="submit" value="Enviar">


        </form>



    </div>


</body>

</html>