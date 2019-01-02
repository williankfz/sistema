<?php
session_start();
include('con_bd.php');
 $busca = $_POST['id'];

$pesquisa = mysqli_query($con,"SELECT * FROM estoque WHERE id LIKE '$busca'");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Caixa</title>
	<link rel="stylesheet" type="text/css" href="css/caixa.css"/>

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
	  
	  
             function conta()
             {
			
    var n1 = parseFloat(document.getElementById("n1").value);
	 var n2 = parseFloat(document.getElementById("n2").value);
	 document.getElementById("n3").value = n1 * n2;
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
<a href="fechamento.php"><img src="img/caix.png" class="fechamento"></a>
<a href="fechamento.php"><div class="fechamento2">Fechamento de Caixa</div></a>

<div id="com">
<a href="tira.php?id=<?php echo $id ?>&n2=2"><img src="img/compra.png"></a>
</div>
<a href="tira.php?id=<?php echo $id ?>&n2=2"><div class="com2">Pagamento</div></a>

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


<?php

$conta = mysqli_num_rows($pesquisa);
if($conta == 0){
	header("Location:nada.php");
}
while($linha = mysqli_fetch_array($pesquisa)){

  $nome = $linha['nome'];
   $id = $linha['id'];
  $valor = $linha['valor'];
 $quantidade = $linha['quantidade'];
}

?>


<form method="post" class="form2" name="valida" Onsubmit ="return nd()">

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

<form method="post" name="fomr" action="recebe.php" class="forprin">

<img src="img/cod.png" class="cod2">
<div id="input1">
<input name="id" class="id5" type="text"  size="15" Value="<?php echo "$id"?>" readonly>
</div><br>
<img src="img/prod2.fw.png" class="prod">
<div id="input3">
<input name="produto2" class="id3" type="text"  size="15" value="<?php echo "$nome" ?>" readonly>
</div>

<br>

<img src="img/val.png" class="prod">
<div id="input4">
<input name="val" class="id2" type="text" id="n1"  size="15" value="<?php echo "$valor" ?>" readonly>
</div>

<br>

<img src="img/quantidade.png" class="prod">
<div id="input5">
<input name="quantidade" class="id2" type="text"  size="15" value="1" id="n2">
</div>

<br>

<img src="img/sub.png" class="prod">
<div id="input6">
<input name="total" class="id2" type="text"  size="15" id="n3" value="<?php echo "$valor" ?>"  onfocus = "conta()" readonly>
</div>
<div class="salvar">
<input type="submit" name="salvar" class="sal"  value="Salvar">
</div>
</form>


</div>
</div>

</div>
</body>

</html>