<?php
session_start();

$categorias = ["Infantil", "Adolescente", "Adulta"];

$nome = $_POST["nome"];
$idade = $_POST["idade"];
echo "<br>"; // Pula uma linha APENAS para o texto não ficar colado no inicio da página.

// INICIO DAS VALIDAÇÕES do formulário
// ORDEM DE VALIDAÇÃO:
// 1º - Verifica se TODOS os campos foram preenchidos
// 2º - Verifica se o valor digitado no campo idade é um número
// 3º - Verifica se o campo NOME tem pelo menos 2 e não mais de 40 caracteres
// 4º - Verifica se a idade do competidor é compatível com a competição

// 1º - Verifica se TODOS os campos foram preenchidos
$_SESSION['ErroValidacaoDados'] = "";
$_SESSION['ValidacoesOK'] = "";


/*
if (empty($nome) || empty($idade)) { //empty() verifica se uma variável está vazia
	$_SESSION['ErroValidacaoDados'] = "AMBOS os campos devem ser preenchidos!";
	header("location: index.php");
	return;
} elseif (!is_numeric($idade)) {
	// 2º - Verifica se o valor digitado no campo idade é um número
	$_SESSION['ErroValidacaoDados'] = "O valor digitado DEVE ser um número.";
	header("location: index.php");
	return;
} elseif (strlen($nome) < 2 || strlen($nome) > 40) {			//strlen() CONTA quantos caracteres a variável tem
	// 3º - Verifica se o campo NOME tem pelo menos 2 e não mais de 40 caracteres
	$_SESSION['ErroValidacaoDados'] = "O Nome deve ter mais de 2 e menos de 40 caracteres.";
	header("location: index.php");
	return;
} elseif ($idade > 100) {
	// 4º - Verifica se a idade do competidor é compatível com a competição
	$_SESSION['ErroValidacaoDados'] = "É vedada a participação de competidores ACIMA dos 100 anos!<br>QUER MATAR O(A) VELHINHO(A)!";
	header("location: index.php");
	return;
} elseif ($idade < 6) {
	//A principio não seria necessário isso, pois o input do HTML é do tipo NUMBER. Mas como usuário tem parte com o cão....
	$_SESSION['ErroValidacaoDados'] = "É vedada a participação de competidores ABAIXO dos 6 anos!";
	header("location: index.php");
	return;
}
*/

if ($idade >= 6 && $idade < 12) {
	$_SESSION['ValidacoesOK'] = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[0] . ".";
	echo $_SESSION['ValidacoesOK'];
	header("location: index.php");
	return;
} elseif ($idade >= 12 && $idade < 18) {
	$_SESSION['ValidacoesOK'] = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[1] . ".";
	echo $_SESSION['ValidacoesOK'];
	header("location: index.php");
	return;
} elseif ($idade >= 18) {
	$_SESSION['ValidacoesOK'] = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[2] . ".";
	echo $_SESSION['ValidacoesOK'];
	header("location: index.php");
	return;
}

session_destroy();
/*
<!doctype html>
<html lang="en">

<head>
	<title>PHP - Formulários de Envio</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<h4 class="text-danger text-center">
		<?php
		echo $_SESSION['ValidacoesOK'];
		?>
	</h4>

</body>

</html>



*/
