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
    <?php
         include("./controllers/connect.php");
     
         $sql = "SELECT * FROM users WHERE id='".$_GET['id']."'";
         
         $result = $connect->query($sql);
         $data = mysqli_fetch_array($result);
         mysqli_close($connect);
    ?>
    <form action="./controllers/edit_controller.php" method="POST">
      <input type="text" name="id" value="<?php echo $_GET['id']?>" style="visibility:hidden;">
      <div class="group">
        <input required value="<?php echo $data['nome'] ?>" name="nome" type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Nome Completo</label>
      </div>
      <div class="group-container">
        <div class="group">
            <input required value="<?php echo $data['endereco'] ?>" name="endereco" type="text"><span class="highlight"></span><span class="bar"></span>
            <label>Endereço</label>
        </div>
        <div class="group">
            <input required value="<?php echo $data['numero'] ?>" name="numero" type="number"><span class="highlight"></span><span class="bar"></span>
            <label>Número</label>
        </div>
      </div>
      <div class="group">
        <div class="wrap">
            <div class="select__wrapper">
                <select class="select" name="tipo_cliente" id="" required  >
                <option value="" disabled selected></option>
                <option <?php if($data['tipo_cliente'] == 'pessoa_fisica') echo 'selected'; ?> value="pessoa_fisica">Pessoa física</option>
                <option <?php if($data['tipo_cliente'] == 'pessoa_juridica') echo 'selected'; ?> value="pessoa_juridica">Pessoa jurídica</option>
                </select>
                <label class="select__label">Tipo Cliente</label>
            </div>
        </div>
      </div>
      <div class="group">
        <input required value="<?php echo $data['cpf'] ?>" name="cpf" type="text"><span class="highlight"></span><span class="bar"></span>
        <label>CPF</label>
      </div>
      <div class="group-container">
      <div class="group" style="width:85%;">
        <input required value="<?php echo $data['cidade'] ?>" name="cidade" type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Cidade</label>
      </div>
      <div class="group" style="width:14%;">
        <div class="wrap" style="  margin-top: 1.5em;">
            <div class="select__wrapper">
                <select class="select" name="uf" id="" required >
                <option value="" disabled selected></option>
                <option <?php if($data['uf'] == 'PR') echo 'selected'; ?> value="PR">PR</option>
                <option <?php if($data['uf'] == 'PR') echo 'selected'; ?> value="SP">SP</option>
                </select>
                <label class="select__label">UF</label>
            </div>
          </div>
      </div>
      </div>
      <div class="group">
        <input required value="<?php echo $data['telefone'] ?>" name="telefone" type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Telefone</label>
      </div>
      <div class="group">
        <input required value="<?php echo $data['inscricao'] ?>" name="inscricao" type="text"><span class="highlight"></span><span class="bar"></span>
        <label>Inscrição Estadual</label>
      </div>
      <div class="group">
        <input required value="<?php echo $data['email'] ?>" name="email" type="email"><span class="highlight"></span><span class="bar"></span>
        <label>Email</label>
      </div>
      <div class="group">
        <input required value="" name="senha" type="password"><span class="highlight"></span><span class="bar"></span>
        <label>Senha</label>
      </div>
      <button type="submit" class="button buttonBlue">Editar registro
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
