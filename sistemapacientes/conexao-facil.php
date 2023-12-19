<?php
	$usuario = "root";
	$senha = "";
	$servidor = "localhost";
	$bancodedados = "pacientes_upamooca";
	$porta = "3306";

	try{
			$conecta = new PDO("mysql:dbname=$bancodedados; host=$servidor; port=$porta; charset=utf8", $usuario, $senha);
			$conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
	catch(PDOException $e){
			echo "falha ao conectar: ". $e->getMessage();
	}



?>