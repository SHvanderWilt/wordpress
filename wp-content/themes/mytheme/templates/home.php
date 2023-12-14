<?php
/* Template Name: Home Nieuws */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
  <title>Nieuwspagina</title>

  <style>
    .container mt-5 {
    flex-grow: 4; /* default 0 */
  }
  </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h2>Nieuwspagina</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Belangrijk Nieuws</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Onderwerpen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Economie</a>
          <a class="dropdown-item" href="#">Sport & Media</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Ander Nieuws</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="nieuws">
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="path-to-image.jpg" class="card-img-top" alt="Klein Artikel 1 Afbeelding">
        <div class="card-body">
          <h5 class="card-title">Klein Artikel 1 Titel</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn btn-primary">Lees Meer</a>
        </div>
      </div>
      <div class="card">
        <img src="path-to-image.jpg" class="card-img-top" alt="Klein Artikel 2 Afbeelding">
        <div class="card-body">
          <h5 class="card-title">Klein Artikel 2 Titel</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn btn-primary">Lees Meer</a>
        </div>
      </div>
      <div class="card mt-4">
        <img src="path-to-image.jpg" class="card-img-top" alt="Klein Artikel 3 Afbeelding">
        <div class="card-body">
          <h5 class="card-title">Klein Artikel 3 Titel</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn btn-primary">Lees Meer</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <img src="path-to-image.jpg" class="card-img-top" alt="Groot Artikel Afbeelding">
        <div class="card-body">
          <h5 class="card-title">Groot Artikel Titel</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#" class="btn btn-primary">Lees Meer</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
