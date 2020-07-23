<?php
$QuebraDeLinha = "<br><br>";

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";


// var_dump($idade);
// echo $QuebraDeLinha;
// var_dump($nome);
// echo $QuebraDeLinha;
// echo $QuebraDeLinha;


for ($i=0; $i <= 2; $i++) { 
    echo $categorias[$i];
    echo $QuebraDeLinha;
}

echo $QuebraDeLinha;
$idade = 16;
$nome = "Peter";
echo $QuebraDeLinha;
echo "O nadador ".$nome." tem ".$idade. " anos";
echo $QuebraDeLinha;

echo "LAÇO FOR";
for ($i=0; $i < count($categorias) ; $i++) { 
    echo "O nadador " .$nome. " pertence à categoria " .$categorias[$i];
    echo $QuebraDeLinha;
}
echo $QuebraDeLinha;

echo "LAÇO foreach";
echo $QuebraDeLinha;
foreach ($categorias as $key) {
    echo "O nadador " .$nome. " pertence à categoria " .$key;
    echo $QuebraDeLinha;
    
}

// if ($idade >= 6 && $idade <=12) {
//     echo $categorias[0];
// } elseif ($idade > 12 && $idade < 18) {
//     echo $categorias[1];
// } else {
//     echo $categorias[2];
// }