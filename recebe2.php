<?php
include('con_bd.php');
$id = $_POST['id']; 
$produto2 = $_POST['produto2'];
$val = $_POST['val'];
$quantidade = $_POST['quantidade'];
$total = $_POST['total'];

$subtrai = mysqli_query($con,"UPDATE estoque SET quantidade = quantidade - '$quantidade' WHERE id = '$id'");


if((!empty($produto2)) and (!empty($val))){
    mysqli_query($con,"INSERT INTO recebe (produto2,val,quantidade,total) VALUES ('$produto2','$val','$quantidade','$total')");
    mysqli_close($con);
}
else{
    echo "ERRO";
}
header("Location:caixaf.php");
?>