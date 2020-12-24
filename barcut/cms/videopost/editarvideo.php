
<?php 

include("../../conexao.php");

$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$link = $_POST['link'];
$vid = $_POST['vid'];

$query = mysqli_query($conexao,"UPDATE videos SET Video_Titulo = '$titulo',Video_Desc = '$desc',Video_Link = '$link' WHERE Video_Codigo = $vid; ");		
		
	if($query) {
				header("location:../videos.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}

?>