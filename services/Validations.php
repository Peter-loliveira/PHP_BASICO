<?php

//empty() verifica se uma variável está vazia
function ValidaDadosVazios(string $nome, string $idade) : bool
{
    if (empty($nome) || (empty($idade))) {
        return false;
    }
}

// 3º - Verifica se o campo NOME tem pelo menos 2 e não mais de 40 caracteres
function validadeNome(string $nome) : bool
{
    if (strlen($nome) < 2 || strlen($nome) > 40) {//strlen() CONTA quantos caracteres a variável tem
        return false;
    }
}

// Verifica se a variável idade é do tipo numeric
function ValidaIdade(string $idade) : bool
{
    if (!is_numeric($idade)) {
        return false;
    }
}

// if ($idade > 100) {
//     // 4º - Verifica se a idade do competidor é compatível com a competição
//     return false;
// } elseif ($idade < 6) {
//     //A principio não seria necessário isso, pois o input do HTML é do tipo NUMBER. Mas como usuário tem parte com o cão....
//     $_SESSION['ErroValidacaoDados'] = "É vedada a participação de competidores ABAIXO dos 6 anos!";
//     header("location: index.php");
//     return;
// }
