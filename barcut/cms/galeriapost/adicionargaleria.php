<?php

include("../../conexao.php");
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/gallery/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"INSERT INTO imagens_galeria (Galeria_Nome) VALUES ('$salvar')");		
		
	if($queryImagem) {
				header("location:../galeria.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>