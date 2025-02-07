<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="includes/css/style.css" />
  <title>Healthify</title>
</head>
<?php
require 'includes/_dbconnect.php';

if (!isset($_SESSION['user'])) {
  header('location: /miniproject/login.php');
} else {
  $login = true;
}
?>

<body>

<?php 
require 'includes/navbar.php';
?>


  <section>
    <div class="content">
      <div class="info">
        <p>
          Welcome!
          Join us for your good health
          <span class="Healthify">Healthify</span>Feeling under the weather? We use AI to analyze your symptoms and offer disease prediction insights. This is for informational purposes only; consult a doctor for diagnosis. Get started and explore your health! 🩺
        </p>
        <!-- <button class="btn">Join</button> -->
        <a href="predictdisease.php" class="btn">Join</a>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="image/Screenshot (118).png" alt="" />
            <div class="overlay">
              <span></span>
              <h2></h2>
            </div>
          </div>


          <div class="swiper-slide">
            <img class="img-position" src="image/Screenshot (119).png" alt="" />
            <div class="overlay">

            </div>
          </div>

          <div class="swiper-slide">
            <img src="image/Screenshot (120).png" alt="" />
            <div class="overlay">
            </div>
          </div>

          <div class="swiper-slide">
            <img src="image/Screenshot (121).png" alt="" />
            <div class="overlay">
            </div>
          </div>

          <div class="swiper-slide">
            <img src="image/Screenshot (126).png" alt="" />
            <div class="overlay">
            </div>
          </div>
        </div>
      </div>
    </div>
          <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
  </section>

  <?php require 'includes/footer.php'; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
  <script src="includes/js/script.js"></script>
</body>

</html>