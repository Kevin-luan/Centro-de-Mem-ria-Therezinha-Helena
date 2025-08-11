<?php



if (!empty($_GET['id'])) {

    include_once('config.php');
    $ids = $_GET['id'];



}
/*
if (isset($_POST['submit'])) {



    include_once('config.php');

    $ids = $_POST['ids'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $raca = $_POST['raca'];
    $escolaridade = $_POST['escolaridade'];
    $trabalha = $_POST['trabalha'];
    $motivacaoTrabalho = implode(separator: ", ", array: $_POST['motivacaoTrabalho']);*/

if (isset($_POST['submit'])) {

    include_once('config.php');  // Conexão com o banco

    // Coleta os dados do formulário
    $ids = $_POST['ids'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $raca = $_POST['raca'];
    $escolaridade = $_POST['escolaridade'];
    $trabalha = $_POST['trabalha'];

    // Verifica se alguma motivação foi marcada, e junta as opções com uma vírgula
    if (isset($_POST['motivacaoTrabalho'])) {
        $motivacaoTrabalho = implode(", ", $_POST['motivacaoTrabalho']);
    } else {
        $motivacaoTrabalho = '';  // Caso nenhuma opção tenha sido marcada
    }
    // pergunta 7 de verdadeiro ou falso 

    $pergunta7A = $_POST['pergunta7A'];
    $pergunta7B = $_POST['pergunta7B'];
    $pergunta7C = $_POST['pergunta7C'];
    $pergunta7D = $_POST['pergunta7D'];
    $pergunta7E = $_POST['pergunta7E'];

    // resposta sim ou não 

    $pergunta8 = $_POST['pergunta8'];
    $pergunta9 = $_POST['pergunta9'];

    // Pergunta de camppo aberto

    $pergunta10 = $_POST['pergunta10'];

    //pergunta 11 de verdadeiro ou falso (todas verdadeiras)
    $pergunta11A = $_POST['pergunta11A'];
    $pergunta11B = $_POST['pergunta11B'];
    $pergunta11C = $_POST['pergunta11C'];
    $pergunta11D = $_POST['pergunta11D'];
    $pergunta11E = $_POST['pergunta11E'];

    //perguntas 11 de verdadeira ou falsa (todas falsa)
    $pergunta11F = $_POST['pergunta11F'];
    $pergunta11G = $_POST['pergunta11G'];
    $pergunta11H = $_POST['pergunta11H'];
    $pergunta11I = $_POST['pergunta11I'];
    $pergunta11J = $_POST['pergunta11J'];

    //pergunta 12 
    $pergunta12 = $_POST['pergunta12'];
    //pergunta 13
    $pergunta13 = $_POST['pergunta13'];
    //pergunta 14
    $pergunta14 = $_POST['pergunta14'];
    //pergunta 15
    $pergunta15 = $_POST['pergunta15'];
    // perrgunta 16
    $pergunta16 = $_POST['pergunta16'];
    //pergunta 17
    $pergunta17 = $_POST['pergunta17'];
    //PERGUNTA 18
    $pergunta18 = $_POST['pergunta18'];
    //pergunta 19
    $pergunta19 = $_POST['pergunta19'];
    // pergunta 20 campo aberto
    $pergunta20 = $_POST['pergunta20'];




    $result = mysqli_query(mysql: $conexao, query: "INSERT INTO teste(idEndereco,respostaIdade,respostaGenero,respostaRaca,respostaEscolaridade,respostaTrabalho,respostamotivacaoTrabalho,respostapergunta7A,respostapergunta7B,respostapergunta7C,respostapergunta7D,respostapergunta7E,respostapergunta8,respostapergunta9,respostapergunta10,respostapergunta11A,respostapergunta11B,respostapergunta11C,respostapergunta11D,respostapergunta11E,respostapergunta11F,respostapergunta11G,respostapergunta11H,respostapergunta11I,respostapergunta11J,respostapergunta12,respostapergunta13,respostapergunta14,respostapergunta15,respostapergunta16,respostapergunta17,respostapergunta18,respostapergunta19,respostapergunta20) 
    
            VALUES('$ids','$idade','$genero','$raca','$escolaridade','$trabalha','$motivacaoTrabalho','$pergunta7A','$pergunta7B','$pergunta7C','$pergunta7D','$pergunta7E',' $pergunta8', '$pergunta9','$pergunta10','$pergunta11A','$pergunta11B','$pergunta11C','$pergunta11D','$pergunta11E','$pergunta11F','$pergunta11G','$pergunta11H','$pergunta11I','$pergunta11J','$pergunta12','$pergunta13','$pergunta14','$pergunta15','$pergunta16','$pergunta17','$pergunta18','$pergunta19','$pergunta20')");


    if ($result) {
        // Redireciona para uma página HTML de confirmação
        header("Location: final.php");
        exit();
    } else {
        echo "Erro ao enviar o formulário: " . mysqli_error($conexao);
    }


}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selecct enderecos</title>
    <link rel="stylesheet" href="perguntas.css">


</head>

<body>






    <form action="perguntas.php" method="POST">

        <fieldset>
            <legend>Pesquisa do projeto Centro de Memória Terezinha Helena dos Direitos de Criança e Adolescente
            </legend>
            <nav class=" lisPerguntas">

                <!---- 1 pergunta-->



                <div class="pergunta1">
                    <input type="hidden" name="ids" value="<?php echo htmlspecialchars($ids); ?>">

                    <p class="paragrafo">1) Você se considera</p>

                    <input type="radio" name="idade" id="idade" class="idade" value="cianca" required>
                    <label for="crianca">Criança&nbsp;&nbsp;&nbsp;&nbsp;</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adulto" required>
                    <label for="adulto">Adulto&nbsp;&nbsp;&nbsp;&nbsp;</label>

                    <input type="radio" name="idade" id="idade" class="idade" value="adolelcente" required>
                    <label for="adolelcente">Adolelcente</label><br><br>





                </div>


                <!---- 2 pergunta-->
                <div class="pergunta2">
                    <p>2) Qual gênero você se identifica ?</p>

                    <input type="radio" name="genero" id="gereno" class="genero" value="cisgenero feminino" required>
                    <label for="cisgenero feminino">Cisgenero feminino</label>

                    <input type="radio" name="genero" id="gereno" class="genero" value="cisgeneromasculino" required>
                    <label for="cisgenero masculino">Cisgenero masculino</label>

                    <input type="radio" name="genero" id="gereno" class="genero" value="transgênero feminino" required>
                    <label for="transgênero feminino">Transgênero feminino</label>

                    <input type="radio" name="genero" id="gereno" class="genero" value="Transgênero masculino" required>
                    <label for="Transgênero masculino">Transgênero masculino</label>

                    <input type="radio" name="genero" id="gereno" class="genero" value="perfiro nao responder" required>
                    <label for="prefiro não responder">Prefiro não responder</label>

                    <input type="radio" name="genero" id="gereno" class="genero" value="outros" required>
                    <label for="outros">Não binário</label><br><br>

                    <input type="radio" name="genero" id="gereno" class="genero" value="outros" required>
                    <label for="outros">Outros</label><br><br>

                </div>

                <!---- 3 pergunta-->
                <div class="pergunta3">

                    <p>3) Com qual cor raça você se identifica? </p>

                    <input type="radio" name="raca" id="raca" class="raca" value="preta" required>
                    <label for="preta">preta</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="branca" required>
                    <label for="branca">branca</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="parda" required>
                    <label for="parda">parda</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="amarela" required>
                    <label for="amarela">amarela</label><br>

                    <input type="radio" name="raca" id="raca" class="raca" value="indegena" required>
                    <label for="indigina">Indigina</label><br><br>

                </div>

                <!---- 4 pergunta--------------------------------------------------->
                <div class="pergunta4">
                    <p>4) Escolaridade ?</p>

                    <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                        value="ensino fundamental" required>
                    <label for="ensino fundamental">Ensino Fundamental 1 (1º ao 5º ano)</label><br>

                    <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                        value="ensino fundamenta2" required>
                    <label for="ensino fundamenta2">Ensino Fundamental 2 (6º ao 9º)</label><br>


                    <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade" value="Ensino Medio"
                        required>
                    <label for="Ensino fundamenta2">Ensino Medio</label><br>

                    <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                        value="Ensino Superior" required>
                    <label for="Ensino Superior">Ensino Superior</label><br>

                      <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                        value="Ensino Superior" required>
                    <label for="Ensino Superior">Nunca estudei</label><br>

                    <input type="radio" name="escolaridade" id="escolaridade" class="escolaridade"
                        value="Ensino Superior" required>
                    <label for="Ensino Superior">Outros</label><br>



                </div>

                <!---- 5 pergunta--------------------------------------------------->
                <div class="pergunta5">
                    <p>5) Atualmente Você Trabalha?</p>

                    <input type="radio" name="trabalha" id="trabalha" class="trabalha" value="Sim" required>
                    <label for="Sim">Sim <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digite o porque:  <input type="text" name="trabalha" id="trabalho" class="inputUser" <p>(Não obrigatorio)</p> </label>
                    


                    <input type="radio" name="trabalha" id="trabalha" class="trabalha" value="Nao" required>
                    <label for="nao">Não</label><br><br>

             
                </div>

                <!---- 6 pergunta--------------------------------------------------->
                <div class="pergunta6">
                    <p>6) Qual motivação para Criança e adolecente trabalha ?</p>


                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="1-Necessidade de complementar a renda familiar">
                        Necessidade de complementar a renda familiar
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="2-Pressão ou incentivo da família para trabalhar">
                        Pressão ou incentivo da família para trabalhar
                    </label><br>


                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="3-Desejo de ter meu próprio dinheiro para gastos pessoais">
                        Desejo de ter meu próprio dinheiro para gastos pessoais
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="4-Falta de interesse ou dificuldade nos estudos">
                        Falta de interesse ou dificuldade nos estudos
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="5-Escola de má qualidade ou distante de casa">
                        Escola de má qualidade ou distante de casa
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="6-Trabalho visto como forma de aprendizagem">
                        Trabalho visto como forma de aprendizagem
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="7-Falta de oportunidades futuras mesmo com estudo">
                        Falta de oportunidades futuras mesmo com estudo
                    </label><br>

                    <label>
                        <input type="checkbox" name="motivacaoTrabalho[]" value="8-Tradição familiar">
                        Tradição familiar
                    </label><br>

                    <label>

                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="9-Situação de rua ou vulnerabilidade social">
                        Situação de rua ou vulnerabilidade social
                    </label><br>

                    <label>

                        <input type="checkbox" name="motivacaoTrabalho[]"
                            value="10-Exploração por terceiros (trabalho forçado ou ilegal)">
                        Exploração por terceiros (trabalho forçado ou ilegal)
                    </label><br>


                    <label for="nome">Outro motivo (especifique): </label>
                    <input type="text" name="motivacaoTrabalho[]" id="motivacaoTrabalho[]" class="inputUser">



                </div>


                <!---- 7 pergunta verdadeiro ou falso------------------------>


                <div class="pergunta7">

                    <h4>7) Verdadeiro ou falso <p></p>
                        Desde 2013 o ensino obrigatório passou a ser da educação infantil a partir de 4 anos até o fim
                        do
                        ensino médio. Por quais motivos você acha que levou a educação do ensino básico (4 a 17 anos) se
                        tornar obrigatório no Brasil:</h4><br><br>




                    <div class="pergunta7A">

                        <p>7a) Para cumprir a Emenda Constitucional nº 59/2009, que ampliou a obrigatoriedade da
                            educação básica ?
                        </p>

                        <input type="radio" name="pergunta7A" id="pergunta7A" class="pergunta7A" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta7A" id="pergunta7A" class="pergunta7A" value="falso" required>
                        <label for="falso">Falso</label><br>

                    </div>



                    <!---------->
                    <div class="pergunta7B">


                        <p>7b) Para alinhar o Brasil às metas do Plano Nacional de Educação (PNE), que prevê a
                            universalização
                            do
                            acesso ? </p>

                        <input type="radio" name="pergunta7B" id="pergunta7B" class="pergunta7B" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta7B" id="pergunta7B" class="pergunta7B" value="falso" required>
                        <label for="falso">Falso</label><br>


                    </div>



                    <div class="pergunta7C">

                        <p>7c) Porque crianças a partir de 4 anos passaram a ser consideradas adultas pela legislação
                            brasileira ?
                        </p>

                        <input type="radio" name="pergunta7C" id="pergunta7C" class="pergunta7C" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta7C" id="pergunta7C" class="pergunta7C" value="falso" required>
                        <label for="falso">Falso</label><br>





                    </div>

                    <div class="pergunta7D">

                        <p>7d) Para evitar que adolescentes de 16 anos votem, já que estariam ocupados com os estudos ?
                        </p>

                        <input type="radio" name="pergunta7D" id="pergunta7D" class="pergunta7D" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta7D" id="pergunta7D" class="pergunta7D" value="falso" required>
                        <label for="falso">Falso</label><br>





                    </div>


                    <div class="pergunta7E">

                        <p>7e) Porque empresas privadas exigiam mão de obra mais qualificada desde a primeira infância ?
                        </p>

                        <input type="radio" name="pergunta7E" id="pergunta7E" class="pergunta7E" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta7E" id="pergunta7E" class="pergunta7E" value="falso" required>
                        <label for="falso">Falso</label><br>









                    </div>
                </div>

                <!---- 8 pergunta ------------------------>

                <div class="pergunta8">
                    <p>8) Você sabe o que é o ECA ?</p>

                    <input type="radio" name="pergunta8" id="pergunta8" class="pergunta8" value="Sim" required>
                    <label for="verdadeiro">Sim</label><br>

                    <input type="radio" name="pergunta8" id="pergunta8" class="pergunta8" value="Não" required>
                    <label for="verdadeiro">Não</label><br>

                </div>
                <!---- 9 pergunta ------------------------>

                <div class="pergunta9">
                    <p>9) Você sabe quando o ECA foi criado ?</p>

                    <input type="radio" name="pergunta9" id="pergunta9" class="pergunta9" value="Sim" required>
                    <label for="verdadeiro">Sim</label><br>

                    <input type="radio" name="pergunta9" id="pergunta9" class="pergunta9" value="Não" required>
                    <label for="verdadeiro">Não</label><br>

                </div>

                <!---- 10 pergunta ------------------------>


                <div class="pergunta10">
                    <p>10) Por qual motivo você acha que foi construído o estatuto da criança e adolescente ?</p>

                    <label for="nome">Resposta: </label>
                    <input type="text" name="pergunta10" id="pergunta10" class="inputUser" required>

                </div><br>

                <!---- 11 pergunta perguntas de verdeiro ou falso------------------------>

                <div class="pergunta11">

                    <h4>11) Verdadeiro ou falso <p></p>O que o Conselho Tutelar realmente faz ? </h4>


                    <div class="pergunta11A">
                        <p>11a) Atender crianças e adolescentes em situação de risco (violência, abandono, trabalho infantil) ?
                        </p>

                        <input type="radio" name="pergunta11A" id="pergunta11A" class="pergunta11A" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11A" id="pergunta11A" class="pergunta11A" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11B">
                        <p>11b) Aplicar medidas de proteção, como encaminhamento a abrigos ou programas sociais?
                        </p>

                        <input type="radio" name="pergunta11B" id="pergunta11B" class="pergunta11B" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11B" id="pergunta11B" class="pergunta11B" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11C">
                        <p>11c) Fiscalizar o cumprimento dos direitos da criança e do adolescente (educação, saúde,
                            convivência familiar) ?
                        </p>

                        <input type="radio" name="pergunta11C" id="pergunta11C" class="pergunta11C" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11C" id="pergunta11C" class="pergunta11C" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11D">
                        <p>11d) Receber denúncias de violações de direitos via Disque 100 ou diretamente na sede ?
                        </p>

                        <input type="radio" name="pergunta11D" id="pergunta11D" class="pergunta11D" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11D" id="pergunta11D" class="pergunta11D" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11E">
                        <p>11e) Exigir que pais ou responsáveis cumpram obrigações (como matricular filhos na escola) ?
                        </p>

                        <input type="radio" name="pergunta11E" id="pergunta11E" class="pergunta11E" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11E" id="pergunta11E" class="pergunta11E" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>


                    <div class="pergunta11F">
                        <p>11f) Punir adolescentes infratores com prisão ou medidas socioeducativas ?
                        </p>

                        <input type="radio" name="pergunta11F" id="pergunta11F" class="pergunta11F" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11F" id="pergunta11F" class="pergunta11F" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>


                    <div class="pergunta11G">
                        <p>11g) Substituir a família, tirando crianças de casa sem justificativa legal ?
                        </p>

                        <input type="radio" name="pergunta11G" id="pergunta11G" class="pergunta11G" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11G" id="pergunta11G" class="pergunta11G" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11H">
                        <p>11h) Dar multas ou prender pais que não vacinarem os filhos ?
                        </p>

                        <input type="radio" name="pergunta11H" id="pergunta11H" class="pergunta11H" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11H" id="pergunta11H" class="pergunta11H" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>


                    <div class="pergunta11I">
                        <p>11i) Fornecer auxílio financeiro diretamente às famílias ?
                        </p>

                        <input type="radio" name="pergunta11I" id="pergunta11I" class="pergunta11I" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11I" id="pergunta11I" class="pergunta11I" value="falso"
                            required>
                        <label for="falso">Falso</label><br>

                    </div>

                    <div class="pergunta11J">
                        <p>11j) Decidir sozinho sobre adoções internacionais ?
                        </p>

                        <input type="radio" name="pergunta11J" id="pergunta11J" class="pergunta11J" value="Verdadeiro"
                            required>
                        <label for="verdadeiro">verdadeiro</label><br>

                        <input type="radio" name="pergunta11J" id="pergunta11J" class="pergunta11J" value="falso"
                            required>
                        <label for="falso">Falso</label><br><br><br>

                    </div>









                </div>


                <!---- 12 pergunta perguntas de verdeiro ou falso------------------------>

                <div class="pergunta12">


                    <p class="paragrafo">12) Em relação a redução da maioridade penal você é ?</p>

                    <input type="radio" name="pergunta12" id="pergunta12" class="pergunta12" value="contra" required>
                    <label for="crianca">Contra</label>

                    <input type="radio" name="pergunta12" id="pergunta12" class="pergunta12" value="a favor" required>
                    <label for="crianca">A favor</label>

                    <input type="radio" name="pergunta12" id="pergunta12" class="pergunta12" value="nao sei" required>
                    <label for="crianca">Não sei</label><br><br>


                </div>

                <!---- 13 pergunta perguntas de verdeiro ou falso------------------------>
                <div class="pergunta13">

                    <p>13) Você participa de algum grupo ou movimento que discute sobre o Direitos de Criança e Adolescente
                        (DCA) ?
                    </p>

                    <input type="radio" name="pergunta13" id="pergunta13" class="pergunta13" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta13" id="pergunta13" class="pergunta13" value="Não" required>
                    <label for="Não">Não</label><br><br>


                </div>

                <!---- 14 pergunta perguntas de verdeiro ou falso------------------------>
                <div class="pergunta14">

                    <p>14) Na escola você discute sobre o DCA ?
                    </p>

                    <input type="radio" name="pergunta14" id="pergunta14" class="pergunta14" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta14" id="pergunta14" class="pergunta14" value="Não" required>
                    <label for="Sim">Não</label><br>

                    <input type="radio" name="pergunta14" id="pergunta14" class="pergunta14"
                        value="não consigo responder" required>
                    <label for="Sim">Não consigo responder
                    </label><br><br>
                </div>


                <!---- 15 pergunta perguntas de verdeiro ou falso------------------------>

                <div class="pergunta15">

                    <p>15) Você já ouviu falar sobre as Conferências de DCA ?
                    </p>

                    <input type="radio" name="pergunta15" id="pergunta15" class="pergunta15" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta15" id="pergunta15" class="pergunta15" value="nao" required>
                    <label for="nao">Não</label><br><br>
                </div>


                <!---- 16 pergunta perguntas de verdeiro ou falso------------------------>

                <div class="pergunta16">

                    <p>16) Você já participou de alguma Conferência DCA ?

                    </p>

                    <input type="radio" name="pergunta16" id="pergunta16" class="pergunta16" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta16" id="pergunta16" class="pergunta16" value="nao" required>
                    <label for="nao">Não</label><br><br>

                </div>


                <!---- 17 pergunta perguntas de verdeiro ou falso------------------------>
                <div class="pergunta17">

                    <p>17) Você acha que criança e adolescente precisa de mais direitos ?
                    </p>

                    <label for="nome">Resposta: </label>
                    <input type="text" name="pergunta17" id="pergunta17" class="inputUser" required>

                </div><br>

                <!---- 18 pergunta perguntas de verdeiro ou falso------------------------>

                <div class="pergunta18">

                    <p>18) Você sabia que os conselheiros tutelares são eleitos pela população a cada 4 anos ?

                    </p>

                    <input type="radio" name="pergunta18" id="pergunta18" class="pergunta18" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta18" id="pergunta18" class="pergunta18" value="nao" required>
                    <label for="nao">Não</label><br><br>

                </div>



                <!---- 19 pergunta perguntas de verdeiro ou falso------------------------>
                <div class="pergunta19">


                    <p>19) Você conhece algum conselheiro tutelar ?
                    </p>

                    <input type="radio" name="pergunta19" id="pergunta19" class="pergunta19" value="Sim" required>
                    <label for="Sim">Sim</label><br>

                    <input type="radio" name="pergunta19" id="pergunta19" class="pergunta19" value="nao" required>
                    <label for="nao">Não</label><br><br>

                </div>


                <!---- 20 pergunta ------------------------>

                <div class="pergunta20">

                    <p>20) Na sua opinião, qual é um dos direitos de crianças e adolescentes mais importantes ?
                    </p>

                    <label for="nome">Resposta: </label>
                    <input type="text" name="pergunta20" id="pergunta20" class="inputUser" required>

                </div>






















                <div class="perguntaBotao">
                    <input id="enviar" type="submit" name="submit" id="submit">
                    <a href="primeiraTela.php"><input id="voltar" type="button" value="Voltar"></a>


                </div>


            </nav>


        </fieldset>
    </form>

    </div>


</body>

</html>