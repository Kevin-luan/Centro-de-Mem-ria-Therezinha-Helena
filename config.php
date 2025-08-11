<?php

$dbHost ='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='formularioCasaDosMeninos';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Testando a conexão com o banco de dados

/*
if($conexao->connection_errono ){

    echo "Erro";
}else{
    echo "Conexão efetuada com sucesso";
}
*/




?>