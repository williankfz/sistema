<?php 
include('con_bd.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];


if((!empty($nome)) and (!empty($login))){
    mysqli_query($con,"INSERT INTO funcionario (nome,login,senha) VALUES ('$nome','$login','$senha')");
    mysqli_close($con);
}
else{
    echo "ERRO";
}
header("Location:cadastrar.php");
?>