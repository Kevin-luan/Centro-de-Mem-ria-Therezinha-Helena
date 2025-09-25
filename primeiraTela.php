<?php
include_once("config.php");

$sql = "SELECT * FROM endereco ORDER BY id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Tela</title>
    <link rel="stylesheet" href="primeiraTela1.css">
    
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Menu de navegação -->
    <header>
        <nav>
            <ul>
                <li>
                    <a href="https://www.instagram.com/pontodeculturacasadosmeninos/" target="_blank">
                        <i class="fa-brands fa-instagram"></i> Instagram
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/pontodeculturacasadosmeninos" target="_blank">
                        <i class="fa-brands fa-facebook"></i> Facebook
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@CasaDosMeninos1" target="_blank">
                        <i class="fa-brands fa-youtube"></i> Youtube
                    </a>
                </li>
                <li>
                    <a href="https://casadosmeninos.org.br/" target="_blank">
                        <i class="fa-solid fa-house"></i> Casa
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <section >
        <div class="m-5">
            <table class="table">
                <thead class="coluna">
                    <tr>

                    
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Seleção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {

                       
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['cidade'] . "</td>";
                        echo "<td>" . $user_data['estado'] . "</td>";
                        echo "<td><a class='btn-avancar' href='perguntas.php?id={$user_data['id']}'>Selecionar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Botões inferiores -->
            <div class="botao">
                <a href="login.php" class="btn-avancar">Novo endereço</a>
                <a href="index.html" class="btn-avancar">Voltar</a>
            </div>
        </div>
    </section>
    

</body>

</html>
