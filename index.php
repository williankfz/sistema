<?php

session_start();

if(!isset($_SESSION['login'])and !isset($_SESSION['senha'])){
    session_destroy();
    
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    
	header('location:login.php');
   
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<title>Cadastro de Produtos</title>

<link rel="stylesheet" type="text/css" href="css/cadastrar2.css"/>

 <script type="text/javascript">
             function time()
             {
             today=new Date();
             h=today.getHours();
             m=today.getMinutes();
             s=today.getSeconds();
			 d=today.getDate();
             mes=today.getMonth();
             a=today.getFullYear();
             document.getElementById('hora').innerHTML=h+":"+m+":"+s;
			 setTimeout('time()',500);
			 document.getElementById('data').innerHTML=d+"/"+(mes+1)+"/"+a;

             }
			 
			 </script>

</head>
<body onload="time()">


<div id="inicio">
<img src="img/lanchou5.png">

<div id="blo">
<a href="#"><img class="img" src="img/int.png"></a>
<a href="#" class="ajuda">Ajuda</a>

</div>

<div id="blo2">
<a href="gerente.php"><img class="img" src="img/sair.png"></a>
<a href="gerente.php" class="voltar">Voltar</a>

</div>
</div>


<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">

<div id="aparece">	
<?php

       $aparecelogo = $_SESSION['login'];
      echo "Bem-vindo Administrador: $aparecelogo";
      
?>
</div>

<h1>Cadastro de Produtos</h1>

<form method="post"  action="salvar3.php">


<label>Nome do produto:</label>   
<input name="nome" class="inp" type="text" size="40">

<br><br>

<label>Valor do produto:</label>
<input name="valor" class="inp2" type="text" size="40">

<br><br>

<label>Quantidade:</label>    
<input name="quantidade" class="inp3" type="number" size="40">

<br><br>

<label>Dia da entrega:</label>
<input name="entrada" class="inp4" type="date" size="40"><br>

<div id="div">
<label>Marca:</label>
<input name="marca" class="inp4" type="type" size="40"><br>

<br>
<label>Fornecedor:</label>
<input name="fornecedor" class="inp4" type="type" size="40"><br>


</div>

<input name="submit" value="Salvar" class="guardar2" type="submit">

<input name="submit" value="Desfazer" class="cancelar2" type="submit">
   
    
</form>  



</div>
</div>
  
    
</body>
</html>