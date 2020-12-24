<?php

include("../../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$query = mysqli_query($conexao,"INSERT INTO usuario (Usuario_Nome,Usuario_Email,Usuario_Senha) VALUES ('$nome','$email','$senha')");

if($query) {
				
		header("location:../usuarios.php");
			}		
			else {			
				echo("Error: ".mysqli_error($conexao));
				}

?>