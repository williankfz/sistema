<?php 

include('con_bd.php');

$id2 = $_GET['n1'];
$op = $_GET['n2'];


$pesquisa = mysqli_query($con,"SELECT*FROM estoque WHERE id='$id2'");

$linha = mysqli_fetch_array($pesquisa);
	$id = $linha['id'];
	$nome = $linha['nome'];
	$valor = $linha['valor'];
	$quantidade = $linha['quantidade'];
	$entrada = $linha['entrada'];
	
	
	
	mysqli_close($con);

?>

<html>

<head>
    <meta charset="utf-8">

<title>Alterar</title>
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css"/>
	<link rel="stylesheet" type="text/css" href="css/alt.css"/>

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
<a href="gerente.php"><img class="img" src="img/sair.png"></a>
<a href="gerente.php" class="voltar">Voltar</a>

</div>

</div>

<div id="data"></div>
<div id="hora"></div>

<div id="fim">
<div id="fim2">


<form name="form1" action="excluir3.php?n1=<?php echo $id ?>&n2=1" method="post">
 <h1>Alterar produtos</h1><br>


<div class="formatacao">Nome do produto:</div>   
<input name="nome" class="inp" type="text" size="40" Value="<?php echo "$nome"?>">

<br><br>

<div class="formatacao">Valor do produto:</div>
<input name="valor" class="inp2" type="text" size="40" Value="<?php echo "$valor"?>">

<br><br>

<div class="formatacao">Quantidade:</div>    
<input name="quantidade" class="inp3" type="text" size="40" Value="<?php echo "$quantidade"?>">

<br><br>

<div class="formatacao">Dia da entrega:</div>
<input name="entrada" class="inp4" type="date" size="40" Value="<?php echo "$entrada"?>"><br>



<input name="submit" value="Salvar" class="botao2" type="submit"></a>


   
    
</form>  
	
</div>

</div>	
</body>
</html>