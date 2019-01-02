<?php 
include('con_bd.php');

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$entrada = $_POST['entrada'];
$marca = $_POST['marca'];
$fornecedor = $_POST['fornecedor'];

if((!empty($nome)) and (!empty($valor))){
    mysqli_query($con,"INSERT INTO estoque (nome,valor,quantidade,entrada,marca,fornecedor) VALUES ('$nome','$valor','$quantidade','$entrada','$marca','$fornecedor')");
    mysqli_close($con);
}
else{
    echo "ERRO";
}
header("Location:estoqueg.php");
?>