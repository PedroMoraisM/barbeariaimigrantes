<?php 

include("../conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$corpo = $_POST['mensagem'];

$query = mysqli_query($conexao,"INSERT INTO mensagens (Msg_Nome,Msg_Email,Msg_Assunto,Msg_Corpo) VALUES ('$nome','$email','$assunto','$corpo')");

if($query) {
	header("Location:../contato.php");
}
?>