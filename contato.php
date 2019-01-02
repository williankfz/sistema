<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Fale Conosco</title>
	<link rel="stylesheet" type="text/css" href="css/contato.css"/>
	
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
			 
			 function val(){
				 if(document.contato.nome.value == ""){
					 alert("Preencha o campo Nome por favor");
					 document.contato.nome.focus();
					 return false;
				 }
				 if(document.contato.email.value == "" || document.contato.email.value.indexOf('@') == -1 || document.contato.email.value.indexOf('.') == -1){
					 alert("Preencha o campo E-mail corretamente");
					 document.contato.email.focus();
					 return false;	
				 }
				 if(document.contato.comentario.value == ""){
					 alert("Preencha o campo comentario");
					 document.contato.comentario.focus();
					 return false;
				 }
				 return true;
			 }
			 
			 </script>
			  
</head>
<body onload="time()">

<div id="inicio">
<img src="img/lanchou5.png">

<div id="blo">
<a href="#"><img class="img" src="img/int.png"></a>
<a href="#" class="ajuda">Ajuda</a>

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
<div id="contato">
<form method="post"  name="contato" action="https://formspree.io/antoniowillian075@gmail.com" type="text/plain" onSubmit="return val();">
 <h3>Fale Conosco</h3><br>
 <div class="nome"><font face="Montserrat, sans-serif" size="4" color="#000000">Nome:</font> 
<input type="text" name="nome" size="30"  class="for"></div><br>
						 
<div class="email"><font face="Montserrat, sans-serif" size="4" color="#000000">E-mail:</font>
<input type="text" name="email" size="30"  class="for" ></div><br>
						 
<div class="comente"><font face="Montserrat, sans-serif" size="4" color="#000000">Comentário:</font> <br>
<textarea name="comentario" rows="10" cols="50"  placeholder="Relate o problema de forma detalhada"></textarea><br>
</div><br>
<input name="enviar" type="submit" Value="Enviar" class="botao1">
<input name="limpar" type="reset" Value="Redefinir" class="botao2">
                      
</form>
</div>
</div>

<div id="caixao">

 <h4>Ligue</h4><br>

<div class="formata">(11) 97811024</div>
<div class="formata">(11) 96811024</div>
<br>
<div class="formata">
Av. Brigadeiro Faria Lima, 2102-Cocaia
<br>
Guarulhos - SP,07031-000
</div>
</div>
</div>


</body>

</html>