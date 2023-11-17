<?php

include_once("conexao.php");
$filtro = -1;
$filtro = isset ($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from feedbacks where feedback like '%$filtro%' order by login";
$consulta = mysqli_query($conexao, $sql);
$qtd_feedbacks = mysqli_num_rows($consulta);

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hike Celulares</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body id="início">

  <header class="header">
    <img src="img/Footer.png" class="tamanho">

    <nav class="position3" id="menu">
      <div>
        <ul class="menu">
          <li>
            <p id="lista"><i class="bi bi-list"></i></p>
              <ul class="ul-menu">
              <a href="#desbloqueio">
              <li>
                <p class="b"><i class="bi bi-unlock-fill" id="espaço"></i>Desbloqueio de aparelhos</p>
              </li>
              </a>
              <a href="personalização.html">
              <li>
                <p class="b"><i class="bi bi-pencil-fill" id="espaço"></i>Personalização de copos</p>
              </li>
              </a>
              <a href="#promoções">
              <li id="espaço2">
                <p class="b"><i class="bi bi-cash-coin" id="espaço"></i>Promoções</p>
              </li>
              </a>
              <a href="catálogo.html">
              <li id="espaço2">
                <p class="b"><i class="bi bi-file-ruled" id="espaço"></i>Catálago</p>
              </li>
              </a>
            </ul>
          </li>
            <li class="oq">
              <p class="a"><i class="bi bi-journals" id="espaço"></i>O que fazemos?</p>
              <ul class="ul">
                <a href="#manutenção" class="t">
                  <li class="transform2">
                    <p class="a" id="aumentar"><i class="bi bi-tools" id="espaço"></i>Manutenção de aparelhos celulares</p>
                  </li>
                </a>
                <a href="#vendas" class="t">
                  <li class="transform2">
                    <p class="a"><i class="bi bi-cart3" id="espaço"></i>Vendas de capas e películas</p>
                  </li>
                </a>
                <a href="#gravação" class="t">
                  <li class="transform2">
                    <p class="a"><i class="bi bi-pencil-square" id="espaço"></i>Gravação a laser</p>
                  </li>
                </a>
            </ul>
            </li>
          <a href="index.html">
            <li>
              <p class="a"><i class="bi bi-house-fill" id="espaço"></i>Início</p>
            </li>
          </a>
          <a href="#sobre">
            <li>
            <p class="a"><i class="bi bi-info-circle" id="espaço"></i>Sobre</p>
            </li>
          </a>
          <a href="https://wa.me/554699372013">
            <li>
              <p class="a"><i class="bi bi-whatsapp" id="espaço"></i>Contato</p>
            </li>
          </a>
        </ul>
      </div>
    </nav>
  </header>
  <img src="img/LogoHike2.png" class="Logo">
  <p><br><br><br><br></p>

  <div class="align-section">
    <section class="fundo-login">
      <h1>Deixe seu Feedback</h1>
      <hr id="color-hr"><br><br>

      <form method="post" action="processa.php">
      Nome de Usuário<br>
      <input type="text" name="login" class="campo" maxlength="50" required><br>
      Feddback<br>
      <input type="text" name="feedback" class="campo" maxlength="255" required>

      <br><br>
      <input type="reset" value="Limpar" class="btn">
      <input type="submit" value="Salvar" class="btn">
      </form>
    </section>
  </div>
  <div class="text-align-center">
    <i>
      <br><h2><i class="títulos">Feedbacks:</i></h2><br>
      <form method="get" action=""><h4>
      Pesquisar palavra:</h4>
        <input type="text" name="filtro" class="campo"><br>
        <input type="reset" value="limpar" class="btn">
        <input type="submit" value="Pesquisar" class="btn">
        
      </form>
        
      <?php
      if($filtro == -1){

        print " Resultados de pesquisa com a palavra <b>&#34$filtro&#34<b>.<br><br>";
        print "<p>$qtd_feedbacks feedbacks</p>";
        print "<br><hr>";

        while($exibirRegistros = mysqli_fetch_array($consulta)){

        $login = $exibirRegistros[0];
        $feedback = $exibirRegistros[1];

        
        print "$login:<br>";
        print "$feedback<br><hr>";

        
        }
      }else{
        print " Resultados de pesquisa com a palavra <b>&#34$filtro&#34<b>.<br><br>";
        print "<p>$qtd_feedbacks feedbacks</p>";
        print "<br><hr>";

        while($exibirRegistros = mysqli_fetch_array($consulta)){

        $login = $exibirRegistros[0];
        $feedback = $exibirRegistros[1];

        
        print "$login:<br>";
        print "$feedback<br><hr>";
        }
      }
        mysqli_close($conexao);

      ?>
        
    </i>
  </div>

</body>
</html>