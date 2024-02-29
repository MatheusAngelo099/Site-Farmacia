<?php

include ("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM remedio WHERE id_remedio =  $id"; 

$result = mysqli_query($con, $sql); 

if($result) {
    header ("Location: listarremed.php");
} else {
    echo "<br><br>" . "erro ao excluir";
}

?>