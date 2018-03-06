<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-4.0.0-beta.1.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <title>CALCOMP - Centro Acadêmico Livre da Computação</title>
  <style>
    body {
      text-align: justify;
      font-family: 'Quattrocento Sans', sans-serif;
    }

    #subtitlePrimary {
      font-family: 'Ubuntu', sans-serif;
    }

    

    #titlePrimary {
      /* font-family: 'Montserrat', sans-serif;*/
      /* font-family: 'Anton', sans-serif;*/
      font-family: 'Fredoka One', cursive;
    }

    @media (min-width: 544px) {
      h1 {
        font-size: 2rem;
      }
      /*1rem = 16px*/
      .imgMail {
        display: none !important;
      }
      .members {
        text-align: left !important;
      }
      .logoCalcomp {
        width: 31% !important;
        height: 14% !important;
        padding-top: 10px !important;
      }
      #contact {
        text-align: center;
      }
    }

    @media (max-width: 544px) {
      h1 {
        font-size: 3.5remrem;
      }
      .logoCalcomp {
        width: 22% !important;
        height: 23% !important;
        padding-top: 10px !important;
      }
      /*1rem = 16px*/
    }

    /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */

    @media (min-width: 768px) {
      #titlePrimary {
        font-size: 4rem;
      }
      /*1rem = 16px*/
    }

    /* Large devices (desktops, 992px and up) */

    @media (min-width: 992px) {
      #titlePrimary {
        font-size: 4.5rem;
      }
      /*1rem = 16px*/
    }

    /* Extra large devices (large desktops, 1200px and up) */

    @media (min-width: 1200px) {
      #titlePrimary {
        font-size: 5rem;
      }
      /*1rem = 16px*/
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>CALCOMP</strong>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="text-align:center;">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">SOBRE NÓS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">NOSSOS PROJETOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">FALE CONOSCO</a>
          </li>
          <li class="nav-item bg-primary">
            <a class="nav-link" target="_blank" href="http://calcomp.inf.furb.br/acredito/"><span style="font-weight:bold;">PROJETO ACREDITO</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center opaque-overlay" style="background-image: url(&quot;img/background.jpeg&quot;);">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 text-white">
          <h1 class="mb-4 text-light" id="titlePrimary">
            <span style="font-weight:bolder !important;">CALCOMP FURB</span>
          </h1>
        </div>
      </div>
    </div>
    <div id="about"></div>
  </div>
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary" style="font-weight:bolder;">SOBRE NÓS</h1>
          <br>
          <p class="">De acordo com a União Nacional dos Estudantes (UNE), um
            <strong>Centro Acadêmico (C.A.)</strong> é uma entidade que reúne os alunos de um determinado curso ou um departamento
            da universidade, para representar seus interesses, suas ideias, solucionar problemas e reivindicar os direitos
            dos estudantes. A direção do C.A. é escolhida por meio de eleições periódicas, entre chapas de alunos daquele
            curso. No Brasil, Centros Acadêmicos são regulamentados pela lei federal nº 7.395 de 31 de outubro de 1985 e
            reconhecidos pelo Código Civil Brasileiro como uma associação sem fins lucrativos. O
            <strong>CALCOMP</strong> é, portanto, a sua voz dentro da Fundação Universidade Regional de Blumenau (FURB).</p>
          <p class="lead m-0 members" style="font-weight:bolder;font-style:italic;"> •&nbsp;Lucas Eduardo Schlögl – Presidente (8ª Fase)
            <br>•&nbsp;João Paulo Serodio Gonçalves – Vice-Presidente (8ª Fase)&nbsp;</p>
        </div>
      </div>
    </div>
    <div id="projects"></div>
  </div>
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-light" style="font-weight:bolder;">NOSSOS PROJETOS</h1>
          <p class="lead text-light">Alguns projetos que o CALCOMP apoia, promove e/ou contribui para existir.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-4">
          <img class="img-fluid d-block rounded-circle mx-auto" src="img/hat_icon.png" width="60%" height="60%">
          <p class="text-light">
            <br>
            <b>SEMANA ACADÊMICA DE CIÊNCIA DA COMPUTAÇÃO</b>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <img class="d-block rounded-circle mx-auto img-fluid" src="img/beer_icon.png" width="60%" height="60%">
          <p class="text-light">
            <br>
            <b>STAMMTISCH UNIVERSITÁRIO: BCC E SIS</b>
          </p>
        </div>
        <div class="col-md-4 p-4">
          <img class="img-fluid d-block rounded-circle mx-auto" src="img/flisol_icon.png" width="60%" height="60%">
          <p class="text-light">
            <br>
            <b>FLISOL - Junto ao
              <a style="color:white;" href="http://www.hackerspaceblumenau.org/" target="_blank">Hackerspace Blumenau</a>
            </b>
          </p>
        </div>
      </div>
    </div>
    <div id="contact"></div>
  </div>
  <div class="py-5 text-white bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-dark" style="font-weight:bolder;">FALE CONOSCO</h1>
          <p class="text-dark">Envie-nos críticas, dúvidas e sugestões pelo formulário abaixo!</p>
          <form action="mail.php" method="post">
            <div class="form-group">
              <label for="name" class="text-dark">Seu nome</label>
              <input type="text" aria-required="true" required="" class="form-control" name="name" placeholder="Seu nome"> </div>
            <div class="form-group">
              <label for="email" class="text-dark">Email</label>
              <input type="email" aria-required="true" required="" class="form-control" name="email" placeholder="Seu email"> </div>
            <div class="form-group">
              <label for="bodyMail" class="text-dark">Crítica, dúvida ou sugestão</label>
              <textarea aria-required="true" required="" class="form-control" name="bodyMail"
                rows="3" placeholder="Escreva algo aqui..."></textarea> </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>
        </div>          
      </div>
    </div>
  </div>
  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com/calcomp.furb" target="_blank">
            <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://github.com/calcompfurb" target="_blank">
            <i class="fa fa-fw fa-github fa-3x text-white"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright <script>document.write(new Date().getFullYear());</script> CALCOMP - Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
  <a href="javascript:" id="return-top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </a>
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
