<?php






include_once("config.php");

$sql = "SELECT * FROM endereco ORDER BY id  DESC";
$result = $conexao->query(query: $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teste.css">
    <title>primeiraTela</title>



</head>




<body>
 

</body>

</html>


<main>


    <div class="m-5">
        <table class="table">
            <thead class="coluna">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">nome</th>
                    <th scope="col">cidade</th>
                    <th scope="col">estado</th>
                    <th scope="col">selecão</th>

                </tr>

            </thead>
            <tbody>
                <div class="get">
                    <?php

                    while ($user_data = mysqli_fetch_assoc($result)) {

                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td >" . $user_data["nome"] . "</td>";
                        echo "<td>" . $user_data["cidade"] . "</td>";
                        echo "<td>" . $user_data["estado"] . "</td>";
                        echo "<td><a href='perguntas.php?id=$user_data[id]'<div class='botao'> <button>Selecionar</button>  </div>   </a></td>";













                    }


                    ?>

                </div>


            </tbody>


        </table>


        <div class="botao">
            <a href="login.php"><button>Novo endereço</button></a>
            <div class="botaoVoltar"> <a href="index.html"><button id="botaoVoltar">Voltar</button></a></div>
           
        </div>
        



    </div>
   


</main>