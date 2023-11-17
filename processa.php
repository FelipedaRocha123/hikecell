<?php

include_once("conexao.php");


$login = $_POST['login'];
$feedback = $_POST['feedback'];


$sql = "insert into feedbacks (Login,feedback) values ('$login','$feedback')";
$salvar = mysqli_query($conexao,$sql);


$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

header("location: resposta.php")
?>