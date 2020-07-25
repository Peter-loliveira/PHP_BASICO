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
if (empty($nome) || empty($idade)) { //empty() verifica se uma variável está vazia
	$_SESSION['ErroValidacaoDados'] = "AMBOS os campos devem ser preenchidos!";
	header("location: index.php");
	return;
} else {
	// 2º - Verifica se o valor digitado no campo idade é um número
	if (!is_numeric($idade)) {
		$_SESSION['ErroValidacaoDados'] = "O valor digitado DEVE ser um número.";
		header("location: index.php");
		return;
	} else {
		// 3º - Verifica se o campo NOME tem pelo menos 2 e não mais de 40 caracteres
		if (strlen($nome) < 2) {			//strlen() CONTA quantos caracteres a variável tem
			$_SESSION['ErroValidacaoDados'] = "O Nome deve conter pelo menos 2 caracteres.";
			header("location: index.php");
			return;
		} elseif (strlen($nome) > 40) {
			$_SESSION['ErroValidacaoDados'] = "O Nome não pode conter mais de 40 caracteres.";
			header("location: index.php");
			return;
		} else {
			// 4º - Verifica se a idade do competidor é compatível com a competição
			if ($idade > 100) {
				$_SESSION['ErroValidacaoDados'] = "É vedada a participação de competidores ACIMA dos 100 anos!<br>QUER MATAR O(A) VELHINHO(A)!";
				header("location: index.php");
				return;
			} elseif ($idade < 6) {
				//A principio não seria necessário isso, pois o input do HTML é do tipo NUMBER. Mas como usuário tem parte com o cão....
				$_SESSION['ErroValidacaoDados'] = "É vedada a participação de competidores ABAIXO dos 6 anos!";
				header("location: index.php");
				return;
			} else {
				if ($idade >= 6 && $idade < 12) {
					$SUCESSO = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[0] . ".";
				} elseif ($idade >= 12 && $idade < 18) {
					$SUCESSO = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[1] . ".";
				} elseif ($idade >= 18) {
					$SUCESSO = "O competidor " . $nome . " tem " . $idade . " anos e é da categoria " . $categorias[2] . ".";
				}
				session_destroy();
			}
		}
	}
}
?>
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
	  echo $SUCESSO;
	?>
	</h4>

</body>
</html>