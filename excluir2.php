<?php

include('con_bd.php');



$op = $_GET['n2'];

if($op == 2){
	$id2 = $_GET['n1'];
	
	
	include('con_bd.php');
	
	$resultado = mysqli_query($con,"delete from funcionario where id='$id2'");
	
	
	
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
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$rg = $_POST['rg'];
	
	
	if((!empty ($nome)) and (!empty($login))){
		mysqli_query($con,"UPDATE funcionario SET nome='$nome',login='$login',senha='$senha',rg='$rg' WHERE id = '$id2'");
		
		mysqli_close($con);
	}
	
	else{
		echo "ERRO";
	}
}

header("Location:alterarfunc.php");

?>
