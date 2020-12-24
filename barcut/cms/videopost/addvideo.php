<?php 

include("../../conexao.php");

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$link = $_POST['link'];

$query = mysqli_query($conexao,"INSERT INTO videos (Video_Titulo,Video_Desc,Video_Link) VALUES ('$titulo','$desc','$link')");		
		
	if($query) {
				header("location:../videos.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}

?>