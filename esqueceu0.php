<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/cadastrar3.css"/>
	
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
      
?>
</div>
<br>
<h1 class="f">Selecione seu Cargo</h1>

<a href="esqueceu3.php"><img class="ff" src="img/adm2.fw.png"></a>
<a href="esqueceu.php"><img class="fff" src="img/func2.fw.png"></a>

</div>

</div>
</body>

</html>