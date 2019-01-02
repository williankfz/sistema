<?php

include('con_bd.php');



$op = $_GET['n2'];

if($op == 2){
	$id2 = $_GET['n1'];
	
	
	include('con_bd.php');
	
	$resultado = mysqli_query($con,"delete from recebe where id='$id2'");
	
	
	
	if($resultado){
		echo "Dados removidos";
	}
	else{
		echo "Erro ao remover";
	}
}

else{
	
	$op = $_GET['n2'];
	$id2 = $_GET['n1'];
	$produto2 = $_POST['produto2'];
	$val = $_POST['val'];
	$quantidade = $_POST['quantidade'];
	$total = $_POST['total'];
	
	if((!empty ($produto2)) and (!empty($val))){
		mysqli_query($con,"UPDATE recebe SET id='$id',produto2='$produto2',val='$val',quantidade='$quantidade',total='$total'");
		
		mysqli_close($con);
	}
	
	else{
		echo "ERRO";
	}
}

header("Location:iframe.php");

?>
