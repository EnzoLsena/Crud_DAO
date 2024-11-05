<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adcionar usuario</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #303030;
        }

        #tamanhoContainer {
            width: 500px;
            padding: 40px;
            background-color: #EBEEF7;
            border: 1px solid #dddddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        #botao {
            background-color: #5AAD34;
            color: #fff;

        }
    </style>

</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <div class="container" id="tamanhoContainer" style=" margin-top: 40px; ">
        <h4>Cadastrar Usuário</h4>
        <form action="insert.php" method="POST" style="margin-top: 20px;">

            <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Digite o nome do usuario">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o email">
                <div id="emailHelp" class="form-text">A SoftPrime nunca vai compartilhar o seu e-mail.</div>
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn  btn-sm" id="botao">Cadastrar</button>
            </div>
        </form>

    </div>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>