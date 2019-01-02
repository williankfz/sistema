<?php 
session_start();
include('con_bd.php');

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/pagamento.css"/>
   <meta charset="utf-8">

 <script type="text/javascript">
             function troco()
             {
				
    var to = parseFloat(document.getElementById("to").value);
	 var pag = parseFloat(document.getElementById("pag").value);
	 document.getElementById("tro").value = pag - to;
             }
			 
			 
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
			 
			function acao(){
				 if(document.valida.pag.value == ""){
					 alert("Esta faltando preencher o campo pagamento");
					 document.valida.pag.focus();
					 return false; 
				 }
				  if(document.valida.pag.value < document.valida.to.value){
						 alert("Saldo insuficiente para efetuar o pagamento");
						 document.valida.pag.focus();
						 return false;
				
				 }
				 
	 } 	
				 
			 
			 </script>



</head>

<body onload="time()">

<div id="inicio">
<img src="img/lanchou5.png">



</div>

<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">

<?php 
$mostra = $_SESSION['pega'];?>
<form method="post" class="pagam" action="caixa2.php" name="valida" Onsubmit="return acao();">
<h6>Efetuar pagamento</h6>
<div class="formatacao">Total da compra:</div><input type="text" name="t" id="to" value="<?php echo "$mostra" ?>" readonly><br><br>
<div class="formatacao">Pagamento:</div><input type="text" name="pag" id="pag"><br><br>
<div class="formatacao">Troco:</div><input type="tet" name="tro" id="tro" onfocus = "troco()" readonly>
<br><br>
<input type="submit" name="ok" class="ok" value="OK">

</form>

</div>
</div>

</body>
</html>