<?php

include("conexao.php"); 

$id = $_GET['id'];

$sql = "SELECT * FROM cliente WHERE id_cli = " . $id;
$result = mysqli_query($con,$sql);

if($linha = mysqli_fetch_array($result)) {

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Tabela cliente</title>
    </head>
    <body>
        <form method="post" action="atualizarcli.php">
        <input type="hidden" value = "<?php echo $linha['id_cli']?>" name="id">
      <p>    
        <label> Nome do Cliente: </label>  
        <input type="text" value= "<?php echo $linha['nomecli']?>" name ="nomecli">
        </p><br>

        <label> Data de Nascimento: </label>  
        <input type="date" value= "<?php echo $linha['data_nasc']?>" name ="data_nasc">
        </p><br>

        <label> CPF: </label>  
        <input type="number" value= "<?php echo $linha['cpf']?>" name ="cpf">
        </p><br>

        <label> RG: </label>  
        <input type="number" value= "<?php echo $linha['rg']?>" name ="rg">
        </p><br>

        <label> Sexo: </label>  
        <input type="text" value= "<?php echo $linha['sexo']?>" name ="sexo">
        </p><br>

        <label> Telefone: </label>  
        <input type="number" value= "<?php echo $linha['telefone']?>" name ="telefone">
        </p><br>

        <p>
          <input type="submit" value="Salvar Alterações">
          </p>
</form>
    <?php } ?>
    </body>
    </html>


