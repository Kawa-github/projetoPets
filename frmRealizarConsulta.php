<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
    <link rel="stylesheet" href="css/style_admin.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
body {

    background: #E1DBDB;
    
}

header{
    background: #12664F;
    border: 0.0625em solid #000;
    width: 100%;
    height: 5em;
}

nav {
float: left;
margin: 0 0 0 20em;
}

nav ul{
margin-top: 1.7em;   
list-style: none
}

nav ul li{
display: inline;
margin-left: 55px;
padding: 12px;
margin-right: 0;

} 

nav ul li a{
text-decoration: none;
color: #FFFFFF;
font-size: 18px;
font-family: 'Montserrat';
} 

.logoWeb{
        margin-right: 50em;
        margin-left: -9em;
        margin-top: 5em;
    }


    .logoWeb img{
        margin-top: -11.3em;
    }

    .formConsulta{
        background-color: #fff;
        color: #000;
        width: 500px;
        height: 295px;
        border: 2px solid #000;
        margin-top: 4em;
        margin-left: 39em;
        margin-bottom: 10em;
        font-family: 'Montserrat';
        padding: 35px 1px 0px 35px;
        
    }

    .formConsulta form input{
    margin-bottom: 20px;
    padding-left: 5px;
    width: 180px;
    height: 25px;
    margin-right: 15px;
}

.formConsulta select{
    margin-right: 9px;
}
.formConsulta p{
    margin-bottom: 1em;
    margin-top: 1.7em;
    font-size: 16px;
}
.formConsulta h2{
    margin-top: 1em;
    margin-bottom: 1em;
    font-size: 18px;
}

#btn-confirmar{
    width: 100px;
    height: 30px;
    background-color:  #12664F;
    color: #fff;
    font-family: 'Montserrat';
    padding: 5px 5px 5px 5px;
    border-radius: 5px;
}


.formConsulta select{
width: 140px;
height: 25px;
}

.lblVet{
    padding-top: 10em;
}

</style>
<header>
<nav>
    <ul>
           <li><a href="principal.php">Home</a></li>
           <li><a href="#consulta">Consulta</a></li>
           <li><a style="margin: 0 0 0 0;" href="#atendimento">Atendimento</a></li>
    </ul>
</nav>
    <section class="logoWeb">
       <img src="img/logo_web.png" alt="" width="450" height="300">
    </section>
</header>
<section class="formConsulta">
<h2>Marque sua consulta</h2>
  <form id="frmCadastro" name="frmCadastro" action="opRealizarConsulta.php" method="post">
                <!--p>Nome:</p>
                <input type="text" name="txt_nomeCon" placeholder="Insira seu nome"-->
                
                <label for="">Especialidade:</label>
                <select name="lblTipo_consulta" id="lblTipo_Consulta">
                <option value="" selected>Selecione</option>
                <option value="Exames de sangue">Exames de sangue</option>
                <option value="Consulta de rotina">Consulta de rotina</option>
                <option value="Exames de imagem"> Exames de imagem</option>
                <option value="Ultrassom">Ultrassom</option>
                </select>
                
                
                <label for="">Unidade:</label>
                <select name="lblUnidade_consulta" id="lblUnidade_consulta">
                    <option value="Itaquera">Itaquera</option>
                    <option value="Jardim Iguatemi">Jardim Iguatemi</option>
                    <option value="Tatuapé">Tatuapé</option>
                    <option value="São Mateus">São Mateus</option>   
                </select>

              
                <p>Dia e horário:</p>
                <input type="datetime-local" name="date_consulta" id="date_consulta" min="2021-05-21T00:00" max="2021-12-15T00:00">

                <label for="" class="lblVet">Veterinário(a):</label>
                <select name="name_veterinario" id="name_veterinario">
                <?php
                    include "conexao.php";

                    $sql = 'select nome from veterinario';
                    $exec = $db->query($sql);

                    while($line = $exec->fetch(PDO::FETCH_ASSOC)){
                    ?>

                    <option value="<?php echo $line['nome']; ?>"><?php echo $line['nome']; ?></option>
                    
                    <?php } ?>
                </select>
                    <!--option value="">Dr.Rodrigo</option>
                    <option value="">Dra.Roberta</option>
                    <option value="">Dra.Raquel</option>
                    <option value="">Dr.Vinicius</option--> 
                <input type="submit" name="" value="CONFIRMAR" id="btn-confirmar">
            </form>
</section>