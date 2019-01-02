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
	
<script type="text/javascript">
             function time()
             {
             today=new Date();
             h=today.getHours();
             m=today.getMinutes();
             s=today.getSeconds();
			 d=today.getDate();
             mes=today.getMonth();
             a=today.getFullYear();
             document.getElementById('hora').innerHTML=h+":"+m+":"+s;
			 setTimeout('time()',500);
			 document.getElementById('data').innerHTML=d+"/"+(mes+1)+"/"+a;

             }
			 
			 </script>
</head>
<body onload="time()">

<div id="inicio">
<img src="img/lanchou5.png">

<div id="blo">
<a href="ajuda2.php"><img class="img" src="img/int.png"></a>
<a href="ajuda2.php" class="ajuda">Ajuda</a>

</div>

<div id="blo2">
<a href="caixaf.php"><img class="img" src="img/sair.png"></a>
<a href="caixaf.php" class="voltar">Voltar</a>

</div>
</div>

<div id="data"></div>
<div id="hora"></div>

<div id="fim">
<div id="fim2">
    
    <form method="post" action="estoque2.php">
        <label>ID:</label><input type="text" name="id" class="inputfor">
        <label>Nome:</label><input type="text" name="nome"  class="inputfor">
        <input type="submit" name="b" Value="Procurar" class="botao">
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