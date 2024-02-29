<?php 
 include("conexao.php");

$id = $_POST['id'];
$nomecli = $_POST['nomecli'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];




$sql = "UPDATE cliente SET nomecli = '$nomecli', data_nasc = '$data_nasc', 
cpf = '$cpf', rg = '$rg', sexo = '$sexo', telefone = '$telefone' WHERE id_cli=  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: listarcli.php");
} else {
    echo "erro na atualização dos clientes";
}

?>