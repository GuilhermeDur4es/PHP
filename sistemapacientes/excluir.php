<?php
include'inicio.php';
require'conexao-facil.php';

    if(isset($_GET["cpfpacienteex"])){

        $cpfd = $_GET["cpfpacienteex"];

        $sql = "DELETE FROM paciente WHERE cpf = '".$_GET['cpfpacienteex']."'";
        try{
            $resultado = $conecta->query($sql);
            $mensagem = "Excluiu os valores do aluno no banco de dados";
    } 
    catch(PDOException $e){
        
        $mensagem = "Nao excluiu os valores do aluno no banco de dados";
    }

}
else     $mensagem = "Não excluiu os valores do aluno no banco de dados";
 $conecta = null; //fecha a conexão com o PDO, ou seja, destrói o objeto.
    echo'<div align="center">
                <h3>'.$mensagem.'</h3>
                <a href="cadastrar.php"><h4>Voltar ao menu </h4></a>
                </a>
                </div>';
    
?>