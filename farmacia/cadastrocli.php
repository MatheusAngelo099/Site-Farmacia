<?php

include("conexao.php");

$nomecli = $_POST['nomecli'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];

if(isset($nomecli) && isset($data_nasc) && isset($cpf) && isset($rg) && isset($sexo)&& isset($telefone)){

$sql = "INSERT INTO cliente(nomecli,data_nasc,cpf,rg,sexo,telefone)values('$nomecli','$data_nasc','$cpf','$rg','$sexo','$telefone')";

$result = mysqli_query($con,$sql);

if ($result) {
    header("location: listarcli.php");
}else{
    header("location: formcli.html");
}

}else{
    echo "Campos não preenchidos.";

}


?>