<?php
include('con_bd.php');
$da = $_POST['data'];
$pesquisa = mysqli_query($con,"SELECT*FROM recebe2 WHERE data LIKE '$da' ");

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/fechamento.css"/>
<title>Fechamento de Caixa</title>

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
<a href="ajuda.php"><img class="img" src="img/int.png"></a>
<a href="ajuda.php" class="ajuda">Ajuda</a>

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
<br>

<form method="post">

<label>Digite uma data:</label><input type="date" name="data" class="inputfor"> 
<input type="submit" Value="Pesquisar" class="botao">
</form><br>

<table align="center" class="tabela" border="1">
<tr>
<td>Produto</td>
<td >Valor Unitario</td>
<td>Quantidade</td>
<td >Subtotal</td>

</tr>
<?php 
$pega = 0;
while($linha = mysqli_fetch_array ($pesquisa)){
	$produto2 = $linha['produto2'];
	$val = $linha['val'];
	$quantidade = $linha['quantidade'];
	$total = $linha['total'];
	$data = $linha['data'];
	
	$pega = $pega + $total;

?>
<tr>
<td class="td1"> <?php echo "$produto2" ?> </td>
<td class="td1"> <?php echo "$val" ?> </td>
<td class="td1"> <?php echo "$quantidade" ?> </td>
<td class="td1"> <?php echo "$total" ?> </td>
<?php } ?>

<td class="td2"> <?php echo "<b>Total:</b> $pega" ?> </td>
</tr>
</table>
<form>
<img src="img/print.png" width="50" height="50" Onclick="javascript:window.print();">
</form>
</div>

</div>
</body>
</html>