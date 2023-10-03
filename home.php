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

<style>
  body{
    background-image: url("homeimg.gif");
  }
  .cards-container {
    position: relative;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .card {
    width: 300px;
    background-color: #fff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
  }
  
  .card:hover{
    width: 305px;
    transition: 450ms;
    background-color:#F1F1F1;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
  }
  
  .plan-title {
    font-size: 24px;
    text-align: center;
    margin-bottom: 10px;
    font-family: 'Franklin Gothic Medium';
  }
  
  .plan-price {
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color:#6FFF35;
  }
  
  .plan-features {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
    font-family: Cambria;
  }
  
  .plan-features li {
    margin-bottom: 8px;
  }
  
  .select-btn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #95FD6B;
    color: #ffffff;
    text-align: center;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease;
    border-color: #FF5C00;
    border-radius:5px;
  }
  
  .select-btn:hover {
    background-color: #6FFF35;
  }

  input[type=text] {
    border: none;
    border-bottom: 2px solid green;
  }

  input[type=text]:focus {
    border: 3px solid green;
  }


  #title{
    padding: .5em;
    margin-left:6.5em;
    color: #6FFF35;
    font-size: 60px;
    font-family: Franklin Gothic Medium;
    border-color:#fff;
  }

  #title{
    animation-duration: 3s;
    animation-name: slidein;
    animation-iteration-count: infinite;
    animation-direction: alternate;
  }
  @keyframes slidein {
  from {
    margin-left: 46%;
    width: 300%;
  }

  to {
    margin-left: 10%;
    width: 100%;
  }
  }

</style>

<h1 id="title"> Bem vindo, Jogador! </h1>
<section id="planos-de-treino">
<div class="cards-container">
    <div class="card">
      <h2 class="plan-title">Plano Iniciante</h2>
      <p class="plan-price">R$19,90/mês</p>
      <ul class="plan-features">
        <li>Acesso a download de jogos exclusivos!</li>
        <li>Antecipação de conteúdos!</li>
        <li>Renovação todo fim do mês</li>
      </ul>
      <button class="select-btn">Selecionar</button>
    </div>
  
    <div class="card">
      <h2 class="plan-title">Plano Mestre</h2>
      <p class="plan-price">R$69,00/ano</p>
      <ul class="plan-features">
        <li>Direito a todos os equipamentos</li>
        <li>Aulas especiais semanalmente</li>
        <li>Consultas de graça com um Nutricionista da academia</li>
      </ul>
      <button class="select-btn">Selecionar</button>
    </div>
  
    <div class="card">
      <h2 class="plan-title">Plano de Ascensão</h2>
      <p class="plan-price">R$39,90/mês</p>
      <ul class="plan-features">
        <li>Todos os direitos dos planos anteriores</li>
        <li>Suplementos com um desconto de até 30% do valor inicial</li>
        <li>Participação especial em eventos futuros</li>
      </ul>
      <button class="select-btn">Selecionar</button>
    </div>
</div>

</body>
</html>