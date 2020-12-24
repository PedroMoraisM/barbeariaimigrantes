<?php 

include("../../conexao.php");	
    
	$uid = $_GET['uid'];
	
	
	$query = mysqli_query($conexao,"DELETE FROM usuario WHERE Usuario_Codigo = '$uid'");
	
	if($query) {
				
				header("location:../usuarios.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>