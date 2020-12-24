<?php 

include("../../conexao.php");
	
    $img = $_POST['imagem'];
	$titulo = $_POST['titulo'];
	$corpo = $_POST['corpo'];
	$data = $_POST['data'];
	$bid = $_POST['bid'];
	
	$query = mysqli_query($conexao,"UPDATE blog SET Blog_Titulo = '$titulo',Blog_Corpo = '$corpo',Blog_Data = '$data', Blog_Imagem = '$img' WHERE Blog_Codigo = '$bid'");
	
	if($query) {
				
				header("location:../editarblog.php?bid=$bid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>