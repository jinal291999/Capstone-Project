<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><?php                                                                                                                                                                                                            ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Healthy Diet And Yoga</title>
  <script src="https://kit.fontawesome.com/2e820cb138.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://kit.fontawesome.com/2e820cb138.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href='custom.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="/public/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="/app.js"></script>
  <script src="https://kit.fontawesome.com/2e820cb138.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= url('app.css') ?>">
</head>

<body>

  <header class="header">

    <nav class="navbar navbar-expand-sm navbar-light sticky-top" style="background-color: #4a3c3f;">
      <div class="container-fluid">
        <div class="container">
          <h2 class="navbar-icon"><img class="d-block w-100" src="../././../images/Logo.png" height="60px" width="60px"></h2>
          <nav class="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="navbar-brand" href="#home" style="color:white;">Home</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="#About" style="color:white;">About</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="/recipe/list" style="color:white;">Recipes</a>
              </li>
              <li class="nav-item">
                <a class="navbar-brand" href="/recipe/yoga" style="color:white;">Yoga</a>
              </li>
            </ul>
          </nav>
  </header>



  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
      <li data-target="#demo" data-slide-to="5"></li>
      <li data-target="#demo" data-slide-to="6"></li>
    </ul>

    <!-- The slideshow -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- <img src="{{asset('images/img2.jpg')}}"> -->
          <img class="d-block w-100" src="../././../images/imgg.jpg" alt="First slide" width="1100px" height="400px">
          <div class="carousel-caption">
            <h3>Health is Wealth</h3>
            <p>“Healthy eating is a way of life, so it's important to establish routines that are simple, realistically, and ultimately livable.” - Horace</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../././../images/Yoga4.jpg" alt="Second slide" width="1100px" height="400px">
          <div class="carousel-caption">
            <h3>Health is Wealth</h3>
            <p>"Yoga is the journey of self the self, through the self, to the self"-The Bhagvad Gita</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../././../images/img4.jpg" alt="Third slide" width="1100px" height="400px">
          <div class="carousel-caption">
            <h3>Health is Wealth</h3>
            <p> “Take care of your body. It's the only place you have to live.” - Jim Rohn</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../././../images/img6.jpg" alt="Fifth slide" width="1100px" height="400px">
          <div class="carousel-caption">
            <h3>Health is Wealth</h3>
            <p>“Your diet is a bank account. Good food choices are good investments.” - Bethenny Frankel</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../././../images/Yoga4.jpg" alt="Sixth slide" width="1100px" height="400px">
          <div class="carousel-caption">
            <h3>Health is Wealth</h3>
            <p>Meditation is the mysterious method of self-restoration...</p>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    <section >
      

    <div class="benefits">
    <h2><b>Benefits of Yoga</b></h2>
    <ul style="background-color: white;">
  <li>Yoga improves strength, balance and flexibility.</li>
  <li>Yoga helps with back pain relief.</li>
  <li>Yoga can ease arthritis symptoms.</li>
  <li>Yoga benefits heart health.</li>
  <li> Yoga relaxes you, to help you sleep better.</li>
  <li>Yoga can mean more energy and brighter moods.</li>
  <li>Yoga helps you manage stress.</li>
  <li>Yoga connects you with a supportive community. </li>
  <li>Yoga promotes better self-care.</li>
  </ul>
  <h2><b>Benefits of Eating Healthy Food</b></h2>

  <ul style="background-color: white;">
  <li>Improves Digestion</li>
  <li>Relieves Bloating</li>
  <li>Keeps Your Heart Healthy</li>
  <li>Regulates Blood Sugar</li>
  <li>Help You To Stay Active</li>
  <li>Prevents Obesity</li>
  <li>Lowers Stress Levels</li>
  <li>Controls Blood Pressure</li>
  <li>Makes Skin Glow</li>
  <li>Improved memory</li>
  <li>Weight loss</li>
  <li>Diabetes management</li>
  <li>Strong bones and teeth</li>

</ul>

</div>    
</section>
<footer class="text-center text-white" style="background-color: #4a3c3f;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3">
    © 2022 Jinal Patel
   
  </div>
  <!-- Copyright -->
</footer>


</body>

</html>