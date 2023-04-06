<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Jumbotron Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    


    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">




<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#18bc9c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#18bc9c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      nav a{
    color: white;
}
    </style>


    <link href="jumbotron.css" rel="stylesheet">

  </head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-success bg-success">
      <a class="navbar-brand" href="index.php?uc=accueil">Ma bibliothèque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Genre</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.php?uc=genre&action=list">Type de genre</a>
              <a class="dropdown-item" href="#">Ajouter un genre</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Auteur</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.php?uc=auteur&action=list">Liste des auteurs</a>
              <a class="dropdown-item" href="#">Chercher un auteur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Gestion Nationalitées</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.php?uc=nationalite&action=list">Liste des nationalitées</a>
              <a class="dropdown-item" href="index.php?uc=nationalite&action=add">Ajouter une nationalitée</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Gestion des Continents</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="index.php?uc=continents&action=list">Liste des Continents</a>
              <a class="dropdown-item" href="index.php?uc=continents&action=add">Ajouter un continent</a>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


</body>