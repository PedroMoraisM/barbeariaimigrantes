<?php

include("../../conexao.php");

$sid = $_POST['sid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/service/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE servicos_index SET Servico_Imagem = '$salvar' WHERE Servico_Codigo = '$sid'");
			unlink("../../img/service/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarservindex.php?sid=$sid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>