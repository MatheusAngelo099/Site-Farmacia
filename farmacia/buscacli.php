<?php

include("conexao.php");

$sql = "SELECT * FROM cliente";
$result = mysqli_query($con,$sql);

$busca = $_POST['busca'];

$sql1 = "SELECT * FROM cliente WHERE nomecli LIKE '%$busca%' OR cpf LIKE '%$busca%'";
$result2 = mysqli_query($con, $sql1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Tabela cliente</title>
</head>
<body>
<table border="1">
    <thead> 
        <tr> 
            <th> ID do Cliente </th>
            <th> Nome do Cliente</th>
            <th>Data de Nascimento</th>
            <th> CPF </th>
            <th> RG </th>
            <th> Sexo</th>
            <th> Telefone</th>
          
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($result2)) {
                echo "
                <tr>
                    <td> " . $linha['id_cli'] . " </td>
                    <td> " . $linha['nomecli'] . " </td>
                    <td> " . $linha['data_nasc'] . " </td>
                    <td> " . $linha['cpf'] . " </td>
                    <td> " . $linha['rg'] . " </td>
                    <td> " . $linha['sexo'] . " </td>
                    <td> " . $linha['telefone'] . " </td>
                
    

                </tr> ";
}
        ?>
</tbody> 
</table>
</body>
</html>