<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--link rel="stylesheet" href="css/style.css"-->     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pets  </title>
    <!--?php
    $txt_email= $_GET['txt_nomeCad']; echo $txt_nomeCad;
    ?-->
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

.login{
margin-left: 40em;
margin-top: -4.2em;
margin-right: 3em;
font-size: 15px; 
float:right;
} 



.login a{
color: #fff;
text-decoration: none;
font-family: 'Montserrat';
}

.login a:hover{
text-decoration: none;
}
.imgWelcome figure{
text-align: center;
margin-top: 3.7em;

}
.imgWelcome img{
border-radius: 12px;
}

.secWelcome{
text-align: center;
padding: 40px;
}
.secWelcome h1{
padding-bottom: 25px;
font-family: 'Montserrat';
font-size: 20px;
}
.secWelcome div{
font-family: 'Montserrat';
color: #573838;
font-size: 18px;

}
.imgConsulta figure{
text-align: center;
margin-top: 2em;
}

.secConsulta{
text-align: center;
padding: 40px;
}
.secConsulta ul{list-style: none;}
.secConsulta a{text-decoration: none; color: #000;}
.secConsulta a:link, a:visited, a:active {
text-decoration: none;
}
.secConsulta ul li a:hover{
font-size: 105%;    
}

.secConsulta h1{
padding-bottom: 25px;
font-family: 'Montserrat';
font-size: 20px;
margin-right: 28em;
}

.secConsulta div{
font-family: 'Montserrat';
color: #573838;
font-size: 18px;
margin-right: 9.6em;
margin-left: 10em;
}

.secAtendimento h1{
padding-top: 25px;
font-family: 'Montserrat';
font-size: 20px;
text-align: center;
}

.secAtendimento div{
text-align: center;
font-family: 'Montserrat';
padding-top: 18px;
color: #573838;
font-size: 18px;

 }

.ImgAtendimento{
padding-top: 25px;
text-align: center;

}

.ImgAtendimento h1{
font-size: 16px;
font-family: 'Montserrat';

 }

.areaAtendimento{
    float:left;
    padding-top: 3em;
    margin-left: 12em;
}
.areaTexto_atendimento h1{
    float:left;
    padding-top: 4.3em;
    margin-left: 1em;
    font-family: 'Montserrat';
    font-size: 16px;
}
.areaEmail{
    float:left;
    margin-left: 37em;
    padding-top: 3em;
}
.areaTexto_email h1{
    float:left;
    font-family: 'Montserrat';
    font-size: 16px;
    padding-top: 4.3em;
    padding-left: 20px;
}

.areaQuemsomos{
    text-align: center;
    padding-top: 30px;
    margin-right: 5em;

}

.areaQuemsomos h1{
    padding-right: 4em;
    padding-bottom: 2em;
    margin-top: 10em;
    margin-left: 35em;
    font-family: 'Montserrat';
    font-size: 20px;
}

.areaQuemsomos img{
float: left;
margin-left: 7em;
margin-top: -10.7em;
border-radius: 12px;

}

#areaTexto_quem{
    padding-top: 5px;
    margin-left: 35em;
    font-family: 'Montserrat';
    color: #573838;
    font-size: 18px;
}

footer{ 
 width: 100%;
background-color: #12664F;
color: #fff;
font-size: 14px;
font-family: 'Montserrat';
height: 2.5em;
margin-top: 10em;
text-align: center;
padding-top:15px;
}  
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  margin-right: 10em;
  margin-top: 6em;
  padding: 15px 15px 0px 15px;
  font-family: 'Montserrat';
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
  width: 330px;
  height: 280px;
  border: 2px solid #000;
  color: #000;
  background-color: #fff;
}

.modal form input{
    width: 180px;
    height: 25px;
    margin-bottom: 20px;
    padding-left: 5px;
}

.modal:target {
  opacity: 1;
  pointer-events: auto;
}

.modal > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 15px 20px;
  background: #fff;
}

.modal p{
    margin-bottom: 1em;
    margin-top: 0em;
    font-size: 16px;
}
.modal h2{
    margin-top: 1em;
    margin-bottom: 1em;
    font-size: 18px;

}

.fechar {
  position: absolute;
  width: 25px;
  right: -15px;
  top: -20px;
  text-align: center;
  line-height: 30px;
  margin-top: 5px;
  background: #ff4545;
  border-radius: 70%;
  font-size: 16px;
  color: #8d0000;
}

#btn-entrar{
    width: 70px;
    height: 30px;
    background-color:  #12664F;
    color: #fff;
    font-family: 'Montserrat';
    padding: 5px 5px 5px 5px;
    border-radius: 5px;
}


.modal a{
    text-decoration: none;
    color: #000;
    font-size: 100%;
}
.modal a:link, a:visited, a:active {
text-decoration: none;
}

.modal a:hover{
    font-size: 105%;
}

.modalCad{
    position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  margin-right: 10em;
  margin-top: 6em;
  padding: 15px 15px 0px 15px;
  font-family: 'Montserrat';
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
  width: 330px;
  height: 400px;
  border: 2px solid #000;
  color: #000;
  background-color: #fff;
}
.modalCad form input{
    width: 180px;
    height: 25px;
    margin-bottom: 20px;
    padding-left: 5px;
}

.modalCad:target {
  opacity: 1;
  pointer-events: auto;
}

.modalCad > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 15px 20px;
  background: #fff;
}

.modalCad p{
    margin-bottom: 1em;
    margin-top: 0em;
    font-size: 16px;
}
.modalCad h2{
    margin-top: 1em;
    margin-bottom: 1em;
    font-size: 18px;
}

#btn-cadastrar{
    width: 108px;
    height: 30px;
    background-color:  #12664F;
    color: #fff;
    font-family: 'Montserrat';
    padding: 5px 5px 5px 5px;
    border-radius: 5px;
}



    

</style>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

<body>
    <header>       
        <nav>
            <ul>
                
                <li><a href="principal.php">Home</a></li>
                <li><a href="#consulta">Consulta</a></li>
                <li><a  href="#atendimento">Atendimento</a></li>
        </ul>
        </nav>
        <section class="logoWeb">
            <img src="img/logo_web.png" alt="" width="450" height="300">
        </section>
      
    </header>
    <div class=login>
    <h3><a href="#abrirModal" id="#login">LOGIN</a></h3>
    <h3><a href="doLogout.php">LOGOUT</a></h3>
    </div>
    <section class="modal" id="abrirModal">
        <a href="#fechar" title="Fechar" class="fechar">X</a>
  <h2>Entre na sua conta</h2>
  <form id="frmLogin" name="frmLogin" action="opLogin.php" method="post">
                <p>Email:</p>
                <input type="email" placeholder="Insira seu email" name="txt_email" id="txt_email">
                <p>Senha:</p> 
                <input type ="password" placeholder="Insira sua senha" name="txt_senha" id="txt_senha">
                <input type="submit" name="" value="ENTRAR" id="btn-entrar">
                <div><a href="#abrirCadastro">Ainda não possui uma conta?</a></div>      
            </form>
     </section>

     <section class="modalCad" id="abrirCadastro">
        <a href="#fechar" title="Fechar" class="fechar">X</a>
  <h2>Cadastre sua conta</h2>
  <form id="frmCadastro" name="frmCadastro" action="opCadastro.php" method="post">
                <p>Nome:</p>
                <input type="text" name="txt_nomeCad" placeholder="Insira seu nome">
                <!--p>Usuário:</p>
                <input type="text" name="txt_userCad" placeholder="ex: joao14"-->
                <p>Email:</p>
                <input type="email"  name="txt_emailCad" placeholder="Insira seu email">
                <p>Senha:</p> 
                <input type ="password" name="txt_senhaCad" placeholder="Insira sua senha">
                <!--p>Data de nascimento:</p>
                <input type="date" name=""-->
                <input type="submit" name="" value="CRIAR CONTA" id="btn-cadastrar">
            </form>
     </section>
     
     
     <!--a href="#abrirModal">Open Modal</a-->


    <!--div id="abrirModal" class="modal"-->
  <!--a href="#fechar" title="Fechar" class="fechar">x</a>
  <h2>Entre na sua conta</h2>
  <form id="frmLogin" name="frmLogin" action="" method="post">
                <p>Email:</p>
                <input type="email"  name="" placeholder="Insira seu email">
                <p>Senha:</p> 
                <input type ="password" name="" placeholder="Insira sua senha">
                <input type="submit" name="" value="Login">
                <a href="#">Ainda não possui uma conta?</a>      
            </form>
</div-->
        <!--section class="login">
           <h3><a href="#">LOGIN</a></h3>
        </section>
        <section class="logoWeb">
            <img src="img/logo_web.png" alt="" width="450" height="300">
        </section-->
        <section class="imgWelcome">    
            <picture>   
                <figure> 
                 <img src="img/img_welcome2.jpg" alt="" width="700" height="370"> 
                </figure>  
           </picture>     
       </section>
       <section class="secWelcome">
           <h1>Seja bem-vindo ao Pets</h1>
           <div><p>Aqui você pode marcar uma consulta para seu bichinho, 
            com profissionais qualificados, e sempre prezando o seu
            bem-estar.</p></div>
       </section>
       <section class="imgConsulta" id="consulta">
            <figure>
                <picture>
                    <img src="img/img_consulta.png" alt="" width="980" height="380">
                </picture>
            </figure>
       </section>
       <section class="secConsulta">
        <ul>
            <h1><li><a href="frmRealizarConsulta.php"> Marque uma consulta para seu pet.</a></li></h1>
        </ul>
        <div>A consulta veterinária é realizada em horário agendado para melhor atender às suas necessidades. Contamos com uma equipe de médicos veterinários altamente qualificada 
          e selecionada,capazes de garantir um atendimento eficaz e de alta qualidade.</div>
    </section>
    <section class="secAtendimento">
        <a><h1>Atendimento</h1></a>
        <div name="atendimento">Entre em contato conosco.</div>
    </section>
    <section>
           <div class="areaAtendimento" id="atendimento">
             <img src="img/telefone.png" alt="" width="64" height="64">
            </div>
            <div class="areaTexto_atendimento">
                 <h1>(11)2732-7463</h1>
            </div>   
            <div class="areaEmail">
              <img src="img/message.png" alt="" width="64" height="64">
            </div>
            <div class="areaTexto_email">
                 <h1>clinicapets@gmail.com</h1>
            </div>
    </section>
    <section class="areaQuemsomos">
        <h1>Quem somos</h1>
        <div id="areaTexto_quem">Fundada em 2015, a clínica veterinária Pets atua na aréa de medicina animal, com excelência junto a ótimos profissionais, e sempre a disposição. Temos um ambiente controlado, sempre visando a segurança e conforto de seu pet.<br>
            </div>
            <img src="img/img_quemsomos_1.jpg" alt="" >
    </section>
    <footer>
        <div>Copyright© 2021 Pets - Todos os direitos reservados</div>
    </footer>
</body>
</html>