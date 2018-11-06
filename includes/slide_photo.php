<?php
/**
 * Created by PhpStorm.
 * User: Daily
 * Date: 17.10.2018
 * Time: 22:06
 */
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img class="d-block w-100 " src="<?php echo BASE_URL . 'static/images/slide1.JPG' ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>341 metrów nad ziemią</h2>
            <p>Góry bardzo efektywnie ksztatują wytrwałość.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo BASE_URL . 'static/images/slide5.jpg' ?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Wakacje w natarciu</h2>
            <p>Piękne oblicze przyrody: skaliste fiordy wyłaniające się z wody.</p>
        </div>
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="<?php echo BASE_URL . 'static/images/slide6.jpg' ?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Ogród botaniczny</h2>
            <p>Nie potrzeba nic więcej, aby się zrelaksować.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>