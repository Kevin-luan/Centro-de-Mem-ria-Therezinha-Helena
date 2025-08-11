<?php


//print_r(  value: $_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    /*
         Teste para verificar se estar pegandos os valores de entrada e salvando nas variaveis

    print_r(value: 'Nome:' . $nome);
    print_r(value: '<br>');
    print_r(value: 'senha:' . $senha);
      
    */
    $sql = "SELECT * FROM adm WHERE nome='$nome' and senha='$senha'";

    $result = $conexao->query(query: $sql);

   //print_r(value: $result); teste para ver se estava funcionando a pesquisa 

   if ($result->num_rows <1) {

    header(header: 'location: login.php');
   }else{
    header('location: endereco.php');
   }

    

} else {
    header('location: login.php');
}

?>