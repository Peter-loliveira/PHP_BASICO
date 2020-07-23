<?php
$categorias = ["Infantil", "Adolescente", "Adulta"];

$nome = $_POST["nome"];
$idade = $_POST["idade"];

// var_dump($nome);
// var_dump($idade);
echo "<br><br>";

if ($idade >= 6 && $idade < 12) {
    echo "O competidor " . $nome . " tem " . $idade . " anos,  é da categoria " . $categorias[0];
} elseif ($idade >= 12 && $idade < 18) {
    echo "O competidor " . $nome . " tem " . $idade . " anos,  é da categoria " . $categorias[1];
} elseif ($idade >= 18) {
    echo "O competidor " . $nome . " tem " . $idade . " anos,  é da categoria " . $categorias[2];
} else {
    echo "O competidor " . $nome . " não tem idade para competir";
}
echo "<br>";