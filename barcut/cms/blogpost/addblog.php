<?php

include("../../conexao.php");

$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];	
$autor = $_POST['autor'];	
$data = date('d/m/y');
	
	$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : false;
	
			$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
			$salvar = base64_encode($arquivo['name']).".".$extensao;
			$destino = "../../img/blog/".$salvar;
			move_uploaded_file($arquivo['tmp_name'], $destino);
			$queryImagem = mysqli_query($conexao,"INSERT INTO blog (Blog_Titulo,Blog_Corpo,Blog_Autor,Blog_Data,Blog_Imagem) VALUES ('$titulo','$corpo','$autor','$data','$salvar')");		
		
	if($queryImagem) {
				header("location:../blog.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}
				
	?>