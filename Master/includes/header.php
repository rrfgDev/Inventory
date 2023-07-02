<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Título da Página</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <!-- Font Awesome -->
  
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: rgba(255, 255, 255,0.80) !important;
    }

    .navbar {
      background-color: rgba(255, 255, 255,0.80) !important;
    }

    .navbar-light .navbar-nav .nav-link {
      color: black !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="#">
      <img src="./Master/img/logo ci horizontal.png" alt="Logomarca" height="69">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="signup.php">Cadastro</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Emprestimos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Relatorios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Administrador</a>
        </li>
      </ul>
    </div>
  </nav>
</body>
