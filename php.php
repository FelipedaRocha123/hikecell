<?php

$con = mysqli_connect('Id','Login','Senha','email','feddback');
mysqli_select_db('feedbacks', $con);

$sql = "SELECT * FROM `feedbacks`;";
?>