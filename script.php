<?php
$categorias = ["Infantil", "Adolescente", "Adulta"];

$nome = $_POST["nome"];
$idade = $_POST["idade"];

echo "<br>";

// Verifica se o nome e a idade foram preenchidos
if (empty($nome) || empty($idade)) { //empty() verifica se uma variável está vazia
	echo "TODOS OS CAMPOS DEVEM SER PREENCHIDOS";
	return;
}

// Verifica se o nome tem um MINIMO e um MÁXIMO de caracteres
if (strlen($nome) < 2) {			//strlen() CONTA quantos caracteres a variável tem
	echo "O Nome deve conter pelo menos 2 caracteres";
	return;
} elseif (strlen($nome) > 40) {
	echo "O Nome não pode conter mais de 40 caracteres";
	return;
}

// Verifica se a pessoa não é VELHA demais
if ($idade > 100) {
	echo "É vedada a participação de competidores ACIMA dos 100 anos!<br>";
	echo "VAI MATAR O(A) VELHINHO(A)?!<br>";
	return;
}

if ($idade >= 6 && $idade < 12) {
	echo "O competidor " . $nome . " tem " . $idade . " anos  é da categoria " . $categorias[0];
} elseif ($idade >= 12 && $idade < 18) {
	echo "O competidor " . $nome . " tem " . $idade . " anos  é da categoria " . $categorias[1];
} elseif ($idade >= 18) {
	echo "O competidor " . $nome . " tem " . $idade . " anos  é da categoria " . $categorias[2];
} else {
	echo "O competidor " . $nome . " não tem idade para competir";
}

echo "<br>";
