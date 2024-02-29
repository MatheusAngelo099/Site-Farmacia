<?php

include("conexao.php"); 

$id = $_GET['id'];

$sql = "SELECT * FROM remedio WHERE id_remedio = " . $id;
$result = mysqli_query($con,$sql);

if($linha = mysqli_fetch_array($result)) {

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Tabela Remedio</title>
    </head>
    <body>
        <form method="post" action="atualizarremed.php">
        <input type="hidden" value = "<?php echo $linha['id_remedio']?>" name="id">
      <p>    
        <label> Nome do Remedio: </label>  
        <input type="text" value= "<?php echo $linha['nomeremed']?>" name ="nomeremed">
        </p><br>

        <label> Data de Validade: </label>  
        <input type="date" value= "<?php echo $linha['data_validade']?>" name ="data_validade">
        </p><br>

        <label> Fabricante: </label>  
        <input type="text" value= "<?php echo $linha['fabricante']?>" name ="fabricante">
        </p><br>

        <label> Quantidade: </label>  
        <input type="number" value= "<?php echo $linha['quantidade']?>" name ="quantidade">
        </p><br>

        <label> Preço: </label>  
        <input type="number" value= "<?php echo $linha['preco']?>" name ="preco">
        </p><br>

        <label> Modo de Uso: </label>  
        <input type="text" value= "<?php echo $linha['modo_uso']?>" name ="modo_uso">
        </p><br>

        <p>
          <input type="submit" value="Salvar Alterações">
          </p>
</form>
    <?php } ?>
    </body>
    </html>


