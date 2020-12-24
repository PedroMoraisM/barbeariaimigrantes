<?php 

include("../../conexao.php");
	
    $img = $_POST['imagem'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];	
	$pid = $_POST['pid'];
	
	$query = mysqli_query($conexao,"UPDATE produtos SET Produto_Nome = '$nome',Produto_Preco = '$preco',Produto_Imagem = '$img' WHERE Produto_Codigo = '$pid'");
	
	if($query) {
				
				header("location:../editarproduto.php?pid=$pid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>