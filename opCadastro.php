<?php
 include "conexao.php";
 $txt_nomeCad = $_POST["txt_nomeCad"];
 //$txt_userCad = $_POST["txt_userCad"];
 $txt_emailCad = $_POST["txt_emailCad"];
 $txt_senhaCad = $_POST["txt_senhaCad"];


 if(isset($_POST["txt_nomeCad"])){
    $cmd = $db->prepare('INSERT INTO usuarios(nome,email,senha) VALUES(:txt_nomeCad,:txt_emailCad, md5(:txt_senhaCad))');
    $cmd->execute(array(
    ':txt_nomeCad' => $txt_nomeCad, ':txt_emailCad' => $txt_emailCad, ':txt_senhaCad' => $txt_senhaCad
    ));    
    echo "Usuário cadastrado com sucesso!";
    print "<script type='text/javascript'>location.href='principal.php?link=2'</script>";
} 
 else{
    echo "Não foi possivel cadastrar.";
 }


?>