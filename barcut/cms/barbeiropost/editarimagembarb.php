<?php

include("../../conexao.php");

$bid = $_POST['bid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/team/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE barbeiros SET Barbeiro_Imagem = '$salvar' WHERE Barbeiro_Codigo = '$bid'");
			unlink("../../img/team/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarbarbeiro.php?bid=$bid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>