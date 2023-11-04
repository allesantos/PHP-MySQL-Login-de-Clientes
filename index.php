<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    }
    else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }
    else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } 
        
        else {
            echo '<p style="color:#fff;position: absolute;top:650px;left: 810px;">Falha ao logar! E-mail ou senha incorretos!</p>';          
        }


    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div style="width:100px; margin:auto; padding-top:50px">
        <img src = "imagens/logo.png" width="100">
    </div>
    
    <div id="corpo-form">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" placeholder="Usuário" name="email">
            <input type="password" placeholder="Senha" name="senha">
            <input type="submit" value="ACESSAR">
        </form>
    </div>

</body>

</html>