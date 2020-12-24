<?php

include("../../conexao.php");

$nome = $_POST['nome'];
$skill = $_POST['skill'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/team/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"INSERT INTO barbeiros (Barbeiro_Nome,Barbeiro_Skill,Barbeiro_Imagem) VALUES ('$nome','$skill','$salvar')");		
		
	if($queryImagem) {
				header("location:../barbeiros.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>