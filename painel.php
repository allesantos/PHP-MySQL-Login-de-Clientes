<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        .painel-h1 {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

        .painel-p {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

    </style>
    
</head>
<body>
    <div style="width:100px; margin:auto; padding-top:50px">
        <img src = "imagens/logo.png" width="100">
    </div>

    <h1 class="painel-h1">Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.</h1>

    <p class="painel-p">
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>