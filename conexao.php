<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "feedbacks";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
	print "Falha na conexao com o Banco de Dados";
}

?>