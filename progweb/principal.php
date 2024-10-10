<?php
    session_start();
    if(!isset($_SESSION['nome'])){
        header("location:index.php");
    }
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
?>

<html>
    <head>
        <title>Tela pós-login</title>
    </head>
    <body>
        Seja Bem-Vindo!
    </body>
</html>