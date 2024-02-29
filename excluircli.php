<?php

include ("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM cliente WHERE id_cli =  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: listarcli.php");
} else {
    echo "<br><br>" . "erro ao excluir";
}

?>