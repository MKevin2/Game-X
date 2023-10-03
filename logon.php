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
    padding: 1em;
    background-color: #6FFF35;
    width: 500px;
    height: 365px;
    margin-left: 31em;
    margin-top: 9em;
    border-radius: 21px;
    background: linear-gradient(145deg, #212424, #282b2b);
    box-shadow:  27px 27px 54px #0f1010,
             -27px -27px 54px #3b4040;
}

/*titulo do formulário*/
#title{
    margin-top: auto;
    margin-left: 167px;
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
/*cores de fundo dos estados presentes no select*/
#u{
    background-color:#6FFF35;
    color: #fff;
}

#d{
    background-color:#fff;
    color:#6FFF35;
}

/*personalização na fonte da caixinha do email*/
#text{
    color: #6FFF35;
}

#r{
    text-align: center;    
}

input[type=text] {
  border: none;
  border-bottom: 2px solid green;
}

input[type=password] {
  border: none;
  border-bottom: 2px solid green;
}

input[type=text]:focus {
  border: 3px solid green;
}

input[type=password]:focus {
  border: 3px solid green;
}
</style>

<div id="divform">
    <!--Titulo-->
    <h1 id="title"> Formulário </h1>

    <!--Labels acima dos inputs-->
    <form id="frm" name="frmcadastro" method="post" action="recebedados.php">
    <center>
    
    <!--Inicio das opções do formulário-->
    <label>Digite seu Nome: </label>
    <br>
    <input type="text" name="txtnome" id="text" method="post" placeholder="aluno" required/>
    <br>
    <br>
    <label>Digite sua Senha: </label>
    <br>
    <input type="password" name="txtsenha" id="senha" method="post" placeholder="aluno2023" required/>
    <br>
    <br>
    <input type="radio" name="rdbsexo" id="Masculino" method="post" value="M"/>
    <label for="Masculino">Masculino</label>
    <input type="radio" name="rdbsexo" id="Feminino" method="post" value="F"/>
    <label for="Feminino">Feminino</label>
    <br>
    <br>
    <label for="uftitle">Escolha seu Estado: </label>
    <br>

    <!--Select para os estados-->
    <select name="sltestado" method="post" id="uf">
        <option id="u">Acre (AC)</option>
        <option id="d">Alagoas (AL)</option>
        <option id="u">Amapá (AP)</option>
        <option id="d">Amazonas (AM)</option>
        <option id="u">Bahia (BA)</option>
        <option id="d">Ceará (CE)</option>
        <option id="u">Distrito Federal (DF)</option>
        <option id="d">Espírito Santo (ES)</option>
        <option id="u">Goiás (GO)</option>
        <option id="d">Maranhão (MA)</option>
        <option id="u">Mato Grosso (MT)</option>
        <option id="d">Mato Grosso do Sul (MS)</option>
        <option id="u">Minas Gerais (MG)</option>
        <option id="d">Pará (PA)</option>
        <option id="u">Paraíba (PB)</option>
        <option id="d">Paraná (PR)</option>
        <option id="u">Pernambuco (PE)</option>
        <option id="d">Piauí (PI)</option>
        <option id="u">Rio de Janeiro (RJ)</option>
        <option id="d">Rio Grande do Norte (RN)</option>
        <option id="u">Rio Grande do Sul (RS)</option>
        <option id="d">Rondônia (RO)</option>
        <option id="u">Roraima (RR)</option>
        <option id="d">Santa Catarina (SC)</option>
        <option id="u">São Paulo (SP)</option>
        <option id="d">Sergipe (SE)</option>
        <option id="u">Tocantins (TO)</option>
    </select>
    <br>
    <br>

    <!--Botão para enviar formulário prenchido-->
    <input type="submit" id="click" onclick="enviar();" value="Enviar!"/>
    
    <!--Função JavaScript ligada a um Button para recarregar a página (o botão redefinir)-->
    <button type="button" id="click" onClick="recarregarAPagina()">Redefinir</button>
    <script>
        function recarregarAPagina(){
        window.location.reload();
        } 
    </script>

    </center>
    </form>
</div>

</body>
</html>