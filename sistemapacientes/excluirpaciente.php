<?php
include'inicio.php';
require'conexao-facil.php';
?>
<form action="excluir.php" method="GET" terget="_self">
    Digite o CPF do paciente que deseja excluir: <input type="text" name="cpfpacienteex">
    <br><br>
    <input type="submit" value="Excluir Paciente">
</form>
<?php
include'fim.php';
?>