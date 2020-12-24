<?php

include("../../conexao.php");

$tid = $_POST['tid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE textos SET Texto_Imagem = '$salvar' WHERE Texto_Codigo = '$tid'");
			unlink("../../img/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editartextos.php?tid=$tid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>