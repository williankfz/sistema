<?php

session_start();

include('con_bd.php');
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

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css"/>
	
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
<a href="ajuda2.php"><img class="img" src="img/int.png"></a>
<a href="ajuda2.php" class="ajuda">Ajuda</a>

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

<form method="post" action="salvar.php"  name="form1" class="form">
<input type="radio" name="radio2" value="administrador" class="radio" >Administrador.
<input type="radio" name="radio2"  value="funcionario" class="radio" checked>Funcionario.<br><br>

<h1>Cadastro de Acesso dos Usúarios:</h1><br>
<div class="formatacao">Nome</div>
<input name="nome" type="text"  size="33"><br><br>

<div class="formatacao">Login</div>
<input name="login" type="text"  size="33"><br><br>

<div class="formatacao">Senha</div>
<input name="senha" type="text"  size="33"><br><br>

<div class="formatacao">RG</div>
<input name="rg" type="text" size="33" maxlength="9" placeholder="Digite apenas numeros">
<input  type="submit" name="submit"  value="Salvar" class="botao">

</form>

</div>

</div>
</body>

</html>