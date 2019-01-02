<?php 

include('con_bd.php');

$op = $_GET['n1'];
$id = $_GET['n2'];

$pesquisa = mysqli_query($con,"SELECT*FROM estoque WHERE id='$id'");

$linha = mysqli_fetch_array($pesquisa);
	$id = $linha['id'];
	$nome = $linha['nome'];
	$valor = $linha['valor'];
	$quantidade = $linha['quantidade'];
	$entrada = $linha['entrada'];
	
	mysqli_close($con);

?>

<html>
<head> </head>
<body>

 <label><b>ID</b>: &nbsp;</label>
                <input value="<?php echo "$id"?>" name="id"><br/>
                <label class="cad"><b>Nome</b>: &nbsp;</label>
                <input value="<?php echo "$nome" ?>" name="nome"><br/>
                <label class="cad"><b>Valor</b>: &nbsp;</label>
                <input value="<?php echo "$valor" ?>" name="data"><br/>
				<label class="cad"><b>Quantidade</b>: &nbsp;</label>
                <input value="<?php echo "$quantidade" ?>" name="endereco"><br/>
				<label class="cad"><b>Entrada</b>: &nbsp;</label>
                <input value="<?php echo "$entrada" ?>" name="telefone"><br/>
				
				<br/><br/>
                <a href="estoqueg.php"><input type="submit" name="submit"  value="Alterar"></a>
</body>
</html>