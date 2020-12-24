<?php 

include("../../conexao.php");
	
    $img = $_POST['imagem'];
	$titulo = $_POST['titulo'];
	$corpo = $_POST['corpo'];	
	$tid = $_POST['tid'];
	
	$query = mysqli_query($conexao,"UPDATE textos SET Texto_Titulo = '$titulo',Texto_Corpo = '$corpo' WHERE Texto_Codigo = '$tid'");
	
	if($query) {
				
				header("location:../editartextos.php?tid=$tid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>