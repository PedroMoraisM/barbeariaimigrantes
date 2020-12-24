<?php 

include("../../conexao.php");
	
    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];	
	$uid = $_POST['uid'];
	
	$query = mysqli_query($conexao,"UPDATE usuario SET Usuario_Nome = '$nome',Usuario_Email = '$email',Usuario_Senha = '$senha' WHERE Usuario_Codigo = '$uid'");
	
	if($query) {
				
		header("location:../editarusuario.php?uid=$uid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>