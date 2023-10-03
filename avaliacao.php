<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameX!</title>
    <link rel="shortcut icon" href="img/controle.png">
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
    padding: 1em;
    background-color: #6FFF35;
    width: 500px;
    height: 455px;
    margin-left: 31em;
    margin-top: 5em;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
box-shadow:  27px 27px 54px #0f1010,
             -27px -27px 54px #3b4040;
}

/*titulo do formulário*/
#title{
    padding: 1px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #95FD6B;
    font-size: 30px;
    font-family: Franklin Gothic Medium;
}

/*personalização das labels que estão acima de cada input presente no formulário*/
#frm{
    margin-top: auto;
    align-items: center;
    color: #6FFF35;
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
</style>

<!--Agradecimento pela avaliação-->
<div id="divform">
    <h1 id="title">
        Obrigado pela avaliação!
    </h1>
    <br>
    <center>
    <img src="img/avaliacao.GIF" width="330px" height="300px">
    </center>

    <br>
    <!--Botão de voltar-->
    <center>
        <button id="click" onClick="voltar()">Voltar!</button>
    </center>

    <!--Função do Javascript para chamar outra tela-->
    <script>
        function voltar(){
        window.location.href = "contato.php";
        } 
    </script>
</div>
</body>
</html>