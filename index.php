<?php include('includes/header.php'); ?>

<div class="container">
    <?= alertSuccess(); ?>
</div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="main-heading">Welcome to <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <div class="underline mx-auto"></div>
                <p>
                   Welcome to DriveEasy Car Rentals, where we redefine your travel experience. Our mission, "Turn Miles into Smiles," reflects our commitment to making every journey memorable. Founded on reliability, affordability, and customer-centricity, DriveEasy is synonymous with hassle-free and enjoyable car rentals. With strategically located branches and a diverse fleet, we cater to all your travel needs. Whether it's a swift urban getaway, a family adventure, or a special occasion, DriveEasy ensures your journey is seamless and memorable. Experience the joy of driving with us – where every mile is a step closer to a smile.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="bg-car1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-white">Rent a car in few steps</h2>
                <div class="underline"></div>
                <h4 class="text-white">Drive worry free with <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <h4 class="text-white">24X7 Roadside assistance whenever you need</h4>
            </div>
            <div class="col-md-4 my-auto">
                <a href="cars.php" class="btn btn-web text-white w-100 fw-bold">Book a car now !</a>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
