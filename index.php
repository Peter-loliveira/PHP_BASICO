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

<body class="">
    <div class="container bg-info rounded mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-8">

                <div>
                    <h1 class="mb-3 text-center text-uppercase">Cadastro de competidores</h1>
                </div>

                <form class="text-center form m-2" action="script.php" method="post">
                    <div>
                        <Label class="font-weight-bold">Seu Nome:</Label>
                        <input type="text" name="nome">
                    </div>
                    <div>
                        <label class="font-weight-bold" for="">Sua Idade:</label>
                        <input type="number" name="idade" id="">
                    </div>
                    <div>
                        <input class="btn btn-warning mt-3 font-weight-bold" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>