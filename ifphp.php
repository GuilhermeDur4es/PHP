<?php
//Início da área para declaração de variaveis
$nome = $_POST["nomealuno"];
$nota1 = $_POST["primeiranota"];
$nota2 = $_POST["segundanota"];
$nota3 = $_POST["teceiranota"];
$nota4 = $_POST["quartanota"];
$resultadofinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
//Fim da área para declaração de variaveis

//calculando se o aluno foi aprovado ou reprovado.

if( $resultadofinal >=5){
echo("O aluno $nome");
echo"<br>";
echo("Foi aprovado!");	
}
else{
	echo("O aluno $nome");
	echo"<br>";
	echo("Foi reprovado!");
	
}
//Fim do cálculo
?>