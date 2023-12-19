<?php
include'inicio.php';
require'conexao-facil.php';

    //Validando os campos do formulario e os transformand em variaveis.
    if(isset($_GET["nomepaciente"]) and isset($_GET["diagnosticopaciente"])){
        if(isset($_GET["cpfpaciente"])){
            $nome = $_GET["nomepaciente"];
            $diagnostico = $_GET["diagnosticopaciente"];
            $cpf = $_GET["cpfpaciente"];

            $sql = "INSERT INTO paciente(nome,diagnostico,cpf) VALUES('$nome','$diagnostico','$cpf')";
            try {
                $resultado = $conecta->query($sql);
                $mensagem = "Cadastrou as informações do Paciente na Base de Dados";
            } catch (PDOException $e) {
                $mensagem = "Não foi possível cadastrar as informações do paciente na Base de Dados";
            }
        } else
                $mensagem = "Não cadastrou o paciente na base de dados!";
                $conecta = null; //Destrói o objeto, ou seja, a conexao com o banco de Dados.
                echo'<div align="center">
                <h3>'.$mensagem.'</h3>
                <a href="cadastrar.php"><h4>Voltar ao menu </h4></a>
                </a>
                </div>';

        }
    
    include'fim.php';
    ?>