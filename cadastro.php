<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Trabalho | Cadastro</title>
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
    <form>
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Nome Completo</label>
      </div>
      <div class="group-container">
        <div class="group">
            <input required type="text"><span class="highlight"></span><span class="bar"></span>
            <label>Endereço</label>
        </div>
        <div class="group">
            <input required type="number"><span class="highlight"></span><span class="bar"></span>
            <label>Número</label>
        </div>
      </div>
      
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Tipo de Cliente</label>
      </div>
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>CPF</label>
      </div>
      <div class="group-container">
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Cidade</label>
      </div>
      <div class="group">
        <div class="wrap">
            <div class="select__wrapper">
                <select class="select" name="" id="" required>
                <option value="" disabled selected></option>
                <option value="Value 1">Value 1</option>
                <option value="Value 2">Value 2</option>
                </select>
                <label class="select__label">Choose service</label>
            </div>
            </div>
        <label>UF</label>
      </div>
      </div>
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Telefone</label>
      </div>
      <div class="group">
        <input required type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Inscrição Estadual</label>
      </div>
     
      <button type="button" class="button buttonBlue">Cadastrar
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
      </button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="assets/js/index.js"></script>
    <footer>
        <p>Todos os direitos reservados.</p>
    </footer>
  </body>
  </html>
