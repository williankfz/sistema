<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">

<title>Acesso</title>
	<link rel="stylesheet" type="text/css" href="css/funcionario.css"/>
	

			  
</head>
<body>



<div id="data"></div>
<div id="hora"></div>


<div id="fim">
<div id="fim2">

<h1>Seja bem-vindo</h1>
<div id="engloba">
<img src="img/logo10.png" class="logo10" >
<div class="text">Acesse a conta como Administrador
ou Funcionário</div>

<form method="post" class="form" action="teste.php">
<input type="radio" name="radio" value="administrador" class="radio">Administrador
<input type="radio" name="radio" value="funcionario" class="radio" checked>Funcionário<br><br>

<label>Login:</label>
<input type="text" maxlength="20"  size="25" name="login" class="input2"><br>
<br>
<label>Senha:</label>
<input type="password" maxlength="15"  size="24" name="senha" class="input2"><br><br>

<input type="submit" name="entrar" value="Entrar" class="entrar">

</form>
<a href="esqueceu0.php"><div class="esqueceu">Esqueceu a conta?</a></div>
</div>
<hr>

</div>
</div>


</body>

</html>