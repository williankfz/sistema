<?php 
session_start();
include('con_bd.php');

$pesquisa = mysqli_query($con,"SELECT*FROM recebe");




?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/iframe.css"/>

</head>
<body>

<table>
<tr>

<td>
<div class="formatacao">Produto</div>
</td>
<td>
<div class="formatacao">Valor</div>
</td>
<td>
<div class="formatacao">Quantidade</div>
</td>
<td>
<div class="formatacao">Subtotal</div>
</td>
<td>
<div class="formatacao">Excluir</div>
</td>

</tr>
<?php 
$pega = 0;
while($linha = mysqli_fetch_array($pesquisa)){
	
	$id = $linha['id'];
	$produto2 = $linha['produto2'];
	$val = $linha['val'];
	$quantidade = $linha['quantidade'];
	$total = $linha['total'];
$_SESSION['pega'] = $pega = $pega + $total;
?>


<tr>

<td>
<div class="formatacao2">
<?php echo "$produto2" ?> 
</div>
</td>

<td>
<div class="formatacao2">
<?php echo "$val" ?> 
</div>
</td>

<td>
<div class="formatacao2">
<?php echo "$quantidade" ?> 
</div>
</td>

<td>
<div class="formatacao2">
<?php echo "$total" ?> 
</div>
</td>
<td>
<div class="formatacao2">
<a href="excluir.php? n1=<?php echo $id ?>&n2=2" onclick="return confirm('Confirma exclusão de <?php echo "$produto2" ?>?')" ><div class="g">X</a></div>
</div>
</td>

<?php } ?>

<h1 class="total" >Total: R$ <?php echo "$pega" ?> </h1>
</tr>
</table>



</div>
</div>




</body>
</html>