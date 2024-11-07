<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>Registro</title>
    <style>
        body {
            background-color: #303030;
        }

        #myTable {
            margin-top: 50px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 25px;
        }


        #cabecalho-container {
            display: flex;
            justify-content: space-between;
        }

        #tableContainer {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }



        /* Botões */
        #btnedit {
            background-color: #FFF;
            color: #FFBF35;
            border: 2px solid #FFBF35;
        }

        #btnedit2 {
            background-color: #FFF;
            color: #FE3942;
            border: 2px solid #FE3942;
        }

        /* Botão Voltar */
        #btnBack {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #btnBack:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <?php
    require_once "config.php";
    $lista = [];
    $sql = $pdo->query("SELECT * FROM crud_dao.users");
    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    ?>
    <div class="container" id="myTable">
        <div id="cabecalho-container">
            <h3>Usuários cadastrados</h3>
            <a href="add.php" class="btn" id="btnBack">Novo <i class="fa-regular fa-square-plus"></i></a>
        </div>
        <div id="tableContainer">
            <table class="table table-striped" style=" margin-top: 40px; ">
                <thead>
                    <tr>
                        <th scope="col">ID <i class="fa-solid fa-users"></i></th>
                        <th scope="col">Name user</th>
                        <th scope="col">email</th>
                        <th scope="col">Data de registro</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <?php
                if (count($lista) > 0) {
                    foreach ($lista as $user): ?>
                        <tr>
                            <td><?php echo $user['idusers']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['register']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $user['idusers']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="excluir.php?id=<?php echo $user['idusers']; ?>" onclick="return confirm('Tem certeza que desja excluir?');"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>
                <?php endforeach;
                } else {
                    echo "<h3>Nenhum usuário cadastrado...</h3>";
                }
                ?>


            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/635eae0cd0.js" crossorigin="anonymous"></script>
</body>

</html>