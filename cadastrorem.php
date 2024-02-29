<?php

include("conexao.php");

$nomeremed = $_POST['nomeremed'];
$data_validade = $_POST['data_validade'];
$fabricante = $_POST['fabricante'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$modo_uso = $_POST['modo_uso'];

if(isset($nomeremed) && isset($data_validade) && isset($fabricante) && isset($quantidade) && isset($preco)&& isset($modo_uso)){

$sql = "INSERT INTO remedio(nomeremed,data_validade,fabricante,quantidade,preco,modo_uso)values('$nomeremed','$data_validade','$fabricante','$quantidade','$preco','$modo_uso')";

$result = mysqli_query($con,$sql);

if ($result) {
    header("location: listarremed.php");
}else{
    header("location: formremedio.html");
}

}else{
    echo "Campos não preenchidos.";

}


?>