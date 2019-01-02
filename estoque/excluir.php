<?php

include('con_bd.php');

$op = $_GET['n2'];

if($op == 2){
	$id = $_GET['n1'];
	
	include('con_bd.php');
	
	$resultado = mysqli_query($con,"delete from estoque where id='$id'");
	
	if($resultado){
		echo "Dados removidos";
	}
	else{
		echo "Erro ao remover";
	}
}

else{
	
	$op = $_GET['n2'];
	$id = $_GET['n1'];
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];
	$quantidade = $_POST['quantidade'];
	$entrada = $_POST['entrada'];
	
	if((!empty ($nome)) and (!empty($valor))){
		mysqli_query($con,"UPDATE estoque SET id='$id',nome='$nome',valor='$valor',quantidade='$quantidade',entrada='$entrada'");
		
		mysqli_close($con);
	}
	
	else{
		echo "ERRO";
	}
}

header("Location:estoqueg.php");

?>
