<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GameX!</title>
    <link rel="shortcut icon" href="img/controle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-color: #6FFF35;
    width: 1000px;
    height: 665px;
    margin-left:auto;
    margin-right:auto;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
    box-shadow:  27px 27px 54px #0f1010,
             -27px -27px 54px #3b4040;
    margin-bottom:100px;
    margin-top:100px;
}

/*titulo do formulário*/
#title{
    padding: 1em;
    margin-left:5em;
    color: #95FD6B;
    font-size: 60px;
    font-family: Franklin Gothic Medium;
}

#title:hover{
    letter-spacing:1px;
    transition: 600ms;
    padding: 1em;
    margin-left:4.9em;
    color: #6FFF35;
    font-size: 60px;
    font-family: Franklin Gothic Medium;
}
/*personalização das labels que estão acima de cada input presente no formulário*/
#frm{
    margin-top: auto;
    align-items: center;
    color: #6FFF35;
}

</style>

<div id="divform">
    <h1 id="title">
        Sobre Nós
    </h1>
</div>

</body>
</html>