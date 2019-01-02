<?php

include ('bd_lanchou.php');

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$comentario = $_POST ['comentario'];

if ((!empty($nome)) and (!empty($comentario))){

mysqli_query($lanchou, "INSERT INTO contato (nome,email,comentario)
VALUES ('$nome','$email', '$comentario')" );

mysqli_close($lanchou);
}
else 
{
echo "<b> Preencha todos os campos </b>";
} 
echo "<b> Enviado com sucesso!!! </b>";
?>