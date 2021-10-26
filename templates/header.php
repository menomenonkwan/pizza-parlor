<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PizzaTime</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
    :root {
      --orange: #f97432;
    }
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    .brand {
      background: var(--orange) !important;
    }
    .brand-text, .mobile-icon {
      color: var(--orange) !important;
    }
    form {
      max-width: 460px;
      margin: 20px auto;
      padding: 20px;
    }
    footer {
      margin-top: auto;
    }
  </style>
</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">PizzaTime</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add.php" class="btn brand z-depth-0">Add A Pizza</a></li>
      </ul>

      <a href="#" class="mobile-icon right sidenav-trigger" data-target="mobile-menu">
        <i class="material-icons">menu</i>
      </a>
      <ul class="sidenav mobile-nav grey lighten-2" id="mobile-menu">
        <li><a href="add.php" class="btn brand z-depth-0">Add A Pizza</a></li>
      </ul>
    </div>
  </nav>