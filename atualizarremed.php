<?php 
 include("conexao.php");

$id = $_POST['id'];
$nomeremed = $_POST['nomeremed'];
$data_validade = $_POST['data_validade'];
$fabricante = $_POST['fabricante'];
$quantidade = $_POST['preco'];
$preco    = $_POST['preco'];
$modo_uso = $_POST['modo_uso'];




$sql = "UPDATE remedio SET nomeremed = '$nomeremed', data_validade = '$data_validade', 
fabricante = '$fabricante', quantidade = '$quantidade', preco = '$preco', modo_uso = '$modo_uso' WHERE id_remedio=  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: listarremed.php");
} else {
    echo "erro na atualização dos remedios";
}

?>