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

<title>Menu Gerente</title>
	<link rel="stylesheet" type="text/css" href="css/gerente.css"/>
	
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
<a href="ajuda.php"><img class="img3" src="img/int.png"></a>
<a href="ajuda.php" class="ajuda3">Ajuda</a>

</div>

<div id="blo2">
<a href="logout.php"><img class="img3" src="img/sair.png"></a>
<a href="logout.php" class="voltar3">Sair</a>

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
<div id="gerente">

<div id="linha1">
<div class="caixa"><a href="caixa2.php"><img class="img" src="img/caixa.png"></a><p class="p1"><a href="caixa2.php" class="func2">Caixa</a></p></div>

<div class="funcionario"><a href="cadastrar.php"><img class="img" src="img/funcionario.png"></a>
<p align="center"><a href="cadastrar.php" class="func2">Cadastro de Funcionário</a></p></div>

<div class="funcionario"><a href="alterarfunc.php"><img class="img" src="img/alterar.png"></a>
<p align="center"><a href="alterarfunc.php" class="func2">Funcionários</a></p></div>

<div class="funcionario"><a href="index.php"><img class="img" src="img/c3.png"></a>
<p align="center"><a href="index.php" class="func2">Cadastro de Produtos</a></p></div>

<div class="estoque"><a href="estoqueg.php"><img class="img" src="img/estoque.png"></a><p align="center"><a href="estoqueg.php" class="func2">Estoque</a></p></div>

</div>

<div id="linha2">
<div class="relatorio"><a href="fechamento.php"><img class="img" src="img/relatorio.png"></a><p align="center"><a href="fechamento.php" class="func2">Relatórios</a></p></div>

<div class="conta"><a href="contato.php"><img class="img" src="img/contato.png"></a><p class="p3"><a href="contato.php" class="func2">Contato</a></p></div>

<div class="ajuda"><a href="ajuda.php"><img class="img" src="img/ajuda.png"></a><p align="center"><a href="ajuda.php" class="func2">Ajuda</a></p></div>
</div>

</div>
</div>
</div>
</div>


</body>

</html>