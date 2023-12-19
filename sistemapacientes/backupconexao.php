<?php
    $hostname = "localhost";
    $bancodedados = "pacientes_upamooca";
    $usuario = "root";
    $senha = "";
    

    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);
    if($mysqli -> connect_errno){
        echo"falha ao conectar com a base de dados :(" . $mysqli->connect_errno. ")".$mysqli->connect_errno;

    }

    else{
        echo"Paciente cadastrado com sucesso! :)";
    }
?>