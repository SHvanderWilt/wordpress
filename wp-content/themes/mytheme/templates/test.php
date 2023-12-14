<?php
/* Template Name: Components */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Add custom styles here */
    .custom-block {
      border-radius: 10px;
      margin-bottom: 20px;
      padding: 15px;
      background-color: #f8f9fa; /* Optional background color */
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Your Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Content Section -->
<div class="container mt-4">
  <div class="row">
    <!-- Blocks 1 and 2 -->
    <div class="col-md-6 custom-block">
      <h2>Block 1</h2>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet sollicitudin iaculis. In ultricies lacus non felis posuere, sed sagittis justo malesuada. 
        Donec in congue risus, vel fringilla augue. Fusce sit amet finibus neque. Nulla facilisi. In iaculis condimentum nibh laoreet aliquet. 
        Mauris feugiat sapien id libero vulputate, sed faucibus ante egestas. Sed ut dolor blandit sapien imperdiet tempor.
        Aliquam quis mauris id nulla blandit elementum. Maecenas nec mi dictum ipsum luctus suscipit. Nam viverra libero velit, ac dignissim velit suscipit vitae. 
      </p>
    </div>
    <div class="col-md-6 custom-block">
      <h2>Block 2</h2>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet sollicitudin iaculis. In ultricies lacus non felis posuere, sed sagittis justo malesuada. 
        Donec in congue risus, vel fringilla augue. Fusce sit amet finibus neque. Nulla facilisi. In iaculis condimentum nibh laoreet aliquet. 
        Mauris feugiat sapien id libero vulputate, sed faucibus ante egestas. Sed ut dolor blandit sapien imperdiet tempor.
        Aliquam quis mauris id nulla blandit elementum. Maecenas nec mi dictum ipsum luctus suscipit. Nam viverra libero velit, ac dignissim velit suscipit vitae. 
        Pellentesque tristique vitae elit in tempor. Duis luctus commodo massa, quis interdum nulla dictum vitae. Fusce in quam sed leo lacinia pharetra. Nulla suscipit, est sed eleifend aliquam, tellus quam imperdiet sem, 
        non bibendum turpis orci eu libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque sodales neque at lectus rhoncus tempor.
        Praesent maximus ut est ut vulputate. Maecenas ultrices aliquam consequat. Nullam facilisis velit et urna luctus, nec accumsan augue egestas. Aliquam elit nunc, posuere posuere iaculis sit amet, 
        finibus ac orci. Aenean venenatis lacinia lacus mollis tempor. Morbi pharetra lectus non lectus euismod, at pretium nibh faucibus. Duis a odio quis tortor venenatis faucibus et in quam. Phasellus interdum rhoncus felis, ut aliquet nunc finibus vel. 
        Vivamus lobortis ex vel lorem maximus, lacinia lacinia ex mollis. In hac habitasse platea dictumst. Etiam cursus facilisis bibendum. Duis pretium magna euismod ante tempor, laoreet euismod justo auctor. 
      </p>
    </div>

    <!-- Block 3 (Long Text) on the right side -->
    <div class="col-md-6 custom-block">
      <h2>Block 3 (Long Text)</h2>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet sollicitudin iaculis. In ultricies lacus non felis posuere, sed sagittis justo malesuada. 
        Donec in congue risus, vel fringilla augue. Fusce sit amet finibus neque. Nulla facilisi. In iaculis condimentum nibh laoreet aliquet. 
        Mauris feugiat sapien id libero vulputate, sed faucibus ante egestas. Sed ut dolor blandit sapien imperdiet tempor.
        Aliquam quis mauris id nulla blandit elementum. Maecenas nec mi dictum ipsum luctus suscipit. Nam viverra libero velit, ac dignissim velit suscipit vitae. 
      </p>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
