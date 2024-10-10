<?php

    if(isset($_GET['erro'])){
        echo "<h3> Voce nao pode acessar quasquer tela sem estar logado </h3>";
    }
    $email = "teste@teste";
    $senha = "12345";

    if(!empty($_POST)) {
        if(isset($_POST["email"]) && isset($_POST["senha"])){
            $emailFront = $_POST["email"];
            $senhaFront = $_POST["senha"];
            $nomeFront = $_POST["nome"];

            if($email == $emailFront && $senha == $senhaFront){
                session_start();
                $_SESSION["email"] = $emailFront;
                $_SESSION["senha"] = $senhaFront;
                $_SESSION["nome"] = $nomeFront;
                header("Location:principal.php");

            }else{
                echo "<h1> Email ou Senha errados! </h1>";
            }
        }
    }

  function debug($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    };
?>
<html>
    <head>

    </head>
    <body>
        <form method="post">
            Nome: <input type="text" name="nome"><br>
            Email: <input type="text" name="email"><br>
            Senha: <input type="password" name="senha"><br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>
