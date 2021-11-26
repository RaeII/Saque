<?php require_once "php.php" ?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/exercicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
    <title>Saque</title>
</head>

<body>
    <!-- Tela do usuario -->
    <form id='form_saque' action="#" method="POST">

        <input type="numeric" id="saque" name="saque" placeholder="<?= $_POST['saque'] ? $_POST['saque'] : "Informe o valor do saque" ?>">
        <button id='botao'>Sacar</button>

        <div id='resultado_saque'><?= $_POST['saque'] ? saque($_POST['saque']) : "" ?>
        </div>
    </form>

</body>

</html>