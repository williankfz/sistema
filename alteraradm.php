<?php 

include('con_bd.php');

$id2 = $_GET['n1'];
$op = $_GET['n2'];


$u = mysqli_query($con,"SELECT*FROM cadastro WHERE id='$id2'");

$linha = mysqli_fetch_array($u);
	$id = $linha['id'];
	$nome = $linha['nome'];
	$login = $linha['login'];
	$senha = $linha['senha'];
	$rg = $linha['rg'];
	
	
	
	
	mysqli_close($con);

?>

<html>
<head>
    <meta charset="utf-8">

<title>Alterar</title>
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

<form name="form1" action="excluiradm.php?n1=<?php echo $id ?>&n2=1" method="post">
 <h1>Alterar Administrador</h1><br>


<div class="formatacao">Nome Do Administrador:</div>   
<input name="nome" class="inp" type="text" size="40" Value="<?php echo "$nome"?>">

<br><br>

<div class="formatacao">Login:</div>
<input name="login" class="inp2" type="text" size="40" Value="<?php echo "$login"?>">

<br><br>

<div class="formatacao">Senha:</div>    
<input name="senha" class="inp3" type="text" size="40" Value="<?php echo "$senha"?>">
<br><br>
<div class="formatacao">RG:</div>
<input name="rg" class="inp3" type="text" size="40" Value="<?php echo "$rg" ?>" maxlength="9">
<br><br>

<input name="submit" value="Salvar" class="botao2" type="submit"></a>

</form>  

</div>

</div>				
</body>
</html>
</html>