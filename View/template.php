<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNJBG-RSU</title>
    <?php include('Recursos/stylesheet.php') ?>
</head>
<body>
<header style="background-color: #37A3E7;height: 100px;">
</header>
<?php include('Recursos/menu.php') ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/images/slide.jpg" alt="First slide">
    </div>
  </div>
</div>
    <?php include('Recursos/container.php') ?>
    <?php include('View/model/card/paginador.php') ?>
    <?php include('Recursos/script.php') ?>
    <br>
</body>
</html>
