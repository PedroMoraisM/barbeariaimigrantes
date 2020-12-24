<?php 

include("../../conexao.php");

$sid = $_GET['sid'];

mysqli_query($conexao,"DELETE FROM servicos WHERE Servico_Cod = $sid");
//mysqli_query($conexao,"DELETE * FROM servicosdesc WHERE Sdesc_Servico = $sid");

header("location:../servicos.php");
?>