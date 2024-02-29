<?php

include ("conexao.php");

$nome = $_POST['nome'];
$user = $_POST['user'];
$senha = $_POST['senha'];

if (isset($nome) && isset($user) && isset($senha)){

    $senha_cripto = md5($senha);

    echo "<br><br>" . $senha_cripto;

$sql =  "INSERT INTO funcionario(nome,user,senha)values('$nome','$user','$senha_cripto')";

$result = mysqli_query($con,$sql);

if ($result) {
    header("location: formlogin.php");
}else{
    header("location: formcadastro.html");
}

}else{

    echo "Você precisa preencher todos os campos.";

}
?>






