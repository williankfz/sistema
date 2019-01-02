
<?php
include('con_bd.php');

$u = mysqli_query($con,"SELECT*FROM funcionario");

?>

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

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/estoqueg.css"/>
	
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
			 
			 <style type="text/css">
			 .ff{
	margin-top:10px;
	margin-left:102px;
	position:relative;
}
			 </style>
</head>
<body onload="time()">

<div id="inicio">
<img src="img/lanchou5.png">

<div id="blo">
<a href="ajuda.php"><img class="img" src="img/int.png"></a>
<a href="ajuda.php" class="ajuda">Ajuda</a>

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
  <br>
<a href="alterarfunc.php"><img class="ff" src="img/func2.fw.png"></a>	
<a href="alterarfunc2.php"><img class="ff" src="img/adm2.fw.png"></a>    
     <div id="caixa">
    <h1 class="a">ID</h1>
    <h1 class="b">Nome</h1>
    <h1 class="c">Login</h1>
    <h1 class="d">Senha</h1>
	<h1 class="e">RG</h1>
   
    
    
    

    <?php
    while($linha = mysqli_fetch_array ($u)){
        $id = $linha['id'];
        $nome = $linha['nome'];
        $login = $linha['login'];
        $senha = $linha['senha'];
		$rg = $linha['rg'];
        
    ?>
    
    <div id="php">
    <?php echo "$id" ?>
    </div>
    
    <div id="php2">
    <?php echo "$nome" ?>
    </div>
   
    <div id="php3">
    <?php echo "$login" ?>
    </div>
    
    <div id="php4">
    <?php echo "$senha" ?>
    </div>
    
   <div id="php5">
    <?php echo "$rg" ?>
    </div>
	
	<div id="php6">
	<a href="alterar3.php?n1=<?php echo $id?>&n2=1" ><h1 class="f">Alterar</a><h1>
	</div>
	
	<div id="php6">
	<a href="excluir2.php? n1=<?php echo $id ?>&n2=2" onclick="return confirm('Confirma exclusão de <?php echo "$nome" ?>?')" ><h1 class="g">Excluir</a></h1>
	</div>
    
    <?php } ?>
         
          </div>

</div>
</div>

</body>

</html>