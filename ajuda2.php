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
	<link rel="stylesheet" type="text/css" href="css/ajuda2.css"/>
	
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
<a href="caixaf.php"><img class="img3" src="img/sair.png"></a>
<a href="caixaf.php" class="ajuda3">Voltar</a>

</div>

</div>
	  
	
<div id="data"></div>
<div id="hora"></div>

<div id="fim">

<div id="fim2">



<h1>Aprender a manusear o caixa</h1><br><br>
 
<img src="img/caixa2.png" class="caixa2">

    <ol> 
        <li>É necessário buscar o produto, para isso digite o código do produto e click no botão Buscar produto.</li> <br>
        <li>O produto será buscado e seus valores como:nome do produto, valor unitário, quantidade, Sub Total apareceram nos seus devidos lugares.</li> <br>
    </ol>
	
<div id="li2">

3. Para que a compra continue deve-se clicar no botão Salvar.<br><br>
4. As informações serão passadas para uma caixa do lado esquerdo da página.<br><br>
5. Faça o mesmo processo começando do primeiro passo para continuar comprando produtos.<br><br>
6. Caso a compra tenha acabado é preciso efetuar a compra, para isso vá no topo da página o menu, e click em Pagamento.<br><br>
7. Será mostrado o valor da compra e em pagamento coloque o valor recebido pelo cliente e embaixo mostrará o troco.<br><br>
</div>

<div id="seg">
Informações adicionais:<br><br>
O funcionário tem acesso ao estoque, só que diferente do administrador, o funcionário não pode estar fazendo qualquer manipulação.<br><br>
Também tem acesso ao fechamento de caixa.
</div>

</div>
</div>
</body>

</html>