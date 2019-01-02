<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/caixaf.css"/>

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
			 
			 function nd(){
				 if(document.valida.id.value == "" ){
					 alert("Preencha o campo corretamente");
					 document.valida.id.focus();
					 return false;
				 }
			 }
        
			 
			 </script>
			  
</head>
<body onload="time()">

<div id="inicio">
<img src="img/lanchou5.png">

<a href="estoque.php"><img src="img/estoque.png" class="fechamento" width="68" height="68"></a>
<a href="estoque.php"><div class="fechamento2">Estoque</div></a>

<div id="com">
<a href="tira2.php?id=<?php echo $id ?>&n2=2"><img src="img/compra.png"></a>
</div>
<a href="tira2.php?id=<?php echo $id ?>&n2=2"><div class="com2">Pagamento</div></a>

<div id="blo">
<a href="ajuda2.php"><img class="img" src="img/int.png"></a>
<a href="ajuda2.php" class="ajuda">Ajuda</a>

</div>

<div id="blo2">
<a href="logout.php"><img class="img" src="img/sair.png"></a>
<a href="logout.php" class="voltar">Sair</a>

</div>
</div>

<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">




<form method="post" action="caixaf2.php" class="form2" name="valida" Onsubmit="return nd();" >

<img src="img/cod.png" class="cod">
<div id="input1">
<input name="id" class="id" type="text"  size="15" >
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
<form class="forprin">

<img src="img/cod.png" class="cod2">
<div id="input1">
<input name="id" class="id5" type="text"  size="15" readonly>
</div><br>

<img src="img/prod2.fw.png" class="prod">
<div id="input3">
<input name="produto2" class="id3" type="text"  size="15" readonly>
</div>

<br>

<img src="img/val.png" class="prod">
<div id="input4">
<input name="val" class="id2" type="text"  size="15" readonly>
</div>

<br>

<img src="img/quantidade.png" class="prod">
<div id="input5">
<input name="quantidade" class="id2" type="text"  size="15" readonly>
</div>

<br>

<img src="img/sub.png" class="prod">
<div id="input6">
<input name="total" class="id2" type="text"  size="15" readonly>
</div>

<div class="salvar">
<input type="submit" name="salvar" class="sal"  value="Salvar" onclick="alert('Pesquise um item primeiro');">
</div>
</form>



</div>
</div>

</div>
</body>

</html>