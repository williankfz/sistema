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
	<link rel="stylesheet" type="text/css" href="css/ajuda.css"/>
	
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
<a href="gerente.php"><img class="img3" src="img/sair.png"></a>
<a href="gerente.php" class="ajuda3">Voltar</a>

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
7. Será mostrando o valor da compra e em pagamento coloque o valor recebido pelo cliente e embaixo mostrará o troco.<br><br>
</div>
<h2>Para o administrador</h2><br><br>

<div id="adm">
O administrador deve ter total controle,
conhecimento e responsabilidade no seu negócio.
<br><br>
Por isso fizemos o menu do sistema de administrador para que seja mais uma ajuda no seu dia-a-dia, ele é muito fácil e simples de manusear, veja o que ele tem:
<br><br>
1. O administrador tem acesso o caixa e caso queira averiguar algo de sua curiosidade, não tenha a menor preocupação na hora de manusear, pois você tem o manual do lado esquerdo.<br><br>
2. No menu você encontrará também o acesso para cadastro de funcionários, os mesmos só poderam ter acesso ao caixa se forem cadastrados no sistema pelo administrador.<br><br>
3. O administrador é quem cadastro os produtos no estoque.<br><br>
4. O administrador tem controle do estoque, podendo alterar, acrescentar ou retirar determinado produto.<br><br>
5. O administrador pode ver os relatórios diáriose mensais de vendas.<br><br>
6. No menu há o acesso para ter contatos conosco, podendo enviar um e-mail ou fazer uma ligação<br><br>
7. E nunca deve se esquecer que antes de sair, deve deslogar de sua conta, para isso deve clicar em sair.


</div>

</div>
</div>
</body>

</html>