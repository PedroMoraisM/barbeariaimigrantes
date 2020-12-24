<?php

include("../../conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];	

	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/produtos/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"INSERT INTO produtos(Produto_Nome,Produto_Preco,Produto_Status,Produto_Imagem) VALUES ('$nome','$preco','Disponível','$salvar')");		
		
	if($queryImagem) {
				header("location:../produtos.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>