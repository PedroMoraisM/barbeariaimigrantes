<?php 

include("../../conexao.php");


$vid = $_GET['vid'];

$query = mysqli_query($conexao,"DELETE FROM videos WHERE Video_Codigo = $vid; ");		
		
	if($query) {
				header("location:../videos.php");
			}		
			else {			
				echo("Error: " . mysqli_error($conexao));
				}

?>