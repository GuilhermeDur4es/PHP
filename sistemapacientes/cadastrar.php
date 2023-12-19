<?php
include'inicio.php';
require'conexao-facil.php';
?>
<div id="div1" style="text-align: center;">
<h2>Sistema de registro de pacientes UPA Mooca</h2>
    <form action="pacientecadastrado.php" method="GET" target="_self">
        Digite o nome do paciente: <input type="text" name="nomepaciente">
        <br><br>
        Digite o Diagnostico do paciente: <input type="text" name="diagnosticopaciente">
        <br><br>
        Digite o CPF do Paciente: <input type="text" name="cpfpaciente">
        <br><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar Campos">
       
    </form>
    <br><br>
    <a href="excluirpaciente.php"><button>Excluir Paciente</button></a>
    <a href="visualizarpacientes.php"><button>Pacientes Registrados</button></a>
</div>
<?php
include'fim.php';
?>