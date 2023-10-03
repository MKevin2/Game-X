<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/controle.png">
    <title>GameX!</title>
</head>
<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

    <!--colocando a navbar do site-->
    <?php include 'nav.php'
    ?>

<!--Colocando a imagem de fundo na tela através do css-->
<style>
body{
    background-image: url("homeimg.gif");
}

/*div centralizada*/
#divform{
    float:right;
    padding: 1em;
    background-color: #6FFF35;
    width: 500px;
    height: 387px;
    margin-right: 8em;
    margin-top: 7.8em;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
    box-shadow:  27px 27px 54px #0f1010,
             -27px -27px 54px #3b4040;
}

/*titulo do form*/
#title{
    padding: 1px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #95FD6B;
    font-size: 30px;
    font-family: Franklin Gothic Medium;
}

/*subtitulo do form*/
#subtitle{
    padding:10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #6FFF35;
    font-size: 20px;
    font-family: Franklin Gothic Medium;
}

input[type=text] {
  border: none;
  border-bottom: 2px solid green;
}

input[type=text]:focus {
  border: 3px solid green;
}

/*imput de texto para a avaliação do site*/
textarea {
  width: 60%;
  height: 150px;
  padding: 10px 15px;
  box-sizing: border-box;
  border: 3px solid white;
  color: #fff;
  border-radius: 4px;
  background-color: #6FFF35;
  resize: none;
}

/*personalização das avaliações feitas por estrelas*/
.estrelas input[type=radio] {
  display: none;
}
.estrelas label i.fa:before {
  content:'\f005';
  color: #FC0;
}
.estrelas input[type=radio]:checked ~ label i.fa:before {
  color: #CCC;
}

/*personalização dos botões*/
#click{
    border-color: #6FFF35;
    background-color: #ffffff;
    color: #6FFF35;
}

#click:hover{
    transition: 400ms;
    background-color: #6FFF35;
    color:#fff;

}

/*a segunda div centralizada*/
#divform2{
    padding: 1em;
    background-color: #6FFF35;
    width: 500px;
    height: 387px;
    margin-left: 8em;
    margin-top: 9em;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
    box-shadow:  27px 27px 54px #0f1010,
    -27px -27px 54px #3b4040;
}

/*formas de entrar em contato*/
.cont{
    text-decoration: none;
    list-style-type: none;
    margin-left: auto;
    margin-right: auto;
    padding: 0;
    width: 250px;
    background-color: #f1f1f1;
    overflow: auto;
}

li a{
    text-decoration:none;
    display: block;
    color: #000;
    padding: 10px 5px 8px 16px;
    overflow: auto;
}

/*colocando cor no link*/
li a:hover {
    text-decoration:none;
    background-color: #555;
    color: #6FFF35;
}
</style>

<!--Form com as informações-->
<div id="divform">

    <!--Titulo-->
    <h1 id="title">
        Deixe sua avaliação!
    </h1>

    <!--Avaliações-->
    <center>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <div class="estrelas">
        <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
        <label for="cm_star-1"><i class="fa"></i></label>
        <input type="radio" id="cm_star-1" name="fb" value="1"/>
        <label for="cm_star-2"><i class="fa"></i></label>
        <input type="radio" id="cm_star-2" name="fb" value="2"/>
        <label for="cm_star-3"><i class="fa"></i></label>
        <input type="radio" id="cm_star-3" name="fb" value="3"/>
        <label for="cm_star-4"><i class="fa"></i></label>
        <input type="radio" id="cm_star-4" name="fb" value="4"/>
        <label for="cm_star-5"><i class="fa"></i></label>
        <input type="radio" id="cm_star-5" name="fb" value="5"/>
    </div>

    <!--Form para a avaliação escrita sobre o site-->
    <form action="avaliacao.php" name="enviaPost">
        <textarea name="contpost" id="textarea-post">Gostei pois...</textarea>
    </form>

    <!--Função do javacript para enviar o texto contido na textarea para outra página-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
    document.onkeyup=function(e){
     if(e.which == 13){
        if(document.getElementById('textarea-post').value == ""){
        } else {
            document.enviaPost.submit();
        }
      }
    }
    </script>
    <center>

    <p id="subtitle">
        Observação: Para enviar sua avaliação
        <br>
        sobre o site, pressione "Enter"
    </p>
    <!--Função JavaScript ligada a um Button para recarregar a página (o botão redefinir)-->
    <button type="button" id="click" onClick="recarregarAPagina()">Redefinir</button>
    <script>
        function recarregarAPagina(){
        window.location.reload();
        } 
    </script>
</div>

<!--Form com os contatos-->
<div id="divform2">
    <center>
    <h1 id="title">
        Entrar em contato conosco:
    </h1>
    </center>
    <br>

    <ul class="cont">
            <li><a href="https://api.whatsapp.com/send?phone=5511980987558&text=Ol%C3%A1%21"><img src="img/whatsapp.png"> WhatsApp - 11 98098-7558</a></li>
            <li><a href="https://instagram.com/_math2?igshid=MzNlNGNkZWQ4Mg%3D%3D"><img src="img/instagram2.png"> Instagram - @gamex_inc</a></li>
            <li><a href="https://web.telegram.org/a/"><img src="img/telegram.png"> Telegram - 11 98098-7558</a></li>
            <li><a href=""><img src="img/email.png"> E-Mail - gamex23@gmail.com</a></li>
            <li><a href=""><img src="img/telefone.png"> Telefone - (11) 3916-5212</a></li>
    </ul>

    <br>

    <center>
    <!--
    <input type="submit" id="click" onclick="enviar();" value="Enviar!"/> -->

    <a href="https://api.whatsapp.com/send?phone=5511980987558&text=Ol%C3%A1%21">
    <input type="button" id="click" value="Contate o Criador!">
    </a>
    </center>
</div>

</body>
</html>