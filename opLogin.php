
<?php
    include("conexao.php");
    $txt_email = $_POST['txt_email'];
    $txt_senha = $_POST['txt_senha'];

    $sql = "select * from usuarios where email = '$txt_email' and senha = md5('$txt_senha')";
    $resultado = $db->query($sql);
    $resultado = $resultado->fetch(PDO::FETCH_ASSOC);
    if(isset($resultado["id"])){
        $email = $resultado["email"]; 
       print "<script type='text/javascript'>location.href='principal.php?link=1&email=$email'</script>";
    }
    else{
        echo "Usuário não cadastrado.";


         // print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'> 
        // <script type='text/javascript'>window.alert('Login ou senha não encontrado, tente novamente.')</script> ";   
    }

    /*if(!$txt_email || !$txt_senha)
{
	echo "Você deve digitar seu email e senha!";
	exit;
}*/

?>