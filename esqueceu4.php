<?php

include('con_bd.php');

$rg = $_POST['rg'];

$u = mysqli_query($con,"SELECT*FROM cadastro WHERE rg LIKE '$rg'");

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
<body>

<div id="inicio">
<img src="img/lanchou5.png">

<div id="blo2">
<a href="login.php"><img class="img" src="img/sair.png"></a>
<a href="login.php" class="voltar">Voltar</a>

</div>

</div>

<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">

<div id="aparece">	
<?php

       //$aparecelogo = $_SESSION['login'];
      //echo "Bem-vindo Administrador: $aparecelogo";
	while($linha = mysqli_fetch_array ($u)){
    $nome = $linha['nome'];
    $login = $linha['login'];
    $senha = $linha['senha'];
	$rg = $linha['rg'];
	}
?>
</div>

<form method="post" action="login.php"  name="form1">

<h1>Usuario:</h1><br>
<div class="formatacao">Nome</div>
<input name="nome" type="text"  size="33" value="<?php echo "$nome" ?>" readonly><br><br>

<div class="formatacao">Login</div>
<input name="login" type="text"  size="33" value="<?php echo "$login" ?>" readonly><br><br>

<div class="formatacao">Senha</div>
<input name="senha" type="text"  size="33" value="<?php echo "$senha" ?>" readonly>

<div class="formatacao">RG</div>
<input name="rg" type="text"  size="33" value="<?php echo "$rg" ?>" readonly>

<input  type="submit" name="submit"  value="Voltar" class="botao">

</form>

</div>

</div>
</body>

</html>