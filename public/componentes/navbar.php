<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet"> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-family: 'Secular One';">Mountain</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
        <li class="navbar-item"><a <? if($pagina == "telaLogin.php"){echo 'class="nav-link active"';}else{echo'class="nav-link"';}?> href="../login/telaLogin.php">Inicio</a></li>
        <li class="navbar-item"><a <? if($pagina == "registro.php"){echo 'class="nav-link active"';}else{echo'class="nav-link"';}?> href="../registro/registro.php">Inscrever-me</a></li>
        </ul>
        <ul class="navbar-nav ml-auto mr-20">
        <li><a class="nav-link" href="https://github.com/Rafel460" target="_blank"><img src="https://img.icons8.com/material-rounded/24/000000/github.png"/></a></li>
        <li><a class="nav-link" href="https://www.reddit.com/user/Rafaelmonte" target="_blank"><img src="https://img.icons8.com/metro/26/000000/reddit.png"/></a></li>
        </ul>
  </div>
</nav>