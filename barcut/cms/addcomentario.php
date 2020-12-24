<?php

include("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$corpo = $_POST['corpo'];	
$bid = $_POST['bid'];		
$data = date('d/m/y');	
	
			$query = mysqli_query($conexao,"INSERT INTO comentarios (Comentario_Nome,Comentario_Email,Comentario_Corpo,Comentario_Data,Comentario_Blog) VALUES ('$nome','$email','$corpo','$data','$bid')");		
		
	if($query) {
				header("location:../blog-unico.php?bid=$bid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>