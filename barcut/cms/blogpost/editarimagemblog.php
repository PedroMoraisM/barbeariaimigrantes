<?php

include("../../conexao.php");

$bid = $_POST['bid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/blog/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE blog SET Blog_Imagem = '$salvar' WHERE Blog_Codigo = '$bid'");
			unlink("../../img/blog/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarblog.php?bid=$bid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>