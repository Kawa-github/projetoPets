<?php
include "conexao.php";
$erro = false;
//$_txt_nomeCon = $_POST['txt_nomeCon'];
$lblTipo_consulta = $_POST['lblTipo_consulta'];
$lblUnidade_consulta = $_POST['lblUnidade_consulta'];
$date_consulta = $_POST['date_consulta'];
$name_veterinario = $_POST['name_veterinario'];

if(isset($_POST["lblTipo_consulta"])){
    $cmd = $db->prepare('INSERT INTO consulta(tipo_consulta,unidade_consulta,data_consulta,veterinario_consulta) VALUES(:lblTipo_consulta,:lblUnidade_consulta, :date_consulta, :name_veterinario)');
    $cmd->execute(array(
    ':lblTipo_consulta' => $lblTipo_consulta, ':lblUnidade_consulta' => $lblUnidade_consulta, ':date_consulta' => $date_consulta, ':name_veterinario' => $name_veterinario 
    ));
    echo "Sua consulta foi marcada!";    
    print "<script type='text/javascript'>location.href='principal.php?link=2'</script>";
} 
 else{
}


















?>