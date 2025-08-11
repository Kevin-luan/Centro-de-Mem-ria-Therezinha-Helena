<?php
if (isset($_POST['submit'])) {



    //teste para receber os valores digitados

    /*  
    print_r($_POST['nome']);
    print_r($_POST['estado']);
    print_r($_POST['cidade']);
    print_r($_POST['bairro']);
    */

    include_once('config.php');
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $result = mysqli_query(mysql: $conexao, query: "INSERT INTO endereco(nome,cidade,estado,rua) VALUES('$nome','$cidade','$estado','$bairro')");
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereco</title>
    <link rel="stylesheet" href="endereco.css">
</head>

<body>

    <div class="box">
        <form action="endereco.php" method="post">

            <fieldset>
                <legend>Cadastre novo local para realizar a pesquisa </legend><br>


                <!--Input local do nome--->

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="Nome" required>
                    <label for="nome"></label>
                </div> <br>

                <!--Input estado --->
                <div class="inputBox">
                <label for="estado"></label>
<select name="estado" id="estado" class="inputUser" required>
  <option value="" disabled selected>Selecione seu estado</option>
  <option value="AC">AC</option>
  <option value="AL">AL</option>
  <option value="AP">AP</option>
  <option value="AM">AM</option>
  <option value="BA">BA</option>
  <option value="CE">CE</option>
  <option value="DF">DF</option>
  <option value="ES">ES</option>
  <option value="GO">GO</option>
  <option value="MA">MA</option>
  <option value="MT">MT</option>
  <option value="MS">MS</option>
  <option value="MG">MG</option>
  <option value="PA">PA</option>
  <option value="PB">PB</option>
  <option value="PR">PR</option>
  <option value="PE">PE</option>
  <option value="PI">PI</option>
  <option value="RJ">RJ</option>
  <option value="RN">RN</option>
  <option value="RS">RS</option>
  <option value="RO">RO</option>
  <option value="RR">RR</option>
  <option value="SC">SC</option>
  <option value="SP">SP</option>
  <option value="SE">SE</option>
  <option value="TO">TO</option>
</select>

                   

                </div> <br>

                <!--Input cidade --->

                <div class="inputBox">
                    <input type="text" name="cidade" id="estado" class="inputUser" value="Cidade" required>
                    <label for="nome"></label>
                </div> <br>

                <!--Input bairro --->

                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="Bairro" required>
                    <label for="nome"></label>
                </div> <br>



                <!--Input Enviar--->

                <input c type="submit" name="submit" id="submit">





            </fieldset>


        </form>
        <a href="primeiraTela.php
        "><button>Voltar</button></a>

    </div>

</body>

</html>