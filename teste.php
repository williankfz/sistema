<?php
session_start();
include('con_bd.php');

if(isset ($_POST['radio'])){
	
$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];


	$_SESSION['radio'] = $pega = $_POST['radio'];
	
	if($pega == 'administrador'){
		$adm = mysqli_query($con,"SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha'");
		
		if(mysqli_num_rows ($adm) > 0){
			$linha = mysqli_fetch_array($adm);
			
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
		    $_SESSION['nome'] = $nome;

			header("Location:gerente.php");
		}
		else{
			session_destroy();
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			header("Location:login.php");
		}
	
	} else if($pega == 'funcionario'){
	 	
		$func = mysqli_query($con,"SELECT * FROM funcionario WHERE login = '$login' AND senha = '$senha'");
		
		if(mysqli_num_rows ($func) > 0){
			$linha = mysqli_fetch_array($func);
			$_SESSION['nome'] = $nome;
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("Location:caixaf.php");
		}
		else{
			session_destroy();
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			header("Location:login.php");
		}
	}
	
}
else{
	echo"nao tem nenhum botao selecionado";
}

?>