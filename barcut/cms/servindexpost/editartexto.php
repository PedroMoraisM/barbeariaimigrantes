<?php 

include("../../conexao.php");
	
    $img = $_POST['imagem'];
	$nome = $_POST['nome'];	
	$sid = $_POST['sid'];
	
	$query = mysqli_query($conexao,"UPDATE servicos_index SET Servico_Nome = '$nome',Servico_Imagem= '$img' WHERE Servico_Codigo = '$sid'");
	
	if($query) {
				
				header("location:../editarservindex.php?sid=$sid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>