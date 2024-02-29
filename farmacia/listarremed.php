<?php

include("conexao.php");

$sql = "SELECT * FROM remedio";
$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Remedios</title>
</head>
<center><body>
     <h1> Remedios cadastrados </h1>
     <hr>
     <a href = "formremedio.html">Cadastrar Remedios</a>
<br><br>
     <table border="1">
         <thead>
             <tr>
                 <th>ID </th>
                 <th>Nome</th>
                 <th>Data de Validade</th>
                 <th>Fabricante</th>
                 <th>Quantidade</th>
                 <th>Preço</th>
                 <th>Modo de Uso</th>
                 <th>Ações </th>    
            </tr>
</thead>
 
<tbody>
        <?php

            while($linha = mysqli_fetch_array($result)){
                $id= $linha['id_remedio'];

                echo "<tr>
                <td> " . $linha['id_remedio'] ." </td>
                <td> " . $linha["nomeremed"] . " </td>
                <td> " . $linha["data_validade"] . " </td>
                <td> " . $linha["fabricante"] . " </td>
                <td> " . $linha["quantidade"] . " </td>
                <td> " . $linha["preco"] . " </td>
                <td> " . $linha["modo_uso"] . " </td>
                

                <td>  
                <a href = " . " editarremed.php?id=$id " . "> Editar </a>
                <a href = " . " excluirremed.php?id=$id " . "> Excluir </a>
                ";
            }

        ?>
        </tbody>
        <br><br>
        <form method="post" action="buscarremed.php">
            <input name="busca" type="text">
            <input type="submit" value="Pesquisar">
</body>
</center>
</html>
