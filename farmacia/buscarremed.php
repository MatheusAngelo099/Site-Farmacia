<?php

include("conexao.php");

$sql = "SELECT * FROM remedio";
$result = mysqli_query($con,$sql);

$busca = $_POST['busca'];

$sql1 = "SELECT * FROM remedio WHERE nomeremed LIKE '%$busca%' OR fabricante LIKE '%$busca%'";
$result2 = mysqli_query($con, $sql1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Tabela Remedio</title>
</head>
<body>
<table border="1">
    <thead> 
        <tr> 
            <th> ID do Remedio </th>
            <th> Nome do Remedio</th>
            <th>Data de Validade</th>
            <th> Fabricante </th>
            <th> Quantidade </th>
            <th> Preçp </th>
            <th> Modo de Uso</th>
          
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($result2)) {
                echo "
                <tr>
                    <td> " . $linha['id_remedio'] . " </td>
                    <td> " . $linha['nomeremed'] . " </td>
                    <td> " . $linha['data_validade'] . " </td>
                    <td> " . $linha['fabricante'] . " </td>
                    <td> " . $linha['quantidade'] . " </td>
                    <td> " . $linha['preco'] . " </td>
                    <td> " . $linha['modo_uso'] . " </td>
                
    

                </tr> ";
}
        ?>
</tbody> 
</table>
</body>
</html>