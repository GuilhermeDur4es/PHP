<?php
include'inicio.php';
require'conexao-facil.php';

    $sql = "SELECT nome,diagnostico,cpf FROM paciente";

    try{
        $resultado = $conecta->query($sql);
        echo'<table id="tabela">
               <tr>
                   <th>Nome</th>
                   <th>Diagnóstico</th>
                   <th>CPF</th>
               </tr>';
               if($resultado != null)
        foreach($resultado as $linha){
            echo'<style>
            table {
     font-family: arial, sans-serif;
     border-collapse: collapse;
     width: 100%;
   }
   
   td, th {
     border: 1px solid #dddddd;
     text-align: left;
     padding: 8px;
   }
   
   tr:nth-child(even) {
     background-color: #dddddd;
   }
   </style>
            
            <tr>
                       <td>'.$linha['nome'].'</td>
                       <td>'.$linha['diagnostico'].'</td>
                       <td>'.$linha['cpf'].'</td>
                 </tr>
                 ';
        }
        echo'</table>';
         echo'<center><a href="cadastrar.php"><h3> Voltar ao menu</h3></a></center>';
        
        }	catch(PDOException $e){
            echo'<h1 class="w3-button w3-blue"> ERRO! </h1>';
        }	
   ?>
   
   
   <?php
   include'fim.php';
   ?>

    