<?php
include('con_bd.php');
$pesquisa = mysqli_query($con,"SELECT*FROM estoque ORDER BY nome ASC");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/estoque.css"/>
</head>
<body>

<div id="inicio">
<img src="img/lanchou5.png">

</div>



<div id="fim">
<div id="fim2">
    
    <form method="post" action="estoque2.php">
        <label>ID:</label><input type="text" name="id">
        <label>Nome:</label><input type="text" name="nome">
        <input type="submit" name="b" Value="Procurar">
    </form>
    
     <div id="caixa">
    <h1 class="a">ID</h1>
    <h1 class="b">Nome</h1>
    <h1 class="c">Valor</h1>
    <h1 class="d">Quantidade</h1>
    <h1 class="e">Entrada</h1>
   
    
    

    <?php
    while($linha = mysqli_fetch_array ($pesquisa)){
        $id = $linha['id'];
        $nome = $linha['nome'];
        $valor = $linha['valor'];
        $quantidade = $linha['quantidade'];
        $entrada = $linha['entrada']; 
    ?>
    
    <div id="php">
    <?php echo "$id" ?>
    </div>
    
    <div id="php2">
    <?php echo "$nome" ?>
    </div>
   
    <div id="php3">
    <?php echo "$valor" ?>
    </div>
    
    <div id="php4">
    <?php echo "$quantidade" ?>
    </div>
    
    <div id="php5">
    <?php echo "$entrada" ?>
    </div>
    
    <?php } ?>
         
          </div>

</div>
</div>

</body>

</html>