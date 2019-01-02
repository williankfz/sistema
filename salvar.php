<?php
session_start(); 
include('con_bd.php');

if(isset ($_POST['radio2'])){
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$rg = $_POST['rg'];

$_SESSION['radio2'] = $pe = $_POST['radio2'];

if($pe == 'funcionario'){
if((!empty($nome)) and (!empty($login))){
    mysqli_query($con,"INSERT INTO funcionario (nome,login,senha,rg) VALUES ('$nome','$login','$senha','$rg')");
    mysqli_close($con);
}
else{
    echo "ERRO";
}
}else if($pe == 'administrador'){
	
	if((!empty($nome)) and (!empty($login))){
    mysqli_query($con,"INSERT INTO cadastro (nome,login,senha,rg) VALUES ('$nome','$login','$senha','$rg')");
    mysqli_close($con);
	}else{
		echo "ERRO";
	}
}
}
else{
	echo "Nao tem nenhum botao selecionado";
}


header("Location:alterarfunc.php");

?>