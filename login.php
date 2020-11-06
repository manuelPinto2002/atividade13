<?php 
$login="aluno";
$password="1234";
if ($login=="aluno" && $password=="1234") {
 	header("location: main.php");
 } 
 else{
 	header("location: erro.php");
 }
?>