<!--O código php que fica aqui está no arquivo index.php, não foi incluido aqui porque atrapalha a execução desta aplicação utilizando o servidor da replit-->
<html lang="pt-br">
  <head>      
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Minha Agenda</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--CSS-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
          <img src="<?= $BASE_URL ?>img/logo.png" alt="Agenda">
        </a>
        <div class="navbar-nav">
          <a class="nav link active" id="home link" href="<?= $BASE_URL ?>index.php">Agenda</a>
          <a class="nav link active" id="home link" href="<?= $BASE_URL ?>create.php">Adicionar</a>
        </div>
      </nav>
    </header>



