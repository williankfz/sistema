<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/caixa2.css"/>
	
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

<a href="fechamento.php"><img src="img/caix.png" class="fechamento"></a>
<a href="fechamento.php"><div class="fechamento2">Fechamento de Caixa</div></a>

<div id="com">
<a href="tira.php? n1=<?php echo $id ?>&n2=2"><img src="img/compra.png"></a>
</div>
<a href="tira.php? n1=<?php echo $id ?>&n2=2"><div class="com2">Pagamento</div></a>

</div>

<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">




<form method="post" action="caixaf2.php" class="form2" >

<img src="img/cod.png" class="cod">
<div id="input1">
<input name="id" class="id" type="text"  size="15">
</div>

<div id="input2">
<input type="submit" name="salvar" class="input5"  value="Buscar produto">
</div>

</form>




<div id="caixa">
<img src="img/topo.png">    
<iframe src="iframe.php"></iframe> 
</div>



<div id="caixa2">

<h1 align="right">Nenhum arquivo Encontrado</h1>

</div>
</div>

</div>
</body>

</html>