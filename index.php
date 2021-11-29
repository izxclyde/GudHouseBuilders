<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
      <!-- Latest compiled and minified CSS -->
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./scripts/style.css">
  </head>
  <body>

    <header class="header">
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <?php include './shared/nav_bar.html';?>
          </nav>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/slide1.jpg" alt="Slide1" class="d-block" style="width:100%" height="570px">
      <div class="carousel-caption">
        <h3>PLACE YOUR TAG HERE 1</h3>
        <p>place your text here 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/slide2.jpg" alt="Slide2" class="d-block" style="width:100%" height="570px">
      <div class="carousel-caption">
        <h3>PLACE YOUR TAG HERE 2</h3>
        <p>PLACE YOUR TAG HERE 2</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="./img/slide3.jpg" alt="Slide3" class="d-block" style="width:100%" height="570px">
      <div class="carousel-caption">
        <h3>PLACE YOUR TAG HERE 3</h3>
        <p>PLACE YOUR TAG HERE 3</p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


    </header>


  </body>
  
</html>