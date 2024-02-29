<?php

include("conexao.php");

$user = $_POST['user'];
$senha = $_POST['senha'];

$senha_cripto = md5($senha);

$sql = "SELECT * FROM funcionario where user = '$user' and senha = '$senha_cripto'";

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0 ) {
    $L = mysqli_fetch_assoc($result);   

    echo $L;

    if(isset($user) && isset($senha)) {
    if ($user == $L["user"] && $senha_cripto == $L["senha"]) {
    
       
                session_start();
                $_SESSION['user'] = $user; 
               header("location:home.php");
            }
           
       
       
    }
    }else{
        echo "Usuário inexistente";
    }



?>