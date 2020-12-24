<?php

include("../../conexao.php");

$sid = $_POST['sid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/index/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE imagens SET Imagem_Nome = '$salvar' WHERE Imagem_Codigo = '$sid'");
			unlink("../../img/index/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarimg.php?sid=$sid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>