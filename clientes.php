<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Trabalho | Login</title>
  <meta name="description" content="Trabalho de Implementação Web">
  <meta name="author" content="Ana Maganha e Horus Christian">

  <meta property="og:title" content="A Basic HTML5 Template">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="Trabalho de Implementação Web">
  <meta property="og:image" content="image.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
  <div class="header">
    <div class="navbar">
      <div class="navbar__wrapper">
        <nav class="navbar__menu"><a class="navbar__brand" href="siteHome.html">Sistema de Entrada<img src="#" alt=""/></a>
          <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
        </nav>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="topo">
  <form class="search-form">
  <input type="search" value="" placeholder="Procurar cliente" class="search-input">
  <button type="submit" class="search-button">
    <svg class="submit-button">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use>
    </svg>
  </button>
 
</form>
<a href="" class="acoes ripple ripple-jquery" style="text-decoration: none;text-align: center;display: flex;justify-content: center;width: 120px;align-items: center;text-align: center;margin: auto;" data-ripple-color="#FFF">Adicionar</a>
</div>

<svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" display="none">
    <symbol id="search" viewBox="0 0 32 32">
        <path d="M 19.5 3 C 14.26514 3 10 7.2651394 10 12.5 C 10 14.749977 10.810825 16.807458 12.125 18.4375 L 3.28125 27.28125 L 4.71875 28.71875 L 13.5625 19.875 C 15.192542 21.189175 17.250023 22 19.5 22 C 24.73486 22 29 17.73486 29 12.5 C 29 7.2651394 24.73486 3 19.5 3 z M 19.5 5 C 23.65398 5 27 8.3460198 27 12.5 C 27 16.65398 23.65398 20 19.5 20 C 15.34602 20 12 16.65398 12 12.5 C 12 8.3460198 15.34602 5 19.5 5 z" />
    </symbol>
</svg>


  <div id="demo">
  <div class="table-responsive-vertical shadow-z-1">

  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          
          <th>Nome</th>
          <th>Ações</th>
         
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-title="Name">Material Design Color Palette</td>
          <td data-title="Link" class='acoes-content'>
            <div class="content">
                <a href="" class="acoes ripple ripple-jquery" data-ripple-color="#FFF">Editar</a>
                <a href="" class="acoes ripple ripple-jquery" data-ripple-color="#FFF">Excluir</a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
</div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="assets/js/index.js"></script>
    <footer style="margin-top: 18em;">
        <p>Todos os direitos reservados.</p>
    </footer>
  </body>
  </html>
