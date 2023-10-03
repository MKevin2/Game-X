<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/controle.png">
    <title>Confirmação</title>
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

/*titulo do formulário*/
#title{
    margin-top: auto;
    margin-left: auto;
    margin-right: auto;
    color: #6FFF35;
    font-size: 30px;
    font-family: Franklin Gothic Medium;
}

/*personalização das labels que estão acima de cada input presente no formulário*/
#frm{
    margin-top: auto;
    align-items: center;
    color: #6FFF35;
}

/*personalização da tela de resultados*/
#resultado{
    padding: 2em;
    background-color: #151717;
    width: 500px;
    height: 292px;
    margin-left: 26em;
    margin-top: 11em;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
    box-shadow:  27px 27px 54px #0f1010,
    -27px -27px 54px #3b4040;
    color: #6FFF35;
    margin-left: auto;
    margin-right: auto;
    justify-content: center;
}   

/*configuração do botão, com sua animação de fade*/
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

    <div id="resultado">
        <h1 id="title">Dados Enviados com Sucesso!</h1>
        <br>
        <?php
            $nome = $_POST["txtnome"];
            $senha = $_POST["txtsenha"];
            $sexo = $_POST["rdbsexo"];
            $estado = $_POST["sltestado"];

            echo "Nome enviado: {$nome}<br><br>";
            echo "Senha enviada: {$senha}<br><br>";
            echo "Sexo enviado: {$sexo}<br><br>";
            echo "Estado enviado: {$estado}<br><br>";
        ?>
        <center>
            <button id="click" onClick="voltar()">Voltar!</button>
        </center>
    </div>

    <!--Função do Javascript para chamar outra tela-->
    <script>
        function voltar(){
        window.location.href = "logon.php";
        } 
    </script>

</body>
</html>