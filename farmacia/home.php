<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
</head>
<body>
   <center><h1>Farmácia Lins</h1>
<p><?php echo "Usuário logado: " . $_SESSION["user"];?></p>
   <p> 
      <button><a href="formremedio.html">Cadastrar Remédio</a></button>
   </p>

   <p> 
   <button><a href="formcli.html">Cadastrar Cliente</a></button>
    </p>
    
    <div class="menu">
        <div><a href="logout.php">Sair</a></div>
    </div>
    

</center>
</body>
</html>