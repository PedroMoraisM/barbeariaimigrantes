<?php

include("../../conexao.php");

$pid = $_POST['pid'];
$imgVelha = $_POST['imagem'];	
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/produtos/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"UPDATE produtos SET Produto_Imagem = '$salvar' WHERE Produto_Codigo = '$pid'");
			unlink("../../img/produtos/$imgVelha");
		
		
	if($queryImagem) {
				header("location:../editarproduto.php?pid=$pid");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>