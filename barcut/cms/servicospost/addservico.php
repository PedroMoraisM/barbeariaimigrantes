<?php 

include("../../conexao.php");

$nome =  $_POST['nomeserv'];
$tempo = $_POST['temposerv'];
$preco = $_POST['precoserv'];

$addserv = mysqli_query($conexao,"INSERT INTO servicos (Servico_Nome,Servico_Duracao,Servico_Preco) VALUES ('$nome','$tempo','$preco')");

if(!$addserv) {
						printf("Error: %s\n",mysqli_error($conexao));
						exit();
					}						
					 header("location:../servicos.php");
?>