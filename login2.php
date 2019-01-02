<?PHP
include ('con_bd.php');

$login = $_POST['login'];
$senha = $_POST['senha'];
$radio = $_POST['radio'];

 
$sql = "SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha'";
 
$resultado = mysqli_query($con, $sql) or die ("Erro na seleção da tabela.");
 
if (mysqli_num_rows ($resultado) > 0) {
	$linha = mysqli_fetch_array ($resultado) ;

	
	
	
	$nome = $linha['nome'];
    
	session_start();
     
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
	$_SESSION['nome'] = $nome;
	
   header("Location:adm.php");
}
 
else {
    session_destroy();
 
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    header('location:login.php');
     
}
?>