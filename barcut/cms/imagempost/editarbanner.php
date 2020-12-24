<?php

include("../../conexao.php");

$tid = $_POST['tid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/banner/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE imagens SET Imagem_Nome = '$salvar' WHERE Imagem_Codigo = '$tid'");
			unlink("../../img/banner/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarbanner.php?tid=$tid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>