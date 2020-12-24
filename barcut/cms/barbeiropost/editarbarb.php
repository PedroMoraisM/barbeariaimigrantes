<?php 

include("../../conexao.php");
	
    $img = $_POST['imagem'];
	$nome = $_POST['nome'];
	$skill = $_POST['skill'];	
	$bid = $_POST['bid'];
	
	$query = mysqli_query($conexao,"UPDATE barbeiros SET Barbeiro_Nome = '$nome',Barbeiro_Skill = '$skill', Barbeiro_Imagem = '$img' WHERE Barbeiro_Codigo = '$bid'");
	
	if($query) {				
				header("location:../editarbarbeiro.php?bid=$bid");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}
	

?>