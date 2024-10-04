<?php
/*--*/
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];

echo($nome."<br>".$email."<br>".$senha)

if($email = "gabriel@parallelo.com" && $senha="123456"){
    echo("Logado")
}else{
    echo("Login ou senha incorretos")
}
?>