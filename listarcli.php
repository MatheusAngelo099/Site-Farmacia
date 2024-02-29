<?php

include("conexao.php");

$sql = "SELECT * FROM cliente";
$result = mysqli_query($con,$sql);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>

</head>
<body>
   
     <h1> Clientes cadastrados </h1>
     <a href = "formcli.html">Cadastrar clientes</a>
<br><br>
     <table border="1">
         <thead>
             <tr>
                 <th>ID </th>
                 <th>Nome</th>
                 <th>Data de Nascimento</th>
                 <th>CPF</th>
                 <th>RG</th>
                 <th>Sexo</th>
                 <th>Telefone</th>
                 <th>Ações </th>    
</tr>
</thead>
    <br><br>
        <form method="post" action="buscacli.php">
            <input name="busca" type="text">
            <input type="submit" value="pesquisar">
</tbody>
        <?php

            while($linha = mysqli_fetch_array($result)){
                $id= $linha['id_cli'];

                echo "<tr>
                <td> " . $linha['id_cli'] ." </td>
                <td> " . $linha["nomecli"] . " </td>
                <td> " . $linha["data_nasc"] . " </td>
                <td> " . $linha["cpf"] . " </td>
                <td> " . $linha["rg"] . " </td>
                <td> " . $linha["sexo"] . " </td>
                <td> " . $linha["telefone"] . " </td>
                

                <td>  
                <a href = " . " editarcli.php?id=$id " . "> Editar </a>
                <a href = " . " excluircli.php?id=$id " . "> Excluir </a>
                ";
            }

        ?>


</body>
</html>
