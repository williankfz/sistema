
<?php
include('con_bd.php');
$id= $_POST['id'];
$nome = $_POST['nome'];
$pesquisa = mysqli_query($con,"SELECT*FROM estoque WHERE id LIKE '$id' OR nome LIKE '$nome'");

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
  
    <form method="post" action="estoqueg2.php">
        <label>ID:</label><input type="text" name="id" class="inputfor">
        <label>Nome:</label><input type="text" name="nome" class="inputfor">
        <input type="submit" name="b" Value="Procurar" class="botao">
    </form><br>
    <br><br><br><br><br><br>
     <div id="caixa">
    <h1 class="a">ID</h1>
    <h1 class="b">Nome</h1>
    <h1 class="c">Valor</h1>
    <h1 class="d">Quantidade</h1>
    <h1 class="e">Entrada</h1>
    
    
    

    <?php
    while($linha = mysqli_fetch_array ($pesquisa)){
        $id = $linha['id'];
        $nome = $linha['nome'];
        $valor = $linha['valor'];
        $quantidade = $linha['quantidade'];
        $entrada = $linha['entrada']; 
    ?>
    
    <div id="php">
    <?php echo "$id" ?>
    </div>
    
    <div id="php2">
    <?php echo "$nome" ?>
    </div>
   
    <div id="php3">
    <?php echo "$valor" ?>
    </div>
    
    <div id="php4">
    <?php echo "$quantidade" ?>
    </div>
    
    <div id="php5">
    <?php echo "$entrada" ?>
    </div>
	
	<div id="php6">
	<a href="alterar.php?n1=<?php echo $id?>&n2=1" ><h1 class="f">Alterar</a><h1>
	</div>
	
	<div id="php6">
	<a href="excluir3.php? n1=<?php echo $id ?>&n2=2" onclick="return confirm('Confirma exclusão de <?php echo "$nome" ?>?')" ><h1 class="g">Excluir</a></h1>
	</div>
    
    <?php } ?>
         
          </div>

</div>
</div>

</body>

</html>